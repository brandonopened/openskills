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

/* uri/found_uri.html.twig */
class __TwigTemplate_9e0f6d3f1c8c5d365952ea6e326aee8672419c39dba71bc86542f293193a6570 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "uri/found_uri.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "uri/found_uri.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "uri/found_uri.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p class=\"clearfix\">
        ";
        // line 5
        $context["objectTypes"] = ["LsDoc" => "CFDocument", "LsItem" => "CFItem", "LsAssociation" => "CFAssociation", "CfRubric" => "CFRubric", "CfRubricCriterion" => "CFRubricCriterion", "CfRubricCriterionLevel" => "CFRubricCriterionLevel", "LsDefAssociationGrouping" => "CFAssociationGrouping", "LsDefItemType" => "CFItemType", "LsDefConcept" => "CFConcept", "LsDefLicence" => "CFLicense", "LsDefSubject" => "CFSubject"];
        // line 18
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["objectTypes"] ?? null), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 18, $this->source); })()), [], "array", true, true, false, 18)) {
            // line 19
            echo "            ";
            $context["objectType"] = twig_get_attribute($this->env, $this->source, (isset($context["objectTypes"]) || array_key_exists("objectTypes", $context) ? $context["objectTypes"] : (function () { throw new RuntimeError('Variable "objectTypes" does not exist.', 19, $this->source); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 19, $this->source); })()), [], "array", false, false, false, 19);
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "            ";
            $context["objectType"] = "Resource";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if ((isset($context["isPackage"]) || array_key_exists("isPackage", $context) ? $context["isPackage"] : (function () { throw new RuntimeError('Variable "isPackage" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "            <strong>CFPackage</strong> found for the following CFDocument:
        ";
        } else {
            // line 26
            echo "           <strong>";
            echo twig_escape_filter($this->env, (isset($context["objectType"]) || array_key_exists("objectType", $context) ? $context["objectType"] : (function () { throw new RuntimeError('Variable "objectType" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "</strong> found:
        ";
        }
        // line 28
        echo "        ";
        if (((isset($context["objectType"]) || array_key_exists("objectType", $context) ? $context["objectType"] : (function () { throw new RuntimeError('Variable "objectType" does not exist.', 28, $this->source); })()) == "CFDocument")) {
            // line 29
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 29, $this->source); })()))) {
                // line 30
                echo "                <a class=\"btn btn-default pull-right\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 30, $this->source); })()), "slug", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\">Show in tree view</a>
            ";
            }
            // line 32
            echo "        ";
        } elseif (((isset($context["objectType"]) || array_key_exists("objectType", $context) ? $context["objectType"] : (function () { throw new RuntimeError('Variable "objectType" does not exist.', 32, $this->source); })()) == "CFItem")) {
            // line 33
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 33, $this->source); })()), "lsDoc", [], "any", false, false, false, 33))) {
                // line 34
                echo "                <a class=\"btn btn-default pull-right\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_item_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">Show in tree view</a>
            ";
            }
            // line 36
            echo "        ";
        } elseif (((isset($context["objectType"]) || array_key_exists("objectType", $context) ? $context["objectType"] : (function () { throw new RuntimeError('Variable "objectType" does not exist.', 36, $this->source); })()) == "CFAssociation")) {
            // line 37
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("view", twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 37, $this->source); })()), "lsDoc", [], "any", false, false, false, 37))) {
                // line 38
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "originLsItem", [], "any", false, true, false, 38), "id", [], "any", true, true, false, 38) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 38, $this->source); })()), "originLsItem", [], "any", false, false, false, 38), "lsDoc", [], "any", false, false, false, 38) == twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 38, $this->source); })()), "lsDoc", [], "any", false, false, false, 38)))) {
                    // line 39
                    echo "                    <a class=\"btn btn-default pull-right\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_item_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 39, $this->source); })()), "origin", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\">Show in tree view</a>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 40
($context["obj"] ?? null), "originLsDoc", [], "any", false, true, false, 40), "id", [], "any", true, true, false, 40) && (twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 40, $this->source); })()), "originLsDoc", [], "any", false, false, false, 40) == twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 40, $this->source); })()), "lsDoc", [], "any", false, false, false, 40)))) {
                    // line 41
                    echo "                    <a class=\"btn btn-default pull-right\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 41, $this->source); })()), "origin", [], "any", false, false, false, 41), "slug", [], "any", false, false, false, 41)]), "html", null, true);
                    echo "\">Show in tree view</a>
                ";
                }
                // line 43
                echo "            ";
            }
            // line 44
            echo "        ";
        }
        // line 45
        echo "    </p>

    ";
        // line 47
        echo twig_include($this->env, $context, "uri/_table.html.twig", ["data" => (isset($context["serialized"]) || array_key_exists("serialized", $context) ? $context["serialized"] : (function () { throw new RuntimeError('Variable "serialized" does not exist.', 47, $this->source); })()), "parent" => "top"]);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 52
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "humanCodingScheme", [], "any", true, true, false, 52)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 52, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 52), "html", null, true);
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 53
($context["obj"] ?? null), "shortStatement", [], "any", true, true, false, 53)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 53, $this->source); })()), "shortStatement", [], "any", false, false, false, 53), "html", null, true);
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 54
($context["obj"] ?? null), "title", [], "any", true, true, false, 54)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 54, $this->source); })()), "title", [], "any", false, false, false, 54), "html", null, true);
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 55
($context["obj"] ?? null), "name", [], "any", true, true, false, 55)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["obj"]) || array_key_exists("obj", $context) ? $context["obj"] : (function () { throw new RuntimeError('Variable "obj" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true);
            echo "
    ";
        } else {
            // line 56
            echo "Resource
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "uri/found_uri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 56,  197 => 55,  192 => 54,  187 => 53,  181 => 52,  171 => 51,  158 => 47,  154 => 45,  151 => 44,  148 => 43,  142 => 41,  140 => 40,  135 => 39,  132 => 38,  129 => 37,  126 => 36,  120 => 34,  117 => 33,  114 => 32,  108 => 30,  105 => 29,  102 => 28,  96 => 26,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}
    <p class=\"clearfix\">
        {% set objectTypes = {
            'LsDoc': 'CFDocument',
            'LsItem': 'CFItem',
            'LsAssociation': 'CFAssociation',
            'CfRubric': 'CFRubric',
            'CfRubricCriterion': 'CFRubricCriterion',
            'CfRubricCriterionLevel': 'CFRubricCriterionLevel',
            'LsDefAssociationGrouping': 'CFAssociationGrouping',
            'LsDefItemType': 'CFItemType',
            'LsDefConcept': 'CFConcept',
            'LsDefLicence': 'CFLicense',
            'LsDefSubject': 'CFSubject',
        } %}
        {% if objectTypes[class] is defined %}
            {% set objectType = objectTypes[class] %}
        {% else %}
            {% set objectType = 'Resource' %}
        {% endif %}
        {% if isPackage %}
            <strong>CFPackage</strong> found for the following CFDocument:
        {% else %}
           <strong>{{ objectType }}</strong> found:
        {% endif %}
        {% if objectType == 'CFDocument' %}
            {% if is_granted('view', obj) %}
                <a class=\"btn btn-default pull-right\" href=\"{{ path('doc_tree_view', {'slug': obj.slug}) }}\">Show in tree view</a>
            {% endif %}
        {% elseif objectType == 'CFItem' %}
            {% if is_granted('view', obj.lsDoc) %}
                <a class=\"btn btn-default pull-right\" href=\"{{ path('doc_tree_item_view', {'id': obj.id}) }}\">Show in tree view</a>
            {% endif %}
        {% elseif objectType == 'CFAssociation' %}
            {% if is_granted('view', obj.lsDoc) %}
                {% if obj.originLsItem.id is defined and obj.originLsItem.lsDoc == obj.lsDoc %}
                    <a class=\"btn btn-default pull-right\" href=\"{{ path('doc_tree_item_view', {'id': obj.origin.id}) }}\">Show in tree view</a>
                {% elseif obj.originLsDoc.id is defined and obj.originLsDoc == obj.lsDoc %}
                    <a class=\"btn btn-default pull-right\" href=\"{{ path('doc_tree_view', {'slug': obj.origin.slug}) }}\">Show in tree view</a>
                {% endif %}
            {% endif %}
        {% endif %}
    </p>

    {{ include('uri/_table.html.twig', {data: serialized, parent: 'top'}) }}

{% endblock %}

{% block title %}
    {% if obj.humanCodingScheme is defined %}{{ obj.humanCodingScheme }}
    {% elseif obj.shortStatement is defined %}{{ obj.shortStatement }}
    {% elseif obj.title is defined %}{{ obj.title }}
    {% elseif obj.name is defined %}{{ obj.name }}
    {% else %}Resource
    {% endif %}
{% endblock %}

", "uri/found_uri.html.twig", "/var/www/html/templates/uri/found_uri.html.twig");
    }
}
