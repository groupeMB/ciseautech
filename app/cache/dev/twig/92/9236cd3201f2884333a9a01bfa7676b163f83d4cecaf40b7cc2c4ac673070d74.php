<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_fe32338ab098f5173464a9229a2fa7ced4b87736304e41d5faff8baad61a52a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5d0bded55f7493c021af78c56b702f71457146e134c0cbaf4c40d6c9ee4084d7 = $this->env->getExtension("native_profiler");
        $__internal_5d0bded55f7493c021af78c56b702f71457146e134c0cbaf4c40d6c9ee4084d7->enter($__internal_5d0bded55f7493c021af78c56b702f71457146e134c0cbaf4c40d6c9ee4084d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d0bded55f7493c021af78c56b702f71457146e134c0cbaf4c40d6c9ee4084d7->leave($__internal_5d0bded55f7493c021af78c56b702f71457146e134c0cbaf4c40d6c9ee4084d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5cf37be78cb8e00b2e59afb8a8ac2d40af2f581a2f281d83d9876737b521c18 = $this->env->getExtension("native_profiler");
        $__internal_d5cf37be78cb8e00b2e59afb8a8ac2d40af2f581a2f281d83d9876737b521c18->enter($__internal_d5cf37be78cb8e00b2e59afb8a8ac2d40af2f581a2f281d83d9876737b521c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d5cf37be78cb8e00b2e59afb8a8ac2d40af2f581a2f281d83d9876737b521c18->leave($__internal_d5cf37be78cb8e00b2e59afb8a8ac2d40af2f581a2f281d83d9876737b521c18_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63a6aa2ef5d80a4bcf541909266f745323b1fccc6439fc59183c27e3d69aa842 = $this->env->getExtension("native_profiler");
        $__internal_63a6aa2ef5d80a4bcf541909266f745323b1fccc6439fc59183c27e3d69aa842->enter($__internal_63a6aa2ef5d80a4bcf541909266f745323b1fccc6439fc59183c27e3d69aa842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_63a6aa2ef5d80a4bcf541909266f745323b1fccc6439fc59183c27e3d69aa842->leave($__internal_63a6aa2ef5d80a4bcf541909266f745323b1fccc6439fc59183c27e3d69aa842_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
