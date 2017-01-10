<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_990c0cc903e0f6847a4494e05363a86c457b5f2e52671da666ca8a9fc08364fb extends Twig_Template
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
        $__internal_e1c05f9d367b8eafba5338739636bec94da4899cee358a72443f5809b2a8e274 = $this->env->getExtension("native_profiler");
        $__internal_e1c05f9d367b8eafba5338739636bec94da4899cee358a72443f5809b2a8e274->enter($__internal_e1c05f9d367b8eafba5338739636bec94da4899cee358a72443f5809b2a8e274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e1c05f9d367b8eafba5338739636bec94da4899cee358a72443f5809b2a8e274->leave($__internal_e1c05f9d367b8eafba5338739636bec94da4899cee358a72443f5809b2a8e274_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
