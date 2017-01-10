<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6de99be51d5078811a4dcc8a67d65dca0068d37b618efdcbc2918c6fcd2580f4 extends Twig_Template
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
        $__internal_9935fe7bcd3eda0cfdf76dfd80079da7cf5cc9bfa5a4574c7edf388240f2ea22 = $this->env->getExtension("native_profiler");
        $__internal_9935fe7bcd3eda0cfdf76dfd80079da7cf5cc9bfa5a4574c7edf388240f2ea22->enter($__internal_9935fe7bcd3eda0cfdf76dfd80079da7cf5cc9bfa5a4574c7edf388240f2ea22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9935fe7bcd3eda0cfdf76dfd80079da7cf5cc9bfa5a4574c7edf388240f2ea22->leave($__internal_9935fe7bcd3eda0cfdf76dfd80079da7cf5cc9bfa5a4574c7edf388240f2ea22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
