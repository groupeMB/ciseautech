<?php

/* CoutureGestionBundle:Comptabilite:index.html.twig */
class __TwigTemplate_54bc36971c3b131cb01fc58a13d507b46824881c18c246246e6905be370c66c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "CoutureGestionBundle:Comptabilite:index.html.twig", 1);
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
        $__internal_f75003459c9bf953e24ab5f5c4c5ddeb6a6431c0b60eaceafe229da5cdd786bf = $this->env->getExtension("native_profiler");
        $__internal_f75003459c9bf953e24ab5f5c4c5ddeb6a6431c0b60eaceafe229da5cdd786bf->enter($__internal_f75003459c9bf953e24ab5f5c4c5ddeb6a6431c0b60eaceafe229da5cdd786bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Comptabilite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75003459c9bf953e24ab5f5c4c5ddeb6a6431c0b60eaceafe229da5cdd786bf->leave($__internal_f75003459c9bf953e24ab5f5c4c5ddeb6a6431c0b60eaceafe229da5cdd786bf_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_d5b7ebf024a2f7288860fb006828510d9eea64899bce163244621ba593da13f6 = $this->env->getExtension("native_profiler");
        $__internal_d5b7ebf024a2f7288860fb006828510d9eea64899bce163244621ba593da13f6->enter($__internal_d5b7ebf024a2f7288860fb006828510d9eea64899bce163244621ba593da13f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

        // line 3
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-save\"></span> Entrée de fonds</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-open\"></span> Sortie de fonds</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-save\"></span> Entrée de stock</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-open\"></span> Sortie de stock</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-equalizer\"></span> Inventaire</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"> <span class=\"glyphicon glyphicon-stats\"></span> Statistiques</span></li>
\t</ul
";
        
        $__internal_d5b7ebf024a2f7288860fb006828510d9eea64899bce163244621ba593da13f6->leave($__internal_d5b7ebf024a2f7288860fb006828510d9eea64899bce163244621ba593da13f6_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Comptabilite:index.html.twig";
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
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-save\"></span> Entrée de fonds</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-open\"></span> Sortie de fonds</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-save\"></span> Entrée de stock</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-open\"></span> Sortie de stock</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-equalizer\"></span> Inventaire</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"> <span class=\"glyphicon glyphicon-stats\"></span> Statistiques</span></li>
\t</ul
{%endblock%}";
    }
}
