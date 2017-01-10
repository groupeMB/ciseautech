<?php

/* @CoutureGestion/Couture/addCommande.html.twig */
class __TwigTemplate_bf5b37c82be154be50d7513c0c3a9dfda03740042901de1a719d6b8ad2c21f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "@CoutureGestion/Couture/addCommande.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoutureGestionBundle:Couture:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb16ffaf428973153c5ad6a9f2f44099e603c0555a90009ce26d4350a14360ee = $this->env->getExtension("native_profiler");
        $__internal_bb16ffaf428973153c5ad6a9f2f44099e603c0555a90009ce26d4350a14360ee->enter($__internal_bb16ffaf428973153c5ad6a9f2f44099e603c0555a90009ce26d4350a14360ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/addCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb16ffaf428973153c5ad6a9f2f44099e603c0555a90009ce26d4350a14360ee->leave($__internal_bb16ffaf428973153c5ad6a9f2f44099e603c0555a90009ce26d4350a14360ee_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_ba36a4ee102cabe72b1417375fa930d44a7fd81c3ba6d1a9b5f5dff3e7736338 = $this->env->getExtension("native_profiler");
        $__internal_ba36a4ee102cabe72b1417375fa930d44a7fd81c3ba6d1a9b5f5dff3e7736338->enter($__internal_ba36a4ee102cabe72b1417375fa930d44a7fd81c3ba6d1a9b5f5dff3e7736338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-9\">
        \t<center><h4 class=\"panel-heading alert-danger\">Formulaire d'ajout d'une nouvelle commande</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\"><center><h4>Nouveau client</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_new_add_commande");
        echo "\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\"><center><h4>Client potentiel</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_potential_add_commande");
        echo "\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            
            
        </div>
    </div>
";
        
        $__internal_ba36a4ee102cabe72b1417375fa930d44a7fd81c3ba6d1a9b5f5dff3e7736338->leave($__internal_ba36a4ee102cabe72b1417375fa930d44a7fd81c3ba6d1a9b5f5dff3e7736338_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/addCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-9\">
        \t<center><h4 class=\"panel-heading alert-danger\">Formulaire d'ajout d'une nouvelle commande</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\"><center><h4>Nouveau client</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"{{ path(\"couture_gestion_couture_new_add_commande\")}}\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\"><center><h4>Client potentiel</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"{{ path(\"couture_gestion_couture_potential_add_commande\")}}\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            
            
        </div>
    </div>
{% endblock %}";
    }
}
