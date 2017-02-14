<?php

/* UserBundle:Default:lecture.html.twig */
class __TwigTemplate_ecfc0e1350d8d3331c33c17e8444ef55cb3ead0672e4252383172b61705dfd11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "UserBundle:Default:lecture.html.twig", 1);
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
        $__internal_aacae5e4b6a1d430d34242567cb91ecacfa782a1952efe9acd575b61d58a4f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacae5e4b6a1d430d34242567cb91ecacfa782a1952efe9acd575b61d58a4f3b->enter($__internal_aacae5e4b6a1d430d34242567cb91ecacfa782a1952efe9acd575b61d58a4f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:lecture.html.twig"));

        $__internal_ab87189689e1e32ec43d443b929fa98d20fa4360a756927c2e6a37fb6c8c0a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab87189689e1e32ec43d443b929fa98d20fa4360a756927c2e6a37fb6c8c0a22->enter($__internal_ab87189689e1e32ec43d443b929fa98d20fa4360a756927c2e6a37fb6c8c0a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:lecture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aacae5e4b6a1d430d34242567cb91ecacfa782a1952efe9acd575b61d58a4f3b->leave($__internal_aacae5e4b6a1d430d34242567cb91ecacfa782a1952efe9acd575b61d58a4f3b_prof);

        
        $__internal_ab87189689e1e32ec43d443b929fa98d20fa4360a756927c2e6a37fb6c8c0a22->leave($__internal_ab87189689e1e32ec43d443b929fa98d20fa4360a756927c2e6a37fb6c8c0a22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6acd4eab5bc8186ea6fa305089acaf47d5afcdb1212e356f025181ccb679cfca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acd4eab5bc8186ea6fa305089acaf47d5afcdb1212e356f025181ccb679cfca->enter($__internal_6acd4eab5bc8186ea6fa305089acaf47d5afcdb1212e356f025181ccb679cfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40df979df587a721e7e52e5a33d9a55a5062bda9c3e1d667296ffb60f8545e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40df979df587a721e7e52e5a33d9a55a5062bda9c3e1d667296ffb60f8545e6f->enter($__internal_40df979df587a721e7e52e5a33d9a55a5062bda9c3e1d667296ffb60f8545e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Lecture</title>
";
        
        $__internal_40df979df587a721e7e52e5a33d9a55a5062bda9c3e1d667296ffb60f8545e6f->leave($__internal_40df979df587a721e7e52e5a33d9a55a5062bda9c3e1d667296ffb60f8545e6f_prof);

        
        $__internal_6acd4eab5bc8186ea6fa305089acaf47d5afcdb1212e356f025181ccb679cfca->leave($__internal_6acd4eab5bc8186ea6fa305089acaf47d5afcdb1212e356f025181ccb679cfca_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_ce8c67de0c5775a2e80037225da9dad24cfca5156d09aa2527728d451d8f2b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8c67de0c5775a2e80037225da9dad24cfca5156d09aa2527728d451d8f2b82->enter($__internal_ce8c67de0c5775a2e80037225da9dad24cfca5156d09aa2527728d451d8f2b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_5c359a26ff2fb9f00048c6fc196c5c9bf5d52647698772ab2c22f82b0521394d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c359a26ff2fb9f00048c6fc196c5c9bf5d52647698772ab2c22f82b0521394d->enter($__internal_5c359a26ff2fb9f00048c6fc196c5c9bf5d52647698772ab2c22f82b0521394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_5c359a26ff2fb9f00048c6fc196c5c9bf5d52647698772ab2c22f82b0521394d->leave($__internal_5c359a26ff2fb9f00048c6fc196c5c9bf5d52647698772ab2c22f82b0521394d_prof);

        
        $__internal_ce8c67de0c5775a2e80037225da9dad24cfca5156d09aa2527728d451d8f2b82->leave($__internal_ce8c67de0c5775a2e80037225da9dad24cfca5156d09aa2527728d451d8f2b82_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_02a33ce72de7caaf9b918c386fe71c7f939a04f4cf9a1378bb128140dd220c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a33ce72de7caaf9b918c386fe71c7f939a04f4cf9a1378bb128140dd220c8c->enter($__internal_02a33ce72de7caaf9b918c386fe71c7f939a04f4cf9a1378bb128140dd220c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_398ffb7684fc1cde1bd44e2fa0a711d8bb86b7660a427a11a41d193dfc02a4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ffb7684fc1cde1bd44e2fa0a711d8bb86b7660a427a11a41d193dfc02a4bc->enter($__internal_398ffb7684fc1cde1bd44e2fa0a711d8bb86b7660a427a11a41d193dfc02a4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        ";
        // line 22
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 23
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 25
        echo "        <nav>
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

<section class=\"lecture\">
    <h2> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "titre", array()), "html", null, true);
        echo "</h2>
    <div class=\"canvas\">
        <p>
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "contenu", array()), "html", null, true);
        echo "
        </p>
    </div>
</section>
<aside>
    <div class=\"lastWord\">
        <p class=\"\">Dernier mot lu</p>
        <p>Constructeur</p>
    </div>
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
    <form method=\"POST\" action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateTexte", array("id" => $this->getAttribute((isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "id", array()))), "html", null, true);
        echo "\" class=\"evaluation col-xs-4 col-md-6 col-lg-7\">
        <select name=\"note\">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        ";
        // line 79
        $context["lu"] = "N";
        // line 80
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte")), "user", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 81
            echo "            ";
            if (($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 82
                echo "                <a href=\"/textes\"> <button> Terminer </button></a>
                ";
                // line 83
                $context["lu"] = "O";
                // line 84
                echo "            ";
            }
            // line 85
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        ";
        if (((isset($context["lu"]) ? $context["lu"] : $this->getContext($context, "lu")) == "N")) {
            // line 87
            echo "            <button>Terminer</button>
        ";
        }
        // line 89
        echo "    </form>
</section>
";
        
        $__internal_398ffb7684fc1cde1bd44e2fa0a711d8bb86b7660a427a11a41d193dfc02a4bc->leave($__internal_398ffb7684fc1cde1bd44e2fa0a711d8bb86b7660a427a11a41d193dfc02a4bc_prof);

        
        $__internal_02a33ce72de7caaf9b918c386fe71c7f939a04f4cf9a1378bb128140dd220c8c->leave($__internal_02a33ce72de7caaf9b918c386fe71c7f939a04f4cf9a1378bb128140dd220c8c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:lecture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 89,  213 => 87,  210 => 86,  204 => 85,  201 => 84,  199 => 83,  196 => 82,  193 => 81,  188 => 80,  186 => 79,  176 => 72,  145 => 44,  139 => 41,  131 => 36,  118 => 25,  110 => 23,  108 => 22,  103 => 20,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

<section class=\"lecture\">
    <h2> {{ texte.titre }}</h2>
    <div class=\"canvas\">
        <p>
            {{ texte.contenu }}
        </p>
    </div>
</section>
<aside>
    <div class=\"lastWord\">
        <p class=\"\">Dernier mot lu</p>
        <p>Constructeur</p>
    </div>
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
    <form method=\"POST\" action=\"{{ path('updateTexte', {id: texte.id}) }}\" class=\"evaluation col-xs-4 col-md-6 col-lg-7\">
        <select name=\"note\">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        {% set lu = \"N\" %}
        {% for user in texte.user %}
            {% if user.id == app.user.id %}
                <a href=\"/textes\"> <button> Terminer </button></a>
                {% set lu = \"O\" %}
            {% endif %}
        {% endfor %}
        {% if lu == \"N\" %}
            <button>Terminer</button>
        {% endif %}
    </form>
</section>
{% endblock %}
", "UserBundle:Default:lecture.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/UserBundle/Resources/views/Default/lecture.html.twig");
    }
}
