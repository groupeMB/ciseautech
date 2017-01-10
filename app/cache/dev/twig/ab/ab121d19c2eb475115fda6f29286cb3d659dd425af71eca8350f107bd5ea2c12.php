<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a6f32088ef2847106eb5ebda54ecdb175ab77fb4c936da2bb74cf7fc85ec5591 extends Twig_Template
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
        $__internal_ed0a77025a112630eed1eba2ebb8aff81c4981f1968ebdef0ac4da46b2b69926 = $this->env->getExtension("native_profiler");
        $__internal_ed0a77025a112630eed1eba2ebb8aff81c4981f1968ebdef0ac4da46b2b69926->enter($__internal_ed0a77025a112630eed1eba2ebb8aff81c4981f1968ebdef0ac4da46b2b69926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ed0a77025a112630eed1eba2ebb8aff81c4981f1968ebdef0ac4da46b2b69926->leave($__internal_ed0a77025a112630eed1eba2ebb8aff81c4981f1968ebdef0ac4da46b2b69926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
