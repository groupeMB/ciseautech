<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b21ac112c8fb3e19394435cf17c415e6ef059d60d3191d0937cb0f76b3f56fb2 extends Twig_Template
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
        $__internal_2ff1f9b8226d5d3d48943e2d93098ffa101ea3d869706edab0cb98c12fb7d5fd = $this->env->getExtension("native_profiler");
        $__internal_2ff1f9b8226d5d3d48943e2d93098ffa101ea3d869706edab0cb98c12fb7d5fd->enter($__internal_2ff1f9b8226d5d3d48943e2d93098ffa101ea3d869706edab0cb98c12fb7d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2ff1f9b8226d5d3d48943e2d93098ffa101ea3d869706edab0cb98c12fb7d5fd->leave($__internal_2ff1f9b8226d5d3d48943e2d93098ffa101ea3d869706edab0cb98c12fb7d5fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
