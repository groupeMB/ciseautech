<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_a0ca2e1aadc44b8cf2c7e9b18c3f27bde7f4c49d36383f0f7b6716e4f38dd70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4d896f654a93bb2b1cbf7bcca21f5b2e39c66a475047a3b01567ac5ba77e3c4 = $this->env->getExtension("native_profiler");
        $__internal_c4d896f654a93bb2b1cbf7bcca21f5b2e39c66a475047a3b01567ac5ba77e3c4->enter($__internal_c4d896f654a93bb2b1cbf7bcca21f5b2e39c66a475047a3b01567ac5ba77e3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_c4d896f654a93bb2b1cbf7bcca21f5b2e39c66a475047a3b01567ac5ba77e3c4->leave($__internal_c4d896f654a93bb2b1cbf7bcca21f5b2e39c66a475047a3b01567ac5ba77e3c4_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_b8a8228feec688dced43134385f68a2728fba6766fed479b5f9b69753463344b = $this->env->getExtension("native_profiler");
        $__internal_b8a8228feec688dced43134385f68a2728fba6766fed479b5f9b69753463344b->enter($__internal_b8a8228feec688dced43134385f68a2728fba6766fed479b5f9b69753463344b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_b8a8228feec688dced43134385f68a2728fba6766fed479b5f9b69753463344b->leave($__internal_b8a8228feec688dced43134385f68a2728fba6766fed479b5f9b69753463344b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}
