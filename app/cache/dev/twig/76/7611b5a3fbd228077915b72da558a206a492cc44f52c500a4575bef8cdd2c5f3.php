<?php

/* @CoutureGestion/Couture/addCommandeProduit.html.twig */
class __TwigTemplate_7e5728625be74dce5bdb376591ae3a871ab44cd92a8c9707282f7534dca57f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "@CoutureGestion/Couture/addCommandeProduit.html.twig", 1);
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
        $__internal_13a8f7459d4f0624daff659a40e71ec2e58a91058702362745c7abe8f17680d2 = $this->env->getExtension("native_profiler");
        $__internal_13a8f7459d4f0624daff659a40e71ec2e58a91058702362745c7abe8f17680d2->enter($__internal_13a8f7459d4f0624daff659a40e71ec2e58a91058702362745c7abe8f17680d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/addCommandeProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a8f7459d4f0624daff659a40e71ec2e58a91058702362745c7abe8f17680d2->leave($__internal_13a8f7459d4f0624daff659a40e71ec2e58a91058702362745c7abe8f17680d2_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_04259998b6f1971efdfb73e4f11768da307ab0a63ba3c870821806df8a6a7ec5 = $this->env->getExtension("native_profiler");
        $__internal_04259998b6f1971efdfb73e4f11768da307ab0a63ba3c870821806df8a6a7ec5->enter($__internal_04259998b6f1971efdfb73e4f11768da307ab0a63ba3c870821806df8a6a7ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-9\">
        \t<div class=\"\">
                <center><h4>Formulaire d'ajout d'un nouveau modéle dans la commande ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "html", null, true);
        echo "</h4></center>
                <hr class=\"colorgraph\">
                <center><h5>Nombre de modèle restant : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo "</h5></center>
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                ";
        // line 11
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <hr>
                <div class=\"form-group\">
                    ";
        // line 15
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Modéle"));
        echo "

                    ";
        // line 18
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele", array()), 'errors');
        echo "
                    <div class=\"col-sm-6\">
                        ";
        // line 21
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modele", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 26
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité"));
        echo "

                    ";
        // line 29
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 33
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                
                ";
        // line 38
        echo "                <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Poursuivre", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

                ";
        // line 43
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          
                ";
        // line 46
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
        // line 54
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_commande");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_modele");
        echo "\"><button type=\"button\" class=\"btn btn-info btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 60
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
        
        $__internal_04259998b6f1971efdfb73e4f11768da307ab0a63ba3c870821806df8a6a7ec5->leave($__internal_04259998b6f1971efdfb73e4f11768da307ab0a63ba3c870821806df8a6a7ec5_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/addCommandeProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  136 => 57,  130 => 54,  118 => 46,  112 => 43,  106 => 38,  98 => 33,  91 => 29,  85 => 26,  77 => 21,  71 => 18,  65 => 15,  58 => 11,  54 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-9\">
        \t<div class=\"\">
                <center><h4>Formulaire d'ajout d'un nouveau modéle dans la commande {{ commande }}</h4></center>
                <hr class=\"colorgraph\">
                <center><h5>Nombre de modèle restant : {{ count }}</h5></center>
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <hr>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.modele, \"Modéle\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.modele) }}
                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.modele, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.quantite, \"Quantité\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.quantite) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.quantite, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                
                {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
                <span style=\"margin-left:30%\">{{ form_widget(form.Poursuivre, {'attr': {'class': 'btn btn-primary'}}) }}</span>

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
