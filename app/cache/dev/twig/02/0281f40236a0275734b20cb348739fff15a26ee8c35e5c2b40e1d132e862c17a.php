<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_02c648805f85912194b9d5b57f799ee74cf86188bd0e6ed0cb7aefed928d9a4c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:request.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8b11bd2ac141437194e6661ed4768bd1542fc1dbb8d289ff01fd9c91688aef6 = $this->env->getExtension("native_profiler");
        $__internal_f8b11bd2ac141437194e6661ed4768bd1542fc1dbb8d289ff01fd9c91688aef6->enter($__internal_f8b11bd2ac141437194e6661ed4768bd1542fc1dbb8d289ff01fd9c91688aef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b11bd2ac141437194e6661ed4768bd1542fc1dbb8d289ff01fd9c91688aef6->leave($__internal_f8b11bd2ac141437194e6661ed4768bd1542fc1dbb8d289ff01fd9c91688aef6_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6b964244d4183b27249b4f900605b2c46fc52d3342f2b2e44713d21601ecf5ab = $this->env->getExtension("native_profiler");
        $__internal_6b964244d4183b27249b4f900605b2c46fc52d3342f2b2e44713d21601ecf5ab->enter($__internal_6b964244d4183b27249b4f900605b2c46fc52d3342f2b2e44713d21601ecf5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_6b964244d4183b27249b4f900605b2c46fc52d3342f2b2e44713d21601ecf5ab->leave($__internal_6b964244d4183b27249b4f900605b2c46fc52d3342f2b2e44713d21601ecf5ab_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_008877fa56c93cd205df9e1ced2dbaa87f57a216fe22b92ab3a23c2a17cc6493 = $this->env->getExtension("native_profiler");
        $__internal_008877fa56c93cd205df9e1ced2dbaa87f57a216fe22b92ab3a23c2a17cc6493->enter($__internal_008877fa56c93cd205df9e1ced2dbaa87f57a216fe22b92ab3a23c2a17cc6493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_008877fa56c93cd205df9e1ced2dbaa87f57a216fe22b92ab3a23c2a17cc6493->leave($__internal_008877fa56c93cd205df9e1ced2dbaa87f57a216fe22b92ab3a23c2a17cc6493_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_07d0d12297e6b114e11234c5c50ad3a18e5f6b9613a4b8168c1524a28a5b7947 = $this->env->getExtension("native_profiler");
        $__internal_07d0d12297e6b114e11234c5c50ad3a18e5f6b9613a4b8168c1524a28a5b7947->enter($__internal_07d0d12297e6b114e11234c5c50ad3a18e5f6b9613a4b8168c1524a28a5b7947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_07d0d12297e6b114e11234c5c50ad3a18e5f6b9613a4b8168c1524a28a5b7947->leave($__internal_07d0d12297e6b114e11234c5c50ad3a18e5f6b9613a4b8168c1524a28a5b7947_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_e06ce986f20fdabd909b943339c52992aa1361053ec7a27e683a2043ea3941a5 = $this->env->getExtension("native_profiler");
        $__internal_e06ce986f20fdabd909b943339c52992aa1361053ec7a27e683a2043ea3941a5->enter($__internal_e06ce986f20fdabd909b943339c52992aa1361053ec7a27e683a2043ea3941a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_e06ce986f20fdabd909b943339c52992aa1361053ec7a27e683a2043ea3941a5->leave($__internal_e06ce986f20fdabd909b943339c52992aa1361053ec7a27e683a2043ea3941a5_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_577688064c8b87f546ba7d6c4211b949975d4e472ddd6894457332e2d5426f6f = $this->env->getExtension("native_profiler");
        $__internal_577688064c8b87f546ba7d6c4211b949975d4e472ddd6894457332e2d5426f6f->enter($__internal_577688064c8b87f546ba7d6c4211b949975d4e472ddd6894457332e2d5426f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_577688064c8b87f546ba7d6c4211b949975d4e472ddd6894457332e2d5426f6f->leave($__internal_577688064c8b87f546ba7d6c4211b949975d4e472ddd6894457332e2d5426f6f_prof);

    }

    // line 25
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_17c358347f4f4ee43f34a3177c4c22bd5334a7d5991a313aba99c53dba41772c = $this->env->getExtension("native_profiler");
        $__internal_17c358347f4f4ee43f34a3177c4c22bd5334a7d5991a313aba99c53dba41772c->enter($__internal_17c358347f4f4ee43f34a3177c4c22bd5334a7d5991a313aba99c53dba41772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

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
        
        $__internal_17c358347f4f4ee43f34a3177c4c22bd5334a7d5991a313aba99c53dba41772c->leave($__internal_17c358347f4f4ee43f34a3177c4c22bd5334a7d5991a313aba99c53dba41772c_prof);

    }

    // line 26
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_2b059c0008922af79929726ab1cbaa1d214bde582fb69f895fcf206a0dc2ea43 = $this->env->getExtension("native_profiler");
        $__internal_2b059c0008922af79929726ab1cbaa1d214bde582fb69f895fcf206a0dc2ea43->enter($__internal_2b059c0008922af79929726ab1cbaa1d214bde582fb69f895fcf206a0dc2ea43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

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
        
        $__internal_2b059c0008922af79929726ab1cbaa1d214bde582fb69f895fcf206a0dc2ea43->leave($__internal_2b059c0008922af79929726ab1cbaa1d214bde582fb69f895fcf206a0dc2ea43_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:request.html.twig";
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
