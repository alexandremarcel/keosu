<?php

/* KeosuCoreBundle:Reader:manage.html.twig */
class __TwigTemplate_d07ccd9b8ee375f8396ed3f5e73ae713d933567e2a557b6f2bf28e02bbd66c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuCoreBundle:Reader:manage.html.twig", 18);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0e49e399ba8dcedfba3d25a9628a67c4c963e7a0c0e4e73db41cfab3886730f = $this->env->getExtension("native_profiler");
        $__internal_d0e49e399ba8dcedfba3d25a9628a67c4c963e7a0c0e4e73db41cfab3886730f->enter($__internal_d0e49e399ba8dcedfba3d25a9628a67c4c963e7a0c0e4e73db41cfab3886730f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Reader:manage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e49e399ba8dcedfba3d25a9628a67c4c963e7a0c0e4e73db41cfab3886730f->leave($__internal_d0e49e399ba8dcedfba3d25a9628a67c4c963e7a0c0e4e73db41cfab3886730f_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ef890f369bb2adf770a349b7b65986d5ad5e663a40774390114bbe5c15532f = $this->env->getExtension("native_profiler");
        $__internal_68ef890f369bb2adf770a349b7b65986d5ad5e663a40774390114bbe5c15532f->enter($__internal_68ef890f369bb2adf770a349b7b65986d5ad5e663a40774390114bbe5c15532f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add a new reader";
        
        $__internal_68ef890f369bb2adf770a349b7b65986d5ad5e663a40774390114bbe5c15532f->leave($__internal_68ef890f369bb2adf770a349b7b65986d5ad5e663a40774390114bbe5c15532f_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc6c576dcb4ed34fe898e9c845046293e24d38ef2f15c8162028ddba74384870 = $this->env->getExtension("native_profiler");
        $__internal_cc6c576dcb4ed34fe898e9c845046293e24d38ef2f15c8162028ddba74384870->enter($__internal_cc6c576dcb4ed34fe898e9c845046293e24d38ef2f15c8162028ddba74384870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "<div class=\"row\">
\t<div class=\"col-md-4 table-actions-column\">
\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<strong>Reader Type</strong>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<div>
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "readertype", array()), 'widget');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t</div>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Add a reader\" ></input> 
\t\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t\t\t</a>
\t\t</form>
\t</div>
\t<div class=\"col-md-8\">
\t\t<fieldset>
\t\t\t<legend>Readers</legend>
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Reader name</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 56
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((("keosu_ReaderManager_" . $this->getAttribute($context["content"], "service", array())) . "_sync"), array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-refresh\" title=\"Sync\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((("keosu_ReaderManager_" . $this->getAttribute($context["content"], "service", array())) . "_edit"), array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\" title=\"Edit\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_ReaderManager_edit_delete", array("id" => $this->getAttribute($context["content"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-remove\" title=\"Delete\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "\t\t\t\t\t<p>No content</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Reader name</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</fieldset>
\t</div>
</div>
";
        
        $__internal_cc6c576dcb4ed34fe898e9c845046293e24d38ef2f15c8162028ddba74384870->leave($__internal_cc6c576dcb4ed34fe898e9c845046293e24d38ef2f15c8162028ddba74384870_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Reader:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 71,  130 => 69,  121 => 65,  115 => 62,  109 => 59,  104 => 57,  101 => 56,  96 => 55,  69 => 31,  65 => 30,  57 => 25,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
    }

    public function getSource()
    {
        return "\t{# \t
\tKeosu is an open source CMS for mobile app
\tCopyright (C) 2016  Pockeit

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
{% extends 'KeosuCoreBundle:MainViews:content.html.twig' %}

{% block title %}Add a new reader{% endblock %}

{% block content %}
<div class=\"row\">
\t<div class=\"col-md-4 table-actions-column\">
\t\t{{ form_start(form) }}
\t\t\t<strong>Reader Type</strong>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<div>
\t\t\t\t{{ form_widget(form.readertype) }}
\t\t\t\t{{ form_rest(form) }}
\t\t\t</div>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"Add a reader\" ></input> 
\t\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t\t\t</a>
\t\t</form>
\t</div>
\t<div class=\"col-md-8\">
\t\t<fieldset>
\t\t\t<legend>Readers</legend>
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Reader name</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t{% for content in contents %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ content.name }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_'~content.service~'_sync',{'id':content.id}) }}\"><i class=\"glyphicon glyphicon-refresh\" title=\"Sync\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_' ~ content.service ~ '_edit',{'id':content.id}) }}\"><i class=\"glyphicon glyphicon-edit\" title=\"Edit\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('keosu_ReaderManager_edit_delete',{'id':content.id}) }}\"><i class=\"glyphicon glyphicon-remove\" title=\"Delete\"></i></a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<p>No content</p>
\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Reader name</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t</fieldset>
\t</div>
</div>
{% endblock %}
";
    }
}
