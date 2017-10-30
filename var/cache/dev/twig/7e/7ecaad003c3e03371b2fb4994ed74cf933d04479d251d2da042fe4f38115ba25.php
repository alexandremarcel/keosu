<?php

/* KeosuCoreBundle:Page:edit.html.twig */
class __TwigTemplate_3a089f511b842312cf21eb8c7bc4969dbe5354a638ed69dda41e572b2e4de7eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:edit.html.twig", 18);
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
        $__internal_4a5016dfeb972350d0f061694432fdfd3feea10fd74f1f55808d90141f794275 = $this->env->getExtension("native_profiler");
        $__internal_4a5016dfeb972350d0f061694432fdfd3feea10fd74f1f55808d90141f794275->enter($__internal_4a5016dfeb972350d0f061694432fdfd3feea10fd74f1f55808d90141f794275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5016dfeb972350d0f061694432fdfd3feea10fd74f1f55808d90141f794275->leave($__internal_4a5016dfeb972350d0f061694432fdfd3feea10fd74f1f55808d90141f794275_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba7516d6bbe0388eb6337e86e7e0d604eca50287a57edf087160ccf8a8771292 = $this->env->getExtension("native_profiler");
        $__internal_ba7516d6bbe0388eb6337e86e7e0d604eca50287a57edf087160ccf8a8771292->enter($__internal_ba7516d6bbe0388eb6337e86e7e0d604eca50287a57edf087160ccf8a8771292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Page";
        
        $__internal_ba7516d6bbe0388eb6337e86e7e0d604eca50287a57edf087160ccf8a8771292->leave($__internal_ba7516d6bbe0388eb6337e86e7e0d604eca50287a57edf087160ccf8a8771292_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_504ee50e21ec290b6428220f5de9b8244e586e1fd2dec005dd37fe2ea99ce8f6 = $this->env->getExtension("native_profiler");
        $__internal_504ee50e21ec290b6428220f5de9b8244e586e1fd2dec005dd37fe2ea99ce8f6->enter($__internal_504ee50e21ec290b6428220f5de9b8244e586e1fd2dec005dd37fe2ea99ce8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {

\t\t\ttemplateButton(\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["templateDir"]) ? $context["templateDir"] : $this->getContext($context, "templateDir")), "html", null, true);
        echo "\", \"\");
\t\t});
\t</script>
\t<div class=\"panel\">
\t\t<h1>Edit page</h1>

\t\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isMain", array()), 'row');
        echo "
\t\t<div class=\"imgTemplate\">
\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "templateId", array()), 'row');
        echo "
\t\t</div>


\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t\t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>

";
        
        $__internal_504ee50e21ec290b6428220f5de9b8244e586e1fd2dec005dd37fe2ea99ce8f6->leave($__internal_504ee50e21ec290b6428220f5de9b8244e586e1fd2dec005dd37fe2ea99ce8f6_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 44,  87 => 38,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  59 => 27,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
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

{% block title %}Edit Page{% endblock %}

{% block content %}

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {

\t\t\ttemplateButton(\"{{url_base}}\", \"{{templateDir}}\", \"\");
\t\t});
\t</script>
\t<div class=\"panel\">
\t\t<h1>Edit page</h1>

\t\t{{ form_start(form) }}
\t\t{{ form_errors(form) }}
\t\t{{ form_row(form.name) }}
\t\t{{ form_row(form.isMain) }}
\t\t<div class=\"imgTemplate\">
\t\t\t{{ form_row(form.templateId) }}
\t\t</div>


\t\t<br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" ><button type=\"button\" class=\"btn btn-danger\">Cancel</button></a>
\t\t{{ form_end(form) }}
\t</div>

{% endblock %}
";
    }
}
