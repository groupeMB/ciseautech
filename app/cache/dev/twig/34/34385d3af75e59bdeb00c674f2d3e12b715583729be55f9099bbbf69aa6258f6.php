<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_6dd069428c1c0afae6ee094b956ab02633661969a0cdf584489af099f208dfe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_fc102893d9c394322ef28d2e8859d631a2cf14f7dee3be616eaf16c7e3cd55a2 = $this->env->getExtension("native_profiler");
        $__internal_fc102893d9c394322ef28d2e8859d631a2cf14f7dee3be616eaf16c7e3cd55a2->enter($__internal_fc102893d9c394322ef28d2e8859d631a2cf14f7dee3be616eaf16c7e3cd55a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc102893d9c394322ef28d2e8859d631a2cf14f7dee3be616eaf16c7e3cd55a2->leave($__internal_fc102893d9c394322ef28d2e8859d631a2cf14f7dee3be616eaf16c7e3cd55a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_142e2ccc2bb064032ae3443bdde8ea816a80384bb8ae1778fe0ab6ce13a1de92 = $this->env->getExtension("native_profiler");
        $__internal_142e2ccc2bb064032ae3443bdde8ea816a80384bb8ae1778fe0ab6ce13a1de92->enter($__internal_142e2ccc2bb064032ae3443bdde8ea816a80384bb8ae1778fe0ab6ce13a1de92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_142e2ccc2bb064032ae3443bdde8ea816a80384bb8ae1778fe0ab6ce13a1de92->leave($__internal_142e2ccc2bb064032ae3443bdde8ea816a80384bb8ae1778fe0ab6ce13a1de92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
";
    }
}
