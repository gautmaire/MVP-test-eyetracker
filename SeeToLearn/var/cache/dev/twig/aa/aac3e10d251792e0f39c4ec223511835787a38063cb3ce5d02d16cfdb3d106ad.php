<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0ccd406effbf6a0e1ed02d2ea74a843a3bd516ddffe1806e1945d8a48d82871f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccd406effbf6a0e1ed02d2ea74a843a3bd516ddffe1806e1945d8a48d82871f->enter($__internal_0ccd406effbf6a0e1ed02d2ea74a843a3bd516ddffe1806e1945d8a48d82871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1a691c0c57bbdb1d1622eb2e74d580cd224f54ef9d4b274e1b7b36f21ee7d81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a691c0c57bbdb1d1622eb2e74d580cd224f54ef9d4b274e1b7b36f21ee7d81a->enter($__internal_1a691c0c57bbdb1d1622eb2e74d580cd224f54ef9d4b274e1b7b36f21ee7d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ccd406effbf6a0e1ed02d2ea74a843a3bd516ddffe1806e1945d8a48d82871f->leave($__internal_0ccd406effbf6a0e1ed02d2ea74a843a3bd516ddffe1806e1945d8a48d82871f_prof);

        
        $__internal_1a691c0c57bbdb1d1622eb2e74d580cd224f54ef9d4b274e1b7b36f21ee7d81a->leave($__internal_1a691c0c57bbdb1d1622eb2e74d580cd224f54ef9d4b274e1b7b36f21ee7d81a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56f4d712125a65934709bdca7dbef705ca4e223551c0fa930d90c7af92b62735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f4d712125a65934709bdca7dbef705ca4e223551c0fa930d90c7af92b62735->enter($__internal_56f4d712125a65934709bdca7dbef705ca4e223551c0fa930d90c7af92b62735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0ceaa9eef2a3d13948563b2f3ead0f46eb2e35d461153e2e40d7983b1846a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ceaa9eef2a3d13948563b2f3ead0f46eb2e35d461153e2e40d7983b1846a50->enter($__internal_b0ceaa9eef2a3d13948563b2f3ead0f46eb2e35d461153e2e40d7983b1846a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b0ceaa9eef2a3d13948563b2f3ead0f46eb2e35d461153e2e40d7983b1846a50->leave($__internal_b0ceaa9eef2a3d13948563b2f3ead0f46eb2e35d461153e2e40d7983b1846a50_prof);

        
        $__internal_56f4d712125a65934709bdca7dbef705ca4e223551c0fa930d90c7af92b62735->leave($__internal_56f4d712125a65934709bdca7dbef705ca4e223551c0fa930d90c7af92b62735_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8e5e37081bc91982dfe89a8cec796cf159774df00824879767bcf8eaefa5a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e5e37081bc91982dfe89a8cec796cf159774df00824879767bcf8eaefa5a4f->enter($__internal_a8e5e37081bc91982dfe89a8cec796cf159774df00824879767bcf8eaefa5a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bdac8617aaaa117004dbcfb24d488543ef955c490a3e7e8e7ec0e1db771ba3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdac8617aaaa117004dbcfb24d488543ef955c490a3e7e8e7ec0e1db771ba3c->enter($__internal_8bdac8617aaaa117004dbcfb24d488543ef955c490a3e7e8e7ec0e1db771ba3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8bdac8617aaaa117004dbcfb24d488543ef955c490a3e7e8e7ec0e1db771ba3c->leave($__internal_8bdac8617aaaa117004dbcfb24d488543ef955c490a3e7e8e7ec0e1db771ba3c_prof);

        
        $__internal_a8e5e37081bc91982dfe89a8cec796cf159774df00824879767bcf8eaefa5a4f->leave($__internal_a8e5e37081bc91982dfe89a8cec796cf159774df00824879767bcf8eaefa5a4f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4540e308b90a028760c932672300d36adce212ecf99f8b8b702363a7fade223f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4540e308b90a028760c932672300d36adce212ecf99f8b8b702363a7fade223f->enter($__internal_4540e308b90a028760c932672300d36adce212ecf99f8b8b702363a7fade223f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_743b1812f5dd0b8d9beb9fefac708abd238cd68078a6190b928ed28f58720e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b1812f5dd0b8d9beb9fefac708abd238cd68078a6190b928ed28f58720e22->enter($__internal_743b1812f5dd0b8d9beb9fefac708abd238cd68078a6190b928ed28f58720e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_743b1812f5dd0b8d9beb9fefac708abd238cd68078a6190b928ed28f58720e22->leave($__internal_743b1812f5dd0b8d9beb9fefac708abd238cd68078a6190b928ed28f58720e22_prof);

        
        $__internal_4540e308b90a028760c932672300d36adce212ecf99f8b8b702363a7fade223f->leave($__internal_4540e308b90a028760c932672300d36adce212ecf99f8b8b702363a7fade223f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
