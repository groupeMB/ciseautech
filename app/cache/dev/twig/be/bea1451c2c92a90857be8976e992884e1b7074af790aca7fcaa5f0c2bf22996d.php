<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_8f1d44f2cfa0190bd1f9a98b06f74786a6c9c7871f0b93dfcc3cb3b2f5c9f59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6172b264fd8d10adce28d9d511e8960f254880bea68e9903db950a3cb1d8af41 = $this->env->getExtension("native_profiler");
        $__internal_6172b264fd8d10adce28d9d511e8960f254880bea68e9903db950a3cb1d8af41->enter($__internal_6172b264fd8d10adce28d9d511e8960f254880bea68e9903db950a3cb1d8af41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6172b264fd8d10adce28d9d511e8960f254880bea68e9903db950a3cb1d8af41->leave($__internal_6172b264fd8d10adce28d9d511e8960f254880bea68e9903db950a3cb1d8af41_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_661fd2ce6be3f57e10aefdc2fd93d00b90127faab42c10b087b4e15ac766dfc5 = $this->env->getExtension("native_profiler");
        $__internal_661fd2ce6be3f57e10aefdc2fd93d00b90127faab42c10b087b4e15ac766dfc5->enter($__internal_661fd2ce6be3f57e10aefdc2fd93d00b90127faab42c10b087b4e15ac766dfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_661fd2ce6be3f57e10aefdc2fd93d00b90127faab42c10b087b4e15ac766dfc5->leave($__internal_661fd2ce6be3f57e10aefdc2fd93d00b90127faab42c10b087b4e15ac766dfc5_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_5da7660f7e5b0217c15898653e9317a36ad8bae65dbc6c3f160d6ce9a5284d9a = $this->env->getExtension("native_profiler");
        $__internal_5da7660f7e5b0217c15898653e9317a36ad8bae65dbc6c3f160d6ce9a5284d9a->enter($__internal_5da7660f7e5b0217c15898653e9317a36ad8bae65dbc6c3f160d6ce9a5284d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_5da7660f7e5b0217c15898653e9317a36ad8bae65dbc6c3f160d6ce9a5284d9a->leave($__internal_5da7660f7e5b0217c15898653e9317a36ad8bae65dbc6c3f160d6ce9a5284d9a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ admin.trans(name) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
";
    }
}
