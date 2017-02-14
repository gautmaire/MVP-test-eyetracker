<?php

/* UserBundle:Default:inscription.html.twig */
class __TwigTemplate_d96edce16b5932c019e60f9a0ba8a133623e7622d6827f8698b818289eff8998 extends Twig_Template
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
        $__internal_cc6a4f0067f97939a10d1fcee68b42b57b2dac1f7d4c8d183e775c5fcc332a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6a4f0067f97939a10d1fcee68b42b57b2dac1f7d4c8d183e775c5fcc332a1b->enter($__internal_cc6a4f0067f97939a10d1fcee68b42b57b2dac1f7d4c8d183e775c5fcc332a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:inscription.html.twig"));

        $__internal_602b99ac51528e442051105f5ff7fef3e8a2654471a7fdfaa7640ab7f86c2cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602b99ac51528e442051105f5ff7fef3e8a2654471a7fdfaa7640ab7f86c2cf8->enter($__internal_602b99ac51528e442051105f5ff7fef3e8a2654471a7fdfaa7640ab7f86c2cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:inscription.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\" class=\"fos_user_registration_register\">
    <div>
        <input type=\"submit\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>";
        
        $__internal_cc6a4f0067f97939a10d1fcee68b42b57b2dac1f7d4c8d183e775c5fcc332a1b->leave($__internal_cc6a4f0067f97939a10d1fcee68b42b57b2dac1f7d4c8d183e775c5fcc332a1b_prof);

        
        $__internal_602b99ac51528e442051105f5ff7fef3e8a2654471a7fdfaa7640ab7f86c2cf8->leave($__internal_602b99ac51528e442051105f5ff7fef3e8a2654471a7fdfaa7640ab7f86c2cf8_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\" class=\"fos_user_registration_register\">
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>", "UserBundle:Default:inscription.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/src/UserBundle/Resources/views/Default/inscription.html.twig");
    }
}
