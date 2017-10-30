<?php

/* KeosuCoreBundle:App:edit.html.twig */
class __TwigTemplate_1e5791cf07111886ae557a11f42d5875840cfda1cb586ef91052d4ed12ed1c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("KeosuCoreBundle:MainViews:configuration.html.twig", "KeosuCoreBundle:App:edit.html.twig", 18);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KeosuCoreBundle:MainViews:configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2ce74de3e683d19ba9f21a7a2de251e55a94e418e0e5326f6877a87be16eeed = $this->env->getExtension("native_profiler");
        $__internal_c2ce74de3e683d19ba9f21a7a2de251e55a94e418e0e5326f6877a87be16eeed->enter($__internal_c2ce74de3e683d19ba9f21a7a2de251e55a94e418e0e5326f6877a87be16eeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:App:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ce74de3e683d19ba9f21a7a2de251e55a94e418e0e5326f6877a87be16eeed->leave($__internal_c2ce74de3e683d19ba9f21a7a2de251e55a94e418e0e5326f6877a87be16eeed_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e96d0eeb87d42c99faf1cf36d2e6374408277aa4d785d2a213a9a802f67bd11 = $this->env->getExtension("native_profiler");
        $__internal_7e96d0eeb87d42c99faf1cf36d2e6374408277aa4d785d2a213a9a802f67bd11->enter($__internal_7e96d0eeb87d42c99faf1cf36d2e6374408277aa4d785d2a213a9a802f67bd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit App";
        
        $__internal_7e96d0eeb87d42c99faf1cf36d2e6374408277aa4d785d2a213a9a802f67bd11->leave($__internal_7e96d0eeb87d42c99faf1cf36d2e6374408277aa4d785d2a213a9a802f67bd11_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_78e2aa07928850be00db02aaf8bb6c28e70ff8d065982c3587e1eb5098299348 = $this->env->getExtension("native_profiler");
        $__internal_78e2aa07928850be00db02aaf8bb6c28e70ff8d065982c3587e1eb5098299348->enter($__internal_78e2aa07928850be00db02aaf8bb6c28e70ff8d065982c3587e1eb5098299348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    <script>
        \$(document).ready(function () {
            themeButton(\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["themeDir"]) ? $context["themeDir"] : $this->getContext($context, "themeDir")), "html", null, true);
        echo "\");
        });

        var _URL = window.URL || window.webkitURL;
        /*
         *Test the size of an image uploaded
         *@param input : tag input controller
         *@param width : width expected
         *@param height : height expected
         *@param callback : function who upload the image if it's ok
         */
        function check(input, width, height, callback) {
            var file, img;
            if ((file = input.files[0])) {
                img = new Image();
                img.onload = function () {
                    if (this.width != width || this.height != height) {
                        alert(\"Warning: Width \" + width + \" / Height \" + height + \" expected\");
                        callback(0, input);
                    } else {
                        callback(1, input);
                    }
                };
            }
            img.src = _URL.createObjectURL(file);
        }

        /*
         *Change the preview with the image uploaded
         *@param input : tag input controller
         *@param preview : string who contain the name of the marker \"preview\".
         */
        function readURL(input, preview) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    \$('#' + preview).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <div class=\"panel\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 72
        if ((isset($context["firstApp"]) ? $context["firstApp"] : $this->getContext($context, "firstApp"))) {
            // line 73
            echo "                    <div class=\"alert alert-success\">
                        <strong>Welcome to Keosu!</strong>
                        To start, create your first app.
                    </div>
                ";
        }
        // line 78
        echo "                <div class=\"panel\">
                    <h1>Edit App</h1>
                    ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <fieldset>
                        <legend>Main Params</legend>
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "packageName", array()), 'row');
        echo "
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "version", array()), 'row');
        echo "
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
                        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row');
        echo "
                        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "

                        <div class=\"img-theme\">
                            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'row');
        echo "
                        </div>
                    </fieldset>

                    <!-- Trigger Button HTML -->
                    <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#advanced\"
                           value=\"Advanced...\">

                    <div id=\"advanced\" class=\"collapse\">
                        <fieldset>
                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "debugMode", array()), 'row');
        echo "
                            <div class=\"row\">
                                <div class=\"col-lg-9 col-lg-push-3\">
                                    <span class=\"help-block\">This param allow to debug your app with <a
                                                href=\"https://people.apache.org/~pmuellr/weinre/docs/latest/Home.html\">Weinre</a> on the port 8080.</span>
                                </div>
                            </div>
                        </fieldset>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#icons\"
                               value=\"Icons...\">

                        <div id=\"icons\" class=\"collapse\">
                            ";
        // line 118
        $this->loadTemplate("KeosuCoreBundle:App:editIcones.html.twig", "KeosuCoreBundle:App:edit.html.twig", 118)->display($context);
        // line 119
        echo "                        </div>
                        <br class=\"clear\"/><br class=\"clear\"/>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#splashscreens\"
                               value=\"Splash screens...\">

                        <div id=\"splashscreens\" class=\"collapse\">
                            ";
        // line 127
        $this->loadTemplate("KeosuCoreBundle:App:editSplashscreens.html.twig", "KeosuCoreBundle:App:edit.html.twig", 127)->display($context);
        // line 128
        echo "                        </div>
                        <br class=\"clear\"/>


                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packageToConfigure"]) ? $context["packageToConfigure"] : $this->getContext($context, "packageToConfigure")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 133
            echo "                            ";
            echo $this->env->getExtension('twig_include_panel_extension')->includePanelAppConfig($this->getAttribute($context["p"], "name", array()), $this->getAttribute($context["p"], "type", array()), null, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "configPackages", array()), $this->getAttribute($context["p"], "name", array())));
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#configXML\"
                               value=\"Preferences...\">

                        <div id=\"configXML\" class=\"collapse\">
                            <fieldset>
                                ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "preferences", array()), 'row');
        echo "
                            </fieldset>
                        </div>
                        <br class=\"clear\"/>
                    </div>

                    <br class=\"clear\"/><br class=\"clear\"/>
                    <input type=\"submit\" class=\"btn btn-success\"/>&nbsp;
                    <a class=\"confirmModal\" href=\"javascript:history.go(-1);\">
                        <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
                    </a>
                    ";
        // line 153
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_78e2aa07928850be00db02aaf8bb6c28e70ff8d065982c3587e1eb5098299348->leave($__internal_78e2aa07928850be00db02aaf8bb6c28e70ff8d065982c3587e1eb5098299348_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:App:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 153,  235 => 142,  226 => 135,  217 => 133,  213 => 132,  207 => 128,  205 => 127,  195 => 119,  193 => 118,  176 => 104,  163 => 94,  157 => 91,  153 => 90,  149 => 89,  145 => 88,  141 => 87,  137 => 86,  133 => 85,  126 => 81,  122 => 80,  118 => 78,  111 => 73,  109 => 72,  57 => 25,  53 => 23,  47 => 22,  35 => 20,  11 => 18,);
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
{% extends 'KeosuCoreBundle:MainViews:configuration.html.twig' %}

{% block title %}Edit App{% endblock %}

{% block body %}
    <script>
        \$(document).ready(function () {
            themeButton(\"{{ url_base }}\", \"{{ themeDir }}\");
        });

        var _URL = window.URL || window.webkitURL;
        /*
         *Test the size of an image uploaded
         *@param input : tag input controller
         *@param width : width expected
         *@param height : height expected
         *@param callback : function who upload the image if it's ok
         */
        function check(input, width, height, callback) {
            var file, img;
            if ((file = input.files[0])) {
                img = new Image();
                img.onload = function () {
                    if (this.width != width || this.height != height) {
                        alert(\"Warning: Width \" + width + \" / Height \" + height + \" expected\");
                        callback(0, input);
                    } else {
                        callback(1, input);
                    }
                };
            }
            img.src = _URL.createObjectURL(file);
        }

        /*
         *Change the preview with the image uploaded
         *@param input : tag input controller
         *@param preview : string who contain the name of the marker \"preview\".
         */
        function readURL(input, preview) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    \$('#' + preview).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <div class=\"panel\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% if firstApp %}
                    <div class=\"alert alert-success\">
                        <strong>Welcome to Keosu!</strong>
                        To start, create your first app.
                    </div>
                {% endif %}
                <div class=\"panel\">
                    <h1>Edit App</h1>
                    {{ form_start(form) }}
                    {{ form_errors(form) }}

                    <fieldset>
                        <legend>Main Params</legend>
                        {{ form_row(form.name) }}
                        {{ form_row(form.packageName) }}
                        {{ form_row(form.version) }}
                        {{ form_row(form.description) }}
                        {{ form_row(form.author) }}
                        {{ form_row(form.website) }}
                        {{ form_row(form.email) }}

                        <div class=\"img-theme\">
                            {{ form_row(form.theme) }}
                        </div>
                    </fieldset>

                    <!-- Trigger Button HTML -->
                    <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#advanced\"
                           value=\"Advanced...\">

                    <div id=\"advanced\" class=\"collapse\">
                        <fieldset>
                            {{ form_row(form.debugMode) }}
                            <div class=\"row\">
                                <div class=\"col-lg-9 col-lg-push-3\">
                                    <span class=\"help-block\">This param allow to debug your app with <a
                                                href=\"https://people.apache.org/~pmuellr/weinre/docs/latest/Home.html\">Weinre</a> on the port 8080.</span>
                                </div>
                            </div>
                        </fieldset>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#icons\"
                               value=\"Icons...\">

                        <div id=\"icons\" class=\"collapse\">
                            {% include 'KeosuCoreBundle:App:editIcones.html.twig' %}
                        </div>
                        <br class=\"clear\"/><br class=\"clear\"/>

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#splashscreens\"
                               value=\"Splash screens...\">

                        <div id=\"splashscreens\" class=\"collapse\">
                            {% include 'KeosuCoreBundle:App:editSplashscreens.html.twig' %}
                        </div>
                        <br class=\"clear\"/>


                        {% for p in packageToConfigure %}
                            {{ includePanelAppConfig(p.name,p.type,null,attribute(form.configPackages,p.name) ) }}
                        {% endfor %}

                        <!-- Trigger Button HTML -->
                        <input type=\"button\" class=\"btn btn-default\" data-toggle=\"collapse\" data-target=\"#configXML\"
                               value=\"Preferences...\">

                        <div id=\"configXML\" class=\"collapse\">
                            <fieldset>
                                {{ form_row(form.preferences) }}
                            </fieldset>
                        </div>
                        <br class=\"clear\"/>
                    </div>

                    <br class=\"clear\"/><br class=\"clear\"/>
                    <input type=\"submit\" class=\"btn btn-success\"/>&nbsp;
                    <a class=\"confirmModal\" href=\"javascript:history.go(-1);\">
                        <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
                    </a>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
";
    }
}
