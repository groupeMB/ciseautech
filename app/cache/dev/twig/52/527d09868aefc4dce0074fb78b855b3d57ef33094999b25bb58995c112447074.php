<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c6d24781e2fad27b94590e92c61b85e10b128e649c16616df9e9a46ca4722e46 extends Twig_Template
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
        $__internal_e88187193f585f760568f197e9e4ab1fcb2c31fb5921ef9cda46023fb078041f = $this->env->getExtension("native_profiler");
        $__internal_e88187193f585f760568f197e9e4ab1fcb2c31fb5921ef9cda46023fb078041f->enter($__internal_e88187193f585f760568f197e9e4ab1fcb2c31fb5921ef9cda46023fb078041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e88187193f585f760568f197e9e4ab1fcb2c31fb5921ef9cda46023fb078041f->leave($__internal_e88187193f585f760568f197e9e4ab1fcb2c31fb5921ef9cda46023fb078041f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
