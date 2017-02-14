<?php

/* IndexBundle:Default:lecture.html.twig */
class __TwigTemplate_b0de6c8e5b9af7f49f4335acf2b416524acb64c80260085d99fb32bded5f85bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:lecture.html.twig", 1);
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
        $__internal_fb957136c39170e7b090f6f2fb16b58924573f526a1bfa39893e6ca0b197b05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb957136c39170e7b090f6f2fb16b58924573f526a1bfa39893e6ca0b197b05d->enter($__internal_fb957136c39170e7b090f6f2fb16b58924573f526a1bfa39893e6ca0b197b05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:lecture.html.twig"));

        $__internal_2a3a0180d5cd93155cebd66fc98a095925b7c0d179a97eeb42a1df7f9dfc5c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3a0180d5cd93155cebd66fc98a095925b7c0d179a97eeb42a1df7f9dfc5c97->enter($__internal_2a3a0180d5cd93155cebd66fc98a095925b7c0d179a97eeb42a1df7f9dfc5c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:lecture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb957136c39170e7b090f6f2fb16b58924573f526a1bfa39893e6ca0b197b05d->leave($__internal_fb957136c39170e7b090f6f2fb16b58924573f526a1bfa39893e6ca0b197b05d_prof);

        
        $__internal_2a3a0180d5cd93155cebd66fc98a095925b7c0d179a97eeb42a1df7f9dfc5c97->leave($__internal_2a3a0180d5cd93155cebd66fc98a095925b7c0d179a97eeb42a1df7f9dfc5c97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4243f15984e2c95b35ac508b3e7fcf565504b17bc9479c9fa90e64b7eb2a69f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4243f15984e2c95b35ac508b3e7fcf565504b17bc9479c9fa90e64b7eb2a69f2->enter($__internal_4243f15984e2c95b35ac508b3e7fcf565504b17bc9479c9fa90e64b7eb2a69f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11d6fa7b7eabc91e5c41323c5cc4d2bd52ed83d8db2dba28aae35a040b8ec3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d6fa7b7eabc91e5c41323c5cc4d2bd52ed83d8db2dba28aae35a040b8ec3aa->enter($__internal_11d6fa7b7eabc91e5c41323c5cc4d2bd52ed83d8db2dba28aae35a040b8ec3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Lecture</title>
";
        
        $__internal_11d6fa7b7eabc91e5c41323c5cc4d2bd52ed83d8db2dba28aae35a040b8ec3aa->leave($__internal_11d6fa7b7eabc91e5c41323c5cc4d2bd52ed83d8db2dba28aae35a040b8ec3aa_prof);

        
        $__internal_4243f15984e2c95b35ac508b3e7fcf565504b17bc9479c9fa90e64b7eb2a69f2->leave($__internal_4243f15984e2c95b35ac508b3e7fcf565504b17bc9479c9fa90e64b7eb2a69f2_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_6eface277379531e71d5faf0d1b576db4dd6d2b565c2bc2eb49ae51e7cf35a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eface277379531e71d5faf0d1b576db4dd6d2b565c2bc2eb49ae51e7cf35a34->enter($__internal_6eface277379531e71d5faf0d1b576db4dd6d2b565c2bc2eb49ae51e7cf35a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_ff22ab7375625da7e9c1e306557dcfad7518a1b13758dfdaaeec065f8ada564b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff22ab7375625da7e9c1e306557dcfad7518a1b13758dfdaaeec065f8ada564b->enter($__internal_ff22ab7375625da7e9c1e306557dcfad7518a1b13758dfdaaeec065f8ada564b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/lecture.css"), "html", null, true);
        echo "\">
";
        
        $__internal_ff22ab7375625da7e9c1e306557dcfad7518a1b13758dfdaaeec065f8ada564b->leave($__internal_ff22ab7375625da7e9c1e306557dcfad7518a1b13758dfdaaeec065f8ada564b_prof);

        
        $__internal_6eface277379531e71d5faf0d1b576db4dd6d2b565c2bc2eb49ae51e7cf35a34->leave($__internal_6eface277379531e71d5faf0d1b576db4dd6d2b565c2bc2eb49ae51e7cf35a34_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_246025d124e33a850cf1cd45866f7794bd86f5ff51941680e08a827087e6e194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246025d124e33a850cf1cd45866f7794bd86f5ff51941680e08a827087e6e194->enter($__internal_246025d124e33a850cf1cd45866f7794bd86f5ff51941680e08a827087e6e194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f722d807d3979b8ec2dfaabcc516aeefb259c447ed74a29caa16bb52404a780d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f722d807d3979b8ec2dfaabcc516aeefb259c447ed74a29caa16bb52404a780d->enter($__internal_f722d807d3979b8ec2dfaabcc516aeefb259c447ed74a29caa16bb52404a780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<header>
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
        <h3>Gautier Maire</h3>
        <nav>
            <ul>
                <li><a id=\"us-tab-bord\" href=\"#\">Tableau de bord</a></li>
                <li><a class=\"activeLink\" id=\"us-textes\" href=\"#\">Textes</a></li>
                <li><a id=\"us-question\" href=\"#\">Une question ?</a></li>
                <li><a id=\"us-twitter\" href=\"#\">Twitter</a></li>
                <li><a id=\"us-mentions-legales\" href=\"#\">Mentions légales</a></li>
            </ul>
        </nav>
    </div>
    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo_See2Learn\" />
    <a href=\"/logout\"> <button class=\"signOut\">Déconnexion</button> </a>
</header>

<section class=\"lecture\">
    <h2>La voiture volante d’Airbus</h2>
    <div class=\"canvas\">
        <p>Le constructeur aéronautique Airbus semble vouloir offrir le rêve d’Icare à tout un chacun. L’entreprise planche sur un projet d’engin volant électrique et une voiture volante capable de transporter un passager au sein des villes de demain, devrait voir le jour d’ici la fin de l’année.
        </p>

        <p>Aliquam ultrices luctus purus, quis ultrices sem finibus ut. Maecenas aliquet interdum lacinia. Praesent placerat dignissim dui, a porttitor lorem porta quis. Integer tincidunt eleifend eros ac sollicitudin. Donec ullamcorper posuere condimentum. Vestibulum gravida ultrices blandit. Etiam et sollicitudin metus. Nam at tincidunt metus. Cras aliquet nibh at imperdiet volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur finibus viverra. Sed at ipsum et turpis vehicula sollicitudin. Mauris sit amet libero eu sem fermentum aliquet sit amet vitae tortor. Etiam efficitur ullamcorper augue at consectetur.
        </p>

        <p>Le constructeur aéronautique Airbus semble vouloir offrir le rêve d’Icare à tout un chacun. L’entreprise planche sur un projet d’engin volant électrique et une voiture volante capable de transporter un passager au sein des villes de demain, devrait voir le jour d’ici la fin de l’année.
        </p>

        <p>Aliquam ultrices luctus purus, quis ultrices sem finibus ut. Maecenas aliquet interdum lacinia. Praesent placerat dignissim dui, a porttitor lorem porta quis. Integer tincidunt eleifend eros ac sollicitudin. Donec ullamcorper posuere condimentum. Vestibulum gravida ultrices blandit. Etiam et sollicitudin metus. Nam at tincidunt metus. Cras aliquet nibh at imperdiet volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur finibus viverra. Sed at ipsum et turpis vehicula sollicitudin. Mauris sit amet libero eu sem fermentum aliquet sit amet vitae tortor. Etiam efficitur ullamcorper augue at consectetur.
        </p>
    </div>
</section>
<aside>
    <div>
        <div>
            <p class=\"number\">42</p>
        </div>
        <p>Mots lus</p>
    </div>
    <div>
        <div>
            <p class=\"number\">26s</p>
        </div>
        <p>Temps de lecture</p>
    </div>
</aside>

<section class=\"difficulty row\">
    <div class=\"col-xs-8 col-md-6 col-lg-5\">
        <p class=\"\">Avez-vous trouver ce texte difficile ?</p>
        <p class=\"\">(1 si vous avez tout compris, 4 si vous avez rien compris)</p>
    </div>
    <form class=\"evaluation col-xs-4 col-md-6 col-lg-7\">
        <select>
            <option>-</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <button>Terminer</button>
    </form>
</section>

";
        
        $__internal_f722d807d3979b8ec2dfaabcc516aeefb259c447ed74a29caa16bb52404a780d->leave($__internal_f722d807d3979b8ec2dfaabcc516aeefb259c447ed74a29caa16bb52404a780d_prof);

        
        $__internal_246025d124e33a850cf1cd45866f7794bd86f5ff51941680e08a827087e6e194->leave($__internal_246025d124e33a850cf1cd45866f7794bd86f5ff51941680e08a827087e6e194_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:lecture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  103 => 20,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title>Lecture</title>
{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/lecture.css') }}\">
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
        <h3>Gautier Maire</h3>
        <nav>
            <ul>
                <li><a id=\"us-tab-bord\" href=\"#\">Tableau de bord</a></li>
                <li><a class=\"activeLink\" id=\"us-textes\" href=\"#\">Textes</a></li>
                <li><a id=\"us-question\" href=\"#\">Une question ?</a></li>
                <li><a id=\"us-twitter\" href=\"#\">Twitter</a></li>
                <li><a id=\"us-mentions-legales\" href=\"#\">Mentions légales</a></li>
            </ul>
        </nav>
    </div>
    <img src=\"{{ asset('bundles/img/logo.png') }}\" alt=\"logo_See2Learn\" />
    <a href=\"/logout\"> <button class=\"signOut\">Déconnexion</button> </a>
</header>

<section class=\"lecture\">
    <h2>La voiture volante d’Airbus</h2>
    <div class=\"canvas\">
        <p>Le constructeur aéronautique Airbus semble vouloir offrir le rêve d’Icare à tout un chacun. L’entreprise planche sur un projet d’engin volant électrique et une voiture volante capable de transporter un passager au sein des villes de demain, devrait voir le jour d’ici la fin de l’année.
        </p>

        <p>Aliquam ultrices luctus purus, quis ultrices sem finibus ut. Maecenas aliquet interdum lacinia. Praesent placerat dignissim dui, a porttitor lorem porta quis. Integer tincidunt eleifend eros ac sollicitudin. Donec ullamcorper posuere condimentum. Vestibulum gravida ultrices blandit. Etiam et sollicitudin metus. Nam at tincidunt metus. Cras aliquet nibh at imperdiet volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur finibus viverra. Sed at ipsum et turpis vehicula sollicitudin. Mauris sit amet libero eu sem fermentum aliquet sit amet vitae tortor. Etiam efficitur ullamcorper augue at consectetur.
        </p>

        <p>Le constructeur aéronautique Airbus semble vouloir offrir le rêve d’Icare à tout un chacun. L’entreprise planche sur un projet d’engin volant électrique et une voiture volante capable de transporter un passager au sein des villes de demain, devrait voir le jour d’ici la fin de l’année.
        </p>

        <p>Aliquam ultrices luctus purus, quis ultrices sem finibus ut. Maecenas aliquet interdum lacinia. Praesent placerat dignissim dui, a porttitor lorem porta quis. Integer tincidunt eleifend eros ac sollicitudin. Donec ullamcorper posuere condimentum. Vestibulum gravida ultrices blandit. Etiam et sollicitudin metus. Nam at tincidunt metus. Cras aliquet nibh at imperdiet volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc efficitur finibus viverra. Sed at ipsum et turpis vehicula sollicitudin. Mauris sit amet libero eu sem fermentum aliquet sit amet vitae tortor. Etiam efficitur ullamcorper augue at consectetur.
        </p>
    </div>
</section>
<aside>
    <div>
        <div>
            <p class=\"number\">42</p>
        </div>
        <p>Mots lus</p>
    </div>
    <div>
        <div>
            <p class=\"number\">26s</p>
        </div>
        <p>Temps de lecture</p>
    </div>
</aside>

<section class=\"difficulty row\">
    <div class=\"col-xs-8 col-md-6 col-lg-5\">
        <p class=\"\">Avez-vous trouver ce texte difficile ?</p>
        <p class=\"\">(1 si vous avez tout compris, 4 si vous avez rien compris)</p>
    </div>
    <form class=\"evaluation col-xs-4 col-md-6 col-lg-7\">
        <select>
            <option>-</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <button>Terminer</button>
    </form>
</section>

{% endblock %}", "IndexBundle:Default:lecture.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/lecture.html.twig");
    }
}
