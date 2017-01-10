<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_4a4a27cf4ca1a969e6321b000943438847001b4411cd21a25357319527c9e5a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_5f626b0e7b4a184b419eefccd64c4265f02f0a82bb39c472243dc9d934fe6290 = $this->env->getExtension("native_profiler");
        $__internal_5f626b0e7b4a184b419eefccd64c4265f02f0a82bb39c472243dc9d934fe6290->enter($__internal_5f626b0e7b4a184b419eefccd64c4265f02f0a82bb39c472243dc9d934fe6290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f626b0e7b4a184b419eefccd64c4265f02f0a82bb39c472243dc9d934fe6290->leave($__internal_5f626b0e7b4a184b419eefccd64c4265f02f0a82bb39c472243dc9d934fe6290_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_da724a872413db716e066f62aeef8b74b38e38d8446629d6754e25aa7382169a = $this->env->getExtension("native_profiler");
        $__internal_da724a872413db716e066f62aeef8b74b38e38d8446629d6754e25aa7382169a->enter($__internal_da724a872413db716e066f62aeef8b74b38e38d8446629d6754e25aa7382169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_da724a872413db716e066f62aeef8b74b38e38d8446629d6754e25aa7382169a->leave($__internal_da724a872413db716e066f62aeef8b74b38e38d8446629d6754e25aa7382169a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}
