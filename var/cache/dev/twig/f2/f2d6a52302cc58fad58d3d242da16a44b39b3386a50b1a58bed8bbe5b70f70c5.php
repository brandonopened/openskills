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

/* framework/editor/render_document.html.twig */
class __TwigTemplate_be24cea471adff2c8914c92a0b861e3897c5e7811c7518f5bc0be56c4001c3e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/render_document.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/render_document.html.twig"));

        // line 1
        echo "<h3>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 2, $this->source); })()), "uri", [], "any", false, false, false, 2)), "html", null, true);
        echo "\" name=\"document\" class=\"lsDoc text-muted\">
        ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "
    </a>
</h3>
<ul>
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
            echo "        ";
            $context["item"] = twig_get_attribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })()), $context["itemId"], [], "array", false, false, false, 8);
            // line 9
            echo "        ";
            $this->loadTemplate("framework/editor/render_child.html.twig", "framework/editor/render_document.html.twig", 9)->display(twig_array_merge($context, ["lsItem" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 9, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })()), "highlight" => (isset($context["highlight"]) || array_key_exists("highlight", $context) ? $context["highlight"] : (function () { throw new RuntimeError('Variable "highlight" does not exist.', 9, $this->source); })())]));
            // line 10
            echo "    ";
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
        // line 11
        echo "
    ";
        // line 12
        if ( !twig_test_empty((isset($context["orphaned"]) || array_key_exists("orphaned", $context) ? $context["orphaned"] : (function () { throw new RuntimeError('Variable "orphaned" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "        <li>
            <strong>Orphaned</strong>:
            <ul>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orphaned"]) || array_key_exists("orphaned", $context) ? $context["orphaned"] : (function () { throw new RuntimeError('Variable "orphaned" does not exist.', 16, $this->source); })()));
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
                // line 17
                echo "                    ";
                $this->loadTemplate("framework/editor/render_child.html.twig", "framework/editor/render_document.html.twig", 17)->display(twig_array_merge($context, ["lsItem" => $context["item"], "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 17, $this->source); })()), "items" => (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 17, $this->source); })()), "highlight" => (isset($context["highlight"]) || array_key_exists("highlight", $context) ? $context["highlight"] : (function () { throw new RuntimeError('Variable "highlight" does not exist.', 17, $this->source); })())]));
                // line 18
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
            // line 19
            echo "            </ul>
        </li>
    ";
        }
        // line 22
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/render_document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 22,  138 => 19,  124 => 18,  121 => 17,  104 => 16,  99 => 13,  97 => 12,  94 => 11,  80 => 10,  77 => 9,  74 => 8,  57 => 7,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>
    <a href=\"{{ lsDoc.uri|local_uri }}\" name=\"document\" class=\"lsDoc text-muted\">
        {{ lsDoc.title }}
    </a>
</h3>
<ul>
    {% for itemId in topItemIds %}
        {% set item = items[itemId] %}
        {% include 'framework/editor/render_child.html.twig' with { 'lsItem':item, 'lsDoc':lsDoc, 'items':items, 'highlight':highlight } %}
    {% endfor %}

    {% if orphaned is not empty %}
        <li>
            <strong>Orphaned</strong>:
            <ul>
                {% for item in orphaned %}
                    {% include 'framework/editor/render_child.html.twig' with { 'lsItem':item, 'lsDoc':lsDoc, 'items':items, 'highlight':highlight } %}
                {% endfor %}
            </ul>
        </li>
    {% endif %}
</ul>
", "framework/editor/render_document.html.twig", "/var/www/html/templates/framework/editor/render_document.html.twig");
    }
}
