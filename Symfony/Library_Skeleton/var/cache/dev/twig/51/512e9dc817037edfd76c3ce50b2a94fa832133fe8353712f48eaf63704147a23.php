<?php

/* library/create.html.twig */
class __TwigTemplate_b290e57e24076b0437741230be8241fe1fdf5f2cd9ea9067653916b9f7a7d7cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "library/create.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "library/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "library/create.html.twig"));

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
        <form class=\"book-create\" action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo "\" method=\"post\">
            <div class=\"create-header\">
                ADD A NEW BOOK
            </div>
            <div class=\"create-title\">
                <div class=\"create-title-label\">TITLE</div>
                <input type=\"text\" class=\"create-title-content\" name=\"book[title]\"/>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">AUTHOR</div>
                <input type=\"text\" class=\"create-bookitem-content\" name=\"book[author]\">
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">PRICE</div>
                <input type=\"number\" min=\"1\" step=\"any\" class=\"create-bookitem-content\" name=\"book[price]\"/>
            </div>
            <div class=\"create-button-holder\">
                <button type=\"submit\" class=\"button\">ADD BOOK</button>
                <a type=\"button\" href=\"/\" class=\"button\">BACK</a>
            </div>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "_token", array()), 'row');
        echo "
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "library/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
    <div class=\"wrapper\">
        <form class=\"book-create\" action=\"{{ path('create') }}\" method=\"post\">
            <div class=\"create-header\">
                ADD A NEW BOOK
            </div>
            <div class=\"create-title\">
                <div class=\"create-title-label\">TITLE</div>
                <input type=\"text\" class=\"create-title-content\" name=\"book[title]\"/>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">AUTHOR</div>
                <input type=\"text\" class=\"create-bookitem-content\" name=\"book[author]\">
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">PRICE</div>
                <input type=\"number\" min=\"1\" step=\"any\" class=\"create-bookitem-content\" name=\"book[price]\"/>
            </div>
            <div class=\"create-button-holder\">
                <button type=\"submit\" class=\"button\">ADD BOOK</button>
                <a type=\"button\" href=\"/\" class=\"button\">BACK</a>
            </div>
            {{ form_row(form._token) }}
        </form>
    </div>
{% endblock %}", "library/create.html.twig", "C:\\Games\\Library_Skeleton\\app\\Resources\\views\\library\\create.html.twig");
    }
}
