<?php

/* TextBundle:Default:updateTexte.html.twig */
class __TwigTemplate_d58666d1e704898c04b968cbe8a81f3fcd894d6d2190627629ad7439edfe9fd5 extends Twig_Template
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
        $__internal_9e957157b6c6625bca2e59b942878867897ff0ad1c88d78e884e56e6e743777d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e957157b6c6625bca2e59b942878867897ff0ad1c88d78e884e56e6e743777d->enter($__internal_9e957157b6c6625bca2e59b942878867897ff0ad1c88d78e884e56e6e743777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:updateTexte.html.twig"));

        $__internal_8fd541069d493023df53f59222927729899cdaee26812bdaab353d3630ebcc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd541069d493023df53f59222927729899cdaee26812bdaab353d3630ebcc79->enter($__internal_8fd541069d493023df53f59222927729899cdaee26812bdaab353d3630ebcc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:updateTexte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e957157b6c6625bca2e59b942878867897ff0ad1c88d78e884e56e6e743777d->leave($__internal_9e957157b6c6625bca2e59b942878867897ff0ad1c88d78e884e56e6e743777d_prof);

        
        $__internal_8fd541069d493023df53f59222927729899cdaee26812bdaab353d3630ebcc79->leave($__internal_8fd541069d493023df53f59222927729899cdaee26812bdaab353d3630ebcc79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_badebe179c637fbf9a44d2e1e9fc5f0fd686d55dc9a55332385c41b1115626e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badebe179c637fbf9a44d2e1e9fc5f0fd686d55dc9a55332385c41b1115626e6->enter($__internal_badebe179c637fbf9a44d2e1e9fc5f0fd686d55dc9a55332385c41b1115626e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aab58149ffd1ce1844e8022b6152cee1bf62eba108e2037bee56696049e6a184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab58149ffd1ce1844e8022b6152cee1bf62eba108e2037bee56696049e6a184->enter($__internal_aab58149ffd1ce1844e8022b6152cee1bf62eba108e2037bee56696049e6a184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title> Enregistrement de texte </title>
";
        
        $__internal_aab58149ffd1ce1844e8022b6152cee1bf62eba108e2037bee56696049e6a184->leave($__internal_aab58149ffd1ce1844e8022b6152cee1bf62eba108e2037bee56696049e6a184_prof);

        
        $__internal_badebe179c637fbf9a44d2e1e9fc5f0fd686d55dc9a55332385c41b1115626e6->leave($__internal_badebe179c637fbf9a44d2e1e9fc5f0fd686d55dc9a55332385c41b1115626e6_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_b296f447d37ed7ef644bbfdf10b86d8f0ebd60b26329a685f137f006b4b9d775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b296f447d37ed7ef644bbfdf10b86d8f0ebd60b26329a685f137f006b4b9d775->enter($__internal_b296f447d37ed7ef644bbfdf10b86d8f0ebd60b26329a685f137f006b4b9d775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_e280af14916232f09b2f0652b9c90ae659f1d25da286ba63d6dea00f513bdd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e280af14916232f09b2f0652b9c90ae659f1d25da286ba63d6dea00f513bdd59->enter($__internal_e280af14916232f09b2f0652b9c90ae659f1d25da286ba63d6dea00f513bdd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_e280af14916232f09b2f0652b9c90ae659f1d25da286ba63d6dea00f513bdd59->leave($__internal_e280af14916232f09b2f0652b9c90ae659f1d25da286ba63d6dea00f513bdd59_prof);

        
        $__internal_b296f447d37ed7ef644bbfdf10b86d8f0ebd60b26329a685f137f006b4b9d775->leave($__internal_b296f447d37ed7ef644bbfdf10b86d8f0ebd60b26329a685f137f006b4b9d775_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_041e5f8bdc4b984b1e7df347c1adda7e62eabc18342dd5036df1763c5e5ed8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041e5f8bdc4b984b1e7df347c1adda7e62eabc18342dd5036df1763c5e5ed8e4->enter($__internal_041e5f8bdc4b984b1e7df347c1adda7e62eabc18342dd5036df1763c5e5ed8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e08577cb35af7242f3acd1ebd674ac0199000fe115d46d7186b88674fd6ac39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08577cb35af7242f3acd1ebd674ac0199000fe115d46d7186b88674fd6ac39b->enter($__internal_e08577cb35af7242f3acd1ebd674ac0199000fe115d46d7186b88674fd6ac39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e08577cb35af7242f3acd1ebd674ac0199000fe115d46d7186b88674fd6ac39b->leave($__internal_e08577cb35af7242f3acd1ebd674ac0199000fe115d46d7186b88674fd6ac39b_prof);

        
        $__internal_041e5f8bdc4b984b1e7df347c1adda7e62eabc18342dd5036df1763c5e5ed8e4->leave($__internal_041e5f8bdc4b984b1e7df347c1adda7e62eabc18342dd5036df1763c5e5ed8e4_prof);

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
{% endblock %}", "TextBundle:Default:updateTexte.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/TextBundle/Resources/views/Default/updateTexte.html.twig");
    }
}
