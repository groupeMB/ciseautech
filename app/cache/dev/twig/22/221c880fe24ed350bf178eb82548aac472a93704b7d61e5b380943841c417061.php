<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_af5611a8be9843efb838482a1214ffc669e625526104e7aa5cf1f2cdf35c12a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1890eeda2b0a2bc42395d8685e99f59b2fa3c97630cc733de864ee42ca6858d2 = $this->env->getExtension("native_profiler");
        $__internal_1890eeda2b0a2bc42395d8685e99f59b2fa3c97630cc733de864ee42ca6858d2->enter($__internal_1890eeda2b0a2bc42395d8685e99f59b2fa3c97630cc733de864ee42ca6858d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1890eeda2b0a2bc42395d8685e99f59b2fa3c97630cc733de864ee42ca6858d2->leave($__internal_1890eeda2b0a2bc42395d8685e99f59b2fa3c97630cc733de864ee42ca6858d2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}
