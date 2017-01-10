<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_22c823f8540d889c6ffdbc1732e687008f932c58a89acb4cad3463a7f21b5c9c extends Twig_Template
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
        $__internal_32bd7db7e9b10f421638297de39e56a5388a2950212781b3ae145370a4b64821 = $this->env->getExtension("native_profiler");
        $__internal_32bd7db7e9b10f421638297de39e56a5388a2950212781b3ae145370a4b64821->enter($__internal_32bd7db7e9b10f421638297de39e56a5388a2950212781b3ae145370a4b64821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_32bd7db7e9b10f421638297de39e56a5388a2950212781b3ae145370a4b64821->leave($__internal_32bd7db7e9b10f421638297de39e56a5388a2950212781b3ae145370a4b64821_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
