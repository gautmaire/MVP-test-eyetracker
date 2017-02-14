<?php

/* IndexBundle:Default:question.html.twig */
class __TwigTemplate_6a9b24949dbafe053ae5b7db15b417515877505a6d3861bfcac784a4385aafc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:question.html.twig", 1);
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
        $__internal_205cccab65c084294ae6e49d6428711440935f2f2e5e368cfff88415045866f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205cccab65c084294ae6e49d6428711440935f2f2e5e368cfff88415045866f3->enter($__internal_205cccab65c084294ae6e49d6428711440935f2f2e5e368cfff88415045866f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:question.html.twig"));

        $__internal_54841578b28621218278f7b42652523c6beb478df11c8a4f89b43e5088feaecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54841578b28621218278f7b42652523c6beb478df11c8a4f89b43e5088feaecf->enter($__internal_54841578b28621218278f7b42652523c6beb478df11c8a4f89b43e5088feaecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:question.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_205cccab65c084294ae6e49d6428711440935f2f2e5e368cfff88415045866f3->leave($__internal_205cccab65c084294ae6e49d6428711440935f2f2e5e368cfff88415045866f3_prof);

        
        $__internal_54841578b28621218278f7b42652523c6beb478df11c8a4f89b43e5088feaecf->leave($__internal_54841578b28621218278f7b42652523c6beb478df11c8a4f89b43e5088feaecf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dcdc2153414f861fd39d84922af91e13f998831cbebb05f7982df7efae94478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcdc2153414f861fd39d84922af91e13f998831cbebb05f7982df7efae94478->enter($__internal_2dcdc2153414f861fd39d84922af91e13f998831cbebb05f7982df7efae94478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19521de111db5b05e735618f921f64c462af4a94973d5f88604b86f31b320a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19521de111db5b05e735618f921f64c462af4a94973d5f88604b86f31b320a1a->enter($__internal_19521de111db5b05e735618f921f64c462af4a94973d5f88604b86f31b320a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Une question ?</title>
";
        
        $__internal_19521de111db5b05e735618f921f64c462af4a94973d5f88604b86f31b320a1a->leave($__internal_19521de111db5b05e735618f921f64c462af4a94973d5f88604b86f31b320a1a_prof);

        
        $__internal_2dcdc2153414f861fd39d84922af91e13f998831cbebb05f7982df7efae94478->leave($__internal_2dcdc2153414f861fd39d84922af91e13f998831cbebb05f7982df7efae94478_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_f04fcc7814695fcfd420dd5eff1659074d9f592a1651a2bfdd8726b968938e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04fcc7814695fcfd420dd5eff1659074d9f592a1651a2bfdd8726b968938e26->enter($__internal_f04fcc7814695fcfd420dd5eff1659074d9f592a1651a2bfdd8726b968938e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_d894894fec7e21df01b6e6601a212f54cd842c8d71b40277f6c1ad046cc7d63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d894894fec7e21df01b6e6601a212f54cd842c8d71b40277f6c1ad046cc7d63a->enter($__internal_d894894fec7e21df01b6e6601a212f54cd842c8d71b40277f6c1ad046cc7d63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/users.css"), "html", null, true);
        echo "\">
";
        
        $__internal_d894894fec7e21df01b6e6601a212f54cd842c8d71b40277f6c1ad046cc7d63a->leave($__internal_d894894fec7e21df01b6e6601a212f54cd842c8d71b40277f6c1ad046cc7d63a_prof);

        
        $__internal_f04fcc7814695fcfd420dd5eff1659074d9f592a1651a2bfdd8726b968938e26->leave($__internal_f04fcc7814695fcfd420dd5eff1659074d9f592a1651a2bfdd8726b968938e26_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1b03c44c08538b697d36b9b51ae9fb346c018a6c21255e068f0037f6ef2b2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b03c44c08538b697d36b9b51ae9fb346c018a6c21255e068f0037f6ef2b2f2->enter($__internal_f1b03c44c08538b697d36b9b51ae9fb346c018a6c21255e068f0037f6ef2b2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_51eabf55ada5796e1354e0b6a28deef9b04770659529f8ed63a836158cafca34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51eabf55ada5796e1354e0b6a28deef9b04770659529f8ed63a836158cafca34->enter($__internal_51eabf55ada5796e1354e0b6a28deef9b04770659529f8ed63a836158cafca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        <h3> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h3>
        <nav>
            <ul>
                <li><a id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
                <li><a class=\"activeLink\" id=\"us-question\" href=\"/question\">Une question ?</a></li>
                <li><a id=\"us-twitter\" href=\"/twitter\">Twitter</a></li>
                <li><a id=\"us-mentions-legales\" href=\"/mentions\">Mentions légales</a></li>
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

    <h2 class=\"titreQuestion\">Une question, un avis, un message à faire passer ? N'hésitez pas !</h2>

    <div class=\"inner contact\">
        <!-- Form Area -->
        <div class=\"contact-form\">
            <!-- Form -->
            <form id=\"contact-us\" method=\"post\" action=\"/sendMail\">
                <!-- Left Inputs -->
                <div class=\"col-xs-6 wow animated slideInLeft\" data-wow-delay=\".5s\">
                    <!-- Name -->
                    <input type=\"text\" name=\"name\" id=\"name\" required=\"required\" class=\"form\" placeholder=\"Nom\" />
                    <!-- Email -->
                    <input type=\"email\" name=\"mail\" id=\"mail\" required=\"required\" class=\"form\" placeholder=\"Email\" />
                    <!-- Subject -->
                    <input type=\"text\" name=\"subject\" id=\"subject\" required=\"required\" class=\"form\" placeholder=\"Sujet\" />
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class=\"col-xs-6 wow animated slideInRight\" data-wow-delay=\".5s\">
                    <!-- Message -->
                    <textarea name=\"message\" id=\"message\" class=\"form textarea\"  placeholder=\"Message\"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class=\"relative fullwidth col-xs-12\">
                    <!-- Send Button -->
                    <button type=\"submit\" id=\"submit\" name=\"submit\" class=\"form-btn semibold\">Envoyer</button>
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class=\"clear\"></div>
            </form>

            <!-- Your Mail Message -->
            <div class=\"mail-message-area\">
                <!-- Message -->
                <div class=\"alert gray-bg mail-message not-visible-message\">
                    <strong>Merci !</strong>Votre email a correctement été envoyé.
                </div>
            </div>

        </div><!-- End Contact Form Area -->
    </div><!-- End Inner -->
</section>

";
        
        $__internal_51eabf55ada5796e1354e0b6a28deef9b04770659529f8ed63a836158cafca34->leave($__internal_51eabf55ada5796e1354e0b6a28deef9b04770659529f8ed63a836158cafca34_prof);

        
        $__internal_f1b03c44c08538b697d36b9b51ae9fb346c018a6c21255e068f0037f6ef2b2f2->leave($__internal_f1b03c44c08538b697d36b9b51ae9fb346c018a6c21255e068f0037f6ef2b2f2_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  108 => 22,  103 => 20,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <title>Une question ?</title>
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
        <h3> {{ app.user.prenom }} {{ app.user.nom }}</h3>
        <nav>
            <ul>
                <li><a id=\"us-tab-bord\" href=\"/tableau\">Tableau de bord</a></li>
                <li><a id=\"us-textes\" href=\"/textes\">Textes</a></li>
                <li><a class=\"activeLink\" id=\"us-question\" href=\"/question\">Une question ?</a></li>
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

    <h2 class=\"titreQuestion\">Une question, un avis, un message à faire passer ? N'hésitez pas !</h2>

    <div class=\"inner contact\">
        <!-- Form Area -->
        <div class=\"contact-form\">
            <!-- Form -->
            <form id=\"contact-us\" method=\"post\" action=\"/sendMail\">
                <!-- Left Inputs -->
                <div class=\"col-xs-6 wow animated slideInLeft\" data-wow-delay=\".5s\">
                    <!-- Name -->
                    <input type=\"text\" name=\"name\" id=\"name\" required=\"required\" class=\"form\" placeholder=\"Nom\" />
                    <!-- Email -->
                    <input type=\"email\" name=\"mail\" id=\"mail\" required=\"required\" class=\"form\" placeholder=\"Email\" />
                    <!-- Subject -->
                    <input type=\"text\" name=\"subject\" id=\"subject\" required=\"required\" class=\"form\" placeholder=\"Sujet\" />
                </div><!-- End Left Inputs -->
                <!-- Right Inputs -->
                <div class=\"col-xs-6 wow animated slideInRight\" data-wow-delay=\".5s\">
                    <!-- Message -->
                    <textarea name=\"message\" id=\"message\" class=\"form textarea\"  placeholder=\"Message\"></textarea>
                </div><!-- End Right Inputs -->
                <!-- Bottom Submit -->
                <div class=\"relative fullwidth col-xs-12\">
                    <!-- Send Button -->
                    <button type=\"submit\" id=\"submit\" name=\"submit\" class=\"form-btn semibold\">Envoyer</button>
                </div><!-- End Bottom Submit -->
                <!-- Clear -->
                <div class=\"clear\"></div>
            </form>

            <!-- Your Mail Message -->
            <div class=\"mail-message-area\">
                <!-- Message -->
                <div class=\"alert gray-bg mail-message not-visible-message\">
                    <strong>Merci !</strong>Votre email a correctement été envoyé.
                </div>
            </div>

        </div><!-- End Contact Form Area -->
    </div><!-- End Inner -->
</section>

{% endblock %}", "IndexBundle:Default:question.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/question.html.twig");
    }
}
