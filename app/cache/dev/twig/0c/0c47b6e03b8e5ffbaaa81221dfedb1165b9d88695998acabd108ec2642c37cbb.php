<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_25ef3980a0931de956504c541fe6af878639a6a37dcda994d37365cac1279a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76965200d99e12bd8b60c3086162cba7bb531f48d8b04bd06022fbf3782e71ac = $this->env->getExtension("native_profiler");
        $__internal_76965200d99e12bd8b60c3086162cba7bb531f48d8b04bd06022fbf3782e71ac->enter($__internal_76965200d99e12bd8b60c3086162cba7bb531f48d8b04bd06022fbf3782e71ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_76965200d99e12bd8b60c3086162cba7bb531f48d8b04bd06022fbf3782e71ac->leave($__internal_76965200d99e12bd8b60c3086162cba7bb531f48d8b04bd06022fbf3782e71ac_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
";
    }
}
