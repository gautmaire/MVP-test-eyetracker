<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_5777b09085542326b4b4d52fc95d4e135120990e5aa26df34c465ac59fec15b3 extends Twig_Template
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
        $__internal_785b7fef086069a35615ff4ccfcf8abd0e7fcd477f7dcb827cfb31f5eccb65ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785b7fef086069a35615ff4ccfcf8abd0e7fcd477f7dcb827cfb31f5eccb65ce->enter($__internal_785b7fef086069a35615ff4ccfcf8abd0e7fcd477f7dcb827cfb31f5eccb65ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_1e40005492203d95577d20e0c2a6e94d3c9c75d0df8db5e0211b937626515722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e40005492203d95577d20e0c2a6e94d3c9c75d0df8db5e0211b937626515722->enter($__internal_1e40005492203d95577d20e0c2a6e94d3c9c75d0df8db5e0211b937626515722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785b7fef086069a35615ff4ccfcf8abd0e7fcd477f7dcb827cfb31f5eccb65ce->leave($__internal_785b7fef086069a35615ff4ccfcf8abd0e7fcd477f7dcb827cfb31f5eccb65ce_prof);

        
        $__internal_1e40005492203d95577d20e0c2a6e94d3c9c75d0df8db5e0211b937626515722->leave($__internal_1e40005492203d95577d20e0c2a6e94d3c9c75d0df8db5e0211b937626515722_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6f47f5ccfed3e049dfbe5aaa5b4c9328d0b5d4ede38df0f15f8d2ddfa5e7d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f47f5ccfed3e049dfbe5aaa5b4c9328d0b5d4ede38df0f15f8d2ddfa5e7d33->enter($__internal_b6f47f5ccfed3e049dfbe5aaa5b4c9328d0b5d4ede38df0f15f8d2ddfa5e7d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cbb3f6c2b7589837c8dfe2b2b22c132a0e6a5acccc4c8e79b8d239ad2f264939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb3f6c2b7589837c8dfe2b2b22c132a0e6a5acccc4c8e79b8d239ad2f264939->enter($__internal_cbb3f6c2b7589837c8dfe2b2b22c132a0e6a5acccc4c8e79b8d239ad2f264939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cbb3f6c2b7589837c8dfe2b2b22c132a0e6a5acccc4c8e79b8d239ad2f264939->leave($__internal_cbb3f6c2b7589837c8dfe2b2b22c132a0e6a5acccc4c8e79b8d239ad2f264939_prof);

        
        $__internal_b6f47f5ccfed3e049dfbe5aaa5b4c9328d0b5d4ede38df0f15f8d2ddfa5e7d33->leave($__internal_b6f47f5ccfed3e049dfbe5aaa5b4c9328d0b5d4ede38df0f15f8d2ddfa5e7d33_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
