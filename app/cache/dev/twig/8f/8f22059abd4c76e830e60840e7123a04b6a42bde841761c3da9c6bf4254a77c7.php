<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8d85e1642df2d10c3ec861e6c5aeec4c3b256fa7855911978702e6f84048198a extends Twig_Template
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
        $__internal_06b1a40265ce8158e28f97d48335b4ab83e0aeaac546dbcf26833c70cd528c71 = $this->env->getExtension("native_profiler");
        $__internal_06b1a40265ce8158e28f97d48335b4ab83e0aeaac546dbcf26833c70cd528c71->enter($__internal_06b1a40265ce8158e28f97d48335b4ab83e0aeaac546dbcf26833c70cd528c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_06b1a40265ce8158e28f97d48335b4ab83e0aeaac546dbcf26833c70cd528c71->leave($__internal_06b1a40265ce8158e28f97d48335b4ab83e0aeaac546dbcf26833c70cd528c71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
