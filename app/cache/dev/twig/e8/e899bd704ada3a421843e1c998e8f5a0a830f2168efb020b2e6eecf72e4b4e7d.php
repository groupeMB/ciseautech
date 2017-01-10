<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3a99205b43dc45364684f488a5a03afd17f1748a72ea55677fa4ba6d0c75f5c7 extends Twig_Template
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
        $__internal_81eec24e70ece1424d50c45d079d80e91e3e65f2b62044b0c59d082db70b033b = $this->env->getExtension("native_profiler");
        $__internal_81eec24e70ece1424d50c45d079d80e91e3e65f2b62044b0c59d082db70b033b->enter($__internal_81eec24e70ece1424d50c45d079d80e91e3e65f2b62044b0c59d082db70b033b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_81eec24e70ece1424d50c45d079d80e91e3e65f2b62044b0c59d082db70b033b->leave($__internal_81eec24e70ece1424d50c45d079d80e91e3e65f2b62044b0c59d082db70b033b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e47023079ed9d626bcb3d615dc5e9316f129bb6e66c7f9b13606a7cb73e2a9cc = $this->env->getExtension("native_profiler");
        $__internal_e47023079ed9d626bcb3d615dc5e9316f129bb6e66c7f9b13606a7cb73e2a9cc->enter($__internal_e47023079ed9d626bcb3d615dc5e9316f129bb6e66c7f9b13606a7cb73e2a9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e47023079ed9d626bcb3d615dc5e9316f129bb6e66c7f9b13606a7cb73e2a9cc->leave($__internal_e47023079ed9d626bcb3d615dc5e9316f129bb6e66c7f9b13606a7cb73e2a9cc_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ce802ff847b6a63838355ca16a1c21d51ddd099fd33dbcb57e2c08c0d98dde83 = $this->env->getExtension("native_profiler");
        $__internal_ce802ff847b6a63838355ca16a1c21d51ddd099fd33dbcb57e2c08c0d98dde83->enter($__internal_ce802ff847b6a63838355ca16a1c21d51ddd099fd33dbcb57e2c08c0d98dde83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ce802ff847b6a63838355ca16a1c21d51ddd099fd33dbcb57e2c08c0d98dde83->leave($__internal_ce802ff847b6a63838355ca16a1c21d51ddd099fd33dbcb57e2c08c0d98dde83_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1e1e15c2f851aa407cf6f082b735f36c1d29af900d3ba2c0fafc3318eba54c6a = $this->env->getExtension("native_profiler");
        $__internal_1e1e15c2f851aa407cf6f082b735f36c1d29af900d3ba2c0fafc3318eba54c6a->enter($__internal_1e1e15c2f851aa407cf6f082b735f36c1d29af900d3ba2c0fafc3318eba54c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1e1e15c2f851aa407cf6f082b735f36c1d29af900d3ba2c0fafc3318eba54c6a->leave($__internal_1e1e15c2f851aa407cf6f082b735f36c1d29af900d3ba2c0fafc3318eba54c6a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    public function getSource()
    {
        return "{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
