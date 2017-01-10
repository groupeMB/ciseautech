<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_06085d3a3b90a7f29ae3590376e8b53234195e6a66ba0bc3c6ad0544efaccb92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_efc4a785f34b855d45377286dcdc0564c456c5f657015bc86d8792c555639e29 = $this->env->getExtension("native_profiler");
        $__internal_efc4a785f34b855d45377286dcdc0564c456c5f657015bc86d8792c555639e29->enter($__internal_efc4a785f34b855d45377286dcdc0564c456c5f657015bc86d8792c555639e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc4a785f34b855d45377286dcdc0564c456c5f657015bc86d8792c555639e29->leave($__internal_efc4a785f34b855d45377286dcdc0564c456c5f657015bc86d8792c555639e29_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_072c16ed3a8a6a7014bf2d32fa2d6060a1217e67e6803efa72165c09b7fb90b4 = $this->env->getExtension("native_profiler");
        $__internal_072c16ed3a8a6a7014bf2d32fa2d6060a1217e67e6803efa72165c09b7fb90b4->enter($__internal_072c16ed3a8a6a7014bf2d32fa2d6060a1217e67e6803efa72165c09b7fb90b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

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
        
        $__internal_072c16ed3a8a6a7014bf2d32fa2d6060a1217e67e6803efa72165c09b7fb90b4->leave($__internal_072c16ed3a8a6a7014bf2d32fa2d6060a1217e67e6803efa72165c09b7fb90b4_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4eab72afc90f7fd26d4d21f34b057ef715885b8cd15ce782eb73f9685347c969 = $this->env->getExtension("native_profiler");
        $__internal_4eab72afc90f7fd26d4d21f34b057ef715885b8cd15ce782eb73f9685347c969->enter($__internal_4eab72afc90f7fd26d4d21f34b057ef715885b8cd15ce782eb73f9685347c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_4eab72afc90f7fd26d4d21f34b057ef715885b8cd15ce782eb73f9685347c969->leave($__internal_4eab72afc90f7fd26d4d21f34b057ef715885b8cd15ce782eb73f9685347c969_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
