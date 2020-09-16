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

/* framework/ls_doc/show.html.twig */
class __TwigTemplate_ef95e04de2c696a8aafbaba38338a55a8f9f7c5c39ecfd24281032a2323aed39 extends \Twig\Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "framework/ls_doc/show.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/show.html.twig"));

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
        echo "    <h1>CASE® Framework</h1>

    <table class=\"table table-condensed table-bordered table-striped\">
        <tbody>
            <tr>
                <th>Internal Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Uri</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 14, $this->source); })()), "uri", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Identifier</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 18, $this->source); })()), "identifier", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Official Uri</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 22, $this->source); })()), "officialUri", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creator</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 26, $this->source); })()), "creator", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 30, $this->source); })()), "publisher", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Owning Organization</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsDoc"] ?? null), "org", [], "any", false, true, false, 34), "name", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsDoc"] ?? null), "org", [], "any", false, true, false, 34), "name", [], "any", false, false, false, 34), "")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Owning User</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsDoc"] ?? null), "user", [], "any", false, true, false, 38), "username", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsDoc"] ?? null), "user", [], "any", false, true, false, 38), "username", [], "any", false, false, false, 38), "")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Version</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 46, $this->source); })()), "version", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 54, $this->source); })()), "subject", [], "any", false, false, false, 54), ", "), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 58, $this->source); })()), "language", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adoption Status</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 62, $this->source); })()), "adoptionStatus", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status start</th>
                <td>";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 66, $this->source); })()), "statusStart", [], "any", false, false, false, 66)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 66, $this->source); })()), "statusStart", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Status end</th>
                <td>";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 70, $this->source); })()), "statusEnd", [], "any", false, false, false, 70)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 70, $this->source); })()), "statusEnd", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Top LSItems</th>
                <td>
                    <ul class=\"list-unstyled\">
                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 76, $this->source); })()), "topLSItems", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "                            <li>
                                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "uri", [], "any", false, false, false, 78), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </ul>
                </td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 86, $this->source); })()), "note", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 95
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 95, $this->source); })()))) {
            // line 96
            echo "            <li>
                <a class=\"btn btn-default\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">Edit</a>
            </li>
        ";
        }
        // line 100
        echo "        <li>
            <a class=\"btn btn-default\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_export", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\">Export</a>
        </li>
        ";
        // line 103
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage_editors", (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 103, $this->source); })()))) {
            // line 104
            echo "            <li>
                <a class=\"btn btn-default\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("framework_acl_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">Manage Access</a>
            </li>
        ";
        }
        // line 108
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 108, $this->source); })()))) {
            // line 109
            echo "            <li>
                ";
            // line 110
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 110, $this->source); })()), 'form_start');
            echo "
                    <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
                ";
            // line 112
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 112, $this->source); })()), 'form_end');
            echo "
            </li>
        ";
        }
        // line 115
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_doc/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 115,  274 => 112,  269 => 110,  266 => 109,  263 => 108,  257 => 105,  254 => 104,  252 => 103,  247 => 101,  244 => 100,  238 => 97,  235 => 96,  233 => 95,  228 => 93,  218 => 86,  211 => 81,  200 => 78,  197 => 77,  193 => 76,  182 => 70,  173 => 66,  166 => 62,  159 => 58,  152 => 54,  145 => 50,  138 => 46,  131 => 42,  124 => 38,  117 => 34,  110 => 30,  103 => 26,  96 => 22,  89 => 18,  82 => 14,  75 => 10,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block body %}
    <h1>CASE® Framework</h1>

    <table class=\"table table-condensed table-bordered table-striped\">
        <tbody>
            <tr>
                <th>Internal Id</th>
                <td>{{ lsDoc.id }}</td>
            </tr>
            <tr>
                <th>Uri</th>
                <td>{{ lsDoc.uri }}</td>
            </tr>
            <tr>
                <th>Identifier</th>
                <td>{{ lsDoc.identifier }}</td>
            </tr>
            <tr>
                <th>Official Uri</th>
                <td>{{ lsDoc.officialUri }}</td>
            </tr>
            <tr>
                <th>Creator</th>
                <td>{{ lsDoc.creator }}</td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>{{ lsDoc.publisher }}</td>
            </tr>
            <tr>
                <th>Owning Organization</th>
                <td>{{ lsDoc.org.name|default('') }}</td>
            </tr>
            <tr>
                <th>Owning User</th>
                <td>{{ lsDoc.user.username|default('') }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ lsDoc.title }}</td>
            </tr>
            <tr>
                <th>Version</th>
                <td>{{ lsDoc.version }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ lsDoc.description }}</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>{{ lsDoc.subject|join(', ') }}</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>{{ lsDoc.language }}</td>
            </tr>
            <tr>
                <th>Adoption Status</th>
                <td>{{ lsDoc.adoptionStatus }}</td>
            </tr>
            <tr>
                <th>Status start</th>
                <td>{% if lsDoc.statusStart %}{{ lsDoc.statusStart|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Status end</th>
                <td>{% if lsDoc.statusEnd %}{{ lsDoc.statusEnd|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Top LSItems</th>
                <td>
                    <ul class=\"list-unstyled\">
                        {% for item in lsDoc.topLSItems %}
                            <li>
                                <a href=\"{{ path('lsitem_show', { 'id': item.id }) }}\">{{ item.uri }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ lsDoc.note }}</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('lsdoc_index') }}\">Back to the list</a>
        </li>
        {% if is_granted('edit', lsDoc) %}
            <li>
                <a class=\"btn btn-default\" href=\"{{ path('lsdoc_edit', { 'id': lsDoc.id }) }}\">Edit</a>
            </li>
        {% endif %}
        <li>
            <a class=\"btn btn-default\" href=\"{{ path('lsdoc_export', { 'id': lsDoc.id }) }}\">Export</a>
        </li>
        {% if is_granted('manage_editors', lsDoc) %}
            <li>
                <a class=\"btn btn-default\" href=\"{{ path('framework_acl_edit', { 'id': lsDoc.id }) }}\">Manage Access</a>
            </li>
        {% endif %}
        {% if is_granted('delete', lsDoc) %}
            <li>
                {{ form_start(delete_form) }}
                    <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
                {{ form_end(delete_form) }}
            </li>
        {% endif %}
    </ul>
{% endblock %}
", "framework/ls_doc/show.html.twig", "/var/www/html/templates/framework/ls_doc/show.html.twig");
    }
}
