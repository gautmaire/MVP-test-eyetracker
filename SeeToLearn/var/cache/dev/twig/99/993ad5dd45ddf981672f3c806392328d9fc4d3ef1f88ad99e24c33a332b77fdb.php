<?php

/* MotBundle:Default:index.html.twig */
class __TwigTemplate_d65f9d545d28213f45f76073b37aa666eef3bc463014e5cde8ade45a710c246d extends Twig_Template
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
        $__internal_cc5f3abd8aa1c72bdc77411c4795891e4555f30cff87f4eb64158a0943d7757b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5f3abd8aa1c72bdc77411c4795891e4555f30cff87f4eb64158a0943d7757b->enter($__internal_cc5f3abd8aa1c72bdc77411c4795891e4555f30cff87f4eb64158a0943d7757b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MotBundle:Default:index.html.twig"));

        $__internal_468fc5774c2a511452f5d90be542cb6ff130512004ad7818f5771d23f28c4900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468fc5774c2a511452f5d90be542cb6ff130512004ad7818f5771d23f28c4900->enter($__internal_468fc5774c2a511452f5d90be542cb6ff130512004ad7818f5771d23f28c4900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MotBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_cc5f3abd8aa1c72bdc77411c4795891e4555f30cff87f4eb64158a0943d7757b->leave($__internal_cc5f3abd8aa1c72bdc77411c4795891e4555f30cff87f4eb64158a0943d7757b_prof);

        
        $__internal_468fc5774c2a511452f5d90be542cb6ff130512004ad7818f5771d23f28c4900->leave($__internal_468fc5774c2a511452f5d90be542cb6ff130512004ad7818f5771d23f28c4900_prof);

    }

    public function getTemplateName()
    {
        return "MotBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
", "MotBundle:Default:index.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/MotBundle/Resources/views/Default/index.html.twig");
    }
}
