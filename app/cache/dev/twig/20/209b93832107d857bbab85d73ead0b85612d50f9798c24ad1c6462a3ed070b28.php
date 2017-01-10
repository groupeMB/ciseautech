<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_680f9aa6d8424c17ffba4e551a1d32e00bd265ccb253869ea1b55a76d57b01d5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a6b7242d7b38a14a3e008614091e24b45c85d20445cf54db20c7e786ce7697e = $this->env->getExtension("native_profiler");
        $__internal_7a6b7242d7b38a14a3e008614091e24b45c85d20445cf54db20c7e786ce7697e->enter($__internal_7a6b7242d7b38a14a3e008614091e24b45c85d20445cf54db20c7e786ce7697e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6b7242d7b38a14a3e008614091e24b45c85d20445cf54db20c7e786ce7697e->leave($__internal_7a6b7242d7b38a14a3e008614091e24b45c85d20445cf54db20c7e786ce7697e_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_35268d75f6230cbef7cecc6470ac72ef9b572481d592b5acf0fa4413195f4973 = $this->env->getExtension("native_profiler");
        $__internal_35268d75f6230cbef7cecc6470ac72ef9b572481d592b5acf0fa4413195f4973->enter($__internal_35268d75f6230cbef7cecc6470ac72ef9b572481d592b5acf0fa4413195f4973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_35268d75f6230cbef7cecc6470ac72ef9b572481d592b5acf0fa4413195f4973->leave($__internal_35268d75f6230cbef7cecc6470ac72ef9b572481d592b5acf0fa4413195f4973_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_94a7c4d3e233f0197dc87dbbccf0e3f4472817cae39efc7188fb7d90efb0258b = $this->env->getExtension("native_profiler");
        $__internal_94a7c4d3e233f0197dc87dbbccf0e3f4472817cae39efc7188fb7d90efb0258b->enter($__internal_94a7c4d3e233f0197dc87dbbccf0e3f4472817cae39efc7188fb7d90efb0258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_94a7c4d3e233f0197dc87dbbccf0e3f4472817cae39efc7188fb7d90efb0258b->leave($__internal_94a7c4d3e233f0197dc87dbbccf0e3f4472817cae39efc7188fb7d90efb0258b_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_051b361d80d5828696515ed6ef6e541b70623509c7eb366e90cc28d11a8371fd = $this->env->getExtension("native_profiler");
        $__internal_051b361d80d5828696515ed6ef6e541b70623509c7eb366e90cc28d11a8371fd->enter($__internal_051b361d80d5828696515ed6ef6e541b70623509c7eb366e90cc28d11a8371fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_051b361d80d5828696515ed6ef6e541b70623509c7eb366e90cc28d11a8371fd->leave($__internal_051b361d80d5828696515ed6ef6e541b70623509c7eb366e90cc28d11a8371fd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
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
