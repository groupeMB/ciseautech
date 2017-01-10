<?php

/* @SonataUser/Admin/Security/Resetting/reset.html.twig */
class __TwigTemplate_1f8670443a087415b3218eeefe76be4baf80eefb10ca734786007481b634b31e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/reset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1a436da29eb56f4a310a8f459e95e786bf752e9cdc337ad446f78c00649d829 = $this->env->getExtension("native_profiler");
        $__internal_a1a436da29eb56f4a310a8f459e95e786bf752e9cdc337ad446f78c00649d829->enter($__internal_a1a436da29eb56f4a310a8f459e95e786bf752e9cdc337ad446f78c00649d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a436da29eb56f4a310a8f459e95e786bf752e9cdc337ad446f78c00649d829->leave($__internal_a1a436da29eb56f4a310a8f459e95e786bf752e9cdc337ad446f78c00649d829_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_39a46fb121af8a02c27f3327bd1db9ade19a02fd5b7de84e151b88ec1c7f9fb0 = $this->env->getExtension("native_profiler");
        $__internal_39a46fb121af8a02c27f3327bd1db9ade19a02fd5b7de84e151b88ec1c7f9fb0->enter($__internal_39a46fb121af8a02c27f3327bd1db9ade19a02fd5b7de84e151b88ec1c7f9fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_39a46fb121af8a02c27f3327bd1db9ade19a02fd5b7de84e151b88ec1c7f9fb0->leave($__internal_39a46fb121af8a02c27f3327bd1db9ade19a02fd5b7de84e151b88ec1c7f9fb0_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_c1adad02b42245ea620b91b785b716d7ddb29982cf21b17b1c754943de81b711 = $this->env->getExtension("native_profiler");
        $__internal_c1adad02b42245ea620b91b785b716d7ddb29982cf21b17b1c754943de81b711->enter($__internal_c1adad02b42245ea620b91b785b716d7ddb29982cf21b17b1c754943de81b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_c1adad02b42245ea620b91b785b716d7ddb29982cf21b17b1c754943de81b711->leave($__internal_c1adad02b42245ea620b91b785b716d7ddb29982cf21b17b1c754943de81b711_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ba9fee3282639bac6d688ae4cddb86e58179ca9c839de7546c6435d135bdb9f1 = $this->env->getExtension("native_profiler");
        $__internal_ba9fee3282639bac6d688ae4cddb86e58179ca9c839de7546c6435d135bdb9f1->enter($__internal_ba9fee3282639bac6d688ae4cddb86e58179ca9c839de7546c6435d135bdb9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ba9fee3282639bac6d688ae4cddb86e58179ca9c839de7546c6435d135bdb9f1->leave($__internal_ba9fee3282639bac6d688ae4cddb86e58179ca9c839de7546c6435d135bdb9f1_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_b83e976d0a9c84cc3cc6cbc0bf1588dfe413ad49b6960406918c9884405e35b5 = $this->env->getExtension("native_profiler");
        $__internal_b83e976d0a9c84cc3cc6cbc0bf1588dfe413ad49b6960406918c9884405e35b5->enter($__internal_b83e976d0a9c84cc3cc6cbc0bf1588dfe413ad49b6960406918c9884405e35b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_b83e976d0a9c84cc3cc6cbc0bf1588dfe413ad49b6960406918c9884405e35b5->leave($__internal_b83e976d0a9c84cc3cc6cbc0bf1588dfe413ad49b6960406918c9884405e35b5_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f455026ed4110216d6165270caddc53bb5cb187f04ef682aa04e69325927d62f = $this->env->getExtension("native_profiler");
        $__internal_f455026ed4110216d6165270caddc53bb5cb187f04ef682aa04e69325927d62f->enter($__internal_f455026ed4110216d6165270caddc53bb5cb187f04ef682aa04e69325927d62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_f455026ed4110216d6165270caddc53bb5cb187f04ef682aa04e69325927d62f->leave($__internal_f455026ed4110216d6165270caddc53bb5cb187f04ef682aa04e69325927d62f_prof);

    }

    // line 25
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_4b7c6c8ae2a239f8b7be5855fc645429fe029d99a20ed392c5d3fa11b6e31187 = $this->env->getExtension("native_profiler");
        $__internal_4b7c6c8ae2a239f8b7be5855fc645429fe029d99a20ed392c5d3fa11b6e31187->enter($__internal_4b7c6c8ae2a239f8b7be5855fc645429fe029d99a20ed392c5d3fa11b6e31187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

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
        
        $__internal_4b7c6c8ae2a239f8b7be5855fc645429fe029d99a20ed392c5d3fa11b6e31187->leave($__internal_4b7c6c8ae2a239f8b7be5855fc645429fe029d99a20ed392c5d3fa11b6e31187_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/reset.html.twig";
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
