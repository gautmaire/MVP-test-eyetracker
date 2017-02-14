<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5291c1619cdd07462c4b8f010dca83bd025994e8c5a12213932bbac0d43689df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5291c1619cdd07462c4b8f010dca83bd025994e8c5a12213932bbac0d43689df->enter($__internal_5291c1619cdd07462c4b8f010dca83bd025994e8c5a12213932bbac0d43689df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1c607880d2616aebaccfdb43fc22146b40c19ca9264092b726742fa3f6cf29e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c607880d2616aebaccfdb43fc22146b40c19ca9264092b726742fa3f6cf29e3->enter($__internal_1c607880d2616aebaccfdb43fc22146b40c19ca9264092b726742fa3f6cf29e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5291c1619cdd07462c4b8f010dca83bd025994e8c5a12213932bbac0d43689df->leave($__internal_5291c1619cdd07462c4b8f010dca83bd025994e8c5a12213932bbac0d43689df_prof);

        
        $__internal_1c607880d2616aebaccfdb43fc22146b40c19ca9264092b726742fa3f6cf29e3->leave($__internal_1c607880d2616aebaccfdb43fc22146b40c19ca9264092b726742fa3f6cf29e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6917c2e74042f8514ffc2c622fc1749c6cbdc6e8c01cc94be1c06957cc2faf5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6917c2e74042f8514ffc2c622fc1749c6cbdc6e8c01cc94be1c06957cc2faf5e->enter($__internal_6917c2e74042f8514ffc2c622fc1749c6cbdc6e8c01cc94be1c06957cc2faf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94664cc7bcffea4b5680f6518ffef5b12d344334c0a2adbd556bf99bf4fe912c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94664cc7bcffea4b5680f6518ffef5b12d344334c0a2adbd556bf99bf4fe912c->enter($__internal_94664cc7bcffea4b5680f6518ffef5b12d344334c0a2adbd556bf99bf4fe912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_94664cc7bcffea4b5680f6518ffef5b12d344334c0a2adbd556bf99bf4fe912c->leave($__internal_94664cc7bcffea4b5680f6518ffef5b12d344334c0a2adbd556bf99bf4fe912c_prof);

        
        $__internal_6917c2e74042f8514ffc2c622fc1749c6cbdc6e8c01cc94be1c06957cc2faf5e->leave($__internal_6917c2e74042f8514ffc2c622fc1749c6cbdc6e8c01cc94be1c06957cc2faf5e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_271d2b4486447eb648c8d331d44401633009e1318360ae1940f7846d8cd1b0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271d2b4486447eb648c8d331d44401633009e1318360ae1940f7846d8cd1b0d2->enter($__internal_271d2b4486447eb648c8d331d44401633009e1318360ae1940f7846d8cd1b0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b60f0752d8b6d372d2efdaa3e32a3d159df9dc753375f66a7cbb9b9cddf59aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60f0752d8b6d372d2efdaa3e32a3d159df9dc753375f66a7cbb9b9cddf59aba->enter($__internal_b60f0752d8b6d372d2efdaa3e32a3d159df9dc753375f66a7cbb9b9cddf59aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b60f0752d8b6d372d2efdaa3e32a3d159df9dc753375f66a7cbb9b9cddf59aba->leave($__internal_b60f0752d8b6d372d2efdaa3e32a3d159df9dc753375f66a7cbb9b9cddf59aba_prof);

        
        $__internal_271d2b4486447eb648c8d331d44401633009e1318360ae1940f7846d8cd1b0d2->leave($__internal_271d2b4486447eb648c8d331d44401633009e1318360ae1940f7846d8cd1b0d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f42354cd16af9cbf003f97858fff340fc1618d7ac0ae527813e5aed3cdd572b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f42354cd16af9cbf003f97858fff340fc1618d7ac0ae527813e5aed3cdd572b->enter($__internal_6f42354cd16af9cbf003f97858fff340fc1618d7ac0ae527813e5aed3cdd572b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72f23eb6607a130a25757adf4e391cc3f6fb25886df00db3c605120b53e6d6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f23eb6607a130a25757adf4e391cc3f6fb25886df00db3c605120b53e6d6fe->enter($__internal_72f23eb6607a130a25757adf4e391cc3f6fb25886df00db3c605120b53e6d6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72f23eb6607a130a25757adf4e391cc3f6fb25886df00db3c605120b53e6d6fe->leave($__internal_72f23eb6607a130a25757adf4e391cc3f6fb25886df00db3c605120b53e6d6fe_prof);

        
        $__internal_6f42354cd16af9cbf003f97858fff340fc1618d7ac0ae527813e5aed3cdd572b->leave($__internal_6f42354cd16af9cbf003f97858fff340fc1618d7ac0ae527813e5aed3cdd572b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_178c3cd500dd41177efac77f71e039a31bf50c832949b800ab5eb3b84e39eed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178c3cd500dd41177efac77f71e039a31bf50c832949b800ab5eb3b84e39eed9->enter($__internal_178c3cd500dd41177efac77f71e039a31bf50c832949b800ab5eb3b84e39eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a453096539139c6523ec14e7c350af46827e7eb9e199b0d1613c8b4551878977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a453096539139c6523ec14e7c350af46827e7eb9e199b0d1613c8b4551878977->enter($__internal_a453096539139c6523ec14e7c350af46827e7eb9e199b0d1613c8b4551878977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a453096539139c6523ec14e7c350af46827e7eb9e199b0d1613c8b4551878977->leave($__internal_a453096539139c6523ec14e7c350af46827e7eb9e199b0d1613c8b4551878977_prof);

        
        $__internal_178c3cd500dd41177efac77f71e039a31bf50c832949b800ab5eb3b84e39eed9->leave($__internal_178c3cd500dd41177efac77f71e039a31bf50c832949b800ab5eb3b84e39eed9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/app/Resources/views/base.html.twig");
    }
}
