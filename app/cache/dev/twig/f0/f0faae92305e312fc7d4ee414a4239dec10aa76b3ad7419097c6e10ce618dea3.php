<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_bcb53cf8f58106cf25e944de6972838a6f856079970f6403f2ee48ca9e2c08ec extends Twig_Template
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
        $__internal_bfdbc5bcc89efe96dbf93cd9c65b36cadae2f9ccfbe7600a7a4ce44d3107c6f9 = $this->env->getExtension("native_profiler");
        $__internal_bfdbc5bcc89efe96dbf93cd9c65b36cadae2f9ccfbe7600a7a4ce44d3107c6f9->enter($__internal_bfdbc5bcc89efe96dbf93cd9c65b36cadae2f9ccfbe7600a7a4ce44d3107c6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_bfdbc5bcc89efe96dbf93cd9c65b36cadae2f9ccfbe7600a7a4ce44d3107c6f9->leave($__internal_bfdbc5bcc89efe96dbf93cd9c65b36cadae2f9ccfbe7600a7a4ce44d3107c6f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
";
    }
}
