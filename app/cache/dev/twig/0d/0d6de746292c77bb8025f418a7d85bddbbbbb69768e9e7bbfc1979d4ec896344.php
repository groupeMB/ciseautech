<?php

/* @SonataUser/Resetting/reset.html.twig */
class __TwigTemplate_ce803f021f54d1200a6ea798925147d75a07d5dcbbf36115fd64c38adf0d0500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff4dffb0cfab47ed809ec6c9ae760350363c639df47097cea7f6101c2c562811 = $this->env->getExtension("native_profiler");
        $__internal_ff4dffb0cfab47ed809ec6c9ae760350363c639df47097cea7f6101c2c562811->enter($__internal_ff4dffb0cfab47ed809ec6c9ae760350363c639df47097cea7f6101c2c562811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4dffb0cfab47ed809ec6c9ae760350363c639df47097cea7f6101c2c562811->leave($__internal_ff4dffb0cfab47ed809ec6c9ae760350363c639df47097cea7f6101c2c562811_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbc048270cab1c395eef3dfebbdc4110f33d028182f4419e90428f4e5869cc9b = $this->env->getExtension("native_profiler");
        $__internal_bbc048270cab1c395eef3dfebbdc4110f33d028182f4419e90428f4e5869cc9b->enter($__internal_bbc048270cab1c395eef3dfebbdc4110f33d028182f4419e90428f4e5869cc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@SonataUser/Resetting/reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_bbc048270cab1c395eef3dfebbdc4110f33d028182f4419e90428f4e5869cc9b->leave($__internal_bbc048270cab1c395eef3dfebbdc4110f33d028182f4419e90428f4e5869cc9b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting_reset\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
";
    }
}
