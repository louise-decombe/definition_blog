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

/* account/address.html.twig */
class __TwigTemplate_37d5c860cc0f523638e1baf9cf199194da8b125b2bfa8e99b7a6009ec0ced4b9 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address.html.twig", 1);
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

        echo "Mes adresses";
        
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
        echo "
<div class=\"container-account\">
<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
        echo "\" class=\"btn btn-info small float-right\"> ajouter une adresse </a>

<h1> Mes adresses </h1>

<p> Bienvenue ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo ". </br> c'est dans cet espace que vous pouvez gérez toutes vos adresses. </p>
<br>

<hr>

";
        // line 17
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "addresses", [], "any", false, false, false, 17)), 0))) {
            // line 18
            echo "
<p> Vous n'avez pas d'adresse pour le moment, veuillez en ajouter une. </p> 

";
        } else {
            // line 22
            echo "<div class=\"row\">

";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "addresses", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 25
                echo "
<div class=\"col-col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <div class=\"card-body\">
    <h5 class=\"card-title\"> ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</h5>
    <p class=\"card-text\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 30), "html", null, true);
                echo "</p> <br>
        <p class=\"card-text\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postal", [], "any", false, false, false, 31), "html", null, true);
                echo "</p><p class=\"card-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 31), "html", null, true);
                echo "</p> <br>

    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">Modifier</a>
        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">Supprimer</a>

  </div>
</div>
</div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "</div>


 ";
        }
        // line 45
        echo "</div>
<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"> Retour </a>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 46,  167 => 45,  161 => 41,  148 => 34,  144 => 33,  137 => 31,  133 => 30,  129 => 29,  123 => 25,  119 => 24,  115 => 22,  109 => 18,  107 => 17,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes adresses{% endblock %}

{% block content %}

<div class=\"container-account\">
<a href=\"{{ path('account_address_add')}}\" class=\"btn btn-info small float-right\"> ajouter une adresse </a>

<h1> Mes adresses </h1>

<p> Bienvenue {{ app.user.firstname}}. </br> c'est dans cet espace que vous pouvez gérez toutes vos adresses. </p>
<br>

<hr>

{% if app.user.addresses|length == 0 %}

<p> Vous n'avez pas d'adresse pour le moment, veuillez en ajouter une. </p> 

{% else %}
<div class=\"row\">

{% for address in app.user.addresses %}

<div class=\"col-col-md-4\">
<div class=\"card\" style=\"width: 18rem;\">
  <div class=\"card-body\">
    <h5 class=\"card-title\"> {{ address.name }}</h5>
    <p class=\"card-text\">{{ address.address }}</p> <br>
        <p class=\"card-text\">{{ address.postal }}</p><p class=\"card-text\">{{ address.city }}</p> <br>

    <a href=\"{{path('account_address_edit', {'id' : address.id })}}\" class=\"btn btn-secondary\">Modifier</a>
        <a href=\"{{ path('account_address_delete', { 'id' : address.id })  }}\" class=\"btn btn-warning\">Supprimer</a>

  </div>
</div>
</div>

{% endfor %}
</div>


 {% endif %}
</div>
<a href=\"{{ path('account') }}\"> Retour </a>
 
{% endblock %}
", "account/address.html.twig", "/opt/lampp/htdocs/definition-blog/templates/account/address.html.twig");
    }
}
