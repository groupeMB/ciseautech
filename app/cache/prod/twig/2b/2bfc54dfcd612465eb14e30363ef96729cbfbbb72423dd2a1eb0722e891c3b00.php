<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_1a6547703ba363b30f1eaf49cff019b83a652e788ee8e3ec177f908a11da9aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : null), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()))));
        echo "
        ";
    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  91 => 27,  88 => 26,  82 => 21,  75 => 17,  72 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  53 => 35,  51 => 34,  48 => 33,  46 => 32,  41 => 29,  39 => 26,  31 => 21,  28 => 20,  26 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% block sonata_page_breadcrumb %}*/
/*     {% if breadcrumb_context is not defined %}*/
/*         {% set breadcrumb_context = 'user_index' %}*/
/*     {% endif %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>*/
/* */
/* <div class="sonata-user-show row row-fluid">*/
/* */
/*     <div class="span2 col-lg-2" style="padding: 8px 0;">*/
/*         {% block sonata_profile_menu %}*/
/*             {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="span10 col-lg-10">*/
/*         {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/* */
/*         {% block sonata_profile_content '' %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
