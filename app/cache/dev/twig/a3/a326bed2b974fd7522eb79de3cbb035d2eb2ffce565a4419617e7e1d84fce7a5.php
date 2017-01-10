<?php

/* CoutureGestionBundle:Couture:listClient.html.twig */
class __TwigTemplate_2b6af1434b18d8ca0b7323073b841b72f137cd9607e0d7127cba16eacec32b12 extends Twig_Template
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
        $__internal_818aa69ed7314fc8c418d7e93c2df6b82f2695f9ca5b41da93da1536f03aec6f = $this->env->getExtension("native_profiler");
        $__internal_818aa69ed7314fc8c418d7e93c2df6b82f2695f9ca5b41da93da1536f03aec6f->enter($__internal_818aa69ed7314fc8c418d7e93c2df6b82f2695f9ca5b41da93da1536f03aec6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:listClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818aa69ed7314fc8c418d7e93c2df6b82f2695f9ca5b41da93da1536f03aec6f->leave($__internal_818aa69ed7314fc8c418d7e93c2df6b82f2695f9ca5b41da93da1536f03aec6f_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_a232ecb87829244af9fdfe6fa63c44ec8f4c44de1ed1205b22d3742d9fd2799d = $this->env->getExtension("native_profiler");
        $__internal_a232ecb87829244af9fdfe6fa63c44ec8f4c44de1ed1205b22d3742d9fd2799d->enter($__internal_a232ecb87829244af9fdfe6fa63c44ec8f4c44de1ed1205b22d3742d9fd2799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a232ecb87829244af9fdfe6fa63c44ec8f4c44de1ed1205b22d3742d9fd2799d->leave($__internal_a232ecb87829244af9fdfe6fa63c44ec8f4c44de1ed1205b22d3742d9fd2799d_prof);

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
