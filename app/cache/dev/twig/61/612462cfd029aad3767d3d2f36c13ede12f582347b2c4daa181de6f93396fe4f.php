<?php

/* CoutureGestionBundle:Couture:listClient.html.twig */
class __TwigTemplate_d4b03c50300ed88e3dde527c5e1e0638fb9c14984e4b34cbf860cfa78a1831bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:listClient.html.twig", 1);
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
        $__internal_305de53bebc9823538c55d24274da6ab92ea1591fcd148cbdc7a5b1064f4cf9c = $this->env->getExtension("native_profiler");
        $__internal_305de53bebc9823538c55d24274da6ab92ea1591fcd148cbdc7a5b1064f4cf9c->enter($__internal_305de53bebc9823538c55d24274da6ab92ea1591fcd148cbdc7a5b1064f4cf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:listClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305de53bebc9823538c55d24274da6ab92ea1591fcd148cbdc7a5b1064f4cf9c->leave($__internal_305de53bebc9823538c55d24274da6ab92ea1591fcd148cbdc7a5b1064f4cf9c_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_b8fec8d55de5cb95777acd9b5e70c9027d7eda880ce7f0cdee31cb741aebede1 = $this->env->getExtension("native_profiler");
        $__internal_b8fec8d55de5cb95777acd9b5e70c9027d7eda880ce7f0cdee31cb741aebede1->enter($__internal_b8fec8d55de5cb95777acd9b5e70c9027d7eda880ce7f0cdee31cb741aebede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "\t<center><h4>Liste des clients</h4></center>
    <div class=\"col-md-12\" >
        <div class=\"col-md-9\">
            <div class=\"table-responsive\">
                <table id=\"mytable\" class=\"table table-bordered table-striped table-hover \">
                    <thead>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Type Client</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "                             <tr>
                                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "identifiant", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prenom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "telephone", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "typeClient", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_mesure_client", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_afficher_client", array("identifiant" => $this->getAttribute($context["tag"], "identifiant", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_supprimer_client", array("identifiant" => $this->getAttribute($context["tag"], "identifiant", array()))), "html", null, true);
            echo "\" data-confirm=\"Vous êtes sur le point de supprimer le client ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prenom", array()), "html", null, true);
            echo ". Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-md-3\">
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_client_simple");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-plus\"></span>Nouveau client </button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Impression liste client</button>
                </li>
            </ul>
        </div>
    </div>
    <script>
        \$(document).ready(function(){
                    \$('.dropdown-toggle').dropdown();
                    \$('#mytable').DataTable();
                });    
    </script>
";
        
        $__internal_b8fec8d55de5cb95777acd9b5e70c9027d7eda880ce7f0cdee31cb741aebede1->leave($__internal_b8fec8d55de5cb95777acd9b5e70c9027d7eda880ce7f0cdee31cb741aebede1_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:listClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  106 => 31,  92 => 27,  88 => 26,  84 => 25,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
\t<center><h4>Liste des clients</h4></center>
    <div class=\"col-md-12\" >
        <div class=\"col-md-9\">
            <div class=\"table-responsive\">
                <table id=\"mytable\" class=\"table table-bordered table-striped table-hover \">
                    <thead>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Type Client</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        {% for tag in client %}
                             <tr>
                                <td>{{ tag.identifiant}}</td>
                                <td>{{ tag.nom}}</td>
                                <td>{{ tag.prenom}}</td>
                                <td>{{ tag.telephone}}</td>
                                <td>{{ tag.typeClient}}</td>
                                <td>
                                    <a href=\"{{ path(\"couture_gestion_couture_mesure_client\", {'id': tag.id})}}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                    <a href=\"{{ path(\"couture_gestion_couture_afficher_client\", {'identifiant': tag.identifiant})}}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                                    <a href=\"{{ path(\"couture_gestion_couture_supprimer_client\", {'identifiant': tag.identifiant})}}\" data-confirm=\"Vous êtes sur le point de supprimer le client {{tag.nom}} {{tag.prenom}}. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-md-3\">
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path ('couture_gestion_couture_add_client_simple') }}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-plus\"></span>Nouveau client </button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Impression liste client</button>
                </li>
            </ul>
        </div>
    </div>
    <script>
        \$(document).ready(function(){
                    \$('.dropdown-toggle').dropdown();
                    \$('#mytable').DataTable();
                });    
    </script>
{% endblock %}";
    }
}
