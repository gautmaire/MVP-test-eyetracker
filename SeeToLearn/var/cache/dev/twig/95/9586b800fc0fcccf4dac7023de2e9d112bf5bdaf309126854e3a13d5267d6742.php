<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b43fb60aa81fc2ce2747dacd385641d62cead9092746acfcfeff5d333fd9d2fc extends Twig_Template
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
        $__internal_d4013539d04331c3e55f4c20372b6d1316eae003ae6deacf705cf395fa492257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4013539d04331c3e55f4c20372b6d1316eae003ae6deacf705cf395fa492257->enter($__internal_d4013539d04331c3e55f4c20372b6d1316eae003ae6deacf705cf395fa492257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_e6630cd79f6c3af441ce53eddfd9c8f3ef14b2971305a7004a89839b54dca4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6630cd79f6c3af441ce53eddfd9c8f3ef14b2971305a7004a89839b54dca4d8->enter($__internal_e6630cd79f6c3af441ce53eddfd9c8f3ef14b2971305a7004a89839b54dca4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4013539d04331c3e55f4c20372b6d1316eae003ae6deacf705cf395fa492257->leave($__internal_d4013539d04331c3e55f4c20372b6d1316eae003ae6deacf705cf395fa492257_prof);

        
        $__internal_e6630cd79f6c3af441ce53eddfd9c8f3ef14b2971305a7004a89839b54dca4d8->leave($__internal_e6630cd79f6c3af441ce53eddfd9c8f3ef14b2971305a7004a89839b54dca4d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5faa5bcfd7b3f7854d1d2bfcf5dd90804d033e68e0279c11b12444afb81c78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5faa5bcfd7b3f7854d1d2bfcf5dd90804d033e68e0279c11b12444afb81c78b->enter($__internal_d5faa5bcfd7b3f7854d1d2bfcf5dd90804d033e68e0279c11b12444afb81c78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59b76693bddc8fc1f7ceb7f56f612e960269a602672ceae94ef7f66c31f035ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b76693bddc8fc1f7ceb7f56f612e960269a602672ceae94ef7f66c31f035ce->enter($__internal_59b76693bddc8fc1f7ceb7f56f612e960269a602672ceae94ef7f66c31f035ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_59b76693bddc8fc1f7ceb7f56f612e960269a602672ceae94ef7f66c31f035ce->leave($__internal_59b76693bddc8fc1f7ceb7f56f612e960269a602672ceae94ef7f66c31f035ce_prof);

        
        $__internal_d5faa5bcfd7b3f7854d1d2bfcf5dd90804d033e68e0279c11b12444afb81c78b->leave($__internal_d5faa5bcfd7b3f7854d1d2bfcf5dd90804d033e68e0279c11b12444afb81c78b_prof);

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
", "@FOSUser/Registration/register.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
