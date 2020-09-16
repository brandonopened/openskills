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

/* framework/doc_tree/render_document.json.twig */
class __TwigTemplate_e35ade5b6ffa4a507763ceb1fa449b2beb06a32497dfec35d7790a0c2442cad4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/render_document.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/render_document.json.twig"));

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
        \"assoc\": {\"group\": \"all\"},
        \"active\": true,";
        // line 8
        echo "        \"folder\": true, 
        \"expanded\": true,";
        // line 10
        echo "        \"children\": [
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topItemIds"]) || array_key_exists("topItemIds", $context) ? $context["topItemIds"] : (function () { throw new RuntimeError('Variable "topItemIds" does not exist.', 11, $this->source); })()));
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
            // line 12
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) {
                echo ", ";
            }
            // line 13
            echo "                ";
            $context["item"] = twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()), $context["itemId"], [], "array", false, false, false, 13);
            // line 14
            echo "                ";
            $this->loadTemplate("framework/doc_tree/render_child.json.twig", "framework/doc_tree/render_document.json.twig", 14)->display(twig_array_merge($context, ["lsItem" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 14, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 14, $this->source); })()), "parent" => "doc"]));
            // line 15
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
        // line 16
        echo "            ";
        if ( !twig_test_empty((isset($context["parentsElsewhere"]) || array_key_exists("parentsElsewhere", $context) ? $context["parentsElsewhere"] : (function () { throw new RuntimeError('Variable "parentsElsewhere" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "                ";
            if ((isset($context["mainChildren"]) || array_key_exists("mainChildren", $context) ? $context["mainChildren"] : (function () { throw new RuntimeError('Variable "mainChildren" does not exist.', 17, $this->source); })())) {
                echo ", ";
            }
            // line 18
            echo "                {
                    \"title\": \"Parents are in another document\",
                    \"key\": \"__externalParent\",
                    \"assoc\": {\"group\": \"\"},
                    \"folder\": true,
                    \"children\": [
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parentsElsewhere"]) || array_key_exists("parentsElsewhere", $context) ? $context["parentsElsewhere"] : (function () { throw new RuntimeError('Variable "parentsElsewhere" does not exist.', 24, $this->source); })()));
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
                // line 25
                echo "                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 25)) {
                    echo ", ";
                }
                // line 26
                echo "                        ";
                $this->loadTemplate("framework/doc_tree/render_child.json.twig", "framework/doc_tree/render_document.json.twig", 26)->display(twig_array_merge($context, ["lsItem" => $context["item"], "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 26, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 26, $this->source); })())]));
                // line 27
                echo "                        ";
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
            // line 28
            echo "                    ]
                }
            ";
        }
        // line 31
        echo "            ";
        if ( !twig_test_empty((isset($context["orphaned"]) || array_key_exists("orphaned", $context) ? $context["orphaned"] : (function () { throw new RuntimeError('Variable "orphaned" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "                ";
            if (((isset($context["mainChildren"]) || array_key_exists("mainChildren", $context) ? $context["mainChildren"] : (function () { throw new RuntimeError('Variable "mainChildren" does not exist.', 32, $this->source); })()) ||  !twig_test_empty((isset($context["parentsElsewhere"]) || array_key_exists("parentsElsewhere", $context) ? $context["parentsElsewhere"] : (function () { throw new RuntimeError('Variable "parentsElsewhere" does not exist.', 32, $this->source); })())))) {
                echo ", ";
            }
            // line 33
            echo "                {
                    \"title\": \"No parent\",
                    \"key\": \"__noParent\",
                    \"assoc\": {\"group\": \"\"},
                    \"folder\": true,
                    \"children\": [
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orphaned"]) || array_key_exists("orphaned", $context) ? $context["orphaned"] : (function () { throw new RuntimeError('Variable "orphaned" does not exist.', 39, $this->source); })()));
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
                // line 40
                echo "                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 40)) {
                    echo ", ";
                }
                // line 41
                echo "                            ";
                $this->loadTemplate("framework/doc_tree/render_child.json.twig", "framework/doc_tree/render_document.json.twig", 41)->display(twig_array_merge($context, ["lsItem" => $context["item"], "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 41, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 41, $this->source); })())]));
                // line 42
                echo "                        ";
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
            // line 43
            echo "                    ]
                }
            ";
        }
        // line 46
        echo "        ]
    }
]

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/render_document.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 46,  221 => 43,  207 => 42,  204 => 41,  199 => 40,  182 => 39,  174 => 33,  169 => 32,  166 => 31,  161 => 28,  147 => 27,  144 => 26,  139 => 25,  122 => 24,  114 => 18,  109 => 17,  106 => 16,  92 => 15,  89 => 14,  86 => 13,  81 => 12,  64 => 11,  61 => 10,  58 => 8,  53 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set mainChildren = (topItemIds is not empty) %}
[
    {
        \"title\": {{ lsDoc.title|json_encode|raw }},
        \"key\": \"doc-{{ lsDoc.id|raw }}\",
        \"assoc\": {\"group\": \"all\"},
        \"active\": true,{# document node is active when first loaded #}
        \"folder\": true, 
        \"expanded\": true,{# document node is expanded when first loaded #}
        \"children\": [
            {% for itemId in topItemIds %}
                {% if not loop.first %}, {% endif %}
                {% set item = items[itemId] %}
                {% include 'framework/doc_tree/render_child.json.twig' with { 'lsItem':item, 'lsDoc':lsDoc, 'items':items, 'parent':'doc' } %}
            {% endfor %}
            {% if parentsElsewhere is not empty %}
                {% if mainChildren %}, {% endif %}
                {
                    \"title\": \"Parents are in another document\",
                    \"key\": \"__externalParent\",
                    \"assoc\": {\"group\": \"\"},
                    \"folder\": true,
                    \"children\": [
                        {% for item in parentsElsewhere %}
                        {% if not loop.first %}, {% endif %}
                        {% include 'framework/doc_tree/render_child.json.twig' with { 'lsItem':item, 'lsDoc':lsDoc, 'items':items } %}
                        {% endfor %}
                    ]
                }
            {% endif %}
            {% if orphaned is not empty %}
                {% if mainChildren or parentsElsewhere is not empty %}, {% endif %}
                {
                    \"title\": \"No parent\",
                    \"key\": \"__noParent\",
                    \"assoc\": {\"group\": \"\"},
                    \"folder\": true,
                    \"children\": [
                        {% for item in orphaned %}
                            {% if not loop.first %}, {% endif %}
                            {% include 'framework/doc_tree/render_child.json.twig' with { 'lsItem':item, 'lsDoc':lsDoc, 'items':items } %}
                        {% endfor %}
                    ]
                }
            {% endif %}
        ]
    }
]

", "framework/doc_tree/render_document.json.twig", "/var/www/html/templates/framework/doc_tree/render_document.json.twig");
    }
}
