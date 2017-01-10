<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c994158e9f6fc3649455c77cafd2926eb3a986e120bd46fdbcd9c684d7d8126e extends Twig_Template
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
        $__internal_7d3f4816dee8d9988d20e9c94ac25b7761f275f30c03a233a3fd3850d3902914 = $this->env->getExtension("native_profiler");
        $__internal_7d3f4816dee8d9988d20e9c94ac25b7761f275f30c03a233a3fd3850d3902914->enter($__internal_7d3f4816dee8d9988d20e9c94ac25b7761f275f30c03a233a3fd3850d3902914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7d3f4816dee8d9988d20e9c94ac25b7761f275f30c03a233a3fd3850d3902914->leave($__internal_7d3f4816dee8d9988d20e9c94ac25b7761f275f30c03a233a3fd3850d3902914_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
