<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_09ecce0c50505d65204918f4b0f0169874ca794d7a6fdd3e8176a07e4c567120 extends Twig_Template
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
        $__internal_c653f40f65ef249e08a236bfe56e4012ee27dd74ab5f1ac0d844fb0010e0acba = $this->env->getExtension("native_profiler");
        $__internal_c653f40f65ef249e08a236bfe56e4012ee27dd74ab5f1ac0d844fb0010e0acba->enter($__internal_c653f40f65ef249e08a236bfe56e4012ee27dd74ab5f1ac0d844fb0010e0acba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c653f40f65ef249e08a236bfe56e4012ee27dd74ab5f1ac0d844fb0010e0acba->leave($__internal_c653f40f65ef249e08a236bfe56e4012ee27dd74ab5f1ac0d844fb0010e0acba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
