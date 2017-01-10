<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4b391111ffc65d1d43792411703561791e1edb723f91326bddcd5031a743dbe3 extends Twig_Template
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
        $__internal_3dc2bfe039c0f86feb174286b0f019fb5a3843dbba31e730d8ba0e177b711a0b = $this->env->getExtension("native_profiler");
        $__internal_3dc2bfe039c0f86feb174286b0f019fb5a3843dbba31e730d8ba0e177b711a0b->enter($__internal_3dc2bfe039c0f86feb174286b0f019fb5a3843dbba31e730d8ba0e177b711a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3dc2bfe039c0f86feb174286b0f019fb5a3843dbba31e730d8ba0e177b711a0b->leave($__internal_3dc2bfe039c0f86feb174286b0f019fb5a3843dbba31e730d8ba0e177b711a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
