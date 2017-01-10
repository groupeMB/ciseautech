<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_8aa424d15eaf98948f4c393778ca85d06c7fb76219450c7d117a0fc90da178fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb8468ba67472d69eb9e2cf4ab7c87448d60c9ca3b8fb3b5d3fb0c85e2a61b89 = $this->env->getExtension("native_profiler");
        $__internal_eb8468ba67472d69eb9e2cf4ab7c87448d60c9ca3b8fb3b5d3fb0c85e2a61b89->enter($__internal_eb8468ba67472d69eb9e2cf4ab7c87448d60c9ca3b8fb3b5d3fb0c85e2a61b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb8468ba67472d69eb9e2cf4ab7c87448d60c9ca3b8fb3b5d3fb0c85e2a61b89->leave($__internal_eb8468ba67472d69eb9e2cf4ab7c87448d60c9ca3b8fb3b5d3fb0c85e2a61b89_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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
