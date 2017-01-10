<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_b507ea4ef275b843554ac57b5f2889f7d6936b98ff1954c9f9419d30377f56a9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db6b0e2d65d5458da3e97463ab3117ea6d4f83a96dae2b9687cf73aec4ec500e = $this->env->getExtension("native_profiler");
        $__internal_db6b0e2d65d5458da3e97463ab3117ea6d4f83a96dae2b9687cf73aec4ec500e->enter($__internal_db6b0e2d65d5458da3e97463ab3117ea6d4f83a96dae2b9687cf73aec4ec500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6b0e2d65d5458da3e97463ab3117ea6d4f83a96dae2b9687cf73aec4ec500e->leave($__internal_db6b0e2d65d5458da3e97463ab3117ea6d4f83a96dae2b9687cf73aec4ec500e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_889326913b0c8364d36101f411c9e2ac2f25a3490bee1a3d87d4ea50b6430b4d = $this->env->getExtension("native_profiler");
        $__internal_889326913b0c8364d36101f411c9e2ac2f25a3490bee1a3d87d4ea50b6430b4d->enter($__internal_889326913b0c8364d36101f411c9e2ac2f25a3490bee1a3d87d4ea50b6430b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_889326913b0c8364d36101f411c9e2ac2f25a3490bee1a3d87d4ea50b6430b4d->leave($__internal_889326913b0c8364d36101f411c9e2ac2f25a3490bee1a3d87d4ea50b6430b4d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}
