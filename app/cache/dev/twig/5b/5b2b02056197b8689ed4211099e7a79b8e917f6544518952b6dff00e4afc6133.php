<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_f4eeaccd1f287b6b169c9f5635938de832ca3f9ef52953a2fc2dc4ed34dae0d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ea0a4330014588189aa8b45461f17fa4d7816ec851e5345effd78c5d31b899b7 = $this->env->getExtension("native_profiler");
        $__internal_ea0a4330014588189aa8b45461f17fa4d7816ec851e5345effd78c5d31b899b7->enter($__internal_ea0a4330014588189aa8b45461f17fa4d7816ec851e5345effd78c5d31b899b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0a4330014588189aa8b45461f17fa4d7816ec851e5345effd78c5d31b899b7->leave($__internal_ea0a4330014588189aa8b45461f17fa4d7816ec851e5345effd78c5d31b899b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcadbb8dc0cdef39a6b200447ed7a8ed8fca28de9185b7310a47a7e9429d7425 = $this->env->getExtension("native_profiler");
        $__internal_fcadbb8dc0cdef39a6b200447ed7a8ed8fca28de9185b7310a47a7e9429d7425->enter($__internal_fcadbb8dc0cdef39a6b200447ed7a8ed8fca28de9185b7310a47a7e9429d7425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_fcadbb8dc0cdef39a6b200447ed7a8ed8fca28de9185b7310a47a7e9429d7425->leave($__internal_fcadbb8dc0cdef39a6b200447ed7a8ed8fca28de9185b7310a47a7e9429d7425_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
