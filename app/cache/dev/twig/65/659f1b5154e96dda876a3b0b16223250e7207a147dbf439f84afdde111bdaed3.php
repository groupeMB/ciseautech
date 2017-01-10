<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_3756a6d6ce4c5f3d4ba35da46832379b1488b273f0ed700463084a83f8d0af2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42c2465cfd26e8a5c54a86d8716dfd607f9275852efe5c4302a98263596ab5db = $this->env->getExtension("native_profiler");
        $__internal_42c2465cfd26e8a5c54a86d8716dfd607f9275852efe5c4302a98263596ab5db->enter($__internal_42c2465cfd26e8a5c54a86d8716dfd607f9275852efe5c4302a98263596ab5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c2465cfd26e8a5c54a86d8716dfd607f9275852efe5c4302a98263596ab5db->leave($__internal_42c2465cfd26e8a5c54a86d8716dfd607f9275852efe5c4302a98263596ab5db_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
