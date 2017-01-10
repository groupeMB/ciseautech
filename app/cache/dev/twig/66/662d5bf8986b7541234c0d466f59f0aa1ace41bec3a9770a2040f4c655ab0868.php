<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_7b59a88cf3547f4f11aa24e5fc6a997f8dbabd774950f66bf66ab27612946009 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b117b88c7c4dfff0c958e031d563d3a4726e2c5b8e772b84cb8beb9f2c16fcc = $this->env->getExtension("native_profiler");
        $__internal_7b117b88c7c4dfff0c958e031d563d3a4726e2c5b8e772b84cb8beb9f2c16fcc->enter($__internal_7b117b88c7c4dfff0c958e031d563d3a4726e2c5b8e772b84cb8beb9f2c16fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b117b88c7c4dfff0c958e031d563d3a4726e2c5b8e772b84cb8beb9f2c16fcc->leave($__internal_7b117b88c7c4dfff0c958e031d563d3a4726e2c5b8e772b84cb8beb9f2c16fcc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_fdf12bb0368b0fee8bf08cc52a13ae5d0ae371571fd0948f72c24a14b3958bed = $this->env->getExtension("native_profiler");
        $__internal_fdf12bb0368b0fee8bf08cc52a13ae5d0ae371571fd0948f72c24a14b3958bed->enter($__internal_fdf12bb0368b0fee8bf08cc52a13ae5d0ae371571fd0948f72c24a14b3958bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_fdf12bb0368b0fee8bf08cc52a13ae5d0ae371571fd0948f72c24a14b3958bed->leave($__internal_fdf12bb0368b0fee8bf08cc52a13ae5d0ae371571fd0948f72c24a14b3958bed_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
