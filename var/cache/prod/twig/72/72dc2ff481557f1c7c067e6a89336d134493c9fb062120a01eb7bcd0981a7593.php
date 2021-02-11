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

/* product/show.html.twig */
class __TwigTemplate_365aeeb0ec5b5dcfa486408880605eca286696bcd41003569e34ec490bafbc94 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"row\">
<div class=\"col-md-5\">

<!-- illustration miniature des articles -->

<img src=\"/uploads/";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "illustration", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\"img-fluid\">
</div>
<div class=\"col-md-7 my-auto\">
<h1> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo " </h1>
<p> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "subtitle", [], "any", false, false, false, 16), "html", null, true);
        echo " </p>

<!-- Prix des articles + formatage en euros -->

";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "price", [], "any", false, false, false, 20) / 100), 2), "html", null, true);
        echo "euros

 <hr>
    <p> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        echo " </p>
    <hr>
<!-- AJOUT PANIER -->
<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\" class=\"btn btn-primary\"> Ajouter au panier </a>
    </div>
</div>
<div><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Retour aux produits</a> </div>

";
    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  97 => 26,  91 => 23,  85 => 20,  78 => 16,  74 => 15,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/show.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/product/show.html.twig");
    }
}
