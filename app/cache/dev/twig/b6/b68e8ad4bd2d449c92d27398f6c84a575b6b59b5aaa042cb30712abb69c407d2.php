<?php

/* SonataUserBundle:Profile:edit_profile.html.twig */
class __TwigTemplate_da8701d5ccdba84a8d5130750b0a47d534c8de84728c8c575c825eaaeea8a002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "SonataUserBundle:Profile:edit_profile.html.twig", 12);
        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a2da7b75f846e50461e46a3b213eb87258ee3dd5feaef7269787a0afb2acc58 = $this->env->getExtension("native_profiler");
        $__internal_3a2da7b75f846e50461e46a3b213eb87258ee3dd5feaef7269787a0afb2acc58->enter($__internal_3a2da7b75f846e50461e46a3b213eb87258ee3dd5feaef7269787a0afb2acc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2da7b75f846e50461e46a3b213eb87258ee3dd5feaef7269787a0afb2acc58->leave($__internal_3a2da7b75f846e50461e46a3b213eb87258ee3dd5feaef7269787a0afb2acc58_prof);

    }

    // line 14
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_874efa0b8b114361da44034fd52924140bc0dfdcd74dff23217ecdd5d1db4a46 = $this->env->getExtension("native_profiler");
        $__internal_874efa0b8b114361da44034fd52924140bc0dfdcd74dff23217ecdd5d1db4a46->enter($__internal_874efa0b8b114361da44034fd52924140bc0dfdcd74dff23217ecdd5d1db4a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "
";
        
        $__internal_874efa0b8b114361da44034fd52924140bc0dfdcd74dff23217ecdd5d1db4a46->leave($__internal_874efa0b8b114361da44034fd52924140bc0dfdcd74dff23217ecdd5d1db4a46_prof);

    }

    // line 18
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_69ef0696aa4d2c93086710ce7eb75f7b255df0c9c6caa39380e64bb8640cd2bb = $this->env->getExtension("native_profiler");
        $__internal_69ef0696aa4d2c93086710ce7eb75f7b255df0c9c6caa39380e64bb8640cd2bb->enter($__internal_69ef0696aa4d2c93086710ce7eb75f7b255df0c9c6caa39380e64bb8640cd2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 19
        echo "    ";
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user profile edition template. Feel free to override it.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 20
        echo "
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 23
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 24
        echo "
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 30
        $this->loadTemplate("SonataUserBundle:Profile:edit_profile_content.html.twig", "SonataUserBundle:Profile:edit_profile.html.twig", 30)->display($context);
        // line 31
        echo "        </div>
    </div>

    ";
        // line 34
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_user_profile_edit_authentication"), array());
        
        $__internal_69ef0696aa4d2c93086710ce7eb75f7b255df0c9c6caa39380e64bb8640cd2bb->leave($__internal_69ef0696aa4d2c93086710ce7eb75f7b255df0c9c6caa39380e64bb8640cd2bb_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  87 => 31,  85 => 30,  79 => 27,  74 => 24,  72 => 23,  67 => 21,  64 => 20,  59 => 19,  53 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends \"SonataUserBundle:Profile:action.html.twig\" %}

{% block sonata_profile_title %}
    {{ \"title_user_account\" | trans({}, 'SonataUserBundle')}} - {{ \"title_user_edit_profile\" | trans({}, 'SonataUserBundle')}}
{% endblock %}

{% block sonata_profile_content %}
    {% sonata_template_box 'This is the user profile edition template. Feel free to override it.' %}

    {{ form_errors(form) }}

    {% form_theme form _self %}

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">{{ \"title_user_account\" | trans({}, 'SonataUserBundle')}}</h3>
        </div>
        <div class=\"panel-body\">
            {% include \"SonataUserBundle:Profile:edit_profile_content.html.twig\" %}
        </div>
    </div>

    {% render url(\"sonata_user_profile_edit_authentication\") %}
{% endblock %}
";
    }
}
