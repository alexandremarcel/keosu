<?php

/* KeosuCoreBundle:App:manage.html.twig */
class __TwigTemplate_d7e3d4151a2190144093709dc46c7c82d3561ae73d02d03b579d509b264f4e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:configuration.html.twig", "KeosuCoreBundle:App:manage.html.twig", 19);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3f948a6fe0244b910ac599e38a1dacc1b4969a9fe5ebe4fab6fa2dd4383500f = $this->env->getExtension("native_profiler");
        $__internal_a3f948a6fe0244b910ac599e38a1dacc1b4969a9fe5ebe4fab6fa2dd4383500f->enter($__internal_a3f948a6fe0244b910ac599e38a1dacc1b4969a9fe5ebe4fab6fa2dd4383500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:App:manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f948a6fe0244b910ac599e38a1dacc1b4969a9fe5ebe4fab6fa2dd4383500f->leave($__internal_a3f948a6fe0244b910ac599e38a1dacc1b4969a9fe5ebe4fab6fa2dd4383500f_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_6996226e130637d1ba61b580ee04f7688b92c0e569134df8b524d867ad3e7b8b = $this->env->getExtension("native_profiler");
        $__internal_6996226e130637d1ba61b580ee04f7688b92c0e569134df8b524d867ad3e7b8b->enter($__internal_6996226e130637d1ba61b580ee04f7688b92c0e569134df8b524d867ad3e7b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "<div class=\"panel\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"wellcustom\">
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>Apps</legend>
\t\t\t\t\t
\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("keosu_core_app_manage_add");
        echo "\">Add new app</a>
\t\t\t\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>App name</th>
\t\t\t\t\t\t\t\t<th>App Theme</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 41
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "theme", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_core_app_manage_edit", array("id" => $this->getAttribute($context["app"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>App name</th>
\t\t\t\t\t\t\t\t<th>App Theme</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6996226e130637d1ba61b580ee04f7688b92c0e569134df8b524d867ad3e7b8b->leave($__internal_6996226e130637d1ba61b580ee04f7688b92c0e569134df8b524d867ad3e7b8b_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:App:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 49,  79 => 45,  74 => 43,  70 => 42,  67 => 41,  63 => 40,  49 => 29,  40 => 22,  34 => 21,  11 => 19,);
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

{% extends 'KeosuCoreBundle:MainViews:configuration.html.twig' %}

{% block body %}
<div class=\"panel\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"wellcustom\">
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>Apps</legend>
\t\t\t\t\t
\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('keosu_core_app_manage_add') }}\">Add new app</a>
\t\t\t\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>App name</th>
\t\t\t\t\t\t\t\t<th>App Theme</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for app in apps %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>{{ app.name }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ app.theme }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('keosu_core_app_manage_edit',{'id':app.id}) }}\"><i class=\"glyphicon glyphicon-edit\"></i></a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>App name</th>
\t\t\t\t\t\t\t\t<th>App Theme</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
";
    }
}
