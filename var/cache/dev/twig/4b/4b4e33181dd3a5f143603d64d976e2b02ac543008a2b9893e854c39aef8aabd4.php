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

/* framework/doc_tree/export_pdf.html.twig */
class __TwigTemplate_f7bf831ba8fdffaed7df44b6e59d240460ffbae449609557c4d70d43b566cf2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/export_pdf.html.twig"));

        // line 1
        echo "<section>
    <p style=\"line-height: 30px;\"></p>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pdfData"] ?? null), "CFDocument", [], "any", false, true, false, 3), "title", [], "any", true, true, false, 3)) {
            echo "<p style=\"text-align:center\"><h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 3, $this->source); })()), "CFDocument", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
            echo "</h2></p>";
        }
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pdfData"] ?? null), "CFDocument", [], "any", false, true, false, 4), "publisher", [], "any", true, true, false, 4)) {
            echo "<p style=\"text-align:center;\"><h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 4, $this->source); })()), "CFDocument", [], "any", false, false, false, 4), "publisher", [], "any", false, false, false, 4), "html", null, true);
            echo "</h4></p>";
        }
        // line 5
        echo "</section>

<section>
    <p style=\"line-height: 360px;\"></p>
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pdfData"] ?? null), "CFDocument", [], "any", false, true, false, 9), "licenseURI", [], "any", false, true, false, 9), "title", [], "any", true, true, false, 9)) {
            echo "<p>Created by CfDoc Organization, under a ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 9, $this->source); })()), "CFDocument", [], "any", false, false, false, 9), "licenseURI", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
            echo " license</p>";
        }
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pdfData"] ?? null), "CFDocument", [], "any", false, true, false, 10), "statusStartDate", [], "any", true, true, false, 10)) {
            echo "<p>Date : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 10, $this->source); })()), "CFDocument", [], "any", false, false, false, 10), "statusStartDate", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>";
        }
        // line 11
        echo "    <p>Draft : ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pdfData"] ?? null), "CFDocument", [], "any", false, true, false, 11), "adoptionStatus", [], "any", true, true, false, 11)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 11, $this->source); })()), "CFDocument", [], "any", false, false, false, 11), "adoptionStatus", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
        } else {
            echo " Draft field is not present in case file right now</p>";
        }
        // line 12
        echo "    <p style=\"page-break-after:always;\"></p>
</section>

";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 15, $this->source); })()), "CFItems", [], "any", false, false, false, 15))) {
            // line 16
            echo "    <p style=\"text-align:center\"><h3>Framework Elements</h3></p>
";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 17, $this->source); })()), "CFItems", [], "any", false, false, false, 17));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "
    <section>
       <p><b>Full Statement : </b>";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["category"], "fullStatement", [], "any", false, false, false, 20);
                echo " </p>
       ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["category"], "humanCodingScheme", [], "any", true, true, false, 21)) {
                    echo "<p><b>Human coding scheme : </b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "humanCodingScheme", [], "any", false, false, false, 21), "html", null, true);
                    echo " </p>";
                }
                // line 22
                echo "       ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "listEnumeration", [], "any", true, true, false, 22)) {
                    echo "<p><b>List enum in source : </b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "listEnumeration", [], "any", false, false, false, 22), "html", null, true);
                    echo " </p>";
                }
                // line 23
                echo "       ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "abbreviatedStatement", [], "any", true, true, false, 23)) {
                    echo "<p><b>Abbreviated statement : </b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "abbreviatedStatement", [], "any", false, false, false, 23), "html", null, true);
                    echo " </p>";
                }
                // line 24
                echo "       ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "conceptKeywords", [], "any", true, true, false, 24)) {
                    echo "<p><b>Concept keywords : </b>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "conceptKeywords", [], "any", false, false, false, 24));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["keywords"]) {
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 24)) {
                            echo ", ";
                        }
                        echo twig_escape_filter($this->env, $context["keywords"], "html", null, true);
                        echo " ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keywords'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</p>";
                }
                // line 25
                echo "       ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "language", [], "any", true, true, false, 25)) {
                    echo "<p><b>Language : </b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "language", [], "any", false, false, false, 25), "html", null, true);
                    echo " </p>";
                }
                // line 26
                echo "       ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "educationLevel", [], "any", true, true, false, 26)) {
                    echo "<p><b>Education Level : </b>";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "educationLevel", [], "any", false, false, false, 26));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                            echo ", ";
                        }
                        echo twig_escape_filter($this->env, $context["level"], "html", null, true);
                        echo " ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </p>";
                }
                // line 27
                echo "       ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "CFItemType", [], "any", true, true, false, 27)) {
                    echo "<p><b>Item type : </b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "CFItemType", [], "any", false, false, false, 27), "html", null, true);
                    echo " </p>";
                }
                // line 28
                echo "       ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "notes", [], "any", true, true, false, 28)) {
                    echo "<p><b>Notes : </b>";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "notes", [], "any", false, false, false, 28);
                    echo " </p> ";
                }
                // line 29
                echo "    </section>

    <section>
        <p style=\"text-align: center;\"><b>Relationships with Other Frameworks</b></p>
        <table border=\"1\" cellpadding=\"10\">
            <tr>
                <td>Framework</td>
                <td>Relationship </td>
                <td>Other Statement</td>
            </tr>
             ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pdfData"]) || array_key_exists("pdfData", $context) ? $context["pdfData"] : (function () { throw new RuntimeError('Variable "pdfData" does not exist.', 39, $this->source); })()), "CFAssociations", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["Associations"]) {
                    // line 40
                    echo "             ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Associations"], "originNodeURI", [], "any", false, false, false, 40), "identifier", [], "any", false, false, false, 40) == twig_get_attribute($this->env, $this->source, $context["category"], "identifier", [], "any", false, false, false, 40))) {
                        // line 41
                        echo "            <tr>
                <td>";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Associations"], "originNodeURI", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
                        echo "</td>
                <td>";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Associations"], "associationType", [], "any", false, false, false, 43), "html", null, true);
                        echo "</td>
                <td>";
                        // line 44
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Associations"], "destinationNodeURI", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
                        echo "</td>
            </tr>
            ";
                    }
                    // line 47
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Associations'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "        </table>
        ";
                // line 49
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "        <p style=\"page-break-after:always;\"></p>
        ";
                }
                // line 52
                echo "    </section>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/export_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 52,  289 => 50,  287 => 49,  284 => 48,  278 => 47,  272 => 44,  268 => 43,  264 => 42,  261 => 41,  258 => 40,  254 => 39,  242 => 29,  235 => 28,  228 => 27,  189 => 26,  182 => 25,  143 => 24,  136 => 23,  129 => 22,  123 => 21,  119 => 20,  115 => 18,  98 => 17,  95 => 16,  93 => 15,  88 => 12,  79 => 11,  72 => 10,  66 => 9,  60 => 5,  53 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <p style=\"line-height: 30px;\"></p>
    {% if pdfData.CFDocument.title is defined %}<p style=\"text-align:center\"><h2>{{ pdfData.CFDocument.title }}</h2></p>{% endif %}
    {% if pdfData.CFDocument.publisher is defined %}<p style=\"text-align:center;\"><h4>{{ pdfData.CFDocument.publisher }}</h4></p>{% endif %}
</section>

<section>
    <p style=\"line-height: 360px;\"></p>
    {% if pdfData.CFDocument.licenseURI.title is defined %}<p>Created by CfDoc Organization, under a {{ pdfData.CFDocument.licenseURI.title }} license</p>{% endif %}
    {% if pdfData.CFDocument.statusStartDate is defined %}<p>Date : {{ pdfData.CFDocument.statusStartDate }}</p>{% endif %}
    <p>Draft : {% if pdfData.CFDocument.adoptionStatus is defined %} {{ pdfData.CFDocument.adoptionStatus }} {% else %} Draft field is not present in case file right now</p>{% endif %}
    <p style=\"page-break-after:always;\"></p>
</section>

{% if pdfData.CFItems is not empty %}
    <p style=\"text-align:center\"><h3>Framework Elements</h3></p>
{% for category in pdfData.CFItems %}

    <section>
       <p><b>Full Statement : </b>{{ category.fullStatement | raw }} </p>
       {% if category.humanCodingScheme is defined %}<p><b>Human coding scheme : </b>{{ category.humanCodingScheme }} </p>{% endif %}
       {% if category.listEnumeration is defined %}<p><b>List enum in source : </b>{{ category.listEnumeration }} </p>{% endif %}
       {% if category.abbreviatedStatement is defined %}<p><b>Abbreviated statement : </b>{{ category.abbreviatedStatement }} </p>{% endif %}
       {% if category.conceptKeywords is defined %}<p><b>Concept keywords : </b>{% for keywords in category.conceptKeywords %}{% if not loop.first %}, {% endif %}{{ keywords}} {% endfor %}</p>{% endif %}
       {% if category.language is defined %}<p><b>Language : </b>{{ category.language }} </p>{% endif %}
       {% if category.educationLevel is defined %}<p><b>Education Level : </b>{% for level in category.educationLevel %}{% if not loop.first %}, {% endif %}{{ level }} {% endfor %} </p>{% endif %}
       {% if category.CFItemType is defined %}<p><b>Item type : </b>{{ category.CFItemType }} </p>{% endif %}
       {% if category.notes is defined %}<p><b>Notes : </b>{{ category.notes | raw }} </p> {% endif %}
    </section>

    <section>
        <p style=\"text-align: center;\"><b>Relationships with Other Frameworks</b></p>
        <table border=\"1\" cellpadding=\"10\">
            <tr>
                <td>Framework</td>
                <td>Relationship </td>
                <td>Other Statement</td>
            </tr>
             {% for Associations in pdfData.CFAssociations %}
             {% if Associations.originNodeURI.identifier == category.identifier %}
            <tr>
                <td>{{ Associations.originNodeURI.title }}</td>
                <td>{{ Associations.associationType }}</td>
                <td>{{ Associations.destinationNodeURI.title }}</td>
            </tr>
            {% endif %}
            {% endfor %}
        </table>
        {% if not loop.last %}
        <p style=\"page-break-after:always;\"></p>
        {% endif %}
    </section>

{% endfor %}
{% endif %}
", "framework/doc_tree/export_pdf.html.twig", "/var/www/html/templates/framework/doc_tree/export_pdf.html.twig");
    }
}
