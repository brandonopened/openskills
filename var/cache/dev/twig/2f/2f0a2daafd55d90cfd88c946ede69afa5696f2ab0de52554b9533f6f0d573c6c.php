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

/* framework/doc_tree/export.json.twig */
class __TwigTemplate_0f9c7ca47a46d6157c1de8c1e9ba188d5b0eaffdbd7beb16ac45ab179dc87784 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export.json.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "{
\"condensed\": true
";
        // line 5
        echo ",\"lsDocId\": ";
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5));
        echo "
,\"baseDoc\": ";
        // line 6
        echo json_encode(((twig_get_attribute($this->env, $this->source, ($context["docAttributes"] ?? null), "baseDoc", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["docAttributes"] ?? null), "baseDoc", [], "any", false, false, false, 6), "self")) : ("self")));
        echo "
,\"associatedDocs\": ";
        // line 7
        echo json_encode(((twig_get_attribute($this->env, $this->source, ($context["docAttributes"] ?? null), "associatedDocs", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["docAttributes"] ?? null), "associatedDocs", [], "any", false, false, false, 7), null)) : (null)));
        echo "
,\"CFDocument\":
";
        // line 9
        $this->loadTemplate("framework/cf_package/export_document.json.twig", "framework/doc_tree/export.json.twig", 9)->display(twig_array_merge($context, ["lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 9, $this->source); })())]));
        // line 10
        if ( !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo ",\"CFItems\": [
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 12, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                    echo ",";
                }
                // line 14
                $this->loadTemplate("framework/doc_tree/export_item.json.twig", "framework/doc_tree/export.json.twig", 14)->display(twig_array_merge($context, ["lsItem" => $context["item"], "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 14, $this->source); })())]));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "]";
        }
        // line 18
        if ( !twig_test_empty((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo ",\"CFAssociations\": [
";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 20, $this->source); })()));
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
                // line 21
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) {
                    echo ",";
                }
                // line 22
                $this->loadTemplate("framework/doc_tree/export_association.json.twig", "framework/doc_tree/export.json.twig", 22)->display(twig_array_merge($context, ["lsAssociation" => $context["association"], "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 22, $this->source); })())]));
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
            // line 24
            echo "]";
        }
        // line 26
        if ((((( !twig_test_empty((isset($context["itemTypes"]) || array_key_exists("itemTypes", $context) ? $context["itemTypes"] : (function () { throw new RuntimeError('Variable "itemTypes" does not exist.', 26, $this->source); })())) ||  !twig_test_empty((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 26, $this->source); })()))) ||  !twig_test_empty((isset($context["concepts"]) || array_key_exists("concepts", $context) ? $context["concepts"] : (function () { throw new RuntimeError('Variable "concepts" does not exist.', 26, $this->source); })()))) ||  !twig_test_empty((isset($context["licences"]) || array_key_exists("licences", $context) ? $context["licences"] : (function () { throw new RuntimeError('Variable "licences" does not exist.', 26, $this->source); })()))) ||  !twig_test_empty((isset($context["assocGroups"]) || array_key_exists("assocGroups", $context) ? $context["assocGroups"] : (function () { throw new RuntimeError('Variable "assocGroups" does not exist.', 26, $this->source); })())))) {
            // line 27
            echo ",\"CFDefinitions\": {
    \"CFItemTypes\": [
    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["itemTypes"]) || array_key_exists("itemTypes", $context) ? $context["itemTypes"] : (function () { throw new RuntimeError('Variable "itemTypes" does not exist.', 29, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["itemType"]) {
                // line 30
                echo "    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                    echo ",";
                }
                // line 31
                echo "    ";
                // line 32
                echo "    ";
                $this->loadTemplate("framework/cf_package/export_item_type.json.twig", "framework/doc_tree/export.json.twig", 32)->display(twig_array_merge($context, ["lsItemType" => $context["itemType"]]));
                // line 33
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ]
    ";
            // line 35
            if ( !twig_test_empty((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 35, $this->source); })()))) {
                // line 36
                echo ",\"CFSubjects\": [
    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 37, $this->source); })()));
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
                    // line 38
                    echo "    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                        echo ",";
                    }
                    // line 39
                    echo "    ";
                    $this->loadTemplate("framework/cf_package/export_subject.json.twig", "framework/doc_tree/export.json.twig", 39)->display(twig_array_merge($context, ["subject" => $context["subject"]]));
                    // line 40
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "    ]";
            }
            // line 43
            echo "    ";
            if ( !twig_test_empty((isset($context["concepts"]) || array_key_exists("concepts", $context) ? $context["concepts"] : (function () { throw new RuntimeError('Variable "concepts" does not exist.', 43, $this->source); })()))) {
                // line 45
                echo ",\"CFConcepts\": [";
            }
            // line 47
            echo "    ";
            if ( !twig_test_empty((isset($context["licences"]) || array_key_exists("licences", $context) ? $context["licences"] : (function () { throw new RuntimeError('Variable "licences" does not exist.', 47, $this->source); })()))) {
                // line 48
                echo ",\"CFLicenses\": [
    ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["licences"]) || array_key_exists("licences", $context) ? $context["licences"] : (function () { throw new RuntimeError('Variable "licences" does not exist.', 49, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["licence"]) {
                    // line 50
                    echo "    ";
                    if ( !(null === $context["licence"])) {
                        // line 51
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 51)) {
                            echo ",";
                        }
                        // line 52
                        echo "        {
            \"identifier\": ";
                        // line 53
                        echo json_encode(twig_get_attribute($this->env, $this->source, $context["licence"], "identifier", [], "any", false, false, false, 53));
                        echo "
            , \"uri\": ";
                        // line 54
                        echo json_encode(twig_get_attribute($this->env, $this->source, $context["licence"], "uri", [], "any", false, false, false, 54));
                        echo "
            , \"title\": ";
                        // line 55
                        echo json_encode(twig_get_attribute($this->env, $this->source, $context["licence"], "title", [], "any", false, false, false, 55));
                        echo "
            , \"description\": ";
                        // line 56
                        echo json_encode(twig_get_attribute($this->env, $this->source, $context["licence"], "description", [], "any", false, false, false, 56));
                        echo "
            , \"licenseText\": ";
                        // line 57
                        echo json_encode(twig_get_attribute($this->env, $this->source, $context["licence"], "licenceText", [], "any", false, false, false, 57));
                        echo "
            , \"lastChangeDateTime\": ";
                        // line 58
                        echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["licence"], "changedAt", [], "any", false, false, false, 58), "c"), ["+00:00" => ""]));
                        echo "
        }";
                    }
                    // line 61
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licence'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "    ]";
            }
            // line 64
            echo "    ";
            if ( !twig_test_empty((isset($context["assocGroups"]) || array_key_exists("assocGroups", $context) ? $context["assocGroups"] : (function () { throw new RuntimeError('Variable "assocGroups" does not exist.', 64, $this->source); })()))) {
                // line 65
                echo ",\"CFAssociationGroupings\": [
    ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["assocGroups"]) || array_key_exists("assocGroups", $context) ? $context["assocGroups"] : (function () { throw new RuntimeError('Variable "assocGroups" does not exist.', 66, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["assocGroup"]) {
                    // line 67
                    echo "    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 67)) {
                        echo ",";
                    }
                    // line 68
                    echo "    ";
                    $this->loadTemplate("framework/doc_tree/export_assoc_group.json.twig", "framework/doc_tree/export.json.twig", 68)->display(twig_array_merge($context, ["assocGroup" => $context["assocGroup"], "lsDoc" => (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 68, $this->source); })())]));
                    // line 69
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assocGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "    ]";
            }
            // line 72
            echo "}";
        }
        // line 74
        echo "}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/export.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  402 => 74,  399 => 72,  396 => 70,  382 => 69,  379 => 68,  374 => 67,  357 => 66,  354 => 65,  351 => 64,  348 => 62,  334 => 61,  329 => 58,  325 => 57,  321 => 56,  317 => 55,  313 => 54,  309 => 53,  306 => 52,  302 => 51,  299 => 50,  282 => 49,  279 => 48,  276 => 47,  273 => 45,  270 => 43,  267 => 41,  253 => 40,  250 => 39,  245 => 38,  228 => 37,  225 => 36,  223 => 35,  220 => 34,  206 => 33,  203 => 32,  201 => 31,  196 => 30,  179 => 29,  175 => 27,  173 => 26,  170 => 24,  156 => 22,  152 => 21,  135 => 20,  132 => 19,  130 => 18,  127 => 16,  113 => 14,  109 => 13,  92 => 12,  89 => 11,  87 => 10,  85 => 9,  80 => 7,  76 => 6,  71 => 5,  67 => 2,  57 => 1,  46 => 76,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
{
\"condensed\": true
{# include doc id separately, so we can use the standard CfPackage twig file to include the document data #}
,\"lsDocId\": {{ lsDoc.id |json_encode |raw }}
,\"baseDoc\": {{ docAttributes.baseDoc |default(\"self\") |json_encode |raw }}
,\"associatedDocs\": {{ docAttributes.associatedDocs |default(null) |json_encode |raw }}
,\"CFDocument\":
{% include 'framework/cf_package/export_document.json.twig' with { 'lsDoc':lsDoc } %}
{% if items is not empty -%}
,\"CFItems\": [
{% for item in items %}
{% if not loop.first %},{% endif %}
{% include 'framework/doc_tree/export_item.json.twig' with { 'lsItem':item, 'lsDoc':lsDoc } %}
{% endfor %}
]
{%- endif %}
{% if associations is not empty -%}
,\"CFAssociations\": [
{% for association in associations %}
{% if not loop.first %},{% endif %}
{% include 'framework/doc_tree/export_association.json.twig' with { 'lsAssociation':association, 'lsDoc':lsDoc } %}
{% endfor %}
]
{%- endif %}
{% if itemTypes is not empty or subjects is not empty or concepts is not empty or licences is not empty or assocGroups is not empty -%}
,\"CFDefinitions\": {
    \"CFItemTypes\": [
    {% for itemType in itemTypes %}
    {% if not loop.first %},{% endif %}
    {# render_esi(path('lsitem_export', { 'id': item.id })) #}
    {% include 'framework/cf_package/export_item_type.json.twig' with { 'lsItemType':itemType } %}
    {% endfor %}
    ]
    {% if subjects is not empty -%}
    ,\"CFSubjects\": [
    {% for subject in subjects %}
    {% if not loop.first %},{% endif %}
    {% include 'framework/cf_package/export_subject.json.twig' with { 'subject':subject } %}
    {% endfor %}
    ]
    {%- endif %}
    {% if concepts is not empty -%}
    {#- TODO: CFConcepts -#}
    ,\"CFConcepts\": [
    {%- endif %}
    {% if licences is not empty -%}
    ,\"CFLicenses\": [
    {% for licence in licences %}
    {% if licence is not null -%}
    {% if not loop.first %},{% endif %}
        {
            \"identifier\": {{ licence.identifier |json_encode |raw }}
            , \"uri\": {{ licence.uri |json_encode |raw }}
            , \"title\": {{ licence.title |json_encode |raw }}
            , \"description\": {{ licence.description |json_encode |raw }}
            , \"licenseText\": {{ licence.licenceText |json_encode |raw }}
            , \"lastChangeDateTime\": {{ licence.changedAt|date('c') |replace({'+00:00':''}) |json_encode |raw }}
        }
    {%- endif %}
    {% endfor %}
    ]
    {%- endif %}
    {% if assocGroups is not empty -%}
    ,\"CFAssociationGroupings\": [
    {% for assocGroup in assocGroups %}
    {% if not loop.first %},{% endif %}
    {% include 'framework/doc_tree/export_assoc_group.json.twig' with { 'assocGroup':assocGroup, 'lsDoc':lsDoc } %}
    {% endfor %}
    ]
    {%- endif %}
}
{%- endif %}
}
{% endblock %}

", "framework/doc_tree/export.json.twig", "/var/www/html/templates/framework/doc_tree/export.json.twig");
    }
}
