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

/* @QandidateToggle/data_collector/toggle.html.twig */
class __TwigTemplate_77183e05dd3a11d2e6e4bc938d3e80eece9cf04d3f0312970c091aa9e435aea5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'toggle_detail_conditions' => [$this, 'block_toggle_detail_conditions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@QandidateToggle/data_collector/toggle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@QandidateToggle/data_collector/toggle.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@QandidateToggle/data_collector/toggle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "
    ";
        // line 5
        $context["icon"] = ('' === $tmp = "        <span class=\"sf-toolbar-value\">Toggle</span>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        ob_start();
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "toggleDetails", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
            // line 11
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toggle"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</b>
                ";
            // line 13
            if ($this->extensions['Qandidate\Bundle\ToggleBundle\Twig\ToggleTwigExtension']->is_active(twig_get_attribute($this->env, $this->source, $context["toggle"], "name", [], "any", false, false, false, 13))) {
                // line 14
                echo "                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">active</span>
                ";
            } else {
                // line 16
                echo "                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">inactive</span>
                ";
            }
            // line 18
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
    ";
        // line 22
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "    <span class=\"label\">
        <strong>Toggle</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 33
        echo "    <h2>Context</h2>

    ";
        // line 35
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "context", [], "any", false, false, false, 35), "toArray", [], "any", false, false, false, 35))) {
            // line 36
            echo "        <table>
            <thead>
            <tr>
                <th>Context</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "context", [], "any", false, false, false, 44), "toArray", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["contextName"] => $context["contextValue"]) {
                // line 45
                echo "                <tr>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $context["contextName"], "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $context["contextValue"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contextName'], $context['contextValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 53
            echo "        <div class=\"empty\">
            <p>No context data found.</p>
        </div>
    ";
        }
        // line 57
        echo "
    <h2>Toggles</h2>

    ";
        // line 60
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "toggleDetails", [], "any", false, false, false, 60))) {
            // line 61
            echo "        <table>
            <thead>
            <tr>
                <th>Toggle name</th>
                <th>Conditions</th>
                <th>Status</th>
                <th>Current Status</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 71, $this->source); })()), "toggleDetails", [], "any", false, false, false, 71));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["toggleDetails"]) {
                // line 72
                echo "                <tr>
                    <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toggleDetails"], "name", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                    <td>";
                // line 74
                $this->displayBlock("toggle_detail_conditions", $context, $blocks);
                echo "</td>
                    <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["toggleDetails"], "status", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                    ";
                // line 76
                if ($this->extensions['Qandidate\Bundle\ToggleBundle\Twig\ToggleTwigExtension']->is_active(twig_get_attribute($this->env, $this->source, $context["toggleDetails"], "name", [], "any", false, false, false, 76))) {
                    // line 77
                    echo "                        <td><span class=\"label status-success\">active</span></td>
                    ";
                } else {
                    // line 79
                    echo "                        <td><span class=\"label status-warning\">inactive</span></td>
                    ";
                }
                // line 81
                echo "                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggleDetails'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 86
            echo "        <div class=\"empty\">
            <p>No toggle definition found.</p>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_toggle_detail_conditions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_detail_conditions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_detail_conditions"));

        // line 93
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["toggleDetails"]) || array_key_exists("toggleDetails", $context) ? $context["toggleDetails"] : (function () { throw new RuntimeError('Variable "toggleDetails" does not exist.', 93, $this->source); })()), "conditions", [], "any", false, false, false, 93));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 94
            echo "        ";
            $context["values"] = "";
            // line 95
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["condition"], "operator", [], "any", false, true, false, 95), "value", [], "any", true, true, false, 95)) {
                // line 96
                echo "            ";
                $context["values"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["condition"], "operator", [], "any", false, false, false, 96), "value", [], "any", false, false, false, 96);
                // line 97
                echo "        ";
            }
            // line 98
            echo "
        ";
            // line 99
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["condition"], "operator", [], "any", false, true, false, 99), "values", [], "any", true, true, false, 99)) {
                // line 100
                echo "            ";
                $context["values"] = twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["condition"], "operator", [], "any", false, false, false, 100), "values", [], "any", false, false, false, 100), ", ");
                // line 101
                echo "        ";
            }
            // line 102
            echo "
        <b>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "</b>: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["condition"], "key", [], "any", false, false, false, 103), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["condition"], "operator", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 103, $this->source); })()), "html", null, true);
            echo "
        ";
            // line 104
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 104)) {
                echo "<br />";
            }
            // line 105
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 106
            echo "        No conditions
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@QandidateToggle/data_collector/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 106,  374 => 105,  370 => 104,  360 => 103,  357 => 102,  354 => 101,  351 => 100,  349 => 99,  346 => 98,  343 => 97,  340 => 96,  337 => 95,  334 => 94,  315 => 93,  305 => 92,  291 => 86,  286 => 83,  271 => 81,  267 => 79,  263 => 77,  261 => 76,  257 => 75,  253 => 74,  249 => 73,  246 => 72,  229 => 71,  217 => 61,  215 => 60,  210 => 57,  204 => 53,  199 => 50,  190 => 47,  186 => 46,  183 => 45,  179 => 44,  169 => 36,  167 => 35,  163 => 33,  153 => 32,  140 => 27,  130 => 26,  117 => 22,  114 => 21,  111 => 20,  104 => 18,  100 => 16,  96 => 14,  94 => 13,  90 => 12,  87 => 11,  82 => 10,  80 => 9,  77 => 8,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}

    {% set icon %}
        <span class=\"sf-toolbar-value\">Toggle</span>
    {% endset %}

    {% set text %}
        {% for toggle in collector.toggleDetails %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ toggle.name }}</b>
                {% if toggle.name is active feature %}
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">active</span>
                {% else %}
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">inactive</span>
                {% endif %}
            </div>
        {% endfor %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig') }}

{% endblock %}

{% block menu %}
    <span class=\"label\">
        <strong>Toggle</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Context</h2>

    {% if collector.context.toArray|length %}
        <table>
            <thead>
            <tr>
                <th>Context</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            {% for contextName, contextValue in collector.context.toArray %}
                <tr>
                    <td>{{ contextName }}</td>
                    <td>{{ contextValue }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No context data found.</p>
        </div>
    {% endif %}

    <h2>Toggles</h2>

    {% if collector.toggleDetails|length %}
        <table>
            <thead>
            <tr>
                <th>Toggle name</th>
                <th>Conditions</th>
                <th>Status</th>
                <th>Current Status</th>
            </tr>
            </thead>
            <tbody>
            {% for toggleDetails in collector.toggleDetails %}
                <tr>
                    <td>{{ toggleDetails.name }}</td>
                    <td>{{ block('toggle_detail_conditions') }}</td>
                    <td>{{ toggleDetails.status }}</td>
                    {% if toggleDetails.name is active feature %}
                        <td><span class=\"label status-success\">active</span></td>
                    {% else %}
                        <td><span class=\"label status-warning\">inactive</span></td>
                    {% endif %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No toggle definition found.</p>
        </div>
    {% endif %}
{% endblock %}

{% block toggle_detail_conditions %}
    {% for condition in toggleDetails.conditions %}
        {% set values = '' %}
        {% if condition.operator.value is defined %}
            {% set values = condition.operator.value %}
        {% endif %}

        {% if condition.operator.values is defined %}
            {% set values = condition.operator.values|join(', ') %}
        {% endif %}

        <b>{{ condition.name }}</b>: {{ condition.key }} {{ condition.operator.name }} {{ values }}
        {% if not loop.last %}<br />{% endif %}
    {% else %}
        No conditions
    {% endfor %}
{% endblock %}
", "@QandidateToggle/data_collector/toggle.html.twig", "/var/www/html/vendor/qandidate/toggle-bundle/Resources/views/data_collector/toggle.html.twig");
    }
}
