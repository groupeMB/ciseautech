<?php

/* CoutureGestionBundle:Couture:mesureClientHommeBis.html.twig */
class __TwigTemplate_3946f992f1d78e56ab17de5a917e85cea11f72e3946a1d9f217e8669f847dbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:mesureClientHommeBis.html.twig", 1);
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
        $__internal_82ed0af7d154b730a49c3f2a10e7fd0ed8997bbd650b991130f56478df88ab07 = $this->env->getExtension("native_profiler");
        $__internal_82ed0af7d154b730a49c3f2a10e7fd0ed8997bbd650b991130f56478df88ab07->enter($__internal_82ed0af7d154b730a49c3f2a10e7fd0ed8997bbd650b991130f56478df88ab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:mesureClientHommeBis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ed0af7d154b730a49c3f2a10e7fd0ed8997bbd650b991130f56478df88ab07->leave($__internal_82ed0af7d154b730a49c3f2a10e7fd0ed8997bbd650b991130f56478df88ab07_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_25321c5c54a093f5b5b39c0ef7405dffabc897a74d851ba609f1b2dc0cdc48c6 = $this->env->getExtension("native_profiler");
        $__internal_25321c5c54a093f5b5b39c0ef7405dffabc897a74d851ba609f1b2dc0cdc48c6->enter($__internal_25321c5c54a093f5b5b39c0ef7405dffabc897a74d851ba609f1b2dc0cdc48c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        <div class=\"col-md-6    \">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"form-group\">
                ";
        // line 15
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom"));
        echo "

                ";
        // line 18
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "nom", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 22
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 27
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "prénom "));
        echo "

                ";
        // line 30
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "prenom", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 34
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 39
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "sexe", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Sexe"));
        echo "

                ";
        // line 42
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "sexe", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 46
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 51
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse"));
        echo "

                ";
        // line 54
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "adresse", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 58
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 63
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Téléphone"));
        echo "

                ";
        // line 66
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "telephone", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 70
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 75
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email"));
        echo "

                ";
        // line 78
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "email", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 82
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <center>
                <h4 class=\"panel-heading btn-danger\">Mesure boubou</h4>
            </center>
            <div class=\"form-group\">
                ";
        // line 92
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Epaule"));
        echo "

                ";
        // line 95
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 99
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 105
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cou"));
        echo "

                ";
        // line 108
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 112
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 118
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Longue"));
        echo "

                ";
        // line 121
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 125
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 131
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Courte"));
        echo "

                ";
        // line 134
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 138
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 144
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Poignet"));
        echo "

                ";
        // line 147
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 151
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 157
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Boubou"));
        echo "

                ";
        // line 160
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 164
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>

        <div class=\"col-md-3\">
            <center>
                <h4 class=\"panel-heading btn-info\">Mesure Pantalon</h4>
            </center>

            <div class=\"form-group\">
                ";
        // line 176
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Pantalon"));
        echo "

                ";
        // line 179
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 183
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 189
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Ceinture"));
        echo "

                ";
        // line 192
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 196
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 202
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cuisse"));
        echo "

                ";
        // line 205
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'errors');
        echo "

                <div class=\"col-sm-6\">
                    ";
        // line 209
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <hr class=\"colorgraph\">
    ";
        // line 216
        echo "    <center>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Validation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</center>

    ";
        // line 221
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 223
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br>
";
        
        $__internal_25321c5c54a093f5b5b39c0ef7405dffabc897a74d851ba609f1b2dc0cdc48c6->leave($__internal_25321c5c54a093f5b5b39c0ef7405dffabc897a74d851ba609f1b2dc0cdc48c6_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:mesureClientHommeBis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 223,  405 => 221,  399 => 216,  389 => 209,  382 => 205,  376 => 202,  367 => 196,  360 => 192,  354 => 189,  345 => 183,  338 => 179,  332 => 176,  317 => 164,  310 => 160,  304 => 157,  295 => 151,  288 => 147,  282 => 144,  273 => 138,  266 => 134,  260 => 131,  251 => 125,  244 => 121,  238 => 118,  229 => 112,  222 => 108,  216 => 105,  207 => 99,  200 => 95,  194 => 92,  181 => 82,  174 => 78,  168 => 75,  160 => 70,  153 => 66,  147 => 63,  139 => 58,  132 => 54,  126 => 51,  118 => 46,  111 => 42,  105 => 39,  97 => 34,  90 => 30,  84 => 27,  76 => 22,  69 => 18,  63 => 15,  53 => 9,  46 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
        <div class=\"col-md-6    \">
            <center><h4>Informations personnelles</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.client.nom, \"Nom\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.client.nom) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.client.nom, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.client.prenom, \"prénom \", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.client.prenom) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.client.prenom, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.client.sexe, \"Sexe\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.client.sexe) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.client.sexe, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.client.adresse, \"Adresse\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.client.adresse) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.client.adresse, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.client.telephone, \"Téléphone\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.client.telephone) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.client.telephone, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.client.email, \"Email\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.client.email) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.client.email, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
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

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.mancheLongue, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.mancheCourte, \"Manche Courte\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.mancheCourte) }}

                <div class=\"col-sm-6\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.mancheCourte, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>

            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.poignet, \"Poignet\", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}

                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.poignet) }}

                <div class=\"col-sm-6\">
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

        <div class=\"col-md-3\">
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
