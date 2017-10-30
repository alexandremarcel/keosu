<?php

/* KeosuDataModelLocationModelBundle:View:view.html.twig */
class __TwigTemplate_3f23028e2e06754bfac9c0aa5fc6c39c5d15300f219b18d95b439a8be53fb5d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelLocationModelBundle:View:view.html.twig", 19);
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
        $__internal_ec0484ce916b852c69e3fa73696421a915888461ae0fb2dbef3c045821877d1b = $this->env->getExtension("native_profiler");
        $__internal_ec0484ce916b852c69e3fa73696421a915888461ae0fb2dbef3c045821877d1b->enter($__internal_ec0484ce916b852c69e3fa73696421a915888461ae0fb2dbef3c045821877d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelLocationModelBundle:View:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0484ce916b852c69e3fa73696421a915888461ae0fb2dbef3c045821877d1b->leave($__internal_ec0484ce916b852c69e3fa73696421a915888461ae0fb2dbef3c045821877d1b_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_07dbecabca1f815d0b6880fe4ef5d4385e225a0f283d57799d783805d28ca788 = $this->env->getExtension("native_profiler");
        $__internal_07dbecabca1f815d0b6880fe4ef5d4385e225a0f283d57799d783805d28ca788->enter($__internal_07dbecabca1f815d0b6880fe4ef5d4385e225a0f283d57799d783805d28ca788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    <script>
        \$(document).ready(function () {
            // Init table for article
            \$('#content-table').dataTable({
                \"bPaginate\": true,
                \"bLengthChange\": true,
                \"bFilter\": true,
                \"bSort\": true,
                \"bInfo\": true,
                \"bAutoWidth\": true,
                \"aoColumns\": [
                    null,
                    null,
                    null,
                    null
                ]
            });
        });
    </script>
    <div class=\"row table\">

        <div class=\"col-md-12\">
            <div class=\"clearfix\">
                <h1 class=\"pull-left\">Location</h1>
                <a class=\"right-button pull-right\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("keosu_poi_add");
        echo "\">
                    <button class=\"btn btn-success\" title=\"Create a location\">
                        New location
                    </button>
                </a>
            </div>
            <div id=\"dynamic\" class=\"table\">
                <fieldset>
                    <table class=\"table table-striped table-hover\" id=\"content-table\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Reader</th>
                            <th>Tag</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pois"]) ? $context["pois"] : $this->getContext($context, "pois")));
        foreach ($context['_seq'] as $context["_key"] => $context["poi"]) {
            // line 69
            echo "                            <tr>
                                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["poi"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 71
            if ($this->getAttribute($context["poi"], "reader", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["poi"], "reader", array()), "name", array()), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["poi"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
                echo ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["poi"], "lat", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["poi"], "lng", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 75
            if (($this->getAttribute($context["poi"], "reader", array()) == false)) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_poi_edit", array("id" => $this->getAttribute($context["poi"], "id", array()))), "html", null, true);
                echo "><i
                                                class='glyphicon glyphicon-edit'></i></a>";
            }
            // line 76
            echo "</td>
                                <td>";
            // line 77
            if (($this->getAttribute($context["poi"], "reader", array()) == false)) {
                echo " <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_poi_delete", array("id" => $this->getAttribute($context["poi"], "id", array()))), "html", null, true);
                echo "><i
                                                class='glyphicon glyphicon-remove'></i></a>";
            }
            // line 78
            echo "</td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Reader</th>
                            <th>Tag</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>
";
        
        $__internal_07dbecabca1f815d0b6880fe4ef5d4385e225a0f283d57799d783805d28ca788->leave($__internal_07dbecabca1f815d0b6880fe4ef5d4385e225a0f283d57799d783805d28ca788_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelLocationModelBundle:View:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 82,  145 => 78,  138 => 77,  135 => 76,  128 => 75,  124 => 74,  120 => 73,  108 => 72,  101 => 71,  97 => 70,  94 => 69,  90 => 68,  66 => 47,  40 => 23,  34 => 22,  11 => 19,);
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

{% extends 'KeosuCoreBundle:MainViews:content.html.twig' %}

\t
{% block content %}
    <script>
        \$(document).ready(function () {
            // Init table for article
            \$('#content-table').dataTable({
                \"bPaginate\": true,
                \"bLengthChange\": true,
                \"bFilter\": true,
                \"bSort\": true,
                \"bInfo\": true,
                \"bAutoWidth\": true,
                \"aoColumns\": [
                    null,
                    null,
                    null,
                    null
                ]
            });
        });
    </script>
    <div class=\"row table\">

        <div class=\"col-md-12\">
            <div class=\"clearfix\">
                <h1 class=\"pull-left\">Location</h1>
                <a class=\"right-button pull-right\" href=\"{{ path('keosu_poi_add') }}\">
                    <button class=\"btn btn-success\" title=\"Create a location\">
                        New location
                    </button>
                </a>
            </div>
            <div id=\"dynamic\" class=\"table\">
                <fieldset>
                    <table class=\"table table-striped table-hover\" id=\"content-table\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Reader</th>
                            <th>Tag</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for poi in pois %}
                            <tr>
                                <td>{{ poi.name }}</td>
                                <td>{% if poi.reader %} {{ poi.reader.name }}{% endif %}</td>
                                <td>{% for tag in poi.tags %}{{ tag.tagName }},{% endfor %}</td>
                                <td>{{ poi.lat }}</td>
                                <td>{{ poi.lng }}</td>
                                <td>{% if poi.reader == false %} <a href={{ path('keosu_poi_edit',{'id':poi.id}) }}><i
                                                class='glyphicon glyphicon-edit'></i></a>{% endif %}</td>
                                <td>{% if poi.reader == false %} <a href={{ path('keosu_poi_delete',{'id':poi.id}) }}><i
                                                class='glyphicon glyphicon-remove'></i></a>{% endif %}</td>

                            </tr>
                        {% endfor %}
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Reader</th>
                            <th>Tag</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>
{% endblock %}

";
    }
}
