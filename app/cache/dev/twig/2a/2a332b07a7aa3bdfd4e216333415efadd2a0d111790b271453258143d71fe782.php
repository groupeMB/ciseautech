<?php

/* @CoutureGestion/template1.html.twig */
class __TwigTemplate_66c5d0329bf6053257dcc1699ff7c637682961277a160a4519d586329d492669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template.html.twig", "@CoutureGestion/template1.html.twig", 1);
        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'titre' => array($this, 'block_titre'),
            'logout' => array($this, 'block_logout'),
            'menuLeft' => array($this, 'block_menuLeft'),
            'statistique' => array($this, 'block_statistique'),
            'download' => array($this, 'block_download'),
            'legende' => array($this, 'block_legende'),
            'contenu' => array($this, 'block_contenu'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoutureGestionBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4272902f81bf0be1c4685509f66549a7185919efe79ac511859cd182e5ee6c6 = $this->env->getExtension("native_profiler");
        $__internal_c4272902f81bf0be1c4685509f66549a7185919efe79ac511859cd182e5ee6c6->enter($__internal_c4272902f81bf0be1c4685509f66549a7185919efe79ac511859cd182e5ee6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/template1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4272902f81bf0be1c4685509f66549a7185919efe79ac511859cd182e5ee6c6->leave($__internal_c4272902f81bf0be1c4685509f66549a7185919efe79ac511859cd182e5ee6c6_prof);

    }

    // line 2
    public function block_entete($context, array $blocks = array())
    {
        $__internal_018c2b506ef61a763fdf8edaa71010d329dfd78360481e1fa8e6d9406921c609 = $this->env->getExtension("native_profiler");
        $__internal_018c2b506ef61a763fdf8edaa71010d329dfd78360481e1fa8e6d9406921c609->enter($__internal_018c2b506ef61a763fdf8edaa71010d329dfd78360481e1fa8e6d9406921c609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 3
        echo "
";
        
        $__internal_018c2b506ef61a763fdf8edaa71010d329dfd78360481e1fa8e6d9406921c609->leave($__internal_018c2b506ef61a763fdf8edaa71010d329dfd78360481e1fa8e6d9406921c609_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_bfa8d1f49a697393ea540732c65f72311c9e862a6ce6507ee3ab4df002fe05d2 = $this->env->getExtension("native_profiler");
        $__internal_bfa8d1f49a697393ea540732c65f72311c9e862a6ce6507ee3ab4df002fe05d2->enter($__internal_bfa8d1f49a697393ea540732c65f72311c9e862a6ce6507ee3ab4df002fe05d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) {
            // line 8
            echo "        <span class=\"navbar-brand\" style=\"color: white\" href=\"#\">Bienvenue kalidou</span>
    ";
        }
        
        $__internal_bfa8d1f49a697393ea540732c65f72311c9e862a6ce6507ee3ab4df002fe05d2->leave($__internal_bfa8d1f49a697393ea540732c65f72311c9e862a6ce6507ee3ab4df002fe05d2_prof);

    }

    // line 12
    public function block_logout($context, array $blocks = array())
    {
        $__internal_6d11d346f4c697013e50b545dab6b957f92a229642f21a12cfc4a312ab7f06b2 = $this->env->getExtension("native_profiler");
        $__internal_6d11d346f4c697013e50b545dab6b957f92a229642f21a12cfc4a312ab7f06b2->enter($__internal_6d11d346f4c697013e50b545dab6b957f92a229642f21a12cfc4a312ab7f06b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 13
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-envelope\"></span><span class=\"caret\"></span></a>
         <ul class=\"dropdown-menu dropdown-messages\">
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Simon DIOUF</strong>
                        <span class=\"pull-right text-muted\">
                            <em>Hier</em>
                        </span>
                    </div>
                    <div>Bonjour J'aimerais commander 2 Boites de doliprane et... </div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Ibrahima BA </strong>
                        <span class=\"pull-right text-muted\">
                            <em>5 octobre 2016</em>
                        </span>
                    </div>
                    <div>Est-ce que vous avez des complements alimentaires ?</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Bassirou NGOM</strong>
                        <span class=\"pull-right text-muted\">
                            <em>17 Mai 2016</em>
                        </span>
                    </div>
                    <div>Avez vous un medicament pour faire maigrir une personne...</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a class=\"text-center\" href=\"#\">
                    <strong>Tous les Messages</strong>
                    <i class=\"glyphicon glyphicon-arrow-right\"></i>
                </a>
            </li>
        </ul>
    </li>

    ";
        // line 62
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 63
            echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
       <ul class=\"dropdown-menu dropdown-user\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-user\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " </a>
            </li>
            <li><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\"><i class=\"glyphicon glyphicon-wrench\"></i> réglages</a>
            </li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"glyphicon glyphicon-log-out\"></i> Se deconnecter</a>
            </li>
        </ul>
    </li> 
     ";
        } else {
            // line 76
            echo " 
        <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
           <ul class=\"dropdown-menu dropdown-user\">
                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"glyphicon glyphicon-log-in\"></i> Se connecter</a>
                </li>
            </ul>
    </li>
    ";
        }
        // line 85
        echo "   

";
        
        $__internal_6d11d346f4c697013e50b545dab6b957f92a229642f21a12cfc4a312ab7f06b2->leave($__internal_6d11d346f4c697013e50b545dab6b957f92a229642f21a12cfc4a312ab7f06b2_prof);

    }

    // line 90
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_b6ff7c29369cb88e4a7cc075b04e7c9b642c0f58afee3187067d13801cf19f72 = $this->env->getExtension("native_profiler");
        $__internal_b6ff7c29369cb88e4a7cc075b04e7c9b642c0f58afee3187067d13801cf19f72->enter($__internal_b6ff7c29369cb88e4a7cc075b04e7c9b642c0f58afee3187067d13801cf19f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 91
        echo "    <div style=\"margin-top: 0%\">
        <span class=\"btn btn-block\" id=\"buttonflot\" type=\"button\" onclick=\"menuflottant()\" style=\"width:18.5%; background-color: #01A9DB; color: white; border-radius: 0\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Glisser le menu</span>
        
        <div class=\"navbar-default sidebar\" role=\"navigation\" style=\"height: 100%; width:3%; background-color: #ed7d31; display: none; float: left\" id=\"menuCourt\">
            <table>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Physique\"><a href=\"#\"><button class=\" btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-shopping-cart\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Morale\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-barcode\"></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-book\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-stats\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-wrench\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-flag\" ></span></button></a></span>   
                </tr>
            </table>
        </div>
        <div id=\"flotMenu\" style=\"width: 18.5%; float: left;\" class=\"fixe\">
            <div class=\"sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav\">
                    <button class=\"btn btn-block alert-warning\" id=\"heure\"></button>
                    <ul class=\"nav menuLeft\" id=\"side-menu\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-scissors fa-fw\"></i> Couture
                                
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-shopping-cart fa-fw\"></i> Vente
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-money fa-fw\"></i> Comptabilité
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-cogs fa-fw\"></i> Paramétrage
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        
                        
                        
                        ";
        // line 192
        $this->displayBlock('statistique', $context, $blocks);
        // line 195
        echo "                        ";
        $this->displayBlock('download', $context, $blocks);
        // line 197
        echo " 
                        ";
        // line 198
        $this->displayBlock('legende', $context, $blocks);
        // line 217
        echo "                    </ul>             
                </div>  
            </div>
            </nav>
        </div>
    </div>
";
        
        $__internal_b6ff7c29369cb88e4a7cc075b04e7c9b642c0f58afee3187067d13801cf19f72->leave($__internal_b6ff7c29369cb88e4a7cc075b04e7c9b642c0f58afee3187067d13801cf19f72_prof);

    }

    // line 192
    public function block_statistique($context, array $blocks = array())
    {
        $__internal_835325bc39d5b9a646920601fa966420b8fec20735e4bf979cba3dba4b97f485 = $this->env->getExtension("native_profiler");
        $__internal_835325bc39d5b9a646920601fa966420b8fec20735e4bf979cba3dba4b97f485->enter($__internal_835325bc39d5b9a646920601fa966420b8fec20735e4bf979cba3dba4b97f485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "statistique"));

        // line 193
        echo "                            
                        ";
        
        $__internal_835325bc39d5b9a646920601fa966420b8fec20735e4bf979cba3dba4b97f485->leave($__internal_835325bc39d5b9a646920601fa966420b8fec20735e4bf979cba3dba4b97f485_prof);

    }

    // line 195
    public function block_download($context, array $blocks = array())
    {
        $__internal_7f416932c32ebb66b1b3be3bb2cfa0eda3b441b245a69160b11b606f1684dbc3 = $this->env->getExtension("native_profiler");
        $__internal_7f416932c32ebb66b1b3be3bb2cfa0eda3b441b245a69160b11b606f1684dbc3->enter($__internal_7f416932c32ebb66b1b3be3bb2cfa0eda3b441b245a69160b11b606f1684dbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "download"));

        echo " 
                            
                        ";
        
        $__internal_7f416932c32ebb66b1b3be3bb2cfa0eda3b441b245a69160b11b606f1684dbc3->leave($__internal_7f416932c32ebb66b1b3be3bb2cfa0eda3b441b245a69160b11b606f1684dbc3_prof);

    }

    // line 198
    public function block_legende($context, array $blocks = array())
    {
        $__internal_54cf0135364908e57bc4b6fe0530cee51d2e3a1d3e30b6153a925fa75f7f2346 = $this->env->getExtension("native_profiler");
        $__internal_54cf0135364908e57bc4b6fe0530cee51d2e3a1d3e30b6153a925fa75f7f2346->enter($__internal_54cf0135364908e57bc4b6fe0530cee51d2e3a1d3e30b6153a925fa75f7f2346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "legende"));

        echo "    
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                    <i class=\"fa fa-flag-checkered fa-fw\"></i> Légendes <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                                </a>
                                <ul class=\"dropdown-menu legende\">
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont erronées ou manquantes. Dans ce cas, il vous faudra opérer des modifications dans SAF afin que l'enregistrement puisse être valide.\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\" ></span></button> Suppresion</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont valides\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\" ></span></button> Edition</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone permet de télécharger la fiche de consentement personnalisée du client\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-download\" ></span></button> Visualisation</span>   
                                    </li>
                                    
                                </ul>
                            </li>
                        ";
        
        $__internal_54cf0135364908e57bc4b6fe0530cee51d2e3a1d3e30b6153a925fa75f7f2346->leave($__internal_54cf0135364908e57bc4b6fe0530cee51d2e3a1d3e30b6153a925fa75f7f2346_prof);

    }

    // line 225
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2ceb9768238d0d641501db7e2ed22da72bac192763567ee8b9abf4532bc241e4 = $this->env->getExtension("native_profiler");
        $__internal_2ceb9768238d0d641501db7e2ed22da72bac192763567ee8b9abf4532bc241e4->enter($__internal_2ceb9768238d0d641501db7e2ed22da72bac192763567ee8b9abf4532bc241e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo "     
    <div id=\"contenuflot\" style=\"width: 79%; float:right;\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-warning\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-12\">
                
                ";
        // line 260
        $this->displayBlock('main', $context, $blocks);
        // line 263
        echo "        </div> 
    </div>
        
    </div>
";
        
        $__internal_2ceb9768238d0d641501db7e2ed22da72bac192763567ee8b9abf4532bc241e4->leave($__internal_2ceb9768238d0d641501db7e2ed22da72bac192763567ee8b9abf4532bc241e4_prof);

    }

    // line 260
    public function block_main($context, array $blocks = array())
    {
        $__internal_feb76766be21150b3d26c8eedb97a0e4299a7cf03c5cf1ad7b752039133818ca = $this->env->getExtension("native_profiler");
        $__internal_feb76766be21150b3d26c8eedb97a0e4299a7cf03c5cf1ad7b752039133818ca->enter($__internal_feb76766be21150b3d26c8eedb97a0e4299a7cf03c5cf1ad7b752039133818ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 261
        echo "
                ";
        
        $__internal_feb76766be21150b3d26c8eedb97a0e4299a7cf03c5cf1ad7b752039133818ca->leave($__internal_feb76766be21150b3d26c8eedb97a0e4299a7cf03c5cf1ad7b752039133818ca_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/template1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 261,  427 => 260,  416 => 263,  414 => 260,  372 => 225,  342 => 198,  328 => 195,  320 => 193,  314 => 192,  301 => 217,  299 => 198,  296 => 197,  293 => 195,  291 => 192,  188 => 91,  182 => 90,  173 => 85,  165 => 81,  158 => 76,  150 => 72,  144 => 69,  139 => 67,  133 => 63,  131 => 62,  80 => 13,  74 => 12,  65 => 8,  62 => 7,  56 => 6,  48 => 3,  42 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle::template.html.twig\" %}
{% block entete%}

{%endblock%}

{% block titre %}
    {% if app.user is defined  %}
        <span class=\"navbar-brand\" style=\"color: white\" href=\"#\">Bienvenue kalidou</span>
    {% endif %}
{% endblock %}

{% block logout %}

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-envelope\"></span><span class=\"caret\"></span></a>
         <ul class=\"dropdown-menu dropdown-messages\">
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Simon DIOUF</strong>
                        <span class=\"pull-right text-muted\">
                            <em>Hier</em>
                        </span>
                    </div>
                    <div>Bonjour J'aimerais commander 2 Boites de doliprane et... </div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Ibrahima BA </strong>
                        <span class=\"pull-right text-muted\">
                            <em>5 octobre 2016</em>
                        </span>
                    </div>
                    <div>Est-ce que vous avez des complements alimentaires ?</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Bassirou NGOM</strong>
                        <span class=\"pull-right text-muted\">
                            <em>17 Mai 2016</em>
                        </span>
                    </div>
                    <div>Avez vous un medicament pour faire maigrir une personne...</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a class=\"text-center\" href=\"#\">
                    <strong>Tous les Messages</strong>
                    <i class=\"glyphicon glyphicon-arrow-right\"></i>
                </a>
            </li>
        </ul>
    </li>

    {% if app.user%}

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
       <ul class=\"dropdown-menu dropdown-user\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-user\"></i> {{app.user}} </a>
            </li>
            <li><a href=\"{{path('fos_user_profile_edit')}}\"><i class=\"glyphicon glyphicon-wrench\"></i> réglages</a>
            </li>
            <li class=\"divider\"></li>
            <li><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"glyphicon glyphicon-log-out\"></i> Se deconnecter</a>
            </li>
        </ul>
    </li> 
     {% else%} 
        <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
           <ul class=\"dropdown-menu dropdown-user\">
                <li class=\"divider\"></li>
                <li><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"glyphicon glyphicon-log-in\"></i> Se connecter</a>
                </li>
            </ul>
    </li>
    {% endif%}   

{% endblock %}


{% block menuLeft %}
    <div style=\"margin-top: 0%\">
        <span class=\"btn btn-block\" id=\"buttonflot\" type=\"button\" onclick=\"menuflottant()\" style=\"width:18.5%; background-color: #01A9DB; color: white; border-radius: 0\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Glisser le menu</span>
        
        <div class=\"navbar-default sidebar\" role=\"navigation\" style=\"height: 100%; width:3%; background-color: #ed7d31; display: none; float: left\" id=\"menuCourt\">
            <table>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Physique\"><a href=\"#\"><button class=\" btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-shopping-cart\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Morale\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-barcode\"></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-book\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-stats\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-wrench\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-flag\" ></span></button></a></span>   
                </tr>
            </table>
        </div>
        <div id=\"flotMenu\" style=\"width: 18.5%; float: left;\" class=\"fixe\">
            <div class=\"sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav\">
                    <button class=\"btn btn-block alert-warning\" id=\"heure\"></button>
                    <ul class=\"nav menuLeft\" id=\"side-menu\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-scissors fa-fw\"></i> Couture
                                
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-shopping-cart fa-fw\"></i> Vente
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-money fa-fw\"></i> Comptabilité
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-cogs fa-fw\"></i> Paramétrage
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        
                        
                        
                        {% block statistique %}
                            
                        {% endblock %}
                        {% block download %} 
                            
                        {% endblock %} 
                        {% block legende %}    
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                    <i class=\"fa fa-flag-checkered fa-fw\"></i> Légendes <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                                </a>
                                <ul class=\"dropdown-menu legende\">
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont erronées ou manquantes. Dans ce cas, il vous faudra opérer des modifications dans SAF afin que l'enregistrement puisse être valide.\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\" ></span></button> Suppresion</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont valides\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\" ></span></button> Edition</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone permet de télécharger la fiche de consentement personnalisée du client\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-download\" ></span></button> Visualisation</span>   
                                    </li>
                                    
                                </ul>
                            </li>
                        {% endblock %}
                    </ul>             
                </div>  
            </div>
            </nav>
        </div>
    </div>
{%endblock%}

{% block contenu %}     
    <div id=\"contenuflot\" style=\"width: 79%; float:right;\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-warning\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-12\">
                
                {% block main %}

                {% endblock %}
        </div> 
    </div>
        
    </div>
{% endblock %}
";
    }
}
