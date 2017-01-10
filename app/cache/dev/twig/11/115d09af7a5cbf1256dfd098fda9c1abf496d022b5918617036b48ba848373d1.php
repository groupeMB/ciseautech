<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b3fbada8cff2a1d6d739485b29fada22f47f86364283360d42ae23dc6a9bd409 extends Twig_Template
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
        $__internal_190d591e741eac9079215ac1391202f62655c826e5d4f6c04c6c46d40df7a14f = $this->env->getExtension("native_profiler");
        $__internal_190d591e741eac9079215ac1391202f62655c826e5d4f6c04c6c46d40df7a14f->enter($__internal_190d591e741eac9079215ac1391202f62655c826e5d4f6c04c6c46d40df7a14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_190d591e741eac9079215ac1391202f62655c826e5d4f6c04c6c46d40df7a14f->leave($__internal_190d591e741eac9079215ac1391202f62655c826e5d4f6c04c6c46d40df7a14f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
