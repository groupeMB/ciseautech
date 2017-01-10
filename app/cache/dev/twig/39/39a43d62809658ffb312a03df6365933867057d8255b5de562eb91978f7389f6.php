<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_b6c31765dccc5e2fd4c810725e99a88df4aa6d9ee645ad93c1a77724de522b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ad7748c62df8b0b22409cefae7d4d21c9fe869409046547d6e6dd07bc675c52 = $this->env->getExtension("native_profiler");
        $__internal_3ad7748c62df8b0b22409cefae7d4d21c9fe869409046547d6e6dd07bc675c52->enter($__internal_3ad7748c62df8b0b22409cefae7d4d21c9fe869409046547d6e6dd07bc675c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad7748c62df8b0b22409cefae7d4d21c9fe869409046547d6e6dd07bc675c52->leave($__internal_3ad7748c62df8b0b22409cefae7d4d21c9fe869409046547d6e6dd07bc675c52_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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
