<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f62a3e9a507e0b461c288406bf1b167d934ab1dbc21da7b9c43bfcc784edc088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1cd151aec822476022f7a747f42d70420353261ec940e95f9ac5a615f5dbe08 = $this->env->getExtension("native_profiler");
        $__internal_a1cd151aec822476022f7a747f42d70420353261ec940e95f9ac5a615f5dbe08->enter($__internal_a1cd151aec822476022f7a747f42d70420353261ec940e95f9ac5a615f5dbe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1cd151aec822476022f7a747f42d70420353261ec940e95f9ac5a615f5dbe08->leave($__internal_a1cd151aec822476022f7a747f42d70420353261ec940e95f9ac5a615f5dbe08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f3db111088d1050148238b437119bcad8790174caf010ea5cd4531a87c79584 = $this->env->getExtension("native_profiler");
        $__internal_4f3db111088d1050148238b437119bcad8790174caf010ea5cd4531a87c79584->enter($__internal_4f3db111088d1050148238b437119bcad8790174caf010ea5cd4531a87c79584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_4f3db111088d1050148238b437119bcad8790174caf010ea5cd4531a87c79584->leave($__internal_4f3db111088d1050148238b437119bcad8790174caf010ea5cd4531a87c79584_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
