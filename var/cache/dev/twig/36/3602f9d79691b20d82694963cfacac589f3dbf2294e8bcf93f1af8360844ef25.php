<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_24692f1740e512d3a8f6bb9702c8089c539efd4e444949deff88d7234425625f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08095af27d751088b7d3cee04a98622922fbecda8c21a8a71224f2e5be017d10 = $this->env->getExtension("native_profiler");
        $__internal_08095af27d751088b7d3cee04a98622922fbecda8c21a8a71224f2e5be017d10->enter($__internal_08095af27d751088b7d3cee04a98622922fbecda8c21a8a71224f2e5be017d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_08095af27d751088b7d3cee04a98622922fbecda8c21a8a71224f2e5be017d10->leave($__internal_08095af27d751088b7d3cee04a98622922fbecda8c21a8a71224f2e5be017d10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff6f1249e8272df35e93ed931f4c3c571f91a9d8d05e3d1763253cc810a5e409 = $this->env->getExtension("native_profiler");
        $__internal_ff6f1249e8272df35e93ed931f4c3c571f91a9d8d05e3d1763253cc810a5e409->enter($__internal_ff6f1249e8272df35e93ed931f4c3c571f91a9d8d05e3d1763253cc810a5e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_ff6f1249e8272df35e93ed931f4c3c571f91a9d8d05e3d1763253cc810a5e409->leave($__internal_ff6f1249e8272df35e93ed931f4c3c571f91a9d8d05e3d1763253cc810a5e409_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2b1cf2c1c065b7b3edd55395d81aa3d65e7f7a9cced1bc787a50d5c650dd9cf = $this->env->getExtension("native_profiler");
        $__internal_b2b1cf2c1c065b7b3edd55395d81aa3d65e7f7a9cced1bc787a50d5c650dd9cf->enter($__internal_b2b1cf2c1c065b7b3edd55395d81aa3d65e7f7a9cced1bc787a50d5c650dd9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_b2b1cf2c1c065b7b3edd55395d81aa3d65e7f7a9cced1bc787a50d5c650dd9cf->leave($__internal_b2b1cf2c1c065b7b3edd55395d81aa3d65e7f7a9cced1bc787a50d5c650dd9cf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_33aa0ddf8127d82ca54b748fd718982e1fb2a158b81aa096fbb9f8f48de8839e = $this->env->getExtension("native_profiler");
        $__internal_33aa0ddf8127d82ca54b748fd718982e1fb2a158b81aa096fbb9f8f48de8839e->enter($__internal_33aa0ddf8127d82ca54b748fd718982e1fb2a158b81aa096fbb9f8f48de8839e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_33aa0ddf8127d82ca54b748fd718982e1fb2a158b81aa096fbb9f8f48de8839e->leave($__internal_33aa0ddf8127d82ca54b748fd718982e1fb2a158b81aa096fbb9f8f48de8839e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05606cfe0dc66a0b34a8dc2dd4f9bfb509d0a03e4838569527af49019ae14c91 = $this->env->getExtension("native_profiler");
        $__internal_05606cfe0dc66a0b34a8dc2dd4f9bfb509d0a03e4838569527af49019ae14c91->enter($__internal_05606cfe0dc66a0b34a8dc2dd4f9bfb509d0a03e4838569527af49019ae14c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_05606cfe0dc66a0b34a8dc2dd4f9bfb509d0a03e4838569527af49019ae14c91->leave($__internal_05606cfe0dc66a0b34a8dc2dd4f9bfb509d0a03e4838569527af49019ae14c91_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
";
    }
}
