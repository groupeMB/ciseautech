<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_b8f330ece337e8c9fd8949489044406a7eae1a9a8160ec46db7bf37d52f1f013 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a45b5141ee9daffc6eee67b778a832657c9bfda29656a030ae4eb733646fa754 = $this->env->getExtension("native_profiler");
        $__internal_a45b5141ee9daffc6eee67b778a832657c9bfda29656a030ae4eb733646fa754->enter($__internal_a45b5141ee9daffc6eee67b778a832657c9bfda29656a030ae4eb733646fa754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a45b5141ee9daffc6eee67b778a832657c9bfda29656a030ae4eb733646fa754->leave($__internal_a45b5141ee9daffc6eee67b778a832657c9bfda29656a030ae4eb733646fa754_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e3c9c06fefe01e7aff61b1de8753d77e286db665b5de7f27d8f4f1f656f93fb4 = $this->env->getExtension("native_profiler");
        $__internal_e3c9c06fefe01e7aff61b1de8753d77e286db665b5de7f27d8f4f1f656f93fb4->enter($__internal_e3c9c06fefe01e7aff61b1de8753d77e286db665b5de7f27d8f4f1f656f93fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e3c9c06fefe01e7aff61b1de8753d77e286db665b5de7f27d8f4f1f656f93fb4->leave($__internal_e3c9c06fefe01e7aff61b1de8753d77e286db665b5de7f27d8f4f1f656f93fb4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
