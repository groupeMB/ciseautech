<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f9c0d27f2186b39e3d78818dba3f4c8a64c9526d9d72f6d8c906421ac49c4ac4 extends Twig_Template
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
        $__internal_f267af99f5a923634d86b0839f913d0fcad74405ace445bdc658b21d84aee3ec = $this->env->getExtension("native_profiler");
        $__internal_f267af99f5a923634d86b0839f913d0fcad74405ace445bdc658b21d84aee3ec->enter($__internal_f267af99f5a923634d86b0839f913d0fcad74405ace445bdc658b21d84aee3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f267af99f5a923634d86b0839f913d0fcad74405ace445bdc658b21d84aee3ec->leave($__internal_f267af99f5a923634d86b0839f913d0fcad74405ace445bdc658b21d84aee3ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
