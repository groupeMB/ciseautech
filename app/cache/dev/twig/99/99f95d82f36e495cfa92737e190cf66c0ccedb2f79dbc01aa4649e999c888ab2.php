<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d035ea8c1c1dc7789b408b43999920314420d7cf4249d8a1ace451881706081b extends Twig_Template
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
        $__internal_2ff850b4630a2f4d8b9659fe4e3ca0f7409fe3a4b2882dc193c268f01e1fb89b = $this->env->getExtension("native_profiler");
        $__internal_2ff850b4630a2f4d8b9659fe4e3ca0f7409fe3a4b2882dc193c268f01e1fb89b->enter($__internal_2ff850b4630a2f4d8b9659fe4e3ca0f7409fe3a4b2882dc193c268f01e1fb89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2ff850b4630a2f4d8b9659fe4e3ca0f7409fe3a4b2882dc193c268f01e1fb89b->leave($__internal_2ff850b4630a2f4d8b9659fe4e3ca0f7409fe3a4b2882dc193c268f01e1fb89b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
