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

/* framework/ls_doc/export_child.json.twig */
class __TwigTemplate_9e042a7c2c67ea1a6ad00df8e9432365d3a2f17d9e13c8276d85995f9d0242f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/export_child.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/export_child.json.twig"));

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
        echo "    {
        \"uri\": ";
        // line 3
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 3, $this->source); })()), "uri", [], "any", false, false, false, 3)));
        echo ",
        ";
        // line 5
        echo "        \"fullStatement\": ";
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 5, $this->source); })()), "fullStatement", [], "any", false, false, false, 5));
        echo ",
        \"identifier\": ";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 6, $this->source); })()), "identifier", [], "any", false, false, false, 6));
        echo ",
        \"humanCodingScheme\": ";
        // line 7
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 7, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 7));
        echo ",
        \"listEnumInSource\": ";
        // line 8
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 8, $this->source); })()), "listEnumInSource", [], "any", false, false, false, 8));
        echo ",
        \"abbreviatedStatement\": ";
        // line 9
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 9, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 9));
        echo ",
        \"conceptKeywords\": ";
        // line 10
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 10, $this->source); })()), "conceptKeywords", [], "any", false, false, false, 10));
        echo ",
        \"conceptKeywordsUri\": ";
        // line 11
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 11, $this->source); })()), "conceptKeywordsUri", [], "any", false, false, false, 11)));
        echo ",
        \"notes\": ";
        // line 12
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 12, $this->source); })()), "notes", [], "any", false, false, false, 12));
        echo ",
        \"language\": ";
        // line 13
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 13, $this->source); })()), "language", [], "any", false, false, false, 13));
        echo ",
        \"educationalAlignment\": ";
        // line 14
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 14, $this->source); })()), "educationalAlignment", [], "any", false, false, false, 14));
        echo ",
        \"type\": ";
        // line 15
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15));
        echo ",
        \"licenceUri\": ";
        // line 16
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 16, $this->source); })()), "licenceUri", [], "any", false, false, false, 16)));
        echo ",
        \"changedAt\": ";
        // line 17
        echo json_encode(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 17, $this->source); })()), "changedAt", [], "any", false, false, false, 17), "c"));
        echo ",
        \"learningStandardItemChildUri\": [
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 19, $this->source); })()), "children", [], "any", false, false, false, 19));
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
            // line 20
            echo "            ";
            $context["child"] = twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 20, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["childWithId"], "id", [], "any", false, false, false, 20), [], "array", false, false, false, 20);
            // line 21
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) {
                echo ",";
            }
            // line 22
            echo "            ";
            // line 23
            echo "            ";
            // line 24
            echo "            ";
            $this->loadTemplate("framework/ls_doc/export_child.json.twig", "framework/ls_doc/export_child.json.twig", 24)->display(twig_array_merge($context, ["lsItem" => (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 24, $this->source); })()), "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 24, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })())]));
            // line 25
            echo "        ";
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
        // line 26
        echo "        ]
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_doc/export_child.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 26,  156 => 25,  153 => 24,  151 => 23,  149 => 22,  144 => 21,  141 => 20,  124 => 19,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  99 => 12,  95 => 11,  91 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  70 => 5,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    {
        \"uri\": {{ lsItem.uri|local_uri |json_encode |raw }},
        {#\"lsDocUri\": {{ lsItem.lsDocUri|local_uri |json_encode |raw }},#}
        \"fullStatement\": {{ lsItem.fullStatement |json_encode |raw }},
        \"identifier\": {{ lsItem.identifier |json_encode |raw }},
        \"humanCodingScheme\": {{ lsItem.humanCodingScheme |json_encode |raw }},
        \"listEnumInSource\": {{ lsItem.listEnumInSource |json_encode |raw }},
        \"abbreviatedStatement\": {{ lsItem.abbreviatedStatement |json_encode |raw }},
        \"conceptKeywords\": {{ lsItem.conceptKeywords |json_encode |raw }},
        \"conceptKeywordsUri\": {{ lsItem.conceptKeywordsUri|local_uri |json_encode |raw }},
        \"notes\": {{ lsItem.notes |json_encode |raw }},
        \"language\": {{ lsItem.language |json_encode |raw }},
        \"educationalAlignment\": {{ lsItem.educationalAlignment |json_encode |raw }},
        \"type\": {{ lsItem.type |json_encode |raw }},
        \"licenceUri\": {{ lsItem.licenceUri|local_uri |json_encode |raw }},
        \"changedAt\": {{ lsItem.changedAt|date('c') |json_encode |raw }},
        \"learningStandardItemChildUri\": [
        {% for childWithId in lsItem.children %}
            {% set child = items[childWithId.id] %}
            {% if not loop.first %},{% endif %}
            {# child.uri|local_uri |json_encode |raw #}
            {# render_esi(path('lsitem_export', { 'id': child.id })) #}
            {% include 'framework/ls_doc/export_child.json.twig' with { 'lsItem':child, 'lsDoc':lsDoc, 'items':items} %}
        {% endfor %}
        ]
    }
{% endblock %}
", "framework/ls_doc/export_child.json.twig", "/var/www/html/templates/framework/ls_doc/export_child.json.twig");
    }
}
