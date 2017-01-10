<?php

/* CoutureGestionBundle:Parametrage:index.html.twig */
class __TwigTemplate_2e93208684fcafcfd70b25d0dc7bd12a959cbc81cb431f0a685c0006576239ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "CoutureGestionBundle:Parametrage:index.html.twig", 1);
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
        $__internal_1b922e4dffbeadb7a31b0200bef233a8e45695212c4bb0fcb0dd34471d7170a8 = $this->env->getExtension("native_profiler");
        $__internal_1b922e4dffbeadb7a31b0200bef233a8e45695212c4bb0fcb0dd34471d7170a8->enter($__internal_1b922e4dffbeadb7a31b0200bef233a8e45695212c4bb0fcb0dd34471d7170a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Parametrage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b922e4dffbeadb7a31b0200bef233a8e45695212c4bb0fcb0dd34471d7170a8->leave($__internal_1b922e4dffbeadb7a31b0200bef233a8e45695212c4bb0fcb0dd34471d7170a8_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_fe165de566cbc48c4f311679e1a093313d0ddda15d55fd51a8d1fa62a2d9b005 = $this->env->getExtension("native_profiler");
        $__internal_fe165de566cbc48c4f311679e1a093313d0ddda15d55fd51a8d1fa62a2d9b005->enter($__internal_fe165de566cbc48c4f311679e1a093313d0ddda15d55fd51a8d1fa62a2d9b005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

        // line 3
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-time\"></span> Planification rappel</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Personnalisation formulaire</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-th\"></span> Liste utilisateur</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"> <span class=\"glyphicon glyphicon-user\"></span> nouveau utilisateur</span></li>
\t</ul
";
        
        $__internal_fe165de566cbc48c4f311679e1a093313d0ddda15d55fd51a8d1fa62a2d9b005->leave($__internal_fe165de566cbc48c4f311679e1a093313d0ddda15d55fd51a8d1fa62a2d9b005_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Parametrage:index.html.twig";
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
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-time\"></span> Planification rappel</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Personnalisation formulaire</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-th\"></span> Liste utilisateur</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"> <span class=\"glyphicon glyphicon-user\"></span> nouveau utilisateur</span></li>
\t</ul
{%endblock%}";
    }
}
