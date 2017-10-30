<?php

/* KeosuGadgetAroundMeGadgetBundle:service:viewlist.json.twig */
class __TwigTemplate_4602fa6ab8a63eebfec7a2ba911835f853d4c5f5579a6f1656f057811941d8dd extends Twig_Template
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
        $__internal_91d833bcfaf0c18b5d8395520945f6d0794e0e494b3797b77d273a6fc309a7b4 = $this->env->getExtension("native_profiler");
        $__internal_91d833bcfaf0c18b5d8395520945f6d0794e0e494b3797b77d273a6fc309a7b4->enter($__internal_91d833bcfaf0c18b5d8395520945f6d0794e0e494b3797b77d273a6fc309a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuGadgetAroundMeGadgetBundle:service:viewlist.json.twig"));

        // line 1
        echo "\t";
        // line 18
        echo "
";
        // line 19
        ob_start();
        // line 20
        echo "{ \"data\": [
\t\t  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pois"]) ? $context["pois"] : $this->getContext($context, "pois")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 22
            echo "\t\t    {
\t\t    \t\"id\" :\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
            echo "\",
\t\t\t\t\"title\" :\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "name", array()), "html", null, true);
            echo "\",
\t\t\t\t\"distance\" :\"";
            // line 25
            echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute($context["content"], "distance", array())), "html", null, true);
            echo "\",
\t\t\t\t\"desc\" :\"";
            // line 26
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["content"], "description", array()), 0, 300), "html", null, true);
            echo "...\",
\t\t\t\t  \"description\" : \"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "description", array()), "html", null, true);
            echo "\",
\t\t\t\t  \"lat\" : \"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "lat", array()), "html", null, true);
            echo "\",
\t\t\t\t  \"lng\" : \"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "lng", array()), "html", null, true);
            echo "\"
\t\t   }
\t\t    ";
            // line 31
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 32
                echo "\t\t     ,
\t\t    ";
            }
            // line 34
            echo "\t\t  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "] }
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 37
        echo "
";
        
        $__internal_91d833bcfaf0c18b5d8395520945f6d0794e0e494b3797b77d273a6fc309a7b4->leave($__internal_91d833bcfaf0c18b5d8395520945f6d0794e0e494b3797b77d273a6fc309a7b4_prof);

    }

    public function getTemplateName()
    {
        return "KeosuGadgetAroundMeGadgetBundle:service:viewlist.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  101 => 35,  87 => 34,  83 => 32,  81 => 31,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  49 => 22,  32 => 21,  29 => 20,  27 => 19,  24 => 18,  22 => 1,);
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
{ \"data\": [
\t\t  {% for content in pois %}
\t\t    {
\t\t    \t\"id\" :\"{{ content.id}}\",
\t\t\t\t\"title\" :\"{{ content.name}}\",
\t\t\t\t\"distance\" :\"{{  '%.2f'|format(content.distance)}}\",
\t\t\t\t\"desc\" :\"{{ (content.description |slice(0, 300) )}}...\",
\t\t\t\t  \"description\" : \"{{ content.description }}\",
\t\t\t\t  \"lat\" : \"{{ content.lat }}\",
\t\t\t\t  \"lng\" : \"{{ content.lng }}\"
\t\t   }
\t\t    {% if loop.last ==false%}
\t\t     ,
\t\t    {% endif %}
\t\t  {% endfor %}
] }
{% endspaceless %}

";
    }
}
