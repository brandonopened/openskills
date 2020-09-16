<?php

namespace App\Entity\Framework;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * LsDefLicence
 *
 * @ORM\Table(name="ls_def_licence")
 * @ORM\Entity(repositoryClass="App\Repository\Framework\LsDefLicenceRepository")
 *
 * @Serializer\ExclusionPolicy("all")
 */
class LsDefLicence extends AbstractLsDefinition implements CaseApiInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="licence_text", type="text")
     *
     * @Serializer\Expose()
     * @Serializer\SerializedName("licenseText")
     */
    private $licenceText;


    /**
     * @return string
     */
    public function getLicenceText() {
        return $this->licenceText;
    }

    /**
     * @param string $licenceText
     *
     * @return LsDefLicence
     */
    public function setLicenceText($licenceText) {
        $this->licenceText = $licenceText;
        return $this;
    }
}
