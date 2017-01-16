<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_1474f29668d1f5e7aafbb93bf0170d6005928fc4b2e3fa20f52bb488d81c1f9e extends Twig_Template
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
        $__internal_e6905f144146bd1adcc1fc8b1de844832dbf2cc625e05c0e85e384d03ca18afd = $this->env->getExtension("native_profiler");
        $__internal_e6905f144146bd1adcc1fc8b1de844832dbf2cc625e05c0e85e384d03ca18afd->enter($__internal_e6905f144146bd1adcc1fc8b1de844832dbf2cc625e05c0e85e384d03ca18afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_e6905f144146bd1adcc1fc8b1de844832dbf2cc625e05c0e85e384d03ca18afd->leave($__internal_e6905f144146bd1adcc1fc8b1de844832dbf2cc625e05c0e85e384d03ca18afd_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_872f1b8e800e6188f2cefba0b483cdfee009fbc88d3cdbda8bc5dcd8f3a21af3 = $this->env->getExtension("native_profiler");
        $__internal_872f1b8e800e6188f2cefba0b483cdfee009fbc88d3cdbda8bc5dcd8f3a21af3->enter($__internal_872f1b8e800e6188f2cefba0b483cdfee009fbc88d3cdbda8bc5dcd8f3a21af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_872f1b8e800e6188f2cefba0b483cdfee009fbc88d3cdbda8bc5dcd8f3a21af3->leave($__internal_872f1b8e800e6188f2cefba0b483cdfee009fbc88d3cdbda8bc5dcd8f3a21af3_prof);

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
