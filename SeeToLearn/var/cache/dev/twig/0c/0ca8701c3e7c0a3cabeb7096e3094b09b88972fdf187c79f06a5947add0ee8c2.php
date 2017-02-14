<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_67144f7f06de43c3dd4174e15cea2a269f97469ce8e53898eb3d711f7bd8d950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f3b968952ec0f12b0296483ba7a1e53a4236f1718c69965de2e1ce0d85cea8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3b968952ec0f12b0296483ba7a1e53a4236f1718c69965de2e1ce0d85cea8f->enter($__internal_7f3b968952ec0f12b0296483ba7a1e53a4236f1718c69965de2e1ce0d85cea8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_e8494144aad09d563bed5c5a7aecbeee768c51382919745a86d95088de3a9897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8494144aad09d563bed5c5a7aecbeee768c51382919745a86d95088de3a9897->enter($__internal_e8494144aad09d563bed5c5a7aecbeee768c51382919745a86d95088de3a9897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
<div class=\"login \">
    ";
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 7
        echo "</div>";
        
        $__internal_7f3b968952ec0f12b0296483ba7a1e53a4236f1718c69965de2e1ce0d85cea8f->leave($__internal_7f3b968952ec0f12b0296483ba7a1e53a4236f1718c69965de2e1ce0d85cea8f_prof);

        
        $__internal_e8494144aad09d563bed5c5a7aecbeee768c51382919745a86d95088de3a9897->leave($__internal_e8494144aad09d563bed5c5a7aecbeee768c51382919745a86d95088de3a9897_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
<div class=\"login \">
    {% if app.user %}
    {% else %}
        <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'Connexion'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>", "UserBundle:Default:index.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
