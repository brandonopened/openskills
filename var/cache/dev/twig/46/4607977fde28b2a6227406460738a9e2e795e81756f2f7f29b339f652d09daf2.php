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

/* framework/cf_package/export_document.json.twig */
class __TwigTemplate_a7793f582f9b9fdc10f4187bd38e3ff59b36e55ffc6331b1d19b6bee34ba9ab0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_document.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/cf_package/export_document.json.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    {
        \"identifier\": ";
        // line 3
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 3, $this->source); })()), "identifier", [], "any", false, false, false, 3));
        echo ",
        \"uri\": ";
        // line 4
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri((isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 4, $this->source); })())));
        echo ",
        \"creator\": ";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 5, $this->source); })()), "creator", [], "any", false, false, false, 5));
        echo ",
        \"title\": ";
        // line 6
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6));
        echo ",
        ";
        // line 7
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 7, $this->source); })()), "officialUri", [], "any", false, false, false, 7))) {
            // line 8
            echo "\"officialSourceURL\": ";
            echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 8, $this->source); })()), "officialUri", [], "any", false, false, false, 8)));
            echo ",";
        }
        // line 10
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 10, $this->source); })()), "publisher", [], "any", false, false, false, 10))) {
            // line 11
            echo "\"publisher\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 11, $this->source); })()), "publisher", [], "any", false, false, false, 11));
            echo ",";
        }
        // line 13
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13))) {
            // line 14
            echo "\"description\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14));
            echo ",";
        }
        // line 16
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 16, $this->source); })()), "subjects", [], "any", false, false, false, 16))) {
            // line 17
            echo "\"subject\": \"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 17, $this->source); })()), "subjects", [], "any", false, false, false, 17));
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
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) {
                    echo "|";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "title", [], "any", false, false, false, 17), "html", null, true);
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
            echo "\",
            \"subjectURL\": [
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 19, $this->source); })()), "subjects", [], "any", false, false, false, 19));
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
                // line 20
                echo "                ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
                    echo ",";
                }
                // line 21
                echo "                    {
                        \"title\": ";
                // line 22
                echo json_encode(twig_get_attribute($this->env, $this->source, $context["subject"], "title", [], "any", false, false, false, 22));
                echo ",
                        \"identifier\": ";
                // line 23
                echo json_encode(twig_get_attribute($this->env, $this->source, $context["subject"], "identifier", [], "any", false, false, false, 23));
                echo ",
                        \"uri\": ";
                // line 24
                echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getLocalOrRemoteUri(twig_get_attribute($this->env, $this->source, $context["subject"], "uri", [], "any", false, false, false, 24)));
                echo "
                    }
                ";
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
            // line 27
            echo "                ],";
        }
        // line 29
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 29, $this->source); })()), "language", [], "any", false, false, false, 29))) {
            // line 30
            echo "\"language\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 30, $this->source); })()), "language", [], "any", false, false, false, 30));
            echo ",";
        }
        // line 32
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 32, $this->source); })()), "version", [], "any", false, false, false, 32))) {
            // line 33
            echo "\"version\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 33, $this->source); })()), "version", [], "any", false, false, false, 33));
            echo ",";
        }
        // line 35
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 35, $this->source); })()), "adoptionStatus", [], "any", false, false, false, 35))) {
            // line 36
            echo "\"adoptionStatus\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 36, $this->source); })()), "adoptionStatus", [], "any", false, false, false, 36));
            echo ",";
        }
        // line 38
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 38, $this->source); })()), "statusStart", [], "any", false, false, false, 38))) {
            // line 39
            echo "\"statusStartDate\": ";
            echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 39, $this->source); })()), "statusStart", [], "any", false, false, false, 39), "c"), ["+00:00" => ""]));
            echo ",";
        }
        // line 41
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 41, $this->source); })()), "statusEnd", [], "any", false, false, false, 41))) {
            // line 42
            echo "\"statusEndDate\": ";
            echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 42, $this->source); })()), "statusEnd", [], "any", false, false, false, 42), "c"), ["+00:00" => ""]));
            echo ",";
        }
        // line 45
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 45, $this->source); })()), "note", [], "any", false, false, false, 45))) {
            // line 46
            echo "\"notes\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 46, $this->source); })()), "note", [], "any", false, false, false, 46));
            echo ",";
        }
        // line 48
        echo "        \"lastChangeDateTime\": ";
        echo json_encode(twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 48, $this->source); })()), "changedAt", [], "any", false, false, false, 48), "c"), ["+00:00" => ""]));
        echo ",
        ";
        // line 50
        echo "        \"CFPackageURI\": ";
        echo json_encode($this->env->getRuntime('App\Twig\Extension\CaseUriRuntime')->getObjectUri((isset($context["lsDoc"]) || array_key_exists("lsDoc", $context) ? $context["lsDoc"] : (function () { throw new RuntimeError('Variable "lsDoc" does not exist.', 50, $this->source); })()), "api_v1p0_cfpackage"));
        echo "
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "framework/cf_package/export_document.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 50,  245 => 48,  240 => 46,  238 => 45,  233 => 42,  230 => 41,  225 => 39,  222 => 38,  217 => 36,  214 => 35,  209 => 33,  206 => 32,  201 => 30,  198 => 29,  195 => 27,  178 => 24,  174 => 23,  170 => 22,  167 => 21,  162 => 20,  145 => 19,  108 => 17,  105 => 16,  100 => 14,  97 => 13,  92 => 11,  89 => 10,  84 => 8,  82 => 7,  78 => 6,  74 => 5,  70 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    {
        \"identifier\": {{ lsDoc.identifier |json_encode |raw }},
        \"uri\": {{ object_uri(lsDoc) |json_encode |raw }},
        \"creator\": {{ lsDoc.creator |json_encode |raw }},
        \"title\": {{ lsDoc.title |json_encode |raw }},
        {% if lsDoc.officialUri is not null -%}
            \"officialSourceURL\": {{ lsDoc.officialUri|local_remote_uri |json_encode |raw }},
        {%- endif %}
        {% if lsDoc.publisher is not null -%}
            \"publisher\": {{ lsDoc.publisher |json_encode |raw }},
        {%- endif %}
        {% if lsDoc.description is not null -%}
            \"description\": {{ lsDoc.description |json_encode |raw }},
        {%- endif %}
        {% if lsDoc.subjects is not empty -%}
            \"subject\": \"{% for subject in lsDoc.subjects %}{% if not loop.first %}|{% endif %}{{ subject.title }}{% endfor %}\",
            \"subjectURL\": [
                {% for subject in lsDoc.subjects %}
                {% if not loop.first %},{% endif %}
                    {
                        \"title\": {{ subject.title |json_encode |raw }},
                        \"identifier\": {{ subject.identifier |json_encode |raw }},
                        \"uri\": {{ subject.uri|local_remote_uri |json_encode |raw }}
                    }
                {% endfor %}
                ],
        {%- endif %}
        {% if lsDoc.language is not null -%}
            \"language\": {{ lsDoc.language |json_encode |raw }},
        {%- endif %}
        {% if lsDoc.version is not null -%}
            \"version\": {{ lsDoc.version |json_encode |raw }},
        {%- endif %}
        {% if lsDoc.adoptionStatus is not null -%}
            \"adoptionStatus\": {{ lsDoc.adoptionStatus |json_encode |raw }},
        {%- endif %}
        {% if lsDoc.statusStart is not null -%}
            \"statusStartDate\": {{ lsDoc.statusStart |date('c') |replace({'+00:00':''}) |json_encode |raw }},
        {%- endif %}
        {% if lsDoc.statusEnd is not null -%}
            \"statusEndDate\": {{ lsDoc.statusEnd |date('c') |replace({'+00:00':''}) |json_encode |raw }},
        {%- endif %}
{#- TODO: license and licenseURI -#}
        {% if lsDoc.note is not null -%}
            \"notes\": {{ lsDoc.note |json_encode |raw }},
        {%- endif %}
        \"lastChangeDateTime\": {{ lsDoc.changedAt|date('c') |replace({'+00:00':''}) |json_encode |raw }},
        {# TODO: CFPackage URI #}
        \"CFPackageURI\": {{ object_uri(lsDoc, 'api_v1p0_cfpackage') |json_encode |raw }}
    }
{% endblock %}
", "framework/cf_package/export_document.json.twig", "/var/www/html/templates/framework/cf_package/export_document.json.twig");
    }
}
