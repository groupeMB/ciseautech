<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_5963cc2f1766986fec4ea22e9670cf0f3ecb47c9523d3a68cb50d293907706c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce51848d92aa2d392f68524cb86d5f22a17c565c810f285b745495e124a4583e = $this->env->getExtension("native_profiler");
        $__internal_ce51848d92aa2d392f68524cb86d5f22a17c565c810f285b745495e124a4583e->enter($__internal_ce51848d92aa2d392f68524cb86d5f22a17c565c810f285b745495e124a4583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce51848d92aa2d392f68524cb86d5f22a17c565c810f285b745495e124a4583e->leave($__internal_ce51848d92aa2d392f68524cb86d5f22a17c565c810f285b745495e124a4583e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
";
    }
}
