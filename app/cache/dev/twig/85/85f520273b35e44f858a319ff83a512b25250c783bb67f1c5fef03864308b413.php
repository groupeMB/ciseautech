<?php

/* CoutureGestionBundle:Couture:resumeCommande.html.twig */
class __TwigTemplate_b4c2c881230da4a6a05097d402b2e18b3f7d4bd5b556424eb355b8888374fd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:resumeCommande.html.twig", 1);
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
        $__internal_4aa8f6e1fd10c847fa913a4a799b0818822aadbeab7228240369346a51767e92 = $this->env->getExtension("native_profiler");
        $__internal_4aa8f6e1fd10c847fa913a4a799b0818822aadbeab7228240369346a51767e92->enter($__internal_4aa8f6e1fd10c847fa913a4a799b0818822aadbeab7228240369346a51767e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:resumeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa8f6e1fd10c847fa913a4a799b0818822aadbeab7228240369346a51767e92->leave($__internal_4aa8f6e1fd10c847fa913a4a799b0818822aadbeab7228240369346a51767e92_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_89aa5a802064a18e699a2b1ea47cf62343064c6ea5eb9f6895c8287e986c4f20 = $this->env->getExtension("native_profiler");
        $__internal_89aa5a802064a18e699a2b1ea47cf62343064c6ea5eb9f6895c8287e986c4f20->enter($__internal_89aa5a802064a18e699a2b1ea47cf62343064c6ea5eb9f6895c8287e986c4f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "\t <div class=\"row\">
        <div class=\"col-md-3\">
        \t<center><h4>Details commande</h4></center>
                <hr class=\"colorgraph\">
        \t<ul class=\"list-group\">
        \t\t
\t\t\t \t<li class=\"list-group-item\">Prenom client : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "prenomClient", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Nom client : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "nomClient", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Télephone client : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "telephoneClient", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Date commande : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCommande", array()), "Y-m-d"), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Etat : Non livré</li>
\t\t\t \t<li class=\"list-group-item\">Nombre de modèles : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "nbModele", array()), "html", null, true);
        echo "</li>
\t\t\t</ul>
        </div>
        <div class=\"col-md-6\">
        \t<center><h4>Détails modéles commandés</h4></center>
                <hr class=\"colorgraph\">
        \t<div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped table-hover \">
                <thead>
                    <th>Modèle</th>
                    <th>Prix Unitaire</th>
                    <th>Quantite</th>
                    <th>Prix Total</th>
                </thead>      
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 30
            echo "                    <tr>
                    \t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tag"], "modele", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prixUnitaire", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "montantTotal", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped table-hover \">
                <thead>
                    <th>Net à payer</th>
                </thead>      
                <tbody>
                    <tr>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["pt"]) ? $context["pt"] : $this->getContext($context, "pt")), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"col-md-3\">
    \t<center><h4> Actions à effectuer</h4></center>
        <hr class=\"colorgraph\">
        <ul class=\"list-group\">
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Avance</button>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Facturation</button>
        \t</li>
        \t
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Mesure Client</button>
        \t</li>
            <li class=\"list-group-item\">
                <button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Liste Commande</button>
            </li>
        </ul>
        <hr class=\"colorgraph\">
     </div>
    </div>
";
        
        $__internal_89aa5a802064a18e699a2b1ea47cf62343064c6ea5eb9f6895c8287e986c4f20->leave($__internal_89aa5a802064a18e699a2b1ea47cf62343064c6ea5eb9f6895c8287e986c4f20_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:resumeCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  111 => 37,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  87 => 30,  83 => 29,  65 => 14,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
\t <div class=\"row\">
        <div class=\"col-md-3\">
        \t<center><h4>Details commande</h4></center>
                <hr class=\"colorgraph\">
        \t<ul class=\"list-group\">
        \t\t
\t\t\t \t<li class=\"list-group-item\">Prenom client : {{ commande.prenomClient }}</li>
\t\t\t \t<li class=\"list-group-item\">Nom client : {{ commande.nomClient }}</li>
                <li class=\"list-group-item\">Télephone client : {{ commande.telephoneClient }}</li>
\t\t\t \t<li class=\"list-group-item\">Date commande : {{ commande.dateCommande | date('Y-m-d')}}</li>
\t\t\t \t<li class=\"list-group-item\">Etat : Non livré</li>
\t\t\t \t<li class=\"list-group-item\">Nombre de modèles : {{ commande.nbModele }}</li>
\t\t\t</ul>
        </div>
        <div class=\"col-md-6\">
        \t<center><h4>Détails modéles commandés</h4></center>
                <hr class=\"colorgraph\">
        \t<div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped table-hover \">
                <thead>
                    <th>Modèle</th>
                    <th>Prix Unitaire</th>
                    <th>Quantite</th>
                    <th>Prix Total</th>
                </thead>      
                <tbody>
                {% for tag in commandeProduit %}
                    <tr>
                    \t<td>{{ tag.modele.designation }}</td>
                        <td>{{ tag.prixUnitaire }}</td>
                        <td>{{ tag.quantite }}</td>
                        <td>{{ tag.montantTotal }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped table-hover \">
                <thead>
                    <th>Net à payer</th>
                </thead>      
                <tbody>
                    <tr>
                        <td>{{ pt }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"col-md-3\">
    \t<center><h4> Actions à effectuer</h4></center>
        <hr class=\"colorgraph\">
        <ul class=\"list-group\">
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Avance</button>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Facturation</button>
        \t</li>
        \t
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Mesure Client</button>
        \t</li>
            <li class=\"list-group-item\">
                <button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Liste Commande</button>
            </li>
        </ul>
        <hr class=\"colorgraph\">
     </div>
    </div>
{% endblock %}

";
    }
}