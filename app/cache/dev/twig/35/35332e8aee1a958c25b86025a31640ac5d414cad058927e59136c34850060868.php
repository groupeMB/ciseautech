<?php

/* @SonataUser/Block/account.html.twig */
class __TwigTemplate_2a97ef5ae3d5baa4bbcd2bb6c7d72fa74357f38885b8ff7f29704df691e32e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataUser/Block/account.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae7f8d5a057823722e63f4a6b8669050184bb0a4b99fc2bb38c505c2bf3d54d6 = $this->env->getExtension("native_profiler");
        $__internal_ae7f8d5a057823722e63f4a6b8669050184bb0a4b99fc2bb38c505c2bf3d54d6->enter($__internal_ae7f8d5a057823722e63f4a6b8669050184bb0a4b99fc2bb38c505c2bf3d54d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Block/account.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7f8d5a057823722e63f4a6b8669050184bb0a4b99fc2bb38c505c2bf3d54d6->leave($__internal_ae7f8d5a057823722e63f4a6b8669050184bb0a4b99fc2bb38c505c2bf3d54d6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_355211dc1ea61fbbdff1ebcefc1e1ba197fcef22a800e3aeee6487013ec1e202 = $this->env->getExtension("native_profiler");
        $__internal_355211dc1ea61fbbdff1ebcefc1e1ba197fcef22a800e3aeee6487013ec1e202->enter($__internal_355211dc1ea61fbbdff1ebcefc1e1ba197fcef22a800e3aeee6487013ec1e202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div style=\"display:inline;\">
        ";
        // line 16
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_355211dc1ea61fbbdff1ebcefc1e1ba197fcef22a800e3aeee6487013ec1e202->leave($__internal_355211dc1ea61fbbdff1ebcefc1e1ba197fcef22a800e3aeee6487013ec1e202_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Block/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  58 => 20,  51 => 18,  44 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div style=\"display:inline;\">
        {% if user %}
            <a href=\"{{ path('sonata_user_profile_show') }}\">{{ user.username }}</a> |
            <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'link_logout' | trans({}, \"SonataUserBundle\") }}</a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'link_login'|trans({}, 'SonataUserBundle') }} / {{ 'link_register'|trans({}, 'SonataUserBundle') }}</a>
        {% endif %}
    </div>
{% endblock %}
";
    }
}
