<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dcc585f590ad766f19f5d79b9de2ef606c616fd687ee1e54049cf66d4e704436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_19b530469b73fae23da4cd62d69f9938f3b9d784a839323552e75eabc0f543e6 = $this->env->getExtension("native_profiler");
        $__internal_19b530469b73fae23da4cd62d69f9938f3b9d784a839323552e75eabc0f543e6->enter($__internal_19b530469b73fae23da4cd62d69f9938f3b9d784a839323552e75eabc0f543e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b530469b73fae23da4cd62d69f9938f3b9d784a839323552e75eabc0f543e6->leave($__internal_19b530469b73fae23da4cd62d69f9938f3b9d784a839323552e75eabc0f543e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ef376a98b53459f891d4c9bb0fe42359bd0df88d574c6b17344345c4fcc5a1e = $this->env->getExtension("native_profiler");
        $__internal_3ef376a98b53459f891d4c9bb0fe42359bd0df88d574c6b17344345c4fcc5a1e->enter($__internal_3ef376a98b53459f891d4c9bb0fe42359bd0df88d574c6b17344345c4fcc5a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ef376a98b53459f891d4c9bb0fe42359bd0df88d574c6b17344345c4fcc5a1e->leave($__internal_3ef376a98b53459f891d4c9bb0fe42359bd0df88d574c6b17344345c4fcc5a1e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3a54f531a54b52985622e6819f17cb1c75851e0ad2f6d0deabf86c86d2d8393 = $this->env->getExtension("native_profiler");
        $__internal_e3a54f531a54b52985622e6819f17cb1c75851e0ad2f6d0deabf86c86d2d8393->enter($__internal_e3a54f531a54b52985622e6819f17cb1c75851e0ad2f6d0deabf86c86d2d8393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3a54f531a54b52985622e6819f17cb1c75851e0ad2f6d0deabf86c86d2d8393->leave($__internal_e3a54f531a54b52985622e6819f17cb1c75851e0ad2f6d0deabf86c86d2d8393_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d854848de1b8f0d6a2fdbb793e2f7a075895ca7c2d811ea69fe7b507a773fe36 = $this->env->getExtension("native_profiler");
        $__internal_d854848de1b8f0d6a2fdbb793e2f7a075895ca7c2d811ea69fe7b507a773fe36->enter($__internal_d854848de1b8f0d6a2fdbb793e2f7a075895ca7c2d811ea69fe7b507a773fe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d854848de1b8f0d6a2fdbb793e2f7a075895ca7c2d811ea69fe7b507a773fe36->leave($__internal_d854848de1b8f0d6a2fdbb793e2f7a075895ca7c2d811ea69fe7b507a773fe36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
