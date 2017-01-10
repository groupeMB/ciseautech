<?php

/* @SonataUser/Admin/Field/impersonating.html.twig */
class __TwigTemplate_593dc1020175453b783394be425e063ed8c3afe5c32d2076a6117fb179a5001d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@SonataUser/Admin/Field/impersonating.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_734b4f24624e3c2af3c21a35174b961f9578821ae3e15122ec233bb9498b1a63 = $this->env->getExtension("native_profiler");
        $__internal_734b4f24624e3c2af3c21a35174b961f9578821ae3e15122ec233bb9498b1a63->enter($__internal_734b4f24624e3c2af3c21a35174b961f9578821ae3e15122ec233bb9498b1a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Field/impersonating.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734b4f24624e3c2af3c21a35174b961f9578821ae3e15122ec233bb9498b1a63->leave($__internal_734b4f24624e3c2af3c21a35174b961f9578821ae3e15122ec233bb9498b1a63_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1ac72f4325fd9a21f52c9fc00960cc7f4d8a58367d2b6cfdcffaa8db29732ce6 = $this->env->getExtension("native_profiler");
        $__internal_1ac72f4325fd9a21f52c9fc00960cc7f4d8a58367d2b6cfdcffaa8db29732ce6->enter($__internal_1ac72f4325fd9a21f52c9fc00960cc7f4d8a58367d2b6cfdcffaa8db29732ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "username", array())))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_user", array(), "SonataUserBundle"), "html", null, true);
            echo "\">
            <i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
    ";
        } else {
            // line 20
            echo "        -
    ";
        }
        
        $__internal_1ac72f4325fd9a21f52c9fc00960cc7f4d8a58367d2b6cfdcffaa8db29732ce6->leave($__internal_1ac72f4325fd9a21f52c9fc00960cc7f4d8a58367d2b6cfdcffaa8db29732ce6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Field/impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    {% if app.user and object.username != app.user.username and sonata_user.impersonating %}
        <a href=\"{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters | merge({'_switch_user': object.username})) }}\" title=\"{{ 'switch_user'|trans({}, 'SonataUserBundle')}}\">
            <i class=\"glyphicon glyphicon-user\"></i><i class=\"glyphicon glyphicon-log-in\"></i>
        </a>
    {% else %}
        -
    {% endif %}
{% endblock %}
";
    }
}
