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

/* system_log/show_system_logs.html.twig */
class __TwigTemplate_5446adc701f1b4f4b85dffe38e3cee04a454ed4314d4d8c89974a0b401091916 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "system_log/show_system_logs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "system_log/show_system_logs.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "system_log/show_system_logs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>System Logs</h1>

<div class=\"row system-log-view\" id=\"systemLogView\">
    <div class=\"col-sm-12\">
        <table id=\"systemLogTable\" class=\"table table-bordered table-striped table-hover\" data-order='[[0, \"desc\"]]'>
            <thead>
            ";
        // line 11
        echo "            <th>Date / Time</th>
            <th>Change</th>
            <th>User</th>
            </thead>
        </table>
        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("system_logs_csv");
        echo "\" class=\"btn btn-large btn-default btn-export btn-export-csv\">Export</a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script>
        if (\$.fn.dataTable.isDataTable('#systemLogTable')) {
            \$('#systemLogTable').DataTable().clear().ajax.reload();
        } else {
            \$('#systemLogTable').DataTable({
                ajax: \"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("system_logs_json");
        echo "\",
                dataSrc: 'data',
                columns: [
                    //{ data: 'rev' },
                    {
                        data: 'changed_at',
                        render: function(data, type, row) {
                            if (\"display\" !== type && \"filter\" !== type) {
                                return data;
                            }

                            function addZero(num) {
                                return (num >=0 && num < 10) ? \"0\" + num : num + \"\";
                            }

                            let ts = new Date(data.replace(\" \", \"T\").replace(/\\..*\$/, \"Z\"));
                            return [
                                [ts.getFullYear(), addZero(ts.getMonth() + 1), addZero(ts.getDate())].join('-'),
                                [addZero(ts.getHours()), addZero(ts.getMinutes()), addZero(ts.getSeconds())].join(':')
                            ].join(\" \");
                        }
                    },
                    { data: 'description' },
                    { data: 'username' }
                ],
                retrieve: true
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "system_log/show_system_logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  108 => 22,  98 => 21,  84 => 16,  77 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block body %}
<h1>System Logs</h1>

<div class=\"row system-log-view\" id=\"systemLogView\">
    <div class=\"col-sm-12\">
        <table id=\"systemLogTable\" class=\"table table-bordered table-striped table-hover\" data-order='[[0, \"desc\"]]'>
            <thead>
            {#<th>Rev</th>#}
            <th>Date / Time</th>
            <th>Change</th>
            <th>User</th>
            </thead>
        </table>
        <a href=\"{{ path('system_logs_csv') }}\" class=\"btn btn-large btn-default btn-export btn-export-csv\">Export</a>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script>
        if (\$.fn.dataTable.isDataTable('#systemLogTable')) {
            \$('#systemLogTable').DataTable().clear().ajax.reload();
        } else {
            \$('#systemLogTable').DataTable({
                ajax: \"{{ path('system_logs_json') }}\",
                dataSrc: 'data',
                columns: [
                    //{ data: 'rev' },
                    {
                        data: 'changed_at',
                        render: function(data, type, row) {
                            if (\"display\" !== type && \"filter\" !== type) {
                                return data;
                            }

                            function addZero(num) {
                                return (num >=0 && num < 10) ? \"0\" + num : num + \"\";
                            }

                            let ts = new Date(data.replace(\" \", \"T\").replace(/\\..*\$/, \"Z\"));
                            return [
                                [ts.getFullYear(), addZero(ts.getMonth() + 1), addZero(ts.getDate())].join('-'),
                                [addZero(ts.getHours()), addZero(ts.getMinutes()), addZero(ts.getSeconds())].join(':')
                            ].join(\" \");
                        }
                    },
                    { data: 'description' },
                    { data: 'username' }
                ],
                retrieve: true
            });
        }
    </script>
{% endblock %}
", "system_log/show_system_logs.html.twig", "/var/www/html/templates/system_log/show_system_logs.html.twig");
    }
}
