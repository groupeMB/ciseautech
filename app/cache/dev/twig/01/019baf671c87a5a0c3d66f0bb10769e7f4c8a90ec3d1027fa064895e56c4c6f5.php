<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_eeca4107a77f5f190a28dcfed1ed3d0a072d7f8ec14bfa97fb008d46f5de02de extends Twig_Template
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
        $__internal_c2f3ba09d5801df7d5dd5df1ee63926dd2bbf718d4107a382aaea895549dc270 = $this->env->getExtension("native_profiler");
        $__internal_c2f3ba09d5801df7d5dd5df1ee63926dd2bbf718d4107a382aaea895549dc270->enter($__internal_c2f3ba09d5801df7d5dd5df1ee63926dd2bbf718d4107a382aaea895549dc270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c2f3ba09d5801df7d5dd5df1ee63926dd2bbf718d4107a382aaea895549dc270->leave($__internal_c2f3ba09d5801df7d5dd5df1ee63926dd2bbf718d4107a382aaea895549dc270_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
