<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_c4d8a6a53a3a67dc6c1757019bcd445c8769367d61023c8da59d009530f9dd94 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23be627af4fa7eeecd65cd8ff3e4866adea6016ac5f11b87557a94094facdd0e = $this->env->getExtension("native_profiler");
        $__internal_23be627af4fa7eeecd65cd8ff3e4866adea6016ac5f11b87557a94094facdd0e->enter($__internal_23be627af4fa7eeecd65cd8ff3e4866adea6016ac5f11b87557a94094facdd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23be627af4fa7eeecd65cd8ff3e4866adea6016ac5f11b87557a94094facdd0e->leave($__internal_23be627af4fa7eeecd65cd8ff3e4866adea6016ac5f11b87557a94094facdd0e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_94940be9a9ba433fd99a744a1c08962341ef35bc785c94fdc20b9cf95286052e = $this->env->getExtension("native_profiler");
        $__internal_94940be9a9ba433fd99a744a1c08962341ef35bc785c94fdc20b9cf95286052e->enter($__internal_94940be9a9ba433fd99a744a1c08962341ef35bc785c94fdc20b9cf95286052e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_94940be9a9ba433fd99a744a1c08962341ef35bc785c94fdc20b9cf95286052e->leave($__internal_94940be9a9ba433fd99a744a1c08962341ef35bc785c94fdc20b9cf95286052e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
