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
class __TwigTemplate_bc031acb02dfd707c5f9f1adcf8b290a3d4f1c27b3faa415d34aafdbbfdb68fc extends Template
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
        <h1>Formez vous en ??tant</h1>
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
        C???est un fait, la crise ??cologique est devenue une urgence majeure.  La   sixi??me extinction
        massive a d??j?? commenc?? et le changement climatique se fait de plus en plus ressentir au fil
        des ann??es. Mais qu???en est-il d???internet ?
    </p>
    <p>
        En mati??re d?????missions de CO2, il pollue 1.5 fois plus que le transport a??rien. D???ailleurs, en 20
        ans, le poids d???une page web a ??t?? multipli?? par 115 (source : https://www.greenit.fr/)
    </p>
    <p>
        Face ?? ce constat, un organisme de formation a ??t?? fond?? en 2017 : EcoIT. Son objectif est
        d?????tre une plateforme d?????ducation permettant ?? tout instructeur expert en accessibilit?? et en
        ??co-conception web de pr??senter des modules de cours.</p>
    <p>
        ?? terme, EcoIT d??sire devenir la r??f??rence fran??aise pour les d??veloppeurs soucieux de leur
        impact digital. Et pourquoi pas d??livrer enfin un label officiel pour classer les sites web selon
        leur empreinte num??rique.</p>
</section>
";
        // line 59
        if (((isset($context["formationReverse"]) || array_key_exists("formationReverse", $context) ? $context["formationReverse"] : (function () { throw new RuntimeError('Variable "formationReverse" does not exist.', 59, $this->source); })()) != null)) {
            // line 60
            echo "<div class=\"container-4-title\">
    <h2>Les 3 derni??res formations</h2>
</div>
";
        }
        // line 64
        echo "<section class=\"container-4\">
    
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["formationReverse"]) || array_key_exists("formationReverse", $context) ? $context["formationReverse"] : (function () { throw new RuntimeError('Variable "formationReverse" does not exist.', 66, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 67
            echo "
        <article>
            <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "image", [], "any", false, false, false, 69), "html", null, true);
            echo "\" alt=\"\">
            <h3 class=\"formation-title\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "</h3>
            <div class=\"content\">
                <p>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "content", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
            </div>
            
            <a href=\"formation/";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 75), "html", null, true);
            echo "\" class=\"formation-btn\">Je me lance !</a>
        </article>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return array (  215 => 79,  205 => 75,  199 => 72,  194 => 70,  190 => 69,  186 => 67,  182 => 66,  178 => 64,  172 => 60,  170 => 59,  140 => 32,  132 => 27,  124 => 22,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
        <h1>Formez vous en ??tant</h1>
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
        C???est un fait, la crise ??cologique est devenue une urgence majeure.  La   sixi??me extinction
        massive a d??j?? commenc?? et le changement climatique se fait de plus en plus ressentir au fil
        des ann??es. Mais qu???en est-il d???internet ?
    </p>
    <p>
        En mati??re d?????missions de CO2, il pollue 1.5 fois plus que le transport a??rien. D???ailleurs, en 20
        ans, le poids d???une page web a ??t?? multipli?? par 115 (source : https://www.greenit.fr/)
    </p>
    <p>
        Face ?? ce constat, un organisme de formation a ??t?? fond?? en 2017 : EcoIT. Son objectif est
        d?????tre une plateforme d?????ducation permettant ?? tout instructeur expert en accessibilit?? et en
        ??co-conception web de pr??senter des modules de cours.</p>
    <p>
        ?? terme, EcoIT d??sire devenir la r??f??rence fran??aise pour les d??veloppeurs soucieux de leur
        impact digital. Et pourquoi pas d??livrer enfin un label officiel pour classer les sites web selon
        leur empreinte num??rique.</p>
</section>
{% if formationReverse != null %}
<div class=\"container-4-title\">
    <h2>Les 3 derni??res formations</h2>
</div>
{% endif %}
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
{% endblock %}", "home.html.twig", "E:\\ecf2\\templates\\home.html.twig");
    }
}
