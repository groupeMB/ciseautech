<?php

/* CoutureGestionBundle:Couture:formulaireCommandePC.html.twig */
class __TwigTemplate_a18c6640ca292fbc46494ca9b2b2f292b999d504bc2e81368cab45e8692bbe96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:formulaireCommandePC.html.twig", 1);
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
        $__internal_f9574f19b01f8fe16f71e71a470e7064d84b9567f34a2fef83d78768111fa3d7 = $this->env->getExtension("native_profiler");
        $__internal_f9574f19b01f8fe16f71e71a470e7064d84b9567f34a2fef83d78768111fa3d7->enter($__internal_f9574f19b01f8fe16f71e71a470e7064d84b9567f34a2fef83d78768111fa3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:formulaireCommandePC.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9574f19b01f8fe16f71e71a470e7064d84b9567f34a2fef83d78768111fa3d7->leave($__internal_f9574f19b01f8fe16f71e71a470e7064d84b9567f34a2fef83d78768111fa3d7_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_159ecc3016efb03dcb197200b15a64304337c0ce620e4ffd4de0c51771b992d3 = $this->env->getExtension("native_profiler");
        $__internal_159ecc3016efb03dcb197200b15a64304337c0ce620e4ffd4de0c51771b992d3->enter($__internal_159ecc3016efb03dcb197200b15a64304337c0ce620e4ffd4de0c51771b992d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"\">
                <center><h4>Formulaire d'ajout d'une nouvelle commande</h4></center>
                <hr class=\"colorgraph\">
                ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                ";
        // line 10
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <hr>
                <div class=\"form-group\">
                    ";
        // line 14
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Client"));
        echo "

                    ";
        // line 17
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'errors');
        echo "
                    <div class=\"col-sm-6\">
                        ";
        // line 20
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'widget', array("attr" => array("id" => "autoclient", "class" => "form-control")));
        // line 25
        echo "
                        
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 31
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbModele", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nombre de Modéle"));
        echo "

                    ";
        // line 34
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbModele", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 38
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbModele", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                ";
        // line 42
        echo "                <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Creation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

                ";
        // line 47
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          
                ";
        // line 50
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_commande");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_modele");
        echo "\"><button type=\"button\" class=\"btn btn-info btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_modele");
        echo "\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Impression liste modèle</button>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_159ecc3016efb03dcb197200b15a64304337c0ce620e4ffd4de0c51771b992d3->leave($__internal_159ecc3016efb03dcb197200b15a64304337c0ce620e4ffd4de0c51771b992d3_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:formulaireCommandePC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 64,  130 => 61,  124 => 58,  112 => 50,  106 => 47,  100 => 42,  93 => 38,  86 => 34,  80 => 31,  73 => 25,  70 => 20,  64 => 17,  58 => 14,  51 => 10,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"\">
                <center><h4>Formulaire d'ajout d'une nouvelle commande</h4></center>
                <hr class=\"colorgraph\">
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <hr>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.idClient, \"Client\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.idClient) }}
                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.idClient, {
                            'attr': {
                                'id': 'autoclient',
                                'class': 'form-control'
                            }
                        })}}
                        
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.nbModele, \"Nombre de Modéle\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.nbModele) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.nbModele, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
                <span style=\"margin-left:30%\">{{ form_widget(form.Creation, {'attr': {'class': 'btn btn-primary'}}) }}</span>

                {# Génération automatique des champs pas encore écrits.
                    Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
                    et tous les champs cachés (type « hidden »). #}
                {{ form_rest(form) }}
          
                {# Fermeture de la balise <form> du formulaire HTML #}
                {{ form_end(form) }}
            </div>
        </div>
        <div class=\"col-md-3\">
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path(\"couture_gestion_couture_add_commande\")}}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path(\"couture_gestion_couture_add_modele\")}}\"><button type=\"button\" class=\"btn btn-info btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path(\"couture_gestion_couture_add_modele\")}}\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <button type=\"button\" class=\"btn btn-primary btn-block\"><span class=\"glyphicon glyphicon-edit\"></span> Impression liste modèle</button>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}";
    }
}
