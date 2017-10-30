<?php

/* KeosuCoreBundle:Page:zonePanel.html.twig */
class __TwigTemplate_26184e98dbf0b9cc2b8f72b101f457b069ada0cbb14c291e16a1546249db82d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageAddActionGadget' => array($this, 'block_pageAddActionGadget'),
            'pageEditActionGadget' => array($this, 'block_pageEditActionGadget'),
            'pageDeleteActionGadget' => array($this, 'block_pageDeleteActionGadget'),
            'pageExtensionActionGadget' => array($this, 'block_pageExtensionActionGadget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b24e6de2cbb06cad1bfd782807a9632a0a4d75016c86ca9cf9686897b622cc71 = $this->env->getExtension("native_profiler");
        $__internal_b24e6de2cbb06cad1bfd782807a9632a0a4d75016c86ca9cf9686897b622cc71->enter($__internal_b24e6de2cbb06cad1bfd782807a9632a0a4d75016c86ca9cf9686897b622cc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:zonePanel.html.twig"));

        // line 1
        echo "<div id=\"panel";
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\" class=\"panel panel-info\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t";
        // line 6
        $this->displayBlock('pageAddActionGadget', $context, $blocks);
        // line 24
        echo "
\t\t";
        // line 25
        if ((isset($context["gadget"]) ? $context["gadget"] : $this->getContext($context, "gadget"))) {
            // line 26
            echo "
\t\t\t";
            // line 27
            $this->displayBlock('pageEditActionGadget', $context, $blocks);
            // line 32
            echo "
\t\t\t";
            // line 33
            $this->displayBlock('pageDeleteActionGadget', $context, $blocks);
            // line 38
            echo "\t\t";
        }
        // line 39
        echo "\t\t";
        $this->displayBlock('pageExtensionActionGadget', $context, $blocks);
        // line 41
        echo "\t\t<script>
\t\t\t\$( \"#panel";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\" ).hover(
\t\t\tfunction() {
\t\t\t\t\$(\"iframe\").contents().find(\"#";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\").css(\"border\",\"5px solid red\");
\t\t\t}, function() {
\t\t\t\t\$(\"iframe\").contents().find(\"#";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "html", null, true);
        echo "\").css(\"border\",\"none\");
\t\t\t}
\t\t\t);
\t\t</script>
\t</div>
</div>
";
        
        $__internal_b24e6de2cbb06cad1bfd782807a9632a0a4d75016c86ca9cf9686897b622cc71->leave($__internal_b24e6de2cbb06cad1bfd782807a9632a0a4d75016c86ca9cf9686897b622cc71_prof);

    }

    // line 6
    public function block_pageAddActionGadget($context, array $blocks = array())
    {
        $__internal_3e4c5c8e719395b958760b095c61674bdc6b413fc9c4eadaf3bee909feb8514e = $this->env->getExtension("native_profiler");
        $__internal_3e4c5c8e719395b958760b095c61674bdc6b413fc9c4eadaf3bee909feb8514e->enter($__internal_3e4c5c8e719395b958760b095c61674bdc6b413fc9c4eadaf3bee909feb8514e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageAddActionGadget"));

        // line 7
        echo "\t\t\t<div class=\"btn-group\">
\t\t\t\t<button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
\t\t\t\t\tAdd gadget
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</button>
\t\t
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gadgetList"]) ? $context["gadgetList"] : $this->getContext($context, "gadgetList")));
        foreach ($context['_seq'] as $context["_key"] => $context["gadgetName"]) {
            // line 15
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_gadget_add", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")), "gadgetName" => $context["gadgetName"])), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\tAdd ";
            // line 17
            echo twig_escape_filter($this->env, $context["gadgetName"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gadgetName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        
        $__internal_3e4c5c8e719395b958760b095c61674bdc6b413fc9c4eadaf3bee909feb8514e->leave($__internal_3e4c5c8e719395b958760b095c61674bdc6b413fc9c4eadaf3bee909feb8514e_prof);

    }

    // line 27
    public function block_pageEditActionGadget($context, array $blocks = array())
    {
        $__internal_163fd20b419ba8cfba88a2e63d61ff74000de6b3487915523086f0aa20d33a12 = $this->env->getExtension("native_profiler");
        $__internal_163fd20b419ba8cfba88a2e63d61ff74000de6b3487915523086f0aa20d33a12->enter($__internal_163fd20b419ba8cfba88a2e63d61ff74000de6b3487915523086f0aa20d33a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageEditActionGadget"));

        // line 28
        echo "\t\t\t\t<a class=\"btn btn-info edit-gadget\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_gadget_edit", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")))), "html", null, true);
        echo "\">
\t\t\t\t\tEdit ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gadget"]) ? $context["gadget"] : $this->getContext($context, "gadget")), "name", array()), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t";
        
        $__internal_163fd20b419ba8cfba88a2e63d61ff74000de6b3487915523086f0aa20d33a12->leave($__internal_163fd20b419ba8cfba88a2e63d61ff74000de6b3487915523086f0aa20d33a12_prof);

    }

    // line 33
    public function block_pageDeleteActionGadget($context, array $blocks = array())
    {
        $__internal_de1a3e67757c23f34de1d0c56b06376ef5f014a229e0f57ebb27f2f29d42c96c = $this->env->getExtension("native_profiler");
        $__internal_de1a3e67757c23f34de1d0c56b06376ef5f014a229e0f57ebb27f2f29d42c96c->enter($__internal_de1a3e67757c23f34de1d0c56b06376ef5f014a229e0f57ebb27f2f29d42c96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageDeleteActionGadget"));

        // line 34
        echo "\t\t\t\t<a class=\"remove-gadget\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_gadget_delete", array("pageId" => (isset($context["pageId"]) ? $context["pageId"] : $this->getContext($context, "pageId")), "zoneName" => (isset($context["zoneId"]) ? $context["zoneId"] : $this->getContext($context, "zoneId")))), "html", null, true);
        echo "\" title=\"Clean zone\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-circle\"></span>
\t\t\t\t</a>
\t\t\t";
        
        $__internal_de1a3e67757c23f34de1d0c56b06376ef5f014a229e0f57ebb27f2f29d42c96c->leave($__internal_de1a3e67757c23f34de1d0c56b06376ef5f014a229e0f57ebb27f2f29d42c96c_prof);

    }

    // line 39
    public function block_pageExtensionActionGadget($context, array $blocks = array())
    {
        $__internal_526f25a8645860dd1b631da4bef3197c005326999d57e388a041a9340ef76322 = $this->env->getExtension("native_profiler");
        $__internal_526f25a8645860dd1b631da4bef3197c005326999d57e388a041a9340ef76322->enter($__internal_526f25a8645860dd1b631da4bef3197c005326999d57e388a041a9340ef76322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageExtensionActionGadget"));

        // line 40
        echo "\t\t";
        
        $__internal_526f25a8645860dd1b631da4bef3197c005326999d57e388a041a9340ef76322->leave($__internal_526f25a8645860dd1b631da4bef3197c005326999d57e388a041a9340ef76322_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:zonePanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 40,  172 => 39,  160 => 34,  154 => 33,  144 => 29,  139 => 28,  133 => 27,  124 => 21,  114 => 17,  110 => 16,  107 => 15,  103 => 14,  94 => 7,  88 => 6,  74 => 46,  69 => 44,  64 => 42,  61 => 41,  58 => 39,  55 => 38,  53 => 33,  50 => 32,  48 => 27,  45 => 26,  43 => 25,  40 => 24,  38 => 6,  32 => 3,  26 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"panel{{ zoneId }}\" class=\"panel panel-info\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">{{ zoneId }}</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t{% block pageAddActionGadget %}
\t\t\t<div class=\"btn-group\">
\t\t\t\t<button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">
\t\t\t\t\tAdd gadget
\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t</button>
\t\t
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t{% for gadgetName in gadgetList %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('keosu_gadget_add',{'pageId':pageId, 'zoneName':zoneId, 'gadgetName':gadgetName}) }}\">
\t\t\t\t\t\t\t\tAdd {{ gadgetName }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t{% endblock pageAddActionGadget %}

\t\t{% if gadget %}

\t\t\t{% block pageEditActionGadget %}
\t\t\t\t<a class=\"btn btn-info edit-gadget\" href=\"{{ path('keosu_gadget_edit',{'pageId':pageId, 'zoneName':zoneId}) }}\">
\t\t\t\t\tEdit {{ gadget.name }}
\t\t\t\t</a>
\t\t\t{% endblock pageEditActionGadget %}

\t\t\t{% block pageDeleteActionGadget %}
\t\t\t\t<a class=\"remove-gadget\" href=\"{{ path('keosu_gadget_delete',{'pageId':pageId, 'zoneName':zoneId}) }}\" title=\"Clean zone\">
\t\t\t\t\t<span class=\"glyphicon glyphicon-remove-circle\"></span>
\t\t\t\t</a>
\t\t\t{% endblock pageDeleteActionGadget %}
\t\t{% endif %}
\t\t{% block pageExtensionActionGadget %}
\t\t{% endblock pageExtensionActionGadget%}
\t\t<script>
\t\t\t\$( \"#panel{{ zoneId }}\" ).hover(
\t\t\tfunction() {
\t\t\t\t\$(\"iframe\").contents().find(\"#{{ zoneId }}\").css(\"border\",\"5px solid red\");
\t\t\t}, function() {
\t\t\t\t\$(\"iframe\").contents().find(\"#{{ zoneId }}\").css(\"border\",\"none\");
\t\t\t}
\t\t\t);
\t\t</script>
\t</div>
</div>
";
    }
}
