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

/* framework/cf_package/export_item_type.json.twig */
class __TwigTemplate_7dd901903e9cd993d58c5116b75f8e75304ed62bf90ca6ed288f96de71f33070 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_item_type.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_item_type.json.twig"));

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
        \"identifier\": ";
        // line 3
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 3, $this->source); })()), "identifier", [], "any", false, false, false, 3));
        echo ",
        \"uri\": ";
        // line 4
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getUriForIdentifier(twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 4, $this->source); })()), "identifier", [], "any", false, false, false, 4)));
        echo ",
        \"title\": ";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5));
        echo ",
        \"description\": ";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6));
        echo ",
        \"hierarchyCode\": ";
        // line 7
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 7, $this->source); })()), "hierarchyCode", [], "any", false, false, false, 7));
        echo ",
        ";
        // line 8
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 8, $this->source); })()), "code", [], "any", false, false, false, 8))) {
            // line 9
            echo "\"typeCode\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9));
            echo ",";
        }
        // line 11
        echo "        \"lastChangeDateTime\": ";
        echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItemType"]) || array_key_exists("lsItemType", $context) ? $context["lsItemType"] : (function () { throw new RuntimeError('Variable "lsItemType" does not exist.', 11, $this->source); })()), "updatedAt", [], "any", false, false, false, 11), "c"), ["+00:00" => ""]));
        echo "
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/cf_package/export_item_type.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  88 => 9,  86 => 8,  82 => 7,  78 => 6,  74 => 5,  70 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    {
        \"identifier\": {{ lsItemType.identifier |json_encode |raw }},
        \"uri\": {{ uri_for_identifier(lsItemType.identifier) |json_encode |raw }},
        \"title\": {{ lsItemType.title |json_encode |raw }},
        \"description\": {{ lsItemType.description |json_encode |raw }},
        \"hierarchyCode\": {{ lsItemType.hierarchyCode |json_encode |raw }},
        {% if lsItemType.code is not null -%}
            \"typeCode\": {{ lsItemType.code |json_encode |raw }},
        {%- endif %}
        \"lastChangeDateTime\": {{ lsItemType.updatedAt |date('c') |replace({'+00:00':''}) |json_encode |raw }}
    }
{% endblock %}
", "framework/cf_package/export_item_type.json.twig", "/var/www/html/templates/framework/cf_package/export_item_type.json.twig");
    }
}
