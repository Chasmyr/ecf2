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

/* formation/_wrapper.html.twig */
class __TwigTemplate_6d768d7f7f0a5f9f4a6f58b8b04ef57625c0090481fc07c2fc79c04014cd5eda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_wrapper.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/_wrapper.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 2
            echo "
    <article>
        <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "image", [], "any", false, false, false, 4), "html", null, true);
            echo "\" alt=\"\">
        <h3 class=\"formation-title\">";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "</h3>
        <div class=\"content\">
            <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "content", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
        </div>
        ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9) && (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "roles", [], "any", false, false, false, 9) != [0 => "ROLE_USER"]))) {
                // line 10
                echo "        <a href=\"#\" class=\"formation-btn access-denied\">Je me lance !</a>
        ";
            } else {
                // line 12
                echo "        <a href=\"formation/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "\" class=\"formation-btn\">Je me lance !</a>
        ";
            }
            // line 14
            echo "    </article>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/_wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  77 => 14,  71 => 12,  67 => 10,  65 => 9,  60 => 7,  55 => 5,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for formation in formations %}

    <article>
        <img src=\"{{ formation.image }}\" alt=\"\">
        <h3 class=\"formation-title\">{{ formation.title }}</h3>
        <div class=\"content\">
            <p>{{ formation.content }}</p>
        </div>
        {% if app.user and user.roles != ['ROLE_USER'] %}
        <a href=\"#\" class=\"formation-btn access-denied\">Je me lance !</a>
        {% else %}
        <a href=\"formation/{{ formation.id }}\" class=\"formation-btn\">Je me lance !</a>
        {% endif %}
    </article>

{% endfor %}

", "formation/_wrapper.html.twig", "E:\\ecf2\\templates\\formation\\_wrapper.html.twig");
    }
}
