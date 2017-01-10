<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_530cccb98d4c3d9185fa2fa954cdb96273add5ea5698b317840ccbee709f0f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_80ea54837b154bb178092c9b4b56196972b602232fa3c7b6990430deb9d49b8a = $this->env->getExtension("native_profiler");
        $__internal_80ea54837b154bb178092c9b4b56196972b602232fa3c7b6990430deb9d49b8a->enter($__internal_80ea54837b154bb178092c9b4b56196972b602232fa3c7b6990430deb9d49b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ea54837b154bb178092c9b4b56196972b602232fa3c7b6990430deb9d49b8a->leave($__internal_80ea54837b154bb178092c9b4b56196972b602232fa3c7b6990430deb9d49b8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bedc61641416088f556257bd61c7a037b26b2b4eac1edf2395bc7405d93fc9ec = $this->env->getExtension("native_profiler");
        $__internal_bedc61641416088f556257bd61c7a037b26b2b4eac1edf2395bc7405d93fc9ec->enter($__internal_bedc61641416088f556257bd61c7a037b26b2b4eac1edf2395bc7405d93fc9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_bedc61641416088f556257bd61c7a037b26b2b4eac1edf2395bc7405d93fc9ec->leave($__internal_bedc61641416088f556257bd61c7a037b26b2b4eac1edf2395bc7405d93fc9ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
