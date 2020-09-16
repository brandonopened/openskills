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

/* framework/ls_item/index.html.twig */
class __TwigTemplate_8cc95d90eafd587af6f48c2a83fa2c1f3801b61c7238f62129cf36ec7dd206ab extends \Twig\Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "framework/ls_item/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_item/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_item/index.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "    <h1>LsItem list</h1>

    <table class=\"table table-condensed table-hover table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>LSDoc uri</th>
                <th>Human Coding Scheme</th>
                <th>Abbreviated Statement</th>
                <th>Type</th>
                <th>Changed At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lsItems"]) || array_key_exists("lsItems", $context) ? $context["lsItems"] : (function () { throw new RuntimeError('Variable "lsItems" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lsItem"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_item_view", ["id" => twig_get_attribute($this->env, $this->source, $context["lsItem"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, $context["lsItem"], "uri", [], "any", false, false, false, 21)), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsItem"], "lsDocUri", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsItem"], "humanCodingScheme", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["lsItem"], "abbreviatedStatement", [], "any", false, false, false, 24))) {
                // line 25
                echo "                        ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsItem"], "fullStatement", [], "any", false, false, false, 25), 50), "html", null, true);
                echo "
                    ";
            } else {
                // line 27
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsItem"], "abbreviatedStatement", [], "any", false, false, false, 27), "html", null, true);
                echo "
                    ";
            }
            // line 29
            echo "                </td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lsItem"], "itemType", [], "any", false, false, false, 30), "code", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["lsItem"], "changedAt", [], "any", false, false, false, 31)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsItem"], "changedAt", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul class=\"list-inline\">
                        <li>
                            <a class=\"btn btn-primary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_item_view", ["id" => twig_get_attribute($this->env, $this->source, $context["lsItem"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["lsItem"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lsItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    ";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("add-standard-to", null)) {
            // line 48
            echo "      <ul class=\"list-inline\">
          <li>
              <a class=\"btn btn-default\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_new");
            echo "\">Create a new entry</a>
          </li>
      </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_item/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  160 => 48,  158 => 47,  153 => 44,  141 => 38,  135 => 35,  126 => 31,  122 => 30,  119 => 29,  113 => 27,  107 => 25,  105 => 24,  101 => 23,  97 => 22,  91 => 21,  88 => 20,  84 => 19,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block body %}
    <h1>LsItem list</h1>

    <table class=\"table table-condensed table-hover table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>LSDoc uri</th>
                <th>Human Coding Scheme</th>
                <th>Abbreviated Statement</th>
                <th>Type</th>
                <th>Changed At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for lsItem in lsItems %}
            <tr>
                <td><a href=\"{{ path('doc_tree_item_view', { 'id': lsItem.id }) }}\">{{ lsItem.uri|local_uri }}</a></td>
                <td>{{ lsItem.lsDocUri }}</td>
                <td>{{ lsItem.humanCodingScheme }}</td>
                <td>{% if lsItem.abbreviatedStatement is empty %}
                        {{ lsItem.fullStatement | truncate(50) }}
                    {% else %}
                        {{ lsItem.abbreviatedStatement }}
                    {% endif %}
                </td>
                <td>{{ lsItem.itemType.code }}</td>
                <td>{% if lsItem.changedAt %}{{ lsItem.changedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul class=\"list-inline\">
                        <li>
                            <a class=\"btn btn-primary\" href=\"{{ path('doc_tree_item_view', { 'id': lsItem.id }) }}\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"{{ path('lsitem_edit', { 'id': lsItem.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% if is_granted('add-standard-to', null) %}
      <ul class=\"list-inline\">
          <li>
              <a class=\"btn btn-default\" href=\"{{ path('lsitem_new') }}\">Create a new entry</a>
          </li>
      </ul>
    {% endif %}
{% endblock %}
", "framework/ls_item/index.html.twig", "/var/www/html/templates/framework/ls_item/index.html.twig");
    }
}
