<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_77db749604dd5c86cced0f066c06b99c3a1bd54eae2f90d05b10ff80f80ee158 extends Twig_Template
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
        $__internal_1014f69d3dbcbfbf793a938a35dc856ba3d6ae9876c2b60f0ff385c9e925fdbe = $this->env->getExtension("native_profiler");
        $__internal_1014f69d3dbcbfbf793a938a35dc856ba3d6ae9876c2b60f0ff385c9e925fdbe->enter($__internal_1014f69d3dbcbfbf793a938a35dc856ba3d6ae9876c2b60f0ff385c9e925fdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_1014f69d3dbcbfbf793a938a35dc856ba3d6ae9876c2b60f0ff385c9e925fdbe->leave($__internal_1014f69d3dbcbfbf793a938a35dc856ba3d6ae9876c2b60f0ff385c9e925fdbe_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_ce2bde890e9f752a987812d8f9f2b23cd8882b97df9487c83ad39f8cbac1f7d4 = $this->env->getExtension("native_profiler");
        $__internal_ce2bde890e9f752a987812d8f9f2b23cd8882b97df9487c83ad39f8cbac1f7d4->enter($__internal_ce2bde890e9f752a987812d8f9f2b23cd8882b97df9487c83ad39f8cbac1f7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_ce2bde890e9f752a987812d8f9f2b23cd8882b97df9487c83ad39f8cbac1f7d4->leave($__internal_ce2bde890e9f752a987812d8f9f2b23cd8882b97df9487c83ad39f8cbac1f7d4_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_1efdd1a5fa33110a4767907845144827b6d7bf0d66237e69cad6cce7bd294293 = $this->env->getExtension("native_profiler");
        $__internal_1efdd1a5fa33110a4767907845144827b6d7bf0d66237e69cad6cce7bd294293->enter($__internal_1efdd1a5fa33110a4767907845144827b6d7bf0d66237e69cad6cce7bd294293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_1efdd1a5fa33110a4767907845144827b6d7bf0d66237e69cad6cce7bd294293->leave($__internal_1efdd1a5fa33110a4767907845144827b6d7bf0d66237e69cad6cce7bd294293_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_08c1d17acbc8dcc6343c549c088b97a7afe4d2f5561e1cdbe731b8f9baed041a = $this->env->getExtension("native_profiler");
        $__internal_08c1d17acbc8dcc6343c549c088b97a7afe4d2f5561e1cdbe731b8f9baed041a->enter($__internal_08c1d17acbc8dcc6343c549c088b97a7afe4d2f5561e1cdbe731b8f9baed041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_08c1d17acbc8dcc6343c549c088b97a7afe4d2f5561e1cdbe731b8f9baed041a->leave($__internal_08c1d17acbc8dcc6343c549c088b97a7afe4d2f5561e1cdbe731b8f9baed041a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
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
