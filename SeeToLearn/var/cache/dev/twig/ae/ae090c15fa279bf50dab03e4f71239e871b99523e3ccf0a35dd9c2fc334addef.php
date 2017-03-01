<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7aeb3349c7bb64cf9b5e7410a5d6b09c61f341cb2df4dc469a337120901dd99b extends Twig_Template
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
        $__internal_83e25e9c4195c56be182d35b6fda1a74a48e950efac4a62245191029b724889f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e25e9c4195c56be182d35b6fda1a74a48e950efac4a62245191029b724889f->enter($__internal_83e25e9c4195c56be182d35b6fda1a74a48e950efac4a62245191029b724889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbfa7a8393fc3fd0f49c5a366becada2906cb16546d17762c6924238d83da05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfa7a8393fc3fd0f49c5a366becada2906cb16546d17762c6924238d83da05e->enter($__internal_dbfa7a8393fc3fd0f49c5a366becada2906cb16546d17762c6924238d83da05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83e25e9c4195c56be182d35b6fda1a74a48e950efac4a62245191029b724889f->leave($__internal_83e25e9c4195c56be182d35b6fda1a74a48e950efac4a62245191029b724889f_prof);

        
        $__internal_dbfa7a8393fc3fd0f49c5a366becada2906cb16546d17762c6924238d83da05e->leave($__internal_dbfa7a8393fc3fd0f49c5a366becada2906cb16546d17762c6924238d83da05e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85ecb47ae1985428acb72d7152c304cb1d750a8b99e8da25f14818e4a7a5b27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ecb47ae1985428acb72d7152c304cb1d750a8b99e8da25f14818e4a7a5b27b->enter($__internal_85ecb47ae1985428acb72d7152c304cb1d750a8b99e8da25f14818e4a7a5b27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f26313cd19dfaca1c1942cfbd5064c2a2938860df2461948f34c9f4b5f4259b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26313cd19dfaca1c1942cfbd5064c2a2938860df2461948f34c9f4b5f4259b9->enter($__internal_f26313cd19dfaca1c1942cfbd5064c2a2938860df2461948f34c9f4b5f4259b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f26313cd19dfaca1c1942cfbd5064c2a2938860df2461948f34c9f4b5f4259b9->leave($__internal_f26313cd19dfaca1c1942cfbd5064c2a2938860df2461948f34c9f4b5f4259b9_prof);

        
        $__internal_85ecb47ae1985428acb72d7152c304cb1d750a8b99e8da25f14818e4a7a5b27b->leave($__internal_85ecb47ae1985428acb72d7152c304cb1d750a8b99e8da25f14818e4a7a5b27b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfdc100f4f36f6b4a54d09e7154493e78acae2a7e4768884787b7f42cd2cf95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdc100f4f36f6b4a54d09e7154493e78acae2a7e4768884787b7f42cd2cf95d->enter($__internal_dfdc100f4f36f6b4a54d09e7154493e78acae2a7e4768884787b7f42cd2cf95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b89bce7d850ec9bc5218fab2448e3fa3d5d8cdde0c036a4dc76f07fd0ad13ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89bce7d850ec9bc5218fab2448e3fa3d5d8cdde0c036a4dc76f07fd0ad13ff0->enter($__internal_b89bce7d850ec9bc5218fab2448e3fa3d5d8cdde0c036a4dc76f07fd0ad13ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b89bce7d850ec9bc5218fab2448e3fa3d5d8cdde0c036a4dc76f07fd0ad13ff0->leave($__internal_b89bce7d850ec9bc5218fab2448e3fa3d5d8cdde0c036a4dc76f07fd0ad13ff0_prof);

        
        $__internal_dfdc100f4f36f6b4a54d09e7154493e78acae2a7e4768884787b7f42cd2cf95d->leave($__internal_dfdc100f4f36f6b4a54d09e7154493e78acae2a7e4768884787b7f42cd2cf95d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d40811de9130afb08246b9bca38b4273f22219d4bb7eb06171d1e1dd81013416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40811de9130afb08246b9bca38b4273f22219d4bb7eb06171d1e1dd81013416->enter($__internal_d40811de9130afb08246b9bca38b4273f22219d4bb7eb06171d1e1dd81013416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c71c8f8c1a69af22f45a023646639cf6c7d785927d155be2327f079c2915f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c71c8f8c1a69af22f45a023646639cf6c7d785927d155be2327f079c2915f9f->enter($__internal_7c71c8f8c1a69af22f45a023646639cf6c7d785927d155be2327f079c2915f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7c71c8f8c1a69af22f45a023646639cf6c7d785927d155be2327f079c2915f9f->leave($__internal_7c71c8f8c1a69af22f45a023646639cf6c7d785927d155be2327f079c2915f9f_prof);

        
        $__internal_d40811de9130afb08246b9bca38b4273f22219d4bb7eb06171d1e1dd81013416->leave($__internal_d40811de9130afb08246b9bca38b4273f22219d4bb7eb06171d1e1dd81013416_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
