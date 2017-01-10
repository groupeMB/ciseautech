<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9daffdd41f890c9b3eda4661726f5fe83da3ef53d1cf1c33a98b23fe8a98cd12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_af2f289d6bc549658fa2637a194d31013fa702b5566a62ee65db65e8b98e32c7 = $this->env->getExtension("native_profiler");
        $__internal_af2f289d6bc549658fa2637a194d31013fa702b5566a62ee65db65e8b98e32c7->enter($__internal_af2f289d6bc549658fa2637a194d31013fa702b5566a62ee65db65e8b98e32c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af2f289d6bc549658fa2637a194d31013fa702b5566a62ee65db65e8b98e32c7->leave($__internal_af2f289d6bc549658fa2637a194d31013fa702b5566a62ee65db65e8b98e32c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43a21824b44518656bfdc47deca82863dd78901c1ff5a351ff3586f06ede42bc = $this->env->getExtension("native_profiler");
        $__internal_43a21824b44518656bfdc47deca82863dd78901c1ff5a351ff3586f06ede42bc->enter($__internal_43a21824b44518656bfdc47deca82863dd78901c1ff5a351ff3586f06ede42bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_resetting_reset", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
    </div>
";
        
        $__internal_43a21824b44518656bfdc47deca82863dd78901c1ff5a351ff3586f06ede42bc->leave($__internal_43a21824b44518656bfdc47deca82863dd78901c1ff5a351ff3586f06ede42bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SonataUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ form_errors(form) }}

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_resetting_reset\" | trans({}, 'SonataUserBundle') }}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
        </div>
    </div>
{% endblock fos_user_content %}
";
    }
}
