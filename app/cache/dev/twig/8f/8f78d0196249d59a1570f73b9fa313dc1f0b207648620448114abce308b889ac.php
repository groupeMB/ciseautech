<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_15a74960bd4002b20f1e97fdd93db4a91bc2195f68fc23890b5a33810cfd58ad extends Twig_Template
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
        $__internal_a0dfa99103da5947e213ba4cea0c654141963132efe892f3ff2870717939fbd0 = $this->env->getExtension("native_profiler");
        $__internal_a0dfa99103da5947e213ba4cea0c654141963132efe892f3ff2870717939fbd0->enter($__internal_a0dfa99103da5947e213ba4cea0c654141963132efe892f3ff2870717939fbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a0dfa99103da5947e213ba4cea0c654141963132efe892f3ff2870717939fbd0->leave($__internal_a0dfa99103da5947e213ba4cea0c654141963132efe892f3ff2870717939fbd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
