<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_796f6c1b493bf1894587caba334e460a6708e098cd27057b1cec7b3c47b0d972 extends Twig_Template
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
        $__internal_b9f7afcdec7d0738f95fb6028c827b93727c1ca61827cc7b13b2b60533289fa5 = $this->env->getExtension("native_profiler");
        $__internal_b9f7afcdec7d0738f95fb6028c827b93727c1ca61827cc7b13b2b60533289fa5->enter($__internal_b9f7afcdec7d0738f95fb6028c827b93727c1ca61827cc7b13b2b60533289fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_b9f7afcdec7d0738f95fb6028c827b93727c1ca61827cc7b13b2b60533289fa5->leave($__internal_b9f7afcdec7d0738f95fb6028c827b93727c1ca61827cc7b13b2b60533289fa5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
