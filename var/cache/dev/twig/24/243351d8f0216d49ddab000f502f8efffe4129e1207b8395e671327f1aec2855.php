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

/* framework/editor/render_document.json.twig */
class __TwigTemplate_41fb0af6c7c5418c5425ff6d26f31d8196dad6bf5c3b18221fd3a815f280703b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/render_document.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/render_document.json.twig"));

        // line 1
        $context["mainChildren"] =  !twig_test_empty((isset($context["topItemIds"]) || array_key_exists("topItemIds", $context) ? $context["topItemIds"] : (function () { throw new RuntimeError('Variable "topItemIds" does not exist.', 1, $this->source); })()));
        // line 2
        echo "[
    {
        \"title\": ";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4));
        echo ",
        \"key\": \"doc-";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5);
        echo "\",
        \"folder\": true, \"expanded\": true, \"children\": [
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topItemIds"]) || array_key_exists("topItemIds", $context) ? $context["topItemIds"] : (function () { throw new RuntimeError('Variable "topItemIds" does not exist.', 7, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["itemId"]) {
            // line 8
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) {
                echo ", ";
            }
            // line 9
            echo "                ";
            $context["item"] = twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })()), $context["itemId"], [], "array", false, false, false, 9);
            // line 10
            echo "                ";
            $this->loadTemplate("framework/editor/render_child.json.twig", "framework/editor/render_document.json.twig", 10)->display(twig_array_merge($context, ["lsItem" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 10, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()), "highlight" => null]));
            // line 11
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemId'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            ";
        if ( !twig_test_empty((isset($context["orphaned"]) || array_key_exists("orphaned", $context) ? $context["orphaned"] : (function () { throw new RuntimeError('Variable "orphaned" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "                ";
            if ((isset($context["mainChildren"]) || array_key_exists("mainChildren", $context) ? $context["mainChildren"] : (function () { throw new RuntimeError('Variable "mainChildren" does not exist.', 13, $this->source); })())) {
                echo ", ";
            }
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orphaned"]) || array_key_exists("orphaned", $context) ? $context["orphaned"] : (function () { throw new RuntimeError('Variable "orphaned" does not exist.', 14, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) {
                    echo ", ";
                }
                // line 16
                echo "                    ";
                $this->loadTemplate("framework/editor/render_child.json.twig", "framework/editor/render_document.json.twig", 16)->display(twig_array_merge($context, ["lsItem" => $context["item"], "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 16, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })()), "highlight" => null]));
                // line 17
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            ";
        }
        // line 19
        echo "        ]
    }
]

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/render_document.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 19,  148 => 18,  134 => 17,  131 => 16,  126 => 15,  108 => 14,  103 => 13,  100 => 12,  86 => 11,  83 => 10,  80 => 9,  75 => 8,  58 => 7,  53 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mainChildren = (topItemIds is not empty) %}
[
    {
        \"title\": {{ lsDoc.title|json_encode|raw }},
        \"key\": \"doc-{{ lsDoc.id|raw }}\",
        \"folder\": true, \"expanded\": true, \"children\": [
            {% for itemId in topItemIds %}
                {% if not loop.first %}, {% endif %}
                {% set item = items[itemId] %}
                {% include 'framework/editor/render_child.json.twig' with { 'lsItem':item, 'lsDoc':lsDoc, 'items':items, 'highlight':null } %}
            {% endfor %}
            {% if orphaned is not empty %}
                {% if mainChildren %}, {% endif %}
                {% for item in orphaned %}
                    {% if not loop.first %}, {% endif %}
                    {% include 'framework/editor/render_child.json.twig' with { 'lsItem':item, 'lsDoc':lsDoc, 'items':items, 'highlight':null } %}
                {% endfor %}
            {% endif %}
        ]
    }
]

", "framework/editor/render_document.json.twig", "/var/www/html/templates/framework/editor/render_document.json.twig");
    }
}
