<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_9bd693943e2ac5fcf1157f4362624c1007a7342fea185d09f7bdae39aafb86b2 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3424fe6945ba9e5e480e476986a9455c2c8d80e8b9b2e75c0c29a8a28d7dfcf7 = $this->env->getExtension("native_profiler");
        $__internal_3424fe6945ba9e5e480e476986a9455c2c8d80e8b9b2e75c0c29a8a28d7dfcf7->enter($__internal_3424fe6945ba9e5e480e476986a9455c2c8d80e8b9b2e75c0c29a8a28d7dfcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3424fe6945ba9e5e480e476986a9455c2c8d80e8b9b2e75c0c29a8a28d7dfcf7->leave($__internal_3424fe6945ba9e5e480e476986a9455c2c8d80e8b9b2e75c0c29a8a28d7dfcf7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}
";
    }
}
