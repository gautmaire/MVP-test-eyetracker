<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f9234c056ab01a0a72b269cd7486163c8e3c79a4365a47d687f3143f641bc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba9f93cfc19f509d97aae7c95bb0d7ea74d1d6fc5d272f1ce1f81f82772666d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9f93cfc19f509d97aae7c95bb0d7ea74d1d6fc5d272f1ce1f81f82772666d3->enter($__internal_ba9f93cfc19f509d97aae7c95bb0d7ea74d1d6fc5d272f1ce1f81f82772666d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_60c7af29a8a547eda6d018c4d076349f705973ff06f207d35fdb50e22bb0a43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c7af29a8a547eda6d018c4d076349f705973ff06f207d35fdb50e22bb0a43f->enter($__internal_60c7af29a8a547eda6d018c4d076349f705973ff06f207d35fdb50e22bb0a43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9f93cfc19f509d97aae7c95bb0d7ea74d1d6fc5d272f1ce1f81f82772666d3->leave($__internal_ba9f93cfc19f509d97aae7c95bb0d7ea74d1d6fc5d272f1ce1f81f82772666d3_prof);

        
        $__internal_60c7af29a8a547eda6d018c4d076349f705973ff06f207d35fdb50e22bb0a43f->leave($__internal_60c7af29a8a547eda6d018c4d076349f705973ff06f207d35fdb50e22bb0a43f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67c8d9b2d8f928f212b64f1b0def42b1ba574715aaefcbf79a9d3ee36d1f4c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c8d9b2d8f928f212b64f1b0def42b1ba574715aaefcbf79a9d3ee36d1f4c1b->enter($__internal_67c8d9b2d8f928f212b64f1b0def42b1ba574715aaefcbf79a9d3ee36d1f4c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c3fb9375c9c9daa61d66d26f82e913e17dabb452002e12161a287f78d74698d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fb9375c9c9daa61d66d26f82e913e17dabb452002e12161a287f78d74698d8->enter($__internal_c3fb9375c9c9daa61d66d26f82e913e17dabb452002e12161a287f78d74698d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3fb9375c9c9daa61d66d26f82e913e17dabb452002e12161a287f78d74698d8->leave($__internal_c3fb9375c9c9daa61d66d26f82e913e17dabb452002e12161a287f78d74698d8_prof);

        
        $__internal_67c8d9b2d8f928f212b64f1b0def42b1ba574715aaefcbf79a9d3ee36d1f4c1b->leave($__internal_67c8d9b2d8f928f212b64f1b0def42b1ba574715aaefcbf79a9d3ee36d1f4c1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22c5eb3f40f7c5ef8a2e3d2a1169c440c797596746b816ded2483a2bd42700ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c5eb3f40f7c5ef8a2e3d2a1169c440c797596746b816ded2483a2bd42700ad->enter($__internal_22c5eb3f40f7c5ef8a2e3d2a1169c440c797596746b816ded2483a2bd42700ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ce4a22890614f5e3665608f1f54cd6252a4c60b8d7c0211a624dbeeb48fed84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce4a22890614f5e3665608f1f54cd6252a4c60b8d7c0211a624dbeeb48fed84->enter($__internal_6ce4a22890614f5e3665608f1f54cd6252a4c60b8d7c0211a624dbeeb48fed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ce4a22890614f5e3665608f1f54cd6252a4c60b8d7c0211a624dbeeb48fed84->leave($__internal_6ce4a22890614f5e3665608f1f54cd6252a4c60b8d7c0211a624dbeeb48fed84_prof);

        
        $__internal_22c5eb3f40f7c5ef8a2e3d2a1169c440c797596746b816ded2483a2bd42700ad->leave($__internal_22c5eb3f40f7c5ef8a2e3d2a1169c440c797596746b816ded2483a2bd42700ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_564dfb34fe80e1196f74604bf0ca0512c795840cc87f643bce15df349345528f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564dfb34fe80e1196f74604bf0ca0512c795840cc87f643bce15df349345528f->enter($__internal_564dfb34fe80e1196f74604bf0ca0512c795840cc87f643bce15df349345528f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4a86f9bd0dd6443d02146fac86bd0d4cc498140e9a8167f0d68d1cd2a1179d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a86f9bd0dd6443d02146fac86bd0d4cc498140e9a8167f0d68d1cd2a1179d6->enter($__internal_f4a86f9bd0dd6443d02146fac86bd0d4cc498140e9a8167f0d68d1cd2a1179d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4a86f9bd0dd6443d02146fac86bd0d4cc498140e9a8167f0d68d1cd2a1179d6->leave($__internal_f4a86f9bd0dd6443d02146fac86bd0d4cc498140e9a8167f0d68d1cd2a1179d6_prof);

        
        $__internal_564dfb34fe80e1196f74604bf0ca0512c795840cc87f643bce15df349345528f->leave($__internal_564dfb34fe80e1196f74604bf0ca0512c795840cc87f643bce15df349345528f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
