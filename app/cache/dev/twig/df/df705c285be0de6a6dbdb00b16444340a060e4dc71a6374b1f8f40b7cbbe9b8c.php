<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_acc328f41da8e63fa59028f6ea28f0a1513fb2c37fb4cb20bec3c16e75bb706e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_627035cafe76d7e189e3e88df86f47db523480442f5ef6e7570e1ed0fcba12aa = $this->env->getExtension("native_profiler");
        $__internal_627035cafe76d7e189e3e88df86f47db523480442f5ef6e7570e1ed0fcba12aa->enter($__internal_627035cafe76d7e189e3e88df86f47db523480442f5ef6e7570e1ed0fcba12aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_627035cafe76d7e189e3e88df86f47db523480442f5ef6e7570e1ed0fcba12aa->leave($__internal_627035cafe76d7e189e3e88df86f47db523480442f5ef6e7570e1ed0fcba12aa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e3079902b0e6512b1fb1cb03724e67cd06f6e819870bbad4259d72a58bb10a48 = $this->env->getExtension("native_profiler");
        $__internal_e3079902b0e6512b1fb1cb03724e67cd06f6e819870bbad4259d72a58bb10a48->enter($__internal_e3079902b0e6512b1fb1cb03724e67cd06f6e819870bbad4259d72a58bb10a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_e3079902b0e6512b1fb1cb03724e67cd06f6e819870bbad4259d72a58bb10a48->leave($__internal_e3079902b0e6512b1fb1cb03724e67cd06f6e819870bbad4259d72a58bb10a48_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

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
