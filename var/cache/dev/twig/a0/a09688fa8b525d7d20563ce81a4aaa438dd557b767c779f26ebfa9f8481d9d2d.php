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

/* framework/doc_tree/render_child.json.twig */
class __TwigTemplate_611d7933e15ad7862cb96605d60b359852af40688eecb393d55e82bdeced05cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/render_child.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/render_child.json.twig"));

        // line 1
        if ( !array_key_exists("parent", $context)) {
            $context["parent"] = null;
        }
        // line 2
        echo "{
    \"abbrStmt\":";
        // line 3
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 3, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 3));
        echo ",
    \"fullStmt\":";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 4, $this->source); })()), "fullStatement", [], "any", false, false, false, 4));
        echo ",
    \"humanCoding\":";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 5, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 5));
        echo ",
    \"sequenceNumber\":";
        // line 6
        echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assoc", [], "any", false, true, false, 6), (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 6, $this->source); })()), [], "array", false, true, false, 6), "sequenceNumber", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assoc", [], "any", false, true, false, 6), (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 6, $this->source); })()), [], "array", false, true, false, 6), "sequenceNumber", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 6, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 6, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 6))));
        echo ",
    \"assoc\": ";
        // line 7
        echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assoc", [], "any", false, true, false, 7), (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 7, $this->source); })()), [], "array", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assoc", [], "any", false, true, false, 7), (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 7, $this->source); })()), [], "array", false, false, false, 7), ["group" => ""])) : (["group" => ""])));
        echo ",
    \"key\":";
        // line 8
        echo json_encode(((twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8) . ".") . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assoc", [], "any", false, true, false, 8), (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 8, $this->source); })()), [], "array", false, true, false, 8), "group", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "assoc", [], "any", false, true, false, 8), (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 8, $this->source); })()), [], "array", false, true, false, 8), "group", [], "any", false, false, false, 8), 0)) : (0))));
        echo "
    ";
        // line 9
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 9, $this->source); })()), "children", [], "any", false, false, false, 9))) {
            // line 10
            echo "        , \"folder\": true,
        \"expanded\": false,";
            // line 12
            echo "        \"children\": [
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 13, $this->source); })()), "children", [], "any", false, false, false, 13));
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
            foreach ($context['_seq'] as $context["_key"] => $context["childWithId"]) {
                // line 14
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                    echo ", ";
                }
                // line 15
                echo "                ";
                $context["child"] = twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["childWithId"], "id", [], "any", false, false, false, 15), [], "array", false, false, false, 15);
                // line 16
                echo "                ";
                $this->loadTemplate("framework/doc_tree/render_child.json.twig", "framework/doc_tree/render_child.json.twig", 16)->display(twig_array_merge($context, ["lsItem" => (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 16, $this->source); })()), "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 16, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })()), "parent" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]));
                // line 17
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childWithId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        ]
    ";
        }
        // line 20
        echo "}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/render_child.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 20,  124 => 18,  110 => 17,  107 => 16,  104 => 15,  99 => 14,  82 => 13,  79 => 12,  76 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if parent is not defined %}{% set parent = null %}{% endif -%}
{
    \"abbrStmt\":{{ lsItem.abbreviatedStatement|json_encode|raw }},
    \"fullStmt\":{{ lsItem.fullStatement|json_encode|raw }},
    \"humanCoding\":{{ lsItem.humanCodingScheme|json_encode|raw }},
    \"sequenceNumber\":{{ lsItem.assoc[parent].sequenceNumber|default(lsItem.listEnumInSource)|json_encode|raw }},
    \"assoc\": {{ lsItem.assoc[parent]|default({'group':''})|json_encode|raw }},
    \"key\":{{ (lsItem.id~\".\"~lsItem.assoc[parent].group|default(0))|json_encode|raw }}
    {% if lsItem.children is not empty %}
        , \"folder\": true,
        \"expanded\": false,{# lower nodes are not expanded by default #}
        \"children\": [
            {% for childWithId in lsItem.children %}
                {% if not loop.first %}, {% endif %}
                {% set child = items[childWithId.id] %}
                {% include 'framework/doc_tree/render_child.json.twig' with { 'lsItem':child, 'lsDoc':lsDoc, 'items':items, 'parent':lsItem.id } %}
            {% endfor %}
        ]
    {% endif %}
}
", "framework/doc_tree/render_child.json.twig", "/var/www/html/templates/framework/doc_tree/render_child.json.twig");
    }
}
