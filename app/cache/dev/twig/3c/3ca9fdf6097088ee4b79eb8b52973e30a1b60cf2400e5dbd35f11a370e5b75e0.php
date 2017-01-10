<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6ec566e6d10bce5f439a6e0cf30c826a57deb7abb141deb25f04bfb548b7fb2a extends Twig_Template
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
        $__internal_3113b99f3c51217cfeb78c7ce3891084e43c185c768192c929175a7f48841f2d = $this->env->getExtension("native_profiler");
        $__internal_3113b99f3c51217cfeb78c7ce3891084e43c185c768192c929175a7f48841f2d->enter($__internal_3113b99f3c51217cfeb78c7ce3891084e43c185c768192c929175a7f48841f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3113b99f3c51217cfeb78c7ce3891084e43c185c768192c929175a7f48841f2d->leave($__internal_3113b99f3c51217cfeb78c7ce3891084e43c185c768192c929175a7f48841f2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
