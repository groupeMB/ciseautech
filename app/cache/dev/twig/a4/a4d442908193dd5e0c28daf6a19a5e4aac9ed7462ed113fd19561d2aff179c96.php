<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_95ec62487a5b4a12fb512f1764e7e0da3c6ad0635692bc119129b4566ae9d478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_5302c590849f862fb82e249ac66257490827c44c0f258fa7394f1b313bfc7e14 = $this->env->getExtension("native_profiler");
        $__internal_5302c590849f862fb82e249ac66257490827c44c0f258fa7394f1b313bfc7e14->enter($__internal_5302c590849f862fb82e249ac66257490827c44c0f258fa7394f1b313bfc7e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5302c590849f862fb82e249ac66257490827c44c0f258fa7394f1b313bfc7e14->leave($__internal_5302c590849f862fb82e249ac66257490827c44c0f258fa7394f1b313bfc7e14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a83f700648e0d1daaa52d45d1b63ff12b6a02fa6f3b684369878840abf6bba1a = $this->env->getExtension("native_profiler");
        $__internal_a83f700648e0d1daaa52d45d1b63ff12b6a02fa6f3b684369878840abf6bba1a->enter($__internal_a83f700648e0d1daaa52d45d1b63ff12b6a02fa6f3b684369878840abf6bba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a83f700648e0d1daaa52d45d1b63ff12b6a02fa6f3b684369878840abf6bba1a->leave($__internal_a83f700648e0d1daaa52d45d1b63ff12b6a02fa6f3b684369878840abf6bba1a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
