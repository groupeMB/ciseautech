<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ad62bbfbb7f1bac333f7e54903d21f7e88d883cce63380a12d45af572954a75e extends Twig_Template
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
        $__internal_05d721045d1e20df63bc3e22ff50f0b960fafacb9b7b87dbe17e4f40e8c518d9 = $this->env->getExtension("native_profiler");
        $__internal_05d721045d1e20df63bc3e22ff50f0b960fafacb9b7b87dbe17e4f40e8c518d9->enter($__internal_05d721045d1e20df63bc3e22ff50f0b960fafacb9b7b87dbe17e4f40e8c518d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_05d721045d1e20df63bc3e22ff50f0b960fafacb9b7b87dbe17e4f40e8c518d9->leave($__internal_05d721045d1e20df63bc3e22ff50f0b960fafacb9b7b87dbe17e4f40e8c518d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
