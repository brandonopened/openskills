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

/* framework/doc_tree/export_item.json.twig */
class __TwigTemplate_6f6f97664910d9b9e3a8c743d9e064f3bc6d7290496373a4ca5f3b9a2dfbe090 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_item.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_item.json.twig"));

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
        // line 5
        echo "\"id\": ";
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5));
        echo ",
\"identifier\": ";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 6, $this->source); })()), "identifier", [], "any", false, false, false, 6));
        echo ",
\"uri\": ";
        // line 7
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getUriForIdentifier(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 7, $this->source); })()), "identifier", [], "any", false, false, false, 7)));
        echo ",
\"fstmt\": ";
        // line 8
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 8, $this->source); })()), "fullStatement", [], "any", false, false, false, 8));
        echo ",
";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 9, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 9))) {
            // line 10
            echo "\"hcs\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 10, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 10));
            echo ",
";
        }
        // line 12
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 12, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 12))) {
            // line 13
            echo "\"le\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 13, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 13));
            echo ",
";
        }
        // line 15
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 15, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 15))) {
            // line 16
            echo "\"astmt\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 16, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 16));
            echo ",
";
        }
        // line 18
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 18, $this->source); })()), "conceptKeywords", [], "any", false, false, false, 18))) {
            // line 19
            echo "\"ck\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 19, $this->source); })()), "conceptKeywords", [], "any", false, false, false, 19));
            echo ",
\"cku\": ";
            // line 20
            echo json_encode(null);
            echo ",";
        }
        // line 22
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 22, $this->source); })()), "notes", [], "any", false, false, false, 22))) {
            // line 23
            echo "\"notes\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 23, $this->source); })()), "notes", [], "any", false, false, false, 23));
            echo ",
";
        }
        // line 25
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 25, $this->source); })()), "language", [], "any", false, false, false, 25))) {
            // line 26
            echo "\"lang\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 26, $this->source); })()), "language", [], "any", false, false, false, 26));
            echo ",
";
        }
        // line 28
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 28, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 28))) {
            // line 29
            echo "\"el\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 29, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 29));
            echo ",
";
        }
        // line 31
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 31, $this->source); })()), "itemType", [], "any", false, false, false, 31))) {
            // line 32
            echo "\"itp\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 32, $this->source); })()), "itemType", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32));
            echo ",
";
        }
        // line 37
        if ((((twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assocData", [], "any", true, true, false, 37) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 37, $this->source); })()), "assocData", [], "any", false, false, false, 37))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assocData", [], "any", false, true, false, 37), "assocId", [], "any", true, true, false, 37)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 37, $this->source); })()), "assocData", [], "any", false, false, false, 37), "assocId", [], "any", false, false, false, 37)))) {
            // line 38
            echo "\"newAssoc\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 38, $this->source); })()), "assocData", [], "any", false, false, false, 38));
            echo ",
";
        }
        // line 40
        if ((((twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "extra", [], "any", true, true, false, 40) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 40, $this->source); })()), "extra", [], "any", false, false, false, 40))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "extra", [], "any", false, true, false, 40), "customFields", [], "any", true, true, false, 40)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 40, $this->source); })()), "extra", [], "any", false, false, false, 40), "customFields", [], "any", false, false, false, 40)))) {
            // line 41
            echo "\"customFields\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 41, $this->source); })()), "extra", [], "any", false, false, false, 41), "customFields", [], "any", false, false, false, 41));
            echo ",
";
        }
        // line 44
        echo "\"mod\": ";
        echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 44, $this->source); })()), "changedAt", [], "any", false, false, false, 44), "c"), ["+00:00" => ""]));
        echo "
";
        // line 46
        echo "}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/export_item.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 46,  166 => 44,  160 => 41,  158 => 40,  152 => 38,  150 => 37,  144 => 32,  142 => 31,  136 => 29,  134 => 28,  128 => 26,  126 => 25,  120 => 23,  118 => 22,  114 => 20,  109 => 19,  107 => 18,  101 => 16,  99 => 15,  93 => 13,  91 => 12,  85 => 10,  83 => 9,  79 => 8,  75 => 7,  71 => 6,  66 => 5,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
{
{# Leave out CFDocumentURI; we have that elsewhere in the package #}
{# Include id #}
\"id\": {{ lsItem.id |json_encode |raw }},
\"identifier\": {{ lsItem.identifier |json_encode |raw }},
\"uri\": {{ uri_for_identifier(lsItem.identifier) |json_encode |raw }},
\"fstmt\": {{ lsItem.fullStatement |json_encode |raw }},
{% if lsItem.humanCodingScheme is not null %}
\"hcs\": {{ lsItem.humanCodingScheme |json_encode |raw }},
{% endif %}
{% if lsItem.listEnumInSource is not null %}
\"le\": {{ lsItem.listEnumInSource |json_encode |raw }},
{% endif %}
{% if lsItem.abbreviatedStatement is not null %}
\"astmt\": {{ lsItem.abbreviatedStatement |json_encode |raw }},
{% endif %}
{% if lsItem.conceptKeywords is not null %}
\"ck\": {{ lsItem.conceptKeywords |json_encode |raw }},
\"cku\": {{ null |json_encode |raw }},{# Concept Keyword URI needs to be fixed up -- using concepts attr #}
{% endif %}
{% if lsItem.notes is not null %}
\"notes\": {{ lsItem.notes |json_encode |raw }},
{% endif %}
{% if lsItem.language is not null %}
\"lang\": {{ lsItem.language |json_encode |raw }},
{% endif %}
{% if lsItem.educationalAlignment is not null %}
\"el\": {{ lsItem.educationalAlignment |json_encode |raw }},
{% endif %}
{% if lsItem.itemType is not null %}
\"itp\": {{ lsItem.itemType.title |json_encode |raw }},
{# Leave out CFItemTypeURI; we can get that from the document data if needed #}
{% endif %}
{# Leave out licence information; we can get that from the document data if needed #}
{# When a new item is created, the id of the isChildOf association will be passed as \"assocData\" #}
{% if lsItem.assocData is defined and lsItem.assocData is not empty and lsItem.assocData.assocId is defined and lsItem.assocData.assocId is not empty %}
\"newAssoc\": {{ lsItem.assocData |json_encode |raw }},
{% endif %}
{% if lsItem.extra is defined and lsItem.extra is not empty and lsItem.extra.customFields is defined and lsItem.extra.customFields is not empty %}
\"customFields\": {{ lsItem.extra.customFields |json_encode |raw }},
{% endif %}
{# Leave out CFItemTypeURI; we can get that from the document data if needed #}
\"mod\": {{ lsItem.changedAt|date('c') |replace({'+00:00':''}) |json_encode |raw }}
{# Leave out CFItemAssociationURI; associations are in the package #}
}
{% endblock %}
", "framework/doc_tree/export_item.json.twig", "/var/www/html/templates/framework/doc_tree/export_item.json.twig");
    }
}
