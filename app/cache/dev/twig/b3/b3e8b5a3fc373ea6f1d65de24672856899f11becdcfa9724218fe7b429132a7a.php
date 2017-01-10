<?php

/* CoutureGestionBundle:Couture:formulaireCommandeNC.html.twig */
class __TwigTemplate_e72e8c99db35b1b639f3f4c93c123f30748de03445d187b3a823e8845ee039de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:formulaireCommandeNC.html.twig", 1);
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
        $__internal_71714fb834eeec784c69986b4020322e94fb18f3ef6b933610f1a2accdeb30c3 = $this->env->getExtension("native_profiler");
        $__internal_71714fb834eeec784c69986b4020322e94fb18f3ef6b933610f1a2accdeb30c3->enter($__internal_71714fb834eeec784c69986b4020322e94fb18f3ef6b933610f1a2accdeb30c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:formulaireCommandeNC.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71714fb834eeec784c69986b4020322e94fb18f3ef6b933610f1a2accdeb30c3->leave($__internal_71714fb834eeec784c69986b4020322e94fb18f3ef6b933610f1a2accdeb30c3_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_97ed900d2549b0c1263d861f4bacddc3f66b16f397bc92d2b527f268ddee6c5f = $this->env->getExtension("native_profiler");
        $__internal_97ed900d2549b0c1263d861f4bacddc3f66b16f397bc92d2b527f268ddee6c5f->enter($__internal_97ed900d2549b0c1263d861f4bacddc3f66b16f397bc92d2b527f268ddee6c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom Client"));
        echo "

                    ";
        // line 17
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomClient", array()), 'errors');
        echo "
                    <div class=\"col-sm-6\">
                        ";
        // line 20
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prénoms Client"));
        echo "

                    ";
        // line 28
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomClient", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 32
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 37
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Telephone Client"));
        echo "

                    ";
        // line 40
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneClient", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 44
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 49
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbModele", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nombre de Modéle"));
        echo "

                    ";
        // line 52
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbModele", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 56
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbModele", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                ";
        // line 60
        echo "                <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Creation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

                ";
        // line 65
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          
                ";
        // line 68
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
        // line 76
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_commande");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_modele");
        echo "\"><button type=\"button\" class=\"btn btn-info btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Nouvelle Commande</button></a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 82
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
        
        $__internal_97ed900d2549b0c1263d861f4bacddc3f66b16f397bc92d2b527f268ddee6c5f->leave($__internal_97ed900d2549b0c1263d861f4bacddc3f66b16f397bc92d2b527f268ddee6c5f_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:formulaireCommandeNC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 82,  170 => 79,  164 => 76,  152 => 68,  146 => 65,  140 => 60,  133 => 56,  126 => 52,  120 => 49,  112 => 44,  105 => 40,  99 => 37,  91 => 32,  84 => 28,  78 => 25,  70 => 20,  64 => 17,  58 => 14,  51 => 10,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
                    {{ form_label(form.nomClient, \"Nom Client\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.nomClient) }}
                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.nomClient, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.prenomClient, \"Prénoms Client\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.prenomClient) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.prenomClient, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.telephoneClient, \"Telephone Client\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ pdescriptions. #}
                    {{ form_errors(form.telephoneClient) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.telephoneClient, {'attr': {'class': 'form-control'}}) }}
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
