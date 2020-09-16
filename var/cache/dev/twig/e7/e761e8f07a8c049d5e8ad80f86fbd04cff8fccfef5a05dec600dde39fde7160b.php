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

/* framework/additional_field/index.html.twig */
class __TwigTemplate_5c89a674160c3ec5dcb93726a4a4661df08aea9c2a06d0b0e91ac1a0b7a8e928 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/additional_field/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/additional_field/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "framework/additional_field/index.html.twig", 1);
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
        echo "  <h1>Additional Fields List</h1>
  <p>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("additional_field_new");
        echo "\">Add Additional Field</a>
  </p>
  <table class=\"table table-condensed table-hover table-bordered table-striped\">
      <thead>
          <tr>
              <th>Id</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Name</th>
              <th>Display Name</th>
              <th>Applies To</th>
              <th>Type</th>
              <th>Type Info</th>
          </tr>
      </thead>
      <tbody>
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["additional_fields"]) || array_key_exists("additional_fields", $context) ? $context["additional_fields"] : (function () { throw new RuntimeError('Variable "additional_fields" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["additional_field"]) {
            // line 23
            echo "          <tr>
            <td>
              <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("additional_field_show", ["id" => twig_get_attribute($this->env, $this->source, $context["additional_field"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
                ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["additional_field"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "
              </a>
            </td>
            <td>
              <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("additional_field_update", ["id" => twig_get_attribute($this->env, $this->source, $context["additional_field"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                Edit
              </a>
            </td>
            <td>
              <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("additional_field_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["additional_field"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
                Delete
              </a>
            </td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["additional_field"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["additional_field"], "displayName", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["additional_field"], "appliesTo", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["additional_field"], "type", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["additional_field"], "typeInfo", [], "any", false, false, false, 43)), "html", null, true);
            echo "</td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['additional_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </tbody>
  </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/additional_field/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  118 => 35,  110 => 30,  103 => 26,  99 => 25,  95 => 23,  91 => 22,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <h1>Additional Fields List</h1>
  <p>
    <a href=\"{{ path('additional_field_new') }}\">Add Additional Field</a>
  </p>
  <table class=\"table table-condensed table-hover table-bordered table-striped\">
      <thead>
          <tr>
              <th>Id</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Name</th>
              <th>Display Name</th>
              <th>Applies To</th>
              <th>Type</th>
              <th>Type Info</th>
          </tr>
      </thead>
      <tbody>
      {% for additional_field in additional_fields %}
          <tr>
            <td>
              <a href=\"{{ path('additional_field_show', {'id': additional_field.id}) }}\">
                {{ additional_field.id }}
              </a>
            </td>
            <td>
              <a href=\"{{ path('additional_field_update', {'id': additional_field.id}) }}\">
                Edit
              </a>
            </td>
            <td>
              <a href=\"{{ path('additional_field_delete', {'id': additional_field.id}) }}\">
                Delete
              </a>
            </td>
            <td>{{ additional_field.name }}</td>
            <td>{{ additional_field.displayName }}</td>
            <td>{{ additional_field.appliesTo }}</td>
            <td>{{ additional_field.type }}</td>
            <td>{{ additional_field.typeInfo|json_encode }}</td>
          </tr>
      {% endfor %}
      </tbody>
  </table>
{% endblock %}
", "framework/additional_field/index.html.twig", "/var/www/html/templates/framework/additional_field/index.html.twig");
    }
}
