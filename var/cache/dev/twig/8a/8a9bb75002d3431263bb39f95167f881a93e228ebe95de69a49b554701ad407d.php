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

/* layout/default.html.twig */
class __TwigTemplate_dccf61061e478b9e7bbfe755a78fa4965db5b7b49c0549daa2e21917f933040d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/default.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/default.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>
\t\t";
        // line 5
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 8
        echo "\t</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
\t";
        // line 22
        $this->displayBlock('javascript', $context, $blocks);
        // line 32
        echo "
</head>
<body class=\"sidebar-mini control-sidebar-slide-open accent-primary\">
\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 6
        echo "\t\t\tVanKid | ECM
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t<!-- Font Awesome -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/css/fontawesome.css"), "html", null, true);
        echo "\">
\t\t<!-- Ionicons -->
\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 23
        echo "\t\t<!-- jQuery -->
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "\t\t
\t\t";
        // line 37
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "

\t\t";
        // line 39
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "
\t\t

\t\t<div class=\"content-wrapper\">
\t\t\t<!-- Content Header (Page header) -->
\t\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h1>";
        // line 48
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Home</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\">";
        // line 53
        $this->displayBlock('breadcrumb', $context, $blocks);
        echo "</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- Main content -->
\t\t\t<section class=\"content\">
\t\t\t\t<!-- Default box -->
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t";
        // line 70
        echo twig_include($this->env, $context, "layout/footer.html.twig");
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Title ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " Title ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  297 => 65,  278 => 53,  259 => 48,  247 => 70,  241 => 66,  239 => 65,  224 => 53,  216 => 48,  204 => 39,  199 => 37,  196 => 36,  186 => 35,  174 => 30,  169 => 28,  164 => 26,  159 => 24,  156 => 23,  146 => 22,  132 => 17,  125 => 13,  121 => 12,  118 => 11,  108 => 10,  97 => 6,  87 => 5,  76 => 72,  74 => 35,  69 => 32,  67 => 22,  64 => 21,  62 => 10,  58 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>
\t\t{% block pageTitle %}
\t\t\tVanKid | ECM
\t\t{% endblock %}
\t</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t{% block stylesheets %}
\t\t<!-- Font Awesome -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('/plugins/fontawesome-free/css/all.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('/dist/css/fontawesome.css') }}\">
\t\t<!-- Ionicons -->
\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('/dist/css/adminlte.min.css') }}\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t{% endblock %}

\t{% block javascript %}
\t\t<!-- jQuery -->
\t\t<script src=\"{{ asset('/plugins/jquery/jquery.min.js') }}\"></script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"{{ asset('/dist/js/adminlte.min.js') }}\"></script>
\t\t<!-- AdminLTE for demo purposes -->
\t\t<script src=\"{{ asset('/dist/js/demo.js') }}\"></script>
\t{% endblock %}

</head>
<body class=\"sidebar-mini control-sidebar-slide-open accent-primary\">
\t{% block body %}
\t\t
\t\t{{ include('layout/header.html.twig') }}

\t\t{{ include('layout/menu.html.twig') }}
\t\t

\t\t<div class=\"content-wrapper\">
\t\t\t<!-- Content Header (Page header) -->
\t\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<h1>{% block title %} Title {% endblock %}</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Home</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\">{% block breadcrumb %} Title {% endblock %}</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- Main content -->
\t\t\t<section class=\"content\">
\t\t\t\t<!-- Default box -->
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t{{ include('layout/footer.html.twig') }}
\t{% endblock %}
</body>
</html>", "layout/default.html.twig", "C:\\nginx\\www\\symfony5\\blog_dev\\templates\\layout\\default.html.twig");
    }
}
