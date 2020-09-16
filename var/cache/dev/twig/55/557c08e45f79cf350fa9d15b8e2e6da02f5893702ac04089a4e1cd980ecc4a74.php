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

/* framework/editor/view_doc.html.twig */
class __TwigTemplate_4aff2116c88c0ae430404ac9e4cca7176292591e47d573f9165d64081d5b79f5 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "framework/editor/view_doc.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), 64, true), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_index");
        echo "\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                    <li class=\"active\">";
        // line 10
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 64, true), "html", null, true);
        echo "</li>
                </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["title" => "Title", "officialUri" => "Official URL", "creator" => "Creator", "publisher" => "Publisher", "description" => "Description", "version" => "Version", "subjects" => "Subject", "language" => "Language", "adoptionStatus" => "Adoption Status", "statusStart" => "Status Start", "statusEnd" => "Status End", "note" => "Notes"]);
        foreach ($context['_seq'] as $context["field"] => $context["name"]) {
            // line 34
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 34, $this->source); })()), $context["field"], [], "any", false, false, false, 34))) {
                // line 35
                echo "                                <li class=\"list-group-item\">
                                    <strong>";
                // line 36
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo ":</strong>
                                    ";
                // line 37
                $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 37, $this->source); })()), $context["field"], [], "any", false, false, false, 37);
                // line 38
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timestamp", [], "any", true, true, false, 38) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timezone", [], "any", true, true, false, 38))) {
                    // line 39
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })())), "html", null, true);
                    echo "
                                    ";
                } elseif ((                // line 40
$context["field"] == "subjects")) {
                    // line 41
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                        // line 42
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42)) {
                            echo ", ";
                        }
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "title", [], "any", false, false, false, 42), "html", null, true);
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "                                    ";
                } elseif (($context["field"] == "identifier")) {
                    // line 45
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri((isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 45, $this->source); })())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })())), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 47
                    echo "                                        ";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })()), "html", null, true);
                    echo "
                                    ";
                }
                // line 49
                echo "                                </li>
                            ";
            }
            // line 51
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </ul>

                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            <li>
                                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exportModal\">Export</button>
                            </li>
                            ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Add Learning Standard</button>
                                </li>
                            ";
        }
        // line 67
        echo "                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("manage_editors", (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 67, $this->source); })()))) {
            // line 68
            echo "                                <li>
                                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("framework_acl_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-default\">Manage Access</a>
                                </li>
                            ";
        }
        // line 72
        echo "                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            ";
        // line 79
        $this->loadTemplate("framework/editor/view_doc.html.twig", "framework/editor/view_doc.html.twig", 79, "2055531803")->display(twig_array_merge($context, ["title" => "Children", "items" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 79, $this->source); })()), "topLsItems", [], "any", false, false, false, 79), "componentName" => "children"]));
        // line 81
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 87, $this->source); })()), "title", [], "any", false, false, false, 87), "html", null, true);
        echo "</div>
                <div class=\"rendered-document panel-body\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_render", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]));
        echo "
                </div>
            </section>
        </div>
    </div>


    ";
        // line 96
        $this->loadTemplate("framework/editor/view_doc.html.twig", "framework/editor/view_doc.html.twig", 96, "433462699")->display(twig_array_merge($context, ["modalName" => "export", "modalTitle" => "Export Document", "closeButton" => "Done"]));
        // line 107
        echo "
    ";
        // line 108
        $this->loadTemplate("framework/editor/view_doc.html.twig", "framework/editor/view_doc.html.twig", 108, "2009583647")->display(twig_array_merge($context, ["modalName" => "edit", "modalTitle" => "Edit Document", "saveButton" => "Save Changes"]));
        // line 114
        echo "
    ";
        // line 115
        $this->loadTemplate("framework/editor/view_doc.html.twig", "framework/editor/view_doc.html.twig", 115, "492830661")->display(twig_array_merge($context, ["modalName" => "addChild", "modalTitle" => "Add Learning Standard", "saveButton" => "Create"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "    <script>
        window.app = window.app||{};
        app.lsDocId = ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126), "html", null, true);
        echo ";
        app.path = app.path||{};
        app.path.lsdoc_edit = '";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_edit", ["id" => "ID"]);
        echo "';
        app.path.lsitem_new = '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_new", ["doc" => "DOC"]);
        echo "';

        function prepareExportModal(){
            var \$exportModal = \$('#exportModal');
            \$('[data-toggle=\"popover\"]').popover();
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                        //'";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140)]), "html", null, true);
        echo "',
                        app.path.lsdoc_edit.replace('ID', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153)]), "html", null, true);
        echo "',
                    url: app.path.lsdoc_edit.replace('ID', app.lsDocId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_doc]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                });
            });
        }


        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_new", ["doc" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172)]), "html", null, true);
        echo "',
                        app.path.lsitem_new.replace('DOC', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_new", ["doc" => twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191)]), "html", null, true);
        echo "',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId),
                    method: 'POST',
                    data: \$addChildModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$addChildModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#addChildModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                });
            });
        }

        \$(document).ready(function(){
            prepareExportModal();
            prepareEditModal();
            prepareAddChildModal();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 191,  360 => 172,  338 => 153,  322 => 140,  308 => 129,  304 => 128,  299 => 126,  295 => 124,  285 => 123,  275 => 115,  272 => 114,  270 => 108,  267 => 107,  265 => 96,  255 => 89,  250 => 87,  242 => 81,  240 => 79,  231 => 72,  225 => 69,  222 => 68,  219 => 67,  210 => 60,  208 => 59,  199 => 52,  193 => 51,  189 => 49,  183 => 47,  175 => 45,  172 => 44,  155 => 42,  137 => 41,  135 => 40,  130 => 39,  127 => 38,  125 => 37,  121 => 36,  118 => 35,  115 => 34,  111 => 20,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsDoc.title |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                    <li class=\"active\">{{ lsDoc.title |truncate(64, true) }}</li>
                </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'title': 'Title',
                            'officialUri': 'Official URL',
                            'creator': 'Creator',
                            'publisher': 'Publisher',
                            'description': 'Description',
                            'version': 'Version',
                            'subjects': 'Subject',
                            'language': 'Language',
                            'adoptionStatus': 'Adoption Status',
                            'statusStart': 'Status Start',
                            'statusEnd': 'Status End',
                            'note': 'Notes'
                        } %}
                            {% if attribute(lsDoc, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsDoc, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'subjects' %}
                                        {% for subject in value %}
                                            {%- if not loop.first %}, {% endif %}{{ subject.title }}
                                        {%- endfor %}
                                    {% elseif field == 'identifier' %}
                                        <a href=\"{{ object_uri(lsDoc) }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            <li>
                                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exportModal\">Export</button>
                            </li>
                            {% if is_granted('edit', lsDoc) %}
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Add Learning Standard</button>
                                </li>
                            {% endif %}
                            {% if is_granted('manage_editors', lsDoc) %}
                                <li>
                                    <a href=\"{{ path('framework_acl_edit', {'id':lsDoc.id}) }}\" class=\"btn btn-default\">Manage Access</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% embed 'framework/editor/_ls_item_component.html.twig' with {'title':'Children', 'items':lsDoc.topLsItems, 'componentName':'children'} %}
            {% endembed %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsDoc.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'export',
        'modalTitle':'Export Document',
        'closeButton': 'Done'
    } %}
        {% block modalButtons %}{% endblock %}
        {% block modalBody %}
            {% embed 'framework/ls_doc/_export_component.html.twig' with {'view':'editor'} %}
            {% endembed %}
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Document',
        'saveButton': 'Save Changes'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsDocId = {{ lsDoc.id }};
        app.path = app.path||{};
        app.path.lsdoc_edit = '{{ path('lsdoc_edit', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC'}) }}';

        function prepareExportModal(){
            var \$exportModal = \$('#exportModal');
            \$('[data-toggle=\"popover\"]').popover();
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                        //'{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                        app.path.lsdoc_edit.replace('ID', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                    url: app.path.lsdoc_edit.replace('ID', app.lsDocId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_doc]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                });
            });
        }


        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId),
                    method: 'POST',
                    data: \$addChildModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$addChildModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#addChildModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                });
            });
        }

        \$(document).ready(function(){
            prepareExportModal();
            prepareEditModal();
            prepareAddChildModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_doc.html.twig", "/var/www/html/templates/framework/editor/view_doc.html.twig");
    }
}


/* framework/editor/view_doc.html.twig */
class __TwigTemplate_4aff2116c88c0ae430404ac9e4cca7176292591e47d573f9165d64081d5b79f5___2055531803 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 79
        return "framework/editor/_ls_item_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_ls_item_component.html.twig", "framework/editor/view_doc.html.twig", 79);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 79,  382 => 191,  360 => 172,  338 => 153,  322 => 140,  308 => 129,  304 => 128,  299 => 126,  295 => 124,  285 => 123,  275 => 115,  272 => 114,  270 => 108,  267 => 107,  265 => 96,  255 => 89,  250 => 87,  242 => 81,  240 => 79,  231 => 72,  225 => 69,  222 => 68,  219 => 67,  210 => 60,  208 => 59,  199 => 52,  193 => 51,  189 => 49,  183 => 47,  175 => 45,  172 => 44,  155 => 42,  137 => 41,  135 => 40,  130 => 39,  127 => 38,  125 => 37,  121 => 36,  118 => 35,  115 => 34,  111 => 20,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsDoc.title |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                    <li class=\"active\">{{ lsDoc.title |truncate(64, true) }}</li>
                </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'title': 'Title',
                            'officialUri': 'Official URL',
                            'creator': 'Creator',
                            'publisher': 'Publisher',
                            'description': 'Description',
                            'version': 'Version',
                            'subjects': 'Subject',
                            'language': 'Language',
                            'adoptionStatus': 'Adoption Status',
                            'statusStart': 'Status Start',
                            'statusEnd': 'Status End',
                            'note': 'Notes'
                        } %}
                            {% if attribute(lsDoc, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsDoc, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'subjects' %}
                                        {% for subject in value %}
                                            {%- if not loop.first %}, {% endif %}{{ subject.title }}
                                        {%- endfor %}
                                    {% elseif field == 'identifier' %}
                                        <a href=\"{{ object_uri(lsDoc) }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            <li>
                                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exportModal\">Export</button>
                            </li>
                            {% if is_granted('edit', lsDoc) %}
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Add Learning Standard</button>
                                </li>
                            {% endif %}
                            {% if is_granted('manage_editors', lsDoc) %}
                                <li>
                                    <a href=\"{{ path('framework_acl_edit', {'id':lsDoc.id}) }}\" class=\"btn btn-default\">Manage Access</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% embed 'framework/editor/_ls_item_component.html.twig' with {'title':'Children', 'items':lsDoc.topLsItems, 'componentName':'children'} %}
            {% endembed %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsDoc.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'export',
        'modalTitle':'Export Document',
        'closeButton': 'Done'
    } %}
        {% block modalButtons %}{% endblock %}
        {% block modalBody %}
            {% embed 'framework/ls_doc/_export_component.html.twig' with {'view':'editor'} %}
            {% endembed %}
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Document',
        'saveButton': 'Save Changes'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsDocId = {{ lsDoc.id }};
        app.path = app.path||{};
        app.path.lsdoc_edit = '{{ path('lsdoc_edit', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC'}) }}';

        function prepareExportModal(){
            var \$exportModal = \$('#exportModal');
            \$('[data-toggle=\"popover\"]').popover();
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                        //'{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                        app.path.lsdoc_edit.replace('ID', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                    url: app.path.lsdoc_edit.replace('ID', app.lsDocId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_doc]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                });
            });
        }


        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId),
                    method: 'POST',
                    data: \$addChildModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$addChildModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#addChildModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                });
            });
        }

        \$(document).ready(function(){
            prepareExportModal();
            prepareEditModal();
            prepareAddChildModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_doc.html.twig", "/var/www/html/templates/framework/editor/view_doc.html.twig");
    }
}


/* framework/editor/view_doc.html.twig */
class __TwigTemplate_4aff2116c88c0ae430404ac9e4cca7176292591e47d573f9165d64081d5b79f5___433462699 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'modalButtons' => [$this, 'block_modalButtons'],
            'modalBody' => [$this, 'block_modalBody'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 96
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_doc.html.twig", 96);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 101
    public function block_modalButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalButtons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalButtons"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_modalBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalBody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalBody"));

        // line 103
        echo "            ";
        $this->loadTemplate("framework/editor/view_doc.html.twig", "framework/editor/view_doc.html.twig", 103, "83086419")->display(twig_array_merge($context, ["view" => "editor"]));
        // line 105
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1012 => 105,  1009 => 103,  999 => 102,  981 => 101,  958 => 96,  676 => 79,  382 => 191,  360 => 172,  338 => 153,  322 => 140,  308 => 129,  304 => 128,  299 => 126,  295 => 124,  285 => 123,  275 => 115,  272 => 114,  270 => 108,  267 => 107,  265 => 96,  255 => 89,  250 => 87,  242 => 81,  240 => 79,  231 => 72,  225 => 69,  222 => 68,  219 => 67,  210 => 60,  208 => 59,  199 => 52,  193 => 51,  189 => 49,  183 => 47,  175 => 45,  172 => 44,  155 => 42,  137 => 41,  135 => 40,  130 => 39,  127 => 38,  125 => 37,  121 => 36,  118 => 35,  115 => 34,  111 => 20,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsDoc.title |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                    <li class=\"active\">{{ lsDoc.title |truncate(64, true) }}</li>
                </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'title': 'Title',
                            'officialUri': 'Official URL',
                            'creator': 'Creator',
                            'publisher': 'Publisher',
                            'description': 'Description',
                            'version': 'Version',
                            'subjects': 'Subject',
                            'language': 'Language',
                            'adoptionStatus': 'Adoption Status',
                            'statusStart': 'Status Start',
                            'statusEnd': 'Status End',
                            'note': 'Notes'
                        } %}
                            {% if attribute(lsDoc, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsDoc, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'subjects' %}
                                        {% for subject in value %}
                                            {%- if not loop.first %}, {% endif %}{{ subject.title }}
                                        {%- endfor %}
                                    {% elseif field == 'identifier' %}
                                        <a href=\"{{ object_uri(lsDoc) }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            <li>
                                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exportModal\">Export</button>
                            </li>
                            {% if is_granted('edit', lsDoc) %}
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Add Learning Standard</button>
                                </li>
                            {% endif %}
                            {% if is_granted('manage_editors', lsDoc) %}
                                <li>
                                    <a href=\"{{ path('framework_acl_edit', {'id':lsDoc.id}) }}\" class=\"btn btn-default\">Manage Access</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% embed 'framework/editor/_ls_item_component.html.twig' with {'title':'Children', 'items':lsDoc.topLsItems, 'componentName':'children'} %}
            {% endembed %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsDoc.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'export',
        'modalTitle':'Export Document',
        'closeButton': 'Done'
    } %}
        {% block modalButtons %}{% endblock %}
        {% block modalBody %}
            {% embed 'framework/ls_doc/_export_component.html.twig' with {'view':'editor'} %}
            {% endembed %}
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Document',
        'saveButton': 'Save Changes'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsDocId = {{ lsDoc.id }};
        app.path = app.path||{};
        app.path.lsdoc_edit = '{{ path('lsdoc_edit', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC'}) }}';

        function prepareExportModal(){
            var \$exportModal = \$('#exportModal');
            \$('[data-toggle=\"popover\"]').popover();
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                        //'{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                        app.path.lsdoc_edit.replace('ID', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                    url: app.path.lsdoc_edit.replace('ID', app.lsDocId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_doc]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                });
            });
        }


        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId),
                    method: 'POST',
                    data: \$addChildModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$addChildModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#addChildModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                });
            });
        }

        \$(document).ready(function(){
            prepareExportModal();
            prepareEditModal();
            prepareAddChildModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_doc.html.twig", "/var/www/html/templates/framework/editor/view_doc.html.twig");
    }
}


/* framework/editor/view_doc.html.twig */
class __TwigTemplate_4aff2116c88c0ae430404ac9e4cca7176292591e47d573f9165d64081d5b79f5___83086419 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 103
        return "framework/ls_doc/_export_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $this->parent = $this->loadTemplate("framework/ls_doc/_export_component.html.twig", "framework/editor/view_doc.html.twig", 103);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1279 => 103,  1012 => 105,  1009 => 103,  999 => 102,  981 => 101,  958 => 96,  676 => 79,  382 => 191,  360 => 172,  338 => 153,  322 => 140,  308 => 129,  304 => 128,  299 => 126,  295 => 124,  285 => 123,  275 => 115,  272 => 114,  270 => 108,  267 => 107,  265 => 96,  255 => 89,  250 => 87,  242 => 81,  240 => 79,  231 => 72,  225 => 69,  222 => 68,  219 => 67,  210 => 60,  208 => 59,  199 => 52,  193 => 51,  189 => 49,  183 => 47,  175 => 45,  172 => 44,  155 => 42,  137 => 41,  135 => 40,  130 => 39,  127 => 38,  125 => 37,  121 => 36,  118 => 35,  115 => 34,  111 => 20,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsDoc.title |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                    <li class=\"active\">{{ lsDoc.title |truncate(64, true) }}</li>
                </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'title': 'Title',
                            'officialUri': 'Official URL',
                            'creator': 'Creator',
                            'publisher': 'Publisher',
                            'description': 'Description',
                            'version': 'Version',
                            'subjects': 'Subject',
                            'language': 'Language',
                            'adoptionStatus': 'Adoption Status',
                            'statusStart': 'Status Start',
                            'statusEnd': 'Status End',
                            'note': 'Notes'
                        } %}
                            {% if attribute(lsDoc, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsDoc, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'subjects' %}
                                        {% for subject in value %}
                                            {%- if not loop.first %}, {% endif %}{{ subject.title }}
                                        {%- endfor %}
                                    {% elseif field == 'identifier' %}
                                        <a href=\"{{ object_uri(lsDoc) }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            <li>
                                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exportModal\">Export</button>
                            </li>
                            {% if is_granted('edit', lsDoc) %}
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Add Learning Standard</button>
                                </li>
                            {% endif %}
                            {% if is_granted('manage_editors', lsDoc) %}
                                <li>
                                    <a href=\"{{ path('framework_acl_edit', {'id':lsDoc.id}) }}\" class=\"btn btn-default\">Manage Access</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% embed 'framework/editor/_ls_item_component.html.twig' with {'title':'Children', 'items':lsDoc.topLsItems, 'componentName':'children'} %}
            {% endembed %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsDoc.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'export',
        'modalTitle':'Export Document',
        'closeButton': 'Done'
    } %}
        {% block modalButtons %}{% endblock %}
        {% block modalBody %}
            {% embed 'framework/ls_doc/_export_component.html.twig' with {'view':'editor'} %}
            {% endembed %}
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Document',
        'saveButton': 'Save Changes'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsDocId = {{ lsDoc.id }};
        app.path = app.path||{};
        app.path.lsdoc_edit = '{{ path('lsdoc_edit', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC'}) }}';

        function prepareExportModal(){
            var \$exportModal = \$('#exportModal');
            \$('[data-toggle=\"popover\"]').popover();
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                        //'{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                        app.path.lsdoc_edit.replace('ID', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                    url: app.path.lsdoc_edit.replace('ID', app.lsDocId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_doc]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                });
            });
        }


        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId),
                    method: 'POST',
                    data: \$addChildModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$addChildModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#addChildModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                });
            });
        }

        \$(document).ready(function(){
            prepareExportModal();
            prepareEditModal();
            prepareAddChildModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_doc.html.twig", "/var/www/html/templates/framework/editor/view_doc.html.twig");
    }
}


/* framework/editor/view_doc.html.twig */
class __TwigTemplate_4aff2116c88c0ae430404ac9e4cca7176292591e47d573f9165d64081d5b79f5___2009583647 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 108
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_doc.html.twig", 108);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1559 => 108,  1279 => 103,  1012 => 105,  1009 => 103,  999 => 102,  981 => 101,  958 => 96,  676 => 79,  382 => 191,  360 => 172,  338 => 153,  322 => 140,  308 => 129,  304 => 128,  299 => 126,  295 => 124,  285 => 123,  275 => 115,  272 => 114,  270 => 108,  267 => 107,  265 => 96,  255 => 89,  250 => 87,  242 => 81,  240 => 79,  231 => 72,  225 => 69,  222 => 68,  219 => 67,  210 => 60,  208 => 59,  199 => 52,  193 => 51,  189 => 49,  183 => 47,  175 => 45,  172 => 44,  155 => 42,  137 => 41,  135 => 40,  130 => 39,  127 => 38,  125 => 37,  121 => 36,  118 => 35,  115 => 34,  111 => 20,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsDoc.title |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                    <li class=\"active\">{{ lsDoc.title |truncate(64, true) }}</li>
                </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'title': 'Title',
                            'officialUri': 'Official URL',
                            'creator': 'Creator',
                            'publisher': 'Publisher',
                            'description': 'Description',
                            'version': 'Version',
                            'subjects': 'Subject',
                            'language': 'Language',
                            'adoptionStatus': 'Adoption Status',
                            'statusStart': 'Status Start',
                            'statusEnd': 'Status End',
                            'note': 'Notes'
                        } %}
                            {% if attribute(lsDoc, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsDoc, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'subjects' %}
                                        {% for subject in value %}
                                            {%- if not loop.first %}, {% endif %}{{ subject.title }}
                                        {%- endfor %}
                                    {% elseif field == 'identifier' %}
                                        <a href=\"{{ object_uri(lsDoc) }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            <li>
                                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exportModal\">Export</button>
                            </li>
                            {% if is_granted('edit', lsDoc) %}
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Add Learning Standard</button>
                                </li>
                            {% endif %}
                            {% if is_granted('manage_editors', lsDoc) %}
                                <li>
                                    <a href=\"{{ path('framework_acl_edit', {'id':lsDoc.id}) }}\" class=\"btn btn-default\">Manage Access</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% embed 'framework/editor/_ls_item_component.html.twig' with {'title':'Children', 'items':lsDoc.topLsItems, 'componentName':'children'} %}
            {% endembed %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsDoc.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'export',
        'modalTitle':'Export Document',
        'closeButton': 'Done'
    } %}
        {% block modalButtons %}{% endblock %}
        {% block modalBody %}
            {% embed 'framework/ls_doc/_export_component.html.twig' with {'view':'editor'} %}
            {% endembed %}
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Document',
        'saveButton': 'Save Changes'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsDocId = {{ lsDoc.id }};
        app.path = app.path||{};
        app.path.lsdoc_edit = '{{ path('lsdoc_edit', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC'}) }}';

        function prepareExportModal(){
            var \$exportModal = \$('#exportModal');
            \$('[data-toggle=\"popover\"]').popover();
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                        //'{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                        app.path.lsdoc_edit.replace('ID', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                    url: app.path.lsdoc_edit.replace('ID', app.lsDocId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_doc]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                });
            });
        }


        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId),
                    method: 'POST',
                    data: \$addChildModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$addChildModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#addChildModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                });
            });
        }

        \$(document).ready(function(){
            prepareExportModal();
            prepareEditModal();
            prepareAddChildModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_doc.html.twig", "/var/www/html/templates/framework/editor/view_doc.html.twig");
    }
}


/* framework/editor/view_doc.html.twig */
class __TwigTemplate_4aff2116c88c0ae430404ac9e4cca7176292591e47d573f9165d64081d5b79f5___492830661 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 115
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_doc.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_doc.html.twig", 115);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1839 => 115,  1559 => 108,  1279 => 103,  1012 => 105,  1009 => 103,  999 => 102,  981 => 101,  958 => 96,  676 => 79,  382 => 191,  360 => 172,  338 => 153,  322 => 140,  308 => 129,  304 => 128,  299 => 126,  295 => 124,  285 => 123,  275 => 115,  272 => 114,  270 => 108,  267 => 107,  265 => 96,  255 => 89,  250 => 87,  242 => 81,  240 => 79,  231 => 72,  225 => 69,  222 => 68,  219 => 67,  210 => 60,  208 => 59,  199 => 52,  193 => 51,  189 => 49,  183 => 47,  175 => 45,  172 => 44,  155 => 42,  137 => 41,  135 => 40,  130 => 39,  127 => 38,  125 => 37,  121 => 36,  118 => 35,  115 => 34,  111 => 20,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsDoc.title |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                    <li class=\"active\">{{ lsDoc.title |truncate(64, true) }}</li>
                </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'title': 'Title',
                            'officialUri': 'Official URL',
                            'creator': 'Creator',
                            'publisher': 'Publisher',
                            'description': 'Description',
                            'version': 'Version',
                            'subjects': 'Subject',
                            'language': 'Language',
                            'adoptionStatus': 'Adoption Status',
                            'statusStart': 'Status Start',
                            'statusEnd': 'Status End',
                            'note': 'Notes'
                        } %}
                            {% if attribute(lsDoc, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsDoc, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'subjects' %}
                                        {% for subject in value %}
                                            {%- if not loop.first %}, {% endif %}{{ subject.title }}
                                        {%- endfor %}
                                    {% elseif field == 'identifier' %}
                                        <a href=\"{{ object_uri(lsDoc) }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            <li>
                                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#exportModal\">Export</button>
                            </li>
                            {% if is_granted('edit', lsDoc) %}
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Add Learning Standard</button>
                                </li>
                            {% endif %}
                            {% if is_granted('manage_editors', lsDoc) %}
                                <li>
                                    <a href=\"{{ path('framework_acl_edit', {'id':lsDoc.id}) }}\" class=\"btn btn-default\">Manage Access</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% embed 'framework/editor/_ls_item_component.html.twig' with {'title':'Children', 'items':lsDoc.topLsItems, 'componentName':'children'} %}
            {% endembed %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsDoc.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'export',
        'modalTitle':'Export Document',
        'closeButton': 'Done'
    } %}
        {% block modalButtons %}{% endblock %}
        {% block modalBody %}
            {% embed 'framework/ls_doc/_export_component.html.twig' with {'view':'editor'} %}
            {% endembed %}
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Document',
        'saveButton': 'Save Changes'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsDocId = {{ lsDoc.id }};
        app.path = app.path||{};
        app.path.lsdoc_edit = '{{ path('lsdoc_edit', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC'}) }}';

        function prepareExportModal(){
            var \$exportModal = \$('#exportModal');
            \$('[data-toggle=\"popover\"]').popover();
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                        //'{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                        app.path.lsdoc_edit.replace('ID', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsdoc_edit', {'id':lsDoc.id}) }}',
                    url: app.path.lsdoc_edit.replace('ID', app.lsDocId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_doc]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_doc_subjects').select2entity({dropdownParent: \$('#editModal')});
                });
            });
        }


        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsDoc.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId),
                    method: 'POST',
                    data: \$addChildModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$addChildModal.modal('hide');
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#addChildModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                });
            });
        }

        \$(document).ready(function(){
            prepareExportModal();
            prepareEditModal();
            prepareAddChildModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_doc.html.twig", "/var/www/html/templates/framework/editor/view_doc.html.twig");
    }
}
