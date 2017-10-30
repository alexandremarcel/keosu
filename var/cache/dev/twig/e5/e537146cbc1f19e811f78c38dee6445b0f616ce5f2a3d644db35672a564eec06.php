<?php

/* ::skeleton.html.twig */
class __TwigTemplate_ab650af721349c4b8e3ffef4f309d7e21fa0cc9381b5d3b5320e6f40bd66f0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("::root.html.twig", "::skeleton.html.twig", 18);
        $this->blocks = array(
            'skeleton' => array($this, 'block_skeleton'),
            'maincontent' => array($this, 'block_maincontent'),
            'leftmenu' => array($this, 'block_leftmenu'),
            'contentmenu' => array($this, 'block_contentmenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::root.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5010f9c6b6af0e8b276ca73a1875809e0962547e1bc7106aea3cf0702ff1145e = $this->env->getExtension("native_profiler");
        $__internal_5010f9c6b6af0e8b276ca73a1875809e0962547e1bc7106aea3cf0702ff1145e->enter($__internal_5010f9c6b6af0e8b276ca73a1875809e0962547e1bc7106aea3cf0702ff1145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::skeleton.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5010f9c6b6af0e8b276ca73a1875809e0962547e1bc7106aea3cf0702ff1145e->leave($__internal_5010f9c6b6af0e8b276ca73a1875809e0962547e1bc7106aea3cf0702ff1145e_prof);

    }

    // line 19
    public function block_skeleton($context, array $blocks = array())
    {
        $__internal_36e180510ee951928c30747a91ca9c66f6cd6e981e25d4aed478e1ff771fbab1 = $this->env->getExtension("native_profiler");
        $__internal_36e180510ee951928c30747a91ca9c66f6cd6e981e25d4aed478e1ff771fbab1->enter($__internal_36e180510ee951928c30747a91ca9c66f6cd6e981e25d4aed478e1ff771fbab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "skeleton"));

        // line 20
        echo "<section id=\"main-content\">
\t<div class=\"container-fluid\">
        <div id=\"bouton-menu-responsive\" class=\"menu-leftcol\">
            <img id=\"icon-arrow-menu\" class=\"icon-menu-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/arrow-right.png\"/>
            <img id=\"icon-arrow-menu-left\" class=\"icon-menu-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/arrow-left.png\"/>
        </div>


\t\t";
        // line 28
        $this->displayBlock('maincontent', $context, $blocks);
        // line 179
        echo "        </div>  
\t</div>

</section>

<div id=\"dialog\" title=\"Confirmation Required\">
\tAre you sure about this? All your modification will be lost
</div>
<script>
\$(document).ready(function() {
\t    \$(\"#dialog\").dialog({
\t      autoOpen: false,
\t      modal: true
\t    });
\t  });

\t  \$(\".confirmModal\").click(function(e) {
\t    e.preventDefault();
\t    var targetUrl = \$(this).attr(\"href\");

\t    \$(\"#dialog\").dialog({
\t      buttons : {
\t        \"Confirm\" : function() {
\t          window.location.href = targetUrl;
\t        },
\t        \"Cancel\" : function() {
\t          \$(this).dialog(\"close\");
\t        }
\t      }
\t    });

\t    \$(\"#dialog\").dialog(\"open\");
\t  });
</script>

";
        
        $__internal_36e180510ee951928c30747a91ca9c66f6cd6e981e25d4aed478e1ff771fbab1->leave($__internal_36e180510ee951928c30747a91ca9c66f6cd6e981e25d4aed478e1ff771fbab1_prof);

    }

    // line 28
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_3b06c20a116a618c91b0592bf8eebac9bb56ee169113c7e86cf6dc83b233b88c = $this->env->getExtension("native_profiler");
        $__internal_3b06c20a116a618c91b0592bf8eebac9bb56ee169113c7e86cf6dc83b233b88c->enter($__internal_3b06c20a116a618c91b0592bf8eebac9bb56ee169113c7e86cf6dc83b233b88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 29
        echo "\t\t<div class=\"row\" style=\"background-color:#f1f1f1 !important;\">

                <div id=\"left-menu\" class=\"col-md-2 leftcol closed\">
                    <div class=\"leftcol\">
                        <section id=\"leftcol\"  class=\"leftcol\">
                            <div class=\"sidebar leftcol\">

                                <div class=\"sidemenu leftcol\">
                                    ";
        // line 37
        $this->displayBlock('leftmenu', $context, $blocks);
        // line 155
        echo "                                </div>
                        </section>
                    </div>
                </div>

                <div class=\"col-md-10\">
                    <div class=\"container\">
                        <div class=\"row-fluid\">
                                <div class=\"span6 pull-right logininfo\" style=\"text-align:right\">
                                    <span class=\"glyphicon glyphicon-user\"></span>
                                    Hello ";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " |
                                    <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                        Logout <span class=\"glyphicon glyphicon-log-out\"></span>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div>
                        <section id=\"body\">";
        // line 173
        $this->displayBlock('body', $context, $blocks);
        echo "</section>
                    </div>
                </div>


            ";
        
        $__internal_3b06c20a116a618c91b0592bf8eebac9bb56ee169113c7e86cf6dc83b233b88c->leave($__internal_3b06c20a116a618c91b0592bf8eebac9bb56ee169113c7e86cf6dc83b233b88c_prof);

    }

    // line 37
    public function block_leftmenu($context, array $blocks = array())
    {
        $__internal_b7b292a1b68faaf93540e9d9086cca8dbf3b1e7bf5c7697c871e28040623d05c = $this->env->getExtension("native_profiler");
        $__internal_b7b292a1b68faaf93540e9d9086cca8dbf3b1e7bf5c7697c871e28040623d05c->enter($__internal_b7b292a1b68faaf93540e9d9086cca8dbf3b1e7bf5c7697c871e28040623d05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftmenu"));

        // line 38
        echo "                                        <div class=\"logowrapper\">
                                            <img class=\"logotop\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/img/logo_black.png\"/>
                                        </div>
                                        <br/>

                                        <div class=\"dropdown\" id=\"applist\">
                                            ";
        // line 44
        echo $this->env->getExtension('twig_menu_extension')->appListMenu();
        echo "
                                        </div>
                                        <div class=\"separator\">&nbsp;</div>
                                        <!-- content -->
                                        ";
        // line 48
        $this->displayBlock('contentmenu', $context, $blocks);
        // line 51
        echo "                                                <div class=\"sidebartitle\">
                                                    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("keosu_core_homepage");
        echo "\">
                                                        <div class=\"lien-menu\">
                                                            <span class=\"glyphicon glyphicon-th icon-menu\"></span> <span class=\"texte-lien-menu\">Content</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class=\"sidebarlink\">
                                                    <a class=\"sous-menu\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("keosu_ReaderManager_manage");
        echo "\">
                                                        <div class=\"lien-menu\">
                                                           <span class=\"glyphicon glyphicon-save icon-menu\"></span> <span class=\"texte-lien-menu\">Import remote</span>
                                                        </div>
                                                    </a>
                                                </div>


                                                ";
        // line 67
        echo $this->env->getExtension('twig_menu_extension')->appListContent();
        echo "

                                            </div>

                                        <div class=\"separator\">&nbsp;</div>
                                        <!-- Page menu -->
                                        <div class=\"sidebartitle\">
                                             <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("keosu_core_page");
        echo "\">
                                                 <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-book icon-menu\"></span> <span class=\"texte-lien-menu\">Pages</span>
                                                 </div>
                                            </a>
                                        </div>
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("keosu_core_views_page_manage");
        echo "\">
                                                <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-file icon-menu\"></span> <span class=\"texte-lien-menu\">Manage pages</span>
                                                </div>
                                            </a>
                                        </div>
                                        ";
        // line 87
        echo $this->env->getExtension('twig_menu_extension')->appListPage();
        echo "
                                        <div class=\"separator\">&nbsp;</div>

                                        <div class=\"sidebartitle\">
                                            <a id=\"simulator\" target=\"_blank\" class=\"mainnavel\" href=\"http://emulate.phonegap.com?url=";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["url_base"]) ? $context["url_base"] : $this->getContext($context, "url_base")), "html", null, true);
        echo "/keosu/export/simulator/www/index.html\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-phone icon-menu\"></span> <span class=\"texte-lien-menu\">Preview</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class=\"separator\">&nbsp;</div>

                                        <div class=\"sidebartitle\">
                                            <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("keosu_core_publish");
        echo "\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-send icon-menu\"></span> <span class=\"texte-lien-menu\">Publish</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class=\"separator\">&nbsp;</div>

                                        ";
        // line 111
        echo "                                        <div class=\"sidebartitle menuTitle\">
                                            <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("keosu_core_configuration");
        echo "\">
                                             <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-cog icon-menu\"></span> <span class=\"texte-lien-menu\">Config</span>
                                             </div>
                                            </a>
                                        </div>
                                        <div class=\"menuContent\">
                                            <div class=\"sidebarlink\">
                                                <a class=\"sous-menu\" href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("keosu_core_app_manage");
        echo "\">
                                                    <div class=\"lien-menu\">
                                                       <span class=\"glyphicon glyphicon-th-large icon-menu\"></span> <span class=\"texte-lien-menu\">Apps</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class=\"sidebarlink\">
                                                <a class=\"sous-menu\" href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("keosu_core_theme_manage");
        echo "\">
                                                    <div class=\"lien-menu\">
                                                        <span class=\"glyphicon glyphicon-tint icon-menu\"></span><span class=\"texte-lien-menu\">Themes</span>
                                                    </div>
                                                </a>
                                            </div>
                                            </div>
                                            ";
        // line 134
        echo $this->env->getExtension('twig_menu_extension')->addItemToMenuConfiguration();
        echo "

                                        <div class=\"sidebartitle menuTitle\">
                                            <a target=\"_blank\" href=\"http://store.keosu.com/index.php?utm_source=keosu&utm_medium=cms&utm_term=store&utm_campaign=keosu%20cms%20to%20store\">
                                             <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-shopping-cart icon-menu\"></span> <span class=\"texte-lien-menu\">Store</span>
                                             </div>
                                            </a>
                                        </div>

                                        <div class=\"sidebartitle menuTitle\">
                                            <a target=\"_blank\" href=\"http://keosu.com/get-help/?utm_source=keosu&utm_medium=cms&utm_term=aide&utm_campaign=aide\">
                                             <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-question-sign icon-menu\"></span> <span class=\"texte-lien-menu\">Help</span>
                                             </div>
                                            </a>
                                        </div>

                                        </div>
                                        <div class=\"separator\">&nbsp;</div>
                                    ";
        
        $__internal_b7b292a1b68faaf93540e9d9086cca8dbf3b1e7bf5c7697c871e28040623d05c->leave($__internal_b7b292a1b68faaf93540e9d9086cca8dbf3b1e7bf5c7697c871e28040623d05c_prof);

    }

    // line 48
    public function block_contentmenu($context, array $blocks = array())
    {
        $__internal_63aa1852bc0b09de93a4af4bb30edd6b322197422fbb0c251503fc9f25664a60 = $this->env->getExtension("native_profiler");
        $__internal_63aa1852bc0b09de93a4af4bb30edd6b322197422fbb0c251503fc9f25664a60->enter($__internal_63aa1852bc0b09de93a4af4bb30edd6b322197422fbb0c251503fc9f25664a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentmenu"));

        // line 49
        echo "                                            <div>
                                        ";
        
        $__internal_63aa1852bc0b09de93a4af4bb30edd6b322197422fbb0c251503fc9f25664a60->leave($__internal_63aa1852bc0b09de93a4af4bb30edd6b322197422fbb0c251503fc9f25664a60_prof);

    }

    // line 173
    public function block_body($context, array $blocks = array())
    {
        $__internal_aefcc1976a755bca09a3d2c880b1cc73cf89492558297377016d5eed47b09298 = $this->env->getExtension("native_profiler");
        $__internal_aefcc1976a755bca09a3d2c880b1cc73cf89492558297377016d5eed47b09298->enter($__internal_aefcc1976a755bca09a3d2c880b1cc73cf89492558297377016d5eed47b09298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aefcc1976a755bca09a3d2c880b1cc73cf89492558297377016d5eed47b09298->leave($__internal_aefcc1976a755bca09a3d2c880b1cc73cf89492558297377016d5eed47b09298_prof);

    }

    public function getTemplateName()
    {
        return "::skeleton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 173,  340 => 49,  334 => 48,  306 => 134,  296 => 127,  286 => 120,  275 => 112,  272 => 111,  260 => 101,  247 => 91,  240 => 87,  231 => 81,  221 => 74,  211 => 67,  200 => 59,  190 => 52,  187 => 51,  185 => 48,  178 => 44,  170 => 39,  167 => 38,  161 => 37,  148 => 173,  138 => 166,  134 => 165,  122 => 155,  120 => 37,  110 => 29,  104 => 28,  62 => 179,  60 => 28,  53 => 24,  49 => 23,  44 => 20,  38 => 19,  11 => 18,);
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
{% extends '::root.html.twig' %}
{% block skeleton %}
<section id=\"main-content\">
\t<div class=\"container-fluid\">
        <div id=\"bouton-menu-responsive\" class=\"menu-leftcol\">
            <img id=\"icon-arrow-menu\" class=\"icon-menu-responsive\" src=\"{{url_base}}/img/arrow-right.png\"/>
            <img id=\"icon-arrow-menu-left\" class=\"icon-menu-responsive\" src=\"{{url_base}}/img/arrow-left.png\"/>
        </div>


\t\t{% block maincontent %}
\t\t<div class=\"row\" style=\"background-color:#f1f1f1 !important;\">

                <div id=\"left-menu\" class=\"col-md-2 leftcol closed\">
                    <div class=\"leftcol\">
                        <section id=\"leftcol\"  class=\"leftcol\">
                            <div class=\"sidebar leftcol\">

                                <div class=\"sidemenu leftcol\">
                                    {% block leftmenu %}
                                        <div class=\"logowrapper\">
                                            <img class=\"logotop\" src=\"{{url_base}}/img/logo_black.png\"/>
                                        </div>
                                        <br/>

                                        <div class=\"dropdown\" id=\"applist\">
                                            {{ appListMenu() }}
                                        </div>
                                        <div class=\"separator\">&nbsp;</div>
                                        <!-- content -->
                                        {% block contentmenu %}
                                            <div>
                                        {% endblock %}
                                                <div class=\"sidebartitle\">
                                                    <a href=\"{{ path('keosu_core_homepage') }}\">
                                                        <div class=\"lien-menu\">
                                                            <span class=\"glyphicon glyphicon-th icon-menu\"></span> <span class=\"texte-lien-menu\">Content</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class=\"sidebarlink\">
                                                    <a class=\"sous-menu\" href=\"{{ path('keosu_ReaderManager_manage') }}\">
                                                        <div class=\"lien-menu\">
                                                           <span class=\"glyphicon glyphicon-save icon-menu\"></span> <span class=\"texte-lien-menu\">Import remote</span>
                                                        </div>
                                                    </a>
                                                </div>


                                                {{ appListContent() }}

                                            </div>

                                        <div class=\"separator\">&nbsp;</div>
                                        <!-- Page menu -->
                                        <div class=\"sidebartitle\">
                                             <a href=\"{{ path('keosu_core_page') }}\">
                                                 <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-book icon-menu\"></span> <span class=\"texte-lien-menu\">Pages</span>
                                                 </div>
                                            </a>
                                        </div>
                                        <div class=\"sidebarlink\">
                                            <a class=\"sous-menu\" href=\"{{ path('keosu_core_views_page_manage') }}\">
                                                <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-file icon-menu\"></span> <span class=\"texte-lien-menu\">Manage pages</span>
                                                </div>
                                            </a>
                                        </div>
                                        {{ appListPage() }}
                                        <div class=\"separator\">&nbsp;</div>

                                        <div class=\"sidebartitle\">
                                            <a id=\"simulator\" target=\"_blank\" class=\"mainnavel\" href=\"http://emulate.phonegap.com?url={{url_base}}/keosu/export/simulator/www/index.html\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-phone icon-menu\"></span> <span class=\"texte-lien-menu\">Preview</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class=\"separator\">&nbsp;</div>

                                        <div class=\"sidebartitle\">
                                            <a href=\"{{ path('keosu_core_publish') }}\">
                                                <div class=\"lien-menu\">
                                                    <span class=\"glyphicon glyphicon-send icon-menu\"></span> <span class=\"texte-lien-menu\">Publish</span>
                                                </div>
                                            </a>
                                        </div>

                                        <div class=\"separator\">&nbsp;</div>

                                        {# active with activesidebartitle #}
                                        <div class=\"sidebartitle menuTitle\">
                                            <a href=\"{{ path('keosu_core_configuration') }}\">
                                             <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-cog icon-menu\"></span> <span class=\"texte-lien-menu\">Config</span>
                                             </div>
                                            </a>
                                        </div>
                                        <div class=\"menuContent\">
                                            <div class=\"sidebarlink\">
                                                <a class=\"sous-menu\" href=\"{{ path('keosu_core_app_manage') }}\">
                                                    <div class=\"lien-menu\">
                                                       <span class=\"glyphicon glyphicon-th-large icon-menu\"></span> <span class=\"texte-lien-menu\">Apps</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class=\"sidebarlink\">
                                                <a class=\"sous-menu\" href=\"{{ path('keosu_core_theme_manage') }}\">
                                                    <div class=\"lien-menu\">
                                                        <span class=\"glyphicon glyphicon-tint icon-menu\"></span><span class=\"texte-lien-menu\">Themes</span>
                                                    </div>
                                                </a>
                                            </div>
                                            </div>
                                            {{ addItemToMenuConfiguration() }}

                                        <div class=\"sidebartitle menuTitle\">
                                            <a target=\"_blank\" href=\"http://store.keosu.com/index.php?utm_source=keosu&utm_medium=cms&utm_term=store&utm_campaign=keosu%20cms%20to%20store\">
                                             <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-shopping-cart icon-menu\"></span> <span class=\"texte-lien-menu\">Store</span>
                                             </div>
                                            </a>
                                        </div>

                                        <div class=\"sidebartitle menuTitle\">
                                            <a target=\"_blank\" href=\"http://keosu.com/get-help/?utm_source=keosu&utm_medium=cms&utm_term=aide&utm_campaign=aide\">
                                             <div class=\"lien-menu\">
                                                 <span class=\"glyphicon glyphicon-question-sign icon-menu\"></span> <span class=\"texte-lien-menu\">Help</span>
                                             </div>
                                            </a>
                                        </div>

                                        </div>
                                        <div class=\"separator\">&nbsp;</div>
                                    {% endblock %}
                                </div>
                        </section>
                    </div>
                </div>

                <div class=\"col-md-10\">
                    <div class=\"container\">
                        <div class=\"row-fluid\">
                                <div class=\"span6 pull-right logininfo\" style=\"text-align:right\">
                                    <span class=\"glyphicon glyphicon-user\"></span>
                                    Hello {{ app.user.username }} |
                                    <a href=\"{{ path('fos_user_security_logout') }}\">
                                        Logout <span class=\"glyphicon glyphicon-log-out\"></span>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div>
                        <section id=\"body\">{% block body %}{% endblock %}</section>
                    </div>
                </div>


            {% endblock %}
        </div>  
\t</div>

</section>

<div id=\"dialog\" title=\"Confirmation Required\">
\tAre you sure about this? All your modification will be lost
</div>
<script>
\$(document).ready(function() {
\t    \$(\"#dialog\").dialog({
\t      autoOpen: false,
\t      modal: true
\t    });
\t  });

\t  \$(\".confirmModal\").click(function(e) {
\t    e.preventDefault();
\t    var targetUrl = \$(this).attr(\"href\");

\t    \$(\"#dialog\").dialog({
\t      buttons : {
\t        \"Confirm\" : function() {
\t          window.location.href = targetUrl;
\t        },
\t        \"Cancel\" : function() {
\t          \$(this).dialog(\"close\");
\t        }
\t      }
\t    });

\t    \$(\"#dialog\").dialog(\"open\");
\t  });
</script>

{% endblock %}
";
    }
}
