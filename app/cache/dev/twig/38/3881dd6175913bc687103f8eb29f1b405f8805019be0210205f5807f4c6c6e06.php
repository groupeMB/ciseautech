<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_4da82ab0c0402c10ec76b0d18cc95da78f4a942b77460692f4d23b2c26595977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5bf017d3db6cb0fa02f3076b8b238e9157ea8a5773292438fed405d457bf54f = $this->env->getExtension("native_profiler");
        $__internal_d5bf017d3db6cb0fa02f3076b8b238e9157ea8a5773292438fed405d457bf54f->enter($__internal_d5bf017d3db6cb0fa02f3076b8b238e9157ea8a5773292438fed405d457bf54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5bf017d3db6cb0fa02f3076b8b238e9157ea8a5773292438fed405d457bf54f->leave($__internal_d5bf017d3db6cb0fa02f3076b8b238e9157ea8a5773292438fed405d457bf54f_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_2e39734193c10bfeb3b35febb101eabc8bef821b5c5017ad7b9af45b940da9ca = $this->env->getExtension("native_profiler");
        $__internal_2e39734193c10bfeb3b35febb101eabc8bef821b5c5017ad7b9af45b940da9ca->enter($__internal_2e39734193c10bfeb3b35febb101eabc8bef821b5c5017ad7b9af45b940da9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_2e39734193c10bfeb3b35febb101eabc8bef821b5c5017ad7b9af45b940da9ca->leave($__internal_2e39734193c10bfeb3b35febb101eabc8bef821b5c5017ad7b9af45b940da9ca_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
";
    }
}
