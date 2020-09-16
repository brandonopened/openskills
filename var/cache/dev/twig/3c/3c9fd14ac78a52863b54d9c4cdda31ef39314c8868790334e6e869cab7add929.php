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

/* base.html.twig */
class __TwigTemplate_055aa150c471972dd0787156dd440f965f722faba956a1ea123552992a5fede0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'xuacompatible' => [$this, 'block_xuacompatible'],
            'viewport' => [$this, 'block_viewport'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bodyclasses' => [$this, 'block_bodyclasses'],
            'header' => [$this, 'block_header'],
            'navbar_left' => [$this, 'block_navbar_left'],
            'navbar_right' => [$this, 'block_navbar_right'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'sitejavascripts' => [$this, 'block_sitejavascripts'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $context["authClass"] = (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) ? ("auth") : ("no-auth"));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "html", null, true);
        echo "\" xmlns= \"http://www.w3.org/1999/xhtml\" class=\"no-js ";
        echo twig_escape_filter($this->env, (isset($context["authClass"]) || array_key_exists("authClass", $context) ? $context["authClass"] : (function () { throw new RuntimeError('Variable "authClass" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\" />
        ";
        // line 6
        $this->displayBlock('xuacompatible', $context, $blocks);
        // line 9
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <meta http-equiv=\"Content-Language\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('viewport', $context, $blocks);
        // line 14
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        ";
        // line 19
        echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        echo "\">
        <link rel=\"mask-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#22454f\">
        <meta name=\"apple-mobile-web-app-title\" content=\"OpenSALT\">
        <meta name=\"application-name\" content=\"OpenSALT\">
        <meta name=\"theme-color\" content=\"#ffffff\">";
        // line 28
        echo "<script>var x=document.getElementsByTagName(\"html\")[0];x.className=x.className.replace(/(^|\\s)no-js(\\s|\$)/,\"\$1js\$2\");</script>
    </head>
    <body class=\"";
        // line 30
        $this->displayBlock('bodyclasses', $context, $blocks);
        echo "\">
        <div class=\"container container--main\">
            <header class=\"header\">";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 86
        echo "</header>
            <main class=\"content clearfix\" role=\"main\">
                ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "hasPreviousSession", [], "any", false, false, false, 88)) {
            // line 89
            echo "                    <div class=\"flash-messages\">
                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "flashBag", [], "any", false, false, false, 90), "get", [0 => "error"], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 91
                echo "                            <div class=\"flash-error alert alert-danger alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                ";
                // line 93
                echo $context["flash_message"];
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "session", [], "any", false, false, false, 96), "flashBag", [], "any", false, false, false, 96), "get", [0 => "warning"], "method", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 97
                echo "                            <div class=\"flash-warning alert alert-warning alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                ";
                // line 99
                echo $context["flash_message"];
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "session", [], "any", false, false, false, 102), "flashBag", [], "any", false, false, false, 102), "get", [0 => "success"], "method", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 103
                echo "                            <div class=\"flash-notice alert alert-success alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                ";
                // line 105
                echo $context["flash_message"];
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "session", [], "any", false, false, false, 108), "flashBag", [], "any", false, false, false, 108), "get", [0 => "info"], "method", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 109
                echo "                            <div class=\"flash-notice alert alert-info alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                ";
                // line 111
                echo $context["flash_message"];
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                    </div>
                ";
        }
        // line 116
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "            </main>
            <footer class=\"footer\">";
        // line 119
        $this->displayBlock('footer', $context, $blocks);
        // line 131
        echo "</footer>
        </div>
        <div style=\"display: none;\">
            ";
        // line 134
        $this->displayBlock('sitejavascripts', $context, $blocks);
        // line 139
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 140
        echo "        </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_xuacompatible($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "xuacompatible"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "xuacompatible"));

        // line 7
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "viewport"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "viewport"));

        // line 12
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "OpenSALT™";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/main.css", "encore"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_bodyclasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclasses"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclasses"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "<nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">";
        // line 36
        $this->displayBlock('navbar_left', $context, $blocks);
        // line 40
        $this->displayBlock('navbar_right', $context, $blocks);
        // line 83
        echo "</div>
                    </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_navbar_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_left"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_left"));

        // line 37
        echo "<a class=\"navbar-brand\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("salt_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/opensalt.svg"), "html", null, true);
        echo "\" alt=\"OpenSALT™\"></a>
                                ";
        // line 38
        if ( !twig_test_empty((isset($context["brand_logo_url"]) || array_key_exists("brand_logo_url", $context) ? $context["brand_logo_url"] : (function () { throw new RuntimeError('Variable "brand_logo_url" does not exist.', 38, $this->source); })()))) {
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("brand_link_url", $context)) ? (_twig_default_filter((isset($context["brand_link_url"]) || array_key_exists("brand_link_url", $context) ? $context["brand_link_url"] : (function () { throw new RuntimeError('Variable "brand_link_url" does not exist.', 38, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("salt_index"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("salt_index"))), "html_attr");
            echo "\" ";
            if ( !twig_test_empty((isset($context["brand_link_style"]) || array_key_exists("brand_link_style", $context) ? $context["brand_link_style"] : (function () { throw new RuntimeError('Variable "brand_link_style" does not exist.', 38, $this->source); })()))) {
                echo "style=\"";
                echo twig_escape_filter($this->env, (isset($context["brand_link_style"]) || array_key_exists("brand_link_style", $context) ? $context["brand_link_style"] : (function () { throw new RuntimeError('Variable "brand_link_style" does not exist.', 38, $this->source); })()), "html_attr");
                echo "\"";
            }
            echo "><img src=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("brand_logo_url", $context)) ? (_twig_default_filter((isset($context["brand_logo_url"]) || array_key_exists("brand_logo_url", $context) ? $context["brand_logo_url"] : (function () { throw new RuntimeError('Variable "brand_logo_url" does not exist.', 38, $this->source); })()), "")) : ("")), "html_attr");
            echo "\" ";
            if ( !twig_test_empty((isset($context["brand_logo_style"]) || array_key_exists("brand_logo_style", $context) ? $context["brand_logo_style"] : (function () { throw new RuntimeError('Variable "brand_logo_style" does not exist.', 38, $this->source); })()))) {
                echo "style=\"";
                echo twig_escape_filter($this->env, (isset($context["brand_logo_style"]) || array_key_exists("brand_logo_style", $context) ? $context["brand_logo_style"] : (function () { throw new RuntimeError('Variable "brand_logo_style" does not exist.', 38, $this->source); })()), "html_attr");
                echo "\"";
            }
            echo "></a>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_navbar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_right"));

        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            echo "                                <ul class=\"nav navbar-nav navbar-right\">
                                    <li id=\"notifications-switch-location\" class=\"notifications-switch-wrapper\"></li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" area-expanded=\"false\">Signed in as <strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "username", [], "any", false, false, false, 45), "html", null, true);
            echo "</strong> <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">";
            // line 47
            $context["seperator_1"] = false;
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage", "organizations")) {
                // line 49
                $context["seperator_1"] = true;
                // line 50
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_organization_index");
                echo "\">Manage organizations</a></li>
                                            ";
            }
            // line 52
            echo "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage", "users")) {
                // line 53
                $context["seperator_1"] = true;
                // line 54
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_user_index");
                echo "\">Manage users</a></li>
                                            ";
            }
            // line 56
            echo "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage", "system_logs")) {
                // line 57
                $context["seperator_1"] = true;
                // line 58
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("system_logs_show");
                echo "\">Manage system logs</a></li>
                                            ";
            }
            // line 60
            echo "                                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage", "mirrors")) {
                // line 61
                echo "                                                ";
                if ((isset($context["seperator_1"]) || array_key_exists("seperator_1", $context) ? $context["seperator_1"] : (function () { throw new RuntimeError('Variable "seperator_1" does not exist.', 61, $this->source); })())) {
                    // line 62
                    echo "                                                    <li role=\"separator\" class=\"divider\"></li>
                                                ";
                }
                // line 64
                $context["seperator_1"] = true;
                // line 65
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mirror_server_index");
                echo "\">Manage mirrors</a></li>
                                            ";
            }
            // line 67
            echo "                                            ";
            if ((isset($context["seperator_1"]) || array_key_exists("seperator_1", $context) ? $context["seperator_1"] : (function () { throw new RuntimeError('Variable "seperator_1" does not exist.', 67, $this->source); })())) {
                // line 68
                echo "                                                <li role=\"separator\" class=\"divider\"></li>
                                            ";
            }
            // line 70
            echo "                                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("user_change_password");
            echo "\">Change password</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\" class=\"logout\">Sign out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", [0 => "_route"], "method", false, false, false, 76) != "login")) {
            // line 77
            echo "                                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
            echo "\" class=\"btn ";
            if ($this->extensions['Qandidate\Bundle\ToggleBundle\Twig\ToggleTwigExtension']->is_active("create_account")) {
                echo "btn-login";
            } else {
                echo "btn-default";
            }
            echo " navbar-btn pull-right login\">Sign in</a>
                                ";
            // line 78
            if ($this->extensions['Qandidate\Bundle\ToggleBundle\Twig\ToggleTwigExtension']->is_active("create_account")) {
                // line 79
                echo "                                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("public_user_signup");
                echo "\" class=\"btn btn-signup navbar-btn pull-right login\">Sign up</a>
                                ";
            }
            // line 81
            echo "                            ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 120
        echo "<nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-text navbar-left\">
                                ";
        // line 123
        echo (isset($context["footer_left_text"]) || array_key_exists("footer_left_text", $context) ? $context["footer_left_text"] : (function () { throw new RuntimeError('Variable "footer_left_text" does not exist.', 123, $this->source); })());
        echo "
                            </div>
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("site_about");
        echo "\">About OpenSALT™</a></li>
                            </ul>
                        </div>
                    </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_sitejavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitejavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sitejavascripts"));

        // line 135
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/manifest.js", "encore"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/base.js", "encore"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/site.js", "encore"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 139,  611 => 137,  607 => 136,  602 => 135,  592 => 134,  578 => 126,  572 => 123,  567 => 120,  557 => 119,  539 => 116,  528 => 81,  522 => 79,  520 => 78,  509 => 77,  507 => 76,  500 => 72,  494 => 70,  490 => 68,  487 => 67,  481 => 65,  479 => 64,  475 => 62,  472 => 61,  469 => 60,  463 => 58,  461 => 57,  458 => 56,  452 => 54,  450 => 53,  447 => 52,  441 => 50,  439 => 49,  437 => 48,  435 => 47,  431 => 45,  426 => 42,  424 => 41,  414 => 40,  386 => 38,  379 => 37,  369 => 36,  358 => 83,  356 => 40,  354 => 36,  351 => 34,  341 => 33,  323 => 30,  310 => 16,  300 => 15,  281 => 14,  270 => 12,  260 => 11,  249 => 7,  239 => 6,  226 => 140,  223 => 139,  221 => 134,  216 => 131,  214 => 119,  211 => 117,  208 => 116,  204 => 114,  195 => 111,  191 => 109,  186 => 108,  177 => 105,  173 => 103,  168 => 102,  159 => 99,  155 => 97,  150 => 96,  141 => 93,  137 => 91,  133 => 90,  130 => 89,  128 => 88,  124 => 86,  122 => 33,  117 => 30,  113 => 28,  107 => 23,  103 => 22,  99 => 21,  95 => 20,  90 => 19,  88 => 18,  86 => 15,  81 => 14,  79 => 11,  75 => 10,  72 => 9,  70 => 6,  60 => 3,  57 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set authClass = is_granted('ROLE_USER') ? 'auth' : 'no-auth' -%}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale}}\" xml:lang=\"{{ app.request.locale }}\" xmlns= \"http://www.w3.org/1999/xhtml\" class=\"no-js {{ authClass }}\">
    <head>
        <meta charset=\"utf-8\" />
        {% block xuacompatible %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        {% endblock %}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <meta http-equiv=\"Content-Language\" content=\"{{ app.request.locale }}\">
        {% block viewport %}
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% endblock %}
        <title>{% block title %}OpenSALT™{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('build/main.css', 'encore') }}\" />
        {% endblock %}
        {# <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" /> #}
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('apple-touch-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon32.png') }}\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('favicon16.png') }}\" sizes=\"16x16\">
        <link rel=\"manifest\" href=\"{{ asset('manifest.json') }}\">
        <link rel=\"mask-icon\" href=\"{{ asset('safari-pinned-tab.svg') }}\" color=\"#22454f\">
        <meta name=\"apple-mobile-web-app-title\" content=\"OpenSALT\">
        <meta name=\"application-name\" content=\"OpenSALT\">
        <meta name=\"theme-color\" content=\"#ffffff\">
        {#- <script src=\"{{ asset('js/modernizr.js') }}\"></script> -#}
        <script>var x=document.getElementsByTagName(\"html\")[0];x.className=x.className.replace(/(^|\\s)no-js(\\s|\$)/,\"\$1js\$2\");</script>
    </head>
    <body class=\"{% block bodyclasses %}{% endblock %}\">
        <div class=\"container container--main\">
            <header class=\"header\">
                {%- block header -%}
                    <nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">
                            {%- block navbar_left -%}
                                <a class=\"navbar-brand\" href=\"{{ url('salt_index') }}\"><img src=\"{{ asset('assets/img/opensalt.svg') }}\" alt=\"OpenSALT™\"></a>
                                {% if brand_logo_url is not empty %}<a class=\"navbar-brand\" href=\"{{ brand_link_url |default(url('salt_index')) |e('html_attr') }}\" {% if brand_link_style is not empty %}style=\"{{ brand_link_style |e('html_attr') }}\"{% endif %}><img src=\"{{ brand_logo_url |default('') |e('html_attr') }}\" {% if brand_logo_style is not empty %}style=\"{{ brand_logo_style |e('html_attr') }}\"{% endif %}></a>{% endif %}
                            {%- endblock -%}
                            {%- block navbar_right -%}
                            {% if (is_granted('ROLE_USER')) %}
                                <ul class=\"nav navbar-nav navbar-right\">
                                    <li id=\"notifications-switch-location\" class=\"notifications-switch-wrapper\"></li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" area-expanded=\"false\">Signed in as <strong>{{ app.user.username }}</strong> <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            {%- set seperator_1 = false -%}
                                            {% if is_granted('manage', 'organizations') %}
                                                {%- set seperator_1 = true -%}
                                                <li><a href=\"{{ url(\"admin_organization_index\") }}\">Manage organizations</a></li>
                                            {% endif %}
                                            {% if is_granted('manage', 'users') %}
                                                {%- set seperator_1 = true -%}
                                                <li><a href=\"{{ url(\"admin_user_index\") }}\">Manage users</a></li>
                                            {% endif %}
                                            {% if is_granted('manage', 'system_logs') %}
                                                {%- set seperator_1 = true -%}
                                                <li><a href=\"{{ url(\"system_logs_show\") }}\">Manage system logs</a></li>
                                            {% endif %}
                                            {% if is_granted('manage', 'mirrors') %}
                                                {% if seperator_1 %}
                                                    <li role=\"separator\" class=\"divider\"></li>
                                                {% endif %}
                                                {%- set seperator_1 = true -%}
                                                <li><a href=\"{{ url(\"mirror_server_index\") }}\">Manage mirrors</a></li>
                                            {% endif %}
                                            {% if seperator_1 %}
                                                <li role=\"separator\" class=\"divider\"></li>
                                            {% endif %}
                                            <li><a href=\"{{ url(\"user_change_password\") }}\">Change password</a></li>
                                            <li role=\"separator\" class=\"divider\"></li>
                                            <li><a href=\"{{ url(\"logout\") }}\" class=\"logout\">Sign out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            {% elseif (app.request.attributes.get('_route') != 'login') %}
                                <a href=\"{{ url(\"login\") }}\" class=\"btn {% if 'create_account' is active feature %}btn-login{% else %}btn-default{% endif %} navbar-btn pull-right login\">Sign in</a>
                                {% if 'create_account' is active feature %}
                                    <a href=\"{{ url(\"public_user_signup\") }}\" class=\"btn btn-signup navbar-btn pull-right login\">Sign up</a>
                                {% endif %}
                            {% endif %}
                            {%- endblock -%}
                        </div>
                    </nav>
                {%- endblock -%}
            </header>
            <main class=\"content clearfix\" role=\"main\">
                {% if app.request.hasPreviousSession %}
                    <div class=\"flash-messages\">
                        {% for flash_message in app.session.flashBag.get('error') %}
                            <div class=\"flash-error alert alert-danger alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                {{ flash_message|raw }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('warning') %}
                            <div class=\"flash-warning alert alert-warning alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                {{ flash_message|raw }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('success') %}
                            <div class=\"flash-notice alert alert-success alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                {{ flash_message|raw }}
                            </div>
                        {% endfor %}
                        {% for flash_message in app.session.flashBag.get('info') %}
                            <div class=\"flash-notice alert alert-info alert-dismissable\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                {{ flash_message|raw }}
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
                {% block body %}{% endblock %}
            </main>
            <footer class=\"footer\">
                {%- block footer -%}
                    <nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-text navbar-left\">
                                {{ footer_left_text|raw }}
                            </div>
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"{{ url('site_about') }}\">About OpenSALT™</a></li>
                            </ul>
                        </div>
                    </nav>
                {%- endblock -%}
            </footer>
        </div>
        <div style=\"display: none;\">
            {% block sitejavascripts %}
                <script src=\"{{ asset('build/manifest.js', 'encore') }}\"></script>
                <script src=\"{{ asset('build/base.js', 'encore') }}\"></script>
                <script src=\"{{ asset('build/site.js', 'encore') }}\"></script>
            {% endblock %}
            {% block javascripts %}{% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
