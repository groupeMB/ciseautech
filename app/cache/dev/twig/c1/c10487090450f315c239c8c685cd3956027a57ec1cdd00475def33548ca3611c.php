<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_9c8ba6ad602aff4b69769259b6f02e992b5954fa207352898143406022f3223c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_512a20a36bea6377d64fdd950fba187394deccc8f5d409887d20308694d36c8c = $this->env->getExtension("native_profiler");
        $__internal_512a20a36bea6377d64fdd950fba187394deccc8f5d409887d20308694d36c8c->enter($__internal_512a20a36bea6377d64fdd950fba187394deccc8f5d409887d20308694d36c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512a20a36bea6377d64fdd950fba187394deccc8f5d409887d20308694d36c8c->leave($__internal_512a20a36bea6377d64fdd950fba187394deccc8f5d409887d20308694d36c8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d96e6b0da506514cbdd06eb8b4ac7723f41eb33a4685a2a2460b6e9782e0c84 = $this->env->getExtension("native_profiler");
        $__internal_4d96e6b0da506514cbdd06eb8b4ac7723f41eb33a4685a2a2460b6e9782e0c84->enter($__internal_4d96e6b0da506514cbdd06eb8b4ac7723f41eb33a4685a2a2460b6e9782e0c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4d96e6b0da506514cbdd06eb8b4ac7723f41eb33a4685a2a2460b6e9782e0c84->leave($__internal_4d96e6b0da506514cbdd06eb8b4ac7723f41eb33a4685a2a2460b6e9782e0c84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
";
    }
}
