<?php

/* @SonataUser/Admin/Security/Resetting/request.html.twig */
class __TwigTemplate_fde580d1e6b1f3209c4c3c52fbbe26382b4bf56205e915bd10ea1b7440a93d39 extends Twig_Template
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
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_715342e206ca4c3eb78c239163791cc7830bbb8a00d62c1953112856cfd811f3 = $this->env->getExtension("native_profiler");
        $__internal_715342e206ca4c3eb78c239163791cc7830bbb8a00d62c1953112856cfd811f3->enter($__internal_715342e206ca4c3eb78c239163791cc7830bbb8a00d62c1953112856cfd811f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715342e206ca4c3eb78c239163791cc7830bbb8a00d62c1953112856cfd811f3->leave($__internal_715342e206ca4c3eb78c239163791cc7830bbb8a00d62c1953112856cfd811f3_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b99b50c41c909f9bf2af8e0963d7e0c8934162add7e6fc3cc2bd29928ac8d749 = $this->env->getExtension("native_profiler");
        $__internal_b99b50c41c909f9bf2af8e0963d7e0c8934162add7e6fc3cc2bd29928ac8d749->enter($__internal_b99b50c41c909f9bf2af8e0963d7e0c8934162add7e6fc3cc2bd29928ac8d749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b99b50c41c909f9bf2af8e0963d7e0c8934162add7e6fc3cc2bd29928ac8d749->leave($__internal_b99b50c41c909f9bf2af8e0963d7e0c8934162add7e6fc3cc2bd29928ac8d749_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_df4c475f4ae1f15090aea77207a1fc74c90ff1c61344a460d72e168c4192c57f = $this->env->getExtension("native_profiler");
        $__internal_df4c475f4ae1f15090aea77207a1fc74c90ff1c61344a460d72e168c4192c57f->enter($__internal_df4c475f4ae1f15090aea77207a1fc74c90ff1c61344a460d72e168c4192c57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_df4c475f4ae1f15090aea77207a1fc74c90ff1c61344a460d72e168c4192c57f->leave($__internal_df4c475f4ae1f15090aea77207a1fc74c90ff1c61344a460d72e168c4192c57f_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_454e7693ca9d244b6a961a1ad6f5cb2af4e07128d84b97477711910d21ac467b = $this->env->getExtension("native_profiler");
        $__internal_454e7693ca9d244b6a961a1ad6f5cb2af4e07128d84b97477711910d21ac467b->enter($__internal_454e7693ca9d244b6a961a1ad6f5cb2af4e07128d84b97477711910d21ac467b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_454e7693ca9d244b6a961a1ad6f5cb2af4e07128d84b97477711910d21ac467b->leave($__internal_454e7693ca9d244b6a961a1ad6f5cb2af4e07128d84b97477711910d21ac467b_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_3172ef7e50d29fddca05f82b6814b4e3292379d028a532846cead5c01600eca3 = $this->env->getExtension("native_profiler");
        $__internal_3172ef7e50d29fddca05f82b6814b4e3292379d028a532846cead5c01600eca3->enter($__internal_3172ef7e50d29fddca05f82b6814b4e3292379d028a532846cead5c01600eca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_3172ef7e50d29fddca05f82b6814b4e3292379d028a532846cead5c01600eca3->leave($__internal_3172ef7e50d29fddca05f82b6814b4e3292379d028a532846cead5c01600eca3_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_6fee20cfc4dc85c711d4764797bcf00edc1401e9c6115429dced26709fb8ab12 = $this->env->getExtension("native_profiler");
        $__internal_6fee20cfc4dc85c711d4764797bcf00edc1401e9c6115429dced26709fb8ab12->enter($__internal_6fee20cfc4dc85c711d4764797bcf00edc1401e9c6115429dced26709fb8ab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
            ";
        // line 25
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_6fee20cfc4dc85c711d4764797bcf00edc1401e9c6115429dced26709fb8ab12->leave($__internal_6fee20cfc4dc85c711d4764797bcf00edc1401e9c6115429dced26709fb8ab12_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_23079c5172eede635f9170f469eb9a73a74ac47d72bcda4fa53be1d947bec4ab = $this->env->getExtension("native_profiler");
        $__internal_23079c5172eede635f9170f469eb9a73a74ac47d72bcda4fa53be1d947bec4ab->enter($__internal_23079c5172eede635f9170f469eb9a73a74ac47d72bcda4fa53be1d947bec4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 26
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 31
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_23079c5172eede635f9170f469eb9a73a74ac47d72bcda4fa53be1d947bec4ab->leave($__internal_23079c5172eede635f9170f469eb9a73a74ac47d72bcda4fa53be1d947bec4ab_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_9b612c4e6e748acd438432aa8a74bb25924e391acd24413fbb7be64cb773e54f = $this->env->getExtension("native_profiler");
        $__internal_9b612c4e6e748acd438432aa8a74bb25924e391acd24413fbb7be64cb773e54f->enter($__internal_9b612c4e6e748acd438432aa8a74bb25924e391acd24413fbb7be64cb773e54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 27
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 28
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 30
        echo "                ";
        
        $__internal_9b612c4e6e748acd438432aa8a74bb25924e391acd24413fbb7be64cb773e54f->leave($__internal_9b612c4e6e748acd438432aa8a74bb25924e391acd24413fbb7be64cb773e54f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 30,  180 => 28,  177 => 27,  171 => 26,  160 => 45,  152 => 40,  143 => 34,  138 => 32,  133 => 31,  130 => 26,  124 => 25,  114 => 47,  112 => 25,  107 => 22,  101 => 20,  99 => 19,  95 => 18,  90 => 15,  84 => 14,  72 => 12,  61 => 9,  50 => 6,  39 => 3,  24 => 1,);
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
            {% block sonata_user_reset_request_form %}
                {% block sonata_user_reset_request_error %}
                    {% if invalid_username is defined %}
                        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_send_email') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
";
    }
}
