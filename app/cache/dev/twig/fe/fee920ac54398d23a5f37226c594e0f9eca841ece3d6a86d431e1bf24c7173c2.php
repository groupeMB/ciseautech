<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_38b02318b5c4b043dbf49f042a8db1bf611895aa006d4661d7a435c795fa4d89 extends Twig_Template
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
        $__internal_dcba15e8488b6a1b507b622717d55dd4314967cce040162664effc5d34653441 = $this->env->getExtension("native_profiler");
        $__internal_dcba15e8488b6a1b507b622717d55dd4314967cce040162664effc5d34653441->enter($__internal_dcba15e8488b6a1b507b622717d55dd4314967cce040162664effc5d34653441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dcba15e8488b6a1b507b622717d55dd4314967cce040162664effc5d34653441->leave($__internal_dcba15e8488b6a1b507b622717d55dd4314967cce040162664effc5d34653441_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
