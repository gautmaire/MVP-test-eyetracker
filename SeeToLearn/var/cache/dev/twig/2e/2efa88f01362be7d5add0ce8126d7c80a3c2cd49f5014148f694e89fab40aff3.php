<?php

/* IndexBundle:Default:headerfooter.html.twig */
class __TwigTemplate_e8c374d0a6ecf215e48fd874570610e4697c8d265b9fb3254ee836e67a41bbcf extends Twig_Template
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
        $__internal_7a2430e0966c4c5ba9ca0fce512dbdf75da0ee66b200608fdc359c1e80ac0247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2430e0966c4c5ba9ca0fce512dbdf75da0ee66b200608fdc359c1e80ac0247->enter($__internal_7a2430e0966c4c5ba9ca0fce512dbdf75da0ee66b200608fdc359c1e80ac0247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:headerfooter.html.twig"));

        $__internal_b72efb1c420b94e02d87f040487d993894af6af24425c9c1e482084251651b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72efb1c420b94e02d87f040487d993894af6af24425c9c1e482084251651b18->enter($__internal_b72efb1c420b94e02d87f040487d993894af6af24425c9c1e482084251651b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:headerfooter.html.twig"));

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
        
        $__internal_7a2430e0966c4c5ba9ca0fce512dbdf75da0ee66b200608fdc359c1e80ac0247->leave($__internal_7a2430e0966c4c5ba9ca0fce512dbdf75da0ee66b200608fdc359c1e80ac0247_prof);

        
        $__internal_b72efb1c420b94e02d87f040487d993894af6af24425c9c1e482084251651b18->leave($__internal_b72efb1c420b94e02d87f040487d993894af6af24425c9c1e482084251651b18_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_94889e2e058f79570bf8d4a0c76ffa96319112d1ab76ab46746d6fe6f8e487dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94889e2e058f79570bf8d4a0c76ffa96319112d1ab76ab46746d6fe6f8e487dd->enter($__internal_94889e2e058f79570bf8d4a0c76ffa96319112d1ab76ab46746d6fe6f8e487dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd91aaed16da7bf3f51b46f98d08487f5824e3bc78409d208290ab9843b9590c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd91aaed16da7bf3f51b46f98d08487f5824e3bc78409d208290ab9843b9590c->enter($__internal_dd91aaed16da7bf3f51b46f98d08487f5824e3bc78409d208290ab9843b9590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_dd91aaed16da7bf3f51b46f98d08487f5824e3bc78409d208290ab9843b9590c->leave($__internal_dd91aaed16da7bf3f51b46f98d08487f5824e3bc78409d208290ab9843b9590c_prof);

        
        $__internal_94889e2e058f79570bf8d4a0c76ffa96319112d1ab76ab46746d6fe6f8e487dd->leave($__internal_94889e2e058f79570bf8d4a0c76ffa96319112d1ab76ab46746d6fe6f8e487dd_prof);

    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        $__internal_83d2e47525ecf61ae7870ddcd13162a8a903fcf67e0cc4796c50116f88f67e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d2e47525ecf61ae7870ddcd13162a8a903fcf67e0cc4796c50116f88f67e6d->enter($__internal_83d2e47525ecf61ae7870ddcd13162a8a903fcf67e0cc4796c50116f88f67e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_3ddb38a7ffa8e69cdb87ada55f88bc24f9714c2aa4a4b49a5b8460d76d8e89f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddb38a7ffa8e69cdb87ada55f88bc24f9714c2aa4a4b49a5b8460d76d8e89f9->enter($__internal_3ddb38a7ffa8e69cdb87ada55f88bc24f9714c2aa4a4b49a5b8460d76d8e89f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        echo " ";
        
        $__internal_3ddb38a7ffa8e69cdb87ada55f88bc24f9714c2aa4a4b49a5b8460d76d8e89f9->leave($__internal_3ddb38a7ffa8e69cdb87ada55f88bc24f9714c2aa4a4b49a5b8460d76d8e89f9_prof);

        
        $__internal_83d2e47525ecf61ae7870ddcd13162a8a903fcf67e0cc4796c50116f88f67e6d->leave($__internal_83d2e47525ecf61ae7870ddcd13162a8a903fcf67e0cc4796c50116f88f67e6d_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca18a23935bb86cc60a375c79639067d3d6a2875058d338f174c9bb79a8bd551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca18a23935bb86cc60a375c79639067d3d6a2875058d338f174c9bb79a8bd551->enter($__internal_ca18a23935bb86cc60a375c79639067d3d6a2875058d338f174c9bb79a8bd551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e005f17bfe0406038cd5f3b1e72def019ef45139e390ff81dc8fe57ff1d050a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e005f17bfe0406038cd5f3b1e72def019ef45139e390ff81dc8fe57ff1d050a8->enter($__internal_e005f17bfe0406038cd5f3b1e72def019ef45139e390ff81dc8fe57ff1d050a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_e005f17bfe0406038cd5f3b1e72def019ef45139e390ff81dc8fe57ff1d050a8->leave($__internal_e005f17bfe0406038cd5f3b1e72def019ef45139e390ff81dc8fe57ff1d050a8_prof);

        
        $__internal_ca18a23935bb86cc60a375c79639067d3d6a2875058d338f174c9bb79a8bd551->leave($__internal_ca18a23935bb86cc60a375c79639067d3d6a2875058d338f174c9bb79a8bd551_prof);

    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
        $__internal_b909d40a384db84d1e3c1e2214de3cabdf2dcae97c9ccf26bc633d69c7ef13b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b909d40a384db84d1e3c1e2214de3cabdf2dcae97c9ccf26bc633d69c7ef13b8->enter($__internal_b909d40a384db84d1e3c1e2214de3cabdf2dcae97c9ccf26bc633d69c7ef13b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_18add2eb9abbc06de0bb299dd1a88d3fda4e446ba8924a18975bc853996548aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18add2eb9abbc06de0bb299dd1a88d3fda4e446ba8924a18975bc853996548aa->enter($__internal_18add2eb9abbc06de0bb299dd1a88d3fda4e446ba8924a18975bc853996548aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        echo " ";
        
        $__internal_18add2eb9abbc06de0bb299dd1a88d3fda4e446ba8924a18975bc853996548aa->leave($__internal_18add2eb9abbc06de0bb299dd1a88d3fda4e446ba8924a18975bc853996548aa_prof);

        
        $__internal_b909d40a384db84d1e3c1e2214de3cabdf2dcae97c9ccf26bc633d69c7ef13b8->leave($__internal_b909d40a384db84d1e3c1e2214de3cabdf2dcae97c9ccf26bc633d69c7ef13b8_prof);

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
</html>", "IndexBundle:Default:headerfooter.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/headerfooter.html.twig");
    }
}
