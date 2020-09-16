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

/* uri/_table.html.twig */
class __TwigTemplate_484b561d88328e9d24f6a01b801ad05a88616a914acf7b1922b9369ce046eb35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "uri/_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "uri/_table.html.twig"));

        // line 1
        $context["isNumeric"] = true;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 3
            echo "    ";
            if (((isset($context["isNumeric"]) || array_key_exists("isNumeric", $context) ? $context["isNumeric"] : (function () { throw new RuntimeError('Variable "isNumeric" does not exist.', 3, $this->source); })()) &&  !call_user_func_array($this->env->getTest('numeric')->getCallable(), [$context["key"]]))) {
                $context["isNumeric"] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "<table class=\"table ";
        if ( !(isset($context["isNumeric"]) || array_key_exists("isNumeric", $context) ? $context["isNumeric"] : (function () { throw new RuntimeError('Variable "isNumeric" does not exist.', 5, $this->source); })())) {
            echo "table-bordered ";
        }
        echo "table-striped table-hover\" style=\"padding:0; margin-bottom:0;\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 7
            echo "        ";
            $context["isIterable"] = twig_test_iterable($context["val"]);
            // line 8
            echo "        ";
            $context["isChildNumeric"] = false;
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($context["val"]));
            foreach ($context['_seq'] as $context["_key"] => $context["childKey"]) {
                // line 10
                echo "            ";
                if (( !(isset($context["isChildNumeric"]) || array_key_exists("isChildNumeric", $context) ? $context["isChildNumeric"] : (function () { throw new RuntimeError('Variable "isChildNumeric" does not exist.', 10, $this->source); })()) && call_user_func_array($this->env->getTest('numeric')->getCallable(), [$context["childKey"]]))) {
                    $context["isChildNumeric"] = true;
                }
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childKey'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        <tr>
            ";
            // line 13
            if ( !(isset($context["isNumeric"]) || array_key_exists("isNumeric", $context) ? $context["isNumeric"] : (function () { throw new RuntimeError('Variable "isNumeric" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "                <th rowspan=\"";
                ((((isset($context["isIterable"]) || array_key_exists("isIterable", $context) ? $context["isIterable"] : (function () { throw new RuntimeError('Variable "isIterable" does not exist.', 14, $this->source); })()) && (isset($context["isChildNumeric"]) || array_key_exists("isChildNumeric", $context) ? $context["isChildNumeric"] : (function () { throw new RuntimeError('Variable "isChildNumeric" does not exist.', 14, $this->source); })()))) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_array_keys_filter($context["val"])), "html", null, true))) : (print (1)));
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</th>
            ";
            }
            // line 16
            echo "            ";
            if ((isset($context["isChildNumeric"]) || array_key_exists("isChildNumeric", $context) ? $context["isChildNumeric"] : (function () { throw new RuntimeError('Variable "isChildNumeric" does not exist.', 16, $this->source); })())) {
                // line 17
                echo "                <td ";
                if ((isset($context["isNumeric"]) || array_key_exists("isNumeric", $context) ? $context["isNumeric"] : (function () { throw new RuntimeError('Variable "isNumeric" does not exist.', 17, $this->source); })())) {
                    echo "style=\"border-top: none; padding:0;\"";
                }
                echo ">
                    ";
                // line 18
                if ((isset($context["isIterable"]) || array_key_exists("isIterable", $context) ? $context["isIterable"] : (function () { throw new RuntimeError('Variable "isIterable" does not exist.', 18, $this->source); })())) {
                    // line 19
                    echo "                        ";
                    echo twig_include($this->env, $context, "uri/_table.html.twig", ["data" => [0 => twig_first($this->env, $context["val"])]]);
                    echo "
                    ";
                } else {
                    // line 21
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_trim_filter(twig_first($this->env, $context["val"])), "html", null, true);
                    echo "
                    ";
                }
                // line 23
                echo "                </td>
                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $context["val"], 1, (twig_length_filter($this->env, $context["val"]) - 1)));
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
                foreach ($context['_seq'] as $context["childKey"] => $context["childVal"]) {
                    // line 25
                    echo "                    </tr><tr>
                    <td ";
                    // line 26
                    if ((isset($context["isNumeric"]) || array_key_exists("isNumeric", $context) ? $context["isNumeric"] : (function () { throw new RuntimeError('Variable "isNumeric" does not exist.', 26, $this->source); })())) {
                        echo "style=\"border-top: none; padding:0;\"";
                    }
                    echo ">
                        ";
                    // line 27
                    if ((isset($context["isIterable"]) || array_key_exists("isIterable", $context) ? $context["isIterable"] : (function () { throw new RuntimeError('Variable "isIterable" does not exist.', 27, $this->source); })())) {
                        // line 28
                        echo "                            ";
                        echo twig_include($this->env, $context, "uri/_table.html.twig", ["data" => [0 => $context["childVal"]]]);
                        echo "
                        ";
                    } else {
                        // line 30
                        echo "                            ";
                        echo twig_escape_filter($this->env, twig_trim_filter($context["childVal"]), "html", null, true);
                        echo "
                        ";
                    }
                    // line 32
                    echo "                    </td>
                    ";
                    // line 33
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 33)) {
                        echo "</tr>";
                    }
                    // line 34
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['childKey'], $context['childVal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "            ";
            } else {
                // line 36
                echo "                <td ";
                if ((isset($context["isNumeric"]) || array_key_exists("isNumeric", $context) ? $context["isNumeric"] : (function () { throw new RuntimeError('Variable "isNumeric" does not exist.', 36, $this->source); })())) {
                    echo "style=\"border-top: none; padding:0;\"";
                }
                echo ">
                    ";
                // line 37
                if ((isset($context["isIterable"]) || array_key_exists("isIterable", $context) ? $context["isIterable"] : (function () { throw new RuntimeError('Variable "isIterable" does not exist.', 37, $this->source); })())) {
                    // line 38
                    echo "                        ";
                    echo twig_include($this->env, $context, "uri/_table.html.twig", ["data" => $context["val"]]);
                    echo "
                    ";
                } else {
                    // line 40
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_trim_filter($context["val"]), "html", null, true);
                    echo "
                    ";
                }
                // line 42
                echo "                </td>
            ";
            }
            // line 44
            echo "        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "uri/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 46,  233 => 44,  229 => 42,  223 => 40,  217 => 38,  215 => 37,  208 => 36,  205 => 35,  191 => 34,  187 => 33,  184 => 32,  178 => 30,  172 => 28,  170 => 27,  164 => 26,  161 => 25,  144 => 24,  141 => 23,  135 => 21,  129 => 19,  127 => 18,  120 => 17,  117 => 16,  109 => 14,  107 => 13,  104 => 12,  98 => 11,  93 => 10,  88 => 9,  85 => 8,  82 => 7,  65 => 6,  58 => 5,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isNumeric = true %}
{% for key in data|keys %}
    {% if isNumeric and key is not numeric %}{% set isNumeric = false %}{% endif %}
{% endfor %}
<table class=\"table {% if not isNumeric %}table-bordered {% endif %}table-striped table-hover\" style=\"padding:0; margin-bottom:0;\">
    {% for key, val in data %}
        {% set isIterable = val is iterable %}
        {% set isChildNumeric = false %}
        {% for childKey in val|keys %}
            {% if (not isChildNumeric) and (childKey is numeric) %}{% set isChildNumeric = true %}{% endif %}
        {% endfor %}
        <tr>
            {% if not isNumeric %}
                <th rowspan=\"{{ (isIterable and isChildNumeric) ? val|keys|length : 1 }}\">{{ key }}</th>
            {% endif %}
            {% if isChildNumeric %}
                <td {% if isNumeric %}style=\"border-top: none; padding:0;\"{% endif %}>
                    {% if isIterable %}
                        {{ include('uri/_table.html.twig', {data: [val|first]}) }}
                    {% else %}
                        {{ val|first |trim }}
                    {% endif %}
                </td>
                {% for childKey, childVal in val|slice(1, (val|length - 1)) %}
                    </tr><tr>
                    <td {% if isNumeric %}style=\"border-top: none; padding:0;\"{% endif %}>
                        {% if isIterable %}
                            {{ include('uri/_table.html.twig', {data: [childVal]}) }}
                        {% else %}
                            {{ childVal |trim }}
                        {% endif %}
                    </td>
                    {% if not loop.last %}</tr>{% endif %}
                {% endfor %}
            {% else %}
                <td {% if isNumeric %}style=\"border-top: none; padding:0;\"{% endif %}>
                    {% if isIterable %}
                        {{ include('uri/_table.html.twig', {data: val}) }}
                    {% else %}
                        {{ val |trim }}
                    {% endif %}
                </td>
            {% endif %}
        </tr>
    {% endfor %}
</table>
", "uri/_table.html.twig", "/var/www/html/templates/uri/_table.html.twig");
    }
}
