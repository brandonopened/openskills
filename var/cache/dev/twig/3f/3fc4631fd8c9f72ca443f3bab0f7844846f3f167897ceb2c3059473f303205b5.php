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

/* framework/doc_tree/wizard.html.twig */
class __TwigTemplate_fde16c4b4719b6e13fdf09757bbd27b97e3248c35ac18a28e6631466c2fa970d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/wizard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "framework/doc_tree/wizard.html.twig"));

        // line 1
        echo "<div id=\"addChildrenModal\" class=\"modal bs-example-modal-lg fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4>Import Items</h4>
            </div>
            <div class=\"modal-body fields-body-framework\">
                <h6>Note that the CSV importer does not import all CASE fields but is intended as a simple statement importer. Questions about fields? <a href=\"http://docs.opensalt.org/en/latest/#h5777746416576973633711c4a42414c\" target=\"_blank\">see this guide</a></h6>
                <div id=\"import-div\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\"><a href=\"#local-file\" data-toggle=\"tab\">Import local file</a></li>
                            </ul>
                            <br>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade in active\" id=\"local-file\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-5\">
                                            <input id=\"file-url\" type=\"file\" class=\"form-control\" accept=\".csv,.json\">
                                            <div class=\"alert alert-danger asn-error-msg hidden\" role=\"alert\"></div>
                                        </div>
                                        <div class=\"col-xs-3\" style=\"padding-left: 0px; text-align: right; line-height: 34px;\">
                                            <label> Framework to be associated</label>
                                        </div>
                                        ";
        // line 26
        $context["lastCreator"] = "";
        // line 27
        echo "                                        <div class=\"col-xs-4\">
                                            <select id=\"js-framework-to-association\" class=\"form-control\">
                                                <option value=\"all\">All</option>
                                                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lsDocs"]) || array_key_exists("lsDocs", $context) ? $context["lsDocs"] : (function () { throw new RuntimeError('Variable "lsDocs" does not exist.', 30, $this->source); })()));
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
            // line 31
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 31) != (isset($context["lastCreator"]) || array_key_exists("lastCreator", $context) ? $context["lastCreator"] : (function () { throw new RuntimeError('Variable "lastCreator" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "                                                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32)) {
                    echo "</ul></li>";
                }
                // line 33
                echo "                                                        <optgroup label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 33), "html", null, true);
                echo "\">
                                                                ";
                // line 34
                $context["lastCreator"] = twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 34);
                // line 35
                echo "                                                    ";
            }
            // line 36
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["framework"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></li>
                                                    ";
            // line 37
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37) == true) && (twig_get_attribute($this->env, $this->source, $context["framework"], "creator", [], "any", false, false, false, 37) != ""))) {
                // line 38
                echo "                                                        </optgroup>
                                                    ";
            }
            // line 40
            echo "                                                ";
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
        // line 41
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-import-csv\" onclick=\"SaltLocal.handleFile('local', 'file-url');\">Import Children</a>
                                </div>
                                <div id=\"github\" class=\"tab-pane fade\">
                                    <div class=\"panel panel-default\">
                                        <div class= \"panel-heading panel-title\">
                                            Repositories list
                                        </div>
                                        <div class=\"panel-body js-github-list\">
                                            <div id=\"repos\" class=\"hidden\"></div>
                                            <div id=\"files\" class=\"hidden\"></div>
                                            <p class=\"js-github-message-error\" style=\"display: none;\">
                                                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("github_login");
        echo "\">Login with your GitHub credentials</a>
                                            </p>
                                            <p class=\"js-github-message-loading\">Loading...</p>
                                        </div>
                                        <div class=\"panel-footer\">
                                            <a href=\"#\" onclick=\"listRepositories();\" class=\"repositories-list hidden\">List Repositories</a>
                                            <a href=\"#\" onclick=\"SaltGithub.getFiles(event, false);\" class=\"back hidden\"> - Go Back</a>
                                            <div id=\"pagination\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"errors hidden\">
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure the columns are there and labeled correctly
                    </div>
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure the trees are parsed correctly (pre-load and check)
                    </div>
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure a tree exists (might not need to be 'is child of', but can parse
                        the human coding scheme)
                    </div>
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure each row can be loaded as an item and association
                    </div>
                </div>
                <br>
                <div class=\"missing-fields\"></div>
                <div class=\"file-loading hidden\">
                    <div class=\"row\">
                        <div class=\"col-md-12\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
    <input type=\"hidden\" id=\"lsDocId\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["lsDocId"]) || array_key_exists("lsDocId", $context) ? $context["lsDocId"] : (function () { throw new RuntimeError('Variable "lsDocId" does not exist.', 102, $this->source); })()), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "framework/doc_tree/wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 102,  155 => 55,  139 => 41,  125 => 40,  121 => 38,  119 => 37,  112 => 36,  109 => 35,  107 => 34,  102 => 33,  97 => 32,  94 => 31,  77 => 30,  72 => 27,  70 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"addChildrenModal\" class=\"modal bs-example-modal-lg fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4>Import Items</h4>
            </div>
            <div class=\"modal-body fields-body-framework\">
                <h6>Note that the CSV importer does not import all CASE fields but is intended as a simple statement importer. Questions about fields? <a href=\"http://docs.opensalt.org/en/latest/#h5777746416576973633711c4a42414c\" target=\"_blank\">see this guide</a></h6>
                <div id=\"import-div\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\"><a href=\"#local-file\" data-toggle=\"tab\">Import local file</a></li>
                            </ul>
                            <br>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade in active\" id=\"local-file\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-5\">
                                            <input id=\"file-url\" type=\"file\" class=\"form-control\" accept=\".csv,.json\">
                                            <div class=\"alert alert-danger asn-error-msg hidden\" role=\"alert\"></div>
                                        </div>
                                        <div class=\"col-xs-3\" style=\"padding-left: 0px; text-align: right; line-height: 34px;\">
                                            <label> Framework to be associated</label>
                                        </div>
                                        {% set lastCreator = '' %}
                                        <div class=\"col-xs-4\">
                                            <select id=\"js-framework-to-association\" class=\"form-control\">
                                                <option value=\"all\">All</option>
                                                {% for framework in lsDocs %}
                                                    {% if framework.creator != lastCreator %}
                                                        {% if not loop.first %}</ul></li>{% endif %}
                                                        <optgroup label=\"{{ framework.creator }}\">
                                                                {% set lastCreator = framework.creator %}
                                                    {% endif %}
                                                    <option value=\"{{ framework.id }}\">{{ framework.title }}</a></li>
                                                    {% if loop.last == true and framework.creator != '' %}
                                                        </optgroup>
                                                    {% endif %}
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-import-csv\" onclick=\"SaltLocal.handleFile('local', 'file-url');\">Import Children</a>
                                </div>
                                <div id=\"github\" class=\"tab-pane fade\">
                                    <div class=\"panel panel-default\">
                                        <div class= \"panel-heading panel-title\">
                                            Repositories list
                                        </div>
                                        <div class=\"panel-body js-github-list\">
                                            <div id=\"repos\" class=\"hidden\"></div>
                                            <div id=\"files\" class=\"hidden\"></div>
                                            <p class=\"js-github-message-error\" style=\"display: none;\">
                                                <a href=\"{{ path('github_login') }}\">Login with your GitHub credentials</a>
                                            </p>
                                            <p class=\"js-github-message-loading\">Loading...</p>
                                        </div>
                                        <div class=\"panel-footer\">
                                            <a href=\"#\" onclick=\"listRepositories();\" class=\"repositories-list hidden\">List Repositories</a>
                                            <a href=\"#\" onclick=\"SaltGithub.getFiles(event, false);\" class=\"back hidden\"> - Go Back</a>
                                            <div id=\"pagination\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"errors hidden\">
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure the columns are there and labeled correctly
                    </div>
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure the trees are parsed correctly (pre-load and check)
                    </div>
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure a tree exists (might not need to be 'is child of', but can parse
                        the human coding scheme)
                    </div>
                    <div class=\"alert alert-warning hidden\" role=\"alert\">
                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Make sure each row can be loaded as an item and association
                    </div>
                </div>
                <br>
                <div class=\"missing-fields\"></div>
                <div class=\"file-loading hidden\">
                    <div class=\"row\">
                        <div class=\"col-md-12\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
    <input type=\"hidden\" id=\"lsDocId\" value=\"{{ lsDocId }}\">
</div>
", "framework/doc_tree/wizard.html.twig", "/var/www/html/templates/framework/doc_tree/wizard.html.twig");
    }
}
