<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_9d4412da1413d59c0b380565daa91e40a38ae40c8bd4655984bbf28ccf3563e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e299482f25a3637bd5ab5fbf696a11985c2bf4c8b92b9ef7675e3d1bbdc31800 = $this->env->getExtension("native_profiler");
        $__internal_e299482f25a3637bd5ab5fbf696a11985c2bf4c8b92b9ef7675e3d1bbdc31800->enter($__internal_e299482f25a3637bd5ab5fbf696a11985c2bf4c8b92b9ef7675e3d1bbdc31800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e299482f25a3637bd5ab5fbf696a11985c2bf4c8b92b9ef7675e3d1bbdc31800->leave($__internal_e299482f25a3637bd5ab5fbf696a11985c2bf4c8b92b9ef7675e3d1bbdc31800_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3ce0a4b17488308a3eb8bf46730f4b812f52ec1848e7d3534c2258d6cee2ccc1 = $this->env->getExtension("native_profiler");
        $__internal_3ce0a4b17488308a3eb8bf46730f4b812f52ec1848e7d3534c2258d6cee2ccc1->enter($__internal_3ce0a4b17488308a3eb8bf46730f4b812f52ec1848e7d3534c2258d6cee2ccc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 18
        echo "    ";
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 20
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
        // line 27
        echo "    </ul>
";
        
        $__internal_3ce0a4b17488308a3eb8bf46730f4b812f52ec1848e7d3534c2258d6cee2ccc1->leave($__internal_3ce0a4b17488308a3eb8bf46730f4b812f52ec1848e7d3534c2258d6cee2ccc1_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  84 => 26,  75 => 24,  70 => 23,  67 => 22,  56 => 20,  51 => 19,  48 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    <ul class=\"sonata-ba-show-one-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% set route_role = route_name | upper %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.isGranted(route_role) and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value%}
            <li><a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">{{ element|render_relation_element(field_description) }}</a></li>
        {% endfor %}
    {% else %}
        {% for element in value%}
            <li>{{ element|render_relation_element(field_description) }}</li>
        {% endfor %}
    {% endif %}
    </ul>
{% endblock %}
";
    }
}
