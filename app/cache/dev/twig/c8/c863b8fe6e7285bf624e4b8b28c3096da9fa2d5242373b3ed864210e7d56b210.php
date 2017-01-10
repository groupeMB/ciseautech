<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e518ceb4583dfcacaa2ad1a7d10ec3389f3f23a9331fd0b71167b43e74196526 extends Twig_Template
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
        $__internal_e416843f73b6c2674fddba47e5726a4e7091cad934959af644a16ef7826fdffe = $this->env->getExtension("native_profiler");
        $__internal_e416843f73b6c2674fddba47e5726a4e7091cad934959af644a16ef7826fdffe->enter($__internal_e416843f73b6c2674fddba47e5726a4e7091cad934959af644a16ef7826fdffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e416843f73b6c2674fddba47e5726a4e7091cad934959af644a16ef7826fdffe->leave($__internal_e416843f73b6c2674fddba47e5726a4e7091cad934959af644a16ef7826fdffe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
