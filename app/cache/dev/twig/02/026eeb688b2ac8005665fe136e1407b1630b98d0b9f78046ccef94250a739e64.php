<?php

/* CoutureGestionBundle:Couture:index.html.twig */
class __TwigTemplate_6fd0780375279092d7e45551809596a3b8c6ebf8f7d9f32bbc0e40894e17dfcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "CoutureGestionBundle:Couture:index.html.twig", 1);
        $this->blocks = array(
            'contain_menu_left' => array($this, 'block_contain_menu_left'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoutureGestionBundle::template1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_547082bc6cc65e198a20ebcc9f02259b8d22155cda28081d62c2a4288d8af75f = $this->env->getExtension("native_profiler");
        $__internal_547082bc6cc65e198a20ebcc9f02259b8d22155cda28081d62c2a4288d8af75f->enter($__internal_547082bc6cc65e198a20ebcc9f02259b8d22155cda28081d62c2a4288d8af75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547082bc6cc65e198a20ebcc9f02259b8d22155cda28081d62c2a4288d8af75f->leave($__internal_547082bc6cc65e198a20ebcc9f02259b8d22155cda28081d62c2a4288d8af75f_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_5c80a726f40a1e65a018949ce2df81cadd803173f0a95471960133e8e554e9d3 = $this->env->getExtension("native_profiler");
        $__internal_5c80a726f40a1e65a018949ce2df81cadd803173f0a95471960133e8e554e9d3->enter($__internal_5c80a726f40a1e65a018949ce2df81cadd803173f0a95471960133e8e554e9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

        // line 3
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_commande");
        echo "\"><span class=\"glyphicon glyphicon-book\"></span> Mes commandes</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Livraison commande</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-usd\"></span> Honoration dettes</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_client");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Nouveau client</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_client");
        echo "\"><span class=\"glyphicon glyphicon-th\"></span> Liste client</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_modele");
        echo "\"><span class=\"glyphicon glyphicon-tags\"></span>  Mes modèles</a></span></li>
\t</ul>
";
        
        $__internal_5c80a726f40a1e65a018949ce2df81cadd803173f0a95471960133e8e554e9d3->leave($__internal_5c80a726f40a1e65a018949ce2df81cadd803173f0a95471960133e8e554e9d3_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  53 => 8,  49 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle::template1.html.twig\" %}
{% block contain_menu_left %}
\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"couture_gestion_couture_list_commande\")}}\"><span class=\"glyphicon glyphicon-book\"></span> Mes commandes</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Livraison commande</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-usd\"></span> Honoration dettes</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"couture_gestion_couture_add_client\")}}\"><span class=\"glyphicon glyphicon-user\"></span> Nouveau client</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"couture_gestion_couture_list_client\")}}\"><span class=\"glyphicon glyphicon-th\"></span> Liste client</a></span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"couture_gestion_couture_list_modele\")}}\"><span class=\"glyphicon glyphicon-tags\"></span>  Mes modèles</a></span></li>
\t</ul>
{%endblock%}";
    }
}
