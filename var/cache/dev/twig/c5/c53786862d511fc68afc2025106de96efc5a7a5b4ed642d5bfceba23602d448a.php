<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ec93d3bd3a1016f570877b6e972f6e1e406d2238523071796179e625bcafd812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21dccd053b31157e0e0fa94c7b898b2f59a2e9105fb6113f68014be93b8ccdb5 = $this->env->getExtension("native_profiler");
        $__internal_21dccd053b31157e0e0fa94c7b898b2f59a2e9105fb6113f68014be93b8ccdb5->enter($__internal_21dccd053b31157e0e0fa94c7b898b2f59a2e9105fb6113f68014be93b8ccdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21dccd053b31157e0e0fa94c7b898b2f59a2e9105fb6113f68014be93b8ccdb5->leave($__internal_21dccd053b31157e0e0fa94c7b898b2f59a2e9105fb6113f68014be93b8ccdb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c28880cb257024c1e554d8ec1f928a3bbe817ea614e4b05b8efed7f321543b0 = $this->env->getExtension("native_profiler");
        $__internal_1c28880cb257024c1e554d8ec1f928a3bbe817ea614e4b05b8efed7f321543b0->enter($__internal_1c28880cb257024c1e554d8ec1f928a3bbe817ea614e4b05b8efed7f321543b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1c28880cb257024c1e554d8ec1f928a3bbe817ea614e4b05b8efed7f321543b0->leave($__internal_1c28880cb257024c1e554d8ec1f928a3bbe817ea614e4b05b8efed7f321543b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12324d90f686a06edceb10b4bf9760cbc4854c692ba454852b45621cf80781d4 = $this->env->getExtension("native_profiler");
        $__internal_12324d90f686a06edceb10b4bf9760cbc4854c692ba454852b45621cf80781d4->enter($__internal_12324d90f686a06edceb10b4bf9760cbc4854c692ba454852b45621cf80781d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_12324d90f686a06edceb10b4bf9760cbc4854c692ba454852b45621cf80781d4->leave($__internal_12324d90f686a06edceb10b4bf9760cbc4854c692ba454852b45621cf80781d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0579697b393e4cdea828af0dec96b6a03a485c8fbf7a117fa182e504ec20cd9 = $this->env->getExtension("native_profiler");
        $__internal_b0579697b393e4cdea828af0dec96b6a03a485c8fbf7a117fa182e504ec20cd9->enter($__internal_b0579697b393e4cdea828af0dec96b6a03a485c8fbf7a117fa182e504ec20cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0579697b393e4cdea828af0dec96b6a03a485c8fbf7a117fa182e504ec20cd9->leave($__internal_b0579697b393e4cdea828af0dec96b6a03a485c8fbf7a117fa182e504ec20cd9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
