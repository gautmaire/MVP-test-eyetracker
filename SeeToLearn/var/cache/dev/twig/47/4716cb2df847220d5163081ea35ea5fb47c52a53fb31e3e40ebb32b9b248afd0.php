<?php

/* IndexBundle:Default:index.html.twig */
class __TwigTemplate_8a95636ce71815f3e98db2a690ad461a983b4e860f670b02726a4524b36ccf01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:index.html.twig", 1);
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
        $__internal_61daf94fc83dbe6af1d4a4f0d729da9bd00c1250dd3f3f2c850c4453cf4498bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61daf94fc83dbe6af1d4a4f0d729da9bd00c1250dd3f3f2c850c4453cf4498bf->enter($__internal_61daf94fc83dbe6af1d4a4f0d729da9bd00c1250dd3f3f2c850c4453cf4498bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $__internal_bdb1b8503eb40c58b864b9fcc95fcb817a409d01515ba276f1c295229367986a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb1b8503eb40c58b864b9fcc95fcb817a409d01515ba276f1c295229367986a->enter($__internal_bdb1b8503eb40c58b864b9fcc95fcb817a409d01515ba276f1c295229367986a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61daf94fc83dbe6af1d4a4f0d729da9bd00c1250dd3f3f2c850c4453cf4498bf->leave($__internal_61daf94fc83dbe6af1d4a4f0d729da9bd00c1250dd3f3f2c850c4453cf4498bf_prof);

        
        $__internal_bdb1b8503eb40c58b864b9fcc95fcb817a409d01515ba276f1c295229367986a->leave($__internal_bdb1b8503eb40c58b864b9fcc95fcb817a409d01515ba276f1c295229367986a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef346b326a5b17fadbe9f0f34aec999187b0cd94f50b2f733d1099a2fee21c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef346b326a5b17fadbe9f0f34aec999187b0cd94f50b2f733d1099a2fee21c81->enter($__internal_ef346b326a5b17fadbe9f0f34aec999187b0cd94f50b2f733d1099a2fee21c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_495c3aeb161a0bb5cc08ffebb5995993a9c05d2b3cb164c0b8b9268ecdc3ae96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495c3aeb161a0bb5cc08ffebb5995993a9c05d2b3cb164c0b8b9268ecdc3ae96->enter($__internal_495c3aeb161a0bb5cc08ffebb5995993a9c05d2b3cb164c0b8b9268ecdc3ae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Accueil</title>
";
        
        $__internal_495c3aeb161a0bb5cc08ffebb5995993a9c05d2b3cb164c0b8b9268ecdc3ae96->leave($__internal_495c3aeb161a0bb5cc08ffebb5995993a9c05d2b3cb164c0b8b9268ecdc3ae96_prof);

        
        $__internal_ef346b326a5b17fadbe9f0f34aec999187b0cd94f50b2f733d1099a2fee21c81->leave($__internal_ef346b326a5b17fadbe9f0f34aec999187b0cd94f50b2f733d1099a2fee21c81_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_46065011935a0e41d2e61f79031c6d3b4e0ad6950998ba64949ae52095d62374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46065011935a0e41d2e61f79031c6d3b4e0ad6950998ba64949ae52095d62374->enter($__internal_46065011935a0e41d2e61f79031c6d3b4e0ad6950998ba64949ae52095d62374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_8b9748a79183ca2346ff927f75c5c33b38e1130f3e67da0972c587bfba58d038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9748a79183ca2346ff927f75c5c33b38e1130f3e67da0972c587bfba58d038->enter($__internal_8b9748a79183ca2346ff927f75c5c33b38e1130f3e67da0972c587bfba58d038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8b9748a79183ca2346ff927f75c5c33b38e1130f3e67da0972c587bfba58d038->leave($__internal_8b9748a79183ca2346ff927f75c5c33b38e1130f3e67da0972c587bfba58d038_prof);

        
        $__internal_46065011935a0e41d2e61f79031c6d3b4e0ad6950998ba64949ae52095d62374->leave($__internal_46065011935a0e41d2e61f79031c6d3b4e0ad6950998ba64949ae52095d62374_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_548d82116904bc3378e5c64c78c349e0646cb1769c191fbfcf64c3f72f978746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548d82116904bc3378e5c64c78c349e0646cb1769c191fbfcf64c3f72f978746->enter($__internal_548d82116904bc3378e5c64c78c349e0646cb1769c191fbfcf64c3f72f978746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_da9c744948b2b458de28ba4b62273f19dca0818a0c6102a1fdec61ea74b1ce3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9c744948b2b458de28ba4b62273f19dca0818a0c6102a1fdec61ea74b1ce3c->enter($__internal_da9c744948b2b458de28ba4b62273f19dca0818a0c6102a1fdec61ea74b1ce3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <header>
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo_See2Learn\" />

        <a href=\"/register\"><button class=\"signIn\">Inscription</button></a>
        <a href=\"/login\"><button class=\"signUp\">Connexion</button></a>
    </header>

    <div>
        <aside>
            <nav>
                <ul>
                    <li><a id=\"concept\" href=\"#\">Le concept</a></li>
                    <li><a id=\"comCaMarche\" href=\"#\">Comment ça marche ?</a></li>
                    <li><a id=\"eyetracker\" href=\"#\">L'Eye Tracker</a></li>
                    <li><a id=\"temoignages\" href=\"#\">Témoignages</a></li>
                    <li><a id=\"twitter\" href=\"#\">Twitter</a></li>
                    <li><a id=\"equipe\" href=\"#\">L'équipe</a></li>
                    <li><a id=\"mentions-legales\" href=\"#\">Mentions légales</a></li>
                </ul>
            </nav>
        </aside>

        <!-- div pour cacher les sections -->
        <div class=\"cache\">
            <div class=\"cacheGris\"></div>
            <div class=\"cacheBleu\"></div>
        </div>

        <!-- section le concept -->
        <section class=\"concept\">
            <h2>Apprends une nouvelle langue avec la méthode \"See To Learn\" !</h2>
            <div>
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/school.png"), "html", null, true);
        echo "\" />
                <p>Notre site web met à votre disposition des textes de difficultés variées dans différentes langues.</p>
                <p>Grâce à un Eye Tracker, notre algorithme analyse chacun des mots que vous lisez.</p>
                <p>Il vous propose ensuite de nouveaux textes adaptés à votre apprentissage.</p>
                <p>Il s’agit d’une solution qui évolue avec vous.</p>
            </div>
        </section>

        <!-- section comment ça marche ? -->
        <section class=\"comCaMarche\">
            <h2>Comment ça marche ?</h2>
            <div>
                <p>Chacun des mots que vous lisez est défini par l’algorithme comme plus ou moins difficile. Si vous relisez deux ou trois fois un mot, il sera considéré comme plus difficile que si vous ne faites que le survoler.</p>
                <p>Ainsi, afin de vous proposer de nouveaux textes adaptés à votre niveau :</p>
                <div class=\"bLeft\">
                    <p>On recherche tous les mots présents dans ces textes,</p>
                    <p>On compte le nombre de fois que vous avez fait leurs rencontres, durant l’ensemble de vos lectures,</p>
                    <p>On fait une moyenne de tous les indices de difficultés de ces mêmes mots,</p>
                    <p>On confronte ces deux données,</p>
                    <p>On vous propose les textes qui sont les mieux adaptés à votre apprentissage du moment.</p>
                </div>
            </div>
        </section>

        <!-- section l'eyetracker -->
        <section class=\"eyetracker\">
            <h2>L'Eye Tracker, c'est quoi ?</h2>
            <div>
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/Tobii_Eyex_Tracker.png"), "html", null, true);
        echo "\" />
                <p>L’Eye Tracker est un périphérique composé de caméras infrarouges.</p>
                <p>Il utilise la technologie de l’oculométrie ou «eye-tracking», qui consiste à détecter la position du regard sur l’écran. </p>
            </div>
        </section>

        <!-- section témoignages -->
        <section class=\"temoignages\">
            <h2>Témoignages</h2>
            <div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"carousel slide\" data-ride=\"carousel\" id=\"quote-carousel\">

                                <!-- Bottom Carousel Indicators -->
                                <ol class=\"carousel-indicators\">
                                    <li data-target=\"#quote-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#quote-carousel\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#quote-carousel\" data-slide-to=\"2\"></li>
                                </ol>

                                <!-- Carousel Slides / Quotes -->
                                <div class=\"carousel-inner\">

                                    <!-- Quote 1 -->
                                    <div class=\"item active\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.&rdquo;</p>
                                                <small><strong>Vulputate M., Dolor</strong></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quote 2 -->
                                    <div class=\"item\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <p>&ldquo;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.&rdquo;</p>
                                                <small><strong>Fringilla A., Vulputate Sit</strong></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quote 3 -->
                                    <div class=\"item\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <p>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.&rdquo;</p>
                                                <small><strong>Aenean A., Justo Cras</strong></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section twitter -->
        <section class=\"twitter\">
            <h2>Suivez-nous sur Twitter pour vous tenir au courant de nos actualités !</h2>
            <div class=\"tweet\">
                <a class=\"twitter-timeline\" data-dnt=\"true\" href=\"https://twitter.com/SeeTo2Learn\" data-height=\"400\" data-width=\"580\">Tweets by @SeeTo2Learn</a>
            </div>
        </section>

        <!-- section l'équipe -->
        <section class=\"equipe\">
            <h2>L'équipe</h2>
            <div>
                <div class=\"slider--teams\">
                    <div class=\"slider--teams__team\">
                        <ul id=\"list\" class=\"cf\">
                            <li>
                                <figure class=\"active\">
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Jérémy CUESTA-OGER</h2>
                                        <p>Chef de projet</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Gautier MAIRE</h2>
                                        <p>Développeur / Designer</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Stéphane INTHAVIXAY</h2>
                                        <p>Développeur</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Morgane RICHARD</h2>
                                        <p>Développeuse</p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- section Mentions légales -->
        <section class=\"mentions-legales\">
            <h2>Mentions légales</h2>
            <div class=\"scrollshadow\">
                <div class=\"ctn-ML\">
                    Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> sont :
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Editeur du Site : </b></span></p>
                    Nicolas Journet
                    Numéro de SIRET : 12151456561
                    Responsable editorial : Nicolas Journet
                    26 Rue de Naudet 33170 Gradignan
                    Téléphone :0605524966 - Fax : 0605524966
                    Email : contact@seetolearn.fr
                    Site Web : <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>
                    </br>
                    <p style=\"color: #b51a00;\"><b><span style=\"color: rgb(0, 0, 0);\">Hébergement :</span> </b></p>
                    Hébergeur : OVH
                    2 rue Kellermann - 59100 Roubaix - France
                    Site Web : <a href=\"http://https://www.ovh.com/fr/\">https://www.ovh.com/fr/</a>
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Développement</b><b> : </b></span></p>
                    l'équipe See To Learn
                    Adresse : 26 Rue de Naudet 33170 Gradignan
                    Site Web : <a href=\"http://www.equipe-see-to-learn.fr\">www.equipe-see-to-learn.fr</a>
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Conditions d’utilisation : </b></span></p>
                    Ce site (<a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…
                    Les mentions légales ont été générées sur le site <a title=\"générateur de mentions légales pour site internet gratuit\" href=\"http://www.generateur-de-mentions-legales.com\">Générateur de mentions légales</a>, offert par <a title=\"imprimerie paris, imprimeur paris\" href=\"http://welye.com\">Welye</a>.

                    <span style=\"color: #323333;\">Nicolas Journet<b> </b></span>met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de , et signaler toutes modifications du site qu'il jugerait utile. n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.

                    <b>Cookies</b> : Le site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.

                    <b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. Nicolas Journet ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation.

                    Les utilisateurs, les abonnés et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de Nicolas Journet.

                    Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de Nicolas Journet, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. Nicolas Journet se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Services fournis : </b></span></p>
                    <p style=\"color: #323333;\">L'ensemble des activités de la société ainsi que ses informations sont présentés sur notre site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>.</p>
                    <p style=\"color: #323333;\">Nicolas Journet s’efforce de fournir sur le site www.see-to-learn.fr des informations aussi précises que possible. les renseignements figurant sur le site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site www.see-to-learn.fr<span style=\"color: #000000;\"><b> </b></span>sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis. </p>
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Limitation contractuelles sur les données : </b></span></p>
                    Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse contact@seetolearn.fr, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).

                    Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. <span style=\"color: #323333;\">De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</span>

                    Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de Nicolas Journet.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Propriété intellectuelle :</b></span></p>
                    Tout le contenu du présent sur le site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.

                    Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de Nicolas Journet. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Déclaration à la CNIL : </b></span></p>
                    Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à l'informatique, aux fichiers et aux libertés, ce site a fait l'objet d'une déclaration  auprès de la Commission nationale de l'informatique et des libertés (<a href=\"http://www.cnil.fr/\">www.cnil.fr</a>).
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Litiges : </b></span></p>
                    Les présentes conditions du site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Données personnelles :</b></span></p>
                    De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>.

                    Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information.

                    Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d'accès. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>See To Learn © 2017</p>
    </footer>



    <!-- script pour le feed twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>

    <!-- <script type=\"text/javascript\" src=\"js/jquery-3.1.1.min.js\"></script> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> <!-- cette version permet d'utiliser le slider de l'équipe -->
    <script type=\"text/javascript\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js'></script>
    <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/equipe.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_da9c744948b2b458de28ba4b62273f19dca0818a0c6102a1fdec61ea74b1ce3c->leave($__internal_da9c744948b2b458de28ba4b62273f19dca0818a0c6102a1fdec61ea74b1ce3c_prof);

        
        $__internal_548d82116904bc3378e5c64c78c349e0646cb1769c191fbfcf64c3f72f978746->leave($__internal_548d82116904bc3378e5c64c78c349e0646cb1769c191fbfcf64c3f72f978746_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 288,  381 => 286,  377 => 285,  161 => 72,  130 => 44,  96 => 13,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title>Accueil</title>
{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/main.css') }}\">
{% endblock %}

{% block content %}
    <header>
        <img src=\"{{ asset('bundles/img/logo.png') }}\" alt=\"logo_See2Learn\" />

        <a href=\"/register\"><button class=\"signIn\">Inscription</button></a>
        <a href=\"/login\"><button class=\"signUp\">Connexion</button></a>
    </header>

    <div>
        <aside>
            <nav>
                <ul>
                    <li><a id=\"concept\" href=\"#\">Le concept</a></li>
                    <li><a id=\"comCaMarche\" href=\"#\">Comment ça marche ?</a></li>
                    <li><a id=\"eyetracker\" href=\"#\">L'Eye Tracker</a></li>
                    <li><a id=\"temoignages\" href=\"#\">Témoignages</a></li>
                    <li><a id=\"twitter\" href=\"#\">Twitter</a></li>
                    <li><a id=\"equipe\" href=\"#\">L'équipe</a></li>
                    <li><a id=\"mentions-legales\" href=\"#\">Mentions légales</a></li>
                </ul>
            </nav>
        </aside>

        <!-- div pour cacher les sections -->
        <div class=\"cache\">
            <div class=\"cacheGris\"></div>
            <div class=\"cacheBleu\"></div>
        </div>

        <!-- section le concept -->
        <section class=\"concept\">
            <h2>Apprends une nouvelle langue avec la méthode \"See To Learn\" !</h2>
            <div>
                <img src=\"{{ asset('bundles/img/school.png') }}\" />
                <p>Notre site web met à votre disposition des textes de difficultés variées dans différentes langues.</p>
                <p>Grâce à un Eye Tracker, notre algorithme analyse chacun des mots que vous lisez.</p>
                <p>Il vous propose ensuite de nouveaux textes adaptés à votre apprentissage.</p>
                <p>Il s’agit d’une solution qui évolue avec vous.</p>
            </div>
        </section>

        <!-- section comment ça marche ? -->
        <section class=\"comCaMarche\">
            <h2>Comment ça marche ?</h2>
            <div>
                <p>Chacun des mots que vous lisez est défini par l’algorithme comme plus ou moins difficile. Si vous relisez deux ou trois fois un mot, il sera considéré comme plus difficile que si vous ne faites que le survoler.</p>
                <p>Ainsi, afin de vous proposer de nouveaux textes adaptés à votre niveau :</p>
                <div class=\"bLeft\">
                    <p>On recherche tous les mots présents dans ces textes,</p>
                    <p>On compte le nombre de fois que vous avez fait leurs rencontres, durant l’ensemble de vos lectures,</p>
                    <p>On fait une moyenne de tous les indices de difficultés de ces mêmes mots,</p>
                    <p>On confronte ces deux données,</p>
                    <p>On vous propose les textes qui sont les mieux adaptés à votre apprentissage du moment.</p>
                </div>
            </div>
        </section>

        <!-- section l'eyetracker -->
        <section class=\"eyetracker\">
            <h2>L'Eye Tracker, c'est quoi ?</h2>
            <div>
                <img src=\"{{ asset('bundles/img/Tobii_Eyex_Tracker.png') }}\" />
                <p>L’Eye Tracker est un périphérique composé de caméras infrarouges.</p>
                <p>Il utilise la technologie de l’oculométrie ou «eye-tracking», qui consiste à détecter la position du regard sur l’écran. </p>
            </div>
        </section>

        <!-- section témoignages -->
        <section class=\"temoignages\">
            <h2>Témoignages</h2>
            <div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"carousel slide\" data-ride=\"carousel\" id=\"quote-carousel\">

                                <!-- Bottom Carousel Indicators -->
                                <ol class=\"carousel-indicators\">
                                    <li data-target=\"#quote-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                    <li data-target=\"#quote-carousel\" data-slide-to=\"1\"></li>
                                    <li data-target=\"#quote-carousel\" data-slide-to=\"2\"></li>
                                </ol>

                                <!-- Carousel Slides / Quotes -->
                                <div class=\"carousel-inner\">

                                    <!-- Quote 1 -->
                                    <div class=\"item active\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.&rdquo;</p>
                                                <small><strong>Vulputate M., Dolor</strong></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quote 2 -->
                                    <div class=\"item\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <p>&ldquo;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.&rdquo;</p>
                                                <small><strong>Fringilla A., Vulputate Sit</strong></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quote 3 -->
                                    <div class=\"item\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12\">
                                                <p>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.&rdquo;</p>
                                                <small><strong>Aenean A., Justo Cras</strong></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section twitter -->
        <section class=\"twitter\">
            <h2>Suivez-nous sur Twitter pour vous tenir au courant de nos actualités !</h2>
            <div class=\"tweet\">
                <a class=\"twitter-timeline\" data-dnt=\"true\" href=\"https://twitter.com/SeeTo2Learn\" data-height=\"400\" data-width=\"580\">Tweets by @SeeTo2Learn</a>
            </div>
        </section>

        <!-- section l'équipe -->
        <section class=\"equipe\">
            <h2>L'équipe</h2>
            <div>
                <div class=\"slider--teams\">
                    <div class=\"slider--teams__team\">
                        <ul id=\"list\" class=\"cf\">
                            <li>
                                <figure class=\"active\">
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Jérémy CUESTA-OGER</h2>
                                        <p>Chef de projet</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Gautier MAIRE</h2>
                                        <p>Développeur / Designer</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Stéphane INTHAVIXAY</h2>
                                        <p>Développeur</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <div>
                                        <div></div>
                                    </div>
                                    <figcaption>
                                        <h2>Morgane RICHARD</h2>
                                        <p>Développeuse</p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- section Mentions légales -->
        <section class=\"mentions-legales\">
            <h2>Mentions légales</h2>
            <div class=\"scrollshadow\">
                <div class=\"ctn-ML\">
                    Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> sont :
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Editeur du Site : </b></span></p>
                    Nicolas Journet
                    Numéro de SIRET : 12151456561
                    Responsable editorial : Nicolas Journet
                    26 Rue de Naudet 33170 Gradignan
                    Téléphone :0605524966 - Fax : 0605524966
                    Email : contact@seetolearn.fr
                    Site Web : <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>
                    </br>
                    <p style=\"color: #b51a00;\"><b><span style=\"color: rgb(0, 0, 0);\">Hébergement :</span> </b></p>
                    Hébergeur : OVH
                    2 rue Kellermann - 59100 Roubaix - France
                    Site Web : <a href=\"http://https://www.ovh.com/fr/\">https://www.ovh.com/fr/</a>
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Développement</b><b> : </b></span></p>
                    l'équipe See To Learn
                    Adresse : 26 Rue de Naudet 33170 Gradignan
                    Site Web : <a href=\"http://www.equipe-see-to-learn.fr\">www.equipe-see-to-learn.fr</a>
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Conditions d’utilisation : </b></span></p>
                    Ce site (<a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…
                    Les mentions légales ont été générées sur le site <a title=\"générateur de mentions légales pour site internet gratuit\" href=\"http://www.generateur-de-mentions-legales.com\">Générateur de mentions légales</a>, offert par <a title=\"imprimerie paris, imprimeur paris\" href=\"http://welye.com\">Welye</a>.

                    <span style=\"color: #323333;\">Nicolas Journet<b> </b></span>met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de l'exactitude des informations auprès de , et signaler toutes modifications du site qu'il jugerait utile. n'est en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.

                    <b>Cookies</b> : Le site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d'affichage. Un cookies est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.

                    <b>Liens hypertextes :</b> Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. Nicolas Journet ne dispose d'aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation.

                    Les utilisateurs, les abonnés et les visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans l'autorisation expresse et préalable de Nicolas Journet.

                    Dans l'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de Nicolas Journet, il lui appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un hyperlien. Nicolas Journet se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Services fournis : </b></span></p>
                    <p style=\"color: #323333;\">L'ensemble des activités de la société ainsi que ses informations sont présentés sur notre site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>.</p>
                    <p style=\"color: #323333;\">Nicolas Journet s’efforce de fournir sur le site www.see-to-learn.fr des informations aussi précises que possible. les renseignements figurant sur le site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site www.see-to-learn.fr<span style=\"color: #000000;\"><b> </b></span>sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis. </p>
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Limitation contractuelles sur les données : </b></span></p>
                    Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse contact@seetolearn.fr, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).

                    Tout contenu téléchargé se fait aux risques et périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au téléchargement. <span style=\"color: #323333;\">De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</span>

                    Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de Nicolas Journet.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Propriété intellectuelle :</b></span></p>
                    Tout le contenu du présent sur le site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.

                    Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l'accord exprès par écrit de Nicolas Journet. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Déclaration à la CNIL : </b></span></p>
                    Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à l'informatique, aux fichiers et aux libertés, ce site a fait l'objet d'une déclaration  auprès de la Commission nationale de l'informatique et des libertés (<a href=\"http://www.cnil.fr/\">www.cnil.fr</a>).
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Litiges : </b></span></p>
                    Les présentes conditions du site <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français.
                    </br>
                    <p style=\"color: #b51a00;\"><span style=\"color: rgb(0, 0, 0);\"><b>Données personnelles :</b></span></p>
                    De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <a href=\"http://www.see-to-learn.fr\">www.see-to-learn.fr</a>.

                    Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information.

                    Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d'accès. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>See To Learn © 2017</p>
    </footer>



    <!-- script pour le feed twitter -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>

    <!-- <script type=\"text/javascript\" src=\"js/jquery-3.1.1.min.js\"></script> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> <!-- cette version permet d'utiliser le slider de l'équipe -->
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/main.js') }}\"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js'></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/js/equipe.js') }}\"></script>
{% endblock %}", "IndexBundle:Default:index.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/index.html.twig");
    }
}
