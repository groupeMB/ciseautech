<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_3006b2896f808fcd196611842b3d2460bfd557d9e52c915a949b63a0532f0f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_616a4b8413763a50044d098116f036cb71b293b95068f48281a046e1567a2d0f = $this->env->getExtension("native_profiler");
        $__internal_616a4b8413763a50044d098116f036cb71b293b95068f48281a046e1567a2d0f->enter($__internal_616a4b8413763a50044d098116f036cb71b293b95068f48281a046e1567a2d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616a4b8413763a50044d098116f036cb71b293b95068f48281a046e1567a2d0f->leave($__internal_616a4b8413763a50044d098116f036cb71b293b95068f48281a046e1567a2d0f_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_7a97ed18fc0e560e5e43677dfba52d5c5ee8d78edd5590ee47d5ee8821db742c = $this->env->getExtension("native_profiler");
        $__internal_7a97ed18fc0e560e5e43677dfba52d5c5ee8d78edd5590ee47d5ee8821db742c->enter($__internal_7a97ed18fc0e560e5e43677dfba52d5c5ee8d78edd5590ee47d5ee8821db742c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_7a97ed18fc0e560e5e43677dfba52d5c5ee8d78edd5590ee47d5ee8821db742c->leave($__internal_7a97ed18fc0e560e5e43677dfba52d5c5ee8d78edd5590ee47d5ee8821db742c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
