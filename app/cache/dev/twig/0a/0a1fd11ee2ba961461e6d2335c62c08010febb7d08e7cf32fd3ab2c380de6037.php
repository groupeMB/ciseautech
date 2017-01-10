<?php

/* @CoutureGestion/Couture/listClient.html.twig */
class __TwigTemplate_df67bd1242edec05d6aa6b36cb6ee51b03ac3dd20499c3cbd8219800f3d2a460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "@CoutureGestion/Couture/listClient.html.twig", 1);
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
        $__internal_ab1bed325e4c5c35efc4cf5eee66cf8e1e0f243e36c00d00e630896e743f335a = $this->env->getExtension("native_profiler");
        $__internal_ab1bed325e4c5c35efc4cf5eee66cf8e1e0f243e36c00d00e630896e743f335a->enter($__internal_ab1bed325e4c5c35efc4cf5eee66cf8e1e0f243e36c00d00e630896e743f335a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/listClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab1bed325e4c5c35efc4cf5eee66cf8e1e0f243e36c00d00e630896e743f335a->leave($__internal_ab1bed325e4c5c35efc4cf5eee66cf8e1e0f243e36c00d00e630896e743f335a_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_0e090d124841b75428f4b568d4fd2187e3126395cf7ee9d1436af0c36cffef9a = $this->env->getExtension("native_profiler");
        $__internal_0e090d124841b75428f4b568d4fd2187e3126395cf7ee9d1436af0c36cffef9a->enter($__internal_0e090d124841b75428f4b568d4fd2187e3126395cf7ee9d1436af0c36cffef9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "\t<center><h4>Liste des clients potentiels</h4></center>
    <div class=\"col-md-12\" >
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "                         <tr>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "identifiant", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "telephone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "typeClient", array()), "html", null, true);
            echo "</td>
                            <td>
                            \t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_mesure_client", array("identifiant" => $this->getAttribute($context["tag"], "identifiant", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_afficher_client", array("identifiant" => $this->getAttribute($context["tag"], "identifiant", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                            \t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_remove_client", array("identifiant" => $this->getAttribute($context["tag"], "identifiant", array()))), "html", null, true);
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
        // line 30
        echo "                </tbody>
            </table>
        </div>
    </div>
    <script>
        \$(document).ready(function(){
                    \$('.dropdown-toggle').dropdown();
                    \$('#mytable').DataTable();
                });    
    </script>
";
        
        $__internal_0e090d124841b75428f4b568d4fd2187e3126395cf7ee9d1436af0c36cffef9a->leave($__internal_0e090d124841b75428f4b568d4fd2187e3126395cf7ee9d1436af0c36cffef9a_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/listClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  91 => 26,  87 => 25,  83 => 24,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  59 => 17,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
\t<center><h4>Liste des clients potentiels</h4></center>
    <div class=\"col-md-12\" >
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
                            \t<a href=\"{{ path(\"couture_gestion_couture_mesure_client\", {'identifiant': tag.identifiant})}}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                <a href=\"{{ path(\"couture_gestion_couture_afficher_client\", {'identifiant': tag.identifiant})}}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                            \t<a href=\"{{ path(\"couture_gestion_couture_remove_client\", {'identifiant': tag.identifiant})}}\" data-confirm=\"Vous êtes sur le point de supprimer le client {{tag.nom}} {{tag.prenom}}. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
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
