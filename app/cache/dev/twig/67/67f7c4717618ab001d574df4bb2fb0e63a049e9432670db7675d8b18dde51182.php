<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_64ccadd5ff5633a2625c9738125d14ea60f5e8e305ae540c7a68d0af38b83448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_122db88593fe30a67a43aac8f55b3d00e624552c70af2375f4e1993c2a80783c = $this->env->getExtension("native_profiler");
        $__internal_122db88593fe30a67a43aac8f55b3d00e624552c70af2375f4e1993c2a80783c->enter($__internal_122db88593fe30a67a43aac8f55b3d00e624552c70af2375f4e1993c2a80783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_122db88593fe30a67a43aac8f55b3d00e624552c70af2375f4e1993c2a80783c->leave($__internal_122db88593fe30a67a43aac8f55b3d00e624552c70af2375f4e1993c2a80783c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f2b4e4a5aaf1e87cb3d1d87ea2af9e99ac7da03912ba9787653e43aa4b37a2d8 = $this->env->getExtension("native_profiler");
        $__internal_f2b4e4a5aaf1e87cb3d1d87ea2af9e99ac7da03912ba9787653e43aa4b37a2d8->enter($__internal_f2b4e4a5aaf1e87cb3d1d87ea2af9e99ac7da03912ba9787653e43aa4b37a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_f2b4e4a5aaf1e87cb3d1d87ea2af9e99ac7da03912ba9787653e43aa4b37a2d8->leave($__internal_f2b4e4a5aaf1e87cb3d1d87ea2af9e99ac7da03912ba9787653e43aa4b37a2d8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
