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

/* product/_form.html.twig */
class __TwigTemplate_e1ec7e1ccffa6bc14baaeeef8a7ca2884c743ab18e81479d65af0d2778d73dac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"col-6\">
        <div class=\"form-group\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "category", [], "any", false, false, false, 4), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "price", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "photo", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <a class=\"btn btn-sm btn-default\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Back to list</a>

        <button class=\"btn btn-sm btn-primary\">";
        // line 24
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 24, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
    </div>

";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  87 => 24,  82 => 22,  77 => 20,  70 => 16,  63 => 12,  56 => 8,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"col-6\">
        <div class=\"form-group\">
            {{ form_row(form.category, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(form.price, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(form.description, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_row(form.photo, {'attr': {'class': 'form-control'}}) }}
        </div>
        <a class=\"btn btn-sm btn-default\" href=\"{{ path('product_index') }}\">Back to list</a>

        <button class=\"btn btn-sm btn-primary\">{{ button_label|default('Save') }}</button>
    </div>

{{ form_end(form) }}", "product/_form.html.twig", "C:\\nginx\\www\\symfony5\\blog_dev\\templates\\product\\_form.html.twig");
    }
}
