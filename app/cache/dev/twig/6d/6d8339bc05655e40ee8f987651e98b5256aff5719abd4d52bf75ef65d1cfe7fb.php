<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_de3508d143f65d3fb58ee208ca1eb5af2258d241eba469dcab863dcb18a2d4b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_95609541e4a9e25fea05f31eee5b43879b5b0eecb59950323748984661344c90 = $this->env->getExtension("native_profiler");
        $__internal_95609541e4a9e25fea05f31eee5b43879b5b0eecb59950323748984661344c90->enter($__internal_95609541e4a9e25fea05f31eee5b43879b5b0eecb59950323748984661344c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95609541e4a9e25fea05f31eee5b43879b5b0eecb59950323748984661344c90->leave($__internal_95609541e4a9e25fea05f31eee5b43879b5b0eecb59950323748984661344c90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e074abb8a04156d1859b8c0847cccc6029a70d711452d300cd815e6605c1165e = $this->env->getExtension("native_profiler");
        $__internal_e074abb8a04156d1859b8c0847cccc6029a70d711452d300cd815e6605c1165e->enter($__internal_e074abb8a04156d1859b8c0847cccc6029a70d711452d300cd815e6605c1165e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e074abb8a04156d1859b8c0847cccc6029a70d711452d300cd815e6605c1165e->leave($__internal_e074abb8a04156d1859b8c0847cccc6029a70d711452d300cd815e6605c1165e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
