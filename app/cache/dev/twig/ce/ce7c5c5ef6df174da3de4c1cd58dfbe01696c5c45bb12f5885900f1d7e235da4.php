<?php

/* CoutureGestionBundle:Couture:autocompleteClient.html.twig */
class __TwigTemplate_325774f601fe85f980125d4ccde44085b7e0a8830a32fff089f97df6eb18bc2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d3fbbc60f670eb781d7d1b5872b9bf9c862f5409dc73b0042a36687d9601f20 = $this->env->getExtension("native_profiler");
        $__internal_6d3fbbc60f670eb781d7d1b5872b9bf9c862f5409dc73b0042a36687d9601f20->enter($__internal_6d3fbbc60f670eb781d7d1b5872b9bf9c862f5409dc73b0042a36687d9601f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:autocompleteClient.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 2
            echo twig_jsonencode_filter(array("id" => $this->getAttribute($context["client"], "id", array()), "label" => $this->getAttribute($context["client"], "nom", array()), "value" => $this->getAttribute($context["client"], "prenom", array())));
            // line 3
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6d3fbbc60f670eb781d7d1b5872b9bf9c862f5409dc73b0042a36687d9601f20->leave($__internal_6d3fbbc60f670eb781d7d1b5872b9bf9c862f5409dc73b0042a36687d9601f20_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:autocompleteClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  39 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for client in results -%}
    {{ {id: client.id, label: client.nom, value: client.prenom}|json_encode|raw }}
    {%- if not loop.last %},{% endif -%}
{%- endfor %}";
    }
}
