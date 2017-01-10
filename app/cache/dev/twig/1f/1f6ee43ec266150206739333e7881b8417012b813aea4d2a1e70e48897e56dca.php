<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_360491b9d6203956adfc9c689278d779cce8d25ad2f944831a4e758725d2c9dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e15d8a7405cf2f1e4592e75397511ba9eb1b4d04568926dfb60740795d809cfa = $this->env->getExtension("native_profiler");
        $__internal_e15d8a7405cf2f1e4592e75397511ba9eb1b4d04568926dfb60740795d809cfa->enter($__internal_e15d8a7405cf2f1e4592e75397511ba9eb1b4d04568926dfb60740795d809cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e15d8a7405cf2f1e4592e75397511ba9eb1b4d04568926dfb60740795d809cfa->leave($__internal_e15d8a7405cf2f1e4592e75397511ba9eb1b4d04568926dfb60740795d809cfa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_695f1e7a05204a82042f3f17e5adb9e2484c83eb1a15199c0bda599f49bb6ee1 = $this->env->getExtension("native_profiler");
        $__internal_695f1e7a05204a82042f3f17e5adb9e2484c83eb1a15199c0bda599f49bb6ee1->enter($__internal_695f1e7a05204a82042f3f17e5adb9e2484c83eb1a15199c0bda599f49bb6ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_695f1e7a05204a82042f3f17e5adb9e2484c83eb1a15199c0bda599f49bb6ee1->leave($__internal_695f1e7a05204a82042f3f17e5adb9e2484c83eb1a15199c0bda599f49bb6ee1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}
