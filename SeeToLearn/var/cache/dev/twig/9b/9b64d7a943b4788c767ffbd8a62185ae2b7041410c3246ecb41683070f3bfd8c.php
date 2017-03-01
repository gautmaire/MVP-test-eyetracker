<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_69afa71f6e0ca417e3c12fd00e2cfa15e7ec8920969b984543462614d9f8e06c extends Twig_Template
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
        $__internal_9e2ade3ea64f6570b5ae1e41755cc405f00547e2dfe6dc9172af248ec82690fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2ade3ea64f6570b5ae1e41755cc405f00547e2dfe6dc9172af248ec82690fa->enter($__internal_9e2ade3ea64f6570b5ae1e41755cc405f00547e2dfe6dc9172af248ec82690fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_9139e063fc0644668c197005e3883a5795828b09dba568f66a0b939a8183160b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9139e063fc0644668c197005e3883a5795828b09dba568f66a0b939a8183160b->enter($__internal_9139e063fc0644668c197005e3883a5795828b09dba568f66a0b939a8183160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9e2ade3ea64f6570b5ae1e41755cc405f00547e2dfe6dc9172af248ec82690fa->leave($__internal_9e2ade3ea64f6570b5ae1e41755cc405f00547e2dfe6dc9172af248ec82690fa_prof);

        
        $__internal_9139e063fc0644668c197005e3883a5795828b09dba568f66a0b939a8183160b->leave($__internal_9139e063fc0644668c197005e3883a5795828b09dba568f66a0b939a8183160b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/Users/StayFan/Projet/EyeTracker/See-To-Learn/SeeToLearn/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
