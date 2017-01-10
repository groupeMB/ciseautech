<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d587930e3f13159b4841abbfddaa7561289d1bab58027874486b61f5350c7961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3a7452a0cfaa2bce53cb5a5ef818cf3e817707aadc29ca98e635a37a89d55687 = $this->env->getExtension("native_profiler");
        $__internal_3a7452a0cfaa2bce53cb5a5ef818cf3e817707aadc29ca98e635a37a89d55687->enter($__internal_3a7452a0cfaa2bce53cb5a5ef818cf3e817707aadc29ca98e635a37a89d55687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7452a0cfaa2bce53cb5a5ef818cf3e817707aadc29ca98e635a37a89d55687->leave($__internal_3a7452a0cfaa2bce53cb5a5ef818cf3e817707aadc29ca98e635a37a89d55687_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8068e48db554e9f22f16ca0d29064b39a8d440fd4f471b712ab4735153cd6e9f = $this->env->getExtension("native_profiler");
        $__internal_8068e48db554e9f22f16ca0d29064b39a8d440fd4f471b712ab4735153cd6e9f->enter($__internal_8068e48db554e9f22f16ca0d29064b39a8d440fd4f471b712ab4735153cd6e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8068e48db554e9f22f16ca0d29064b39a8d440fd4f471b712ab4735153cd6e9f->leave($__internal_8068e48db554e9f22f16ca0d29064b39a8d440fd4f471b712ab4735153cd6e9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa78b47ac29d6e92ad4d1732a128e9edd65ded6263a9eb73f1bb34b441a0bef1 = $this->env->getExtension("native_profiler");
        $__internal_fa78b47ac29d6e92ad4d1732a128e9edd65ded6263a9eb73f1bb34b441a0bef1->enter($__internal_fa78b47ac29d6e92ad4d1732a128e9edd65ded6263a9eb73f1bb34b441a0bef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa78b47ac29d6e92ad4d1732a128e9edd65ded6263a9eb73f1bb34b441a0bef1->leave($__internal_fa78b47ac29d6e92ad4d1732a128e9edd65ded6263a9eb73f1bb34b441a0bef1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9582076136fedca7caedaf5dd667aba005aad019bb22420c1a35dd1d4ffc2ee9 = $this->env->getExtension("native_profiler");
        $__internal_9582076136fedca7caedaf5dd667aba005aad019bb22420c1a35dd1d4ffc2ee9->enter($__internal_9582076136fedca7caedaf5dd667aba005aad019bb22420c1a35dd1d4ffc2ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9582076136fedca7caedaf5dd667aba005aad019bb22420c1a35dd1d4ffc2ee9->leave($__internal_9582076136fedca7caedaf5dd667aba005aad019bb22420c1a35dd1d4ffc2ee9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
