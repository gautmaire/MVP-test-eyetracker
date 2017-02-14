<?php

/* TextBundle:Default:textes.html.twig */
class __TwigTemplate_e9cddd0ef381c8941eb3f665bef8c720836c25ccc285d7c5645200f9c41f3c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "TextBundle:Default:textes.html.twig", 1);
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
        $__internal_3ff6760498ace7e20b6962a83cc216effb3c2efe2849937bd6bdb5d70b10ce83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff6760498ace7e20b6962a83cc216effb3c2efe2849937bd6bdb5d70b10ce83->enter($__internal_3ff6760498ace7e20b6962a83cc216effb3c2efe2849937bd6bdb5d70b10ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:textes.html.twig"));

        $__internal_ad64b74244948bee41499d37ea68a41b1d0f572e1ac908389ce86dec0a3389f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad64b74244948bee41499d37ea68a41b1d0f572e1ac908389ce86dec0a3389f8->enter($__internal_ad64b74244948bee41499d37ea68a41b1d0f572e1ac908389ce86dec0a3389f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:textes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ff6760498ace7e20b6962a83cc216effb3c2efe2849937bd6bdb5d70b10ce83->leave($__internal_3ff6760498ace7e20b6962a83cc216effb3c2efe2849937bd6bdb5d70b10ce83_prof);

        
        $__internal_ad64b74244948bee41499d37ea68a41b1d0f572e1ac908389ce86dec0a3389f8->leave($__internal_ad64b74244948bee41499d37ea68a41b1d0f572e1ac908389ce86dec0a3389f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c890bc8d03a67391fe40d5b379a39b4922db2b96cdcd238b813186a2fc075e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c890bc8d03a67391fe40d5b379a39b4922db2b96cdcd238b813186a2fc075e39->enter($__internal_c890bc8d03a67391fe40d5b379a39b4922db2b96cdcd238b813186a2fc075e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f32cd726570f14c133f246f50a9e86997fcd63fc5203d1c15500bbe57f797f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32cd726570f14c133f246f50a9e86997fcd63fc5203d1c15500bbe57f797f98->enter($__internal_f32cd726570f14c133f246f50a9e86997fcd63fc5203d1c15500bbe57f797f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Textes</title>
";
        
        $__internal_f32cd726570f14c133f246f50a9e86997fcd63fc5203d1c15500bbe57f797f98->leave($__internal_f32cd726570f14c133f246f50a9e86997fcd63fc5203d1c15500bbe57f797f98_prof);

        
        $__internal_c890bc8d03a67391fe40d5b379a39b4922db2b96cdcd238b813186a2fc075e39->leave($__internal_c890bc8d03a67391fe40d5b379a39b4922db2b96cdcd238b813186a2fc075e39_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_58bc0db8db3ba21fa59e83e81447000939a8a11c039d8c170e2e9007fe528f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bc0db8db3ba21fa59e83e81447000939a8a11c039d8c170e2e9007fe528f8e->enter($__internal_58bc0db8db3ba21fa59e83e81447000939a8a11c039d8c170e2e9007fe528f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_7562fbc3fd903f7222153e8e26227c263a6a5048a72a06641912bc43be2d828e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7562fbc3fd903f7222153e8e26227c263a6a5048a72a06641912bc43be2d828e->enter($__internal_7562fbc3fd903f7222153e8e26227c263a6a5048a72a06641912bc43be2d828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_7562fbc3fd903f7222153e8e26227c263a6a5048a72a06641912bc43be2d828e->leave($__internal_7562fbc3fd903f7222153e8e26227c263a6a5048a72a06641912bc43be2d828e_prof);

        
        $__internal_58bc0db8db3ba21fa59e83e81447000939a8a11c039d8c170e2e9007fe528f8e->leave($__internal_58bc0db8db3ba21fa59e83e81447000939a8a11c039d8c170e2e9007fe528f8e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_96d2f0333e01467871c51090e930166f780bb43db898080d5e058065af48a447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d2f0333e01467871c51090e930166f780bb43db898080d5e058065af48a447->enter($__internal_96d2f0333e01467871c51090e930166f780bb43db898080d5e058065af48a447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ba766cde5cc7f31411076397093b4a022c795c8959643ada40b6bcc6a5752b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba766cde5cc7f31411076397093b4a022c795c8959643ada40b6bcc6a5752b54->enter($__internal_ba766cde5cc7f31411076397093b4a022c795c8959643ada40b6bcc6a5752b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <div class=\"texteConteneur\">
            <h2>Propositions de textes</h2>
            <p>Grâce aux données que nous récoltons lors de votre lecture, nous vous proposons les textes les plus adaptés pour votre apprentissage.</p>
            <div id=\"textes\" class=\"row list-group\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 46
            echo "                    ";
            if ((($this->getAttribute($context["text"], "langue", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "langue", array())) && ($this->getAttribute($context["text"], "niveau", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveau", array())))) {
                // line 47
                echo "                        ";
                $context["lu"] = "N";
                // line 48
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["text"], "user", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 49
                    echo "                            ";
                    if (($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                        // line 50
                        echo "                                ";
                        $context["lu"] = "O";
                        // line 51
                        echo "                            ";
                    }
                    // line 52
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                        ";
                if (((isset($context["lu"]) ? $context["lu"] : $this->getContext($context, "lu")) == "N")) {
                    // line 54
                    echo "                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
                    echo " </h3>
                                    <p class=\"group inner list-group-item-text\">";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "resume", array()), "html", null, true);
                    echo "</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p>31% de nouveaux mots</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lecture", array("id" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                    echo "\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 69
                echo "                    ";
            }
            // line 70
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </div>

            <h2>Textes déjà lus</h2>
            <div id=\"textes\" class=\"row list-group\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 76
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["text"], "user", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["textelu"]) {
                // line 77
                echo "                        ";
                if (($this->getAttribute($context["textelu"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 78
                    echo "                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> ";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
                    echo " </h3>
                                    <p class=\"group inner list-group-item-text\"> ";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "resume", array()), "html", null, true);
                    echo "</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p>Durée de lecture: 00h32min.</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lecture", array("id" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                    echo "\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 93
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textelu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_ba766cde5cc7f31411076397093b4a022c795c8959643ada40b6bcc6a5752b54->leave($__internal_ba766cde5cc7f31411076397093b4a022c795c8959643ada40b6bcc6a5752b54_prof);

        
        $__internal_96d2f0333e01467871c51090e930166f780bb43db898080d5e058065af48a447->leave($__internal_96d2f0333e01467871c51090e930166f780bb43db898080d5e058065af48a447_prof);

    }

    public function getTemplateName()
    {
        return "TextBundle:Default:textes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 95,  261 => 94,  255 => 93,  246 => 87,  237 => 81,  233 => 80,  229 => 78,  226 => 77,  221 => 76,  217 => 75,  211 => 71,  205 => 70,  202 => 69,  193 => 63,  184 => 57,  180 => 56,  176 => 54,  173 => 53,  167 => 52,  164 => 51,  161 => 50,  158 => 49,  153 => 48,  150 => 47,  147 => 46,  143 => 45,  131 => 36,  118 => 25,  110 => 23,  108 => 22,  103 => 20,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title>Textes</title>
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
        <div class=\"texteConteneur\">
            <h2>Propositions de textes</h2>
            <p>Grâce aux données que nous récoltons lors de votre lecture, nous vous proposons les textes les plus adaptés pour votre apprentissage.</p>
            <div id=\"textes\" class=\"row list-group\">
                {% for text in texts %}
                    {% if ((text.langue == app.user.langue) and (text.niveau == app.user.niveau)) %}
                        {% set lu = \"N\" %}
                        {% for user in text.user %}
                            {% if user.id == app.user.id %}
                                {% set lu = \"O\" %}
                            {% endif %}
                        {% endfor %}
                        {% if (lu == \"N\") %}
                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> {{ text.titre }} </h3>
                                    <p class=\"group inner list-group-item-text\">{{ text.resume }}</p>
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
                    {% endif %}
                {% endfor %}
            </div>

            <h2>Textes déjà lus</h2>
            <div id=\"textes\" class=\"row list-group\">
                {% for text in texts %}
                    {% for textelu in text.user %}
                        {% if textelu.id == app.user.id %}
                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> {{ text.titre }} </h3>
                                    <p class=\"group inner list-group-item-text\"> {{ text.resume }}</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p>Durée de lecture: 00h32min.</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"{{ path('lecture', {id: text.id}) }}\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}", "TextBundle:Default:textes.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/TextBundle/Resources/views/Default/textes.html.twig");
    }
}
