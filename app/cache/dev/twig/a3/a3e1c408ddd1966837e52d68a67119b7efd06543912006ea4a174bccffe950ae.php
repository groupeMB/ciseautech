<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4ad0856281b48991413857890b7e3d51b8c632d840d16d5868d9664b5e6b4183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20164effec2dcb34be257889354bbe5fee781b30db3bcc0668121d413a81b9cd = $this->env->getExtension("native_profiler");
        $__internal_20164effec2dcb34be257889354bbe5fee781b30db3bcc0668121d413a81b9cd->enter($__internal_20164effec2dcb34be257889354bbe5fee781b30db3bcc0668121d413a81b9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20164effec2dcb34be257889354bbe5fee781b30db3bcc0668121d413a81b9cd->leave($__internal_20164effec2dcb34be257889354bbe5fee781b30db3bcc0668121d413a81b9cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a5ea2538c3cf116961697bf1d7d6c9aa26b8c3376d23be9e6e269b40c74f006 = $this->env->getExtension("native_profiler");
        $__internal_8a5ea2538c3cf116961697bf1d7d6c9aa26b8c3376d23be9e6e269b40c74f006->enter($__internal_8a5ea2538c3cf116961697bf1d7d6c9aa26b8c3376d23be9e6e269b40c74f006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8a5ea2538c3cf116961697bf1d7d6c9aa26b8c3376d23be9e6e269b40c74f006->leave($__internal_8a5ea2538c3cf116961697bf1d7d6c9aa26b8c3376d23be9e6e269b40c74f006_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6f1af2742c64c8463ac5d4cb62d064dfad11ecaadc766c8438730ee593b54aa = $this->env->getExtension("native_profiler");
        $__internal_d6f1af2742c64c8463ac5d4cb62d064dfad11ecaadc766c8438730ee593b54aa->enter($__internal_d6f1af2742c64c8463ac5d4cb62d064dfad11ecaadc766c8438730ee593b54aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d6f1af2742c64c8463ac5d4cb62d064dfad11ecaadc766c8438730ee593b54aa->leave($__internal_d6f1af2742c64c8463ac5d4cb62d064dfad11ecaadc766c8438730ee593b54aa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f068f55b7584ddae62309f38fa2fcdb66bc2d759df92ef030cd45242704fd496 = $this->env->getExtension("native_profiler");
        $__internal_f068f55b7584ddae62309f38fa2fcdb66bc2d759df92ef030cd45242704fd496->enter($__internal_f068f55b7584ddae62309f38fa2fcdb66bc2d759df92ef030cd45242704fd496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f068f55b7584ddae62309f38fa2fcdb66bc2d759df92ef030cd45242704fd496->leave($__internal_f068f55b7584ddae62309f38fa2fcdb66bc2d759df92ef030cd45242704fd496_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
