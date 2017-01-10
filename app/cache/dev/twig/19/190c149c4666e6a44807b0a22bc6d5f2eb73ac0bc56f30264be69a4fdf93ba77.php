<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_5e0152754b9489f0c36881987ff8d9fb6706e9996695e6ce24115e909da0c5ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42aa7b2af6d833ad08f6d2646a0527197aa2a53caee09269ddc0f0743d8af6e2 = $this->env->getExtension("native_profiler");
        $__internal_42aa7b2af6d833ad08f6d2646a0527197aa2a53caee09269ddc0f0743d8af6e2->enter($__internal_42aa7b2af6d833ad08f6d2646a0527197aa2a53caee09269ddc0f0743d8af6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42aa7b2af6d833ad08f6d2646a0527197aa2a53caee09269ddc0f0743d8af6e2->leave($__internal_42aa7b2af6d833ad08f6d2646a0527197aa2a53caee09269ddc0f0743d8af6e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4145ef6b6435476e014a1bcc8d387213859b73944faeb5baa922f02fdd2d0fe5 = $this->env->getExtension("native_profiler");
        $__internal_4145ef6b6435476e014a1bcc8d387213859b73944faeb5baa922f02fdd2d0fe5->enter($__internal_4145ef6b6435476e014a1bcc8d387213859b73944faeb5baa922f02fdd2d0fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4145ef6b6435476e014a1bcc8d387213859b73944faeb5baa922f02fdd2d0fe5->leave($__internal_4145ef6b6435476e014a1bcc8d387213859b73944faeb5baa922f02fdd2d0fe5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
";
    }
}
