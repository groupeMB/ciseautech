<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4a8fdfd4e8e504ecb662d22e94fe07ae4a04c5bbe0dabb291b0347cfb8483fb1 extends Twig_Template
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
        $__internal_a77d1a64e833293e54f292a82084a52b673f3d370dc528988b587db0433f82f0 = $this->env->getExtension("native_profiler");
        $__internal_a77d1a64e833293e54f292a82084a52b673f3d370dc528988b587db0433f82f0->enter($__internal_a77d1a64e833293e54f292a82084a52b673f3d370dc528988b587db0433f82f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a77d1a64e833293e54f292a82084a52b673f3d370dc528988b587db0433f82f0->leave($__internal_a77d1a64e833293e54f292a82084a52b673f3d370dc528988b587db0433f82f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
