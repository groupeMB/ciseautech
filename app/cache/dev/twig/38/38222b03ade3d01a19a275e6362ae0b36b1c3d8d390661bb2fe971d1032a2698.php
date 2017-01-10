<?php

/* CoutureGestionBundle:Vente:index.html.twig */
class __TwigTemplate_cdf6ec1962ec7af9c8fe6196fc3c32e53ceb7e84805b029865c3d5bd162082a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "CoutureGestionBundle:Vente:index.html.twig", 1);
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
        $__internal_f3deb8ce39af1b2ee497df5ce17b9e29af002d1b7a48170ade61309739d98a3f = $this->env->getExtension("native_profiler");
        $__internal_f3deb8ce39af1b2ee497df5ce17b9e29af002d1b7a48170ade61309739d98a3f->enter($__internal_f3deb8ce39af1b2ee497df5ce17b9e29af002d1b7a48170ade61309739d98a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Vente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3deb8ce39af1b2ee497df5ce17b9e29af002d1b7a48170ade61309739d98a3f->leave($__internal_f3deb8ce39af1b2ee497df5ce17b9e29af002d1b7a48170ade61309739d98a3f_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_ec5ff9857ee21305f4ee32f5229c07e2943c865f5c993ac15921ee4fb12954c5 = $this->env->getExtension("native_profiler");
        $__internal_ec5ff9857ee21305f4ee32f5229c07e2943c865f5c993ac15921ee4fb12954c5->enter($__internal_ec5ff9857ee21305f4ee32f5229c07e2943c865f5c993ac15921ee4fb12954c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

        // line 3
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-book\"></span> Nouvelle vente</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-remove\"></span> Annulation vente</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-th\"></span> Liste vente</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-list-alt\"></span> Ajout produit</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-th-list\"></span> Classification produit</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Promotion</span></li>
\t</ul
";
        
        $__internal_ec5ff9857ee21305f4ee32f5229c07e2943c865f5c993ac15921ee4fb12954c5->leave($__internal_ec5ff9857ee21305f4ee32f5229c07e2943c865f5c993ac15921ee4fb12954c5_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Vente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle::template1.html.twig\" %}
{% block contain_menu_left %}
\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-book\"></span> Nouvelle vente</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-remove\"></span> Annulation vente</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-th\"></span> Liste vente</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-list-alt\"></span> Ajout produit</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-th-list\"></span> Classification produit</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Promotion</span></li>
\t</ul
{%endblock%}";
    }
}
