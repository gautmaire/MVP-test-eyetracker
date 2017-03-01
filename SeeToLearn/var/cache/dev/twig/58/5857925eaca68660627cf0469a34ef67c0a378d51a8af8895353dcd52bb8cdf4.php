<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ef16f0062d80481c8c292f116597cedbe18193977f777013dac0a72f29c2b83e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5be67cd4458f636fc2bdd0d58412089e6b4ee76cca18c865d1e5d96d8e2e88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5be67cd4458f636fc2bdd0d58412089e6b4ee76cca18c865d1e5d96d8e2e88c->enter($__internal_f5be67cd4458f636fc2bdd0d58412089e6b4ee76cca18c865d1e5d96d8e2e88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_944d52f544f02427b605cf5e5ae8dfc8f240a87ba238c14a4d1aceadfccd3afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944d52f544f02427b605cf5e5ae8dfc8f240a87ba238c14a4d1aceadfccd3afc->enter($__internal_944d52f544f02427b605cf5e5ae8dfc8f240a87ba238c14a4d1aceadfccd3afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5be67cd4458f636fc2bdd0d58412089e6b4ee76cca18c865d1e5d96d8e2e88c->leave($__internal_f5be67cd4458f636fc2bdd0d58412089e6b4ee76cca18c865d1e5d96d8e2e88c_prof);

        
        $__internal_944d52f544f02427b605cf5e5ae8dfc8f240a87ba238c14a4d1aceadfccd3afc->leave($__internal_944d52f544f02427b605cf5e5ae8dfc8f240a87ba238c14a4d1aceadfccd3afc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0a60a80fcb07a91e3f5f301c0568b1713b20bedb10ec9f66110742286816a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a60a80fcb07a91e3f5f301c0568b1713b20bedb10ec9f66110742286816a6c->enter($__internal_d0a60a80fcb07a91e3f5f301c0568b1713b20bedb10ec9f66110742286816a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7436555339db489002471fd3ab93a27fe9ba41e05d5652471f2152790577818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7436555339db489002471fd3ab93a27fe9ba41e05d5652471f2152790577818->enter($__internal_a7436555339db489002471fd3ab93a27fe9ba41e05d5652471f2152790577818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a7436555339db489002471fd3ab93a27fe9ba41e05d5652471f2152790577818->leave($__internal_a7436555339db489002471fd3ab93a27fe9ba41e05d5652471f2152790577818_prof);

        
        $__internal_d0a60a80fcb07a91e3f5f301c0568b1713b20bedb10ec9f66110742286816a6c->leave($__internal_d0a60a80fcb07a91e3f5f301c0568b1713b20bedb10ec9f66110742286816a6c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
