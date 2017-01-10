<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_a33d224f1db84642ae0b9784eb3b53eb400bccd85ad27f3e06f8f17fa8125b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6cf205e125330051f718a8230362f1f91a2f6bd562e63969d06bf5eb4f45277 = $this->env->getExtension("native_profiler");
        $__internal_a6cf205e125330051f718a8230362f1f91a2f6bd562e63969d06bf5eb4f45277->enter($__internal_a6cf205e125330051f718a8230362f1f91a2f6bd562e63969d06bf5eb4f45277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6cf205e125330051f718a8230362f1f91a2f6bd562e63969d06bf5eb4f45277->leave($__internal_a6cf205e125330051f718a8230362f1f91a2f6bd562e63969d06bf5eb4f45277_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_202b10b5bb4c2a37099dc0e402657f2dbf765ad18dee6b0c66910bcd6e20efbc = $this->env->getExtension("native_profiler");
        $__internal_202b10b5bb4c2a37099dc0e402657f2dbf765ad18dee6b0c66910bcd6e20efbc->enter($__internal_202b10b5bb4c2a37099dc0e402657f2dbf765ad18dee6b0c66910bcd6e20efbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_202b10b5bb4c2a37099dc0e402657f2dbf765ad18dee6b0c66910bcd6e20efbc->leave($__internal_202b10b5bb4c2a37099dc0e402657f2dbf765ad18dee6b0c66910bcd6e20efbc_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
";
    }
}
