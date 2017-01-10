<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_45d0756d1b19b15d195793a6818d96719ee53f6f5d806d05720f1c3235291262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_01c62f3ffbb890607026e4df11294e96f524a1a023d49dad22fc6eed55add4f2 = $this->env->getExtension("native_profiler");
        $__internal_01c62f3ffbb890607026e4df11294e96f524a1a023d49dad22fc6eed55add4f2->enter($__internal_01c62f3ffbb890607026e4df11294e96f524a1a023d49dad22fc6eed55add4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c62f3ffbb890607026e4df11294e96f524a1a023d49dad22fc6eed55add4f2->leave($__internal_01c62f3ffbb890607026e4df11294e96f524a1a023d49dad22fc6eed55add4f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_051859f85558b00d5c37b9817a5ac0d5bfcce7b92836ad8d32b36f31024c2fa1 = $this->env->getExtension("native_profiler");
        $__internal_051859f85558b00d5c37b9817a5ac0d5bfcce7b92836ad8d32b36f31024c2fa1->enter($__internal_051859f85558b00d5c37b9817a5ac0d5bfcce7b92836ad8d32b36f31024c2fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 9)->display($context);
        // line 10
        echo "        </div>
    </div>
";
        
        $__internal_051859f85558b00d5c37b9817a5ac0d5bfcce7b92836ad8d32b36f31024c2fa1->leave($__internal_051859f85558b00d5c37b9817a5ac0d5bfcce7b92836ad8d32b36f31024c2fa1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
