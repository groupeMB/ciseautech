<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_b805ad588bb9bc1a84e62e1ced1e93bca2c546871b5eb31514fa5b7fda41555a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_343a651f3100a8ae72c6bed371e063e134e004fde0375e78663e807c916a6dfe = $this->env->getExtension("native_profiler");
        $__internal_343a651f3100a8ae72c6bed371e063e134e004fde0375e78663e807c916a6dfe->enter($__internal_343a651f3100a8ae72c6bed371e063e134e004fde0375e78663e807c916a6dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343a651f3100a8ae72c6bed371e063e134e004fde0375e78663e807c916a6dfe->leave($__internal_343a651f3100a8ae72c6bed371e063e134e004fde0375e78663e807c916a6dfe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d21fbaab34fc19afe3493dc8933ffdb185d1392e1e7e85916564a237c0219f01 = $this->env->getExtension("native_profiler");
        $__internal_d21fbaab34fc19afe3493dc8933ffdb185d1392e1e7e85916564a237c0219f01->enter($__internal_d21fbaab34fc19afe3493dc8933ffdb185d1392e1e7e85916564a237c0219f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d21fbaab34fc19afe3493dc8933ffdb185d1392e1e7e85916564a237c0219f01->leave($__internal_d21fbaab34fc19afe3493dc8933ffdb185d1392e1e7e85916564a237c0219f01_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
