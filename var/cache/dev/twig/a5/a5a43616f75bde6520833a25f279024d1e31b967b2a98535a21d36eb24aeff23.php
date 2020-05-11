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

/* main/index.html.twig */
class __TwigTemplate_50e97904b80862d298f0a7beb86eb097ff9bccdf329c374251a61b17e5f72f30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Accueil | Noob2Pro";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div>

    <br/>

    <div class=\"row\">
        <div class=\"m-auto col-md-9 text-center\">
            <h6>SOCIAL NETWORK FOR GAMERS, COSPLAYERS, STREAMERS, BROADCASTERS, TEAMS, AND MORE</h6>
            <h1>SHARE THE BEST OF YOU</h1>
        </div>

        <div class=\"col-md-3\" style=\"background-color: #2B4764\">
            <form class=\"d-flex justify-content-center\">



                <div class=\"col-md-8\">
                    <br/>
                    <legend style=\"text-align: center\">JOIN US FOR FREE</legend>
                    <br/>
                    <div>
                        <input type=\"email\" class=\"form-control \" id=\"exampleInputEmail1\"
                               aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                        <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <br/>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control \" id=\"exampleInputPassword1\"
                               placeholder=\"Password\">
                    </div>
                    <br/>
                    <div class=\"d-flex justify-content-center\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">TAKE-OFF</button>
                    </div>
                    <br/>
                </div>
            </form>
        </div>
    </div>

        <br/>

        <div class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner d-flex justify-content-between\">
                <div class=\"carousel-item active\">
                    <div class=\"row\">
                        <div class=\"col-md-2\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/apexlegends.png"), "html", null, true);
        echo "\" height=\"150\" alt=\"Apex Legends\"></div>
                        <div class=\"col-md-2\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/csgo.png"), "html", null, true);
        echo "\" height=\"150\" alt=\"CSGO\"></div>
                        <div class=\"col-md-2\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/lol.png"), "html", null, true);
        echo "\" height=\"150\" alt=\"League of Legends\"></div>
                        <div class=\"col-md-2\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/minecraft.png"), "html", null, true);
        echo "\" height=\"150\" alt=\"Minecraft\"></div>
                        <div class=\"col-md-2\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/r6s.png"), "html", null, true);
        echo "\" height=\"150\" alt=\"Rainbow Six: Siege\"></div>
                        <div class=\"col-md-2\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/rl.png"), "html", null, true);
        echo "\" height=\"150\" alt=\"Rocket League\"></div>
                    </div>
                </div>
            </div>
        </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
            crossorigin=\"anonymous\"></script>

    <br/>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  153 => 57,  149 => 56,  145 => 55,  141 => 54,  137 => 53,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil | Noob2Pro{% endblock %}

{% block body %}

    <div>

    <br/>

    <div class=\"row\">
        <div class=\"m-auto col-md-9 text-center\">
            <h6>SOCIAL NETWORK FOR GAMERS, COSPLAYERS, STREAMERS, BROADCASTERS, TEAMS, AND MORE</h6>
            <h1>SHARE THE BEST OF YOU</h1>
        </div>

        <div class=\"col-md-3\" style=\"background-color: #2B4764\">
            <form class=\"d-flex justify-content-center\">



                <div class=\"col-md-8\">
                    <br/>
                    <legend style=\"text-align: center\">JOIN US FOR FREE</legend>
                    <br/>
                    <div>
                        <input type=\"email\" class=\"form-control \" id=\"exampleInputEmail1\"
                               aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                        <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <br/>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control \" id=\"exampleInputPassword1\"
                               placeholder=\"Password\">
                    </div>
                    <br/>
                    <div class=\"d-flex justify-content-center\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">TAKE-OFF</button>
                    </div>
                    <br/>
                </div>
            </form>
        </div>
    </div>

        <br/>

        <div class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner d-flex justify-content-between\">
                <div class=\"carousel-item active\">
                    <div class=\"row\">
                        <div class=\"col-md-2\"><img src=\"{{asset('build/images/apexlegends.png')}}\" height=\"150\" alt=\"Apex Legends\"></div>
                        <div class=\"col-md-2\"><img src=\"{{asset('build/images/csgo.png')}}\" height=\"150\" alt=\"CSGO\"></div>
                        <div class=\"col-md-2\"><img src=\"{{asset('build/images/lol.png')}}\" height=\"150\" alt=\"League of Legends\"></div>
                        <div class=\"col-md-2\"><img src=\"{{asset('build/images/minecraft.png')}}\" height=\"150\" alt=\"Minecraft\"></div>
                        <div class=\"col-md-2\"><img src=\"{{asset('build/images/r6s.png')}}\" height=\"150\" alt=\"Rainbow Six: Siege\"></div>
                        <div class=\"col-md-2\"><img src=\"{{asset('build/images/rl.png')}}\" height=\"150\" alt=\"Rocket League\"></div>
                    </div>
                </div>
            </div>
        </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"
            integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
            integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
            integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\"
            crossorigin=\"anonymous\"></script>

    <br/>
    </div>
{% endblock %}
", "main/index.html.twig", "C:\\STAGE\\n2p1\\templates\\main\\index.html.twig");
    }
}
