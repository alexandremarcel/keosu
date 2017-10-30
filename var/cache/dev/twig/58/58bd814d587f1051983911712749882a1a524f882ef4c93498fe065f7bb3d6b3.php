<?php

/* KeosuCoreBundle:Menu:addToConfig.html.twig */
class __TwigTemplate_798432a7a574f4460b84f7eadd13625646b8fc355e50e23b0e4c7169eeb6ae1d extends Twig_Template
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
        $__internal_18345b98b14e3c8b7f63d49f887bf91e959b7e74bab1bce6cfb5256ff7a8a628 = $this->env->getExtension("native_profiler");
        $__internal_18345b98b14e3c8b7f63d49f887bf91e959b7e74bab1bce6cfb5256ff7a8a628->enter($__internal_18345b98b14e3c8b7f63d49f887bf91e959b7e74bab1bce6cfb5256ff7a8a628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:addToConfig.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 2
            echo "\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "href", array()), "html", null, true);
            echo "\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "
\t\t\t</div>
\t\t</a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_18345b98b14e3c8b7f63d49f887bf91e959b7e74bab1bce6cfb5256ff7a8a628->leave($__internal_18345b98b14e3c8b7f63d49f887bf91e959b7e74bab1bce6cfb5256ff7a8a628_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:addToConfig.html.twig";
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
        return "{% for link in links %}
\t<div class=\"sidebarlink\">
\t\t<a class=\"sous-menu\" href=\"{{ link.href }}\">
\t\t\t<div class=\"lien-menu\">
\t\t\t\t{{ link.name }}
\t\t\t</div>
\t\t</a>
\t</div>
{% endfor %}
";
    }
}
