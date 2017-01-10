<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_d1366cafef7c685cd25469f7587edf41f7c452c029bbcc05bc971c1f42faa33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_fb0f2d53cb7fb478769d3bc52523dcd105e0c8944c38cb444279e88c68a8039a = $this->env->getExtension("native_profiler");
        $__internal_fb0f2d53cb7fb478769d3bc52523dcd105e0c8944c38cb444279e88c68a8039a->enter($__internal_fb0f2d53cb7fb478769d3bc52523dcd105e0c8944c38cb444279e88c68a8039a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0f2d53cb7fb478769d3bc52523dcd105e0c8944c38cb444279e88c68a8039a->leave($__internal_fb0f2d53cb7fb478769d3bc52523dcd105e0c8944c38cb444279e88c68a8039a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a2995e8540fbe2a1f30d65ef9edbb2a3602999ae817f00b0c625f0de31f4343 = $this->env->getExtension("native_profiler");
        $__internal_1a2995e8540fbe2a1f30d65ef9edbb2a3602999ae817f00b0c625f0de31f4343->enter($__internal_1a2995e8540fbe2a1f30d65ef9edbb2a3602999ae817f00b0c625f0de31f4343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_1a2995e8540fbe2a1f30d65ef9edbb2a3602999ae817f00b0c625f0de31f4343->leave($__internal_1a2995e8540fbe2a1f30d65ef9edbb2a3602999ae817f00b0c625f0de31f4343_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
