<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_0077913604edda825b026365a3dd0cd1d9b06d5fcf811ff1c265d35504c49bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a896d3da40e9cab77f407d4f0cc17e35db4ef0c43d9cee3e67fa2f27904393c = $this->env->getExtension("native_profiler");
        $__internal_2a896d3da40e9cab77f407d4f0cc17e35db4ef0c43d9cee3e67fa2f27904393c->enter($__internal_2a896d3da40e9cab77f407d4f0cc17e35db4ef0c43d9cee3e67fa2f27904393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a896d3da40e9cab77f407d4f0cc17e35db4ef0c43d9cee3e67fa2f27904393c->leave($__internal_2a896d3da40e9cab77f407d4f0cc17e35db4ef0c43d9cee3e67fa2f27904393c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_919e904161ef6c006a15c397abac1f2d1bc67b213a205679cf652e29f918c4f8 = $this->env->getExtension("native_profiler");
        $__internal_919e904161ef6c006a15c397abac1f2d1bc67b213a205679cf652e29f918c4f8->enter($__internal_919e904161ef6c006a15c397abac1f2d1bc67b213a205679cf652e29f918c4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_919e904161ef6c006a15c397abac1f2d1bc67b213a205679cf652e29f918c4f8->leave($__internal_919e904161ef6c006a15c397abac1f2d1bc67b213a205679cf652e29f918c4f8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
";
    }
}
