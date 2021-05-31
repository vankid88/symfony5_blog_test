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

/* layout/header.html.twig */
class __TwigTemplate_be6931f674f5694b189e6248293941fc70cc641eed2f264978a7c496aca26d2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 1
        echo "<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t<!-- Left navbar links -->
\t<ul class=\"navbar-nav\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
\t</li>
\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t<a href=\"../../index3.html\" class=\"nav-link\">Home</a>
\t</li>
\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
\t</li>
\t</ul>

\t<!-- SEARCH FORM -->
\t<form class=\"form-inline ml-3\">
\t<div class=\"input-group input-group-sm\">
\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t<div class=\"input-group-append\">
\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t<i class=\"fas fa-search\"></i>
\t\t</button>
\t\t</div>
\t</div>
\t</form>

\t<!-- Right navbar links -->
\t<ul class=\"navbar-nav ml-auto\">
\t<!-- Messages Dropdown Menu -->
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t<i class=\"far fa-comments\"></i>
\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t</a>
\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<!-- Message Start -->
\t\t\t<div class=\"media\">
\t\t\t<img src=\"../../dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t<div class=\"media-body\">
\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\tBrad Diesel
\t\t\t\t<span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t<p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Message End -->
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<!-- Message Start -->
\t\t\t<div class=\"media\">
\t\t\t<img src=\"../../dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t<div class=\"media-body\">
\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\tJohn Pierce
\t\t\t\t<span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t<p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Message End -->
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<!-- Message Start -->
\t\t\t<div class=\"media\">
\t\t\t<img src=\"../../dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t<div class=\"media-body\">
\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\tNora Silvester
\t\t\t\t<span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t<p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Message End -->
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t</div>
\t</li>
\t<!-- Notifications Dropdown Menu -->
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t</a>
\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<i class=\"fas fa-envelope mr-2\"></i> 4 new messages
\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<i class=\"fas fa-users mr-2\"></i> 8 friend requests
\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<i class=\"fas fa-file mr-2\"></i> 3 new reports
\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
\t\t<i class=\"fas fa-th-large\"></i>
\t\t</a>
\t</li>
\t</ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
\t<!-- Left navbar links -->
\t<ul class=\"navbar-nav\">
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
\t</li>
\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t<a href=\"../../index3.html\" class=\"nav-link\">Home</a>
\t</li>
\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t<a href=\"#\" class=\"nav-link\">Contact</a>
\t</li>
\t</ul>

\t<!-- SEARCH FORM -->
\t<form class=\"form-inline ml-3\">
\t<div class=\"input-group input-group-sm\">
\t\t<input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t<div class=\"input-group-append\">
\t\t<button class=\"btn btn-navbar\" type=\"submit\">
\t\t\t<i class=\"fas fa-search\"></i>
\t\t</button>
\t\t</div>
\t</div>
\t</form>

\t<!-- Right navbar links -->
\t<ul class=\"navbar-nav ml-auto\">
\t<!-- Messages Dropdown Menu -->
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t<i class=\"far fa-comments\"></i>
\t\t<span class=\"badge badge-danger navbar-badge\">3</span>
\t\t</a>
\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<!-- Message Start -->
\t\t\t<div class=\"media\">
\t\t\t<img src=\"../../dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
\t\t\t<div class=\"media-body\">
\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\tBrad Diesel
\t\t\t\t<span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-sm\">Call me whenever you can...</p>
\t\t\t\t<p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Message End -->
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<!-- Message Start -->
\t\t\t<div class=\"media\">
\t\t\t<img src=\"../../dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t<div class=\"media-body\">
\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\tJohn Pierce
\t\t\t\t<span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-sm\">I got your message bro</p>
\t\t\t\t<p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Message End -->
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<!-- Message Start -->
\t\t\t<div class=\"media\">
\t\t\t<img src=\"../../dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
\t\t\t<div class=\"media-body\">
\t\t\t\t<h3 class=\"dropdown-item-title\">
\t\t\t\tNora Silvester
\t\t\t\t<span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
\t\t\t\t</h3>
\t\t\t\t<p class=\"text-sm\">The subject goes here</p>
\t\t\t\t<p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Message End -->
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
\t\t</div>
\t</li>
\t<!-- Notifications Dropdown Menu -->
\t<li class=\"nav-item dropdown\">
\t\t<a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t<i class=\"far fa-bell\"></i>
\t\t\t<span class=\"badge badge-warning navbar-badge\">15</span>
\t\t</a>
\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
\t\t<span class=\"dropdown-item dropdown-header\">15 Notifications</span>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<i class=\"fas fa-envelope mr-2\"></i> 4 new messages
\t\t\t<span class=\"float-right text-muted text-sm\">3 mins</span>
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<i class=\"fas fa-users mr-2\"></i> 8 friend requests
\t\t\t<span class=\"float-right text-muted text-sm\">12 hours</span>
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t<i class=\"fas fa-file mr-2\"></i> 3 new reports
\t\t\t<span class=\"float-right text-muted text-sm\">2 days</span>
\t\t</a>
\t\t<div class=\"dropdown-divider\"></div>
\t\t<a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
\t\t</div>
\t</li>
\t<li class=\"nav-item\">
\t\t<a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
\t\t<i class=\"fas fa-th-large\"></i>
\t\t</a>
\t</li>
\t</ul>
</nav>", "layout/header.html.twig", "C:\\nginx\\www\\symfony5\\blog_dev\\templates\\layout\\header.html.twig");
    }
}
