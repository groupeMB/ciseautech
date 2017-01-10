<?php

/* @SonataUser/Resetting/request.html.twig */
class __TwigTemplate_eb1ce1469f4c7425aca6649269dd55d7393d5d09809ebfc6d35eee535102f10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "@SonataUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74bb39b86283cb8e32e7ec9e34cbfb77ca210158e2ea3500f1013ce27d9cefef = $this->env->getExtension("native_profiler");
        $__internal_74bb39b86283cb8e32e7ec9e34cbfb77ca210158e2ea3500f1013ce27d9cefef->enter($__internal_74bb39b86283cb8e32e7ec9e34cbfb77ca210158e2ea3500f1013ce27d9cefef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74bb39b86283cb8e32e7ec9e34cbfb77ca210158e2ea3500f1013ce27d9cefef->leave($__internal_74bb39b86283cb8e32e7ec9e34cbfb77ca210158e2ea3500f1013ce27d9cefef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f81930f114d2836fd8d8f18cd2607149b1f58eb61b0604f4b35a5b2e48906af = $this->env->getExtension("native_profiler");
        $__internal_5f81930f114d2836fd8d8f18cd2607149b1f58eb61b0604f4b35a5b2e48906af->enter($__internal_5f81930f114d2836fd8d8f18cd2607149b1f58eb61b0604f4b35a5b2e48906af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_resetting", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 9
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@SonataUser/Resetting/request.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_5f81930f114d2836fd8d8f18cd2607149b1f58eb61b0604f4b35a5b2e48906af->leave($__internal_5f81930f114d2836fd8d8f18cd2607149b1f58eb61b0604f4b35a5b2e48906af_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
";
    }
}
