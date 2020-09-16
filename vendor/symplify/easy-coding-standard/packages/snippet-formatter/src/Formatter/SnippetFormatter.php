<?php

declare(strict_types=1);

namespace Symplify\EasyCodingStandard\SnippetFormatter\Formatter;

use Nette\Utils\Strings;
use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor;
use Symplify\EasyCodingStandard\SnippetFormatter\Provider\CurrentParentFileInfoProvider;
use Symplify\SmartFileSystem\SmartFileInfo;
use Symplify\SmartFileSystem\SmartFileSystem;
use Throwable;

/**
 * @see \Symplify\EasyCodingStandard\SnippetFormatter\Tests\Markdown\MarkdownSnippetFormatterTest
 * @see \Symplify\EasyCodingStandard\SnippetFormatter\Tests\HeredocNowdoc\HereNowDocSnippetFormatterTest
 */
final class SnippetFormatter
{
    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;

    /**
     * @var FixerFileProcessor
     */
    private $fixerFileProcessor;

    /**
     * @var SniffFileProcessor
     */
    private $sniffFileProcessor;

    /**
     * @var CurrentParentFileInfoProvider
     */
    private $currentParentFileInfoProvider;

    public function __construct(
        SmartFileSystem $smartFileSystem,
        FixerFileProcessor $fixerFileProcessor,
        SniffFileProcessor $sniffFileProcessor,
        CurrentParentFileInfoProvider $currentParentFileInfoProvider
    ) {
        $this->smartFileSystem = $smartFileSystem;
        $this->fixerFileProcessor = $fixerFileProcessor;
        $this->sniffFileProcessor = $sniffFileProcessor;
        $this->currentParentFileInfoProvider = $currentParentFileInfoProvider;
    }

    public function format(SmartFileInfo $fileInfo, string $snippetRegex): string
    {
        $this->currentParentFileInfoProvider->setParentFileInfo($fileInfo);

        return (string) Strings::replace($fileInfo->getContents(), $snippetRegex, function ($match): string {
            return $this->fixContentAndPreserveFormatting($match);
        });
    }

    /**
     * @param string[] $match
     */
    private function fixContentAndPreserveFormatting(array $match): string
    {
        return rtrim($match['opening'], PHP_EOL) . PHP_EOL
            . $this->fixContent($match['content'])
            . ltrim($match['closing'], PHP_EOL);
    }

    private function fixContent(string $content): string
    {
        $content = trim($content);
        $key = md5($content);

        /** @var string $temporaryFilePath */
        $temporaryFilePath = sys_get_temp_dir() . '/ecs_temp/' . sprintf('php-code-%s.php', $key);

        $hasPreviouslyOpeningPHPTag = true;
        if (! Strings::startsWith($content, '<?php')) {
            $content = '<?php' . PHP_EOL . $content;
            $hasPreviouslyOpeningPHPTag = false;
        }

        $fileContent = $content;

        $this->smartFileSystem->dumpFile($temporaryFilePath, $fileContent);
        $temporaryFileInfo = new SmartFileInfo($temporaryFilePath);

        try {
            $this->fixerFileProcessor->processFile($temporaryFileInfo);
            $this->sniffFileProcessor->processFile($temporaryFileInfo);

            $fileContent = $temporaryFileInfo->getContents();
        } catch (Throwable $throwable) {
            // Skipped parsed error when processing php temporaryFile
        } finally {
            // remove temporary temporaryFile
            $this->smartFileSystem->remove($temporaryFilePath);
        }

        if (! $hasPreviouslyOpeningPHPTag) {
            $fileContent = substr($fileContent, 6);
        }

        return rtrim($fileContent, PHP_EOL) . PHP_EOL;
    }
}
