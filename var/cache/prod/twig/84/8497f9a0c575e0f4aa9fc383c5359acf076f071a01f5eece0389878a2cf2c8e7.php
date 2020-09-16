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
class __TwigTemplate_c7a1b7546afaae4db1c8424f4a4db77abd6dcf4feb97d4d012fbeeadf1e20939 extends \Twig\Template
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
        // line 1
        $context["authClass"] = (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) ? ("auth") : ("no-auth"));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "html", null, true);
        echo "\" xmlns= \"http://www.w3.org/1999/xhtml\" class=\"no-js ";
        echo twig_escape_filter($this->env, ($context["authClass"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "hasPreviousSession", [], "any", false, false, false, 88)) {
            // line 89
            echo "                    <div class=\"flash-messages\">
                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 90), "flashBag", [], "any", false, false, false, 90), "get", [0 => "error"], "method", false, false, false, 90));
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 96), "flashBag", [], "any", false, false, false, 96), "get", [0 => "warning"], "method", false, false, false, 96));
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 102), "flashBag", [], "any", false, false, false, 102), "get", [0 => "success"], "method", false, false, false, 102));
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 108), "flashBag", [], "any", false, false, false, 108), "get", [0 => "info"], "method", false, false, false, 108));
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
    }

    // line 6
    public function block_xuacompatible($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        ";
    }

    // line 11
    public function block_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "OpenSALT™";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/main.css", "encore"), "html", null, true);
        echo "\" />
        ";
    }

    // line 30
    public function block_bodyclasses($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 33
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 36
    public function block_navbar_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<a class=\"navbar-brand\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("salt_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/opensalt.svg"), "html", null, true);
        echo "\" alt=\"OpenSALT™\"></a>
                                ";
        // line 38
        if ( !twig_test_empty(($context["brand_logo_url"] ?? null))) {
            echo "<a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("brand_link_url", $context)) ? (_twig_default_filter(($context["brand_link_url"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("salt_index"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("salt_index"))), "html_attr");
            echo "\" ";
            if ( !twig_test_empty(($context["brand_link_style"] ?? null))) {
                echo "style=\"";
                echo twig_escape_filter($this->env, ($context["brand_link_style"] ?? null), "html_attr");
                echo "\"";
            }
            echo "><img src=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("brand_logo_url", $context)) ? (_twig_default_filter(($context["brand_logo_url"] ?? null), "")) : ("")), "html_attr");
            echo "\" ";
            if ( !twig_test_empty(($context["brand_logo_style"] ?? null))) {
                echo "style=\"";
                echo twig_escape_filter($this->env, ($context["brand_logo_style"] ?? null), "html_attr");
                echo "\"";
            }
            echo "></a>";
        }
    }

    // line 40
    public function block_navbar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 42
            echo "                                <ul class=\"nav navbar-nav navbar-right\">
                                    <li id=\"notifications-switch-location\" class=\"notifications-switch-wrapper\"></li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" area-expanded=\"false\">Signed in as <strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "username", [], "any", false, false, false, 45), "html", null, true);
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
                if (($context["seperator_1"] ?? null)) {
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
            if (($context["seperator_1"] ?? null)) {
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
($context["app"] ?? null), "request", [], "any", false, false, false, 76), "attributes", [], "any", false, false, false, 76), "get", [0 => "_route"], "method", false, false, false, 76) != "login")) {
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
    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 119
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "<nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-text navbar-left\">
                                ";
        // line 123
        echo ($context["footer_left_text"] ?? null);
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
    }

    // line 134
    public function block_sitejavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 139
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  479 => 139,  473 => 137,  469 => 136,  464 => 135,  460 => 134,  452 => 126,  446 => 123,  441 => 120,  437 => 119,  431 => 116,  426 => 81,  420 => 79,  418 => 78,  407 => 77,  405 => 76,  398 => 72,  392 => 70,  388 => 68,  385 => 67,  379 => 65,  377 => 64,  373 => 62,  370 => 61,  367 => 60,  361 => 58,  359 => 57,  356 => 56,  350 => 54,  348 => 53,  345 => 52,  339 => 50,  337 => 49,  335 => 48,  333 => 47,  329 => 45,  324 => 42,  322 => 41,  318 => 40,  296 => 38,  289 => 37,  285 => 36,  280 => 83,  278 => 40,  276 => 36,  273 => 34,  269 => 33,  263 => 30,  256 => 16,  252 => 15,  245 => 14,  240 => 12,  236 => 11,  231 => 7,  227 => 6,  220 => 140,  217 => 139,  215 => 134,  210 => 131,  208 => 119,  205 => 117,  202 => 116,  198 => 114,  189 => 111,  185 => 109,  180 => 108,  171 => 105,  167 => 103,  162 => 102,  153 => 99,  149 => 97,  144 => 96,  135 => 93,  131 => 91,  127 => 90,  124 => 89,  122 => 88,  118 => 86,  116 => 33,  111 => 30,  107 => 28,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  84 => 19,  82 => 18,  80 => 15,  75 => 14,  73 => 11,  69 => 10,  66 => 9,  64 => 6,  54 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
