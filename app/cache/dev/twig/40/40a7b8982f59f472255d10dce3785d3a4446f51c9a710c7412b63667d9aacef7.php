<?php

/* @CoutureGestion/Couture/listModele.html.twig */
class __TwigTemplate_b7125f4c2d2c596383511ad6da439b6a668e60900fda8a8ee0ad1347d420558f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "@CoutureGestion/Couture/listModele.html.twig", 1);
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
        $__internal_ff11b118437ca5694a43523a0ac9b1ec3707a51c5bbac854fa51d507cc2cd701 = $this->env->getExtension("native_profiler");
        $__internal_ff11b118437ca5694a43523a0ac9b1ec3707a51c5bbac854fa51d507cc2cd701->enter($__internal_ff11b118437ca5694a43523a0ac9b1ec3707a51c5bbac854fa51d507cc2cd701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/listModele.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff11b118437ca5694a43523a0ac9b1ec3707a51c5bbac854fa51d507cc2cd701->leave($__internal_ff11b118437ca5694a43523a0ac9b1ec3707a51c5bbac854fa51d507cc2cd701_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_dca6ac5b6483e7498752d4575c6d0aa11a1f8b7c07804cac7d9bf86f2c96fb01 = $this->env->getExtension("native_profiler");
        $__internal_dca6ac5b6483e7498752d4575c6d0aa11a1f8b7c07804cac7d9bf86f2c96fb01->enter($__internal_dca6ac5b6483e7498752d4575c6d0aa11a1f8b7c07804cac7d9bf86f2c96fb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
\t<center><h4 class=\"panel-heading alert-success\">Espace de gestion personnalisé - Mes modéles</h4></center>
    <hr class=\"colorgraph\">
\t<div class=\"row\">
        <div class=\"col-md-8\">
        \t<center><h4 class=\"panel-heading alert-info\">Liste des modeles</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered table-striped table-hover\">
                <thead>
                    <th>Réference</th>
                    <th>Designation</th>
                    <th>Cout</th>
                    <th>Type</th>
                    <th>Durée confection</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modele"]) ? $context["modele"] : $this->getContext($context, "modele")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 23
            echo "                         <tr class=\"even\">
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "reference", array()), "html", null, true);
            echo "</td>
                            <td><span class= \"xedit\" id=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "reference", array()), "html", null, true);
            echo "\"><span id=\"Modele\"><span id=\"setDesignation\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "designation", array()), "html", null, true);
            echo "</span></span></span></td>
                            <td><span class= \"xedit\" id=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "reference", array()), "html", null, true);
            echo "\"><span id=\"Modele\"><span id=\"setCout\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "cout", array()), "html", null, true);
            echo "</span></span></span></td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "typeModele", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "dureeConfection", array()), "html", null, true);
            echo " jours</td>
                            <td>
                            \t<a href=\"#\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                <a href=\"#\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                            \t<a href=\"#\" data-confirm=\"Vous êtes sur le point de supprimer le client. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>
        </div>
        <div class=\"col-md-4\">
        \t<center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
        \t\t<li class=\"list-group-item\">
            \t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_modele");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Ajout Nouveau modele</button></a>
            \t</li>
\t        \t<li class=\"list-group-item\">
\t        \t\t<button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Impression liste modèle</button>
\t        \t</li>
\t        </ul>
        </div>
    </div>

";
        
        $__internal_dca6ac5b6483e7498752d4575c6d0aa11a1f8b7c07804cac7d9bf86f2c96fb01->leave($__internal_dca6ac5b6483e7498752d4575c6d0aa11a1f8b7c07804cac7d9bf86f2c96fb01_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/listModele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  102 => 36,  88 => 28,  84 => 27,  78 => 26,  72 => 25,  68 => 24,  65 => 23,  61 => 22,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}

\t<center><h4 class=\"panel-heading alert-success\">Espace de gestion personnalisé - Mes modéles</h4></center>
    <hr class=\"colorgraph\">
\t<div class=\"row\">
        <div class=\"col-md-8\">
        \t<center><h4 class=\"panel-heading alert-info\">Liste des modeles</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"col-md-12\" >
        <div class=\"table-responsive\">
            <table id=\"mytable\" class=\"table table-bordered table-striped table-hover\">
                <thead>
                    <th>Réference</th>
                    <th>Designation</th>
                    <th>Cout</th>
                    <th>Type</th>
                    <th>Durée confection</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    {% for tag in modele %}
                         <tr class=\"even\">
                            <td>{{ tag.reference}}</td>
                            <td><span class= \"xedit\" id=\"{{ tag.reference }}\"><span id=\"Modele\"><span id=\"setDesignation\">{{ tag.designation}}</span></span></span></td>
                            <td><span class= \"xedit\" id=\"{{ tag.reference }}\"><span id=\"Modele\"><span id=\"setCout\">{{ tag.cout}}</span></span></span></td>
                            <td>{{ tag.typeModele}}</td>
                            <td>{{ tag.dureeConfection}} jours</td>
                            <td>
                            \t<a href=\"#\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-list-alt\"></span></button></a>
                                <a href=\"#\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-eye-open\"></span></button></a>
                            \t<a href=\"#\" data-confirm=\"Vous êtes sur le point de supprimer le client. Etes-vous sûr de bien vouloir effectué cette opération ?\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
        </div>
        <div class=\"col-md-4\">
        \t<center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
        \t\t<li class=\"list-group-item\">
            \t\t<a href=\"{{ path(\"couture_gestion_couture_add_modele\")}}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Ajout Nouveau modele</button></a>
            \t</li>
\t        \t<li class=\"list-group-item\">
\t        \t\t<button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Impression liste modèle</button>
\t        \t</li>
\t        </ul>
        </div>
    </div>

{% endblock %}";
    }
}
