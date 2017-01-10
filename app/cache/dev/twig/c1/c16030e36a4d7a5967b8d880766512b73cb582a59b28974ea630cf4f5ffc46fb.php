<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_f8af0852d4ba8d180993c4c1e9e8bc6851d43bf6245fcbe0797ad8c4e2ddb553 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eebf9a9b34ef670028ffd3ddf0ea8b3ffeccb6b96de227cbd966f25887d94e36 = $this->env->getExtension("native_profiler");
        $__internal_eebf9a9b34ef670028ffd3ddf0ea8b3ffeccb6b96de227cbd966f25887d94e36->enter($__internal_eebf9a9b34ef670028ffd3ddf0ea8b3ffeccb6b96de227cbd966f25887d94e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eebf9a9b34ef670028ffd3ddf0ea8b3ffeccb6b96de227cbd966f25887d94e36->leave($__internal_eebf9a9b34ef670028ffd3ddf0ea8b3ffeccb6b96de227cbd966f25887d94e36_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c6f6f80a0e0605e1a88cf69928fbeb0dc81c856e2a20eaee60d390356c2014c9 = $this->env->getExtension("native_profiler");
        $__internal_c6f6f80a0e0605e1a88cf69928fbeb0dc81c856e2a20eaee60d390356c2014c9->enter($__internal_c6f6f80a0e0605e1a88cf69928fbeb0dc81c856e2a20eaee60d390356c2014c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_c6f6f80a0e0605e1a88cf69928fbeb0dc81c856e2a20eaee60d390356c2014c9->leave($__internal_c6f6f80a0e0605e1a88cf69928fbeb0dc81c856e2a20eaee60d390356c2014c9_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_61262281658e5f757b11b4d824ea757a3a32e8559c5266ad5579fa5507606cba = $this->env->getExtension("native_profiler");
        $__internal_61262281658e5f757b11b4d824ea757a3a32e8559c5266ad5579fa5507606cba->enter($__internal_61262281658e5f757b11b4d824ea757a3a32e8559c5266ad5579fa5507606cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_61262281658e5f757b11b4d824ea757a3a32e8559c5266ad5579fa5507606cba->leave($__internal_61262281658e5f757b11b4d824ea757a3a32e8559c5266ad5579fa5507606cba_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_f9865a2caa2c1d34c94f2e53fbfaadf52a1703e935d7fe11fc89283275eb1fe9 = $this->env->getExtension("native_profiler");
        $__internal_f9865a2caa2c1d34c94f2e53fbfaadf52a1703e935d7fe11fc89283275eb1fe9->enter($__internal_f9865a2caa2c1d34c94f2e53fbfaadf52a1703e935d7fe11fc89283275eb1fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_f9865a2caa2c1d34c94f2e53fbfaadf52a1703e935d7fe11fc89283275eb1fe9->leave($__internal_f9865a2caa2c1d34c94f2e53fbfaadf52a1703e935d7fe11fc89283275eb1fe9_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_bac09abbddfd4c18f0f09c4d99676fc4f8d36f47b6725a5c7f22f2bef6ab83a7 = $this->env->getExtension("native_profiler");
        $__internal_bac09abbddfd4c18f0f09c4d99676fc4f8d36f47b6725a5c7f22f2bef6ab83a7->enter($__internal_bac09abbddfd4c18f0f09c4d99676fc4f8d36f47b6725a5c7f22f2bef6ab83a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_bac09abbddfd4c18f0f09c4d99676fc4f8d36f47b6725a5c7f22f2bef6ab83a7->leave($__internal_bac09abbddfd4c18f0f09c4d99676fc4f8d36f47b6725a5c7f22f2bef6ab83a7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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
