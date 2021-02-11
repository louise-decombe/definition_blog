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

/* order/index.html.twig */
class __TwigTemplate_f43fd5924dbaf1c2a6e344663fd634fbb0cf8c9084af06cccd063d8268a00c69 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h2> passer la commande </h2>
<p> Vos préférences de commande </p>

<div class=\"row\">
<div class=\"col-md-6 recap\">
<p> Choisir mon adresse de livraison </p>

";
        // line 14
        ob_start(function () { return ''; });
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_recap")]);
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, false, 16), 'label', ["label" => "choissiez les coordonnés de la commande"]);
        echo "
<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address_add");
        echo "\"> ajouter une adresse </a>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


 ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
 ";
        // line 23
        echo twig_replace_filter(($context["formHtml"] ?? null), ["[br]" => "<br>"]);
        echo "

</div>
<div class=\"col-md-6\">
<p> Récapitulatif de la commande </p>
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "<div class=\"row\">
<div class=\"col-2\">
<img src=\"/uploads/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "illustration", [], "any", false, false, false, 31), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "\" height=\"100px\">
</div>
<div class=\"col-4 my-auto\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo " </div>

<div class=\"col2 my-auto\">";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35) / 100), 2), "html", null, true);
            echo "euros
</div>
<div class=\"col2 my-auto\"> | x ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
            echo "

</div>

</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  125 => 37,  120 => 35,  115 => 33,  108 => 31,  104 => 29,  100 => 28,  92 => 23,  89 => 22,  82 => 18,  78 => 17,  74 => 16,  70 => 15,  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/index.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/order/index.html.twig");
    }
}
