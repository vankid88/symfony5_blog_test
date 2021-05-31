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

/* home/homepage.html.twig */
class __TwigTemplate_c64c5067ab1c7a30754e34404b573c19dd88cefedbc9638b61b9caa0a21e55bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/homepage.html.twig"));

        $this->parent = $this->loadTemplate("layout/default.html.twig", "home/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Product index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "\t

\t<h5 class=\"mb-2 mt-4\">Small Box</h5>
\t\t<div class=\"row\">
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-info\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>150</h3>

\t\t\t\t<p>New Orders</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-success\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup></h3>

\t\t\t\t<p>Bounce Rate</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-warning\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>44</h3>

\t\t\t\t<p>User Registrations</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"fas fa-user-plus\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-danger\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>65</h3>

\t\t\t\t<p>Unique Visitors</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"fas fa-chart-pie\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 10,  118 => 9,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/default.html.twig' %}

{% block pageTitle %}Product index{% endblock %}

{% block title  %}Home{% endblock %}

{% block breadcrumb %} {% endblock %}

{% block content %}
\t

\t<h5 class=\"mb-2 mt-4\">Small Box</h5>
\t\t<div class=\"row\">
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-info\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>150</h3>

\t\t\t\t<p>New Orders</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"fas fa-shopping-cart\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-success\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>53<sup style=\"font-size: 20px\">%</sup></h3>

\t\t\t\t<p>Bounce Rate</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"ion ion-stats-bars\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-warning\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>44</h3>

\t\t\t\t<p>User Registrations</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"fas fa-user-plus\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t<div class=\"col-lg-3 col-6\">
\t\t\t<!-- small card -->
\t\t\t<div class=\"small-box bg-danger\">
\t\t\t<div class=\"inner\">
\t\t\t\t<h3>65</h3>

\t\t\t\t<p>Unique Visitors</p>
\t\t\t</div>
\t\t\t<div class=\"icon\">
\t\t\t\t<i class=\"fas fa-chart-pie\"></i>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"small-box-footer\">
\t\t\t\tMore info <i class=\"fas fa-arrow-circle-right\"></i>
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- ./col -->
\t\t</div>
{% endblock %}", "home/homepage.html.twig", "C:\\nginx\\www\\symfony5\\blog_dev\\templates\\home\\homepage.html.twig");
    }
}
