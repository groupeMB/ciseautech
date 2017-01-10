<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_b74cb1a1b19cd4e9eb596f66abd1175961a6b56bdabafcd3d604ec9b65ea6fe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_2faea7a7a5b0c77a74533491ec0b05caa889d9be86729849cc51276f82edaf00 = $this->env->getExtension("native_profiler");
        $__internal_2faea7a7a5b0c77a74533491ec0b05caa889d9be86729849cc51276f82edaf00->enter($__internal_2faea7a7a5b0c77a74533491ec0b05caa889d9be86729849cc51276f82edaf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2faea7a7a5b0c77a74533491ec0b05caa889d9be86729849cc51276f82edaf00->leave($__internal_2faea7a7a5b0c77a74533491ec0b05caa889d9be86729849cc51276f82edaf00_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_7abc4e2994ac6e67aaf5f5923cfe149dfdb36cbf2521e75208c512b6353fd67e = $this->env->getExtension("native_profiler");
        $__internal_7abc4e2994ac6e67aaf5f5923cfe149dfdb36cbf2521e75208c512b6353fd67e->enter($__internal_7abc4e2994ac6e67aaf5f5923cfe149dfdb36cbf2521e75208c512b6353fd67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_7abc4e2994ac6e67aaf5f5923cfe149dfdb36cbf2521e75208c512b6353fd67e->leave($__internal_7abc4e2994ac6e67aaf5f5923cfe149dfdb36cbf2521e75208c512b6353fd67e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  60 => 21,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
