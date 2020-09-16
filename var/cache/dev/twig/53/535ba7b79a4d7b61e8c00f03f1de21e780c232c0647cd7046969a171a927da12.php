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

/* framework/ls_doc/_manage_association_groups.html.twig */
class __TwigTemplate_8aed7768bb7350d3ba07ce3a5db2e09e4d7e215ecfb74dae7625b69feea799e3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/_manage_association_groups.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/_manage_association_groups.html.twig"));

        // line 1
        echo "<div>
    <p>Use association groups to organize a competency framework in different ways. For example, you may want to organize your framework by subject area by default, but use an alternative taxonomy to organize the same set of competencies by a set of reporting categories or by grade level. All frameworks include a “Default” association group. Use this interface to create and manage alternative groups.</p>

    <table class=\"table table-striped\">
        <thead><tr><th style=\"width:30%\">Association Group Name</th><th>Description</th></tr></thead>
        <tbody>
            <tr data-assocgroupid=\"default\">
                <td>– Default Group –</td>
                <td><!-- <button class=\"assocgroup-edit-btn btn btn-default btn-xs pull-right\">Edit</button> -->—</td>
            </tr>

            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["assocGroups"]) || array_key_exists("assocGroups", $context) ? $context["assocGroups"] : (function () { throw new RuntimeError('Variable "assocGroups" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ag"]) {
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ag"], "lsDoc", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) == twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12))) {
                // line 13
                echo "            <tr data-assocgroupid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                <td>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ag"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</td>
                <td>
                    <button class=\"assocgroup-edit-btn btn btn-default btn-xs pull-right\">Edit</button>
                    <button class=\"assocgroup-delete-btn btn btn-default btn-xs pull-right\" style=\"margin-right:5px\">Delete</button>
                    <span class=\"assocgroup-description\">";
                // line 18
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ag"], "description", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["ag"], "description", [], "any", false, false, false, 18), "—")) : ("—")), "html", null, true);
                echo "</span>
                </td>
            </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>
    <p><button class=\"assocgroup-add-btn btn btn-default\" data-toggle=\"modal\" data-target=\"#addAssocGroupModal\">Add a New Association Group</button></p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_doc/_manage_association_groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  73 => 18,  66 => 14,  61 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <p>Use association groups to organize a competency framework in different ways. For example, you may want to organize your framework by subject area by default, but use an alternative taxonomy to organize the same set of competencies by a set of reporting categories or by grade level. All frameworks include a “Default” association group. Use this interface to create and manage alternative groups.</p>

    <table class=\"table table-striped\">
        <thead><tr><th style=\"width:30%\">Association Group Name</th><th>Description</th></tr></thead>
        <tbody>
            <tr data-assocgroupid=\"default\">
                <td>– Default Group –</td>
                <td><!-- <button class=\"assocgroup-edit-btn btn btn-default btn-xs pull-right\">Edit</button> -->—</td>
            </tr>

            {% for ag in assocGroups %}{% if ag.lsDoc.id == lsDoc.id %}
            <tr data-assocgroupid=\"{{ ag.id }}\">
                <td>{{ ag.title }}</td>
                <td>
                    <button class=\"assocgroup-edit-btn btn btn-default btn-xs pull-right\">Edit</button>
                    <button class=\"assocgroup-delete-btn btn btn-default btn-xs pull-right\" style=\"margin-right:5px\">Delete</button>
                    <span class=\"assocgroup-description\">{{ ag.description|default('—') }}</span>
                </td>
            </tr>
            {% endif %}{% endfor %}
        </tbody>
    </table>
    <p><button class=\"assocgroup-add-btn btn btn-default\" data-toggle=\"modal\" data-target=\"#addAssocGroupModal\">Add a New Association Group</button></p>
</div>
", "framework/ls_doc/_manage_association_groups.html.twig", "/var/www/html/templates/framework/ls_doc/_manage_association_groups.html.twig");
    }
}
