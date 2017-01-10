<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_e908293046572d2ab99b325b7eaa897d71e23a875eb0e3ae7b37a24e1300f26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_7a4b36e7faa2704f7c03af454c4b1f0d09bb743dd7b09691422fb488179ee1a4 = $this->env->getExtension("native_profiler");
        $__internal_7a4b36e7faa2704f7c03af454c4b1f0d09bb743dd7b09691422fb488179ee1a4->enter($__internal_7a4b36e7faa2704f7c03af454c4b1f0d09bb743dd7b09691422fb488179ee1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4b36e7faa2704f7c03af454c4b1f0d09bb743dd7b09691422fb488179ee1a4->leave($__internal_7a4b36e7faa2704f7c03af454c4b1f0d09bb743dd7b09691422fb488179ee1a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c4f507a3597910d9d1b61f8e2bdd1bdb8e481f7b515f9bd211ae3d0046c3e43 = $this->env->getExtension("native_profiler");
        $__internal_7c4f507a3597910d9d1b61f8e2bdd1bdb8e481f7b515f9bd211ae3d0046c3e43->enter($__internal_7c4f507a3597910d9d1b61f8e2bdd1bdb8e481f7b515f9bd211ae3d0046c3e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7c4f507a3597910d9d1b61f8e2bdd1bdb8e481f7b515f9bd211ae3d0046c3e43->leave($__internal_7c4f507a3597910d9d1b61f8e2bdd1bdb8e481f7b515f9bd211ae3d0046c3e43_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
