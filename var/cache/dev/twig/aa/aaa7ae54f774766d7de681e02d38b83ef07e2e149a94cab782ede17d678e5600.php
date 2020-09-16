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

/* framework/ls_association/new.html.twig */
class __TwigTemplate_94be9ecb4b116ae32ebbbb6bf39c096615202a16781f0a93ff7fbcb374bbef02 extends \Twig\Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_association/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_association/new.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "framework/ls_association/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "xmlHttpRequest", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <h1>LsAssociation creation</h1>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'widget');
        echo "

        <div id=\"lsItemListWrap\" class=\"row\">
            <div class=\"col-sm-12\">
                <section id=\"lsItemList\" class=\"panel panel-default panel-component\">
                    ";
        // line 14
        if ( !twig_test_empty((isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "                        <div class=\"panel-heading\">Select Destination Standard:</div>
                        <div class=\"panel-body\">
                            <div>
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_render", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 22
        echo "                </section>
            </div>
        </div>

        ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "xmlHttpRequest", [], "any", false, false, false, 26)) {
            // line 27
            echo "            <input class=\"btn btn-primary\" type=\"submit\" value=\"Create\" />
        ";
        }
        // line 29
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "

    ";
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "xmlHttpRequest", [], "any", false, false, false, 31)) {
            // line 32
            echo "    <br/>
    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-default\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsassociation_index");
            echo "\">Back to the list</a>
        </li>
    </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    <script>
        var \$lsDoc = \$('#ls_association_lsDoc');
        \$lsDoc.change(function(){
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$lsDoc.attr('name')] = \$lsDoc.val();
            \$.ajax({
                url: \$form.attr('action'),
                type: \$form.attr('method'),
                data: data,
                success: function(html) {
                    var \$list = \$(html).find('#ls_association_destinationLsItem');

                    var \$replace = \$('#ls_association_destinationNodeUri').length
                        ?\$('#ls_association_destinationNodeUri')
                        :\$('#ls_association_destinationLsItem');

                    var \$replacement = \$(html).find('#ls_association_destinationLsItem').length
                        ?\$(html).find('#ls_association_destinationLsItem')
                        :\$(html).find('#ls_association_destinationNodeUri');

                    \$replace.replaceWith(\$replacement);

                    \$('#lsItemList').replaceWith(\$(html).find('#lsItemList'));
                }
            })
        });

        var \$lsItemList = \$('#lsItemListWrap');
        \$lsItemList.on('click', function(e){
            e.stopPropagation();
            e.preventDefault();

            var \$target = \$(e.target);
            \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_association/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 42,  145 => 41,  130 => 35,  125 => 32,  123 => 31,  117 => 29,  113 => 27,  111 => 26,  105 => 22,  98 => 18,  93 => 15,  91 => 14,  83 => 9,  79 => 8,  76 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}
    {% if not app.request.xmlHttpRequest %}
        <h1>LsAssociation creation</h1>
    {% endif %}

    {{ form_start(form) }}
        {{ form_widget(form) }}

        <div id=\"lsItemListWrap\" class=\"row\">
            <div class=\"col-sm-12\">
                <section id=\"lsItemList\" class=\"panel panel-default panel-component\">
                    {% if lsDoc is not empty %}
                        <div class=\"panel-heading\">Select Destination Standard:</div>
                        <div class=\"panel-body\">
                            <div>
                                {{ render_esi(path('editor_render', {'id':lsDoc.id})) }}
                            </div>
                        </div>
                    {% endif %}
                </section>
            </div>
        </div>

        {% if not app.request.xmlHttpRequest %}
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Create\" />
        {% endif %}
    {{ form_end(form) }}

    {% if not app.request.xmlHttpRequest %}
    <br/>
    <ul class=\"list-inline\">
        <li>
            <a class=\"btn btn-default\" href=\"{{ path('lsassociation_index') }}\">Back to the list</a>
        </li>
    </ul>
    {% endif %}
{% endblock %}

{% block javascripts %}
    <script>
        var \$lsDoc = \$('#ls_association_lsDoc');
        \$lsDoc.change(function(){
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$lsDoc.attr('name')] = \$lsDoc.val();
            \$.ajax({
                url: \$form.attr('action'),
                type: \$form.attr('method'),
                data: data,
                success: function(html) {
                    var \$list = \$(html).find('#ls_association_destinationLsItem');

                    var \$replace = \$('#ls_association_destinationNodeUri').length
                        ?\$('#ls_association_destinationNodeUri')
                        :\$('#ls_association_destinationLsItem');

                    var \$replacement = \$(html).find('#ls_association_destinationLsItem').length
                        ?\$(html).find('#ls_association_destinationLsItem')
                        :\$(html).find('#ls_association_destinationNodeUri');

                    \$replace.replaceWith(\$replacement);

                    \$('#lsItemList').replaceWith(\$(html).find('#lsItemList'));
                }
            })
        });

        var \$lsItemList = \$('#lsItemListWrap');
        \$lsItemList.on('click', function(e){
            e.stopPropagation();
            e.preventDefault();

            var \$target = \$(e.target);
            \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
        });
    </script>
{% endblock %}
", "framework/ls_association/new.html.twig", "/var/www/html/templates/framework/ls_association/new.html.twig");
    }
}
