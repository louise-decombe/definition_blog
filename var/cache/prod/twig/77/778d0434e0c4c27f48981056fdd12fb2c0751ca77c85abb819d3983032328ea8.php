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

/* account/order_show.html.twig */
class __TwigTemplate_3546e1cba73e8760a8857ad18b1db36a2d071f59ecd995be1d2f0cafbf3bd070 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes commandes";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container-account\">

<h1> Ma commande n°";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 9), "html", null, true);
        echo ". </h1>

<br>
<p> Commande passée le :  ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
        echo " </p> <br>
<p> Référence : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 13), "html", null, true);
        echo "  </p>
<hr>
<p> Détails </p>


<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">Titre du livre</th>
      <th scope=\"col\">quantité</th>
      <th scope=\"col\">prix unitaire</th>
      <th scope=\"col\">prix total</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "    <tr>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32) / 100), 2), "html", null, true);
            echo "euro</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 33) / 100), 2), "html", null, true);
            echo "euro</td>

    </tr>
   
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </tbody>
</table>

<div class=\"text-right\"> Montant total de la commande :  <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 41) / 100), 2), "html", null, true);
        echo "euro</td>
 </div>

<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\"> Retour </a>
 
";
    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  126 => 41,  121 => 38,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  95 => 29,  91 => 28,  73 => 13,  69 => 12,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/account/order_show.html.twig");
    }
}
