<?php

/* CoutureGestionBundle:Couture:mesureClientFemme.html.twig */
class __TwigTemplate_22aa0ef7e0679b35e491c036c701376142d42d3a19a9281cceaa1b7bf4d8e5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:mesureClientFemme.html.twig", 1);
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
        $__internal_cb087768b21de45ac9154c07bf28ce9b12a09f70781ee4ee4b9a5016f631c721 = $this->env->getExtension("native_profiler");
        $__internal_cb087768b21de45ac9154c07bf28ce9b12a09f70781ee4ee4b9a5016f631c721->enter($__internal_cb087768b21de45ac9154c07bf28ce9b12a09f70781ee4ee4b9a5016f631c721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:mesureClientFemme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb087768b21de45ac9154c07bf28ce9b12a09f70781ee4ee4b9a5016f631c721->leave($__internal_cb087768b21de45ac9154c07bf28ce9b12a09f70781ee4ee4b9a5016f631c721_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_38b2628394453c41b445349913fcd3cdd550256376dee1b06be09dd6cc17ae7b = $this->env->getExtension("native_profiler");
        $__internal_38b2628394453c41b445349913fcd3cdd550256376dee1b06be09dd6cc17ae7b->enter($__internal_38b2628394453c41b445349913fcd3cdd550256376dee1b06be09dd6cc17ae7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
            
    ";
        // line 6
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"row\">
        <center><h4 class=\"panel-heading alert-warning\">Prise de mesure du client : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "</h4></center>
        <div class=\"col-md-4\">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Identifiant : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identifiant", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Prenom : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Nom : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Sexe : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Adresse : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Telephone : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Email : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Type Client : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "typeClient", array()), "html", null, true);
        echo "</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <center>
                <h4 class=\"panel-heading btn-danger\">Mesure boubou</h4>
            </center>
            <div class=\"form-group\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Epaule"));
        echo "

                ";
        // line 33
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 37
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 43
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cou"));
        echo "

                ";
        // line 46
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 50
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 56
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Longue"));
        echo "

                ";
        // line 59
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 63
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 69
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Courte"));
        echo "

                ";
        // line 72
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 76
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 82
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Poignet"));
        echo "

                ";
        // line 85
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 89
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 95
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Boubou"));
        echo "

                ";
        // line 98
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 102
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">
            <center>
                <h4 class=\"panel-heading btn-info\">Mesure Pantalon</h4>
            </center>
            
            <div class=\"form-group\">
                ";
        // line 115
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Pantalon"));
        echo "

                ";
        // line 118
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 122
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 128
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Ceinture"));
        echo "

                ";
        // line 131
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 135
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 141
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cuisse"));
        echo "

                ";
        // line 144
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 148
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <center>
                <h4 class=\"panel-heading btn-success\">Spécifique aux femmes</h4>
            </center>

            <div class=\"form-group\">
                ";
        // line 158
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTaille", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Taille"));
        echo "

                ";
        // line 161
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTaille", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 165
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTaille", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 171
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hanche", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Hanche"));
        echo "

                ";
        // line 174
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hanche", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 178
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hanche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 184
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTailleBasse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Taille Basse"));
        echo "

                ";
        // line 187
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTailleBasse", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 191
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTailleBasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <hr class=\"colorgraph\">
    ";
        // line 198
        echo "    <center>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Validation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</center>

    ";
        // line 203
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 205
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
";
        
        $__internal_38b2628394453c41b445349913fcd3cdd550256376dee1b06be09dd6cc17ae7b->leave($__internal_38b2628394453c41b445349913fcd3cdd550256376dee1b06be09dd6cc17ae7b_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:mesureClientFemme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 205,  384 => 203,  378 => 198,  368 => 191,  361 => 187,  355 => 184,  346 => 178,  339 => 174,  333 => 171,  324 => 165,  317 => 161,  311 => 158,  298 => 148,  291 => 144,  285 => 141,  276 => 135,  269 => 131,  263 => 128,  254 => 122,  247 => 118,  241 => 115,  225 => 102,  218 => 98,  212 => 95,  203 => 89,  196 => 85,  190 => 82,  181 => 76,  174 => 72,  168 => 69,  159 => 63,  152 => 59,  146 => 56,  137 => 50,  130 => 46,  124 => 43,  115 => 37,  108 => 33,  102 => 30,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  53 => 9,  46 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
            
    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}

    <div class=\"row\">
        <center><h4 class=\"panel-heading alert-warning\">Prise de mesure du client : {{ client.nom }} {{ client.prenom }}</h4></center>
        <div class=\"col-md-4\">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">Identifiant : {{ client.identifiant }}</li>
                <li class=\"list-group-item\">Prenom : {{ client.prenom }}</li>
                <li class=\"list-group-item\">Nom : {{ client.nom }}</li>
                <li class=\"list-group-item\">Sexe : {{ client.sexe }}</li>
                <li class=\"list-group-item\">Adresse : {{ client.adresse }}</li>
                <li class=\"list-group-item\">Telephone : {{ client.telephone }}</li>
                <li class=\"list-group-item\">Email : {{ client.email }}</li>
                <li class=\"list-group-item\">Type Client : {{ client.typeClient }}</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <center>
                <h4 class=\"panel-heading btn-danger\">Mesure boubou</h4>
            </center>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.epaule, \"Epaule\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.epaule) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.epaule, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.cou, \"Cou\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.cou) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.cou, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.mancheLongue, \"Manche Longue\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.mancheLongue) }}

                <div class=\"col-sm-4\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.mancheLongue, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.mancheCourte, \"Manche Courte\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.mancheCourte) }}

                <div class=\"col-sm-4\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.mancheCourte, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.poignet, \"Poignet\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.poignet) }}

                <div class=\"col-sm-4\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.poignet, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.longueurBoubou, \"Longueur Boubou\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.longueurBoubou) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.longueurBoubou, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">
            <center>
                <h4 class=\"panel-heading btn-info\">Mesure Pantalon</h4>
            </center>
            
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.longueurPantalon, \"Longueur Pantalon\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.longueurPantalon) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.longueurPantalon, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.ceinture, \"Ceinture\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.ceinture) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.ceinture, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.cuisse, \"Cuisse\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.cuisse) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.cuisse, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <center>
                <h4 class=\"panel-heading btn-success\">Spécifique aux femmes</h4>
            </center>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.longueurTaille, \"Longueur Taille\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.longueurTaille) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.longueurTaille, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.hanche, \"Hanche\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.hanche) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.hanche, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.longueurTailleBasse, \"Longueur Taille Basse\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.longueurTailleBasse) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.longueurTailleBasse, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
        </div>
    </div>
    <hr class=\"colorgraph\">
    {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
    <center>{{ form_widget(form.Validation, {'attr': {'class': 'btn btn-primary'}}) }}</center>

    {# Génération automatique des champs pas encore écrits.
        Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
        et tous les champs cachés (type « hidden »). #}
    {{ form_rest(form) }}
    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}
    <br>
{% endblock %}";
    }
}
