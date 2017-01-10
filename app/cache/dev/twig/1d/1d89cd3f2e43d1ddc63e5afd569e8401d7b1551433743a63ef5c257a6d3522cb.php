<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_45a4c6033874c8fb7b78e2655d21011db5e7a05936bd53db8ba605e871852b2e extends Twig_Template
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
        $__internal_54a3614bb1a7ca9a87923db46d4cfdf69003590326c5d3a6a0303bb9e3cf66dd = $this->env->getExtension("native_profiler");
        $__internal_54a3614bb1a7ca9a87923db46d4cfdf69003590326c5d3a6a0303bb9e3cf66dd->enter($__internal_54a3614bb1a7ca9a87923db46d4cfdf69003590326c5d3a6a0303bb9e3cf66dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_54a3614bb1a7ca9a87923db46d4cfdf69003590326c5d3a6a0303bb9e3cf66dd->leave($__internal_54a3614bb1a7ca9a87923db46d4cfdf69003590326c5d3a6a0303bb9e3cf66dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
