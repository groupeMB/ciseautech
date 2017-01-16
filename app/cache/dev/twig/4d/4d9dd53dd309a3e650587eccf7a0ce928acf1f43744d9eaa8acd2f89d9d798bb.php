<?php

/* CoutureGestionBundle:Couture:afficherClientBis.html.twig */
class __TwigTemplate_6087700428153ec8493c092e5708eaae0ef78b507a9fad5e78a61560aab11a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:afficherClientBis.html.twig", 1);
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
        $__internal_a92527025df821054dc1617ece031cab2e26c032f28c9ada9524dc6b3992a80b = $this->env->getExtension("native_profiler");
        $__internal_a92527025df821054dc1617ece031cab2e26c032f28c9ada9524dc6b3992a80b->enter($__internal_a92527025df821054dc1617ece031cab2e26c032f28c9ada9524dc6b3992a80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:afficherClientBis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92527025df821054dc1617ece031cab2e26c032f28c9ada9524dc6b3992a80b->leave($__internal_a92527025df821054dc1617ece031cab2e26c032f28c9ada9524dc6b3992a80b_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_8a201484a21db3854f9ee38ad1251f86abe024ee41815f1d76e66b1df9bf2e4f = $this->env->getExtension("native_profiler");
        $__internal_8a201484a21db3854f9ee38ad1251f86abe024ee41815f1d76e66b1df9bf2e4f->enter($__internal_8a201484a21db3854f9ee38ad1251f86abe024ee41815f1d76e66b1df9bf2e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Identifiant : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identifiant", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Prenom : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Nom : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Sexe : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Adresse : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Telephone : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Email : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Type Client : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "typeClient", array()), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_client");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des clients</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_mesure_new_client_simple", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> ajouter Mesure pour ce client</button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Statiqtiques du client</button>
                </li>
            </ul>
            <hr class=\"colorgraph\">
            <center>
                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client1.png")), "html", null, true);
        echo "\" width=\"70%\" alt=\"\">
                <h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5>
            </center>
        </div>
    </div>
";
        
        $__internal_8a201484a21db3854f9ee38ad1251f86abe024ee41815f1d76e66b1df9bf2e4f->leave($__internal_8a201484a21db3854f9ee38ad1251f86abe024ee41815f1d76e66b1df9bf2e4f_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:afficherClientBis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  92 => 26,  86 => 23,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-8\">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Identifiant : {{ client.identifiant }}</li>
                <li class=\"list-group-item\">Prenom : {{ client.prenom }}</li>
                <li class=\"list-group-item\">Nom : {{ client.nom }}</li>
                <li class=\"list-group-item\">Sexe : {{ client.sexe }}</li>
                <li class=\"list-group-item\">Adresse : {{ client.adresse }}</li>
                <li class=\"list-group-item\">Telephone : {{ client.telephone }}</li>
                <li class=\"list-group-item\">Email : {{ client.email }}</li>
                <li class=\"list-group-item\">Type Client : {{ client.typeClient }}</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path(\"couture_gestion_couture_list_client\")}}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des clients</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path('couture_gestion_couture_mesure_new_client_simple',{'id':client.id})}}\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> ajouter Mesure pour ce client</button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Statiqtiques du client</button>
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
