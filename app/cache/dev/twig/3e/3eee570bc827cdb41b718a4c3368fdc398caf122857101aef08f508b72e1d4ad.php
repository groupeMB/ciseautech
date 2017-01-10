<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_26d8e430269163ab4c009665dc2c0fc27c04c2022d1bd8430612ccec480b432b extends Twig_Template
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
        $__internal_30fa60621302b11e3c171c9425942cfe7f8a313fb07838250afe378c50c03b6b = $this->env->getExtension("native_profiler");
        $__internal_30fa60621302b11e3c171c9425942cfe7f8a313fb07838250afe378c50c03b6b->enter($__internal_30fa60621302b11e3c171c9425942cfe7f8a313fb07838250afe378c50c03b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_30fa60621302b11e3c171c9425942cfe7f8a313fb07838250afe378c50c03b6b->leave($__internal_30fa60621302b11e3c171c9425942cfe7f8a313fb07838250afe378c50c03b6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
