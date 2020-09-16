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

/* framework/cf_package/export_item.json.twig */
class __TwigTemplate_0d8b763a32e3d70f0e5e7354409889bfe62a61e6577676b011617c1b6f040611 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_item.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_item.json.twig"));

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
";
        // line 4
        echo "        \"CFDocumentURI\": ";
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 4, $this->source); })()), "lsDocUri", [], "any", false, false, false, 4)));
        echo ",
        \"identifier\": ";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 5, $this->source); })()), "identifier", [], "any", false, false, false, 5));
        echo ",
        \"uri\": ";
        // line 6
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri((isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 6, $this->source); })())));
        echo ",";
        // line 10
        echo "\"fullStatement\": ";
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 10, $this->source); })()), "fullStatement", [], "any", false, false, false, 10));
        echo ",";
        // line 14
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 14, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 14))) {
            // line 15
            echo "            \"humanCodingScheme\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 15, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 15));
            echo ",
        ";
        }
        // line 17
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 17, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 17))) {
            // line 18
            echo "            \"listEnumeration\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 18, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 18));
            echo ",
        ";
        }
        // line 20
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 20, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 20))) {
            // line 21
            echo "            \"abbreviatedStatement\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 21, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 21));
            echo ",
        ";
        }
        // line 23
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 23, $this->source); })()), "conceptKeywords", [], "any", false, false, false, 23))) {
            // line 24
            echo "            \"conceptKeywords\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 24, $this->source); })()), "conceptKeywords", [], "any", false, false, false, 24));
            echo ",
            \"conceptKeywordsURI\": ";
            // line 25
            echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 25, $this->source); })()), "conceptKeywordsUri", [], "any", false, false, false, 25)));
            echo ",
        ";
        }
        // line 27
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 27, $this->source); })()), "notes", [], "any", false, false, false, 27))) {
            // line 28
            echo "            \"notes\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 28, $this->source); })()), "notes", [], "any", false, false, false, 28));
            echo ",
        ";
        }
        // line 30
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 30, $this->source); })()), "language", [], "any", false, false, false, 30))) {
            // line 31
            echo "            \"language\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 31, $this->source); })()), "language", [], "any", false, false, false, 31));
            echo ",
        ";
        }
        // line 33
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 33, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 33))) {
            // line 34
            echo "            \"educationalLevel\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 34, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 34));
            echo ",
        ";
        }
        // line 36
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 36, $this->source); })()), "itemType", [], "any", false, false, false, 36))) {
            // line 37
            echo "            \"CFItemType\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 37, $this->source); })()), "itemType", [], "any", false, false, false, 37), "code", [], "any", false, false, false, 37));
            echo ",
            \"CFItemTypeURI\": {
                \"title\": ";
            // line 39
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 39, $this->source); })()), "itemType", [], "any", false, false, false, 39), "code", [], "any", false, false, false, 39));
            echo ",
                \"identifier\": ";
            // line 40
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 40, $this->source); })()), "itemType", [], "any", false, false, false, 40), "identifier", [], "any", false, false, false, 40));
            echo ",
                \"uri\": ";
            // line 41
            echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 41, $this->source); })()), "itemType", [], "any", false, false, false, 41), "uri", [], "any", false, false, false, 41)));
            echo "
            },
        ";
        }
        // line 44
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 44, $this->source); })()), "licenceUri", [], "any", false, false, false, 44))) {
            // line 46
            echo "            \"licence\": ";
            echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 46, $this->source); })()), "licenceUri", [], "any", false, false, false, 46)));
            echo ",
            \"licenceURI\": ";
            // line 47
            echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 47, $this->source); })()), "licenceUri", [], "any", false, false, false, 47)));
            echo ",
        ";
        }
        // line 49
        echo "        \"lastChangeDateTime\": ";
        echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 49, $this->source); })()), "changedAt", [], "any", false, false, false, 49), "c"), ["+00:00" => ""]));
        echo ",
";
        // line 51
        echo "        \"CFItemAssociationURI\": ";
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri((twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 51, $this->source); })()), "uri", [], "any", false, false, false, 51) . "/associations")));
        echo "
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/cf_package/export_item.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 51,  184 => 49,  179 => 47,  174 => 46,  171 => 44,  165 => 41,  161 => 40,  157 => 39,  151 => 37,  148 => 36,  142 => 34,  139 => 33,  133 => 31,  130 => 30,  124 => 28,  121 => 27,  116 => 25,  111 => 24,  108 => 23,  102 => 21,  99 => 20,  93 => 18,  90 => 17,  84 => 15,  82 => 14,  78 => 10,  75 => 6,  71 => 5,  66 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    {
{# TODO: CFDocument URI as API endpoint #}
        \"CFDocumentURI\": {{ lsItem.lsDocUri|local_uri |json_encode |raw }},
        \"identifier\": {{ lsItem.identifier |json_encode |raw }},
        \"uri\": {{ object_uri(lsItem) |json_encode |raw }},
{#- organizationCOmpetencyCode -#}
{#- competencyEffectiveDate -#}
{#- competencyTerminationDate -#}
        \"fullStatement\": {{ lsItem.fullStatement |json_encode |raw }},
{#- competencyLabel -#}
{#- competencyAssociationSet -#}
{#- competencyReferenceHierarchy -#}
        {% if lsItem.humanCodingScheme is not null %}
            \"humanCodingScheme\": {{ lsItem.humanCodingScheme |json_encode |raw }},
        {% endif %}
        {% if lsItem.listEnumInSource is not null %}
            \"listEnumeration\": {{ lsItem.listEnumInSource |json_encode |raw }},
        {% endif %}
        {% if lsItem.abbreviatedStatement is not null %}
            \"abbreviatedStatement\": {{ lsItem.abbreviatedStatement |json_encode |raw }},
        {% endif %}
        {% if lsItem.conceptKeywords is not null %}
            \"conceptKeywords\": {{ lsItem.conceptKeywords |json_encode |raw }},
            \"conceptKeywordsURI\": {{ lsItem.conceptKeywordsUri|local_uri |json_encode |raw }},
        {% endif %}
        {% if lsItem.notes is not null %}
            \"notes\": {{ lsItem.notes |json_encode |raw }},
        {% endif %}
        {% if lsItem.language is not null %}
            \"language\": {{ lsItem.language |json_encode |raw }},
        {% endif %}
        {% if lsItem.educationalAlignment is not null %}
            \"educationalLevel\": {{ lsItem.educationalAlignment |json_encode |raw }},
        {% endif %}
        {% if lsItem.itemType is not null %}
            \"CFItemType\": {{ lsItem.itemType.code |json_encode |raw }},
            \"CFItemTypeURI\": {
                \"title\": {{ lsItem.itemType.code |json_encode |raw }},
                \"identifier\": {{ lsItem.itemType.identifier |json_encode |raw }},
                \"uri\": {{ lsItem.itemType.uri|local_remote_uri |json_encode | raw }}
            },
        {% endif %}
        {% if lsItem.licenceUri is not null %}
{# TODO: license #}
            \"licence\": {{ lsItem.licenceUri|local_uri |json_encode |raw }},
            \"licenceURI\": {{ lsItem.licenceUri|local_uri |json_encode |raw }},
        {% endif %}
        \"lastChangeDateTime\": {{ lsItem.changedAt|date('c') |replace({'+00:00':''}) |json_encode |raw }},
{# TODO: Item Association URI endpoint #}
        \"CFItemAssociationURI\": {{ (lsItem.uri~'/associations') |local_uri |json_encode |raw }}
    }
{% endblock %}
", "framework/cf_package/export_item.json.twig", "/var/www/html/templates/framework/cf_package/export_item.json.twig");
    }
}
