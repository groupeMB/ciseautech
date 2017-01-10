<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_4dc6cf9d9b4943414404fe0b11d3cacf690bbc23b22fb462a7ff5befa6b234fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c7a94aae9cb97e09c8edb8eb8ee287ab191d395cdae822c3205b2c99c15cd22 = $this->env->getExtension("native_profiler");
        $__internal_3c7a94aae9cb97e09c8edb8eb8ee287ab191d395cdae822c3205b2c99c15cd22->enter($__internal_3c7a94aae9cb97e09c8edb8eb8ee287ab191d395cdae822c3205b2c99c15cd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c7a94aae9cb97e09c8edb8eb8ee287ab191d395cdae822c3205b2c99c15cd22->leave($__internal_3c7a94aae9cb97e09c8edb8eb8ee287ab191d395cdae822c3205b2c99c15cd22_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
";
    }
}
