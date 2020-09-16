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

/* framework/doc_tree/_ls_association_component.html.twig */
class __TwigTemplate_63f2c738807f5200b11d42462f6cc9b6ac58eebf69e936595da22a15cacc6998 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'start_of_item_a' => [$this, 'block_start_of_item_a'],
            'end_of_item_a' => [$this, 'block_end_of_item_a'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/_ls_association_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/_ls_association_component.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <section class=\"panel panel-default panel-component item-component\" id=\"item-component-";
            echo twig_escape_filter($this->env, (isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\">
        <div class=\"panel-heading\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</div>
        <div class=\"panel-body\">
            <div>
                <div class=\"list-group\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 7, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 8
                echo "                        ";
                $context["groupLabel"] = "";
                // line 9
                echo "                        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["association"], "group", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "                            ";
                    $context["groupLabel"] = (("<span class=\"label label-default\">" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["association"], "group", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10))) . "</span>");
                    // line 11
                    echo "                        ";
                }
                // line 12
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", true, true, false, 12)) {
                    // line 13
                    echo "                            ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", false, false, false, 13))) {
                        // line 14
                        echo "                                ";
                        if (((isset($context["viewingItem"]) || array_key_exists("viewingItem", $context) ? $context["viewingItem"] : (function () { throw new RuntimeError('Variable "viewingItem" does not exist.', 14, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", false, false, false, 14))) {
                            // line 15
                            echo "                                    ";
                            $context["item"] = twig_get_attribute($this->env, $this->source, $context["association"], "originLsItem", [], "any", false, false, false, 15);
                            // line 16
                            echo "                                ";
                        } else {
                            // line 17
                            echo "                                    ";
                            $context["item"] = twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", false, false, false, 17);
                            // line 18
                            echo "                                ";
                        }
                        // line 19
                        echo "                                ";
                        echo (isset($context["groupLabel"]) || array_key_exists("groupLabel", $context) ? $context["groupLabel"] : (function () { throw new RuntimeError('Variable "groupLabel" does not exist.', 19, $this->source); })());
                        echo "
                                <a href=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_item_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
                        echo "\" data-item-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "\" data-association-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "\" class=\"list-group-item lsassociation lsitem clearfix\">
                                    ";
                        // line 21
                        $this->displayBlock('start_of_item_a', $context, $blocks);
                        // line 22
                        echo "                                    ";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 22))) {
                            // line 23
                            echo "                                        <span class=\"item-humanCodingScheme\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 23), "html", null, true);
                            echo "</span>
                                    ";
                        }
                        // line 25
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "fullStatement", [], "any", false, false, false, 25) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 25))) {
                            // line 26
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "fullStatement", [], "any", false, false, false, 26), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 28
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "lsDoc", [], "any", false, false, false, 28) != twig_get_attribute($this->env, $this->source, (isset($context["viewingItem"]) || array_key_exists("viewingItem", $context) ? $context["viewingItem"] : (function () { throw new RuntimeError('Variable "viewingItem" does not exist.', 28, $this->source); })()), "lsDoc", [], "any", false, false, false, 28))) {
                            // line 29
                            echo "                                        <span class=\"label label-default\">";
                            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "lsDoc", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), 30), "html", null, true);
                            echo "</span>
                                    ";
                        }
                        // line 31
                        echo "                                    ";
                        $this->displayBlock('end_of_item_a', $context, $blocks);
                        // line 32
                        echo "                                </a>
                            ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,                     // line 33
$context["association"], "destinationLsDoc", [], "any", false, false, false, 33))) {
                        // line 34
                        echo "                                ";
                        $context["doc"] = twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsDoc", [], "any", false, false, false, 34);
                        // line 35
                        echo "                                ";
                        echo (isset($context["groupLabel"]) || array_key_exists("groupLabel", $context) ? $context["groupLabel"] : (function () { throw new RuntimeError('Variable "groupLabel" does not exist.', 35, $this->source); })());
                        echo "
                                <a href=\"";
                        // line 36
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 36, $this->source); })()), "slug", [], "any", false, false, false, 36)]), "html", null, true);
                        echo "\" data-doc-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
                        echo "\" class=\"list-group-item lsdoc clearfix\">
                                    Document: ";
                        // line 37
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), "html", null, true);
                        echo "
                                    ";
                        // line 38
                        $this->displayBlock("end_of_item_a", $context, $blocks);
                        echo "
                                </a>
                            ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,                     // line 40
$context["association"], "destinationNodeUri", [], "any", false, false, false, 40))) {
                        // line 41
                        echo "                                ";
                        $context["uriData"] = twig_get_attribute($this->env, $this->source, $context["association"], "splitDestinationDataUri", [], "any", false, false, false, 41);
                        // line 42
                        echo "                                ";
                        $context["uri"] = twig_get_attribute($this->env, $this->source, (isset($context["uriData"]) || array_key_exists("uriData", $context) ? $context["uriData"] : (function () { throw new RuntimeError('Variable "uriData" does not exist.', 42, $this->source); })()), "value", [], "any", false, false, false, 42);
                        // line 43
                        echo "                                ";
                        echo (isset($context["groupLabel"]) || array_key_exists("groupLabel", $context) ? $context["groupLabel"] : (function () { throw new RuntimeError('Variable "groupLabel" does not exist.', 43, $this->source); })());
                        echo "
                                <span data-association-id=\"";
                        // line 44
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 44), "html", null, true);
                        echo "\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    ";
                        // line 45
                        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 45, $this->source); })())), "html", null, true);
                        echo "
                                    ";
                        // line 46
                        $this->displayBlock("end_of_item_a", $context, $blocks);
                        echo "
                                </span>
                            ";
                    } else {
                        // line 49
                        echo "                                ";
                        echo (isset($context["groupLabel"]) || array_key_exists("groupLabel", $context) ? $context["groupLabel"] : (function () { throw new RuntimeError('Variable "groupLabel" does not exist.', 49, $this->source); })());
                        echo "
                                <span data-association-id=\"";
                        // line 50
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 50), "html", null, true);
                        echo "\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    ";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "destinationNodeIdentifier", [], "any", false, false, false, 51), "html", null, true);
                        echo "
                                    ";
                        // line 52
                        $this->displayBlock("end_of_item_a", $context, $blocks);
                        echo "
                                </span>
                            ";
                    }
                    // line 55
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsDoc", [], "any", true, true, false, 55)) {
                    // line 56
                    echo "                            ";
                    $context["doc"] = $context["association"];
                    // line 57
                    echo "                            ";
                    echo (isset($context["groupLabel"]) || array_key_exists("groupLabel", $context) ? $context["groupLabel"] : (function () { throw new RuntimeError('Variable "groupLabel" does not exist.', 57, $this->source); })());
                    echo "
                            <a href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 58, $this->source); })()), "slug", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\" data-doc-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" class=\"list-group-item lsdoc clearfix\">
                                Document: ";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 59, $this->source); })()), "title", [], "any", false, false, false, 59), "html", null, true);
                    echo "
                                ";
                    // line 60
                    $this->displayBlock("end_of_item_a", $context, $blocks);
                    echo "
                            </a>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 62
$context["association"], "isLsItem", [], "any", true, true, false, 62)) {
                    // line 63
                    echo "                            ";
                    $context["item"] = $context["association"];
                    // line 64
                    echo "                            ";
                    echo (isset($context["groupLabel"]) || array_key_exists("groupLabel", $context) ? $context["groupLabel"] : (function () { throw new RuntimeError('Variable "groupLabel" does not exist.', 64, $this->source); })());
                    echo "
                            <a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_item_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
                    echo "\" data-item-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
                    echo "\" class=\"list-group-item lsitem clearfix\">
                                ";
                    // line 66
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 66))) {
                        // line 67
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 67, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 67), "html", null, true);
                        echo "
                                ";
                    }
                    // line 69
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "fullStatement", [], "any", false, false, false, 69) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 69))) {
                        // line 70
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "fullStatement", [], "any", false, false, false, 70), "html", null, true);
                        echo "
                                ";
                    }
                    // line 72
                    echo "                                ";
                    $this->displayBlock("end_of_item_a", $context, $blocks);
                    echo "
                            </a>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 74
$context["association"], "isLsDoc", [], "any", true, true, false, 74)) {
                    // line 75
                    echo "                            ";
                    $context["doc"] = $context["association"];
                    // line 76
                    echo "                            ";
                    echo (isset($context["groupLabel"]) || array_key_exists("groupLabel", $context) ? $context["groupLabel"] : (function () { throw new RuntimeError('Variable "groupLabel" does not exist.', 76, $this->source); })());
                    echo "
                            <a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 77, $this->source); })()), "slug", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\" data-doc-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\" class=\"list-group-item lsdoc clearfix\">
                                Document: ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 78, $this->source); })()), "title", [], "any", false, false, false, 78), "html", null, true);
                    echo "
                                ";
                    // line 79
                    $this->displayBlock("end_of_item_a", $context, $blocks);
                    echo "
                            </a>
                        ";
                }
                // line 82
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </div>
            </div>
        </div>
    </section>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_start_of_item_a($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start_of_item_a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "start_of_item_a"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_end_of_item_a($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "end_of_item_a"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "end_of_item_a"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/_ls_association_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 31,  348 => 21,  333 => 83,  319 => 82,  313 => 79,  309 => 78,  303 => 77,  298 => 76,  295 => 75,  293 => 74,  287 => 72,  281 => 70,  278 => 69,  272 => 67,  270 => 66,  264 => 65,  259 => 64,  256 => 63,  254 => 62,  249 => 60,  245 => 59,  239 => 58,  234 => 57,  231 => 56,  228 => 55,  222 => 52,  218 => 51,  214 => 50,  209 => 49,  203 => 46,  199 => 45,  195 => 44,  190 => 43,  187 => 42,  184 => 41,  182 => 40,  177 => 38,  173 => 37,  167 => 36,  162 => 35,  159 => 34,  157 => 33,  154 => 32,  151 => 31,  145 => 29,  142 => 28,  136 => 26,  133 => 25,  127 => 23,  124 => 22,  122 => 21,  114 => 20,  109 => 19,  106 => 18,  103 => 17,  100 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  76 => 8,  59 => 7,  52 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if items is not empty %}
    <section class=\"panel panel-default panel-component item-component\" id=\"item-component-{{ componentName }}\">
        <div class=\"panel-heading\">{{ title }}</div>
        <div class=\"panel-body\">
            <div>
                <div class=\"list-group\">
                    {% for association in items %}
                        {% set groupLabel = '' %}
                        {% if association.group is not empty %}
                            {% set groupLabel =  '<span class=\"label label-default\">'~association.group.title|e~'</span>' %}
                        {% endif %}
                        {% if association.destinationLsItem is defined %}
                            {% if association.destinationLsItem is not empty %}
                                {% if viewingItem == association.destinationLsItem %}
                                    {% set item = association.originLsItem %}
                                {% else %}
                                    {% set item = association.destinationLsItem %}
                                {% endif %}
                                {{ groupLabel|raw }}
                                <a href=\"{{ path('doc_tree_item_view', {'id':item.id}) }}\" data-item-id=\"{{ item.id }}\" data-association-id=\"{{ association.id }}\" class=\"list-group-item lsassociation lsitem clearfix\">
                                    {% block start_of_item_a '' %}
                                    {% if item.humanCodingScheme is not empty %}
                                        <span class=\"item-humanCodingScheme\">{{ item.humanCodingScheme }}</span>
                                    {% endif %}
                                    {% if item.fullStatement != item.humanCodingScheme %}
                                        {{ item.fullStatement }}
                                    {% endif %}
                                    {% if item.lsDoc != viewingItem.lsDoc %}
                                        <span class=\"label label-default\">{{ item.lsDoc.title|truncate(30) }}</span>
                                    {% endif %}
                                    {% block end_of_item_a '' %}
                                </a>
                            {% elseif association.destinationLsDoc is not empty %}
                                {% set doc = association.destinationLsDoc %}
                                {{ groupLabel|raw }}
                                <a href=\"{{ path('doc_tree_view', {'slug':doc.slug}) }}\" data-doc-id=\"{{ doc.id }}\" class=\"list-group-item lsdoc clearfix\">
                                    Document: {{ doc.title }}
                                    {{ block('end_of_item_a') }}
                                </a>
                            {% elseif association.destinationNodeUri is not empty %}
                                {% set uriData = association.splitDestinationDataUri %}
                                {% set uri = uriData.value %}
                                {{ groupLabel|raw }}
                                <span data-association-id=\"{{ association.id }}\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    {{ uri|local_remote_uri }}
                                    {{ block('end_of_item_a') }}
                                </span>
                            {% else %}
                                {{ groupLabel|raw }}
                                <span data-association-id=\"{{ association.id }}\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    {{ association.destinationNodeIdentifier }}
                                    {{ block('end_of_item_a') }}
                                </span>
                            {% endif %}
                        {% elseif association.destinationLsDoc is defined %}
                            {% set doc = association %}
                            {{ groupLabel|raw }}
                            <a href=\"{{ path('doc_tree_view', {'slug':doc.slug}) }}\" data-doc-id=\"{{ doc.id }}\" class=\"list-group-item lsdoc clearfix\">
                                Document: {{ doc.title }}
                                {{ block('end_of_item_a') }}
                            </a>
                        {% elseif association.isLsItem is defined %}
                            {% set item = association %}
                            {{ groupLabel|raw }}
                            <a href=\"{{ path('doc_tree_item_view', {'id':item.id}) }}\" data-item-id=\"{{ item.id }}\" class=\"list-group-item lsitem clearfix\">
                                {% if item.humanCodingScheme is not empty %}
                                    {{ item.humanCodingScheme }}
                                {% endif %}
                                {% if item.fullStatement != item.humanCodingScheme %}
                                    {{ item.fullStatement }}
                                {% endif %}
                                {{ block('end_of_item_a') }}
                            </a>
                        {% elseif association.isLsDoc is defined %}
                            {% set doc = association %}
                            {{ groupLabel|raw }}
                            <a href=\"{{ path('doc_tree_view', {'slug':doc.slug}) }}\" data-doc-id=\"{{ doc.id }}\" class=\"list-group-item lsdoc clearfix\">
                                Document: {{ doc.title }}
                                {{ block('end_of_item_a') }}
                            </a>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </section>
{% endif %}
", "framework/doc_tree/_ls_association_component.html.twig", "/var/www/html/templates/framework/doc_tree/_ls_association_component.html.twig");
    }
}
