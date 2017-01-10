<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b3642a1de7d5c27a3fd969ce172346cfa59a9c0a19acc95a35388ff0e8cff026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d4f334836b3652dc1ddd304abba3d85b247f9f9f13fbd3dcb8d14c2a7f6f8a63 = $this->env->getExtension("native_profiler");
        $__internal_d4f334836b3652dc1ddd304abba3d85b247f9f9f13fbd3dcb8d14c2a7f6f8a63->enter($__internal_d4f334836b3652dc1ddd304abba3d85b247f9f9f13fbd3dcb8d14c2a7f6f8a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f334836b3652dc1ddd304abba3d85b247f9f9f13fbd3dcb8d14c2a7f6f8a63->leave($__internal_d4f334836b3652dc1ddd304abba3d85b247f9f9f13fbd3dcb8d14c2a7f6f8a63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5ca16c64d17671493d9daec264be9386df88637a7d1c5bbe0cdf7eae57871f3 = $this->env->getExtension("native_profiler");
        $__internal_e5ca16c64d17671493d9daec264be9386df88637a7d1c5bbe0cdf7eae57871f3->enter($__internal_e5ca16c64d17671493d9daec264be9386df88637a7d1c5bbe0cdf7eae57871f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e5ca16c64d17671493d9daec264be9386df88637a7d1c5bbe0cdf7eae57871f3->leave($__internal_e5ca16c64d17671493d9daec264be9386df88637a7d1c5bbe0cdf7eae57871f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
