<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6d17fa28eafe2ce581ed136edeab1fa4e37bd08d2ed8dcbba09f3e0a2d701a4f extends Twig_Template
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
        $__internal_9e817616f14d951a6e2612031443f04cf6c56c060f17aa3611ffa8758744e898 = $this->env->getExtension("native_profiler");
        $__internal_9e817616f14d951a6e2612031443f04cf6c56c060f17aa3611ffa8758744e898->enter($__internal_9e817616f14d951a6e2612031443f04cf6c56c060f17aa3611ffa8758744e898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9e817616f14d951a6e2612031443f04cf6c56c060f17aa3611ffa8758744e898->leave($__internal_9e817616f14d951a6e2612031443f04cf6c56c060f17aa3611ffa8758744e898_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
