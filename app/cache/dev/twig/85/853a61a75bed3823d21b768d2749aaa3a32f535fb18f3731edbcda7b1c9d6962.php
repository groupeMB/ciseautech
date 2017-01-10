<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_d87faac2f1fa5ca8443f58012fbb3c3da2c6dfbae598b07502ef0db104c6cd46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccadbcd5120924966d8cfb3756f85bcb4f4e91dde2c2c0be2d950191d62ea087 = $this->env->getExtension("native_profiler");
        $__internal_ccadbcd5120924966d8cfb3756f85bcb4f4e91dde2c2c0be2d950191d62ea087->enter($__internal_ccadbcd5120924966d8cfb3756f85bcb4f4e91dde2c2c0be2d950191d62ea087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccadbcd5120924966d8cfb3756f85bcb4f4e91dde2c2c0be2d950191d62ea087->leave($__internal_ccadbcd5120924966d8cfb3756f85bcb4f4e91dde2c2c0be2d950191d62ea087_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
";
    }
}
