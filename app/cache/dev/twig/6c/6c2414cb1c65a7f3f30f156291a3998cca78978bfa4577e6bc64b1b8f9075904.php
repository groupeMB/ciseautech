<?php

/* @SonataUser/Profile/action.html.twig */
class __TwigTemplate_fa7401a27cf1ce4597243ba78049df8aec8ce9f886b7838e8299ae691e224c41 extends Twig_Template
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
        $__internal_3d3ed46c388388eaad144802603a00a831820c3193021ec7be5ef8902b99bff3 = $this->env->getExtension("native_profiler");
        $__internal_3d3ed46c388388eaad144802603a00a831820c3193021ec7be5ef8902b99bff3->enter($__internal_3d3ed46c388388eaad144802603a00a831820c3193021ec7be5ef8902b99bff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/action.html.twig"));

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
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataUser/Profile/action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_3d3ed46c388388eaad144802603a00a831820c3193021ec7be5ef8902b99bff3->leave($__internal_3d3ed46c388388eaad144802603a00a831820c3193021ec7be5ef8902b99bff3_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_7354dc10397ff520526673a02c9dbe0abdfad33d71430cf4a070d205e9138f69 = $this->env->getExtension("native_profiler");
        $__internal_7354dc10397ff520526673a02c9dbe0abdfad33d71430cf4a070d205e9138f69->enter($__internal_7354dc10397ff520526673a02c9dbe0abdfad33d71430cf4a070d205e9138f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

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
        
        $__internal_7354dc10397ff520526673a02c9dbe0abdfad33d71430cf4a070d205e9138f69->leave($__internal_7354dc10397ff520526673a02c9dbe0abdfad33d71430cf4a070d205e9138f69_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_9e4fc4eb74cadb3c88e099a6e898096815e8648edb4bddd9d03152581a44491e = $this->env->getExtension("native_profiler");
        $__internal_9e4fc4eb74cadb3c88e099a6e898096815e8648edb4bddd9d03152581a44491e->enter($__internal_9e4fc4eb74cadb3c88e099a6e898096815e8648edb4bddd9d03152581a44491e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_9e4fc4eb74cadb3c88e099a6e898096815e8648edb4bddd9d03152581a44491e->leave($__internal_9e4fc4eb74cadb3c88e099a6e898096815e8648edb4bddd9d03152581a44491e_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_3caa834aaa82a094b5c32563daf49f59df7a9e36cc615d7ce0d701aca874f630 = $this->env->getExtension("native_profiler");
        $__internal_3caa834aaa82a094b5c32563daf49f59df7a9e36cc615d7ce0d701aca874f630->enter($__internal_3caa834aaa82a094b5c32563daf49f59df7a9e36cc615d7ce0d701aca874f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_3caa834aaa82a094b5c32563daf49f59df7a9e36cc615d7ce0d701aca874f630->leave($__internal_3caa834aaa82a094b5c32563daf49f59df7a9e36cc615d7ce0d701aca874f630_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_cc2d4f9fc408f86c31b03ac1fd8bc79254cafc019fb6349e52daedc744268116 = $this->env->getExtension("native_profiler");
        $__internal_cc2d4f9fc408f86c31b03ac1fd8bc79254cafc019fb6349e52daedc744268116->enter($__internal_cc2d4f9fc408f86c31b03ac1fd8bc79254cafc019fb6349e52daedc744268116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_cc2d4f9fc408f86c31b03ac1fd8bc79254cafc019fb6349e52daedc744268116->leave($__internal_cc2d4f9fc408f86c31b03ac1fd8bc79254cafc019fb6349e52daedc744268116_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/action.html.twig";
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
