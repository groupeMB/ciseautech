<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_c2f8a20c5317cfb1077d6c3d503da1f283173a7e7e4488a6b46e7aa5b34c0f2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_07e597b5ae17d35d337dcb49042959df8edbb0b15c3d3d5f2115f31a2c81998f = $this->env->getExtension("native_profiler");
        $__internal_07e597b5ae17d35d337dcb49042959df8edbb0b15c3d3d5f2115f31a2c81998f->enter($__internal_07e597b5ae17d35d337dcb49042959df8edbb0b15c3d3d5f2115f31a2c81998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e597b5ae17d35d337dcb49042959df8edbb0b15c3d3d5f2115f31a2c81998f->leave($__internal_07e597b5ae17d35d337dcb49042959df8edbb0b15c3d3d5f2115f31a2c81998f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1089ecacc0dc2ff996af1f814147176a870b3031f4b026399c36b55b87e26a0f = $this->env->getExtension("native_profiler");
        $__internal_1089ecacc0dc2ff996af1f814147176a870b3031f4b026399c36b55b87e26a0f->enter($__internal_1089ecacc0dc2ff996af1f814147176a870b3031f4b026399c36b55b87e26a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_1089ecacc0dc2ff996af1f814147176a870b3031f4b026399c36b55b87e26a0f->leave($__internal_1089ecacc0dc2ff996af1f814147176a870b3031f4b026399c36b55b87e26a0f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
