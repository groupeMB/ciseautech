<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_4beeaf48194165c65d16b606102ed574cececf88eabe7e1c344784c116c5aa66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_8ec0fd03e0393d49738f64d8eb7b53c66cfa63620912c18fc9916f52cb5c805a = $this->env->getExtension("native_profiler");
        $__internal_8ec0fd03e0393d49738f64d8eb7b53c66cfa63620912c18fc9916f52cb5c805a->enter($__internal_8ec0fd03e0393d49738f64d8eb7b53c66cfa63620912c18fc9916f52cb5c805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec0fd03e0393d49738f64d8eb7b53c66cfa63620912c18fc9916f52cb5c805a->leave($__internal_8ec0fd03e0393d49738f64d8eb7b53c66cfa63620912c18fc9916f52cb5c805a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b8eb059c8b45375195fa8593b62741a5ec90fa8955ba768278b0acb8958a8d3 = $this->env->getExtension("native_profiler");
        $__internal_2b8eb059c8b45375195fa8593b62741a5ec90fa8955ba768278b0acb8958a8d3->enter($__internal_2b8eb059c8b45375195fa8593b62741a5ec90fa8955ba768278b0acb8958a8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2b8eb059c8b45375195fa8593b62741a5ec90fa8955ba768278b0acb8958a8d3->leave($__internal_2b8eb059c8b45375195fa8593b62741a5ec90fa8955ba768278b0acb8958a8d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
