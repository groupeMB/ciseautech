<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_64b39f604b2e687a48b046dadb8a1d70f0613cec5c29a37572ccf5250aa6e0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbd5b953997ef9b5eb48ea22f6ac1b101d35c7ac8d66d217f2fabfc71f0fd093 = $this->env->getExtension("native_profiler");
        $__internal_dbd5b953997ef9b5eb48ea22f6ac1b101d35c7ac8d66d217f2fabfc71f0fd093->enter($__internal_dbd5b953997ef9b5eb48ea22f6ac1b101d35c7ac8d66d217f2fabfc71f0fd093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dbd5b953997ef9b5eb48ea22f6ac1b101d35c7ac8d66d217f2fabfc71f0fd093->leave($__internal_dbd5b953997ef9b5eb48ea22f6ac1b101d35c7ac8d66d217f2fabfc71f0fd093_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe2291d586c67ed973773a9434f02dfc48ff667e4fd7939ec9e741e53ae745fc = $this->env->getExtension("native_profiler");
        $__internal_fe2291d586c67ed973773a9434f02dfc48ff667e4fd7939ec9e741e53ae745fc->enter($__internal_fe2291d586c67ed973773a9434f02dfc48ff667e4fd7939ec9e741e53ae745fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fe2291d586c67ed973773a9434f02dfc48ff667e4fd7939ec9e741e53ae745fc->leave($__internal_fe2291d586c67ed973773a9434f02dfc48ff667e4fd7939ec9e741e53ae745fc_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5cffc46f5d2b9b03d72031eb5afe9356819a804720cffabc5373782849590641 = $this->env->getExtension("native_profiler");
        $__internal_5cffc46f5d2b9b03d72031eb5afe9356819a804720cffabc5373782849590641->enter($__internal_5cffc46f5d2b9b03d72031eb5afe9356819a804720cffabc5373782849590641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5cffc46f5d2b9b03d72031eb5afe9356819a804720cffabc5373782849590641->leave($__internal_5cffc46f5d2b9b03d72031eb5afe9356819a804720cffabc5373782849590641_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d7ea2ca043e30acd7da31bdc8ea941224668bc434eaf3735ba33c4cdc2c13b3f = $this->env->getExtension("native_profiler");
        $__internal_d7ea2ca043e30acd7da31bdc8ea941224668bc434eaf3735ba33c4cdc2c13b3f->enter($__internal_d7ea2ca043e30acd7da31bdc8ea941224668bc434eaf3735ba33c4cdc2c13b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d7ea2ca043e30acd7da31bdc8ea941224668bc434eaf3735ba33c4cdc2c13b3f->leave($__internal_d7ea2ca043e30acd7da31bdc8ea941224668bc434eaf3735ba33c4cdc2c13b3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSource()
    {
        return "{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
