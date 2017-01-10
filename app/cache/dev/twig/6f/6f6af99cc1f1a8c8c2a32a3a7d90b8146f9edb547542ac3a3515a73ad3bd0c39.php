<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_eb5c3d9efff1f79bf0024326ce8ff574c5cb3b20cef467969420e414b96d431a extends Twig_Template
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
        $__internal_3a9873770d650d1deede7853a80303f65d42c1484e1f5ac497acb63fe5751271 = $this->env->getExtension("native_profiler");
        $__internal_3a9873770d650d1deede7853a80303f65d42c1484e1f5ac497acb63fe5751271->enter($__internal_3a9873770d650d1deede7853a80303f65d42c1484e1f5ac497acb63fe5751271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3a9873770d650d1deede7853a80303f65d42c1484e1f5ac497acb63fe5751271->leave($__internal_3a9873770d650d1deede7853a80303f65d42c1484e1f5ac497acb63fe5751271_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
