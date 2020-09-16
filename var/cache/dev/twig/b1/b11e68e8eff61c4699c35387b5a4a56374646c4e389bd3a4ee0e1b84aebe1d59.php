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

/* framework/doc_tree/_load_external_document_component.html.twig */
class __TwigTemplate_19319291b0ff282ea287a5e6f899511b270bd20070f513a68962f5ec3589823d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/_load_external_document_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/_load_external_document_component.html.twig"));

        // line 1
        echo "<div>
    <p>Enter the CASE® URL for the document you’d like to load:</p>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-1 control-label\" for=\"loadExternalDocumentUrl\">URL:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"loadExternalDocumentUrlInput\" name=\"loadExternalDocumentUrlInput\" value=\"\" />
            </div>
        </div>
    </div>

    <p style=\"margin-top:25px\"><b>Example:</b> To load the Mathematics: Georgia Standards of Excellent standards from Georgia's OpenSALT™ server, you can use the following url:</p>
    <ul>
        <li>https://case.georgiastandards.org/ims/case/v1p0/CFPackages/23a8e45a-9d5a-11e7-81bc-064e21a83c7c</li>
    </ul>

    Thus the format to use is: http://[CASE server]/ims/case/v1p0/CFPackages/[framework identifier]
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/_load_external_document_component.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <p>Enter the CASE® URL for the document you’d like to load:</p>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-1 control-label\" for=\"loadExternalDocumentUrl\">URL:</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"loadExternalDocumentUrlInput\" name=\"loadExternalDocumentUrlInput\" value=\"\" />
            </div>
        </div>
    </div>

    <p style=\"margin-top:25px\"><b>Example:</b> To load the Mathematics: Georgia Standards of Excellent standards from Georgia's OpenSALT™ server, you can use the following url:</p>
    <ul>
        <li>https://case.georgiastandards.org/ims/case/v1p0/CFPackages/23a8e45a-9d5a-11e7-81bc-064e21a83c7c</li>
    </ul>

    Thus the format to use is: http://[CASE server]/ims/case/v1p0/CFPackages/[framework identifier]
</div>
", "framework/doc_tree/_load_external_document_component.html.twig", "/var/www/html/templates/framework/doc_tree/_load_external_document_component.html.twig");
    }
}
