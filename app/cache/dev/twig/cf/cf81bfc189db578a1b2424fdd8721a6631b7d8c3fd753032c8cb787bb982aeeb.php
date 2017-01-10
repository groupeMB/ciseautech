<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_80ea10b0beb6be2c0d38faaa61a690818da1a81e659ff97585aa8c4dbd5750fd extends Twig_Template
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
        $__internal_ef454e8b4eae3ceaab81e4572a60e1f51ff9c920085e1d6718294f72da82fb3a = $this->env->getExtension("native_profiler");
        $__internal_ef454e8b4eae3ceaab81e4572a60e1f51ff9c920085e1d6718294f72da82fb3a->enter($__internal_ef454e8b4eae3ceaab81e4572a60e1f51ff9c920085e1d6718294f72da82fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ef454e8b4eae3ceaab81e4572a60e1f51ff9c920085e1d6718294f72da82fb3a->leave($__internal_ef454e8b4eae3ceaab81e4572a60e1f51ff9c920085e1d6718294f72da82fb3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
