<?php

/* themes/sub_theme/templates/page.html.twig */
class __TwigTemplate_dfc0044adfe8df44b38663e98c9fbf858d99edb9803f1e2bd40a78a4d6ebdda7 extends Twig_Template
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
        $tags = array("if" => 69, "spaceless" => 192);
        $filters = array("t" => 81, "date" => 235);
        $functions = array("path" => 126);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
                array('t', 'date'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 57
        echo "
<div class=\"off-canvas-wrapper\">
    <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
        <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
            ";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_off_canvas", array()), "html", null, true));
        echo "
        </aside>

        <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
            ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_off_canvas", array()), "html", null, true));
        echo "
        </aside>

        <div class=\"off-canvas-content\" data-off-canvas-content>
            ";
        // line 69
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array())) {
            // line 70
            echo "                ";
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 71
                echo "                    <div class=\"row\">
                        <div class=\"large-12 columns\">
                        ";
            }
            // line 74
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array()), "html", null, true));
            echo "
                        ";
            // line 75
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 76
                echo "                        </div>
                    </div>
                ";
            }
            // line 79
            echo "            ";
        }
        // line 80
        echo "
            <header class=\"row\" role=\"banner\" aria-label=\"";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">

            </header>

            <div class=\"title-bar\" data-responsive-toggle=\"main-menu\" data-hide-for=\"medium\">
                <button class=\"menu-icon\" type=\"button\" data-toggle></button>
                ";
        // line 87
        if (((isset($context["linked_site_name"]) ? $context["linked_site_name"] : null) || (isset($context["linked_logo"]) ? $context["linked_logo"] : null))) {
            // line 88
            echo "                    <div class=\"\">
                        ";
            // line 89
            if ((isset($context["linked_logo"]) ? $context["linked_logo"] : null)) {
                // line 90
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_logo"]) ? $context["linked_logo"] : null), "html", null, true));
                echo "
                        ";
            }
            // line 92
            echo "                        <h1 id=\"site-name\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_site_name"]) ? $context["linked_site_name"] : null), "html", null, true));
            echo "</h1>

                    </div>
                ";
        }
        // line 96
        echo "                <div class=\"title-bar-title\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_menu_text"]) ? $context["top_bar_menu_text"] : null), "html", null, true));
        echo "</div>
            </div>

            ";
        // line 99
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 100
            echo "                <div id=\"header-menu\" class=\"row expanded\">
                    ";
            // line 111
            echo "
                    <div class=\"large-10 columns\">
                        <div class=\"logo\">
                            ";
            // line 114
            if ((isset($context["linked_logo"]) ? $context["linked_logo"] : null)) {
                // line 115
                echo "                                ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_logo"]) ? $context["linked_logo"] : null), "html", null, true));
                echo "
                            ";
            }
            // line 117
            echo "                        </div>
                        ";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
                    </div>

                    ";
            // line 121
            if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
                // line 122
                echo "                        <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) ? ("large-6") : ("large-2 columns"))));
                echo " columns hide-for-small top-bar\">
                            <ul class=\"menu login\">
                                ";
                // line 124
                if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "logged_in", array())) {
                    // line 125
                    echo "                                    <li>
                                        <a href=\"";
                    // line 126
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.page")));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("My Account")));
                    echo "</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                    // line 129
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.logout")));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Logout")));
                    echo "</a>
                                    </li>
                                ";
                } else {
                    // line 132
                    echo "                                    <li>
                                        <a href=\"";
                    // line 133
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
                    echo "</a>
                                    </li>
                                    <li><a href=\"";
                    // line 135
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
                    echo "</a>
                                    </li>
                                ";
                }
                // line 138
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 141
            echo "
                </div>
            ";
        }
        // line 144
        echo "            <div id=\"middle-header\" class=\"row expanded\">
                ";
        // line 145
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "middle_header", array()), "html", null, true));
        echo "
            </div>
            <div id=\"bottom-header\" class=\"row\">
                ";
        // line 148
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_header", array()), "html", null, true));
        echo "
            </div>
            <div class=\"row\">

                ";
        // line 152
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 153
            echo "                    <div class=\"large-6 columns hide-for-small\">
                        ";
            // line 154
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 157
        echo "                ";
        // line 171
        echo "            </div>

            ";
        // line 173
        if (((isset($context["messages"]) ? $context["messages"] : null) &&  !(isset($context["zurb_foundation_messages_modal"]) ? $context["zurb_foundation_messages_modal"] : null))) {
            // line 174
            echo "                <div class=\"l-messages row\">
                    <div class=\"large-12 columns\">
                        ";
            // line 176
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
                    </div>
                </div>
            ";
        }
        // line 180
        echo "
            ";
        // line 181
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 182
            echo "                <div class=\"l-help row\">
                    <div class=\"large-12 columns\">
                        ";
            // line 184
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
                    </div>
                </div>
            ";
        }
        // line 188
        echo "
            <div class=\"row\">
                <main id=\"main\" class=\"";
        // line 190
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid"]) ? $context["main_grid"] : null), "html", null, true));
        echo " columns\" role=\"main\">
                    ";
        // line 191
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 192
            echo "                        ";
            ob_start();
            // line 193
            echo "                            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
                        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 195
            echo "                    ";
        }
        // line 196
        echo "                    <a id=\"main-content\"></a>
                    ";
        // line 197
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo " ";
        }
        // line 198
        echo "                    <section>
                        ";
        // line 199
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                    </section>
                </main>
                ";
        // line 202
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 203
            echo "                    <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_grid"]) ? $context["sidebar_first_grid"] : null), "html", null, true));
            echo " columns sidebar \">
                        ";
            // line 204
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 207
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 208
            echo "                    <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_sec_grid"]) ? $context["sidebar_sec_grid"] : null), "html", null, true));
            echo " columns sidebar\">
                        ";
            // line 209
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
                    </div>
                ";
        }
        // line 212
        echo "            </div>
            ";
        // line 213
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()))) {
            // line 214
            echo "                <footer class=\"row expanded\">
                    ";
            // line 215
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 216
                echo "                        <div id=\"footer-first\" class=\"row\">
                            ";
                // line 217
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
                        </div>
                    ";
            }
            // line 220
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) {
                // line 221
                echo "                        <div id=\"footer-middle\" class=\"row expanded\">
                            ";
                // line 222
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
                echo "
                        </div>
                    ";
            }
            // line 225
            echo "                    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array())) {
                // line 226
                echo "                        <div id=\"footer-last\" class=\"row expanded\">
                            ";
                // line 227
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()), "html", null, true));
                echo "
                        </div>
                    ";
            }
            // line 230
            echo "                </footer>
            ";
        }
        // line 232
        echo "            <!--<div class=\"bottom-bar panel\">
                <div class=\"row\">
                    <div class=\"large-12 columns\">
                        &copy; ";
        // line 235
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("All rights reserved.")));
        echo "
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/sub_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 235,  388 => 232,  384 => 230,  378 => 227,  375 => 226,  372 => 225,  366 => 222,  363 => 221,  360 => 220,  354 => 217,  351 => 216,  349 => 215,  346 => 214,  344 => 213,  341 => 212,  335 => 209,  330 => 208,  327 => 207,  321 => 204,  316 => 203,  314 => 202,  308 => 199,  305 => 198,  299 => 197,  296 => 196,  293 => 195,  287 => 193,  284 => 192,  282 => 191,  278 => 190,  274 => 188,  267 => 184,  263 => 182,  261 => 181,  258 => 180,  251 => 176,  247 => 174,  245 => 173,  241 => 171,  239 => 157,  233 => 154,  230 => 153,  228 => 152,  221 => 148,  215 => 145,  212 => 144,  207 => 141,  202 => 138,  194 => 135,  187 => 133,  184 => 132,  176 => 129,  168 => 126,  165 => 125,  163 => 124,  157 => 122,  155 => 121,  149 => 118,  146 => 117,  140 => 115,  138 => 114,  133 => 111,  130 => 100,  128 => 99,  121 => 96,  113 => 92,  107 => 90,  105 => 89,  102 => 88,  100 => 87,  91 => 81,  88 => 80,  85 => 79,  80 => 76,  78 => 75,  73 => 74,  68 => 71,  65 => 70,  63 => 69,  56 => 65,  49 => 61,  43 => 57,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Zurb Foundations's theme implementation to display a single page.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - linked_logo: The logo image, linked to <front>.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - linked_site_name: The name of the site that also links to <front>.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.meta_header*/
/*  * - page.header*/
/*  * - page.help*/
/*  * - page.highlighted*/
/*  * - page.content*/
/*  * - page.sidebar_first*/
/*  * - page.sidebar_second*/
/*  * - page.footer_first*/
/*  * - page.footer_middle*/
/*  * - page.footer_last*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* <div class="off-canvas-wrapper">*/
/*     <div class="inner-wrap off-canvas-wrapper-inner" id="inner-wrap" data-off-canvas-wrapper>*/
/*         <aside id="left-off-canvas-menu" class="off-canvas left-off-canvas-menu position-left" role="complementary" data-off-canvas>*/
/*             {{ page.left_off_canvas }}*/
/*         </aside>*/
/* */
/*         <aside id="right-off-canvas-menu" class="off-canvas right-off-canvas-menu position-right" role="complementary" data-off-canvas>*/
/*             {{ page.right_off_canvas }}*/
/*         </aside>*/
/* */
/*         <div class="off-canvas-content" data-off-canvas-content>*/
/*             {% if page.meta_header %}*/
/*                 {% if meta_header_grid %}*/
/*                     <div class="row">*/
/*                         <div class="large-12 columns">*/
/*                         {% endif %}*/
/*                         {{ page.meta_header }}*/
/*                         {% if meta_header_grid %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <header class="row" role="banner" aria-label="{{ 'Site header'|t }}">*/
/* */
/*             </header>*/
/* */
/*             <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">*/
/*                 <button class="menu-icon" type="button" data-toggle></button>*/
/*                 {% if linked_site_name or linked_logo %}*/
/*                     <div class="">*/
/*                         {% if linked_logo %}*/
/*                             {{ linked_logo }}*/
/*                         {% endif %}*/
/*                         <h1 id="site-name">{{ linked_site_name }}</h1>*/
/* */
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="title-bar-title">{{ top_bar_menu_text }}</div>*/
/*             </div>*/
/* */
/*             {% if page.header %}*/
/*                 <div id="header-menu" class="row expanded">*/
/*                     {#{% if linked_site_name or linked_logo %}*/
/*                         */
/*                         <div class="left large-4 columns">*/
/*                             {% if is_front %}*/
/*                                 <h1 id="site-name">{{ linked_site_name }}</h1>*/
/*                             {% else %}*/
/*                                 <div id="site-name">{{ linked_site_name }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     {% endif %}#}*/
/* */
/*                     <div class="large-10 columns">*/
/*                         <div class="logo">*/
/*                             {% if linked_logo %}*/
/*                                 {{ linked_logo }}*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         {{ page.header }}*/
/*                     </div>*/
/* */
/*                     {% if show_account_info %}*/
/*                         <div class="{{ site_slogan ? 'large-6' : 'large-2 columns' }} columns hide-for-small top-bar">*/
/*                             <ul class="menu login">*/
/*                                 {% if user.logged_in %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('user.page') }}">{{ 'My Account'|t }}</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('user.logout') }}">{{ 'Logout'|t }}</a>*/
/*                                     </li>*/
/*                                 {% else %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('user.login') }}">{{ 'Login'|t }}</a>*/
/*                                     </li>*/
/*                                     <li><a href="{{ path('user.register') }}">{{ 'Sign Up'|t }}</a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             {% endif %}*/
/*             <div id="middle-header" class="row expanded">*/
/*                 {{ page.middle_header }}*/
/*             </div>*/
/*             <div id="bottom-header" class="row">*/
/*                 {{ page.bottom_header }}*/
/*             </div>*/
/*             <div class="row">*/
/* */
/*                 {% if site_slogan %}*/
/*                     <div class="large-6 columns hide-for-small">*/
/*                         {{ site_slogan }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {#{% if show_account_info %}*/
/*                     <div class="show-for-small">*/
/*                         <div class="six mobile-two columns">*/
/*                             <p>*/
/*                                 <a href="{{ path('user.login') }}" class="radius button">{{ 'Login'|t }}</a>*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="six mobile-two columns">*/
/*                             <p>*/
/*                                 <a href="{{ path('user.register') }}" class="radius success button">{{ 'Sign Up'|t }}</a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}#}*/
/*             </div>*/
/* */
/*             {% if messages and not zurb_foundation_messages_modal %}*/
/*                 <div class="l-messages row">*/
/*                     <div class="large-12 columns">*/
/*                         {{ messages }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if page.help %}*/
/*                 <div class="l-help row">*/
/*                     <div class="large-12 columns">*/
/*                         {{ page.help }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="row">*/
/*                 <main id="main" class="{{ main_grid }} columns" role="main">*/
/*                     {% if page.highlighted %}*/
/*                         {% spaceless %}*/
/*                             {{ page.highlighted }}*/
/*                         {% endspaceless %}*/
/*                     {% endif %}*/
/*                     <a id="main-content"></a>*/
/*                     {% if breadcrumb %} {{ breadcrumb }} {% endif %}*/
/*                     <section>*/
/*                         {{ page.content }}*/
/*                     </section>*/
/*                 </main>*/
/*                 {% if page.sidebar_first %}*/
/*                     <div id="sidebar-first" class="{{ sidebar_first_grid }} columns sidebar ">*/
/*                         {{ page.sidebar_first }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if page.sidebar_second %}*/
/*                     <div id="sidebar-second" class="{{ sidebar_sec_grid }} columns sidebar">*/
/*                         {{ page.sidebar_second }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% if page.footer_first or page.footer_middle or page.footer_last %}*/
/*                 <footer class="row expanded">*/
/*                     {% if page.footer_first %}*/
/*                         <div id="footer-first" class="row">*/
/*                             {{ page.footer_first }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if page.footer_middle %}*/
/*                         <div id="footer-middle" class="row expanded">*/
/*                             {{ page.footer_middle }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if page.footer_last %}*/
/*                         <div id="footer-last" class="row expanded">*/
/*                             {{ page.footer_last }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </footer>*/
/*             {% endif %}*/
/*             <!--<div class="bottom-bar panel">*/
/*                 <div class="row">*/
/*                     <div class="large-12 columns">*/
/*                         &copy; {{ "now"|date('Y') }} {{ site_name }} {{ 'All rights reserved.'|t }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div> -->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
