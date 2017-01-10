<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_f0d1ef6493124caca11767456a93f9c19c8222ce8518f91a5fb16db615c63be7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d13b12c3f93b11668e2dd0f74d0765aba827b60e1da7354aef3cf86f50647318 = $this->env->getExtension("native_profiler");
        $__internal_d13b12c3f93b11668e2dd0f74d0765aba827b60e1da7354aef3cf86f50647318->enter($__internal_d13b12c3f93b11668e2dd0f74d0765aba827b60e1da7354aef3cf86f50647318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13b12c3f93b11668e2dd0f74d0765aba827b60e1da7354aef3cf86f50647318->leave($__internal_d13b12c3f93b11668e2dd0f74d0765aba827b60e1da7354aef3cf86f50647318_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b8f1c9394c61d814201921d8d4c7e6203b5f37c6554d9222029613e941ca4de3 = $this->env->getExtension("native_profiler");
        $__internal_b8f1c9394c61d814201921d8d4c7e6203b5f37c6554d9222029613e941ca4de3->enter($__internal_b8f1c9394c61d814201921d8d4c7e6203b5f37c6554d9222029613e941ca4de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_b8f1c9394c61d814201921d8d4c7e6203b5f37c6554d9222029613e941ca4de3->leave($__internal_b8f1c9394c61d814201921d8d4c7e6203b5f37c6554d9222029613e941ca4de3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
