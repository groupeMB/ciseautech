<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_475b9a3526d7f6a371f41bdf0d5aa4de62c2ab810207055a794c7fb7ef67f3f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e522aef19315bbf383a7ef64b8a46fb38ee29145f0b57d5ce4ec1acf1efb7b35 = $this->env->getExtension("native_profiler");
        $__internal_e522aef19315bbf383a7ef64b8a46fb38ee29145f0b57d5ce4ec1acf1efb7b35->enter($__internal_e522aef19315bbf383a7ef64b8a46fb38ee29145f0b57d5ce4ec1acf1efb7b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e522aef19315bbf383a7ef64b8a46fb38ee29145f0b57d5ce4ec1acf1efb7b35->leave($__internal_e522aef19315bbf383a7ef64b8a46fb38ee29145f0b57d5ce4ec1acf1efb7b35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d5b0596a8a94d96e3a1e7afcedae250ff7f05d1cfc2d5ff6e1e8ca12d0523a7 = $this->env->getExtension("native_profiler");
        $__internal_8d5b0596a8a94d96e3a1e7afcedae250ff7f05d1cfc2d5ff6e1e8ca12d0523a7->enter($__internal_8d5b0596a8a94d96e3a1e7afcedae250ff7f05d1cfc2d5ff6e1e8ca12d0523a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_8d5b0596a8a94d96e3a1e7afcedae250ff7f05d1cfc2d5ff6e1e8ca12d0523a7->leave($__internal_8d5b0596a8a94d96e3a1e7afcedae250ff7f05d1cfc2d5ff6e1e8ca12d0523a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  50 => 7,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
