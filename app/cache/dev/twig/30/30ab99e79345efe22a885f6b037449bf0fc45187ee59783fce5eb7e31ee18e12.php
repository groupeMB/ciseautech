<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_31fea655e7ede3e350c24afdcf2809fb193fa22e8635b5b34d992e4131228fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c8b34d2ef16a5746ece8ba55ccc7e6b06e042c61e3680509565d6d24c2472b7 = $this->env->getExtension("native_profiler");
        $__internal_1c8b34d2ef16a5746ece8ba55ccc7e6b06e042c61e3680509565d6d24c2472b7->enter($__internal_1c8b34d2ef16a5746ece8ba55ccc7e6b06e042c61e3680509565d6d24c2472b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c8b34d2ef16a5746ece8ba55ccc7e6b06e042c61e3680509565d6d24c2472b7->leave($__internal_1c8b34d2ef16a5746ece8ba55ccc7e6b06e042c61e3680509565d6d24c2472b7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
";
    }
}
