<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_f91ecdaf3f3f2718d9e42542d19f6f4f149b77b3ff3d61029b48c18ceb6c7438 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5983aa75fb05f747263f07af6b8991ce3dc8ee74d0c597c3b261637ae7f1eb01 = $this->env->getExtension("native_profiler");
        $__internal_5983aa75fb05f747263f07af6b8991ce3dc8ee74d0c597c3b261637ae7f1eb01->enter($__internal_5983aa75fb05f747263f07af6b8991ce3dc8ee74d0c597c3b261637ae7f1eb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5983aa75fb05f747263f07af6b8991ce3dc8ee74d0c597c3b261637ae7f1eb01->leave($__internal_5983aa75fb05f747263f07af6b8991ce3dc8ee74d0c597c3b261637ae7f1eb01_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_915bce597e695ce05d3c26f95de85810993051c851ab3631c36a124f152c5cce = $this->env->getExtension("native_profiler");
        $__internal_915bce597e695ce05d3c26f95de85810993051c851ab3631c36a124f152c5cce->enter($__internal_915bce597e695ce05d3c26f95de85810993051c851ab3631c36a124f152c5cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_915bce597e695ce05d3c26f95de85810993051c851ab3631c36a124f152c5cce->leave($__internal_915bce597e695ce05d3c26f95de85810993051c851ab3631c36a124f152c5cce_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
