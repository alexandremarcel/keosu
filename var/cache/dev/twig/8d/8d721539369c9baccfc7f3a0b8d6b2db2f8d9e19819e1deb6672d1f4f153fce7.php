<?php

/* KeosuCoreBundle:Page:manage.html.twig */
class __TwigTemplate_b515ac6b2226ff9e5b9f0416cd595d2c4546c91ccd56d007e65acbca84c37cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:manage.html.twig", 18);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c70761a3ba68ac563c676878d182eb01740f08410aa7ffc03ae4826159e3bc09 = $this->env->getExtension("native_profiler");
        $__internal_c70761a3ba68ac563c676878d182eb01740f08410aa7ffc03ae4826159e3bc09->enter($__internal_c70761a3ba68ac563c676878d182eb01740f08410aa7ffc03ae4826159e3bc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c70761a3ba68ac563c676878d182eb01740f08410aa7ffc03ae4826159e3bc09->leave($__internal_c70761a3ba68ac563c676878d182eb01740f08410aa7ffc03ae4826159e3bc09_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_53b33e0d58cebc76ddbd10bb572d32b252e0102018d8006b29e3c8715073b06c = $this->env->getExtension("native_profiler");
        $__internal_53b33e0d58cebc76ddbd10bb572d32b252e0102018d8006b29e3c8715073b06c->enter($__internal_53b33e0d58cebc76ddbd10bb572d32b252e0102018d8006b29e3c8715073b06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Manage pages";
        
        $__internal_53b33e0d58cebc76ddbd10bb572d32b252e0102018d8006b29e3c8715073b06c->leave($__internal_53b33e0d58cebc76ddbd10bb572d32b252e0102018d8006b29e3c8715073b06c_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_d87155891dcbe9e32a0c330bdd1dd3b4848302f5fd7744fa646758a841f78f08 = $this->env->getExtension("native_profiler");
        $__internal_d87155891dcbe9e32a0c330bdd1dd3b4848302f5fd7744fa646758a841f78f08->enter($__internal_d87155891dcbe9e32a0c330bdd1dd3b4848302f5fd7744fa646758a841f78f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<fieldset>
\t\t\t\t<legend><span class=\"glyphicon glyphicon-file icon-menu\"></span>Manage Pages</legend>

\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("keosu_core_views_page_manage_add");
        echo "\"><span class=\"glyphicon glyphicon-plus-sign icon-success\"></span>Add new page</a>

\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>is index</th>
\t\t\t\t\t\t<th>page name</th>
\t\t\t\t\t\t<th>page template</th>
\t\t\t\t\t\t<th colspan=\"2\"></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 42
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 44
            if ($this->getAttribute($context["page"], "isMain", array())) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-right\"></span>
\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "templateId", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 51
            echo $this->env->getExtension('twig_include_panel_extension')->includePanelPage($this->getAttribute($context["page"], "id", array()));
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "\t\t\t\t\t\t<p>No pages</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>is index</th>
\t\t\t\t\t\t<th>page name</th>
\t\t\t\t\t\t<th>page template</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t\t</ul>
\t\t</div>
\t</div>
";
        
        $__internal_d87155891dcbe9e32a0c330bdd1dd3b4848302f5fd7744fa646758a841f78f08->leave($__internal_d87155891dcbe9e32a0c330bdd1dd3b4848302f5fd7744fa646758a841f78f08_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 57,  112 => 55,  103 => 51,  98 => 49,  94 => 48,  91 => 47,  87 => 45,  85 => 44,  81 => 42,  76 => 41,  61 => 29,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
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
{% extends 'KeosuCoreBundle:MainViews:page.html.twig' %}

{% block title %}Manage pages{% endblock %}

{% block content %}

\t<div class=\"row\">
\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t<fieldset>
\t\t\t\t<legend><span class=\"glyphicon glyphicon-file icon-menu\"></span>Manage Pages</legend>

\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('keosu_core_views_page_manage_add') }}\"><span class=\"glyphicon glyphicon-plus-sign icon-success\"></span>Add new page</a>

\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>is index</th>
\t\t\t\t\t\t<th>page name</th>
\t\t\t\t\t\t<th>page template</th>
\t\t\t\t\t\t<th colspan=\"2\"></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t{% for page in pages %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if page.isMain %}
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-hand-right\"></span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ page.name }}</td>
\t\t\t\t\t\t\t<td>{{ page.templateId }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ includePanelPage(page.id) }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>No pages</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>is index</th>
\t\t\t\t\t\t<th>page name</th>
\t\t\t\t\t\t<th>page template</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t\t</ul>
\t\t</div>
\t</div>
{% endblock %}
";
    }
}
