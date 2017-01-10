<?php

/* @SonataUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_49f0c611448cbaf18952b145424bb65a2d9b6c567af73c42b80fe7c8e207781b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "@SonataUser/ChangePassword/changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d7a0d25ea9645770d7111710205bf20f69a61de0c1f734c98ffbd4ae50f444e = $this->env->getExtension("native_profiler");
        $__internal_8d7a0d25ea9645770d7111710205bf20f69a61de0c1f734c98ffbd4ae50f444e->enter($__internal_8d7a0d25ea9645770d7111710205bf20f69a61de0c1f734c98ffbd4ae50f444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d7a0d25ea9645770d7111710205bf20f69a61de0c1f734c98ffbd4ae50f444e->leave($__internal_8d7a0d25ea9645770d7111710205bf20f69a61de0c1f734c98ffbd4ae50f444e_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_f146b288dd71a05ae36803f51a3c23b28d2a893fe6d3e7ea38c8a7b840eb12e9 = $this->env->getExtension("native_profiler");
        $__internal_f146b288dd71a05ae36803f51a3c23b28d2a893fe6d3e7ea38c8a7b840eb12e9->enter($__internal_f146b288dd71a05ae36803f51a3c23b28d2a893fe6d3e7ea38c8a7b840eb12e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_f146b288dd71a05ae36803f51a3c23b28d2a893fe6d3e7ea38c8a7b840eb12e9->leave($__internal_f146b288dd71a05ae36803f51a3c23b28d2a893fe6d3e7ea38c8a7b840eb12e9_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_620ad3c7c2e5ace34b635a657efbfb883933516e96ddc61831511c3953ec47bf = $this->env->getExtension("native_profiler");
        $__internal_620ad3c7c2e5ace34b635a657efbfb883933516e96ddc61831511c3953ec47bf->enter($__internal_620ad3c7c2e5ace34b635a657efbfb883933516e96ddc61831511c3953ec47bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "@SonataUser/ChangePassword/changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_620ad3c7c2e5ace34b635a657efbfb883933516e96ddc61831511c3953ec47bf->leave($__internal_620ad3c7c2e5ace34b635a657efbfb883933516e96ddc61831511c3953ec47bf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_edit_password\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% block fos_user_content %}
                {% include \"SonataUserBundle:ChangePassword:changePassword_content.html.twig\" %}
            {% endblock fos_user_content %}
        </div>
    </div>
{% endblock sonata_profile_content %}
";
    }
}
