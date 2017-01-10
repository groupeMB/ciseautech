<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_00180cb656a3c74d65842d1cfc59ddeae810a4214d8fde18624cd2f690d7c845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d323404d8064859076053f54f78f4bb87d61662508eb88f6e57745e1746dbfda = $this->env->getExtension("native_profiler");
        $__internal_d323404d8064859076053f54f78f4bb87d61662508eb88f6e57745e1746dbfda->enter($__internal_d323404d8064859076053f54f78f4bb87d61662508eb88f6e57745e1746dbfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_d323404d8064859076053f54f78f4bb87d61662508eb88f6e57745e1746dbfda->leave($__internal_d323404d8064859076053f54f78f4bb87d61662508eb88f6e57745e1746dbfda_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_db09b0d6ecc3d00906e0e4175d277e9b4e8f9efdf33deea96cd20ef39db582c8 = $this->env->getExtension("native_profiler");
        $__internal_db09b0d6ecc3d00906e0e4175d277e9b4e8f9efdf33deea96cd20ef39db582c8->enter($__internal_db09b0d6ecc3d00906e0e4175d277e9b4e8f9efdf33deea96cd20ef39db582c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_db09b0d6ecc3d00906e0e4175d277e9b4e8f9efdf33deea96cd20ef39db582c8->leave($__internal_db09b0d6ecc3d00906e0e4175d277e9b4e8f9efdf33deea96cd20ef39db582c8_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_40618ee1682d28158934279d2d2ec1269355019219b306fdad818c03826d80ca = $this->env->getExtension("native_profiler");
        $__internal_40618ee1682d28158934279d2d2ec1269355019219b306fdad818c03826d80ca->enter($__internal_40618ee1682d28158934279d2d2ec1269355019219b306fdad818c03826d80ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_40618ee1682d28158934279d2d2ec1269355019219b306fdad818c03826d80ca->leave($__internal_40618ee1682d28158934279d2d2ec1269355019219b306fdad818c03826d80ca_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_3a5806b5dddef60f1f836a9024d671e10e6de54f7c82c93fc01e7a8d731109cb = $this->env->getExtension("native_profiler");
        $__internal_3a5806b5dddef60f1f836a9024d671e10e6de54f7c82c93fc01e7a8d731109cb->enter($__internal_3a5806b5dddef60f1f836a9024d671e10e6de54f7c82c93fc01e7a8d731109cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_3a5806b5dddef60f1f836a9024d671e10e6de54f7c82c93fc01e7a8d731109cb->leave($__internal_3a5806b5dddef60f1f836a9024d671e10e6de54f7c82c93fc01e7a8d731109cb_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_c7d32488e92bb3cb60818634d3ee220621d4708ba8dd88a899b25b9ba1085b9f = $this->env->getExtension("native_profiler");
        $__internal_c7d32488e92bb3cb60818634d3ee220621d4708ba8dd88a899b25b9ba1085b9f->enter($__internal_c7d32488e92bb3cb60818634d3ee220621d4708ba8dd88a899b25b9ba1085b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_c7d32488e92bb3cb60818634d3ee220621d4708ba8dd88a899b25b9ba1085b9f->leave($__internal_c7d32488e92bb3cb60818634d3ee220621d4708ba8dd88a899b25b9ba1085b9f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  123 => 26,  111 => 23,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 13,  72 => 31,  70 => 30,  66 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  42 => 21,  39 => 20,  37 => 13,  29 => 12,  26 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
";
    }
}
