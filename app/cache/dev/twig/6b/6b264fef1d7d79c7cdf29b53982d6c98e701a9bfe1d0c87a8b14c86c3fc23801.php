<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_98cc1a79a879a5c835250dd4eab883680a29dc3baeae0c7397e3a738c137a5f5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad8f2616f77879dd159fbe6266f5dfb9c3c29626b1a5fad1078bdc999f5bdbfd = $this->env->getExtension("native_profiler");
        $__internal_ad8f2616f77879dd159fbe6266f5dfb9c3c29626b1a5fad1078bdc999f5bdbfd->enter($__internal_ad8f2616f77879dd159fbe6266f5dfb9c3c29626b1a5fad1078bdc999f5bdbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad8f2616f77879dd159fbe6266f5dfb9c3c29626b1a5fad1078bdc999f5bdbfd->leave($__internal_ad8f2616f77879dd159fbe6266f5dfb9c3c29626b1a5fad1078bdc999f5bdbfd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_807ad793d2721b5ea7b2bfc6f20f01fa21378773eaf06be51e36716c0e719544 = $this->env->getExtension("native_profiler");
        $__internal_807ad793d2721b5ea7b2bfc6f20f01fa21378773eaf06be51e36716c0e719544->enter($__internal_807ad793d2721b5ea7b2bfc6f20f01fa21378773eaf06be51e36716c0e719544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_807ad793d2721b5ea7b2bfc6f20f01fa21378773eaf06be51e36716c0e719544->leave($__internal_807ad793d2721b5ea7b2bfc6f20f01fa21378773eaf06be51e36716c0e719544_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
