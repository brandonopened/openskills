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

/* user/framework_acl/edit.html.twig */
class __TwigTemplate_856f011e4ffeaaf43fd132c2995b4ffdce6eabe053dff817ea337428a3ebf716 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "user/framework_acl/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/framework_acl/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/framework_acl/edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " Access
";
        
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
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>

    <div class=\"well\">
        ";
        // line 11
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 11, $this->source); })()), "org", [], "any", false, false, false, 11))) {
            // line 12
            echo "            By default:
            <ul>
                <li>all editors in your organization will have edit access to this framework</li>
                <li>no one outside your organization will be able to edit this framework</li>
            </ul>
            You can add exceptions for access to specific users by adding them below.
        ";
        } else {
            // line 19
            echo "            By default only you can edit this framework.<br/>
            You can allow access to other users by adding them below.
        ";
        }
        // line 22
        echo "
    </div>
    ";
        // line 24
        if ((0 == (isset($context["aclCount"]) || array_key_exists("aclCount", $context) ? $context["aclCount"] : (function () { throw new RuntimeError('Variable "aclCount" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <p>
                There are no exceptions to the default access controls for this framework.
            </p>
        </div>
    ";
        } else {
            // line 31
            echo "        <table class=\"table table-condensed table-bordered table-\">
            <thead>
            <tr>
                <th>User</th>
                <th>Organization</th>
                <th class=\"col-lg-1\">Access</th>
                <th class=\"col-lg-2\"></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["acls"]) || array_key_exists("acls", $context) ? $context["acls"] : (function () { throw new RuntimeError('Variable "acls" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["acl"]) {
                // line 42
                echo "                <tr class=\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["acl"], "access", [], "any", false, false, false, 42) == 0)) ? ("bg-danger") : ("bg-success"));
                echo "\">
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["acl"], "user", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["acl"], "user", [], "any", false, false, false, 44), "org", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo (((twig_get_attribute($this->env, $this->source, $context["acl"], "access", [], "any", false, false, false, 45) == 1)) ? ("Allowed") : ("Denied"));
                echo "</td>
                    <td>
                        ";
                // line 47
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new RuntimeError('Variable "deleteForms" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["acl"], "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), [], "array", false, false, false, 47), 'form_start');
                echo "
                            <input class=\"btn btn-danger\" type=\"submit\" value=\"Remove Exception\">
                        ";
                // line 49
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteForms"]) || array_key_exists("deleteForms", $context) ? $context["deleteForms"] : (function () { throw new RuntimeError('Variable "deleteForms" does not exist.', 49, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["acl"], "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), [], "array", false, false, false, 49), 'form_end');
                echo "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </tbody>
        </table>
    ";
        }
        // line 56
        echo "
    <div class=\"clearfix\">
        ";
        // line 58
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage_editors", (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 58, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 58, $this->source); })()), "org", [], "any", false, false, false, 58)))) {
            // line 59
            echo "            <div class=\"col-md-6 row\">
                <div class=\"panel panel-default panel-body\">
                    <p>
                        Select a user from your organization to <strong>deny</strong> them access to edit this framework.
                    </p>
                    ";
            // line 64
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addOrgUserForm"]) || array_key_exists("addOrgUserForm", $context) ? $context["addOrgUserForm"] : (function () { throw new RuntimeError('Variable "addOrgUserForm" does not exist.', 64, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addOrgUserForm"]) || array_key_exists("addOrgUserForm", $context) ? $context["addOrgUserForm"] : (function () { throw new RuntimeError('Variable "addOrgUserForm" does not exist.', 65, $this->source); })()), 'widget');
            echo "
                        <input type=\"submit\" value=\"Exclude Editor\" class=\"btn btn-default pull-right\" />
                    ";
            // line 67
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addOrgUserForm"]) || array_key_exists("addOrgUserForm", $context) ? $context["addOrgUserForm"] : (function () { throw new RuntimeError('Variable "addOrgUserForm" does not exist.', 67, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
        ";
        }
        // line 71
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage_editors", (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 71, $this->source); })()))) {
            // line 72
            echo "            <div class=\"col-md-6 row pull-right\">
                <div class=\"panel panel-default panel-body\">
                    <p>
                        ";
            // line 75
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 75, $this->source); })()), "org", [], "any", false, false, false, 75))) {
                // line 76
                echo "                            Enter the username for an editor outside your organization to <strong>allow</strong> them to edit this framework.
                        ";
            } else {
                // line 78
                echo "                            Enter the username for an editor to <strong>allow</strong> them to edit this framework.
                        ";
            }
            // line 80
            echo "                    </p>
                    ";
            // line 81
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addUsernameForm"]) || array_key_exists("addUsernameForm", $context) ? $context["addUsernameForm"] : (function () { throw new RuntimeError('Variable "addUsernameForm" does not exist.', 81, $this->source); })()), 'form_start');
            echo "
                        ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addUsernameForm"]) || array_key_exists("addUsernameForm", $context) ? $context["addUsernameForm"] : (function () { throw new RuntimeError('Variable "addUsernameForm" does not exist.', 82, $this->source); })()), 'widget');
            echo "
                        <input type=\"submit\" value=\"Allow Editor\" class=\"btn btn-default pull-right\" />
                    ";
            // line 84
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addUsernameForm"]) || array_key_exists("addUsernameForm", $context) ? $context["addUsernameForm"] : (function () { throw new RuntimeError('Variable "addUsernameForm" does not exist.', 84, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
        ";
        }
        // line 88
        echo "    </div>

    <div>
        <a class=\"btn btn-primary\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 91, $this->source); })()), "slug", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\">Return to Framework</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/framework_acl/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 91,  248 => 88,  241 => 84,  236 => 82,  232 => 81,  229 => 80,  225 => 78,  221 => 76,  219 => 75,  214 => 72,  211 => 71,  204 => 67,  199 => 65,  195 => 64,  188 => 59,  186 => 58,  182 => 56,  177 => 53,  167 => 49,  162 => 47,  157 => 45,  153 => 44,  149 => 43,  144 => 42,  140 => 41,  128 => 31,  120 => 25,  118 => 24,  114 => 22,  109 => 19,  100 => 12,  98 => 11,  91 => 8,  81 => 7,  68 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block title %}
    {{ lsDoc.title }} Access
{% endblock %}

{% block body %}
    <h2>{{ lsDoc.title }}</h2>

    <div class=\"well\">
        {% if lsDoc.org is not empty %}
            By default:
            <ul>
                <li>all editors in your organization will have edit access to this framework</li>
                <li>no one outside your organization will be able to edit this framework</li>
            </ul>
            You can add exceptions for access to specific users by adding them below.
        {% else %}
            By default only you can edit this framework.<br/>
            You can allow access to other users by adding them below.
        {% endif %}

    </div>
    {% if 0 == aclCount %}
        <div class=\"alert alert-info\" role=\"alert\">
            <p>
                There are no exceptions to the default access controls for this framework.
            </p>
        </div>
    {% else %}
        <table class=\"table table-condensed table-bordered table-\">
            <thead>
            <tr>
                <th>User</th>
                <th>Organization</th>
                <th class=\"col-lg-1\">Access</th>
                <th class=\"col-lg-2\"></th>
            </tr>
            </thead>
            <tbody>
            {% for acl in acls %}
                <tr class=\"{{ acl.access == 0 ? \"bg-danger\" : \"bg-success\" }}\">
                    <td>{{ acl.user.username }}</td>
                    <td>{{ acl.user.org.name }}</td>
                    <td>{{ acl.access == 1 ? \"Allowed\" : \"Denied\" }}</td>
                    <td>
                        {{ form_start(deleteForms[acl.user.id]) }}
                            <input class=\"btn btn-danger\" type=\"submit\" value=\"Remove Exception\">
                        {{ form_end(deleteForms[acl.user.id]) }}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <div class=\"clearfix\">
        {% if is_granted('manage_editors', lsDoc) and lsDoc.org is not empty %}
            <div class=\"col-md-6 row\">
                <div class=\"panel panel-default panel-body\">
                    <p>
                        Select a user from your organization to <strong>deny</strong> them access to edit this framework.
                    </p>
                    {{ form_start(addOrgUserForm) }}
                        {{ form_widget(addOrgUserForm) }}
                        <input type=\"submit\" value=\"Exclude Editor\" class=\"btn btn-default pull-right\" />
                    {{ form_end(addOrgUserForm) }}
                </div>
            </div>
        {% endif %}
        {% if is_granted('manage_editors', lsDoc) %}
            <div class=\"col-md-6 row pull-right\">
                <div class=\"panel panel-default panel-body\">
                    <p>
                        {% if lsDoc.org is not empty %}
                            Enter the username for an editor outside your organization to <strong>allow</strong> them to edit this framework.
                        {% else %}
                            Enter the username for an editor to <strong>allow</strong> them to edit this framework.
                        {% endif %}
                    </p>
                    {{ form_start(addUsernameForm) }}
                        {{ form_widget(addUsernameForm) }}
                        <input type=\"submit\" value=\"Allow Editor\" class=\"btn btn-default pull-right\" />
                    {{ form_end(addUsernameForm) }}
                </div>
            </div>
        {% endif %}
    </div>

    <div>
        <a class=\"btn btn-primary\" href=\"{{ url('doc_tree_view', {\"slug\":lsDoc.slug}) }}\">Return to Framework</a>
    </div>

{% endblock %}
", "user/framework_acl/edit.html.twig", "/var/www/html/templates/user/framework_acl/edit.html.twig");
    }
}
