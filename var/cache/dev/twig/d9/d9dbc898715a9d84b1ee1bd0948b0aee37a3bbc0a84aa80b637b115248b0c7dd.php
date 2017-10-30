<?php

/* KeosuCoreBundle:Page:studio.html.twig */
class __TwigTemplate_b3bb60e24baba360c589580c28650a303ab04f2dce279ff4aaa60a87a9931593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:studio.html.twig", 18);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_496d7bf99346f95d866b529ad79b91048d6e99a930eb5b8fd175ef2e7dcefb07 = $this->env->getExtension("native_profiler");
        $__internal_496d7bf99346f95d866b529ad79b91048d6e99a930eb5b8fd175ef2e7dcefb07->enter($__internal_496d7bf99346f95d866b529ad79b91048d6e99a930eb5b8fd175ef2e7dcefb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:studio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496d7bf99346f95d866b529ad79b91048d6e99a930eb5b8fd175ef2e7dcefb07->leave($__internal_496d7bf99346f95d866b529ad79b91048d6e99a930eb5b8fd175ef2e7dcefb07_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa7fce0fe5ae4f264da07adf186df66be915ec20e91b95e10256baabc7abf6f8 = $this->env->getExtension("native_profiler");
        $__internal_aa7fce0fe5ae4f264da07adf186df66be915ec20e91b95e10256baabc7abf6f8->enter($__internal_aa7fce0fe5ae4f264da07adf186df66be915ec20e91b95e10256baabc7abf6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "
<div class=\"pageinfo\">
\t<h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h4>

\t
\t<div class=\"btn-group\">
\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\tScreen size
\t\t\t<span class=\"caret\"></span>
\t\t</a>
\t\t<ul class=\"dropdown-menu\">
\t\t\t<li>
\t\t\t\t<a onclick=\"changePreviewSize(480,320)\" href=\"#\">Phone</a>
\t\t\t\t<a onclick=\"changePreviewSize(320,480)\" href=\"#\">Phone Landscape</a>
\t\t\t\t<a onclick=\"changePreviewSize(576, 432)\" href=\"#\">Tablet</a>
\t\t\t\t<a onclick=\"changePreviewSize(432,576)\" href=\"#\">Tablet Landscape</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>

<script>
\tfunction changePreviewSize(height, width){
\t\t\$('.templatepreview').css('height',height);
\t\t\$('.templatepreview').css('width',width);
\t\t\$('#iframepreview').attr('height',height);
\t\t\$('#iframepreview').attr('width',width);
\t}
</script>
\t
<div class=\"row\">
\t<div class=\"col-md-5\">
\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 54
            echo "\t\t\t";
            echo $this->env->getExtension('twig_include_panel_extension')->includePanelGadget($this->getAttribute($context["zone"], "zoneId", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), $this->getAttribute($context["zone"], "gadget", array()), (isset($context["gadgets"]) ? $context["gadgets"] : $this->getContext($context, "gadgets")));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t</div>

\t<div class=\"col-md-7\">
\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t<strong>Heads up!</strong>
\t\t\tUse the simulator for more reliability. Some of our features are only available on device.
\t\t</div>
\t\t<iframe style=\"margin:0 auto;display:block;\" id=\"iframepreview\" width=\"320px\" height=\"480px\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/keosu/export/simulator/www/index.html#/Page/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
        echo "\"></iframe>
\t</div>
</div>
";
        
        $__internal_aa7fce0fe5ae4f264da07adf186df66be915ec20e91b95e10256baabc7abf6f8->leave($__internal_aa7fce0fe5ae4f264da07adf186df66be915ec20e91b95e10256baabc7abf6f8_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:studio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 63,  90 => 56,  81 => 54,  77 => 53,  44 => 23,  40 => 21,  34 => 20,  11 => 18,);
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
{% extends 'KeosuCoreBundle:MainViews:page.html.twig' %}

{% block content %}

<div class=\"pageinfo\">
\t<h4>{{ page.name }}</h4>

\t
\t<div class=\"btn-group\">
\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\tScreen size
\t\t\t<span class=\"caret\"></span>
\t\t</a>
\t\t<ul class=\"dropdown-menu\">
\t\t\t<li>
\t\t\t\t<a onclick=\"changePreviewSize(480,320)\" href=\"#\">Phone</a>
\t\t\t\t<a onclick=\"changePreviewSize(320,480)\" href=\"#\">Phone Landscape</a>
\t\t\t\t<a onclick=\"changePreviewSize(576, 432)\" href=\"#\">Tablet</a>
\t\t\t\t<a onclick=\"changePreviewSize(432,576)\" href=\"#\">Tablet Landscape</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>

<script>
\tfunction changePreviewSize(height, width){
\t\t\$('.templatepreview').css('height',height);
\t\t\$('.templatepreview').css('width',width);
\t\t\$('#iframepreview').attr('height',height);
\t\t\$('#iframepreview').attr('width',width);
\t}
</script>
\t
<div class=\"row\">
\t<div class=\"col-md-5\">
\t\t{% for zone in zones %}
\t\t\t{{ includePanelGadget(zone.zoneId,page.id,zone.gadget,gadgets) }}
\t\t{% endfor %}
\t</div>

\t<div class=\"col-md-7\">
\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t\t<strong>Heads up!</strong>
\t\t\tUse the simulator for more reliability. Some of our features are only available on device.
\t\t</div>
\t\t<iframe style=\"margin:0 auto;display:block;\" id=\"iframepreview\" width=\"320px\" height=\"480px\" src=\"{{url_base}}/keosu/export/simulator/www/index.html#/Page/{{ page.id }}\"></iframe>
\t</div>
</div>
{% endblock %}
";
    }
}
