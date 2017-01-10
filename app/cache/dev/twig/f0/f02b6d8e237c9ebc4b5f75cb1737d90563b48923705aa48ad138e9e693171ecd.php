<?php

/* @SonataUser/Profile/edit_authentication_content.html.twig */
class __TwigTemplate_053b378de79e9a15763f6c582adcc18461c92a6f8b1db2ea71cbac704a726cf9 extends Twig_Template
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
        $__internal_bce169538b11450e7a9cdc813f0ca82ba93de19ae9901b8a9f9034201cad9805 = $this->env->getExtension("native_profiler");
        $__internal_bce169538b11450e7a9cdc813f0ca82ba93de19ae9901b8a9f9034201cad9805->enter($__internal_bce169538b11450e7a9cdc813f0ca82ba93de19ae9901b8a9f9034201cad9805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_authentication_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_bce169538b11450e7a9cdc813f0ca82ba93de19ae9901b8a9f9034201cad9805->leave($__internal_bce169538b11450e7a9cdc813f0ca82ba93de19ae9901b8a9f9034201cad9805_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_authentication_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<form action=\"{{ path('sonata_user_profile_edit_authentication') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
</form>
";
    }
}
