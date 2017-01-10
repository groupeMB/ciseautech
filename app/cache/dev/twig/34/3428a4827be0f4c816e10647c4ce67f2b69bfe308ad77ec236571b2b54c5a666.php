<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_462b3802fda8b2bffdf144ffe8816848a335ca3b1cdd0808292f3a1d03ea0094 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82fcc85e7caeb2553c5ae1e3bc347e143be4bda3759803bde65ef8728793759f = $this->env->getExtension("native_profiler");
        $__internal_82fcc85e7caeb2553c5ae1e3bc347e143be4bda3759803bde65ef8728793759f->enter($__internal_82fcc85e7caeb2553c5ae1e3bc347e143be4bda3759803bde65ef8728793759f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82fcc85e7caeb2553c5ae1e3bc347e143be4bda3759803bde65ef8728793759f->leave($__internal_82fcc85e7caeb2553c5ae1e3bc347e143be4bda3759803bde65ef8728793759f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d5fdd716ce7431130f64966c23614f5b67590342877a3d0d37079aebbcdae7b5 = $this->env->getExtension("native_profiler");
        $__internal_d5fdd716ce7431130f64966c23614f5b67590342877a3d0d37079aebbcdae7b5->enter($__internal_d5fdd716ce7431130f64966c23614f5b67590342877a3d0d37079aebbcdae7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_d5fdd716ce7431130f64966c23614f5b67590342877a3d0d37079aebbcdae7b5->leave($__internal_d5fdd716ce7431130f64966c23614f5b67590342877a3d0d37079aebbcdae7b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
";
    }
}
