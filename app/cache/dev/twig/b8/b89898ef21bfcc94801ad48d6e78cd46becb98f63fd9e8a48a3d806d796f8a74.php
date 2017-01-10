<?php

/* @CoutureGestion/template.html.twig */
class __TwigTemplate_1e202b578c4be56f15a113585c32865cdebf8151e1c0467def303c3669e3c542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
            'menuHaut' => array($this, 'block_menuHaut'),
            'titre' => array($this, 'block_titre'),
            'entete' => array($this, 'block_entete'),
            'logout' => array($this, 'block_logout'),
            'menuLeft' => array($this, 'block_menuLeft'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62974d7b8d5e665c0eb19d09344d678ad50f7505fb2efe6e1032c8ceed5f15e7 = $this->env->getExtension("native_profiler");
        $__internal_62974d7b8d5e665c0eb19d09344d678ad50f7505fb2efe6e1032c8ceed5f15e7->enter($__internal_62974d7b8d5e665c0eb19d09344d678ad50f7505fb2efe6e1032c8ceed5f15e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Ciseau'Tech</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!-- Encodage en utf-8, en HTML 5 -->
        <meta charset=\"utf-8\" />

        <!-- Inclusion des fichiers de styles -->
        
        <link rel=\"icon\" href=\"asset('bundles/couturegestion/images/favicon.ico')\" />
        
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 13
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/css/style.css")), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/bower_components/bootstrap/dist/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/bower_components/datatables/media/css/jquery.dataTables.css")), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\">
        <div >
            <!-- bloc conteneur de la page  -->
            <div id=\"container\" class=\"container container-fluid\">
                ";
        // line 25
        $this->displayBlock('corps', $context, $blocks);
        // line 80
        echo "        </div>            
    </body>
    <script type=\"text/javascript\" src=\" ";
        // line 82
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/bower_components/jquery/jquery.min.js")), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/bower_components/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/bower_components/datatables/media/js/jquery.dataTables.js")), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\" ";
        // line 88
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/js/style.js")), "html", null, true);
        echo "\"></script>
    
    <script>
            \$(document).ready(function(){
                        \$('.dropdown-toggle').dropdown();
                        \$('#mytable').DataTable();
                    });    
    </script>
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
</html>";
        
        $__internal_62974d7b8d5e665c0eb19d09344d678ad50f7505fb2efe6e1032c8ceed5f15e7->leave($__internal_62974d7b8d5e665c0eb19d09344d678ad50f7505fb2efe6e1032c8ceed5f15e7_prof);

    }

    // line 25
    public function block_corps($context, array $blocks = array())
    {
        $__internal_7bb9ff5c87e4fd087dcb13bebfc7596d2e2e04684ea43cc9973f2cf9fe45cca6 = $this->env->getExtension("native_profiler");
        $__internal_7bb9ff5c87e4fd087dcb13bebfc7596d2e2e04684ea43cc9973f2cf9fe45cca6->enter($__internal_7bb9ff5c87e4fd087dcb13bebfc7596d2e2e04684ea43cc9973f2cf9fe45cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 26
        echo "                    ";
        $this->displayBlock('menuHaut', $context, $blocks);
        // line 66
        echo "                    
                </div>

                <div class=\"row\" style=\"margin-top: 50px;\">
                    
                    ";
        // line 71
        $this->displayBlock('menuLeft', $context, $blocks);
        // line 73
        echo "            
                
                    ";
        // line 75
        $this->displayBlock('contenu', $context, $blocks);
        // line 78
        echo "                </div>
            ";
        
        $__internal_7bb9ff5c87e4fd087dcb13bebfc7596d2e2e04684ea43cc9973f2cf9fe45cca6->leave($__internal_7bb9ff5c87e4fd087dcb13bebfc7596d2e2e04684ea43cc9973f2cf9fe45cca6_prof);

    }

    // line 26
    public function block_menuHaut($context, array $blocks = array())
    {
        $__internal_0c4badf127ce79b2e8a2aa2227f1bb4f24941acf08a9b158307134a0de5d8564 = $this->env->getExtension("native_profiler");
        $__internal_0c4badf127ce79b2e8a2aa2227f1bb4f24941acf08a9b158307134a0de5d8564->enter($__internal_0c4badf127ce79b2e8a2aa2227f1bb4f24941acf08a9b158307134a0de5d8564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHaut"));

        // line 27
        echo "                        <nav class=\"navbar navbar-fixed-top\" style=\"background-color: #B40431\" role=\"navigation\">
                            ";
        // line 28
        $this->displayBlock('titre', $context, $blocks);
        // line 31
        echo "                            <div class=\"container\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    <a class=\"navbar-brand\" href=\"#\">
                                        ";
        // line 41
        $this->displayBlock('entete', $context, $blocks);
        // line 42
        echo "                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav navbar-right menu-haut\">
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span> Accueil</a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-wrench\"></span> Administration</a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-globe\"></span> Site web</a>
                                        </li>
                                        ";
        // line 56
        $this->displayBlock('logout', $context, $blocks);
        // line 59
        echo "                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>    
                    ";
        
        $__internal_0c4badf127ce79b2e8a2aa2227f1bb4f24941acf08a9b158307134a0de5d8564->leave($__internal_0c4badf127ce79b2e8a2aa2227f1bb4f24941acf08a9b158307134a0de5d8564_prof);

    }

    // line 28
    public function block_titre($context, array $blocks = array())
    {
        $__internal_8e32ba18aae751868b1dd2bd19808b89813af33c94b680b6e04ff9ec08e516c5 = $this->env->getExtension("native_profiler");
        $__internal_8e32ba18aae751868b1dd2bd19808b89813af33c94b680b6e04ff9ec08e516c5->enter($__internal_8e32ba18aae751868b1dd2bd19808b89813af33c94b680b6e04ff9ec08e516c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 29
        echo "
                            ";
        
        $__internal_8e32ba18aae751868b1dd2bd19808b89813af33c94b680b6e04ff9ec08e516c5->leave($__internal_8e32ba18aae751868b1dd2bd19808b89813af33c94b680b6e04ff9ec08e516c5_prof);

    }

    // line 41
    public function block_entete($context, array $blocks = array())
    {
        $__internal_f7d5564d19b6c534f494a56f4c3a02d304d5b4c8df833144fa5834a62c02ba04 = $this->env->getExtension("native_profiler");
        $__internal_f7d5564d19b6c534f494a56f4c3a02d304d5b4c8df833144fa5834a62c02ba04->enter($__internal_f7d5564d19b6c534f494a56f4c3a02d304d5b4c8df833144fa5834a62c02ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        echo "<img src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/logo.png")), "html", null, true);
        echo "\" alt=\"\" width=\"70%\" id=\"logo\">";
        
        $__internal_f7d5564d19b6c534f494a56f4c3a02d304d5b4c8df833144fa5834a62c02ba04->leave($__internal_f7d5564d19b6c534f494a56f4c3a02d304d5b4c8df833144fa5834a62c02ba04_prof);

    }

    // line 56
    public function block_logout($context, array $blocks = array())
    {
        $__internal_c3bf6a4f5a45a5b2b937102c1f8308eb9a38b12e892f76cbe37740a4ee0cb9f7 = $this->env->getExtension("native_profiler");
        $__internal_c3bf6a4f5a45a5b2b937102c1f8308eb9a38b12e892f76cbe37740a4ee0cb9f7->enter($__internal_c3bf6a4f5a45a5b2b937102c1f8308eb9a38b12e892f76cbe37740a4ee0cb9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 57
        echo "                                
                                        ";
        
        $__internal_c3bf6a4f5a45a5b2b937102c1f8308eb9a38b12e892f76cbe37740a4ee0cb9f7->leave($__internal_c3bf6a4f5a45a5b2b937102c1f8308eb9a38b12e892f76cbe37740a4ee0cb9f7_prof);

    }

    // line 71
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_10e897ea1e18fbee85f0d4f7c931d42e645620ec38436f370c9cf967212d06c3 = $this->env->getExtension("native_profiler");
        $__internal_10e897ea1e18fbee85f0d4f7c931d42e645620ec38436f370c9cf967212d06c3->enter($__internal_10e897ea1e18fbee85f0d4f7c931d42e645620ec38436f370c9cf967212d06c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 72
        echo "
                    ";
        
        $__internal_10e897ea1e18fbee85f0d4f7c931d42e645620ec38436f370c9cf967212d06c3->leave($__internal_10e897ea1e18fbee85f0d4f7c931d42e645620ec38436f370c9cf967212d06c3_prof);

    }

    // line 75
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ef3db2d8cc282d57a0c39162a302b7eab1b8fcf0eee5a781c56d28aef7f53d87 = $this->env->getExtension("native_profiler");
        $__internal_ef3db2d8cc282d57a0c39162a302b7eab1b8fcf0eee5a781c56d28aef7f53d87->enter($__internal_ef3db2d8cc282d57a0c39162a302b7eab1b8fcf0eee5a781c56d28aef7f53d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 76
        echo "
                    ";
        
        $__internal_ef3db2d8cc282d57a0c39162a302b7eab1b8fcf0eee5a781c56d28aef7f53d87->leave($__internal_ef3db2d8cc282d57a0c39162a302b7eab1b8fcf0eee5a781c56d28aef7f53d87_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 76,  262 => 75,  254 => 72,  248 => 71,  240 => 57,  234 => 56,  220 => 41,  212 => 29,  206 => 28,  193 => 59,  191 => 56,  175 => 42,  173 => 41,  161 => 31,  159 => 28,  156 => 27,  150 => 26,  142 => 78,  140 => 75,  136 => 73,  134 => 71,  127 => 66,  124 => 26,  118 => 25,  88 => 88,  83 => 86,  78 => 84,  73 => 82,  69 => 80,  67 => 25,  58 => 19,  53 => 17,  48 => 15,  43 => 13,  29 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <title>Ciseau'Tech</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!-- Encodage en utf-8, en HTML 5 -->
        <meta charset=\"utf-8\" />

        <!-- Inclusion des fichiers de styles -->
        
        <link rel=\"icon\" href=\"asset('bundles/couturegestion/images/favicon.ico')\" />
        
        <link rel=\"stylesheet\" type=\"text/css\" href = \"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/css/style.css') }}\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/bower_components/datatables/media/css/jquery.dataTables.css') }}\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />
    
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\">
        <div >
            <!-- bloc conteneur de la page  -->
            <div id=\"container\" class=\"container container-fluid\">
                {% block corps %}
                    {% block menuHaut %}
                        <nav class=\"navbar navbar-fixed-top\" style=\"background-color: #B40431\" role=\"navigation\">
                            {% block titre %}

                            {% endblock %}
                            <div class=\"container\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    <a class=\"navbar-brand\" href=\"#\">
                                        {% block entete%}<img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/images/logo.png') }}\" alt=\"\" width=\"70%\" id=\"logo\">{% endblock %}
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav navbar-right menu-haut\">
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span> Accueil</a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-wrench\"></span> Administration</a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-globe\"></span> Site web</a>
                                        </li>
                                        {% block logout %}
                                
                                        {% endblock %}
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>    
                    {% endblock %}
                    
                </div>

                <div class=\"row\" style=\"margin-top: 50px;\">
                    
                    {% block menuLeft %}

                    {% endblock %}            
                
                    {% block contenu %}

                    {% endblock %}
                </div>
            {% endblock %}
        </div>            
    </body>
    <script type=\"text/javascript\" src=\" {{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/bower_components/jquery/jquery.min.js') }}\"></script>
    
    <script type=\"text/javascript\" src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    
    <script type=\"text/javascript\" src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/bower_components/datatables/media/js/jquery.dataTables.js')}}\"></script>
    
    <script type=\"text/javascript\" src=\" {{ app.request.schemeAndHttpHost ~ asset('bundles/couturegestion/js/style.js') }}\"></script>
    
    <script>
            \$(document).ready(function(){
                        \$('.dropdown-toggle').dropdown();
                        \$('#mytable').DataTable();
                    });    
    </script>
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
</html>";
    }
}
