<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_2f562ca4a445036230005f1d70d3000fa101cdbf1b816320c2610b1d280a777d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b0a0d1c9729aa995826732a4a2470b60a36b593cdd8c5217708f4f61d2b9585 = $this->env->getExtension("native_profiler");
        $__internal_2b0a0d1c9729aa995826732a4a2470b60a36b593cdd8c5217708f4f61d2b9585->enter($__internal_2b0a0d1c9729aa995826732a4a2470b60a36b593cdd8c5217708f4f61d2b9585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_2b0a0d1c9729aa995826732a4a2470b60a36b593cdd8c5217708f4f61d2b9585->leave($__internal_2b0a0d1c9729aa995826732a4a2470b60a36b593cdd8c5217708f4f61d2b9585_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_d1a0f0d3e7c9d1c96b5024132ee84110a2c1d7eddb5126e88427fae8ee8bb64b = $this->env->getExtension("native_profiler");
        $__internal_d1a0f0d3e7c9d1c96b5024132ee84110a2c1d7eddb5126e88427fae8ee8bb64b->enter($__internal_d1a0f0d3e7c9d1c96b5024132ee84110a2c1d7eddb5126e88427fae8ee8bb64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_d1a0f0d3e7c9d1c96b5024132ee84110a2c1d7eddb5126e88427fae8ee8bb64b->leave($__internal_d1a0f0d3e7c9d1c96b5024132ee84110a2c1d7eddb5126e88427fae8ee8bb64b_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_fcf2c3ebc2a71390f9cacb6ce279df09f901db9612f30d8bb582993175bb47ed = $this->env->getExtension("native_profiler");
        $__internal_fcf2c3ebc2a71390f9cacb6ce279df09f901db9612f30d8bb582993175bb47ed->enter($__internal_fcf2c3ebc2a71390f9cacb6ce279df09f901db9612f30d8bb582993175bb47ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_fcf2c3ebc2a71390f9cacb6ce279df09f901db9612f30d8bb582993175bb47ed->leave($__internal_fcf2c3ebc2a71390f9cacb6ce279df09f901db9612f30d8bb582993175bb47ed_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
";
    }
}
