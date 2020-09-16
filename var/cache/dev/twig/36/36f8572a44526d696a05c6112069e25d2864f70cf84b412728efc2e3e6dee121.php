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

/* framework/ls_doc/index.html.twig */
class __TwigTemplate_acfd95bce5e59b12a6b92b193e92e8d16a90027805b81e14a47be4be0891e939 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyclasses' => [$this, 'block_bodyclasses'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "framework/ls_doc/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/index.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyclasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclasses"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclasses"));

        $this->displayParentBlock("bodyclasses", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Competency Frameworks
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create", "lsdoc")) {
            // line 7
            echo "            <ul class=\"list-inline pull-right\">
                <li>
                    <a class=\"btn btn-default\" href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_new");
            echo "\">Create a new Framework</a>
                </li>
                <li>
                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#wizard\">Import framework</button>
                </li>
            </ul>
        ";
        }
        // line 16
        echo "    </h1>

    <div id=\"competencyTree\">
        ";
        // line 19
        $context["lastCreator"] = "";
        // line 20
        echo "        <ul id=\"comptencyTreeData\" style=\"display:none;\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lsDocs"]) || array_key_exists("lsDocs", $context) ? $context["lsDocs"] : (function () { throw new RuntimeError('Variable "lsDocs" does not exist.', 21, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["framework"]) {
            // line 22
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 22) != (isset($context["lastCreator"]) || array_key_exists("lastCreator", $context) ? $context["lastCreator"] : (function () { throw new RuntimeError('Variable "lastCreator" does not exist.', 22, $this->source); })()))) {
                // line 23
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 23)) {
                    echo "</ul></li>";
                }
                // line 24
                echo "                        <li class=\"folder\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 24), "html", null, true);
                echo "<ul>
                                ";
                // line 25
                $context["lastCreator"] = twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 25);
                // line 26
                echo "                    ";
            }
            // line 27
            echo "                    <li class=\"salt-framework-link\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["framework"], "slug", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></li>
                    ";
            // line 28
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28) == true) && (twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 28) != ""))) {
                // line 29
                echo "                        </ul></li>
                    ";
            }
            // line 31
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['framework'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </ul>
    </div>
    ";
        // line 34
        $this->loadTemplate("framework/ls_doc/wizard.html.twig", "framework/ls_doc/index.html.twig", 34)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "<script>
    \$('#competencyTree').fancytree({
        activate: function(event, data){
            var node = data.node;
            if (!\$.isEmptyObject(node.data)) {
                if (undefined !== node.data.href)
                    window.location.href = node.data.href;
            }
        },
        dblclick: function(event, data) {
            // ignore double clicks
            return false;
        },
        click: function(event, data) {
            if (data.node.isFolder() && data.targetType !== 'expander') {
                data.node.toggleExpanded();
            }
        }
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_doc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 38,  193 => 37,  183 => 34,  179 => 32,  165 => 31,  161 => 29,  159 => 28,  152 => 27,  149 => 26,  147 => 25,  142 => 24,  137 => 23,  134 => 22,  117 => 21,  114 => 20,  112 => 19,  107 => 16,  97 => 9,  93 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block bodyclasses %}{{ parent() }}{% endblock %}
{% block body %}
    <h1>Competency Frameworks
        {% if is_granted('create', 'lsdoc') %}
            <ul class=\"list-inline pull-right\">
                <li>
                    <a class=\"btn btn-default\" href=\"{{ path('lsdoc_new') }}\">Create a new Framework</a>
                </li>
                <li>
                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#wizard\">Import framework</button>
                </li>
            </ul>
        {% endif %}
    </h1>

    <div id=\"competencyTree\">
        {% set lastCreator = '' %}
        <ul id=\"comptencyTreeData\" style=\"display:none;\">
            {% for framework in lsDocs %}
                {% if framework.creator != lastCreator %}
                    {% if not loop.first %}</ul></li>{% endif %}
                        <li class=\"folder\">{{ framework.creator }}<ul>
                                {% set lastCreator = framework.creator %}
                    {% endif %}
                    <li class=\"salt-framework-link\"><a href=\"{{ path('doc_tree_view', { 'slug': framework.slug }) }}\">{{ framework.title }}</a></li>
                    {% if loop.last == true and framework.creator != '' %}
                        </ul></li>
                    {% endif %}
                {% endfor %}
                </ul>
    </div>
    {% include 'framework/ls_doc/wizard.html.twig' %}
{% endblock %}

{% block javascripts %}
<script>
    \$('#competencyTree').fancytree({
        activate: function(event, data){
            var node = data.node;
            if (!\$.isEmptyObject(node.data)) {
                if (undefined !== node.data.href)
                    window.location.href = node.data.href;
            }
        },
        dblclick: function(event, data) {
            // ignore double clicks
            return false;
        },
        click: function(event, data) {
            if (data.node.isFolder() && data.targetType !== 'expander') {
                data.node.toggleExpanded();
            }
        }
    });
</script>
{% endblock %}
", "framework/ls_doc/index.html.twig", "/var/www/html/templates/framework/ls_doc/index.html.twig");
    }
}
