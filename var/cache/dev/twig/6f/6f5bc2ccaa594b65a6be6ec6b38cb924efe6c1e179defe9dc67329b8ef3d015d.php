<?php

/* KeosuCoreBundle:Menu:app.html.twig */
class __TwigTemplate_f0d74c7e515c1c49cf3db50b29d8315143e77a28818680bb00c19c65249e2de1 extends Twig_Template
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
        $__internal_97de16eef10d264c6e841cd1032c62e9dbcd1d53e15ea7b6b13718c3c2d71708 = $this->env->getExtension("native_profiler");
        $__internal_97de16eef10d264c6e841cd1032c62e9dbcd1d53e15ea7b6b13718c3c2d71708->enter($__internal_97de16eef10d264c6e841cd1032c62e9dbcd1d53e15ea7b6b13718c3c2d71708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:Menu:app.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<span class=\"glyphicon glyphicon-eye-open\"></span>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["curAppName"]) ? $context["curAppName"] : $this->getContext($context, "curAppName")), "html", null, true);
        echo " <b class=\"caret\"></b></a>
<ul class=\"dropdown-menu\">
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : $this->getContext($context, "apps")));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 6
            echo "\t<li role=\"presentation\">
\t\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("keosu_changeapp", array("appid" => $this->getAttribute($context["app"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo "</a>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
        
        $__internal_97de16eef10d264c6e841cd1032c62e9dbcd1d53e15ea7b6b13718c3c2d71708->leave($__internal_97de16eef10d264c6e841cd1032c62e9dbcd1d53e15ea7b6b13718c3c2d71708_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:Menu:app.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  38 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
<span class=\"glyphicon glyphicon-eye-open\"></span>
{{ curAppName }} <b class=\"caret\"></b></a>
<ul class=\"dropdown-menu\">
\t{% for app in apps %}
\t<li role=\"presentation\">
\t\t<a href=\"{{ path('keosu_changeapp',{'appid':app.id}) }}\">{{ app.name }}</a>
\t</li>
\t{% endfor %}
</ul>
";
    }
}
