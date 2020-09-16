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

/* user/user/index.html.twig */
class __TwigTemplate_bc888e75057047366a85f4079fb60e5b237b3673a8210ce27051d40812797830 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 1, $this->source); })()), "user/user/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user/index.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "    <h1>User list</h1>
    <ul class=\"list-inline pull-right\">
      <li>
          <a class=\"btn btn-default\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        echo "\">Add a new user</a>
      </li>
  </ul>
    ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage", "organizations")) {
            // line 11
            echo "        <div class=\"row bottomPadd8\">
            <form class=\"form-inline\">
                <div class=\"form-group col-md-4\" >
                    <label for=\"organization\">Organization : </label>
                    <input type =\"text\" class=\"form-control\" autocomplete = \"off\" id=\"search_form_organization\" name=\"organization\">
                </div>
            </form>
        </div>
    ";
        }
        // line 20
        echo "    <table class=\"table table-condensed table-hover table-bordered table-striped\" id = \"datatable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Organization</th>
                <th>Username</th>
                <th>Roles</th>
                <th>Status</th>
                <th class=\"col-md-4\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                <tr>
                    <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "org", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 38));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 39
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 39)) {
                    echo ", ";
                }
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_replace_filter($context["role"], ["ROLE_" => "", "_" => " "])), "html", null, true);
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "</td>
                    <td>
                        ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 43), "html", null, true);
            echo "
                    </td>
                    <td class=\"\">
                        <ul class=\"list-inline\">
                                <li>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                                </li>
                                ";
            // line 50
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "suspended", [], "any", false, false, false, 50)) {
                // line 51
                echo "                                    <li>
                                        <a class=\"btn btn-default\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">edit</a>
                                    </li>
                                ";
            }
            // line 55
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "pending", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                    <li>
                                        ";
                // line 57
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["activate_form"]) || array_key_exists("activate_form", $context) ? $context["activate_form"] : (function () { throw new RuntimeError('Variable "activate_form" does not exist.', 57, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57), [], "array", false, false, false, 57), 'form_start');
                echo "
                                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Approve\">
                                        ";
                // line 59
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["activate_form"]) || array_key_exists("activate_form", $context) ? $context["activate_form"] : (function () { throw new RuntimeError('Variable "activate_form" does not exist.', 59, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59), [], "array", false, false, false, 59), 'form_end');
                echo "
                                    </li>
                                    <li>
                                        ";
                // line 62
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reject_form"]) || array_key_exists("reject_form", $context) ? $context["reject_form"] : (function () { throw new RuntimeError('Variable "reject_form" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 62), [], "array", false, false, false, 62), 'form_start');
                echo "
                                            <input class=\"btn btn-danger\" type=\"submit\" value=\"Reject\">
                                        ";
                // line 64
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reject_form"]) || array_key_exists("reject_form", $context) ? $context["reject_form"] : (function () { throw new RuntimeError('Variable "reject_form" does not exist.', 64, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 64), [], "array", false, false, false, 64), 'form_end');
                echo "
                                    </li>
                                ";
            } else {
                // line 67
                echo "                                  <li>
                                    ";
                // line 68
                if (twig_get_attribute($this->env, $this->source, $context["user"], "suspended", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "                                        ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["activate_form"]) || array_key_exists("activate_form", $context) ? $context["activate_form"] : (function () { throw new RuntimeError('Variable "activate_form" does not exist.', 69, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69), [], "array", false, false, false, 69), 'form_start');
                    echo "
                                            <input class=\"btn btn-default\" type=\"submit\" value=\"Unsuspend\">
                                        ";
                    // line 71
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["activate_form"]) || array_key_exists("activate_form", $context) ? $context["activate_form"] : (function () { throw new RuntimeError('Variable "activate_form" does not exist.', 71, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 71), [], "array", false, false, false, 71), 'form_end');
                    echo "
                                    ";
                } else {
                    // line 73
                    echo "                                        ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["suspend_form"]) || array_key_exists("suspend_form", $context) ? $context["suspend_form"] : (function () { throw new RuntimeError('Variable "suspend_form" does not exist.', 73, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 73), [], "array", false, false, false, 73), 'form_start');
                    echo "
                                            <input class=\"btn btn-default\" type=\"submit\" value=\"Suspend\">
                                        ";
                    // line 75
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["suspend_form"]) || array_key_exists("suspend_form", $context) ? $context["suspend_form"] : (function () { throw new RuntimeError('Variable "suspend_form" does not exist.', 75, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75), [], "array", false, false, false, 75), 'form_end');
                    echo "
                                    ";
                }
                // line 77
                echo "                                  </li>
                                ";
            }
            // line 79
            echo "                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 83,  247 => 79,  243 => 77,  238 => 75,  232 => 73,  227 => 71,  221 => 69,  219 => 68,  216 => 67,  210 => 64,  205 => 62,  199 => 59,  194 => 57,  191 => 56,  188 => 55,  182 => 52,  179 => 51,  177 => 50,  172 => 48,  164 => 43,  160 => 41,  143 => 39,  126 => 38,  122 => 36,  118 => 35,  112 => 34,  109 => 33,  105 => 32,  91 => 20,  80 => 11,  78 => 10,  72 => 7,  67 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends base_template %}

{% block body %}
    <h1>User list</h1>
    <ul class=\"list-inline pull-right\">
      <li>
          <a class=\"btn btn-default\" href=\"{{ path('admin_user_new') }}\">Add a new user</a>
      </li>
  </ul>
    {% if is_granted('manage', 'organizations') %}
        <div class=\"row bottomPadd8\">
            <form class=\"form-inline\">
                <div class=\"form-group col-md-4\" >
                    <label for=\"organization\">Organization : </label>
                    <input type =\"text\" class=\"form-control\" autocomplete = \"off\" id=\"search_form_organization\" name=\"organization\">
                </div>
            </form>
        </div>
    {% endif %}
    <table class=\"table table-condensed table-hover table-bordered table-striped\" id = \"datatable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Organization</th>
                <th>Username</th>
                <th>Roles</th>
                <th>Status</th>
                <th class=\"col-md-4\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td><a href=\"{{ path('admin_user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                    <td>{{ user.org.name }}</td>
                    <td>{{ user.username }}</td>
                    <td>
                        {%- for role in user.roles -%}
                        {% if not loop.first %}, {% endif %}{{ role |replace({'ROLE_':'', '_':' '}) |title }}
                        {%- endfor -%}
                    </td>
                    <td>
                        {{ user.status }}
                    </td>
                    <td class=\"\">
                        <ul class=\"list-inline\">
                                <li>
                                    <a class=\"btn btn-primary\" href=\"{{ path('admin_user_show', { 'id': user.id }) }}\">show</a>
                                </li>
                                {% if not user.suspended %}
                                    <li>
                                        <a class=\"btn btn-default\" href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\">edit</a>
                                    </li>
                                {% endif %}
                                {% if user.pending %}
                                    <li>
                                        {{ form_start(activate_form[user.id]) }}
                                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Approve\">
                                        {{ form_end(activate_form[user.id]) }}
                                    </li>
                                    <li>
                                        {{ form_start(reject_form[user.id]) }}
                                            <input class=\"btn btn-danger\" type=\"submit\" value=\"Reject\">
                                        {{ form_end(reject_form[user.id]) }}
                                    </li>
                                {% else %}
                                  <li>
                                    {% if user.suspended %}
                                        {{ form_start(activate_form[user.id]) }}
                                            <input class=\"btn btn-default\" type=\"submit\" value=\"Unsuspend\">
                                        {{ form_end(activate_form[user.id]) }}
                                    {% else %}
                                        {{ form_start(suspend_form[user.id]) }}
                                            <input class=\"btn btn-default\" type=\"submit\" value=\"Suspend\">
                                        {{ form_end(suspend_form[user.id]) }}
                                    {% endif %}
                                  </li>
                                {% endif %}
                        </ul>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "user/user/index.html.twig", "/var/www/html/templates/user/user/index.html.twig");
    }
}
