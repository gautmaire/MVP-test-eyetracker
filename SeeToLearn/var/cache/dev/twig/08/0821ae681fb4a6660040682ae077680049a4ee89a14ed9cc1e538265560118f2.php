<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_a6f39b7de75218bbac2c48c8f6d002e38d8bdf1a895e225b8e4b7095c3ed5c73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_cc18f53da49b7ea5ec52d213e1b29cdfa9cc80c9c3b6f33995a1a74bf4a2c708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc18f53da49b7ea5ec52d213e1b29cdfa9cc80c9c3b6f33995a1a74bf4a2c708->enter($__internal_cc18f53da49b7ea5ec52d213e1b29cdfa9cc80c9c3b6f33995a1a74bf4a2c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_af8a6d52342187c6b8dc55ee026f2512967708e02ad70c26fc0414458cb5446a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8a6d52342187c6b8dc55ee026f2512967708e02ad70c26fc0414458cb5446a->enter($__internal_af8a6d52342187c6b8dc55ee026f2512967708e02ad70c26fc0414458cb5446a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc18f53da49b7ea5ec52d213e1b29cdfa9cc80c9c3b6f33995a1a74bf4a2c708->leave($__internal_cc18f53da49b7ea5ec52d213e1b29cdfa9cc80c9c3b6f33995a1a74bf4a2c708_prof);

        
        $__internal_af8a6d52342187c6b8dc55ee026f2512967708e02ad70c26fc0414458cb5446a->leave($__internal_af8a6d52342187c6b8dc55ee026f2512967708e02ad70c26fc0414458cb5446a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74d087b7f42ebcc567e5fd751024f8425a2bb65a1be5b6bad89494f762e4dd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d087b7f42ebcc567e5fd751024f8425a2bb65a1be5b6bad89494f762e4dd92->enter($__internal_74d087b7f42ebcc567e5fd751024f8425a2bb65a1be5b6bad89494f762e4dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6d4e77b9a951c0e8de3d49481535caa2a8b4a612d65c5a44dd076edba761c77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4e77b9a951c0e8de3d49481535caa2a8b4a612d65c5a44dd076edba761c77f->enter($__internal_6d4e77b9a951c0e8de3d49481535caa2a8b4a612d65c5a44dd076edba761c77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6d4e77b9a951c0e8de3d49481535caa2a8b4a612d65c5a44dd076edba761c77f->leave($__internal_6d4e77b9a951c0e8de3d49481535caa2a8b4a612d65c5a44dd076edba761c77f_prof);

        
        $__internal_74d087b7f42ebcc567e5fd751024f8425a2bb65a1be5b6bad89494f762e4dd92->leave($__internal_74d087b7f42ebcc567e5fd751024f8425a2bb65a1be5b6bad89494f762e4dd92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
