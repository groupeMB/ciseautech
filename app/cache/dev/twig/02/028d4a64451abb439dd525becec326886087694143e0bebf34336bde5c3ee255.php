<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_309f7e1ecf8854336f313adab56026a28144a5f0eb104a951ae2a91e665da237 extends Twig_Template
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
        $__internal_4da206c9dab435766bb0db3da2a8fb3933109a3314db2239e845784a84d1bdf2 = $this->env->getExtension("native_profiler");
        $__internal_4da206c9dab435766bb0db3da2a8fb3933109a3314db2239e845784a84d1bdf2->enter($__internal_4da206c9dab435766bb0db3da2a8fb3933109a3314db2239e845784a84d1bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4da206c9dab435766bb0db3da2a8fb3933109a3314db2239e845784a84d1bdf2->leave($__internal_4da206c9dab435766bb0db3da2a8fb3933109a3314db2239e845784a84d1bdf2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
