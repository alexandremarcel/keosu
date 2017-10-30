<?php

/* KeosuGadgetMapGadgetBundle:Service:viewone.json.twig */
class __TwigTemplate_bc47b7eb7b919eaa1c6a54308227ecb1128613be6eb1781ace6e94dc7cf1693f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fbd44c03276b26ed1b5f8c6d506ec8262b380c4a3dc892173765e0bf077d864 = $this->env->getExtension("native_profiler");
        $__internal_6fbd44c03276b26ed1b5f8c6d506ec8262b380c4a3dc892173765e0bf077d864->enter($__internal_6fbd44c03276b26ed1b5f8c6d506ec8262b380c4a3dc892173765e0bf077d864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuGadgetMapGadgetBundle:Service:viewone.json.twig"));

        // line 1
        echo "\t";
        // line 18
        ob_start();
        // line 19
        echo "[
\t{
\t\t\"id\" : \"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "id", array()), "html", null, true);
        echo "\",
\t\t\"name\" :\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "name", array()), "html_attr");
        echo "\",
\t\t\"description\" :\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "description", array()), "html_attr");
        echo "\",
\t\t\"lat\" :\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "lat", array()), "html", null, true);
        echo "\",
\t\t\"lng\" :\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "lng", array()), "html", null, true);
        echo "\",
\t\t\"dataModelObjectName\" : \"location\",
\t\t\"enableComments\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["poi"]) ? $context["poi"] : $this->getContext($context, "poi")), "enableComments", array()), "html", null, true);
        echo "\"
\t}
]
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6fbd44c03276b26ed1b5f8c6d506ec8262b380c4a3dc892173765e0bf077d864->leave($__internal_6fbd44c03276b26ed1b5f8c6d506ec8262b380c4a3dc892173765e0bf077d864_prof);

    }

    public function getTemplateName()
    {
        return "KeosuGadgetMapGadgetBundle:Service:viewone.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 27,  46 => 25,  42 => 24,  38 => 23,  34 => 22,  30 => 21,  26 => 19,  24 => 18,  22 => 1,);
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
{% spaceless %}
[
\t{
\t\t\"id\" : \"{{ poi.id }}\",
\t\t\"name\" :\"{{poi.name |escape('html_attr') }}\",
\t\t\"description\" :\"{{poi.description|escape('html_attr')}}\",
\t\t\"lat\" :\"{{poi.lat}}\",
\t\t\"lng\" :\"{{poi.lng}}\",
\t\t\"dataModelObjectName\" : \"location\",
\t\t\"enableComments\" : \"{{poi.enableComments}}\"
\t}
]
{% endspaceless %}
";
    }
}
