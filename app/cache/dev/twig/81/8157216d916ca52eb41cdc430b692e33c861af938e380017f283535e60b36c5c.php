<?php

/* CoutureGestionBundle:Couture:afficherClient.html.twig */
class __TwigTemplate_b8aadc353a40bb373bbd9c562bfe1c9e412a0ec2b56e30336bd3131fe26a2513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:afficherClient.html.twig", 1);
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
        $__internal_38bab764eab676df9e0bb18dc1987b702cf5a8d195183c30e236c0417011fbde = $this->env->getExtension("native_profiler");
        $__internal_38bab764eab676df9e0bb18dc1987b702cf5a8d195183c30e236c0417011fbde->enter($__internal_38bab764eab676df9e0bb18dc1987b702cf5a8d195183c30e236c0417011fbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:afficherClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38bab764eab676df9e0bb18dc1987b702cf5a8d195183c30e236c0417011fbde->leave($__internal_38bab764eab676df9e0bb18dc1987b702cf5a8d195183c30e236c0417011fbde_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_6f0bea80b75de82de787044fa4a212320cc069a6c3812044be4bd9f3305db83e = $this->env->getExtension("native_profiler");
        $__internal_6f0bea80b75de82de787044fa4a212320cc069a6c3812044be4bd9f3305db83e->enter($__internal_6f0bea80b75de82de787044fa4a212320cc069a6c3812044be4bd9f3305db83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "\t <div class=\"row\">
        <div class=\"col-md-4\">
        \t<center><h4>Informations personnelles</h4></center>
                <hr class=\"colorgraph\">
        \t<ul class=\"list-group\">
        \t\t<li class=\"list-group-item\">Identifiant : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identifiant", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Prenom : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Nom : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Sexe : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Adresse : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Telephone : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Email : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</li>
\t\t\t \t<li class=\"list-group-item\">Type Client : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "typeClient", array()), "html", null, true);
        echo "</li>
\t\t\t</ul>
        </div>
        <div class=\"col-md-4\">
        \t<center><h4>Mesure du client</h4></center>
                <hr class=\"colorgraph\">
        \t<div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped table-hover \">
                <thead>
                    <th>Elements mésurés</th>
                    <th>Valeurs (centimètres)</th>
                </thead>                
                <tbody>
                    <tr>
                    \t<td>Epaule</td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "epaule", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Cou</td>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "cou", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Manche Longue</td>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "mancheLongue", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Manche courte</td>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "mancheCourte", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Poignet</td>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "poignet", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Longueur Boubou</td>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "longueurBoubou", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Ceinture</td>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "ceinture", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Longueur Pantalon</td>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "longueurPantalon", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                    \t<td>Cuisse</td>
                        <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "cuisse", array()), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 64
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe", array()) == "F")) {
            // line 65
            echo "\t                    <tr>
\t                    \t<td>Longueur Taille</td>
\t                    \t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "longueurTaille", array()), "html", null, true);
            echo "</td>
\t                    </tr>
\t                    <tr>
\t                    \t<td>Hanche</td>
\t                    \t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "hanche", array()), "html", null, true);
            echo "</td>
\t                    </tr>
\t                    <tr>
\t                    \t<td>Longueur Taille Basse</td>
\t                    \t<td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mesure"]) ? $context["mesure"] : $this->getContext($context, "mesure")), "longueurTailleBasse", array()), "html", null, true);
            echo "</td>
\t                    </tr>
                    ";
        }
        // line 78
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"col-md-4\">
    \t<center><h4> Actions à effectuer</h4></center>
        <hr class=\"colorgraph\">
        <ul class=\"list-group\">
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle commande</button>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Modification mesure</button>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_remove_client", array("identifiant" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identifiant", array()))), "html", null, true);
        echo "\" data-confirm=\"Vous êtes sur le point de supprimer le client ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo ". Etes-vous sûr de bien vouloir effectué cette opération ?\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-remove\"></span> Suppression client </button></a>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Statiqtiques client</button>
        \t</li>
        </ul>
        <hr class=\"colorgraph\">
        <center>
        \t<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client1.png")), "html", null, true);
        echo "\" width=\"70%\" alt=\"\">
        \t<h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5>
        </center>
     </div>
    </div>
";
        
        $__internal_6f0bea80b75de82de787044fa4a212320cc069a6c3812044be4bd9f3305db83e->leave($__internal_6f0bea80b75de82de787044fa4a212320cc069a6c3812044be4bd9f3305db83e_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:afficherClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 101,  197 => 93,  180 => 78,  174 => 75,  167 => 71,  160 => 67,  156 => 65,  154 => 64,  149 => 62,  142 => 58,  135 => 54,  128 => 50,  121 => 46,  114 => 42,  107 => 38,  100 => 34,  93 => 30,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
\t <div class=\"row\">
        <div class=\"col-md-4\">
        \t<center><h4>Informations personnelles</h4></center>
                <hr class=\"colorgraph\">
        \t<ul class=\"list-group\">
        \t\t<li class=\"list-group-item\">Identifiant : {{ client.identifiant }}</li>
\t\t\t \t<li class=\"list-group-item\">Prenom : {{ client.prenom }}</li>
\t\t\t \t<li class=\"list-group-item\">Nom : {{ client.nom }}</li>
\t\t\t \t<li class=\"list-group-item\">Sexe : {{ client.sexe }}</li>
\t\t\t \t<li class=\"list-group-item\">Adresse : {{ client.adresse }}</li>
\t\t\t \t<li class=\"list-group-item\">Telephone : {{ client.telephone }}</li>
\t\t\t \t<li class=\"list-group-item\">Email : {{ client.email }}</li>
\t\t\t \t<li class=\"list-group-item\">Type Client : {{ client.typeClient }}</li>
\t\t\t</ul>
        </div>
        <div class=\"col-md-4\">
        \t<center><h4>Mesure du client</h4></center>
                <hr class=\"colorgraph\">
        \t<div class=\"table-responsive\">
            <table class=\"table table-bordered table-striped table-hover \">
                <thead>
                    <th>Elements mésurés</th>
                    <th>Valeurs (centimètres)</th>
                </thead>                
                <tbody>
                    <tr>
                    \t<td>Epaule</td>
                        <td>{{ mesure.epaule}}</td>
                    </tr>
                    <tr>
                    \t<td>Cou</td>
                        <td>{{ mesure.cou }}</td>
                    </tr>
                    <tr>
                    \t<td>Manche Longue</td>
                        <td>{{ mesure.mancheLongue}}</td>
                    </tr>
                    <tr>
                    \t<td>Manche courte</td>
                        <td>{{ mesure.mancheCourte}}</td>
                    </tr>
                    <tr>
                    \t<td>Poignet</td>
                        <td>{{ mesure.poignet}}</td>
                    </tr>
                    <tr>
                    \t<td>Longueur Boubou</td>
                        <td>{{ mesure.longueurBoubou}}</td>
                    </tr>
                    <tr>
                    \t<td>Ceinture</td>
                        <td>{{ mesure.ceinture}}</td>
                    </tr>
                    <tr>
                    \t<td>Longueur Pantalon</td>
                        <td>{{ mesure.longueurPantalon}}</td>
                    </tr>
                    <tr>
                    \t<td>Cuisse</td>
                        <td>{{ mesure.cuisse}}</td>
                    </tr>
                    {% if client.sexe == 'F' %}
\t                    <tr>
\t                    \t<td>Longueur Taille</td>
\t                    \t<td>{{ mesure.longueurTaille}}</td>
\t                    </tr>
\t                    <tr>
\t                    \t<td>Hanche</td>
\t                    \t<td>{{ mesure.hanche}}</td>
\t                    </tr>
\t                    <tr>
\t                    \t<td>Longueur Taille Basse</td>
\t                    \t<td>{{ mesure.longueurTailleBasse}}</td>
\t                    </tr>
                    {% endif %}
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"col-md-4\">
    \t<center><h4> Actions à effectuer</h4></center>
        <hr class=\"colorgraph\">
        <ul class=\"list-group\">
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle commande</button>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Modification mesure</button>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<a href=\"{{ path(\"couture_gestion_couture_remove_client\", {'identifiant': client.identifiant})}}\" data-confirm=\"Vous êtes sur le point de supprimer le client {{client.nom}} {{client.prenom}}. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-remove\"></span> Suppression client </button></a>
        \t</li>
        \t<li class=\"list-group-item\">
        \t\t<button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"glyphicon glyphicon-stats\"></span> Statiqtiques client</button>
        \t</li>
        </ul>
        <hr class=\"colorgraph\">
        <center>
        \t<img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/client1.png') }}\" width=\"70%\" alt=\"\">
        \t<h5>Avec Ciseau'Tech, Simplifiez votre quotidien !!!</h5>
        </center>
     </div>
    </div>
{% endblock %}

";
    }
}
