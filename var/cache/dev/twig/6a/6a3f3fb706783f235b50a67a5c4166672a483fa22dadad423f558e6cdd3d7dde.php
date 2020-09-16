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

/* mirror/server/index.html.twig */
class __TwigTemplate_4bac8ed9a5b2f915ec7af47456e4a316eb66cf4480b8bd02e98844f9fa8b08ff extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/server/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/server/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "mirror/server/index.html.twig", 1);
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

        echo "Mirrored Server List | ";
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
        echo "    <h1>Mirrored Servers</h1>

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_add");
        echo "\">Add Mirrored Server</a>
        <a class=\"btn btn-default\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_framework_new");
        echo "\">Add Single Mirrored Framework</a>
    </p>

    <div class=\"row mirrored-server-view\" id=\"mirroredServerView\">
        <div class=\"col-sm-12\">
            <table id=\"mirroredServerTable\" class=\"table table-bordered table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Server</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 25
            echo "                        <tr>
                            <td class=\"status\">
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 27), [], "array", false, false, false, 27));
            foreach ($context['_seq'] as $context["name"] => $context["val"]) {
                // line 28
                echo "                                    ";
                if (($context["val"] != 0)) {
                    // line 29
                    echo "                                        ";
                    if (($context["name"] == "new")) {
                        // line 30
                        echo "                                            <i class=\"fa fa-star\" title=\"New: ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" aria-label=\"New\"></i> ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo " &nbsp;
                                        ";
                    } elseif ((                    // line 31
$context["name"] == "ok")) {
                        // line 32
                        echo "                                            <i class=\"fa fa-check-circle\" title=\"Okay: ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" aria-label=\"Okay\"></i> ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo " &nbsp;
                                        ";
                    } elseif ((                    // line 33
$context["name"] == "scheduled")) {
                        // line 34
                        echo "                                            <i class=\"fa fa-calendar-check-o\" title=\"Scheduled: ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" aria-label=\"Scheduled\"></i> ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo " &nbsp;
                                        ";
                    } elseif ((                    // line 35
$context["name"] == "processing")) {
                        // line 36
                        echo "                                            <i class=\"fa fa-refresh fa-spin\" title=\"Processing: ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" aria-label=\"Processing\"></i> ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo " &nbsp;
                                        ";
                    } elseif ((                    // line 37
$context["name"] == "error")) {
                        // line 38
                        echo "                                            <i class=\"fa fa-warning\" title=\"Error: ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" aria-label=\"Error\"></i> ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo " &nbsp;
                                        ";
                    } elseif ((                    // line 39
$context["name"] == "not-included")) {
                        // line 40
                        echo "                                            <i class=\"fa fa-minus-circle\" title=\"Excluded: ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\" aria-label=\"Excluded\"></i> ";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo " &nbsp;
                                        ";
                    }
                    // line 42
                    echo "                                    ";
                }
                // line 43
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            </td>
                            <td>
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_list", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "url", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>
                            </td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_list", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">View Frameworks</a>
                                <a class=\"btn btn-default\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Edit</a>
                                <a class=\"btn btn-danger\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Remove Server</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script>
        \$(function() {

        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mirror/server/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 62,  240 => 61,  226 => 55,  216 => 51,  212 => 50,  208 => 49,  200 => 46,  196 => 44,  190 => 43,  187 => 42,  179 => 40,  177 => 39,  170 => 38,  168 => 37,  161 => 36,  159 => 35,  152 => 34,  150 => 33,  143 => 32,  141 => 31,  134 => 30,  131 => 29,  128 => 28,  124 => 27,  120 => 25,  116 => 24,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Mirrored Server List | {{ parent() }}{% endblock %}

{% block body %}
    <h1>Mirrored Servers</h1>

    <p>
        <a class=\"btn btn-default\" href=\"{{ path('mirror_server_add') }}\">Add Mirrored Server</a>
        <a class=\"btn btn-default\" href=\"{{ path('mirror_framework_new') }}\">Add Single Mirrored Framework</a>
    </p>

    <div class=\"row mirrored-server-view\" id=\"mirroredServerView\">
        <div class=\"col-sm-12\">
            <table id=\"mirroredServerTable\" class=\"table table-bordered table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Server</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for server in servers %}
                        <tr>
                            <td class=\"status\">
                                {% for name, val in statuses[server.id] %}
                                    {% if val != 0 %}
                                        {% if name == 'new' %}
                                            <i class=\"fa fa-star\" title=\"New: {{ val }}\" aria-label=\"New\"></i> {{ val }} &nbsp;
                                        {% elseif name == 'ok' %}
                                            <i class=\"fa fa-check-circle\" title=\"Okay: {{ val }}\" aria-label=\"Okay\"></i> {{ val }} &nbsp;
                                        {% elseif name == 'scheduled' %}
                                            <i class=\"fa fa-calendar-check-o\" title=\"Scheduled: {{ val }}\" aria-label=\"Scheduled\"></i> {{ val }} &nbsp;
                                        {% elseif name == 'processing' %}
                                            <i class=\"fa fa-refresh fa-spin\" title=\"Processing: {{ val }}\" aria-label=\"Processing\"></i> {{ val }} &nbsp;
                                        {% elseif name == 'error' %}
                                            <i class=\"fa fa-warning\" title=\"Error: {{ val }}\" aria-label=\"Error\"></i> {{ val }} &nbsp;
                                        {% elseif name == 'not-included' %}
                                            <i class=\"fa fa-minus-circle\" title=\"Excluded: {{ val }}\" aria-label=\"Excluded\"></i> {{ val }} &nbsp;
                                        {% endif %}
                                    {% endif %}
                                {% endfor %}
                            </td>
                            <td>
                                <a href=\"{{ path('mirror_server_list', {'id': server.id}) }}\">{{ server.url }}</a>
                            </td>
                            <td>
                                <a class=\"btn btn-primary\" href=\"{{ path('mirror_server_list', {'id': server.id}) }}\">View Frameworks</a>
                                <a class=\"btn btn-default\" href=\"{{ path('mirror_server_edit', {'id': server.id}) }}\">Edit</a>
                                <a class=\"btn btn-danger\" href=\"{{ path('mirror_server_delete', {'id': server.id}) }}\">Remove Server</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        \$(function() {

        })
    </script>
{% endblock %}
", "mirror/server/index.html.twig", "/var/www/html/templates/mirror/server/index.html.twig");
    }
}
