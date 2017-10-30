<?php

/* KeosuCoreBundle:Menu:page.html.twig */
class __TwigTemplate_a80739b85812b353b28478675265f0d533e42ca7b7e868cc5da4cf113f02aea0 extends Twig_Template
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
        $__internal_6d7f8fab1a95e1b97a84f57b637eadd678963cfbac241bce8f58f639ff08cdb4 = $this->env->getExtension("native_profiler");
        $__internal_6d7f8fab1a95e1b97a84f57b637eadd678963cfbac241bce8f58f639ff08cdb4->enter($__internal_6d7f8fab1a95e1b97a84f57b637eadd678963cfbac241bce8f58f639ff08cdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:page.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_core_views_page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t<span class=\"glyphicon glyphicon-edit icon-menu\"></span><span class=\"texte-lien-menu\"> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t</a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6d7f8fab1a95e1b97a84f57b637eadd678963cfbac241bce8f58f639ff08cdb4->leave($__internal_6d7f8fab1a95e1b97a84f57b637eadd678963cfbac241bce8f58f639ff08cdb4_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for page in pages %}
\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"{{ path('keosu_core_views_page',{'id':page.id}) }}\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t<span class=\"glyphicon glyphicon-edit icon-menu\"></span><span class=\"texte-lien-menu\"> {{ page.name }}</span>
\t\t\t</div>
\t\t</a>
\t</div>
{% endfor %}";
    }
}
