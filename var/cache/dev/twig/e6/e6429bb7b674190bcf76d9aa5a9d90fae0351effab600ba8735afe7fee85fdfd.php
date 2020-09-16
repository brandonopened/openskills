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

/* api/case_doc/case_swagger_doc.html.twig */
class __TwigTemplate_653dc9681fcb1ef9eff98df4bf2e7c28f1ba5060cc6395ab87caa4489b77013e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'sitejavascripts' => [$this, 'block_sitejavascripts'],
            'navbar_right' => [$this, 'block_navbar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/case_doc/case_swagger_doc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/case_doc/case_swagger_doc.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "api/case_doc/case_swagger_doc.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/swaggercss.css", "encore"), "html", null, true);
        echo "\" />
    <style>
        pre {
            display: inherit;
            padding: inherit;
            line-height: inherit;
            border: inherit;
            background-color: inherit;
        }
        .swagger-ui .info pre.base-url {
            color: transparent;
        }
        pre.base-url:before {
            content: \"[ Base URL: /ims/case/v1p0 ]\";
            color: #3b4151;
        }
        hgroup.main a:before {
            content: \"[ OpenAPI JSON file: \";
        }
        hgroup.main a:after {
            content: \" ]\";
        }
        .swagger-ui .info {
            margin-bottom: 15px;
        }
        .swagger-ui .info .title {
            font-size: 24px;
        }
        .model-box {
            padding: 5px;
        }
        .opblock-tag {
            background-color: rgba(97,175,254,.3);
        }
        .opblock-tag .markdown {
            font-size: 12px;
        }
        .try-out, .try-out__btn,
        .scheme-container,
        .information-container > section > div > div:nth-child(3),
        .information-container > section > div > div:nth-child(4),
        .information-container > section > div > div:nth-child(5)
        {
            display: none;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_sitejavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitejavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitejavascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_navbar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script src=\"//unpkg.com/swagger-ui-dist@3/swagger-ui-bundle.js\"></script>
    <script>
    var ui = SwaggerUIBundle({
        url: '/case-v1p0-swagger.json',
        dom_id: '.swagger-section',
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIBundle.SwaggerUIStandalonePreset
        ]
    });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "<div class=\"container\">
    <aside class=\"panel panel-default\" style=\"margin: 0 0 -35px; border-color: #aaa; box-shadow: 3px 3px #ddd;\">
        <p class=\"panel-body text-center\" style=\"margin:0;\">
            This documentation is automatically generated from the content of Appendix B1 in the <a href=\"https://www.imsglobal.org/sites/default/files/CASE/casev1p0/rest_binding/caseservicev1p0_restbindv1p0.html#AppB1\">CASE® 1.0 Specification (REST API)</a> document.
        </p>
    </aside>
    <div class=\"swagger-section\">
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "api/case_doc/case_swagger_doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 76,  200 => 75,  179 => 62,  169 => 61,  151 => 58,  133 => 54,  76 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block stylesheets %}
{{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('build/swaggercss.css', 'encore') }}\" />
    <style>
        pre {
            display: inherit;
            padding: inherit;
            line-height: inherit;
            border: inherit;
            background-color: inherit;
        }
        .swagger-ui .info pre.base-url {
            color: transparent;
        }
        pre.base-url:before {
            content: \"[ Base URL: /ims/case/v1p0 ]\";
            color: #3b4151;
        }
        hgroup.main a:before {
            content: \"[ OpenAPI JSON file: \";
        }
        hgroup.main a:after {
            content: \" ]\";
        }
        .swagger-ui .info {
            margin-bottom: 15px;
        }
        .swagger-ui .info .title {
            font-size: 24px;
        }
        .model-box {
            padding: 5px;
        }
        .opblock-tag {
            background-color: rgba(97,175,254,.3);
        }
        .opblock-tag .markdown {
            font-size: 12px;
        }
        .try-out, .try-out__btn,
        .scheme-container,
        .information-container > section > div > div:nth-child(3),
        .information-container > section > div > div:nth-child(4),
        .information-container > section > div > div:nth-child(5)
        {
            display: none;
        }
    </style>
{% endblock %}

{# No need for site-wide javascript code on this page #}
{% block sitejavascripts %}
{% endblock %}

{# Remove login/logout links on this page #}
{% block navbar_right %}
{% endblock %}

{% block javascripts %}
    <script src=\"//unpkg.com/swagger-ui-dist@3/swagger-ui-bundle.js\"></script>
    <script>
    var ui = SwaggerUIBundle({
        url: '/case-v1p0-swagger.json',
        dom_id: '.swagger-section',
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIBundle.SwaggerUIStandalonePreset
        ]
    });
    </script>
{% endblock %}

{% block body %}
<div class=\"container\">
    <aside class=\"panel panel-default\" style=\"margin: 0 0 -35px; border-color: #aaa; box-shadow: 3px 3px #ddd;\">
        <p class=\"panel-body text-center\" style=\"margin:0;\">
            This documentation is automatically generated from the content of Appendix B1 in the <a href=\"https://www.imsglobal.org/sites/default/files/CASE/casev1p0/rest_binding/caseservicev1p0_restbindv1p0.html#AppB1\">CASE® 1.0 Specification (REST API)</a> document.
        </p>
    </aside>
    <div class=\"swagger-section\">
    </div>
</div>
{% endblock %}
", "api/case_doc/case_swagger_doc.html.twig", "/var/www/html/templates/api/case_doc/case_swagger_doc.html.twig");
    }
}
