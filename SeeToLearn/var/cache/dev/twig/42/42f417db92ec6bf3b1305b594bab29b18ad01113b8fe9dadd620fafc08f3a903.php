<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_01d1ce366b21532c54819c74108e222214fa4f6e1c7fa99f6fee4448e8d98cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d1ce366b21532c54819c74108e222214fa4f6e1c7fa99f6fee4448e8d98cd6->enter($__internal_01d1ce366b21532c54819c74108e222214fa4f6e1c7fa99f6fee4448e8d98cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_27f199bab3effcdd83fe8fe78a73c04c94285e8813ebf2f3cd42f5473cb605d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f199bab3effcdd83fe8fe78a73c04c94285e8813ebf2f3cd42f5473cb605d2->enter($__internal_27f199bab3effcdd83fe8fe78a73c04c94285e8813ebf2f3cd42f5473cb605d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d1ce366b21532c54819c74108e222214fa4f6e1c7fa99f6fee4448e8d98cd6->leave($__internal_01d1ce366b21532c54819c74108e222214fa4f6e1c7fa99f6fee4448e8d98cd6_prof);

        
        $__internal_27f199bab3effcdd83fe8fe78a73c04c94285e8813ebf2f3cd42f5473cb605d2->leave($__internal_27f199bab3effcdd83fe8fe78a73c04c94285e8813ebf2f3cd42f5473cb605d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d7116524f792ea0dd2c774a04ca49ac985e44a0677e38507228678c23229d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7116524f792ea0dd2c774a04ca49ac985e44a0677e38507228678c23229d80->enter($__internal_4d7116524f792ea0dd2c774a04ca49ac985e44a0677e38507228678c23229d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bac6626d6750d05fb8a0a6534bfcc300e6862491afc6c7fb9b374f39a116dfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac6626d6750d05fb8a0a6534bfcc300e6862491afc6c7fb9b374f39a116dfba->enter($__internal_bac6626d6750d05fb8a0a6534bfcc300e6862491afc6c7fb9b374f39a116dfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bac6626d6750d05fb8a0a6534bfcc300e6862491afc6c7fb9b374f39a116dfba->leave($__internal_bac6626d6750d05fb8a0a6534bfcc300e6862491afc6c7fb9b374f39a116dfba_prof);

        
        $__internal_4d7116524f792ea0dd2c774a04ca49ac985e44a0677e38507228678c23229d80->leave($__internal_4d7116524f792ea0dd2c774a04ca49ac985e44a0677e38507228678c23229d80_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b58e5d69aca56f5494654822b016b0aa3d7773240eecd4af8fa7be0c42958558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58e5d69aca56f5494654822b016b0aa3d7773240eecd4af8fa7be0c42958558->enter($__internal_b58e5d69aca56f5494654822b016b0aa3d7773240eecd4af8fa7be0c42958558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cb798e8679acf399b9d875d1dab8bf9d7eec6606ef8bb5acc6378338369e51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb798e8679acf399b9d875d1dab8bf9d7eec6606ef8bb5acc6378338369e51b->enter($__internal_7cb798e8679acf399b9d875d1dab8bf9d7eec6606ef8bb5acc6378338369e51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cb798e8679acf399b9d875d1dab8bf9d7eec6606ef8bb5acc6378338369e51b->leave($__internal_7cb798e8679acf399b9d875d1dab8bf9d7eec6606ef8bb5acc6378338369e51b_prof);

        
        $__internal_b58e5d69aca56f5494654822b016b0aa3d7773240eecd4af8fa7be0c42958558->leave($__internal_b58e5d69aca56f5494654822b016b0aa3d7773240eecd4af8fa7be0c42958558_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b7cb383048fd22ad24bbc42184daaf4baad440e20e0cc05ac073de76e3d67b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7cb383048fd22ad24bbc42184daaf4baad440e20e0cc05ac073de76e3d67b5->enter($__internal_7b7cb383048fd22ad24bbc42184daaf4baad440e20e0cc05ac073de76e3d67b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e2eccd85c8ddc6ffa92125d34e7e5f76d94ea739f2f4e5a5c3d3c82864985dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2eccd85c8ddc6ffa92125d34e7e5f76d94ea739f2f4e5a5c3d3c82864985dd->enter($__internal_7e2eccd85c8ddc6ffa92125d34e7e5f76d94ea739f2f4e5a5c3d3c82864985dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e2eccd85c8ddc6ffa92125d34e7e5f76d94ea739f2f4e5a5c3d3c82864985dd->leave($__internal_7e2eccd85c8ddc6ffa92125d34e7e5f76d94ea739f2f4e5a5c3d3c82864985dd_prof);

        
        $__internal_7b7cb383048fd22ad24bbc42184daaf4baad440e20e0cc05ac073de76e3d67b5->leave($__internal_7b7cb383048fd22ad24bbc42184daaf4baad440e20e0cc05ac073de76e3d67b5_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
