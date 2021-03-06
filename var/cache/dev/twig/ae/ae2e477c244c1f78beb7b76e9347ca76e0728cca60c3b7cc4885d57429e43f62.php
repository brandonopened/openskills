<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @CsaGuzzle/css/screen.min.css */
class __TwigTemplate_864a2296fe1be00f06899cbb6a4d004ba511b7d9f03781c0a7f298cacf8859ed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/css/screen.min.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CsaGuzzle/css/screen.min.css"));

        // line 1
        echo "code[class*=language-],pre[class*=language-]{color:#f8f8f2;background:none;text-shadow:0 1px rgba(0,0,0,.3);font-family:Consolas,Monaco,Andale Mono,Ubuntu Mono,monospace;font-size:1em;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;word-wrap:normal;line-height:1.5;-moz-tab-size:4;-o-tab-size:4;tab-size:4;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none}pre[class*=language-]{padding:1em;margin:.5em 0;overflow:auto;border-radius:.3em}:not(pre)>code[class*=language-],pre[class*=language-]{background:#272822}:not(pre)>code[class*=language-]{padding:.1em;border-radius:.3em;white-space:normal}.token.cdata,.token.comment,.token.doctype,.token.prolog{color:#708090}.token.punctuation{color:#f8f8f2}.namespace{opacity:.7}.token.constant,.token.deleted,.token.property,.token.symbol,.token.tag{color:#f92672}.token.boolean,.token.number{color:#ae81ff}.token.attr-name,.token.builtin,.token.char,.token.inserted,.token.selector,.token.string{color:#a6e22e}.language-css .token.string,.style .token.string,.token.entity,.token.operator,.token.url,.token.variable{color:#f8f8f2}.token.atrule,.token.attr-value,.token.class-name,.token.function{color:#e6db74}.token.keyword{color:#66d9ef}.token.important,.token.regex{color:#fd971f}.token.bold,.token.important{font-weight:700}.token.italic{font-style:italic}.token.entity{cursor:help}.progress{background-color:#e0e0e0;padding:1px;height:20px}.progress .progress-bar{height:20px;float:left;text-align:center;color:#fff}.progress .progress-bar-warning{background:#f0ad4e}.progress .progress-bar-warning.progress-bar-striped{background:repeating-linear-gradient(120deg,#f0ad4e,#f0ad4e 10px,#ec971f 0,#ec971f 20px)}.progress .progress-bar-success{background:#5cb85c}.progress .progress-bar-success.progress-bar-striped{background:repeating-linear-gradient(120deg,#5cb85c,#5cb85c 10px,#449d44 0,#449d44 20px)}.accordion .accordion-header{cursor:pointer}.accordion .accordion-content{display:none;transition:all 1s ease}.accordion .accordion-content.expanded{display:block}.badge{padding:2px 9px;font-size:.75rem;font-weight:700;white-space:nowrap;color:#fff;background-color:#999;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px}.badge.cache.hit{background-color:#5cb85c}.badge.cache.miss{background-color:#5bc0de}.badge.mock.replay{background-color:#5cb85c}.badge.mock.record{background-color:#5bc0de}.badge.status-code.server-error{background-color:#d9534f}.badge.status-code.client-error{background-color:#f0ad4e}.badge.status-code.redirection{background-color:#337ab7}.badge.status-code.success{background-color:#5cb85c}.badge.status-code.informational{background-color:#5bc0de}.badge.duration.error,.badge.status-code.unknown{background-color:#d9534f}.badge.duration.warning{background-color:#f0ad4e}.badge.duration.success{background-color:#5cb85c}.call{border:1px solid #e0e0e0;margin:5px}.call .get{background-color:#0f6ab4;color:#fff}.call .get a{color:#fff}.call .get:hover{background:#1386e3}.call .post{background-color:#10a54a;color:#fff}.call .post a{color:#fff}.call .post:hover{background:#15d35f}.call .put{background-color:#c5862b;color:#fff}.call .put a{color:#fff}.call .put:hover{background:#d89e4b}.call .delete{background-color:#a41e22;color:#fff}.call .delete a{color:#fff}.call .delete:hover{background:#cf262b}.call .patch{background-color:#a41ee2;color:#fff}.call .patch a{color:#fff}.call .patch:hover{background:#b64be8}.call .link{background-color:#c3d448;color:#fff}.call .link a{color:#fff}.call .link:hover{background:#d1de71}.call .unlink{background-color:#ff8438;color:#fff}.call .unlink a{color:#fff}.call .unlink:hover{background:#ffa46b}.call .other{background-color:#000;color:#fff}.call .other a{color:#fff}.call .other:hover{background:#1a1a1a}.call>*{padding:5px}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@CsaGuzzle/css/screen.min.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("code[class*=language-],pre[class*=language-]{color:#f8f8f2;background:none;text-shadow:0 1px rgba(0,0,0,.3);font-family:Consolas,Monaco,Andale Mono,Ubuntu Mono,monospace;font-size:1em;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;word-wrap:normal;line-height:1.5;-moz-tab-size:4;-o-tab-size:4;tab-size:4;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none}pre[class*=language-]{padding:1em;margin:.5em 0;overflow:auto;border-radius:.3em}:not(pre)>code[class*=language-],pre[class*=language-]{background:#272822}:not(pre)>code[class*=language-]{padding:.1em;border-radius:.3em;white-space:normal}.token.cdata,.token.comment,.token.doctype,.token.prolog{color:#708090}.token.punctuation{color:#f8f8f2}.namespace{opacity:.7}.token.constant,.token.deleted,.token.property,.token.symbol,.token.tag{color:#f92672}.token.boolean,.token.number{color:#ae81ff}.token.attr-name,.token.builtin,.token.char,.token.inserted,.token.selector,.token.string{color:#a6e22e}.language-css .token.string,.style .token.string,.token.entity,.token.operator,.token.url,.token.variable{color:#f8f8f2}.token.atrule,.token.attr-value,.token.class-name,.token.function{color:#e6db74}.token.keyword{color:#66d9ef}.token.important,.token.regex{color:#fd971f}.token.bold,.token.important{font-weight:700}.token.italic{font-style:italic}.token.entity{cursor:help}.progress{background-color:#e0e0e0;padding:1px;height:20px}.progress .progress-bar{height:20px;float:left;text-align:center;color:#fff}.progress .progress-bar-warning{background:#f0ad4e}.progress .progress-bar-warning.progress-bar-striped{background:repeating-linear-gradient(120deg,#f0ad4e,#f0ad4e 10px,#ec971f 0,#ec971f 20px)}.progress .progress-bar-success{background:#5cb85c}.progress .progress-bar-success.progress-bar-striped{background:repeating-linear-gradient(120deg,#5cb85c,#5cb85c 10px,#449d44 0,#449d44 20px)}.accordion .accordion-header{cursor:pointer}.accordion .accordion-content{display:none;transition:all 1s ease}.accordion .accordion-content.expanded{display:block}.badge{padding:2px 9px;font-size:.75rem;font-weight:700;white-space:nowrap;color:#fff;background-color:#999;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px}.badge.cache.hit{background-color:#5cb85c}.badge.cache.miss{background-color:#5bc0de}.badge.mock.replay{background-color:#5cb85c}.badge.mock.record{background-color:#5bc0de}.badge.status-code.server-error{background-color:#d9534f}.badge.status-code.client-error{background-color:#f0ad4e}.badge.status-code.redirection{background-color:#337ab7}.badge.status-code.success{background-color:#5cb85c}.badge.status-code.informational{background-color:#5bc0de}.badge.duration.error,.badge.status-code.unknown{background-color:#d9534f}.badge.duration.warning{background-color:#f0ad4e}.badge.duration.success{background-color:#5cb85c}.call{border:1px solid #e0e0e0;margin:5px}.call .get{background-color:#0f6ab4;color:#fff}.call .get a{color:#fff}.call .get:hover{background:#1386e3}.call .post{background-color:#10a54a;color:#fff}.call .post a{color:#fff}.call .post:hover{background:#15d35f}.call .put{background-color:#c5862b;color:#fff}.call .put a{color:#fff}.call .put:hover{background:#d89e4b}.call .delete{background-color:#a41e22;color:#fff}.call .delete a{color:#fff}.call .delete:hover{background:#cf262b}.call .patch{background-color:#a41ee2;color:#fff}.call .patch a{color:#fff}.call .patch:hover{background:#b64be8}.call .link{background-color:#c3d448;color:#fff}.call .link a{color:#fff}.call .link:hover{background:#d1de71}.call .unlink{background-color:#ff8438;color:#fff}.call .unlink a{color:#fff}.call .unlink:hover{background:#ffa46b}.call .other{background-color:#000;color:#fff}.call .other a{color:#fff}.call .other:hover{background:#1a1a1a}.call>*{padding:5px}", "@CsaGuzzle/css/screen.min.css", "/var/www/html/vendor/csa/guzzle-bundle/src/Resources/views/css/screen.min.css");
    }
}
