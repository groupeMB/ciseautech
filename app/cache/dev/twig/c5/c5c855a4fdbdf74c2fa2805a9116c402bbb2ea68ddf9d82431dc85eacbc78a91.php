<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cad3abad265a5e70f5998f6b6e9dac9e5b2a3ddf546475c138fb7e538d8f6ce6 extends Twig_Template
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
        $__internal_32e1393f41d4663c38aef7883f5c5de295b3214579515611ebf8cacc03afa140 = $this->env->getExtension("native_profiler");
        $__internal_32e1393f41d4663c38aef7883f5c5de295b3214579515611ebf8cacc03afa140->enter($__internal_32e1393f41d4663c38aef7883f5c5de295b3214579515611ebf8cacc03afa140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_32e1393f41d4663c38aef7883f5c5de295b3214579515611ebf8cacc03afa140->leave($__internal_32e1393f41d4663c38aef7883f5c5de295b3214579515611ebf8cacc03afa140_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
