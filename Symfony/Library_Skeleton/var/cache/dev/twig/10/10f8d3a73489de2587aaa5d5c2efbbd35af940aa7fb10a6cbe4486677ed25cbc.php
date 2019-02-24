<?php

/* library/index.html.twig */
class __TwigTemplate_03f9479cc06fea9518b23d4825c7b2e73d18cb4a2ee97f8884534e0c7a8f5d13 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "library/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "library/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "library/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"wrapper\">
        <div class=\"button-holder\">
            <a type=\"button\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo "\" class=\"button\">ADD A NEW BOOK</a>
        </div>
        <div class=\"content\">
            <div class=\"header\">
                <div class=\"book-label\">TITLE</div>
                <div class=\"book-label\">AUTHOR</div>
                <div class=\"book-label\">PRICE</div>
                <div class=\"actions-label\">ACTIONS</div>
            </div>
            <div class=\"main\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new Twig_Error_Runtime('Variable "books" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 17
            echo "                    <div class=\"book\">
                        <div class=\"book-title\">
                            ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"book-item\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"book-item\">
                            ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"project-actions\">
                            <a type=\"button\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", array()))), "html", null, true);
            echo "\" class=\"bookbutton\">Edit</a>
                            <a type=\"button\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", array()))), "html", null, true);
            echo "\" class=\"bookbutton\">Remove</a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "library/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  100 => 29,  96 => 28,  90 => 25,  84 => 22,  78 => 19,  74 => 17,  70 => 16,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
    <div class=\"wrapper\">
        <div class=\"button-holder\">
            <a type=\"button\" href=\"{{ path('create') }}\" class=\"button\">ADD A NEW BOOK</a>
        </div>
        <div class=\"content\">
            <div class=\"header\">
                <div class=\"book-label\">TITLE</div>
                <div class=\"book-label\">AUTHOR</div>
                <div class=\"book-label\">PRICE</div>
                <div class=\"actions-label\">ACTIONS</div>
            </div>
            <div class=\"main\">
                {% for book in books %}
                    <div class=\"book\">
                        <div class=\"book-title\">
                            {{ book.title }}
                        </div>
                        <div class=\"book-item\">
                            {{ book.author }}
                        </div>
                        <div class=\"book-item\">
                            {{ book.price }}
                        </div>
                        <div class=\"project-actions\">
                            <a type=\"button\" href=\"{{ path('edit', {id: book.id}) }}\" class=\"bookbutton\">Edit</a>
                            <a type=\"button\" href=\"{{ path('delete', {id: book.id}) }}\" class=\"bookbutton\">Remove</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "library/index.html.twig", "C:\\Games\\Library_Skeleton\\app\\Resources\\views\\library\\index.html.twig");
    }
}
