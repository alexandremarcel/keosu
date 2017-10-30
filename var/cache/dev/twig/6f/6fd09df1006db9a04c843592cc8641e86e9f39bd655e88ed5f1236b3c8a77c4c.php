<?php

/* KeosuDataModelArticleModelBundle:View:view.html.twig */
class __TwigTemplate_cdae2fc95951aba52f02994b7da7877e766bb815063df4be37ea8f73b8ccea3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelArticleModelBundle:View:view.html.twig", 18);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92413cc71c971540835a0fd7d6d4b23425cf26329f9f9b6b670d174b0950cb5a = $this->env->getExtension("native_profiler");
        $__internal_92413cc71c971540835a0fd7d6d4b23425cf26329f9f9b6b670d174b0950cb5a->enter($__internal_92413cc71c971540835a0fd7d6d4b23425cf26329f9f9b6b670d174b0950cb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelArticleModelBundle:View:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92413cc71c971540835a0fd7d6d4b23425cf26329f9f9b6b670d174b0950cb5a->leave($__internal_92413cc71c971540835a0fd7d6d4b23425cf26329f9f9b6b670d174b0950cb5a_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_c074ca3f495b03112f40dc9ce3c416bb513b16e5970ace0afbb411d38e98a5d6 = $this->env->getExtension("native_profiler");
        $__internal_c074ca3f495b03112f40dc9ce3c416bb513b16e5970ace0afbb411d38e98a5d6->enter($__internal_c074ca3f495b03112f40dc9ce3c416bb513b16e5970ace0afbb411d38e98a5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "<script>
\$(document).ready(function() {
\t// Init table for article
\t\$('#content-table').dataTable({
\t\t\t\"bPaginate\": true,
            \"bLengthChange\": true,
            \"bFilter\": true,
            \"bSort\": true,
            \"bInfo\": true,
            \"bAutoWidth\": true,
         \t\"aoColumns\": [
                            null,
                            null,
                            null,
                            null,
                            null 
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"clearfix\">
\t\t    \t\t<h1 class=\"pull-left\">Articles</h1>
\t\t    \t\t<a class=\"right-button pull-right\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("keosu_article_add");
        echo "\">
\t\t\t\t\t\t<button class=\"btn btn-success\" title=\"Create an article\">
\t\t\t\t\t\t\tNew article
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 66
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo $this->getAttribute($context["article"], "title", array());
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo ",
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>";
            // line 73
            if ($this->getAttribute($context["article"], "reader", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "reader", array()), "name", array()), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 74
            if ((($this->getAttribute($context["article"], "reader", array()) == false) || ($this->getAttribute($context["article"], "reader", array()) && ($this->getAttribute($this->getAttribute($context["article"], "reader", array()), "allowupdate", array()) == false)))) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-edit'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 75
            if ((($this->getAttribute($context["article"], "reader", array()) == false) || ($this->getAttribute($context["article"], "reader", array()) && ($this->getAttribute($this->getAttribute($context["article"], "reader", array()), "allowupdate", array()) == false)))) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "><i class='glyphicon glyphicon-remove'></i></a>";
            }
            echo "</td>
\t\t\t\t\t\t\t</tr>
    \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_c074ca3f495b03112f40dc9ce3c416bb513b16e5970ace0afbb411d38e98a5d6->leave($__internal_c074ca3f495b03112f40dc9ce3c416bb513b16e5970ace0afbb411d38e98a5d6_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelArticleModelBundle:View:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 77,  131 => 75,  123 => 74,  116 => 73,  113 => 72,  104 => 70,  100 => 69,  95 => 67,  92 => 66,  88 => 65,  67 => 47,  40 => 22,  34 => 21,  11 => 18,);
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

\t
{% block content %}
<script>
\$(document).ready(function() {
\t// Init table for article
\t\$('#content-table').dataTable({
\t\t\t\"bPaginate\": true,
            \"bLengthChange\": true,
            \"bFilter\": true,
            \"bSort\": true,
            \"bInfo\": true,
            \"bAutoWidth\": true,
         \t\"aoColumns\": [
                            null,
                            null,
                            null,
                            null,
                            null 
\t\t\t]});
});
</script>
<div class=\"row table\">
\t<div class=\"col-md-12\">
\t\t<div id=\"dynamic\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"clearfix\">
\t\t    \t\t<h1 class=\"pull-left\">Articles</h1>
\t\t    \t\t<a class=\"right-button pull-right\" href=\"{{ path('keosu_article_add') }}\">
\t\t\t\t\t\t<button class=\"btn btn-success\" title=\"Create an article\">
\t\t\t\t\t\t\tNew article
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover clearfix\" id=\"content-table\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ article.title|raw }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% for tag in article.tags %}
\t\t\t\t\t\t\t\t\t\t{{tag.tagName}},
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>{% if article.reader %} {{article.reader.name}}{% endif %}</td>
\t\t\t\t\t\t\t\t<td>{% if article.reader == false or (article.reader and article.reader.allowupdate == false) %} <a href={{ path('keosu_article_edit',{'id':article.id}) }}><i class='glyphicon glyphicon-edit'></i></a>{% endif %}</td>
\t\t\t\t\t\t\t\t<td>{% if article.reader == false or (article.reader and article.reader.allowupdate == false) %} <a href={{ path('keosu_article_delete',{'id':article.id}) }}><i class='glyphicon glyphicon-remove'></i></a>{% endif %}</td>
\t\t\t\t\t\t\t</tr>
    \t\t\t\t{% endfor %}\t
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t\t<th>Reader</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</fieldset>
\t\t</div>
\t</div>
</div>
{% endblock %}

";
    }
}
