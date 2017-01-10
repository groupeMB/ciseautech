<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_5d31a557429268d1ec4bb94a4a051efc7607838d6f38f918eff46b1b97ab5504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_ca1aba889a982430351a28e1dac212d6df6e7d687232f82d9410bb89e77579fa = $this->env->getExtension("native_profiler");
        $__internal_ca1aba889a982430351a28e1dac212d6df6e7d687232f82d9410bb89e77579fa->enter($__internal_ca1aba889a982430351a28e1dac212d6df6e7d687232f82d9410bb89e77579fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca1aba889a982430351a28e1dac212d6df6e7d687232f82d9410bb89e77579fa->leave($__internal_ca1aba889a982430351a28e1dac212d6df6e7d687232f82d9410bb89e77579fa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9b8a87cd2c2d7e160f974bb67f7a546f7d63edb230b95ecb9d99f78d7e3d0f6e = $this->env->getExtension("native_profiler");
        $__internal_9b8a87cd2c2d7e160f974bb67f7a546f7d63edb230b95ecb9d99f78d7e3d0f6e->enter($__internal_9b8a87cd2c2d7e160f974bb67f7a546f7d63edb230b95ecb9d99f78d7e3d0f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_9b8a87cd2c2d7e160f974bb67f7a546f7d63edb230b95ecb9d99f78d7e3d0f6e->leave($__internal_9b8a87cd2c2d7e160f974bb67f7a546f7d63edb230b95ecb9d99f78d7e3d0f6e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
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
