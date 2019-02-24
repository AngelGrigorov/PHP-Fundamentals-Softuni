<?php

/* :library:edit.html.twig */
class __TwigTemplate_cbea3cfcf183d727fb17065438f1517efc74b815812407b82eba38b404551a24 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":library:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":library:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":library:edit.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 5, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"create-header\">
                EDIT BOOK
            </div>
            <div class=\"create-title\">
                <div class=\"create-title-label\">TITLE</div>
                <input type=\"text\" class=\"create-title-content\" name=\"book[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 11, $this->source); })()), "title", array()), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">AUTHOR</div>
                <input type=\"text\" class=\"create-bookitem-content\" name=\"book[author]\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 15, $this->source); })()), "author", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">PRICE</div>
                <input type=\"number\" min=\"1\" STEP=\"any\" class=\"create-bookitem-content\" name=\"book[price]\"
                       value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 20, $this->source); })()), "price", array()), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"create-button-holder\">
                <button type=\"submit\" class=\"button\">EDIT BOOK</button>
                <a type=\"button\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"button\">BACK</a>
            </div>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "_token", array()), 'row');
        echo "
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":library:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  87 => 24,  80 => 20,  72 => 15,  65 => 11,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
    <div class=\"wrapper\">
        <form class=\"book-create\" action=\"{{ path('edit', { id: book.id }) }}\" method=\"post\">
            <div class=\"create-header\">
                EDIT BOOK
            </div>
            <div class=\"create-title\">
                <div class=\"create-title-label\">TITLE</div>
                <input type=\"text\" class=\"create-title-content\" name=\"book[title]\" value=\"{{ book.title }}\"/>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">AUTHOR</div>
                <input type=\"text\" class=\"create-bookitem-content\" name=\"book[author]\" value=\"{{ book.author }}\">
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">PRICE</div>
                <input type=\"number\" min=\"1\" STEP=\"any\" class=\"create-bookitem-content\" name=\"book[price]\"
                       value=\"{{ book.price }}\"/>
            </div>
            <div class=\"create-button-holder\">
                <button type=\"submit\" class=\"button\">EDIT BOOK</button>
                <a type=\"button\" href=\"{{ path('homepage') }}\" class=\"button\">BACK</a>
            </div>
            {{ form_row(form._token) }}
        </form>
    </div>
{% endblock %}

", ":library:edit.html.twig", "C:\\Games\\Library_Skeleton\\app/Resources\\views/library/edit.html.twig");
    }
}
