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

/* user/signup/signup.html.twig */
class __TwigTemplate_63acc6ee70313e4c3b472232abe4fc8d9457a87c8910c986dcb13c255363a355 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_label_class' => [$this, 'block_form_label_class'],
            'form_group_class' => [$this, 'block_form_group_class'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "user/signup/signup.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/signup/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/signup/signup.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-3";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-9";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
    <h1>Create new account</h1>

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'errors');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "plainPassword", [], "any", false, false, false, 14), 'row');
        echo "

        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "org", [], "any", false, false, false, 16), 'row');
        echo "
        <div class=\"form-group js-add-org-message\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-9\">
                <i>If your organization is not in the list, select Other to add it.</i>
            </div>
        </div>
        <div class=\"signup_new_org\" style=\"display: none\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "newOrg", [], "any", false, false, false, 24), 'row');
        echo "
        </div>
        <ul class=\"list-inline pull-right\">
            <li>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" />
            </li>
        </ul>
    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var \$org = \$('#signup_org');
        var \$newOrg = \$('#signup_newOrg');
        var \$username = \$('#signup_username');
        var orgs = [];

        var errorContent = '<span class=\"help-block\">' +
        '<ul class=\"list-unstyled\"><li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> Choose this organization from the Organization list' +
        '</li></ul></span>';

        function removeError() {
            \$('.signup_new_org').removeClass('has-error');
            \$newOrg.next('span').remove();
            \$('input[type=\"submit\"]').removeClass('disabled');
        }

        \$('#signup_org option').each(function() {
            if (this.value) {
                orgs.push(this.text);
            }
        });

        function showHideOtherOrg() {
            if (\$org.val() === 'other') {
                \$('.signup_new_org').show();
                \$('.js-add-org-message').hide('fast');
                \$('#signup_newOrg').attr('required', true);
            } else {
                \$('.signup_new_org').hide();
                \$('.js-add-org-message').show('fast');
                \$('#signup_newOrg').attr('required', false);
            }
        }

        if (\$newOrg.val() !== '') {
            \$org.val('other');
            showHideOtherOrg();
        }

        \$org.change(function() {
            removeError();
            \$newOrg.val('');

            showHideOtherOrg();
        });

        \$newOrg.on('blur', function() {
            removeError();
            if (orgs.includes(\$newOrg.val())) {
                \$('.signup_new_org').addClass('has-error');
                \$newOrg.parent().append(errorContent);
                \$('input[type=\"submit\"]').addClass('disabled');
            }
        });

        \$('[data-toggle=\"popover\"]').popover({
            trigger: 'hover',
            placement: function() { return \$(window).width() < 1100 ? 'bottom' : 'left'; },
            html: true,
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/signup/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 37,  168 => 36,  155 => 32,  144 => 24,  133 => 16,  128 => 14,  124 => 13,  120 => 12,  116 => 11,  111 => 8,  101 => 7,  82 => 5,  63 => 4,  53 => 1,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% form_theme form _self %}
{% block form_label_class -%}col-sm-3{%- endblock form_label_class %}
{% block form_group_class -%}col-sm-9{%- endblock form_group_class %}

{% block body %}
    <div class=\"container\">
    <h1>Create new account</h1>

    {{ form_start(form) }}
        {{ form_errors(form) }}
        {{ form_row(form.username) }}
        {{ form_row(form.plainPassword) }}

        {{ form_row(form.org) }}
        <div class=\"form-group js-add-org-message\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-9\">
                <i>If your organization is not in the list, select Other to add it.</i>
            </div>
        </div>
        <div class=\"signup_new_org\" style=\"display: none\">
            {{ form_row(form.newOrg) }}
        </div>
        <ul class=\"list-inline pull-right\">
            <li>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" />
            </li>
        </ul>
    </div>
    {{ form_end(form) }}

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        var \$org = \$('#signup_org');
        var \$newOrg = \$('#signup_newOrg');
        var \$username = \$('#signup_username');
        var orgs = [];

        var errorContent = '<span class=\"help-block\">' +
        '<ul class=\"list-unstyled\"><li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> Choose this organization from the Organization list' +
        '</li></ul></span>';

        function removeError() {
            \$('.signup_new_org').removeClass('has-error');
            \$newOrg.next('span').remove();
            \$('input[type=\"submit\"]').removeClass('disabled');
        }

        \$('#signup_org option').each(function() {
            if (this.value) {
                orgs.push(this.text);
            }
        });

        function showHideOtherOrg() {
            if (\$org.val() === 'other') {
                \$('.signup_new_org').show();
                \$('.js-add-org-message').hide('fast');
                \$('#signup_newOrg').attr('required', true);
            } else {
                \$('.signup_new_org').hide();
                \$('.js-add-org-message').show('fast');
                \$('#signup_newOrg').attr('required', false);
            }
        }

        if (\$newOrg.val() !== '') {
            \$org.val('other');
            showHideOtherOrg();
        }

        \$org.change(function() {
            removeError();
            \$newOrg.val('');

            showHideOtherOrg();
        });

        \$newOrg.on('blur', function() {
            removeError();
            if (orgs.includes(\$newOrg.val())) {
                \$('.signup_new_org').addClass('has-error');
                \$newOrg.parent().append(errorContent);
                \$('input[type=\"submit\"]').addClass('disabled');
            }
        });

        \$('[data-toggle=\"popover\"]').popover({
            trigger: 'hover',
            placement: function() { return \$(window).width() < 1100 ? 'bottom' : 'left'; },
            html: true,
        });
    </script>

{% endblock %}

", "user/signup/signup.html.twig", "/var/www/html/templates/user/signup/signup.html.twig");
    }
}
