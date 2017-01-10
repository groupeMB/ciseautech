<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_f4e994cf3841224b1171dcd2d4a157320d47f84c48017cc6825b5ad2c4609b9e extends Twig_Template
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
        $__internal_e9ebb1d8dac57e9cbb6ffac37b969efe986222808ba0c089b2696b7ede0dca43 = $this->env->getExtension("native_profiler");
        $__internal_e9ebb1d8dac57e9cbb6ffac37b969efe986222808ba0c089b2696b7ede0dca43->enter($__internal_e9ebb1d8dac57e9cbb6ffac37b969efe986222808ba0c089b2696b7ede0dca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_e9ebb1d8dac57e9cbb6ffac37b969efe986222808ba0c089b2696b7ede0dca43->leave($__internal_e9ebb1d8dac57e9cbb6ffac37b969efe986222808ba0c089b2696b7ede0dca43_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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
        return "<form action=\"{{ path('fos_user_profile_edit') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_profile_edit\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}\" />
    </div>
</form>
";
    }
}
