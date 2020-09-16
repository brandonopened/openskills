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

/* mirror/framework/logs.html.twig */
class __TwigTemplate_6d42e62831978b4f4ffd8e5f6b38728fd952fbb58b9f8c953eaf5f4bd71fc60f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/framework/logs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/framework/logs.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "mirror/framework/logs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["framework"]) || array_key_exists("framework", $context) ? $context["framework"] : (function () { throw new RuntimeError('Variable "framework" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " Logs | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Logs for ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["framework"]) || array_key_exists("framework", $context) ? $context["framework"] : (function () { throw new RuntimeError('Variable "framework" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <p class=\"text-right\">
        <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_list", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["framework"]) || array_key_exists("framework", $context) ? $context["framework"] : (function () { throw new RuntimeError('Variable "framework" does not exist.', 9, $this->source); })()), "server", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">Back to framework list</a>
    </p>

    <table class=\"mirror_log-table table table-bordered table-striped table-hover table-condensed\">
        <thead>
            <tr>
                <th class=\"mirror_log-status\">Status</th>
                <th class=\"mirror_log-occurred\">Occurred At</th>
                <th class=\"mirror_log-message\">Message</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["framework"]) || array_key_exists("framework", $context) ? $context["framework"] : (function () { throw new RuntimeError('Variable "framework" does not exist.', 21, $this->source); })()), "logs", [], "any", false, false, false, 21), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 21, $this->source); })()), "occurredAt", [], "any", false, false, false, 21) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 21, $this->source); })()), "occurredAt", [], "any", false, false, false, 21)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 22
            echo "                <tr>
                    <td class=\"mirror_log-status status\">
                        ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["log"], "status", [], "any", false, false, false, 24) == "success")) {
                // line 25
                echo "                            <i class=\"fa fa-check-circle\" title=\"Success\" aria-label=\"Success\"></i>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 26
$context["log"], "status", [], "any", false, false, false, 26) == "failure")) {
                // line 27
                echo "                            <i class=\"fa fa-warning\" title=\"Failure\" aria-label=\"Failure\"></i>
                        ";
            }
            // line 29
            echo "                    </td>
                    <td class=\"mirror_log-occurred\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "occurredAt", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td class=\"mirror_log-message\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"2\">No logs found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mirror/framework/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 38,  147 => 34,  139 => 31,  135 => 30,  132 => 29,  128 => 27,  126 => 26,  123 => 25,  121 => 24,  117 => 22,  112 => 21,  97 => 9,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{ framework.title }} Logs | {{ parent() }}{% endblock %}

{% block body %}
    <h1>Logs for {{ framework.title }}</h1>

    <p class=\"text-right\">
        <a class=\"btn btn-primary\" href=\"{{ path('mirror_server_list', {'id': framework.server.id}) }}\">Back to framework list</a>
    </p>

    <table class=\"mirror_log-table table table-bordered table-striped table-hover table-condensed\">
        <thead>
            <tr>
                <th class=\"mirror_log-status\">Status</th>
                <th class=\"mirror_log-occurred\">Occurred At</th>
                <th class=\"mirror_log-message\">Message</th>
            </tr>
        </thead>
        <tbody>
            {% for log in framework.logs|sort((a,b) => (b.occurredAt <=> a.occurredAt)) %}
                <tr>
                    <td class=\"mirror_log-status status\">
                        {% if log.status == 'success' %}
                            <i class=\"fa fa-check-circle\" title=\"Success\" aria-label=\"Success\"></i>
                        {% elseif log.status == 'failure' %}
                            <i class=\"fa fa-warning\" title=\"Failure\" aria-label=\"Failure\"></i>
                        {% endif %}
                    </td>
                    <td class=\"mirror_log-occurred\">{{ log.occurredAt|date('Y-m-d H:i:s') }}</td>
                    <td class=\"mirror_log-message\">{{ log.message }}</td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"2\">No logs found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}

", "mirror/framework/logs.html.twig", "/var/www/html/templates/mirror/framework/logs.html.twig");
    }
}
