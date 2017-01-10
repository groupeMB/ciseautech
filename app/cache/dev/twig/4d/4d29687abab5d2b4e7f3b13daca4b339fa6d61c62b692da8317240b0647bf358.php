<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_a47c24cc1a7010637787d5f924d19d47e9aabe8547df49114e360c1c1ab04116 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd9b5131232de19df899d80f5ccadcbe300ecee5476e1e58542bdf16850b15f3 = $this->env->getExtension("native_profiler");
        $__internal_fd9b5131232de19df899d80f5ccadcbe300ecee5476e1e58542bdf16850b15f3->enter($__internal_fd9b5131232de19df899d80f5ccadcbe300ecee5476e1e58542bdf16850b15f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd9b5131232de19df899d80f5ccadcbe300ecee5476e1e58542bdf16850b15f3->leave($__internal_fd9b5131232de19df899d80f5ccadcbe300ecee5476e1e58542bdf16850b15f3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0ef9ac529f00cce6042b13aa645bfc36fb28c916f2b781c713548d7bf024a49c = $this->env->getExtension("native_profiler");
        $__internal_0ef9ac529f00cce6042b13aa645bfc36fb28c916f2b781c713548d7bf024a49c->enter($__internal_0ef9ac529f00cce6042b13aa645bfc36fb28c916f2b781c713548d7bf024a49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0ef9ac529f00cce6042b13aa645bfc36fb28c916f2b781c713548d7bf024a49c->leave($__internal_0ef9ac529f00cce6042b13aa645bfc36fb28c916f2b781c713548d7bf024a49c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
