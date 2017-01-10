<?php

/* @CoutureGestion/Couture/mesureClientFemme.html.twig */
class __TwigTemplate_b36096b4a49178ad946f3700a0720f76eee37586ef12eeab34094bd63c87b6b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "@CoutureGestion/Couture/mesureClientFemme.html.twig", 1);
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
        $__internal_30e49e1d728edba6547a2b3294b206d1f5aab2608f6051a0f0fb05f5b67c0976 = $this->env->getExtension("native_profiler");
        $__internal_30e49e1d728edba6547a2b3294b206d1f5aab2608f6051a0f0fb05f5b67c0976->enter($__internal_30e49e1d728edba6547a2b3294b206d1f5aab2608f6051a0f0fb05f5b67c0976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Couture/mesureClientFemme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e49e1d728edba6547a2b3294b206d1f5aab2608f6051a0f0fb05f5b67c0976->leave($__internal_30e49e1d728edba6547a2b3294b206d1f5aab2608f6051a0f0fb05f5b67c0976_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_d4461bc14d4c628c0f58f8b0d17d7ac84a4e52481ace552a07f0c78798825808 = $this->env->getExtension("native_profiler");
        $__internal_d4461bc14d4c628c0f58f8b0d17d7ac84a4e52481ace552a07f0c78798825808->enter($__internal_d4461bc14d4c628c0f58f8b0d17d7ac84a4e52481ace552a07f0c78798825808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        <div class=\"col-md-6\">
            <center>
                <h4 class=\"panel-heading btn-danger\">Mesure boubou</h4>
            </center>
            <div class=\"form-group\">
                ";
        // line 16
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Epaule"));
        echo "

                ";
        // line 19
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 23
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 29
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cou"));
        echo "

                ";
        // line 32
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 36
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 42
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Longue"));
        echo "

                ";
        // line 45
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 49
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 55
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Courte"));
        echo "

                ";
        // line 58
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 62
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 68
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Poignet"));
        echo "

                ";
        // line 71
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'errors');
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 75
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 81
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Boubou"));
        echo "

                ";
        // line 84
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 88
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

        </div>

        <div class=\"col-md-6\">
            <center>
                <h4 class=\"panel-heading btn-info\">Mesure Pantalon</h4>
            </center>
            
            <div class=\"form-group\">
                ";
        // line 101
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Pantalon"));
        echo "

                ";
        // line 104
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 108
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            
            <div class=\"form-group\">
                ";
        // line 114
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Ceinture"));
        echo "

                ";
        // line 117
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 121
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 127
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cuisse"));
        echo "

                ";
        // line 130
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 134
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
        // line 144
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTaille", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Taille"));
        echo "

                ";
        // line 147
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTaille", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 151
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTaille", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 157
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hanche", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Hanche"));
        echo "

                ";
        // line 160
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hanche", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 164
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hanche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 170
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTailleBasse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Taille Basse"));
        echo "

                ";
        // line 173
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTailleBasse", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 177
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurTailleBasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <hr class=\"colorgraph\">
    ";
        // line 184
        echo "    <center>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Validation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</center>

    ";
        // line 189
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 191
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
";
        
        $__internal_d4461bc14d4c628c0f58f8b0d17d7ac84a4e52481ace552a07f0c78798825808->leave($__internal_d4461bc14d4c628c0f58f8b0d17d7ac84a4e52481ace552a07f0c78798825808_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Couture/mesureClientFemme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 191,  346 => 189,  340 => 184,  330 => 177,  323 => 173,  317 => 170,  308 => 164,  301 => 160,  295 => 157,  286 => 151,  279 => 147,  273 => 144,  260 => 134,  253 => 130,  247 => 127,  238 => 121,  231 => 117,  225 => 114,  216 => 108,  209 => 104,  203 => 101,  187 => 88,  180 => 84,  174 => 81,  165 => 75,  158 => 71,  152 => 68,  143 => 62,  136 => 58,  130 => 55,  121 => 49,  114 => 45,  108 => 42,  99 => 36,  92 => 32,  86 => 29,  77 => 23,  70 => 19,  64 => 16,  53 => 9,  46 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
        <div class=\"col-md-6\">
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

        <div class=\"col-md-6\">
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
