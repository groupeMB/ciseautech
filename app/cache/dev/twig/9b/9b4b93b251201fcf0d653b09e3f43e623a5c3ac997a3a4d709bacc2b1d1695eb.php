<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_853f23491db30e73b52fc65b6e00caea445cbf9ad39c4bde03659f99745fdaed extends Twig_Template
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
        $__internal_44a9e9e298c67668d48bc0bb82111690dbbdd981e06a929b81ad339e7b2b3d36 = $this->env->getExtension("native_profiler");
        $__internal_44a9e9e298c67668d48bc0bb82111690dbbdd981e06a929b81ad339e7b2b3d36->enter($__internal_44a9e9e298c67668d48bc0bb82111690dbbdd981e06a929b81ad339e7b2b3d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_44a9e9e298c67668d48bc0bb82111690dbbdd981e06a929b81ad339e7b2b3d36->leave($__internal_44a9e9e298c67668d48bc0bb82111690dbbdd981e06a929b81ad339e7b2b3d36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>
</div>
";
    }
}
