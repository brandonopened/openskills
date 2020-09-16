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

/* framework/doc_tree/export_association.json.twig */
class __TwigTemplate_862c58079f73c38c50a43360373f313b06580c2c7b6ab76b6a4233e4da470379 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_association.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_association.json.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "{
";
        // line 4
        echo "\"id\": ";
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4));
        echo ",
";
        // line 6
        echo "\"identifier\": ";
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 6, $this->source); })()), "identifier", [], "any", false, false, false, 6));
        echo ",
";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 8, $this->source); })()), "group", [], "any", false, false, false, 8))) {
            // line 10
            echo "\"groupId\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 10, $this->source); })()), "group", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10));
            echo ",
";
        }
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 12, $this->source); })()), "sequenceNumber", [], "any", false, false, false, 12))) {
            // line 13
            echo "\"seq\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 13, $this->source); })()), "sequenceNumber", [], "any", false, false, false, 13));
            echo ",
";
        }
        // line 16
        echo "\"origin\": {
    \"doc\": ";
        // line 17
        echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 17), "lsDocIdentifier", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 17), "lsDocIdentifier", [], "any", false, false, false, 17), "?")) : ("?")));
        echo ",
    \"item\": ";
        // line 18
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 18, $this->source); })()), "originNodeIdentifier", [], "any", false, false, false, 18));
        echo ",
    \"uri\": ";
        // line 19
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getUriForIdentifier(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 19, $this->source); })()), "originNodeIdentifier", [], "any", false, false, false, 19)));
        echo "
},
\"type\": ";
        // line 21
        echo json_encode(twig_replace_filter((twig_lower_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), 0, 1)) . twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), 1)), [" " => ""]));
        echo ",
\"dest\": {
";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23) == "Exemplar")) {
            // line 24
            echo "    \"doc\": \"-\",
    \"item\": ";
            // line 25
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 25, $this->source); })()), "destinationNodeIdentifier", [], "any", false, false, false, 25));
            echo ",
    \"uri\": ";
            // line 26
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 26, $this->source); })()), "destinationNodeUri", [], "any", false, false, false, 26));
            echo "
";
        } else {
            // line 28
            echo "    \"doc\": ";
            echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 28), "lsDocIdentifier", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 28), "lsDocIdentifier", [], "any", false, false, false, 28), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 28), "identifier", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 28), "identifier", [], "any", false, false, false, 28), "?")) : ("?")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 28), "identifier", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 28), "identifier", [], "any", false, false, false, 28), "?")) : ("?")))));
            echo ",
    \"item\": ";
            // line 29
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 29, $this->source); })()), "destinationNodeIdentifier", [], "any", false, false, false, 29));
            echo ",
    \"uri\": ";
            // line 30
            echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getUriForIdentifier(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 30, $this->source); })()), "destinationNodeIdentifier", [], "any", false, false, false, 30)));
            echo "
";
        }
        // line 32
        echo "},
";
        // line 33
        if ((((twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "extra", [], "any", true, true, false, 33) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 33, $this->source); })()), "extra", [], "any", false, false, false, 33))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "extra", [], "any", false, true, false, 33), "customFields", [], "any", true, true, false, 33)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 33, $this->source); })()), "extra", [], "any", false, false, false, 33), "customFields", [], "any", false, false, false, 33)))) {
            // line 34
            echo "\"customFields\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 34, $this->source); })()), "extra", [], "any", false, false, false, 34), "customFields", [], "any", false, false, false, 34));
            echo ",
";
        }
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 36, $this->source); })()), "subtype", [], "any", false, false, false, 36))) {
            // line 37
            echo "\"subtype\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 37, $this->source); })()), "subtype", [], "any", false, false, false, 37));
            echo ",
";
        }
        // line 39
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 39, $this->source); })()), "annotation", [], "any", false, false, false, 39))) {
            // line 40
            echo "\"annotation\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 40, $this->source); })()), "annotation", [], "any", false, false, false, 40));
            echo ",
";
        }
        // line 42
        echo "\"mod\": ";
        echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 42, $this->source); })()), "updatedAt", [], "any", false, false, false, 42), "c"), ["+00:00" => ""]));
        echo "
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/export_association.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 42,  162 => 40,  160 => 39,  154 => 37,  152 => 36,  146 => 34,  144 => 33,  141 => 32,  136 => 30,  132 => 29,  127 => 28,  122 => 26,  118 => 25,  115 => 24,  113 => 23,  108 => 21,  103 => 19,  99 => 18,  95 => 17,  92 => 16,  86 => 13,  84 => 12,  78 => 10,  76 => 8,  71 => 6,  66 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
{
{# Include id #}
\"id\": {{ lsAssociation.id |json_encode |raw }},
{# Leave out CFDocumentURI; we have that elsewhere in the package #}
\"identifier\": {{ lsAssociation.identifier |json_encode |raw }},
{# Leave out uri; we can construct that from the CFDocumentURI and the identifier #}
{% if lsAssociation.group is not null %}
{# export lsAssociation.group as groupId (the group's internal id), instead of CFAssociationGroupingURI; we'll pull the group info from the package #}
\"groupId\": {{ lsAssociation.group.id |json_encode |raw }},
{% endif %}
{% if lsAssociation.sequenceNumber is not null %}
\"seq\": {{ lsAssociation.sequenceNumber |json_encode |raw }},
{% endif %}
{# Simplify origin and destination data #}
\"origin\": {
    \"doc\": {{ lsAssociation.originLsItem.lsDocIdentifier |default(\"?\") |json_encode |raw }},
    \"item\": {{ lsAssociation.originNodeIdentifier |json_encode |raw }},
    \"uri\": {{ uri_for_identifier(lsAssociation.originNodeIdentifier) |json_encode |raw }}
},
\"type\": {{ (lsAssociation.type|slice(0,1)|lower~lsAssociation.type|slice(1))|replace({' ': ''}) |json_encode |raw }},
\"dest\": {
{% if lsAssociation.type == 'Exemplar' %}
    \"doc\": \"-\",
    \"item\": {{ lsAssociation.destinationNodeIdentifier |json_encode |raw }},
    \"uri\": {{ lsAssociation.destinationNodeUri |json_encode | raw }}
{% else %}
    \"doc\": {{ lsAssociation.destinationLsItem.lsDocIdentifier |default(lsAssociation.destinationLsDoc.identifier |default(\"?\")) |json_encode |raw }},
    \"item\": {{ lsAssociation.destinationNodeIdentifier |json_encode |raw }},
    \"uri\": {{ uri_for_identifier(lsAssociation.destinationNodeIdentifier) |json_encode |raw }}
{% endif %}
},
{% if lsAssociation.extra is defined and lsAssociation.extra is not empty and lsAssociation.extra.customFields is defined and lsAssociation.extra.customFields is not empty %}
\"customFields\": {{ lsAssociation.extra.customFields |json_encode |raw }},
{% endif %}
{% if lsAssociation.subtype is not null %}
\"subtype\": {{ lsAssociation.subtype |json_encode |raw }},
{% endif %}
{% if lsAssociation.annotation is not null %}
\"annotation\": {{ lsAssociation.annotation |json_encode |raw }},
{% endif %}
\"mod\": {{ lsAssociation.updatedAt |date('c') |replace({'+00:00':''}) |json_encode |raw }}
}
{% endblock %}
", "framework/doc_tree/export_association.json.twig", "/var/www/html/templates/framework/doc_tree/export_association.json.twig");
    }
}
