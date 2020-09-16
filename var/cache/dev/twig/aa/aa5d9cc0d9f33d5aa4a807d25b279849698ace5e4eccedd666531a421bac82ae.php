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

/* framework/doc_tree/export_assoc_group.json.twig */
class __TwigTemplate_b8d866c25ff72bbf49e267bb07f1f91b46865706eabaf4a6f771ae56e9144364 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_assoc_group.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_assoc_group.json.twig"));

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
        echo "{
\"id\": ";
        // line 3
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["assocGroup"]) || array_key_exists("assocGroup", $context) ? $context["assocGroup"] : (function () { throw new RuntimeError('Variable "assocGroup" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3));
        echo ",
\"identifier\": ";
        // line 4
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["assocGroup"]) || array_key_exists("assocGroup", $context) ? $context["assocGroup"] : (function () { throw new RuntimeError('Variable "assocGroup" does not exist.', 4, $this->source); })()), "identifier", [], "any", false, false, false, 4));
        echo ",
\"title\": ";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["assocGroup"]) || array_key_exists("assocGroup", $context) ? $context["assocGroup"] : (function () { throw new RuntimeError('Variable "assocGroup" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5));
        echo ",
\"description\": ";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["assocGroup"]) || array_key_exists("assocGroup", $context) ? $context["assocGroup"] : (function () { throw new RuntimeError('Variable "assocGroup" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6));
        echo "
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/export_assoc_group.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 6,  74 => 5,  70 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
{
\"id\": {{ assocGroup.id |json_encode |raw }},
\"identifier\": {{ assocGroup.identifier |json_encode |raw }},
\"title\": {{ assocGroup.title |json_encode |raw }},
\"description\": {{ assocGroup.description |json_encode |raw }}
}
{% endblock %}
", "framework/doc_tree/export_assoc_group.json.twig", "/var/www/html/templates/framework/doc_tree/export_assoc_group.json.twig");
    }
}
