<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_1cfda842b1fbc53f41ef4a36fe6c5cd06ad2747904d03c721a1a3ceabff7749e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1495eb43b1b89fa2f8e5128fb419cfe6362d6ff8083f1282c45be5d502f96bf = $this->env->getExtension("native_profiler");
        $__internal_e1495eb43b1b89fa2f8e5128fb419cfe6362d6ff8083f1282c45be5d502f96bf->enter($__internal_e1495eb43b1b89fa2f8e5128fb419cfe6362d6ff8083f1282c45be5d502f96bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1495eb43b1b89fa2f8e5128fb419cfe6362d6ff8083f1282c45be5d502f96bf->leave($__internal_e1495eb43b1b89fa2f8e5128fb419cfe6362d6ff8083f1282c45be5d502f96bf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c45bfe9a77d7d5d59c3b7b6911a7597791ae3614afe716f730dd82045b30d57c = $this->env->getExtension("native_profiler");
        $__internal_c45bfe9a77d7d5d59c3b7b6911a7597791ae3614afe716f730dd82045b30d57c->enter($__internal_c45bfe9a77d7d5d59c3b7b6911a7597791ae3614afe716f730dd82045b30d57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c45bfe9a77d7d5d59c3b7b6911a7597791ae3614afe716f730dd82045b30d57c->leave($__internal_c45bfe9a77d7d5d59c3b7b6911a7597791ae3614afe716f730dd82045b30d57c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
