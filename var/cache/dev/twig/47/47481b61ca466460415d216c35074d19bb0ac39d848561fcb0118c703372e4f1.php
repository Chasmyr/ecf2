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
class __TwigTemplate_db4b3a955ad9b7471f1de77115bedff7de2efa5d5ac60d46286bef1a765fa03c extends Template
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
        <p class=\"gros-vert\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["numberOfFormateur"]) || array_key_exists("numberOfFormateur", $context) ? $context["numberOfFormateur"] : (function () { throw new RuntimeError('Variable "numberOfFormateur" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</p>
        <img src=\"/img/prof.png\">
        <span>Formateur</span>
    </div>
    <div class=\"cards card-2\">
        <p class=\"gros-vert\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["numberOfFormation"]) || array_key_exists("numberOfFormation", $context) ? $context["numberOfFormation"] : (function () { throw new RuntimeError('Variable "numberOfFormation" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</p>
        <img src=\"/img/livre.png\">
        <span>Formation</span>
    </div>
    <div class=\"cards card-3\">
        <p class=\"gros-vert\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["co2"]) || array_key_exists("co2", $context) ? $context["co2"] : (function () { throw new RuntimeError('Variable "co2" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "t</p>
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
</section>
<div class=\"container-4-title\">
    <h2>Les 3 dernières formations</h2>
</div>
<section class=\"container-4\">
    
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["formationReverse"]) || array_key_exists("formationReverse", $context) ? $context["formationReverse"] : (function () { throw new RuntimeError('Variable "formationReverse" does not exist.', 64, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 65
            echo "
        <article>
            <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "image", [], "any", false, false, false, 67), "html", null, true);
            echo "\" alt=\"\">
            <h3 class=\"formation-title\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</h3>
            <div class=\"content\">
                <p>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "content", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
            </div>
            
            <a href=\"formation/";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" class=\"formation-btn\">Je me lance !</a>
        </article>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
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
        return array (  208 => 77,  198 => 73,  192 => 70,  187 => 68,  183 => 67,  179 => 65,  175 => 64,  140 => 32,  132 => 27,  124 => 22,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
        <p class=\"gros-vert\">{{ numberOfFormateur }}</p>
        <img src=\"/img/prof.png\">
        <span>Formateur</span>
    </div>
    <div class=\"cards card-2\">
        <p class=\"gros-vert\">{{ numberOfFormation }}</p>
        <img src=\"/img/livre.png\">
        <span>Formation</span>
    </div>
    <div class=\"cards card-3\">
        <p class=\"gros-vert\">{{ co2 }}t</p>
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
</section>
<div class=\"container-4-title\">
    <h2>Les 3 dernières formations</h2>
</div>
<section class=\"container-4\">
    
    {% for formation in formationReverse|slice(0, 3) %}

        <article>
            <img src=\"{{ formation.image }}\" alt=\"\">
            <h3 class=\"formation-title\">{{ formation.title }}</h3>
            <div class=\"content\">
                <p>{{ formation.content }}</p>
            </div>
            
            <a href=\"formation/{{ formation.id }}\" class=\"formation-btn\">Je me lance !</a>
        </article>

    {% endfor %}

</section>
{% endblock %}", "home.html.twig", "E:\\ecf\\ECF\\templates\\home.html.twig");
    }
}
