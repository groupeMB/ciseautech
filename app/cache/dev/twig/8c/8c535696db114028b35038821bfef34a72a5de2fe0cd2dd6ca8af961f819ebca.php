<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_ce76f858c59b652c54146f4bc60058f38b727e0f7befb427c3f6a81b433e2cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_252fde3541b5948da7f96d6f087a729677ceaee19c5f64f3432767448900531f = $this->env->getExtension("native_profiler");
        $__internal_252fde3541b5948da7f96d6f087a729677ceaee19c5f64f3432767448900531f->enter($__internal_252fde3541b5948da7f96d6f087a729677ceaee19c5f64f3432767448900531f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_252fde3541b5948da7f96d6f087a729677ceaee19c5f64f3432767448900531f->leave($__internal_252fde3541b5948da7f96d6f087a729677ceaee19c5f64f3432767448900531f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
";
    }
}
