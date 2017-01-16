<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b6b30895efe51932f809f17d33ed7603196627cbc029ac29ba248dc6adb80560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cc69a638fd78c8173ca235a7f6477f690fe7d4d6893295bb2d0023fd50de528 = $this->env->getExtension("native_profiler");
        $__internal_3cc69a638fd78c8173ca235a7f6477f690fe7d4d6893295bb2d0023fd50de528->enter($__internal_3cc69a638fd78c8173ca235a7f6477f690fe7d4d6893295bb2d0023fd50de528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc69a638fd78c8173ca235a7f6477f690fe7d4d6893295bb2d0023fd50de528->leave($__internal_3cc69a638fd78c8173ca235a7f6477f690fe7d4d6893295bb2d0023fd50de528_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0803f7c9c54083e67f270dac34a922eb7a871f354f721327877bd0703c07c03c = $this->env->getExtension("native_profiler");
        $__internal_0803f7c9c54083e67f270dac34a922eb7a871f354f721327877bd0703c07c03c->enter($__internal_0803f7c9c54083e67f270dac34a922eb7a871f354f721327877bd0703c07c03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0803f7c9c54083e67f270dac34a922eb7a871f354f721327877bd0703c07c03c->leave($__internal_0803f7c9c54083e67f270dac34a922eb7a871f354f721327877bd0703c07c03c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fa9ebd66da99c95cbc925ef8488f310ffa399830b410a96806c355b8f6e1488 = $this->env->getExtension("native_profiler");
        $__internal_0fa9ebd66da99c95cbc925ef8488f310ffa399830b410a96806c355b8f6e1488->enter($__internal_0fa9ebd66da99c95cbc925ef8488f310ffa399830b410a96806c355b8f6e1488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0fa9ebd66da99c95cbc925ef8488f310ffa399830b410a96806c355b8f6e1488->leave($__internal_0fa9ebd66da99c95cbc925ef8488f310ffa399830b410a96806c355b8f6e1488_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_888fac9242530fbeae717be51f08a7223552eb7fb899932ca930eee3d671c9bc = $this->env->getExtension("native_profiler");
        $__internal_888fac9242530fbeae717be51f08a7223552eb7fb899932ca930eee3d671c9bc->enter($__internal_888fac9242530fbeae717be51f08a7223552eb7fb899932ca930eee3d671c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_888fac9242530fbeae717be51f08a7223552eb7fb899932ca930eee3d671c9bc->leave($__internal_888fac9242530fbeae717be51f08a7223552eb7fb899932ca930eee3d671c9bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
