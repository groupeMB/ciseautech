<?php

/* @SonataUser/Profile/edit_profile_content.html.twig */
class __TwigTemplate_25c591a9db241df25b5f7e9688e1b777d4cdc6831c19d505da38056d7af3c84c extends Twig_Template
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
        $__internal_2048c8b5cc7a01b2c3947db4a88d3a1937ced3173ada5c90e8e0b129b5fa85f9 = $this->env->getExtension("native_profiler");
        $__internal_2048c8b5cc7a01b2c3947db4a88d3a1937ced3173ada5c90e8e0b129b5fa85f9->enter($__internal_2048c8b5cc7a01b2c3947db4a88d3a1937ced3173ada5c90e8e0b129b5fa85f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Profile/edit_profile_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_2048c8b5cc7a01b2c3947db4a88d3a1937ced3173ada5c90e8e0b129b5fa85f9->leave($__internal_2048c8b5cc7a01b2c3947db4a88d3a1937ced3173ada5c90e8e0b129b5fa85f9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Profile/edit_profile_content.html.twig";
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
        return "<form action=\"{{ path('sonata_user_profile_edit') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_widget(form) }}
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>
    </div>
</form>
";
    }
}
