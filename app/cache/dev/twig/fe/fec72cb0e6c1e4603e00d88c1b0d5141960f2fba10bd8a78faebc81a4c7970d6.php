<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_842adc5ed032f956e41a34482c4d151b9fd6138317106eb271f6e87bbf807a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bac4a917c1f343402006f11fbb9cf09e13b425b2c66c9c8d7100fdf30463c61a = $this->env->getExtension("native_profiler");
        $__internal_bac4a917c1f343402006f11fbb9cf09e13b425b2c66c9c8d7100fdf30463c61a->enter($__internal_bac4a917c1f343402006f11fbb9cf09e13b425b2c66c9c8d7100fdf30463c61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac4a917c1f343402006f11fbb9cf09e13b425b2c66c9c8d7100fdf30463c61a->leave($__internal_bac4a917c1f343402006f11fbb9cf09e13b425b2c66c9c8d7100fdf30463c61a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_70cb7dfe1d1b0221f65d2e9e426c7e8e39446b5116bf1431a58c732678574748 = $this->env->getExtension("native_profiler");
        $__internal_70cb7dfe1d1b0221f65d2e9e426c7e8e39446b5116bf1431a58c732678574748->enter($__internal_70cb7dfe1d1b0221f65d2e9e426c7e8e39446b5116bf1431a58c732678574748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_70cb7dfe1d1b0221f65d2e9e426c7e8e39446b5116bf1431a58c732678574748->leave($__internal_70cb7dfe1d1b0221f65d2e9e426c7e8e39446b5116bf1431a58c732678574748_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e8a4ca110b8b1cc09af7565630f5b8433399a4af851588b08b5f17a0ec6a1c22 = $this->env->getExtension("native_profiler");
        $__internal_e8a4ca110b8b1cc09af7565630f5b8433399a4af851588b08b5f17a0ec6a1c22->enter($__internal_e8a4ca110b8b1cc09af7565630f5b8433399a4af851588b08b5f17a0ec6a1c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_e8a4ca110b8b1cc09af7565630f5b8433399a4af851588b08b5f17a0ec6a1c22->leave($__internal_e8a4ca110b8b1cc09af7565630f5b8433399a4af851588b08b5f17a0ec6a1c22_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_98474faa4b3c7b5350e88cec63955a08a3aa26c50df7a55a4271410782329a4a = $this->env->getExtension("native_profiler");
        $__internal_98474faa4b3c7b5350e88cec63955a08a3aa26c50df7a55a4271410782329a4a->enter($__internal_98474faa4b3c7b5350e88cec63955a08a3aa26c50df7a55a4271410782329a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_98474faa4b3c7b5350e88cec63955a08a3aa26c50df7a55a4271410782329a4a->leave($__internal_98474faa4b3c7b5350e88cec63955a08a3aa26c50df7a55a4271410782329a4a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
";
    }
}
