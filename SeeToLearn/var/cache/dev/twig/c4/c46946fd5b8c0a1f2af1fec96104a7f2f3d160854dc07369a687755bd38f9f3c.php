<?php

/* IndexBundle:Default:listeTextes.html.twig */
class __TwigTemplate_ce8a968deffc81abaaf2f6c0da21a16cb94270f38e4b13b4b813dd8fd2aed4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IndexBundle:Default:headerfooter.html.twig", "IndexBundle:Default:listeTextes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndexBundle:Default:headerfooter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0396f234dccd0c0c711b5d69adfafc645923c3fdf5dd01905c988263d131db14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0396f234dccd0c0c711b5d69adfafc645923c3fdf5dd01905c988263d131db14->enter($__internal_0396f234dccd0c0c711b5d69adfafc645923c3fdf5dd01905c988263d131db14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:listeTextes.html.twig"));

        $__internal_cf4adf46187f62761a3814e4589155c94c7eec1b0a891aea374e5bc11dc63210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4adf46187f62761a3814e4589155c94c7eec1b0a891aea374e5bc11dc63210->enter($__internal_cf4adf46187f62761a3814e4589155c94c7eec1b0a891aea374e5bc11dc63210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IndexBundle:Default:listeTextes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0396f234dccd0c0c711b5d69adfafc645923c3fdf5dd01905c988263d131db14->leave($__internal_0396f234dccd0c0c711b5d69adfafc645923c3fdf5dd01905c988263d131db14_prof);

        
        $__internal_cf4adf46187f62761a3814e4589155c94c7eec1b0a891aea374e5bc11dc63210->leave($__internal_cf4adf46187f62761a3814e4589155c94c7eec1b0a891aea374e5bc11dc63210_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca364c749443de08c7c72ad5725395c0f537cb1506fb1886abfaf778f446e5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca364c749443de08c7c72ad5725395c0f537cb1506fb1886abfaf778f446e5dc->enter($__internal_ca364c749443de08c7c72ad5725395c0f537cb1506fb1886abfaf778f446e5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf80c7f265a57caa114b04f7c6b75752228d611add18d7a659f159d0553274b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf80c7f265a57caa114b04f7c6b75752228d611add18d7a659f159d0553274b4->enter($__internal_bf80c7f265a57caa114b04f7c6b75752228d611add18d7a659f159d0553274b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title> Liste des Textes </title>
";
        
        $__internal_bf80c7f265a57caa114b04f7c6b75752228d611add18d7a659f159d0553274b4->leave($__internal_bf80c7f265a57caa114b04f7c6b75752228d611add18d7a659f159d0553274b4_prof);

        
        $__internal_ca364c749443de08c7c72ad5725395c0f537cb1506fb1886abfaf778f446e5dc->leave($__internal_ca364c749443de08c7c72ad5725395c0f537cb1506fb1886abfaf778f446e5dc_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b788c204e0c1d9f7de9fbd86cd4b3bfa578760b64ef70b25e635aedead7824bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b788c204e0c1d9f7de9fbd86cd4b3bfa578760b64ef70b25e635aedead7824bd->enter($__internal_b788c204e0c1d9f7de9fbd86cd4b3bfa578760b64ef70b25e635aedead7824bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f1bb9c773371fd840e40c619268912b301a7f465824bcc97d21a9be0894c83e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bb9c773371fd840e40c619268912b301a7f465824bcc97d21a9be0894c83e9->enter($__internal_f1bb9c773371fd840e40c619268912b301a7f465824bcc97d21a9be0894c83e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h3> Textes disponibles: </h3>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) ? $context["texts"] : $this->getContext($context, "texts")));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 10
            echo "        <div class=\"textes\">
            <p> Titre de l'oeuvre: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "titre", array()), "html", null, true);
            echo "</p>
            <p> Auteur de l'oeuvre: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["text"], "auteur", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f1bb9c773371fd840e40c619268912b301a7f465824bcc97d21a9be0894c83e9->leave($__internal_f1bb9c773371fd840e40c619268912b301a7f465824bcc97d21a9be0894c83e9_prof);

        
        $__internal_b788c204e0c1d9f7de9fbd86cd4b3bfa578760b64ef70b25e635aedead7824bd->leave($__internal_b788c204e0c1d9f7de9fbd86cd4b3bfa578760b64ef70b25e635aedead7824bd_prof);

    }

    public function getTemplateName()
    {
        return "IndexBundle:Default:listeTextes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  80 => 11,  77 => 10,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'IndexBundle:Default:headerfooter.html.twig' %}

{% block title %}
    <title> Liste des Textes </title>
{% endblock %}

{% block content %}
    <h3> Textes disponibles: </h3>
    {% for text in texts %}
        <div class=\"textes\">
            <p> Titre de l'oeuvre: {{ text.titre }}</p>
            <p> Auteur de l'oeuvre: {{ text.auteur }}</p>
        </div>
    {% endfor %}
{% endblock %}", "IndexBundle:Default:listeTextes.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/IndexBundle/Resources/views/Default/listeTextes.html.twig");
    }
}
