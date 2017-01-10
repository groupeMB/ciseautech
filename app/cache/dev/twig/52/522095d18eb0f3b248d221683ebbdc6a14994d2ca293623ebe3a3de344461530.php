<?php

/* @CoutureGestion/Comptabilite/index.html.twig */
class __TwigTemplate_e51580cc0f89064c46771fbad8d5f53d2132f6063d815a34c1d7ae60b58d4faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "@CoutureGestion/Comptabilite/index.html.twig", 1);
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
        $__internal_ad427b173a23779816420b14457fb48de2a11c196db34be19349412ad57c9306 = $this->env->getExtension("native_profiler");
        $__internal_ad427b173a23779816420b14457fb48de2a11c196db34be19349412ad57c9306->enter($__internal_ad427b173a23779816420b14457fb48de2a11c196db34be19349412ad57c9306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Comptabilite/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad427b173a23779816420b14457fb48de2a11c196db34be19349412ad57c9306->leave($__internal_ad427b173a23779816420b14457fb48de2a11c196db34be19349412ad57c9306_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_3e6e433d4503af204b3001334ddd1c41e81e8c22d34e3feb449f96197be75968 = $this->env->getExtension("native_profiler");
        $__internal_3e6e433d4503af204b3001334ddd1c41e81e8c22d34e3feb449f96197be75968->enter($__internal_3e6e433d4503af204b3001334ddd1c41e81e8c22d34e3feb449f96197be75968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

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
        
        $__internal_3e6e433d4503af204b3001334ddd1c41e81e8c22d34e3feb449f96197be75968->leave($__internal_3e6e433d4503af204b3001334ddd1c41e81e8c22d34e3feb449f96197be75968_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Comptabilite/index.html.twig";
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
