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

/* mirror/server/list.html.twig */
class __TwigTemplate_7519e55735842f1c97b4b8332af18158bd3a6e8e888a2a77344e7ea92eef3474 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/server/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mirror/server/list.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "mirror/server/list.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 3, $this->source); })()), "url", [], "any", false, false, false, 3), "html", null, true);
        echo " framework list | ";
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
        echo "    <h1>List of frameworks from ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 6, $this->source); })()), "url", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <span class=\"text-left col-sm-6\">
            List last updated ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 10, $this->source); })()), "lastCheck", [], "any", false, false, false, 10), "Y-m-d H:i:s"), "html", null, true);
        echo "
        </span>
        <span class=\"text-right col-sm-6\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["serverRefreshForm"]) || array_key_exists("serverRefreshForm", $context) ? $context["serverRefreshForm"] : (function () { throw new RuntimeError('Variable "serverRefreshForm" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-inline-block"]]);
        echo "
            <input class=\"btn btn-default\" type=\"submit\" value=\"Refresh\" />
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["serverRefreshForm"]) || array_key_exists("serverRefreshForm", $context) ? $context["serverRefreshForm"] : (function () { throw new RuntimeError('Variable "serverRefreshForm" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
            <a class=\"btn btn-primary\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_server_index");
        echo "\">View server list</a>
        </span>
    </div>
    <p></p>

    <table class=\"table table-bordered table-hover table-striped\">
        <thead>
            <tr>
                <th>Status</th>
                <th>Framework</th>
                <th>Last Check</th>
                <th>Last Change</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 32, $this->source); })()), "frameworks", [], "any", false, false, false, 32), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (((twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 32, $this->source); })()), "creator", [], "any", false, false, false, 32) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 32, $this->source); })()), "creator", [], "any", false, false, false, 32))) ? ((twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 32, $this->source); })()), "creator", [], "any", false, false, false, 32) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 32, $this->source); })()), "creator", [], "any", false, false, false, 32))) : ((twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32)))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["framework"]) {
            // line 33
            echo "                <tr>
                    <td class=\"status\">";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["framework"], "include", [], "any", false, false, false, 35)) {
                // line 36
                if ((twig_get_attribute($this->env, $this->source, $context["framework"], "status", [], "any", false, false, false, 36) == "new")) {
                    // line 37
                    echo "                                <i class=\"fa fa-star\" title=\"New\" aria-label=\"New\"></i>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 38
$context["framework"], "status", [], "any", false, false, false, 38) == "ok")) {
                    // line 39
                    echo "                                <i class=\"fa fa-check-circle\" title=\"Okay\" aria-label=\"Okay\"></i>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 40
$context["framework"], "status", [], "any", false, false, false, 40) == "scheduled")) {
                    // line 41
                    echo "                                <i class=\"fa fa-calendar-check-o\" title=\"Scheduled\" aria-label=\"Scheduled\"></i>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 42
$context["framework"], "status", [], "any", false, false, false, 42) == "processing")) {
                    // line 43
                    echo "                                <i class=\"fa fa-refresh fa-spin\" title=\"Processing\" aria-label=\"Processing\"></i>
                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 44
$context["framework"], "status", [], "any", false, false, false, 44) == "error")) {
                    // line 45
                    echo "                                <i class=\"fa fa-warning\" title=\"Error\" aria-label=\"Error\"></i>
                            ";
                }
            } else {
                // line 48
                echo "<i class=\"fa fa-minus-circle\" title=\"Excluded\" aria-label=\"Excluded\"></i>";
            }
            // line 50
            echo "</td>
                    <td>
                        <span title=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "identifier", [], "any", false, false, false, 52), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 52), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "</span>
                        ";
            // line 53
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["framework"], "framework", [], "any", false, false, false, 53))) {
                // line 54
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["framework"], "framework", [], "any", false, false, false, 54), "slug", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\"><i class=\"fa fa-external-link\" title=\"Go to document view\" aria-label=\"Go to document view\"></i></a>
                        ";
            }
            // line 56
            echo "                    </td>
                    <td>";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["framework"], "lastCheck", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "lastCheck", [], "any", false, false, false, 57), "Y-m-d H:i"), "html", null, true))) : (print ("-")));
            echo "</td>
                    <td>";
            // line 58
            ((twig_get_attribute($this->env, $this->source, $context["framework"], "lastChange", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "lastChange", [], "any", false, false, false, 58), "Y-m-d H:i"), "html", null, true))) : (print ("-")));
            echo "</td>
                    <td>
                        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, ($context["showLogs"] ?? null), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 60), [], "array", true, true, false, 60)) {
                // line 61
                echo "                            <a class=\"btn btn-default ";
                if ((twig_get_attribute($this->env, $this->source, $context["framework"], "include", [], "any", false, false, false, 61) && (twig_get_attribute($this->env, $this->source, $context["framework"], "status", [], "any", false, false, false, 61) == "error"))) {
                    echo "btn-warning";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["showLogs"]) || array_key_exists("showLogs", $context) ? $context["showLogs"] : (function () { throw new RuntimeError('Variable "showLogs" does not exist.', 61, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 61), [], "array", false, false, false, 61), "html", null, true);
                echo "\">Show Logs</a>
                        ";
            }
            // line 63
            echo "
                        ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, $context["framework"], "idConflicted", [], "any", false, false, false, 64)) {
                // line 65
                echo "                            <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mirror_framework_resolve_conflict", ["id" => twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\">Resolve ID Conflict</a>
                        ";
            } else {
                // line 67
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["refreshForms"] ?? null), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 67), [], "array", true, true, false, 67) && (twig_get_attribute($this->env, $this->source, $context["framework"], "status", [], "any", false, false, false, 67) != "scheduled"))) {
                    // line 68
                    echo "                                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["refreshForms"]) || array_key_exists("refreshForms", $context) ? $context["refreshForms"] : (function () { throw new RuntimeError('Variable "refreshForms" does not exist.', 68, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 68), [], "array", false, false, false, 68), 'form_start', ["attr" => ["class" => "form-inline-block"]]);
                    echo "
                                <input class=\"btn btn-default\" type=\"submit\" value=\"Refresh\" />
                                ";
                    // line 70
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["refreshForms"]) || array_key_exists("refreshForms", $context) ? $context["refreshForms"] : (function () { throw new RuntimeError('Variable "refreshForms" does not exist.', 70, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 70), [], "array", false, false, false, 70), 'form_end');
                    echo "
                            ";
                }
                // line 72
                echo "
                            ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, ($context["enableForms"] ?? null), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 73), [], "array", true, true, false, 73)) {
                    // line 74
                    echo "                                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["enableForms"]) || array_key_exists("enableForms", $context) ? $context["enableForms"] : (function () { throw new RuntimeError('Variable "enableForms" does not exist.', 74, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 74), [], "array", false, false, false, 74), 'form_start', ["attr" => ["class" => "form-inline-block"]]);
                    echo "
                                <input class=\"btn btn-default\" type=\"submit\" value=\"Start Mirroring\" />
                                ";
                    // line 76
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["enableForms"]) || array_key_exists("enableForms", $context) ? $context["enableForms"] : (function () { throw new RuntimeError('Variable "enableForms" does not exist.', 76, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 76), [], "array", false, false, false, 76), 'form_end');
                    echo "
                            ";
                }
                // line 78
                echo "
                            ";
                // line 79
                if (twig_get_attribute($this->env, $this->source, ($context["disableForms"] ?? null), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 79), [], "array", true, true, false, 79)) {
                    // line 80
                    echo "                                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["disableForms"]) || array_key_exists("disableForms", $context) ? $context["disableForms"] : (function () { throw new RuntimeError('Variable "disableForms" does not exist.', 80, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 80), [], "array", false, false, false, 80), 'form_start', ["attr" => ["class" => "form-inline-block"]]);
                    echo "
                                <input class=\"btn btn-default\" type=\"submit\" value=\"Stop Mirroring\" />
                                ";
                    // line 82
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["disableForms"]) || array_key_exists("disableForms", $context) ? $context["disableForms"] : (function () { throw new RuntimeError('Variable "disableForms" does not exist.', 82, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 82), [], "array", false, false, false, 82), 'form_end');
                    echo "
                            ";
                }
                // line 84
                echo "                        ";
            }
            // line 85
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['framework'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mirror/server/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 88,  275 => 85,  272 => 84,  267 => 82,  261 => 80,  259 => 79,  256 => 78,  251 => 76,  245 => 74,  243 => 73,  240 => 72,  235 => 70,  229 => 68,  226 => 67,  220 => 65,  218 => 64,  215 => 63,  205 => 61,  203 => 60,  198 => 58,  194 => 57,  191 => 56,  185 => 54,  183 => 53,  175 => 52,  171 => 50,  168 => 48,  163 => 45,  161 => 44,  158 => 43,  156 => 42,  153 => 41,  151 => 40,  148 => 39,  146 => 38,  143 => 37,  141 => 36,  139 => 35,  136 => 33,  132 => 32,  113 => 16,  109 => 15,  104 => 13,  98 => 10,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{ server.url }} framework list | {{ parent() }}{% endblock %}

{% block body %}
    <h1>List of frameworks from {{ server.url }}</h1>

    <div class=\"row\">
        <span class=\"text-left col-sm-6\">
            List last updated {{ server.lastCheck|date('Y-m-d H:i:s') }}
        </span>
        <span class=\"text-right col-sm-6\">
            {{ form_start(serverRefreshForm, {'attr': {'class': 'form-inline-block'}}) }}
            <input class=\"btn btn-default\" type=\"submit\" value=\"Refresh\" />
            {{ form_end(serverRefreshForm) }}
            <a class=\"btn btn-primary\" href=\"{{ path('mirror_server_index') }}\">View server list</a>
        </span>
    </div>
    <p></p>

    <table class=\"table table-bordered table-hover table-striped\">
        <thead>
            <tr>
                <th>Status</th>
                <th>Framework</th>
                <th>Last Check</th>
                <th>Last Change</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for framework in server.frameworks|sort((a, b) => (a.creator <=> b.creator) ?: (a.title <=> b.title)) %}
                <tr>
                    <td class=\"status\">
                        {%- if framework.include -%}
                            {% if framework.status == 'new' %}
                                <i class=\"fa fa-star\" title=\"New\" aria-label=\"New\"></i>
                            {% elseif framework.status == 'ok' %}
                                <i class=\"fa fa-check-circle\" title=\"Okay\" aria-label=\"Okay\"></i>
                            {% elseif framework.status == 'scheduled' %}
                                <i class=\"fa fa-calendar-check-o\" title=\"Scheduled\" aria-label=\"Scheduled\"></i>
                            {% elseif framework.status == 'processing' %}
                                <i class=\"fa fa-refresh fa-spin\" title=\"Processing\" aria-label=\"Processing\"></i>
                            {% elseif framework.status == 'error' %}
                                <i class=\"fa fa-warning\" title=\"Error\" aria-label=\"Error\"></i>
                            {% endif %}
                        {%- else -%}
                            <i class=\"fa fa-minus-circle\" title=\"Excluded\" aria-label=\"Excluded\"></i>
                        {%- endif -%}
                    </td>
                    <td>
                        <span title=\"{{ framework.identifier }}\">{{ framework.creator }} / {{ framework.title }}</span>
                        {% if framework.framework is not null %}
                            <a href=\"{{ path('doc_tree_view', {'slug': framework.framework.slug}) }}\"><i class=\"fa fa-external-link\" title=\"Go to document view\" aria-label=\"Go to document view\"></i></a>
                        {% endif %}
                    </td>
                    <td>{{ framework.lastCheck ? framework.lastCheck|date('Y-m-d H:i') : '-' }}</td>
                    <td>{{ framework.lastChange ? framework.lastChange|date('Y-m-d H:i') : '-' }}</td>
                    <td>
                        {% if showLogs[framework.id] is defined %}
                            <a class=\"btn btn-default {% if framework.include and framework.status == 'error' %}btn-warning{% endif %}\" href=\"{{ showLogs[framework.id] }}\">Show Logs</a>
                        {% endif %}

                        {% if framework.idConflicted %}
                            <a class=\"btn btn-primary\" href=\"{{ path('mirror_framework_resolve_conflict', {'id': framework.id}) }}\">Resolve ID Conflict</a>
                        {% else %}
                            {% if refreshForms[framework.id] is defined and framework.status != 'scheduled' %}
                                {{ form_start(refreshForms[framework.id], {'attr': {'class': 'form-inline-block'}}) }}
                                <input class=\"btn btn-default\" type=\"submit\" value=\"Refresh\" />
                                {{ form_end(refreshForms[framework.id]) }}
                            {% endif %}

                            {% if enableForms[framework.id] is defined %}
                                {{ form_start(enableForms[framework.id], {'attr': {'class': 'form-inline-block'}}) }}
                                <input class=\"btn btn-default\" type=\"submit\" value=\"Start Mirroring\" />
                                {{ form_end(enableForms[framework.id]) }}
                            {% endif %}

                            {% if disableForms[framework.id] is defined %}
                                {{ form_start(disableForms[framework.id], {'attr': {'class': 'form-inline-block'}}) }}
                                <input class=\"btn btn-default\" type=\"submit\" value=\"Stop Mirroring\" />
                                {{ form_end(disableForms[framework.id]) }}
                            {% endif %}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}

", "mirror/server/list.html.twig", "/var/www/html/templates/mirror/server/list.html.twig");
    }
}
