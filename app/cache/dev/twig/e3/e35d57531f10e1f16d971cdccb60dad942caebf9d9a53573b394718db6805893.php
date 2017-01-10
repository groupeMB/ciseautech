<?php

/* @CoutureGestion/Parametrage/index.html.twig */
class __TwigTemplate_304cbbf59b917d91e6696068e663fe2ce0bc55909c4b6e5b172dd95735bd7f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "@CoutureGestion/Parametrage/index.html.twig", 1);
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
        $__internal_8a9d643cd3b3323ef07129e113db41dcc87e114db8e3254ad8ab4c918168ab64 = $this->env->getExtension("native_profiler");
        $__internal_8a9d643cd3b3323ef07129e113db41dcc87e114db8e3254ad8ab4c918168ab64->enter($__internal_8a9d643cd3b3323ef07129e113db41dcc87e114db8e3254ad8ab4c918168ab64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Parametrage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9d643cd3b3323ef07129e113db41dcc87e114db8e3254ad8ab4c918168ab64->leave($__internal_8a9d643cd3b3323ef07129e113db41dcc87e114db8e3254ad8ab4c918168ab64_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_407a88d8b0f3d690570926f4d5f73443144662d530e12675243d3180a4ee0d47 = $this->env->getExtension("native_profiler");
        $__internal_407a88d8b0f3d690570926f4d5f73443144662d530e12675243d3180a4ee0d47->enter($__internal_407a88d8b0f3d690570926f4d5f73443144662d530e12675243d3180a4ee0d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

        // line 3
        echo "\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-time\"></span> Planification rappel</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Personnalisation formulaire</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-th\"></span> Liste utilisateur</span></li>
\t\t<li class=\"list-group-item alert-success\"><span class=\"btn-block\"> <span class=\"glyphicon glyphicon-user\"></span> nouveau utilisateur</span></li>
\t</ul
";
        
        $__internal_407a88d8b0f3d690570926f4d5f73443144662d530e12675243d3180a4ee0d47->leave($__internal_407a88d8b0f3d690570926f4d5f73443144662d530e12675243d3180a4ee0d47_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Parametrage/index.html.twig";
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
