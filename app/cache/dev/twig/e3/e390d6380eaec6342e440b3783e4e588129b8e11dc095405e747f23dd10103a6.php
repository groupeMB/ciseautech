<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_1f2932a6a12985a67644ec9656f4b9bb972fc8511f74e239c20e08f40639c040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d95117eb1208d9ea34f20576cb5b2b1c55ddfd91bd57da2614f15eb8a76ea2b = $this->env->getExtension("native_profiler");
        $__internal_0d95117eb1208d9ea34f20576cb5b2b1c55ddfd91bd57da2614f15eb8a76ea2b->enter($__internal_0d95117eb1208d9ea34f20576cb5b2b1c55ddfd91bd57da2614f15eb8a76ea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d95117eb1208d9ea34f20576cb5b2b1c55ddfd91bd57da2614f15eb8a76ea2b->leave($__internal_0d95117eb1208d9ea34f20576cb5b2b1c55ddfd91bd57da2614f15eb8a76ea2b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b392369dd285e593c610e15c1a008d534bd5d3174f575a68fa2fc55e4780a8bb = $this->env->getExtension("native_profiler");
        $__internal_b392369dd285e593c610e15c1a008d534bd5d3174f575a68fa2fc55e4780a8bb->enter($__internal_b392369dd285e593c610e15c1a008d534bd5d3174f575a68fa2fc55e4780a8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_b392369dd285e593c610e15c1a008d534bd5d3174f575a68fa2fc55e4780a8bb->leave($__internal_b392369dd285e593c610e15c1a008d534bd5d3174f575a68fa2fc55e4780a8bb_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_f942671007ae2b4ad4e0f6f91620e426178a1ab7ae8aac47b7c6a5002a41913b = $this->env->getExtension("native_profiler");
        $__internal_f942671007ae2b4ad4e0f6f91620e426178a1ab7ae8aac47b7c6a5002a41913b->enter($__internal_f942671007ae2b4ad4e0f6f91620e426178a1ab7ae8aac47b7c6a5002a41913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_f942671007ae2b4ad4e0f6f91620e426178a1ab7ae8aac47b7c6a5002a41913b->leave($__internal_f942671007ae2b4ad4e0f6f91620e426178a1ab7ae8aac47b7c6a5002a41913b_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_26dca28885c300882bf3e369521958e232ad5ddef95b72d4926f5d051a4b9861 = $this->env->getExtension("native_profiler");
        $__internal_26dca28885c300882bf3e369521958e232ad5ddef95b72d4926f5d051a4b9861->enter($__internal_26dca28885c300882bf3e369521958e232ad5ddef95b72d4926f5d051a4b9861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_26dca28885c300882bf3e369521958e232ad5ddef95b72d4926f5d051a4b9861->leave($__internal_26dca28885c300882bf3e369521958e232ad5ddef95b72d4926f5d051a4b9861_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_09198577cf8c376adecac6f88188891002fe229e82ecd782186f0bcca46d3fdc = $this->env->getExtension("native_profiler");
        $__internal_09198577cf8c376adecac6f88188891002fe229e82ecd782186f0bcca46d3fdc->enter($__internal_09198577cf8c376adecac6f88188891002fe229e82ecd782186f0bcca46d3fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_09198577cf8c376adecac6f88188891002fe229e82ecd782186f0bcca46d3fdc->leave($__internal_09198577cf8c376adecac6f88188891002fe229e82ecd782186f0bcca46d3fdc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
";
    }
}
