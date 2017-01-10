<?php

/* base.html.twig */
class __TwigTemplate_2ce95f0fff5642274cd7cdc87e71bd46ef99c41078a9022259ea2f796b6e7dcf extends Twig_Template
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
        $__internal_27febc20a8be9111eed5283bc916dcc1c7d8afc817687eec2927605930c4a0f0 = $this->env->getExtension("native_profiler");
        $__internal_27febc20a8be9111eed5283bc916dcc1c7d8afc817687eec2927605930c4a0f0->enter($__internal_27febc20a8be9111eed5283bc916dcc1c7d8afc817687eec2927605930c4a0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_27febc20a8be9111eed5283bc916dcc1c7d8afc817687eec2927605930c4a0f0->leave($__internal_27febc20a8be9111eed5283bc916dcc1c7d8afc817687eec2927605930c4a0f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9864cdfb428c119de5175262fb244dd9d528ed3cc619d3683e276d11da0e4997 = $this->env->getExtension("native_profiler");
        $__internal_9864cdfb428c119de5175262fb244dd9d528ed3cc619d3683e276d11da0e4997->enter($__internal_9864cdfb428c119de5175262fb244dd9d528ed3cc619d3683e276d11da0e4997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9864cdfb428c119de5175262fb244dd9d528ed3cc619d3683e276d11da0e4997->leave($__internal_9864cdfb428c119de5175262fb244dd9d528ed3cc619d3683e276d11da0e4997_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_710a6001f28ccb4c5a2aecab0b565633c14473991e80f22943b8f536f4ce365a = $this->env->getExtension("native_profiler");
        $__internal_710a6001f28ccb4c5a2aecab0b565633c14473991e80f22943b8f536f4ce365a->enter($__internal_710a6001f28ccb4c5a2aecab0b565633c14473991e80f22943b8f536f4ce365a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_710a6001f28ccb4c5a2aecab0b565633c14473991e80f22943b8f536f4ce365a->leave($__internal_710a6001f28ccb4c5a2aecab0b565633c14473991e80f22943b8f536f4ce365a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a996c584c1987a5db81bf110a4f4ae628e1c38ddfa170841ec489af555196733 = $this->env->getExtension("native_profiler");
        $__internal_a996c584c1987a5db81bf110a4f4ae628e1c38ddfa170841ec489af555196733->enter($__internal_a996c584c1987a5db81bf110a4f4ae628e1c38ddfa170841ec489af555196733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a996c584c1987a5db81bf110a4f4ae628e1c38ddfa170841ec489af555196733->leave($__internal_a996c584c1987a5db81bf110a4f4ae628e1c38ddfa170841ec489af555196733_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7900d59703479ef5e4164fbbb3d931b1cd08a4a5184b5d55596a163d95d8b4e = $this->env->getExtension("native_profiler");
        $__internal_a7900d59703479ef5e4164fbbb3d931b1cd08a4a5184b5d55596a163d95d8b4e->enter($__internal_a7900d59703479ef5e4164fbbb3d931b1cd08a4a5184b5d55596a163d95d8b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a7900d59703479ef5e4164fbbb3d931b1cd08a4a5184b5d55596a163d95d8b4e->leave($__internal_a7900d59703479ef5e4164fbbb3d931b1cd08a4a5184b5d55596a163d95d8b4e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
