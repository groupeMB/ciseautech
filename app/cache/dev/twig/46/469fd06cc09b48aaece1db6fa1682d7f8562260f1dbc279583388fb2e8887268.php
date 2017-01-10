<?php

/* @SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_b8cfea3b2b60e89d0401759fb46db16fe31b5d1948c17bb87e4e121208622476 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0143cf8dd17dbe7d492e0dc8215f523ef5e64aad45a504c239d452d2d8697fee = $this->env->getExtension("native_profiler");
        $__internal_0143cf8dd17dbe7d492e0dc8215f523ef5e64aad45a504c239d452d2d8697fee->enter($__internal_0143cf8dd17dbe7d492e0dc8215f523ef5e64aad45a504c239d452d2d8697fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0143cf8dd17dbe7d492e0dc8215f523ef5e64aad45a504c239d452d2d8697fee->leave($__internal_0143cf8dd17dbe7d492e0dc8215f523ef5e64aad45a504c239d452d2d8697fee_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig";
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
