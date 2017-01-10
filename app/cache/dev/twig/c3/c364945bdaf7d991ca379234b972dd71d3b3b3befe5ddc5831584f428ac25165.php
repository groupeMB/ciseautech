<?php

/* @SonataUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_dc129a7cfe2fec8063503a4293453ccffc8c6e222583b81162b1b2fa39a050a5 extends Twig_Template
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
        $__internal_2c28ccbd9d9d28a8d92db4ddba0d357057ebc5eebc2484095d72fc01a5a93661 = $this->env->getExtension("native_profiler");
        $__internal_2c28ccbd9d9d28a8d92db4ddba0d357057ebc5eebc2484095d72fc01a5a93661->enter($__internal_2c28ccbd9d9d28a8d92db4ddba0d357057ebc5eebc2484095d72fc01a5a93661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/ChangePassword/changePassword_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("sonata_user_change_password")));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2c28ccbd9d9d28a8d92db4ddba0d357057ebc5eebc2484095d72fc01a5a93661->leave($__internal_2c28ccbd9d9d28a8d92db4ddba0d357057ebc5eebc2484095d72fc01a5a93661_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 6,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form, {'action': path('sonata_user_change_password')  }) }}
{{ form_widget(form) }}

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>
    </div>
</div>
{{ form_end(form) }}
";
    }
}
