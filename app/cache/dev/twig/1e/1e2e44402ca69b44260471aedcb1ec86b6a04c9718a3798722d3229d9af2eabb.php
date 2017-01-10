<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_6a17f70f2aaa1bb215bffdde5874f72943cc905a9093bf9e8f862d22eb73f029 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cc6a219f6b7d1d8e2ac52d76c43446a6d5a277437c7aadf83c4caf92eaec4a4 = $this->env->getExtension("native_profiler");
        $__internal_3cc6a219f6b7d1d8e2ac52d76c43446a6d5a277437c7aadf83c4caf92eaec4a4->enter($__internal_3cc6a219f6b7d1d8e2ac52d76c43446a6d5a277437c7aadf83c4caf92eaec4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc6a219f6b7d1d8e2ac52d76c43446a6d5a277437c7aadf83c4caf92eaec4a4->leave($__internal_3cc6a219f6b7d1d8e2ac52d76c43446a6d5a277437c7aadf83c4caf92eaec4a4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_69d912914b76b30c2ad50fc10b72fbc376d97f400ac999a49dcdcbe8cbb2d5f6 = $this->env->getExtension("native_profiler");
        $__internal_69d912914b76b30c2ad50fc10b72fbc376d97f400ac999a49dcdcbe8cbb2d5f6->enter($__internal_69d912914b76b30c2ad50fc10b72fbc376d97f400ac999a49dcdcbe8cbb2d5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_69d912914b76b30c2ad50fc10b72fbc376d97f400ac999a49dcdcbe8cbb2d5f6->leave($__internal_69d912914b76b30c2ad50fc10b72fbc376d97f400ac999a49dcdcbe8cbb2d5f6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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
