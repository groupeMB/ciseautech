<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a93708edd3576543dd442be89b9ae0e5ab3d72a79060cbb88a3c6bc1a91a3c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_720fe98e8bfad56c8e8df344ca31f67f506965d5f64cb4a2b06753fb38139c9c = $this->env->getExtension("native_profiler");
        $__internal_720fe98e8bfad56c8e8df344ca31f67f506965d5f64cb4a2b06753fb38139c9c->enter($__internal_720fe98e8bfad56c8e8df344ca31f67f506965d5f64cb4a2b06753fb38139c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_720fe98e8bfad56c8e8df344ca31f67f506965d5f64cb4a2b06753fb38139c9c->leave($__internal_720fe98e8bfad56c8e8df344ca31f67f506965d5f64cb4a2b06753fb38139c9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
    }
}
