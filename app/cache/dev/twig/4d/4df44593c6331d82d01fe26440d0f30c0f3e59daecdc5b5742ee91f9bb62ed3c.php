<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e686cc9b128e672b3a1fe9f8b58d8f81eb8c12f2ba29ea8ed378919ebf47bf71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_96801dde280dd58daf1587bc6db917aec6322599dca93223c82e09d0a4622513 = $this->env->getExtension("native_profiler");
        $__internal_96801dde280dd58daf1587bc6db917aec6322599dca93223c82e09d0a4622513->enter($__internal_96801dde280dd58daf1587bc6db917aec6322599dca93223c82e09d0a4622513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96801dde280dd58daf1587bc6db917aec6322599dca93223c82e09d0a4622513->leave($__internal_96801dde280dd58daf1587bc6db917aec6322599dca93223c82e09d0a4622513_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b94f1ef6e8b2ebfc054f0e6d6260156c4dc388fac04b2fbad50fd91d2c47ac19 = $this->env->getExtension("native_profiler");
        $__internal_b94f1ef6e8b2ebfc054f0e6d6260156c4dc388fac04b2fbad50fd91d2c47ac19->enter($__internal_b94f1ef6e8b2ebfc054f0e6d6260156c4dc388fac04b2fbad50fd91d2c47ac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_b94f1ef6e8b2ebfc054f0e6d6260156c4dc388fac04b2fbad50fd91d2c47ac19->leave($__internal_b94f1ef6e8b2ebfc054f0e6d6260156c4dc388fac04b2fbad50fd91d2c47ac19_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
