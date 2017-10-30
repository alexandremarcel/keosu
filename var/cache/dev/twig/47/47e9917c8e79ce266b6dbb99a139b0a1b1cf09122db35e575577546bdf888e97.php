<?php

/* KeosuCoreBundle:Page:editGadget.html.twig */
class __TwigTemplate_8082380c26f9e0309e2d425064f832f6c19049aeb643585f2ab2e6f0e66afbc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:page.html.twig", "KeosuCoreBundle:Page:editGadget.html.twig", 19);
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
        $__internal_efa8946019d35141947f09a49135f09806e9bbeb64a4a91bd017484cb9b8844d = $this->env->getExtension("native_profiler");
        $__internal_efa8946019d35141947f09a49135f09806e9bbeb64a4a91bd017484cb9b8844d->enter($__internal_efa8946019d35141947f09a49135f09806e9bbeb64a4a91bd017484cb9b8844d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:editGadget.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa8946019d35141947f09a49135f09806e9bbeb64a4a91bd017484cb9b8844d->leave($__internal_efa8946019d35141947f09a49135f09806e9bbeb64a4a91bd017484cb9b8844d_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dffd6e16099d07a1d2263c475cc027a985d14941cd463a128f1c40619c7c093 = $this->env->getExtension("native_profiler");
        $__internal_0dffd6e16099d07a1d2263c475cc027a985d14941cd463a128f1c40619c7c093->enter($__internal_0dffd6e16099d07a1d2263c475cc027a985d14941cd463a128f1c40619c7c093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "\tEdit gadget
";
        
        $__internal_0dffd6e16099d07a1d2263c475cc027a985d14941cd463a128f1c40619c7c093->leave($__internal_0dffd6e16099d07a1d2263c475cc027a985d14941cd463a128f1c40619c7c093_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6229ca422b38f480746728b8a795a47aba6a5cb458c582481816e0aeb680ce5 = $this->env->getExtension("native_profiler");
        $__internal_e6229ca422b38f480746728b8a795a47aba6a5cb458c582481816e0aeb680ce5->enter($__internal_e6229ca422b38f480746728b8a795a47aba6a5cb458c582481816e0aeb680ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "<h1>Edit gadget</h1>
<br/>
<div>
\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

\t\t<div class=\"imgTemplate\">
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "template", array()), 'row');
        echo "
\t\t</div>

\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shared", array()), 'row');
        echo "
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "config", array()), 'row');
        echo "

\t\t<br class=\"clear\"/><br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t<button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t\t</a>

\t";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
<script>
\t\$(document).ready(function() {
\t\ttemplateButton(\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["gadgetDir"]) ? $context["gadgetDir"] : $this->getContext($context, "gadgetDir")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["gadgetName"]) ? $context["gadgetName"] : $this->getContext($context, "gadgetName")), "html", null, true);
        echo "\");

        // This is a very nasty hack for resolving a issue encountered during the save of the menu gadget
        // Sometimes, a page included in the config is not taken into account
        if ('";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["gadgetName"]) ? $context["gadgetName"] : $this->getContext($context, "gadgetName")), "html", null, true);
        echo "' == 'keosu-menu') {
            \$('#content form').submit(function() {
                \$('#content .collection-items select').each(function(index) {
                    \$(this).attr('name', 'form[config][page][' + (index+1) + ']')
                });
            });
        }
\t});
</script>
";
        
        $__internal_e6229ca422b38f480746728b8a795a47aba6a5cb458c582481816e0aeb680ce5->leave($__internal_e6229ca422b38f480746728b8a795a47aba6a5cb458c582481816e0aeb680ce5_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:editGadget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  95 => 48,  87 => 43,  76 => 35,  72 => 34,  66 => 31,  60 => 28,  55 => 25,  49 => 24,  41 => 22,  35 => 21,  11 => 19,);
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

{% block title %}
\tEdit gadget
{% endblock %}
{% block content %}
<h1>Edit gadget</h1>
<br/>
<div>
\t{{ form_start(form) }}

\t\t<div class=\"imgTemplate\">
\t\t\t{{ form_row(form.template) }}
\t\t</div>

\t\t{{ form_row(form.shared) }}
\t\t{{ form_row(form.config) }}

\t\t<br class=\"clear\"/><br class=\"clear\"/><br class=\"clear\"/>
\t\t<input type=\"submit\" class=\"btn btn-success\" />&nbsp;
\t\t<a class=\"confirmModal\" href=\"javascript:history.go(-1);\" >
\t\t\t<button type=\"button\" class=\"btn btn-danger\">Cancel</button>
\t\t</a>

\t{{ form_end(form) }}

</div>
<script>
\t\$(document).ready(function() {
\t\ttemplateButton(\"{{url_base}}\", \"{{gadgetDir}}\", \"{{gadgetName}}\");

        // This is a very nasty hack for resolving a issue encountered during the save of the menu gadget
        // Sometimes, a page included in the config is not taken into account
        if ('{{gadgetName}}' == 'keosu-menu') {
            \$('#content form').submit(function() {
                \$('#content .collection-items select').each(function(index) {
                    \$(this).attr('name', 'form[config][page][' + (index+1) + ']')
                });
            });
        }
\t});
</script>
{% endblock %}


";
    }
}
