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

/* cart/index.html.twig */
class __TwigTemplate_6706e6e12eeeef7d3ebbd6756c5135468eff6a926379e6fc01065b5967b3f87a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Panier";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h1> Panier </h1>
<p> produits ajoutés au panier </p>

";
        // line 9
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["cart"] ?? null)), 0))) {
            // line 10
            echo "
<table class=\"table mt-3\">
  <thead>
    <tr>
          <th scope=\"col\"></th>

      <th scope=\"col\">nom du produit</th>
      <th scope=\"col\">quantité</th>
      <th scope=\"col\">prix</th>
      <th scope=\"col\">total</th>
      <th scope=\"col\"></th>


    </tr>
  </thead>
  <tbody>
  ";
            // line 26
            $context["total"] = null;
            // line 27
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 28
                echo "    <tr>
    <th> <img src=\"/uploads/";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "illustration", [], "any", false, false, false, 29), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                echo "\" height=\"150px\"><br></th>
      <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
      <td>    
      <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">
        <img src=\" ";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/picture/minus.png"), "html", null, true);
                echo " \" alt=\"minus\" width=\"20px\" /></a>
";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34), "html", null, true);
                echo "
<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">
  <img src=\" ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/picture/plus.png"), "html", null, true);
                echo " \" alt=\"plus\" width=\"20px\" /></a>
</td>
      <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "price", [], "any", false, false, false, 38) / 100), 2), "html", null, true);
                echo "euros</td>
      <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "price", [], "any", false, false, false, 39) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39)) / 100), 2), "html", null, true);
                echo "euros</td>
      <td>      <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\"><img src=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/picture/delete.png"), "html", null, true);
                echo " \" alt=\"supprimer\" width=\"20px\" /></a>
  </td>
    </tr>

    ";
                // line 44
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "price", [], "any", false, false, false, 44) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44)));
                // line 45
                echo "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  </tbody>
</table>

<div class=\"text-right\">
nombre de produit: ";
            // line 50
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["cart"] ?? null)), "html", null, true);
            echo "
</br>
total de mon panier : ";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2), "html", null, true);
            echo " euros.
<br>
<a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            echo "\" class=\"btn btn-primary\">Paiement</a>
 </div>

<!-- si est vide  -->

 ";
        } else {
            // line 60
            echo "
<hr> 
<p> Pas de produits dans votre panier pour le moment </p>

";
        }
        // line 65
        echo "
";
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 65,  175 => 60,  166 => 54,  161 => 52,  156 => 50,  150 => 46,  144 => 45,  142 => 44,  133 => 40,  129 => 39,  125 => 38,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  99 => 30,  93 => 29,  90 => 28,  85 => 27,  83 => 26,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/cart/index.html.twig");
    }
}
