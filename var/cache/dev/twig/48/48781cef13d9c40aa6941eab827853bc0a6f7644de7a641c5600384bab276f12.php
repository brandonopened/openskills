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

/* framework/cf_package/export_association.json.twig */
class __TwigTemplate_e21d547cb973b6f7bb6966e9c3c8ecd179b6f4f5d725d41dfd16803738598393 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_association.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_association.json.twig"));

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
        echo "    {
        \"CFDocumentURI\": ";
        // line 3
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 3, $this->source); })()), "lsDocUri", [], "any", false, false, false, 3)));
        echo ", ";
        // line 5
        echo "        \"identifier\": ";
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 5, $this->source); })()), "identifier", [], "any", false, false, false, 5));
        echo ",
        \"uri\": ";
        // line 6
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri((isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 6, $this->source); })())));
        echo ",
        ";
        // line 7
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 7, $this->source); })()), "group", [], "any", false, false, false, 7))) {
            // line 8
            echo "            \"CFAssociationGroupingURI\": {
                \"title\": ";
            // line 9
            echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "group", [], "any", false, true, false, 9), "title", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "group", [], "any", false, true, false, 9), "title", [], "any", false, false, false, 9), "Association Group")) : ("Association Group")));
            echo ",
                \"identifier\": ";
            // line 10
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 10, $this->source); })()), "group", [], "any", false, false, false, 10), "identifier", [], "any", false, false, false, 10));
            echo ",
                \"uri\": ";
            // line 11
            echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 11, $this->source); })()), "group", [], "any", false, false, false, 11)));
            echo "
            },
        ";
        }
        // line 14
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 14, $this->source); })()), "sequenceNumber", [], "any", false, false, false, 14))) {
            // line 15
            echo "            \"sequenceNumber\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 15, $this->source); })()), "sequenceNumber", [], "any", false, false, false, 15));
            echo ",
        ";
        }
        // line 18
        echo "\"originNodeURI\": {
            \"title\": ";
        // line 19
        echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 19), "humanCodingScheme", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 19), "humanCodingScheme", [], "any", false, false, false, 19), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 19), "abbreviatedStatement", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 19), "abbreviatedStatement", [], "any", false, false, false, 19), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", false, false, false, 19), "Origin")) : ("Origin")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", false, false, false, 19), "Origin")) : ("Origin")))))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 19), "abbreviatedStatement", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsItem", [], "any", false, true, false, 19), "abbreviatedStatement", [], "any", false, false, false, 19), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", false, false, false, 19), "Origin")) : ("Origin")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "originLsDoc", [], "any", false, true, false, 19), "title", [], "any", false, false, false, 19), "Origin")) : ("Origin")))))));
        echo ",
            \"identifier\": ";
        // line 20
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 20, $this->source); })()), "originNodeIdentifier", [], "any", false, false, false, 20));
        echo ",
            \"uri\": ";
        // line 21
        (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 21, $this->source); })()), "originNode", [], "any", false, false, false, 21))) ? (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 21, $this->source); })()), "originNode", [], "any", false, false, false, 21)), "html", null, true))) : (print (json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 21, $this->source); })()), "originNodeUri", [], "any", false, false, false, 21)))));
        echo "
        },
        \"associationType\": ";
        // line 23
        echo json_encode(twig_replace_filter((twig_lower_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23), 0, 1)) . twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23), 1)), [" " => ""]));
        echo ",
        \"destinationNodeURI\": {
            \"title\": ";
        // line 25
        echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 25), "humanCodingScheme", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 25), "humanCodingScheme", [], "any", false, false, false, 25), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 25), "abbreviatedStatement", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 25), "abbreviatedStatement", [], "any", false, false, false, 25), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", false, false, false, 25), "Destination")) : ("Destination")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", false, false, false, 25), "Destination")) : ("Destination")))))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 25), "abbreviatedStatement", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsItem", [], "any", false, true, false, 25), "abbreviatedStatement", [], "any", false, false, false, 25), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", false, false, false, 25), "Destination")) : ("Destination")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsAssociation"] ?? null), "destinationLsDoc", [], "any", false, true, false, 25), "title", [], "any", false, false, false, 25), "Destination")) : ("Destination")))))));
        echo ",
            \"identifier\": ";
        // line 26
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 26, $this->source); })()), "destinationNodeIdentifier", [], "any", false, false, false, 26));
        echo ",
            \"uri\": ";
        // line 27
        (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 27, $this->source); })()), "destinationNode", [], "any", false, false, false, 27))) ? (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 27, $this->source); })()), "destinationNode", [], "any", false, false, false, 27)), "html", null, true))) : (print (json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 27, $this->source); })()), "destinationNodeUri", [], "any", false, false, false, 27)))));
        echo "
        },
        \"lastChangeDateTime\": ";
        // line 29
        echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsAssociation"]) || array_key_exists("lsAssociation", $context) ? $context["lsAssociation"] : (function () { throw new RuntimeError('Variable "lsAssociation" does not exist.', 29, $this->source); })()), "changedAt", [], "any", false, false, false, 29), "c"), ["+00:00" => ""]));
        echo "
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/cf_package/export_association.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 29,  135 => 27,  131 => 26,  127 => 25,  122 => 23,  117 => 21,  113 => 20,  109 => 19,  106 => 18,  100 => 15,  97 => 14,  91 => 11,  87 => 10,  83 => 9,  80 => 8,  78 => 7,  74 => 6,  69 => 5,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    {
        \"CFDocumentURI\": {{ lsAssociation.lsDocUri|local_uri |json_encode |raw }}, {# TODO: missing in swagger #}
{#- \"lsDocIdentifier\": {{ lsAssociation.lsDocIdentifier |json_encode |raw }}, #}
        \"identifier\": {{ lsAssociation.identifier |json_encode |raw }},
        \"uri\": {{ object_uri(lsAssociation) |json_encode |raw }},
        {% if lsAssociation.group is not null %}
            \"CFAssociationGroupingURI\": {
                \"title\": {{ lsAssociation.group.title |default(\"Association Group\") | json_encode |raw }},
                \"identifier\": {{ lsAssociation.group.identifier |json_encode |raw }},
                \"uri\": {{ object_uri(lsAssociation.group) |json_encode |raw }}
            },
        {% endif %}
        {% if lsAssociation.sequenceNumber is not null %}
            \"sequenceNumber\": {{ lsAssociation.sequenceNumber |json_encode |raw }},
        {% endif %}
{#- relationship -#}
        \"originNodeURI\": {
            \"title\": {{ lsAssociation.originLsItem.humanCodingScheme |default(lsAssociation.originLsItem.abbreviatedStatement |default(lsAssociation.originLsDoc.title |default(\"Origin\"))) |json_encode |raw }},
            \"identifier\": {{ lsAssociation.originNodeIdentifier |json_encode |raw }},
            \"uri\": {{ (lsAssociation.originNode is not null) ? object_uri(lsAssociation.originNode) : lsAssociation.originNodeUri |json_encode |raw }}
        },
        \"associationType\": {{ (lsAssociation.type|slice(0,1)|lower~lsAssociation.type|slice(1))|replace({' ': ''}) |json_encode |raw }},
        \"destinationNodeURI\": {
            \"title\": {{ lsAssociation.destinationLsItem.humanCodingScheme |default(lsAssociation.destinationLsItem.abbreviatedStatement |default(lsAssociation.destinationLsDoc.title |default(\"Destination\"))) |json_encode |raw }},
            \"identifier\": {{ lsAssociation.destinationNodeIdentifier |json_encode |raw }},
            \"uri\": {{ (lsAssociation.destinationNode is not null) ? object_uri(lsAssociation.destinationNode) : lsAssociation.destinationNodeUri |json_encode |raw }}
        },
        \"lastChangeDateTime\": {{ lsAssociation.changedAt |date('c') |replace({'+00:00':''}) |json_encode |raw }}
    }
{% endblock %}
", "framework/cf_package/export_association.json.twig", "/var/www/html/templates/framework/cf_package/export_association.json.twig");
    }
}
