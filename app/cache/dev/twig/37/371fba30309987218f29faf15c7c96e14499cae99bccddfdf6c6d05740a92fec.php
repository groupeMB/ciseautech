<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_fc2d1ca28084280993efe4ef6213818fd0a592cfa989efb1f0579a1be8843ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_69e500a85531d61563ae35d80c0686bef8e369bd49d621f61aa42164cb57a123 = $this->env->getExtension("native_profiler");
        $__internal_69e500a85531d61563ae35d80c0686bef8e369bd49d621f61aa42164cb57a123->enter($__internal_69e500a85531d61563ae35d80c0686bef8e369bd49d621f61aa42164cb57a123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e500a85531d61563ae35d80c0686bef8e369bd49d621f61aa42164cb57a123->leave($__internal_69e500a85531d61563ae35d80c0686bef8e369bd49d621f61aa42164cb57a123_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8d6b86f3926634ad8820da8e79767f66ad310f2401959ae5d86561411541e39 = $this->env->getExtension("native_profiler");
        $__internal_b8d6b86f3926634ad8820da8e79767f66ad310f2401959ae5d86561411541e39->enter($__internal_b8d6b86f3926634ad8820da8e79767f66ad310f2401959ae5d86561411541e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b8d6b86f3926634ad8820da8e79767f66ad310f2401959ae5d86561411541e39->leave($__internal_b8d6b86f3926634ad8820da8e79767f66ad310f2401959ae5d86561411541e39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
