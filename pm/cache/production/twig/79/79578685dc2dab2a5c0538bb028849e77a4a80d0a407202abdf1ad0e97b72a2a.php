<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ucp_header.html */
class __TwigTemplate_4fced63fcefececf6cf3e64156ec106df09c3ff4c4756ad7f321115e5d427d42 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">

\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t";
        // line 8
        $location = "breadcrumbs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("breadcrumbs.html", "ucp_header.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t\t<ul id=\"subhead-tabs\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "t_block1", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 13
            echo "\t\t\t\t<li class=\"tab";
            if (twig_get_attribute($this->env, $this->source, $context["t_block1"], "S_SELECTED", [], "any", false, false, false, 13)) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["t_block1"], "U_TITLE", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["t_block1"], "L_TITLE", [], "any", false, false, false, 13);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"ucp-title\">";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
        echo " - ";
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>
\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 29
        if (($context["S_COMPOSE_PM"] ?? null)) {
            // line 30
            echo "\t\t<form id=\"postform\" method=\"post\" action=\"";
            echo ($context["S_POST_ACTION"] ?? null);
            echo "\"";
            echo ($context["S_FORM_ENCTYPE"] ?? null);
            echo ">
\t\t";
        }
        // line 32
        echo "
\t\t<div id=\"cp-menu\">
\t\t\t<div id=\"navigation\" role=\"navigation\">

\t\t\t";
        // line 36
        if (($context["S_PRIVMSGS"] ?? null)) {
            // line 37
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "t_block2", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 38
                echo "\t\t\t\t\t";
                if ((($context["S_PRIVMSGS"] ?? null) &&  !twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_LAST_ROW", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_SELECTED", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "\t\t\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 41);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 41);
                        echo "</span></a></li>
\t\t\t\t\t\t";
                    } else {
                        // line 43
                        echo "\t\t\t\t\t\t\t<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 43);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 43);
                        echo "</span></a></li>
\t\t\t\t\t\t";
                    }
                    // line 45
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "folder", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 50
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["folder"], "S_FIRST_ROW", [], "any", false, false, false, 50)) {
                    echo "<ul>";
                }
                // line 51
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["folder"], "S_CUR_FOLDER", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "\t\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["folder"], "U_FOLDER", [], "any", false, false, false, 52);
                    echo "\">";
                    if ((twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 52) > 0)) {
                        echo "<strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 52);
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 52);
                        echo ")</strong>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 52);
                    }
                    echo "</a></li>
\t\t\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["folder"], "U_FOLDER", [], "any", false, false, false, 54);
                    echo "\"><span>";
                    if ((twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 54) > 0)) {
                        echo "<strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 54);
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "UNREAD_MESSAGES", [], "any", false, false, false, 54);
                        echo ")</strong>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["folder"], "FOLDER_NAME", [], "any", false, false, false, 54);
                    }
                    echo "</span></a></li>
\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["folder"], "S_LAST_ROW", [], "any", false, false, false, 56)) {
                    echo "</ul>";
                }
                // line 57
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t";
        }
        // line 59
        echo "
\t\t\t\t<ul>
\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "t_block2", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 62
            echo "\t\t\t\t";
            if (((($context["S_PRIVMSGS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_LAST_ROW", [], "any", false, false, false, 62)) ||  !($context["S_PRIVMSGS"] ?? null))) {
                // line 63
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["t_block2"], "S_SELECTED", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "\t\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 64);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 64);
                    echo "</span></a></li>
\t\t\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "U_TITLE", [], "any", false, false, false, 66);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["t_block2"], "L_TITLE", [], "any", false, false, false, 66);
                    echo "</span></a></li>
\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t";
            }
            // line 69
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t";
        // line 73
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_online", [], "any", false, false, false, 73)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_offline", [], "any", false, false, false, 73)))) {
            // line 74
            echo "\t\t\t<div class=\"cp-mini\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<dl class=\"mini\">
\t\t\t\t\t<dt>";
            // line 78
            echo $this->extensions['phpbb\template\twig\extension']->lang("FRIENDS");
            echo "</dt>

\t\t\t\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_online", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 81
                echo "\t\t\t\t\t<dd class=\"friend-online\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FRIENDS_ONLINE");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["friends_online"], "USERNAME_FULL", [], "any", false, false, false, 81);
                if (($context["S_SHOW_PM_BOX"] ?? null)) {
                    echo "<button type=\"submit\" name=\"add_to[";
                    echo twig_get_attribute($this->env, $this->source, $context["friends_online"], "USER_ID", [], "any", false, false, false, 81);
                    echo "]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"button-ra\"><i class=\"fa fa-plus\"></i>
</button>";
                }
                // line 82
                if ((twig_get_attribute($this->env, $this->source, $context["friends_online"], "S_LAST_ROW", [], "any", false, false, false, 82) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_offline", [], "any", false, false, false, 82)))) {
                    echo "<hr />";
                }
                echo "</dd>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
\t\t\t\t\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "friends_offline", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 86
                echo "\t\t\t\t\t<dd class=\"friend-offline\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["friends_offline"], "USERNAME_FULL", [], "any", false, false, false, 86);
                echo " ";
                if (($context["S_SHOW_PM_BOX"] ?? null)) {
                    echo "<button type=\"submit\" name=\"add_to[";
                    echo twig_get_attribute($this->env, $this->source, $context["friends_offline"], "USER_ID", [], "any", false, false, false, 86);
                    echo "]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"button-ra\"><i class=\"fa fa-plus\"></i>
</button>";
                }
                // line 87
                echo "</dd>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t</dl>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 94
        echo "
\t\t\t";
        // line 95
        if (($context["S_SHOW_COLOUR_LEGEND"] ?? null)) {
            // line 96
            echo "\t\t\t<div class=\"cp-mini\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<dl class=\"mini\">
\t\t\t\t\t<dt>";
            // line 100
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_COLOURS");
            echo "</dt>
\t\t\t\t\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pm_colour_info", [], "any", false, false, false, 101));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 102
                echo "\t\t\t\t\t\t<dd class=\"pm-legend";
                if (twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "CLASS", [], "any", false, false, false, 102)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "CLASS", [], "any", false, false, false, 102);
                }
                echo "\">";
                if (twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "IMG", [], "any", false, false, false, 102)) {
                    echo twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "IMG", [], "any", false, false, false, 102);
                }
                echo twig_get_attribute($this->env, $this->source, $context["pm_colour_info"], "LANG", [], "any", false, false, false, 102);
                echo "</dd>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t</dl>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 109
        echo "
\t\t</div>

\t\t<div id=\"cp-main\" class=\"ucp-main panel-container\">
\t\t\t<div id=\"cp-main-inner\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 109,  387 => 104,  370 => 102,  366 => 101,  362 => 100,  356 => 96,  354 => 95,  351 => 94,  344 => 89,  337 => 87,  323 => 86,  319 => 85,  316 => 84,  306 => 82,  293 => 81,  289 => 80,  284 => 78,  278 => 74,  276 => 73,  271 => 70,  265 => 69,  262 => 68,  254 => 66,  246 => 64,  243 => 63,  240 => 62,  236 => 61,  232 => 59,  229 => 58,  223 => 57,  218 => 56,  202 => 54,  186 => 52,  183 => 51,  178 => 50,  174 => 49,  171 => 48,  165 => 47,  161 => 45,  153 => 43,  145 => 41,  143 => 40,  140 => 39,  137 => 38,  132 => 37,  130 => 36,  124 => 32,  116 => 30,  114 => 29,  100 => 20,  93 => 15,  78 => 13,  74 => 12,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_header.html", "");
    }
}
