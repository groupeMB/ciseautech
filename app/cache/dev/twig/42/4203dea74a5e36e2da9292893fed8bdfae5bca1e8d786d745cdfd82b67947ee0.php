<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_1963c987a7292c8b65f6d48f41c97579c3423a45d7a0b809c07d548d56fdb9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b3e5780309af7019a91d83b32f130a84b5653c18e7fe1d0078156d094d309ba = $this->env->getExtension("native_profiler");
        $__internal_1b3e5780309af7019a91d83b32f130a84b5653c18e7fe1d0078156d094d309ba->enter($__internal_1b3e5780309af7019a91d83b32f130a84b5653c18e7fe1d0078156d094d309ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b3e5780309af7019a91d83b32f130a84b5653c18e7fe1d0078156d094d309ba->leave($__internal_1b3e5780309af7019a91d83b32f130a84b5653c18e7fe1d0078156d094d309ba_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
