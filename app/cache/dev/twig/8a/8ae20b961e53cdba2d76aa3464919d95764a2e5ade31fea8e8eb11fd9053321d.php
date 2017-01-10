<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_63af970398f569f08a5d2f7c19086012db0b6b25e0c9525b88b1a147ea6ab1d2 extends Twig_Template
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
        $__internal_8ba7ca6449031961e4b6c3c8e27888863ba9498551b9bac5d892f8cd041fdfd4 = $this->env->getExtension("native_profiler");
        $__internal_8ba7ca6449031961e4b6c3c8e27888863ba9498551b9bac5d892f8cd041fdfd4->enter($__internal_8ba7ca6449031961e4b6c3c8e27888863ba9498551b9bac5d892f8cd041fdfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8ba7ca6449031961e4b6c3c8e27888863ba9498551b9bac5d892f8cd041fdfd4->leave($__internal_8ba7ca6449031961e4b6c3c8e27888863ba9498551b9bac5d892f8cd041fdfd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
