<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_fd938a086823943148086d0c4bd2dc536c6147d4f2cd066a330491239190f7db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f1bc13297535212d4df3f950cd19afd313d28175d94aaac9fb51950243ff885 = $this->env->getExtension("native_profiler");
        $__internal_2f1bc13297535212d4df3f950cd19afd313d28175d94aaac9fb51950243ff885->enter($__internal_2f1bc13297535212d4df3f950cd19afd313d28175d94aaac9fb51950243ff885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f1bc13297535212d4df3f950cd19afd313d28175d94aaac9fb51950243ff885->leave($__internal_2f1bc13297535212d4df3f950cd19afd313d28175d94aaac9fb51950243ff885_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
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
