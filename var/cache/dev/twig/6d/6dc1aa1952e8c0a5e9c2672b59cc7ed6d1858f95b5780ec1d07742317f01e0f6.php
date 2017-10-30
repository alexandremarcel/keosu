<?php

/* KeosuCoreBundle:MainViews:content.html.twig */
class __TwigTemplate_ae8ec4bee927c5686db6ecfd82f327ba20033b17be7c6c6ad6a73ce335254834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle::page.html.twig", "KeosuCoreBundle:MainViews:content.html.twig", 19);
        $this->blocks = array(
            'contentmenu' => array($this, 'block_contentmenu'),
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
        $__internal_80856aaa86b3589450223f706af6180782d1b2cf43b45d889550b0becb11a7b4 = $this->env->getExtension("native_profiler");
        $__internal_80856aaa86b3589450223f706af6180782d1b2cf43b45d889550b0becb11a7b4->enter($__internal_80856aaa86b3589450223f706af6180782d1b2cf43b45d889550b0becb11a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:MainViews:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80856aaa86b3589450223f706af6180782d1b2cf43b45d889550b0becb11a7b4->leave($__internal_80856aaa86b3589450223f706af6180782d1b2cf43b45d889550b0becb11a7b4_prof);

    }

    // line 20
    public function block_contentmenu($context, array $blocks = array())
    {
        $__internal_67fbbd1f03349608531414451fb2661ba38b44be543d8b7117035e9486b9797b = $this->env->getExtension("native_profiler");
        $__internal_67fbbd1f03349608531414451fb2661ba38b44be543d8b7117035e9486b9797b->enter($__internal_67fbbd1f03349608531414451fb2661ba38b44be543d8b7117035e9486b9797b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmenu"));

        // line 21
        echo "<div class=\"activesidebar\">
\t";
        
        $__internal_67fbbd1f03349608531414451fb2661ba38b44be543d8b7117035e9486b9797b->leave($__internal_67fbbd1f03349608531414451fb2661ba38b44be543d8b7117035e9486b9797b_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e639f7030eb5d2c60b857df21c933827f921ab77e08695e5d3e113bfac1d874 = $this->env->getExtension("native_profiler");
        $__internal_8e639f7030eb5d2c60b857df21c933827f921ab77e08695e5d3e113bfac1d874->enter($__internal_8e639f7030eb5d2c60b857df21c933827f921ab77e08695e5d3e113bfac1d874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "\t\t<div id=\"content\">
\t\t\t<div class=\"panel\">
\t\t\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_8e639f7030eb5d2c60b857df21c933827f921ab77e08695e5d3e113bfac1d874->leave($__internal_8e639f7030eb5d2c60b857df21c933827f921ab77e08695e5d3e113bfac1d874_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_041c51e38cd0d43382fcd3c044e2790bce0fc968d4814d91ddccfc66344293aa = $this->env->getExtension("native_profiler");
        $__internal_041c51e38cd0d43382fcd3c044e2790bce0fc968d4814d91ddccfc66344293aa->enter($__internal_041c51e38cd0d43382fcd3c044e2790bce0fc968d4814d91ddccfc66344293aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "\t\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-th icon-menu\"></span> Content</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tIn the content, mustly the first page you see, you will add content for your application. But don't worry, the page will come in a second step.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tHave fun
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Readers</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tA reader is a connector to an external source (website, RSS, software etc ...) to import contents in Keosu.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("keosu_ReaderManager_manage");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage readers</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-pushpin icon-menu\"></span>Article</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAn article is ... well ... a simple article with title, content, and pictures ...
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn-container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("keosu_article_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage articles</button></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-map-marker icon-menu\"></span>Location</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tA point on a map
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("keosu_location_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage POI</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-picture icon-menu\"></span>Picture</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tImport pictures to feed your galleries
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("keosu_picture_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage pictures</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-calendar icon-menu\"></span>Event</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAn event of a calendar
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("keosu_event_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage events</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-list icon-menu\"></span>Menu</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAdd awesome menus to your project app
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("keosu_menu_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage menus</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Search</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tManage searches entries
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("keosu_search_viewlist");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Manage searches</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_041c51e38cd0d43382fcd3c044e2790bce0fc968d4814d91ddccfc66344293aa->leave($__internal_041c51e38cd0d43382fcd3c044e2790bce0fc968d4814d91ddccfc66344293aa_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 101,  159 => 92,  147 => 83,  135 => 74,  123 => 65,  111 => 56,  98 => 46,  77 => 27,  71 => 26,  62 => 107,  60 => 26,  56 => 24,  50 => 23,  42 => 21,  36 => 20,  11 => 19,);
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
{% block contentmenu %}
<div class=\"activesidebar\">
\t{% endblock %}
\t{% block body %}
\t\t<div id=\"content\">
\t\t\t<div class=\"panel\">
\t\t\t\t{% block content %}
\t\t\t\t\t<div class=\"dashboard\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t\t\t<h2><span class=\"glyphicon glyphicon-th icon-menu\"></span> Content</h2>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tIn the content, mustly the first page you see, you will add content for your application. But don't worry, the page will come in a second step.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tHave fun
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Readers</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tA reader is a connector to an external source (website, RSS, software etc ...) to import contents in Keosu.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_manage') }}\"><button type=\"button\" class=\"btn btn-default\">Manage readers</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-pushpin icon-menu\"></span>Article</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAn article is ... well ... a simple article with title, content, and pictures ...
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"btn-container\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_article_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage articles</button></a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-map-marker icon-menu\"></span>Location</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tA point on a map
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_location_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage POI</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-picture icon-menu\"></span>Picture</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tImport pictures to feed your galleries
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_picture_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage pictures</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-calendar icon-menu\"></span>Event</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAn event of a calendar
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_event_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage events</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-list icon-menu\"></span>Menu</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tAdd awesome menus to your project app
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_menu_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage menus</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"wellcustom\">
\t\t\t\t\t\t\t\t\t<h3><span class=\"glyphicon glyphicon-search icon-menu\"></span>Search</h3>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tManage searches entries
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_search_viewlist') }}\"><button type=\"button\" class=\"btn btn-default\">Manage searches</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}
";
    }
}
