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

/* account/order.html.twig */
class __TwigTemplate_746d41d534c6674c89b426c28e96c563fb67b6f52bc293ae679b6a6dc65b0b4f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

<h1> Mes commandes. </h1>

<p> Bienvenue ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "firstname", [], "any", false, false, false, 11), "html", null, true);
        echo ". </br> c'est dans cet espace que vous pouvez gérez toutes vos commandes. </p>
<br>

<hr>

";
        // line 16
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["orders"] ?? null)), 0))) {
            // line 17
            echo "
<p> Vous n'avez pas de commandes pour le moment.   </p> 

";
        } else {
            // line 21
            echo "<table class=\"table mt-3\">
  <thead>
    <tr>
      <th scope=\"col\">Passée le </th>
      <th scope=\"col\">Référence</th>
            <th scope=\"col\">Statut</th>

      <th scope=\"col\">Produit(s)</th>
      <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>

    </tr>
  </thead>
    <tbody>

";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 37
                echo "
    <tr>
      <th scope=\"row\"> ";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
                echo " </th>
      <td> ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 40), "html", null, true);
                echo " </td>
            <td>
            
            ";
                // line 43
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 43), 1))) {
                    // line 44
                    echo "payée
            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 45
$context["order"], "state", [], "any", false, false, false, 45), 2))) {
                    // line 46
                    echo "en cours de préparation
                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 47
$context["order"], "state", [], "any", false, false, false, 47), 3))) {
                    // line 48
                    echo "
            prête
            ";
                }
                // line 51
                echo "             </td>

      <td> ";
                // line 53
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 53)), "html", null, true);
                echo " </td>
      <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 54) / 100), 2), "html", null, true);
                echo "</td>
            <td> <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\"> Voir plus </a></td>
    </tr>
 

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo " </tbody>
</table>

 ";
        }
        // line 64
        echo "</div>
<a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"> Retour </a>
 
";
    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  162 => 64,  156 => 60,  145 => 55,  141 => 54,  137 => 53,  133 => 51,  128 => 48,  126 => 47,  123 => 46,  121 => 45,  118 => 44,  116 => 43,  110 => 40,  106 => 39,  102 => 37,  98 => 36,  81 => 21,  75 => 17,  73 => 16,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/account/order.html.twig");
    }
}
