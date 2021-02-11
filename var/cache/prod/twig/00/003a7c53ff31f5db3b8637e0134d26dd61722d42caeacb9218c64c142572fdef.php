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

/* order/add.html.twig */
class __TwigTemplate_c3fc7ad347f55572f5c5173981b76079a3eb2028d2162cde857d449748f707b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>

";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement de ma commande";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<hr>
<h2> Mon Récapitulatif </h2>
<p> Vérifiez vos informations avant paiement </p>

<div class=\"row\">
<div class=\"col-md-6 recap\">
<p> Coordonnés reliés à l'achat </p>

";
        // line 20
        echo ($context["delivery"] ?? null);
        echo "

</div>
<div class=\"col-md-6\">
  ";
        // line 24
        $context["total"] = null;
        // line 25
        echo "
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "  
<div class=\"row\">
<div class=\"col-2\">
<img src=\"/uploads/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "illustration", [], "any", false, false, false, 30), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\" height=\"100px\">
</div>
<div class=\"col-4 my-auto\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo " </div>

<div class=\"col2 my-auto\">";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "price", [], "any", false, false, false, 34) / 100), 2), "html", null, true);
            echo "euros
</div>
<div class=\"col2 my-auto\"> | x ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            echo "

</div>

</div>
    ";
            // line 41
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41)));
            // line 42
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
<hr>
<strong class=\"my-auto\">  total de mon panier : ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2), "html", null, true);
        echo " euros.
  </strong>
<a id=\"checkout-button\" class=\"btn btn-primary mt-3 small my-auto\"> Payer la commande </a>

</div>
</div>

";
    }

    // line 55
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "
 <script type=\"text/javascript\">

    var stripe = Stripe(\"pk_test_51IGkgZGmXhpNP8kE5nKbQeJsN5q1dmEYtYMtOzbZTH6JIrev6IiXELe2GPkJ6ActNCZb7ZZiQC4t4vzYcKj9fgE100i407sHqU\");
    var checkoutButton = document.getElementById(\"checkout-button\");
    checkoutButton.addEventListener(\"click\", function () {
      fetch(\"/commande/create-session/";
        // line 62
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
        echo "\", {
        method: \"POST\",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {  

          if (session.error == 'order'){

          } else {
          return stripe.redirectToCheckout({ sessionId: session.id });

          }

        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error(\"Error:\", error);
        });
    });
  </script>

  ";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  156 => 56,  152 => 55,  140 => 46,  136 => 44,  129 => 42,  127 => 41,  119 => 36,  114 => 34,  109 => 32,  102 => 30,  97 => 27,  93 => 26,  90 => 25,  88 => 24,  81 => 20,  70 => 11,  66 => 10,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/order/add.html.twig");
    }
}
