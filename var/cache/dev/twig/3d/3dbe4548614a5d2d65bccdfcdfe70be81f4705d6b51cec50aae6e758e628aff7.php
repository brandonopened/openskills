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

/* framework/editor/view_item.html.twig */
class __TwigTemplate_e9bd5936034afdb5138ef5e895b99e04575450004d7f257c3a61859cb08af455 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "framework/editor/view_item.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 3, $this->source); })()), "displayIdentifier", [], "any", false, false, false, 3), 64, true), "html", null, true);
        
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
                <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsdoc", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 10, $this->source); })()), "lsDoc", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 10, $this->source); })()), "lsDoc", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), 32, true), "html", null, true);
        echo "</a></li>
                <li class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 11, $this->source); })()), "displayIdentifier", [], "any", false, false, false, 11), 64, true), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                ";
        // line 24
        echo "                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["humanCodingScheme" => "Human Coding Scheme", "fullStatement" => "Full Statement", "abbreviatedStatement" => "Abbreviated Statement", "listEnumInSource" => "List Enumeration in Source", "conceptKeywords" => "Concept Keywords", "conceptKeywordsUri" => "Concept Keywords URI", "language" => "Language", "educationalAlignment" => "Educational Alignment", "type" => "Type", "licenceUri" => "Licence URI", "changedAt" => "Last Changed", "notes" => "Notes"]);
        foreach ($context['_seq'] as $context["field"] => $context["name"]) {
            // line 40
            echo "                            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 40, $this->source); })()), $context["field"], [], "any", false, false, false, 40))) {
                // line 41
                echo "                                <li class=\"list-group-item\">
                                    <strong>";
                // line 42
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo ":</strong>
                                    ";
                // line 43
                $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 43, $this->source); })()), $context["field"], [], "any", false, false, false, 43);
                // line 44
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timestamp", [], "any", true, true, false, 44) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timezone", [], "any", true, true, false, 44))) {
                    // line 45
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })())), "html", null, true);
                    echo "
                                    ";
                } elseif ((                // line 46
$context["field"] == "uri")) {
                    // line 47
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })())), "html", null, true);
                    echo "</a>
                                    ";
                } elseif ((                // line 48
$context["field"] == "lsDocUri")) {
                    // line 49
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 49, $this->source); })())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 49, $this->source); })())), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 51
                    echo "                                        ";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 51, $this->source); })()), "html", null, true);
                    echo "
                                    ";
                }
                // line 53
                echo "                                </li>
                            ";
            }
            // line 55
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </ul>

                    ";
        // line 58
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 58, $this->source); })())) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("add-standard-to", null))) {
            // line 59
            echo "                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            ";
            // line 61
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 61, $this->source); })()))) {
                // line 62
                echo "                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            ";
            }
            // line 66
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("add-standard-to", null)) {
                // line 67
                echo "                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            ";
            }
            // line 71
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 71, $this->source); })()))) {
                // line 72
                echo "                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            ";
            }
            // line 79
            echo "                            ";
            // line 84
            echo "                        </ul>
                    </div>
                    ";
        }
        // line 87
        echo "                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 92, $this->source); })()), "groupedAssociations", [], "any", false, false, false, 92), function ($__list__) use ($context, $macros) { $context["list"] = $__list__; return  !twig_test_empty($context["list"]); }));
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
        foreach ($context['_seq'] as $context["group"] => $context["list"]) {
            // line 93
            echo "                ";
            $this->loadTemplate("framework/editor/view_item.html.twig", "framework/editor/view_item.html.twig", 93, "1186689039")->display(twig_array_merge($context, ["title" => $context["group"], "items" => $context["list"], "viewingItem" => (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 93, $this->source); })()), "componentName" => twig_replace_filter(twig_lower_filter($this->env, $context["group"]), [" " => "_"])]));
            // line 108
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 115, $this->source); })()), "lsDoc", [], "any", false, false, false, 115), "title", [], "any", false, false, false, 115), "html", null, true);
        echo "</div>
                <div class=\"rendered-document panel-body\">
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_render", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 117, $this->source); })()), "lsDoc", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117), "highlight" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117)]));
        echo "
                </div>
            </section>
        </div>
    </div>


    ";
        // line 124
        $this->loadTemplate("framework/editor/view_item.html.twig", "framework/editor/view_item.html.twig", 124, "1702897154")->display(twig_array_merge($context, ["modalName" => "edit", "modalTitle" => "Edit Learning Standard", "saveButton" => "Save changes"]));
        // line 134
        echo "
    ";
        // line 135
        $this->loadTemplate("framework/editor/view_item.html.twig", "framework/editor/view_item.html.twig", 135, "493043227")->display(twig_array_merge($context, ["modalName" => "addChild", "modalTitle" => "Add Learning Standard", "saveButton" => "Create"]));
        // line 141
        echo "
    ";
        // line 142
        $this->loadTemplate("framework/editor/view_item.html.twig", "framework/editor/view_item.html.twig", 142, "250506128")->display(twig_array_merge($context, ["modalName" => "copy", "modalTitle" => "Add Standard To Package", "saveButton" => "Copy"]));
        // line 148
        echo "
    ";
        // line 149
        $this->loadTemplate("framework/editor/view_item.html.twig", "framework/editor/view_item.html.twig", 149, "726222043")->display(twig_array_merge($context, ["modalName" => "associate", "modalTitle" => "Add Relationship to this Standard", "saveButton" => "Associate"]));
        // line 155
        echo "
    ";
        // line 156
        $this->loadTemplate("framework/editor/view_item.html.twig", "framework/editor/view_item.html.twig", 156, "1285220843")->display(twig_array_merge($context, ["modalName" => "changeParent", "modalTitle" => "Change Parent of Item", "saveButton" => "Change"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 165
        echo "    <script>
        window.app = window.app||{};
        app.lsItemId = ";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167), "html", null, true);
        echo ";
        app.lsDocId = ";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 168, $this->source); })()), "lsDoc", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168), "html", null, true);
        echo ";
        app.path = app.path||{};
        app.path.lsitem_edit = '";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_edit", ["id" => "ID"]);
        echo "';
        app.path.lsitem_delete = '";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_delete", ["id" => "ID"]);
        echo "';
        app.path.lsitem_new = '";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_new", ["doc" => "DOC", "parent" => "PARENT"]), "html", null, true);
        echo "';
        app.path.lsitem_copy_item = '";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_copy_item", ["id" => "ID"]);
        echo "';
        app.path.lsitem_remove_child = '";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_remove_child", ["id" => "ID", "child" => "CHILD"]), "html", null, true);
        echo "';
        app.path.lsitem_change_parent = '";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_change_parent", ["id" => "ID"]);
        echo "';
        app.path.editor_lsdoc = '";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsdoc", ["id" => "ID"]);
        echo "';
        app.path.lsassociation_new = '";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsassociation_new", ["sourceLsItem" => "ID"]);
        echo "';
        app.path.lsassociation_delete = '";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsassociation_remove", ["id" => "ID"]);
        echo "';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183), "html", null, true);
        echo "]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197)]), "html", null, true);
        echo "',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 217, $this->source); })()), "id", [], "any", false, false, false, 217)]), "html", null, true);
        echo "',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 239, $this->source); })()), "id", [], "any", false, false, false, 239)]), "html", null, true);
        echo "',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', ";
        // line 242
        echo "                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_new", ["doc" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 257, $this->source); })()), "lsDoc", [], "any", false, false, false, 257), "id", [], "any", false, false, false, 257), "parent" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 257, $this->source); })()), "id", [], "any", false, false, false, 257)]), "html", null, true);
        echo "',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
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
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_new", ["doc" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 277, $this->source); })()), "lsDoc", [], "any", false, false, false, 277), "id", [], "any", false, false, false, 277), "parent" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 277, $this->source); })()), "id", [], "any", false, false, false, 277)]), "html", null, true);
        echo "',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_copy_item", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 301, $this->source); })()), "id", [], "any", false, false, false, 301)]), "html", null, true);
        echo "',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_copy_item", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 312, $this->source); })()), "id", [], "any", false, false, false, 312)]), "html", null, true);
        echo "',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsassociation_new", ["sourceLsItem" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 334, $this->source); })()), "id", [], "any", false, false, false, 334)]), "html", null, true);
        echo "',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsassociation_new", ["sourceLsItem" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 345, $this->source); })()), "id", [], "any", false, false, false, 345)]), "html", null, true);
        echo "',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_change_parent", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 420, $this->source); })()), "id", [], "any", false, false, false, 420)]), "html", null, true);
        echo "',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_change_parent", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 449, $this->source); })()), "id", [], "any", false, false, false, 449)]), "html", null, true);
        echo "',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsitem_remove_child", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 479, $this->source); })()), "id", [], "any", false, false, false, 479), "child" => "CHILD"]), "html", null, true);
        echo "'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsassociation_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 501, $this->source); })()), "id", [], "any", false, false, false, 501)]), "html", null, true);
        echo "',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  739 => 501,  714 => 479,  681 => 449,  649 => 420,  571 => 345,  557 => 334,  532 => 312,  518 => 301,  491 => 277,  468 => 257,  451 => 242,  446 => 239,  421 => 217,  398 => 197,  381 => 183,  373 => 178,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  336 => 168,  332 => 167,  328 => 165,  318 => 164,  308 => 156,  305 => 155,  303 => 149,  300 => 148,  298 => 142,  295 => 141,  293 => 135,  290 => 134,  288 => 124,  278 => 117,  273 => 115,  265 => 109,  251 => 108,  248 => 93,  231 => 92,  224 => 87,  219 => 84,  217 => 79,  208 => 72,  205 => 71,  199 => 67,  196 => 66,  190 => 62,  188 => 61,  184 => 59,  182 => 58,  178 => 56,  172 => 55,  168 => 53,  162 => 51,  154 => 49,  152 => 48,  145 => 47,  143 => 46,  138 => 45,  135 => 44,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  119 => 26,  115 => 24,  104 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsItem.displayIdentifier |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                <li><a href=\"{{ path('editor_lsdoc', {'id':lsItem.lsDoc.id}) }}\">{{ lsItem.lsDoc.title |truncate(32, true) }}</a></li>
                <li class=\"active\">{{ lsItem.displayIdentifier |truncate(64, true) }}</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                {#
                <div class=\"panel-heading\">
                    Learning Standard Item
                </div>
                #}
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'humanCodingScheme': 'Human Coding Scheme',
                            'fullStatement': 'Full Statement',
                            'abbreviatedStatement': 'Abbreviated Statement',
                            'listEnumInSource': 'List Enumeration in Source',
                            'conceptKeywords': 'Concept Keywords',
                            'conceptKeywordsUri': 'Concept Keywords URI',
                            'language': 'Language',
                            'educationalAlignment': 'Educational Alignment',
                            'type': 'Type',
                            'licenceUri': 'Licence URI',
                            'changedAt': 'Last Changed',
                            'notes': 'Notes'
                        } %}
                            {% if attribute(lsItem, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsItem, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'uri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% elseif field == 'lsDocUri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    {% if is_granted('edit', lsItem) or is_granted('add-standard-to', null) %}
                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            {% endif %}
                            {% if is_granted('add-standard-to', null) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            {% endif %}
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            {% endif %}
                            {# TODO: How do we \"find aligned resources\"
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" disabled=\"disabled\">Find Aligned Resources</button>
                            </li>
                            #}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
                {% embed 'framework/editor/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block end_of_item_a %}
                        {% if is_granted('edit', lsItem) and is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                            {% if group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            {% elseif group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            {% else %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            {% endif %}
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsItem.lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsItem.lsDoc.id, 'highlight':lsItem.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Learning Standard',
        'saveButton': 'Save changes'
    } %}
        {% block modalButtons %}
            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete {% if (lsItem.children is not empty) -%}disabled{%- endif %}\" {% if (lsItem.children is not empty) -%} disabled=\"disabled\"{%- endif %}>Delete</button>
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'copy',
        'modalTitle':'Add Standard To Package',
        'saveButton': 'Copy'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'associate',
        'modalTitle':'Add Relationship to this Standard',
        'saveButton': 'Associate'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'changeParent',
        'modalTitle':'Change Parent of Item',
        'saveButton': 'Change'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsItemId = {{ lsItem.id }};
        app.lsDocId = {{ lsItem.lsDoc.id }};
        app.path = app.path||{};
        app.path.lsitem_edit = '{{ path('lsitem_edit', {'id':'ID'}) }}';
        app.path.lsitem_delete = '{{ path('lsitem_delete', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC', 'parent':'PARENT'}) }}';
        app.path.lsitem_copy_item = '{{ path('lsitem_copy_item', {'id':'ID'}) }}';
        app.path.lsitem_remove_child = '{{ path('lsitem_remove_child', {'id':'ID', 'child':'CHILD'}) }}';
        app.path.lsitem_change_parent = '{{ path('lsitem_change_parent', {'id':'ID'}) }}';
        app.path.editor_lsdoc = '{{ path('editor_lsdoc', {'id':'ID'}) }}';
        app.path.lsassociation_new = '{{ path('lsassociation_new', {'sourceLsItem':'ID'}) }}';
        app.path.lsassociation_delete = '{{ path('lsassociation_remove', {'id':'ID'}) }}';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-{{ lsItem.id }}]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', {# TODO: Make DELETE work correctly #}
                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '{{ path('lsitem_remove_child', {'id':lsItem.id, 'child':'CHILD'}) }}'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '{{ path('lsassociation_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_item.html.twig", "/var/www/html/templates/framework/editor/view_item.html.twig");
    }
}


/* framework/editor/view_item.html.twig */
class __TwigTemplate_e9bd5936034afdb5138ef5e895b99e04575450004d7f257c3a61859cb08af455___1186689039 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'end_of_item_a' => [$this, 'block_end_of_item_a'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 93
        return "framework/editor/_ls_association_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_ls_association_component.html.twig", "framework/editor/view_item.html.twig", 93);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_end_of_item_a($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "end_of_item_a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "end_of_item_a"));

        // line 95
        echo "                        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 95, $this->source); })())) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 95, $this->source); })()), "lsDoc", [], "any", false, false, false, 95)))) {
            // line 96
            echo "                            <span class=\"pull-right\">
                            ";
            // line 97
            if (((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 97, $this->source); })()) === constant("App\\Entity\\Framework\\LsAssociation::CHILD_OF"))) {
                // line 98
                echo "                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            ";
            } elseif ((            // line 99
(isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 99, $this->source); })()) === constant("App\\Entity\\Framework\\LsAssociation::INVERSE_CHILD_OF"))) {
                // line 100
                echo "                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            ";
            } else {
                // line 102
                echo "                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            ";
            }
            // line 104
            echo "                            </span>
                        ";
        }
        // line 106
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1394 => 106,  1390 => 104,  1386 => 102,  1382 => 100,  1380 => 99,  1377 => 98,  1375 => 97,  1372 => 96,  1369 => 95,  1359 => 94,  1336 => 93,  739 => 501,  714 => 479,  681 => 449,  649 => 420,  571 => 345,  557 => 334,  532 => 312,  518 => 301,  491 => 277,  468 => 257,  451 => 242,  446 => 239,  421 => 217,  398 => 197,  381 => 183,  373 => 178,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  336 => 168,  332 => 167,  328 => 165,  318 => 164,  308 => 156,  305 => 155,  303 => 149,  300 => 148,  298 => 142,  295 => 141,  293 => 135,  290 => 134,  288 => 124,  278 => 117,  273 => 115,  265 => 109,  251 => 108,  248 => 93,  231 => 92,  224 => 87,  219 => 84,  217 => 79,  208 => 72,  205 => 71,  199 => 67,  196 => 66,  190 => 62,  188 => 61,  184 => 59,  182 => 58,  178 => 56,  172 => 55,  168 => 53,  162 => 51,  154 => 49,  152 => 48,  145 => 47,  143 => 46,  138 => 45,  135 => 44,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  119 => 26,  115 => 24,  104 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsItem.displayIdentifier |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                <li><a href=\"{{ path('editor_lsdoc', {'id':lsItem.lsDoc.id}) }}\">{{ lsItem.lsDoc.title |truncate(32, true) }}</a></li>
                <li class=\"active\">{{ lsItem.displayIdentifier |truncate(64, true) }}</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                {#
                <div class=\"panel-heading\">
                    Learning Standard Item
                </div>
                #}
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'humanCodingScheme': 'Human Coding Scheme',
                            'fullStatement': 'Full Statement',
                            'abbreviatedStatement': 'Abbreviated Statement',
                            'listEnumInSource': 'List Enumeration in Source',
                            'conceptKeywords': 'Concept Keywords',
                            'conceptKeywordsUri': 'Concept Keywords URI',
                            'language': 'Language',
                            'educationalAlignment': 'Educational Alignment',
                            'type': 'Type',
                            'licenceUri': 'Licence URI',
                            'changedAt': 'Last Changed',
                            'notes': 'Notes'
                        } %}
                            {% if attribute(lsItem, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsItem, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'uri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% elseif field == 'lsDocUri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    {% if is_granted('edit', lsItem) or is_granted('add-standard-to', null) %}
                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            {% endif %}
                            {% if is_granted('add-standard-to', null) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            {% endif %}
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            {% endif %}
                            {# TODO: How do we \"find aligned resources\"
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" disabled=\"disabled\">Find Aligned Resources</button>
                            </li>
                            #}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
                {% embed 'framework/editor/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block end_of_item_a %}
                        {% if is_granted('edit', lsItem) and is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                            {% if group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            {% elseif group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            {% else %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            {% endif %}
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsItem.lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsItem.lsDoc.id, 'highlight':lsItem.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Learning Standard',
        'saveButton': 'Save changes'
    } %}
        {% block modalButtons %}
            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete {% if (lsItem.children is not empty) -%}disabled{%- endif %}\" {% if (lsItem.children is not empty) -%} disabled=\"disabled\"{%- endif %}>Delete</button>
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'copy',
        'modalTitle':'Add Standard To Package',
        'saveButton': 'Copy'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'associate',
        'modalTitle':'Add Relationship to this Standard',
        'saveButton': 'Associate'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'changeParent',
        'modalTitle':'Change Parent of Item',
        'saveButton': 'Change'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsItemId = {{ lsItem.id }};
        app.lsDocId = {{ lsItem.lsDoc.id }};
        app.path = app.path||{};
        app.path.lsitem_edit = '{{ path('lsitem_edit', {'id':'ID'}) }}';
        app.path.lsitem_delete = '{{ path('lsitem_delete', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC', 'parent':'PARENT'}) }}';
        app.path.lsitem_copy_item = '{{ path('lsitem_copy_item', {'id':'ID'}) }}';
        app.path.lsitem_remove_child = '{{ path('lsitem_remove_child', {'id':'ID', 'child':'CHILD'}) }}';
        app.path.lsitem_change_parent = '{{ path('lsitem_change_parent', {'id':'ID'}) }}';
        app.path.editor_lsdoc = '{{ path('editor_lsdoc', {'id':'ID'}) }}';
        app.path.lsassociation_new = '{{ path('lsassociation_new', {'sourceLsItem':'ID'}) }}';
        app.path.lsassociation_delete = '{{ path('lsassociation_remove', {'id':'ID'}) }}';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-{{ lsItem.id }}]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', {# TODO: Make DELETE work correctly #}
                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '{{ path('lsitem_remove_child', {'id':lsItem.id, 'child':'CHILD'}) }}'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '{{ path('lsassociation_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_item.html.twig", "/var/www/html/templates/framework/editor/view_item.html.twig");
    }
}


/* framework/editor/view_item.html.twig */
class __TwigTemplate_e9bd5936034afdb5138ef5e895b99e04575450004d7f257c3a61859cb08af455___1702897154 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'modalButtons' => [$this, 'block_modalButtons'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 124
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_item.html.twig", 124);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 129
    public function block_modalButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalButtons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalButtons"));

        // line 130
        echo "            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete ";
        // line 131
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 131, $this->source); })()), "children", [], "any", false, false, false, 131))) {
            echo "disabled";
        }
        echo "\" ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 131, $this->source); })()), "children", [], "any", false, false, false, 131))) {
            echo "disabled=\"disabled\"";
        }
        echo ">Delete</button>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2004 => 131,  2001 => 130,  1991 => 129,  1968 => 124,  1394 => 106,  1390 => 104,  1386 => 102,  1382 => 100,  1380 => 99,  1377 => 98,  1375 => 97,  1372 => 96,  1369 => 95,  1359 => 94,  1336 => 93,  739 => 501,  714 => 479,  681 => 449,  649 => 420,  571 => 345,  557 => 334,  532 => 312,  518 => 301,  491 => 277,  468 => 257,  451 => 242,  446 => 239,  421 => 217,  398 => 197,  381 => 183,  373 => 178,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  336 => 168,  332 => 167,  328 => 165,  318 => 164,  308 => 156,  305 => 155,  303 => 149,  300 => 148,  298 => 142,  295 => 141,  293 => 135,  290 => 134,  288 => 124,  278 => 117,  273 => 115,  265 => 109,  251 => 108,  248 => 93,  231 => 92,  224 => 87,  219 => 84,  217 => 79,  208 => 72,  205 => 71,  199 => 67,  196 => 66,  190 => 62,  188 => 61,  184 => 59,  182 => 58,  178 => 56,  172 => 55,  168 => 53,  162 => 51,  154 => 49,  152 => 48,  145 => 47,  143 => 46,  138 => 45,  135 => 44,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  119 => 26,  115 => 24,  104 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsItem.displayIdentifier |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                <li><a href=\"{{ path('editor_lsdoc', {'id':lsItem.lsDoc.id}) }}\">{{ lsItem.lsDoc.title |truncate(32, true) }}</a></li>
                <li class=\"active\">{{ lsItem.displayIdentifier |truncate(64, true) }}</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                {#
                <div class=\"panel-heading\">
                    Learning Standard Item
                </div>
                #}
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'humanCodingScheme': 'Human Coding Scheme',
                            'fullStatement': 'Full Statement',
                            'abbreviatedStatement': 'Abbreviated Statement',
                            'listEnumInSource': 'List Enumeration in Source',
                            'conceptKeywords': 'Concept Keywords',
                            'conceptKeywordsUri': 'Concept Keywords URI',
                            'language': 'Language',
                            'educationalAlignment': 'Educational Alignment',
                            'type': 'Type',
                            'licenceUri': 'Licence URI',
                            'changedAt': 'Last Changed',
                            'notes': 'Notes'
                        } %}
                            {% if attribute(lsItem, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsItem, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'uri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% elseif field == 'lsDocUri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    {% if is_granted('edit', lsItem) or is_granted('add-standard-to', null) %}
                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            {% endif %}
                            {% if is_granted('add-standard-to', null) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            {% endif %}
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            {% endif %}
                            {# TODO: How do we \"find aligned resources\"
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" disabled=\"disabled\">Find Aligned Resources</button>
                            </li>
                            #}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
                {% embed 'framework/editor/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block end_of_item_a %}
                        {% if is_granted('edit', lsItem) and is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                            {% if group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            {% elseif group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            {% else %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            {% endif %}
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsItem.lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsItem.lsDoc.id, 'highlight':lsItem.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Learning Standard',
        'saveButton': 'Save changes'
    } %}
        {% block modalButtons %}
            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete {% if (lsItem.children is not empty) -%}disabled{%- endif %}\" {% if (lsItem.children is not empty) -%} disabled=\"disabled\"{%- endif %}>Delete</button>
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'copy',
        'modalTitle':'Add Standard To Package',
        'saveButton': 'Copy'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'associate',
        'modalTitle':'Add Relationship to this Standard',
        'saveButton': 'Associate'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'changeParent',
        'modalTitle':'Change Parent of Item',
        'saveButton': 'Change'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsItemId = {{ lsItem.id }};
        app.lsDocId = {{ lsItem.lsDoc.id }};
        app.path = app.path||{};
        app.path.lsitem_edit = '{{ path('lsitem_edit', {'id':'ID'}) }}';
        app.path.lsitem_delete = '{{ path('lsitem_delete', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC', 'parent':'PARENT'}) }}';
        app.path.lsitem_copy_item = '{{ path('lsitem_copy_item', {'id':'ID'}) }}';
        app.path.lsitem_remove_child = '{{ path('lsitem_remove_child', {'id':'ID', 'child':'CHILD'}) }}';
        app.path.lsitem_change_parent = '{{ path('lsitem_change_parent', {'id':'ID'}) }}';
        app.path.editor_lsdoc = '{{ path('editor_lsdoc', {'id':'ID'}) }}';
        app.path.lsassociation_new = '{{ path('lsassociation_new', {'sourceLsItem':'ID'}) }}';
        app.path.lsassociation_delete = '{{ path('lsassociation_remove', {'id':'ID'}) }}';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-{{ lsItem.id }}]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', {# TODO: Make DELETE work correctly #}
                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '{{ path('lsitem_remove_child', {'id':lsItem.id, 'child':'CHILD'}) }}'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '{{ path('lsassociation_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_item.html.twig", "/var/www/html/templates/framework/editor/view_item.html.twig");
    }
}


/* framework/editor/view_item.html.twig */
class __TwigTemplate_e9bd5936034afdb5138ef5e895b99e04575450004d7f257c3a61859cb08af455___493043227 extends \Twig\Template
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
        // line 135
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_item.html.twig", 135);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2585 => 135,  2004 => 131,  2001 => 130,  1991 => 129,  1968 => 124,  1394 => 106,  1390 => 104,  1386 => 102,  1382 => 100,  1380 => 99,  1377 => 98,  1375 => 97,  1372 => 96,  1369 => 95,  1359 => 94,  1336 => 93,  739 => 501,  714 => 479,  681 => 449,  649 => 420,  571 => 345,  557 => 334,  532 => 312,  518 => 301,  491 => 277,  468 => 257,  451 => 242,  446 => 239,  421 => 217,  398 => 197,  381 => 183,  373 => 178,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  336 => 168,  332 => 167,  328 => 165,  318 => 164,  308 => 156,  305 => 155,  303 => 149,  300 => 148,  298 => 142,  295 => 141,  293 => 135,  290 => 134,  288 => 124,  278 => 117,  273 => 115,  265 => 109,  251 => 108,  248 => 93,  231 => 92,  224 => 87,  219 => 84,  217 => 79,  208 => 72,  205 => 71,  199 => 67,  196 => 66,  190 => 62,  188 => 61,  184 => 59,  182 => 58,  178 => 56,  172 => 55,  168 => 53,  162 => 51,  154 => 49,  152 => 48,  145 => 47,  143 => 46,  138 => 45,  135 => 44,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  119 => 26,  115 => 24,  104 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsItem.displayIdentifier |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                <li><a href=\"{{ path('editor_lsdoc', {'id':lsItem.lsDoc.id}) }}\">{{ lsItem.lsDoc.title |truncate(32, true) }}</a></li>
                <li class=\"active\">{{ lsItem.displayIdentifier |truncate(64, true) }}</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                {#
                <div class=\"panel-heading\">
                    Learning Standard Item
                </div>
                #}
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'humanCodingScheme': 'Human Coding Scheme',
                            'fullStatement': 'Full Statement',
                            'abbreviatedStatement': 'Abbreviated Statement',
                            'listEnumInSource': 'List Enumeration in Source',
                            'conceptKeywords': 'Concept Keywords',
                            'conceptKeywordsUri': 'Concept Keywords URI',
                            'language': 'Language',
                            'educationalAlignment': 'Educational Alignment',
                            'type': 'Type',
                            'licenceUri': 'Licence URI',
                            'changedAt': 'Last Changed',
                            'notes': 'Notes'
                        } %}
                            {% if attribute(lsItem, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsItem, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'uri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% elseif field == 'lsDocUri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    {% if is_granted('edit', lsItem) or is_granted('add-standard-to', null) %}
                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            {% endif %}
                            {% if is_granted('add-standard-to', null) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            {% endif %}
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            {% endif %}
                            {# TODO: How do we \"find aligned resources\"
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" disabled=\"disabled\">Find Aligned Resources</button>
                            </li>
                            #}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
                {% embed 'framework/editor/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block end_of_item_a %}
                        {% if is_granted('edit', lsItem) and is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                            {% if group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            {% elseif group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            {% else %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            {% endif %}
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsItem.lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsItem.lsDoc.id, 'highlight':lsItem.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Learning Standard',
        'saveButton': 'Save changes'
    } %}
        {% block modalButtons %}
            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete {% if (lsItem.children is not empty) -%}disabled{%- endif %}\" {% if (lsItem.children is not empty) -%} disabled=\"disabled\"{%- endif %}>Delete</button>
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'copy',
        'modalTitle':'Add Standard To Package',
        'saveButton': 'Copy'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'associate',
        'modalTitle':'Add Relationship to this Standard',
        'saveButton': 'Associate'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'changeParent',
        'modalTitle':'Change Parent of Item',
        'saveButton': 'Change'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsItemId = {{ lsItem.id }};
        app.lsDocId = {{ lsItem.lsDoc.id }};
        app.path = app.path||{};
        app.path.lsitem_edit = '{{ path('lsitem_edit', {'id':'ID'}) }}';
        app.path.lsitem_delete = '{{ path('lsitem_delete', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC', 'parent':'PARENT'}) }}';
        app.path.lsitem_copy_item = '{{ path('lsitem_copy_item', {'id':'ID'}) }}';
        app.path.lsitem_remove_child = '{{ path('lsitem_remove_child', {'id':'ID', 'child':'CHILD'}) }}';
        app.path.lsitem_change_parent = '{{ path('lsitem_change_parent', {'id':'ID'}) }}';
        app.path.editor_lsdoc = '{{ path('editor_lsdoc', {'id':'ID'}) }}';
        app.path.lsassociation_new = '{{ path('lsassociation_new', {'sourceLsItem':'ID'}) }}';
        app.path.lsassociation_delete = '{{ path('lsassociation_remove', {'id':'ID'}) }}';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-{{ lsItem.id }}]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', {# TODO: Make DELETE work correctly #}
                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '{{ path('lsitem_remove_child', {'id':lsItem.id, 'child':'CHILD'}) }}'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '{{ path('lsassociation_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_item.html.twig", "/var/www/html/templates/framework/editor/view_item.html.twig");
    }
}


/* framework/editor/view_item.html.twig */
class __TwigTemplate_e9bd5936034afdb5138ef5e895b99e04575450004d7f257c3a61859cb08af455___250506128 extends \Twig\Template
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
        // line 142
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_item.html.twig", 142);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3171 => 142,  2585 => 135,  2004 => 131,  2001 => 130,  1991 => 129,  1968 => 124,  1394 => 106,  1390 => 104,  1386 => 102,  1382 => 100,  1380 => 99,  1377 => 98,  1375 => 97,  1372 => 96,  1369 => 95,  1359 => 94,  1336 => 93,  739 => 501,  714 => 479,  681 => 449,  649 => 420,  571 => 345,  557 => 334,  532 => 312,  518 => 301,  491 => 277,  468 => 257,  451 => 242,  446 => 239,  421 => 217,  398 => 197,  381 => 183,  373 => 178,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  336 => 168,  332 => 167,  328 => 165,  318 => 164,  308 => 156,  305 => 155,  303 => 149,  300 => 148,  298 => 142,  295 => 141,  293 => 135,  290 => 134,  288 => 124,  278 => 117,  273 => 115,  265 => 109,  251 => 108,  248 => 93,  231 => 92,  224 => 87,  219 => 84,  217 => 79,  208 => 72,  205 => 71,  199 => 67,  196 => 66,  190 => 62,  188 => 61,  184 => 59,  182 => 58,  178 => 56,  172 => 55,  168 => 53,  162 => 51,  154 => 49,  152 => 48,  145 => 47,  143 => 46,  138 => 45,  135 => 44,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  119 => 26,  115 => 24,  104 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsItem.displayIdentifier |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                <li><a href=\"{{ path('editor_lsdoc', {'id':lsItem.lsDoc.id}) }}\">{{ lsItem.lsDoc.title |truncate(32, true) }}</a></li>
                <li class=\"active\">{{ lsItem.displayIdentifier |truncate(64, true) }}</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                {#
                <div class=\"panel-heading\">
                    Learning Standard Item
                </div>
                #}
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'humanCodingScheme': 'Human Coding Scheme',
                            'fullStatement': 'Full Statement',
                            'abbreviatedStatement': 'Abbreviated Statement',
                            'listEnumInSource': 'List Enumeration in Source',
                            'conceptKeywords': 'Concept Keywords',
                            'conceptKeywordsUri': 'Concept Keywords URI',
                            'language': 'Language',
                            'educationalAlignment': 'Educational Alignment',
                            'type': 'Type',
                            'licenceUri': 'Licence URI',
                            'changedAt': 'Last Changed',
                            'notes': 'Notes'
                        } %}
                            {% if attribute(lsItem, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsItem, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'uri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% elseif field == 'lsDocUri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    {% if is_granted('edit', lsItem) or is_granted('add-standard-to', null) %}
                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            {% endif %}
                            {% if is_granted('add-standard-to', null) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            {% endif %}
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            {% endif %}
                            {# TODO: How do we \"find aligned resources\"
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" disabled=\"disabled\">Find Aligned Resources</button>
                            </li>
                            #}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
                {% embed 'framework/editor/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block end_of_item_a %}
                        {% if is_granted('edit', lsItem) and is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                            {% if group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            {% elseif group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            {% else %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            {% endif %}
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsItem.lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsItem.lsDoc.id, 'highlight':lsItem.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Learning Standard',
        'saveButton': 'Save changes'
    } %}
        {% block modalButtons %}
            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete {% if (lsItem.children is not empty) -%}disabled{%- endif %}\" {% if (lsItem.children is not empty) -%} disabled=\"disabled\"{%- endif %}>Delete</button>
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'copy',
        'modalTitle':'Add Standard To Package',
        'saveButton': 'Copy'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'associate',
        'modalTitle':'Add Relationship to this Standard',
        'saveButton': 'Associate'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'changeParent',
        'modalTitle':'Change Parent of Item',
        'saveButton': 'Change'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsItemId = {{ lsItem.id }};
        app.lsDocId = {{ lsItem.lsDoc.id }};
        app.path = app.path||{};
        app.path.lsitem_edit = '{{ path('lsitem_edit', {'id':'ID'}) }}';
        app.path.lsitem_delete = '{{ path('lsitem_delete', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC', 'parent':'PARENT'}) }}';
        app.path.lsitem_copy_item = '{{ path('lsitem_copy_item', {'id':'ID'}) }}';
        app.path.lsitem_remove_child = '{{ path('lsitem_remove_child', {'id':'ID', 'child':'CHILD'}) }}';
        app.path.lsitem_change_parent = '{{ path('lsitem_change_parent', {'id':'ID'}) }}';
        app.path.editor_lsdoc = '{{ path('editor_lsdoc', {'id':'ID'}) }}';
        app.path.lsassociation_new = '{{ path('lsassociation_new', {'sourceLsItem':'ID'}) }}';
        app.path.lsassociation_delete = '{{ path('lsassociation_remove', {'id':'ID'}) }}';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-{{ lsItem.id }}]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', {# TODO: Make DELETE work correctly #}
                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '{{ path('lsitem_remove_child', {'id':lsItem.id, 'child':'CHILD'}) }}'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '{{ path('lsassociation_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_item.html.twig", "/var/www/html/templates/framework/editor/view_item.html.twig");
    }
}


/* framework/editor/view_item.html.twig */
class __TwigTemplate_e9bd5936034afdb5138ef5e895b99e04575450004d7f257c3a61859cb08af455___726222043 extends \Twig\Template
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
        // line 149
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_item.html.twig", 149);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3757 => 149,  3171 => 142,  2585 => 135,  2004 => 131,  2001 => 130,  1991 => 129,  1968 => 124,  1394 => 106,  1390 => 104,  1386 => 102,  1382 => 100,  1380 => 99,  1377 => 98,  1375 => 97,  1372 => 96,  1369 => 95,  1359 => 94,  1336 => 93,  739 => 501,  714 => 479,  681 => 449,  649 => 420,  571 => 345,  557 => 334,  532 => 312,  518 => 301,  491 => 277,  468 => 257,  451 => 242,  446 => 239,  421 => 217,  398 => 197,  381 => 183,  373 => 178,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  336 => 168,  332 => 167,  328 => 165,  318 => 164,  308 => 156,  305 => 155,  303 => 149,  300 => 148,  298 => 142,  295 => 141,  293 => 135,  290 => 134,  288 => 124,  278 => 117,  273 => 115,  265 => 109,  251 => 108,  248 => 93,  231 => 92,  224 => 87,  219 => 84,  217 => 79,  208 => 72,  205 => 71,  199 => 67,  196 => 66,  190 => 62,  188 => 61,  184 => 59,  182 => 58,  178 => 56,  172 => 55,  168 => 53,  162 => 51,  154 => 49,  152 => 48,  145 => 47,  143 => 46,  138 => 45,  135 => 44,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  119 => 26,  115 => 24,  104 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsItem.displayIdentifier |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                <li><a href=\"{{ path('editor_lsdoc', {'id':lsItem.lsDoc.id}) }}\">{{ lsItem.lsDoc.title |truncate(32, true) }}</a></li>
                <li class=\"active\">{{ lsItem.displayIdentifier |truncate(64, true) }}</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                {#
                <div class=\"panel-heading\">
                    Learning Standard Item
                </div>
                #}
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'humanCodingScheme': 'Human Coding Scheme',
                            'fullStatement': 'Full Statement',
                            'abbreviatedStatement': 'Abbreviated Statement',
                            'listEnumInSource': 'List Enumeration in Source',
                            'conceptKeywords': 'Concept Keywords',
                            'conceptKeywordsUri': 'Concept Keywords URI',
                            'language': 'Language',
                            'educationalAlignment': 'Educational Alignment',
                            'type': 'Type',
                            'licenceUri': 'Licence URI',
                            'changedAt': 'Last Changed',
                            'notes': 'Notes'
                        } %}
                            {% if attribute(lsItem, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsItem, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'uri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% elseif field == 'lsDocUri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    {% if is_granted('edit', lsItem) or is_granted('add-standard-to', null) %}
                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            {% endif %}
                            {% if is_granted('add-standard-to', null) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            {% endif %}
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            {% endif %}
                            {# TODO: How do we \"find aligned resources\"
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" disabled=\"disabled\">Find Aligned Resources</button>
                            </li>
                            #}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
                {% embed 'framework/editor/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block end_of_item_a %}
                        {% if is_granted('edit', lsItem) and is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                            {% if group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            {% elseif group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            {% else %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            {% endif %}
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsItem.lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsItem.lsDoc.id, 'highlight':lsItem.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Learning Standard',
        'saveButton': 'Save changes'
    } %}
        {% block modalButtons %}
            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete {% if (lsItem.children is not empty) -%}disabled{%- endif %}\" {% if (lsItem.children is not empty) -%} disabled=\"disabled\"{%- endif %}>Delete</button>
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'copy',
        'modalTitle':'Add Standard To Package',
        'saveButton': 'Copy'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'associate',
        'modalTitle':'Add Relationship to this Standard',
        'saveButton': 'Associate'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'changeParent',
        'modalTitle':'Change Parent of Item',
        'saveButton': 'Change'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsItemId = {{ lsItem.id }};
        app.lsDocId = {{ lsItem.lsDoc.id }};
        app.path = app.path||{};
        app.path.lsitem_edit = '{{ path('lsitem_edit', {'id':'ID'}) }}';
        app.path.lsitem_delete = '{{ path('lsitem_delete', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC', 'parent':'PARENT'}) }}';
        app.path.lsitem_copy_item = '{{ path('lsitem_copy_item', {'id':'ID'}) }}';
        app.path.lsitem_remove_child = '{{ path('lsitem_remove_child', {'id':'ID', 'child':'CHILD'}) }}';
        app.path.lsitem_change_parent = '{{ path('lsitem_change_parent', {'id':'ID'}) }}';
        app.path.editor_lsdoc = '{{ path('editor_lsdoc', {'id':'ID'}) }}';
        app.path.lsassociation_new = '{{ path('lsassociation_new', {'sourceLsItem':'ID'}) }}';
        app.path.lsassociation_delete = '{{ path('lsassociation_remove', {'id':'ID'}) }}';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-{{ lsItem.id }}]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', {# TODO: Make DELETE work correctly #}
                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '{{ path('lsitem_remove_child', {'id':lsItem.id, 'child':'CHILD'}) }}'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '{{ path('lsassociation_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_item.html.twig", "/var/www/html/templates/framework/editor/view_item.html.twig");
    }
}


/* framework/editor/view_item.html.twig */
class __TwigTemplate_e9bd5936034afdb5138ef5e895b99e04575450004d7f257c3a61859cb08af455___1285220843 extends \Twig\Template
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
        // line 156
        return "framework/editor/_modal_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/view_item.html.twig"));

        $this->parent = $this->loadTemplate("framework/editor/_modal_component.html.twig", "framework/editor/view_item.html.twig", 156);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/editor/view_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4343 => 156,  3757 => 149,  3171 => 142,  2585 => 135,  2004 => 131,  2001 => 130,  1991 => 129,  1968 => 124,  1394 => 106,  1390 => 104,  1386 => 102,  1382 => 100,  1380 => 99,  1377 => 98,  1375 => 97,  1372 => 96,  1369 => 95,  1359 => 94,  1336 => 93,  739 => 501,  714 => 479,  681 => 449,  649 => 420,  571 => 345,  557 => 334,  532 => 312,  518 => 301,  491 => 277,  468 => 257,  451 => 242,  446 => 239,  421 => 217,  398 => 197,  381 => 183,  373 => 178,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  336 => 168,  332 => 167,  328 => 165,  318 => 164,  308 => 156,  305 => 155,  303 => 149,  300 => 148,  298 => 142,  295 => 141,  293 => 135,  290 => 134,  288 => 124,  278 => 117,  273 => 115,  265 => 109,  251 => 108,  248 => 93,  231 => 92,  224 => 87,  219 => 84,  217 => 79,  208 => 72,  205 => 71,  199 => 67,  196 => 66,  190 => 62,  188 => 61,  184 => 59,  182 => 58,  178 => 56,  172 => 55,  168 => 53,  162 => 51,  154 => 49,  152 => 48,  145 => 47,  143 => 46,  138 => 45,  135 => 44,  133 => 43,  129 => 42,  126 => 41,  123 => 40,  119 => 26,  115 => 24,  104 => 11,  98 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ lsItem.displayIdentifier |truncate(64, true) }}{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('lsdoc_index') }}\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span><span class=\"sr-only\">Home</span></a></li>
                <li><a href=\"{{ path('editor_lsdoc', {'id':lsItem.lsDoc.id}) }}\">{{ lsItem.lsDoc.title |truncate(32, true) }}</a></li>
                <li class=\"active\">{{ lsItem.displayIdentifier |truncate(64, true) }}</li>
            </ol>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <section class=\"panel panel-default\">
                {#
                <div class=\"panel-heading\">
                    Learning Standard Item
                </div>
                #}
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for field, name in {
                            'humanCodingScheme': 'Human Coding Scheme',
                            'fullStatement': 'Full Statement',
                            'abbreviatedStatement': 'Abbreviated Statement',
                            'listEnumInSource': 'List Enumeration in Source',
                            'conceptKeywords': 'Concept Keywords',
                            'conceptKeywordsUri': 'Concept Keywords URI',
                            'language': 'Language',
                            'educationalAlignment': 'Educational Alignment',
                            'type': 'Type',
                            'licenceUri': 'Licence URI',
                            'changedAt': 'Last Changed',
                            'notes': 'Notes'
                        } %}
                            {% if attribute(lsItem, field) is not empty %}
                                <li class=\"list-group-item\">
                                    <strong>{{ name }}:</strong>
                                    {% set value = attribute(lsItem, field) %}
                                    {% if value.timestamp is defined and value.timezone is defined %}
                                        {{ value|date }}
                                    {% elseif field == 'uri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% elseif field == 'lsDocUri'%}
                                        <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                                    {% else %}
                                        {{ value }}
                                    {% endif %}
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>

                    {% if is_granted('edit', lsItem) or is_granted('add-standard-to', null) %}
                    <div class=\"text-center\">
                        <ul class=\"list-inline\">
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#editModal\">Edit</button>
                            </li>
                            {% endif %}
                            {% if is_granted('add-standard-to', null) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#copyModal\">Add to Another CF Package</button>
                            </li>
                            {% endif %}
                            {% if is_granted('edit', lsItem) %}
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#addChildModal\">Create Child Statement</button>
                            </li>
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#associateModal\">Add Association</button>
                            </li>
                            {% endif %}
                            {# TODO: How do we \"find aligned resources\"
                            <li>
                                <button type=\"button\" class=\"btn btn-sm btn-default\" disabled=\"disabled\">Find Aligned Resources</button>
                            </li>
                            #}
                        </ul>
                    </div>
                    {% endif %}
                </div>
            </section>
        </div>

        <div class=\"col-sm-6\">
            {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
                {% embed 'framework/editor/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block end_of_item_a %}
                        {% if is_granted('edit', lsItem) and is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                            {% if group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-change-parent\">Change</span>
                            {% elseif group is constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF') %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-child\">Remove</span>
                            {% else %}
                                <span role=\"button\" class=\"btn btn-xs btn-danger btn-remove-association\">Remove</span>
                            {% endif %}
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <section class=\"panel panel-default panel-component\">
                <div class=\"panel-heading\">{{ lsItem.lsDoc.title }}</div>
                <div class=\"rendered-document panel-body\">
                    {{ render_esi(path('editor_render', {'id':lsItem.lsDoc.id, 'highlight':lsItem.id})) }}
                </div>
            </section>
        </div>
    </div>


    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'edit',
        'modalTitle':'Edit Learning Standard',
        'saveButton': 'Save changes'
    } %}
        {% block modalButtons %}
            <button type=\"button\" class=\"btn btn-primary btn-save\">Save Changes</button>
            <button type=\"button\" class=\"btn btn-danger btn-delete {% if (lsItem.children is not empty) -%}disabled{%- endif %}\" {% if (lsItem.children is not empty) -%} disabled=\"disabled\"{%- endif %}>Delete</button>
        {% endblock %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'addChild',
        'modalTitle':'Add Learning Standard',
        'saveButton': 'Create'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'copy',
        'modalTitle':'Add Standard To Package',
        'saveButton': 'Copy'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'associate',
        'modalTitle':'Add Relationship to this Standard',
        'saveButton': 'Associate'
    } %}
    {% endembed %}

    {% embed 'framework/editor/_modal_component.html.twig' with {
        'modalName':'changeParent',
        'modalTitle':'Change Parent of Item',
        'saveButton': 'Change'
    } %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    <script>
        window.app = window.app||{};
        app.lsItemId = {{ lsItem.id }};
        app.lsDocId = {{ lsItem.lsDoc.id }};
        app.path = app.path||{};
        app.path.lsitem_edit = '{{ path('lsitem_edit', {'id':'ID'}) }}';
        app.path.lsitem_delete = '{{ path('lsitem_delete', {'id':'ID'}) }}';
        app.path.lsitem_new = '{{ path('lsitem_new', {'doc':'DOC', 'parent':'PARENT'}) }}';
        app.path.lsitem_copy_item = '{{ path('lsitem_copy_item', {'id':'ID'}) }}';
        app.path.lsitem_remove_child = '{{ path('lsitem_remove_child', {'id':'ID', 'child':'CHILD'}) }}';
        app.path.lsitem_change_parent = '{{ path('lsitem_change_parent', {'id':'ID'}) }}';
        app.path.editor_lsdoc = '{{ path('editor_lsdoc', {'id':'ID'}) }}';
        app.path.lsassociation_new = '{{ path('lsassociation_new', {'sourceLsItem':'ID'}) }}';
        app.path.lsassociation_delete = '{{ path('lsassociation_remove', {'id':'ID'}) }}';

        function scrollToMark(){
            var
                \$rdoc = \$('.rendered-document'),
                //\$hl = \$('a[name=mark-{{ lsItem.id }}]')
                \$hl = \$('a[name=mark-'+app.lsItemId+']')
            ;

            if (\$rdoc.length && \$hl.length) {
                \$hl.removeClass('text-muted').addClass('text-primary').css('font-weight', 'bold');
                \$rdoc.scrollTop((\$hl.offset().top-\$rdoc.offset().top)-(\$rdoc.height()/3));
            }
        }

        function prepareEditModal(){
            var \$editModal = \$('#editModal');
            \$editModal.on('shown.bs.modal', function(e){
                \$('#editModal').find('.modal-body').load(
                    //'{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    app.path.lsitem_edit.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR) {
                        \$('#ls_item_educationalAlignment').multiselect({
                            optionLabel: function(element) {
                                return \$(element).html() + ' - ' + \$(element).data('title');
                            },
                            numberDisplayed: 20
                        });
                        //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                        \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                    }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#editModal').find('.modal-body').html('...');
            });
            \$editModal.find('.btn-save').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_edit', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_edit.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$editModal.find('form[name=ls_item]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.reload(true);

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                    \$('#ls_item_educationalAlignment').multiselect({
                        optionLabel: function(element) {
                            return \$(element).html() + ' - ' + \$(element).data('title');
                        },
                        numberDisplayed: 20
                    });
                    \$('#ls_item_itemType').select2entity({dropdownParent: \$('#editModal')});
                });
            });
            \$editModal.find('.btn-delete').on('click', function(e){
                //\$editModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_delete.replace('ID', app.lsItemId),
                    method: 'POST', {# TODO: Make DELETE work correctly #}
                    data: \$editModal.find('form[name=form]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$editModal.modal('hide');
                    window.location.assign(app.path.editor_lsdoc.replace('ID', app.lsDocId));

                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#editModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAddChildModal(){
            var \$addChildModal = \$('#addChildModal');
            \$addChildModal.on('shown.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').load(
                        //'{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                        app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            \$('#ls_item_educationalAlignment').multiselect({
                                optionLabel: function(element) {
                                    return \$(element).html() + ' - ' + \$(element).data('title');
                                },
                                numberDisplayed: 20
                            });
                            //\$('.select2entity[data-autostart=\"true\"]').select2entity();
                            \$('#ls_item_itemType').select2entity({dropdownParent: \$('#addChildModal')});
                        }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#addChildModal').find('.modal-body').html('...');
            });
            \$addChildModal.find('.btn-save').on('click', function(e){
                //\$addChildModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_new', {'doc':lsItem.lsDoc.id, 'parent':lsItem.id}) }}',
                    url: app.path.lsitem_new.replace('DOC', app.lsDocId).replace('PARENT', app.lsItemId),
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

        function prepareCopyModal(){
            var \$copyModal = \$('#copyModal');
            \$copyModal.on('shown.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').load(
                        //'{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                        app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#copyModal').find('.modal-body').html('...');
            });
            \$copyModal.find('.btn-save').on('click', function(e){
                //\$copyModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsitem_copy_item', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_copy_item.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$copyModal.find('form[name=ls_doc_list]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$copyModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#copyModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }

        function prepareAssociateModal(){
            var \$associateModal = \$('#associateModal');
            \$associateModal.on('shown.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').load(
                    //'{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    app.path.lsassociation_new.replace('ID', app.lsItemId),
                    null,
                    function(responseText, textStatus, jqXHR){ }
                )
            }).on('hidden.bs.modal', function(e){
                \$('#associateModal').find('.modal-body').html('...');
            });
            \$associateModal.find('.btn-save').on('click', function(e){
                //\$associateModal.find('form[name=ls_doc]').submit();
                \$.ajax({
                    //url: '{{ path('lsassociation_new', {'sourceLsItem':lsItem.id}) }}',
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$associateModal.find('form[name=ls_association]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$associateModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#associateModal').find('.modal-body').html(jqXHR.responseText);
                });
            });

            \$associateModal.on('change', '#ls_association_lsDoc', function(){
                var \$lsDoc = \$('#ls_association_lsDoc');
                var \$form = \$(this).closest('form');
                var data = {};
                data[\$lsDoc.attr('name')] = \$lsDoc.val();

                \$('#lsItemListWrap').off('click');
                \$.ajax({
                    //url: \$form.attr('action'),
                    url: app.path.lsassociation_new.replace('ID', app.lsItemId),
                    type: \$form.attr('method'),
                    data: data
                }).done(function(data, textStatus, jqXHR){
                    var \$list = \$(data).find('#ls_association_destinationLsItem');

                    \$('#ls_association_destinationLsItem').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeUri').closest('.form-group').remove();
                    \$('#ls_association_destinationNodeIdentifier').closest('.form-group').remove();

                    if (\$list.length) {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationLsItem').closest('.form-group'))
                    } else {
                        \$('#ls_association_lsDoc').closest('.form-group')
                            .after(\$(data).find('#ls_association_destinationNodeUri').closest('.form-group'))
                            .after(\$(data).find('#ls_association_destinationNodeIdentifier').closest('.form-group'))
                        ;
                    }

                    \$('#lsItemList').replaceWith(\$(data).find('#lsItemList'));

                    var \$lsItemList = \$('#lsItemListWrap');
                    \$lsItemList.on('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();

                        var \$target = \$(e.target);
                        \$('#ls_association_destinationLsItem').val(\$target.attr('name').replace(/mark-/, ''));
                    });
                });
            });
        }

        function prepareChangeParentModal(){
            var
                \$children = \$('#item-component-parent'),
                \$item = null
            ;
            \$children.on('click', '.btn-change-parent', {}, function(e){
                e.preventDefault();

                \$item = \$(e.target).closest('.list-group-item');
                \$('#changeParentModal').modal('show');
            });

            var \$changeParentModal = \$('#changeParentModal');
            \$changeParentModal.on('shown.bs.modal', function(e){
                \$('#changeParentModal').find('.modal-body').load(
                        //'{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                        app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                        null,
                        function(responseText, textStatus, jqXHR){
                            var \$lsItemList = \$('#lsItemListWrap-changeParent');
                            \$lsItemList.on('click', '.lsItem', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                var \$target = \$(e.target);
                                \$('#ls_item_parent_parentItem').val(\$target.attr('name').replace(/mark-/, ''));
                            });
                            \$lsItemList.on('click', '.lsDoc', function(e){
                                e.stopPropagation();
                                e.preventDefault();

                                \$('#ls_item_parent_parentItem').val('');
                            });
                        }
                )
            }).on('hidden.bs.modal', function(e){
                var \$lsItemList = \$('#lsItemListWrap-changeParent');
                \$lsItemList.off('click', '.lsItem');
                \$lsItemList.off('click', '.lsDoc');
                \$('#changeParentModal').find('.modal-body').html('...');
            });

            \$changeParentModal.find('.btn-save').on('click', function(e){
                \$.ajax({
                    //url: '{{ path('lsitem_change_parent', {'id':lsItem.id}) }}',
                    url: app.path.lsitem_change_parent.replace('ID', app.lsItemId),
                    method: 'POST',
                    data: \$changeParentModal.find('form[name=ls_item_parent]').serialize()
                }).done(function(data, textStatus, jqXHR){
                    \$changeParentModal.modal('hide');
                    var location = jqXHR.getResponseHeader('Location');
                    if (location) {
                        window.location.assign(location);
                    } else {
                        window.location.reload(true);
                    }
                }).fail(function(jqXHR, textStatus, errorThrown){
                    \$('#changeParentModal').find('.modal-body').html(jqXHR.responseText);
                });
            });
        }


        function prepareRemoveChildButton(){
            var \$children = \$('#item-component-children');
            \$children.on('click', '.btn-remove-child', {}, function(e){
                e.preventDefault();

                var
                        target = \$(e.target),
                        item = target.parents('.lsitem')
                        ;

                \$.ajax({
                    //url: '{{ path('lsitem_remove_child', {'id':lsItem.id, 'child':'CHILD'}) }}'.replace('CHILD', item.data('itemId')),
                    url: app.path.lsitem_remove_child.replace('ID', app.lsItemId).replace('CHILD', item.data('itemId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        function prepareRemoveAssociationButton(){
            var \$components = \$('.item-component');
            \$components.on('click', '.btn-remove-association', {}, function(e){
                e.preventDefault();

                var
                    target = \$(e.target),
                    item = target.parents('.lsassociation')
                ;

                \$.ajax({
                    //url: '{{ path('lsassociation_delete', {'id':lsItem.id}) }}',
                    url: app.path.lsassociation_delete.replace('ID', item.data('associationId')),
                    method: 'POST'
                }).done(function(data, textStatus, jqXHR){
                    window.location.reload(true);
                }).fail(function(jqXHR, textStatus, errorThrown){

                });
            });
        }

        \$(document).ready(function(){
            scrollToMark();
            prepareEditModal();
            prepareAddChildModal();
            prepareCopyModal();
            prepareAssociateModal();
            prepareRemoveChildButton();
            prepareRemoveAssociationButton();
            prepareChangeParentModal();
        });
    </script>
{% endblock %}
", "framework/editor/view_item.html.twig", "/var/www/html/templates/framework/editor/view_item.html.twig");
    }
}
