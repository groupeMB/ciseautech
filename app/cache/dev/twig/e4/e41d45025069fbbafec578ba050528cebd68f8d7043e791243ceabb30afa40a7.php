<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ea9856a2b2f17caf5b7ce98a008fa026b90ca570e64a1a27c365c044ba53cda4 extends Twig_Template
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
        $__internal_350247d5366a01b9cf4a5544330494b87c402d563498e521e9522b7690b66c26 = $this->env->getExtension("native_profiler");
        $__internal_350247d5366a01b9cf4a5544330494b87c402d563498e521e9522b7690b66c26->enter($__internal_350247d5366a01b9cf4a5544330494b87c402d563498e521e9522b7690b66c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_350247d5366a01b9cf4a5544330494b87c402d563498e521e9522b7690b66c26->leave($__internal_350247d5366a01b9cf4a5544330494b87c402d563498e521e9522b7690b66c26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
