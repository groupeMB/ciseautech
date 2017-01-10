<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_2be8e9c08fdc10b678e606ac9eadda54c24a3ccd9204b552c4adcc23a4606e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_554763679d418a0663b8c6c792e6218b2986d9aa53414bca6a9b19e2e495cd89 = $this->env->getExtension("native_profiler");
        $__internal_554763679d418a0663b8c6c792e6218b2986d9aa53414bca6a9b19e2e495cd89->enter($__internal_554763679d418a0663b8c6c792e6218b2986d9aa53414bca6a9b19e2e495cd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_554763679d418a0663b8c6c792e6218b2986d9aa53414bca6a9b19e2e495cd89->leave($__internal_554763679d418a0663b8c6c792e6218b2986d9aa53414bca6a9b19e2e495cd89_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
";
    }
}
