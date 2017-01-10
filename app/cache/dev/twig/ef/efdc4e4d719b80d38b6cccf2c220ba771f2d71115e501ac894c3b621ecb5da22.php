<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_179a548443ece7f822aee72906bbf5ca6163f342adf7175f35df0f4c03ceea78 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a4ceaaa6c40aa465ca9cb7b66eae4a35ce8f41a972695077ffd5ad90777f0d6 = $this->env->getExtension("native_profiler");
        $__internal_0a4ceaaa6c40aa465ca9cb7b66eae4a35ce8f41a972695077ffd5ad90777f0d6->enter($__internal_0a4ceaaa6c40aa465ca9cb7b66eae4a35ce8f41a972695077ffd5ad90777f0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4ceaaa6c40aa465ca9cb7b66eae4a35ce8f41a972695077ffd5ad90777f0d6->leave($__internal_0a4ceaaa6c40aa465ca9cb7b66eae4a35ce8f41a972695077ffd5ad90777f0d6_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b19ec5a8b381a2e600b3662faf91e5d3f6bc68c7b102cc4520a81a2003027116 = $this->env->getExtension("native_profiler");
        $__internal_b19ec5a8b381a2e600b3662faf91e5d3f6bc68c7b102cc4520a81a2003027116->enter($__internal_b19ec5a8b381a2e600b3662faf91e5d3f6bc68c7b102cc4520a81a2003027116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b19ec5a8b381a2e600b3662faf91e5d3f6bc68c7b102cc4520a81a2003027116->leave($__internal_b19ec5a8b381a2e600b3662faf91e5d3f6bc68c7b102cc4520a81a2003027116_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4b848b8a14e34b6d6784f4ac965bea5aade190597b3341779380e18bdac014ba = $this->env->getExtension("native_profiler");
        $__internal_4b848b8a14e34b6d6784f4ac965bea5aade190597b3341779380e18bdac014ba->enter($__internal_4b848b8a14e34b6d6784f4ac965bea5aade190597b3341779380e18bdac014ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4b848b8a14e34b6d6784f4ac965bea5aade190597b3341779380e18bdac014ba->leave($__internal_4b848b8a14e34b6d6784f4ac965bea5aade190597b3341779380e18bdac014ba_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f2f8059f91f7c72e7f66dba86306e25218114fe48514cb80f20d7fb8406c54ed = $this->env->getExtension("native_profiler");
        $__internal_f2f8059f91f7c72e7f66dba86306e25218114fe48514cb80f20d7fb8406c54ed->enter($__internal_f2f8059f91f7c72e7f66dba86306e25218114fe48514cb80f20d7fb8406c54ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_f2f8059f91f7c72e7f66dba86306e25218114fe48514cb80f20d7fb8406c54ed->leave($__internal_f2f8059f91f7c72e7f66dba86306e25218114fe48514cb80f20d7fb8406c54ed_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_727f27de7492213ed2f72a12ac8b7838f52c135031afdf1e04ef353e865400a3 = $this->env->getExtension("native_profiler");
        $__internal_727f27de7492213ed2f72a12ac8b7838f52c135031afdf1e04ef353e865400a3->enter($__internal_727f27de7492213ed2f72a12ac8b7838f52c135031afdf1e04ef353e865400a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_727f27de7492213ed2f72a12ac8b7838f52c135031afdf1e04ef353e865400a3->leave($__internal_727f27de7492213ed2f72a12ac8b7838f52c135031afdf1e04ef353e865400a3_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_700dd6a8aaa6fcb69d6037e0ce39dc2e01d2a3b63318a3a65e370d00f895ddec = $this->env->getExtension("native_profiler");
        $__internal_700dd6a8aaa6fcb69d6037e0ce39dc2e01d2a3b63318a3a65e370d00f895ddec->enter($__internal_700dd6a8aaa6fcb69d6037e0ce39dc2e01d2a3b63318a3a65e370d00f895ddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_700dd6a8aaa6fcb69d6037e0ce39dc2e01d2a3b63318a3a65e370d00f895ddec->leave($__internal_700dd6a8aaa6fcb69d6037e0ce39dc2e01d2a3b63318a3a65e370d00f895ddec_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_29e3fc7b2c7d823ba40c7d582910a640507d00bb81abaa0c9b234922ff31cf4c = $this->env->getExtension("native_profiler");
        $__internal_29e3fc7b2c7d823ba40c7d582910a640507d00bb81abaa0c9b234922ff31cf4c->enter($__internal_29e3fc7b2c7d823ba40c7d582910a640507d00bb81abaa0c9b234922ff31cf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_29e3fc7b2c7d823ba40c7d582910a640507d00bb81abaa0c9b234922ff31cf4c->leave($__internal_29e3fc7b2c7d823ba40c7d582910a640507d00bb81abaa0c9b234922ff31cf4c_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_aa88020a2f92561537b7ba5c8253583923efa3624cb258f3cf2c8eea828feedf = $this->env->getExtension("native_profiler");
        $__internal_aa88020a2f92561537b7ba5c8253583923efa3624cb258f3cf2c8eea828feedf->enter($__internal_aa88020a2f92561537b7ba5c8253583923efa3624cb258f3cf2c8eea828feedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_aa88020a2f92561537b7ba5c8253583923efa3624cb258f3cf2c8eea828feedf->leave($__internal_aa88020a2f92561537b7ba5c8253583923efa3624cb258f3cf2c8eea828feedf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
