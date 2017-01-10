<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_c59fbc5083c1d6a06f2401f1e6e5825080875cf5dbaff42c25dbfc31ec94a945 extends Twig_Template
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
        $__internal_8285a5471d7c3f0a2cd04ef40da10facb55d5e1f0cbdf5d4846c20b022d81009 = $this->env->getExtension("native_profiler");
        $__internal_8285a5471d7c3f0a2cd04ef40da10facb55d5e1f0cbdf5d4846c20b022d81009->enter($__internal_8285a5471d7c3f0a2cd04ef40da10facb55d5e1f0cbdf5d4846c20b022d81009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_8285a5471d7c3f0a2cd04ef40da10facb55d5e1f0cbdf5d4846c20b022d81009->leave($__internal_8285a5471d7c3f0a2cd04ef40da10facb55d5e1f0cbdf5d4846c20b022d81009_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
