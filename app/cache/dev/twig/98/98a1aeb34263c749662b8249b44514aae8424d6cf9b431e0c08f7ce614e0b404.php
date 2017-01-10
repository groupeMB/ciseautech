<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c66ed2c5ed59eab9171181a227ce51e7559da181bda5f8d8731a492563b126be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b2f5f6f6840b9fcc0475851713e788cdb38a45cf151c7a0a8f0839ade01d1647 = $this->env->getExtension("native_profiler");
        $__internal_b2f5f6f6840b9fcc0475851713e788cdb38a45cf151c7a0a8f0839ade01d1647->enter($__internal_b2f5f6f6840b9fcc0475851713e788cdb38a45cf151c7a0a8f0839ade01d1647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2f5f6f6840b9fcc0475851713e788cdb38a45cf151c7a0a8f0839ade01d1647->leave($__internal_b2f5f6f6840b9fcc0475851713e788cdb38a45cf151c7a0a8f0839ade01d1647_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a7a36d33cebb3cbb78af4a0b214286659da7620354561e63363041a5bc179da = $this->env->getExtension("native_profiler");
        $__internal_9a7a36d33cebb3cbb78af4a0b214286659da7620354561e63363041a5bc179da->enter($__internal_9a7a36d33cebb3cbb78af4a0b214286659da7620354561e63363041a5bc179da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9a7a36d33cebb3cbb78af4a0b214286659da7620354561e63363041a5bc179da->leave($__internal_9a7a36d33cebb3cbb78af4a0b214286659da7620354561e63363041a5bc179da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
