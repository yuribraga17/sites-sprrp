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

/* ucp_main_subscribed.html */
class __TwigTemplate_80842df7f935f70da7bd64feae0900ab62f9c2f855fcebe3a1319d52d7369ff2 extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_main_subscribed.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<h2>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 9
        echo $this->extensions['phpbb\template\twig\extension']->lang("WATCHED_EXPLAIN");
        echo "</p>

";
        // line 11
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 11))) {
            // line 12
            echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"icon\">
\t\t\t\t<dt><div class=\"list-inner\">";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("WATCHED_FORUMS");
            echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
            // line 17
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
            echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
                // line 24
                echo "\t\t<li class=\"row";
                if ((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_ROW_COUNT", [], "any", false, false, false, 24) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMG_STYLE", [], "any", false, false, false, 25);
                echo "\">
\t\t\t\t<dt>
\t\t\t\t\t";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 27)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 27);
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 28
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 29);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 29);
                echo "</a><br />
\t\t\t\t\t\t";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 30);
                echo "
\t\t\t\t\t\t";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 33
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                    echo " ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 33);
                    echo " &laquo; <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["topicrow"] ?? null), "U_LAST_POST", [], "any", false, false, false, 33);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 33);
                    echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\">";
                // line 38
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 38)) {
                    echo "<span><dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                    echo " </dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 38);
                    echo "
\t\t\t\t\t<a href=\"";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 39);
                    echo "\">";
                    echo ($context["LAST_POST_IMG"] ?? null);
                    echo "</a> <br />";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 39);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 40
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                    echo "<br />&nbsp;";
                }
                // line 41
                echo "\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"f[";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 42);
                echo "]\" id=\"f";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 42);
                echo "\" /></dd>
\t\t\t</dl>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t</ul>
";
        } elseif (        // line 47
($context["S_FORUM_NOTIFY"] ?? null)) {
            // line 48
            echo "    <ul class=\"topiclist\">
        <li class=\"header\">
            <dl class=\"icon\">
                <dt>";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("WATCHED_FORUMS");
            echo "</dt>
            </dl>
        </li>
    </ul>
\t<p><strong>";
            // line 55
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_WATCHED_FORUMS");
            echo "</strong></p>
";
        }
        // line 57
        echo "    <br />

";
        // line 59
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 59))) {
            // line 60
            echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"icon\">
\t\t\t\t<dt><div class=\"list-inner\">";
            // line 63
            echo $this->extensions['phpbb\template\twig\extension']->lang("WATCHED_TOPICS");
            echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
            echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 72
                echo "\t\t<li class=\"row";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 72)) {
                    echo " reported";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_ROW_COUNT", [], "any", false, false, false, 72) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 73);
                echo "\">
\t\t\t\t<dt";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 74)) {
                    echo " style=\"background-image: url(";
                    echo ($context["T_ICONS_PATH"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 74);
                    echo "); background-repeat: no-repeat;\"";
                }
                echo " title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 74);
                echo "\">
\t\t\t\t\t";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 75)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 75);
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 76
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 77)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 77);
                    echo "\">";
                    echo ($context["NEWEST_POST_IMG"] ?? null);
                    echo "</a> ";
                }
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 77);
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 77);
                echo "</a>
\t\t\t\t\t\t";
                // line 78
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 78) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 78))) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 78);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "UNAPPROVED_IMG", [], "any", false, false, false, 78);
                    echo "</a> ";
                }
                // line 79
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 79)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_REPORT", [], "any", false, false, false, 79);
                    echo "\">";
                    echo ($context["REPORTED_IMG"] ?? null);
                    echo "</a>";
                }
                echo "<br />
\t\t\t\t\t\t";
                // line 80
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 80))) {
                    // line 81
                    echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 84)) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 85)) {
                            echo "<li class=\"active\"><span>";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 85);
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 86
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 86)) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 87
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 87)) {
                            // line 88
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 88);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 88);
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                // line 95
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 95)) {
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 95);
                    echo " ";
                }
                // line 96
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 96);
                echo " &raquo; ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 96);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 99)) {
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 99);
                    echo " ";
                }
                // line 100
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 100);
                echo " &laquo; <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 100);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 100);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 104
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " </dfn>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 104);
                echo "
\t\t\t\t\t<a href=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 105);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\">";
                echo ($context["LAST_POST_IMG"] ?? null);
                echo "</a> <br />";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 105);
                echo "</span>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ID", [], "any", false, false, false, 107);
                echo "]\" id=\"t";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ID", [], "any", false, false, false, 107);
                echo "\" /></dd>
\t\t\t</dl>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "\t</ul>

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 115
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 116
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 116))) {
                echo " 
\t\t\t\t";
                // line 117
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_main_subscribed.html", 117)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 118
                echo "\t\t\t";
            } else {
                echo " 
\t\t\t\t &bull; ";
                // line 119
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 121
            echo "\t\t</div>
\t</div>

";
        } elseif (        // line 124
($context["S_TOPIC_NOTIFY"] ?? null)) {
            // line 125
            echo "    <ul class=\"topiclist\">
        <li class=\"header\">
            <dl class=\"icon\">
                <dt>";
            // line 128
            echo $this->extensions['phpbb\template\twig\extension']->lang("WATCHED_TOPICS");
            echo "</dt>
            </dl>
        </li>
    </ul>
\t<p><strong>";
            // line 132
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_WATCHED_TOPICS");
            echo "</strong></p>
";
        }
        // line 134
        echo "
\t</div>
</div>

";
        // line 138
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 138)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 138)))) {
            // line 139
            echo "\t<fieldset class=\"display-actions\">
\t\t<input type=\"submit\" name=\"unwatch\" value=\"";
            // line 140
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNWATCH_MARKED");
            echo "\" class=\"button2\" />
\t\t<br />
\t\t<div class=\"marking\">
\t\t\t<a class=\"ma-ma\" href=\"#\" onclick=\"marklist('ucp', 't', true); marklist('ucp', 'f', true); return false;\">
\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t";
            // line 145
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "
\t\t\t</a>
\t\t\t<a class=\"ma-un\" href=\"#\" onclick=\"marklist('ucp', 't', false); marklist('ucp', 'f', false); return false;\">
\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t";
            // line 149
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "
\t\t\t</a>
\t\t</div>
\t\t";
            // line 152
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
";
        }
        // line 155
        echo "</form>

";
        // line 157
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_subscribed.html", 157)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_subscribed.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 157,  535 => 155,  529 => 152,  523 => 149,  516 => 145,  508 => 140,  505 => 139,  503 => 138,  497 => 134,  492 => 132,  485 => 128,  480 => 125,  478 => 124,  473 => 121,  468 => 119,  463 => 118,  451 => 117,  447 => 116,  443 => 115,  437 => 111,  425 => 107,  414 => 105,  406 => 104,  388 => 100,  383 => 99,  372 => 96,  367 => 95,  364 => 94,  359 => 91,  353 => 90,  343 => 88,  341 => 87,  335 => 86,  328 => 85,  325 => 84,  321 => 83,  317 => 81,  315 => 80,  304 => 79,  296 => 78,  282 => 77,  279 => 76,  273 => 75,  262 => 74,  258 => 73,  247 => 72,  243 => 71,  234 => 65,  230 => 64,  226 => 63,  221 => 60,  219 => 59,  215 => 57,  210 => 55,  203 => 51,  198 => 48,  196 => 47,  193 => 46,  181 => 42,  178 => 41,  174 => 40,  165 => 39,  155 => 38,  151 => 36,  137 => 33,  134 => 32,  132 => 31,  128 => 30,  122 => 29,  119 => 28,  113 => 27,  108 => 25,  99 => 24,  95 => 23,  86 => 17,  82 => 16,  78 => 15,  73 => 12,  71 => 11,  66 => 9,  59 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_main_subscribed.html", "");
    }
}
