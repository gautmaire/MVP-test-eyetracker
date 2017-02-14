<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7b1ebba886176bde47272ae108b07ee8c8c3b08ae5627be947d7196dba5d4b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14bfa26e2606863038d803f4973f6766efa1a2e141dbb3bd78f9c8f93e206f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14bfa26e2606863038d803f4973f6766efa1a2e141dbb3bd78f9c8f93e206f1b->enter($__internal_14bfa26e2606863038d803f4973f6766efa1a2e141dbb3bd78f9c8f93e206f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_26ed063341171519fffbc28fd6d41c20fc97846af74a3294ef9fdd04adf2bfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ed063341171519fffbc28fd6d41c20fc97846af74a3294ef9fdd04adf2bfd6->enter($__internal_26ed063341171519fffbc28fd6d41c20fc97846af74a3294ef9fdd04adf2bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14bfa26e2606863038d803f4973f6766efa1a2e141dbb3bd78f9c8f93e206f1b->leave($__internal_14bfa26e2606863038d803f4973f6766efa1a2e141dbb3bd78f9c8f93e206f1b_prof);

        
        $__internal_26ed063341171519fffbc28fd6d41c20fc97846af74a3294ef9fdd04adf2bfd6->leave($__internal_26ed063341171519fffbc28fd6d41c20fc97846af74a3294ef9fdd04adf2bfd6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfdea045b80721b3c8dc94e998aa1b4e3af8f2b28d3ed8c040e622c60903079c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdea045b80721b3c8dc94e998aa1b4e3af8f2b28d3ed8c040e622c60903079c->enter($__internal_dfdea045b80721b3c8dc94e998aa1b4e3af8f2b28d3ed8c040e622c60903079c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1af0bbd8a16503c9ff2c7d0d05b187dcefa094beefc07569819c361ecbcae795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af0bbd8a16503c9ff2c7d0d05b187dcefa094beefc07569819c361ecbcae795->enter($__internal_1af0bbd8a16503c9ff2c7d0d05b187dcefa094beefc07569819c361ecbcae795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1af0bbd8a16503c9ff2c7d0d05b187dcefa094beefc07569819c361ecbcae795->leave($__internal_1af0bbd8a16503c9ff2c7d0d05b187dcefa094beefc07569819c361ecbcae795_prof);

        
        $__internal_dfdea045b80721b3c8dc94e998aa1b4e3af8f2b28d3ed8c040e622c60903079c->leave($__internal_dfdea045b80721b3c8dc94e998aa1b4e3af8f2b28d3ed8c040e622c60903079c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
