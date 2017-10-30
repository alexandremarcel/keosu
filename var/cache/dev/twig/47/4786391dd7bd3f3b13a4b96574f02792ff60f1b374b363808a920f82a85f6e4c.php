<?php

/* ::base.html.twig */
class __TwigTemplate_aba4cee921141106264ea5f21a0b8b694525f6cc277adf3f5c58e2e006669ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("::skeleton.html.twig", "::base.html.twig", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::skeleton.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82664f926094080de009be1a446e003ca47905b36786e440cd62fc847a1d51bd = $this->env->getExtension("native_profiler");
        $__internal_82664f926094080de009be1a446e003ca47905b36786e440cd62fc847a1d51bd->enter($__internal_82664f926094080de009be1a446e003ca47905b36786e440cd62fc847a1d51bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82664f926094080de009be1a446e003ca47905b36786e440cd62fc847a1d51bd->leave($__internal_82664f926094080de009be1a446e003ca47905b36786e440cd62fc847a1d51bd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 18,);
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
    {% extends '::skeleton.html.twig' %}
";
    }
}
