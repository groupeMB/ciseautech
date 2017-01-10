<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_12ee17e216b3a6e576a45ba6770f9d7ec7e59357d5a779836704724492ed39f1 extends Twig_Template
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
        $__internal_3914bc1ab67d238f6ce77a18ec7073564c7a11cc82e4363271b3bdcace3d1ad0 = $this->env->getExtension("native_profiler");
        $__internal_3914bc1ab67d238f6ce77a18ec7073564c7a11cc82e4363271b3bdcace3d1ad0->enter($__internal_3914bc1ab67d238f6ce77a18ec7073564c7a11cc82e4363271b3bdcace3d1ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3914bc1ab67d238f6ce77a18ec7073564c7a11cc82e4363271b3bdcace3d1ad0->leave($__internal_3914bc1ab67d238f6ce77a18ec7073564c7a11cc82e4363271b3bdcace3d1ad0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
