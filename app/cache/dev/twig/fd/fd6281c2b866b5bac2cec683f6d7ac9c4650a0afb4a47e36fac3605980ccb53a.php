<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_88f03f425ebdfb57c335a1b3c1b4f54ad311c3cca205bf39f93686ac913f8325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e65a6ce94537c4b2cda83cd4f00d72aa2aec84f35b64b6f2648135e3511274c1 = $this->env->getExtension("native_profiler");
        $__internal_e65a6ce94537c4b2cda83cd4f00d72aa2aec84f35b64b6f2648135e3511274c1->enter($__internal_e65a6ce94537c4b2cda83cd4f00d72aa2aec84f35b64b6f2648135e3511274c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_e65a6ce94537c4b2cda83cd4f00d72aa2aec84f35b64b6f2648135e3511274c1->leave($__internal_e65a6ce94537c4b2cda83cd4f00d72aa2aec84f35b64b6f2648135e3511274c1_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_e6bbb3f96127c3553fb90ac1a41808985581aa3e22565a51f3f8ed5c2ca47b7e = $this->env->getExtension("native_profiler");
        $__internal_e6bbb3f96127c3553fb90ac1a41808985581aa3e22565a51f3f8ed5c2ca47b7e->enter($__internal_e6bbb3f96127c3553fb90ac1a41808985581aa3e22565a51f3f8ed5c2ca47b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_e6bbb3f96127c3553fb90ac1a41808985581aa3e22565a51f3f8ed5c2ca47b7e->leave($__internal_e6bbb3f96127c3553fb90ac1a41808985581aa3e22565a51f3f8ed5c2ca47b7e_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_2a11a0f8b9f4d3c1a2e3e7b13558de0765f337c38d419de74a6a97e532f43d4e = $this->env->getExtension("native_profiler");
        $__internal_2a11a0f8b9f4d3c1a2e3e7b13558de0765f337c38d419de74a6a97e532f43d4e->enter($__internal_2a11a0f8b9f4d3c1a2e3e7b13558de0765f337c38d419de74a6a97e532f43d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_2a11a0f8b9f4d3c1a2e3e7b13558de0765f337c38d419de74a6a97e532f43d4e->leave($__internal_2a11a0f8b9f4d3c1a2e3e7b13558de0765f337c38d419de74a6a97e532f43d4e_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_25204ce7986025487c83ae6fedad8c5772455d8f4f58c81c32d2deae047aa79e = $this->env->getExtension("native_profiler");
        $__internal_25204ce7986025487c83ae6fedad8c5772455d8f4f58c81c32d2deae047aa79e->enter($__internal_25204ce7986025487c83ae6fedad8c5772455d8f4f58c81c32d2deae047aa79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_25204ce7986025487c83ae6fedad8c5772455d8f4f58c81c32d2deae047aa79e->leave($__internal_25204ce7986025487c83ae6fedad8c5772455d8f4f58c81c32d2deae047aa79e_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_26ab21ec1b9ace6f4426edbb775e892a355b54f725ae6112b0d1b602985f39d9 = $this->env->getExtension("native_profiler");
        $__internal_26ab21ec1b9ace6f4426edbb775e892a355b54f725ae6112b0d1b602985f39d9->enter($__internal_26ab21ec1b9ace6f4426edbb775e892a355b54f725ae6112b0d1b602985f39d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_26ab21ec1b9ace6f4426edbb775e892a355b54f725ae6112b0d1b602985f39d9->leave($__internal_26ab21ec1b9ace6f4426edbb775e892a355b54f725ae6112b0d1b602985f39d9_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block sonata_page_breadcrumb %}
    {% if breadcrumb_context is not defined %}
        {% set breadcrumb_context = 'user_index' %}
    {% endif %}
    <div class=\"row-fluid clearfix\">
        {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}
    </div>
{% endblock %}

<h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        {% block sonata_profile_menu %}
            {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}
        {% endblock %}
    </div>

    <div class=\"span10 col-lg-10\">
        {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}

        {% block sonata_profile_content '' %}
    </div>

</div>
";
    }
}
