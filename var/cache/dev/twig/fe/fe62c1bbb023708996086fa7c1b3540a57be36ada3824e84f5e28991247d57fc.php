<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_8ece4c533daea80aa563481d12246dc2e8e0df0cd5686e6900a3e4a63bccb449 extends Twig_Template
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
        $__internal_8a2507367c6725accfa5e295f4b4ed5206fc783e8ead612c899889b060250937 = $this->env->getExtension("native_profiler");
        $__internal_8a2507367c6725accfa5e295f4b4ed5206fc783e8ead612c899889b060250937->enter($__internal_8a2507367c6725accfa5e295f4b4ed5206fc783e8ead612c899889b060250937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["working_dir"]) ? $context["working_dir"] : $this->getContext($context, "working_dir")), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_8a2507367c6725accfa5e295f4b4ed5206fc783e8ead612c899889b060250937->leave($__internal_8a2507367c6725accfa5e295f4b4ed5206fc783e8ead612c899889b060250937_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<h1>{{ 'coresphere_console.headline.index'|trans }}</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>
        <span class=\"console_env_info\">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
    }
}
