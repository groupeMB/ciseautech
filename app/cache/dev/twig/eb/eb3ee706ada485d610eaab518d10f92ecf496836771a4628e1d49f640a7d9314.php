<?php

/* ::base.html.twig */
class __TwigTemplate_0b1e2482aa62dc832e457bec006b4d37b72af1c7d07cd1c84686d621ef251974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c3bcdd05e4eacbeef53047f6e6f71f9e4bc66ee26453d9f7989a8a3da89440 = $this->env->getExtension("native_profiler");
        $__internal_a5c3bcdd05e4eacbeef53047f6e6f71f9e4bc66ee26453d9f7989a8a3da89440->enter($__internal_a5c3bcdd05e4eacbeef53047f6e6f71f9e4bc66ee26453d9f7989a8a3da89440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a5c3bcdd05e4eacbeef53047f6e6f71f9e4bc66ee26453d9f7989a8a3da89440->leave($__internal_a5c3bcdd05e4eacbeef53047f6e6f71f9e4bc66ee26453d9f7989a8a3da89440_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04b4db8aef4519845463f8084790aef95fc833aa01d6c4f2060e34fbf76f623e = $this->env->getExtension("native_profiler");
        $__internal_04b4db8aef4519845463f8084790aef95fc833aa01d6c4f2060e34fbf76f623e->enter($__internal_04b4db8aef4519845463f8084790aef95fc833aa01d6c4f2060e34fbf76f623e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_04b4db8aef4519845463f8084790aef95fc833aa01d6c4f2060e34fbf76f623e->leave($__internal_04b4db8aef4519845463f8084790aef95fc833aa01d6c4f2060e34fbf76f623e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d017503e9c75037fb115901b6d34bed496f81428c41cfde3a9c6744c482cbf8d = $this->env->getExtension("native_profiler");
        $__internal_d017503e9c75037fb115901b6d34bed496f81428c41cfde3a9c6744c482cbf8d->enter($__internal_d017503e9c75037fb115901b6d34bed496f81428c41cfde3a9c6744c482cbf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d017503e9c75037fb115901b6d34bed496f81428c41cfde3a9c6744c482cbf8d->leave($__internal_d017503e9c75037fb115901b6d34bed496f81428c41cfde3a9c6744c482cbf8d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c862a677f83919f09847f0f65f98c9cb120cde04df78d1f2964af8bfce6ed32e = $this->env->getExtension("native_profiler");
        $__internal_c862a677f83919f09847f0f65f98c9cb120cde04df78d1f2964af8bfce6ed32e->enter($__internal_c862a677f83919f09847f0f65f98c9cb120cde04df78d1f2964af8bfce6ed32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c862a677f83919f09847f0f65f98c9cb120cde04df78d1f2964af8bfce6ed32e->leave($__internal_c862a677f83919f09847f0f65f98c9cb120cde04df78d1f2964af8bfce6ed32e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fd0da1089a873069bb64e34cba177a9da1cd9568f86b4e049343b72cebd519b = $this->env->getExtension("native_profiler");
        $__internal_2fd0da1089a873069bb64e34cba177a9da1cd9568f86b4e049343b72cebd519b->enter($__internal_2fd0da1089a873069bb64e34cba177a9da1cd9568f86b4e049343b72cebd519b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fd0da1089a873069bb64e34cba177a9da1cd9568f86b4e049343b72cebd519b->leave($__internal_2fd0da1089a873069bb64e34cba177a9da1cd9568f86b4e049343b72cebd519b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
