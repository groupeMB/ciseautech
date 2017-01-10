<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_348a5d5fd9a4ad1eba6464941075f1c584670ca6ba9d60f1174fcedf1cc8bf47 extends Twig_Template
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
        $__internal_02b509e37db87f7322127491f1da58454909797f40ffb45b64f4925bd4d2ac41 = $this->env->getExtension("native_profiler");
        $__internal_02b509e37db87f7322127491f1da58454909797f40ffb45b64f4925bd4d2ac41->enter($__internal_02b509e37db87f7322127491f1da58454909797f40ffb45b64f4925bd4d2ac41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_02b509e37db87f7322127491f1da58454909797f40ffb45b64f4925bd4d2ac41->leave($__internal_02b509e37db87f7322127491f1da58454909797f40ffb45b64f4925bd4d2ac41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
