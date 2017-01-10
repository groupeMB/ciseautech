<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_ca713a5d8f06c98eb2c6e794cdf6639b628dc49f0bbcdf1f184628aa53eeb3c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4559813380906d5ee95bd223765a8e69826f4f95b131895cd81048ead5d9ec1 = $this->env->getExtension("native_profiler");
        $__internal_d4559813380906d5ee95bd223765a8e69826f4f95b131895cd81048ead5d9ec1->enter($__internal_d4559813380906d5ee95bd223765a8e69826f4f95b131895cd81048ead5d9ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4559813380906d5ee95bd223765a8e69826f4f95b131895cd81048ead5d9ec1->leave($__internal_d4559813380906d5ee95bd223765a8e69826f4f95b131895cd81048ead5d9ec1_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_63eec8bec744ce13a3bd6e9f86236a621c4ba1c16d64a55c4fb212e795150b61 = $this->env->getExtension("native_profiler");
        $__internal_63eec8bec744ce13a3bd6e9f86236a621c4ba1c16d64a55c4fb212e795150b61->enter($__internal_63eec8bec744ce13a3bd6e9f86236a621c4ba1c16d64a55c4fb212e795150b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_63eec8bec744ce13a3bd6e9f86236a621c4ba1c16d64a55c4fb212e795150b61->leave($__internal_63eec8bec744ce13a3bd6e9f86236a621c4ba1c16d64a55c4fb212e795150b61_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_74e7cae236fab8a6a6786aa931c915cc7bb87abd61004caa489d994a29bb9e02 = $this->env->getExtension("native_profiler");
        $__internal_74e7cae236fab8a6a6786aa931c915cc7bb87abd61004caa489d994a29bb9e02->enter($__internal_74e7cae236fab8a6a6786aa931c915cc7bb87abd61004caa489d994a29bb9e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74e7cae236fab8a6a6786aa931c915cc7bb87abd61004caa489d994a29bb9e02->leave($__internal_74e7cae236fab8a6a6786aa931c915cc7bb87abd61004caa489d994a29bb9e02_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_368ce7296d07b1f5f87723ade4301c1e05c765f96a0779035d1dd8ea64a04147 = $this->env->getExtension("native_profiler");
        $__internal_368ce7296d07b1f5f87723ade4301c1e05c765f96a0779035d1dd8ea64a04147->enter($__internal_368ce7296d07b1f5f87723ade4301c1e05c765f96a0779035d1dd8ea64a04147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_368ce7296d07b1f5f87723ade4301c1e05c765f96a0779035d1dd8ea64a04147->leave($__internal_368ce7296d07b1f5f87723ade4301c1e05c765f96a0779035d1dd8ea64a04147_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6839af2a4e4a628eb8ef9974277bba17019e35a956064e8e99cda39019c3a0b0 = $this->env->getExtension("native_profiler");
        $__internal_6839af2a4e4a628eb8ef9974277bba17019e35a956064e8e99cda39019c3a0b0->enter($__internal_6839af2a4e4a628eb8ef9974277bba17019e35a956064e8e99cda39019c3a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_6839af2a4e4a628eb8ef9974277bba17019e35a956064e8e99cda39019c3a0b0->leave($__internal_6839af2a4e4a628eb8ef9974277bba17019e35a956064e8e99cda39019c3a0b0_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_2257b9b9ac8b4ab96d066bf165862728629ee12fddd209d4d3fb2f5ced8a3607 = $this->env->getExtension("native_profiler");
        $__internal_2257b9b9ac8b4ab96d066bf165862728629ee12fddd209d4d3fb2f5ced8a3607->enter($__internal_2257b9b9ac8b4ab96d066bf165862728629ee12fddd209d4d3fb2f5ced8a3607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_2257b9b9ac8b4ab96d066bf165862728629ee12fddd209d4d3fb2f5ced8a3607->leave($__internal_2257b9b9ac8b4ab96d066bf165862728629ee12fddd209d4d3fb2f5ced8a3607_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
";
    }
}
