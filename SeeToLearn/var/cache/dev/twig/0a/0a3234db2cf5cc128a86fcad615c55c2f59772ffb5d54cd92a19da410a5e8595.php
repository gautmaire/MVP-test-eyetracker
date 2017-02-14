<?php

/* IndexBundle:Default:twitter.html.twig */
class __TwigTemplate_5c9a556dc40c9a85b6b3ac9233e87084b9a4f77da1833c88aaa78e9a9f610a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:twitter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndexBundle:Default:headerfooter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08ec6360e398c22dc97b0f18bd18fdc32405d2ed77e04fb1bb49b46542fb1a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ec6360e398c22dc97b0f18bd18fdc32405d2ed77e04fb1bb49b46542fb1a05->enter($__internal_08ec6360e398c22dc97b0f18bd18fdc32405d2ed77e04fb1bb49b46542fb1a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:twitter.html.twig"));

        $__internal_370972e22565d9a6fbc20ab17d13f87c39ab04a6a72c639192fab673c9bfcc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370972e22565d9a6fbc20ab17d13f87c39ab04a6a72c639192fab673c9bfcc99->enter($__internal_370972e22565d9a6fbc20ab17d13f87c39ab04a6a72c639192fab673c9bfcc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:twitter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ec6360e398c22dc97b0f18bd18fdc32405d2ed77e04fb1bb49b46542fb1a05->leave($__internal_08ec6360e398c22dc97b0f18bd18fdc32405d2ed77e04fb1bb49b46542fb1a05_prof);

        
        $__internal_370972e22565d9a6fbc20ab17d13f87c39ab04a6a72c639192fab673c9bfcc99->leave($__internal_370972e22565d9a6fbc20ab17d13f87c39ab04a6a72c639192fab673c9bfcc99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3165a15d2b87ecf2b3861c246ac14ec3410da2c847acda981dee318f6387d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3165a15d2b87ecf2b3861c246ac14ec3410da2c847acda981dee318f6387d96->enter($__internal_d3165a15d2b87ecf2b3861c246ac14ec3410da2c847acda981dee318f6387d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b917f118b20297a7c585dcd5ec97eff1a9706d37e368931a956193bcc48bc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b917f118b20297a7c585dcd5ec97eff1a9706d37e368931a956193bcc48bc9c->enter($__internal_0b917f118b20297a7c585dcd5ec97eff1a9706d37e368931a956193bcc48bc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Twitter</title>
";
        
        $__internal_0b917f118b20297a7c585dcd5ec97eff1a9706d37e368931a956193bcc48bc9c->leave($__internal_0b917f118b20297a7c585dcd5ec97eff1a9706d37e368931a956193bcc48bc9c_prof);

        
        $__internal_d3165a15d2b87ecf2b3861c246ac14ec3410da2c847acda981dee318f6387d96->leave($__internal_d3165a15d2b87ecf2b3861c246ac14ec3410da2c847acda981dee318f6387d96_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_59682c9b3dbed2bc8d865299c0314996bfdd832273246e7e7ace83a816c73792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59682c9b3dbed2bc8d865299c0314996bfdd832273246e7e7ace83a816c73792->enter($__internal_59682c9b3dbed2bc8d865299c0314996bfdd832273246e7e7ace83a816c73792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f4804c26dfc08df41732f45a62de288564f3379a4417ae8b0202f2835741cee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4804c26dfc08df41732f45a62de288564f3379a4417ae8b0202f2835741cee0->enter($__internal_f4804c26dfc08df41732f45a62de288564f3379a4417ae8b0202f2835741cee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f4804c26dfc08df41732f45a62de288564f3379a4417ae8b0202f2835741cee0->leave($__internal_f4804c26dfc08df41732f45a62de288564f3379a4417ae8b0202f2835741cee0_prof);

        
        $__internal_59682c9b3dbed2bc8d865299c0314996bfdd832273246e7e7ace83a816c73792->leave($__internal_59682c9b3dbed2bc8d865299c0314996bfdd832273246e7e7ace83a816c73792_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b76c9a995dda6765a993aced3a31dc1bd376d534d9f178aca4a8db18da1bc88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76c9a995dda6765a993aced3a31dc1bd376d534d9f178aca4a8db18da1bc88e->enter($__internal_b76c9a995dda6765a993aced3a31dc1bd376d534d9f178aca4a8db18da1bc88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_67e359a58df71f52ebea4ac1d11bcb142c887ba45d4107799a6d5cd7a88c3443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e359a58df71f52ebea4ac1d11bcb142c887ba45d4107799a6d5cd7a88c3443->enter($__internal_67e359a58df71f52ebea4ac1d11bcb142c887ba45d4107799a6d5cd7a88c3443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <header>
        <button class=\"buttonBurger\">
            <span class=\"buttonBurger__top\"></span>
            <span class=\"buttonBurger__middle\"></span>
            <span class=\"buttonBurger__bottom\"></span>
        </button>
        <div class=\"menu\">
            <div>
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/img-profil.jpg"), "html", null, true);
        echo "\" alt=\"image profil\">
            </div>
            ";
        // line 22
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 23
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h3>
            ";
        }
        // line 25
        echo "            <nav>
                <ul>
                    <li><a id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                    <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
                    <li><a id=\"us-question\" href=\"#\">Une question ?</a></li>
                    <li><a class=\"activeLink\" id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                    <li><a id=\"us-mentions-legales\" href=\"#\">Mentions légales</a></li>
                </ul>
            </nav>
            <p>See To Learn © 2017</p>
        </div>
        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo_See2Learn\" />
        <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
    </header>

    <section>

        <h2 class=\"titreTwitter\">Suivez-nous sur Twitter pour vous tenir au courant de nos actualités !</h2>

        <div class=\"wrap-twitter\">
            <a class=\"twitter-timeline\" data-dnt=\"true\" href=\"https://twitter.com/SeeTo2Learn\" data-height=\"600\" data-width=\"600\">Tweets by @SeeTo2Learn</a>
        </div>

    </section>



    <!-- script pour le feed twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
";
        
        $__internal_67e359a58df71f52ebea4ac1d11bcb142c887ba45d4107799a6d5cd7a88c3443->leave($__internal_67e359a58df71f52ebea4ac1d11bcb142c887ba45d4107799a6d5cd7a88c3443_prof);

        
        $__internal_b76c9a995dda6765a993aced3a31dc1bd376d534d9f178aca4a8db18da1bc88e->leave($__internal_b76c9a995dda6765a993aced3a31dc1bd376d534d9f178aca4a8db18da1bc88e_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:twitter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  118 => 25,  110 => 23,  108 => 22,  103 => 20,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'IndexBundle:Default:headerfooter.html.twig' %}

{% block title %}
    <title>Twitter</title>
{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/users.css') }}\">
{% endblock %}

{% block content %}
    <header>
        <button class=\"buttonBurger\">
            <span class=\"buttonBurger__top\"></span>
            <span class=\"buttonBurger__middle\"></span>
            <span class=\"buttonBurger__bottom\"></span>
        </button>
        <div class=\"menu\">
            <div>
                <img src=\"{{ asset('bundles/img/img-profil.jpg') }}\" alt=\"image profil\">
            </div>
            {% if app.user %}
                <h3>{{ app.user.prenom }} {{ app.user.nom }}</h3>
            {% endif %}
            <nav>
                <ul>
                    <li><a id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                    <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
                    <li><a id=\"us-question\" href=\"#\">Une question ?</a></li>
                    <li><a class=\"activeLink\" id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                    <li><a id=\"us-mentions-legales\" href=\"#\">Mentions légales</a></li>
                </ul>
            </nav>
            <p>See To Learn © 2017</p>
        </div>
        <img src=\"{{ asset('bundles/img/logo.png') }}\" alt=\"logo_See2Learn\" />
        <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
    </header>

    <section>

        <h2 class=\"titreTwitter\">Suivez-nous sur Twitter pour vous tenir au courant de nos actualités !</h2>

        <div class=\"wrap-twitter\">
            <a class=\"twitter-timeline\" data-dnt=\"true\" href=\"https://twitter.com/SeeTo2Learn\" data-height=\"600\" data-width=\"600\">Tweets by @SeeTo2Learn</a>
        </div>

    </section>



    <!-- script pour le feed twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
{% endblock %}", "IndexBundle:Default:twitter.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/twitter.html.twig");
    }
}
