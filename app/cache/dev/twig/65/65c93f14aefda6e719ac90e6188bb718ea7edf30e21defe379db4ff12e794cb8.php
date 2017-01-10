<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a9db736e16b8c8d3306f189a215a1d86d2b84684f4db9a936c7638c2642e1af9 extends Twig_Template
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
        $__internal_17a0d7a5317a5db8e58087dce41d838464dccf335dc96fe2cec5c00fa6260d5c = $this->env->getExtension("native_profiler");
        $__internal_17a0d7a5317a5db8e58087dce41d838464dccf335dc96fe2cec5c00fa6260d5c->enter($__internal_17a0d7a5317a5db8e58087dce41d838464dccf335dc96fe2cec5c00fa6260d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_17a0d7a5317a5db8e58087dce41d838464dccf335dc96fe2cec5c00fa6260d5c->leave($__internal_17a0d7a5317a5db8e58087dce41d838464dccf335dc96fe2cec5c00fa6260d5c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
