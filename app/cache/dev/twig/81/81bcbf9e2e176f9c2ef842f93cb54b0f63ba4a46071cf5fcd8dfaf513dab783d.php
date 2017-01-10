<?php

/* @CoutureGestion/Couture/index.html.twig */
class __TwigTemplate_ac7df23b2a7556dd61ce9cc9305bc8e61caf069874c362012603a7331959d9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "@CoutureGestion/Couture/index.html.twig", 1);
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
        $__internal_efba795607b0b839f312445e31e27912becaf6f34859fa7c81975be5cbf561d7 = $this->env->getExtension("native_profiler");
        $__internal_efba795607b0b839f312445e31e27912becaf6f34859fa7c81975be5cbf561d7->enter($__internal_efba795607b0b839f312445e31e27912becaf6f34859fa7c81975be5cbf561d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efba795607b0b839f312445e31e27912becaf6f34859fa7c81975be5cbf561d7->leave($__internal_efba795607b0b839f312445e31e27912becaf6f34859fa7c81975be5cbf561d7_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_dd63282bea680a6e41d468575e6304eb3ac0fbc79197a343086b1c480c72db7d = $this->env->getExtension("native_profiler");
        $__internal_dd63282bea680a6e41d468575e6304eb3ac0fbc79197a343086b1c480c72db7d->enter($__internal_dd63282bea680a6e41d468575e6304eb3ac0fbc79197a343086b1c480c72db7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

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
        
        $__internal_dd63282bea680a6e41d468575e6304eb3ac0fbc79197a343086b1c480c72db7d->leave($__internal_dd63282bea680a6e41d468575e6304eb3ac0fbc79197a343086b1c480c72db7d_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/index.html.twig";
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
