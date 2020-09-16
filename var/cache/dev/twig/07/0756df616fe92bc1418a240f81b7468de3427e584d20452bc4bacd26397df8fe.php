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

/* framework/ls_association/_new_association_component.html.twig */
class __TwigTemplate_83188c9a6839842c3c78bce8254fca47df3007e7cddd803fc842806570f88767 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_association/_new_association_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_association/_new_association_component.html.twig"));

        // line 1
        echo "<div>
    <div class=\"container-fluid\" style=\"margin-bottom:15px\"><div class=\"row\">
        <div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"lsAssociationOriginDisplay\"></div></div><!-- 
     --><div class=\"col-sm-2 vcenter\" style=\"font-size:24px; text-align:center; line-height:24px\"><span id=\"lsAssociationDirection\" class=\"glyphicon glyphicon-arrow-right\" aria-hidden=\"true\"></span><br><button id=\"lsAssociationSwitchDirection\" class='btn btn-default btn-xs'>Switch</button></div><!-- 
     --><div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"lsAssociationDestinationDisplay\"></div></div>
    </div></div>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label required\" for=\"associationFormType\">Association Type</label>
            <div class=\"col-sm-9\">
                <select id=\"associationFormType\" class=\"form-control\">
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"associationFormAnnotation\">Annotation</label>
            <div class=\"col-sm-9\">
                <textarea id=\"associationFormAnnotation\" class=\"form-control\"></textarea>
            </div>
        </div>
        <div id=\"associationFormGroupHolderOuter\" class=\"form-group\" style=\"display:none\">
            <label class=\"col-sm-3 control-label required\" for=\"associationFormGroup\">Association Group</label>
            <div class=\"col-sm-9\" id=\"associationFormGroupHolder\"></div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_association/_new_association_component.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <div class=\"container-fluid\" style=\"margin-bottom:15px\"><div class=\"row\">
        <div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"lsAssociationOriginDisplay\"></div></div><!-- 
     --><div class=\"col-sm-2 vcenter\" style=\"font-size:24px; text-align:center; line-height:24px\"><span id=\"lsAssociationDirection\" class=\"glyphicon glyphicon-arrow-right\" aria-hidden=\"true\"></span><br><button id=\"lsAssociationSwitchDirection\" class='btn btn-default btn-xs'>Switch</button></div><!-- 
     --><div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"lsAssociationDestinationDisplay\"></div></div>
    </div></div>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label required\" for=\"associationFormType\">Association Type</label>
            <div class=\"col-sm-9\">
                <select id=\"associationFormType\" class=\"form-control\">
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"associationFormAnnotation\">Annotation</label>
            <div class=\"col-sm-9\">
                <textarea id=\"associationFormAnnotation\" class=\"form-control\"></textarea>
            </div>
        </div>
        <div id=\"associationFormGroupHolderOuter\" class=\"form-group\" style=\"display:none\">
            <label class=\"col-sm-3 control-label required\" for=\"associationFormGroup\">Association Group</label>
            <div class=\"col-sm-9\" id=\"associationFormGroupHolder\"></div>
        </div>
    </div>
</div>
", "framework/ls_association/_new_association_component.html.twig", "/var/www/html/templates/framework/ls_association/_new_association_component.html.twig");
    }
}
