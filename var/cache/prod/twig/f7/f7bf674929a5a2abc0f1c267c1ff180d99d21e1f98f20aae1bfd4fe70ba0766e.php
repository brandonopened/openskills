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

/* framework/ls_doc/index.html.twig */
class __TwigTemplate_57e0781c533664bf101ce4dcc84ede1356473aa71774a22d07cfb16bd2fc7a89 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyclasses' => [$this, 'block_bodyclasses'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["base_template"] ?? null), "framework/ls_doc/index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyclasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("bodyclasses", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <h1>Competency Frameworks
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("create", "lsdoc")) {
            // line 7
            echo "            <ul class=\"list-inline pull-right\">
                <li>
                    <a class=\"btn btn-default\" href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lsdoc_new");
            echo "\">Create a new Framework</a>
                </li>
                <li>
                    <button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#wizard\">Import framework</button>
                </li>
            </ul>
        ";
        }
        // line 16
        echo "    </h1>

    <div id=\"competencyTree\">
        ";
        // line 19
        $context["lastCreator"] = "";
        // line 20
        echo "        <ul id=\"comptencyTreeData\" style=\"display:none;\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lsDocs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["framework"]) {
            // line 22
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 22) != ($context["lastCreator"] ?? null))) {
                // line 23
                echo "                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 23)) {
                    echo "</ul></li>";
                }
                // line 24
                echo "                        <li class=\"folder\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 24), "html", null, true);
                echo "<ul>
                                ";
                // line 25
                $context["lastCreator"] = twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 25);
                // line 26
                echo "                    ";
            }
            // line 27
            echo "                    <li class=\"salt-framework-link\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc_tree_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["framework"], "slug", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></li>
                    ";
            // line 28
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28) == true) && (twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 28) != ""))) {
                // line 29
                echo "                        </ul></li>
                    ";
            }
            // line 31
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['framework'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </ul>
    </div>
    ";
        // line 34
        $this->loadTemplate("framework/ls_doc/wizard.html.twig", "framework/ls_doc/index.html.twig", 34)->display($context);
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "<script>
    \$('#competencyTree').fancytree({
        activate: function(event, data){
            var node = data.node;
            if (!\$.isEmptyObject(node.data)) {
                if (undefined !== node.data.href)
                    window.location.href = node.data.href;
            }
        },
        dblclick: function(event, data) {
            // ignore double clicks
            return false;
        },
        click: function(event, data) {
            if (data.node.isFolder() && data.targetType !== 'expander') {
                data.node.toggleExpanded();
            }
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "framework/ls_doc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  157 => 37,  153 => 34,  149 => 32,  135 => 31,  131 => 29,  129 => 28,  122 => 27,  119 => 26,  117 => 25,  112 => 24,  107 => 23,  104 => 22,  87 => 21,  84 => 20,  82 => 19,  77 => 16,  67 => 9,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "framework/ls_doc/index.html.twig", "/var/www/html/templates/framework/ls_doc/index.html.twig");
    }
}
