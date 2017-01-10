<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_b9542720e47b50f38d165720bebee3b0805b26fbd02a4aaae27bb98fcdb93036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3073fb46b2dc6cc63356b06090b4b63c86d305f53445717886850445ce833d81 = $this->env->getExtension("native_profiler");
        $__internal_3073fb46b2dc6cc63356b06090b4b63c86d305f53445717886850445ce833d81->enter($__internal_3073fb46b2dc6cc63356b06090b4b63c86d305f53445717886850445ce833d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3073fb46b2dc6cc63356b06090b4b63c86d305f53445717886850445ce833d81->leave($__internal_3073fb46b2dc6cc63356b06090b4b63c86d305f53445717886850445ce833d81_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b6547ea768d99e72894b18a6278b02fb0872a9dc9640816ae138cdfba111795b = $this->env->getExtension("native_profiler");
        $__internal_b6547ea768d99e72894b18a6278b02fb0872a9dc9640816ae138cdfba111795b->enter($__internal_b6547ea768d99e72894b18a6278b02fb0872a9dc9640816ae138cdfba111795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b6547ea768d99e72894b18a6278b02fb0872a9dc9640816ae138cdfba111795b->leave($__internal_b6547ea768d99e72894b18a6278b02fb0872a9dc9640816ae138cdfba111795b_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4ed7ff3baff82d2afadba0ce6d8efd5bf900a492c40d6354f8397a93c7306399 = $this->env->getExtension("native_profiler");
        $__internal_4ed7ff3baff82d2afadba0ce6d8efd5bf900a492c40d6354f8397a93c7306399->enter($__internal_4ed7ff3baff82d2afadba0ce6d8efd5bf900a492c40d6354f8397a93c7306399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4ed7ff3baff82d2afadba0ce6d8efd5bf900a492c40d6354f8397a93c7306399->leave($__internal_4ed7ff3baff82d2afadba0ce6d8efd5bf900a492c40d6354f8397a93c7306399_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b233946f86833aa55ef6c56c1b83eae9a5c0cf7567648c2639a03273ff62a3fe = $this->env->getExtension("native_profiler");
        $__internal_b233946f86833aa55ef6c56c1b83eae9a5c0cf7567648c2639a03273ff62a3fe->enter($__internal_b233946f86833aa55ef6c56c1b83eae9a5c0cf7567648c2639a03273ff62a3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b233946f86833aa55ef6c56c1b83eae9a5c0cf7567648c2639a03273ff62a3fe->leave($__internal_b233946f86833aa55ef6c56c1b83eae9a5c0cf7567648c2639a03273ff62a3fe_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_97dd42d1400191f8a35e261c513098426c68aee2c6f33945d6d8f9b062f2b3e1 = $this->env->getExtension("native_profiler");
        $__internal_97dd42d1400191f8a35e261c513098426c68aee2c6f33945d6d8f9b062f2b3e1->enter($__internal_97dd42d1400191f8a35e261c513098426c68aee2c6f33945d6d8f9b062f2b3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_97dd42d1400191f8a35e261c513098426c68aee2c6f33945d6d8f9b062f2b3e1->leave($__internal_97dd42d1400191f8a35e261c513098426c68aee2c6f33945d6d8f9b062f2b3e1_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f4a8c3e011d7a7e5312b6fda210475e7eb7a3d339b7451721299e3107ae5c30 = $this->env->getExtension("native_profiler");
        $__internal_7f4a8c3e011d7a7e5312b6fda210475e7eb7a3d339b7451721299e3107ae5c30->enter($__internal_7f4a8c3e011d7a7e5312b6fda210475e7eb7a3d339b7451721299e3107ae5c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_7f4a8c3e011d7a7e5312b6fda210475e7eb7a3d339b7451721299e3107ae5c30->leave($__internal_7f4a8c3e011d7a7e5312b6fda210475e7eb7a3d339b7451721299e3107ae5c30_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2280414776a091acd2f9d8bf5d50942a4de938daf6e5b18d93e78c4163ae8bad = $this->env->getExtension("native_profiler");
        $__internal_2280414776a091acd2f9d8bf5d50942a4de938daf6e5b18d93e78c4163ae8bad->enter($__internal_2280414776a091acd2f9d8bf5d50942a4de938daf6e5b18d93e78c4163ae8bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_2280414776a091acd2f9d8bf5d50942a4de938daf6e5b18d93e78c4163ae8bad->leave($__internal_2280414776a091acd2f9d8bf5d50942a4de938daf6e5b18d93e78c4163ae8bad_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_cc9dfc9d4aa2b186f224d64f2310deb3b5da82abb9961ff96e9eb4eb30631d3b = $this->env->getExtension("native_profiler");
        $__internal_cc9dfc9d4aa2b186f224d64f2310deb3b5da82abb9961ff96e9eb4eb30631d3b->enter($__internal_cc9dfc9d4aa2b186f224d64f2310deb3b5da82abb9961ff96e9eb4eb30631d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_cc9dfc9d4aa2b186f224d64f2310deb3b5da82abb9961ff96e9eb4eb30631d3b->leave($__internal_cc9dfc9d4aa2b186f224d64f2310deb3b5da82abb9961ff96e9eb4eb30631d3b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
";
    }
}
