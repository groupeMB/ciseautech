<?php

/* CoutureGestionBundle:Couture:addCommande.html.twig */
class __TwigTemplate_83ea5694fc50b8db00f02fbb380676ac8bc0c2c2bb765c8aee45e408e17ff283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:addCommande.html.twig", 1);
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
        $__internal_59989aeb1bc7261e527b34d9236b879789469a9048ef2211f48f1ffc25c8bd05 = $this->env->getExtension("native_profiler");
        $__internal_59989aeb1bc7261e527b34d9236b879789469a9048ef2211f48f1ffc25c8bd05->enter($__internal_59989aeb1bc7261e527b34d9236b879789469a9048ef2211f48f1ffc25c8bd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:addCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59989aeb1bc7261e527b34d9236b879789469a9048ef2211f48f1ffc25c8bd05->leave($__internal_59989aeb1bc7261e527b34d9236b879789469a9048ef2211f48f1ffc25c8bd05_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_ccb936ba7cea36353e25cb5b93c53e5255c6491ae3860a3a4c9736bbabf827b1 = $this->env->getExtension("native_profiler");
        $__internal_ccb936ba7cea36353e25cb5b93c53e5255c6491ae3860a3a4c9736bbabf827b1->enter($__internal_ccb936ba7cea36353e25cb5b93c53e5255c6491ae3860a3a4c9736bbabf827b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
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
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_new_add_commande_client");
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
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_new_add_commande");
        echo "\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
            </div>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_commande");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des commandes</button></a>
                </li>
            </ul>
            <hr class=\"colorgraph\">
            <center>
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client1.png")), "html", null, true);
        echo "\" width=\"70%\" alt=\"\">
                <h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5>
            </center>
        </div>
    </div>
";
        
        $__internal_ccb936ba7cea36353e25cb5b93c53e5255c6491ae3860a3a4c9736bbabf827b1->leave($__internal_ccb936ba7cea36353e25cb5b93c53e5255c6491ae3860a3a4c9736bbabf827b1_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:addCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  78 => 33,  63 => 21,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-8\">
        \t<center><h4 class=\"panel-heading alert-danger\">Formulaire d'ajout d'une nouvelle commande</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\"><center><h4>Nouveau client</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"{{ path(\"couture_gestion_couture_new_add_commande_client\")}}\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\"><center><h4>Client potentiel</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"{{ path(\"couture_gestion_couture_new_add_commande\")}}\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
            </div>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path ('couture_gestion_couture_list_commande') }}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des commandes</button></a>
                </li>
            </ul>
            <hr class=\"colorgraph\">
            <center>
                <img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/client1.png') }}\" width=\"70%\" alt=\"\">
                <h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5>
            </center>
        </div>
    </div>
{% endblock %}";
    }
}
