<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_123d54caaa15dc5a952c68165fa8ab97924153d5e60d489fcc9bbfaa1b41c951 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d229d1b812f6544f9d1b8438dc9a9af0641cd026164f28b111a02e9b2f96ec4 = $this->env->getExtension("native_profiler");
        $__internal_4d229d1b812f6544f9d1b8438dc9a9af0641cd026164f28b111a02e9b2f96ec4->enter($__internal_4d229d1b812f6544f9d1b8438dc9a9af0641cd026164f28b111a02e9b2f96ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d229d1b812f6544f9d1b8438dc9a9af0641cd026164f28b111a02e9b2f96ec4->leave($__internal_4d229d1b812f6544f9d1b8438dc9a9af0641cd026164f28b111a02e9b2f96ec4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_787ace51e0ec1c76296fab8ebccdaafd3de89654e604ed10cdaaa34ee74d8313 = $this->env->getExtension("native_profiler");
        $__internal_787ace51e0ec1c76296fab8ebccdaafd3de89654e604ed10cdaaa34ee74d8313->enter($__internal_787ace51e0ec1c76296fab8ebccdaafd3de89654e604ed10cdaaa34ee74d8313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_787ace51e0ec1c76296fab8ebccdaafd3de89654e604ed10cdaaa34ee74d8313->leave($__internal_787ace51e0ec1c76296fab8ebccdaafd3de89654e604ed10cdaaa34ee74d8313_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
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
