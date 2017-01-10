<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4d24253866c22d3280810b66371795b3dcc5b013652826bdcd42882d65e99618 extends Twig_Template
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
        $__internal_11b43d93b03f6725374acf0836f2b5bc1e86f73cf3c6c330ff690aff3ce482b2 = $this->env->getExtension("native_profiler");
        $__internal_11b43d93b03f6725374acf0836f2b5bc1e86f73cf3c6c330ff690aff3ce482b2->enter($__internal_11b43d93b03f6725374acf0836f2b5bc1e86f73cf3c6c330ff690aff3ce482b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_11b43d93b03f6725374acf0836f2b5bc1e86f73cf3c6c330ff690aff3ce482b2->leave($__internal_11b43d93b03f6725374acf0836f2b5bc1e86f73cf3c6c330ff690aff3ce482b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
