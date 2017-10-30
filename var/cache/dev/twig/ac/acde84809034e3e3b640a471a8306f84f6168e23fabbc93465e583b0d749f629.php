<?php

/* KeosuDataModelMenuModelBundle:Edit:edit.html.twig */
class __TwigTemplate_11df813859b20ec3264b9e6606908122e68a2f3f684d262c897f37d4b156a025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:content.html.twig", "KeosuDataModelMenuModelBundle:Edit:edit.html.twig", 18);
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
        $__internal_190957713d64f2c36b5900aedaa56fa588254c2bcc304ddfe52ccc8d63a581e4 = $this->env->getExtension("native_profiler");
        $__internal_190957713d64f2c36b5900aedaa56fa588254c2bcc304ddfe52ccc8d63a581e4->enter($__internal_190957713d64f2c36b5900aedaa56fa588254c2bcc304ddfe52ccc8d63a581e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuDataModelMenuModelBundle:Edit:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190957713d64f2c36b5900aedaa56fa588254c2bcc304ddfe52ccc8d63a581e4->leave($__internal_190957713d64f2c36b5900aedaa56fa588254c2bcc304ddfe52ccc8d63a581e4_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_176d2e486f54e7f9bb019aa797f1417432eafb12cccbb5c6b204ba85ffda051b = $this->env->getExtension("native_profiler");
        $__internal_176d2e486f54e7f9bb019aa797f1417432eafb12cccbb5c6b204ba85ffda051b->enter($__internal_176d2e486f54e7f9bb019aa797f1417432eafb12cccbb5c6b204ba85ffda051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 22
        echo "Edit Menu entry
";
        
        $__internal_176d2e486f54e7f9bb019aa797f1417432eafb12cccbb5c6b204ba85ffda051b->leave($__internal_176d2e486f54e7f9bb019aa797f1417432eafb12cccbb5c6b204ba85ffda051b_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe76cd93576baecda0986070eec242875f2f5e81c76e67ac2f4e742e550b23f5 = $this->env->getExtension("native_profiler");
        $__internal_fe76cd93576baecda0986070eec242875f2f5e81c76e67ac2f4e742e550b23f5->enter($__internal_fe76cd93576baecda0986070eec242875f2f5e81c76e67ac2f4e742e550b23f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "\t<script>
\t\t// Récupère le div qui contient la collection de tags
\t\tvar collectionHolder = \$('#partlist');

\t\t\$(document).ready(function() {
\t\t\t\$('#partlist').find('li').each(function() {
\t\t\t\taddTagFormDeleteLink(\$(this));
\t\t\t});
\t\t\t\$('#addpart').on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// ajoute un nouveau formulaire tag (voir le prochain bloc de code)
\t\t\t\taddTagForm(collectionHolder);
\t\t\t});
\t\t});
\t\tfunction addTagForm(collectionHolder) {
\t\t\t// Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
\t\t\tvar prototype = \$('#partlist').attr('data-prototype');

\t\t\t// Remplace '__name__' dans le HTML du prototype par un nombre basé sur
\t\t\t// la longueur de la collection courante
\t\t\tvar newForm = prototype.replace(/__name__/g, \$('#partlist').children().length);

\t\t\t// Affiche le formulaire dans la page dans un li, avant le lien \"ajouter un tag\"
\t\t\tvar \$newFormLi = \$('<li></li>').append(newForm);
\t\t\t\$('#partlist').append(\$newFormLi);
\t\t\taddTagFormDeleteLink(\$newFormLi);
\t\t}
\t\tfunction addTagFormDeleteLink(\$tagFormLi) {
\t\t\tvar \$removeFormA = \$('<br style=\"clear:both\"/><a href=\"#\">Delete</a>');
\t\t\t\$tagFormLi.append(\$removeFormA);

\t\t\t\$removeFormA.on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// supprime l'élément li pour le formulaire de tag
\t\t\t\t\$tagFormLi.remove();
\t\t\t});
\t\t}
\t</script>

<div id=\"articleform\">
\t";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "

\t\t<ul id=\"partlist\" class=\"menuparts\" data-prototype=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parts", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menupart"]) {
            // line 75
            echo "\t\t\t\t<li>
\t\t\t\t\t";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "name", array()), 'row');
            echo "
\t\t\t\t\t";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "css", array()), 'row');
            echo "
\t\t\t\t\t";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "file", array()), 'row');
            echo "
\t\t\t\t\t";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "fileActive", array()), 'row');
            echo "
\t\t\t\t\t";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["menupart"], "target", array()), 'row');
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menupart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t</ul>


\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t<br/>
\t\t<br style=\"clear:both\"/>
\t\t<a id=\"addpart\" class=\"btn btn-success\" href=\"#\" class=\"add_tag_link\">Add part</a>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><button type=\"button\" class=\"btn btn-danger\">Cancel</button>

\t";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



</div>
";
        
        $__internal_fe76cd93576baecda0986070eec242875f2f5e81c76e67ac2f4e742e550b23f5->leave($__internal_fe76cd93576baecda0986070eec242875f2f5e81c76e67ac2f4e742e550b23f5_prof);

    }

    public function getTemplateName()
    {
        return "KeosuDataModelMenuModelBundle:Edit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 92,  151 => 86,  146 => 83,  137 => 80,  133 => 79,  129 => 78,  125 => 77,  121 => 76,  118 => 75,  114 => 74,  110 => 73,  105 => 71,  101 => 70,  55 => 26,  49 => 25,  41 => 22,  35 => 21,  11 => 18,);
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


{% block title %}
Edit Menu entry
{% endblock %}

{% block content %}
\t<script>
\t\t// Récupère le div qui contient la collection de tags
\t\tvar collectionHolder = \$('#partlist');

\t\t\$(document).ready(function() {
\t\t\t\$('#partlist').find('li').each(function() {
\t\t\t\taddTagFormDeleteLink(\$(this));
\t\t\t});
\t\t\t\$('#addpart').on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// ajoute un nouveau formulaire tag (voir le prochain bloc de code)
\t\t\t\taddTagForm(collectionHolder);
\t\t\t});
\t\t});
\t\tfunction addTagForm(collectionHolder) {
\t\t\t// Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
\t\t\tvar prototype = \$('#partlist').attr('data-prototype');

\t\t\t// Remplace '__name__' dans le HTML du prototype par un nombre basé sur
\t\t\t// la longueur de la collection courante
\t\t\tvar newForm = prototype.replace(/__name__/g, \$('#partlist').children().length);

\t\t\t// Affiche le formulaire dans la page dans un li, avant le lien \"ajouter un tag\"
\t\t\tvar \$newFormLi = \$('<li></li>').append(newForm);
\t\t\t\$('#partlist').append(\$newFormLi);
\t\t\taddTagFormDeleteLink(\$newFormLi);
\t\t}
\t\tfunction addTagFormDeleteLink(\$tagFormLi) {
\t\t\tvar \$removeFormA = \$('<br style=\"clear:both\"/><a href=\"#\">Delete</a>');
\t\t\t\$tagFormLi.append(\$removeFormA);

\t\t\t\$removeFormA.on('click', function(e) {
\t\t\t\t// empêche le lien de créer un « # » dans l'URL
\t\t\t\te.preventDefault();

\t\t\t\t// supprime l'élément li pour le formulaire de tag
\t\t\t\t\$tagFormLi.remove();
\t\t\t});
\t\t}
\t</script>

<div id=\"articleform\">
\t{{ form_start(form) }}
\t\t{{ form_row(form.title) }}

\t\t<ul id=\"partlist\" class=\"menuparts\" data-prototype=\"{{ form_widget(form.parts.vars.prototype)|e }}\">
\t\t\t{% for menupart in form.parts %}
\t\t\t\t<li>
\t\t\t\t\t{{ form_row(menupart.name) }}
\t\t\t\t\t{{ form_row(menupart.css) }}
\t\t\t\t\t{{ form_row(menupart.file) }}
\t\t\t\t\t{{ form_row(menupart.fileActive) }}
\t\t\t\t\t{{ form_row(menupart.target) }}
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>


\t\t{{ form_rest(form) }}
\t\t<br/>
\t\t<br style=\"clear:both\"/>
\t\t<a id=\"addpart\" class=\"btn btn-success\" href=\"#\" class=\"add_tag_link\">Add part</a>
\t\t<input type=\"submit\" class=\"btn btn-success\" /><button type=\"button\" class=\"btn btn-danger\">Cancel</button>

\t{{ form_end(form) }}



</div>
{% endblock %}

";
    }
}
