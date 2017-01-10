<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_35bf84d8a76c252b7592cb5f91460999efc3b6b472cb939c80de8cc245cac7c6 extends Twig_Template
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
        $__internal_b1ebc4940533846bcc7d5ac82d899fd40858dd632759cf376d93a3d33f3e7c02 = $this->env->getExtension("native_profiler");
        $__internal_b1ebc4940533846bcc7d5ac82d899fd40858dd632759cf376d93a3d33f3e7c02->enter($__internal_b1ebc4940533846bcc7d5ac82d899fd40858dd632759cf376d93a3d33f3e7c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b1ebc4940533846bcc7d5ac82d899fd40858dd632759cf376d93a3d33f3e7c02->leave($__internal_b1ebc4940533846bcc7d5ac82d899fd40858dd632759cf376d93a3d33f3e7c02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
