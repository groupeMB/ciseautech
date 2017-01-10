<?php

/* CoutureGestionBundle:Couture:listCommande.html.twig */
class __TwigTemplate_53e993cb3985c2efb5c630dbedf3f8340b816141b0ba4f48d099e67a0311fce3 extends Twig_Template
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
        $__internal_d1937345fe8b09d54c958df89c39c8ce894501369e34390b75eb03a5938a0506 = $this->env->getExtension("native_profiler");
        $__internal_d1937345fe8b09d54c958df89c39c8ce894501369e34390b75eb03a5938a0506->enter($__internal_d1937345fe8b09d54c958df89c39c8ce894501369e34390b75eb03a5938a0506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:listCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1937345fe8b09d54c958df89c39c8ce894501369e34390b75eb03a5938a0506->leave($__internal_d1937345fe8b09d54c958df89c39c8ce894501369e34390b75eb03a5938a0506_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_8ef32fc459c5906fc1504f7da2581698d92cc30e0c55810c154fca46d8641d7a = $this->env->getExtension("native_profiler");
        $__internal_8ef32fc459c5906fc1504f7da2581698d92cc30e0c55810c154fca46d8641d7a->enter($__internal_8ef32fc459c5906fc1504f7da2581698d92cc30e0c55810c154fca46d8641d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
\t<h5 class=\"panel-heading mycolor\">Espace de gestion personnalisé - Mes commandes</h5>
    <hr>
\t<div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Réference</th>
                    <th>Client</th>
                    <th>Téléphone</th>
                    <th>A payer</th>
                    <th>Livré</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 21
            echo "                         <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "reference", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "prenomClient", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "nomClient", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "telephoneClient", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "paieNet", array()), "html", null, true);
            echo "</td>
                            ";
            // line 26
            if (($this->getAttribute($context["tag"], "livraison", array()) == 0)) {
                // line 27
                echo "                                <td><center><span class=\"glyphicon glyphicon-remove btn btn-xs btn-danger\"></span></center></td>
                            ";
            } else {
                // line 29
                echo "                                <td><span class=\"glyphicon glyphicon-ok btn btn-xs btn-success\"></span></td>
                            ";
            }
            // line 31
            echo "                            <td>
                            \t<a href=\"#\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                <a href=\"#\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                            \t<a href=\"#\" data-confirm=\"Vous êtes sur le point de supprimer le client. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-warning btn-xs\"><span class=\"glyphicon glyphicon-usd\"></span></button></a>
                            </td>
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
    </div>
        </div>
        <div class=\"col-md-3\">
        \t<center><h5 class=\"panel-heading mycolor\">Actions à effectuer</h5></center>
            <hr class=\"colorgraph\">
<ul class=\"list-group\">
        <li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_commande");
        echo "\"><span class=\"glyphicon glyphicon-book\"></span> Nouvelle comande</a></span></li>
        <li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Livraison commande</span></li>
        <li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-usd\"></span> Honoration dettes</span></li>
    </ul>
        </div>
    </div>

";
        
        $__internal_8ef32fc459c5906fc1504f7da2581698d92cc30e0c55810c154fca46d8641d7a->leave($__internal_8ef32fc459c5906fc1504f7da2581698d92cc30e0c55810c154fca46d8641d7a_prof);

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
        return array (  117 => 47,  106 => 38,  94 => 31,  90 => 29,  86 => 27,  84 => 26,  80 => 25,  76 => 24,  70 => 23,  66 => 22,  63 => 21,  59 => 20,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}

\t<h5 class=\"panel-heading mycolor\">Espace de gestion personnalisé - Mes commandes</h5>
    <hr>
\t<div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered\">
                <thead>
                    <th>Réference</th>
                    <th>Client</th>
                    <th>Téléphone</th>
                    <th>A payer</th>
                    <th>Livré</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    {% for tag in commande %}
                         <tr>
                            <td>{{ tag.reference}}</td>
                            <td>{{ tag.prenomClient}} {{ tag.nomClient}}</td>
                            <td>{{ tag.telephoneClient}}</td>
                            <td>{{ tag.paieNet}}</td>
                            {% if tag.livraison == 0 %}
                                <td><center><span class=\"glyphicon glyphicon-remove btn btn-xs btn-danger\"></span></center></td>
                            {% else %}
                                <td><span class=\"glyphicon glyphicon-ok btn btn-xs btn-success\"></span></td>
                            {% endif %}
                            <td>
                            \t<a href=\"#\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                <a href=\"#\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                            \t<a href=\"#\" data-confirm=\"Vous êtes sur le point de supprimer le client. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-warning btn-xs\"><span class=\"glyphicon glyphicon-usd\"></span></button></a>
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
        <li class=\"list-group-item alert-success\"><span class=\"btn-block\"><a href=\"{{ path(\"couture_gestion_couture_list_commande\")}}\"><span class=\"glyphicon glyphicon-book\"></span> Nouvelle comande</a></span></li>
        <li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-gift\"></span> Livraison commande</span></li>
        <li class=\"list-group-item alert-success\"><span class=\"btn-block\"><span class=\"glyphicon glyphicon-usd\"></span> Honoration dettes</span></li>
    </ul>
        </div>
    </div>

{% endblock %}";
    }
}
