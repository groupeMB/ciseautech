<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_d2a9ad5695039d717dae6825618c3372a7f581a4361628dfa04889904d58397d extends Twig_Template
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
        $__internal_c52086cf38ea9f70cf7e083817d08c2a6f46d5c2a6680c17fb913624848506ff = $this->env->getExtension("native_profiler");
        $__internal_c52086cf38ea9f70cf7e083817d08c2a6f46d5c2a6680c17fb913624848506ff->enter($__internal_c52086cf38ea9f70cf7e083817d08c2a6f46d5c2a6680c17fb913624848506ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_c52086cf38ea9f70cf7e083817d08c2a6f46d5c2a6680c17fb913624848506ff->leave($__internal_c52086cf38ea9f70cf7e083817d08c2a6f46d5c2a6680c17fb913624848506ff_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_84f887b10436324d901d272c306b6011160b9b93a31583ace36e2bfbb1f2e81e = $this->env->getExtension("native_profiler");
        $__internal_84f887b10436324d901d272c306b6011160b9b93a31583ace36e2bfbb1f2e81e->enter($__internal_84f887b10436324d901d272c306b6011160b9b93a31583ace36e2bfbb1f2e81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        
        $__internal_84f887b10436324d901d272c306b6011160b9b93a31583ace36e2bfbb1f2e81e->leave($__internal_84f887b10436324d901d272c306b6011160b9b93a31583ace36e2bfbb1f2e81e_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
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
