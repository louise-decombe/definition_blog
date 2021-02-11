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

/* base.html.twig */
class __TwigTemplate_7c19e74b0f5b731b63e06a7b61d847e07fd4cb96b2047d7201f09926b7b7bfb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Une boutique qui vend des produits d'exception\">
 
    <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "  </title>

    <!-- Bootstrap CSS -->
    <link href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
    <link href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutique.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">

";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
        echo "
   <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- -->
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Librairie l'hydre aux mille têtes</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span> 
        </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

        <ul class=\"navbar-nav mr-auto\" href=\"\"> 
       <li class=\"nav-item active\">
       <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\"> Nos Livres </a>
     
       </li>
       <li class=\"nav-item active\">
       <a class=\"nav-link\" href=\"\"> Blog </a>
     
       </li>
       <li class=\"nav-item active\">
       <a class=\"nav-link\" href=\"\"> Agenda </a>
     
       </li>
         </ul>
           <div class=\"navbar-custom\">

";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">mon compte ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 62), "firstname", [], "any", false, false, false, 62), "html", null, true);
            echo "</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> déconnexion </a>

";
        } else {
            // line 65
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"> inscription </a>

";
        }
        // line 68
        echo "           <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\"> <img src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/picture/cart.png"), "html", null, true);
        echo " \" alt=\"supprimer\" width=\"30px\" /> </a>

          </div>
        </div>
    </nav>
</header>

<main role=\"main\">

";
        // line 77
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 78
            echo "   
   
   <h1> ICI PAGE D'ACCUEIL</h1>
    </div><!-- /.container -->
";
        }
        // line 83
        echo "
";
        // line 84
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "     <div class=\"container marketing mt-5\">

";
            // line 86
            $this->displayBlock('content', $context, $blocks);
            // line 89
            echo "
 </div> ";
        }
        // line 91
        echo "
<!-- Footer -->
<footer class=\"bg-light text-center text-lg-start\">
  <!-- Grid container -->
  <div class=\"container p-4\">
    <!--Grid row-->
    <div class=\"row\">
      <!--Grid column-->
      <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
        <h5 class=\"text-uppercase\">Qui sommes nous ?</h5>

        <p>
          La librairie L'hydre à mille tête est à Marseille au 4 rue Saint Savournin.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

        <ul class=\"list-unstyled mb-0\">
          <li>
            <a href=\"#!\" class=\"text-dark\">Nous contacter</a>
          </li>
          <li>
            <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\" class=\"text-dark\">FAQ</a>
          </li>
          
          <li>
            <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms_conditions");
        echo "\" class=\"text-dark\">Mention légales</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"text-dark\">Livres</a>
          </li>
          <li>
            <a href=\"#!\" class=\"text-dark\">Blog</a>
          </li>
          <li>
            <a href=\"#!\" class=\"text-dark\">Agenda</a>
          </li>
          
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

</footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\" ";
        // line 151
        echo "assets/js/bootstrap.bundle.js";
        echo " \"></script>
</body>


";
        // line 155
        $this->displayBlock('script', $context, $blocks);
        // line 158
        echo "
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " L'hydre aux mille têtes ";
    }

    // line 14
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
";
    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "
";
    }

    // line 155
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 156,  290 => 155,  285 => 87,  281 => 86,  276 => 15,  272 => 14,  265 => 8,  259 => 158,  257 => 155,  250 => 151,  227 => 131,  213 => 120,  206 => 116,  179 => 91,  175 => 89,  173 => 86,  168 => 84,  165 => 83,  158 => 78,  156 => 77,  141 => 68,  132 => 65,  121 => 62,  119 => 61,  102 => 47,  91 => 39,  67 => 17,  65 => 14,  60 => 12,  56 => 11,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/opt/lampp/htdocs/boutique-symfony/templates/base.html.twig");
    }
}
