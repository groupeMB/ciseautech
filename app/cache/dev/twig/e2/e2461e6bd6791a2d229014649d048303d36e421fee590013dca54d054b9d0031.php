<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c4e2046fc766fd04110b88bb06c423c9a480341286538c51272dfceb992fee6b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bbaf560412dfc60c16a8ff150cbe9c71489dec7d8f813abc1350fde2dbdf072 = $this->env->getExtension("native_profiler");
        $__internal_9bbaf560412dfc60c16a8ff150cbe9c71489dec7d8f813abc1350fde2dbdf072->enter($__internal_9bbaf560412dfc60c16a8ff150cbe9c71489dec7d8f813abc1350fde2dbdf072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bbaf560412dfc60c16a8ff150cbe9c71489dec7d8f813abc1350fde2dbdf072->leave($__internal_9bbaf560412dfc60c16a8ff150cbe9c71489dec7d8f813abc1350fde2dbdf072_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_23e30b493206976ce8add1da8f048ed1676dd629e18f3ac4c868bc83ba99ee5c = $this->env->getExtension("native_profiler");
        $__internal_23e30b493206976ce8add1da8f048ed1676dd629e18f3ac4c868bc83ba99ee5c->enter($__internal_23e30b493206976ce8add1da8f048ed1676dd629e18f3ac4c868bc83ba99ee5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_23e30b493206976ce8add1da8f048ed1676dd629e18f3ac4c868bc83ba99ee5c->leave($__internal_23e30b493206976ce8add1da8f048ed1676dd629e18f3ac4c868bc83ba99ee5c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
