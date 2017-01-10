<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_d526ba55186b0f4107c997c3800dcf85f432fa888c205fe71203c88ea933a42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1305db21363c3b0dd04d1ee3dc2ecf9eb9e83c4e34166dddba7b4670a8260601 = $this->env->getExtension("native_profiler");
        $__internal_1305db21363c3b0dd04d1ee3dc2ecf9eb9e83c4e34166dddba7b4670a8260601->enter($__internal_1305db21363c3b0dd04d1ee3dc2ecf9eb9e83c4e34166dddba7b4670a8260601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1305db21363c3b0dd04d1ee3dc2ecf9eb9e83c4e34166dddba7b4670a8260601->leave($__internal_1305db21363c3b0dd04d1ee3dc2ecf9eb9e83c4e34166dddba7b4670a8260601_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0258eac38b7f1ab06e44b2c721411cd836dc1ba7cec76a901adf3bff7e407d34 = $this->env->getExtension("native_profiler");
        $__internal_0258eac38b7f1ab06e44b2c721411cd836dc1ba7cec76a901adf3bff7e407d34->enter($__internal_0258eac38b7f1ab06e44b2c721411cd836dc1ba7cec76a901adf3bff7e407d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_0258eac38b7f1ab06e44b2c721411cd836dc1ba7cec76a901adf3bff7e407d34->leave($__internal_0258eac38b7f1ab06e44b2c721411cd836dc1ba7cec76a901adf3bff7e407d34_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}
