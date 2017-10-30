<?php

/* KeosuCoreBundle:MainViews:page.html.twig */
class __TwigTemplate_2642b329c1fcd223bb3c0000bbb605b5b448c51dbdc40044a8892a7d7f3280af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:page.html.twig", 19);
        $this->blocks = array(
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
        $__internal_cd2cd06e95d005b50690801f44081ebe38dc5fd4c7fbc6955ee158db6c502c54 = $this->env->getExtension("native_profiler");
        $__internal_cd2cd06e95d005b50690801f44081ebe38dc5fd4c7fbc6955ee158db6c502c54->enter($__internal_cd2cd06e95d005b50690801f44081ebe38dc5fd4c7fbc6955ee158db6c502c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2cd06e95d005b50690801f44081ebe38dc5fd4c7fbc6955ee158db6c502c54->leave($__internal_cd2cd06e95d005b50690801f44081ebe38dc5fd4c7fbc6955ee158db6c502c54_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_28aea41bf1961d905196df949b1a5738ff7b0ea27648ef5f5539d3778414ceef = $this->env->getExtension("native_profiler");
        $__internal_28aea41bf1961d905196df949b1a5738ff7b0ea27648ef5f5539d3778414ceef->enter($__internal_28aea41bf1961d905196df949b1a5738ff7b0ea27648ef5f5539d3778414ceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t<div id=\"checklayout\">
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$.get('";
        // line 25
        echo $this->env->getExtension('routing')->getPath("keosu_core_views_page_check");
        echo "', function(data) {
\t\t\t\t\t\$('#checklayout').html(data);
\t\t\t\t});
\t\t\t} );
\t\t</script>
\t</div>
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "\t\t</div>
\t</div>
";
        
        $__internal_28aea41bf1961d905196df949b1a5738ff7b0ea27648ef5f5539d3778414ceef->leave($__internal_28aea41bf1961d905196df949b1a5738ff7b0ea27648ef5f5539d3778414ceef_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_17209a9b38aee7062e1496d740625f781b4d877d93295ceb71302ec16c1d45b8 = $this->env->getExtension("native_profiler");
        $__internal_17209a9b38aee7062e1496d740625f781b4d877d93295ceb71302ec16c1d45b8->enter($__internal_17209a9b38aee7062e1496d740625f781b4d877d93295ceb71302ec16c1d45b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-book icon-menu\"></span> Pages</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThe page part is about your application page, articles, readers data, etc...
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLet your creation guide your mouse
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-file icon-menu\"></span>Manage pages</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tA page is a page page, no matter about content for instance, it's only a way to display something (but have an idea of what you want to display :P)
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("keosu_core_views_page_manage");
        echo "\" ><button type=\"button\" class=\"btn btn-default\">Manage pages </button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 57
            echo "\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-edit icon-menu\"></span>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</h3>

\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_core_views_page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-default\">Edit ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        
        $__internal_17209a9b38aee7062e1496d740625f781b4d877d93295ceb71302ec16c1d45b8->leave($__internal_17209a9b38aee7062e1496d740625f781b4d877d93295ceb71302ec16c1d45b8_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 65,  114 => 61,  109 => 59,  105 => 57,  101 => 56,  95 => 53,  74 => 34,  68 => 33,  59 => 68,  57 => 33,  46 => 25,  41 => 22,  35 => 21,  11 => 19,);
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

{% block body %}
\t<div id=\"checklayout\">
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$.get('{{path('keosu_core_views_page_check') }}', function(data) {
\t\t\t\t\t\$('#checklayout').html(data);
\t\t\t\t});
\t\t\t} );
\t\t</script>
\t</div>
\t<div id=\"content\">
\t\t<div class=\"panel\">
\t\t\t{% block content %}
\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-book icon-menu\"></span> Pages</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tThe page part is about your application page, articles, readers data, etc...
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLet your creation guide your mouse
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-file icon-menu\"></span>Manage pages</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tA page is a page page, no matter about content for instance, it's only a way to display something (but have an idea of what you want to display :P)
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_views_page_manage') }}\" ><button type=\"button\" class=\"btn btn-default\">Manage pages </button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for page in pages %}
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-edit icon-menu\"></span>{{ page.name }}</h3>

\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_views_page',{'id':page.id}) }}\"><button type=\"button\" class=\"btn btn-default\">Edit {{ page.name }}</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>
\t</div>
{% endblock %}
";
    }
}
