<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_2ac92d044c90f819f76a1c04e690f5ff6e9b3aadd9b3768349d77fb2f500cb13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_0ad4443c6b589c59a9f6580bef2f6b4a2ad2b23183560aaf1ced438404534f38 = $this->env->getExtension("native_profiler");
        $__internal_0ad4443c6b589c59a9f6580bef2f6b4a2ad2b23183560aaf1ced438404534f38->enter($__internal_0ad4443c6b589c59a9f6580bef2f6b4a2ad2b23183560aaf1ced438404534f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad4443c6b589c59a9f6580bef2f6b4a2ad2b23183560aaf1ced438404534f38->leave($__internal_0ad4443c6b589c59a9f6580bef2f6b4a2ad2b23183560aaf1ced438404534f38_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_55cb9edf13537f161c6650228d829ead994a12bb91d360b707fe02350397d282 = $this->env->getExtension("native_profiler");
        $__internal_55cb9edf13537f161c6650228d829ead994a12bb91d360b707fe02350397d282->enter($__internal_55cb9edf13537f161c6650228d829ead994a12bb91d360b707fe02350397d282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_55cb9edf13537f161c6650228d829ead994a12bb91d360b707fe02350397d282->leave($__internal_55cb9edf13537f161c6650228d829ead994a12bb91d360b707fe02350397d282_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
