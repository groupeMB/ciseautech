<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_f2b632b1a278f04ee40dfb115960b1e033bfe5243e12586a76fbe25382faa462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c9ac3dbb1984a8b67cdd3c31d5b42e74fcb3348eadcb3e45d4a54d4d8f596a43 = $this->env->getExtension("native_profiler");
        $__internal_c9ac3dbb1984a8b67cdd3c31d5b42e74fcb3348eadcb3e45d4a54d4d8f596a43->enter($__internal_c9ac3dbb1984a8b67cdd3c31d5b42e74fcb3348eadcb3e45d4a54d4d8f596a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9ac3dbb1984a8b67cdd3c31d5b42e74fcb3348eadcb3e45d4a54d4d8f596a43->leave($__internal_c9ac3dbb1984a8b67cdd3c31d5b42e74fcb3348eadcb3e45d4a54d4d8f596a43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f3fc9d4d8b075638c18f64e504d2c2643b72181ca0913c2e53dda25e6744b49 = $this->env->getExtension("native_profiler");
        $__internal_0f3fc9d4d8b075638c18f64e504d2c2643b72181ca0913c2e53dda25e6744b49->enter($__internal_0f3fc9d4d8b075638c18f64e504d2c2643b72181ca0913c2e53dda25e6744b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0f3fc9d4d8b075638c18f64e504d2c2643b72181ca0913c2e53dda25e6744b49->leave($__internal_0f3fc9d4d8b075638c18f64e504d2c2643b72181ca0913c2e53dda25e6744b49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
