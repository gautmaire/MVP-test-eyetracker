<?php

/* IndexBundle:Default:headerfooter.html.twig */
class __TwigTemplate_72de685def25e7ad7d040d2113fc5d9ca11e2f2a85c90167df2862475a6d04b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61de8f361e855b0d41e4d3a9e6ac46fae39bb722c8fe0f72782aa31d82669c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61de8f361e855b0d41e4d3a9e6ac46fae39bb722c8fe0f72782aa31d82669c49->enter($__internal_61de8f361e855b0d41e4d3a9e6ac46fae39bb722c8fe0f72782aa31d82669c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:headerfooter.html.twig"));

        $__internal_7d4f8722ae3e6c5addd83892586d0b60b9b9654d4b8ab5f30817aeb610ec572a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4f8722ae3e6c5addd83892586d0b60b9b9654d4b8ab5f30817aeb610ec572a->enter($__internal_7d4f8722ae3e6c5addd83892586d0b60b9b9654d4b8ab5f30817aeb610ec572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:headerfooter.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 9
        echo "</head>
<body>

";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>

";
        // line 18
        $this->displayBlock('js', $context, $blocks);
        // line 19
        echo "</body>
</html>";
        
        $__internal_61de8f361e855b0d41e4d3a9e6ac46fae39bb722c8fe0f72782aa31d82669c49->leave($__internal_61de8f361e855b0d41e4d3a9e6ac46fae39bb722c8fe0f72782aa31d82669c49_prof);

        
        $__internal_7d4f8722ae3e6c5addd83892586d0b60b9b9654d4b8ab5f30817aeb610ec572a->leave($__internal_7d4f8722ae3e6c5addd83892586d0b60b9b9654d4b8ab5f30817aeb610ec572a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e691e04ec4bb0c105b38d6a8ee2294d79f645fbdcb3f576ea21ae23cc97a92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e691e04ec4bb0c105b38d6a8ee2294d79f645fbdcb3f576ea21ae23cc97a92b->enter($__internal_0e691e04ec4bb0c105b38d6a8ee2294d79f645fbdcb3f576ea21ae23cc97a92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ce69e991d49bfcf6053672ca7d6c1ea83654f116ebd17b901d46a868ffbb5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce69e991d49bfcf6053672ca7d6c1ea83654f116ebd17b901d46a868ffbb5df->enter($__internal_1ce69e991d49bfcf6053672ca7d6c1ea83654f116ebd17b901d46a868ffbb5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_1ce69e991d49bfcf6053672ca7d6c1ea83654f116ebd17b901d46a868ffbb5df->leave($__internal_1ce69e991d49bfcf6053672ca7d6c1ea83654f116ebd17b901d46a868ffbb5df_prof);

        
        $__internal_0e691e04ec4bb0c105b38d6a8ee2294d79f645fbdcb3f576ea21ae23cc97a92b->leave($__internal_0e691e04ec4bb0c105b38d6a8ee2294d79f645fbdcb3f576ea21ae23cc97a92b_prof);

    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        $__internal_be915d07bb38d5b045550ce4d74f860c6c9e328c43d2f2249e5bc00eb397dffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be915d07bb38d5b045550ce4d74f860c6c9e328c43d2f2249e5bc00eb397dffb->enter($__internal_be915d07bb38d5b045550ce4d74f860c6c9e328c43d2f2249e5bc00eb397dffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_21d8de1723c528e839db476a967dc0847ab120c1b4fc05dc73da3c3ae0da22e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d8de1723c528e839db476a967dc0847ab120c1b4fc05dc73da3c3ae0da22e1->enter($__internal_21d8de1723c528e839db476a967dc0847ab120c1b4fc05dc73da3c3ae0da22e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        echo " ";
        
        $__internal_21d8de1723c528e839db476a967dc0847ab120c1b4fc05dc73da3c3ae0da22e1->leave($__internal_21d8de1723c528e839db476a967dc0847ab120c1b4fc05dc73da3c3ae0da22e1_prof);

        
        $__internal_be915d07bb38d5b045550ce4d74f860c6c9e328c43d2f2249e5bc00eb397dffb->leave($__internal_be915d07bb38d5b045550ce4d74f860c6c9e328c43d2f2249e5bc00eb397dffb_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ce7979e8a06595f11161f90f5f3bc6fc70c950de889ab7f7f4815ff4de4d680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce7979e8a06595f11161f90f5f3bc6fc70c950de889ab7f7f4815ff4de4d680->enter($__internal_6ce7979e8a06595f11161f90f5f3bc6fc70c950de889ab7f7f4815ff4de4d680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_16c956d07753d79c2b1d11c2834434be25d65f18531e301f830f9c18c9934732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c956d07753d79c2b1d11c2834434be25d65f18531e301f830f9c18c9934732->enter($__internal_16c956d07753d79c2b1d11c2834434be25d65f18531e301f830f9c18c9934732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_16c956d07753d79c2b1d11c2834434be25d65f18531e301f830f9c18c9934732->leave($__internal_16c956d07753d79c2b1d11c2834434be25d65f18531e301f830f9c18c9934732_prof);

        
        $__internal_6ce7979e8a06595f11161f90f5f3bc6fc70c950de889ab7f7f4815ff4de4d680->leave($__internal_6ce7979e8a06595f11161f90f5f3bc6fc70c950de889ab7f7f4815ff4de4d680_prof);

    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
        $__internal_c8fe4c62b9a65b004c73c0cce51f8ceae5dcd7b0303fa92ff74ac4cc2fdf819c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fe4c62b9a65b004c73c0cce51f8ceae5dcd7b0303fa92ff74ac4cc2fdf819c->enter($__internal_c8fe4c62b9a65b004c73c0cce51f8ceae5dcd7b0303fa92ff74ac4cc2fdf819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_251eae65d0a1dc2bc3395906505bc1df0d3cf514bf16178f7dac7b21e88129b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251eae65d0a1dc2bc3395906505bc1df0d3cf514bf16178f7dac7b21e88129b9->enter($__internal_251eae65d0a1dc2bc3395906505bc1df0d3cf514bf16178f7dac7b21e88129b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        echo " ";
        
        $__internal_251eae65d0a1dc2bc3395906505bc1df0d3cf514bf16178f7dac7b21e88129b9->leave($__internal_251eae65d0a1dc2bc3395906505bc1df0d3cf514bf16178f7dac7b21e88129b9_prof);

        
        $__internal_c8fe4c62b9a65b004c73c0cce51f8ceae5dcd7b0303fa92ff74ac4cc2fdf819c->leave($__internal_c8fe4c62b9a65b004c73c0cce51f8ceae5dcd7b0303fa92ff74ac4cc2fdf819c_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:headerfooter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 18,  117 => 12,  99 => 8,  81 => 6,  70 => 19,  68 => 18,  63 => 16,  59 => 15,  55 => 14,  52 => 13,  50 => 12,  45 => 9,  43 => 8,  38 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block title %} {% endblock %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/bootstrap.min.css') }}\">
    {% block css %} {% endblock %}
</head>
<body>

{% block content %} {% endblock %}

<script type=\"text/javascript\" src=\"{{ asset('bundles/js/jquery-3.1.1.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/js/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/js/main.js') }}\"></script>

{% block js %} {% endblock %}
</body>
</html>", "IndexBundle:Default:headerfooter.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/headerfooter.html.twig");
    }
}
