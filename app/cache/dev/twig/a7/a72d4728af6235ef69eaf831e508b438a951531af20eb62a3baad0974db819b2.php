<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_df50f52ffc097a41416696652438fbd322166410675f554b4ab8806109a83c69 extends Twig_Template
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
        $__internal_8956043fa268f40572da6a551f2366598770d74e1d6311670865d077b51393b0 = $this->env->getExtension("native_profiler");
        $__internal_8956043fa268f40572da6a551f2366598770d74e1d6311670865d077b51393b0->enter($__internal_8956043fa268f40572da6a551f2366598770d74e1d6311670865d077b51393b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8956043fa268f40572da6a551f2366598770d74e1d6311670865d077b51393b0->leave($__internal_8956043fa268f40572da6a551f2366598770d74e1d6311670865d077b51393b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
