<?php

/* @SonataUser/Admin/Security/Resetting/checkEmail.html.twig */
class __TwigTemplate_56863598e9bda67ca882de4fb978e3000d070da66f12c6f714eaf2dd8ea1c804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24d755656fe235bed70f79201044dbc47ccf3d928888206245dd2b0b3209a8c9 = $this->env->getExtension("native_profiler");
        $__internal_24d755656fe235bed70f79201044dbc47ccf3d928888206245dd2b0b3209a8c9->enter($__internal_24d755656fe235bed70f79201044dbc47ccf3d928888206245dd2b0b3209a8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24d755656fe235bed70f79201044dbc47ccf3d928888206245dd2b0b3209a8c9->leave($__internal_24d755656fe235bed70f79201044dbc47ccf3d928888206245dd2b0b3209a8c9_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c658ccd60cf6240328e61dc246567b24d404c3c54808b65f462331a45ca67e1c = $this->env->getExtension("native_profiler");
        $__internal_c658ccd60cf6240328e61dc246567b24d404c3c54808b65f462331a45ca67e1c->enter($__internal_c658ccd60cf6240328e61dc246567b24d404c3c54808b65f462331a45ca67e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c658ccd60cf6240328e61dc246567b24d404c3c54808b65f462331a45ca67e1c->leave($__internal_c658ccd60cf6240328e61dc246567b24d404c3c54808b65f462331a45ca67e1c_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_b6f55761265ae883f18080dd06dcac9ca24d963bd89c51a99c7473a074bd1f82 = $this->env->getExtension("native_profiler");
        $__internal_b6f55761265ae883f18080dd06dcac9ca24d963bd89c51a99c7473a074bd1f82->enter($__internal_b6f55761265ae883f18080dd06dcac9ca24d963bd89c51a99c7473a074bd1f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_b6f55761265ae883f18080dd06dcac9ca24d963bd89c51a99c7473a074bd1f82->leave($__internal_b6f55761265ae883f18080dd06dcac9ca24d963bd89c51a99c7473a074bd1f82_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_9e9c02b598e89dd16795f372a0449661b1d0411db19b121bc701a8214d74c92a = $this->env->getExtension("native_profiler");
        $__internal_9e9c02b598e89dd16795f372a0449661b1d0411db19b121bc701a8214d74c92a->enter($__internal_9e9c02b598e89dd16795f372a0449661b1d0411db19b121bc701a8214d74c92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_9e9c02b598e89dd16795f372a0449661b1d0411db19b121bc701a8214d74c92a->leave($__internal_9e9c02b598e89dd16795f372a0449661b1d0411db19b121bc701a8214d74c92a_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_a954a88a92964050d554231e057a822e54256429605a556897216be21403a416 = $this->env->getExtension("native_profiler");
        $__internal_a954a88a92964050d554231e057a822e54256429605a556897216be21403a416->enter($__internal_a954a88a92964050d554231e057a822e54256429605a556897216be21403a416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_a954a88a92964050d554231e057a822e54256429605a556897216be21403a416->leave($__internal_a954a88a92964050d554231e057a822e54256429605a556897216be21403a416_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_cfcaf18f2a43b6cedb5e6778d3ead907fd0f10cd8c665481f73246e675d84abb = $this->env->getExtension("native_profiler");
        $__internal_cfcaf18f2a43b6cedb5e6778d3ead907fd0f10cd8c665481f73246e675d84abb->enter($__internal_cfcaf18f2a43b6cedb5e6778d3ead907fd0f10cd8c665481f73246e675d84abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 15
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 19
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 20
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            <p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
        
        $__internal_cfcaf18f2a43b6cedb5e6778d3ead907fd0f10cd8c665481f73246e675d84abb->leave($__internal_cfcaf18f2a43b6cedb5e6778d3ead907fd0f10cd8c665481f73246e675d84abb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  110 => 25,  105 => 22,  99 => 20,  97 => 19,  93 => 18,  88 => 15,  82 => 14,  70 => 12,  59 => 9,  48 => 6,  37 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}
                    <span>{{ admin_pool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
";
    }
}
