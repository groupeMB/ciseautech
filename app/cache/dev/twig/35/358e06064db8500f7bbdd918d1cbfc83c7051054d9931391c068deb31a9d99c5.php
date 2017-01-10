<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6b519d9fe3697c3dcbc52fbbd96ea4522116533cb8075a0ec6e3f030de3da91c extends Twig_Template
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
        $__internal_42fc0ca4e62840f7138f9afaa6dde160b5e78bffc9589878ad323ee502329d03 = $this->env->getExtension("native_profiler");
        $__internal_42fc0ca4e62840f7138f9afaa6dde160b5e78bffc9589878ad323ee502329d03->enter($__internal_42fc0ca4e62840f7138f9afaa6dde160b5e78bffc9589878ad323ee502329d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_42fc0ca4e62840f7138f9afaa6dde160b5e78bffc9589878ad323ee502329d03->leave($__internal_42fc0ca4e62840f7138f9afaa6dde160b5e78bffc9589878ad323ee502329d03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
