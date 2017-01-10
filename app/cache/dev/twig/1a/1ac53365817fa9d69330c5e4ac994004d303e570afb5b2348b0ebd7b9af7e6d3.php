<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_dddbb6699c7e0867671c9ff8f109d1d2f330d27a3c839d58ba481c6429846cc4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_564f48e661ee2d085c6498f54e3ddf8029cc81c3d2956fb3059ca601bfa428c6 = $this->env->getExtension("native_profiler");
        $__internal_564f48e661ee2d085c6498f54e3ddf8029cc81c3d2956fb3059ca601bfa428c6->enter($__internal_564f48e661ee2d085c6498f54e3ddf8029cc81c3d2956fb3059ca601bfa428c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564f48e661ee2d085c6498f54e3ddf8029cc81c3d2956fb3059ca601bfa428c6->leave($__internal_564f48e661ee2d085c6498f54e3ddf8029cc81c3d2956fb3059ca601bfa428c6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a4d788bd53055aa3e9eeb343cf6ddb1fbcd7e412a9d0216f7aee5c5e33b001f0 = $this->env->getExtension("native_profiler");
        $__internal_a4d788bd53055aa3e9eeb343cf6ddb1fbcd7e412a9d0216f7aee5c5e33b001f0->enter($__internal_a4d788bd53055aa3e9eeb343cf6ddb1fbcd7e412a9d0216f7aee5c5e33b001f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_a4d788bd53055aa3e9eeb343cf6ddb1fbcd7e412a9d0216f7aee5c5e33b001f0->leave($__internal_a4d788bd53055aa3e9eeb343cf6ddb1fbcd7e412a9d0216f7aee5c5e33b001f0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
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
