<?php

/* CoutureGestionBundle:Couture:listCommande.html.twig */
class __TwigTemplate_9fdb419c1b6cd635610bd188b74467f2f3e0434b0e6d3faf093290ab29a36074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:listCommande.html.twig", 1);
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
        $__internal_d75201b40d2edc5598ef0f3f44ab58da58ad2daad3a05ba5a9faef7c6475ce10 = $this->env->getExtension("native_profiler");
        $__internal_d75201b40d2edc5598ef0f3f44ab58da58ad2daad3a05ba5a9faef7c6475ce10->enter($__internal_d75201b40d2edc5598ef0f3f44ab58da58ad2daad3a05ba5a9faef7c6475ce10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:listCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d75201b40d2edc5598ef0f3f44ab58da58ad2daad3a05ba5a9faef7c6475ce10->leave($__internal_d75201b40d2edc5598ef0f3f44ab58da58ad2daad3a05ba5a9faef7c6475ce10_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_cb9a253bc8d40c0e3033a149f2ac0cc7f17e9caa07e0accc58e91f92b32081f1 = $this->env->getExtension("native_profiler");
        $__internal_cb9a253bc8d40c0e3033a149f2ac0cc7f17e9caa07e0accc58e91f92b32081f1->enter($__internal_cb9a253bc8d40c0e3033a149f2ac0cc7f17e9caa07e0accc58e91f92b32081f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
\t<h5 class=\"panel-heading mycolor\">Espace de gestion personnalisé - Les commandes</h5>
    <hr>
\t<div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"col-md-12\" >
                <div class=\"table-responsive\">
                    <table id=\"mytable\" class=\"table table-bordered\">
                        <thead>
                            <th>Réference</th>
                            <th>Date</th>
                            <th>Quantité de modèle</th>
                            <th>Somme totale</th>
                            <th>Livré</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandeProduit"]) ? $context["commandeProduit"] : $this->getContext($context, "commandeProduit")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 21
            echo "                                 <tr>
                                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tag"], "commande", array()), "reference", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["tag"], "commande", array()), "dateCommande", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tag"], "commande", array()), "nbModele", array()), "html", null, true);
            echo "
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "montantTotal", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 26
            if (($this->getAttribute($this->getAttribute($context["tag"], "commande", array()), "livraison", array()) == 0)) {
                // line 27
                echo "                                        <td><center><span class=\"glyphicon glyphicon-remove btn btn-xs btn-danger\"></span></center></td>
                                    ";
            } else {
                // line 29
                echo "                                        <td><span class=\"glyphicon glyphicon-ok btn btn-xs btn-success\"></span></td>
                                    ";
            }
            // line 31
            echo "                                    <td>
                                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_modifier_commande", array("reference" => $this->getAttribute($context["tag"], "reference", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("couture_gestion_couture_afficher_commande", array("reference" => $this->getAttribute($context["tag"], "reference", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
        \t<center><h5 class=\"panel-heading mycolor\">Actions à effectuer</h5></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_commande");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-plus\"></span>Nouveau commande </button></a>
                </li>
                <li class=\"list-group-item \">
                    <button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Livraison commande</span></button>
                </li>
                <li class=\"list-group-item \">
                    <button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-usd\"></span> Honoration dettes</span></button>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span>Impression liste commande</button>
                </li>
            </ul>
        </div>
    </div>

";
        
        $__internal_cb9a253bc8d40c0e3033a149f2ac0cc7f17e9caa07e0accc58e91f92b32081f1->leave($__internal_cb9a253bc8d40c0e3033a149f2ac0cc7f17e9caa07e0accc58e91f92b32081f1_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:listCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  109 => 37,  99 => 33,  95 => 32,  92 => 31,  88 => 29,  84 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  63 => 21,  59 => 20,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}

\t<h5 class=\"panel-heading mycolor\">Espace de gestion personnalisé - Les commandes</h5>
    <hr>
\t<div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"col-md-12\" >
                <div class=\"table-responsive\">
                    <table id=\"mytable\" class=\"table table-bordered\">
                        <thead>
                            <th>Réference</th>
                            <th>Date</th>
                            <th>Quantité de modèle</th>
                            <th>Somme totale</th>
                            <th>Livré</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            {% for tag in commandeProduit %}
                                 <tr>
                                    <td>{{ tag.commande.reference}}</td>
                                    <td>{{ tag.commande.dateCommande | date('d-m-Y')}}</td>
                                    <td>{{ tag.commande.nbModele}}
                                    <td>{{ tag.montantTotal}}</td>
                                    {% if tag.commande.livraison == 0 %}
                                        <td><center><span class=\"glyphicon glyphicon-remove btn btn-xs btn-danger\"></span></center></td>
                                    {% else %}
                                        <td><span class=\"glyphicon glyphicon-ok btn btn-xs btn-success\"></span></td>
                                    {% endif %}
                                    <td>
                                        <a href=\"{{ path ('couture_gestion_couture_modifier_commande',{'reference':tag.reference}) }}\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                        <a href=\"{{ path ( 'couture_gestion_couture_afficher_commande',{'reference':tag.reference}) }}\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
        \t<center><h5 class=\"panel-heading mycolor\">Actions à effectuer</h5></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path ('couture_gestion_couture_add_commande') }}\"><button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-plus\"></span>Nouveau commande </button></a>
                </li>
                <li class=\"list-group-item \">
                    <button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Livraison commande</span></button>
                </li>
                <li class=\"list-group-item \">
                    <button type=\"button\" class=\"btn btn-warning btn-block\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-usd\"></span> Honoration dettes</span></button>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span>Impression liste commande</button>
                </li>
            </ul>
        </div>
    </div>

{% endblock %}";
    }
}
