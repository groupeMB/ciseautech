<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c9be82a273d95597689849cc98578a10cd3d0369528b5d720f751cd067b02eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_2a44a7d6dec7cc8d48ae7a2304c149d18b02c28c25f754b562446df284746bf4 = $this->env->getExtension("native_profiler");
        $__internal_2a44a7d6dec7cc8d48ae7a2304c149d18b02c28c25f754b562446df284746bf4->enter($__internal_2a44a7d6dec7cc8d48ae7a2304c149d18b02c28c25f754b562446df284746bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a44a7d6dec7cc8d48ae7a2304c149d18b02c28c25f754b562446df284746bf4->leave($__internal_2a44a7d6dec7cc8d48ae7a2304c149d18b02c28c25f754b562446df284746bf4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e9c65b3a0017d8cc89fba51213bde8cbccd579423b9a41f902ad5359d2216af = $this->env->getExtension("native_profiler");
        $__internal_6e9c65b3a0017d8cc89fba51213bde8cbccd579423b9a41f902ad5359d2216af->enter($__internal_6e9c65b3a0017d8cc89fba51213bde8cbccd579423b9a41f902ad5359d2216af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6e9c65b3a0017d8cc89fba51213bde8cbccd579423b9a41f902ad5359d2216af->leave($__internal_6e9c65b3a0017d8cc89fba51213bde8cbccd579423b9a41f902ad5359d2216af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
