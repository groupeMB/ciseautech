<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d2f92a676248c821501bf9c764f2c1627e38e5082356e7a64ed27b44e0be661a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62f462d4a4592c973b32e01135b9fdc7b08615d4400e26913bbe39a6ed1ebb98 = $this->env->getExtension("native_profiler");
        $__internal_62f462d4a4592c973b32e01135b9fdc7b08615d4400e26913bbe39a6ed1ebb98->enter($__internal_62f462d4a4592c973b32e01135b9fdc7b08615d4400e26913bbe39a6ed1ebb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_62f462d4a4592c973b32e01135b9fdc7b08615d4400e26913bbe39a6ed1ebb98->leave($__internal_62f462d4a4592c973b32e01135b9fdc7b08615d4400e26913bbe39a6ed1ebb98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>
</div>
";
    }
}
