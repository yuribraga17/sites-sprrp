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

/* search_results.html */
class __TwigTemplate_7a2467aa686d3d12a1375165e40ab47185b3fab57ba8adc55f4ec39595193a10 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">

\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t";
        // line 10
        $location = "breadcrumbs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("breadcrumbs.html", "search_results.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"";
        // line 15
        if (((($context["SEARCHED_QUERY"] ?? null) || ($context["IGNORED_WORDS"] ?? null)) || ($context["PHRASE_SEARCH_DISABLED"] ?? null))) {
            echo "subhead-title-sm";
        } else {
            echo "subhead-title";
        }
        echo "\">
\t\t\t<h2 class=\"searchresults-title\">";
        // line 16
        if (($context["SEARCH_TITLE"] ?? null)) {
            echo ($context["SEARCH_TITLE"] ?? null);
        } else {
            echo ($context["SEARCH_MATCHES"] ?? null);
        }
        if (($context["SEARCH_WORDS"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <a href=\"";
            echo ($context["U_SEARCH_WORDS"] ?? null);
            echo "\">";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "</a>";
        }
        echo "</h2>
\t\t\t
\t\t\t";
        // line 18
        if (((($context["SEARCHED_QUERY"] ?? null) || ($context["IGNORED_WORDS"] ?? null)) || ($context["PHRASE_SEARCH_DISABLED"] ?? null))) {
            // line 19
            echo "\t\t\t<p id=\"subhead-more\">
";
            // line 20
            if (($context["SEARCHED_QUERY"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCHED_QUERY");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                echo ($context["SEARCHED_QUERY"] ?? null);
                echo "</strong>";
            }
            // line 21
            if (($context["IGNORED_WORDS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("IGNORED_TERMS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                echo ($context["IGNORED_WORDS"] ?? null);
                echo "</strong>";
            }
            // line 22
            if (($context["PHRASE_SEARCH_DISABLED"] ?? null)) {
                echo "<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PHRASE_SEARCH_DISABLED");
                echo "</strong>";
            }
            // line 23
            echo "\t\t\t</p>
\t\t\t";
        }
        // line 25
        echo "\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 33
        if (($context["SEARCH_TOPIC"] ?? null)) {
            // line 34
            echo "\t\t\t<p class=\"jumpbox-return\"><a class=\"arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " left-box\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</a></p>
\t\t";
        } else {
            // line 36
            echo "\t\t\t<p class=\"jumpbox-return\"><a class=\"arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " left-box\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
\t\t";
        }
        // line 38
        echo "
\t\t";
        // line 39
        // line 40
        echo "
\t\t";
        // line 41
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 41)) || ($context["SEARCH_MATCHES"] ?? null)) || ($context["TOTAL_MATCHES"] ?? null)) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 42
            echo "\t\t\t<div class=\"action-bar top\">
\t\t\t\t
\t\t\t";
            // line 44
            if ((($context["TOTAL_MATCHES"] ?? null) > 0)) {
                // line 45
                echo "\t\t\t\t<div class=\"search-box\" role=\"search\">
\t\t\t\t\t<form method=\"post\" id=\"topic-search\" action=\"";
                // line 46
                echo ($context["S_SEARCH_ACTION"] ?? null);
                echo "\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<input class=\"inputbox search\"  type=\"search\" name=\"add_keywords\" id=\"add_keywords\" size=\"20\" placeholder=\"";
                // line 48
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t\t\t<button class=\"button\" type=\"submit\" title=\"";
                // line 49
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
            }
            // line 54
            echo "
\t\t\t\t";
            // line 55
            // line 56
            echo "
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
            // line 58
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\" accesskey=\"m\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL_READ");
                echo "</a>";
            }
            // line 59
            echo "\t\t\t\t\t";
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t\t\t\t";
            // line 60
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 60))) {
                // line 61
                echo "\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 61)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 62
                echo "\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 68
        echo "
\t\t";
        // line 69
        if (($context["S_SHOW_TOPICS"] ?? null)) {
            // line 70
            echo "
\t\t\t";
            // line 71
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 71))) {
                // line 72
                echo "\t\t\t<div class=\"forumbg\">

\t\t\t\t<div class=\"inner\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 78
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t\t\t<dd class=\"posts\">";
                // line 79
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t\t\t<dd class=\"views\">";
                // line 80
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 81
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist topics\">

\t\t\t\t";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 88
                    echo "\t\t\t\t\t";
                    // line 89
                    echo "\t\t\t\t\t<li class=\"row";
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_ROW_COUNT", [], "any", false, false, false, 89) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t\t\t<dl class=\"icon ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 90);
                    echo "\">
\t\t\t\t\t\t\t<dt ";
                    // line 91
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 91)) {
                        echo "style=\"background-image: url(";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 91);
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 91);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_UNREAD_TOPIC", [], "any", false, false, false, 92) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_NEWEST_POST", [], "any", false, false, false, 92);
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t\t\t";
                    // line 95
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 96) || twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 96))) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 96);
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-gavel\"></i></a>";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_DELETED", [], "any", false, false, false, 96)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 96);
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-recycle\"></i></a>";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_REPORTED", [], "any", false, false, false, 96)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_REPORT", [], "any", false, false, false, 96);
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-exclamation-triangle\"></i></a>";
                    }
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 96);
                    echo "\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 96);
                    echo "</a><br />
\t\t\t\t\t\t\t\t\t";
                    // line 97
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 98))) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
                        // line 101
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 101));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 101)) {
                            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 101)) {
                                echo "<li class=\"active\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 101);
                                echo "</span></li>";
                            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 101)) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                                echo "</span></li>";
                            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 101)) {
                            } else {
                                echo "<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 101);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 101);
                                echo "</a></li>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_HAS_POLL", [], "any", false, false, false, 105)) {
                        echo "<span class=\"topic-ap\"><i class=\"fa fa-tasks\"></i></span>";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "ATTACH_ICON_IMG", [], "any", false, false, false, 106)) {
                        echo "<span class=\"topic-ap\"><i class=\"fa fa-floppy-o\"></i></span>";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 108
                    echo " \t\t\t\t\t\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 108);
                    echo " &raquo; <time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 108);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME", [], "any", false, false, false, 108);
                    echo "</time> &raquo; ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 108);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 108);
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                    // line 109
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 111
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t<dd class=\"posts\">";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 114);
                    echo "</dd>
\t\t\t\t\t\t\t<dd class=\"views\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 115);
                    echo "</dd>
\t\t\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t\t\t";
                    // line 117
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 117);
                    // line 118
                    echo "\t\t\t\t\t\t\t\t";
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_LAST_POST", [], "any", false, false, false, 118);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\" class=\"lastpost-last\"><i class=\"fa fa-arrow-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo "\"></i></a> ";
                    }
                    echo "<br /><time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 118);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME", [], "any", false, false, false, 118);
                    echo "</time><br /> </span>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    // line 122
                    // line 123
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            } else {
                // line 129
                echo "\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
                // line 131
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 135
            echo "
\t\t";
        } else {
            // line 137
            echo "
\t\t\t";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 138));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 139
                echo "\t\t\t\t";
                // line 140
                echo "\t\t\t\t<div class=\"search post ";
                if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_ROW_COUNT", [], "any", false, false, false, 140) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POST_REPORTED", [], "any", false, false, false, 140)) {
                    echo " reported";
                }
                echo "\">
\t\t\t\t\t<div class=\"inner\">

\t\t\t";
                // line 143
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 143)) {
                    // line 144
                    echo "\t\t\t\t<div class=\"postbody\">
\t\t\t\t\t";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "L_IGNORE_POST", [], "any", false, false, false, 145);
                    echo "
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 148
                    echo "\t\t\t\t<dl class=\"postprofile\">
\t\t\t\t\t";
                    // line 149
                    // line 150
                    echo "\t\t\t\t\t<dt class=\"author\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_AUTHOR_FULL", [], "any", false, false, false, 150);
                    echo "</dt>
\t\t\t\t\t<dd class=\"search-result-date\">";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_DATE", [], "any", false, false, false, 151);
                    echo "</dd>
\t\t\t\t\t<dd>";
                    // line 152
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 152);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 152);
                    echo "</a></dd>
\t\t\t\t\t<dd>";
                    // line 153
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 153);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 153);
                    echo "</a></dd>
\t\t\t\t\t";
                    // line 154
                    // line 155
                    echo "\t\t\t\t\t<dd>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 155);
                    echo "</strong></dd>
\t\t\t\t\t<dd>";
                    // line 156
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 156);
                    echo "</strong></dd>
\t\t\t\t\t";
                    // line 157
                    // line 158
                    echo "\t\t\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 158)) {
                        // line 159
                        echo "\t\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t\t\t<dd><a href=\"";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 160);
                        echo "\" class=\"arrow-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_POST");
                        echo "</a></dd>
\t\t\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t\t</dl>

\t\t\t\t<div class=\"postbody\">
\t\t\t\t\t<h3><a href=\"";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 165);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_SUBJECT", [], "any", false, false, false, 165);
                    echo "</a></h3>
\t\t\t\t\t<div class=\"content\">";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "MESSAGE", [], "any", false, false, false, 166);
                    echo "</div>
\t\t\t\t\t";
                    // line 167
                    // line 168
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 170
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                // line 173
                // line 174
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 175
                echo "\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
                // line 177
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "\t\t";
        }
        // line 182
        echo "
\t\t";
        // line 183
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 183)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 183))) || ($context["S_SELECT_SORT_KEY"] ?? null)) || ($context["S_SELECT_SORT_DAYS"] ?? null))) {
            // line 184
            echo "\t\t\t<form method=\"post\" action=\"";
            echo ($context["S_SEARCH_ACTION"] ?? null);
            echo "\">

\t\t\t<fieldset class=\"display-options\">
\t\t\t\t";
            // line 187
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null))) {
                // line 188
                echo "\t\t\t\t\t<label>";
                if (($context["S_SHOW_TOPICS"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_POSTS");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                if (($context["S_SELECT_SORT_KEY"] ?? null)) {
                    echo "</label> <label>";
                    echo ($context["S_SELECT_SORT_KEY"] ?? null);
                    echo "</label>
\t\t\t\t\t<label>";
                    // line 189
                    echo ($context["S_SELECT_SORT_DIR"] ?? null);
                }
                echo "</label>
\t\t\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 190
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" class=\"button2\" />
\t\t\t\t";
            }
            // line 192
            echo "\t\t\t</fieldset>

\t\t\t</form>
\t\t";
        }
        // line 196
        echo "
\t\t";
        // line 197
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 197)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 197))) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 198
            echo "\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 200
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t\t\t";
            // line 201
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 201))) {
                // line 202
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 202)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 203
                echo "\t\t\t\t";
            } else {
                // line 204
                echo "\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 206
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 209
        echo "
\t\t";
        // line 210
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 210)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 211
        echo "
\t</div>
</div>

";
        // line 215
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 215)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  750 => 215,  744 => 211,  732 => 210,  729 => 209,  724 => 206,  718 => 204,  715 => 203,  702 => 202,  700 => 201,  696 => 200,  692 => 198,  690 => 197,  687 => 196,  681 => 192,  676 => 190,  671 => 189,  656 => 188,  654 => 187,  647 => 184,  645 => 183,  642 => 182,  639 => 181,  629 => 177,  625 => 175,  620 => 174,  619 => 173,  614 => 170,  610 => 168,  609 => 167,  605 => 166,  599 => 165,  594 => 162,  585 => 160,  582 => 159,  579 => 158,  578 => 157,  571 => 156,  563 => 155,  562 => 154,  553 => 153,  544 => 152,  540 => 151,  533 => 150,  532 => 149,  529 => 148,  523 => 145,  520 => 144,  518 => 143,  504 => 140,  502 => 139,  497 => 138,  494 => 137,  490 => 135,  483 => 131,  479 => 129,  472 => 124,  466 => 123,  465 => 122,  445 => 118,  441 => 117,  436 => 115,  432 => 114,  427 => 111,  425 => 110,  424 => 109,  407 => 108,  405 => 107,  400 => 106,  395 => 105,  390 => 102,  365 => 101,  361 => 99,  358 => 98,  357 => 97,  334 => 96,  333 => 95,  329 => 93,  323 => 92,  312 => 91,  308 => 90,  299 => 89,  297 => 88,  293 => 87,  284 => 81,  280 => 80,  276 => 79,  272 => 78,  264 => 72,  262 => 71,  259 => 70,  257 => 69,  254 => 68,  249 => 65,  243 => 63,  240 => 62,  227 => 61,  225 => 60,  220 => 59,  212 => 58,  208 => 56,  207 => 55,  204 => 54,  196 => 49,  192 => 48,  187 => 46,  184 => 45,  182 => 44,  178 => 42,  176 => 41,  173 => 40,  172 => 39,  169 => 38,  157 => 36,  147 => 34,  145 => 33,  135 => 25,  131 => 23,  125 => 22,  117 => 21,  109 => 20,  106 => 19,  104 => 18,  87 => 16,  79 => 15,  73 => 11,  61 => 10,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search_results.html", "");
    }
}
