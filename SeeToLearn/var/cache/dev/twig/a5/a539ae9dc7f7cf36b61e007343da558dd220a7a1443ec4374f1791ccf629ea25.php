<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7f81ac1beae522bb3539bb60f1ea12d9f13840e4fa83db1820ad651b2acee11a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4433f00f8a0172213baefaeace6df60edbec885e0f640837b462b518b46744ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4433f00f8a0172213baefaeace6df60edbec885e0f640837b462b518b46744ea->enter($__internal_4433f00f8a0172213baefaeace6df60edbec885e0f640837b462b518b46744ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_f936203cc3811fb7a59b89fcd19d2c7e8507862ec0730c70236630eda5ed0354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f936203cc3811fb7a59b89fcd19d2c7e8507862ec0730c70236630eda5ed0354->enter($__internal_f936203cc3811fb7a59b89fcd19d2c7e8507862ec0730c70236630eda5ed0354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4433f00f8a0172213baefaeace6df60edbec885e0f640837b462b518b46744ea->leave($__internal_4433f00f8a0172213baefaeace6df60edbec885e0f640837b462b518b46744ea_prof);

        
        $__internal_f936203cc3811fb7a59b89fcd19d2c7e8507862ec0730c70236630eda5ed0354->leave($__internal_f936203cc3811fb7a59b89fcd19d2c7e8507862ec0730c70236630eda5ed0354_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08270f7c2ed77c1d0e60df7c25a5f6ccffd180763a33db1a2d460368580c292e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08270f7c2ed77c1d0e60df7c25a5f6ccffd180763a33db1a2d460368580c292e->enter($__internal_08270f7c2ed77c1d0e60df7c25a5f6ccffd180763a33db1a2d460368580c292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_284efeafd03026006f1f8e1344e6ffaa2bd64fb43e46d9ad6b35134b4e5123b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284efeafd03026006f1f8e1344e6ffaa2bd64fb43e46d9ad6b35134b4e5123b7->enter($__internal_284efeafd03026006f1f8e1344e6ffaa2bd64fb43e46d9ad6b35134b4e5123b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_284efeafd03026006f1f8e1344e6ffaa2bd64fb43e46d9ad6b35134b4e5123b7->leave($__internal_284efeafd03026006f1f8e1344e6ffaa2bd64fb43e46d9ad6b35134b4e5123b7_prof);

        
        $__internal_08270f7c2ed77c1d0e60df7c25a5f6ccffd180763a33db1a2d460368580c292e->leave($__internal_08270f7c2ed77c1d0e60df7c25a5f6ccffd180763a33db1a2d460368580c292e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
