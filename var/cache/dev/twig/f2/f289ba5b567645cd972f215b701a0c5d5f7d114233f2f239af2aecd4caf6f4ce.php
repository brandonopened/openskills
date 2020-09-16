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

/* framework/additional_field/show.html.twig */
class __TwigTemplate_b4200dbbb40e4bc60a05f97d9193b42672fcac8390cca03ac5db2588d35b6b75 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/additional_field/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/additional_field/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "framework/additional_field/show.html.twig", 1);
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
        echo "  <h1>Additional Field</h1>
  <ul>
    <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("additional_field_index");
        echo "\">Additional Field List</a></li>
    <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("additional_field_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["additional_field"]) || array_key_exists("additional_field", $context) ? $context["additional_field"] : (function () { throw new RuntimeError('Variable "additional_field" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">Edit</a></li>
  </ul>
  <div>
    <strong>Id</strong>: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["additional_field"]) || array_key_exists("additional_field", $context) ? $context["additional_field"] : (function () { throw new RuntimeError('Variable "additional_field" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "<br>
    <strong>Name</strong>: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["additional_field"]) || array_key_exists("additional_field", $context) ? $context["additional_field"] : (function () { throw new RuntimeError('Variable "additional_field" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "<br>
    <strong>Display Name</strong>: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["additional_field"]) || array_key_exists("additional_field", $context) ? $context["additional_field"] : (function () { throw new RuntimeError('Variable "additional_field" does not exist.', 12, $this->source); })()), "displayName", [], "any", false, false, false, 12), "html", null, true);
        echo "<br>
    <strong>Applies To</strong>: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["additional_field"]) || array_key_exists("additional_field", $context) ? $context["additional_field"] : (function () { throw new RuntimeError('Variable "additional_field" does not exist.', 13, $this->source); })()), "appliesTo", [], "any", false, false, false, 13), "html", null, true);
        echo "<br>
    <strong>Type</strong>: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["additional_field"]) || array_key_exists("additional_field", $context) ? $context["additional_field"] : (function () { throw new RuntimeError('Variable "additional_field" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14), "html", null, true);
        echo "<br>
    <strong>Type Info</strong>: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["additional_field"]) || array_key_exists("additional_field", $context) ? $context["additional_field"] : (function () { throw new RuntimeError('Variable "additional_field" does not exist.', 15, $this->source); })()), "typeInfo", [], "any", false, false, false, 15), "html", null, true);
        echo "<br>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/additional_field/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <h1>Additional Field</h1>
  <ul>
    <li><a href=\"{{ path('additional_field_index') }}\">Additional Field List</a></li>
    <li><a href=\"{{ path('additional_field_update', {'id': additional_field.id}) }}\">Edit</a></li>
  </ul>
  <div>
    <strong>Id</strong>: {{ additional_field.id }}<br>
    <strong>Name</strong>: {{ additional_field.name }}<br>
    <strong>Display Name</strong>: {{ additional_field.displayName }}<br>
    <strong>Applies To</strong>: {{ additional_field.appliesTo }}<br>
    <strong>Type</strong>: {{ additional_field.type }}<br>
    <strong>Type Info</strong>: {{ additional_field.typeInfo }}<br>
  </div>
{% endblock %}
", "framework/additional_field/show.html.twig", "/var/www/html/templates/framework/additional_field/show.html.twig");
    }
}
