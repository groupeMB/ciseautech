<?php

/* @SonataUser/layout.html.twig */
class __TwigTemplate_7124dd4ecfb42c31619fe60156a4196d32ec0d2fdfa3f57aa83b0b319030ce69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a56f81ae301cb18520c7e255b8b2cf34a2a240c565fcb74fe438857be1ddac28 = $this->env->getExtension("native_profiler");
        $__internal_a56f81ae301cb18520c7e255b8b2cf34a2a240c565fcb74fe438857be1ddac28->enter($__internal_a56f81ae301cb18520c7e255b8b2cf34a2a240c565fcb74fe438857be1ddac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_a56f81ae301cb18520c7e255b8b2cf34a2a240c565fcb74fe438857be1ddac28->leave($__internal_a56f81ae301cb18520c7e255b8b2cf34a2a240c565fcb74fe438857be1ddac28_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eefae071a70daedc906f24ce0eeabfccfbf2697d6abd3e5589f7256f3589171f = $this->env->getExtension("native_profiler");
        $__internal_eefae071a70daedc906f24ce0eeabfccfbf2697d6abd3e5589f7256f3589171f->enter($__internal_eefae071a70daedc906f24ce0eeabfccfbf2697d6abd3e5589f7256f3589171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_eefae071a70daedc906f24ce0eeabfccfbf2697d6abd3e5589f7256f3589171f->leave($__internal_eefae071a70daedc906f24ce0eeabfccfbf2697d6abd3e5589f7256f3589171f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>";
    }
}
