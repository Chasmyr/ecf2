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

/* formation/sectionEdit.html.twig */
class __TwigTemplate_fec44dcb5a7a4a16759c53d9d795afdae08879ad2d78883f4126e14ae1deabed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/sectionEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/sectionEdit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/sectionEdit.html.twig", 1);
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

        echo "Editer une section";
        
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
        echo "<link rel=\"stylesheet\" href=\"/css/table/table.css\">
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
        echo "
    <div class=\"container\">
        <div class=\"center\">
            <h2>Gérer les leçons</h2>
        </div>
        
        <div class=\"center\">
            <table class=\"table-lesson table\">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessonsList"]) || array_key_exists("lessonsList", $context) ? $context["lessonsList"] : (function () { throw new RuntimeError('Variable "lessonsList" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 26
            echo "                    <tr>
                        <td class=\"table-cel\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"edit\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_lesson", ["id" => twig_get_attribute($this->env, $this->source, $context["lesson"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><img src=\"/img/edit.svg\"></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tbody>
            </table>
        </div>
        
        <div class=\"center\">

            <div class=\"options\"> 

                <div class=\"add-option\">
                    <a class=\"create-option\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_lesson", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">Ajouter une leçon</a>
                </div>

                <div class=\"return\">
                    <a class=\"validate-option\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_formation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">Valider</a>
                </div>

            </div>

        </div>
        
        
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formation/sectionEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 46,  160 => 42,  149 => 33,  139 => 29,  134 => 27,  131 => 26,  127 => 25,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editer une section{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/css/table/table.css\">
{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"center\">
            <h2>Gérer les leçons</h2>
        </div>
        
        <div class=\"center\">
            <table class=\"table-lesson table\">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for lesson in lessonsList %}
                    <tr>
                        <td class=\"table-cel\">{{ lesson.title }}</td>
                        <td>
                            <a class=\"edit\" href=\"{{ path('edit_lesson', {id: lesson.id}) }}\"><img src=\"/img/edit.svg\"></a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        
        <div class=\"center\">

            <div class=\"options\"> 

                <div class=\"add-option\">
                    <a class=\"create-option\" href=\"{{ path('create_lesson', {id: section.id}) }}\">Ajouter une leçon</a>
                </div>

                <div class=\"return\">
                    <a class=\"validate-option\" href=\"{{ path('edit_formation', {id: formation.id}) }}\">Valider</a>
                </div>

            </div>

        </div>
        
        
    </div>
    
{% endblock %}", "formation/sectionEdit.html.twig", "E:\\ecf2\\templates\\formation\\sectionEdit.html.twig");
    }
}
