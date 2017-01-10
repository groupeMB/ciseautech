<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_8de86b474086081ef789dcf27494102df527803cdca8d65400749c58ceb332c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8be168c0263baffc248ee0dad0aabd541205d3cbdfd20285b17df41699db0e8 = $this->env->getExtension("native_profiler");
        $__internal_b8be168c0263baffc248ee0dad0aabd541205d3cbdfd20285b17df41699db0e8->enter($__internal_b8be168c0263baffc248ee0dad0aabd541205d3cbdfd20285b17df41699db0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8be168c0263baffc248ee0dad0aabd541205d3cbdfd20285b17df41699db0e8->leave($__internal_b8be168c0263baffc248ee0dad0aabd541205d3cbdfd20285b17df41699db0e8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
";
    }
}
