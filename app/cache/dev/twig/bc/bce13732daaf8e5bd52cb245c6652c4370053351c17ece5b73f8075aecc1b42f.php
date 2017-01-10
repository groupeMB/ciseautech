<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_67cef5cfdeabd460a44f2cef65a32e63062c11bbbaad12ce5913a76a52f0abfa extends Twig_Template
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
        $__internal_0745dc8937193fef247eb9c97e0729d30818499a5028b2b3adef5b01e2a9358f = $this->env->getExtension("native_profiler");
        $__internal_0745dc8937193fef247eb9c97e0729d30818499a5028b2b3adef5b01e2a9358f->enter($__internal_0745dc8937193fef247eb9c97e0729d30818499a5028b2b3adef5b01e2a9358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_0745dc8937193fef247eb9c97e0729d30818499a5028b2b3adef5b01e2a9358f->leave($__internal_0745dc8937193fef247eb9c97e0729d30818499a5028b2b3adef5b01e2a9358f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5b141521f4e44b52480227334a46c691c6c21eb48d9b1ba7371f752e7faaf940 = $this->env->getExtension("native_profiler");
        $__internal_5b141521f4e44b52480227334a46c691c6c21eb48d9b1ba7371f752e7faaf940->enter($__internal_5b141521f4e44b52480227334a46c691c6c21eb48d9b1ba7371f752e7faaf940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_5b141521f4e44b52480227334a46c691c6c21eb48d9b1ba7371f752e7faaf940->leave($__internal_5b141521f4e44b52480227334a46c691c6c21eb48d9b1ba7371f752e7faaf940_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_fda6e78089b1557703540c65ee1f6ef0dcaee9c0b7914cc3cafb776c27f10ea2 = $this->env->getExtension("native_profiler");
        $__internal_fda6e78089b1557703540c65ee1f6ef0dcaee9c0b7914cc3cafb776c27f10ea2->enter($__internal_fda6e78089b1557703540c65ee1f6ef0dcaee9c0b7914cc3cafb776c27f10ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_fda6e78089b1557703540c65ee1f6ef0dcaee9c0b7914cc3cafb776c27f10ea2->leave($__internal_fda6e78089b1557703540c65ee1f6ef0dcaee9c0b7914cc3cafb776c27f10ea2_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_c2aff1ddb70df5c6608dbd61b14d5d5293b11cf109667709bfc021ee1f1e96ba = $this->env->getExtension("native_profiler");
        $__internal_c2aff1ddb70df5c6608dbd61b14d5d5293b11cf109667709bfc021ee1f1e96ba->enter($__internal_c2aff1ddb70df5c6608dbd61b14d5d5293b11cf109667709bfc021ee1f1e96ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_c2aff1ddb70df5c6608dbd61b14d5d5293b11cf109667709bfc021ee1f1e96ba->leave($__internal_c2aff1ddb70df5c6608dbd61b14d5d5293b11cf109667709bfc021ee1f1e96ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
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
