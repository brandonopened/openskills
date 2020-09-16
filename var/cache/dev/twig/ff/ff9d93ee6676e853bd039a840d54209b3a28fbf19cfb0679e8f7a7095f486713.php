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

/* framework/ls_association/_edit_association_component.html.twig */
class __TwigTemplate_989d95f48b6835e04799909c1fc40df8c3a2f08669b02fedb98b7c3ca035f386 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_association/_edit_association_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_association/_edit_association_component.html.twig"));

        // line 1
        echo "<div>
    <div class=\"container-fluid\" style=\"margin-bottom:15px\"><div class=\"row\">
        <div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"editLsAssociationOriginDisplay\"></div></div><!--
     --><div class=\"col-sm-2 vcenter\" style=\"font-size:24px; text-align:center; line-height:24px\"><span id=\"editLsAssociationDirection\" class=\"glyphicon glyphicon-arrow-right\" aria-hidden=\"true\"></span><br><button id=\"editLsAssociationSwitchDirection\" class='btn btn-default btn-xs'>Switch</button></div><!--
     --><div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"editLsAssociationDestinationDisplay\"></div></div>
    </div></div>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label required\" for=\"editAssociationFormType\">Association Type</label>
            <div class=\"col-sm-9\">
                <select id=\"editAssociationFormType\" class=\"form-control\">
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"editAssociationFormAnnotation\">Annotation</label>
            <div class=\"col-sm-9\">
                <textarea id=\"editAssociationFormAnnotation\" class=\"form-control\"></textarea>
            </div>
        </div>
        <div id=\"editAssociationFormGroupHolderOuter\" class=\"form-group\" style=\"display:none\">
            <label class=\"col-sm-3 control-label required\" for=\"editAssociationFormGroup\">Association Group</label>
            <div class=\"col-sm-9\" id=\"editAssociationFormGroupHolder\"></div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_association/_edit_association_component.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <div class=\"container-fluid\" style=\"margin-bottom:15px\"><div class=\"row\">
        <div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"editLsAssociationOriginDisplay\"></div></div><!--
     --><div class=\"col-sm-2 vcenter\" style=\"font-size:24px; text-align:center; line-height:24px\"><span id=\"editLsAssociationDirection\" class=\"glyphicon glyphicon-arrow-right\" aria-hidden=\"true\"></span><br><button id=\"editLsAssociationSwitchDirection\" class='btn btn-default btn-xs'>Switch</button></div><!--
     --><div class=\"col-sm-5 vcenter\"><div class=\"lsAssociationItemDisplay\" id=\"editLsAssociationDestinationDisplay\"></div></div>
    </div></div>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label required\" for=\"editAssociationFormType\">Association Type</label>
            <div class=\"col-sm-9\">
                <select id=\"editAssociationFormType\" class=\"form-control\">
                </select>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"editAssociationFormAnnotation\">Annotation</label>
            <div class=\"col-sm-9\">
                <textarea id=\"editAssociationFormAnnotation\" class=\"form-control\"></textarea>
            </div>
        </div>
        <div id=\"editAssociationFormGroupHolderOuter\" class=\"form-group\" style=\"display:none\">
            <label class=\"col-sm-3 control-label required\" for=\"editAssociationFormGroup\">Association Group</label>
            <div class=\"col-sm-9\" id=\"editAssociationFormGroupHolder\"></div>
        </div>
    </div>
</div>
", "framework/ls_association/_edit_association_component.html.twig", "/var/www/html/templates/framework/ls_association/_edit_association_component.html.twig");
    }
}
