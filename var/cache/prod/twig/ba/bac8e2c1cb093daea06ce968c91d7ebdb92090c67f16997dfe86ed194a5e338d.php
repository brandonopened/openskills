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

/* user/security/login.html.twig */
class __TwigTemplate_eb64bfcb8a675395b6ab50c3a0d4e685ae39249e1943e42a3ec21a53a334aaf8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "user/security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if ( !twig_test_empty(($context["google_captcha_site_key"] ?? null))) {
            // line 5
            echo "        <script src=\"https://www.google.com/recaptcha/api.js\"></script>
    ";
        }
        // line 7
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
            </div>
            <div class=\"col-xs-8\">
                ";
        // line 13
        if (($context["error"] ?? null)) {
            // line 14
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 16
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-4\">
            </div>
            <div class=\"col-xs-4\">
                <form id=\"login-form\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"username\">Username:</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Password:</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                    ";
        // line 34
        if ( !twig_test_empty(($context["redirect"] ?? null))) {
            // line 35
            echo "                        <input type=\"hidden\" name=\"_target_path\" value=\"";
            echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
            echo "\"/>
                    ";
        }
        // line 37
        echo "
                    ";
        // line 38
        if ( !twig_test_empty(($context["google_captcha_site_key"] ?? null))) {
            // line 39
            echo "                        <button class=\"pull-right btn btn-primary btn-login g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, ($context["google_captcha_site_key"] ?? null), "html", null, true);
            echo "\" data-callback=\"onSubmit\">Login</button>
                    ";
        } else {
            // line 41
            echo "                        <button class=\"pull-right btn btn-primary btn-login\" type=\"submit\">Login</button>
                    ";
        }
        // line 43
        echo "                </form>
                ";
        // line 44
        if ($this->extensions['Qandidate\Bundle\ToggleBundle\Twig\ToggleTwigExtension']->is_active("create_account")) {
            // line 45
            echo "                    <a class=\"btn btn-link new-account\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_user_signup");
            echo "\">Create User Account</a>
                ";
        }
        // line 47
        echo "            </div>
        </div>
    </div>
";
    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
        if ( !twig_test_empty(($context["google_captcha_site_key"] ?? null))) {
            // line 54
            echo "        <script>
            function onSubmit(token) {
                document.getElementById('login-form').submit();
            }
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "user/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 54,  148 => 53,  144 => 52,  137 => 47,  131 => 45,  129 => 44,  126 => 43,  122 => 41,  116 => 39,  114 => 38,  111 => 37,  105 => 35,  103 => 34,  99 => 33,  88 => 25,  82 => 22,  74 => 16,  68 => 14,  66 => 13,  58 => 7,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/security/login.html.twig", "/var/www/html/templates/user/security/login.html.twig");
    }
}
