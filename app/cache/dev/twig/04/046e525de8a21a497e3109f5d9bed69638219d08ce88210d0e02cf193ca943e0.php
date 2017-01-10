<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e3517488b82fb7a816b745735b49ae0e4dabc0ed0918bd22368776560ced6771 extends Twig_Template
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
        $__internal_8a2240075eb2e3addc611aa7db4847e5a7248f3b9e824d7c8b5c39e859cbc357 = $this->env->getExtension("native_profiler");
        $__internal_8a2240075eb2e3addc611aa7db4847e5a7248f3b9e824d7c8b5c39e859cbc357->enter($__internal_8a2240075eb2e3addc611aa7db4847e5a7248f3b9e824d7c8b5c39e859cbc357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8a2240075eb2e3addc611aa7db4847e5a7248f3b9e824d7c8b5c39e859cbc357->leave($__internal_8a2240075eb2e3addc611aa7db4847e5a7248f3b9e824d7c8b5c39e859cbc357_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
