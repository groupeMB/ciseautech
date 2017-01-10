<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_88df1e3d5b0476eedc61af9cfc0a3d162d4170932088f6c7a59af56984ad65c3 extends Twig_Template
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
        $__internal_385e71254b5481626e0360fc9ac247ee1fc4f8f94c0a12df887b313ce3f4357d = $this->env->getExtension("native_profiler");
        $__internal_385e71254b5481626e0360fc9ac247ee1fc4f8f94c0a12df887b313ce3f4357d->enter($__internal_385e71254b5481626e0360fc9ac247ee1fc4f8f94c0a12df887b313ce3f4357d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_385e71254b5481626e0360fc9ac247ee1fc4f8f94c0a12df887b313ce3f4357d->leave($__internal_385e71254b5481626e0360fc9ac247ee1fc4f8f94c0a12df887b313ce3f4357d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
