<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_ae9adfcb47c2256bd006342fc24349820a5efdf491b57b8fe44658b210a3e923 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abe160d166d0ffb13f24c7a605721694c261e04eb40bf9807ac197000a21c7d1 = $this->env->getExtension("native_profiler");
        $__internal_abe160d166d0ffb13f24c7a605721694c261e04eb40bf9807ac197000a21c7d1->enter($__internal_abe160d166d0ffb13f24c7a605721694c261e04eb40bf9807ac197000a21c7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe160d166d0ffb13f24c7a605721694c261e04eb40bf9807ac197000a21c7d1->leave($__internal_abe160d166d0ffb13f24c7a605721694c261e04eb40bf9807ac197000a21c7d1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b26ab825e4159c3c2b39f4afee790dee9942743a98a0a4744265102a66338bf1 = $this->env->getExtension("native_profiler");
        $__internal_b26ab825e4159c3c2b39f4afee790dee9942743a98a0a4744265102a66338bf1->enter($__internal_b26ab825e4159c3c2b39f4afee790dee9942743a98a0a4744265102a66338bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b26ab825e4159c3c2b39f4afee790dee9942743a98a0a4744265102a66338bf1->leave($__internal_b26ab825e4159c3c2b39f4afee790dee9942743a98a0a4744265102a66338bf1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
