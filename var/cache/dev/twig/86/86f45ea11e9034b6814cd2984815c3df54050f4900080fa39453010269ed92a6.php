<?php

/* KeosuCoreBundle:App:configPanel.html.twig */
class __TwigTemplate_ac9e01828e625d022773ab7a49097cea4d01b425a1f756529a24f2843d4b3c41 extends Twig_Template
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
        $__internal_96f577290d90de31981c6c1b3dbe8761aa3fd7e4d02ed3d1eccce7884176acc9 = $this->env->getExtension("native_profiler");
        $__internal_96f577290d90de31981c6c1b3dbe8761aa3fd7e4d02ed3d1eccce7884176acc9->enter($__internal_96f577290d90de31981c6c1b3dbe8761aa3fd7e4d02ed3d1eccce7884176acc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeosuCoreBundle:App:configPanel.html.twig"));

        // line 1
        echo "<br class=\"clear\"/>
<fieldset>
\t<legend>";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["packageType"]) ? $context["packageType"] : $this->getContext($context, "packageType"))), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["packageName"]) ? $context["packageName"] : $this->getContext($context, "packageName")), "html", null, true);
        echo "</legend>
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
\t
\t";
        // line 6
        if ((isset($context["packageHelpMessage"]) ? $context["packageHelpMessage"] : $this->getContext($context, "packageHelpMessage"))) {
            // line 7
            echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-9 col-lg-push-3\">
\t\t\t<span class=\"help-block\">";
            // line 9
            echo (isset($context["packageHelpMessage"]) ? $context["packageHelpMessage"] : $this->getContext($context, "packageHelpMessage"));
            echo "</span>
\t\t</div>
\t</div>
\t";
        }
        // line 13
        echo "</fieldset>
";
        
        $__internal_96f577290d90de31981c6c1b3dbe8761aa3fd7e4d02ed3d1eccce7884176acc9->leave($__internal_96f577290d90de31981c6c1b3dbe8761aa3fd7e4d02ed3d1eccce7884176acc9_prof);

    }

    public function getTemplateName()
    {
        return "KeosuCoreBundle:App:configPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  43 => 9,  39 => 7,  37 => 6,  32 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<br class=\"clear\"/>
<fieldset>
\t<legend>{{ packageType | capitalize }} : {{ packageName }}</legend>
\t{{ form_row(form) }}
\t
\t{% if packageHelpMessage %}
\t<div class=\"row\">
\t\t<div class=\"col-lg-9 col-lg-push-3\">
\t\t\t<span class=\"help-block\">{{ packageHelpMessage | raw }}</span>
\t\t</div>
\t</div>
\t{% endif %}
</fieldset>
";
    }
}
