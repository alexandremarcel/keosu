<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bb6eb3f309aeb7c9f9156bb01c8126454258039d5328ae18641006c495781ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e25da9a6dae0f25409a517ba598f682f7580cb822c3efabee05d4180c4cc2e5 = $this->env->getExtension("native_profiler");
        $__internal_6e25da9a6dae0f25409a517ba598f682f7580cb822c3efabee05d4180c4cc2e5->enter($__internal_6e25da9a6dae0f25409a517ba598f682f7580cb822c3efabee05d4180c4cc2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e25da9a6dae0f25409a517ba598f682f7580cb822c3efabee05d4180c4cc2e5->leave($__internal_6e25da9a6dae0f25409a517ba598f682f7580cb822c3efabee05d4180c4cc2e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f215eebf77ef763049610fce0d394f74e087f2ef4b4c3c725d73456104384f86 = $this->env->getExtension("native_profiler");
        $__internal_f215eebf77ef763049610fce0d394f74e087f2ef4b4c3c725d73456104384f86->enter($__internal_f215eebf77ef763049610fce0d394f74e087f2ef4b4c3c725d73456104384f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f215eebf77ef763049610fce0d394f74e087f2ef4b4c3c725d73456104384f86->leave($__internal_f215eebf77ef763049610fce0d394f74e087f2ef4b4c3c725d73456104384f86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1daab7b5cb95aeb01cedc1234e5e6b8324a08bb35b44bf5d69063b07a4149434 = $this->env->getExtension("native_profiler");
        $__internal_1daab7b5cb95aeb01cedc1234e5e6b8324a08bb35b44bf5d69063b07a4149434->enter($__internal_1daab7b5cb95aeb01cedc1234e5e6b8324a08bb35b44bf5d69063b07a4149434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1daab7b5cb95aeb01cedc1234e5e6b8324a08bb35b44bf5d69063b07a4149434->leave($__internal_1daab7b5cb95aeb01cedc1234e5e6b8324a08bb35b44bf5d69063b07a4149434_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec52cc55cf55938a67fe38c793fd280230ab4c8d908233c11a1526ddbb72cc6f = $this->env->getExtension("native_profiler");
        $__internal_ec52cc55cf55938a67fe38c793fd280230ab4c8d908233c11a1526ddbb72cc6f->enter($__internal_ec52cc55cf55938a67fe38c793fd280230ab4c8d908233c11a1526ddbb72cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ec52cc55cf55938a67fe38c793fd280230ab4c8d908233c11a1526ddbb72cc6f->leave($__internal_ec52cc55cf55938a67fe38c793fd280230ab4c8d908233c11a1526ddbb72cc6f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
