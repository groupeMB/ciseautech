<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_dcfabcc7d6f90809758f35b19d172d709a7c1c32b03682a61b0d4d1437b02d72 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_987d2b4069b27d8aef08f4bbfd46bf861f40d87fb670186e1207f03c98429ce1 = $this->env->getExtension("native_profiler");
        $__internal_987d2b4069b27d8aef08f4bbfd46bf861f40d87fb670186e1207f03c98429ce1->enter($__internal_987d2b4069b27d8aef08f4bbfd46bf861f40d87fb670186e1207f03c98429ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_987d2b4069b27d8aef08f4bbfd46bf861f40d87fb670186e1207f03c98429ce1->leave($__internal_987d2b4069b27d8aef08f4bbfd46bf861f40d87fb670186e1207f03c98429ce1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6e7f09172c08d9e70629fcf62e4b4858c0f77e82c369b1d40dd18875fdc432bb = $this->env->getExtension("native_profiler");
        $__internal_6e7f09172c08d9e70629fcf62e4b4858c0f77e82c369b1d40dd18875fdc432bb->enter($__internal_6e7f09172c08d9e70629fcf62e4b4858c0f77e82c369b1d40dd18875fdc432bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_6e7f09172c08d9e70629fcf62e4b4858c0f77e82c369b1d40dd18875fdc432bb->leave($__internal_6e7f09172c08d9e70629fcf62e4b4858c0f77e82c369b1d40dd18875fdc432bb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
