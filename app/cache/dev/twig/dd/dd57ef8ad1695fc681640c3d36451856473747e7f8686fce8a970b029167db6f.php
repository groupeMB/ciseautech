<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9982ae13e63173af0dc0b5317794cc0f4913650d7c8467786bec053d6312c88d extends Twig_Template
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
        $__internal_44d2f255a0498f03c19e005d35ff3479313f88f96c747861862b8d3b938b72d1 = $this->env->getExtension("native_profiler");
        $__internal_44d2f255a0498f03c19e005d35ff3479313f88f96c747861862b8d3b938b72d1->enter($__internal_44d2f255a0498f03c19e005d35ff3479313f88f96c747861862b8d3b938b72d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_44d2f255a0498f03c19e005d35ff3479313f88f96c747861862b8d3b938b72d1->leave($__internal_44d2f255a0498f03c19e005d35ff3479313f88f96c747861862b8d3b938b72d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
