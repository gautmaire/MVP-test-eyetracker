<?php

/* IndexBundle:Default:tableau.html.twig */
class __TwigTemplate_8222bd54d9834b3aed8b7f75f5e918f6782a40e4002639201830ec484f80c4e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:tableau.html.twig", 1);
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
        $__internal_1c1104346e8034cc72bdc2a44fd63722379b045fd4c46ff0b9dd78a3db5d5cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1104346e8034cc72bdc2a44fd63722379b045fd4c46ff0b9dd78a3db5d5cf1->enter($__internal_1c1104346e8034cc72bdc2a44fd63722379b045fd4c46ff0b9dd78a3db5d5cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:tableau.html.twig"));

        $__internal_4bd3afd03fad56d62b7c23ac8f3da18fd1db9221cf01a03934670c27a00a8861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd3afd03fad56d62b7c23ac8f3da18fd1db9221cf01a03934670c27a00a8861->enter($__internal_4bd3afd03fad56d62b7c23ac8f3da18fd1db9221cf01a03934670c27a00a8861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:tableau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c1104346e8034cc72bdc2a44fd63722379b045fd4c46ff0b9dd78a3db5d5cf1->leave($__internal_1c1104346e8034cc72bdc2a44fd63722379b045fd4c46ff0b9dd78a3db5d5cf1_prof);

        
        $__internal_4bd3afd03fad56d62b7c23ac8f3da18fd1db9221cf01a03934670c27a00a8861->leave($__internal_4bd3afd03fad56d62b7c23ac8f3da18fd1db9221cf01a03934670c27a00a8861_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcbf49e244d937da12c8bd32d461f472dd75d1b1c3c5496214e3f3624cbe853c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbf49e244d937da12c8bd32d461f472dd75d1b1c3c5496214e3f3624cbe853c->enter($__internal_fcbf49e244d937da12c8bd32d461f472dd75d1b1c3c5496214e3f3624cbe853c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35efb59fd6cbee57af35aaaf1505604e905089b429648b6e792afee15a0f06f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35efb59fd6cbee57af35aaaf1505604e905089b429648b6e792afee15a0f06f1->enter($__internal_35efb59fd6cbee57af35aaaf1505604e905089b429648b6e792afee15a0f06f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Tableau de bord</title>
";
        
        $__internal_35efb59fd6cbee57af35aaaf1505604e905089b429648b6e792afee15a0f06f1->leave($__internal_35efb59fd6cbee57af35aaaf1505604e905089b429648b6e792afee15a0f06f1_prof);

        
        $__internal_fcbf49e244d937da12c8bd32d461f472dd75d1b1c3c5496214e3f3624cbe853c->leave($__internal_fcbf49e244d937da12c8bd32d461f472dd75d1b1c3c5496214e3f3624cbe853c_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_2c90dae3cbc9635502ee29ba75e6705af2ba1f611cc368b0784780336899bbbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c90dae3cbc9635502ee29ba75e6705af2ba1f611cc368b0784780336899bbbb->enter($__internal_2c90dae3cbc9635502ee29ba75e6705af2ba1f611cc368b0784780336899bbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_130f68da66f7d41506204c329d54b3aaa9188d0b947aa7b0567ecaddb0965280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130f68da66f7d41506204c329d54b3aaa9188d0b947aa7b0567ecaddb0965280->enter($__internal_130f68da66f7d41506204c329d54b3aaa9188d0b947aa7b0567ecaddb0965280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">

    <!-- css pour le calendrier -->
    <link rel='stylesheet prefetch' href='http://crsten.github.io/datepickk/dist/datepickk.min.css'>
";
        
        $__internal_130f68da66f7d41506204c329d54b3aaa9188d0b947aa7b0567ecaddb0965280->leave($__internal_130f68da66f7d41506204c329d54b3aaa9188d0b947aa7b0567ecaddb0965280_prof);

        
        $__internal_2c90dae3cbc9635502ee29ba75e6705af2ba1f611cc368b0784780336899bbbb->leave($__internal_2c90dae3cbc9635502ee29ba75e6705af2ba1f611cc368b0784780336899bbbb_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b40b7ae706752b93d5a15b29d8053238772a3f872e0d7bf9c6f7e3d46e6c921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b40b7ae706752b93d5a15b29d8053238772a3f872e0d7bf9c6f7e3d46e6c921->enter($__internal_3b40b7ae706752b93d5a15b29d8053238772a3f872e0d7bf9c6f7e3d46e6c921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2e83b917de21ee7a07f507b7538b8599c415365b5875328ea4ad4f1db3fb9b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e83b917de21ee7a07f507b7538b8599c415365b5875328ea4ad4f1db3fb9b8f->enter($__internal_2e83b917de21ee7a07f507b7538b8599c415365b5875328ea4ad4f1db3fb9b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <header>
        <button class=\"buttonBurger\">
            <span class=\"buttonBurger__top\"></span>
            <span class=\"buttonBurger__middle\"></span>
            <span class=\"buttonBurger__bottom\"></span>
        </button>
        <div class=\"menu\">
            <div>
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/img-profil.jpg"), "html", null, true);
        echo "\" alt=\"image profil\">
            </div>
            ";
        // line 25
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 26
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</h3>
            ";
        }
        // line 28
        echo "            <nav>
                <ul>
                    <li><a class=\"activeLink\" id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                    <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
                    <li><a id=\"us-question\" href=\"/question\">Une question ?</a></li>
                    <li><a id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                    <li><a id=\"us-mentions-legales\" href=\"/mentions\">Mentions légales</a></li>
                </ul>
            </nav>
            <p>See To Learn © 2017</p>
        </div>
        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo_See2Learn\" />
        <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
    </header>

    <section id=\"tableau\">
        <div class=\"langue row\">
            <p class=\"col-xs-6\">Langue à apprendre : ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "langue", array()), "html", null, true);
        echo "</p>
        </div>

        <div class=\"row rowFirst\">
            <div class=\"col-xs-6\">
                <div id=\"infos\">
                    <h3>Informations personnelles</h3>
                    <div class=\"block\">
                        ";
        // line 53
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 54
            echo "                            <div class=\"row\">
                                <div class=\"col-xs-4 img-infos-pers\">
                                    <div>
                                        <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/img-profil.jpg"), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                                <div class=\"col-xs-8 donneePerso\">
                                    <p>Nom : ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo "</p>
                                    <p>Prénom : ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "</p>
                                    <p>Nom d'utilisateur : ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                            <p>Email : ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</p>
                            <a href=\"/update\"> <button>Modifier</button> </a>
                        ";
        }
        // line 69
        echo "                    </div>
                </div>
                <div id=\"cal\">
                    <h3>Calendrier</h3>

                    <div class=\"block\">
                        <div id=\"datepicker\"></div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-6\">
                <div id=\"stats\">
                    <h3>Statistiques</h3>

                    <div class=\"block\">
                        <div>
                            <div class=\"number-grey\">
                                <span class=\"num\"> ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombretextelu", array()), "html", null, true);
        echo "</span>
                            </div>
                            <p>Textes lus</p>
                        </div>
                        <div>
                            <div class=\"number-blue\">
                                <span class=\"num\"> ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombremotlu", array()), "html", null, true);
        echo "</span>
                            </div>
                            <p>Mots lus</p>
                        </div>
                        <div>
                            <div class=\"number-yellow\"><span class=\"num\"> ";
        // line 98
        echo twig_escape_filter($this->env, twig_round((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombremotlu", array()) / twig_length_filter($this->env, (isset($context["mots"]) ? $context["mots"] : $this->getContext($context, "mots")))) * 100)), "html", null, true);
        echo "%</span></div><p>Des mots en anglais</p>
                        </div>
                        <div>
                            ";
        // line 101
        $context["moyenne"] = 0;
        // line 102
        echo "                            ";
        $context["total"] = twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        // line 103
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 104
            echo "                                ";
            $context["moyenne"] = ((isset($context["moyenne"]) ? $context["moyenne"] : $this->getContext($context, "moyenne")) + twig_round((($this->getAttribute($context["user"], "nombremotlu", array()) / twig_length_filter($this->env, (isset($context["mots"]) ? $context["mots"] : $this->getContext($context, "mots")))) * 100)));
            // line 105
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                            <div class=\"number-grey\"><span class=\"num\"> ";
        echo twig_escape_filter($this->env, ((isset($context["moyenne"]) ? $context["moyenne"] : $this->getContext($context, "moyenne")) / (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))), "html", null, true);
        echo "%</span></div><p>Moyenne utilisateurs</p>
                        </div>
                        <div>
                            <div class=\"number-blue\"><span class=\"num\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dureelecture", array()), "html", null, true);
        echo "S</span></div><p>Temps de lecture</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\" id=\"graph\">
            <h3>Graphiques</h3>
        </div>
    </section>

    <!-- script pour le calendrier -->
    <script src='http://crsten.github.io/datepickk/dist/datepickk.min.js'></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/calendar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2e83b917de21ee7a07f507b7538b8599c415365b5875328ea4ad4f1db3fb9b8f->leave($__internal_2e83b917de21ee7a07f507b7538b8599c415365b5875328ea4ad4f1db3fb9b8f_prof);

        
        $__internal_3b40b7ae706752b93d5a15b29d8053238772a3f872e0d7bf9c6f7e3d46e6c921->leave($__internal_3b40b7ae706752b93d5a15b29d8053238772a3f872e0d7bf9c6f7e3d46e6c921_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:tableau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 123,  257 => 109,  250 => 106,  244 => 105,  241 => 104,  236 => 103,  233 => 102,  231 => 101,  225 => 98,  217 => 93,  208 => 87,  188 => 69,  182 => 66,  176 => 63,  172 => 62,  168 => 61,  161 => 57,  156 => 54,  154 => 53,  143 => 45,  134 => 39,  121 => 28,  113 => 26,  111 => 25,  106 => 23,  96 => 15,  87 => 14,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title>Tableau de bord</title>
{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/users.css') }}\">

    <!-- css pour le calendrier -->
    <link rel='stylesheet prefetch' href='http://crsten.github.io/datepickk/dist/datepickk.min.css'>
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
                    <li><a class=\"activeLink\" id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                    <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
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

    <section id=\"tableau\">
        <div class=\"langue row\">
            <p class=\"col-xs-6\">Langue à apprendre : {{ app.user.langue }}</p>
        </div>

        <div class=\"row rowFirst\">
            <div class=\"col-xs-6\">
                <div id=\"infos\">
                    <h3>Informations personnelles</h3>
                    <div class=\"block\">
                        {% if app.user %}
                            <div class=\"row\">
                                <div class=\"col-xs-4 img-infos-pers\">
                                    <div>
                                        <img src=\"{{ asset('bundles/img/img-profil.jpg') }}\">
                                    </div>
                                </div>
                                <div class=\"col-xs-8 donneePerso\">
                                    <p>Nom : {{ app.user.nom }}</p>
                                    <p>Prénom : {{ app.user.prenom }}</p>
                                    <p>Nom d'utilisateur : {{ app.user.username }}</p>
                                </div>
                            </div>
                            <p>Email : {{ app.user.email  }}</p>
                            <a href=\"/update\"> <button>Modifier</button> </a>
                        {% endif %}
                    </div>
                </div>
                <div id=\"cal\">
                    <h3>Calendrier</h3>

                    <div class=\"block\">
                        <div id=\"datepicker\"></div>
                    </div>
                </div>
            </div>

            <div class=\"col-xs-6\">
                <div id=\"stats\">
                    <h3>Statistiques</h3>

                    <div class=\"block\">
                        <div>
                            <div class=\"number-grey\">
                                <span class=\"num\"> {{ app.user.nombretextelu }}</span>
                            </div>
                            <p>Textes lus</p>
                        </div>
                        <div>
                            <div class=\"number-blue\">
                                <span class=\"num\"> {{ app.user.nombremotlu }}</span>
                            </div>
                            <p>Mots lus</p>
                        </div>
                        <div>
                            <div class=\"number-yellow\"><span class=\"num\"> {{ (app.user.nombremotlu / mots|length * 100)|round }}%</span></div><p>Des mots en anglais</p>
                        </div>
                        <div>
                            {% set moyenne = 0 %}
                            {% set total = users|length %}
                            {% for user in users %}
                                {% set moyenne = moyenne + (user.nombremotlu / mots|length * 100)|round %}
                            {% endfor %}
                            <div class=\"number-grey\"><span class=\"num\"> {{ moyenne / total }}%</span></div><p>Moyenne utilisateurs</p>
                        </div>
                        <div>
                            <div class=\"number-blue\"><span class=\"num\">{{ app.user.dureelecture }}S</span></div><p>Temps de lecture</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\" id=\"graph\">
            <h3>Graphiques</h3>
        </div>
    </section>

    <!-- script pour le calendrier -->
    <script src='http://crsten.github.io/datepickk/dist/datepickk.min.js'></script>
    <script src=\"{{ asset('bundles/js/calendar.js') }}\"></script>
{% endblock %}
", "IndexBundle:Default:tableau.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/tableau.html.twig");
    }
}
