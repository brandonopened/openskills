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
class __TwigTemplate_567a659f4d852ab75f6018a20f50197a217e28d10c069c0c49358b3a73558a94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "user/security/login.html.twig", 1);
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
        if ( !twig_test_empty((isset($context["google_captcha_site_key"]) || array_key_exists("google_captcha_site_key", $context) ? $context["google_captcha_site_key"] : (function () { throw new RuntimeError('Variable "google_captcha_site_key" does not exist.', 4, $this->source); })()))) {
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
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, false, 14), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
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
        if ( !twig_test_empty((isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 34, $this->source); })()))) {
            // line 35
            echo "                        <input type=\"hidden\" name=\"_target_path\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\"/>
                    ";
        }
        // line 37
        echo "
                    ";
        // line 38
        if ( !twig_test_empty((isset($context["google_captcha_site_key"]) || array_key_exists("google_captcha_site_key", $context) ? $context["google_captcha_site_key"] : (function () { throw new RuntimeError('Variable "google_captcha_site_key" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "                        <button class=\"pull-right btn btn-primary btn-login g-recaptcha\" data-sitekey=\"";
            echo twig_escape_filter($this->env, (isset($context["google_captcha_site_key"]) || array_key_exists("google_captcha_site_key", $context) ? $context["google_captcha_site_key"] : (function () { throw new RuntimeError('Variable "google_captcha_site_key" does not exist.', 39, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        if ( !twig_test_empty((isset($context["google_captcha_site_key"]) || array_key_exists("google_captcha_site_key", $context) ? $context["google_captcha_site_key"] : (function () { throw new RuntimeError('Variable "google_captcha_site_key" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "        <script>
            function onSubmit(token) {
                document.getElementById('login-form').submit();
            }
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  181 => 54,  178 => 53,  168 => 52,  155 => 47,  149 => 45,  147 => 44,  144 => 43,  140 => 41,  134 => 39,  132 => 38,  129 => 37,  123 => 35,  121 => 34,  117 => 33,  106 => 25,  100 => 22,  92 => 16,  86 => 14,  84 => 13,  76 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}
    {% if google_captcha_site_key is not empty %}
        <script src=\"https://www.google.com/recaptcha/api.js\"></script>
    {% endif %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
            </div>
            <div class=\"col-xs-8\">
                {% if error %}
                    <div class=\"alert alert-danger\" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-4\">
            </div>
            <div class=\"col-xs-4\">
                <form id=\"login-form\" action=\"{{ path('login') }}\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"username\">Username:</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Password:</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />
                    {% if redirect is not empty %}
                        <input type=\"hidden\" name=\"_target_path\" value=\"{{ redirect }}\"/>
                    {% endif %}

                    {% if google_captcha_site_key is not empty %}
                        <button class=\"pull-right btn btn-primary btn-login g-recaptcha\" data-sitekey=\"{{ google_captcha_site_key }}\" data-callback=\"onSubmit\">Login</button>
                    {% else %}
                        <button class=\"pull-right btn btn-primary btn-login\" type=\"submit\">Login</button>
                    {% endif %}
                </form>
                {% if 'create_account' is active feature %}
                    <a class=\"btn btn-link new-account\" href=\"{{ path('public_user_signup') }}\">Create User Account</a>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {% if google_captcha_site_key is not empty %}
        <script>
            function onSubmit(token) {
                document.getElementById('login-form').submit();
            }
        </script>
    {% endif %}
{% endblock %}
", "user/security/login.html.twig", "/var/www/html/templates/user/security/login.html.twig");
    }
}
