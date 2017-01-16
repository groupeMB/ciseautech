<?php

/* CoutureGestionBundle:Couture:index.html.twig */
class __TwigTemplate_73769a71e41ef3fe1751f05ff252e4dc926f1e24851c86a8b4004b6e48fd8654 extends Twig_Template
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
        $__internal_eed0a3e2ba1cc2b100fc908519bbf4b274fe2316677fa5514776c57cad3d48d9 = $this->env->getExtension("native_profiler");
        $__internal_eed0a3e2ba1cc2b100fc908519bbf4b274fe2316677fa5514776c57cad3d48d9->enter($__internal_eed0a3e2ba1cc2b100fc908519bbf4b274fe2316677fa5514776c57cad3d48d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed0a3e2ba1cc2b100fc908519bbf4b274fe2316677fa5514776c57cad3d48d9->leave($__internal_eed0a3e2ba1cc2b100fc908519bbf4b274fe2316677fa5514776c57cad3d48d9_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_a62d6de530e4c91cda03ba655b29e2df42b645bd7a2308795612eeb532114aee = $this->env->getExtension("native_profiler");
        $__internal_a62d6de530e4c91cda03ba655b29e2df42b645bd7a2308795612eeb532114aee->enter($__internal_a62d6de530e4c91cda03ba655b29e2df42b645bd7a2308795612eeb532114aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

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
        
        $__internal_a62d6de530e4c91cda03ba655b29e2df42b645bd7a2308795612eeb532114aee->leave($__internal_a62d6de530e4c91cda03ba655b29e2df42b645bd7a2308795612eeb532114aee_prof);

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
