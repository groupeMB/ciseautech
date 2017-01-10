<?php

/* @CoutureGestion/Couture/addModele.html.twig */
class __TwigTemplate_7427bd78c669d643238cc7da38f7c325bbe202589b04de300bc876479094074b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "@CoutureGestion/Couture/addModele.html.twig", 1);
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
        $__internal_3f7bbd8c5e3db33764e5339f6519fbcf6d7ce07b3e9846739bd2c4ad3d87c651 = $this->env->getExtension("native_profiler");
        $__internal_3f7bbd8c5e3db33764e5339f6519fbcf6d7ce07b3e9846739bd2c4ad3d87c651->enter($__internal_3f7bbd8c5e3db33764e5339f6519fbcf6d7ce07b3e9846739bd2c4ad3d87c651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/addModele.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7bbd8c5e3db33764e5339f6519fbcf6d7ce07b3e9846739bd2c4ad3d87c651->leave($__internal_3f7bbd8c5e3db33764e5339f6519fbcf6d7ce07b3e9846739bd2c4ad3d87c651_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_8b9895c0bb6098637b5c78b4bfceee98f1e6d5daed5fb38b8684e561589f232e = $this->env->getExtension("native_profiler");
        $__internal_8b9895c0bb6098637b5c78b4bfceee98f1e6d5daed5fb38b8684e561589f232e->enter($__internal_8b9895c0bb6098637b5c78b4bfceee98f1e6d5daed5fb38b8684e561589f232e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
        \t<div class=\"\">
                <center><h4>Formulaire d'ajout d'un nouveau modéle</h4></center>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Désignation"));
        echo "

                    ";
        // line 17
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 21
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 26
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Description"));
        echo "

                    ";
        // line 29
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 33
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 38
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cout", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Coût"));
        echo "

                    ";
        // line 41
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cout", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 45
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cout", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 50
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeModele", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type"));
        echo "

                    ";
        // line 53
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeModele", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 57
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeModele", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 62
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeConfection", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Durée confection (en jours)"));
        echo "

                    ";
        // line 65
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeConfection", array()), 'errors');
        echo "

                    <div class=\"col-sm-6\">
                        ";
        // line 69
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dureeConfection", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                ";
        // line 73
        echo "                <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Creation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

                ";
        // line 78
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          
                ";
        // line 81
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"col-md-4\">
            <h4>Fidélisation de la clientèle</h4>
            <hr class=\"colorgraph\">
            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client2.png")), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/medaille.png")), "html", null, true);
        echo "\" alt=\"\">
            <h4></h4>
        </div>
    </div>
";
        
        $__internal_8b9895c0bb6098637b5c78b4bfceee98f1e6d5daed5fb38b8684e561589f232e->leave($__internal_8b9895c0bb6098637b5c78b4bfceee98f1e6d5daed5fb38b8684e561589f232e_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/addModele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 88,  184 => 87,  174 => 81,  168 => 78,  162 => 73,  155 => 69,  148 => 65,  142 => 62,  134 => 57,  127 => 53,  121 => 50,  113 => 45,  106 => 41,  100 => 38,  92 => 33,  85 => 29,  79 => 26,  71 => 21,  64 => 17,  58 => 14,  51 => 10,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-8\">
        \t<div class=\"\">
                <center><h4>Formulaire d'ajout d'un nouveau modéle</h4></center>
                <hr class=\"colorgraph\">
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <hr>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.designation, \"Désignation\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.designation) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.designation, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.description, \"Description\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.description) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.cout, \"Coût\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ pdescriptions. #}
                    {{ form_errors(form.cout) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.cout, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.typeModele, \"Type\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.typeModele) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.typeModele, {'attr': {'class': 'form-control'}}) }}
                    </div>
                </div>
                <div class=\"form-group\">
                    {# Génération du label. #}
                    {{ form_label(form.dureeConfection, \"Durée confection (en jours)\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                    {# Affichage des erreurs pour ce champ précis. #}
                    {{ form_errors(form.dureeConfection) }}

                    <div class=\"col-sm-6\">
                        {# Génération de l'input. #}
                        {{ form_widget(form.dureeConfection, {'attr': {'class': 'form-control'}}) }}
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
