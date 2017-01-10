<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0d05243370421806dcb430d99900835b0dc64ad10813925a96eebb9c7dd7e326 extends Twig_Template
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
        $__internal_644d0010089a9f7d6829e2b71f7385bea63e30aba3033bad3867dd4b8ac4bca7 = $this->env->getExtension("native_profiler");
        $__internal_644d0010089a9f7d6829e2b71f7385bea63e30aba3033bad3867dd4b8ac4bca7->enter($__internal_644d0010089a9f7d6829e2b71f7385bea63e30aba3033bad3867dd4b8ac4bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_644d0010089a9f7d6829e2b71f7385bea63e30aba3033bad3867dd4b8ac4bca7->leave($__internal_644d0010089a9f7d6829e2b71f7385bea63e30aba3033bad3867dd4b8ac4bca7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
