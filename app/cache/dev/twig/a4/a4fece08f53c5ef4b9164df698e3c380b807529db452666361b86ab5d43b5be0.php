<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ed6c41134df010142ad40a93d17daf6af4d7106940b847333f99210c8c75db40 extends Twig_Template
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
        $__internal_7a62c5dcd3015b2249194bc7641f8fdf61b8a0c4330ba6878f64332d3121c46c = $this->env->getExtension("native_profiler");
        $__internal_7a62c5dcd3015b2249194bc7641f8fdf61b8a0c4330ba6878f64332d3121c46c->enter($__internal_7a62c5dcd3015b2249194bc7641f8fdf61b8a0c4330ba6878f64332d3121c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7a62c5dcd3015b2249194bc7641f8fdf61b8a0c4330ba6878f64332d3121c46c->leave($__internal_7a62c5dcd3015b2249194bc7641f8fdf61b8a0c4330ba6878f64332d3121c46c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
