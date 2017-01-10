<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_f57c246dd16475671c1ea544260fa4d0b73f6ff46b78c2b91f95bcc3b2845575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61907d15ff62f939cf94b3005f08ce7a08a1e3932df983d74dd894119a9040ba = $this->env->getExtension("native_profiler");
        $__internal_61907d15ff62f939cf94b3005f08ce7a08a1e3932df983d74dd894119a9040ba->enter($__internal_61907d15ff62f939cf94b3005f08ce7a08a1e3932df983d74dd894119a9040ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61907d15ff62f939cf94b3005f08ce7a08a1e3932df983d74dd894119a9040ba->leave($__internal_61907d15ff62f939cf94b3005f08ce7a08a1e3932df983d74dd894119a9040ba_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_49e97a3e8f9e8859de0525c1e72237a62b19f2b42cf69b9ab2c21c42656a393b = $this->env->getExtension("native_profiler");
        $__internal_49e97a3e8f9e8859de0525c1e72237a62b19f2b42cf69b9ab2c21c42656a393b->enter($__internal_49e97a3e8f9e8859de0525c1e72237a62b19f2b42cf69b9ab2c21c42656a393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_49e97a3e8f9e8859de0525c1e72237a62b19f2b42cf69b9ab2c21c42656a393b->leave($__internal_49e97a3e8f9e8859de0525c1e72237a62b19f2b42cf69b9ab2c21c42656a393b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
";
    }
}
