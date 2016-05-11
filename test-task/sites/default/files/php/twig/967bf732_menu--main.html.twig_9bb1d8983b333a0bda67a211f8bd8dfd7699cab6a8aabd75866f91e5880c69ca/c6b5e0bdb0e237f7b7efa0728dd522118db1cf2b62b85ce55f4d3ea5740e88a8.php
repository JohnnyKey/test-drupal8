<?php

/* themes/zurb_foundation/templates/menu--main.html.twig */
class __TwigTemplate_d589d825b3b401d4dfa5ee717f59e08140aa70da53b052f706167f3da4b1d123 extends Twig_Template
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
        $tags = array("import" => 16, "if" => 23, "macro" => 53, "for" => 69, "set" => 71);
        $filters = array();
        $functions = array("link" => 74);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'if', 'macro', 'for', 'set'),
                array(),
                array('link')
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

        // line 16
        $context["menus"] = $this;
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 23
        if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
            // line 24
            echo "    ";
            if ((isset($context["top_bar_sticky"]) ? $context["top_bar_sticky"] : null)) {
                // line 25
                echo "        <div id=\"top-bar-sticky-container\" data-sticky-container>
        ";
            }
            // line 27
            echo "        <div ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_attributes"]) ? $context["top_bar_attributes"] : null), "html", null, true));
            echo ">
            
            <nav class=\"top-bar\" id=\"main-menu\" role=\"navigation\">
                ";
            // line 36
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, 1)));
            echo "
                ";
            // line 37
            if ((isset($context["top_bar_search"]) ? $context["top_bar_search"] : null)) {
                // line 38
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_search"]) ? $context["top_bar_search"] : null), "html", null, true));
                echo "
                ";
            }
            // line 40
            echo "                ";
            if ((isset($context["top_bar_languageswitcher"]) ? $context["top_bar_languageswitcher"] : null)) {
                // line 41
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["top_bar_languageswitcher"]) ? $context["top_bar_languageswitcher"] : null), "html", null, true));
                echo "
                ";
            }
            // line 43
            echo "                ";
            // line 44
            echo "            </nav>
        </div>
        ";
            // line 46
            if ((isset($context["top_bar_sticky"]) ? $context["top_bar_sticky"] : null)) {
                // line 47
                echo "        </div>
    ";
            }
        } else {
            // line 50
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0, 0)));
            echo "
";
        }
        // line 52
        echo "
";
    }

    // line 53
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__top_bar__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "top_bar" => $__top_bar__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    ";
            $context["menus"] = $this;
            // line 55
            echo "    ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 56
                echo "        ";
                if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
                    // line 57
                    echo "            ";
                    if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                        // line 58
                        echo "                <ul";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu", 1 => "vertical", 2 => "medium-horizontal"), "method"), "setAttribute", array(0 => "data-responsive-menu", 1 => "drilldown medium-dropdown"), "method"), "html", null, true));
                        echo ">
                ";
                    } else {
                        // line 60
                        echo "                    <ul class=\"submenu menu vertical\" data-submenu>
                    ";
                    }
                    // line 62
                    echo "                ";
                } else {
                    // line 63
                    echo "                    ";
                    if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                        // line 64
                        echo "                        <ul";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "dropdown", 1 => "menu"), "method"), "html", null, true));
                        echo " data-dropdown-menu>
                        ";
                    } else {
                        // line 66
                        echo "                            <ul class=\"menu\">
                            ";
                    }
                    // line 68
                    echo "                        ";
                }
                // line 69
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 70
                    echo "                            ";
                    if ((isset($context["top_bar"]) ? $context["top_bar"] : null)) {
                        // line 71
                        echo "                                ";
                        $context["item_classes"] = array(0 => (( !twig_test_empty($this->getAttribute($context["item"], "below", array()))) ? ("has-submenu") : ("")));
                        // line 72
                        echo "                            ";
                    }
                    // line 73
                    echo "                            <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                    echo ">
                                ";
                    // line 74
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                    echo "
                                ";
                    // line 75
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 76
                        echo "                                    ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1), (isset($context["top_bar"]) ? $context["top_bar"] : null))));
                        echo "
                                ";
                    }
                    // line 78
                    echo "                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                    </ul>
                ";
            }
            // line 82
            echo "            ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 82,  207 => 80,  200 => 78,  194 => 76,  192 => 75,  188 => 74,  183 => 73,  180 => 72,  177 => 71,  174 => 70,  169 => 69,  166 => 68,  162 => 66,  156 => 64,  153 => 63,  150 => 62,  146 => 60,  140 => 58,  137 => 57,  134 => 56,  131 => 55,  128 => 54,  113 => 53,  108 => 52,  102 => 50,  97 => 47,  95 => 46,  91 => 44,  89 => 43,  83 => 41,  80 => 40,  74 => 38,  72 => 37,  67 => 36,  60 => 27,  56 => 25,  53 => 24,  51 => 23,  48 => 22,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* */
/* {% if top_bar %}*/
/*     {% if top_bar_sticky %}*/
/*         <div id="top-bar-sticky-container" data-sticky-container>*/
/*         {% endif %}*/
/*         <div {{ top_bar_attributes }}>*/
/*             */
/*             <nav class="top-bar" id="main-menu" role="navigation">*/
/*                 {#<div class="top-bar-left">*/
/*                   <ul class="dropdown menu" data-dropdown-menu>*/
/*                     <li class="menu-text">{{ site_name }}</li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="top-bar-right">#}*/
/*                 {{ menus.menu_links(items, attributes, 0, 1) }}*/
/*                 {% if top_bar_search %}*/
/*                     {{ top_bar_search }}*/
/*                 {% endif %}*/
/*                 {% if top_bar_languageswitcher %}*/
/*                     {{ top_bar_languageswitcher }}*/
/*                 {% endif %}*/
/*                 {#        </div>#}*/
/*             </nav>*/
/*         </div>*/
/*         {% if top_bar_sticky %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% else %}*/
/*     {{ menus.menu_links(items, attributes, 0, 0) }}*/
/* {% endif %}*/
/* */
/* {% macro menu_links(items, attributes, menu_level, top_bar) %}*/
/*     {% import _self as menus %}*/
/*     {% if items %}*/
/*         {% if top_bar %}*/
/*             {% if menu_level == 0 %}*/
/*                 <ul{{ attributes.addClass('menu', 'vertical', 'medium-horizontal').setAttribute('data-responsive-menu', 'drilldown medium-dropdown') }}>*/
/*                 {% else %}*/
/*                     <ul class="submenu menu vertical" data-submenu>*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     {% if menu_level == 0 %}*/
/*                         <ul{{ attributes.addClass('dropdown', 'menu') }} data-dropdown-menu>*/
/*                         {% else %}*/
/*                             <ul class="menu">*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                         {% for item in items %}*/
/*                             {% if top_bar %}*/
/*                                 {% set item_classes = [ item.below is not empty ? 'has-submenu' ] %}*/
/*                             {% endif %}*/
/*                             <li{{ item.attributes.addClass(item_classes) }}>*/
/*                                 {{ link(item.title, item.url) }}*/
/*                                 {% if item.below %}*/
/*                                     {{ menus.menu_links(item.below, attributes, menu_level + 1, top_bar) }}*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             {% endmacro %}*/
/* */
