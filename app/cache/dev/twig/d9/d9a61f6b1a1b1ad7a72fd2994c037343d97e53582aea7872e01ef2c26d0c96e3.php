<?php

/* CoutureGestionBundle:Couture:afficherCommande.html.twig */
class __TwigTemplate_4c46e53818cc0453987033f91fcf1a6ede5b37b04a3979e5519757ee03ce2026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:afficherCommande.html.twig", 1);
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
        $__internal_4cf49a229f72e73adcc2cbe886607403949cac6344567bb8e7d278e079db19c3 = $this->env->getExtension("native_profiler");
        $__internal_4cf49a229f72e73adcc2cbe886607403949cac6344567bb8e7d278e079db19c3->enter($__internal_4cf49a229f72e73adcc2cbe886607403949cac6344567bb8e7d278e079db19c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:afficherCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf49a229f72e73adcc2cbe886607403949cac6344567bb8e7d278e079db19c3->leave($__internal_4cf49a229f72e73adcc2cbe886607403949cac6344567bb8e7d278e079db19c3_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_6ea3e5a114d5fbd0cf1043d82395b6377d33368a130432fa326d6066ee5285a0 = $this->env->getExtension("native_profiler");
        $__internal_6ea3e5a114d5fbd0cf1043d82395b6377d33368a130432fa326d6066ee5285a0->enter($__internal_6ea3e5a114d5fbd0cf1043d82395b6377d33368a130432fa326d6066ee5285a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            <center><h4>Commande éffectué par le client ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "commande", array()), "clientId", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "commande", array()), "clientId", array()), "prenom", array()), "html", null, true);
        echo "</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Identifiant : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "commande", array()), "reference", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Date commande : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "commande", array()), "dateCommande", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Quantité de modèle : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "commande", array()), "nbModele", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Somme à payer : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "montantTotal", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Livraison : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "commande", array()), "livraison", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Date de livriason : ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "commande", array()), "dateLivraison", array()), "d-m-Y"), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Somme avancée : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "avance", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Somme restant : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")), "restant", array()), "html", null, true);
        echo "</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_commande");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des commandes</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> ajouter Mesure pour ce client</button></a>
                </li>
            </ul>
            <hr class=\"colorgraph\">
            <center>
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client1.png")), "html", null, true);
        echo "\" width=\"70%\" alt=\"\">
                <h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5>
            </center>
        </div>
    </div>
";
        
        $__internal_6ea3e5a114d5fbd0cf1043d82395b6377d33368a130432fa326d6066ee5285a0->leave($__internal_6ea3e5a114d5fbd0cf1043d82395b6377d33368a130432fa326d6066ee5285a0_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:afficherCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  91 => 23,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-8\">
            <center><h4>Commande éffectué par le client {{ commandeProduit.commande.clientId.nom }} {{ commandeProduit.commande.clientId.prenom }}</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Identifiant : {{ commandeProduit.commande.reference }}</li>
                <li class=\"list-group-item\">Date commande : {{ commandeProduit.commande.dateCommande | date('d-m-Y') }}</li>
                <li class=\"list-group-item\">Quantité de modèle : {{ commandeProduit.commande.nbModele }}</li>
                <li class=\"list-group-item\">Somme à payer : {{ commandeProduit.montantTotal }}</li>
                <li class=\"list-group-item\">Livraison : {{ commandeProduit.commande.livraison }}</li>
                <li class=\"list-group-item\">Date de livriason : {{ commandeProduit.commande.dateLivraison | date('d-m-Y') }}</li>
                <li class=\"list-group-item\">Somme avancée : {{ commandeProduit.avance }}</li>
                <li class=\"list-group-item\">Somme restant : {{ commandeProduit.restant }}</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path ('couture_gestion_couture_list_commande') }}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des commandes</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"#\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> ajouter Mesure pour ce client</button></a>
                </li>
            </ul>
            <hr class=\"colorgraph\">
            <center>
                <img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/client1.png') }}\" width=\"70%\" alt=\"\">
                <h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5>
            </center>
        </div>
    </div>
{% endblock %}

";
    }
}
