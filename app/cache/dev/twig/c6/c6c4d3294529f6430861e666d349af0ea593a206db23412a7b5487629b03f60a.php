<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_a2d68d35069e1d347e16eeed9ece12055138cd7f740847b6e6811ba293be5d74 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd9b08bfbc1e97eef88ed223941a108273381bacbfcf0792fa38b5ce315f53e0 = $this->env->getExtension("native_profiler");
        $__internal_fd9b08bfbc1e97eef88ed223941a108273381bacbfcf0792fa38b5ce315f53e0->enter($__internal_fd9b08bfbc1e97eef88ed223941a108273381bacbfcf0792fa38b5ce315f53e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd9b08bfbc1e97eef88ed223941a108273381bacbfcf0792fa38b5ce315f53e0->leave($__internal_fd9b08bfbc1e97eef88ed223941a108273381bacbfcf0792fa38b5ce315f53e0_prof);

    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_8791177dc2794b0fe3f8c275dd6ac82c892931c61d52f4dc692ed4ef3dea731a = $this->env->getExtension("native_profiler");
        $__internal_8791177dc2794b0fe3f8c275dd6ac82c892931c61d52f4dc692ed4ef3dea731a->enter($__internal_8791177dc2794b0fe3f8c275dd6ac82c892931c61d52f4dc692ed4ef3dea731a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_8791177dc2794b0fe3f8c275dd6ac82c892931c61d52f4dc692ed4ef3dea731a->leave($__internal_8791177dc2794b0fe3f8c275dd6ac82c892931c61d52f4dc692ed4ef3dea731a_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_a81c21c2badbaf253d358e8ebc2d80e960258295ce52cbf84832403dd07ae7fb = $this->env->getExtension("native_profiler");
        $__internal_a81c21c2badbaf253d358e8ebc2d80e960258295ce52cbf84832403dd07ae7fb->enter($__internal_a81c21c2badbaf253d358e8ebc2d80e960258295ce52cbf84832403dd07ae7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_a81c21c2badbaf253d358e8ebc2d80e960258295ce52cbf84832403dd07ae7fb->leave($__internal_a81c21c2badbaf253d358e8ebc2d80e960258295ce52cbf84832403dd07ae7fb_prof);

    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_80b843c7b1b494d32e19c6bc2c373f4c1d8cc7c1cc3c1ef852a6f20d190fc0ef = $this->env->getExtension("native_profiler");
        $__internal_80b843c7b1b494d32e19c6bc2c373f4c1d8cc7c1cc3c1ef852a6f20d190fc0ef->enter($__internal_80b843c7b1b494d32e19c6bc2c373f4c1d8cc7c1cc3c1ef852a6f20d190fc0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_80b843c7b1b494d32e19c6bc2c373f4c1d8cc7c1cc3c1ef852a6f20d190fc0ef->leave($__internal_80b843c7b1b494d32e19c6bc2c373f4c1d8cc7c1cc3c1ef852a6f20d190fc0ef_prof);

    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_052ca6e29358770111123511e71d7a4805f7ffd8a4019d79b4851f73301f3ae7 = $this->env->getExtension("native_profiler");
        $__internal_052ca6e29358770111123511e71d7a4805f7ffd8a4019d79b4851f73301f3ae7->enter($__internal_052ca6e29358770111123511e71d7a4805f7ffd8a4019d79b4851f73301f3ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_052ca6e29358770111123511e71d7a4805f7ffd8a4019d79b4851f73301f3ae7->leave($__internal_052ca6e29358770111123511e71d7a4805f7ffd8a4019d79b4851f73301f3ae7_prof);

    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_314bf2d7db2ce1bb4ae215e6a729638ac65aae3772cc6b32bbed715feb5c6bfd = $this->env->getExtension("native_profiler");
        $__internal_314bf2d7db2ce1bb4ae215e6a729638ac65aae3772cc6b32bbed715feb5c6bfd->enter($__internal_314bf2d7db2ce1bb4ae215e6a729638ac65aae3772cc6b32bbed715feb5c6bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_314bf2d7db2ce1bb4ae215e6a729638ac65aae3772cc6b32bbed715feb5c6bfd->leave($__internal_314bf2d7db2ce1bb4ae215e6a729638ac65aae3772cc6b32bbed715feb5c6bfd_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
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
