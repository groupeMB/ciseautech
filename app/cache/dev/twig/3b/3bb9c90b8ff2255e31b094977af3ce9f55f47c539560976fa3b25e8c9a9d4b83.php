<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_2c31c1475c90b56fd7126728f285fccf264f51a1977ebb5191ff880b6c4bfa39 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9963b4c743a979e2ddcab890903e7589af5b3d05791554d8864c15f2236465c4 = $this->env->getExtension("native_profiler");
        $__internal_9963b4c743a979e2ddcab890903e7589af5b3d05791554d8864c15f2236465c4->enter($__internal_9963b4c743a979e2ddcab890903e7589af5b3d05791554d8864c15f2236465c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9963b4c743a979e2ddcab890903e7589af5b3d05791554d8864c15f2236465c4->leave($__internal_9963b4c743a979e2ddcab890903e7589af5b3d05791554d8864c15f2236465c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b4eb855d190bd14ab15a026586395211046869574e8f9201608b53b74ae4605c = $this->env->getExtension("native_profiler");
        $__internal_b4eb855d190bd14ab15a026586395211046869574e8f9201608b53b74ae4605c->enter($__internal_b4eb855d190bd14ab15a026586395211046869574e8f9201608b53b74ae4605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b4eb855d190bd14ab15a026586395211046869574e8f9201608b53b74ae4605c->leave($__internal_b4eb855d190bd14ab15a026586395211046869574e8f9201608b53b74ae4605c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
