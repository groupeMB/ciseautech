<?php

/* @CoutureGestion/Couture/addClient.html.twig */
class __TwigTemplate_e0ae35ebd4dc0cbb5ef72ea792194da92161a06bb0cfb51a53189203271458c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "@CoutureGestion/Couture/addClient.html.twig", 1);
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
        $__internal_c3f2fd3e79ee7516b18301df287f350fdb83e4d06ea106ae8144ed34e0cf2ee0 = $this->env->getExtension("native_profiler");
        $__internal_c3f2fd3e79ee7516b18301df287f350fdb83e4d06ea106ae8144ed34e0cf2ee0->enter($__internal_c3f2fd3e79ee7516b18301df287f350fdb83e4d06ea106ae8144ed34e0cf2ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/addClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f2fd3e79ee7516b18301df287f350fdb83e4d06ea106ae8144ed34e0cf2ee0->leave($__internal_c3f2fd3e79ee7516b18301df287f350fdb83e4d06ea106ae8144ed34e0cf2ee0_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_abb332ca913690856ec1b6e7f23c9a6a94d3307356cd0fdd75e9ea58c67250fd = $this->env->getExtension("native_profiler");
        $__internal_abb332ca913690856ec1b6e7f23c9a6a94d3307356cd0fdd75e9ea58c67250fd->enter($__internal_abb332ca913690856ec1b6e7f23c9a6a94d3307356cd0fdd75e9ea58c67250fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
        \t<div class=\"\">
                <center><h4>Formulaire d'ajout d'un nouveau client</h4></center>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom"));
        echo "

                    ";
        // line 17
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 21
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 26
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prénoms"));
        echo "

                    ";
        // line 29
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 33
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 38
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Sexe"));
        echo "

                    ";
        // line 41
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "

                    <div class=\"col-sm-4\">
                        ";
        // line 45
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 50
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Téléphone"));
        echo "

                    ";
        // line 53
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 57
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 62
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email"));
        echo "

                    ";
        // line 65
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 69
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 74
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse"));
        echo "

                    ";
        // line 77
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 81
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 86
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type Client"));
        echo "

                    ";
        // line 89
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'errors');
        echo "

                    <div class=\"col-sm-4\">
                        ";
        // line 93
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                ";
        // line 97
        echo "                <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Creation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

                ";
        // line 102
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          
                ";
        // line 105
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"col-md-4\">
            <h4>Fidélisation de la clientèle</h4>
            <hr class=\"colorgraph\">
            <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client2.png")), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/medaille.png")), "html", null, true);
        echo "\" alt=\"\">
            <h4></h4>
        </div>
    </div>
";
        
        $__internal_abb332ca913690856ec1b6e7f23c9a6a94d3307356cd0fdd75e9ea58c67250fd->leave($__internal_abb332ca913690856ec1b6e7f23c9a6a94d3307356cd0fdd75e9ea58c67250fd_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/addClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 112,  226 => 111,  216 => 105,  210 => 102,  204 => 97,  197 => 93,  190 => 89,  184 => 86,  176 => 81,  169 => 77,  163 => 74,  155 => 69,  148 => 65,  142 => 62,  134 => 57,  127 => 53,  121 => 50,  113 => 45,  106 => 41,  100 => 38,  92 => 33,  85 => 29,  79 => 26,  71 => 21,  64 => 17,  58 => 14,  51 => 10,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-8\">
        \t<div class=\"\">
                <center><h4>Formulaire d'ajout d'un nouveau client</h4></center>
                <hr class=\"colorgraph\">
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <hr>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.nom) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.prenom, \"Prénoms\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.prenom) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.sexe, \"Sexe\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.sexe) }}

                    <div class=\"col-sm-4\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.sexe, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.telephone, \"Téléphone\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.telephone) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.email) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.adresse, \"Adresse\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.adresse) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.typeClient, \"Type Client\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.typeClient) }}

                    <div class=\"col-sm-4\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.typeClient, {'attr': {'class': 'form-control'}}) }}
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
        <div class=\"col-md-4\">
            <h4>Fidélisation de la clientèle</h4>
            <hr class=\"colorgraph\">
            <img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/client2.png') }}\" alt=\"\">
            <img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/medaille.png') }}\" alt=\"\">
            <h4></h4>
        </div>
    </div>
{% endblock %}";
    }
}
