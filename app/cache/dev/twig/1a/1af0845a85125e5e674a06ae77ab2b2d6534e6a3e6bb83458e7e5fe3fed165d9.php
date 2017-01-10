<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_937cc866af1a472e290da8ee082b079bb315e77f9d38458ca81c7a535bed3621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_65ba8940f37a17975bc7b8ee615864903ca182d6691222ee9a82a301f93c0e61 = $this->env->getExtension("native_profiler");
        $__internal_65ba8940f37a17975bc7b8ee615864903ca182d6691222ee9a82a301f93c0e61->enter($__internal_65ba8940f37a17975bc7b8ee615864903ca182d6691222ee9a82a301f93c0e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ba8940f37a17975bc7b8ee615864903ca182d6691222ee9a82a301f93c0e61->leave($__internal_65ba8940f37a17975bc7b8ee615864903ca182d6691222ee9a82a301f93c0e61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a5e6fdda50e730c38fe41af4d88855967109fcd1f7d4d7e0cbf9e1c5026a505 = $this->env->getExtension("native_profiler");
        $__internal_3a5e6fdda50e730c38fe41af4d88855967109fcd1f7d4d7e0cbf9e1c5026a505->enter($__internal_3a5e6fdda50e730c38fe41af4d88855967109fcd1f7d4d7e0cbf9e1c5026a505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_3a5e6fdda50e730c38fe41af4d88855967109fcd1f7d4d7e0cbf9e1c5026a505->leave($__internal_3a5e6fdda50e730c38fe41af4d88855967109fcd1f7d4d7e0cbf9e1c5026a505_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
