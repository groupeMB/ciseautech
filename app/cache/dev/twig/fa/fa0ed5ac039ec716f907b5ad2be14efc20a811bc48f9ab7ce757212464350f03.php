<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_231aa4995fb5b16b7a43b3e23645186448822c2a00a3e871b89c312422f69f23 extends Twig_Template
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
        $__internal_24b50c4e45a4ec6b1fe0d4ce19b03ef45aaef2a37ee48cb1705c8e644453d9bf = $this->env->getExtension("native_profiler");
        $__internal_24b50c4e45a4ec6b1fe0d4ce19b03ef45aaef2a37ee48cb1705c8e644453d9bf->enter($__internal_24b50c4e45a4ec6b1fe0d4ce19b03ef45aaef2a37ee48cb1705c8e644453d9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_24b50c4e45a4ec6b1fe0d4ce19b03ef45aaef2a37ee48cb1705c8e644453d9bf->leave($__internal_24b50c4e45a4ec6b1fe0d4ce19b03ef45aaef2a37ee48cb1705c8e644453d9bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
