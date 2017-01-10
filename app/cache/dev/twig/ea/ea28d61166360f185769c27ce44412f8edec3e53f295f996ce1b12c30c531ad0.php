<?php

/* SonataUserBundle:Admin/Security/Resetting:reset.html.twig */
class __TwigTemplate_65144322d2ad9b062420637f0819d5bc0f8f19225173a65f937a74d8b9ad646f extends Twig_Template
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
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6de7274cc8af9d758f52b29f60ec7da00090c96a45eb24eb10ab075b5651c11d = $this->env->getExtension("native_profiler");
        $__internal_6de7274cc8af9d758f52b29f60ec7da00090c96a45eb24eb10ab075b5651c11d->enter($__internal_6de7274cc8af9d758f52b29f60ec7da00090c96a45eb24eb10ab075b5651c11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de7274cc8af9d758f52b29f60ec7da00090c96a45eb24eb10ab075b5651c11d->leave($__internal_6de7274cc8af9d758f52b29f60ec7da00090c96a45eb24eb10ab075b5651c11d_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f0abccb44c4586acf77090b709f6c5c8bbbbaa210b1aa7ecc12c30da6b721817 = $this->env->getExtension("native_profiler");
        $__internal_f0abccb44c4586acf77090b709f6c5c8bbbbaa210b1aa7ecc12c30da6b721817->enter($__internal_f0abccb44c4586acf77090b709f6c5c8bbbbaa210b1aa7ecc12c30da6b721817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_f0abccb44c4586acf77090b709f6c5c8bbbbaa210b1aa7ecc12c30da6b721817->leave($__internal_f0abccb44c4586acf77090b709f6c5c8bbbbaa210b1aa7ecc12c30da6b721817_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_80757451b2b5e4b8bce7d1c773310d7aabf2530a9da750594f092da1b39e278b = $this->env->getExtension("native_profiler");
        $__internal_80757451b2b5e4b8bce7d1c773310d7aabf2530a9da750594f092da1b39e278b->enter($__internal_80757451b2b5e4b8bce7d1c773310d7aabf2530a9da750594f092da1b39e278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_80757451b2b5e4b8bce7d1c773310d7aabf2530a9da750594f092da1b39e278b->leave($__internal_80757451b2b5e4b8bce7d1c773310d7aabf2530a9da750594f092da1b39e278b_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_3ba435ae456d205526b42449b5ab8dd5eadc25e862d87ceed972b0908b78dbd8 = $this->env->getExtension("native_profiler");
        $__internal_3ba435ae456d205526b42449b5ab8dd5eadc25e862d87ceed972b0908b78dbd8->enter($__internal_3ba435ae456d205526b42449b5ab8dd5eadc25e862d87ceed972b0908b78dbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_3ba435ae456d205526b42449b5ab8dd5eadc25e862d87ceed972b0908b78dbd8->leave($__internal_3ba435ae456d205526b42449b5ab8dd5eadc25e862d87ceed972b0908b78dbd8_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_00c0bf47fc7b85a61b1ce25282e817b20da6b006883c02bf6dc5e696d2ac536c = $this->env->getExtension("native_profiler");
        $__internal_00c0bf47fc7b85a61b1ce25282e817b20da6b006883c02bf6dc5e696d2ac536c->enter($__internal_00c0bf47fc7b85a61b1ce25282e817b20da6b006883c02bf6dc5e696d2ac536c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_00c0bf47fc7b85a61b1ce25282e817b20da6b006883c02bf6dc5e696d2ac536c->leave($__internal_00c0bf47fc7b85a61b1ce25282e817b20da6b006883c02bf6dc5e696d2ac536c_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_d3f297b539f15a2d7e0fd89bfffec5c78e58f8ada17b667f4fa57f860cacd573 = $this->env->getExtension("native_profiler");
        $__internal_d3f297b539f15a2d7e0fd89bfffec5c78e58f8ada17b667f4fa57f860cacd573->enter($__internal_d3f297b539f15a2d7e0fd89bfffec5c78e58f8ada17b667f4fa57f860cacd573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 43
        echo "        </div>
    </div>

";
        
        $__internal_d3f297b539f15a2d7e0fd89bfffec5c78e58f8ada17b667f4fa57f860cacd573->leave($__internal_d3f297b539f15a2d7e0fd89bfffec5c78e58f8ada17b667f4fa57f860cacd573_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_cf9a6f28f8ce0971d3d2db569f228a372cf59c763683d39fa095493b93610296 = $this->env->getExtension("native_profiler");
        $__internal_cf9a6f28f8ce0971d3d2db569f228a372cf59c763683d39fa095493b93610296->enter($__internal_cf9a6f28f8ce0971d3d2db569f228a372cf59c763683d39fa095493b93610296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

        // line 26
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_admin_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("form.new_password", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('translator')->trans("form.new_password_confirmation", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            ";
        
        $__internal_cf9a6f28f8ce0971d3d2db569f228a372cf59c763683d39fa095493b93610296->leave($__internal_cf9a6f28f8ce0971d3d2db569f228a372cf59c763683d39fa095493b93610296_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 34,  145 => 32,  139 => 29,  134 => 27,  129 => 26,  123 => 25,  113 => 43,  111 => 25,  106 => 22,  100 => 20,  98 => 19,  94 => 18,  89 => 15,  83 => 14,  71 => 12,  60 => 9,  49 => 6,  38 => 3,  23 => 1,);
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
            {% block sonata_user_reset_form %}
                <p class=\"login-box-msg\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_reset', {'token': token}) }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"{{ 'form.new_password'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"{{ 'form.new_password_confirmation'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    {{ form_widget(form._token) }}

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
";
    }
}
