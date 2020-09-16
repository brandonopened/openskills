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

/* framework/ls_def_licence/show.html.twig */
class __TwigTemplate_68f4687cfc97a51831291f0b9e4d40883b577895c24ea8531c9e1b6676dd974f extends \Twig\Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "framework/ls_def_licence/show.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_def_licence/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_def_licence/show.html.twig"));

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
        echo "    <h1>LsDefLicence</h1>

    <table class=\"table table-condensed table-bordered table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Identifier</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 14, $this->source); })()), "identifier", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Uri</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 18, $this->source); })()), "uri", [], "any", false, false, false, 18)), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Licence Text</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 30, $this->source); })()), "licenceText", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Extra</th>
                <td>";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 34, $this->source); })()), "extra", [], "any", false, false, false, 34));
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 34, $this->source); })()), "extra", [], "any", false, false, false, 34), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 38, $this->source); })()), "updatedAt", [], "any", false, false, false, 38)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 38, $this->source); })()), "updatedAt", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-inline text-right\">
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdef_licence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdef_licence_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDefLicence"]) || array_key_exists("lsDefLicence", $context) ? $context["lsDefLicence"] : (function () { throw new RuntimeError('Variable "lsDefLicence" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_def_licence/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  149 => 51,  143 => 48,  137 => 45,  125 => 38,  117 => 34,  110 => 30,  103 => 26,  96 => 22,  89 => 18,  82 => 14,  75 => 10,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block body %}
    <h1>LsDefLicence</h1>

    <table class=\"table table-condensed table-bordered table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ lsDefLicence.id }}</td>
            </tr>
            <tr>
                <th>Identifier</th>
                <td>{{ lsDefLicence.identifier }}</td>
            </tr>
            <tr>
                <th>Uri</th>
                <td>{{ lsDefLicence.uri|local_uri }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ lsDefLicence.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ lsDefLicence.description }}</td>
            </tr>
            <tr>
                <th>Licence Text</th>
                <td>{{ lsDefLicence.licenceText }}</td>
            </tr>
            <tr>
                <th>Extra</th>
                <td>{{ dump(lsDefLicence.extra) }}{{ lsDefLicence.extra|json_encode(constant('JSON_PRETTY_PRINT')) }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{% if lsDefLicence.updatedAt %}{{ lsDefLicence.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-inline text-right\">
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('lsdef_licence_index') }}\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-default\" href=\"{{ path('lsdef_licence_edit', { 'id': lsDefLicence.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "framework/ls_def_licence/show.html.twig", "/var/www/html/templates/framework/ls_def_licence/show.html.twig");
    }
}
