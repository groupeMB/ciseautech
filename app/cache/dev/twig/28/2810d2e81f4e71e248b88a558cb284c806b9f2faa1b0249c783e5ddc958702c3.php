<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_25a2b166c47dda30d11db39a7111a4a08b8278b0a0a068c126bf158f89e04fa4 extends Twig_Template
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
        $__internal_de3442bba2cea6e4aab8247d4fe4732fc436c57b93ccff62e50c356a55ce0824 = $this->env->getExtension("native_profiler");
        $__internal_de3442bba2cea6e4aab8247d4fe4732fc436c57b93ccff62e50c356a55ce0824->enter($__internal_de3442bba2cea6e4aab8247d4fe4732fc436c57b93ccff62e50c356a55ce0824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_de3442bba2cea6e4aab8247d4fe4732fc436c57b93ccff62e50c356a55ce0824->leave($__internal_de3442bba2cea6e4aab8247d4fe4732fc436c57b93ccff62e50c356a55ce0824_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
