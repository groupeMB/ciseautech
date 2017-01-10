<?php

/* @CoutureGestion/Vente/index.html.twig */
class __TwigTemplate_e65387e40d9218f0a41c03504d71edfde1809e2cd1b0f263d0f8b0a6fb59b568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template1.html.twig", "@CoutureGestion/Vente/index.html.twig", 1);
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
        $__internal_1ca8421efa99a65463c88cadacf666fc2e5324b4271aa5b369ff34d60419aba4 = $this->env->getExtension("native_profiler");
        $__internal_1ca8421efa99a65463c88cadacf666fc2e5324b4271aa5b369ff34d60419aba4->enter($__internal_1ca8421efa99a65463c88cadacf666fc2e5324b4271aa5b369ff34d60419aba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Vente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca8421efa99a65463c88cadacf666fc2e5324b4271aa5b369ff34d60419aba4->leave($__internal_1ca8421efa99a65463c88cadacf666fc2e5324b4271aa5b369ff34d60419aba4_prof);

    }

    // line 2
    public function block_contain_menu_left($context, array $blocks = array())
    {
        $__internal_ac7cde9ea21fa0ee50d276757f29ecfc29a8a942c1073a5a17812c4729204a54 = $this->env->getExtension("native_profiler");
        $__internal_ac7cde9ea21fa0ee50d276757f29ecfc29a8a942c1073a5a17812c4729204a54->enter($__internal_ac7cde9ea21fa0ee50d276757f29ecfc29a8a942c1073a5a17812c4729204a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contain_menu_left"));

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
        
        $__internal_ac7cde9ea21fa0ee50d276757f29ecfc29a8a942c1073a5a17812c4729204a54->leave($__internal_ac7cde9ea21fa0ee50d276757f29ecfc29a8a942c1073a5a17812c4729204a54_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Vente/index.html.twig";
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
