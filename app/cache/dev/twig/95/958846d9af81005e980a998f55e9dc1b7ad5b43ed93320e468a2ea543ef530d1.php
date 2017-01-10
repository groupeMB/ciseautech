<?php

/* CoutureGestionBundle::template1.html.twig */
class __TwigTemplate_d0280a37faf86943224b5c5ba27a0b065d000ac163fc58dd310425942d70ea63 extends Twig_Template
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
        $__internal_2fa6636d97691304128a66c260bbfffe7eb0da7d3fab9211299870713cfc8cb2 = $this->env->getExtension("native_profiler");
        $__internal_2fa6636d97691304128a66c260bbfffe7eb0da7d3fab9211299870713cfc8cb2->enter($__internal_2fa6636d97691304128a66c260bbfffe7eb0da7d3fab9211299870713cfc8cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle::template1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fa6636d97691304128a66c260bbfffe7eb0da7d3fab9211299870713cfc8cb2->leave($__internal_2fa6636d97691304128a66c260bbfffe7eb0da7d3fab9211299870713cfc8cb2_prof);

    }

    // line 2
    public function block_entete($context, array $blocks = array())
    {
        $__internal_4e379fe10dccc44e1cb93e0019e9ed31748d34f15e957ca28f3b28e75122c183 = $this->env->getExtension("native_profiler");
        $__internal_4e379fe10dccc44e1cb93e0019e9ed31748d34f15e957ca28f3b28e75122c183->enter($__internal_4e379fe10dccc44e1cb93e0019e9ed31748d34f15e957ca28f3b28e75122c183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 3
        echo "
";
        
        $__internal_4e379fe10dccc44e1cb93e0019e9ed31748d34f15e957ca28f3b28e75122c183->leave($__internal_4e379fe10dccc44e1cb93e0019e9ed31748d34f15e957ca28f3b28e75122c183_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_39c983f2af8463fb1f6f92ff77253c4e9313c95e6c24af3ea4e0d39b4f7aedff = $this->env->getExtension("native_profiler");
        $__internal_39c983f2af8463fb1f6f92ff77253c4e9313c95e6c24af3ea4e0d39b4f7aedff->enter($__internal_39c983f2af8463fb1f6f92ff77253c4e9313c95e6c24af3ea4e0d39b4f7aedff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) {
            // line 8
            echo "        <span class=\"navbar-brand\" style=\"color: white\" href=\"#\">Bienvenue kalidou</span>
    ";
        }
        
        $__internal_39c983f2af8463fb1f6f92ff77253c4e9313c95e6c24af3ea4e0d39b4f7aedff->leave($__internal_39c983f2af8463fb1f6f92ff77253c4e9313c95e6c24af3ea4e0d39b4f7aedff_prof);

    }

    // line 12
    public function block_logout($context, array $blocks = array())
    {
        $__internal_6a0791fa2659f77909d0330803b9c4e97641b45e8876e654367e868d149a1dda = $this->env->getExtension("native_profiler");
        $__internal_6a0791fa2659f77909d0330803b9c4e97641b45e8876e654367e868d149a1dda->enter($__internal_6a0791fa2659f77909d0330803b9c4e97641b45e8876e654367e868d149a1dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

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
        
        $__internal_6a0791fa2659f77909d0330803b9c4e97641b45e8876e654367e868d149a1dda->leave($__internal_6a0791fa2659f77909d0330803b9c4e97641b45e8876e654367e868d149a1dda_prof);

    }

    // line 90
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_5ad381c930815e22043f5413d6dc25d1a4dbd1334247218f046ebd1720b16a37 = $this->env->getExtension("native_profiler");
        $__internal_5ad381c930815e22043f5413d6dc25d1a4dbd1334247218f046ebd1720b16a37->enter($__internal_5ad381c930815e22043f5413d6dc25d1a4dbd1334247218f046ebd1720b16a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

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
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Commandes </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Clientèle</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Modèles</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Mesures</a></span>
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
        // line 204
        $this->displayBlock('statistique', $context, $blocks);
        // line 207
        echo "                        ";
        $this->displayBlock('download', $context, $blocks);
        // line 209
        echo " 
                        ";
        // line 210
        $this->displayBlock('legende', $context, $blocks);
        // line 229
        echo "                    </ul>             
                </div>  
            </div>
            </nav>
        </div>
    </div>
";
        
        $__internal_5ad381c930815e22043f5413d6dc25d1a4dbd1334247218f046ebd1720b16a37->leave($__internal_5ad381c930815e22043f5413d6dc25d1a4dbd1334247218f046ebd1720b16a37_prof);

    }

    // line 204
    public function block_statistique($context, array $blocks = array())
    {
        $__internal_2e87d729b5c2cc78df9889510b178d9e4ac00fe5db94f6c02edc9e201ce13d59 = $this->env->getExtension("native_profiler");
        $__internal_2e87d729b5c2cc78df9889510b178d9e4ac00fe5db94f6c02edc9e201ce13d59->enter($__internal_2e87d729b5c2cc78df9889510b178d9e4ac00fe5db94f6c02edc9e201ce13d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "statistique"));

        // line 205
        echo "                            
                        ";
        
        $__internal_2e87d729b5c2cc78df9889510b178d9e4ac00fe5db94f6c02edc9e201ce13d59->leave($__internal_2e87d729b5c2cc78df9889510b178d9e4ac00fe5db94f6c02edc9e201ce13d59_prof);

    }

    // line 207
    public function block_download($context, array $blocks = array())
    {
        $__internal_e837e6327f3234abeba6881324f64bc2e423b2b596eaa036f79b41d353331440 = $this->env->getExtension("native_profiler");
        $__internal_e837e6327f3234abeba6881324f64bc2e423b2b596eaa036f79b41d353331440->enter($__internal_e837e6327f3234abeba6881324f64bc2e423b2b596eaa036f79b41d353331440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "download"));

        echo " 
                            
                        ";
        
        $__internal_e837e6327f3234abeba6881324f64bc2e423b2b596eaa036f79b41d353331440->leave($__internal_e837e6327f3234abeba6881324f64bc2e423b2b596eaa036f79b41d353331440_prof);

    }

    // line 210
    public function block_legende($context, array $blocks = array())
    {
        $__internal_dd1b96e270c2a9b483204933abc60d6c057ebf66b084cbf8b40b14b5842a858a = $this->env->getExtension("native_profiler");
        $__internal_dd1b96e270c2a9b483204933abc60d6c057ebf66b084cbf8b40b14b5842a858a->enter($__internal_dd1b96e270c2a9b483204933abc60d6c057ebf66b084cbf8b40b14b5842a858a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "legende"));

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
        
        $__internal_dd1b96e270c2a9b483204933abc60d6c057ebf66b084cbf8b40b14b5842a858a->leave($__internal_dd1b96e270c2a9b483204933abc60d6c057ebf66b084cbf8b40b14b5842a858a_prof);

    }

    // line 237
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8302201d945640eab32e27c4280f70115cdce146498d26f78af6380d9a62148e = $this->env->getExtension("native_profiler");
        $__internal_8302201d945640eab32e27c4280f70115cdce146498d26f78af6380d9a62148e->enter($__internal_8302201d945640eab32e27c4280f70115cdce146498d26f78af6380d9a62148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        // line 272
        $this->displayBlock('main', $context, $blocks);
        // line 275
        echo "        </div> 
    </div>
        
    </div>
";
        
        $__internal_8302201d945640eab32e27c4280f70115cdce146498d26f78af6380d9a62148e->leave($__internal_8302201d945640eab32e27c4280f70115cdce146498d26f78af6380d9a62148e_prof);

    }

    // line 272
    public function block_main($context, array $blocks = array())
    {
        $__internal_a974501ef75f54963a182b1c7910ea24d942e78d74a8d6ed2b6036cca8c0a2b0 = $this->env->getExtension("native_profiler");
        $__internal_a974501ef75f54963a182b1c7910ea24d942e78d74a8d6ed2b6036cca8c0a2b0->enter($__internal_a974501ef75f54963a182b1c7910ea24d942e78d74a8d6ed2b6036cca8c0a2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 273
        echo "
                ";
        
        $__internal_a974501ef75f54963a182b1c7910ea24d942e78d74a8d6ed2b6036cca8c0a2b0->leave($__internal_a974501ef75f54963a182b1c7910ea24d942e78d74a8d6ed2b6036cca8c0a2b0_prof);

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
        return array (  445 => 273,  439 => 272,  428 => 275,  426 => 272,  384 => 237,  354 => 210,  340 => 207,  332 => 205,  326 => 204,  313 => 229,  311 => 210,  308 => 209,  305 => 207,  303 => 204,  188 => 91,  182 => 90,  173 => 85,  165 => 81,  158 => 76,  150 => 72,  144 => 69,  139 => 67,  133 => 63,  131 => 62,  80 => 13,  74 => 12,  65 => 8,  62 => 7,  56 => 6,  48 => 3,  42 => 2,  11 => 1,);
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
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-list-alt\"></i> Commandes </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"\"><i class=\"glyphicon glyphicon-calendar\"></i> Clientèle</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Modèles</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Mesures</a></span>
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
