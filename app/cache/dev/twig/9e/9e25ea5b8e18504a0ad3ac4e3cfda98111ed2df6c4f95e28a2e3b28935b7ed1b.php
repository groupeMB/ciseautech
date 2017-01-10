<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_07d23f3fb76e113deeddebcc1b2b218a7968be2aa7cdab3a55f62c8c104fc4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0288d9273e76e21186994f2af6c48277f9046568ecf098f91c44d7c807704a6 = $this->env->getExtension("native_profiler");
        $__internal_a0288d9273e76e21186994f2af6c48277f9046568ecf098f91c44d7c807704a6->enter($__internal_a0288d9273e76e21186994f2af6c48277f9046568ecf098f91c44d7c807704a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0288d9273e76e21186994f2af6c48277f9046568ecf098f91c44d7c807704a6->leave($__internal_a0288d9273e76e21186994f2af6c48277f9046568ecf098f91c44d7c807704a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c31698d5b9b7a8dea36c043f964a1bbcf4cbefd71cc3cd56f7de7f548a93e43 = $this->env->getExtension("native_profiler");
        $__internal_3c31698d5b9b7a8dea36c043f964a1bbcf4cbefd71cc3cd56f7de7f548a93e43->enter($__internal_3c31698d5b9b7a8dea36c043f964a1bbcf4cbefd71cc3cd56f7de7f548a93e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c31698d5b9b7a8dea36c043f964a1bbcf4cbefd71cc3cd56f7de7f548a93e43->leave($__internal_3c31698d5b9b7a8dea36c043f964a1bbcf4cbefd71cc3cd56f7de7f548a93e43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bea61d3bac3800e8cc49a8c651c21465c07758ed83a2a1213c8cdc9bf6f59c3 = $this->env->getExtension("native_profiler");
        $__internal_4bea61d3bac3800e8cc49a8c651c21465c07758ed83a2a1213c8cdc9bf6f59c3->enter($__internal_4bea61d3bac3800e8cc49a8c651c21465c07758ed83a2a1213c8cdc9bf6f59c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4bea61d3bac3800e8cc49a8c651c21465c07758ed83a2a1213c8cdc9bf6f59c3->leave($__internal_4bea61d3bac3800e8cc49a8c651c21465c07758ed83a2a1213c8cdc9bf6f59c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
