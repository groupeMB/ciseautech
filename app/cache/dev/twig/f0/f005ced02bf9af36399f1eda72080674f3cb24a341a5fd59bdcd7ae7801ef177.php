<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_c0675a441580140fd726441aff163e5e134394d74c25fab19c93cfdc00f196cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfa86c30b0b6e377a1c521fe695fa64e1ba163adfa5cba3cb8f03d2da3bae42a = $this->env->getExtension("native_profiler");
        $__internal_bfa86c30b0b6e377a1c521fe695fa64e1ba163adfa5cba3cb8f03d2da3bae42a->enter($__internal_bfa86c30b0b6e377a1c521fe695fa64e1ba163adfa5cba3cb8f03d2da3bae42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa86c30b0b6e377a1c521fe695fa64e1ba163adfa5cba3cb8f03d2da3bae42a->leave($__internal_bfa86c30b0b6e377a1c521fe695fa64e1ba163adfa5cba3cb8f03d2da3bae42a_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
";
    }
}
