<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_40c8fe6778889664ed366ccbd4e3a2c169d4f5875fc721b6b36b6859678a31dc extends Twig_Template
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
        $__internal_191cf0df8e6a97089ef896e52bf69f05c433b534d8f7f70630d9042675f97a99 = $this->env->getExtension("native_profiler");
        $__internal_191cf0df8e6a97089ef896e52bf69f05c433b534d8f7f70630d9042675f97a99->enter($__internal_191cf0df8e6a97089ef896e52bf69f05c433b534d8f7f70630d9042675f97a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    ";
        // line 2
        if (array_key_exists("invalid_username", $context)) {
            // line 3
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 5
        echo "
    <div class=\"form-group\">
        <label for=\"username\" class=\"control-label required\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo " * </label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>

    <div class=\"form-actions form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>
";
        
        $__internal_191cf0df8e6a97089ef896e52bf69f05c433b534d8f7f70630d9042675f97a99->leave($__internal_191cf0df8e6a97089ef896e52bf69f05c433b534d8f7f70630d9042675f97a99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  39 => 7,  35 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<form action=\"{{ path('sonata_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    {% if invalid_username is defined %}
        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\" class=\"control-label required\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }} * </label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>

    <div class=\"form-actions form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>
";
    }
}
