<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7524f41b81d7244fac4543a4ea393e081cd577bef46edd9201d417189580d3da extends Twig_Template
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
        $__internal_d47336f893570296b042869ed2463fadd505a322856bd74a042b04a985b7d57e = $this->env->getExtension("native_profiler");
        $__internal_d47336f893570296b042869ed2463fadd505a322856bd74a042b04a985b7d57e->enter($__internal_d47336f893570296b042869ed2463fadd505a322856bd74a042b04a985b7d57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47336f893570296b042869ed2463fadd505a322856bd74a042b04a985b7d57e->leave($__internal_d47336f893570296b042869ed2463fadd505a322856bd74a042b04a985b7d57e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78db9f89562caf2d077dcaf0169b6242c95fb1c7f6371a02e3cda99d88950e95 = $this->env->getExtension("native_profiler");
        $__internal_78db9f89562caf2d077dcaf0169b6242c95fb1c7f6371a02e3cda99d88950e95->enter($__internal_78db9f89562caf2d077dcaf0169b6242c95fb1c7f6371a02e3cda99d88950e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78db9f89562caf2d077dcaf0169b6242c95fb1c7f6371a02e3cda99d88950e95->leave($__internal_78db9f89562caf2d077dcaf0169b6242c95fb1c7f6371a02e3cda99d88950e95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bac2c6d97f4aee5ad8155d122650307d9e1fc3a5d0c826df6617cfa2fa5b8c9a = $this->env->getExtension("native_profiler");
        $__internal_bac2c6d97f4aee5ad8155d122650307d9e1fc3a5d0c826df6617cfa2fa5b8c9a->enter($__internal_bac2c6d97f4aee5ad8155d122650307d9e1fc3a5d0c826df6617cfa2fa5b8c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bac2c6d97f4aee5ad8155d122650307d9e1fc3a5d0c826df6617cfa2fa5b8c9a->leave($__internal_bac2c6d97f4aee5ad8155d122650307d9e1fc3a5d0c826df6617cfa2fa5b8c9a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76fb5e014b369e9edd9a02a4cac5a7e6b3ac4ddecd1a787de471784174a50fba = $this->env->getExtension("native_profiler");
        $__internal_76fb5e014b369e9edd9a02a4cac5a7e6b3ac4ddecd1a787de471784174a50fba->enter($__internal_76fb5e014b369e9edd9a02a4cac5a7e6b3ac4ddecd1a787de471784174a50fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_76fb5e014b369e9edd9a02a4cac5a7e6b3ac4ddecd1a787de471784174a50fba->leave($__internal_76fb5e014b369e9edd9a02a4cac5a7e6b3ac4ddecd1a787de471784174a50fba_prof);

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
