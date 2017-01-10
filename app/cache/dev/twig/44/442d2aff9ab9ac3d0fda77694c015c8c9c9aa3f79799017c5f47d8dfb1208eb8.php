<?php

/* @SonataUser/Security/login.html.twig */
class __TwigTemplate_2406f11deec075b9b891c68b57ab1f9c5375b21078f884f7cdbc32f3f616017d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "@SonataUser/Security/login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01a5f65699770c51603b2f230a9ad836767bcaddbd56a039e77d10bd12860d43 = $this->env->getExtension("native_profiler");
        $__internal_01a5f65699770c51603b2f230a9ad836767bcaddbd56a039e77d10bd12860d43->enter($__internal_01a5f65699770c51603b2f230a9ad836767bcaddbd56a039e77d10bd12860d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a5f65699770c51603b2f230a9ad836767bcaddbd56a039e77d10bd12860d43->leave($__internal_01a5f65699770c51603b2f230a9ad836767bcaddbd56a039e77d10bd12860d43_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Security/login.html.twig";
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
