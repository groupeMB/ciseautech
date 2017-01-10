<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_ae9117998c7b969ded8f25639bb5e9b1f17122506a0c6c550a1927105c69e831 extends Twig_Template
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
        $__internal_3fc70fcc39da2ae7ceb81dc499578e239108209bd883d1b880aceeeea4bb70c7 = $this->env->getExtension("native_profiler");
        $__internal_3fc70fcc39da2ae7ceb81dc499578e239108209bd883d1b880aceeeea4bb70c7->enter($__internal_3fc70fcc39da2ae7ceb81dc499578e239108209bd883d1b880aceeeea4bb70c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3fc70fcc39da2ae7ceb81dc499578e239108209bd883d1b880aceeeea4bb70c7->leave($__internal_3fc70fcc39da2ae7ceb81dc499578e239108209bd883d1b880aceeeea4bb70c7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a29579cb3e50062d51f36810293be3e613aa65761c639b404d991c1bd2cc0af1 = $this->env->getExtension("native_profiler");
        $__internal_a29579cb3e50062d51f36810293be3e613aa65761c639b404d991c1bd2cc0af1->enter($__internal_a29579cb3e50062d51f36810293be3e613aa65761c639b404d991c1bd2cc0af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a29579cb3e50062d51f36810293be3e613aa65761c639b404d991c1bd2cc0af1->leave($__internal_a29579cb3e50062d51f36810293be3e613aa65761c639b404d991c1bd2cc0af1_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_54c31a2901a6ee75cfedad35a0360fb20ad408851c32a06663657ad1f852047c = $this->env->getExtension("native_profiler");
        $__internal_54c31a2901a6ee75cfedad35a0360fb20ad408851c32a06663657ad1f852047c->enter($__internal_54c31a2901a6ee75cfedad35a0360fb20ad408851c32a06663657ad1f852047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_54c31a2901a6ee75cfedad35a0360fb20ad408851c32a06663657ad1f852047c->leave($__internal_54c31a2901a6ee75cfedad35a0360fb20ad408851c32a06663657ad1f852047c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b35454e023cdccc8de2ccabc98ab36db8fdd11c2fa4bf917289a1d9e80f62a23 = $this->env->getExtension("native_profiler");
        $__internal_b35454e023cdccc8de2ccabc98ab36db8fdd11c2fa4bf917289a1d9e80f62a23->enter($__internal_b35454e023cdccc8de2ccabc98ab36db8fdd11c2fa4bf917289a1d9e80f62a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b35454e023cdccc8de2ccabc98ab36db8fdd11c2fa4bf917289a1d9e80f62a23->leave($__internal_b35454e023cdccc8de2ccabc98ab36db8fdd11c2fa4bf917289a1d9e80f62a23_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
