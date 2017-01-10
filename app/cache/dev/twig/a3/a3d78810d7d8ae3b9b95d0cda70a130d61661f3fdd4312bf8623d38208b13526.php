<?php

/* @CoutureGestion/Security/login.html.twig */
class __TwigTemplate_9b9add4dd4f33bb4a6c9554317df3cd149cdf8b55949437bff13e3b9b64056e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoutureGestionBundle::template.html.twig", "@CoutureGestion/Security/login.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoutureGestionBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0e54362d29ff927889e9a345ecc4df74c29613b57455a0033739fd4461753e5 = $this->env->getExtension("native_profiler");
        $__internal_d0e54362d29ff927889e9a345ecc4df74c29613b57455a0033739fd4461753e5->enter($__internal_d0e54362d29ff927889e9a345ecc4df74c29613b57455a0033739fd4461753e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoutureGestion/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e54362d29ff927889e9a345ecc4df74c29613b57455a0033739fd4461753e5->leave($__internal_d0e54362d29ff927889e9a345ecc4df74c29613b57455a0033739fd4461753e5_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_27c6867004fed0868d903fe9109bb1cc530cc6fda77d5fd2dcf508273fe61de1 = $this->env->getExtension("native_profiler");
        $__internal_27c6867004fed0868d903fe9109bb1cc530cc6fda77d5fd2dcf508273fe61de1->enter($__internal_27c6867004fed0868d903fe9109bb1cc530cc6fda77d5fd2dcf508273fe61de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "    <br/><br/><br/><br/>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
\t<div class=\"container\">
\t\t<center>
\t\t    ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "\t\t    \t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t    ";
        }
        // line 17
        echo "\t    </center>
   </div >
\t<div class=\"container \" >
\t<div class=\"row\">
\t\t <div class=\"col-md-7 \" >
\t\t \t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\">
  \t\t\t\t\t<center><span class=\"glyphicon glyphicon-home\"></span> Pharmacie de l'espoir</center>
  \t\t\t\t</div>
  \t\t\t
\t  \t\t\t<div class=\"panel-body\">
\t  \t\t\t\t <div class=\"col-md-6 \" >
\t  \t\t\t\t \t\t<ul class=\"list-group\">
\t  \t\t\t\t\t\t\t<li class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\"></span> Pharmacien : Dr. Abdoul Ndiaye</li>
\t  \t\t\t\t\t\t\t<li class=\"list-group-item\"><span class=\"glyphicon glyphicon-map-marker\"></span> Adresse : Fann Hock</li>
\t  \t\t\t\t\t\t\t<li class=\"list-group-item\"><span class=\"glyphicon glyphicon-earphone\"></span> Telephone : +221 33 841 25 96</li>
\t\t\t\t\t\t\t</ul>
\t \t\t\t\t</div>
\t \t\t\t\t<div class=\"col-md-6\" >
\t \t\t\t\t\t<img style=\"max-width:95%; max-height:95%; background-size: cover\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmacieaccueil/images/pharma.jpg")), "html", null, true);
        echo "\" alt=\"image de la pharmacie\">
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"panel-footer\">Progestix everywhere. Assurez la gestion de votre pharmacie où que vous soyez.</div>
 \t\t\t</div>
\t\t </div> 

\t    <div class=\"col-md-5\">
\t    \t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\"><center><span class=\"glyphicon glyphicon-log-in\"></span> Accès à votre tableau de bord sécurisé</center></div>
  \t\t\t\t<div class=\"panel-body\">
\t\t   \t\t\t<form role=\"form\" action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t                    <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control input\" placeholder=\"Identifiant\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control input\" placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-link pull-right\">Mot de passe oublié?</a>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<hr class=\"colorgraph\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t                        <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Connexion\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-danger btn-block\">Reset</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>

\t\t\t  \t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\"><center><span class=\"glyphicon glyphicon-globe\"></span> Présentation de Progestix</center></div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<p class=\"text-justify\">PROGESTIX est un progiciel de gestion intégré dedié au secteur pharmaceutique. Il offre un cadre de travail qui allie performance et simplicité. Avec PROGESTIX, simplifiez votre qutoidien.</p>
  \t\t\t\t</div>
  \t\t\t\t<div class=\"panel-footer\">Progestix, une plateforme made in Sénégal <img style=\"float: right\" src=\"\" alt=\"image de la pharmacie\"></div>
  \t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\"><center><span class=\"glyphicon glyphicon-info-sign\"></span> Service Assistance 24h/24 7j/7</center></div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<p class=\"text-justify\">Pour toute assistance, veuillez contacter le service technique de progestix :<br>
  \t\t\t\t\t\t<span class=\"glyphicon glyphicon-phone-alt \"></span> +221 33 827 61 53 <span class=\"glyphicon glyphicon-phone\"></span> +221 77 069 30 57<br>
  \t\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span> support@progestix.com <br>
  \t\t\t\t\t</p>
  \t\t\t\t</div>
  \t\t\t\t<div class=\"panel-footer\">L'équipe Progestix vous remercie de votre fidélité.</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_27c6867004fed0868d903fe9109bb1cc530cc6fda77d5fd2dcf508273fe61de1->leave($__internal_27c6867004fed0868d903fe9109bb1cc530cc6fda77d5fd2dcf508273fe61de1_prof);

    }

    public function getTemplateName()
    {
        return "@CoutureGestion/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  106 => 36,  85 => 17,  79 => 15,  77 => 14,  72 => 11,  66 => 10,  57 => 7,  52 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"CoutureGestionBundle::template.html.twig\" %}
{% block contenu %}
    <br/><br/><br/><br/>
    {% for type, messages in app.session.flashBag.all %}
        {% for message in messages %}
            <div class=\"{{ type }}\">
                {{ message|trans({}, 'FOSUserBundle') }}
            </div>
        {% endfor %}
    {% endfor %}

\t<div class=\"container\">
\t\t<center>
\t\t    {% if error %}
\t\t    \t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t    {% endif %}
\t    </center>
   </div >
\t<div class=\"container \" >
\t<div class=\"row\">
\t\t <div class=\"col-md-7 \" >
\t\t \t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\">
  \t\t\t\t\t<center><span class=\"glyphicon glyphicon-home\"></span> Pharmacie de l'espoir</center>
  \t\t\t\t</div>
  \t\t\t
\t  \t\t\t<div class=\"panel-body\">
\t  \t\t\t\t <div class=\"col-md-6 \" >
\t  \t\t\t\t \t\t<ul class=\"list-group\">
\t  \t\t\t\t\t\t\t<li class=\"list-group-item\"><span class=\"glyphicon glyphicon-user\"></span> Pharmacien : Dr. Abdoul Ndiaye</li>
\t  \t\t\t\t\t\t\t<li class=\"list-group-item\"><span class=\"glyphicon glyphicon-map-marker\"></span> Adresse : Fann Hock</li>
\t  \t\t\t\t\t\t\t<li class=\"list-group-item\"><span class=\"glyphicon glyphicon-earphone\"></span> Telephone : +221 33 841 25 96</li>
\t\t\t\t\t\t\t</ul>
\t \t\t\t\t</div>
\t \t\t\t\t<div class=\"col-md-6\" >
\t \t\t\t\t\t<img style=\"max-width:95%; max-height:95%; background-size: cover\" src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/images/pharma.jpg') }}\" alt=\"image de la pharmacie\">
\t \t\t\t\t</div>
\t \t\t\t</div>
\t \t\t\t<div class=\"panel-footer\">Progestix everywhere. Assurez la gestion de votre pharmacie où que vous soyez.</div>
 \t\t\t</div>
\t\t </div> 

\t    <div class=\"col-md-5\">
\t    \t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\"><center><span class=\"glyphicon glyphicon-log-in\"></span> Accès à votre tableau de bord sécurisé</center></div>
  \t\t\t\t<div class=\"panel-body\">
\t\t   \t\t\t<form role=\"form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t                    <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control input\" placeholder=\"Identifiant\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t                    <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control input\" placeholder=\"Mot de passe\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-link pull-right\">Mot de passe oublié?</a>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<hr class=\"colorgraph\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t                        <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Connexion\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn btn-danger btn-block\">Reset</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>

\t\t\t  \t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\"><center><span class=\"glyphicon glyphicon-globe\"></span> Présentation de Progestix</center></div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<p class=\"text-justify\">PROGESTIX est un progiciel de gestion intégré dedié au secteur pharmaceutique. Il offre un cadre de travail qui allie performance et simplicité. Avec PROGESTIX, simplifiez votre qutoidien.</p>
  \t\t\t\t</div>
  \t\t\t\t<div class=\"panel-footer\">Progestix, une plateforme made in Sénégal <img style=\"float: right\" src=\"\" alt=\"image de la pharmacie\"></div>
  \t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"panel panel-success\">
  \t\t\t\t<div class=\"panel-heading\"><center><span class=\"glyphicon glyphicon-info-sign\"></span> Service Assistance 24h/24 7j/7</center></div>
  \t\t\t\t<div class=\"panel-body\">
  \t\t\t\t\t<p class=\"text-justify\">Pour toute assistance, veuillez contacter le service technique de progestix :<br>
  \t\t\t\t\t\t<span class=\"glyphicon glyphicon-phone-alt \"></span> +221 33 827 61 53 <span class=\"glyphicon glyphicon-phone\"></span> +221 77 069 30 57<br>
  \t\t\t\t\t\t<span class=\"glyphicon glyphicon-envelope\"></span> support@progestix.com <br>
  \t\t\t\t\t</p>
  \t\t\t\t</div>
  \t\t\t\t<div class=\"panel-footer\">L'équipe Progestix vous remercie de votre fidélité.</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}";
    }
}
