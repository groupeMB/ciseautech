<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8b6a36fbbebd6fc1468fa6c9c8d52db4066b3d4b2d9fac4221ea65032f63a2c6 extends Twig_Template
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
        $__internal_19a6375407553f60085e9d0eca366d9c1b2e7b7fcf0e66b74f71f41ff162aaa9 = $this->env->getExtension("native_profiler");
        $__internal_19a6375407553f60085e9d0eca366d9c1b2e7b7fcf0e66b74f71f41ff162aaa9->enter($__internal_19a6375407553f60085e9d0eca366d9c1b2e7b7fcf0e66b74f71f41ff162aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_19a6375407553f60085e9d0eca366d9c1b2e7b7fcf0e66b74f71f41ff162aaa9->leave($__internal_19a6375407553f60085e9d0eca366d9c1b2e7b7fcf0e66b74f71f41ff162aaa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
