<?php

/* :library:delete.html.twig */
class __TwigTemplate_9518b2c52c2d42b5a300b11269eabb99af6a550ae3f69dec7069df6b1c990d68 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":library:delete.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":library:delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":library:delete.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 5, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <div class=\"create-header\">
                REMOVE BOOK
            </div>
            <div class=\"create-title\">
                <div class=\"create-title-label\">TITLE</div>
                <input type=\"text\" class=\"create-title-content\" name=\"book[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 11, $this->source); })()), "title", array()), "html", null, true);
        echo "\"
                       disabled=\"disabled\" readonly/>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">AUTHOR</div>
                <input type=\"text\" class=\"create-bookitem-content\" name=\"book[author]\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 16, $this->source); })()), "author", array()), "html", null, true);
        echo "\"
                       disabled=\"disabled\" readonly>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">PRICE</div>
                <input type=\"number\" min=\"1\" class=\"create-bookitem-content\" name=\"book[price]\" disabled=\"disabled\"
                       value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new Twig_Error_Runtime('Variable "book" does not exist.', 22, $this->source); })()), "price", array()), "html", null, true);
        echo "\" readonly/>
            </div>
            <div class=\"create-button-holder\">
                <button type=\"submit\" class=\"button\">Close Issue</button>
                <a type=\"button\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"button\">Back</a>
            </div>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "_token", array()), 'row');
        echo "
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":library:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  89 => 26,  82 => 22,  73 => 16,  65 => 11,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
    <div class=\"wrapper\">
        <form class=\"book-create\" action=\"{{ path('delete', { id:book.id }) }}\" method=\"post\">
            <div class=\"create-header\">
                REMOVE BOOK
            </div>
            <div class=\"create-title\">
                <div class=\"create-title-label\">TITLE</div>
                <input type=\"text\" class=\"create-title-content\" name=\"book[title]\" value=\"{{ book.title }}\"
                       disabled=\"disabled\" readonly/>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">AUTHOR</div>
                <input type=\"text\" class=\"create-bookitem-content\" name=\"book[author]\" value=\"{{ book.author }}\"
                       disabled=\"disabled\" readonly>
            </div>
            <div class=\"create-bookitem\">
                <div class=\"create-bookitem-label\">PRICE</div>
                <input type=\"number\" min=\"1\" class=\"create-bookitem-content\" name=\"book[price]\" disabled=\"disabled\"
                       value=\"{{ book.price }}\" readonly/>
            </div>
            <div class=\"create-button-holder\">
                <button type=\"submit\" class=\"button\">Close Issue</button>
                <a type=\"button\" href=\"{{ path('homepage') }}\" class=\"button\">Back</a>
            </div>
            {{ form_row(form._token) }}
        </form>
    </div>
{% endblock %}", ":library:delete.html.twig", "C:\\Games\\Library_Skeleton\\app/Resources\\views/library/delete.html.twig");
    }
}
