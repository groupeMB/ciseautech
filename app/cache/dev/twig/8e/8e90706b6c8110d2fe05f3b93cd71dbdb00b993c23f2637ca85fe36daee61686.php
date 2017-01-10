<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fc5866e9d748ca12a29a58b0ffa210a918a9c63a2edd89292af84341382e3694 extends Twig_Template
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
        $__internal_c16609e4433433d4fadd2b664240e9b035f525c14ce6bd8de7ffd61a97014427 = $this->env->getExtension("native_profiler");
        $__internal_c16609e4433433d4fadd2b664240e9b035f525c14ce6bd8de7ffd61a97014427->enter($__internal_c16609e4433433d4fadd2b664240e9b035f525c14ce6bd8de7ffd61a97014427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c16609e4433433d4fadd2b664240e9b035f525c14ce6bd8de7ffd61a97014427->leave($__internal_c16609e4433433d4fadd2b664240e9b035f525c14ce6bd8de7ffd61a97014427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
