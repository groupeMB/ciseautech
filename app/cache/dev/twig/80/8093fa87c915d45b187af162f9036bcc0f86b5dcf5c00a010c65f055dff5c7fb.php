<?php

/* CoutureGestionBundle:Couture:resumeCommande.html.twig */
class __TwigTemplate_6b2d49a3bb6e9575b0f1e74877b9c9688686c5a7bae699484e2f36258ba13771 extends Twig_Template
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
        $__internal_472fec40c74c19a467de70fed185a6044b2591b2de1913c24184e7d8dc301218 = $this->env->getExtension("native_profiler");
        $__internal_472fec40c74c19a467de70fed185a6044b2591b2de1913c24184e7d8dc301218->enter($__internal_472fec40c74c19a467de70fed185a6044b2591b2de1913c24184e7d8dc301218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:resumeCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_472fec40c74c19a467de70fed185a6044b2591b2de1913c24184e7d8dc301218->leave($__internal_472fec40c74c19a467de70fed185a6044b2591b2de1913c24184e7d8dc301218_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_53cd66df60b1c3290db3fed65a9613f3b515366335ed753cc8f14d98c87abe76 = $this->env->getExtension("native_profiler");
        $__internal_53cd66df60b1c3290db3fed65a9613f3b515366335ed753cc8f14d98c87abe76->enter($__internal_53cd66df60b1c3290db3fed65a9613f3b515366335ed753cc8f14d98c87abe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "\t <div class=\"row\">
        <div class=\"col-md-3\">
        \t<center><h4>Details commande</h4></center>
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 31
            echo "                    <tr>
                    \t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tag"], "modele", array()), "designation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prixUnitaire", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "quantite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "montantTotal", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        // line 48
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
        \t\t<button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> liste Client</button>
        \t</li>
            <li class=\"list-group-item\">
                <button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Liste Commande</button>
            </li>
        </ul>
        <hr class=\"colorgraph\">
     </div>
    </div>
";
        
        $__internal_53cd66df60b1c3290db3fed65a9613f3b515366335ed753cc8f14d98c87abe76->leave($__internal_53cd66df60b1c3290db3fed65a9613f3b515366335ed753cc8f14d98c87abe76_prof);

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
        return array (  133 => 48,  121 => 38,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  97 => 31,  93 => 30,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
\t <div class=\"row\">
        <div class=\"col-md-3\">
        \t<center><h4>Details commande</h4></center>
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
        \t\t<button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> liste Client</button>
        \t</li>
            <li class=\"list-group-item\">
                <button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Liste Commande</button>
            </li>
        </ul>
        <hr class=\"colorgraph\">
     </div>
    </div>
{% endblock %}

";
    }
}
