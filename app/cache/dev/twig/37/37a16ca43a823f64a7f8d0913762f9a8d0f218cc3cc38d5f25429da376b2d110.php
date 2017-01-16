<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_32341a33efdcd40f80d21af12b462f5ff4dc896c39d2f7594b860037a75f4847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b33972603c20b71698895a8ae661149cd923ef1b494803e5c92e1c5f8e18b10b = $this->env->getExtension("native_profiler");
        $__internal_b33972603c20b71698895a8ae661149cd923ef1b494803e5c92e1c5f8e18b10b->enter($__internal_b33972603c20b71698895a8ae661149cd923ef1b494803e5c92e1c5f8e18b10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33972603c20b71698895a8ae661149cd923ef1b494803e5c92e1c5f8e18b10b->leave($__internal_b33972603c20b71698895a8ae661149cd923ef1b494803e5c92e1c5f8e18b10b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a509a588cdf6314718423e009091d4a7506e4a6e5f4093dff2d59f67c5f49fb0 = $this->env->getExtension("native_profiler");
        $__internal_a509a588cdf6314718423e009091d4a7506e4a6e5f4093dff2d59f67c5f49fb0->enter($__internal_a509a588cdf6314718423e009091d4a7506e4a6e5f4093dff2d59f67c5f49fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a509a588cdf6314718423e009091d4a7506e4a6e5f4093dff2d59f67c5f49fb0->leave($__internal_a509a588cdf6314718423e009091d4a7506e4a6e5f4093dff2d59f67c5f49fb0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5b4c01a4d38f4a319ecbc567f1dec721ed1e0b426bfc539ae38c4d91e789a28 = $this->env->getExtension("native_profiler");
        $__internal_e5b4c01a4d38f4a319ecbc567f1dec721ed1e0b426bfc539ae38c4d91e789a28->enter($__internal_e5b4c01a4d38f4a319ecbc567f1dec721ed1e0b426bfc539ae38c4d91e789a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5b4c01a4d38f4a319ecbc567f1dec721ed1e0b426bfc539ae38c4d91e789a28->leave($__internal_e5b4c01a4d38f4a319ecbc567f1dec721ed1e0b426bfc539ae38c4d91e789a28_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5bc80a54d3171b9c37bdb1b6cf5f8fb7f9006fb86d4c2db2d1d2a8fea8ebf82 = $this->env->getExtension("native_profiler");
        $__internal_c5bc80a54d3171b9c37bdb1b6cf5f8fb7f9006fb86d4c2db2d1d2a8fea8ebf82->enter($__internal_c5bc80a54d3171b9c37bdb1b6cf5f8fb7f9006fb86d4c2db2d1d2a8fea8ebf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5bc80a54d3171b9c37bdb1b6cf5f8fb7f9006fb86d4c2db2d1d2a8fea8ebf82->leave($__internal_c5bc80a54d3171b9c37bdb1b6cf5f8fb7f9006fb86d4c2db2d1d2a8fea8ebf82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
