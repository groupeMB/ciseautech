<?php

/* CoutureGestionBundle::template.html.twig */
class __TwigTemplate_0941cf6819468abb7a259ff74864072b1a27232f9205c8c1dc0fb967b886d337 extends Twig_Template
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
        $__internal_ad7999d27a31efbc2f516c8331a07af774083f116b2b1a2594b74d5c7a9510f0 = $this->env->getExtension("native_profiler");
        $__internal_ad7999d27a31efbc2f516c8331a07af774083f116b2b1a2594b74d5c7a9510f0->enter($__internal_ad7999d27a31efbc2f516c8331a07af774083f116b2b1a2594b74d5c7a9510f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle::template.html.twig"));

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
        
        $__internal_ad7999d27a31efbc2f516c8331a07af774083f116b2b1a2594b74d5c7a9510f0->leave($__internal_ad7999d27a31efbc2f516c8331a07af774083f116b2b1a2594b74d5c7a9510f0_prof);

    }

    // line 25
    public function block_corps($context, array $blocks = array())
    {
        $__internal_6bfa90bc9af84e222f2b194005de49b30945307a3f8853f34a43c0482dcb1b13 = $this->env->getExtension("native_profiler");
        $__internal_6bfa90bc9af84e222f2b194005de49b30945307a3f8853f34a43c0482dcb1b13->enter($__internal_6bfa90bc9af84e222f2b194005de49b30945307a3f8853f34a43c0482dcb1b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
        
        $__internal_6bfa90bc9af84e222f2b194005de49b30945307a3f8853f34a43c0482dcb1b13->leave($__internal_6bfa90bc9af84e222f2b194005de49b30945307a3f8853f34a43c0482dcb1b13_prof);

    }

    // line 26
    public function block_menuHaut($context, array $blocks = array())
    {
        $__internal_cae47a7b9b73fe3e2be51f06e0c99b2fd9178bc8432d0d475147b8ba79615b76 = $this->env->getExtension("native_profiler");
        $__internal_cae47a7b9b73fe3e2be51f06e0c99b2fd9178bc8432d0d475147b8ba79615b76->enter($__internal_cae47a7b9b73fe3e2be51f06e0c99b2fd9178bc8432d0d475147b8ba79615b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHaut"));

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
        
        $__internal_cae47a7b9b73fe3e2be51f06e0c99b2fd9178bc8432d0d475147b8ba79615b76->leave($__internal_cae47a7b9b73fe3e2be51f06e0c99b2fd9178bc8432d0d475147b8ba79615b76_prof);

    }

    // line 28
    public function block_titre($context, array $blocks = array())
    {
        $__internal_2d377f986d5d5b5c9a9f31d49e1da963ea05b191f20f6b5b44f73c7bc7e508eb = $this->env->getExtension("native_profiler");
        $__internal_2d377f986d5d5b5c9a9f31d49e1da963ea05b191f20f6b5b44f73c7bc7e508eb->enter($__internal_2d377f986d5d5b5c9a9f31d49e1da963ea05b191f20f6b5b44f73c7bc7e508eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 29
        echo "
                            ";
        
        $__internal_2d377f986d5d5b5c9a9f31d49e1da963ea05b191f20f6b5b44f73c7bc7e508eb->leave($__internal_2d377f986d5d5b5c9a9f31d49e1da963ea05b191f20f6b5b44f73c7bc7e508eb_prof);

    }

    // line 41
    public function block_entete($context, array $blocks = array())
    {
        $__internal_46560559a105a427cea8573728d69478beddd58f388fb6ec27c22e3a791a2b86 = $this->env->getExtension("native_profiler");
        $__internal_46560559a105a427cea8573728d69478beddd58f388fb6ec27c22e3a791a2b86->enter($__internal_46560559a105a427cea8573728d69478beddd58f388fb6ec27c22e3a791a2b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        echo "<img src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/couturegestion/images/logo.png")), "html", null, true);
        echo "\" alt=\"\" width=\"70%\" id=\"logo\">";
        
        $__internal_46560559a105a427cea8573728d69478beddd58f388fb6ec27c22e3a791a2b86->leave($__internal_46560559a105a427cea8573728d69478beddd58f388fb6ec27c22e3a791a2b86_prof);

    }

    // line 56
    public function block_logout($context, array $blocks = array())
    {
        $__internal_0132daadabc991372ce96195f5acceef89b4100e69d0c3b0352ffb605dedadd6 = $this->env->getExtension("native_profiler");
        $__internal_0132daadabc991372ce96195f5acceef89b4100e69d0c3b0352ffb605dedadd6->enter($__internal_0132daadabc991372ce96195f5acceef89b4100e69d0c3b0352ffb605dedadd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 57
        echo "                                
                                        ";
        
        $__internal_0132daadabc991372ce96195f5acceef89b4100e69d0c3b0352ffb605dedadd6->leave($__internal_0132daadabc991372ce96195f5acceef89b4100e69d0c3b0352ffb605dedadd6_prof);

    }

    // line 71
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_55a75161f1d2e5c2184d29675dd361143772d192cabc7136d11a14662d26305e = $this->env->getExtension("native_profiler");
        $__internal_55a75161f1d2e5c2184d29675dd361143772d192cabc7136d11a14662d26305e->enter($__internal_55a75161f1d2e5c2184d29675dd361143772d192cabc7136d11a14662d26305e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 72
        echo "
                    ";
        
        $__internal_55a75161f1d2e5c2184d29675dd361143772d192cabc7136d11a14662d26305e->leave($__internal_55a75161f1d2e5c2184d29675dd361143772d192cabc7136d11a14662d26305e_prof);

    }

    // line 75
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0d911028af94a0440e60f37bd02aef914d0b8a845ee541bf4bf1515c617a96fd = $this->env->getExtension("native_profiler");
        $__internal_0d911028af94a0440e60f37bd02aef914d0b8a845ee541bf4bf1515c617a96fd->enter($__internal_0d911028af94a0440e60f37bd02aef914d0b8a845ee541bf4bf1515c617a96fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 76
        echo "
                    ";
        
        $__internal_0d911028af94a0440e60f37bd02aef914d0b8a845ee541bf4bf1515c617a96fd->leave($__internal_0d911028af94a0440e60f37bd02aef914d0b8a845ee541bf4bf1515c617a96fd_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle::template.html.twig";
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
