<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_83e53af2df71ac5a58c1efe95fdcd37c09926158b6c44a2aaac66e9dc03f63f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_795ffbc629d8f8518c34562a4caded8d8856cdd4cec1888c63122887dd9b481a = $this->env->getExtension("native_profiler");
        $__internal_795ffbc629d8f8518c34562a4caded8d8856cdd4cec1888c63122887dd9b481a->enter($__internal_795ffbc629d8f8518c34562a4caded8d8856cdd4cec1888c63122887dd9b481a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795ffbc629d8f8518c34562a4caded8d8856cdd4cec1888c63122887dd9b481a->leave($__internal_795ffbc629d8f8518c34562a4caded8d8856cdd4cec1888c63122887dd9b481a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
";
    }
}
