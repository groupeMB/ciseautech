<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e4cbd1387d0fbde3bafe43e1290aaad98aa949eb43dd69f798263848e257628b extends Twig_Template
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
        $__internal_2945ef15ed3728e7f35b36a3bda6256bbce00571a1554e06108f07c7fdd38910 = $this->env->getExtension("native_profiler");
        $__internal_2945ef15ed3728e7f35b36a3bda6256bbce00571a1554e06108f07c7fdd38910->enter($__internal_2945ef15ed3728e7f35b36a3bda6256bbce00571a1554e06108f07c7fdd38910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2945ef15ed3728e7f35b36a3bda6256bbce00571a1554e06108f07c7fdd38910->leave($__internal_2945ef15ed3728e7f35b36a3bda6256bbce00571a1554e06108f07c7fdd38910_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d7163f13c99b054e4f0e5aa003a7033d710c850e3ccda178f2810d7ce60c888 = $this->env->getExtension("native_profiler");
        $__internal_9d7163f13c99b054e4f0e5aa003a7033d710c850e3ccda178f2810d7ce60c888->enter($__internal_9d7163f13c99b054e4f0e5aa003a7033d710c850e3ccda178f2810d7ce60c888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d7163f13c99b054e4f0e5aa003a7033d710c850e3ccda178f2810d7ce60c888->leave($__internal_9d7163f13c99b054e4f0e5aa003a7033d710c850e3ccda178f2810d7ce60c888_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
