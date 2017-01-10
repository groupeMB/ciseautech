<?php

/* @CoutureGestion/Security/presentation.html.twig */
class __TwigTemplate_871fc6774952898a05b841fcc1320b331459c07aa6bac5c7165fc63b1b38dce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "@CoutureGestion/Security/presentation.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoutureGestionBundle::template1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e10fe93dcd48d7d9fc064b97ff7449f0529e387a6abc4311a564cc86279bb58 = $this->env->getExtension("native_profiler");
        $__internal_6e10fe93dcd48d7d9fc064b97ff7449f0529e387a6abc4311a564cc86279bb58->enter($__internal_6e10fe93dcd48d7d9fc064b97ff7449f0529e387a6abc4311a564cc86279bb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Security/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e10fe93dcd48d7d9fc064b97ff7449f0529e387a6abc4311a564cc86279bb58->leave($__internal_6e10fe93dcd48d7d9fc064b97ff7449f0529e387a6abc4311a564cc86279bb58_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Security/presentation.html.twig";
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
