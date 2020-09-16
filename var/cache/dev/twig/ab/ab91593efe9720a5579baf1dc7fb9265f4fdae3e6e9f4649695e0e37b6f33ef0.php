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

/* framework/ls_doc/remote_index.html.twig */
class __TwigTemplate_d7ece3eb053ac9714a4bd0d447fff78545bc16934b75644a06fd498b421add2a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "framework/ls_doc/remote_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/remote_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/remote_index.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'widget');
        echo "
        <ul class=\"list-inline pull-right\">
            <li>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Load from Remote CASE® Server\" />
            </li>
        </ul>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_end');
        echo "

    <div id=\"competencyTree\">
        ";
        // line 14
        $context["lastCreator"] = "";
        // line 15
        echo "        <ul id=\"comptencyTreeData\" style=\"display:none;\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) || array_key_exists("docs", $context) ? $context["docs"] : (function () { throw new RuntimeError('Variable "docs" does not exist.', 16, $this->source); })()));
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
            // line 17
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 17) != (isset($context["lastCreator"]) || array_key_exists("lastCreator", $context) ? $context["lastCreator"] : (function () { throw new RuntimeError('Variable "lastCreator" does not exist.', 17, $this->source); })()))) {
                // line 18
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) {
                    echo "</ul></li>";
                }
                // line 19
                echo "                    <li class=\"folder\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 19), "html", null, true);
                echo "<ul>
                    ";
                // line 20
                $context["lastCreator"] = twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 20);
                // line 21
                echo "                ";
            }
            // line 22
            echo "                <li class=\"salt-framework-link\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_remote_view", ["url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["framework"], "CFPackageURI", [], "any", false, false, false, 22), "uri", [], "any", false, false, false, 22)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></li>
                ";
            // line 23
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23) == true) && (twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 23) != ""))) {
                // line 24
                echo "                    </ul></li>
                ";
            }
            // line 26
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['framework'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    <script>
        \$(function(){
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
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_doc/remote_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 32,  167 => 31,  155 => 27,  141 => 26,  137 => 24,  135 => 23,  128 => 22,  125 => 21,  123 => 20,  118 => 19,  113 => 18,  110 => 17,  93 => 16,  90 => 15,  88 => 14,  82 => 11,  73 => 5,  68 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block body %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <ul class=\"list-inline pull-right\">
            <li>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Load from Remote CASE® Server\" />
            </li>
        </ul>
    {{ form_end(form) }}

    <div id=\"competencyTree\">
        {% set lastCreator = '' %}
        <ul id=\"comptencyTreeData\" style=\"display:none;\">
            {% for framework in docs %}
                {% if framework.creator != lastCreator %}
                    {% if not loop.first %}</ul></li>{% endif %}
                    <li class=\"folder\">{{ framework.creator }}<ul>
                    {% set lastCreator = framework.creator %}
                {% endif %}
                <li class=\"salt-framework-link\"><a href=\"{{ path('doc_tree_remote_view', {'url':framework.CFPackageURI.uri}) |raw }}\">{{ framework.title }}</a></li>
                {% if loop.last == true and framework.creator != '' %}
                    </ul></li>
                {% endif %}
            {% endfor %}
        </ul>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        \$(function(){
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
        });
    </script>
{% endblock %}

", "framework/ls_doc/remote_index.html.twig", "/var/www/html/templates/framework/ls_doc/remote_index.html.twig");
    }
}
