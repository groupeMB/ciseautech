<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_5ec2829a87935b9eff678d1ad4b47ef4720bb3ba9165c9649d9ef64af22ba2a4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb17536ccb002a3c71dbd4f1dde9368e138701e8bd72730beef55a3d6e6d72d4 = $this->env->getExtension("native_profiler");
        $__internal_bb17536ccb002a3c71dbd4f1dde9368e138701e8bd72730beef55a3d6e6d72d4->enter($__internal_bb17536ccb002a3c71dbd4f1dde9368e138701e8bd72730beef55a3d6e6d72d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb17536ccb002a3c71dbd4f1dde9368e138701e8bd72730beef55a3d6e6d72d4->leave($__internal_bb17536ccb002a3c71dbd4f1dde9368e138701e8bd72730beef55a3d6e6d72d4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_11aef421b6dccd4b9caa7cf7d19792fd53c3cfdb806241bf4495d0de47b2ca60 = $this->env->getExtension("native_profiler");
        $__internal_11aef421b6dccd4b9caa7cf7d19792fd53c3cfdb806241bf4495d0de47b2ca60->enter($__internal_11aef421b6dccd4b9caa7cf7d19792fd53c3cfdb806241bf4495d0de47b2ca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_11aef421b6dccd4b9caa7cf7d19792fd53c3cfdb806241bf4495d0de47b2ca60->leave($__internal_11aef421b6dccd4b9caa7cf7d19792fd53c3cfdb806241bf4495d0de47b2ca60_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
";
    }
}
