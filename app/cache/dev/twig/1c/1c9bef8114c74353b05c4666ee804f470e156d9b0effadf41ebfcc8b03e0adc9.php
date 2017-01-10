<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_2d57460e43420078aa990643eb81966cdd44dcc90998bceac5e0c8b28403d0ef extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02653fb68d5adc556acd46408c504ff53bb53d3aa48ff8ecb5618fd5d03dcfa6 = $this->env->getExtension("native_profiler");
        $__internal_02653fb68d5adc556acd46408c504ff53bb53d3aa48ff8ecb5618fd5d03dcfa6->enter($__internal_02653fb68d5adc556acd46408c504ff53bb53d3aa48ff8ecb5618fd5d03dcfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02653fb68d5adc556acd46408c504ff53bb53d3aa48ff8ecb5618fd5d03dcfa6->leave($__internal_02653fb68d5adc556acd46408c504ff53bb53d3aa48ff8ecb5618fd5d03dcfa6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5d11fe2f293275aba95b69c08e123722feb7b6f54564654c8ecf8b3b76caddd2 = $this->env->getExtension("native_profiler");
        $__internal_5d11fe2f293275aba95b69c08e123722feb7b6f54564654c8ecf8b3b76caddd2->enter($__internal_5d11fe2f293275aba95b69c08e123722feb7b6f54564654c8ecf8b3b76caddd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_5d11fe2f293275aba95b69c08e123722feb7b6f54564654c8ecf8b3b76caddd2->leave($__internal_5d11fe2f293275aba95b69c08e123722feb7b6f54564654c8ecf8b3b76caddd2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
";
    }
}
