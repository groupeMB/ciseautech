<?php

/* @SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_d137a6d188530521d18c8345e5aca6bae6cb4951064e89dc67563f1788777f24 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f0c3022200772498dacf844cdab1e5d24aa0c506ce717acca3de05d7b45b525 = $this->env->getExtension("native_profiler");
        $__internal_9f0c3022200772498dacf844cdab1e5d24aa0c506ce717acca3de05d7b45b525->enter($__internal_9f0c3022200772498dacf844cdab1e5d24aa0c506ce717acca3de05d7b45b525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0c3022200772498dacf844cdab1e5d24aa0c506ce717acca3de05d7b45b525->leave($__internal_9f0c3022200772498dacf844cdab1e5d24aa0c506ce717acca3de05d7b45b525_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_dd3290e041f426ca19e3eba96d5693da76d9ecdf64c6e3b69a7d0e7c4e3e3371 = $this->env->getExtension("native_profiler");
        $__internal_dd3290e041f426ca19e3eba96d5693da76d9ecdf64c6e3b69a7d0e7c4e3e3371->enter($__internal_dd3290e041f426ca19e3eba96d5693da76d9ecdf64c6e3b69a7d0e7c4e3e3371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_dd3290e041f426ca19e3eba96d5693da76d9ecdf64c6e3b69a7d0e7c4e3e3371->leave($__internal_dd3290e041f426ca19e3eba96d5693da76d9ecdf64c6e3b69a7d0e7c4e3e3371_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_cdb19616b59c1324b9fe22c8940b64bac90af5814496110827941b8ca3ae1e1f = $this->env->getExtension("native_profiler");
        $__internal_cdb19616b59c1324b9fe22c8940b64bac90af5814496110827941b8ca3ae1e1f->enter($__internal_cdb19616b59c1324b9fe22c8940b64bac90af5814496110827941b8ca3ae1e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_cdb19616b59c1324b9fe22c8940b64bac90af5814496110827941b8ca3ae1e1f->leave($__internal_cdb19616b59c1324b9fe22c8940b64bac90af5814496110827941b8ca3ae1e1f_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_baba793689db6453c094d31b1f47012be91d1eabbc1fce336c46291a6d160207 = $this->env->getExtension("native_profiler");
        $__internal_baba793689db6453c094d31b1f47012be91d1eabbc1fce336c46291a6d160207->enter($__internal_baba793689db6453c094d31b1f47012be91d1eabbc1fce336c46291a6d160207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_baba793689db6453c094d31b1f47012be91d1eabbc1fce336c46291a6d160207->leave($__internal_baba793689db6453c094d31b1f47012be91d1eabbc1fce336c46291a6d160207_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_fe72d677d296274ebbf433e7eece7c059705008516f272d1dc5e0b486e3b77ec = $this->env->getExtension("native_profiler");
        $__internal_fe72d677d296274ebbf433e7eece7c059705008516f272d1dc5e0b486e3b77ec->enter($__internal_fe72d677d296274ebbf433e7eece7c059705008516f272d1dc5e0b486e3b77ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_fe72d677d296274ebbf433e7eece7c059705008516f272d1dc5e0b486e3b77ec->leave($__internal_fe72d677d296274ebbf433e7eece7c059705008516f272d1dc5e0b486e3b77ec_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_d4400635360881c275ba424d868cd4877e63c090276649180b0d255b5ce71210 = $this->env->getExtension("native_profiler");
        $__internal_d4400635360881c275ba424d868cd4877e63c090276649180b0d255b5ce71210->enter($__internal_d4400635360881c275ba424d868cd4877e63c090276649180b0d255b5ce71210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_d4400635360881c275ba424d868cd4877e63c090276649180b0d255b5ce71210->leave($__internal_d4400635360881c275ba424d868cd4877e63c090276649180b0d255b5ce71210_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig";
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
            <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
";
    }
}
