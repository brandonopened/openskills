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

/* site/about/about.html.twig */
class __TwigTemplate_b16e14cb119857797993d9919afdf0570e9d6457ccd49c443afbff2207e75cbd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site/about/about.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "site/about/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "About OpenSALT™";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>About OpenSALT™</h1>

    <section>
        <p>
            OpenSALT™ is a tool that allows for managing (importing, creating, editing, exporting) competency frameworks,
            create crosswalks etc with <a href=\"http://www.imsglobal.org/case\">IMS Global's Competencies and Academic Standards Exchange® (CASE®)</a> specification.
        </p>
    </section>

    <section>
        <h2>Open Source</h2>
        <p>
            The source code for OpenSALT™ is available from GitHub at <a href=\"https://github.com/opensalt\">https://github.com/opensalt</a>. For more information, see
            the <a href=\"http://www.opensalt.org\">project page</a>; for the master instance of OpenSALT™ see <a href=\"http://www.opensalt.net\">OpenSALT.net</a>
        </p>
    </section>

    <section>
        <h2>Collaborators</h2>
        <p>
            Multiple companies are collaborating on OpenSALT™ including:
            <ul>
                <li class=\"vcard\"><a class=\"org fn url\" href=\"http://www.publicconsultinggroup.com/education/\">Public Consulting Group</a></li>
                <li class=\"vcard\"><a class=\"org fn url\" href=\"https://www.act.org/\">ACT</a></li>
                <li class=\"vcard\"><a class=\"org fn url\" href=\"https://www.schoolcity.com/\">SchoolCity Inc.</a></li>
            </ul>
        </p>
    </section>

    <section>
        <h2>Credits</h2>
        <p>
            <ul>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/jmarks\"><span class=\"fn\">Joshua Marks</span> (<span class=\"org\">PCG</span>)</a>: Project Director</li>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/roverwolf\"><span class=\"fn\">David Ward</span> (<span class=\"org\">PCG</span>)</a>: Lead Developer</li>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/brandonopened\"><span class=\"fn\">Brandon Dorman</span> (<span class=\"org\">ACT</span>)</a>: Scrum Master and Development Director</li>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/peppersc\"><span class=\"fn\">Pepper Williams</span> (<span class=\"org\">SchoolCity</span>)</a>: UI/UX and Front End Development Lead</li>
                <li>
                    <span class=\"vcard\"><span class=\"fn\">Greg Nadeau</span> (<span class=\"org\">PCG</span>)</span>,
                    <span class=\"vcard\"><span class=\"fn\">Adam Blum</span> (<span class=\"org\">ACT</span>)</span>
                    and
                    <span class=\"vcard\"><span class=\"fn\">Vaseem Anjum</span> (<span class=\"org\">SchoolCity</span>)</span>
                    Executive Sponsors
                </li>
                <li>
                    <a href=\"http://www.koombea.com\">Koombea, Inc. contracted by ACT</a>:
                        Programmers <a href=\"https://github.com/JorgeLu1s\">Jorge Mejia</a>
                        and <a href=\"https://github.com/lmsilvera\">Luis Silvera</a>.
                        Program Manager Mario Tatis
                </li>
            </ul>
        </p>
    </section>

    <section>
        <h2>Trademarks</h2>
        <p>
          OpenSALT™ is a trademark of <a href=\"http://www.publicconsultinggroup.com/education/\" rel=\"nofollow\">Public Consulting Group</a>.
        </p>
        <p>
          Competencies and Academic Standards Exchange® (CASE®) is a registered trademark of the IMS Global Learning Consortium, Inc. (<a href=\"https://www.imsglobal.org\" rel=\"nofollow\">www.imsglobal.org</a>).
        </p>
    </section>

    <aside class=\"pull-right\">
        <p class=\"text-muted\">
            <small>OpenSALT™ ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["salt_version"]) || array_key_exists("salt_version", $context) ? $context["salt_version"] : (function () { throw new RuntimeError('Variable "salt_version" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "</small>
        </p>
    </aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "site/about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 72,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}About OpenSALT™{% endblock %}

{% block body %}
    <h1>About OpenSALT™</h1>

    <section>
        <p>
            OpenSALT™ is a tool that allows for managing (importing, creating, editing, exporting) competency frameworks,
            create crosswalks etc with <a href=\"http://www.imsglobal.org/case\">IMS Global's Competencies and Academic Standards Exchange® (CASE®)</a> specification.
        </p>
    </section>

    <section>
        <h2>Open Source</h2>
        <p>
            The source code for OpenSALT™ is available from GitHub at <a href=\"https://github.com/opensalt\">https://github.com/opensalt</a>. For more information, see
            the <a href=\"http://www.opensalt.org\">project page</a>; for the master instance of OpenSALT™ see <a href=\"http://www.opensalt.net\">OpenSALT.net</a>
        </p>
    </section>

    <section>
        <h2>Collaborators</h2>
        <p>
            Multiple companies are collaborating on OpenSALT™ including:
            <ul>
                <li class=\"vcard\"><a class=\"org fn url\" href=\"http://www.publicconsultinggroup.com/education/\">Public Consulting Group</a></li>
                <li class=\"vcard\"><a class=\"org fn url\" href=\"https://www.act.org/\">ACT</a></li>
                <li class=\"vcard\"><a class=\"org fn url\" href=\"https://www.schoolcity.com/\">SchoolCity Inc.</a></li>
            </ul>
        </p>
    </section>

    <section>
        <h2>Credits</h2>
        <p>
            <ul>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/jmarks\"><span class=\"fn\">Joshua Marks</span> (<span class=\"org\">PCG</span>)</a>: Project Director</li>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/roverwolf\"><span class=\"fn\">David Ward</span> (<span class=\"org\">PCG</span>)</a>: Lead Developer</li>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/brandonopened\"><span class=\"fn\">Brandon Dorman</span> (<span class=\"org\">ACT</span>)</a>: Scrum Master and Development Director</li>
                <li class=\"vcard\"><a class=\"url\" href=\"https://github.com/peppersc\"><span class=\"fn\">Pepper Williams</span> (<span class=\"org\">SchoolCity</span>)</a>: UI/UX and Front End Development Lead</li>
                <li>
                    <span class=\"vcard\"><span class=\"fn\">Greg Nadeau</span> (<span class=\"org\">PCG</span>)</span>,
                    <span class=\"vcard\"><span class=\"fn\">Adam Blum</span> (<span class=\"org\">ACT</span>)</span>
                    and
                    <span class=\"vcard\"><span class=\"fn\">Vaseem Anjum</span> (<span class=\"org\">SchoolCity</span>)</span>
                    Executive Sponsors
                </li>
                <li>
                    <a href=\"http://www.koombea.com\">Koombea, Inc. contracted by ACT</a>:
                        Programmers <a href=\"https://github.com/JorgeLu1s\">Jorge Mejia</a>
                        and <a href=\"https://github.com/lmsilvera\">Luis Silvera</a>.
                        Program Manager Mario Tatis
                </li>
            </ul>
        </p>
    </section>

    <section>
        <h2>Trademarks</h2>
        <p>
          OpenSALT™ is a trademark of <a href=\"http://www.publicconsultinggroup.com/education/\" rel=\"nofollow\">Public Consulting Group</a>.
        </p>
        <p>
          Competencies and Academic Standards Exchange® (CASE®) is a registered trademark of the IMS Global Learning Consortium, Inc. (<a href=\"https://www.imsglobal.org\" rel=\"nofollow\">www.imsglobal.org</a>).
        </p>
    </section>

    <aside class=\"pull-right\">
        <p class=\"text-muted\">
            <small>OpenSALT™ {{ salt_version }}</small>
        </p>
    </aside>
{% endblock %}
", "site/about/about.html.twig", "/var/www/html/templates/site/about/about.html.twig");
    }
}
