<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_69480f2036688bff6322660b0c64567d86a1e223194308e587a941f335e692f9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50b6b4c0cf16200107958d9b2a47c95ee1d2fa58106c7f7d0e45e32859094b90 = $this->env->getExtension("native_profiler");
        $__internal_50b6b4c0cf16200107958d9b2a47c95ee1d2fa58106c7f7d0e45e32859094b90->enter($__internal_50b6b4c0cf16200107958d9b2a47c95ee1d2fa58106c7f7d0e45e32859094b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b6b4c0cf16200107958d9b2a47c95ee1d2fa58106c7f7d0e45e32859094b90->leave($__internal_50b6b4c0cf16200107958d9b2a47c95ee1d2fa58106c7f7d0e45e32859094b90_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bc3cf46dc34fdd8e8de2f8c8f4195e22ffe46b9caca2851eac14914d47076c92 = $this->env->getExtension("native_profiler");
        $__internal_bc3cf46dc34fdd8e8de2f8c8f4195e22ffe46b9caca2851eac14914d47076c92->enter($__internal_bc3cf46dc34fdd8e8de2f8c8f4195e22ffe46b9caca2851eac14914d47076c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_bc3cf46dc34fdd8e8de2f8c8f4195e22ffe46b9caca2851eac14914d47076c92->leave($__internal_bc3cf46dc34fdd8e8de2f8c8f4195e22ffe46b9caca2851eac14914d47076c92_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
";
    }
}
