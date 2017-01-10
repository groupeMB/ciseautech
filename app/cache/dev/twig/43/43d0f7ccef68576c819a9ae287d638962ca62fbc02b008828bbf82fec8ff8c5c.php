<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_14f39bc91e2f93742eaa48e56d6f25ea230ea293fbf5542f0abb7ce03af60c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
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
        $__internal_12816f40e1f28b5c2f5cf64e53ce2a9e4359a5c656db7d8efaff823d6f02b6c4 = $this->env->getExtension("native_profiler");
        $__internal_12816f40e1f28b5c2f5cf64e53ce2a9e4359a5c656db7d8efaff823d6f02b6c4->enter($__internal_12816f40e1f28b5c2f5cf64e53ce2a9e4359a5c656db7d8efaff823d6f02b6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12816f40e1f28b5c2f5cf64e53ce2a9e4359a5c656db7d8efaff823d6f02b6c4->leave($__internal_12816f40e1f28b5c2f5cf64e53ce2a9e4359a5c656db7d8efaff823d6f02b6c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_871eb36b5c1b59064d3533b95875935531847b4563cdebea28bda303c1ccbbbc = $this->env->getExtension("native_profiler");
        $__internal_871eb36b5c1b59064d3533b95875935531847b4563cdebea28bda303c1ccbbbc->enter($__internal_871eb36b5c1b59064d3533b95875935531847b4563cdebea28bda303c1ccbbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_871eb36b5c1b59064d3533b95875935531847b4563cdebea28bda303c1ccbbbc->leave($__internal_871eb36b5c1b59064d3533b95875935531847b4563cdebea28bda303c1ccbbbc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
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
