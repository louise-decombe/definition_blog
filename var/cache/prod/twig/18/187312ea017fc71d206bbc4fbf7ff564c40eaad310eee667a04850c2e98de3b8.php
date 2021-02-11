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
class __TwigTemplate_35b2d4530f5b82126e5dddc4cb0bf26378b46ab71204937a0df8b42cbc56eb70 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/address.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes adresses";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo ". </br> c'est dans cet espace que vous pouvez gérez toutes vos adresses. </p>
<br>

<hr>

";
        // line 17
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17), "addresses", [], "any", false, false, false, 17)), 0))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "addresses", [], "any", false, false, false, 24));
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
        return array (  140 => 46,  137 => 45,  131 => 41,  118 => 34,  114 => 33,  107 => 31,  103 => 30,  99 => 29,  93 => 25,  89 => 24,  85 => 22,  79 => 18,  77 => 17,  69 => 12,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/address.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/account/address.html.twig");
    }
}
