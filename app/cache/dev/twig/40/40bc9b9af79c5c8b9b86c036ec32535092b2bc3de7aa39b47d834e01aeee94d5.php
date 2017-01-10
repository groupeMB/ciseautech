<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_f940a43c7a38c6602dcb1ea6e3a6aca0eb2e477787428ae64518cbc5ec1a7229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbc123675f82971bb0222e159076e3bddbe5436a7bbcaf434b3274dc1a3185e9 = $this->env->getExtension("native_profiler");
        $__internal_dbc123675f82971bb0222e159076e3bddbe5436a7bbcaf434b3274dc1a3185e9->enter($__internal_dbc123675f82971bb0222e159076e3bddbe5436a7bbcaf434b3274dc1a3185e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_dbc123675f82971bb0222e159076e3bddbe5436a7bbcaf434b3274dc1a3185e9->leave($__internal_dbc123675f82971bb0222e159076e3bddbe5436a7bbcaf434b3274dc1a3185e9_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_e5be01b0cd4caa46133a34a6f11da2436e03845ef19331d4cecf17044bef8e95 = $this->env->getExtension("native_profiler");
        $__internal_e5be01b0cd4caa46133a34a6f11da2436e03845ef19331d4cecf17044bef8e95->enter($__internal_e5be01b0cd4caa46133a34a6f11da2436e03845ef19331d4cecf17044bef8e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_e5be01b0cd4caa46133a34a6f11da2436e03845ef19331d4cecf17044bef8e95->leave($__internal_e5be01b0cd4caa46133a34a6f11da2436e03845ef19331d4cecf17044bef8e95_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_5cc56e503643c2025d537a036cd389d005831a263e378b27bec559ac49a9e83c = $this->env->getExtension("native_profiler");
        $__internal_5cc56e503643c2025d537a036cd389d005831a263e378b27bec559ac49a9e83c->enter($__internal_5cc56e503643c2025d537a036cd389d005831a263e378b27bec559ac49a9e83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_5cc56e503643c2025d537a036cd389d005831a263e378b27bec559ac49a9e83c->leave($__internal_5cc56e503643c2025d537a036cd389d005831a263e378b27bec559ac49a9e83c_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_58c3f1fca0ae58f6acba23c1c74f23ee0782ba36f861e89ad63157654be78cc4 = $this->env->getExtension("native_profiler");
        $__internal_58c3f1fca0ae58f6acba23c1c74f23ee0782ba36f861e89ad63157654be78cc4->enter($__internal_58c3f1fca0ae58f6acba23c1c74f23ee0782ba36f861e89ad63157654be78cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_58c3f1fca0ae58f6acba23c1c74f23ee0782ba36f861e89ad63157654be78cc4->leave($__internal_58c3f1fca0ae58f6acba23c1c74f23ee0782ba36f861e89ad63157654be78cc4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>
<td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
";
    }
}
