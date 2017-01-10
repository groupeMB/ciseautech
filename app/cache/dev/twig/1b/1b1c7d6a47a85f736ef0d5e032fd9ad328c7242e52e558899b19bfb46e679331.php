<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3c80eebc36178251dd9e411a1c5aa78d130d40268625a0e91c996584f7d94a6c extends Twig_Template
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
        $__internal_df746e562d360a3a438010703af144e8c060489244bbd94d48cc09b161c59e25 = $this->env->getExtension("native_profiler");
        $__internal_df746e562d360a3a438010703af144e8c060489244bbd94d48cc09b161c59e25->enter($__internal_df746e562d360a3a438010703af144e8c060489244bbd94d48cc09b161c59e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_df746e562d360a3a438010703af144e8c060489244bbd94d48cc09b161c59e25->leave($__internal_df746e562d360a3a438010703af144e8c060489244bbd94d48cc09b161c59e25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
