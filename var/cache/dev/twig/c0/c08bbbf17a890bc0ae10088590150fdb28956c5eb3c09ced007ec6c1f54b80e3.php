<?php

/* KeosuCoreBundle:Page:check.html.twig */
class __TwigTemplate_062763e9f678a61ee80be010fbc3db56285787dd44ecfa3741c96a25b407208f extends Twig_Template
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
        $__internal_4f9e25e462c54b35ec6281c79b850131b1432cd06cf2b93444502e855ba8cf05 = $this->env->getExtension("native_profiler");
        $__internal_4f9e25e462c54b35ec6281c79b850131b1432cd06cf2b93444502e855ba8cf05->enter($__internal_4f9e25e462c54b35ec6281c79b850131b1432cd06cf2b93444502e855ba8cf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Page:check.html.twig"));

        // line 1
        if (((isset($context["nbrIsMain"]) ? $context["nbrIsMain"] : $this->getContext($context, "nbrIsMain")) == 0)) {
            // line 2
            echo "<div class=\"alert alert-danger\">
\tNo main page found. Check \"isMain\" attribute for one of your layout.
\t <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("keosu_core_views_page_manage");
            echo "\">Manage Page</a>
</div>
";
        } elseif ((        // line 6
(isset($context["nbrIsMain"]) ? $context["nbrIsMain"] : $this->getContext($context, "nbrIsMain")) > 1)) {
            // line 7
            echo "<div class=\"alert alert-danger\">
More than one main page found. UnCheck \"isMain\" attribute to only have one \"isMain\" page.
 <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("keosu_core_views_page_manage");
            echo "\">Manage Page</a>
</div>
";
        }
        // line 12
        echo "
";
        
        $__internal_4f9e25e462c54b35ec6281c79b850131b1432cd06cf2b93444502e855ba8cf05->leave($__internal_4f9e25e462c54b35ec6281c79b850131b1432cd06cf2b93444502e855ba8cf05_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Page:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  39 => 9,  35 => 7,  33 => 6,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if nbrIsMain == 0 %}
<div class=\"alert alert-danger\">
\tNo main page found. Check \"isMain\" attribute for one of your layout.
\t <a href=\"{{ path('keosu_core_views_page_manage')}}\">Manage Page</a>
</div>
{% elseif nbrIsMain > 1 %}
<div class=\"alert alert-danger\">
More than one main page found. UnCheck \"isMain\" attribute to only have one \"isMain\" page.
 <a href=\"{{ path('keosu_core_views_page_manage')}}\">Manage Page</a>
</div>
{% endif %}

";
    }
}
