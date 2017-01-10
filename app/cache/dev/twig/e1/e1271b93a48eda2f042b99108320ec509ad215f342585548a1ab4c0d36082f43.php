<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_da2709440809f63f72d4a1c8585fab3c8b5b1ae7e8b0cfac487ac345dae9d134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_a96ae97c7f6115c052564e21db69a3361494aa3e69f9870c2bd275789a2791ba = $this->env->getExtension("native_profiler");
        $__internal_a96ae97c7f6115c052564e21db69a3361494aa3e69f9870c2bd275789a2791ba->enter($__internal_a96ae97c7f6115c052564e21db69a3361494aa3e69f9870c2bd275789a2791ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96ae97c7f6115c052564e21db69a3361494aa3e69f9870c2bd275789a2791ba->leave($__internal_a96ae97c7f6115c052564e21db69a3361494aa3e69f9870c2bd275789a2791ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e27bcc4ad2cfb5bf961095f92b74a0d54c9c31d64679c75627f9046b513e1815 = $this->env->getExtension("native_profiler");
        $__internal_e27bcc4ad2cfb5bf961095f92b74a0d54c9c31d64679c75627f9046b513e1815->enter($__internal_e27bcc4ad2cfb5bf961095f92b74a0d54c9c31d64679c75627f9046b513e1815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e27bcc4ad2cfb5bf961095f92b74a0d54c9c31d64679c75627f9046b513e1815->leave($__internal_e27bcc4ad2cfb5bf961095f92b74a0d54c9c31d64679c75627f9046b513e1815_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
