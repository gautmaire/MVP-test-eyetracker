<?php

/* TextBundle:Default:updateTexte.html.twig */
class __TwigTemplate_7e265903aac84bd06397f998315ec47bab0bddb5fa6a978205b078401e6b2a54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "TextBundle:Default:updateTexte.html.twig", 1);
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
        $__internal_d3f18423f5f287378045dd03316629e5f010022856c188a7ae7ec818b6b03c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f18423f5f287378045dd03316629e5f010022856c188a7ae7ec818b6b03c99->enter($__internal_d3f18423f5f287378045dd03316629e5f010022856c188a7ae7ec818b6b03c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:updateTexte.html.twig"));

        $__internal_a0cd5dbfbf699bd6f13b398e31e8ef78e886b639ef6fb4e0cd609ddcebacc73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cd5dbfbf699bd6f13b398e31e8ef78e886b639ef6fb4e0cd609ddcebacc73a->enter($__internal_a0cd5dbfbf699bd6f13b398e31e8ef78e886b639ef6fb4e0cd609ddcebacc73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:updateTexte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f18423f5f287378045dd03316629e5f010022856c188a7ae7ec818b6b03c99->leave($__internal_d3f18423f5f287378045dd03316629e5f010022856c188a7ae7ec818b6b03c99_prof);

        
        $__internal_a0cd5dbfbf699bd6f13b398e31e8ef78e886b639ef6fb4e0cd609ddcebacc73a->leave($__internal_a0cd5dbfbf699bd6f13b398e31e8ef78e886b639ef6fb4e0cd609ddcebacc73a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96cee16725aeda456ced014e2130896e16aa380acb681b80b0b08fecc5cfa4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cee16725aeda456ced014e2130896e16aa380acb681b80b0b08fecc5cfa4e0->enter($__internal_96cee16725aeda456ced014e2130896e16aa380acb681b80b0b08fecc5cfa4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0e185d09f441ce9d430651656a50d3ffc688df05270229a0406730000d480ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e185d09f441ce9d430651656a50d3ffc688df05270229a0406730000d480ae->enter($__internal_d0e185d09f441ce9d430651656a50d3ffc688df05270229a0406730000d480ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title> Enregistrement de texte </title>
";
        
        $__internal_d0e185d09f441ce9d430651656a50d3ffc688df05270229a0406730000d480ae->leave($__internal_d0e185d09f441ce9d430651656a50d3ffc688df05270229a0406730000d480ae_prof);

        
        $__internal_96cee16725aeda456ced014e2130896e16aa380acb681b80b0b08fecc5cfa4e0->leave($__internal_96cee16725aeda456ced014e2130896e16aa380acb681b80b0b08fecc5cfa4e0_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_9d93dbb29409cf0b5370172fea48c655348d90bc795a1d913de8fe0dc776ee06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d93dbb29409cf0b5370172fea48c655348d90bc795a1d913de8fe0dc776ee06->enter($__internal_9d93dbb29409cf0b5370172fea48c655348d90bc795a1d913de8fe0dc776ee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_613273d232cec4432b8b5a886fdc2a7af4aa8384ab47f41fca9a4fc02e2e6306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613273d232cec4432b8b5a886fdc2a7af4aa8384ab47f41fca9a4fc02e2e6306->enter($__internal_613273d232cec4432b8b5a886fdc2a7af4aa8384ab47f41fca9a4fc02e2e6306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_613273d232cec4432b8b5a886fdc2a7af4aa8384ab47f41fca9a4fc02e2e6306->leave($__internal_613273d232cec4432b8b5a886fdc2a7af4aa8384ab47f41fca9a4fc02e2e6306_prof);

        
        $__internal_9d93dbb29409cf0b5370172fea48c655348d90bc795a1d913de8fe0dc776ee06->leave($__internal_9d93dbb29409cf0b5370172fea48c655348d90bc795a1d913de8fe0dc776ee06_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c6f0552a8f03cb198b963bc60ad8a682c1eadbb380c2f99cefec685f2073f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6f0552a8f03cb198b963bc60ad8a682c1eadbb380c2f99cefec685f2073f2d->enter($__internal_8c6f0552a8f03cb198b963bc60ad8a682c1eadbb380c2f99cefec685f2073f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ffe19748b204beb059461b216d305a6dcd1f5fc871a8e52698c71d7f39c31d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe19748b204beb059461b216d305a6dcd1f5fc871a8e52698c71d7f39c31d20->enter($__internal_ffe19748b204beb059461b216d305a6dcd1f5fc871a8e52698c71d7f39c31d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <li><a class=\"activeLink\" id=\"us-textes\" href=\"/textes\">Textes</a></li>
                    <li><a id=\"us-question\" href=\"/question\">Une question ?</a></li>
                    <li><a id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                    <li><a id=\"us-mentions-legales\" href=\"/mentions\">Mentions légales</a></li>
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
        <p> Le texte a bien été enregistré. </p>
        <a href=\"/textes\"> <button> Revenir à la page des textes. </button></a>
    </section>
";
        
        $__internal_ffe19748b204beb059461b216d305a6dcd1f5fc871a8e52698c71d7f39c31d20->leave($__internal_ffe19748b204beb059461b216d305a6dcd1f5fc871a8e52698c71d7f39c31d20_prof);

        
        $__internal_8c6f0552a8f03cb198b963bc60ad8a682c1eadbb380c2f99cefec685f2073f2d->leave($__internal_8c6f0552a8f03cb198b963bc60ad8a682c1eadbb380c2f99cefec685f2073f2d_prof);

    }

    public function getTemplateName()
    {
        return "TextBundle:Default:updateTexte.html.twig";
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
    <title> Enregistrement de texte </title>
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
                    <li><a class=\"activeLink\" id=\"us-textes\" href=\"/textes\">Textes</a></li>
                    <li><a id=\"us-question\" href=\"/question\">Une question ?</a></li>
                    <li><a id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                    <li><a id=\"us-mentions-legales\" href=\"/mentions\">Mentions légales</a></li>
                </ul>
            </nav>
            <p>See To Learn © 2017</p>
        </div>
        <img src=\"{{ asset('bundles/img/logo.png') }}\" alt=\"logo_See2Learn\" />
        <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
    </header>
    <section>
        <p> Le texte a bien été enregistré. </p>
        <a href=\"/textes\"> <button> Revenir à la page des textes. </button></a>
    </section>
{% endblock %}", "TextBundle:Default:updateTexte.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/src/TextBundle/Resources/views/Default/updateTexte.html.twig");
    }
}
