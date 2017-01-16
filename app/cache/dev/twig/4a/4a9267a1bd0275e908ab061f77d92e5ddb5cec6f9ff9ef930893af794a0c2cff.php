<?php

/* CoutureGestionBundle::template1.html.twig */
class __TwigTemplate_b6c30f9a06e9649b5c3d177bf7b314f02ec161224e19142aeed756d3ef9bde95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template.html.twig", "CoutureGestionBundle::template1.html.twig", 1);
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
        $__internal_78fe36b088d2ab8d883882819cf06b01e34e0203520639102dad04a376555ab6 = $this->env->getExtension("native_profiler");
        $__internal_78fe36b088d2ab8d883882819cf06b01e34e0203520639102dad04a376555ab6->enter($__internal_78fe36b088d2ab8d883882819cf06b01e34e0203520639102dad04a376555ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle::template1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fe36b088d2ab8d883882819cf06b01e34e0203520639102dad04a376555ab6->leave($__internal_78fe36b088d2ab8d883882819cf06b01e34e0203520639102dad04a376555ab6_prof);

    }

    // line 2
    public function block_entete($context, array $blocks = array())
    {
        $__internal_fee8121808f1058275a7e38566971afca326db76c7217a027a6e63079a8c21d4 = $this->env->getExtension("native_profiler");
        $__internal_fee8121808f1058275a7e38566971afca326db76c7217a027a6e63079a8c21d4->enter($__internal_fee8121808f1058275a7e38566971afca326db76c7217a027a6e63079a8c21d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 3
        echo "
";
        
        $__internal_fee8121808f1058275a7e38566971afca326db76c7217a027a6e63079a8c21d4->leave($__internal_fee8121808f1058275a7e38566971afca326db76c7217a027a6e63079a8c21d4_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a003b4ba736b2a94ea7871650de0c476c2a9927c849a05319b686802d92cb022 = $this->env->getExtension("native_profiler");
        $__internal_a003b4ba736b2a94ea7871650de0c476c2a9927c849a05319b686802d92cb022->enter($__internal_a003b4ba736b2a94ea7871650de0c476c2a9927c849a05319b686802d92cb022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) {
            // line 8
            echo "        <span class=\"navbar-brand\" style=\"color: white\" href=\"#\">Bienvenue kalidou</span>
    ";
        }
        
        $__internal_a003b4ba736b2a94ea7871650de0c476c2a9927c849a05319b686802d92cb022->leave($__internal_a003b4ba736b2a94ea7871650de0c476c2a9927c849a05319b686802d92cb022_prof);

    }

    // line 12
    public function block_logout($context, array $blocks = array())
    {
        $__internal_37da0fefc02f229d82651791616f984723f9775d490abc92b2f3ae0d088d02aa = $this->env->getExtension("native_profiler");
        $__internal_37da0fefc02f229d82651791616f984723f9775d490abc92b2f3ae0d088d02aa->enter($__internal_37da0fefc02f229d82651791616f984723f9775d490abc92b2f3ae0d088d02aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

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
        
        $__internal_37da0fefc02f229d82651791616f984723f9775d490abc92b2f3ae0d088d02aa->leave($__internal_37da0fefc02f229d82651791616f984723f9775d490abc92b2f3ae0d088d02aa_prof);

    }

    // line 90
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_afaa7c4e86e95cf0f09eb3d2e9973249c25e7747e6c628f09c27a1a3e87076eb = $this->env->getExtension("native_profiler");
        $__internal_afaa7c4e86e95cf0f09eb3d2e9973249c25e7747e6c628f09c27a1a3e87076eb->enter($__internal_afaa7c4e86e95cf0f09eb3d2e9973249c25e7747e6c628f09c27a1a3e87076eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

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
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_commande");
        echo "\"><i class=\"glyphicon glyphicon-list-alt\"></i> Commandes </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_client_simple");
        echo "\"><i class=\"glyphicon glyphicon-calendar\"></i> Clientèle</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_add_modele");
        echo "\"><i class=\"glyphicon glyphicon-time\"></i> Modèles</a></span>
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
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"fa fa-history fa-fw\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"fa fa-gift\"></i> Promotion</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Stock</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Catégorie</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Produit</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette</a></span>
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
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Planification rappel </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Gestion utilisateur</a></span>
                                </li>
                            </ul>
                        </li>
                        
                        
                        
                        ";
        // line 201
        $this->displayBlock('statistique', $context, $blocks);
        // line 204
        echo "                        ";
        $this->displayBlock('download', $context, $blocks);
        // line 206
        echo " 
                        ";
        // line 207
        $this->displayBlock('legende', $context, $blocks);
        // line 226
        echo "                    </ul>             
                </div>  
            </div>
            </nav>
        </div>
    </div>
";
        
        $__internal_afaa7c4e86e95cf0f09eb3d2e9973249c25e7747e6c628f09c27a1a3e87076eb->leave($__internal_afaa7c4e86e95cf0f09eb3d2e9973249c25e7747e6c628f09c27a1a3e87076eb_prof);

    }

    // line 201
    public function block_statistique($context, array $blocks = array())
    {
        $__internal_fc5f6f0749a6119ca4201934a66dc1e5f2863aa21b37e964c1ebf7840a921281 = $this->env->getExtension("native_profiler");
        $__internal_fc5f6f0749a6119ca4201934a66dc1e5f2863aa21b37e964c1ebf7840a921281->enter($__internal_fc5f6f0749a6119ca4201934a66dc1e5f2863aa21b37e964c1ebf7840a921281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "statistique"));

        // line 202
        echo "                            
                        ";
        
        $__internal_fc5f6f0749a6119ca4201934a66dc1e5f2863aa21b37e964c1ebf7840a921281->leave($__internal_fc5f6f0749a6119ca4201934a66dc1e5f2863aa21b37e964c1ebf7840a921281_prof);

    }

    // line 204
    public function block_download($context, array $blocks = array())
    {
        $__internal_5541bac702b9206769dd8fbeb60ba534309b75fcb96155b597f5a673fc961f89 = $this->env->getExtension("native_profiler");
        $__internal_5541bac702b9206769dd8fbeb60ba534309b75fcb96155b597f5a673fc961f89->enter($__internal_5541bac702b9206769dd8fbeb60ba534309b75fcb96155b597f5a673fc961f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "download"));

        echo " 
                            
                        ";
        
        $__internal_5541bac702b9206769dd8fbeb60ba534309b75fcb96155b597f5a673fc961f89->leave($__internal_5541bac702b9206769dd8fbeb60ba534309b75fcb96155b597f5a673fc961f89_prof);

    }

    // line 207
    public function block_legende($context, array $blocks = array())
    {
        $__internal_deecf5474edf64f1d44fc3ffb6b7035a4071409614aef6bb0bbb331fca62affa = $this->env->getExtension("native_profiler");
        $__internal_deecf5474edf64f1d44fc3ffb6b7035a4071409614aef6bb0bbb331fca62affa->enter($__internal_deecf5474edf64f1d44fc3ffb6b7035a4071409614aef6bb0bbb331fca62affa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "legende"));

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
        
        $__internal_deecf5474edf64f1d44fc3ffb6b7035a4071409614aef6bb0bbb331fca62affa->leave($__internal_deecf5474edf64f1d44fc3ffb6b7035a4071409614aef6bb0bbb331fca62affa_prof);

    }

    // line 234
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6c034cc863dfd6b84a46c0a0478912e881476296374871f7ad7d367d9117b09c = $this->env->getExtension("native_profiler");
        $__internal_6c034cc863dfd6b84a46c0a0478912e881476296374871f7ad7d367d9117b09c->enter($__internal_6c034cc863dfd6b84a46c0a0478912e881476296374871f7ad7d367d9117b09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        // line 269
        $this->displayBlock('main', $context, $blocks);
        // line 272
        echo "        </div> 
    </div>
        
    </div>
";
        
        $__internal_6c034cc863dfd6b84a46c0a0478912e881476296374871f7ad7d367d9117b09c->leave($__internal_6c034cc863dfd6b84a46c0a0478912e881476296374871f7ad7d367d9117b09c_prof);

    }

    // line 269
    public function block_main($context, array $blocks = array())
    {
        $__internal_55a0a87148065909a41e57fe20190e848d90dc54a28d9c4cd780bd8a0532ad1d = $this->env->getExtension("native_profiler");
        $__internal_55a0a87148065909a41e57fe20190e848d90dc54a28d9c4cd780bd8a0532ad1d->enter($__internal_55a0a87148065909a41e57fe20190e848d90dc54a28d9c4cd780bd8a0532ad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 270
        echo "
                ";
        
        $__internal_55a0a87148065909a41e57fe20190e848d90dc54a28d9c4cd780bd8a0532ad1d->leave($__internal_55a0a87148065909a41e57fe20190e848d90dc54a28d9c4cd780bd8a0532ad1d_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle::template1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 270,  445 => 269,  434 => 272,  432 => 269,  390 => 234,  360 => 207,  346 => 204,  338 => 202,  332 => 201,  319 => 226,  317 => 207,  314 => 206,  311 => 204,  309 => 201,  239 => 134,  233 => 131,  227 => 128,  188 => 91,  182 => 90,  173 => 85,  165 => 81,  158 => 76,  150 => 72,  144 => 69,  139 => 67,  133 => 63,  131 => 62,  80 => 13,  74 => 12,  65 => 8,  62 => 7,  56 => 6,  48 => 3,  42 => 2,  11 => 1,);
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
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path('couture_gestion_couture_add_commande')}}\"><i class=\"glyphicon glyphicon-list-alt\"></i> Commandes </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path('couture_gestion_couture_add_client_simple') }}\"><i class=\"glyphicon glyphicon-calendar\"></i> Clientèle</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path('couture_gestion_couture_add_modele') }}\"><i class=\"glyphicon glyphicon-time\"></i> Modèles</a></span>
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
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"fa fa-history fa-fw\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"fa fa-gift\"></i> Promotion</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Stock</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Catégorie</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Produit</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette</a></span>
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
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Planification rappel </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Gestion utilisateur</a></span>
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
