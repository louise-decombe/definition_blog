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
class __TwigTemplate_21f41e7d5ab2db2f7fc6d0ce36bdaaf2d79cce769d49f9b53e4517c16f913bd0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
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
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Dev définitions</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span> 
        </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

        <ul class=\"navbar-nav mr-auto\" href=\"\"> 
       <li class=\"nav-item active\">
       <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Définitions </a>
     
       </li>
       <li class=\"nav-item active\">
       <a class=\"nav-link text-dark\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Catégories </a>
     
       </li>
       <li class=\"nav-item active\">
       <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">  </a>
     
       </li>
         </ul>
           <div class=\"navbar-custom\">

";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" class=\"text-dark\"> mon compte ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "firstname", [], "any", false, false, false, 61), "html", null, true);
            echo "</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"text-dark\"> déconnexion | </a>

";
        } else {
            // line 64
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"text-dark\">connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"text-dark\"> inscription |  </a>

";
        }
        // line 67
        echo "           <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\" class=\"text-dark\"> + ajouter quelque chose </a>
          </div>
        </div>
    </nav>
</header>

<main role=\"main\">

   </div>


";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "
 </div>

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
        Nous sommes des étudiants en développement web à La Plateforme_ Marseille
Trouver et ajoutez des définitions liées au vocabulaire de dev dont on a besoin ! 
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
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\" class=\"text-dark\">FAQ</a>
          </li>
          
          <li>
            <a href=\"";
        // line 113
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
        // line 124
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
        // line 144
        echo "assets/js/bootstrap.bundle.js";
        echo " \"></script>
</body>


";
        // line 148
        $this->displayBlock('script', $context, $blocks);
        // line 151
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Dev définitions ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 15
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 79
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 149
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  335 => 149,  325 => 148,  314 => 79,  304 => 78,  293 => 15,  283 => 14,  264 => 8,  252 => 151,  250 => 148,  243 => 144,  220 => 124,  206 => 113,  199 => 109,  169 => 81,  167 => 78,  152 => 67,  143 => 64,  132 => 61,  130 => 60,  121 => 54,  114 => 50,  107 => 46,  96 => 38,  73 => 17,  71 => 14,  66 => 12,  62 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Une boutique qui vend des produits d'exception\">
 
    <title> {% block title %} Dev définitions {% endblock %}  </title>

    <!-- Bootstrap CSS -->
    <link href=\" {{ asset('assets/css/bootstrap.min.css') }} \" rel=\"stylesheet\">
    <link href=\" {{ asset('assets/css/style.css') }} \" rel=\"stylesheet\">

{% block javascript %}

{% endblock %}

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
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light\">
        <a class=\"navbar-brand\" href=\"{{ path('home')}}\">Dev définitions</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span> 
        </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">

        <ul class=\"navbar-nav mr-auto\" href=\"\"> 
       <li class=\"nav-item active\">
       <a class=\"nav-link\" href=\"{{ path('home')}}\"> Définitions </a>
     
       </li>
       <li class=\"nav-item active\">
       <a class=\"nav-link text-dark\" href=\"{{ path('home')}}\"> Catégories </a>
     
       </li>
       <li class=\"nav-item active\">
       <a class=\"nav-link\" href=\"{{ path('home')}}\">  </a>
     
       </li>
         </ul>
           <div class=\"navbar-custom\">

{% if app.user %}
            <a href=\"{{ path('account') }}\" class=\"text-dark\"> mon compte {{ app.user.firstname }}</a> | <a href=\"{{ path('app_logout') }}\" class=\"text-dark\"> déconnexion | </a>

{% else %}
            <a href=\"{{ path('app_login') }}\" class=\"text-dark\">connexion</a> | <a href=\"{{ path('register') }}\" class=\"text-dark\"> inscription |  </a>

{% endif %}
           <a href=\"{{ path('account') }}\" class=\"text-dark\"> + ajouter quelque chose </a>
          </div>
        </div>
    </nav>
</header>

<main role=\"main\">

   </div>


{% block content %}

{% endblock %}

 </div>

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
        Nous sommes des étudiants en développement web à La Plateforme_ Marseille
Trouver et ajoutez des définitions liées au vocabulaire de dev dont on a besoin ! 
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
            <a href=\"{{ path('faq')}}\" class=\"text-dark\">FAQ</a>
          </li>
          
          <li>
            <a href=\"{{ path('terms_conditions') }}\" class=\"text-dark\">Mention légales</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"{{ path('products') }}\" class=\"text-dark\">Livres</a>
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
<script src=\" {{'assets/js/bootstrap.bundle.js'}} \"></script>
</body>


{% block script %}

{% endblock %}

</html>
", "base.html.twig", "/opt/lampp/htdocs/definition-blog/templates/base.html.twig");
    }
}
