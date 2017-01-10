<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_ca47b3d6aaed7ded73bcba0be5e91482e0b9b8ba68f0d16befc7cef5ee319c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
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
        $__internal_f541f87229f754268b0d882f73e7a07550bb14e23ff5d7c480f03a68cf7f34d2 = $this->env->getExtension("native_profiler");
        $__internal_f541f87229f754268b0d882f73e7a07550bb14e23ff5d7c480f03a68cf7f34d2->enter($__internal_f541f87229f754268b0d882f73e7a07550bb14e23ff5d7c480f03a68cf7f34d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f541f87229f754268b0d882f73e7a07550bb14e23ff5d7c480f03a68cf7f34d2->leave($__internal_f541f87229f754268b0d882f73e7a07550bb14e23ff5d7c480f03a68cf7f34d2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5cba4dc6f5eee8ac38679d27ad859c85564e715fa222396c4016f3937f88a1d4 = $this->env->getExtension("native_profiler");
        $__internal_5cba4dc6f5eee8ac38679d27ad859c85564e715fa222396c4016f3937f88a1d4->enter($__internal_5cba4dc6f5eee8ac38679d27ad859c85564e715fa222396c4016f3937f88a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5cba4dc6f5eee8ac38679d27ad859c85564e715fa222396c4016f3937f88a1d4->leave($__internal_5cba4dc6f5eee8ac38679d27ad859c85564e715fa222396c4016f3937f88a1d4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
";
    }
}
