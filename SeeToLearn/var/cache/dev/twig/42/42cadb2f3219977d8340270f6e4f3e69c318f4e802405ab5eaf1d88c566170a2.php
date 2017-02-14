<?php

/* TextBundle:Default:listeTextes.html.twig */
class __TwigTemplate_d4b74b6f99b6c5a9065161807c1718121f4a38ec71cabfe58a09b4cd6a30b027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "TextBundle:Default:listeTextes.html.twig", 1);
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
        $__internal_1b6181b146360967e0067254edd1a34079408b4b3317185758c81f9fd0e1cd4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6181b146360967e0067254edd1a34079408b4b3317185758c81f9fd0e1cd4a->enter($__internal_1b6181b146360967e0067254edd1a34079408b4b3317185758c81f9fd0e1cd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:listeTextes.html.twig"));

        $__internal_76d0b2f0033ee0e70740a368d5cb92871f727651f84932fcc8580ab3d4e4157c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d0b2f0033ee0e70740a368d5cb92871f727651f84932fcc8580ab3d4e4157c->enter($__internal_76d0b2f0033ee0e70740a368d5cb92871f727651f84932fcc8580ab3d4e4157c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:listeTextes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6181b146360967e0067254edd1a34079408b4b3317185758c81f9fd0e1cd4a->leave($__internal_1b6181b146360967e0067254edd1a34079408b4b3317185758c81f9fd0e1cd4a_prof);

        
        $__internal_76d0b2f0033ee0e70740a368d5cb92871f727651f84932fcc8580ab3d4e4157c->leave($__internal_76d0b2f0033ee0e70740a368d5cb92871f727651f84932fcc8580ab3d4e4157c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef5089e32035aa0342b143f5f1f2a4afc9cc8c5cce41c3b4edac6aafe1b32b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5089e32035aa0342b143f5f1f2a4afc9cc8c5cce41c3b4edac6aafe1b32b5c->enter($__internal_ef5089e32035aa0342b143f5f1f2a4afc9cc8c5cce41c3b4edac6aafe1b32b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3fe8cd715aab9c23c19a247b484bce2e166a22b8b8b6f023cc366be54c0c83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fe8cd715aab9c23c19a247b484bce2e166a22b8b8b6f023cc366be54c0c83c->enter($__internal_e3fe8cd715aab9c23c19a247b484bce2e166a22b8b8b6f023cc366be54c0c83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title> Textes </title>
";
        
        $__internal_e3fe8cd715aab9c23c19a247b484bce2e166a22b8b8b6f023cc366be54c0c83c->leave($__internal_e3fe8cd715aab9c23c19a247b484bce2e166a22b8b8b6f023cc366be54c0c83c_prof);

        
        $__internal_ef5089e32035aa0342b143f5f1f2a4afc9cc8c5cce41c3b4edac6aafe1b32b5c->leave($__internal_ef5089e32035aa0342b143f5f1f2a4afc9cc8c5cce41c3b4edac6aafe1b32b5c_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_8a3c68c129d864b97328ba13730a99cec8d17b7b2c0b909edcf902cbc8455984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3c68c129d864b97328ba13730a99cec8d17b7b2c0b909edcf902cbc8455984->enter($__internal_8a3c68c129d864b97328ba13730a99cec8d17b7b2c0b909edcf902cbc8455984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_ddb5087b4735943b4c2deaa71f07f4e75a3b8f87b28b59496a89bbb225907a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb5087b4735943b4c2deaa71f07f4e75a3b8f87b28b59496a89bbb225907a6d->enter($__internal_ddb5087b4735943b4c2deaa71f07f4e75a3b8f87b28b59496a89bbb225907a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"css/users.css\">
";
        
        $__internal_ddb5087b4735943b4c2deaa71f07f4e75a3b8f87b28b59496a89bbb225907a6d->leave($__internal_ddb5087b4735943b4c2deaa71f07f4e75a3b8f87b28b59496a89bbb225907a6d_prof);

        
        $__internal_8a3c68c129d864b97328ba13730a99cec8d17b7b2c0b909edcf902cbc8455984->leave($__internal_8a3c68c129d864b97328ba13730a99cec8d17b7b2c0b909edcf902cbc8455984_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e22bb75655b00e3d49ddb746be2216639fefe91d015ba7e519cfe53ca80139a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22bb75655b00e3d49ddb746be2216639fefe91d015ba7e519cfe53ca80139a6->enter($__internal_e22bb75655b00e3d49ddb746be2216639fefe91d015ba7e519cfe53ca80139a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5377104ae444687033307257e0b9a276af5f02bab6fe4c6771f9ed7642567a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5377104ae444687033307257e0b9a276af5f02bab6fe4c6771f9ed7642567a7->enter($__internal_f5377104ae444687033307257e0b9a276af5f02bab6fe4c6771f9ed7642567a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <h3>Gautier Maire</h3>
            <nav>
                <ul>
                    <li><a id=\"us-tab-bord\" href=\"tableau-bord.html\">Tableau de bord</a></li>
                    <li><a class=\"activeLink\" id=\"us-textes\" href=\"textes.html\">Textes</a></li>
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
        <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
    </header>

    <section>
        <div class=\"langue row\">
            <p class=\"col-xs-6\">Langue à apprendre :</p>
            <form class=\"col-xs-6\" method=\"POST\" action=\"/listeTextes\">
                <select name=\"langue\">
                    <option> -- </option>
                    <option> anglais </option>
                    <option> français </option>
                    <option> espagnol </option>
                </select>
                <button> Valider </button>
            </form>
        </div>

        <div class=\"texteConteneur\">
        ";
        // line 52
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "")) {
            // line 53
            echo "            <h2>Propositions de textes</h2>
            <p>Grâce aux données que nous récoltons lors de votre lecture, nous vous proposons les textes les plus adaptés pour votre apprentissage.</p>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 56
                echo "            <div id=\"textes\" class=\"row list-group\">
                <div class=\"item  col-xs-4 col-lg-4\">
                    <div class=\"thumbnail\">
                        <h3> Titre de l'oeuvre: ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
                echo "</h3>
                        <p class=\"group inner list-group-item-text\"> Auteur de l'oeuvre: ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "auteur", array()), "html", null, true);
                echo "</p>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-9\">
                                <p>31% de nouveaux mots</p>
                            </div>
                            <div class=\"col-xs-12 col-md-3\">
                                <a class=\"\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lecture", array("id" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                echo "\"><button>See</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "        ";
        } else {
            // line 74
            echo "            <h2>Propositions de textes en ";
            echo twig_escape_filter($this->env, (isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")), "html", null, true);
            echo "</h2>
            <p>Grâce aux données que nous récoltons lors de votre lecture, nous vous proposons les textes les plus adaptés pour votre apprentissage.</p>
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 77
                echo "                <div id=\"textes\" class=\"row list-group\">
                    ";
                // line 78
                if (($this->getAttribute($context["text"], "langue", array()) == (isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")))) {
                    // line 79
                    echo "                        <div class=\"item  col-xs-4 col-lg-4\">
                            <div class=\"thumbnail\">
                                <h3> Titre de l'oeuvre: ";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
                    echo "</h3>
                                <p class=\"group inner list-group-item-text\"> Auteur de l'oeuvre: ";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "auteur", array()), "html", null, true);
                    echo "</p>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-md-9\">
                                        <p>31% de nouveaux mots</p>
                                    </div>
                                    <div class=\"col-xs-12 col-md-3\">
                                        <a class=\"\" href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lecture", array("id" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                    echo "\"><button>See</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                // line 94
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        ";
        }
        // line 97
        echo "        </div>
    </section>
";
        
        $__internal_f5377104ae444687033307257e0b9a276af5f02bab6fe4c6771f9ed7642567a7->leave($__internal_f5377104ae444687033307257e0b9a276af5f02bab6fe4c6771f9ed7642567a7_prof);

        
        $__internal_e22bb75655b00e3d49ddb746be2216639fefe91d015ba7e519cfe53ca80139a6->leave($__internal_e22bb75655b00e3d49ddb746be2216639fefe91d015ba7e519cfe53ca80139a6_prof);

    }

    public function getTemplateName()
    {
        return "TextBundle:Default:listeTextes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 97,  231 => 96,  224 => 94,  215 => 88,  206 => 82,  202 => 81,  198 => 79,  196 => 78,  193 => 77,  189 => 76,  183 => 74,  180 => 73,  167 => 66,  158 => 60,  154 => 59,  149 => 56,  145 => 55,  141 => 53,  139 => 52,  117 => 33,  101 => 20,  91 => 12,  82 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title> Textes </title>
{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"css/users.css\">
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
                    <li><a id=\"us-tab-bord\" href=\"tableau-bord.html\">Tableau de bord</a></li>
                    <li><a class=\"activeLink\" id=\"us-textes\" href=\"textes.html\">Textes</a></li>
                    <li><a id=\"us-question\" href=\"#\">Une question ?</a></li>
                    <li><a id=\"us-twitter\" href=\"#\">Twitter</a></li>
                    <li><a id=\"us-mentions-legales\" href=\"#\">Mentions légales</a></li>
                </ul>
            </nav>
        </div>
        <img src=\"{{ asset('bundles/img/logo.png') }}\" alt=\"logo_See2Learn\" />
        <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
    </header>

    <section>
        <div class=\"langue row\">
            <p class=\"col-xs-6\">Langue à apprendre :</p>
            <form class=\"col-xs-6\" method=\"POST\" action=\"/listeTextes\">
                <select name=\"langue\">
                    <option> -- </option>
                    <option> anglais </option>
                    <option> français </option>
                    <option> espagnol </option>
                </select>
                <button> Valider </button>
            </form>
        </div>

        <div class=\"texteConteneur\">
        {% if(langue == '') %}
            <h2>Propositions de textes</h2>
            <p>Grâce aux données que nous récoltons lors de votre lecture, nous vous proposons les textes les plus adaptés pour votre apprentissage.</p>
            {% for text in texts %}
            <div id=\"textes\" class=\"row list-group\">
                <div class=\"item  col-xs-4 col-lg-4\">
                    <div class=\"thumbnail\">
                        <h3> Titre de l'oeuvre: {{ text.titre }}</h3>
                        <p class=\"group inner list-group-item-text\"> Auteur de l'oeuvre: {{ text.auteur }}</p>
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-9\">
                                <p>31% de nouveaux mots</p>
                            </div>
                            <div class=\"col-xs-12 col-md-3\">
                                <a class=\"\" href=\"{{ path('lecture', {id: text.id}) }}\"><button>See</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        {% else %}
            <h2>Propositions de textes en {{ langue }}</h2>
            <p>Grâce aux données que nous récoltons lors de votre lecture, nous vous proposons les textes les plus adaptés pour votre apprentissage.</p>
            {% for text in texts %}
                <div id=\"textes\" class=\"row list-group\">
                    {% if(text.langue == langue) %}
                        <div class=\"item  col-xs-4 col-lg-4\">
                            <div class=\"thumbnail\">
                                <h3> Titre de l'oeuvre: {{ text.titre }}</h3>
                                <p class=\"group inner list-group-item-text\"> Auteur de l'oeuvre: {{ text.auteur }}</p>
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-md-9\">
                                        <p>31% de nouveaux mots</p>
                                    </div>
                                    <div class=\"col-xs-12 col-md-3\">
                                        <a class=\"\" href=\"{{ path('lecture', {id: text.id}) }}\"><button>See</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        {% endif %}
        </div>
    </section>
{% endblock %}", "TextBundle:Default:listeTextes.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/TextBundle/Resources/views/Default/listeTextes.html.twig");
    }
}
