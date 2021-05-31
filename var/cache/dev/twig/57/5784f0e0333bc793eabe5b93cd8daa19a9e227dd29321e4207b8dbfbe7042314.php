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

/* layout/auth.html.twig */
class __TwigTemplate_3b23bff281efef48e7e91fffe388a103b14710c7320b8eed107b1b91b1556d30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/auth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/auth.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>VANKID | Log in</title>
\t<!-- Tell the browser to be responsive to screen width -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<!-- Font Awesome -->
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
\t<!-- Ionicons -->
\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t<!-- icheck bootstrap -->
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
\t<!-- Theme style -->
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
\t<!-- Google Font: Source Sans Pro -->
\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

\t<!-- jQuery -->
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap 4 -->
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- AdminLTE App -->
\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body class=\"hold-transition login-page text-sm\">
\t<div class=\"login-box\">
\t\t<div class=\"login-logo\">
\t\t\t<a href=\"/\"><b>VANKID</b> ADMIN</a>
\t\t</div>
\t\t<!-- /.login-logo -->
\t\t<div class=\"card\">
\t\t\t<div class=\"card-body login-card-body\">
\t\t\t\t<p class=\"login-box-msg\">Sign in to start your session</p>

\t\t\t\t
\t\t\t\t";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "\t\t\t</div>
\t\t\t<!-- /.login-card-body -->
\t\t</div>
\t</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  104 => 40,  102 => 39,  86 => 26,  81 => 24,  76 => 22,  68 => 17,  63 => 15,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>VANKID | Log in</title>
\t<!-- Tell the browser to be responsive to screen width -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<!-- Font Awesome -->
\t<link rel=\"stylesheet\" href=\"{{ asset('/plugins/fontawesome-free/css/all.min.css') }}\">
\t<!-- Ionicons -->
\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t<!-- icheck bootstrap -->
\t<link rel=\"stylesheet\" href=\"{{ asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
\t<!-- Theme style -->
\t<link rel=\"stylesheet\" href=\"{{ asset('/dist/css/adminlte.min.css') }}\">
\t<!-- Google Font: Source Sans Pro -->
\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

\t<!-- jQuery -->
\t<script src=\"{{ asset('/plugins/jquery/jquery.min.js') }}\"></script>
\t<!-- Bootstrap 4 -->
\t<script src=\"{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t<!-- AdminLTE App -->
\t<script src=\"{{ asset('/dist/js/adminlte.min.js') }}\"></script>
</head>
<body class=\"hold-transition login-page text-sm\">
\t<div class=\"login-box\">
\t\t<div class=\"login-logo\">
\t\t\t<a href=\"/\"><b>VANKID</b> ADMIN</a>
\t\t</div>
\t\t<!-- /.login-logo -->
\t\t<div class=\"card\">
\t\t\t<div class=\"card-body login-card-body\">
\t\t\t\t<p class=\"login-box-msg\">Sign in to start your session</p>

\t\t\t\t
\t\t\t\t{% block content %} {% endblock %}
\t\t\t</div>
\t\t\t<!-- /.login-card-body -->
\t\t</div>
\t</div>
</body>
</html>", "layout/auth.html.twig", "C:\\nginx\\www\\symfony5\\blog_dev\\templates\\layout\\auth.html.twig");
    }
}
