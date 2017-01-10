<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_cf64b56ae095f64ea49d7b2f14584a6841cf9ad18cf701be386c90a870b3f1eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b90d5d6bd8c72a7db3fcef5de0f47198673e40827a5f13415d07dd374b2af3c8 = $this->env->getExtension("native_profiler");
        $__internal_b90d5d6bd8c72a7db3fcef5de0f47198673e40827a5f13415d07dd374b2af3c8->enter($__internal_b90d5d6bd8c72a7db3fcef5de0f47198673e40827a5f13415d07dd374b2af3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90d5d6bd8c72a7db3fcef5de0f47198673e40827a5f13415d07dd374b2af3c8->leave($__internal_b90d5d6bd8c72a7db3fcef5de0f47198673e40827a5f13415d07dd374b2af3c8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
";
    }
}
