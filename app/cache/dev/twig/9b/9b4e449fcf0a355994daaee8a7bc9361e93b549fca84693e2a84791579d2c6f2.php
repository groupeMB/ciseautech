<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4e80262efee1fa026cbc1845c43a854f1c1a366781cda149b880392af8f25037 extends Twig_Template
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
        $__internal_6450bf4103d9380367dc2502273494d8369d7becc37ce0ca848036f3ca73439b = $this->env->getExtension("native_profiler");
        $__internal_6450bf4103d9380367dc2502273494d8369d7becc37ce0ca848036f3ca73439b->enter($__internal_6450bf4103d9380367dc2502273494d8369d7becc37ce0ca848036f3ca73439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6450bf4103d9380367dc2502273494d8369d7becc37ce0ca848036f3ca73439b->leave($__internal_6450bf4103d9380367dc2502273494d8369d7becc37ce0ca848036f3ca73439b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_289f8dbc93df82cebb211c7da4f27435f24da16b544ca2f1717fde926aef4f80 = $this->env->getExtension("native_profiler");
        $__internal_289f8dbc93df82cebb211c7da4f27435f24da16b544ca2f1717fde926aef4f80->enter($__internal_289f8dbc93df82cebb211c7da4f27435f24da16b544ca2f1717fde926aef4f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_289f8dbc93df82cebb211c7da4f27435f24da16b544ca2f1717fde926aef4f80->leave($__internal_289f8dbc93df82cebb211c7da4f27435f24da16b544ca2f1717fde926aef4f80_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_424ba92257b97eb4fe46d47545459fb7b452957038c888ffcfd97944be5e256f = $this->env->getExtension("native_profiler");
        $__internal_424ba92257b97eb4fe46d47545459fb7b452957038c888ffcfd97944be5e256f->enter($__internal_424ba92257b97eb4fe46d47545459fb7b452957038c888ffcfd97944be5e256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_424ba92257b97eb4fe46d47545459fb7b452957038c888ffcfd97944be5e256f->leave($__internal_424ba92257b97eb4fe46d47545459fb7b452957038c888ffcfd97944be5e256f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_acc14f89a8b9bb6696fdda9f55ab7d1a4a9ac6f429ac8a9dd7a7b64dc98a8bea = $this->env->getExtension("native_profiler");
        $__internal_acc14f89a8b9bb6696fdda9f55ab7d1a4a9ac6f429ac8a9dd7a7b64dc98a8bea->enter($__internal_acc14f89a8b9bb6696fdda9f55ab7d1a4a9ac6f429ac8a9dd7a7b64dc98a8bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_acc14f89a8b9bb6696fdda9f55ab7d1a4a9ac6f429ac8a9dd7a7b64dc98a8bea->leave($__internal_acc14f89a8b9bb6696fdda9f55ab7d1a4a9ac6f429ac8a9dd7a7b64dc98a8bea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
