<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_b348923a30f59c48863001f9ebdbffb10c46fce5c23c8f9741eb32cf6303d99e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9eded874d088818a482fc4835f7d03f0932902327ea783e95b19060f251ca40 = $this->env->getExtension("native_profiler");
        $__internal_e9eded874d088818a482fc4835f7d03f0932902327ea783e95b19060f251ca40->enter($__internal_e9eded874d088818a482fc4835f7d03f0932902327ea783e95b19060f251ca40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9eded874d088818a482fc4835f7d03f0932902327ea783e95b19060f251ca40->leave($__internal_e9eded874d088818a482fc4835f7d03f0932902327ea783e95b19060f251ca40_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
";
    }
}
