<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_35355a579930cb0033da45e8f1c360196391c1044674e4f7a9c2fde4fa1e2208 extends Twig_Template
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
        $__internal_2d7f9ae9aca8252f09864e21f754b9fe7810d2da84698ef8f64c6428f5ac1614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7f9ae9aca8252f09864e21f754b9fe7810d2da84698ef8f64c6428f5ac1614->enter($__internal_2d7f9ae9aca8252f09864e21f754b9fe7810d2da84698ef8f64c6428f5ac1614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1b49caf289a5091f059a45c5b22bbbd3eb94c9eb92570f586bc15d4381e0fe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b49caf289a5091f059a45c5b22bbbd3eb94c9eb92570f586bc15d4381e0fe9a->enter($__internal_1b49caf289a5091f059a45c5b22bbbd3eb94c9eb92570f586bc15d4381e0fe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d7f9ae9aca8252f09864e21f754b9fe7810d2da84698ef8f64c6428f5ac1614->leave($__internal_2d7f9ae9aca8252f09864e21f754b9fe7810d2da84698ef8f64c6428f5ac1614_prof);

        
        $__internal_1b49caf289a5091f059a45c5b22bbbd3eb94c9eb92570f586bc15d4381e0fe9a->leave($__internal_1b49caf289a5091f059a45c5b22bbbd3eb94c9eb92570f586bc15d4381e0fe9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da3fded62c5592aa1a4a46d39303ae20321371da7c8ef42344f2b27c02b5fd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3fded62c5592aa1a4a46d39303ae20321371da7c8ef42344f2b27c02b5fd65->enter($__internal_da3fded62c5592aa1a4a46d39303ae20321371da7c8ef42344f2b27c02b5fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9d353a01e4396f1886b58b68a9cc6a0913368ebd953226512795c363a4b04ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d353a01e4396f1886b58b68a9cc6a0913368ebd953226512795c363a4b04ca->enter($__internal_d9d353a01e4396f1886b58b68a9cc6a0913368ebd953226512795c363a4b04ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d9d353a01e4396f1886b58b68a9cc6a0913368ebd953226512795c363a4b04ca->leave($__internal_d9d353a01e4396f1886b58b68a9cc6a0913368ebd953226512795c363a4b04ca_prof);

        
        $__internal_da3fded62c5592aa1a4a46d39303ae20321371da7c8ef42344f2b27c02b5fd65->leave($__internal_da3fded62c5592aa1a4a46d39303ae20321371da7c8ef42344f2b27c02b5fd65_prof);

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
", "@FOSUser/Registration/register.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
