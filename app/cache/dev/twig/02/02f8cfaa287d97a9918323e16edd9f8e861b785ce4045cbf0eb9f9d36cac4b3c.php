<?php

/* @SonataAdmin/CRUD/preview.html.twig */
class __TwigTemplate_0e1bb712cc28a7fa17df7931ecbab099b57be0840f2477d4dcc30efd4311dbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@SonataAdmin/CRUD/preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a519dcab98089e56bf642d07cf63540e9a47d048488832f4877c1de3c24549f = $this->env->getExtension("native_profiler");
        $__internal_0a519dcab98089e56bf642d07cf63540e9a47d048488832f4877c1de3c24549f->enter($__internal_0a519dcab98089e56bf642d07cf63540e9a47d048488832f4877c1de3c24549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a519dcab98089e56bf642d07cf63540e9a47d048488832f4877c1de3c24549f->leave($__internal_0a519dcab98089e56bf642d07cf63540e9a47d048488832f4877c1de3c24549f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_31decddebbc4143fbf6666be12dcd2baddd19cc01da0afcb9e344948a81fb1f4 = $this->env->getExtension("native_profiler");
        $__internal_31decddebbc4143fbf6666be12dcd2baddd19cc01da0afcb9e344948a81fb1f4->enter($__internal_31decddebbc4143fbf6666be12dcd2baddd19cc01da0afcb9e344948a81fb1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_31decddebbc4143fbf6666be12dcd2baddd19cc01da0afcb9e344948a81fb1f4->leave($__internal_31decddebbc4143fbf6666be12dcd2baddd19cc01da0afcb9e344948a81fb1f4_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_59b8f432d0b1e6ca10071d5a93d5a2938bff301a3a1828ad534354b323aec845 = $this->env->getExtension("native_profiler");
        $__internal_59b8f432d0b1e6ca10071d5a93d5a2938bff301a3a1828ad534354b323aec845->enter($__internal_59b8f432d0b1e6ca10071d5a93d5a2938bff301a3a1828ad534354b323aec845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_59b8f432d0b1e6ca10071d5a93d5a2938bff301a3a1828ad534354b323aec845->leave($__internal_59b8f432d0b1e6ca10071d5a93d5a2938bff301a3a1828ad534354b323aec845_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_309f24ec81c4a33ec0e4fb29b8af44864c2788b00167383fe9697f35818fa5bf = $this->env->getExtension("native_profiler");
        $__internal_309f24ec81c4a33ec0e4fb29b8af44864c2788b00167383fe9697f35818fa5bf->enter($__internal_309f24ec81c4a33ec0e4fb29b8af44864c2788b00167383fe9697f35818fa5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_309f24ec81c4a33ec0e4fb29b8af44864c2788b00167383fe9697f35818fa5bf->leave($__internal_309f24ec81c4a33ec0e4fb29b8af44864c2788b00167383fe9697f35818fa5bf_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_668c005e673387c9e60e145928ab94fb203b43db105e0a04271765e02fc663aa = $this->env->getExtension("native_profiler");
        $__internal_668c005e673387c9e60e145928ab94fb203b43db105e0a04271765e02fc663aa->enter($__internal_668c005e673387c9e60e145928ab94fb203b43db105e0a04271765e02fc663aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_668c005e673387c9e60e145928ab94fb203b43db105e0a04271765e02fc663aa->leave($__internal_668c005e673387c9e60e145928ab94fb203b43db105e0a04271765e02fc663aa_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_fe874bee8590a80672a535bb1c4f98540f82ab67e47d1bffa7b44866aedc765d = $this->env->getExtension("native_profiler");
        $__internal_fe874bee8590a80672a535bb1c4f98540f82ab67e47d1bffa7b44866aedc765d->enter($__internal_fe874bee8590a80672a535bb1c4f98540f82ab67e47d1bffa7b44866aedc765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_fe874bee8590a80672a535bb1c4f98540f82ab67e47d1bffa7b44866aedc765d->leave($__internal_fe874bee8590a80672a535bb1c4f98540f82ab67e47d1bffa7b44866aedc765d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ admin.trans(name) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
";
    }
}
