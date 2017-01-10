<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_ceae40fea222ad8a4000880a0a7c4bad63a3a5da36b723a22e14617845b2503f extends Twig_Template
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
        $__internal_cca6c45ba80f9edf5334038a69ab308c4413624e4cc7105209873adfb6e27bc2 = $this->env->getExtension("native_profiler");
        $__internal_cca6c45ba80f9edf5334038a69ab308c4413624e4cc7105209873adfb6e27bc2->enter($__internal_cca6c45ba80f9edf5334038a69ab308c4413624e4cc7105209873adfb6e27bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cca6c45ba80f9edf5334038a69ab308c4413624e4cc7105209873adfb6e27bc2->leave($__internal_cca6c45ba80f9edf5334038a69ab308c4413624e4cc7105209873adfb6e27bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
