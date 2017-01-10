<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_2cbf880bfb72e4e464183cc543840daf54c8ad39f72b80dcf0a58441447d5274 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b44dc80545c83d64dbee7273517d70f9b4f68a410c55b1554217e6375c4517a5 = $this->env->getExtension("native_profiler");
        $__internal_b44dc80545c83d64dbee7273517d70f9b4f68a410c55b1554217e6375c4517a5->enter($__internal_b44dc80545c83d64dbee7273517d70f9b4f68a410c55b1554217e6375c4517a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44dc80545c83d64dbee7273517d70f9b4f68a410c55b1554217e6375c4517a5->leave($__internal_b44dc80545c83d64dbee7273517d70f9b4f68a410c55b1554217e6375c4517a5_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_10dbf508a47aaf0f0e1a6d47ae7da5a2008f25709fcbc231cbc360251d0dfa63 = $this->env->getExtension("native_profiler");
        $__internal_10dbf508a47aaf0f0e1a6d47ae7da5a2008f25709fcbc231cbc360251d0dfa63->enter($__internal_10dbf508a47aaf0f0e1a6d47ae7da5a2008f25709fcbc231cbc360251d0dfa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_10dbf508a47aaf0f0e1a6d47ae7da5a2008f25709fcbc231cbc360251d0dfa63->leave($__internal_10dbf508a47aaf0f0e1a6d47ae7da5a2008f25709fcbc231cbc360251d0dfa63_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
