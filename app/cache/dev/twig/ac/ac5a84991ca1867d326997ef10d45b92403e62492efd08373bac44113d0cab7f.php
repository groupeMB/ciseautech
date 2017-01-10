<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_d6bde507853473b92aa5352a89ab2c909cb42dca2ea80d52acdc25f1fa2cff5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32bcf4c42da7ab46002a9f13f67317f539c6ac4d6c7f9a4ff1683f237afbc9db = $this->env->getExtension("native_profiler");
        $__internal_32bcf4c42da7ab46002a9f13f67317f539c6ac4d6c7f9a4ff1683f237afbc9db->enter($__internal_32bcf4c42da7ab46002a9f13f67317f539c6ac4d6c7f9a4ff1683f237afbc9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32bcf4c42da7ab46002a9f13f67317f539c6ac4d6c7f9a4ff1683f237afbc9db->leave($__internal_32bcf4c42da7ab46002a9f13f67317f539c6ac4d6c7f9a4ff1683f237afbc9db_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a3a01d33bbbf6b1215067f937d293efa18c2ab37cca1ae0a7c8ddd7c5e04545 = $this->env->getExtension("native_profiler");
        $__internal_8a3a01d33bbbf6b1215067f937d293efa18c2ab37cca1ae0a7c8ddd7c5e04545->enter($__internal_8a3a01d33bbbf6b1215067f937d293efa18c2ab37cca1ae0a7c8ddd7c5e04545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_8a3a01d33bbbf6b1215067f937d293efa18c2ab37cca1ae0a7c8ddd7c5e04545->leave($__internal_8a3a01d33bbbf6b1215067f937d293efa18c2ab37cca1ae0a7c8ddd7c5e04545_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
