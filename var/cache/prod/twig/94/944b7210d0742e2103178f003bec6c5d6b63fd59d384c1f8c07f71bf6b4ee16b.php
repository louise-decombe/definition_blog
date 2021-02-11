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

/* product/index.html.twig */
class __TwigTemplate_3bc908dd9de7a277ae8c0c2d156360020fabd2855bb1a135192340ac99c53767 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos produits";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"row\">
<div class=\"col-md-3\">
<h1> Futur filtre </h1> 


</div>
<div class=\"col-md-9\">

<h1> Nos produits </h1>

<div class=\"row\"> 
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "
<div class=\"col-md-4\"> 

<div class=\"product-item text-center\"> 

<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><img src=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"image produit\" class=\"img-fluid\" width=\"\"></a>
<h4> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo " </h4>
<span> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subtitle", [], "any", false, false, false, 26), "html", null, true);
            echo " </span> <hr>
";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27) / 100), 2), "html", null, true);
            echo "euros
</div>   

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>

</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  97 => 27,  93 => 26,  89 => 25,  83 => 24,  76 => 19,  72 => 18,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/index.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/product/index.html.twig");
    }
}
