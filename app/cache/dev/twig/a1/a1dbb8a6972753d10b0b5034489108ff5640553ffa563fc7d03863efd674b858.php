<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_23a39363dd13ee4f27614afa4ae2bbd2913688f7dff29a8349b6d7a1c7d185a9 extends Twig_Template
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
        $__internal_6be4dd04739f4f7a2e5b9c36c4c57c21bab89725ca1cd1563826ca725d0b3a22 = $this->env->getExtension("native_profiler");
        $__internal_6be4dd04739f4f7a2e5b9c36c4c57c21bab89725ca1cd1563826ca725d0b3a22->enter($__internal_6be4dd04739f4f7a2e5b9c36c4c57c21bab89725ca1cd1563826ca725d0b3a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

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
        
        $__internal_6be4dd04739f4f7a2e5b9c36c4c57c21bab89725ca1cd1563826ca725d0b3a22->leave($__internal_6be4dd04739f4f7a2e5b9c36c4c57c21bab89725ca1cd1563826ca725d0b3a22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
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
