<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_69eaece62a8f629b336d1ec5dfa0e662504e2065656c7ceb9f95f11851bb7ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7121824f06b58a05e4ffc308070eaff28ea451e74a14d5df2c1686a9cdf417d = $this->env->getExtension("native_profiler");
        $__internal_b7121824f06b58a05e4ffc308070eaff28ea451e74a14d5df2c1686a9cdf417d->enter($__internal_b7121824f06b58a05e4ffc308070eaff28ea451e74a14d5df2c1686a9cdf417d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_b7121824f06b58a05e4ffc308070eaff28ea451e74a14d5df2c1686a9cdf417d->leave($__internal_b7121824f06b58a05e4ffc308070eaff28ea451e74a14d5df2c1686a9cdf417d_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_91e6bbed506c3e039ed23b0bdd8daa562e57ace97873316d18e82344d8808bd6 = $this->env->getExtension("native_profiler");
        $__internal_91e6bbed506c3e039ed23b0bdd8daa562e57ace97873316d18e82344d8808bd6->enter($__internal_91e6bbed506c3e039ed23b0bdd8daa562e57ace97873316d18e82344d8808bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_91e6bbed506c3e039ed23b0bdd8daa562e57ace97873316d18e82344d8808bd6->leave($__internal_91e6bbed506c3e039ed23b0bdd8daa562e57ace97873316d18e82344d8808bd6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}
