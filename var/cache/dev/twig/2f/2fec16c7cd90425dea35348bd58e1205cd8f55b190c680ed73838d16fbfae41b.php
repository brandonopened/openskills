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

/* framework/ls_doc/_add_exemplar_component.html.twig */
class __TwigTemplate_f5e3c14244efc19885d7a382ca4b27f3ec29ac7b699dbef90e8c97999df01ef5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/_add_exemplar_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/_add_exemplar_component.html.twig"));

        // line 1
        echo "<div>
    <div class=\"errors\"></div>
    <p>Add an exemplar for <b id=\"addExemplarOriginTitle\"></b>:</p>
    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Exemplar URL:</label>
            <div class=\"col-sm-9\">
                <input id=\"addExemplarFormUrl\" type=\"text\" maxlength=\"300\" class=\"form-control\" placeholder=\"http://example.com/exemplar\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"addExemplarFormAnnotation\">Annotation:</label>
            <div class=\"col-sm-9\">
                <textarea id=\"addExemplarFormAnnotation\" class=\"form-control\"></textarea>
            </div>
        </div>`
        ";
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_doc/_add_exemplar_component.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <div class=\"errors\"></div>
    <p>Add an exemplar for <b id=\"addExemplarOriginTitle\"></b>:</p>
    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Exemplar URL:</label>
            <div class=\"col-sm-9\">
                <input id=\"addExemplarFormUrl\" type=\"text\" maxlength=\"300\" class=\"form-control\" placeholder=\"http://example.com/exemplar\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"addExemplarFormAnnotation\">Annotation:</label>
            <div class=\"col-sm-9\">
                <textarea id=\"addExemplarFormAnnotation\" class=\"form-control\"></textarea>
            </div>
        </div>`
        {#
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\">Description (optional):</label>
            <div class=\"col-sm-9\">
                <input id=\"addExemplarFormDescription\" maxlength=\"300\" maxlength=\"300\" type=\"text\" class=\"form-control\" placeholder=\"\">
            </div>
        </div>
        #}
    </div>
</div>
", "framework/ls_doc/_add_exemplar_component.html.twig", "/var/www/html/templates/framework/ls_doc/_add_exemplar_component.html.twig");
    }
}
