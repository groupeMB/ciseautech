<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_99d8727d517c4ebc7b722fc66745e1053d68a0a63ccc66cdd979afe2b0d9f0d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4481d0d8885a08793733f2fc47f8164318895c668c75439c23e7ba4df1650a7 = $this->env->getExtension("native_profiler");
        $__internal_b4481d0d8885a08793733f2fc47f8164318895c668c75439c23e7ba4df1650a7->enter($__internal_b4481d0d8885a08793733f2fc47f8164318895c668c75439c23e7ba4df1650a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4481d0d8885a08793733f2fc47f8164318895c668c75439c23e7ba4df1650a7->leave($__internal_b4481d0d8885a08793733f2fc47f8164318895c668c75439c23e7ba4df1650a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
