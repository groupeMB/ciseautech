<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bc9e1ede4bf5abfc110fa4a54b6f42a66164906c9235401b3366bc304b62d490 extends Twig_Template
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
        $__internal_a1649c37632fc6b98300204d19995fe997758573696be9cce0ce15617ebeb9d6 = $this->env->getExtension("native_profiler");
        $__internal_a1649c37632fc6b98300204d19995fe997758573696be9cce0ce15617ebeb9d6->enter($__internal_a1649c37632fc6b98300204d19995fe997758573696be9cce0ce15617ebeb9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a1649c37632fc6b98300204d19995fe997758573696be9cce0ce15617ebeb9d6->leave($__internal_a1649c37632fc6b98300204d19995fe997758573696be9cce0ce15617ebeb9d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
