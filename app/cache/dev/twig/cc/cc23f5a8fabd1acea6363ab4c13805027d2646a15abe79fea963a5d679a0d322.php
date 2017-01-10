<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a73c9f7f776b90ce41f1e5995a689f9f82445462f2a7ca883fe37bed1879a453 extends Twig_Template
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
        $__internal_7a0e247c3f429be65aa9b2243914299c6c4e3d65aae36fe203c78f30d4207b19 = $this->env->getExtension("native_profiler");
        $__internal_7a0e247c3f429be65aa9b2243914299c6c4e3d65aae36fe203c78f30d4207b19->enter($__internal_7a0e247c3f429be65aa9b2243914299c6c4e3d65aae36fe203c78f30d4207b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7a0e247c3f429be65aa9b2243914299c6c4e3d65aae36fe203c78f30d4207b19->leave($__internal_7a0e247c3f429be65aa9b2243914299c6c4e3d65aae36fe203c78f30d4207b19_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
