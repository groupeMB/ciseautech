<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_86c81cd52d789a21e4c5723984875e2421b68ee95a5670dbb485a4bb7f7a1f5b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_593c937c6685f9c8f55f6cb1a0a0b15bdf9a1e17e635315fb460700ce6df69de = $this->env->getExtension("native_profiler");
        $__internal_593c937c6685f9c8f55f6cb1a0a0b15bdf9a1e17e635315fb460700ce6df69de->enter($__internal_593c937c6685f9c8f55f6cb1a0a0b15bdf9a1e17e635315fb460700ce6df69de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593c937c6685f9c8f55f6cb1a0a0b15bdf9a1e17e635315fb460700ce6df69de->leave($__internal_593c937c6685f9c8f55f6cb1a0a0b15bdf9a1e17e635315fb460700ce6df69de_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
";
    }
}
