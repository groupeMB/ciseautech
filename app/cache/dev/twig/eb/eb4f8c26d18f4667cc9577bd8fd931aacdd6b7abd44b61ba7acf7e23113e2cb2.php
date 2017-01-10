<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_4cbb7bc841aa6f10ab43a3e0f9ea12523cb286c9dbd6d59e0cb9eb4824c993b9 extends Twig_Template
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
        $__internal_0dd06f1ad8ae61a119dbc47df07e5326794286dd2aa546d248b69917bf19f3b8 = $this->env->getExtension("native_profiler");
        $__internal_0dd06f1ad8ae61a119dbc47df07e5326794286dd2aa546d248b69917bf19f3b8->enter($__internal_0dd06f1ad8ae61a119dbc47df07e5326794286dd2aa546d248b69917bf19f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_0dd06f1ad8ae61a119dbc47df07e5326794286dd2aa546d248b69917bf19f3b8->leave($__internal_0dd06f1ad8ae61a119dbc47df07e5326794286dd2aa546d248b69917bf19f3b8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
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
        return "<form action=\"{{ path('fos_user_group_new') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_group_new\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}\" />
    </div>
</form>
";
    }
}
