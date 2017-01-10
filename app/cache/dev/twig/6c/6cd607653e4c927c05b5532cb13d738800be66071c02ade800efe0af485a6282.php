<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8d6ca7e60edcfe3c4d9738346413d75c78a055f5660d20e570c13b8dc604ee10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b977bfc1d95ffc48088af4d932ee26e479d4d625fe707df04c91fd4167a149 = $this->env->getExtension("native_profiler");
        $__internal_b1b977bfc1d95ffc48088af4d932ee26e479d4d625fe707df04c91fd4167a149->enter($__internal_b1b977bfc1d95ffc48088af4d932ee26e479d4d625fe707df04c91fd4167a149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b977bfc1d95ffc48088af4d932ee26e479d4d625fe707df04c91fd4167a149->leave($__internal_b1b977bfc1d95ffc48088af4d932ee26e479d4d625fe707df04c91fd4167a149_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9e28baefb47e4c77d7e905d796882e7fef58306a9586c8f2ca5da615a4e689b = $this->env->getExtension("native_profiler");
        $__internal_b9e28baefb47e4c77d7e905d796882e7fef58306a9586c8f2ca5da615a4e689b->enter($__internal_b9e28baefb47e4c77d7e905d796882e7fef58306a9586c8f2ca5da615a4e689b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b9e28baefb47e4c77d7e905d796882e7fef58306a9586c8f2ca5da615a4e689b->leave($__internal_b9e28baefb47e4c77d7e905d796882e7fef58306a9586c8f2ca5da615a4e689b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
