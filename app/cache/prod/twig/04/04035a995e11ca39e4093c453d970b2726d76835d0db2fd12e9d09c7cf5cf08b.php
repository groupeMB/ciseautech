<?php

/* PharmaciePharmacienBundle::template.html.twig */
class __TwigTemplate_f25336110bba4a25dcfd90a2c9956c89b17d60b5c49946e935ab1fb76fd6073a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'corps' => array($this, 'block_corps'),
            'menuHaut' => array($this, 'block_menuHaut'),
            'titre' => array($this, 'block_titre'),
            'logout' => array($this, 'block_logout'),
            'menuLeft' => array($this, 'block_menuLeft'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>PharmaGes</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!-- Encodage en utf-8, en HTML 5 -->
        <meta charset=\"utf-8\" />
        <!-- Inclusion des bibliothèques JavaScript -->

        <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
        <script type=\"text/javascript\">
            google.load(\"visualization\", \"1\", {packages:[\"corechart\", 'table', 'treemap', 'gauge']});
            google.load('jquery', '1.6.0');
        </script>
        <script type=\"text/javascript\" src=\" ";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/modernizr.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/accueil.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/membre.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/contrat.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/sms.js")), "html", null, true);
        echo "\"></script>
        <script>
            \$(function() {
                    \$('a[data-confirm]').click(function(ev) {
                    var href = \$(this).attr('href');
                    if (!\$('#dataConfirmModal').length) {
                        \$('body').append('<div id=\"dataConfirmModal\" class=\"modal\" role=\"dialog\" aria-labelledby=\"dataConfirmLabel\" aria-hidden=\"true\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h3 id=\"dataConfirmLabel\" style=\"text-align: center; color: white; background-color: #83b719; padding: 5px\">Confirmation de l\\'opération en cours</h3></div><div class=\"modal-body\"></div><div class=\"modal-footer\"><button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Non</button><a class=\"btn btn-success\" id=\"dataConfirmOK\">Oui</a></div></div></div></div>');
                    }
                    \$('#dataConfirmModal').find('.modal-body').text(\$(this).attr('data-confirm'));
                    \$('#dataConfirmOK').attr('href', href);
                    \$('#dataConfirmModal').modal({show:true});
                     return false;
                });
            });
        </script>


        <!-- Inclusion des fichiers de styles -->
        
        <link rel=\"icon\" href=\"asset('bundles/pharmaciepharmacien/images/favicon.ico')\" />
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 42
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/accueil.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 43
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/membre.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 44
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 45
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/jquery.dataTables.min.css")), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 46
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/sb-admin-2.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 47
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/font-awesome.min.css")), "html", null, true);
        echo "\"/>
        
    </head>
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\">
        <div >
            <!-- bloc conteneur de la page  -->
            <div id=\"container\" class=\"container container-fluid\">
                ";
        // line 54
        $this->displayBlock('entete', $context, $blocks);
        // line 86
        echo "                ";
        $this->displayBlock('corps', $context, $blocks);
        // line 145
        echo "        </div>            
    </body>

</html>";
    }

    // line 54
    public function block_entete($context, array $blocks = array())
    {
        // line 55
        echo "                    <div class=\"row\" style=\"margin-top: 15px\">
                        <div class=\"col-sm-6 col-md-3\" id=\"portofolioPresentation\">
                            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/pharmages.png")), "html", null, true);
        echo "\" width=\"100%\">
                        </div>
                        <div class=\"col-sm-3 col-md-3\" id=\"portofolioPresentation\">
                            <div class=\"panel panel-success\">
                                <div class=\"panel-heading\"><center><em>Recette du jour</em></center></div>
                                <div class=\"panel-body\">
                                    <center><em>250.000 FCFA</em></center>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-md-3\" id=\"portofolioPresentation\">
                            <div class=\"panel panel-success\">
                                <div class=\"panel-heading\"><center><em>Nombre produits vendus</em></center></div>
                                <div class=\"panel-body\">
                                    <center><em>600</em></center>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-md-3\" id=\"portofolioPresentation\">
                            <div class=\"panel panel-success\">
                                <div class=\"panel-heading\"><center><em>Fonds de roulement</em></center></div>
                                <div class=\"panel-body\">
                                    <center><em>60.000 FCFA</em></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                ";
    }

    // line 86
    public function block_corps($context, array $blocks = array())
    {
        // line 87
        echo "                    ";
        $this->displayBlock('menuHaut', $context, $blocks);
        // line 134
        echo "                <div style=\"width: 100%;\">
                    
                    ";
        // line 136
        $this->displayBlock('menuLeft', $context, $blocks);
        // line 138
        echo "            
                    ";
        // line 139
        $this->displayBlock('contenu', $context, $blocks);
        // line 142
        echo "
                </div>
                ";
    }

    // line 87
    public function block_menuHaut($context, array $blocks = array())
    {
        // line 88
        echo "                        <nav class=\"navbar navbar-fixed-top\" role=\"navigation\" style=\"background-color: #83b719; color: white\">
                            <div class=\"container-fluid\">
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    ";
        // line 97
        $this->displayBlock('titre', $context, $blocks);
        // line 100
        echo "                                </div>
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    ";
        // line 102
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 103
            echo "                                        <ul class=\"nav navbar-nav navbar-right\">
                                                <li style=\"background-color: #461900\"><a style=\"color: white\">Bienvenue Pharmacien</a></li>
                                        </ul>
                                    ";
        }
        // line 107
        echo "                                    <ul class=\"nav navbar-nav navbar-right barrehaut\">
                                        ";
        // line 108
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == "")) {
            // line 109
            echo "                                            <li class=\"icone_connexion\">
                                                <a href=\"\"><span class=\"glyphicon glyphicon-login\" aria-hidden=\"true\"></span> Connexion</a>
                                            </li>
                                        ";
        } else {
            // line 113
            echo "                                            <li class=\"icone_connexion\">
                                                <a href=\"\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil </a>
                                            </li>
                                        ";
        }
        // line 117
        echo "                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span> Support technique</a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Contactez-nous</a>
                                        </li>
                                        ";
        // line 123
        $this->displayBlock('logout', $context, $blocks);
        // line 126
        echo "
                                    </ul>
                                </div>
                            </div>
                        </nav>  
                </div>

                    ";
    }

    // line 97
    public function block_titre($context, array $blocks = array())
    {
        // line 98
        echo "                                        <span class=\"navbar-brand\" href=\"#\">Votre gestionnaire de pharmacie sécurisé</span>
                                    ";
    }

    // line 123
    public function block_logout($context, array $blocks = array())
    {
        // line 124
        echo "
                                        ";
    }

    // line 136
    public function block_menuLeft($context, array $blocks = array())
    {
        // line 137
        echo "
                    ";
    }

    // line 139
    public function block_contenu($context, array $blocks = array())
    {
        // line 140
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "PharmaciePharmacienBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 140,  288 => 139,  283 => 137,  280 => 136,  275 => 124,  272 => 123,  267 => 98,  264 => 97,  253 => 126,  251 => 123,  243 => 117,  237 => 113,  231 => 109,  229 => 108,  226 => 107,  220 => 103,  218 => 102,  214 => 100,  212 => 97,  201 => 88,  198 => 87,  192 => 142,  190 => 139,  187 => 138,  185 => 136,  181 => 134,  178 => 87,  175 => 86,  142 => 57,  138 => 55,  135 => 54,  128 => 145,  125 => 86,  123 => 54,  113 => 47,  109 => 46,  105 => 45,  101 => 44,  97 => 43,  93 => 42,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  50 => 17,  46 => 16,  42 => 15,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>PharmaGes</title>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <!-- Encodage en utf-8, en HTML 5 -->*/
/*         <meta charset="utf-8" />*/
/*         <!-- Inclusion des bibliothèques JavaScript -->*/
/* */
/*         <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*         <script type="text/javascript">*/
/*             google.load("visualization", "1", {packages:["corechart", 'table', 'treemap', 'gauge']});*/
/*             google.load('jquery', '1.6.0');*/
/*         </script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.dataTables.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/modernizr.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/accueil.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/membre.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/contrat.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/sms.js') }}"></script>*/
/*         <script>*/
/*             $(function() {*/
/*                     $('a[data-confirm]').click(function(ev) {*/
/*                     var href = $(this).attr('href');*/
/*                     if (!$('#dataConfirmModal').length) {*/
/*                         $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');*/
/*                     }*/
/*                     $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));*/
/*                     $('#dataConfirmOK').attr('href', href);*/
/*                     $('#dataConfirmModal').modal({show:true});*/
/*                      return false;*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/* */
/*         <!-- Inclusion des fichiers de styles -->*/
/*         */
/*         <link rel="icon" href="asset('bundles/pharmaciepharmacien/images/favicon.ico')" />*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/css/accueil.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/css/membre.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/jquery.dataTables.min.css') }}"/>*/
/*          <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~  asset('bundles/pharmaciepharmacien/css/sb-admin-2.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/css/font-awesome.min.css') }}"/>*/
/*         */
/*     </head>*/
/*     <body id="coprsTemplate" onload="date_heure('heure');">*/
/*         <div >*/
/*             <!-- bloc conteneur de la page  -->*/
/*             <div id="container" class="container container-fluid">*/
/*                 {% block entete%}*/
/*                     <div class="row" style="margin-top: 15px">*/
/*                         <div class="col-sm-6 col-md-3" id="portofolioPresentation">*/
/*                             <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/pharmages.png') }}" width="100%">*/
/*                         </div>*/
/*                         <div class="col-sm-3 col-md-3" id="portofolioPresentation">*/
/*                             <div class="panel panel-success">*/
/*                                 <div class="panel-heading"><center><em>Recette du jour</em></center></div>*/
/*                                 <div class="panel-body">*/
/*                                     <center><em>250.000 FCFA</em></center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-3 col-md-3" id="portofolioPresentation">*/
/*                             <div class="panel panel-success">*/
/*                                 <div class="panel-heading"><center><em>Nombre produits vendus</em></center></div>*/
/*                                 <div class="panel-body">*/
/*                                     <center><em>600</em></center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-3 col-md-3" id="portofolioPresentation">*/
/*                             <div class="panel panel-success">*/
/*                                 <div class="panel-heading"><center><em>Fonds de roulement</em></center></div>*/
/*                                 <div class="panel-body">*/
/*                                     <center><em>60.000 FCFA</em></center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                 {% endblock %}*/
/*                 {% block corps %}*/
/*                     {% block menuHaut %}*/
/*                         <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #83b719; color: white">*/
/*                             <div class="container-fluid">*/
/*                                 <div class="navbar-header">*/
/*                                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                                         <span class="sr-only">Toggle navigation</span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                     </button>*/
/*                                     {% block titre %}*/
/*                                         <span class="navbar-brand" href="#">Votre gestionnaire de pharmacie sécurisé</span>*/
/*                                     {% endblock %}*/
/*                                 </div>*/
/*                                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                                     {% if app.user %}*/
/*                                         <ul class="nav navbar-nav navbar-right">*/
/*                                                 <li style="background-color: #461900"><a style="color: white">Bienvenue Pharmacien</a></li>*/
/*                                         </ul>*/
/*                                     {% endif %}*/
/*                                     <ul class="nav navbar-nav navbar-right barrehaut">*/
/*                                         {% if app.user == "" %}*/
/*                                             <li class="icone_connexion">*/
/*                                                 <a href=""><span class="glyphicon glyphicon-login" aria-hidden="true"></span> Connexion</a>*/
/*                                             </li>*/
/*                                         {% else %}*/
/*                                             <li class="icone_connexion">*/
/*                                                 <a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil </a>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                         <li>*/
/*                                             <a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Support technique</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contactez-nous</a>*/
/*                                         </li>*/
/*                                         {% block logout %}*/
/* */
/*                                         {% endblock %}*/
/* */
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </nav>  */
/*                 </div>*/
/* */
/*                     {% endblock %}*/
/*                 <div style="width: 100%;">*/
/*                     */
/*                     {% block menuLeft %}*/
/* */
/*                     {% endblock %}            */
/*                     {% block contenu %}*/
/* */
/*                     {% endblock %}*/
/* */
/*                 </div>*/
/*                 {% endblock %}*/
/*         </div>            */
/*     </body>*/
/* */
/* </html>*/
