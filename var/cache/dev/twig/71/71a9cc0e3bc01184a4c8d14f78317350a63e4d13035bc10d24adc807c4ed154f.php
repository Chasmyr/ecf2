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

/* home.html.twig */
class __TwigTemplate_d7e1fa9ce8397acfa0741216c631326d3d406c2795ed0c57b477b074f29b4f87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur ECOIT !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"/css/home/home.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<section class=\"container-1\">

    <div class=\"home-title\">
        <h1>Formez vous en étant</h1>
        <h2>Respectueux de l'environnement</h2>
    </div>
    
</section>

<section class=\"container-2\">

    <div class=\"cards card-1\">
        <p class=\"gros-vert\">12</p>
        <img src=\"/img/prof.png\">
        <span>Instructeur</span>
    </div>
    <div class=\"cards card-2\">
        <p class=\"gros-vert\">56</p>
        <img src=\"/img/livre.png\">
        <span>Formation</span>
    </div>
    <div class=\"cards card-3\">
        <p class=\"gros-vert\">300t</p>
        <img src=\"/img/co2.png\">
        <span>Emises en moins</span>
    </div>

</section>

<section class=\"container-3\">

    <p>
        C’est un fait, la crise écologique est devenue une urgence majeure.  La   sixième extinction
        massive a déjà commencé et le changement climatique se fait de plus en plus ressentir au fil
        des années. Mais qu’en est-il d’internet ?
    </p>
    <p>
        En matière d’émissions de CO2, il pollue 1.5 fois plus que le transport aérien. D’ailleurs, en 20
        ans, le poids d’une page web a été multiplié par 115 (source : https://www.greenit.fr/)
    </p>
    <p>
        Face à ce constat, un organisme de formation a été fondé en 2017 : EcoIT. Son objectif est
        d’être une plateforme d’éducation permettant à tout instructeur expert en accessibilité et en
        éco-conception web de présenter des modules de cours.</p>
    <p>
        À terme, EcoIT désire devenir la référence française pour les développeurs soucieux de leur
        impact digital. Et pourquoi pas délivrer enfin un label officiel pour classer les sites web selon
        leur empreinte numérique.</p>
    <a href=\"#\" class=\"home-btn\">S'inscire</a>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur ECOIT !{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/css/home/home.css\">
{% endblock %}

{% block body %}
<section class=\"container-1\">

    <div class=\"home-title\">
        <h1>Formez vous en étant</h1>
        <h2>Respectueux de l'environnement</h2>
    </div>
    
</section>

<section class=\"container-2\">

    <div class=\"cards card-1\">
        <p class=\"gros-vert\">12</p>
        <img src=\"/img/prof.png\">
        <span>Instructeur</span>
    </div>
    <div class=\"cards card-2\">
        <p class=\"gros-vert\">56</p>
        <img src=\"/img/livre.png\">
        <span>Formation</span>
    </div>
    <div class=\"cards card-3\">
        <p class=\"gros-vert\">300t</p>
        <img src=\"/img/co2.png\">
        <span>Emises en moins</span>
    </div>

</section>

<section class=\"container-3\">

    <p>
        C’est un fait, la crise écologique est devenue une urgence majeure.  La   sixième extinction
        massive a déjà commencé et le changement climatique se fait de plus en plus ressentir au fil
        des années. Mais qu’en est-il d’internet ?
    </p>
    <p>
        En matière d’émissions de CO2, il pollue 1.5 fois plus que le transport aérien. D’ailleurs, en 20
        ans, le poids d’une page web a été multiplié par 115 (source : https://www.greenit.fr/)
    </p>
    <p>
        Face à ce constat, un organisme de formation a été fondé en 2017 : EcoIT. Son objectif est
        d’être une plateforme d’éducation permettant à tout instructeur expert en accessibilité et en
        éco-conception web de présenter des modules de cours.</p>
    <p>
        À terme, EcoIT désire devenir la référence française pour les développeurs soucieux de leur
        impact digital. Et pourquoi pas délivrer enfin un label officiel pour classer les sites web selon
        leur empreinte numérique.</p>
    <a href=\"#\" class=\"home-btn\">S'inscire</a>
</section>
{% endblock %}", "home.html.twig", "E:\\ecf\\ECF\\templates\\home.html.twig");
    }
}
