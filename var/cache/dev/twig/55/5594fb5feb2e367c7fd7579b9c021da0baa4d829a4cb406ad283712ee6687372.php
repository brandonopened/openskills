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

/* framework/ls_doc/_export_component.html.twig */
class __TwigTemplate_76a388c13bcdc47a49d00a68581d2207a7733eaead4d7ef57abf92a95afe23f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/_export_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/_export_component.html.twig"));

        // line 1
        echo "<div>
    <p>Export Competency Framework “<b>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "</b>” as:</p>
    <div class=\"container-fluid\" style=\"margin:15px 0\"><div class=\"row\">
        <div class=\"col-xs-3\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cfpackage_export", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "_format" => "json"]), "html", null, true);
        echo ".json\" role=\"button\" tabindex=\"1\" class=\"btn btn-primary btn-block btn-export btn-export-case\" style=\"white-space:normal; height:3.8em\"  data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"Exports a JSON file using the IMS-standard format. This is the best format to use for archiving Frameworks.\">Competency Framework Package (JSON)</a></div>
        ";
        // line 6
        echo "        <div class=\"col-xs-3\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_excel_file", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\" role=\"button\" tabindex=\"3\" class=\"btn btn-primary btn-block btn-export btn-export-excel\" style=\"white-space:normal; height:3.8em\"data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"Exports an Excel spreadsheet file that you can open and edit in spreadsheet programs such as Microsoft Excel.\">Spreadsheet export</a></div><!-- ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cfpackage_export2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "_format" => "csv"]), "html", null, true);
        echo " -->
        <div class=\"col-xs-3 hidden\"><a href=\"javascript:alert('HTML export functionality coming soon...')\" role=\"button\" tabindex=\"4\" class=\"btn btn-primary btn-block btn-export btn-export-html disabled\" style=\"white-space:normal; height:3.8em\"data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"Exports a zipped archive of the HTML and associated files (css, js, etc.) for viewing the Framework in a web browser. Use this if you want to include a view of the Framework in another website.\">HTML Archive</a></div><!-- ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cfpackage_export2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "_format" => "html"]), "html", null, true);
        echo " -->
    </div></div>
    <hr>
    <p>You can also share the following link, which anyone can use to view the Competency Framework in their web browser (no login required):</p>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-6 control-label\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 14, $this->source); })()), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" target=\"blank\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 14, $this->source); })()), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        echo "</a></label>
            <div class=\"col-sm-6\">
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/ls_doc/_export_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  72 => 14,  62 => 7,  55 => 6,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <p>Export Competency Framework “<b>{{ lsDoc.title }}</b>” as:</p>
    <div class=\"container-fluid\" style=\"margin:15px 0\"><div class=\"row\">
        <div class=\"col-xs-3\"><a href=\"{{ path('cfpackage_export', {'id': lsDoc.id, '_format': 'json'}) }}.json\" role=\"button\" tabindex=\"1\" class=\"btn btn-primary btn-block btn-export btn-export-case\" style=\"white-space:normal; height:3.8em\"  data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"Exports a JSON file using the IMS-standard format. This is the best format to use for archiving Frameworks.\">Competency Framework Package (JSON)</a></div>
        {# <div class=\"col-xs-3\"><a href=\"{{ path('export_pdf_file', {'id': lsDoc.id })}}\" role=\"button\" tabindex=\"2\" class=\"btn btn-primary btn-block btn-export btn-export-pdf\" style=\"white-space:normal; height:3.8em\"data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"Exports a styled PDF that can be printed, easily shared with others, and compared with other versions of the Framework.\">Styled PDF</a></div><!-- {{ path('cfpackage_export2', {'id':lsDoc.id, '_format':'pdf'}) }} --> #}
        <div class=\"col-xs-3\"><a href=\"{{ path('export_excel_file', {'id': lsDoc.id })}}\" role=\"button\" tabindex=\"3\" class=\"btn btn-primary btn-block btn-export btn-export-excel\" style=\"white-space:normal; height:3.8em\"data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"Exports an Excel spreadsheet file that you can open and edit in spreadsheet programs such as Microsoft Excel.\">Spreadsheet export</a></div><!-- {{ path('cfpackage_export2', {'id':lsDoc.id, '_format':'csv'}) }} -->
        <div class=\"col-xs-3 hidden\"><a href=\"javascript:alert('HTML export functionality coming soon...')\" role=\"button\" tabindex=\"4\" class=\"btn btn-primary btn-block btn-export btn-export-html disabled\" style=\"white-space:normal; height:3.8em\"data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\" data-content=\"Exports a zipped archive of the HTML and associated files (css, js, etc.) for viewing the Framework in a web browser. Use this if you want to include a view of the Framework in another website.\">HTML Archive</a></div><!-- {{ path('cfpackage_export2', {'id':lsDoc.id, '_format':'html'}) }} -->
    </div></div>
    <hr>
    <p>You can also share the following link, which anyone can use to view the Competency Framework in their web browser (no login required):</p>

    <div class=\"form-horizontal\">
        <div class=\"form-group\">
            <label class=\"col-sm-6 control-label\"><a href=\"{{ path('doc_tree_view', {'slug':lsDoc.slug}) }}\" target=\"blank\">{{ url('doc_tree_view', {'slug':lsDoc.slug}) }}</a></label>
            <div class=\"col-sm-6\">
                <input type=\"text\" class=\"form-control\" value=\"{{ url('doc_tree_view', {'slug':lsDoc.slug}) }}\">
            </div>
        </div>
    </div>
</div>
", "framework/ls_doc/_export_component.html.twig", "/var/www/html/templates/framework/ls_doc/_export_component.html.twig");
    }
}
