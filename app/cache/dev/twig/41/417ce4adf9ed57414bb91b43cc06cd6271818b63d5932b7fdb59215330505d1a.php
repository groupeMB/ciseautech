<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_83f87e449c229926e55962d716dafc8b87563d598dad504c1965beef899dd799 extends Twig_Template
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
        $__internal_958c9e5aa607186a8e17425fff89c50bfbde9400ce5e4bf643c220a25c62228a = $this->env->getExtension("native_profiler");
        $__internal_958c9e5aa607186a8e17425fff89c50bfbde9400ce5e4bf643c220a25c62228a->enter($__internal_958c9e5aa607186a8e17425fff89c50bfbde9400ce5e4bf643c220a25c62228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_958c9e5aa607186a8e17425fff89c50bfbde9400ce5e4bf643c220a25c62228a->leave($__internal_958c9e5aa607186a8e17425fff89c50bfbde9400ce5e4bf643c220a25c62228a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
