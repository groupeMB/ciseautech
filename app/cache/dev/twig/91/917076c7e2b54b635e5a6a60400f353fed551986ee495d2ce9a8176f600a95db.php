<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b65278e2bcf3818d7541a61fbc6a28f85019656dde65f13c83d43d4149f639a2 extends Twig_Template
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
        $__internal_f1d51bba317a7c186df3aff1782f326d047265eb08d2a61bb946f0b69c8da376 = $this->env->getExtension("native_profiler");
        $__internal_f1d51bba317a7c186df3aff1782f326d047265eb08d2a61bb946f0b69c8da376->enter($__internal_f1d51bba317a7c186df3aff1782f326d047265eb08d2a61bb946f0b69c8da376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f1d51bba317a7c186df3aff1782f326d047265eb08d2a61bb946f0b69c8da376->leave($__internal_f1d51bba317a7c186df3aff1782f326d047265eb08d2a61bb946f0b69c8da376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
