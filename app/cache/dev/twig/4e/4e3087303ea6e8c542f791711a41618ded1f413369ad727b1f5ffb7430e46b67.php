<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_d0abcdaeddc57bb17f99f94f7b3fe9f11af72193c00cd8677e31d8117f6ccd8b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1bd9711d71fbbfcf107c1eb4dd186e80a2cd3ca97ffdf79f467cd7edbae45a8 = $this->env->getExtension("native_profiler");
        $__internal_e1bd9711d71fbbfcf107c1eb4dd186e80a2cd3ca97ffdf79f467cd7edbae45a8->enter($__internal_e1bd9711d71fbbfcf107c1eb4dd186e80a2cd3ca97ffdf79f467cd7edbae45a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1bd9711d71fbbfcf107c1eb4dd186e80a2cd3ca97ffdf79f467cd7edbae45a8->leave($__internal_e1bd9711d71fbbfcf107c1eb4dd186e80a2cd3ca97ffdf79f467cd7edbae45a8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9e21f24aef193f11834746eb415808bbfdc6057677a5fe7d7325f1a962439873 = $this->env->getExtension("native_profiler");
        $__internal_9e21f24aef193f11834746eb415808bbfdc6057677a5fe7d7325f1a962439873->enter($__internal_9e21f24aef193f11834746eb415808bbfdc6057677a5fe7d7325f1a962439873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9e21f24aef193f11834746eb415808bbfdc6057677a5fe7d7325f1a962439873->leave($__internal_9e21f24aef193f11834746eb415808bbfdc6057677a5fe7d7325f1a962439873_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
