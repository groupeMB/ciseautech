<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_690ee5319543a195ced2342592cf8785a561bc260516eccdab87d2dce7a91e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1109428c1570961b42cd3e8039c665b86d892bf7f8c94db8ac2dba48ecab470 = $this->env->getExtension("native_profiler");
        $__internal_e1109428c1570961b42cd3e8039c665b86d892bf7f8c94db8ac2dba48ecab470->enter($__internal_e1109428c1570961b42cd3e8039c665b86d892bf7f8c94db8ac2dba48ecab470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1109428c1570961b42cd3e8039c665b86d892bf7f8c94db8ac2dba48ecab470->leave($__internal_e1109428c1570961b42cd3e8039c665b86d892bf7f8c94db8ac2dba48ecab470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c7c64264fdac87ba01817f58606df728a5217602f290576d7cffd752baf00a8 = $this->env->getExtension("native_profiler");
        $__internal_3c7c64264fdac87ba01817f58606df728a5217602f290576d7cffd752baf00a8->enter($__internal_3c7c64264fdac87ba01817f58606df728a5217602f290576d7cffd752baf00a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_3c7c64264fdac87ba01817f58606df728a5217602f290576d7cffd752baf00a8->leave($__internal_3c7c64264fdac87ba01817f58606df728a5217602f290576d7cffd752baf00a8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
