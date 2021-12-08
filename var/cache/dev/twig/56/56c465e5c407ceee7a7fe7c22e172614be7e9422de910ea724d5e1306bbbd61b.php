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

/* barNavigation.html.twig */
class __TwigTemplate_6543755b6ac01bf351cee283a5c7f4f3f972acd8f87c46eb5eeab2140d982758 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "barNavigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "barNavigation.html.twig"));

        // line 1
        echo "<div style=\"display: flex; flex-direction: row; justify-content: space-between; background-color: #78c4f9; padding:20px; width: 95%; border-radius:5px ;\">
        <a href=";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seDeconnecter");
        echo ">Se déconnecter</a>
        <a>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "get", [0 => "prenom"], "method", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "get", [0 => "nom"], "method", false, false, false, 3), "html", null, true);
        echo "</a>
        <a href=";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiteur_index");
        echo ">Consulter mes fiches de frais</a>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "barNavigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"display: flex; flex-direction: row; justify-content: space-between; background-color: #78c4f9; padding:20px; width: 95%; border-radius:5px ;\">
        <a href={{ path('seDeconnecter') }}>Se déconnecter</a>
        <a>{{ app.session.get('prenom') }} {{ app.session.get('nom')}}</a>
        <a href={{ path('visiteur_index') }}>Consulter mes fiches de frais</a>
</div>", "barNavigation.html.twig", "/var/www/html/GSB-Frais/templates/barNavigation.html.twig");
    }
}
