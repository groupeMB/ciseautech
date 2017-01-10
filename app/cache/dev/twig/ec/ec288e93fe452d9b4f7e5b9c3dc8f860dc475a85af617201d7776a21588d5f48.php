<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_1bf8d484381c231f61abf3f214c589f58b2f86c656321070cb3444d7865f790e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cff54a11ebb6e02eb2b4c8a62993acbdd7b8ceb7d708cd7384b0c7f6e438504 = $this->env->getExtension("native_profiler");
        $__internal_3cff54a11ebb6e02eb2b4c8a62993acbdd7b8ceb7d708cd7384b0c7f6e438504->enter($__internal_3cff54a11ebb6e02eb2b4c8a62993acbdd7b8ceb7d708cd7384b0c7f6e438504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cff54a11ebb6e02eb2b4c8a62993acbdd7b8ceb7d708cd7384b0c7f6e438504->leave($__internal_3cff54a11ebb6e02eb2b4c8a62993acbdd7b8ceb7d708cd7384b0c7f6e438504_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3519149f5a528bd9186431dea95d6622739d783b05b2604edfdd9eb6ef5805da = $this->env->getExtension("native_profiler");
        $__internal_3519149f5a528bd9186431dea95d6622739d783b05b2604edfdd9eb6ef5805da->enter($__internal_3519149f5a528bd9186431dea95d6622739d783b05b2604edfdd9eb6ef5805da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_3519149f5a528bd9186431dea95d6622739d783b05b2604edfdd9eb6ef5805da->leave($__internal_3519149f5a528bd9186431dea95d6622739d783b05b2604edfdd9eb6ef5805da_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
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
