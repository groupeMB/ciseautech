<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fed1319ba44836069bde890b231c192a627a3eef7ae12492ede869b9697e1075 extends Twig_Template
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
        $__internal_02667def00e432669f60a621356aea2942d5c63d81e036a7e800613d277e1a17 = $this->env->getExtension("native_profiler");
        $__internal_02667def00e432669f60a621356aea2942d5c63d81e036a7e800613d277e1a17->enter($__internal_02667def00e432669f60a621356aea2942d5c63d81e036a7e800613d277e1a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_02667def00e432669f60a621356aea2942d5c63d81e036a7e800613d277e1a17->leave($__internal_02667def00e432669f60a621356aea2942d5c63d81e036a7e800613d277e1a17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
