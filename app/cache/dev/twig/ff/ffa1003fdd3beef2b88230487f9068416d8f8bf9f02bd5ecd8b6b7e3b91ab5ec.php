<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_94c75baee6b469a661d36cc9d5c2d757839c9c4aec82dfbeae1502e65354743f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfd5908b5623b02a620f21d3e52ce468ef49ea68f68280f7d63144572e2735b2 = $this->env->getExtension("native_profiler");
        $__internal_cfd5908b5623b02a620f21d3e52ce468ef49ea68f68280f7d63144572e2735b2->enter($__internal_cfd5908b5623b02a620f21d3e52ce468ef49ea68f68280f7d63144572e2735b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfd5908b5623b02a620f21d3e52ce468ef49ea68f68280f7d63144572e2735b2->leave($__internal_cfd5908b5623b02a620f21d3e52ce468ef49ea68f68280f7d63144572e2735b2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}
