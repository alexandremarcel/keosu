<?php

/* ::root.html.twig */
class __TwigTemplate_dd9458b71ffae90b53055faf86e779df9cc9072bd2330bab423d8b0fb54cf5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'skeleton' => array($this, 'block_skeleton'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ad20c1e76285663fb5e9d5a77843c2a2889924f4c46e9e327bc8fa616c362a6 = $this->env->getExtension("native_profiler");
        $__internal_4ad20c1e76285663fb5e9d5a77843c2a2889924f4c46e9e327bc8fa616c362a6->enter($__internal_4ad20c1e76285663fb5e9d5a77843c2a2889924f4c46e9e327bc8fa616c362a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::root.html.twig"));

        // line 1
        echo "\t";
        // line 18
        echo "    
 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

\t\t";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ac7f52d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac7f52d_0") : $this->env->getExtension('asset')->getAssetUrl("css/ac7f52d_bootstrap_1.css");
            // line 33
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "ac7f52d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac7f52d_1") : $this->env->getExtension('asset')->getAssetUrl("css/ac7f52d_jquery-ui-1.10.4_2.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "ac7f52d_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac7f52d_2") : $this->env->getExtension('asset')->getAssetUrl("css/ac7f52d_bootstrap-glyphicons_3.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
        } else {
            // asset "ac7f52d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ac7f52d") : $this->env->getExtension('asset')->getAssetUrl("css/ac7f52d.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 35
        echo "


\t";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6441664_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_0") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_jquery-1.10.2_1.js");
            // line 45
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_1") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_affix_1.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_2") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_alert_2.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_3") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_button_3.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_4") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_carousel_4.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_5") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_collapse_5.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_6") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_dropdown_6.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_7") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_modal_7.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_8") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_popover_8.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_9") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_scrollspy_9.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_10") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_tab_10.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_11") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_tooltip_11.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_12") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_2_transition_12.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_13") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_3_html5bp_plugins_1.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_14") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_3_html5bp_script_2.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_15") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_3_modernizr-2.7.1-respond-1.4.2.min_3.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_16") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_3_mopabootstrap-collection_4.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_17") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_part_3_mopabootstrap-subnav_5.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_18") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_jquery-ui-1.10.4.min_4.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_19") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_master_5.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
            // asset "6441664_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664_20") : $this->env->getExtension('asset')->getAssetUrl("js/6441664_jquery.dataTables_6.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "6441664"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6441664") : $this->env->getExtension('asset')->getAssetUrl("js/6441664.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 47
        echo "
\t</head>
\t<body>
        
\t";
        // line 51
        $this->displayBlock('skeleton', $context, $blocks);
        // line 54
        echo "\t</body>
</html>
";
        
        $__internal_4ad20c1e76285663fb5e9d5a77843c2a2889924f4c46e9e327bc8fa616c362a6->leave($__internal_4ad20c1e76285663fb5e9d5a77843c2a2889924f4c46e9e327bc8fa616c362a6_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_4da6fbe2c148b550bd2c0590629df80c8ffe9cc3bc14521ea18c81680ff197eb = $this->env->getExtension("native_profiler");
        $__internal_4da6fbe2c148b550bd2c0590629df80c8ffe9cc3bc14521ea18c81680ff197eb->enter($__internal_4da6fbe2c148b550bd2c0590629df80c8ffe9cc3bc14521ea18c81680ff197eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Keosu";
        
        $__internal_4da6fbe2c148b550bd2c0590629df80c8ffe9cc3bc14521ea18c81680ff197eb->leave($__internal_4da6fbe2c148b550bd2c0590629df80c8ffe9cc3bc14521ea18c81680ff197eb_prof);

    }

    // line 51
    public function block_skeleton($context, array $blocks = array())
    {
        $__internal_98a57365becc60c453f1bd1fd924b76eed67dfad8e9ebaec22a3a192e6b8ad0f = $this->env->getExtension("native_profiler");
        $__internal_98a57365becc60c453f1bd1fd924b76eed67dfad8e9ebaec22a3a192e6b8ad0f->enter($__internal_98a57365becc60c453f1bd1fd924b76eed67dfad8e9ebaec22a3a192e6b8ad0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "skeleton"));

        // line 52
        echo "        <div class=\"fake-bar\"></div>
        ";
        
        $__internal_98a57365becc60c453f1bd1fd924b76eed67dfad8e9ebaec22a3a192e6b8ad0f->leave($__internal_98a57365becc60c453f1bd1fd924b76eed67dfad8e9ebaec22a3a192e6b8ad0f_prof);

    }

    public function getTemplateName()
    {
        return "::root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 52,  243 => 51,  231 => 23,  222 => 54,  220 => 51,  214 => 47,  80 => 45,  76 => 38,  71 => 35,  45 => 33,  41 => 28,  33 => 23,  26 => 18,  24 => 1,);
    }

    public function getSource()
    {
        return "\t{#
\tKeosu is an open source CMS for mobile app
\tCopyright (C) 2016  Pockeit

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    #}
    
 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>{% block title %}Keosu{% endblock %} </title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

\t\t{% stylesheets
\t\t\t'less/bootstrap.less'
\t\t\t'css/jquery-ui-1.10.4.css'
\t\t\t'http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css'
\t\t%}
\t\t\t<link href=\"{{ asset_url }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t{% endstylesheets %}



\t{% javascripts
\t\t\t'js/jquery-1.10.2.js'
\t\t\t'@MopaBootstrapBundle/Resources/public/bootstrap/js/*'
\t\t\t'@MopaBootstrapBundle/Resources/public/js/*'
\t\t\t'js/jquery-ui-1.10.4.min.js'
\t\t\t'js/master.js'
\t\t\t'js/jquery.dataTables.js' %}
\t\t<script src=\"{{ asset_url }}\"></script>
\t{% endjavascripts %}

\t</head>
\t<body>
        
\t{% block skeleton %}
        <div class=\"fake-bar\"></div>
        {% endblock %}
\t</body>
</html>
";
    }
}
