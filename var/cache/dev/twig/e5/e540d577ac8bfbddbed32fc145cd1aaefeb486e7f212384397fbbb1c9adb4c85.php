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

/* layout/menu.html.twig */
class __TwigTemplate_8a8a392d9b61c2e706ff37c7535291a358a20eb0de9f1860a4bb5303eb930990 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar elevation-4 sidebar-dark-lightblue\">
\t<!-- Brand Logo -->
\t<a href=\"/\" class=\"brand-link\">
\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\"
\t\t\tclass=\"brand-image img-circle elevation-3\"
\t\t\tstyle=\"opacity: .8\">
\t\t<span class=\"brand-text font-weight-light\">VanKid</span>
\t</a>

\t<!-- Sidebar -->
\t<div class=\"sidebar\">
\t<!-- Sidebar user (optional) -->
\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t<div class=\"image\">
\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t</div>
\t\t<div class=\"info\">
\t\t\t<a href=\"#\" class=\"d-block\">Admin</a>
\t\t</div>
\t</div>
\t<!-- Sidebar Menu -->
\t<nav class=\"mt-2\">
\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\twith font-awesome or any other icon font library -->
\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\" class=\"nav-link ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", [0 => "_route"], "method", false, false, false, 27), "product_index")) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<i class=\"nav-icon fas fa-table\"></i>
\t\t\t\t\t<p>Products</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\" class=\"nav-link ";
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33), "category_index")) ? ("active") : (""));
        echo "\">
\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t<p>Categories</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
\t<!-- /.sidebar-menu -->
\t</div>
\t<!-- /.sidebar -->
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  77 => 27,  62 => 15,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"main-sidebar elevation-4 sidebar-dark-lightblue\">
\t<!-- Brand Logo -->
\t<a href=\"/\" class=\"brand-link\">
\t\t<img src=\"{{ asset('/dist/img/AdminLTELogo.png') }}\" alt=\"AdminLTE Logo\"
\t\t\tclass=\"brand-image img-circle elevation-3\"
\t\t\tstyle=\"opacity: .8\">
\t\t<span class=\"brand-text font-weight-light\">VanKid</span>
\t</a>

\t<!-- Sidebar -->
\t<div class=\"sidebar\">
\t<!-- Sidebar user (optional) -->
\t<div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
\t\t<div class=\"image\">
\t\t\t<img src=\"{{ asset('/dist/img/user2-160x160.jpg') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
\t\t</div>
\t\t<div class=\"info\">
\t\t\t<a href=\"#\" class=\"d-block\">Admin</a>
\t\t</div>
\t</div>
\t<!-- Sidebar Menu -->
\t<nav class=\"mt-2\">
\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
\t\t\t<!-- Add icons to the links using the .nav-icon class
\t\t\t\twith font-awesome or any other icon font library -->
\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t<a href=\"{{ path('product_index') }}\" class=\"nav-link {{ app.request.get('_route') == 'product_index' ? 'active' }}\">
\t\t\t\t\t<i class=\"nav-icon fas fa-table\"></i>
\t\t\t\t\t<p>Products</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t<a href=\"{{ path('category_index') }}\" class=\"nav-link {{ app.request.get('_route') == 'category_index' ? 'active' }}\">
\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t<p>Categories</p>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
\t<!-- /.sidebar-menu -->
\t</div>
\t<!-- /.sidebar -->
</aside>", "layout/menu.html.twig", "C:\\nginx\\www\\symfony5\\blog_dev\\templates\\layout\\menu.html.twig");
    }
}
