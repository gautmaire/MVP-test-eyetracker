<?php

/* TextBundle:Default:textes.html.twig */
class __TwigTemplate_39e3076d17339daec58103196141bc49e13c3724fa417460973b79b2175ed87d extends Twig_Template
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
        $__internal_82e62ce6c66b35eef818b8544052f2fe1e412724d4b9653cf3af0a763b7d855f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e62ce6c66b35eef818b8544052f2fe1e412724d4b9653cf3af0a763b7d855f->enter($__internal_82e62ce6c66b35eef818b8544052f2fe1e412724d4b9653cf3af0a763b7d855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:textes.html.twig"));

        $__internal_192fefd691241f18102fb4bf3e62a689f4035c1789ff6e89dbfe7f9d15cec5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192fefd691241f18102fb4bf3e62a689f4035c1789ff6e89dbfe7f9d15cec5be->enter($__internal_192fefd691241f18102fb4bf3e62a689f4035c1789ff6e89dbfe7f9d15cec5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TextBundle:Default:textes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e62ce6c66b35eef818b8544052f2fe1e412724d4b9653cf3af0a763b7d855f->leave($__internal_82e62ce6c66b35eef818b8544052f2fe1e412724d4b9653cf3af0a763b7d855f_prof);

        
        $__internal_192fefd691241f18102fb4bf3e62a689f4035c1789ff6e89dbfe7f9d15cec5be->leave($__internal_192fefd691241f18102fb4bf3e62a689f4035c1789ff6e89dbfe7f9d15cec5be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f81fd5d6055730c5cdf0f849a1d27dbc7052c4f5ec5bf7605798b7bf90e1e73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81fd5d6055730c5cdf0f849a1d27dbc7052c4f5ec5bf7605798b7bf90e1e73f->enter($__internal_f81fd5d6055730c5cdf0f849a1d27dbc7052c4f5ec5bf7605798b7bf90e1e73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_877cf7f327f34f94ffe2e6a8572c7e3e41d7526e9b816b12d360db0e0324e9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877cf7f327f34f94ffe2e6a8572c7e3e41d7526e9b816b12d360db0e0324e9db->enter($__internal_877cf7f327f34f94ffe2e6a8572c7e3e41d7526e9b816b12d360db0e0324e9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Textes</title>
";
        
        $__internal_877cf7f327f34f94ffe2e6a8572c7e3e41d7526e9b816b12d360db0e0324e9db->leave($__internal_877cf7f327f34f94ffe2e6a8572c7e3e41d7526e9b816b12d360db0e0324e9db_prof);

        
        $__internal_f81fd5d6055730c5cdf0f849a1d27dbc7052c4f5ec5bf7605798b7bf90e1e73f->leave($__internal_f81fd5d6055730c5cdf0f849a1d27dbc7052c4f5ec5bf7605798b7bf90e1e73f_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_b790f415c0b8781ad4c8c74e86bd03ae9e8cadc987872d711dd4759471ea316c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b790f415c0b8781ad4c8c74e86bd03ae9e8cadc987872d711dd4759471ea316c->enter($__internal_b790f415c0b8781ad4c8c74e86bd03ae9e8cadc987872d711dd4759471ea316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f45632035e8b24e9c660528c37bd40aef909a7f4a9b9df2c2646a908eed46706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45632035e8b24e9c660528c37bd40aef909a7f4a9b9df2c2646a908eed46706->enter($__internal_f45632035e8b24e9c660528c37bd40aef909a7f4a9b9df2c2646a908eed46706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f45632035e8b24e9c660528c37bd40aef909a7f4a9b9df2c2646a908eed46706->leave($__internal_f45632035e8b24e9c660528c37bd40aef909a7f4a9b9df2c2646a908eed46706_prof);

        
        $__internal_b790f415c0b8781ad4c8c74e86bd03ae9e8cadc987872d711dd4759471ea316c->leave($__internal_b790f415c0b8781ad4c8c74e86bd03ae9e8cadc987872d711dd4759471ea316c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_69d668cd75e829b6fec2973a1934501801e7a19ab685c5bfd9a6966247449ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d668cd75e829b6fec2973a1934501801e7a19ab685c5bfd9a6966247449ea6->enter($__internal_69d668cd75e829b6fec2973a1934501801e7a19ab685c5bfd9a6966247449ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53899fdaa8c7e4b2af2999cb5943a6f771e8712ff023ca68aace67890f1a4ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53899fdaa8c7e4b2af2999cb5943a6f771e8712ff023ca68aace67890f1a4ef3->enter($__internal_53899fdaa8c7e4b2af2999cb5943a6f771e8712ff023ca68aace67890f1a4ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombretextelu", array()) == 0)) {
            // line 46
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 47
                echo "                        ";
                if ((($this->getAttribute($context["text"], "langue", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "langue", array())) && ($this->getAttribute($context["text"], "niveau", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveau", array())))) {
                    // line 48
                    echo "                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
                    echo " </h3>
                                    <p class=\"group inner list-group-item-text\">";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "resume", array()), "html", null, true);
                    echo "</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p>100% de nouveaux mots</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lecture", array("id" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                    echo "\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 63
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                ";
        } else {
            // line 65
            echo "                    ";
            $context["id_text_with_less_common_words"] = 0;
            // line 66
            echo "                    ";
            $context["text_with_less_common_words"] = twig_length_filter($this->env, (isset($context["all_words"]) ? $context["all_words"] : $this->getContext($context, "all_words")));
            // line 67
            echo "                    ";
            $context["word_read"] = array();
            // line 68
            echo "                    ";
            $context["tmp"] = "";
            // line 69
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 70
                echo "                        ";
                if ((($this->getAttribute($context["text"], "langue", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "langue", array())) && ($this->getAttribute($context["text"], "niveau", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "niveau", array())))) {
                    // line 71
                    echo "                            ";
                    $context["current_user_read_it"] = "N";
                    // line 72
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["text"], "user", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 73
                        echo "                                ";
                        if (($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                            // line 74
                            echo "                                    ";
                            $context["current_user_read_it"] = "Y";
                            // line 75
                            echo "                                ";
                        }
                        // line 76
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                            ";
                    if (((isset($context["current_user_read_it"]) ? $context["current_user_read_it"] : $this->getContext($context, "current_user_read_it")) == "N")) {
                        // line 78
                        echo "                                ";
                        $context["current_text"] = twig_split_filter($this->env, $this->getAttribute($context["text"], "contenu", array()), " ");
                        // line 79
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["words_read_by_user"]) ? $context["words_read_by_user"] : $this->getContext($context, "words_read_by_user")));
                        foreach ($context['_seq'] as $context["_key"] => $context["word_read_by_user"]) {
                            // line 80
                            echo "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["current_text"]) ? $context["current_text"] : $this->getContext($context, "current_text")));
                            foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
                                // line 81
                                echo "                                        ";
                                if (($this->getAttribute($context["word_read_by_user"], "valeur", array()) == $context["word"])) {
                                    // line 82
                                    echo "                                            ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((isset($context["all_words"]) ? $context["all_words"] : $this->getContext($context, "all_words")));
                                    foreach ($context['_seq'] as $context["_key"] => $context["word_dico"]) {
                                        // line 83
                                        echo "                                                ";
                                        if (($this->getAttribute($context["word_read_by_user"], "valeur", array()) == $this->getAttribute($context["word_dico"], "valeur", array()))) {
                                            // line 84
                                            echo "                                                    ";
                                            if (!twig_in_filter($this->getAttribute($context["word_read_by_user"], "valeur", array()), (isset($context["word_read"]) ? $context["word_read"] : $this->getContext($context, "word_read")))) {
                                                // line 85
                                                echo "                                                        ";
                                                $context["word_read"] = twig_array_merge((isset($context["word_read"]) ? $context["word_read"] : $this->getContext($context, "word_read")), array(0 => $this->getAttribute($context["word_read_by_user"], "valeur", array())));
                                                // line 86
                                                echo "                                                        ";
                                                $context["tmp"] = ((isset($context["tmp"]) ? $context["tmp"] : $this->getContext($context, "tmp")) + 1);
                                                // line 87
                                                echo "                                                    ";
                                            }
                                            // line 88
                                            echo "                                                ";
                                        }
                                        // line 89
                                        echo "                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word_dico'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 90
                                    echo "                                        ";
                                }
                                // line 91
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 92
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word_read_by_user'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 93
                        echo "                                ";
                        if (((isset($context["tmp"]) ? $context["tmp"] : $this->getContext($context, "tmp")) < (isset($context["text_with_less_common_words"]) ? $context["text_with_less_common_words"] : $this->getContext($context, "text_with_less_common_words")))) {
                            // line 94
                            echo "                                    ";
                            $context["text_with_less_common_word"] = (isset($context["tmp"]) ? $context["tmp"] : $this->getContext($context, "tmp"));
                            // line 95
                            echo "                                    ";
                            $context["id_text_with_less_common_words"] = $this->getAttribute($context["text"], "id", array());
                            // line 96
                            echo "                                ";
                        }
                        // line 97
                        echo "                            ";
                    }
                    // line 98
                    echo "                        ";
                }
                // line 99
                echo "                        ";
                $context["tmp"] = 0;
                // line 100
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 102
                echo "                        ";
                if (($this->getAttribute($context["text"], "id", array()) == (isset($context["id_text_with_less_common_words"]) ? $context["id_text_with_less_common_words"] : $this->getContext($context, "id_text_with_less_common_words")))) {
                    // line 103
                    echo "                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> ";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
                    echo " </h3>
                                    <p class=\"group inner list-group-item-text\">";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "resume", array()), "html", null, true);
                    echo "</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p> ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_round((100 - ((twig_length_filter($this->env, (isset($context["word_read"]) ? $context["word_read"] : $this->getContext($context, "word_read"))) * 100) / twig_length_filter($this->env, (isset($context["all_words"]) ? $context["all_words"] : $this->getContext($context, "all_words")))))), "html", null, true);
                    echo " % de nouveaux mots</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lecture", array("id" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                    echo "\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 118
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                ";
        }
        // line 120
        echo "            </div>
            <h2>Textes déjà lus</h2>
            <div id=\"textes\" class=\"row list-group\">
                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 124
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["text"], "user", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["textelu"]) {
                // line 125
                echo "                        ";
                if (($this->getAttribute($context["textelu"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 126
                    echo "                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> ";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
                    echo " </h3>
                                    <p class=\"group inner list-group-item-text\"> ";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "resume", array()), "html", null, true);
                    echo "</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p>Durée de lecture: 00h32min.</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lecture", array("id" => $this->getAttribute($context["text"], "id", array()))), "html", null, true);
                    echo "\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                // line 141
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textelu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_53899fdaa8c7e4b2af2999cb5943a6f771e8712ff023ca68aace67890f1a4ef3->leave($__internal_53899fdaa8c7e4b2af2999cb5943a6f771e8712ff023ca68aace67890f1a4ef3_prof);

        
        $__internal_69d668cd75e829b6fec2973a1934501801e7a19ab685c5bfd9a6966247449ea6->leave($__internal_69d668cd75e829b6fec2973a1934501801e7a19ab685c5bfd9a6966247449ea6_prof);

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
        return array (  422 => 143,  416 => 142,  410 => 141,  401 => 135,  392 => 129,  388 => 128,  384 => 126,  381 => 125,  376 => 124,  372 => 123,  367 => 120,  364 => 119,  358 => 118,  349 => 112,  343 => 109,  337 => 106,  333 => 105,  329 => 103,  326 => 102,  321 => 101,  315 => 100,  312 => 99,  309 => 98,  306 => 97,  303 => 96,  300 => 95,  297 => 94,  294 => 93,  288 => 92,  282 => 91,  279 => 90,  273 => 89,  270 => 88,  267 => 87,  264 => 86,  261 => 85,  258 => 84,  255 => 83,  250 => 82,  247 => 81,  242 => 80,  237 => 79,  234 => 78,  231 => 77,  225 => 76,  222 => 75,  219 => 74,  216 => 73,  211 => 72,  208 => 71,  205 => 70,  200 => 69,  197 => 68,  194 => 67,  191 => 66,  188 => 65,  185 => 64,  179 => 63,  170 => 57,  161 => 51,  157 => 50,  153 => 48,  150 => 47,  145 => 46,  143 => 45,  131 => 36,  118 => 25,  110 => 23,  108 => 22,  103 => 20,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                {% if (app.user.nombretextelu == 0) %}
                    {% for text in texts %}
                        {% if ((text.langue == app.user.langue) and (text.niveau == app.user.niveau)) %}
                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> {{ text.titre }} </h3>
                                    <p class=\"group inner list-group-item-text\">{{ text.resume }}</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p>100% de nouveaux mots</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"{{ path('lecture', {id: text.id}) }}\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                {% else %}
                    {% set id_text_with_less_common_words = 0 %}
                    {% set text_with_less_common_words = all_words|length %}
                    {% set word_read = [] %}
                    {% set tmp = \"\" %}
                    {% for text in texts %}
                        {% if ((text.langue == app.user.langue) and (text.niveau == app.user.niveau)) %}
                            {% set current_user_read_it = 'N' %}
                            {% for user in text.user %}
                                {% if (user.id == app.user.id) %}
                                    {% set current_user_read_it = 'Y' %}
                                {% endif %}
                            {% endfor %}
                            {% if current_user_read_it == 'N' %}
                                {% set current_text = text.contenu|split(\" \") %}
                                {% for word_read_by_user in words_read_by_user %}
                                    {% for word in current_text %}
                                        {% if word_read_by_user.valeur == word %}
                                            {% for word_dico in all_words %}
                                                {% if word_read_by_user.valeur == word_dico.valeur %}
                                                    {% if word_read_by_user.valeur not in word_read %}
                                                        {% set word_read = word_read|merge([word_read_by_user.valeur]) %}
                                                        {% set tmp = tmp + 1 %}
                                                    {% endif %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                    {% endfor %}
                                {% endfor %}
                                {% if tmp < text_with_less_common_words %}
                                    {% set text_with_less_common_word = tmp %}
                                    {% set id_text_with_less_common_words = text.id %}
                                {% endif %}
                            {% endif %}
                        {% endif %}
                        {% set tmp = 0 %}
                    {% endfor %}
                    {% for text in texts %}
                        {% if text.id == id_text_with_less_common_words %}
                            <div class=\"item  col-xs-4 col-lg-4\">
                                <div class=\"thumbnail\">
                                    <h3> {{ text.titre }} </h3>
                                    <p class=\"group inner list-group-item-text\">{{ text.resume }}</p>
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-9\">
                                            <p> {{ (100 - ((word_read|length * 100) / all_words|length))|round }} % de nouveaux mots</p>
                                        </div>
                                        <div class=\"col-xs-12 col-md-3\">
                                            <a class=\"\" href=\"{{ path('lecture', {id: text.id}) }}\"><button>See</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                {% endif %}
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
{% endblock %}", "TextBundle:Default:textes.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/src/TextBundle/Resources/views/Default/textes.html.twig");
    }
}
