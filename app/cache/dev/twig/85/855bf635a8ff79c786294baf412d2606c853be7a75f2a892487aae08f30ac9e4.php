<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_daaa1e9537788ede631eec72ae02c13dd4f249c7f2b7a5ecf85f87d8236fcfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a3c21b20c37d0ac670c4e7a0fd1c08c15ebd187ed7b18d22269f9451812f93 = $this->env->getExtension("native_profiler");
        $__internal_09a3c21b20c37d0ac670c4e7a0fd1c08c15ebd187ed7b18d22269f9451812f93->enter($__internal_09a3c21b20c37d0ac670c4e7a0fd1c08c15ebd187ed7b18d22269f9451812f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_09a3c21b20c37d0ac670c4e7a0fd1c08c15ebd187ed7b18d22269f9451812f93->leave($__internal_09a3c21b20c37d0ac670c4e7a0fd1c08c15ebd187ed7b18d22269f9451812f93_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7a05a9757db3683d9b9cd45c14bc09128fdfd2b0dc6b85ddf7c5f0d28184fca4 = $this->env->getExtension("native_profiler");
        $__internal_7a05a9757db3683d9b9cd45c14bc09128fdfd2b0dc6b85ddf7c5f0d28184fca4->enter($__internal_7a05a9757db3683d9b9cd45c14bc09128fdfd2b0dc6b85ddf7c5f0d28184fca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_7a05a9757db3683d9b9cd45c14bc09128fdfd2b0dc6b85ddf7c5f0d28184fca4->leave($__internal_7a05a9757db3683d9b9cd45c14bc09128fdfd2b0dc6b85ddf7c5f0d28184fca4_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_ffd30bb36174854b19b792a64999023119fc57e50d5b011e7077448791b8593c = $this->env->getExtension("native_profiler");
        $__internal_ffd30bb36174854b19b792a64999023119fc57e50d5b011e7077448791b8593c->enter($__internal_ffd30bb36174854b19b792a64999023119fc57e50d5b011e7077448791b8593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_ffd30bb36174854b19b792a64999023119fc57e50d5b011e7077448791b8593c->leave($__internal_ffd30bb36174854b19b792a64999023119fc57e50d5b011e7077448791b8593c_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_5434efeda02adf71f4638667b227275fe8ae0c67b705b07cba9840e417452849 = $this->env->getExtension("native_profiler");
        $__internal_5434efeda02adf71f4638667b227275fe8ae0c67b705b07cba9840e417452849->enter($__internal_5434efeda02adf71f4638667b227275fe8ae0c67b705b07cba9840e417452849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_5434efeda02adf71f4638667b227275fe8ae0c67b705b07cba9840e417452849->leave($__internal_5434efeda02adf71f4638667b227275fe8ae0c67b705b07cba9840e417452849_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
";
    }
}
