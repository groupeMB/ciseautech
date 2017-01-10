<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_5176a3b5ae237379aa2433d3fab9397dba7c74385a3b892a1f47cc409b32d26c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_872f4704d2c72b628d8099ee7e185736013d41deac26e92ed053c1ec6a661ec7 = $this->env->getExtension("native_profiler");
        $__internal_872f4704d2c72b628d8099ee7e185736013d41deac26e92ed053c1ec6a661ec7->enter($__internal_872f4704d2c72b628d8099ee7e185736013d41deac26e92ed053c1ec6a661ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872f4704d2c72b628d8099ee7e185736013d41deac26e92ed053c1ec6a661ec7->leave($__internal_872f4704d2c72b628d8099ee7e185736013d41deac26e92ed053c1ec6a661ec7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
";
    }
}
