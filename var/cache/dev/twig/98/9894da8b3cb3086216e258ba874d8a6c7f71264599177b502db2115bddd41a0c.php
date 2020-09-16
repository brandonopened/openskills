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

/* cms/export/_export_child.json.twig */
class __TwigTemplate_7cdb74e25901af0e312e3c859a498c75b357f72a52e9f2170ad5d998b256ff9f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/export/_export_child.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cms/export/_export_child.json.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
    { \"node\": {
        \"title\": ";
        // line 4
        echo json_encode(((twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "humanCodingScheme", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "humanCodingScheme", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 4, $this->source); })()), "fullStatement", [], "any", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 4, $this->source); })()), "fullStatement", [], "any", false, false, false, 4))));
        echo ",
        \"description\": ";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 5, $this->source); })()), "fullStatement", [], "any", false, false, false, 5));
        echo ",";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 6, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 6))) {
            // line 7
            echo "
        \"grades\": [";
            // line 9
            $context["grades"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 9, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 9), ",");
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) || array_key_exists("grades", $context) ? $context["grades"] : (function () { throw new RuntimeError('Variable "grades" does not exist.', 10, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 11
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 11)) {
                    echo ",";
                }
                // line 12
                echo "\"Grade ";
                if (($context["grade"] < 10)) {
                    echo "0";
                }
                echo twig_escape_filter($this->env, $context["grade"], "html", null, true);
                echo "\"";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "],";
        }
        // line 16
        echo "
        \"standardName\": ";
        // line 17
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17));
        echo ",
        \"uuid\": ";
        // line 18
        echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "extra", [], "any", false, true, false, 18), "cmsId", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lsItem"] ?? null), "extra", [], "any", false, true, false, 18), "cmsId", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 18, $this->source); })()), "identifier", [], "any", false, false, false, 18))) : (twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 18, $this->source); })()), "identifier", [], "any", false, false, false, 18))));
        echo "
        ";
        // line 19
        if ((array_key_exists("parent", $context) &&  !twig_test_empty((isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 19, $this->source); })())))) {
            // line 20
            echo ",\"parent\": ";
            echo json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "extra", [], "any", false, true, false, 20), "cmsId", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "extra", [], "any", false, true, false, 20), "cmsId", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 20, $this->source); })()), "identifier", [], "any", false, false, false, 20))) : (twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new RuntimeError('Variable "parent" does not exist.', 20, $this->source); })()), "identifier", [], "any", false, false, false, 20))));
            echo "
        ";
        }
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 22, $this->source); })()), "rank", [], "any", false, false, false, 22))) {
            // line 23
            echo ",\"weight\": ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 23, $this->source); })()), "rank", [], "any", false, false, false, 23);
        }
        // line 25
        echo "
    } }";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 27, $this->source); })()), "children", [], "any", false, false, false, 27))) {
            // line 28
            echo ",";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 29, $this->source); })()), "children", [], "any", false, false, false, 29));
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
                // line 30
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                    echo ", ";
                }
                // line 31
                $context["child"] = twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["childWithId"], "id", [], "any", false, false, false, 31), [], "array", false, false, false, 31);
                // line 32
                $this->loadTemplate("cms/export/_export_child.json.twig", "cms/export/_export_child.json.twig", 32)->display(twig_array_merge($context, ["lsItem" => (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 32, $this->source); })()), "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 32, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 32, $this->source); })()), "parent" => (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 32, $this->source); })())]));
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
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cms/export/_export_child.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 32,  177 => 31,  173 => 30,  156 => 29,  154 => 28,  152 => 27,  149 => 25,  145 => 23,  143 => 22,  137 => 20,  135 => 19,  131 => 18,  127 => 17,  124 => 16,  121 => 14,  102 => 12,  98 => 11,  81 => 10,  79 => 9,  76 => 7,  74 => 6,  71 => 5,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

    { \"node\": {
        \"title\": {{ lsItem.humanCodingScheme|default(lsItem.fullStatement)|json_encode|raw }},
        \"description\": {{ lsItem.fullStatement|json_encode|raw }},
        {%- if lsItem.educationalAlignment is not empty %}

        \"grades\": [
            {%- set grades = lsItem.educationalAlignment|split(',') -%}
            {%- for grade in grades -%}
                {%- if not loop.first -%},{%- endif -%}
                \"Grade {% if grade < 10 %}0{% endif %}{{ grade }}\"
            {%- endfor -%}
        ],
        {%- endif %}

        \"standardName\": {{ lsDoc.title|json_encode|raw }},
        \"uuid\": {{ lsItem.extra.cmsId|default(lsItem.identifier)|json_encode|raw }}
        {% if parent is defined and parent is not empty -%}
            ,\"parent\": {{ parent.extra.cmsId|default(parent.identifier)|json_encode|raw }}
        {% endif -%}
        {% if lsItem.rank is not empty -%}
            ,\"weight\": {{ lsItem.rank|raw }}
        {%- endif %}

    } }
{%- if lsItem.children is not empty -%}
    ,
    {%- for childWithId in lsItem.children -%}
        {%- if not loop.first %}, {% endif -%}
        {%- set child = items[childWithId.id] -%}
        {%- include 'cms/export/_export_child.json.twig' with { 'lsItem':child, 'lsDoc':lsDoc, 'items':items, 'parent':lsItem} -%}
    {%- endfor -%}
{%- endif -%}
{%- endblock %}
", "cms/export/_export_child.json.twig", "/var/www/html/templates/cms/export/_export_child.json.twig");
    }
}
