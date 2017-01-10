<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_2302abc0a7b33692f95bf9210e98189fa7ab58ddadda671b71e05a72a218fcdc extends Twig_Template
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
        $__internal_71dc311a98bb0d8a8c38e06c5e141eb8c0e4f698d2106386f4d3a33c6db6cc44 = $this->env->getExtension("native_profiler");
        $__internal_71dc311a98bb0d8a8c38e06c5e141eb8c0e4f698d2106386f4d3a33c6db6cc44->enter($__internal_71dc311a98bb0d8a8c38e06c5e141eb8c0e4f698d2106386f4d3a33c6db6cc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_71dc311a98bb0d8a8c38e06c5e141eb8c0e4f698d2106386f4d3a33c6db6cc44->leave($__internal_71dc311a98bb0d8a8c38e06c5e141eb8c0e4f698d2106386f4d3a33c6db6cc44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
