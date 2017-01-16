<?php

/* CoutureGestionBundle:Couture:afficherModele.html.twig */
class __TwigTemplate_1247b5c5a70dffedb4176afee0edb522d48d2206c6dd58d399e3249f530f2edd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:afficherModele.html.twig", 1);
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
        $__internal_b4b5686d71daade2687d45832b221f2b73cf80ac8c12b1cddf4b5d3b233d445c = $this->env->getExtension("native_profiler");
        $__internal_b4b5686d71daade2687d45832b221f2b73cf80ac8c12b1cddf4b5d3b233d445c->enter($__internal_b4b5686d71daade2687d45832b221f2b73cf80ac8c12b1cddf4b5d3b233d445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:afficherModele.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b5686d71daade2687d45832b221f2b73cf80ac8c12b1cddf4b5d3b233d445c->leave($__internal_b4b5686d71daade2687d45832b221f2b73cf80ac8c12b1cddf4b5d3b233d445c_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_e59306ddcd84f9e5380a0589536d8a31fd051260fb6704e843cc1b0cca22d2cd = $this->env->getExtension("native_profiler");
        $__internal_e59306ddcd84f9e5380a0589536d8a31fd051260fb6704e843cc1b0cca22d2cd->enter($__internal_e59306ddcd84f9e5380a0589536d8a31fd051260fb6704e843cc1b0cca22d2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-4\">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Référence : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "reference", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Désignation : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "designation", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Description : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "description", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Prix unitaire : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "cout", array()), "html", null, true);
        echo " FCFA</li>
                <li class=\"list-group-item\">Type de modèle : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "typeModele", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Durée de confession : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")), "dureeConfection", array()), "html", null, true);
        echo " jours</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Image du modèle</h4></center>
            <hr class=\"colorgraph\">
            <center>
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client1.png")), "html", null, true);
        echo "\" width=\"70%\" alt=\"\">
            </center>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_modele");
        echo "\"><button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des modèles</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_modele");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Nouveau modèle</button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Statiqtique du modèle</button>
                </li>
            </ul>
        </div>
    </div>
    <center><h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5></center>
";
        
        $__internal_e59306ddcd84f9e5380a0589536d8a31fd051260fb6704e843cc1b0cca22d2cd->leave($__internal_e59306ddcd84f9e5380a0589536d8a31fd051260fb6704e843cc1b0cca22d2cd_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:afficherModele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  88 => 28,  77 => 20,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-4\">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Référence : {{ modele.reference }}</li>
                <li class=\"list-group-item\">Désignation : {{ modele.designation }}</li>
                <li class=\"list-group-item\">Description : {{ modele.description }}</li>
                <li class=\"list-group-item\">Prix unitaire : {{ modele.cout }} FCFA</li>
                <li class=\"list-group-item\">Type de modèle : {{ modele.typeModele }}</li>
                <li class=\"list-group-item\">Durée de confession : {{ modele.dureeConfection }} jours</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Image du modèle</h4></center>
            <hr class=\"colorgraph\">
            <center>
                <img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/client1.png') }}\" width=\"70%\" alt=\"\">
            </center>
        </div>
        <div class=\"col-md-4\">
            <center><h4> Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path(\"couture_gestion_couture_list_modele\")}}\"><button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Liste des modèles</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path(\"couture_gestion_couture_add_modele\")}}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Nouveau modèle</button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Statiqtique du modèle</button>
                </li>
            </ul>
        </div>
    </div>
    <center><h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5></center>
{% endblock %}

";
    }
}
