<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_d3b40cb196e7d809eb2180ff9edc2df5bc4593608f2b11c335bdbaa148fe08d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9fb4759f8d4b8170940983bd23da44992427479dcea2e1a1427f19b04433404 = $this->env->getExtension("native_profiler");
        $__internal_c9fb4759f8d4b8170940983bd23da44992427479dcea2e1a1427f19b04433404->enter($__internal_c9fb4759f8d4b8170940983bd23da44992427479dcea2e1a1427f19b04433404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_c9fb4759f8d4b8170940983bd23da44992427479dcea2e1a1427f19b04433404->leave($__internal_c9fb4759f8d4b8170940983bd23da44992427479dcea2e1a1427f19b04433404_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_c4b267af0ef22ed3d52e6bcbc587e862ac70d5061d6602e46a2b46f1f4e68928 = $this->env->getExtension("native_profiler");
        $__internal_c4b267af0ef22ed3d52e6bcbc587e862ac70d5061d6602e46a2b46f1f4e68928->enter($__internal_c4b267af0ef22ed3d52e6bcbc587e862ac70d5061d6602e46a2b46f1f4e68928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4b267af0ef22ed3d52e6bcbc587e862ac70d5061d6602e46a2b46f1f4e68928->leave($__internal_c4b267af0ef22ed3d52e6bcbc587e862ac70d5061d6602e46a2b46f1f4e68928_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
";
    }
}
