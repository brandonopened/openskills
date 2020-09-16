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

/* framework/ls_def_licence/index.html.twig */
class __TwigTemplate_b50c8b945d47a0898a201bbdfbc96285eada8bd577c456a85c58323d47fa2f28 extends \Twig\Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "framework/ls_def_licence/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_def_licence/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_def_licence/index.html.twig"));

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
        echo "    <h1>LsDefLicence list</h1>

    <table class=\"table table-condensed table-hover table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lsDefLicences"]) || array_key_exists("lsDefLicences", $context) ? $context["lsDefLicences"] : (function () { throw new RuntimeError('Variable "lsDefLicences" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lsDefLicence"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdef_licence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "updatedAt", [], "any", false, false, false, 22)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "updatedAt", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul class=\"list-inline\">
                        <li>
                            <a class=\"btn btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdef_licence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdef_licence_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["lsDefLicence"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lsDefLicence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdef_licence_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_def_licence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  130 => 35,  118 => 29,  112 => 26,  103 => 22,  99 => 21,  95 => 20,  89 => 19,  86 => 18,  82 => 17,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block body %}
    <h1>LsDefLicence list</h1>

    <table class=\"table table-condensed table-hover table-bordered table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for lsDefLicence in lsDefLicences %}
            <tr>
                <td><a href=\"{{ path('lsdef_licence_show', { 'id': lsDefLicence.id }) }}\">{{ lsDefLicence.id }}</a></td>
                <td>{{ lsDefLicence.title }}</td>
                <td>{{ lsDefLicence.description }}</td>
                <td>{% if lsDefLicence.updatedAt %}{{ lsDefLicence.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul class=\"list-inline\">
                        <li>
                            <a class=\"btn btn-primary\" href=\"{{ path('lsdef_licence_show', { 'id': lsDefLicence.id }) }}\">show</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"{{ path('lsdef_licence_edit', { 'id': lsDefLicence.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-default\" href=\"{{ path('lsdef_licence_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "framework/ls_def_licence/index.html.twig", "/var/www/html/templates/framework/ls_def_licence/index.html.twig");
    }
}
