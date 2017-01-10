<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_0b39658e0d56b36b225798bb835c0a74f3bb6bc677fe6552a080bf7f1362e1bc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d10a3838d3a85559fe4fea61d3616f56ba30741669ece553ee2ac4b42b63755c = $this->env->getExtension("native_profiler");
        $__internal_d10a3838d3a85559fe4fea61d3616f56ba30741669ece553ee2ac4b42b63755c->enter($__internal_d10a3838d3a85559fe4fea61d3616f56ba30741669ece553ee2ac4b42b63755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10a3838d3a85559fe4fea61d3616f56ba30741669ece553ee2ac4b42b63755c->leave($__internal_d10a3838d3a85559fe4fea61d3616f56ba30741669ece553ee2ac4b42b63755c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_43e8f1ae0627a523f340b5211feff5dae8d6449ca2ef5aa86448d6c487cb7c37 = $this->env->getExtension("native_profiler");
        $__internal_43e8f1ae0627a523f340b5211feff5dae8d6449ca2ef5aa86448d6c487cb7c37->enter($__internal_43e8f1ae0627a523f340b5211feff5dae8d6449ca2ef5aa86448d6c487cb7c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_43e8f1ae0627a523f340b5211feff5dae8d6449ca2ef5aa86448d6c487cb7c37->leave($__internal_43e8f1ae0627a523f340b5211feff5dae8d6449ca2ef5aa86448d6c487cb7c37_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
