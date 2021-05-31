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

/* security/login.html.twig */
class __TwigTemplate_d38508d2fcd68624704f8fef3861e5890f0c780764bfee3a1e89cdd037bd0a2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout/auth.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t<form method=\"post\">
\t\t";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 10
        echo "
\t\t";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "\t\t\t<div class=\"mb-3\">
\t\t\t\tYou are logged in as ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t</div>
\t\t";
        }
        // line 16
        echo "
\t\t<div class=\"input-group mb-3\">
\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" required autofocus />
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t<span class=\"fas fa-envelope\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"input-group mb-3\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\"  name=\"password\" id=\"inputPassword\" required />
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t<span class=\"fas fa-lock\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
\t\t\t\t<div class=\"icheck-primary\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember\">
\t\t\t\t\t<label for=\"remember\">
\t\t\t\t\t\tRemember Me
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
\t</form>
\t<p class=\"mb-1\">
\t\t<a href=\"/\">I forgot my password</a>
\t</p>
\t<p class=\"mb-0\">
\t\t<a href=\"/\" class=\"text-center\">Register a new membership</a>
\t</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  119 => 18,  115 => 16,  107 => 13,  104 => 12,  102 => 11,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/auth.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block content %}
\t<form method=\"post\">
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t{% endif %}

\t\t{% if app.user %}
\t\t\t<div class=\"mb-3\">
\t\t\t\tYou are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t</div>
\t\t{% endif %}

\t\t<div class=\"input-group mb-3\">
\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" required autofocus />
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t<span class=\"fas fa-envelope\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"input-group mb-3\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\"  name=\"password\" id=\"inputPassword\" required />
\t\t\t<div class=\"input-group-append\">
\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t<span class=\"fas fa-lock\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-8\">
\t\t\t\t<div class=\"icheck-primary\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember\">
\t\t\t\t\t<label for=\"remember\">
\t\t\t\t\t\tRemember Me
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-4\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />
\t</form>
\t<p class=\"mb-1\">
\t\t<a href=\"/\">I forgot my password</a>
\t</p>
\t<p class=\"mb-0\">
\t\t<a href=\"/\" class=\"text-center\">Register a new membership</a>
\t</p>
{% endblock %}", "security/login.html.twig", "C:\\nginx\\www\\symfony5\\blog_dev\\templates\\security\\login.html.twig");
    }
}
