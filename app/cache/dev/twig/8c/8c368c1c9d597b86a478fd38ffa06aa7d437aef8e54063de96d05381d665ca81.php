<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_a8423bac94d63a7ae8c3aed6f3914048a1498e044645db0be504ea54c4d2b4a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c5b30871b469eb307660d6682d0491896d0afe080b5c2e92cfd09d25ff6cf19 = $this->env->getExtension("native_profiler");
        $__internal_8c5b30871b469eb307660d6682d0491896d0afe080b5c2e92cfd09d25ff6cf19->enter($__internal_8c5b30871b469eb307660d6682d0491896d0afe080b5c2e92cfd09d25ff6cf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_8c5b30871b469eb307660d6682d0491896d0afe080b5c2e92cfd09d25ff6cf19->leave($__internal_8c5b30871b469eb307660d6682d0491896d0afe080b5c2e92cfd09d25ff6cf19_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_fff147cfcda1b208b82d1a060cf7c056896acd667abe227a980a39a53edcde59 = $this->env->getExtension("native_profiler");
        $__internal_fff147cfcda1b208b82d1a060cf7c056896acd667abe227a980a39a53edcde59->enter($__internal_fff147cfcda1b208b82d1a060cf7c056896acd667abe227a980a39a53edcde59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_fff147cfcda1b208b82d1a060cf7c056896acd667abe227a980a39a53edcde59->leave($__internal_fff147cfcda1b208b82d1a060cf7c056896acd667abe227a980a39a53edcde59_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}
