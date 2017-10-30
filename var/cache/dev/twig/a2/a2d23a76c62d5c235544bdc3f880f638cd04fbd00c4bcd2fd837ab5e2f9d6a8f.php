<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f1df5ee5eb6aafe2143f764d4f004b756f7847960b0069e2ccc604a476f02643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::root.html.twig", "FOSUserBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'skeleton' => array($this, 'block_skeleton'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::root.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63bcc2083b28e90b4b9a8fa1048e46db661fd1a43bac811bd8ff1772419f9924 = $this->env->getExtension("native_profiler");
        $__internal_63bcc2083b28e90b4b9a8fa1048e46db661fd1a43bac811bd8ff1772419f9924->enter($__internal_63bcc2083b28e90b4b9a8fa1048e46db661fd1a43bac811bd8ff1772419f9924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63bcc2083b28e90b4b9a8fa1048e46db661fd1a43bac811bd8ff1772419f9924->leave($__internal_63bcc2083b28e90b4b9a8fa1048e46db661fd1a43bac811bd8ff1772419f9924_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee1c4fe79b8647e1ec518422927c6d722d8f1020cd46d8c796b9aaba0914f65e = $this->env->getExtension("native_profiler");
        $__internal_ee1c4fe79b8647e1ec518422927c6d722d8f1020cd46d8c796b9aaba0914f65e->enter($__internal_ee1c4fe79b8647e1ec518422927c6d722d8f1020cd46d8c796b9aaba0914f65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Keosu Authentication";
        
        $__internal_ee1c4fe79b8647e1ec518422927c6d722d8f1020cd46d8c796b9aaba0914f65e->leave($__internal_ee1c4fe79b8647e1ec518422927c6d722d8f1020cd46d8c796b9aaba0914f65e_prof);

    }

    // line 6
    public function block_skeleton($context, array $blocks = array())
    {
        $__internal_16eefe20846b1f4e66569d192bf0b04b3e6a8f6f4aa1f72ea971ceeac9a9c545 = $this->env->getExtension("native_profiler");
        $__internal_16eefe20846b1f4e66569d192bf0b04b3e6a8f6f4aa1f72ea971ceeac9a9c545->enter($__internal_16eefe20846b1f4e66569d192bf0b04b3e6a8f6f4aa1f72ea971ceeac9a9c545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "skeleton"));

        // line 7
        echo "<div class=\"logotop login-page\" style=\"text-align:center; margin-top:120px;\">
    <a href=\"http://keosu.com\" title=\"Propulsed by Keosu\" target=\"_blank\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/logo_black.png\" width=\"110px\" height=\"110px\">
    </a>
</div>
\t<div class=\"wellcustom\" id=\"login-container\">
\t\t";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "\t</div>
";
        
        $__internal_16eefe20846b1f4e66569d192bf0b04b3e6a8f6f4aa1f72ea971ceeac9a9c545->leave($__internal_16eefe20846b1f4e66569d192bf0b04b3e6a8f6f4aa1f72ea971ceeac9a9c545_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b603fe2ee4b094416fa49ac0bcc07edc0019c69a68543d7c83ee3989647adb1 = $this->env->getExtension("native_profiler");
        $__internal_5b603fe2ee4b094416fa49ac0bcc07edc0019c69a68543d7c83ee3989647adb1->enter($__internal_5b603fe2ee4b094416fa49ac0bcc07edc0019c69a68543d7c83ee3989647adb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "\t\t\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">Error, check your password</div>
\t\t\t";
        }
        // line 17
        echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"logincontainer\">
\t\t\t\t\t<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t\t\t<label for=\"username\">Username:</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<input id=\"spinner-load\" class=\"btn btn-login\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\" />
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        
        $__internal_5b603fe2ee4b094416fa49ac0bcc07edc0019c69a68543d7c83ee3989647adb1->leave($__internal_5b603fe2ee4b094416fa49ac0bcc07edc0019c69a68543d7c83ee3989647adb1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  96 => 20,  92 => 19,  88 => 17,  84 => 15,  81 => 14,  75 => 13,  67 => 33,  65 => 13,  58 => 9,  54 => 7,  48 => 6,  36 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "{# Extension of login page #}
{% extends '::root.html.twig' %}

{% block title %}Keosu Authentication{% endblock %}

{% block skeleton %}
<div class=\"logotop login-page\" style=\"text-align:center; margin-top:120px;\">
    <a href=\"http://keosu.com\" title=\"Propulsed by Keosu\" target=\"_blank\">
        <img src=\"{{url_base}}/img/logo_black.png\" width=\"110px\" height=\"110px\">
    </a>
</div>
\t<div class=\"wellcustom\" id=\"login-container\">
\t\t{% block fos_user_content %}
\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">Error, check your password</div>
\t\t\t{% endif %}
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"logincontainer\">
\t\t\t\t\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

\t\t\t\t\t\t<label for=\"username\">Username:</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

\t\t\t\t\t\t<label for=\"password\">Password</label>
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<input id=\"spinner-load\" class=\"btn btn-login\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\" />
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endblock fos_user_content %}
\t</div>
{% endblock %}
";
    }
}
