<?php

/* @SonataUser/Resetting/reset_content.html.twig */
class __TwigTemplate_0cf5d344d8a708d3956a9dcc7d71f8d31a914255e4723793ad13d0a13c7ca1cd extends Twig_Template
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
        $__internal_00eea8fb7d2d2e1ea925384a58bfa050b284211052bac6036e146633a718314d = $this->env->getExtension("native_profiler");
        $__internal_00eea8fb7d2d2e1ea925384a58bfa050b284211052bac6036e146633a718314d->enter($__internal_00eea8fb7d2d2e1ea925384a58bfa050b284211052bac6036e146633a718314d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Resetting/reset_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("sonata_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))))));
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
    </div>
</div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_00eea8fb7d2d2e1ea925384a58bfa050b284211052bac6036e146633a718314d->leave($__internal_00eea8fb7d2d2e1ea925384a58bfa050b284211052bac6036e146633a718314d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Resetting/reset_content.html.twig";
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
        return "{{ form_start(form, {'action': path('sonata_user_resetting_reset', {'token': token } ) }) }}
{{ form_widget(form) }}

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary\" />
    </div>
</div>
{{ form_end(form) }}
";
    }
}
