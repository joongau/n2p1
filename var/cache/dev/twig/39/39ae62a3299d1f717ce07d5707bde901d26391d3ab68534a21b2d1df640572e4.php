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

/* base.html.twig */
class __TwigTemplate_95d5571a615e21b3a920d9c82fbaaf42dec0ea46bb8c05915514026b6f43e3be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <script src=\"https://kit.fontawesome.com/dc6adfa76a.js\" crossorigin=\"anonymous\"></script>
    </head>





    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" alt=\"n2p logo\">Noob2Pro</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse \" id=\"navbarColor02\" >
                    <ul class=\"navbar-nav ml-auto\" id=\"navbarButtons\" >
                        <button type=\"button\" class=\"btn btn-outline-secondary\" style=\"margin: 6px\">ABOUT</button>
                        <button type=\"button\" class=\"btn btn-outline-primary\" style=\"margin: 6px\">SIGN UP</button>
                        <button type=\"button\" class=\"btn btn-outline-primary\" style=\"margin: 6px\">CREATE A PAGE</button>
                        <button type=\"button\" class=\"btn btn-primary\" style=\"margin: 6px\">SIGN IN</button>
                    </ul>
                    <div>
                        <i class=\"fab fa-twitter-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                        <i class=\"fab fa-facebook-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    </div>
                </div>
            </nav>
        </header>
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "        <footer>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark justify-content-between\">
                <div>
                    <i class=\"fab fa-pinterest-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    <i class=\"fab fa-instagram-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    <i class=\"fab fa-youtube-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    <i class=\"fab fa-discord fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                </div>

                <div style=\"text-align: center\">
                    <a href=\"#\">Legal Notice</a>
                    <p>&copy; Noob2Pro 2020</p>
                </div>


                <div>
                    <ul class=\"navbar-nav ml-auto\" id=\"navbarButtons\" >
                        <button type=\"button\" class=\"btn btn-outline-primary\" style=\"margin: 6px\">CONTACT US</button>
                    </ul>
                </div>
            </nav>
        </footer>
    </body>



</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello, world!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 43,  183 => 42,  170 => 7,  160 => 6,  141 => 5,  104 => 44,  101 => 43,  99 => 42,  75 => 23,  59 => 9,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Hello, world!{% endblock %}</title>
        {% block stylesheets %}
            {{encore_entry_link_tags('app')}}
        {% endblock %}
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <script src=\"https://kit.fontawesome.com/dc6adfa76a.js\" crossorigin=\"anonymous\"></script>
    </head>





    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a class=\"navbar-brand\" href=\"{{ path('home') }}\"><img src=\"{{ asset('build/images/logo.png') }}\" alt=\"n2p logo\">Noob2Pro</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse \" id=\"navbarColor02\" >
                    <ul class=\"navbar-nav ml-auto\" id=\"navbarButtons\" >
                        <button type=\"button\" class=\"btn btn-outline-secondary\" style=\"margin: 6px\">ABOUT</button>
                        <button type=\"button\" class=\"btn btn-outline-primary\" style=\"margin: 6px\">SIGN UP</button>
                        <button type=\"button\" class=\"btn btn-outline-primary\" style=\"margin: 6px\">CREATE A PAGE</button>
                        <button type=\"button\" class=\"btn btn-primary\" style=\"margin: 6px\">SIGN IN</button>
                    </ul>
                    <div>
                        <i class=\"fab fa-twitter-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                        <i class=\"fab fa-facebook-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    </div>
                </div>
            </nav>
        </header>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <footer>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark justify-content-between\">
                <div>
                    <i class=\"fab fa-pinterest-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    <i class=\"fab fa-instagram-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    <i class=\"fab fa-youtube-square fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                    <i class=\"fab fa-discord fa-4x\" style=\"color: #375A7F; margin: 6px\"></i>
                </div>

                <div style=\"text-align: center\">
                    <a href=\"#\">Legal Notice</a>
                    <p>&copy; Noob2Pro 2020</p>
                </div>


                <div>
                    <ul class=\"navbar-nav ml-auto\" id=\"navbarButtons\" >
                        <button type=\"button\" class=\"btn btn-outline-primary\" style=\"margin: 6px\">CONTACT US</button>
                    </ul>
                </div>
            </nav>
        </footer>
    </body>



</html>
", "base.html.twig", "C:\\STAGE\\n2p1\\templates\\base.html.twig");
    }
}
