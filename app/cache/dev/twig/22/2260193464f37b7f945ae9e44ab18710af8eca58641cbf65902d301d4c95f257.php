<?php

/* CoutureGestionBundle:Security:presentation.html.twig */
class __TwigTemplate_36aca28f7f3af3b3a74134bebd9caaae621616518ed10a21a500e89926794cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "CoutureGestionBundle:Security:presentation.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoutureGestionBundle::template1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e32f889ff005a7e0976be4006ec5a90d7ca0e12107eccaf320cd60324872f8e = $this->env->getExtension("native_profiler");
        $__internal_9e32f889ff005a7e0976be4006ec5a90d7ca0e12107eccaf320cd60324872f8e->enter($__internal_9e32f889ff005a7e0976be4006ec5a90d7ca0e12107eccaf320cd60324872f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Security:presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e32f889ff005a7e0976be4006ec5a90d7ca0e12107eccaf320cd60324872f8e->leave($__internal_9e32f889ff005a7e0976be4006ec5a90d7ca0e12107eccaf320cd60324872f8e_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Security:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle::template1.html.twig\" %}";
    }
}
