<?php

/* SonataUserBundle:Profile:edit_profile_content.html.twig */
class __TwigTemplate_87bd7de83153a909da0d236daf65cc8ab36510fbab7e2522fa4417fe17ab1be8 extends Twig_Template
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
        $__internal_63e3f74f4161ca387cf395a3fd15186382d0c04238e89d36983bbc54cbc9a9f5 = $this->env->getExtension("native_profiler");
        $__internal_63e3f74f4161ca387cf395a3fd15186382d0c04238e89d36983bbc54cbc9a9f5->enter($__internal_63e3f74f4161ca387cf395a3fd15186382d0c04238e89d36983bbc54cbc9a9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile_content.html.twig"));

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
        
        $__internal_63e3f74f4161ca387cf395a3fd15186382d0c04238e89d36983bbc54cbc9a9f5->leave($__internal_63e3f74f4161ca387cf395a3fd15186382d0c04238e89d36983bbc54cbc9a9f5_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile_content.html.twig";
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
