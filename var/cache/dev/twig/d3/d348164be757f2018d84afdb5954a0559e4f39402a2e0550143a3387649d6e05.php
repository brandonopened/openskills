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

/* mirror/framework/resolve.html.twig */
class __TwigTemplate_2f39870f01cd8c9a8ed50d2c86cdfacff29ef301706f5a5c31e3bacf7bd89f91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/framework/resolve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/framework/resolve.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "mirror/framework/resolve.html.twig", 1);
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

        echo "Resolve Identifier Conflict | ";
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
        echo "    <h1>Resolve Identifier Conflict</h1>

    <div class=\"alert alert-info\">
    <p>
        The framework <q><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 10, $this->source); })()), "slug", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></q> is currently found in the system.
    </p>

    <p>
        ";
        // line 14
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 14, $this->source); })()), "mirroredFramework", [], "any", false, false, false, 14))) {
            // line 15
            echo "            It is currently mirrored from <q><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_list", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 15, $this->source); })()), "mirroredFramework", [], "any", false, false, false, 15), "server", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 15, $this->source); })()), "mirroredFramework", [], "any", false, false, false, 15), "server", [], "any", false, false, false, 15), "url", [], "any", false, false, false, 15), "html", null, true);
            echo "</a></q>.
        ";
        } else {
            // line 17
            echo "            It falls under the <q>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 17, $this->source); })()), "creator", [], "any", false, false, false, 17), "html", null, true);
            echo "</q> creator
            and is owned by the
            ";
            // line 19
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 19, $this->source); })()), "org", [], "any", false, false, false, 19))) {
                // line 20
                echo "                <q>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 20, $this->source); })()), "org", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</q> organization.
            ";
            } elseif ( !(null === twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21))) {
                // line 22
                echo "                <q>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentFramework"]) || array_key_exists("currentFramework", $context) ? $context["currentFramework"] : (function () { throw new RuntimeError('Variable "currentFramework" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
                echo "</q> user.
            ";
            }
            // line 24
            echo "        ";
        }
        // line 25
        echo "    </p>
    </div>

    <div class=\"alert alert-danger\">
    <p>
        Would you like to <strong>replace</strong> that framework with the mirrored framework
        <q>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frameworkToMirror"]) || array_key_exists("frameworkToMirror", $context) ? $context["frameworkToMirror"] : (function () { throw new RuntimeError('Variable "frameworkToMirror" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</q> from <q>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frameworkToMirror"]) || array_key_exists("frameworkToMirror", $context) ? $context["frameworkToMirror"] : (function () { throw new RuntimeError('Variable "frameworkToMirror" does not exist.', 31, $this->source); })()), "server", [], "any", false, false, false, 31), "url", [], "any", false, false, false, 31), "html", null, true);
        echo "</q>?
    </p>

    <div class=\"text-right\">
        <a class=\"btn btn-primary\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_list", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frameworkToMirror"]) || array_key_exists("frameworkToMirror", $context) ? $context["frameworkToMirror"] : (function () { throw new RuntimeError('Variable "frameworkToMirror" does not exist.', 35, $this->source); })()), "server", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">No, keep the current framework</a>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resolveForm"]) || array_key_exists("resolveForm", $context) ? $context["resolveForm"] : (function () { throw new RuntimeError('Variable "resolveForm" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline-block"]]);
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Yes, replace it\" />
        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resolveForm"]) || array_key_exists("resolveForm", $context) ? $context["resolveForm"] : (function () { throw new RuntimeError('Variable "resolveForm" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mirror/framework/resolve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 38,  159 => 36,  155 => 35,  146 => 31,  138 => 25,  135 => 24,  129 => 22,  127 => 21,  122 => 20,  120 => 19,  114 => 17,  106 => 15,  104 => 14,  95 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Resolve Identifier Conflict | {{ parent() }}{% endblock %}

{% block body %}
    <h1>Resolve Identifier Conflict</h1>

    <div class=\"alert alert-info\">
    <p>
        The framework <q><a href=\"{{ path('doc_tree_view', {'slug': currentFramework.slug}) }}\">{{ currentFramework.title }}</a></q> is currently found in the system.
    </p>

    <p>
        {% if currentFramework.mirroredFramework is not null %}
            It is currently mirrored from <q><a href=\"{{ path('mirror_server_list', {'id': currentFramework.mirroredFramework.server.id}) }}\">{{ currentFramework.mirroredFramework.server.url }}</a></q>.
        {% else %}
            It falls under the <q>{{ currentFramework.creator }}</q> creator
            and is owned by the
            {% if currentFramework.org is not null %}
                <q>{{ currentFramework.org.name }}</q> organization.
            {% elseif currentFramework.user is not null %}
                <q>{{ currentFramework.user.username}}</q> user.
            {% endif %}
        {% endif %}
    </p>
    </div>

    <div class=\"alert alert-danger\">
    <p>
        Would you like to <strong>replace</strong> that framework with the mirrored framework
        <q>{{ frameworkToMirror.title }}</q> from <q>{{ frameworkToMirror.server.url }}</q>?
    </p>

    <div class=\"text-right\">
        <a class=\"btn btn-primary\" href=\"{{ path('mirror_server_list', {'id': frameworkToMirror.server.id}) }}\">No, keep the current framework</a>
        {{ form_start(resolveForm, {'attr': {'class': 'form-inline-block'}}) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Yes, replace it\" />
        {{ form_end(resolveForm) }}
    </div>
    </div>

{% endblock %}

", "mirror/framework/resolve.html.twig", "/var/www/html/templates/mirror/framework/resolve.html.twig");
    }
}
