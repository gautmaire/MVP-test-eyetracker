<?php

/* IndexBundle:Default:mentions.html.twig */
class __TwigTemplate_6e3b76d273b1acc369a8855fad09ae060feba57b7482181550046c8d7fe95e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:mentions.html.twig", 1);
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
        $__internal_3346a71f55178781bc87b3fad39a28a05bcea98179aeeffb2b3758117dff0524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3346a71f55178781bc87b3fad39a28a05bcea98179aeeffb2b3758117dff0524->enter($__internal_3346a71f55178781bc87b3fad39a28a05bcea98179aeeffb2b3758117dff0524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:mentions.html.twig"));

        $__internal_3e6c0cda8c2290368afb605a435e78fe57d56ca7e0fa8f3f9ce57843c13652ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6c0cda8c2290368afb605a435e78fe57d56ca7e0fa8f3f9ce57843c13652ec->enter($__internal_3e6c0cda8c2290368afb605a435e78fe57d56ca7e0fa8f3f9ce57843c13652ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:mentions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3346a71f55178781bc87b3fad39a28a05bcea98179aeeffb2b3758117dff0524->leave($__internal_3346a71f55178781bc87b3fad39a28a05bcea98179aeeffb2b3758117dff0524_prof);

        
        $__internal_3e6c0cda8c2290368afb605a435e78fe57d56ca7e0fa8f3f9ce57843c13652ec->leave($__internal_3e6c0cda8c2290368afb605a435e78fe57d56ca7e0fa8f3f9ce57843c13652ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60e7a96984ae2ff70e5fa45feb981fb005006675c2254f5ac8cdb93ebe06eb12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e7a96984ae2ff70e5fa45feb981fb005006675c2254f5ac8cdb93ebe06eb12->enter($__internal_60e7a96984ae2ff70e5fa45feb981fb005006675c2254f5ac8cdb93ebe06eb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ff9287276e4f2413d051878f4f686f9fb2d686fcb9d8c2ce10cf0c023bf4438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff9287276e4f2413d051878f4f686f9fb2d686fcb9d8c2ce10cf0c023bf4438->enter($__internal_3ff9287276e4f2413d051878f4f686f9fb2d686fcb9d8c2ce10cf0c023bf4438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Mentions légales</title>
";
        
        $__internal_3ff9287276e4f2413d051878f4f686f9fb2d686fcb9d8c2ce10cf0c023bf4438->leave($__internal_3ff9287276e4f2413d051878f4f686f9fb2d686fcb9d8c2ce10cf0c023bf4438_prof);

        
        $__internal_60e7a96984ae2ff70e5fa45feb981fb005006675c2254f5ac8cdb93ebe06eb12->leave($__internal_60e7a96984ae2ff70e5fa45feb981fb005006675c2254f5ac8cdb93ebe06eb12_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_5bf28c73c9ec6b64cac6ed7089347d21644330c0fd5c05f947a81c9bdc2f36ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf28c73c9ec6b64cac6ed7089347d21644330c0fd5c05f947a81c9bdc2f36ba->enter($__internal_5bf28c73c9ec6b64cac6ed7089347d21644330c0fd5c05f947a81c9bdc2f36ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_0008a192ddef8ff2ff3ca322ca5f8b65c46c47e59abfae394b696bf3e11d7968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0008a192ddef8ff2ff3ca322ca5f8b65c46c47e59abfae394b696bf3e11d7968->enter($__internal_0008a192ddef8ff2ff3ca322ca5f8b65c46c47e59abfae394b696bf3e11d7968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_0008a192ddef8ff2ff3ca322ca5f8b65c46c47e59abfae394b696bf3e11d7968->leave($__internal_0008a192ddef8ff2ff3ca322ca5f8b65c46c47e59abfae394b696bf3e11d7968_prof);

        
        $__internal_5bf28c73c9ec6b64cac6ed7089347d21644330c0fd5c05f947a81c9bdc2f36ba->leave($__internal_5bf28c73c9ec6b64cac6ed7089347d21644330c0fd5c05f947a81c9bdc2f36ba_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2797009456635da6451036eeb8383061a6c30a77ac2fe37b0d3bb55c1085999b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2797009456635da6451036eeb8383061a6c30a77ac2fe37b0d3bb55c1085999b->enter($__internal_2797009456635da6451036eeb8383061a6c30a77ac2fe37b0d3bb55c1085999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8549920a9df02386623a11b6befa67710c61dc9f725aa5e6732e65969fb403ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8549920a9df02386623a11b6befa67710c61dc9f725aa5e6732e65969fb403ea->enter($__internal_8549920a9df02386623a11b6befa67710c61dc9f725aa5e6732e65969fb403ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <li><a id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
                <li><a id=\"us-question\" href=\"/question\">Une question ?</a></li>
                <li><a id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                <li><a class=\"activeLink\" id=\"us-mentions-legales\" href=\"/mentions\">Mentions légales</a></li>
            </ul>
        </nav>
        <p>See To Learn © 2017</p>
    </div>
    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo_See2Learn\" />
    <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
</header>

<section>
    <h2 class=\"titreML\">Mentions légales</h2>
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

</section>

";
        
        $__internal_8549920a9df02386623a11b6befa67710c61dc9f725aa5e6732e65969fb403ea->leave($__internal_8549920a9df02386623a11b6befa67710c61dc9f725aa5e6732e65969fb403ea_prof);

        
        $__internal_2797009456635da6451036eeb8383061a6c30a77ac2fe37b0d3bb55c1085999b->leave($__internal_2797009456635da6451036eeb8383061a6c30a77ac2fe37b0d3bb55c1085999b_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  103 => 20,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title>Mentions légales</title>
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
        <h3>Gautier Maire</h3>
        <nav>
            <ul>
                <li><a id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
                <li><a id=\"us-question\" href=\"/question\">Une question ?</a></li>
                <li><a id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                <li><a class=\"activeLink\" id=\"us-mentions-legales\" href=\"/mentions\">Mentions légales</a></li>
            </ul>
        </nav>
        <p>See To Learn © 2017</p>
    </div>
    <img src=\"{{ asset('bundles/img/logo.png') }}\" alt=\"logo_See2Learn\" />
    <a href=\"/logout\"><button class=\"signOut\">Déconnexion</button></a>
</header>

<section>
    <h2 class=\"titreML\">Mentions légales</h2>
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

</section>

{% endblock %}", "IndexBundle:Default:mentions.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/mentions.html.twig");
    }
}
