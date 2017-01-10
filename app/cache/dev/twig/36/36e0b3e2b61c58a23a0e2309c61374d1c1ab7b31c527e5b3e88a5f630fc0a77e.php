<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_8f1d3f9e5b3c2672d7387e4a24f6658f54c662c37c5cab8a7132208e4aa1679c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72e48655b776343a875c9180fe3d58ca6dcfe7f744ffde9bdc90d91d1d7d30f6 = $this->env->getExtension("native_profiler");
        $__internal_72e48655b776343a875c9180fe3d58ca6dcfe7f744ffde9bdc90d91d1d7d30f6->enter($__internal_72e48655b776343a875c9180fe3d58ca6dcfe7f744ffde9bdc90d91d1d7d30f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e48655b776343a875c9180fe3d58ca6dcfe7f744ffde9bdc90d91d1d7d30f6->leave($__internal_72e48655b776343a875c9180fe3d58ca6dcfe7f744ffde9bdc90d91d1d7d30f6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
";
    }
}
