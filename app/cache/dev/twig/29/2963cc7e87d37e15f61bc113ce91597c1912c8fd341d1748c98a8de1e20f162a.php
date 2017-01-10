<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b9ac0ccb195dbfcab4de2272f024a231e30e37b2de78716b07101d75beea2ed2 extends Twig_Template
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
        $__internal_91a49429afd1b03360d1cd8d0839f5190d9156e70778184e74941ed94b76a837 = $this->env->getExtension("native_profiler");
        $__internal_91a49429afd1b03360d1cd8d0839f5190d9156e70778184e74941ed94b76a837->enter($__internal_91a49429afd1b03360d1cd8d0839f5190d9156e70778184e74941ed94b76a837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_91a49429afd1b03360d1cd8d0839f5190d9156e70778184e74941ed94b76a837->leave($__internal_91a49429afd1b03360d1cd8d0839f5190d9156e70778184e74941ed94b76a837_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98bf21b1322cd5aba856a7df7a281d9fcc3036dc1a90bad854405831b78cc618 = $this->env->getExtension("native_profiler");
        $__internal_98bf21b1322cd5aba856a7df7a281d9fcc3036dc1a90bad854405831b78cc618->enter($__internal_98bf21b1322cd5aba856a7df7a281d9fcc3036dc1a90bad854405831b78cc618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_98bf21b1322cd5aba856a7df7a281d9fcc3036dc1a90bad854405831b78cc618->leave($__internal_98bf21b1322cd5aba856a7df7a281d9fcc3036dc1a90bad854405831b78cc618_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
