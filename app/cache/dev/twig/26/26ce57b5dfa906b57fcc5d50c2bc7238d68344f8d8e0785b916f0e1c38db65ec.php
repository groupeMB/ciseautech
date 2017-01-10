<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_357ee4ba1f54047256197e16f26b5fe4a7ccf3b673696af4c4e66af514242eec extends Twig_Template
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
        $__internal_b00c7fa7ea613d027ea20c698d397ad5973de04f1e15f99d2a6360ec74690641 = $this->env->getExtension("native_profiler");
        $__internal_b00c7fa7ea613d027ea20c698d397ad5973de04f1e15f99d2a6360ec74690641->enter($__internal_b00c7fa7ea613d027ea20c698d397ad5973de04f1e15f99d2a6360ec74690641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b00c7fa7ea613d027ea20c698d397ad5973de04f1e15f99d2a6360ec74690641->leave($__internal_b00c7fa7ea613d027ea20c698d397ad5973de04f1e15f99d2a6360ec74690641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
