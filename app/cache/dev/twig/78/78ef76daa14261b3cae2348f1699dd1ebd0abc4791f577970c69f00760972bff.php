<?php

/* CoutureGestionBundle:Couture:modifierClient.html.twig */
class __TwigTemplate_87c1ed8e8a39800f46abeceb291c7f58cac9d0cde3af0e580df3eb36a2eac9ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:modifierClient.html.twig", 1);
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
        $__internal_c3d66e2c69dbb100edaf0977ba003cd83bce7c059989fd5eb8fa7e921201cec4 = $this->env->getExtension("native_profiler");
        $__internal_c3d66e2c69dbb100edaf0977ba003cd83bce7c059989fd5eb8fa7e921201cec4->enter($__internal_c3d66e2c69dbb100edaf0977ba003cd83bce7c059989fd5eb8fa7e921201cec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:modifierClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d66e2c69dbb100edaf0977ba003cd83bce7c059989fd5eb8fa7e921201cec4->leave($__internal_c3d66e2c69dbb100edaf0977ba003cd83bce7c059989fd5eb8fa7e921201cec4_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_7d130df2e660d6686b83e9b188840557dd3e04ab54dfa655dab7bf5b1f99b1a9 = $this->env->getExtension("native_profiler");
        $__internal_7d130df2e660d6686b83e9b188840557dd3e04ab54dfa655dab7bf5b1f99b1a9->enter($__internal_7d130df2e660d6686b83e9b188840557dd3e04ab54dfa655dab7bf5b1f99b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"\">
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
                <div class=\"col-md-4\">
                    <div class=\"form-group\">
                        ";
        // line 15
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom"));
        echo "

                        ";
        // line 18
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

                        <div class=\"col-sm-6\">
                            ";
        // line 22
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 27
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prénoms"));
        echo "

                        ";
        // line 30
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "

                        <div class=\"col-sm-6\">
                            ";
        // line 34
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Sexe"));
        echo "

                        ";
        // line 42
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "

                        <div class=\"col-sm-4\">
                            ";
        // line 46
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 51
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Téléphone"));
        echo "

                        ";
        // line 54
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "

                        <div class=\"col-sm-6\">
                            ";
        // line 58
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 63
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Email"));
        echo "

                        ";
        // line 66
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

                        <div class=\"col-sm-6\">
                            ";
        // line 70
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 75
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Adresse"));
        echo "

                        ";
        // line 78
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "

                        <div class=\"col-sm-6\">
                            ";
        // line 82
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 87
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Type Client"));
        echo "

                        ";
        // line 90
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'errors');
        echo "

                        <div class=\"col-sm-4\">
                            ";
        // line 94
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"col-md-4\">
                        <center>
                            <h4 class=\"panel-heading btn-danger\">Mesure boubou</h4>
                        </center>
                        <div class=\"form-group\">
                            ";
        // line 105
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Epaule"));
        echo "

                            ";
        // line 108
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'errors');
        echo "

                            <div class=\"col-sm-6\">
                                ";
        // line 112
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 118
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cou"));
        echo "

                            ";
        // line 121
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'errors');
        echo "

                            <div class=\"col-sm-6\">
                                ";
        // line 125
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cou", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 131
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Longue"));
        echo "

                            ";
        // line 134
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'errors');
        echo "

                            <div class=\"col-sm-4\">
                                ";
        // line 138
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheLongue", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 144
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Manche Courte"));
        echo "

                            ";
        // line 147
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'errors');
        echo "

                            <div class=\"col-sm-4\">
                                ";
        // line 151
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mancheCourte", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 157
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Poignet"));
        echo "

                            ";
        // line 160
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'errors');
        echo "

                            <div class=\"col-sm-4\">
                                ";
        // line 164
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "poignet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 170
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Boubou"));
        echo "

                            ";
        // line 173
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurBoubou", array()), 'errors');
        echo "

                            <div class=\"col-sm-6\">
                                ";
        // line 177
        echo "                                ";
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
        // line 190
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Longueur Pantalon"));
        echo "

                            ";
        // line 193
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'errors');
        echo "

                            <div class=\"col-sm-6\">
                                ";
        // line 197
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueurPantalon", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 203
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Ceinture"));
        echo "

                            ";
        // line 206
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'errors');
        echo "

                            <div class=\"col-sm-6\">
                                ";
        // line 210
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ceinture", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 216
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Cuisse"));
        echo "

                            ";
        // line 219
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'errors');
        echo "

                            <div class=\"col-sm-6\">
                                ";
        // line 223
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 229
        echo "                <span style=\"margin-left:30%\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Creation", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</span>

                ";
        // line 234
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                ";
        // line 237
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"col-md-4\">
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"";
        // line 245
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_list_client");
        echo "\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Lister les clients</button></a>
                </li>
            </ul>
        </div>
        <!--
        <div class=\"col-md-3\">
            <h4>Fidélisation de la clientèle</h4>
            <hr class=\"colorgraph\">
            <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/client2.png")), "html", null, true);
        echo "\" alt=\"\">
            <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/medaille.png")), "html", null, true);
        echo "\" alt=\"\">
            <h4></h4>
        </div>
        -->
    </div>
";
        
        $__internal_7d130df2e660d6686b83e9b188840557dd3e04ab54dfa655dab7bf5b1f99b1a9->leave($__internal_7d130df2e660d6686b83e9b188840557dd3e04ab54dfa655dab7bf5b1f99b1a9_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:modifierClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 254,  452 => 253,  441 => 245,  429 => 237,  423 => 234,  417 => 229,  408 => 223,  401 => 219,  395 => 216,  386 => 210,  379 => 206,  373 => 203,  364 => 197,  357 => 193,  351 => 190,  335 => 177,  328 => 173,  322 => 170,  313 => 164,  306 => 160,  300 => 157,  291 => 151,  284 => 147,  278 => 144,  269 => 138,  262 => 134,  256 => 131,  247 => 125,  240 => 121,  234 => 118,  225 => 112,  218 => 108,  212 => 105,  198 => 94,  191 => 90,  185 => 87,  177 => 82,  170 => 78,  164 => 75,  156 => 70,  149 => 66,  143 => 63,  135 => 58,  128 => 54,  122 => 51,  114 => 46,  107 => 42,  101 => 39,  93 => 34,  86 => 30,  80 => 27,  72 => 22,  65 => 18,  59 => 15,  51 => 10,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"\">
                <center><h4>Formulaire d'ajout d'un nouveau client</h4></center>
                <hr class=\"colorgraph\">
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <hr>
                <div class=\"col-md-4\">
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
                </div>
                <div class=\"col-md-4\">
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
            <center><h4 class=\"panel-heading alert-danger\">Actions à effectuer</h4></center>
            <hr class=\"colorgraph\">
            <ul class=\"list-group\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path(\"couture_gestion_couture_list_client\")}}\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-list\"></span> Lister les clients</button></a>
                </li>
            </ul>
        </div>
        <!--
        <div class=\"col-md-3\">
            <h4>Fidélisation de la clientèle</h4>
            <hr class=\"colorgraph\">
            <img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/client2.png') }}\" alt=\"\">
            <img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/medaille.png') }}\" alt=\"\">
            <h4></h4>
        </div>
        -->
    </div>
{% endblock %}";
    }
}
