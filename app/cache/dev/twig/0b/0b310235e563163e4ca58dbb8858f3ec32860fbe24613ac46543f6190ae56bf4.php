<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_6b6ba71e48948bcca0847a9536043ff6ca2591dffb69fead82687dab0e130961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8746612f35cd2f5cad598dd1db9a5b51e380b2d223eb84b281d92977b6bb2b61 = $this->env->getExtension("native_profiler");
        $__internal_8746612f35cd2f5cad598dd1db9a5b51e380b2d223eb84b281d92977b6bb2b61->enter($__internal_8746612f35cd2f5cad598dd1db9a5b51e380b2d223eb84b281d92977b6bb2b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8746612f35cd2f5cad598dd1db9a5b51e380b2d223eb84b281d92977b6bb2b61->leave($__internal_8746612f35cd2f5cad598dd1db9a5b51e380b2d223eb84b281d92977b6bb2b61_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_68b147472796093194061d419483bd5c437bc54d6736fa36eb5f8f7f6749b905 = $this->env->getExtension("native_profiler");
        $__internal_68b147472796093194061d419483bd5c437bc54d6736fa36eb5f8f7f6749b905->enter($__internal_68b147472796093194061d419483bd5c437bc54d6736fa36eb5f8f7f6749b905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_68b147472796093194061d419483bd5c437bc54d6736fa36eb5f8f7f6749b905->leave($__internal_68b147472796093194061d419483bd5c437bc54d6736fa36eb5f8f7f6749b905_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_bfa8af83f9b132c756d33e58484ea1f51053c8715fb10daeed83091a00a5f042 = $this->env->getExtension("native_profiler");
        $__internal_bfa8af83f9b132c756d33e58484ea1f51053c8715fb10daeed83091a00a5f042->enter($__internal_bfa8af83f9b132c756d33e58484ea1f51053c8715fb10daeed83091a00a5f042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_bfa8af83f9b132c756d33e58484ea1f51053c8715fb10daeed83091a00a5f042->leave($__internal_bfa8af83f9b132c756d33e58484ea1f51053c8715fb10daeed83091a00a5f042_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_155c0749289240087be4c09fe85f66a6e7340ff6409527814b63a320147d3318 = $this->env->getExtension("native_profiler");
        $__internal_155c0749289240087be4c09fe85f66a6e7340ff6409527814b63a320147d3318->enter($__internal_155c0749289240087be4c09fe85f66a6e7340ff6409527814b63a320147d3318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_155c0749289240087be4c09fe85f66a6e7340ff6409527814b63a320147d3318->leave($__internal_155c0749289240087be4c09fe85f66a6e7340ff6409527814b63a320147d3318_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_dcf388a527bdfce74148aa8630d65d981c773fb52ece478565e0e45d7b72b82d = $this->env->getExtension("native_profiler");
        $__internal_dcf388a527bdfce74148aa8630d65d981c773fb52ece478565e0e45d7b72b82d->enter($__internal_dcf388a527bdfce74148aa8630d65d981c773fb52ece478565e0e45d7b72b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_dcf388a527bdfce74148aa8630d65d981c773fb52ece478565e0e45d7b72b82d->leave($__internal_dcf388a527bdfce74148aa8630d65d981c773fb52ece478565e0e45d7b72b82d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
";
    }
}
