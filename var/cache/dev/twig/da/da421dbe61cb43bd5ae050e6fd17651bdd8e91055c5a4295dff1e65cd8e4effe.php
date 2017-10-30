<?php

/* KeosuCoreBundle::page.html.twig */
class __TwigTemplate_ca0aa60ff86dd7b9e5cfef0a7d7968568c1a8c2751bb78554c45645285fc573d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("::base.html.twig", "KeosuCoreBundle::page.html.twig", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab3e96ab2e67bdd8d0f8bee0e1f6cda0af79c637c8d9492f0bc3222773083c84 = $this->env->getExtension("native_profiler");
        $__internal_ab3e96ab2e67bdd8d0f8bee0e1f6cda0af79c637c8d9492f0bc3222773083c84->enter($__internal_ab3e96ab2e67bdd8d0f8bee0e1f6cda0af79c637c8d9492f0bc3222773083c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle::page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3e96ab2e67bdd8d0f8bee0e1f6cda0af79c637c8d9492f0bc3222773083c84->leave($__internal_ab3e96ab2e67bdd8d0f8bee0e1f6cda0af79c637c8d9492f0bc3222773083c84_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle::page.html.twig";
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
{% extends '::base.html.twig' %}

";
    }
}
