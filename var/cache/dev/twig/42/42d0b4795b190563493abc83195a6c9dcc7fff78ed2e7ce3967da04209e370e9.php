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

/* framework/editor/_ls_item_component.html.twig */
class __TwigTemplate_08f6566d8372ac8a20755e1d16dfb4f22ca42a07d6cc16c01690355d2682a39a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'end_of_item_a' => [$this, 'block_end_of_item_a'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/_ls_item_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/_ls_item_component.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <section class=\"panel panel-default panel-component\" id=\"item-component-";
            echo twig_escape_filter($this->env, (isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\">
        <div class=\"panel-heading\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</div>
        <div class=\"panel-body\">
            <div>
                <div class=\"list-group\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 7, $this->source); })()));
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
                // line 8
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsitem", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 8)]), "html", null, true);
                echo "\" data-item-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\" class=\"list-group-item lsitem clearfix\">
                            ";
                // line 9
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "humanCodingScheme", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "                                <span class=\"item-humanCodingScheme\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "humanCodingScheme", [], "any", false, false, false, 10), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 12
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "shortStatement", [], "any", false, false, false, 12) != twig_get_attribute($this->env, $this->source, $context["item"], "humanCodingScheme", [], "any", false, false, false, 12))) {
                    // line 13
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "shortStatement", [], "any", false, false, false, 13), "html", null, true);
                    echo "
                            ";
                }
                // line 15
                echo "                            ";
                $this->displayBlock('end_of_item_a', $context, $blocks);
                // line 16
                echo "                        </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </div>
            </div>
        </div>
    </section>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_end_of_item_a($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "end_of_item_a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "end_of_item_a"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/_ls_item_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 15,  117 => 18,  102 => 16,  99 => 15,  93 => 13,  90 => 12,  84 => 10,  82 => 9,  75 => 8,  58 => 7,  51 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if items is not empty %}
    <section class=\"panel panel-default panel-component\" id=\"item-component-{{ componentName }}\">
        <div class=\"panel-heading\">{{ title }}</div>
        <div class=\"panel-body\">
            <div>
                <div class=\"list-group\">
                    {% for item in items %}
                        <a href=\"{{ path('editor_lsitem', {'id':item.id}) }}\" data-item-id=\"{{ item.id }}\" class=\"list-group-item lsitem clearfix\">
                            {% if item.humanCodingScheme is not empty %}
                                <span class=\"item-humanCodingScheme\">{{ item.humanCodingScheme }}</span>
                            {% endif %}
                            {% if item.shortStatement != item.humanCodingScheme %}
                                {{ item.shortStatement }}
                            {% endif %}
                            {% block end_of_item_a '' %}
                        </a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>
{% endif %}
", "framework/editor/_ls_item_component.html.twig", "/var/www/html/templates/framework/editor/_ls_item_component.html.twig");
    }
}
