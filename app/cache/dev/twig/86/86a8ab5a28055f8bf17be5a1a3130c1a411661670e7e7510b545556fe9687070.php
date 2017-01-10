<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c9b96d696697470ec5c550457bdef6d1d1a7b8c7dcdbadfd1ff94c821f19c407 extends Twig_Template
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
        $__internal_899c5cb7f545d9ad49ca2455ec182b5bd0cf1b3e0058216b763ce076213e452e = $this->env->getExtension("native_profiler");
        $__internal_899c5cb7f545d9ad49ca2455ec182b5bd0cf1b3e0058216b763ce076213e452e->enter($__internal_899c5cb7f545d9ad49ca2455ec182b5bd0cf1b3e0058216b763ce076213e452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_899c5cb7f545d9ad49ca2455ec182b5bd0cf1b3e0058216b763ce076213e452e->leave($__internal_899c5cb7f545d9ad49ca2455ec182b5bd0cf1b3e0058216b763ce076213e452e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
