<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f1deb873660e7e1ee4c0150643418a82a53c00a6e4773b288fe6beda39eebef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_a11c128d295ce0864f82fb809be37b484f326f9bb1474b784177f74a04b69c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11c128d295ce0864f82fb809be37b484f326f9bb1474b784177f74a04b69c52->enter($__internal_a11c128d295ce0864f82fb809be37b484f326f9bb1474b784177f74a04b69c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e6975d8c9e09ca88530ae691fe39317cd4fe713cae67cefede30341e2d72a34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6975d8c9e09ca88530ae691fe39317cd4fe713cae67cefede30341e2d72a34f->enter($__internal_e6975d8c9e09ca88530ae691fe39317cd4fe713cae67cefede30341e2d72a34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11c128d295ce0864f82fb809be37b484f326f9bb1474b784177f74a04b69c52->leave($__internal_a11c128d295ce0864f82fb809be37b484f326f9bb1474b784177f74a04b69c52_prof);

        
        $__internal_e6975d8c9e09ca88530ae691fe39317cd4fe713cae67cefede30341e2d72a34f->leave($__internal_e6975d8c9e09ca88530ae691fe39317cd4fe713cae67cefede30341e2d72a34f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eed10d3cf56864513cef7eaf59dfe21a555dff2c8f26badcbc7cb9005f0ab882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed10d3cf56864513cef7eaf59dfe21a555dff2c8f26badcbc7cb9005f0ab882->enter($__internal_eed10d3cf56864513cef7eaf59dfe21a555dff2c8f26badcbc7cb9005f0ab882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be82120dae1b52e29f3dca8e7549b528d6aef3f757c85a6dc3809019c9380ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be82120dae1b52e29f3dca8e7549b528d6aef3f757c85a6dc3809019c9380ac2->enter($__internal_be82120dae1b52e29f3dca8e7549b528d6aef3f757c85a6dc3809019c9380ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_be82120dae1b52e29f3dca8e7549b528d6aef3f757c85a6dc3809019c9380ac2->leave($__internal_be82120dae1b52e29f3dca8e7549b528d6aef3f757c85a6dc3809019c9380ac2_prof);

        
        $__internal_eed10d3cf56864513cef7eaf59dfe21a555dff2c8f26badcbc7cb9005f0ab882->leave($__internal_eed10d3cf56864513cef7eaf59dfe21a555dff2c8f26badcbc7cb9005f0ab882_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
