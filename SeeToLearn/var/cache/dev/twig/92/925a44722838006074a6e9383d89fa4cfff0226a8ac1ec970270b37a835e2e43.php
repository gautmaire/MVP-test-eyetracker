<?php

/* UserBundle:Default:profile.html.twig */
class __TwigTemplate_fcde96bc8ea5845e7ba99fde8cae33b5b2473f31b36e833d8a177e67de4eb1ab extends Twig_Template
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
        $__internal_29b69e46127df34f988ecf1e95e814e12896a3cf7d040b19a3dce1407c54cab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b69e46127df34f988ecf1e95e814e12896a3cf7d040b19a3dce1407c54cab7->enter($__internal_29b69e46127df34f988ecf1e95e814e12896a3cf7d040b19a3dce1407c54cab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:profile.html.twig"));

        $__internal_f38c0c413b9dc574c27eadb80eee2ba5811daae5eae6b18e9ce57e97f7587ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38c0c413b9dc574c27eadb80eee2ba5811daae5eae6b18e9ce57e97f7587ab9->enter($__internal_f38c0c413b9dc574c27eadb80eee2ba5811daae5eae6b18e9ce57e97f7587ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:profile.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<div>
    <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit"), "html", null, true);
        echo "\" />
</div>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_29b69e46127df34f988ecf1e95e814e12896a3cf7d040b19a3dce1407c54cab7->leave($__internal_29b69e46127df34f988ecf1e95e814e12896a3cf7d040b19a3dce1407c54cab7_prof);

        
        $__internal_f38c0c413b9dc574c27eadb80eee2ba5811daae5eae6b18e9ce57e97f7587ab9->leave($__internal_f38c0c413b9dc574c27eadb80eee2ba5811daae5eae6b18e9ce57e97f7587ab9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    {{ form_widget(form) }}
<div>
    <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
</div>
{{ form_end(form) }}", "UserBundle:Default:profile.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/UserBundle/Resources/views/Default/profile.html.twig");
    }
}
