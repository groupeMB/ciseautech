<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a128fc3104914b67768a6f0616ef69c33b80edec246fbb9bd99e6627482a15f5 extends Twig_Template
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
        $__internal_37f56b33d339f63233e31462470427cac56db23cdcc172903aa5ad2a42d04e7e = $this->env->getExtension("native_profiler");
        $__internal_37f56b33d339f63233e31462470427cac56db23cdcc172903aa5ad2a42d04e7e->enter($__internal_37f56b33d339f63233e31462470427cac56db23cdcc172903aa5ad2a42d04e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f56b33d339f63233e31462470427cac56db23cdcc172903aa5ad2a42d04e7e->leave($__internal_37f56b33d339f63233e31462470427cac56db23cdcc172903aa5ad2a42d04e7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f66b8f308ef335b2ff89a29780afcbc97f2342394bd4f9512c59ce0905bb7c28 = $this->env->getExtension("native_profiler");
        $__internal_f66b8f308ef335b2ff89a29780afcbc97f2342394bd4f9512c59ce0905bb7c28->enter($__internal_f66b8f308ef335b2ff89a29780afcbc97f2342394bd4f9512c59ce0905bb7c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f66b8f308ef335b2ff89a29780afcbc97f2342394bd4f9512c59ce0905bb7c28->leave($__internal_f66b8f308ef335b2ff89a29780afcbc97f2342394bd4f9512c59ce0905bb7c28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20b9a5803a40f0c10039bb6b21632ccbbd99a20787507b2ca7d3cfc5075a0332 = $this->env->getExtension("native_profiler");
        $__internal_20b9a5803a40f0c10039bb6b21632ccbbd99a20787507b2ca7d3cfc5075a0332->enter($__internal_20b9a5803a40f0c10039bb6b21632ccbbd99a20787507b2ca7d3cfc5075a0332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20b9a5803a40f0c10039bb6b21632ccbbd99a20787507b2ca7d3cfc5075a0332->leave($__internal_20b9a5803a40f0c10039bb6b21632ccbbd99a20787507b2ca7d3cfc5075a0332_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1233268f45bcd0bff276ffcf560f48de166885133e9b859c53167c9f4270d8 = $this->env->getExtension("native_profiler");
        $__internal_8f1233268f45bcd0bff276ffcf560f48de166885133e9b859c53167c9f4270d8->enter($__internal_8f1233268f45bcd0bff276ffcf560f48de166885133e9b859c53167c9f4270d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8f1233268f45bcd0bff276ffcf560f48de166885133e9b859c53167c9f4270d8->leave($__internal_8f1233268f45bcd0bff276ffcf560f48de166885133e9b859c53167c9f4270d8_prof);

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
