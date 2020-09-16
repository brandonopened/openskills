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

/* framework/ls_doc/wizard.html.twig */
class __TwigTemplate_1fc1aaa474a4e1d8f74756fbf14c15eaf955872917c058e7e8963da4c470e1e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/wizard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/ls_doc/wizard.html.twig"));

        // line 1
        echo "<div id=\"wizard\" class=\"modal bs-example-modal-lg fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4>Import Framework</h4>
            </div>
            <div class=\"modal-body fields-body-framework\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#case\" data-toggle=\"tab\">Import CASE® file</a></li>
                            <li><a href=\"#spreadsheet\" data-toggle=\"tab\">Import Spreadsheet file</a></li>
                        </ul>
                        <br>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade in active\" id=\"case\">
                                <input id=\"file-url\" type=\"file\" class=\"form-control\">
                                <br/>
                                <div class=\"alert alert-danger case-error-msg hidden\" role=\"alert\"></div>
                                <a type=\"button\" class=\"btn btn-primary btn-import btn-import-case\" onclick=\"SaltLocal.handleFile('case', 'file-url');\">Import Framework</a>
                            </div>
                            <div class=\"tab-pane fade\" id=\"spreadsheet\">
                                <input id=\"excel-url\" type=\"file\" class=\"form-control\">
                                <br/>
                                <div class=\"alert alert-danger case-error-msg hidden\" role=\"alert\"></div>
                                <a type=\"button\" class=\"btn btn-primary btn-import btn-import-spreadsheet\" onclick=\"SaltLocal.handleExcelFile('spreadsheet', 'file-url');\">Import Framework</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"file-loading hidden\">
                    <div class=\"row\">
                        <div class=\"col-md-12\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
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
        return "framework/ls_doc/wizard.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wizard\" class=\"modal bs-example-modal-lg fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4>Import Framework</h4>
            </div>
            <div class=\"modal-body fields-body-framework\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a href=\"#case\" data-toggle=\"tab\">Import CASE® file</a></li>
                            <li><a href=\"#spreadsheet\" data-toggle=\"tab\">Import Spreadsheet file</a></li>
                        </ul>
                        <br>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade in active\" id=\"case\">
                                <input id=\"file-url\" type=\"file\" class=\"form-control\">
                                <br/>
                                <div class=\"alert alert-danger case-error-msg hidden\" role=\"alert\"></div>
                                <a type=\"button\" class=\"btn btn-primary btn-import btn-import-case\" onclick=\"SaltLocal.handleFile('case', 'file-url');\">Import Framework</a>
                            </div>
                            <div class=\"tab-pane fade\" id=\"spreadsheet\">
                                <input id=\"excel-url\" type=\"file\" class=\"form-control\">
                                <br/>
                                <div class=\"alert alert-danger case-error-msg hidden\" role=\"alert\"></div>
                                <a type=\"button\" class=\"btn btn-primary btn-import btn-import-spreadsheet\" onclick=\"SaltLocal.handleExcelFile('spreadsheet', 'file-url');\">Import Framework</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"file-loading hidden\">
                    <div class=\"row\">
                        <div class=\"col-md-12\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
", "framework/ls_doc/wizard.html.twig", "/var/www/html/templates/framework/ls_doc/wizard.html.twig");
    }
}
