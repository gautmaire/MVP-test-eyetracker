<?php

/* IndexBundle:Default:fiche.html.twig */
class __TwigTemplate_72b7d40f382d3f81f0645e6a436209bf3fdf529108da7eae095154dff9768565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:fiche.html.twig", 1);
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
        $__internal_2c5f633ff57386f0db053191b9b32a2f0bf2dcf30561cbd3ab52dfe1811ece10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5f633ff57386f0db053191b9b32a2f0bf2dcf30561cbd3ab52dfe1811ece10->enter($__internal_2c5f633ff57386f0db053191b9b32a2f0bf2dcf30561cbd3ab52dfe1811ece10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:fiche.html.twig"));

        $__internal_d90cc52d0ace4c54f50194f99e46850db3f53b1ed1d72a86310cb3f0bee221b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90cc52d0ace4c54f50194f99e46850db3f53b1ed1d72a86310cb3f0bee221b9->enter($__internal_d90cc52d0ace4c54f50194f99e46850db3f53b1ed1d72a86310cb3f0bee221b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:fiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c5f633ff57386f0db053191b9b32a2f0bf2dcf30561cbd3ab52dfe1811ece10->leave($__internal_2c5f633ff57386f0db053191b9b32a2f0bf2dcf30561cbd3ab52dfe1811ece10_prof);

        
        $__internal_d90cc52d0ace4c54f50194f99e46850db3f53b1ed1d72a86310cb3f0bee221b9->leave($__internal_d90cc52d0ace4c54f50194f99e46850db3f53b1ed1d72a86310cb3f0bee221b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65fad3de5843ccdc52d7a592e7eda48ddc640521575fe80b4c336b8ebbad8d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fad3de5843ccdc52d7a592e7eda48ddc640521575fe80b4c336b8ebbad8d06->enter($__internal_65fad3de5843ccdc52d7a592e7eda48ddc640521575fe80b4c336b8ebbad8d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e9ba0c22c48f11df4ede53fec20a541c91d6f8112a35cc27abcd4a2bde8a71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9ba0c22c48f11df4ede53fec20a541c91d6f8112a35cc27abcd4a2bde8a71e->enter($__internal_1e9ba0c22c48f11df4ede53fec20a541c91d6f8112a35cc27abcd4a2bde8a71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Tableau de bord | See2Learn</title>
";
        
        $__internal_1e9ba0c22c48f11df4ede53fec20a541c91d6f8112a35cc27abcd4a2bde8a71e->leave($__internal_1e9ba0c22c48f11df4ede53fec20a541c91d6f8112a35cc27abcd4a2bde8a71e_prof);

        
        $__internal_65fad3de5843ccdc52d7a592e7eda48ddc640521575fe80b4c336b8ebbad8d06->leave($__internal_65fad3de5843ccdc52d7a592e7eda48ddc640521575fe80b4c336b8ebbad8d06_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_ae9a5e9c53719f6b0f3290e0113aebd46ff884b005710cf705cd00c749a8689b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9a5e9c53719f6b0f3290e0113aebd46ff884b005710cf705cd00c749a8689b->enter($__internal_ae9a5e9c53719f6b0f3290e0113aebd46ff884b005710cf705cd00c749a8689b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_384b4c45044a1f559955a6276a1a4b4662adf245c7123c13fc910bcf897bffbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384b4c45044a1f559955a6276a1a4b4662adf245c7123c13fc910bcf897bffbe->enter($__internal_384b4c45044a1f559955a6276a1a4b4662adf245c7123c13fc910bcf897bffbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/lecture.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/calendrier.css"), "html", null, true);
        echo "\">
";
        
        $__internal_384b4c45044a1f559955a6276a1a4b4662adf245c7123c13fc910bcf897bffbe->leave($__internal_384b4c45044a1f559955a6276a1a4b4662adf245c7123c13fc910bcf897bffbe_prof);

        
        $__internal_ae9a5e9c53719f6b0f3290e0113aebd46ff884b005710cf705cd00c749a8689b->leave($__internal_ae9a5e9c53719f6b0f3290e0113aebd46ff884b005710cf705cd00c749a8689b_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_067d24745c45faf59cb2640df860ac7f99c9168186455c2746165165fbeef407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067d24745c45faf59cb2640df860ac7f99c9168186455c2746165165fbeef407->enter($__internal_067d24745c45faf59cb2640df860ac7f99c9168186455c2746165165fbeef407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e7def7518823eff8dcc18ff637efd35c523782b27efb52010546326ce59f771c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7def7518823eff8dcc18ff637efd35c523782b27efb52010546326ce59f771c->enter($__internal_e7def7518823eff8dcc18ff637efd35c523782b27efb52010546326ce59f771c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "<header class=\"col-xs-12\">
    <nav class=\"\">
        <a href=\"javascript:void(0);\" onclick=\"myFunction()\">
            <div class=\"menu-responsive-hamburger col-xs-1\">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class=\"menu-responsive-cross col-xs-1\">
                <div class=\"cross\"></div>
            </div>
        </a>
        <ul class=\"topnav\" id=\"myTopnav\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/profil.png"), "html", null, true);
        echo "\">
            <p>Marc Alpha</p>
            <li><a href=\"#\">Tableau de bord</a></li>
            <li><a href=\"#\">Textes</a></li>
            <li><a href=\"#\">Une question ?</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Mentions légales</a></li>
        </ul>
    </nav>
    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo_See2Learn\" class=\"col-xs-2\"/>
    <button id=\"logout\" class=\"col-xs-1\">Déconnexion</button>
    <h2 class=\"col-xs-12\">Langue à apprendre :
        <form>
            <select>
                <option>Anglais</option>
                <option>Français</option>
                <option>Espagnol</option>
            </select>
        </form>
    </h2>
</header>

<section class=\"col-xs-12\" id=\"tableau\">
    <div class=\"col-xs-5\">

        <div class=\"col-xs-12\" id=\"infos\">
            <h3>Informations personnelles</h2>
                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/profil.png"), "html", null, true);
        echo "\">
                <p>Nom : ALPHA <br />
                    Prénom : Alpha<br/>
                    Mot de passe : ******
                    <br/>Email : marc.alpha@gmail.com</p>
                <button>Modifier</button>
        </div>

        <div class=\"\" id=\"cal\">
            <h3>Calendrier</h2>
                <div id=\"datepicker\"></div>
                <p><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/red.png"), "html", null, true);
        echo "\">500 mots et +</p>
                <p><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/orange.png"), "html", null, true);
        echo "\">entre 499 et 300 mots</p>
                <p><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/yellow.png"), "html", null, true);
        echo "\">299 mots et -</p>
        </div>

    </div>

    <div class=\"col-xs-5\" id=\"stats\">
        <h3>Statistiques</h2>
            <p><span class=\"number-grey\">16</span> Textes lus</p>
            <p><span class=\"number-blue\">1 600</span> Mots lus</p>
            <p><span class=\"number-yellow\">45%</span> Des mots en anglais</p>
            <p><span class=\"number-grey\">55%</span> Moyennes utilisateurs</p>
            <p><span class=\"number-blue\">4H</span> Temps de lecture</p>
    </div>

    <div class=\"col-xs-10\" id=\"graph\">
        <h3>Graphiques</h2>
    </div>

</section>

<footer class=\"col-xs-12\">

</footer>

<!-- script pour le calendrier -->
<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script>
    \$(function(){
        \$(\"#datepicker\").datepicker();
    });
</script>

";
        
        $__internal_e7def7518823eff8dcc18ff637efd35c523782b27efb52010546326ce59f771c->leave($__internal_e7def7518823eff8dcc18ff637efd35c523782b27efb52010546326ce59f771c_prof);

        
        $__internal_067d24745c45faf59cb2640df860ac7f99c9168186455c2746165165fbeef407->leave($__internal_067d24745c45faf59cb2640df860ac7f99c9168186455c2746165165fbeef407_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:fiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 66,  163 => 65,  159 => 64,  145 => 53,  124 => 35,  112 => 26,  97 => 13,  88 => 12,  76 => 9,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title>Tableau de bord | See2Learn</title>
{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/lecture.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/calendrier.css') }}\">
{% endblock %}

{% block content %}
<header class=\"col-xs-12\">
    <nav class=\"\">
        <a href=\"javascript:void(0);\" onclick=\"myFunction()\">
            <div class=\"menu-responsive-hamburger col-xs-1\">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class=\"menu-responsive-cross col-xs-1\">
                <div class=\"cross\"></div>
            </div>
        </a>
        <ul class=\"topnav\" id=\"myTopnav\">
            <img src=\"{{ asset('bundles/img/profil.png') }}\">
            <p>Marc Alpha</p>
            <li><a href=\"#\">Tableau de bord</a></li>
            <li><a href=\"#\">Textes</a></li>
            <li><a href=\"#\">Une question ?</a></li>
            <li><a href=\"#\">Twitter</a></li>
            <li><a href=\"#\">Mentions légales</a></li>
        </ul>
    </nav>
    <img src=\"{{ asset('bundles/img/logo.png') }}\" alt=\"logo_See2Learn\" class=\"col-xs-2\"/>
    <button id=\"logout\" class=\"col-xs-1\">Déconnexion</button>
    <h2 class=\"col-xs-12\">Langue à apprendre :
        <form>
            <select>
                <option>Anglais</option>
                <option>Français</option>
                <option>Espagnol</option>
            </select>
        </form>
    </h2>
</header>

<section class=\"col-xs-12\" id=\"tableau\">
    <div class=\"col-xs-5\">

        <div class=\"col-xs-12\" id=\"infos\">
            <h3>Informations personnelles</h2>
                <img src=\"{{ asset('bundles/img/profil.png') }}\">
                <p>Nom : ALPHA <br />
                    Prénom : Alpha<br/>
                    Mot de passe : ******
                    <br/>Email : marc.alpha@gmail.com</p>
                <button>Modifier</button>
        </div>

        <div class=\"\" id=\"cal\">
            <h3>Calendrier</h2>
                <div id=\"datepicker\"></div>
                <p><img src=\"{{ asset('bundles/img/red.png') }}\">500 mots et +</p>
                <p><img src=\"{{ asset('bundles/img/orange.png') }}\">entre 499 et 300 mots</p>
                <p><img src=\"{{ asset('bundles/img/yellow.png') }}\">299 mots et -</p>
        </div>

    </div>

    <div class=\"col-xs-5\" id=\"stats\">
        <h3>Statistiques</h2>
            <p><span class=\"number-grey\">16</span> Textes lus</p>
            <p><span class=\"number-blue\">1 600</span> Mots lus</p>
            <p><span class=\"number-yellow\">45%</span> Des mots en anglais</p>
            <p><span class=\"number-grey\">55%</span> Moyennes utilisateurs</p>
            <p><span class=\"number-blue\">4H</span> Temps de lecture</p>
    </div>

    <div class=\"col-xs-10\" id=\"graph\">
        <h3>Graphiques</h2>
    </div>

</section>

<footer class=\"col-xs-12\">

</footer>

<!-- script pour le calendrier -->
<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script>
    \$(function(){
        \$(\"#datepicker\").datepicker();
    });
</script>

{% endblock %}", "IndexBundle:Default:fiche.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/fiche.html.twig");
    }
}
