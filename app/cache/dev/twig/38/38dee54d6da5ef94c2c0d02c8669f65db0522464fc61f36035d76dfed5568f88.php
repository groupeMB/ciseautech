<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_fb62a201262bd3f513d3c9b5a6e03caef5c452633bd9f9fdab9c685b9020e57f extends Twig_Template
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
        $__internal_c1a64f5357d4b122a404f4114f63ca120dc1b635e9a7377cd30878ca4a062efd = $this->env->getExtension("native_profiler");
        $__internal_c1a64f5357d4b122a404f4114f63ca120dc1b635e9a7377cd30878ca4a062efd->enter($__internal_c1a64f5357d4b122a404f4114f63ca120dc1b635e9a7377cd30878ca4a062efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_c1a64f5357d4b122a404f4114f63ca120dc1b635e9a7377cd30878ca4a062efd->leave($__internal_c1a64f5357d4b122a404f4114f63ca120dc1b635e9a7377cd30878ca4a062efd_prof);

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
