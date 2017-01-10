<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_378d69655542c8b9f3785c8debc58faf16d7842e4547555e0286c2b7413b54c7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_758e163b09dcf89625c03c862a77405de90577b40cf6c5840d8554fc5897a7c8 = $this->env->getExtension("native_profiler");
        $__internal_758e163b09dcf89625c03c862a77405de90577b40cf6c5840d8554fc5897a7c8->enter($__internal_758e163b09dcf89625c03c862a77405de90577b40cf6c5840d8554fc5897a7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758e163b09dcf89625c03c862a77405de90577b40cf6c5840d8554fc5897a7c8->leave($__internal_758e163b09dcf89625c03c862a77405de90577b40cf6c5840d8554fc5897a7c8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_84312949cb1dca31962a2a0bc018ff9d0b7616ef0c9c39a3c9ff0ea7ada6a7b7 = $this->env->getExtension("native_profiler");
        $__internal_84312949cb1dca31962a2a0bc018ff9d0b7616ef0c9c39a3c9ff0ea7ada6a7b7->enter($__internal_84312949cb1dca31962a2a0bc018ff9d0b7616ef0c9c39a3c9ff0ea7ada6a7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_84312949cb1dca31962a2a0bc018ff9d0b7616ef0c9c39a3c9ff0ea7ada6a7b7->leave($__internal_84312949cb1dca31962a2a0bc018ff9d0b7616ef0c9c39a3c9ff0ea7ada6a7b7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% for key, val in value %}
        [{{ key }} => {{ val }}]
    {% endfor %}
{% endblock %}
";
    }
}
