<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_29aa790de809ee302852c781061b5a6b998ffe1f890cc4c9fab4c54a8e87284d extends Twig_Template
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
        $__internal_60135a3f8f5c2cecd01f04884865941e6ed8b2bbd493b581466b8ad5cfaee53b = $this->env->getExtension("native_profiler");
        $__internal_60135a3f8f5c2cecd01f04884865941e6ed8b2bbd493b581466b8ad5cfaee53b->enter($__internal_60135a3f8f5c2cecd01f04884865941e6ed8b2bbd493b581466b8ad5cfaee53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_60135a3f8f5c2cecd01f04884865941e6ed8b2bbd493b581466b8ad5cfaee53b->leave($__internal_60135a3f8f5c2cecd01f04884865941e6ed8b2bbd493b581466b8ad5cfaee53b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
