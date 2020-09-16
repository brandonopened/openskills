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

/* framework/doc_tree/tree_item_details.html.twig */
class __TwigTemplate_756e3c16e0d9f997c2a466150c083c3648ebea65fd1575ae3550974dc168b867 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/tree_item_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/tree_item_details.html.twig"));

        // line 1
        echo "<div class=\"lsItemDetails\">
    <ul class=\"list-group lsItemDetailsMain\">
        ";
        // line 4
        echo "        ";
        // line 5
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["fullStatement" => "Full Statement", "conceptKeywords" => "Concept Keywords", "educationalAlignment" => "Education Level", "type" => "Type", "notes" => "Notes"]);
        foreach ($context['_seq'] as $context["field"] => $context["name"]) {
            // line 12
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 12, $this->source); })()), $context["field"], [], "any", false, false, false, 12))) {
                // line 13
                echo "                ";
                if ((($context["field"] != "fullStatement") ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 13, $this->source); })()), "abbreviatedStatement", [], "any", false, false, false, 13)))) {
                    // line 14
                    echo "                    <li class=\"list-group-item\">
                        <strong>";
                    // line 15
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo ":</strong>
                        ";
                    // line 16
                    $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 16, $this->source); })()), $context["field"], [], "any", false, false, false, 16);
                    // line 17
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timestamp", [], "any", true, true, false, 17) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timezone", [], "any", true, true, false, 17))) {
                        // line 18
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "m/d/Y H:i"), "html", null, true);
                        echo "
                        ";
                    } elseif ((                    // line 19
$context["field"] == "uri")) {
                        // line 20
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 20, $this->source); })())), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 20, $this->source); })())), "html", null, true);
                        echo "</a>
                        ";
                    } elseif ((                    // line 21
$context["field"] == "lsDocUri")) {
                        // line 22
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })())), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })())), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 24
                        echo "                            ";
                        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 26
                    echo "                    </li>
                ";
                }
                // line 28
                echo "            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(["uri" => "Item URI", "listEnumInSource" => "List Enumeration in Source", "conceptKeywordsUri" => "Concept Keywords URI", "language" => "Language", "licenceUri" => "Licence URI", "changedAt" => "Last Changed"]);
        foreach ($context['_seq'] as $context["field"] => $context["name"]) {
            // line 39
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 39, $this->source); })()), $context["field"], [], "any", false, false, false, 39))) {
                // line 40
                echo "                <li class=\"list-group-item lsItemDetailsExtras\">
                    <strong>";
                // line 41
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo ":</strong>
                    <span data-field-name='";
                // line 42
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "'>
                        ";
                // line 43
                $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 43, $this->source); })()), $context["field"], [], "any", false, false, false, 43);
                // line 44
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timestamp", [], "any", true, true, false, 44) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "timezone", [], "any", true, true, false, 44))) {
                    // line 45
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })()), "m/d/Y H:i"), "html", null, true);
                    echo "
                        ";
                } elseif ((                // line 46
$context["field"] == "uri")) {
                    // line 47
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })())), "html", null, true);
                    echo "</a>
                        ";
                } elseif ((                // line 48
$context["field"] == "lsDocUri")) {
                    // line 49
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 49, $this->source); })())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 49, $this->source); })())), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 51
                    echo "                            ";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 51, $this->source); })()), "html", null, true);
                    echo "
                        ";
                }
                // line 53
                echo "                    </span>
                </li>
            ";
            }
            // line 56
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </ul>
    <div class=\"lsItemDetailsMoreInfoLink\"><a>More Info</a></div>

    ";
        // line 60
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 60, $this->source); })())) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 60, $this->source); })()), "lsDoc", [], "any", false, false, false, 60)))) {
            // line 61
            echo "    <div class=\"itemOptions\">
        ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 62, $this->source); })()))) {
                // line 63
                echo "            <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#editItemModal\">Edit</button>
            <button type=\"button\" id=\"deleteItemBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Delete</button>
        ";
            }
            // line 66
            echo "        ";
            // line 69
            echo "
        ";
            // line 70
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 70, $this->source); })()), "lsDoc", [], "any", false, false, false, 70))) {
                // line 71
                echo "            <button type=\"button\" id=\"toggleFolderBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Make This Item a Parent</button>
            <button type=\"button\" id=\"addChildBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addNewChildModal\">Add a New Child Item</button>
            <button type=\"button\" id=\"addExemplarBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addExemplarModal\">Add an Exemplar</button>
        ";
            }
            // line 75
            echo "    </div>
    ";
        }
        // line 77
        echo "</div>
<div class=\"lsItemAssociations\">
    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 79, $this->source); })()), "groupedAssociations", [], "any", false, false, false, 79), function ($__list__) use ($context, $macros) { $context["list"] = $__list__; return  !twig_test_empty($context["list"]); }));
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
            // line 80
            echo "        ";
            // line 81
            echo "        ";
            if (( !($context["group"] === constant("App\\Entity\\Framework\\LsAssociation::CHILD_OF")) &&  !($context["group"] === constant("App\\Entity\\Framework\\LsAssociation::INVERSE_CHILD_OF")))) {
                // line 82
                echo "            ";
                $this->loadTemplate("framework/doc_tree/tree_item_details.html.twig", "framework/doc_tree/tree_item_details.html.twig", 82, "1246889037")->display(twig_array_merge($context, ["title" => $context["group"], "items" => $context["list"], "viewingItem" => (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 82, $this->source); })()), "componentName" => twig_replace_filter(twig_lower_filter($this->env, $context["group"]), [" " => "_"])]));
                // line 91
                echo "        ";
            } else {
                // line 92
                echo "            ";
                // line 93
                echo "            ";
                $context["filteredList"] = [];
                // line 94
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["list"]);
                foreach ($context['_seq'] as $context["_key"] => $context["assoc"]) {
                    // line 95
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["assoc"], "originLsItem", [], "any", true, true, false, 95) &&  !(null === twig_get_attribute($this->env, $this->source, $context["assoc"], "originLsItem", [], "any", false, false, false, 95))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assoc"], "originLsItem", [], "any", false, false, false, 95), "lsDoc", [], "any", false, false, false, 95) != twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 95, $this->source); })()), "lsDoc", [], "any", false, false, false, 95)))) {
                        // line 96
                        echo "                    ";
                        $context["filteredList"] = twig_array_merge((isset($context["filteredList"]) || array_key_exists("filteredList", $context) ? $context["filteredList"] : (function () { throw new RuntimeError('Variable "filteredList" does not exist.', 96, $this->source); })()), [0 => $context["assoc"]]);
                        // line 97
                        echo "                ";
                    }
                    // line 98
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["assoc"], "destinationLsItem", [], "any", true, true, false, 98) &&  !(null === twig_get_attribute($this->env, $this->source, $context["assoc"], "destinationLsItem", [], "any", false, false, false, 98))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assoc"], "destinationLsItem", [], "any", false, false, false, 98), "lsDoc", [], "any", false, false, false, 98) != twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 98, $this->source); })()), "lsDoc", [], "any", false, false, false, 98)))) {
                        // line 99
                        echo "                    ";
                        $context["filteredList"] = twig_array_merge((isset($context["filteredList"]) || array_key_exists("filteredList", $context) ? $context["filteredList"] : (function () { throw new RuntimeError('Variable "filteredList" does not exist.', 99, $this->source); })()), [0 => $context["assoc"]]);
                        // line 100
                        echo "                ";
                    }
                    // line 101
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["assoc"], "originLsDoc", [], "any", true, true, false, 101) &&  !(null === twig_get_attribute($this->env, $this->source, $context["assoc"], "originLsDoc", [], "any", false, false, false, 101))) && (twig_get_attribute($this->env, $this->source, $context["assoc"], "originLsDoc", [], "any", false, false, false, 101) != twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 101, $this->source); })()), "lsDoc", [], "any", false, false, false, 101)))) {
                        // line 102
                        echo "                    ";
                        $context["filteredList"] = twig_array_merge((isset($context["filteredList"]) || array_key_exists("filteredList", $context) ? $context["filteredList"] : (function () { throw new RuntimeError('Variable "filteredList" does not exist.', 102, $this->source); })()), [0 => $context["assoc"]]);
                        // line 103
                        echo "                ";
                    }
                    // line 104
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["assoc"], "destinationLsDoc", [], "any", true, true, false, 104) &&  !(null === twig_get_attribute($this->env, $this->source, $context["assoc"], "destinationLsDoc", [], "any", false, false, false, 104))) && (twig_get_attribute($this->env, $this->source, $context["assoc"], "destinationLsDoc", [], "any", false, false, false, 104) != twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 104, $this->source); })()), "lsDoc", [], "any", false, false, false, 104)))) {
                        // line 105
                        echo "                    ";
                        $context["filteredList"] = twig_array_merge((isset($context["filteredList"]) || array_key_exists("filteredList", $context) ? $context["filteredList"] : (function () { throw new RuntimeError('Variable "filteredList" does not exist.', 105, $this->source); })()), [0 => $context["assoc"]]);
                        // line 106
                        echo "                ";
                    }
                    // line 107
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "            ";
                if ( !twig_test_empty((isset($context["filteredList"]) || array_key_exists("filteredList", $context) ? $context["filteredList"] : (function () { throw new RuntimeError('Variable "filteredList" does not exist.', 108, $this->source); })()))) {
                    // line 109
                    echo "                ";
                    $this->loadTemplate("framework/doc_tree/tree_item_details.html.twig", "framework/doc_tree/tree_item_details.html.twig", 109, "1542346087")->display(twig_array_merge($context, ["title" => $context["group"], "items" => (isset($context["filteredList"]) || array_key_exists("filteredList", $context) ? $context["filteredList"] : (function () { throw new RuntimeError('Variable "filteredList" does not exist.', 109, $this->source); })()), "viewingItem" => (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 109, $this->source); })()), "componentName" => twig_replace_filter(twig_lower_filter($this->env, $context["group"]), [" " => "_"])]));
                    // line 118
                    echo "            ";
                }
                // line 119
                echo "        ";
            }
            // line 120
            echo "    ";
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
        // line 121
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/tree_item_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 121,  312 => 120,  309 => 119,  306 => 118,  303 => 109,  300 => 108,  294 => 107,  291 => 106,  288 => 105,  285 => 104,  282 => 103,  279 => 102,  276 => 101,  273 => 100,  270 => 99,  267 => 98,  264 => 97,  261 => 96,  258 => 95,  253 => 94,  250 => 93,  248 => 92,  245 => 91,  242 => 82,  239 => 81,  237 => 80,  220 => 79,  216 => 77,  212 => 75,  206 => 71,  204 => 70,  201 => 69,  199 => 66,  194 => 63,  192 => 62,  189 => 61,  187 => 60,  182 => 57,  176 => 56,  171 => 53,  165 => 51,  157 => 49,  155 => 48,  148 => 47,  146 => 46,  141 => 45,  138 => 44,  136 => 43,  132 => 42,  128 => 41,  125 => 40,  122 => 39,  118 => 31,  115 => 30,  109 => 29,  106 => 28,  102 => 26,  96 => 24,  88 => 22,  86 => 21,  79 => 20,  77 => 19,  72 => 18,  69 => 17,  67 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  49 => 5,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lsItemDetails\">
    <ul class=\"list-group lsItemDetailsMain\">
        {# we don't show abbreviatedStatement because it would be in the title if it's there #}
        {# split into info that's always shown and info that's hidden at first #}
        {% for field, name in {
            'fullStatement': 'Full Statement',
            'conceptKeywords': 'Concept Keywords',
            'educationalAlignment': 'Education Level',
            'type': 'Type',
            'notes': 'Notes'
        } %}
            {% if attribute(lsItem, field) is not empty %}
                {% if field != 'fullStatement' or lsItem.abbreviatedStatement is not empty %}
                    <li class=\"list-group-item\">
                        <strong>{{ name }}:</strong>
                        {% set value = attribute(lsItem, field) %}
                        {% if value.timestamp is defined and value.timezone is defined %}
                            {{ value|date(\"m/d/Y H:i\") }}
                        {% elseif field == 'uri'%}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% elseif field == 'lsDocUri'%}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% else %}
                            {{ value }}
                        {% endif %}
                    </li>
                {% endif %}
            {% endif %}
        {% endfor %}

        {% for field, name in {
            'uri': 'Item URI',
            'listEnumInSource': 'List Enumeration in Source',
            'conceptKeywordsUri': 'Concept Keywords URI',
            'language': 'Language',
            'licenceUri': 'Licence URI',
            'changedAt': 'Last Changed'
        } %}
            {% if attribute(lsItem, field) is not empty %}
                <li class=\"list-group-item lsItemDetailsExtras\">
                    <strong>{{ name }}:</strong>
                    <span data-field-name='{{ field }}'>
                        {% set value = attribute(lsItem, field) %}
                        {% if value.timestamp is defined and value.timezone is defined %}
                            {{ value|date(\"m/d/Y H:i\") }}
                        {% elseif field == 'uri' %}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% elseif field == 'lsDocUri' %}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% else %}
                            {{ value }}
                        {% endif %}
                    </span>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
    <div class=\"lsItemDetailsMoreInfoLink\"><a>More Info</a></div>

    {% if is_granted('edit', lsItem) or is_granted('edit', lsItem.lsDoc) %}
    <div class=\"itemOptions\">
        {% if is_granted('edit', lsItem) %}
            <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#editItemModal\">Edit</button>
            <button type=\"button\" id=\"deleteItemBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Delete</button>
        {% endif %}
        {# TODO: How do we \"find aligned resources\"
        <button type=\"button\" class=\"btn btn-default btn-sm\" disabled=\"disabled\">Find Aligned Resources</button>
        #}

        {% if is_granted('edit', lsItem.lsDoc) %}
            <button type=\"button\" id=\"toggleFolderBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Make This Item a Parent</button>
            <button type=\"button\" id=\"addChildBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addNewChildModal\">Add a New Child Item</button>
            <button type=\"button\" id=\"addExemplarBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addExemplarModal\">Add an Exemplar</button>
        {% endif %}
    </div>
    {% endif %}
</div>
<div class=\"lsItemAssociations\">
    {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
        {# PW: don't show child of/parent of associations here, since you see that in the tree #}
        {% if (group is not constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF')) and (group is not constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF')) %}
            {% embed 'framework/doc_tree/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                {% block start_of_item_a %}
                    {% if is_granted('edit', lsItem.lsDoc) %}
                        <span class=\"pull-right\">
                            <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                        </span>
                    {% endif %}
                {% endblock %}
            {% endembed %}
        {% else %}
            {# Show children/parents in the list if from another document #}
            {% set filteredList = [] %}
            {% for assoc in list %}
                {% if assoc.originLsItem is defined and assoc.originLsItem is not null and assoc.originLsItem.lsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.destinationLsItem is defined and assoc.destinationLsItem is not null and assoc.destinationLsItem.lsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.originLsDoc is defined and assoc.originLsDoc is not null and assoc.originLsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.destinationLsDoc is defined and assoc.destinationLsDoc is not null and assoc.destinationLsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
            {% endfor %}
            {% if filteredList is not empty %}
                {% embed 'framework/doc_tree/_ls_association_component.html.twig' with {'title':group, 'items':filteredList, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block start_of_item_a %}
                        {% if is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endif %}
    {% endfor %}
</div>
", "framework/doc_tree/tree_item_details.html.twig", "/var/www/html/templates/framework/doc_tree/tree_item_details.html.twig");
    }
}


/* framework/doc_tree/tree_item_details.html.twig */
class __TwigTemplate_756e3c16e0d9f997c2a466150c083c3648ebea65fd1575ae3550974dc168b867___1246889037 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'start_of_item_a' => [$this, 'block_start_of_item_a'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 82
        return "framework/doc_tree/_ls_association_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/tree_item_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/tree_item_details.html.twig"));

        $this->parent = $this->loadTemplate("framework/doc_tree/_ls_association_component.html.twig", "framework/doc_tree/tree_item_details.html.twig", 82);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 83
    public function block_start_of_item_a($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start_of_item_a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start_of_item_a"));

        // line 84
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 84, $this->source); })()), "lsDoc", [], "any", false, false, false, 84))) {
            // line 85
            echo "                        <span class=\"pull-right\">
                            <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                        </span>
                    ";
        }
        // line 89
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/tree_item_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 89,  535 => 85,  532 => 84,  522 => 83,  499 => 82,  326 => 121,  312 => 120,  309 => 119,  306 => 118,  303 => 109,  300 => 108,  294 => 107,  291 => 106,  288 => 105,  285 => 104,  282 => 103,  279 => 102,  276 => 101,  273 => 100,  270 => 99,  267 => 98,  264 => 97,  261 => 96,  258 => 95,  253 => 94,  250 => 93,  248 => 92,  245 => 91,  242 => 82,  239 => 81,  237 => 80,  220 => 79,  216 => 77,  212 => 75,  206 => 71,  204 => 70,  201 => 69,  199 => 66,  194 => 63,  192 => 62,  189 => 61,  187 => 60,  182 => 57,  176 => 56,  171 => 53,  165 => 51,  157 => 49,  155 => 48,  148 => 47,  146 => 46,  141 => 45,  138 => 44,  136 => 43,  132 => 42,  128 => 41,  125 => 40,  122 => 39,  118 => 31,  115 => 30,  109 => 29,  106 => 28,  102 => 26,  96 => 24,  88 => 22,  86 => 21,  79 => 20,  77 => 19,  72 => 18,  69 => 17,  67 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  49 => 5,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lsItemDetails\">
    <ul class=\"list-group lsItemDetailsMain\">
        {# we don't show abbreviatedStatement because it would be in the title if it's there #}
        {# split into info that's always shown and info that's hidden at first #}
        {% for field, name in {
            'fullStatement': 'Full Statement',
            'conceptKeywords': 'Concept Keywords',
            'educationalAlignment': 'Education Level',
            'type': 'Type',
            'notes': 'Notes'
        } %}
            {% if attribute(lsItem, field) is not empty %}
                {% if field != 'fullStatement' or lsItem.abbreviatedStatement is not empty %}
                    <li class=\"list-group-item\">
                        <strong>{{ name }}:</strong>
                        {% set value = attribute(lsItem, field) %}
                        {% if value.timestamp is defined and value.timezone is defined %}
                            {{ value|date(\"m/d/Y H:i\") }}
                        {% elseif field == 'uri'%}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% elseif field == 'lsDocUri'%}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% else %}
                            {{ value }}
                        {% endif %}
                    </li>
                {% endif %}
            {% endif %}
        {% endfor %}

        {% for field, name in {
            'uri': 'Item URI',
            'listEnumInSource': 'List Enumeration in Source',
            'conceptKeywordsUri': 'Concept Keywords URI',
            'language': 'Language',
            'licenceUri': 'Licence URI',
            'changedAt': 'Last Changed'
        } %}
            {% if attribute(lsItem, field) is not empty %}
                <li class=\"list-group-item lsItemDetailsExtras\">
                    <strong>{{ name }}:</strong>
                    <span data-field-name='{{ field }}'>
                        {% set value = attribute(lsItem, field) %}
                        {% if value.timestamp is defined and value.timezone is defined %}
                            {{ value|date(\"m/d/Y H:i\") }}
                        {% elseif field == 'uri' %}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% elseif field == 'lsDocUri' %}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% else %}
                            {{ value }}
                        {% endif %}
                    </span>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
    <div class=\"lsItemDetailsMoreInfoLink\"><a>More Info</a></div>

    {% if is_granted('edit', lsItem) or is_granted('edit', lsItem.lsDoc) %}
    <div class=\"itemOptions\">
        {% if is_granted('edit', lsItem) %}
            <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#editItemModal\">Edit</button>
            <button type=\"button\" id=\"deleteItemBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Delete</button>
        {% endif %}
        {# TODO: How do we \"find aligned resources\"
        <button type=\"button\" class=\"btn btn-default btn-sm\" disabled=\"disabled\">Find Aligned Resources</button>
        #}

        {% if is_granted('edit', lsItem.lsDoc) %}
            <button type=\"button\" id=\"toggleFolderBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Make This Item a Parent</button>
            <button type=\"button\" id=\"addChildBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addNewChildModal\">Add a New Child Item</button>
            <button type=\"button\" id=\"addExemplarBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addExemplarModal\">Add an Exemplar</button>
        {% endif %}
    </div>
    {% endif %}
</div>
<div class=\"lsItemAssociations\">
    {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
        {# PW: don't show child of/parent of associations here, since you see that in the tree #}
        {% if (group is not constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF')) and (group is not constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF')) %}
            {% embed 'framework/doc_tree/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                {% block start_of_item_a %}
                    {% if is_granted('edit', lsItem.lsDoc) %}
                        <span class=\"pull-right\">
                            <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                        </span>
                    {% endif %}
                {% endblock %}
            {% endembed %}
        {% else %}
            {# Show children/parents in the list if from another document #}
            {% set filteredList = [] %}
            {% for assoc in list %}
                {% if assoc.originLsItem is defined and assoc.originLsItem is not null and assoc.originLsItem.lsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.destinationLsItem is defined and assoc.destinationLsItem is not null and assoc.destinationLsItem.lsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.originLsDoc is defined and assoc.originLsDoc is not null and assoc.originLsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.destinationLsDoc is defined and assoc.destinationLsDoc is not null and assoc.destinationLsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
            {% endfor %}
            {% if filteredList is not empty %}
                {% embed 'framework/doc_tree/_ls_association_component.html.twig' with {'title':group, 'items':filteredList, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block start_of_item_a %}
                        {% if is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endif %}
    {% endfor %}
</div>
", "framework/doc_tree/tree_item_details.html.twig", "/var/www/html/templates/framework/doc_tree/tree_item_details.html.twig");
    }
}


/* framework/doc_tree/tree_item_details.html.twig */
class __TwigTemplate_756e3c16e0d9f997c2a466150c083c3648ebea65fd1575ae3550974dc168b867___1542346087 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'start_of_item_a' => [$this, 'block_start_of_item_a'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 109
        return "framework/doc_tree/_ls_association_component.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/tree_item_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/tree_item_details.html.twig"));

        $this->parent = $this->loadTemplate("framework/doc_tree/_ls_association_component.html.twig", "framework/doc_tree/tree_item_details.html.twig", 109);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 110
    public function block_start_of_item_a($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start_of_item_a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start_of_item_a"));

        // line 111
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", twig_get_attribute($this->env, $this->source, (isset($context["lsItem"]) || array_key_exists("lsItem", $context) ? $context["lsItem"] : (function () { throw new RuntimeError('Variable "lsItem" does not exist.', 111, $this->source); })()), "lsDoc", [], "any", false, false, false, 111))) {
            // line 112
            echo "                            <span class=\"pull-right\">
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                            </span>
                        ";
        }
        // line 116
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/tree_item_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 116,  749 => 112,  746 => 111,  736 => 110,  713 => 109,  541 => 89,  535 => 85,  532 => 84,  522 => 83,  499 => 82,  326 => 121,  312 => 120,  309 => 119,  306 => 118,  303 => 109,  300 => 108,  294 => 107,  291 => 106,  288 => 105,  285 => 104,  282 => 103,  279 => 102,  276 => 101,  273 => 100,  270 => 99,  267 => 98,  264 => 97,  261 => 96,  258 => 95,  253 => 94,  250 => 93,  248 => 92,  245 => 91,  242 => 82,  239 => 81,  237 => 80,  220 => 79,  216 => 77,  212 => 75,  206 => 71,  204 => 70,  201 => 69,  199 => 66,  194 => 63,  192 => 62,  189 => 61,  187 => 60,  182 => 57,  176 => 56,  171 => 53,  165 => 51,  157 => 49,  155 => 48,  148 => 47,  146 => 46,  141 => 45,  138 => 44,  136 => 43,  132 => 42,  128 => 41,  125 => 40,  122 => 39,  118 => 31,  115 => 30,  109 => 29,  106 => 28,  102 => 26,  96 => 24,  88 => 22,  86 => 21,  79 => 20,  77 => 19,  72 => 18,  69 => 17,  67 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  49 => 5,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lsItemDetails\">
    <ul class=\"list-group lsItemDetailsMain\">
        {# we don't show abbreviatedStatement because it would be in the title if it's there #}
        {# split into info that's always shown and info that's hidden at first #}
        {% for field, name in {
            'fullStatement': 'Full Statement',
            'conceptKeywords': 'Concept Keywords',
            'educationalAlignment': 'Education Level',
            'type': 'Type',
            'notes': 'Notes'
        } %}
            {% if attribute(lsItem, field) is not empty %}
                {% if field != 'fullStatement' or lsItem.abbreviatedStatement is not empty %}
                    <li class=\"list-group-item\">
                        <strong>{{ name }}:</strong>
                        {% set value = attribute(lsItem, field) %}
                        {% if value.timestamp is defined and value.timezone is defined %}
                            {{ value|date(\"m/d/Y H:i\") }}
                        {% elseif field == 'uri'%}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% elseif field == 'lsDocUri'%}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% else %}
                            {{ value }}
                        {% endif %}
                    </li>
                {% endif %}
            {% endif %}
        {% endfor %}

        {% for field, name in {
            'uri': 'Item URI',
            'listEnumInSource': 'List Enumeration in Source',
            'conceptKeywordsUri': 'Concept Keywords URI',
            'language': 'Language',
            'licenceUri': 'Licence URI',
            'changedAt': 'Last Changed'
        } %}
            {% if attribute(lsItem, field) is not empty %}
                <li class=\"list-group-item lsItemDetailsExtras\">
                    <strong>{{ name }}:</strong>
                    <span data-field-name='{{ field }}'>
                        {% set value = attribute(lsItem, field) %}
                        {% if value.timestamp is defined and value.timezone is defined %}
                            {{ value|date(\"m/d/Y H:i\") }}
                        {% elseif field == 'uri' %}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% elseif field == 'lsDocUri' %}
                            <a href=\"{{ value|local_uri }}\">{{ value|local_remote_uri }}</a>
                        {% else %}
                            {{ value }}
                        {% endif %}
                    </span>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
    <div class=\"lsItemDetailsMoreInfoLink\"><a>More Info</a></div>

    {% if is_granted('edit', lsItem) or is_granted('edit', lsItem.lsDoc) %}
    <div class=\"itemOptions\">
        {% if is_granted('edit', lsItem) %}
            <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#editItemModal\">Edit</button>
            <button type=\"button\" id=\"deleteItemBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Delete</button>
        {% endif %}
        {# TODO: How do we \"find aligned resources\"
        <button type=\"button\" class=\"btn btn-default btn-sm\" disabled=\"disabled\">Find Aligned Resources</button>
        #}

        {% if is_granted('edit', lsItem.lsDoc) %}
            <button type=\"button\" id=\"toggleFolderBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">Make This Item a Parent</button>
            <button type=\"button\" id=\"addChildBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addNewChildModal\">Add a New Child Item</button>
            <button type=\"button\" id=\"addExemplarBtn\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#addExemplarModal\">Add an Exemplar</button>
        {% endif %}
    </div>
    {% endif %}
</div>
<div class=\"lsItemAssociations\">
    {% for group, list in lsItem.groupedAssociations|filter(list => list is not empty) %}
        {# PW: don't show child of/parent of associations here, since you see that in the tree #}
        {% if (group is not constant('App\\\\Entity\\\\Framework\\\\LsAssociation::CHILD_OF')) and (group is not constant('App\\\\Entity\\\\Framework\\\\LsAssociation::INVERSE_CHILD_OF')) %}
            {% embed 'framework/doc_tree/_ls_association_component.html.twig' with {'title':group, 'items':list, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                {% block start_of_item_a %}
                    {% if is_granted('edit', lsItem.lsDoc) %}
                        <span class=\"pull-right\">
                            <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                        </span>
                    {% endif %}
                {% endblock %}
            {% endembed %}
        {% else %}
            {# Show children/parents in the list if from another document #}
            {% set filteredList = [] %}
            {% for assoc in list %}
                {% if assoc.originLsItem is defined and assoc.originLsItem is not null and assoc.originLsItem.lsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.destinationLsItem is defined and assoc.destinationLsItem is not null and assoc.destinationLsItem.lsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.originLsDoc is defined and assoc.originLsDoc is not null and assoc.originLsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
                {% if assoc.destinationLsDoc is defined and assoc.destinationLsDoc is not null and assoc.destinationLsDoc != lsItem.lsDoc %}
                    {% set filteredList = filteredList|merge([assoc]) %}
                {% endif %}
            {% endfor %}
            {% if filteredList is not empty %}
                {% embed 'framework/doc_tree/_ls_association_component.html.twig' with {'title':group, 'items':filteredList, 'viewingItem':lsItem, 'componentName':group|lower|replace({' ': '_'})} %}
                    {% block start_of_item_a %}
                        {% if is_granted('edit', lsItem.lsDoc) %}
                            <span class=\"pull-right\">
                                <span role=\"button\" class=\"btn btn-xs btn-default btn-remove-association\">Remove</span>
                            </span>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endif %}
    {% endfor %}
</div>
", "framework/doc_tree/tree_item_details.html.twig", "/var/www/html/templates/framework/doc_tree/tree_item_details.html.twig");
    }
}
