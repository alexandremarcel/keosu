<?php

/* KeosuCoreBundle:Menu:content.html.twig */
class __TwigTemplate_51f0fdfb4abe1d2c36ed03bd06de3ac10655157ae3e060ed50457950890b56ef extends Twig_Template
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
        $__internal_b24bd6a4ce83b8e2abc1534afebd5490aea1261f17eead02a960da3b58c7c507 = $this->env->getExtension("native_profiler");
        $__internal_b24bd6a4ce83b8e2abc1534afebd5490aea1261f17eead02a960da3b58c7c507->enter($__internal_b24bd6a4ce83b8e2abc1534afebd5490aea1261f17eead02a960da3b58c7c507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:content.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 2
            echo "    <div class=\"sidebarlink\">
        <a class=\"sous-menu\" href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath((("keosu_" . $context["content"]) . "_viewlist"));
            echo "\">
            <div class=\"lien-menu\">
                <span class='glyphicon glyphicon-";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), $context["content"], array(), "array"), 1, array(), "array"), "html", null, true);
            echo " icon-menu'></span><span
                        class=\"texte-lien-menu\">";
            // line 6
            echo twig_escape_filter($this->env, $context["content"], "html", null, true);
            echo "</span>
            </div>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b24bd6a4ce83b8e2abc1534afebd5490aea1261f17eead02a960da3b58c7c507->leave($__internal_b24bd6a4ce83b8e2abc1534afebd5490aea1261f17eead02a960da3b58c7c507_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for content in contents %}
    <div class=\"sidebarlink\">
        <a class=\"sous-menu\" href=\"{{ path('keosu_'~content~'_viewlist') }}\">
            <div class=\"lien-menu\">
                <span class='glyphicon glyphicon-{{ icon[content][1] }} icon-menu'></span><span
                        class=\"texte-lien-menu\">{{ content }}</span>
            </div>
        </a>
    </div>
{% endfor %}
";
    }
}
