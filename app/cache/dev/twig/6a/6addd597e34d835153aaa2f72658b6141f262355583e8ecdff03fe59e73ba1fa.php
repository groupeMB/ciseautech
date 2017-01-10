<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_0cb067f4271225262bdb32fa3746506f0b5d7c33d3cdfe56f021f5688175f1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1c749d4f3da362b001c7afca9a027fa8d735b6b7d979acba832d4d49802715a = $this->env->getExtension("native_profiler");
        $__internal_e1c749d4f3da362b001c7afca9a027fa8d735b6b7d979acba832d4d49802715a->enter($__internal_e1c749d4f3da362b001c7afca9a027fa8d735b6b7d979acba832d4d49802715a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c749d4f3da362b001c7afca9a027fa8d735b6b7d979acba832d4d49802715a->leave($__internal_e1c749d4f3da362b001c7afca9a027fa8d735b6b7d979acba832d4d49802715a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
