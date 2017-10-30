<?php

/* KeosuCoreBundle:Form:fields-article.html.twig */
class __TwigTemplate_b8b6850e4682412e8363d2727ae27dab981f887e64dc540cab4e523102f72fde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("MopaBootstrapBundle:Form:fields.html.twig", "KeosuCoreBundle:Form:fields-article.html.twig", 18);
        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eeb1da95d279eb1d76de11980a8ba2dbb332450b0350cd5e3d2bb344727e9f32 = $this->env->getExtension("native_profiler");
        $__internal_eeb1da95d279eb1d76de11980a8ba2dbb332450b0350cd5e3d2bb344727e9f32->enter($__internal_eeb1da95d279eb1d76de11980a8ba2dbb332450b0350cd5e3d2bb344727e9f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Form:fields-article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb1da95d279eb1d76de11980a8ba2dbb332450b0350cd5e3d2bb344727e9f32->leave($__internal_eeb1da95d279eb1d76de11980a8ba2dbb332450b0350cd5e3d2bb344727e9f32_prof);

    }

    // line 20
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_50525977ebaa9598876e161a97ded4a57796396de2bc4eb65f9f1e879a5640ea = $this->env->getExtension("native_profiler");
        $__internal_50525977ebaa9598876e161a97ded4a57796396de2bc4eb65f9f1e879a5640ea->enter($__internal_50525977ebaa9598876e161a97ded4a57796396de2bc4eb65f9f1e879a5640ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 21
        echo "    ";
        ob_start();
        // line 22
        echo "\t     ";
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")))) {
            // line 23
            echo "\t     \t<center>
\t   \t\t \t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")), "html", null, true);
            echo "\" class=\"img-thumbnail img-preview uploader\"/>
\t   \t\t </center>
\t    ";
        }
        // line 27
        echo "\t    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_50525977ebaa9598876e161a97ded4a57796396de2bc4eb65f9f1e879a5640ea->leave($__internal_50525977ebaa9598876e161a97ded4a57796396de2bc4eb65f9f1e879a5640ea_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Form:fields-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  49 => 24,  46 => 23,  43 => 22,  40 => 21,  34 => 20,  11 => 18,);
    }

    public function getSource()
    {
        return "{# \t
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
{% extends 'MopaBootstrapBundle:Form:fields.html.twig' %}

{% block file_widget %}
    {% spaceless %}
\t     {% if image_url is not null %}
\t     \t<center>
\t   \t\t \t<img src=\"{{url_base}}{{ image_url }}\" class=\"img-thumbnail img-preview uploader\"/>
\t   \t\t </center>
\t    {% endif %}
\t    {{ block('form_widget') }}
    {% endspaceless %}
{% endblock %}

";
    }
}
