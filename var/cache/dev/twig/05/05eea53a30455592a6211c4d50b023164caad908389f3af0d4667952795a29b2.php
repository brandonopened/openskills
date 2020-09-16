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

/* framework/editor/render_child.json.twig */
class __TwigTemplate_c70404075743b5fcd572011cf406d819648422f2a88cc0f9791b85ccde4ba80c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/render_child.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/render_child.json.twig"));

        // line 1
        echo "{
    \"title\":";
        // line 2
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 2, $this->source); })()), "fullStatement", [], "any", false, false, false, 2));
        echo ",
    \"humanCoding\":";
        // line 3
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 3, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 3));
        echo ",
    \"key\":";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4));
        echo "
    ";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 5, $this->source); })()), "children", [], "any", false, false, false, 5))) {
            // line 6
            echo "        , \"folder\": true, \"expanded\": true, \"children\": [
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 7, $this->source); })()), "children", [], "any", false, false, false, 7));
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
                // line 8
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) {
                    echo ", ";
                }
                // line 9
                echo "                ";
                $context["child"] = twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["childWithId"], "id", [], "any", false, false, false, 9), [], "array", false, false, false, 9);
                // line 10
                echo "                ";
                $this->loadTemplate("framework/editor/render_child.json.twig", "framework/editor/render_child.json.twig", 10)->display(twig_array_merge($context, ["lsItem" => (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 10, $this->source); })()), "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 10, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()), "highlight" => null]));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childWithId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ]
    ";
        }
        // line 14
        echo "}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/render_child.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 14,  105 => 12,  91 => 11,  88 => 10,  85 => 9,  80 => 8,  63 => 7,  60 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"title\":{{ lsItem.fullStatement|json_encode|raw }},
    \"humanCoding\":{{ lsItem.humanCodingScheme|json_encode|raw }},
    \"key\":{{ lsItem.id|json_encode|raw }}
    {% if lsItem.children is not empty %}
        , \"folder\": true, \"expanded\": true, \"children\": [
            {% for childWithId in lsItem.children %}
                {% if not loop.first %}, {% endif %}
                {% set child = items[childWithId.id] %}
                {% include 'framework/editor/render_child.json.twig' with { 'lsItem':child, 'lsDoc':lsDoc, 'items':items, 'highlight':null} %}
            {% endfor %}
        ]
    {% endif %}
}
", "framework/editor/render_child.json.twig", "/var/www/html/templates/framework/editor/render_child.json.twig");
    }
}
