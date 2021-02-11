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

/* order_validate/index.html.twig */
class __TwigTemplate_0340e9b0452b433a1be3c2baa0165e29d81d5359157e83abf954750fc02d80a0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order_validate/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Commande validée";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<h2> Confirmation de commande </h2>

<p> Votre commande a été validée <strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 9), "firstname", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 9), "lastname", [], "any", false, false, false, 9), "html", null, true);
        echo " </strong>. Merci pour votre commande n° <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 9), "html", null, true);
        echo " </strong> </p>

Une confirmation vous a été envoyée par mail à l'adresse <strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), "html", null, true);
        echo " </strong>   .  

Vous pouvez suivre l'état de votre commande dans <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"> votre compte </a>

";
    }

    public function getTemplateName()
    {
        return "order_validate/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  72 => 11,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order_validate/index.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/order_validate/index.html.twig");
    }
}
