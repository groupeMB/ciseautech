<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d6cf2c6cd18c408b49bbe252de41a6dceb154860efdb6f4270e54ad500206582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_850221707445c96885a2af26a8c70a0c8db116d2d898f12c6713bb1bf238fe5e = $this->env->getExtension("native_profiler");
        $__internal_850221707445c96885a2af26a8c70a0c8db116d2d898f12c6713bb1bf238fe5e->enter($__internal_850221707445c96885a2af26a8c70a0c8db116d2d898f12c6713bb1bf238fe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850221707445c96885a2af26a8c70a0c8db116d2d898f12c6713bb1bf238fe5e->leave($__internal_850221707445c96885a2af26a8c70a0c8db116d2d898f12c6713bb1bf238fe5e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends \"SonataUserBundle:Security:base_login.html.twig\" %}";
    }
}
