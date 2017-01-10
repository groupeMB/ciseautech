<?php

/* @SonataAdmin/CRUD/base_standard_edit_field.html.twig */
class __TwigTemplate_58a02f7690f2067542c042887633e36cc8485756e0eec1cbdca43fbb6019a546 extends Twig_Template
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
        $__internal_5ad5cc978a93162235877acf8eeb6acab612c2e7548cd423e49a5664c967e497 = $this->env->getExtension("native_profiler");
        $__internal_5ad5cc978a93162235877acf8eeb6acab612c2e7548cd423e49a5664c967e497->enter($__internal_5ad5cc978a93162235877acf8eeb6acab612c2e7548cd423e49a5664c967e497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

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
        
        $__internal_5ad5cc978a93162235877acf8eeb6acab612c2e7548cd423e49a5664c967e497->leave($__internal_5ad5cc978a93162235877acf8eeb6acab612c2e7548cd423e49a5664c967e497_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_6b87bb14136bbe347acde434262d062f89f701d055f6c15a6cd026a1ecbca699 = $this->env->getExtension("native_profiler");
        $__internal_6b87bb14136bbe347acde434262d062f89f701d055f6c15a6cd026a1ecbca699->enter($__internal_6b87bb14136bbe347acde434262d062f89f701d055f6c15a6cd026a1ecbca699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_6b87bb14136bbe347acde434262d062f89f701d055f6c15a6cd026a1ecbca699->leave($__internal_6b87bb14136bbe347acde434262d062f89f701d055f6c15a6cd026a1ecbca699_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_c471d47964f9bfe704120efce7c7721b4fa1eca2a820416d427a14b6dfbf837a = $this->env->getExtension("native_profiler");
        $__internal_c471d47964f9bfe704120efce7c7721b4fa1eca2a820416d427a14b6dfbf837a->enter($__internal_c471d47964f9bfe704120efce7c7721b4fa1eca2a820416d427a14b6dfbf837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_c471d47964f9bfe704120efce7c7721b4fa1eca2a820416d427a14b6dfbf837a->leave($__internal_c471d47964f9bfe704120efce7c7721b4fa1eca2a820416d427a14b6dfbf837a_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_78f7b0a26bea8b9e91befd7faac952f6b5e57e878833d194765d4484d33933c5 = $this->env->getExtension("native_profiler");
        $__internal_78f7b0a26bea8b9e91befd7faac952f6b5e57e878833d194765d4484d33933c5->enter($__internal_78f7b0a26bea8b9e91befd7faac952f6b5e57e878833d194765d4484d33933c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_78f7b0a26bea8b9e91befd7faac952f6b5e57e878833d194765d4484d33933c5->leave($__internal_78f7b0a26bea8b9e91befd7faac952f6b5e57e878833d194765d4484d33933c5_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_7cb723d7ccd0ad23eff3787bc599bb77f61cb27080b48a73fc1ba15d4ae1b135 = $this->env->getExtension("native_profiler");
        $__internal_7cb723d7ccd0ad23eff3787bc599bb77f61cb27080b48a73fc1ba15d4ae1b135->enter($__internal_7cb723d7ccd0ad23eff3787bc599bb77f61cb27080b48a73fc1ba15d4ae1b135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_7cb723d7ccd0ad23eff3787bc599bb77f61cb27080b48a73fc1ba15d4ae1b135->leave($__internal_7cb723d7ccd0ad23eff3787bc599bb77f61cb27080b48a73fc1ba15d4ae1b135_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_standard_edit_field.html.twig";
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
