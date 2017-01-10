<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f510173d7987ec340472f7789d9bd789501d66a2b39c28fa662143e8d2e0c69a extends Twig_Template
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
        $__internal_695c654415eaa589530b0e9d356f2ff1b542b04451ce89b433198d78d4f9e747 = $this->env->getExtension("native_profiler");
        $__internal_695c654415eaa589530b0e9d356f2ff1b542b04451ce89b433198d78d4f9e747->enter($__internal_695c654415eaa589530b0e9d356f2ff1b542b04451ce89b433198d78d4f9e747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_695c654415eaa589530b0e9d356f2ff1b542b04451ce89b433198d78d4f9e747->leave($__internal_695c654415eaa589530b0e9d356f2ff1b542b04451ce89b433198d78d4f9e747_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
