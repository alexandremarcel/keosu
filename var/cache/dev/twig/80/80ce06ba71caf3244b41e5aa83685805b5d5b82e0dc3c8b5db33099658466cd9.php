<?php

/* KeosuCoreBundle:MainViews:configuration.html.twig */
class __TwigTemplate_b874831d7af3ebdb14d4d58801b951bbf526b7ca32eac1efbad86b654177492a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:configuration.html.twig", 19);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b613e5c79b0faa4f29c8c0ecea7c00d596c213dadf6fadef1db4c28374ab586 = $this->env->getExtension("native_profiler");
        $__internal_1b613e5c79b0faa4f29c8c0ecea7c00d596c213dadf6fadef1db4c28374ab586->enter($__internal_1b613e5c79b0faa4f29c8c0ecea7c00d596c213dadf6fadef1db4c28374ab586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:configuration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b613e5c79b0faa4f29c8c0ecea7c00d596c213dadf6fadef1db4c28374ab586->leave($__internal_1b613e5c79b0faa4f29c8c0ecea7c00d596c213dadf6fadef1db4c28374ab586_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_74b7718df29cf19def6af41c916ed45eaf1105f41a782c850119c678c54fad67 = $this->env->getExtension("native_profiler");
        $__internal_74b7718df29cf19def6af41c916ed45eaf1105f41a782c850119c678c54fad67->enter($__internal_74b7718df29cf19def6af41c916ed45eaf1105f41a782c850119c678c54fad67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Configuration";
        
        $__internal_74b7718df29cf19def6af41c916ed45eaf1105f41a782c850119c678c54fad67->leave($__internal_74b7718df29cf19def6af41c916ed45eaf1105f41a782c850119c678c54fad67_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_7911526d6b2d1149eefec20d074e65c186294de2e16ce814da805c8dc6c6e658 = $this->env->getExtension("native_profiler");
        $__internal_7911526d6b2d1149eefec20d074e65c186294de2e16ce814da805c8dc6c6e658->enter($__internal_7911526d6b2d1149eefec20d074e65c186294de2e16ce814da805c8dc6c6e658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "\t\t</div>
\t</div>
";
        
        $__internal_7911526d6b2d1149eefec20d074e65c186294de2e16ce814da805c8dc6c6e658->leave($__internal_7911526d6b2d1149eefec20d074e65c186294de2e16ce814da805c8dc6c6e658_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e68f998f76c0c37ad02bbfdcfab17407cc5247cc91115913eed76afcb0b0a1d = $this->env->getExtension("native_profiler");
        $__internal_2e68f998f76c0c37ad02bbfdcfab17407cc5247cc91115913eed76afcb0b0a1d->enter($__internal_2e68f998f76c0c37ad02bbfdcfab17407cc5247cc91115913eed76afcb0b0a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-cog icon-menu\"></span> Configuration</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-th-large icon-menu\"></span>Apps</h3>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("keosu_core_app_manage");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage Apps</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-tint icon-menu\"></span>Themes</h3>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("keosu_core_theme_manage");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage Themes</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        
        $__internal_2e68f998f76c0c37ad02bbfdcfab17407cc5247cc91115913eed76afcb0b0a1d->leave($__internal_2e68f998f76c0c37ad02bbfdcfab17407cc5247cc91115913eed76afcb0b0a1d_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  87 => 37,  75 => 27,  69 => 26,  60 => 49,  58 => 26,  54 => 24,  48 => 23,  36 => 21,  11 => 19,);
    }

    public function getSource()
    {
        return "{#
Keosu is an open source CMS for mobile app
Copyright (C) 2016  Pockeit

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
#}

{% extends 'KeosuCoreBundle::page.html.twig' %}

{% block title %}Configuration{% endblock%}

{% block body %}
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t{% block content %}
\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-cog icon-menu\"></span> Configuration</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-th-large icon-menu\"></span>Apps</h3>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_app_manage') }}\"><button type=\"button\" class=\"btn btn-default\">Manage Apps</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-tint icon-menu\"></span>Themes</h3>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_theme_manage') }}\"><button type=\"button\" class=\"btn btn-default\">Manage Themes</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t</div>
{% endblock %}
";
    }
}
