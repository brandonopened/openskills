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

/* framework/doc_tree/_update_framework_modal.html.twig */
class __TwigTemplate_2dfed708b9717cd6fc8cc9bf88ea54a84877aacb887e51c0f76b5df3988b3b35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/_update_framework_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/_update_framework_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"updateFrameworkModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Update Framework</h4>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"#excel\" data-toggle=\"tab\">Import Spreadsheet file</a></li>
                    
                </ul>
                </br>
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade in active\" id=\"excel\">
                        <input id=\"excel-url\" type=\"file\" class=\"form-control\" accept=\".xls,.xlsx,.json,.csv\">
                        <br/>
                        <div class=\"alert alert-danger case-error-msg hidden\" role=\"alert\"></div>
                        <a type=\"button\" class=\"btn btn-primary btn-import btn-import-excel\" onclick=\"SaltLocal.handleExcelFile();\">Import Framework</a>
                    </div>
                    <div class=\"tab-pane fade in\" id=\"csv\">
                        <div class=\"row\">
                            <div class=\"col-xs-5\">
                                <input id=\"file-for-update\" type=\"file\" class=\"form-control\" accept=\".csv\">
                                <div class=\"alert alert-danger asn-error-msg hidden\" role=\"alert\"></div>
                                <br/>
                                <a href=\"#\" class=\"btn btn-info btn--updater\" data-update-action='derivative' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"which would copy with new identifiers and then make an exact match association\">Derivative framework</a>
                                <a href=\"#\" class=\"btn btn-primary btn--updater\" data-update-action='update' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Based on scanning by identifier, overwrite existing UUID's with the rest of the information that is probably changed, remove identifiers in the original document that don't exist in the new, and add identifiers that are new as well as RESCAN FOR Associations.\">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"#\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</a>
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
        return "framework/doc_tree/_update_framework_modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"updateFrameworkModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Update Framework</h4>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"#excel\" data-toggle=\"tab\">Import Spreadsheet file</a></li>
                    
                </ul>
                </br>
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade in active\" id=\"excel\">
                        <input id=\"excel-url\" type=\"file\" class=\"form-control\" accept=\".xls,.xlsx,.json,.csv\">
                        <br/>
                        <div class=\"alert alert-danger case-error-msg hidden\" role=\"alert\"></div>
                        <a type=\"button\" class=\"btn btn-primary btn-import btn-import-excel\" onclick=\"SaltLocal.handleExcelFile();\">Import Framework</a>
                    </div>
                    <div class=\"tab-pane fade in\" id=\"csv\">
                        <div class=\"row\">
                            <div class=\"col-xs-5\">
                                <input id=\"file-for-update\" type=\"file\" class=\"form-control\" accept=\".csv\">
                                <div class=\"alert alert-danger asn-error-msg hidden\" role=\"alert\"></div>
                                <br/>
                                <a href=\"#\" class=\"btn btn-info btn--updater\" data-update-action='derivative' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"which would copy with new identifiers and then make an exact match association\">Derivative framework</a>
                                <a href=\"#\" class=\"btn btn-primary btn--updater\" data-update-action='update' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Based on scanning by identifier, overwrite existing UUID's with the rest of the information that is probably changed, remove identifiers in the original document that don't exist in the new, and add identifiers that are new as well as RESCAN FOR Associations.\">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"#\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</a>
            </div>
        </div>
    </div>
</div>
", "framework/doc_tree/_update_framework_modal.html.twig", "/var/www/html/templates/framework/doc_tree/_update_framework_modal.html.twig");
    }
}
