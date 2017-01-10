<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c47b4e2e2d93418ff63527a9371bd77aea23a25b96ec104cf5fa85c39e49c5d extends Twig_Template
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
        $__internal_29a2542367dd3a92d832598d01da6208d1f2b48134d19af6f45e42abdb70307c = $this->env->getExtension("native_profiler");
        $__internal_29a2542367dd3a92d832598d01da6208d1f2b48134d19af6f45e42abdb70307c->enter($__internal_29a2542367dd3a92d832598d01da6208d1f2b48134d19af6f45e42abdb70307c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_29a2542367dd3a92d832598d01da6208d1f2b48134d19af6f45e42abdb70307c->leave($__internal_29a2542367dd3a92d832598d01da6208d1f2b48134d19af6f45e42abdb70307c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
