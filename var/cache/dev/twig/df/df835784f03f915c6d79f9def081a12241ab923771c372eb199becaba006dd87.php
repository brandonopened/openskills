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

/* framework/editor/_ls_association_component.html.twig */
class __TwigTemplate_8bff3cd059b549c3202156ca9cd9206925f9ea01d3d8e780320736a052cb602e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/_ls_association_component.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/editor/_ls_association_component.html.twig"));

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
                if (twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", true, true, false, 8)) {
                    // line 9
                    echo "                            ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", false, false, false, 9))) {
                        // line 10
                        echo "                                ";
                        if (((isset($context["viewingItem"]) || array_key_exists("viewingItem", $context) ? $context["viewingItem"] : (function () { throw new RuntimeError('Variable "viewingItem" does not exist.', 10, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", false, false, false, 10))) {
                            // line 11
                            echo "                                    ";
                            $context["item"] = twig_get_attribute($this->env, $this->source, $context["association"], "originLsItem", [], "any", false, false, false, 11);
                            // line 12
                            echo "                                ";
                        } else {
                            // line 13
                            echo "                                    ";
                            $context["item"] = twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsItem", [], "any", false, false, false, 13);
                            // line 14
                            echo "                                ";
                        }
                        // line 15
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsitem", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
                        echo "\" data-item-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
                        echo "\" data-association-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 15), "html", null, true);
                        echo "\" class=\"list-group-item lsassociation lsitem clearfix\">
                                    ";
                        // line 16
                        $this->displayBlock('start_of_item_a', $context, $blocks);
                        // line 17
                        echo "                                    ";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 17))) {
                            // line 18
                            echo "                                        <span class=\"item-humanCodingScheme\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 18), "html", null, true);
                            echo "</span>
                                    ";
                        }
                        // line 20
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "fullStatement", [], "any", false, false, false, 20) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 20))) {
                            // line 21
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "fullStatement", [], "any", false, false, false, 21), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 23
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "lsDoc", [], "any", false, false, false, 23) != twig_get_attribute($this->env, $this->source, (isset($context["viewingItem"]) || array_key_exists("viewingItem", $context) ? $context["viewingItem"] : (function () { throw new RuntimeError('Variable "viewingItem" does not exist.', 23, $this->source); })()), "lsDoc", [], "any", false, false, false, 23))) {
                            // line 24
                            echo "                                        <span class=\"label label-default\">";
                            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "lsDoc", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), 30), "html", null, true);
                            echo "</span>
                                    ";
                        }
                        // line 26
                        echo "                                    ";
                        $this->displayBlock('end_of_item_a', $context, $blocks);
                        // line 27
                        echo "                                </a>
                            ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,                     // line 28
$context["association"], "destinationLsDoc", [], "any", false, false, false, 28))) {
                        // line 29
                        echo "                                ";
                        $context["doc"] = twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsDoc", [], "any", false, false, false, 29);
                        // line 30
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsdoc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
                        echo "\" data-doc-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
                        echo "\" class=\"list-group-item lsdoc clearfix\">
                                    Document: ";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
                        echo "
                                    ";
                        // line 32
                        $this->displayBlock("end_of_item_a", $context, $blocks);
                        echo "
                                </a>
                            ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,                     // line 34
$context["association"], "destinationNodeUri", [], "any", false, false, false, 34))) {
                        // line 35
                        echo "                                ";
                        $context["uri"] = twig_get_attribute($this->env, $this->source, $context["association"], "destinationNodeUri", [], "any", false, false, false, 35);
                        // line 36
                        echo "                                <span data-association-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 36), "html", null, true);
                        echo "\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    ";
                        // line 37
                        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri((isset($context["uri"]) || array_key_exists("uri", $context) ? $context["uri"] : (function () { throw new RuntimeError('Variable "uri" does not exist.', 37, $this->source); })())), "html", null, true);
                        echo "
                                    ";
                        // line 38
                        $this->displayBlock("end_of_item_a", $context, $blocks);
                        echo "
                                </span>
                            ";
                    } else {
                        // line 41
                        echo "                                <span data-association-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 41), "html", null, true);
                        echo "\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    ";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "destinationNodeIdentifier", [], "any", false, false, false, 42), "html", null, true);
                        echo "
                                    ";
                        // line 43
                        $this->displayBlock("end_of_item_a", $context, $blocks);
                        echo "
                                </span>
                            ";
                    }
                    // line 46
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["association"], "destinationLsDoc", [], "any", true, true, false, 46)) {
                    // line 47
                    echo "                            ";
                    $context["doc"] = $context["association"];
                    // line 48
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsdoc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
                    echo "\" data-doc-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\" class=\"list-group-item lsdoc clearfix\">
                                Document: ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 49, $this->source); })()), "title", [], "any", false, false, false, 49), "html", null, true);
                    echo "
                                ";
                    // line 50
                    $this->displayBlock("end_of_item_a", $context, $blocks);
                    echo "
                            </a>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 52
$context["association"], "isLsItem", [], "any", true, true, false, 52)) {
                    // line 53
                    echo "                            ";
                    $context["item"] = $context["association"];
                    // line 54
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsitem", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
                    echo "\" data-item-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
                    echo "\" class=\"list-group-item lsitem clearfix\">
                                ";
                    // line 55
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 55))) {
                        // line 56
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 56), "html", null, true);
                        echo "
                                ";
                    }
                    // line 58
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "fullStatement", [], "any", false, false, false, 58) != twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "humanCodingScheme", [], "any", false, false, false, 58))) {
                        // line 59
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "fullStatement", [], "any", false, false, false, 59), "html", null, true);
                        echo "
                                ";
                    }
                    // line 61
                    echo "                                ";
                    $this->displayBlock("end_of_item_a", $context, $blocks);
                    echo "
                            </a>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 63
$context["association"], "isLsDoc", [], "any", true, true, false, 63)) {
                    // line 64
                    echo "                            ";
                    $context["doc"] = $context["association"];
                    // line 65
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_lsdoc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
                    echo "\" data-doc-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
                    echo "\" class=\"list-group-item lsdoc clearfix\">
                                Document: ";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doc"]) || array_key_exists("doc", $context) ? $context["doc"] : (function () { throw new RuntimeError('Variable "doc" does not exist.', 66, $this->source); })()), "title", [], "any", false, false, false, 66), "html", null, true);
                    echo "
                                ";
                    // line 67
                    $this->displayBlock("end_of_item_a", $context, $blocks);
                    echo "
                            </a>
                        ";
                }
                // line 70
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
            // line 71
            echo "                </div>
            </div>
        </div>
    </section>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
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

    // line 26
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
        return "framework/editor/_ls_association_component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 26,  305 => 16,  290 => 71,  276 => 70,  270 => 67,  266 => 66,  259 => 65,  256 => 64,  254 => 63,  248 => 61,  242 => 59,  239 => 58,  233 => 56,  231 => 55,  224 => 54,  221 => 53,  219 => 52,  214 => 50,  210 => 49,  203 => 48,  200 => 47,  197 => 46,  191 => 43,  187 => 42,  182 => 41,  176 => 38,  172 => 37,  167 => 36,  164 => 35,  162 => 34,  157 => 32,  153 => 31,  146 => 30,  143 => 29,  141 => 28,  138 => 27,  135 => 26,  129 => 24,  126 => 23,  120 => 21,  117 => 20,  111 => 18,  108 => 17,  106 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  76 => 8,  59 => 7,  52 => 3,  47 => 2,  45 => 1,);
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
                        {% if association.destinationLsItem is defined %}
                            {% if association.destinationLsItem is not empty %}
                                {% if viewingItem == association.destinationLsItem %}
                                    {% set item = association.originLsItem %}
                                {% else %}
                                    {% set item = association.destinationLsItem %}
                                {% endif %}
                                <a href=\"{{ path('editor_lsitem', {'id':item.id}) }}\" data-item-id=\"{{ item.id }}\" data-association-id=\"{{ association.id }}\" class=\"list-group-item lsassociation lsitem clearfix\">
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
                                <a href=\"{{ path('editor_lsdoc', {'id':doc.id}) }}\" data-doc-id=\"{{ doc.id }}\" class=\"list-group-item lsdoc clearfix\">
                                    Document: {{ doc.title }}
                                    {{ block('end_of_item_a') }}
                                </a>
                            {% elseif association.destinationNodeUri is not empty %}
                                {% set uri = association.destinationNodeUri %}
                                <span data-association-id=\"{{ association.id }}\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    {{ uri|local_remote_uri }}
                                    {{ block('end_of_item_a') }}
                                </span>
                            {% else %}
                                <span data-association-id=\"{{ association.id }}\" class=\"list-group-item lsassociation lsitem-uri clearfix\">
                                    {{ association.destinationNodeIdentifier }}
                                    {{ block('end_of_item_a') }}
                                </span>
                            {% endif %}
                        {% elseif association.destinationLsDoc is defined %}
                            {% set doc = association %}
                            <a href=\"{{ path('editor_lsdoc', {'id':doc.id}) }}\" data-doc-id=\"{{ doc.id }}\" class=\"list-group-item lsdoc clearfix\">
                                Document: {{ doc.title }}
                                {{ block('end_of_item_a') }}
                            </a>
                        {% elseif association.isLsItem is defined %}
                            {% set item = association %}
                            <a href=\"{{ path('editor_lsitem', {'id':item.id}) }}\" data-item-id=\"{{ item.id }}\" class=\"list-group-item lsitem clearfix\">
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
                            <a href=\"{{ path('editor_lsdoc', {'id':doc.id}) }}\" data-doc-id=\"{{ doc.id }}\" class=\"list-group-item lsdoc clearfix\">
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
", "framework/editor/_ls_association_component.html.twig", "/var/www/html/templates/framework/editor/_ls_association_component.html.twig");
    }
}
