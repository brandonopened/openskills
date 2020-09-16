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

/* framework/ls_item/show.html.twig */
class __TwigTemplate_f02e820c5b0ddf053b15b94462c74476140056910b47c3bcc795e18f9d96f929 extends \Twig\Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "framework/ls_item/show.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_item/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_item/show.html.twig"));

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
        echo "    <h1>LsItem</h1>

    <table class=\"table table-condensed table-bordered table-striped\">
        <tbody>
            <tr>
                <th>Internal Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Uri</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 14, $this->source); })()), "uri", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LSDoc Uri</th>
                <td><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 18, $this->source); })()), "lsDoc", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 18, $this->source); })()), "lsDocUri", [], "any", false, false, false, 18), "html", null, true);
        echo "</a></td>
            </tr>
            <tr>
                <th>Human Coding Scheme</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 22, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Identifier</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 26, $this->source); })()), "identifier", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>List Enum in Source</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 30, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Full Statement</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 34, $this->source); })()), "fullStatement", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abbreviated Statement</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 38, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Concept Keywords</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 42, $this->source); })()), "conceptKeywords", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Concept Keywords Uri</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 46, $this->source); })()), "conceptKeywordsUri", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 50, $this->source); })()), "notes", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 54, $this->source); })()), "language", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Educational Alignment</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 58, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Item Type</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 62, $this->source); })()), "itemType", [], "any", false, false, false, 62), "code", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 64
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 64, $this->source); })()), "lsItemParent", [], "any", false, false, false, 64))) {
            // line 65
            echo "            <tr>
                <th>Parent</th>
                <td>
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 68, $this->source); })()), "lsItemParent", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
                // line 69
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_show", ["id" => twig_get_attribute($this->env, $this->source, $context["parent"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parent"], "uri", [], "any", false, false, false, 69), "html", null, true);
                echo "</a><br/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </td>
            </tr>
            ";
        }
        // line 74
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 74, $this->source); })()), "children", [], "any", false, false, false, 74))) {
            // line 75
            echo "            <tr>
                <th>Children</th>
                <td>
                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 78, $this->source); })()), "children", [], "any", false, false, false, 78));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 79
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_show", ["id" => twig_get_attribute($this->env, $this->source, $context["child"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "uri", [], "any", false, false, false, 79), "html", null, true);
                echo "</a><br/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                </td>
            </tr>
            ";
        }
        // line 84
        echo "            <tr>
                <th>Licence Uri</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 86, $this->source); })()), "licenceUri", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Changed At</th>
                <td>";
        // line 90
        if (twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 90, $this->source); })()), "changedAt", [], "any", false, false, false, 90)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 90, $this->source); })()), "changedAt", [], "any", false, false, false, 90), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 99
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 99, $this->source); })()))) {
            // line 100
            echo "          <li>
              <a class=\"btn btn-default\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">Edit</a>
          </li>
          <li>
              ";
            // line 104
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 104, $this->source); })()), 'form_start');
            echo "
                  <input class=\"btn btn-default\" type=\"submit\" value=\"Delete\">
              ";
            // line 106
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 106, $this->source); })()), 'form_end');
            echo "
          </li>
        ";
        }
        // line 109
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_item/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 109,  272 => 106,  267 => 104,  261 => 101,  258 => 100,  256 => 99,  251 => 97,  239 => 90,  232 => 86,  228 => 84,  223 => 81,  212 => 79,  208 => 78,  203 => 75,  200 => 74,  195 => 71,  184 => 69,  180 => 68,  175 => 65,  173 => 64,  168 => 62,  161 => 58,  154 => 54,  147 => 50,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  112 => 30,  105 => 26,  98 => 22,  89 => 18,  82 => 14,  75 => 10,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block body %}
    <h1>LsItem</h1>

    <table class=\"table table-condensed table-bordered table-striped\">
        <tbody>
            <tr>
                <th>Internal Id</th>
                <td>{{ lsItem.id }}</td>
            </tr>
            <tr>
                <th>Uri</th>
                <td>{{ lsItem.uri }}</td>
            </tr>
            <tr>
                <th>LSDoc Uri</th>
                <td><a href=\"{{ path('lsdoc_show', { 'id': lsItem.lsDoc.id }) }}\">{{ lsItem.lsDocUri }}</a></td>
            </tr>
            <tr>
                <th>Human Coding Scheme</th>
                <td>{{ lsItem.humanCodingScheme }}</td>
            </tr>
            <tr>
                <th>Identifier</th>
                <td>{{ lsItem.identifier }}</td>
            </tr>
            <tr>
                <th>List Enum in Source</th>
                <td>{{ lsItem.listEnumInSource }}</td>
            </tr>
            <tr>
                <th>Full Statement</th>
                <td>{{ lsItem.fullStatement }}</td>
            </tr>
            <tr>
                <th>Abbreviated Statement</th>
                <td>{{ lsItem.abbreviatedStatement }}</td>
            </tr>
            <tr>
                <th>Concept Keywords</th>
                <td>{{ lsItem.conceptKeywords }}</td>
            </tr>
            <tr>
                <th>Concept Keywords Uri</th>
                <td>{{ lsItem.conceptKeywordsUri }}</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td>{{ lsItem.notes }}</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>{{ lsItem.language }}</td>
            </tr>
            <tr>
                <th>Educational Alignment</th>
                <td>{{ lsItem.educationalAlignment }}</td>
            </tr>
            <tr>
                <th>Item Type</th>
                <td>{{ lsItem.itemType.code }}</td>
            </tr>
            {% if lsItem.lsItemParent is not empty %}
            <tr>
                <th>Parent</th>
                <td>
                    {% for parent in lsItem.lsItemParent %}
                        <a href=\"{{ path('lsitem_show', { 'id':parent.id }) }}\">{{ parent.uri }}</a><br/>
                    {% endfor %}
                </td>
            </tr>
            {% endif %}
            {% if lsItem.children is not empty %}
            <tr>
                <th>Children</th>
                <td>
                    {% for child in lsItem.children %}
                        <a href=\"{{ path('lsitem_show', { 'id':child.id }) }}\">{{ child.uri }}</a><br/>
                    {% endfor %}
                </td>
            </tr>
            {% endif %}
            <tr>
                <th>Licence Uri</th>
                <td>{{ lsItem.licenceUri }}</td>
            </tr>
            <tr>
                <th>Changed At</th>
                <td>{% if lsItem.changedAt %}{{ lsItem.changedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('lsitem_index') }}\">Back to the list</a>
        </li>
        {% if is_granted('edit', lsItem) %}
          <li>
              <a class=\"btn btn-default\" href=\"{{ path('lsitem_edit', { 'id': lsItem.id }) }}\">Edit</a>
          </li>
          <li>
              {{ form_start(delete_form) }}
                  <input class=\"btn btn-default\" type=\"submit\" value=\"Delete\">
              {{ form_end(delete_form) }}
          </li>
        {% endif %}
    </ul>
{% endblock %}
", "framework/ls_item/show.html.twig", "/var/www/html/templates/framework/ls_item/show.html.twig");
    }
}
