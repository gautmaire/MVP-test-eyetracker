<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
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
        $__internal_b6970acba135812de7ada2a07c5b98fbb1038fe658536929ddcbe147c53de2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6970acba135812de7ada2a07c5b98fbb1038fe658536929ddcbe147c53de2c6->enter($__internal_b6970acba135812de7ada2a07c5b98fbb1038fe658536929ddcbe147c53de2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7051d8b053edff5791268f7583a3fb4922e403174c044db1c8efad5847764fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7051d8b053edff5791268f7583a3fb4922e403174c044db1c8efad5847764fc5->enter($__internal_7051d8b053edff5791268f7583a3fb4922e403174c044db1c8efad5847764fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6970acba135812de7ada2a07c5b98fbb1038fe658536929ddcbe147c53de2c6->leave($__internal_b6970acba135812de7ada2a07c5b98fbb1038fe658536929ddcbe147c53de2c6_prof);

        
        $__internal_7051d8b053edff5791268f7583a3fb4922e403174c044db1c8efad5847764fc5->leave($__internal_7051d8b053edff5791268f7583a3fb4922e403174c044db1c8efad5847764fc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c6edfa115bfeab3fe7557ec0473e1c5a752a1b4aebe73b48592feaea3c4b173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6edfa115bfeab3fe7557ec0473e1c5a752a1b4aebe73b48592feaea3c4b173->enter($__internal_1c6edfa115bfeab3fe7557ec0473e1c5a752a1b4aebe73b48592feaea3c4b173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_754032a3105dd6fba87d5f9cb64372d7112f58f49d0a45416851e917dc4498be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754032a3105dd6fba87d5f9cb64372d7112f58f49d0a45416851e917dc4498be->enter($__internal_754032a3105dd6fba87d5f9cb64372d7112f58f49d0a45416851e917dc4498be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_754032a3105dd6fba87d5f9cb64372d7112f58f49d0a45416851e917dc4498be->leave($__internal_754032a3105dd6fba87d5f9cb64372d7112f58f49d0a45416851e917dc4498be_prof);

        
        $__internal_1c6edfa115bfeab3fe7557ec0473e1c5a752a1b4aebe73b48592feaea3c4b173->leave($__internal_1c6edfa115bfeab3fe7557ec0473e1c5a752a1b4aebe73b48592feaea3c4b173_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b730797df43b085e2458a5fa613dc38421ea5189af4a81dc1ce05cd1163edf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b730797df43b085e2458a5fa613dc38421ea5189af4a81dc1ce05cd1163edf54->enter($__internal_b730797df43b085e2458a5fa613dc38421ea5189af4a81dc1ce05cd1163edf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_357b58ce70c10e4318ea9077818746f03d58743f0c623164170cae7f11dcad29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357b58ce70c10e4318ea9077818746f03d58743f0c623164170cae7f11dcad29->enter($__internal_357b58ce70c10e4318ea9077818746f03d58743f0c623164170cae7f11dcad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_357b58ce70c10e4318ea9077818746f03d58743f0c623164170cae7f11dcad29->leave($__internal_357b58ce70c10e4318ea9077818746f03d58743f0c623164170cae7f11dcad29_prof);

        
        $__internal_b730797df43b085e2458a5fa613dc38421ea5189af4a81dc1ce05cd1163edf54->leave($__internal_b730797df43b085e2458a5fa613dc38421ea5189af4a81dc1ce05cd1163edf54_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_90be85560f0e419490505eb3851de3ce33ac4a29efaaa9600e4b990cbd227c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90be85560f0e419490505eb3851de3ce33ac4a29efaaa9600e4b990cbd227c2b->enter($__internal_90be85560f0e419490505eb3851de3ce33ac4a29efaaa9600e4b990cbd227c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5d337c152d39085b6be2a9c6e7dee9769b392e775ddb1f248b0ef8ca0e367c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d337c152d39085b6be2a9c6e7dee9769b392e775ddb1f248b0ef8ca0e367c8->enter($__internal_a5d337c152d39085b6be2a9c6e7dee9769b392e775ddb1f248b0ef8ca0e367c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a5d337c152d39085b6be2a9c6e7dee9769b392e775ddb1f248b0ef8ca0e367c8->leave($__internal_a5d337c152d39085b6be2a9c6e7dee9769b392e775ddb1f248b0ef8ca0e367c8_prof);

        
        $__internal_90be85560f0e419490505eb3851de3ce33ac4a29efaaa9600e4b990cbd227c2b->leave($__internal_90be85560f0e419490505eb3851de3ce33ac4a29efaaa9600e4b990cbd227c2b_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
