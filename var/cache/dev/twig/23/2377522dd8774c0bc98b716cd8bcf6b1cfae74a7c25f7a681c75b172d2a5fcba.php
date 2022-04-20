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

/* formation/show.html.twig */
class __TwigTemplate_5cdeb96f436f8c0f9bb86d18230c68c3701983d7917940cae6aabd608c0eb04a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/show.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
        echo "<link rel=\"stylesheet\" href=\"/css/show/show.css\">
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
    <section>
        
        <div class=\"menuWrapper\" id=\"menu\">
            <a href=\"javascript:void(0)\" class=\"closebtn\" id=\"closeMenu\">&times;</a>
            <h2 class=\"formation-menu menu-item\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 16, $this->source); })()), "sections", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 17
            echo "                <div class=\"section-menu menu-item\" id=\"section-menu";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                    <h3 class=\"section-title menu-item\" id=\"section";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "<img src=\"/img/arrow.png\" class=\"open-accordeon-img\">
                    </h3>

                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "lessons", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 23
                echo "                        <div class=\"lesson-menu menu-item\">
                            <span class=\"lesson-title\" id=\"lesson-menu";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
                                <a href=\"#\">• ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "</a>
                            </span>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
                </div>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
        
        <div class=\"progress\">
                <div class=\"progress-bar\">
                    <div class=\"progress-content\" style=\"width:";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "%\">
                    </div> 
                </div>
                <span class=\"progress-number\">";
        // line 40
        echo twig_escape_filter($this->env, (int) floor(((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 40, $this->source); })()) / 1)), "html", null, true);
        echo "%</span>
        </div>
        <div class=\"open-menu-container\">
            <span class=\"open-menu\"><img id=\"openMenu\" src=\"/img/arrow.png\" class=\"open-menu-img\"></span>
        </div>
        <div class=\"content\" id=\"content\">
            
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 47, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 48
            echo "                    <div class=\"lesson-content\" id=\"lesson";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                            <div class=\"lesson-wrapper\">
                            
                                <div class=\"lesson-video\">
                                    <iframe src=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "video", [], "any", false, false, false, 52), "html", null, true);
            echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                </div>
                                <div class=\"lesson-content-title\">
                                    <h2>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</h2>
                                </div>
                                <div class=\"lesson-text\">
                                    <p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "content", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
                                </div>
                                ";
            // line 60
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "annexes", [], "any", false, false, false, 60)) > 0)) {
                // line 61
                echo "                                    <div class=\"annexe\">
                                        <h3>Documents supplémentaires :</h3>
                                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lesson"], "annexes", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["annexe"]) {
                    // line 64
                    echo "                                            <p>Voir : <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annexe"], "path", [], "any", false, false, false, 64), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annexe"], "title", [], "any", false, false, false, 64), "html", null, true);
                    echo "</a></p>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annexe'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                                    </div>
                                ";
            }
            // line 68
            echo "                                <div class=\"options\">

                                    <a href=\"#\" class=\"lesson-back\">Leçon précedente</a>
                                    ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 71)) {
                // line 72
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_complete", ["id" => twig_get_attribute($this->env, $this->source, $context["lesson"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" class=\"formation-complete\">Formation terminée</a>
                                    ";
            } else {
                // line 74
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesson_complete", ["id" => twig_get_attribute($this->env, $this->source, $context["lesson"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" class=\"lesson-complete\">Leçon terminée</a>
                                    ";
            }
            // line 76
            echo "                                </div>
                            </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </div>
    </section>

<script src=\"/js/show/show.js\"></script>
<script src=\"/js/show/ajax.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 80,  280 => 76,  274 => 74,  268 => 72,  266 => 71,  261 => 68,  257 => 66,  246 => 64,  242 => 63,  238 => 61,  236 => 60,  231 => 58,  225 => 55,  219 => 52,  211 => 48,  194 => 47,  184 => 40,  178 => 37,  172 => 33,  163 => 29,  153 => 25,  149 => 24,  146 => 23,  142 => 22,  136 => 19,  132 => 18,  127 => 17,  123 => 16,  119 => 15,  112 => 10,  102 => 9,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ formation.title }} {% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"/css/show/show.css\">
{% endblock %}

{% block body %}
    
    <section>
        
        <div class=\"menuWrapper\" id=\"menu\">
            <a href=\"javascript:void(0)\" class=\"closebtn\" id=\"closeMenu\">&times;</a>
            <h2 class=\"formation-menu menu-item\">{{ formation.title }}</h2>
            {% for section in formation.sections %}
                <div class=\"section-menu menu-item\" id=\"section-menu{{ section.id }}\">
                    <h3 class=\"section-title menu-item\" id=\"section{{ section.id }}\">
                        {{ section.title }}<img src=\"/img/arrow.png\" class=\"open-accordeon-img\">
                    </h3>

                        {% for lesson in section.lessons %}
                        <div class=\"lesson-menu menu-item\">
                            <span class=\"lesson-title\" id=\"lesson-menu{{ lesson.id }}\">
                                <a href=\"#\">• {{ lesson.title }}</a>
                            </span>
                        </div>
                        {% endfor %}

                </div>
                
            {% endfor %}
        </div>
        
        <div class=\"progress\">
                <div class=\"progress-bar\">
                    <div class=\"progress-content\" style=\"width:{{ progress }}%\">
                    </div> 
                </div>
                <span class=\"progress-number\">{{ progress // 1 }}%</span>
        </div>
        <div class=\"open-menu-container\">
            <span class=\"open-menu\"><img id=\"openMenu\" src=\"/img/arrow.png\" class=\"open-menu-img\"></span>
        </div>
        <div class=\"content\" id=\"content\">
            
                {% for lesson in lessons %}
                    <div class=\"lesson-content\" id=\"lesson{{ lesson.id }}\">
                            <div class=\"lesson-wrapper\">
                            
                                <div class=\"lesson-video\">
                                    <iframe src=\"{{ lesson.video }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                </div>
                                <div class=\"lesson-content-title\">
                                    <h2>{{ lesson.title }}</h2>
                                </div>
                                <div class=\"lesson-text\">
                                    <p>{{ lesson.content }}</p>
                                </div>
                                {% if lesson.annexes | length > 0 %}
                                    <div class=\"annexe\">
                                        <h3>Documents supplémentaires :</h3>
                                        {% for annexe in lesson.annexes %}
                                            <p>Voir : <a href=\"{{ annexe.path }}\">{{ annexe.title }}</a></p>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                                <div class=\"options\">

                                    <a href=\"#\" class=\"lesson-back\">Leçon précedente</a>
                                    {% if loop.last %}
                                        <a href=\"{{ path('formation_complete', {'id': lesson.id}) }}\" class=\"formation-complete\">Formation terminée</a>
                                    {% else %}
                                        <a href=\"{{ path('lesson_complete', {'id': lesson.id}) }}\" class=\"lesson-complete\">Leçon terminée</a>
                                    {% endif %}
                                </div>
                            </div>
                    </div>
                {% endfor %}
        </div>
    </section>

<script src=\"/js/show/show.js\"></script>
<script src=\"/js/show/ajax.js\"></script>
{% endblock %}", "formation/show.html.twig", "E:\\ecf2\\templates\\formation\\show.html.twig");
    }
}
