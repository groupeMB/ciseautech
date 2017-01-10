<?php

/* CoutureGestionBundle:Couture:addCommande.html.twig */
class __TwigTemplate_fd86df51ee517429ea9fa7647f934898aa3478555e21b8987d5bbef6d92daf8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle:Couture:index.html.twig", "CoutureGestionBundle:Couture:addCommande.html.twig", 1);
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
        $__internal_793ecf46e5155090cd86d0cf29c5c9bfe1b53476e4cfe1679cd314fe77f12eb7 = $this->env->getExtension("native_profiler");
        $__internal_793ecf46e5155090cd86d0cf29c5c9bfe1b53476e4cfe1679cd314fe77f12eb7->enter($__internal_793ecf46e5155090cd86d0cf29c5c9bfe1b53476e4cfe1679cd314fe77f12eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoutureGestionBundle:Couture:addCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_793ecf46e5155090cd86d0cf29c5c9bfe1b53476e4cfe1679cd314fe77f12eb7->leave($__internal_793ecf46e5155090cd86d0cf29c5c9bfe1b53476e4cfe1679cd314fe77f12eb7_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_dec3598021a16693fa3b4d4e361f3b16533523c04409bb175ea0894a460b581b = $this->env->getExtension("native_profiler");
        $__internal_dec3598021a16693fa3b4d4e361f3b16533523c04409bb175ea0894a460b581b->enter($__internal_dec3598021a16693fa3b4d4e361f3b16533523c04409bb175ea0894a460b581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-md-9\">
        \t<center><h4 class=\"panel-heading alert-danger\">Formulaire d'ajout d'une nouvelle commande</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\"><center><h4>Nouveau client</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_new_add_commande");
        echo "\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\"><center><h4>Client potentiel</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("couture_gestion_couture_potential_add_commande");
        echo "\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            
            
        </div>
    </div>
";
        
        $__internal_dec3598021a16693fa3b4d4e361f3b16533523c04409bb175ea0894a460b581b->leave($__internal_dec3598021a16693fa3b4d4e361f3b16533523c04409bb175ea0894a460b581b_prof);

    }

    public function getTemplateName()
    {
        return "CoutureGestionBundle:Couture:addCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle:Couture:index.html.twig\" %}
{% block main %}
    <div class=\"row\">
        <div class=\"col-md-9\">
        \t<center><h4 class=\"panel-heading alert-danger\">Formulaire d'ajout d'une nouvelle commande</h4></center>
            <hr class=\"colorgraph\">
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\"><center><h4>Nouveau client</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"{{ path(\"couture_gestion_couture_new_add_commande\")}}\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-success btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\"><center><h4>Client potentiel</h4></center></div>
                    <div class=\"panel-body\">
                        <a href=\"{{ path(\"couture_gestion_couture_potential_add_commande\")}}\" class=\"list-group-item\"><button type=\"button\" class=\"btn btn-danger btn-block\"><span class=\"glyphicon glyphicon-plus\"></span> Nouvelle Commande</button></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            
            
        </div>
    </div>
{% endblock %}";
    }
}
