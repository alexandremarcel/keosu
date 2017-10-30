<?php

/* KeosuCoreBundle:Page:pagePanel.html.twig */
class __TwigTemplate_ffae0def2436f25f147da622e835232a266153a2bbed825fcdd7213fd5207fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageEditAction' => array($this, 'block_pageEditAction'),
            'pageDeleteAction' => array($this, 'block_pageDeleteAction'),
            'pageExtentionAction' => array($this, 'block_pageExtentionAction'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f48d9ec8cae825ed3b4242ff582875585c7c9ee7ff94b898d24f37038eb0db3 = $this->env->getExtension("native_profiler");
        $__internal_5f48d9ec8cae825ed3b4242ff582875585c7c9ee7ff94b898d24f37038eb0db3->enter($__internal_5f48d9ec8cae825ed3b4242ff582875585c7c9ee7ff94b898d24f37038eb0db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:pagePanel.html.twig"));

        // line 1
        $this->displayBlock('pageEditAction', $context, $blocks);
        // line 4
        $this->displayBlock('pageDeleteAction', $context, $blocks);
        // line 7
        $this->displayBlock('pageExtentionAction', $context, $blocks);
        
        $__internal_5f48d9ec8cae825ed3b4242ff582875585c7c9ee7ff94b898d24f37038eb0db3->leave($__internal_5f48d9ec8cae825ed3b4242ff582875585c7c9ee7ff94b898d24f37038eb0db3_prof);

    }

    // line 1
    public function block_pageEditAction($context, array $blocks = array())
    {
        $__internal_8a3024f8dba4d9d707dbd8f9124f1b4c81768bde7eb08b560179bf24fb15a9a6 = $this->env->getExtension("native_profiler");
        $__internal_8a3024f8dba4d9d707dbd8f9124f1b4c81768bde7eb08b560179bf24fb15a9a6->enter($__internal_8a3024f8dba4d9d707dbd8f9124f1b4c81768bde7eb08b560179bf24fb15a9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageEditAction"));

        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_core_views_page_manage_edit", array("id" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a>
";
        
        $__internal_8a3024f8dba4d9d707dbd8f9124f1b4c81768bde7eb08b560179bf24fb15a9a6->leave($__internal_8a3024f8dba4d9d707dbd8f9124f1b4c81768bde7eb08b560179bf24fb15a9a6_prof);

    }

    // line 4
    public function block_pageDeleteAction($context, array $blocks = array())
    {
        $__internal_6f33b2a6f642df92b4379cbddce9e4da3405aa8431c7806d0102bddbc5948149 = $this->env->getExtension("native_profiler");
        $__internal_6f33b2a6f642df92b4379cbddce9e4da3405aa8431c7806d0102bddbc5948149->enter($__internal_6f33b2a6f642df92b4379cbddce9e4da3405aa8431c7806d0102bddbc5948149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDeleteAction"));

        // line 5
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_core_views_page_manage_delete", array("id" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-remove\"></i></a>
";
        
        $__internal_6f33b2a6f642df92b4379cbddce9e4da3405aa8431c7806d0102bddbc5948149->leave($__internal_6f33b2a6f642df92b4379cbddce9e4da3405aa8431c7806d0102bddbc5948149_prof);

    }

    // line 7
    public function block_pageExtentionAction($context, array $blocks = array())
    {
        $__internal_6bed1a43a33a2c152b7a02919bee1ac28a213a1fb7d134329ad3474ff2521ef7 = $this->env->getExtension("native_profiler");
        $__internal_6bed1a43a33a2c152b7a02919bee1ac28a213a1fb7d134329ad3474ff2521ef7->enter($__internal_6bed1a43a33a2c152b7a02919bee1ac28a213a1fb7d134329ad3474ff2521ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageExtentionAction"));

        
        $__internal_6bed1a43a33a2c152b7a02919bee1ac28a213a1fb7d134329ad3474ff2521ef7->leave($__internal_6bed1a43a33a2c152b7a02919bee1ac28a213a1fb7d134329ad3474ff2521ef7_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:pagePanel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  58 => 5,  52 => 4,  42 => 2,  36 => 1,  29 => 7,  27 => 4,  25 => 1,);
    }

    public function getSource()
    {
        return "{% block pageEditAction %}
<a href=\"{{ path('keosu_core_views_page_manage_edit',{'id':pageId}) }}\"><i class=\"glyphicon glyphicon-edit\"></i></a>
{% endblock pageEditAction %}
{% block pageDeleteAction %}
<a href=\"{{ path('keosu_core_views_page_manage_delete',{'id':pageId}) }}\"><i class=\"glyphicon glyphicon-remove\"></i></a>
{% endblock pageDeleteAction %}
{% block pageExtentionAction %}{% endblock pageExtentionAction %}
";
    }
}
