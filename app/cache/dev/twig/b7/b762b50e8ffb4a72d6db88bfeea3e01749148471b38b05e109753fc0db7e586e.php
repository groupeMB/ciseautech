<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_c976a2583c97f3f31c379f01b8a05f6f25135ab59128ba90834215cb0cab89cf extends Twig_Template
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
        $__internal_053348455f8cd3d7c8c261d9d2d35a13961b3f58651b5595ebf2327f34d567ef = $this->env->getExtension("native_profiler");
        $__internal_053348455f8cd3d7c8c261d9d2d35a13961b3f58651b5595ebf2327f34d567ef->enter($__internal_053348455f8cd3d7c8c261d9d2d35a13961b3f58651b5595ebf2327f34d567ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_053348455f8cd3d7c8c261d9d2d35a13961b3f58651b5595ebf2327f34d567ef->leave($__internal_053348455f8cd3d7c8c261d9d2d35a13961b3f58651b5595ebf2327f34d567ef_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
