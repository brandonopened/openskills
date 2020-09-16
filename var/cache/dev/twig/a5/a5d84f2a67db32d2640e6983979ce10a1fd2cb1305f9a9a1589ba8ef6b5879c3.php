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

/* framework/editor/_modal_component.html.twig */
class __TwigTemplate_9880ba54d0d9ebc588d99406666f0d931d9a27bcc0982bf2fdef6d1d11af47c1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'modalBody' => [$this, 'block_modalBody'],
            'modalAllButtons' => [$this, 'block_modalAllButtons'],
            'modalButtons' => [$this, 'block_modalButtons'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/_modal_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/_modal_component.html.twig"));

        // line 1
        if ( !array_key_exists("closeButton", $context)) {
            // line 2
            echo "    ";
            $context["closeButton"] = "Close";
        }
        // line 4
        if ( !array_key_exists("saveButton", $context)) {
            // line 5
            echo "    ";
            $context["saveButton"] = "Save";
        }
        // line 7
        echo "<div class=\"modal fade\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["modalName"]) || array_key_exists("modalName", $context) ? $context["modalName"] : (function () { throw new RuntimeError('Variable "modalName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "Modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        echo twig_escape_filter($this->env, (isset($context["modalName"]) || array_key_exists("modalName", $context) ? $context["modalName"] : (function () { throw new RuntimeError('Variable "modalName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "ModalLabel\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["modalName"]) || array_key_exists("modalName", $context) ? $context["modalName"] : (function () { throw new RuntimeError('Variable "modalName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "ModalLabel\">";
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 15
        $this->displayBlock('modalBody', $context, $blocks);
        // line 16
        echo "            </div>
            <div class=\"modal-footer\">
                ";
        // line 18
        $this->displayBlock('modalAllButtons', $context, $blocks);
        // line 24
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_modalBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalBody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalBody"));

        echo "Loading form...";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_modalAllButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalAllButtons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalAllButtons"));

        // line 19
        echo "                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, (isset($context["closeButton"]) || array_key_exists("closeButton", $context) ? $context["closeButton"] : (function () { throw new RuntimeError('Variable "closeButton" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</button>
                    ";
        // line 20
        $this->displayBlock('modalButtons', $context, $blocks);
        // line 23
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_modalButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalButtons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalButtons"));

        // line 21
        echo "                        <button type=\"button\" class=\"btn btn-primary btn-save\">";
        echo twig_escape_filter($this->env, (isset($context["saveButton"]) || array_key_exists("saveButton", $context) ? $context["saveButton"] : (function () { throw new RuntimeError('Variable "saveButton" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</button>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/_modal_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 21,  145 => 20,  135 => 23,  133 => 20,  128 => 19,  118 => 18,  99 => 15,  85 => 24,  83 => 18,  79 => 16,  77 => 15,  69 => 12,  58 => 7,  54 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if closeButton is not defined %}
    {% set closeButton = 'Close' %}
{% endif %}
{% if saveButton is not defined %}
    {% set saveButton = 'Save' %}
{% endif %}
<div class=\"modal fade\" id=\"{{ modalName }}Modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ modalName }}ModalLabel\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"{{ modalName }}ModalLabel\">{{ modalTitle }}</h4>
            </div>
            <div class=\"modal-body\">
                {% block modalBody %}Loading form...{% endblock %}
            </div>
            <div class=\"modal-footer\">
                {% block modalAllButtons %}
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ closeButton }}</button>
                    {% block modalButtons %}
                        <button type=\"button\" class=\"btn btn-primary btn-save\">{{ saveButton }}</button>
                    {% endblock %}
                {% endblock %}
            </div>
        </div>
    </div>
</div>
", "framework/editor/_modal_component.html.twig", "/var/www/html/templates/framework/editor/_modal_component.html.twig");
    }
}
