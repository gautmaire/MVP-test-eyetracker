<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bd883be29e2fb58beb47db10fb9536ce575d3a3939f1de6991358be99c3b71c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f4de2cc5b61b87811ac7050ef9c3861e006803f697f6af24309249a5dbdb44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4de2cc5b61b87811ac7050ef9c3861e006803f697f6af24309249a5dbdb44d->enter($__internal_4f4de2cc5b61b87811ac7050ef9c3861e006803f697f6af24309249a5dbdb44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5f7813ecad6d85e968c3ac59b381fbb95302dafbe6492bb27c592cb931d46864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7813ecad6d85e968c3ac59b381fbb95302dafbe6492bb27c592cb931d46864->enter($__internal_5f7813ecad6d85e968c3ac59b381fbb95302dafbe6492bb27c592cb931d46864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f4de2cc5b61b87811ac7050ef9c3861e006803f697f6af24309249a5dbdb44d->leave($__internal_4f4de2cc5b61b87811ac7050ef9c3861e006803f697f6af24309249a5dbdb44d_prof);

        
        $__internal_5f7813ecad6d85e968c3ac59b381fbb95302dafbe6492bb27c592cb931d46864->leave($__internal_5f7813ecad6d85e968c3ac59b381fbb95302dafbe6492bb27c592cb931d46864_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7d70bc116eff3c5ecf9343921b6de97f8f8613e00ca874692a1c2e27d5d5614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d70bc116eff3c5ecf9343921b6de97f8f8613e00ca874692a1c2e27d5d5614->enter($__internal_f7d70bc116eff3c5ecf9343921b6de97f8f8613e00ca874692a1c2e27d5d5614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7bf6a0ca4df789ff49cf6116b7eb2a86942ce7d2e31ea7a9266a59296121e052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf6a0ca4df789ff49cf6116b7eb2a86942ce7d2e31ea7a9266a59296121e052->enter($__internal_7bf6a0ca4df789ff49cf6116b7eb2a86942ce7d2e31ea7a9266a59296121e052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7bf6a0ca4df789ff49cf6116b7eb2a86942ce7d2e31ea7a9266a59296121e052->leave($__internal_7bf6a0ca4df789ff49cf6116b7eb2a86942ce7d2e31ea7a9266a59296121e052_prof);

        
        $__internal_f7d70bc116eff3c5ecf9343921b6de97f8f8613e00ca874692a1c2e27d5d5614->leave($__internal_f7d70bc116eff3c5ecf9343921b6de97f8f8613e00ca874692a1c2e27d5d5614_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_964be2930a572131c7d45ad9717fb354fe740f28da742491e47b375d9b1c19ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964be2930a572131c7d45ad9717fb354fe740f28da742491e47b375d9b1c19ad->enter($__internal_964be2930a572131c7d45ad9717fb354fe740f28da742491e47b375d9b1c19ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8c5993f26440fb6c5b03d3275e45e9a1870663ec729d26e2e39376a0dda02b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c5993f26440fb6c5b03d3275e45e9a1870663ec729d26e2e39376a0dda02b1->enter($__internal_b8c5993f26440fb6c5b03d3275e45e9a1870663ec729d26e2e39376a0dda02b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b8c5993f26440fb6c5b03d3275e45e9a1870663ec729d26e2e39376a0dda02b1->leave($__internal_b8c5993f26440fb6c5b03d3275e45e9a1870663ec729d26e2e39376a0dda02b1_prof);

        
        $__internal_964be2930a572131c7d45ad9717fb354fe740f28da742491e47b375d9b1c19ad->leave($__internal_964be2930a572131c7d45ad9717fb354fe740f28da742491e47b375d9b1c19ad_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8861775cb89552aa02a2d6fb3cf72e59e450f70478aff9717453f7f9fd186c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8861775cb89552aa02a2d6fb3cf72e59e450f70478aff9717453f7f9fd186c51->enter($__internal_8861775cb89552aa02a2d6fb3cf72e59e450f70478aff9717453f7f9fd186c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb3c16c4f5e265fce875491283ed8a9b1fdcab874a5d33530a204543cfb2abdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3c16c4f5e265fce875491283ed8a9b1fdcab874a5d33530a204543cfb2abdc->enter($__internal_cb3c16c4f5e265fce875491283ed8a9b1fdcab874a5d33530a204543cfb2abdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cb3c16c4f5e265fce875491283ed8a9b1fdcab874a5d33530a204543cfb2abdc->leave($__internal_cb3c16c4f5e265fce875491283ed8a9b1fdcab874a5d33530a204543cfb2abdc_prof);

        
        $__internal_8861775cb89552aa02a2d6fb3cf72e59e450f70478aff9717453f7f9fd186c51->leave($__internal_8861775cb89552aa02a2d6fb3cf72e59e450f70478aff9717453f7f9fd186c51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
