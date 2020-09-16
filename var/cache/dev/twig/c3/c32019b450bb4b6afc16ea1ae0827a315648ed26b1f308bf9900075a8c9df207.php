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

/* framework/cf_package/export_subject.json.twig */
class __TwigTemplate_5cd4806f1c7dd413a03082f404e6615656edcfc645f62f335920316108d214b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_subject.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_subject.json.twig"));

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
        \"title\": ";
        // line 3
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3));
        echo "
        ,\"identifier\": ";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 4, $this->source); })()), "identifier", [], "any", false, false, false, 4));
        echo "
        ,\"uri\": ";
        // line 5
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 5, $this->source); })())));
        echo "
        ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6))) {
            // line 7
            echo ",\"description\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7));
        }
        // line 9
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 9, $this->source); })()), "hierarchyCode", [], "any", false, false, false, 9))) {
            // line 10
            echo ",\"hierarchyCode\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 10, $this->source); })()), "hierarchyCode", [], "any", false, false, false, 10));
        }
        // line 12
        echo "    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/cf_package/export_subject.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  87 => 10,  84 => 9,  80 => 7,  78 => 6,  74 => 5,  70 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    {
        \"title\": {{ subject.title |json_encode |raw }}
        ,\"identifier\": {{ subject.identifier |json_encode |raw }}
        ,\"uri\": {{ object_uri(subject) |json_encode |raw }}
        {% if subject.description is not empty -%}
            ,\"description\": {{ subject.description |json_encode |raw }}
        {%- endif %}
        {% if subject.hierarchyCode is not empty -%}
            ,\"hierarchyCode\": {{ subject.hierarchyCode |json_encode |raw }}
        {%- endif %}
    }
{% endblock %}
", "framework/cf_package/export_subject.json.twig", "/var/www/html/templates/framework/cf_package/export_subject.json.twig");
    }
}
