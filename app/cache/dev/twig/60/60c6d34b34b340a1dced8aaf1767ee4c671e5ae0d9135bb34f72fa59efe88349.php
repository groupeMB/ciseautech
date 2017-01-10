<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_cdec777d4cfec0720648352e7dfbf85f05a6438eee96331a3d952370688f4690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adff75e679243839f05f893fb6180adcefcd764ec3e08dfea44c7d96bb352381 = $this->env->getExtension("native_profiler");
        $__internal_adff75e679243839f05f893fb6180adcefcd764ec3e08dfea44c7d96bb352381->enter($__internal_adff75e679243839f05f893fb6180adcefcd764ec3e08dfea44c7d96bb352381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_adff75e679243839f05f893fb6180adcefcd764ec3e08dfea44c7d96bb352381->leave($__internal_adff75e679243839f05f893fb6180adcefcd764ec3e08dfea44c7d96bb352381_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccae5760a269718001ef8f977140e159c53a193dbcf62a5057ef7164f0e251db = $this->env->getExtension("native_profiler");
        $__internal_ccae5760a269718001ef8f977140e159c53a193dbcf62a5057ef7164f0e251db->enter($__internal_ccae5760a269718001ef8f977140e159c53a193dbcf62a5057ef7164f0e251db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ccae5760a269718001ef8f977140e159c53a193dbcf62a5057ef7164f0e251db->leave($__internal_ccae5760a269718001ef8f977140e159c53a193dbcf62a5057ef7164f0e251db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
