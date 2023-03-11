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

/* viewtopic_body.html */
class __TwigTemplate_25fe0fe8fab6eb78847b30f2e1992fe759476befc748a35fe42c07b27bf89c3b extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">
\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t<li class=\"font-icon responsive-menu dropdown-container";
        // line 7
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
        // line 12
        // line 13
        echo "
\t\t\t\t\t\t\t";
        // line 14
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 15
            echo "\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t";
            // line 16
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 17
                echo "\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-self\"><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-history\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 20
                echo "\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-new\"><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file-text\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                echo " 
\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-unread\"><a href=\"";
                // line 23
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-unanswered\"><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-file-o\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-active\"><a href=\"";
            // line 26
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-fire\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t\t<li class=\"separator site-menu\"></li>

\t\t\t\t\t\t\t";
        // line 30
        $location = "site_menu.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("site_menu.html", "viewtopic_body.html", 30)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 31
        echo "
\t\t\t\t\t\t\t";
        // line 32
        // line 33
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t";
        // line 37
        $location = "breadcrumbs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("breadcrumbs.html", "viewtopic_body.html", 37)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 38
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"";
        // line 42
        if (($context["MODERATORS"] ?? null)) {
            echo "subhead-title-sm";
        } else {
            echo "subhead-title";
        }
        echo "\">
\t\t\t";
        // line 43
        // line 44
        echo "\t\t\t<h2 class=\"topic-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
\t\t\t";
        // line 45
        // line 46
        echo "
\t\t\t";
        // line 47
        if (($context["MODERATORS"] ?? null)) {
            // line 48
            echo "\t\t\t<p id=\"subhead-mods\">
\t\t\t\t";
            // line 49
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["MODERATORS"] ?? null);
            echo "
\t\t\t</p>
\t\t\t";
        }
        // line 52
        echo "\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 60
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 61
            echo "\t\t\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t";
            // line 64
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 65
                echo "\t\t\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t\t\t";
                // line 68
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 70
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 74
        echo "
\t\t<div class=\"action-bar top\">

\t\t\t<div class=\"buttons\">
\t\t\t\t";
        // line 78
        // line 79
        echo "
\t\t\t";
        // line 80
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 81
            echo "\t\t\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button font-icon\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t\t\t";
            // line 82
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo "<i class=\"fa fa-lock\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo "<i class=\"fa fa-reply\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
            }
            // line 83
            echo "\t\t\t\t</a>
\t\t\t";
        }
        // line 85
        echo "
\t\t\t\t";
        // line 86
        // line 87
        echo "\t\t\t</div>

\t\t\t";
        // line 89
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 89)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 90
        echo "
\t\t\t";
        // line 91
        // line 92
        echo "
\t\t\t";
        // line 93
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 94
            echo "\t\t\t\t<div class=\"search-box\" role=\"search\">
\t\t\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 95
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<input class=\"inputbox search\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 97
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t\t\t<button class=\"button\" type=\"submit\" title=\"";
            // line 98
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t";
            // line 99
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
        }
        // line 104
        echo "
\t\t\t";
        // line 105
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 105)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 106
            echo "\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
            // line 107
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t\t\t";
            // line 108
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 108))) {
                // line 109
                echo "\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 109)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 110
                echo "\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 115
        echo "
\t\t\t";
        // line 116
        // line 117
        echo "
\t\t</div>

\t\t";
        // line 120
        // line 121
        echo "
\t\t";
        // line 122
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 123
            echo "\t\t\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" data-refresh=\"true\" class=\"topic_poll\">

\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<div class=\"content\">
\t\t\t\t\t<h2 class=\"poll-title\">";
            // line 129
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t\t\t<p class=\"author\">";
            // line 130
            echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t\t\t<fieldset class=\"polls\">
\t\t\t\t\t";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "poll_option", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 134
                echo "\t\t\t\t\t\t";
                // line 135
                echo "\t\t\t\t\t\t<dl class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 135)) {
                    echo "voted";
                }
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_MOST_VOTES", [], "any", false, false, false, 135)) {
                    echo " most-votes";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 135)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 135);
                echo "\">
\t\t\t\t\t\t\t<dt>";
                // line 136
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 136);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 136);
                    echo "</label>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 136);
                }
                echo "</dt>
\t\t\t\t\t\t\t";
                // line 137
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 137);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 137);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 137)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 137);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 137);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 137)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 138
                echo "\t\t\t\t\t\t<dd class=\"poll_option_percent";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 138) == 0)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VOTES");
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 138);
                }
                echo "</dd>
\t\t\t\t\t\t\t<dd class=\"resultbar";
                // line 139
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 139) < 20)) {
                    echo "pollbar1";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 139) < 40)) {
                    echo "pollbar2";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 139) < 60)) {
                    echo "pollbar3";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 139) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT_REL", [], "any", false, false, false, 139);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 139);
                echo "</div></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                // line 141
                // line 142
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "
\t\t\t\t\t\t<dl class=\"poll_total_votes";
            // line 144
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd>";
            // line 146
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_VOTES");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t\t\t</dl>

\t\t\t\t\t";
            // line 149
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 150
                echo "\t\t\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd><input type=\"submit\" name=\"update\" value=\"";
                // line 152
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t";
            }
            // line 155
            echo "
\t\t\t\t\t";
            // line 156
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 157
                echo "\t\t\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd><a href=\"";
                // line 159
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t</fieldset>
\t\t\t\t\t<div class=\"vote-submitted hidden\">";
            // line 163
            echo $this->extensions['phpbb\template\twig\extension']->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t";
            // line 167
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t\t";
            // line 168
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</div>

\t\t\t</form>
\t\t";
        }
        // line 173
        echo "
\t\t";
        // line 174
        // line 175
        echo "
\t\t";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 176));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 177
            echo "\t\t\t";
            // line 178
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 178)) {
                // line 179
                echo "\t\t\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 179);
                    echo "\"";
                }
                echo "></a>
\t\t\t";
            }
            // line 181
            echo "\t\t\t<div id=\"p";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 181);
            echo "\" class=\"post has-profile ";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 181) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 181)) {
                echo " unreadpost";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 181)) {
                echo " reported";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 181)) {
                echo " deleted";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 181) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 181))) {
                echo " online";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 181)) {
                echo " warned";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<dl class=\"postprofile\" id=\"profile";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 184);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 184)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t\t\t<dt class=\"";
            // line 185
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 185) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 185))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 185)) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t\t\t";
            // line 187
            // line 188
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 188)) {
                // line 189
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 189)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 189);
                    echo "\" class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 189);
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 189);
                    echo "</span>";
                }
                // line 190
                echo "\t\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t\t";
            // line 192
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 194
            // line 195
            echo "
\t\t\t\t\t\t";
            // line 196
            if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 196)) {
                echo "<strong>";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 196);
                echo "</strong>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 196);
            }
            // line 197
            echo "
\t\t\t\t\t\t";
            // line 198
            // line 199
            echo "
\t\t\t\t\t</dt>

\t\t\t\t\t";
            // line 202
            // line 203
            echo "
\t\t\t\t\t";
            // line 204
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 204) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 204))) {
                echo "<dd class=\"profile-rank\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 204);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 204) && twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 204))) {
                    echo "<br />";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 204);
                echo "</dd>";
            }
            // line 205
            echo "
\t\t\t\t\t";
            // line 206
            // line 207
            echo "
\t\t\t\t";
            // line 208
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 208) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 208) !== "")) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 208);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 208);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 208) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 209
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 209)) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 209);
                echo "</dd>";
            }
            // line 210
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 210)) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 210);
                echo "</dd>";
            }
            // line 211
            echo "
\t\t\t\t";
            // line 212
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_PROFILE_FIELD1", [], "any", false, false, false, 212)) {
                // line 213
                echo "\t\t\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t<dd><strong>";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_NAME", [], "any", false, false, false, 214);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_VALUE", [], "any", false, false, false, 214);
                echo "</dd>
\t\t\t\t";
            }
            // line 216
            echo "
\t\t\t\t";
            // line 217
            // line 218
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "custom_fields", [], "any", false, false, false, 218));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 219
                echo "\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 219)) {
                    // line 220
                    echo "\t\t\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 220);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 220);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 220);
                    echo "</dd>
\t\t\t\t\t";
                }
                // line 222
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t\t\t";
            // line 224
            echo "
\t\t\t\t";
            // line 225
            // line 226
            echo "\t\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 226)))) {
                // line 227
                echo "\t\t\t\t\t<dd class=\"profile-contact\">
\t\t\t\t\t\t<strong>";
                // line 228
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong>
\t\t\t\t\t\t";
                // line 229
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 229));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 230
                    echo "\t\t\t\t\t\t<a class=\"contact-icon contact-icon-";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 230);
                    echo "\" href=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 230)) {
                        echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 230);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 230);
                    }
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 230);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 230) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 230);
                    // line 231
                    echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "\t\t\t\t\t</dd>
\t\t\t\t";
            }
            // line 235
            echo "\t\t\t\t";
            // line 236
            echo "
\t\t\t\t</dl>

\t\t\t\t<div class=\"postbody\">
\t\t\t\t\t";
            // line 240
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 240)) {
                // line 241
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 241)) {
                    // line 242
                    echo "\t\t\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 242);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DELETED_MESSAGE", [], "any", false, false, false, 243);
                    echo "<br />
\t\t\t\t\t\t\t\t";
                    // line 244
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DISPLAY", [], "any", false, false, false, 244);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 246
$context["postrow"], "S_IGNORE_POST", [], "any", false, false, false, 246)) {
                    // line 247
                    echo "\t\t\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 247);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_IGNORE_POST", [], "any", false, false, false, 248);
                    echo "<br />
\t\t\t\t\t\t\t\t";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DISPLAY", [], "any", false, false, false, 249);
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 252
                echo "\t\t\t\t\t";
            }
            // line 253
            echo "\t\t\t\t\t<div id=\"post_content";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 253);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 253)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t\t\t";
            // line 254
            // line 255
            echo "
\t\t\t\t\t<h3 ";
            // line 256
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_ROW", [], "any", false, false, false, 256)) {
                echo "class=\"first\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 257
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 257)) {
                // line 258
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 258);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_WIDTH", [], "any", false, false, false, 258);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_HEIGHT", [], "any", false, false, false, 258);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 258);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 258);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 260
            echo "\t\t\t\t\t\t<a ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 260)) {
                echo "class=\"first-unread\" ";
            }
            echo "href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 260);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 260);
            echo "</a>
\t\t\t\t\t</h3>

\t\t\t\t";
            // line 263
            $value = (((((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 263) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 263)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 263)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 263)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 263)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 263));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 264
            echo "
\t\t\t\t";
            // line 265
            // line 266
            echo "
\t\t\t\t";
            // line 267
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 268
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_POST_BUTTONS", [], "any", false, false, false, 268)) {
                    // line 269
                    echo "\t\t\t\t\t\t<ul class=\"posts-buttons\">
\t\t\t\t\t\t\t";
                    // line 270
                    // line 271
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 271)) {
                        // line 272
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 273
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 273);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
                        echo "\"><i class=\"fa fa-pencil\"></i><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                        echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 276
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 276)) {
                        // line 277
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 278
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 278);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                        echo "\"><i class=\"fa fa-trash\"></i><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                        echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 281
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 281)) {
                        // line 282
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 283
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 283);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_POST");
                        echo "\"><i class=\"fa fa-flag\"></i><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                        echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 286
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 286)) {
                        // line 287
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 288
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 288);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                        echo "\"><i class=\"fa fa-exclamation\"></i><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_WARN");
                        echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 291
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 291)) {
                        // line 292
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 293
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 293);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                        echo "\"><i class=\"fa fa-question\"></i><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_INFORMATION");
                        echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 296
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 296)) {
                        // line 297
                        echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 298
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 298);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_WITH_QUOTE");
                        echo "\"><i class=\"fa fa-quote-left\"></i><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                        echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    // line 301
                    echo "\t\t\t\t\t\t\t";
                    // line 302
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 304
                echo "\t\t\t\t";
            }
            // line 305
            echo "
\t\t\t\t";
            // line 306
            // line 307
            echo "
\t\t\t\t\t";
            // line 308
            // line 309
            echo "
\t\t\t\t\t<p class=\"author\">";
            // line 310
            if ( !($context["S_IS_BOT"] ?? null)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 310);
                echo "\">";
            }
            echo "<time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE_RFC3339", [], "any", false, false, false, 310);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 310);
            echo "</time>";
            if ( !($context["S_IS_BOT"] ?? null)) {
                echo "</a>";
            }
            echo " </p>

\t\t\t\t\t";
            // line 312
            // line 313
            echo "
\t\t\t\t\t";
            // line 314
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_UNAPPROVED", [], "any", false, false, false, 314)) {
                // line 315
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_CAN_APPROVE", [], "any", false, false, false, 315)) {
                    // line 316
                    echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 316);
                    echo "\">
\t\t\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t\t\t";
                    // line 318
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_ACTION");
                    echo "<br /><br />
\t\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    // line 319
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                    echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                    // line 320
                    echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                    echo "\" name=\"action[approve]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 321);
                    echo "\" />
\t\t\t\t\t\t\t";
                    // line 322
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</form>
\t\t\t\t\t";
                } else {
                    // line 326
                    echo "\t\t\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t\t\t<strong>";
                    // line 327
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_EXPLAIN");
                    echo "</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
                }
                // line 330
                echo "\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 330)) {
                // line 331
                echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 331);
                echo "\">
\t\t\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t\t\t";
                // line 333
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DELETED_ACTION");
                echo "<br /><br />
\t\t\t\t\t\t\t";
                // line 334
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETE_PERMANENT", [], "any", false, false, false, 334)) {
                    // line 335
                    echo "\t\t\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t\t\t";
                }
                // line 337
                echo "\t\t\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 338
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 338);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 339
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</form>
\t\t\t\t\t";
            }
            // line 343
            echo "
\t\t\t\t\t";
            // line 344
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 344)) {
                // line 345
                echo "\t\t\t\t\t<p class=\"post-notice reported\">
\t\t\t\t\t\t<a href=\"";
                // line 346
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MCP_REPORT", [], "any", false, false, false, 346);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPORTED");
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 349
            echo "
\t\t\t\t\t<div class=\"content\">";
            // line 350
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 350);
            echo "</div>

\t\t\t\t\t";
            // line 352
            // line 353
            echo "
\t\t\t\t\t";
            // line 354
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 354)) {
                // line 355
                echo "\t\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t";
                // line 357
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t";
                // line 359
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "attachment", [], "any", false, false, false, 359));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 360
                    echo "\t\t\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 360);
                    echo "</dd>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 362
                echo "\t\t\t\t\t\t</dl>
\t\t\t\t\t";
            }
            // line 364
            echo "
\t\t\t\t\t";
            // line 365
            // line 366
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DISPLAY_NOTICE", [], "any", false, false, false, 366)) {
                echo "<div class=\"rules\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 367
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 367) || twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 367))) {
                // line 368
                echo "\t\t\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t\t\t";
                // line 369
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 369);
                echo "
\t\t\t\t\t\t\t";
                // line 370
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 370)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 370);
                    echo "</em>";
                }
                // line 371
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 372
$context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 372) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 372))) {
                // line 373
                echo "\t\t\t\t\t\t<div class=\"notice\">
\t\t\t\t\t\t\t";
                // line 374
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 374);
                echo "
\t\t\t\t\t\t\t";
                // line 375
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 375)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 375);
                    echo "</em>";
                }
                // line 376
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 378
            echo "
\t\t\t\t\t";
            // line 379
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 379)) {
                echo "<div class=\"notice\"><br /><br />";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 379);
                echo "</div>";
            }
            // line 380
            echo "\t\t\t\t\t";
            // line 381
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 381)) {
                echo "<div id=\"sig";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 381);
                echo "\" class=\"signature\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 381);
                echo "</div>";
            }
            // line 382
            echo "
\t\t\t\t\t";
            // line 383
            // line 384
            echo "\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t";
            // line 389
            // line 390
            echo "\t\t\t\t";
            // line 391
            echo "\t\t\t</div>
\t\t\t";
            // line 392
            // line 393
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo "
\t\t";
        // line 395
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 396
            echo "\t\t\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 396)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 397
            echo "\t\t";
        }
        // line 398
        echo "
\t\t";
        // line 399
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 399)))) {
            // line 400
            echo "\t\t\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset class=\"display-options\" style=\"margin-top: 0; \">
\t\t\t\t";
            // line 402
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 403
                echo "\t\t\t\t<label>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_POSTS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label><label>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label><label>";
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label><input type=\"submit\" name=\"sort\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" class=\"button2\" />
\t\t\t\t";
            }
            // line 405
            echo "\t\t\t</fieldset>
\t\t\t</form>
\t\t";
        }
        // line 408
        echo "
\t\t";
        // line 409
        // line 410
        echo "\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"buttons\">
\t\t\t\t";
        // line 412
        // line 413
        echo "
\t\t\t";
        // line 414
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 415
            echo "\t\t\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button font-icon\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t\t\t";
            // line 416
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo "<i class=\"fa fa-lock\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo "<i class=\"fa fa-reply\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
            }
            // line 417
            echo "\t\t\t\t</a>
\t\t\t";
        }
        // line 419
        echo "
\t\t\t\t";
        // line 420
        // line 421
        echo "\t\t\t</div>

\t\t\t";
        // line 423
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 423)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 424
        echo "
\t\t\t";
        // line 425
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 425))) {
            // line 426
            echo "\t\t\t\t<div class=\"dropdown-container dropdown-container-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t\t\t\t<span title=\"";
            // line 427
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "\" class=\"dropdown-trigger button icon-button modtools-icon dropdown-select\"><i class=\"fa fa-gavel\"></i></span>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t\t";
            // line 431
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 431));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 432
                echo "\t\t\t\t\t\t\t";
                $value = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["quickmod"], "VALUE", [], "any", false, false, false, 432), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 433
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "LINK", [], "any", false, false, false, 433);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "QUICKMOD_AJAX", [], "any", false, false, false, 433)) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "TITLE", [], "any", false, false, false, 433);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 435
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 439
        echo "
\t\t\t";
        // line 440
        // line 441
        echo "
\t\t\t";
        // line 442
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 442)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 443
            echo "\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
            // line 444
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t\t\t";
            // line 445
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 445))) {
                // line 446
                echo "\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 446)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 447
                echo "\t\t\t\t\t";
            } else {
                // line 448
                echo "\t\t\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 450
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 452
        echo "\t\t\t<div class=\"clear\"></div>
\t\t</div>

\t\t";
        // line 455
        // line 456
        echo "
\t\t";
        // line 457
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 457)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 458
        echo "
\t\t";
        // line 459
        // line 460
        echo "
\t\t";
        // line 461
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 462
            echo "\t\t\t<div class=\"stat-block online-list\">
\t\t\t\t<h3><a href=\"";
            // line 463
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t\t\t<p>";
            // line 464
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 467
        echo "
\t</div>
</div>

";
        // line 471
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 471)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1625 => 471,  1619 => 467,  1613 => 464,  1607 => 463,  1604 => 462,  1602 => 461,  1599 => 460,  1598 => 459,  1595 => 458,  1583 => 457,  1580 => 456,  1579 => 455,  1574 => 452,  1570 => 450,  1564 => 448,  1561 => 447,  1548 => 446,  1546 => 445,  1542 => 444,  1539 => 443,  1537 => 442,  1534 => 441,  1533 => 440,  1530 => 439,  1524 => 435,  1509 => 433,  1505 => 432,  1501 => 431,  1494 => 427,  1487 => 426,  1485 => 425,  1482 => 424,  1470 => 423,  1466 => 421,  1465 => 420,  1462 => 419,  1458 => 417,  1450 => 416,  1439 => 415,  1437 => 414,  1434 => 413,  1433 => 412,  1429 => 410,  1428 => 409,  1425 => 408,  1420 => 405,  1405 => 403,  1403 => 402,  1397 => 400,  1395 => 399,  1392 => 398,  1389 => 397,  1376 => 396,  1374 => 395,  1371 => 394,  1365 => 393,  1364 => 392,  1361 => 391,  1359 => 390,  1358 => 389,  1351 => 384,  1350 => 383,  1347 => 382,  1338 => 381,  1336 => 380,  1330 => 379,  1327 => 378,  1323 => 376,  1314 => 375,  1310 => 374,  1307 => 373,  1305 => 372,  1302 => 371,  1293 => 370,  1289 => 369,  1286 => 368,  1283 => 367,  1276 => 366,  1275 => 365,  1272 => 364,  1268 => 362,  1259 => 360,  1255 => 359,  1250 => 357,  1246 => 355,  1244 => 354,  1241 => 353,  1240 => 352,  1235 => 350,  1232 => 349,  1224 => 346,  1221 => 345,  1219 => 344,  1216 => 343,  1209 => 339,  1205 => 338,  1200 => 337,  1194 => 335,  1192 => 334,  1188 => 333,  1182 => 331,  1179 => 330,  1173 => 327,  1170 => 326,  1163 => 322,  1159 => 321,  1155 => 320,  1151 => 319,  1147 => 318,  1141 => 316,  1138 => 315,  1136 => 314,  1133 => 313,  1132 => 312,  1115 => 310,  1112 => 309,  1111 => 308,  1108 => 307,  1107 => 306,  1104 => 305,  1101 => 304,  1097 => 302,  1095 => 301,  1085 => 298,  1082 => 297,  1079 => 296,  1069 => 293,  1066 => 292,  1063 => 291,  1053 => 288,  1050 => 287,  1047 => 286,  1037 => 283,  1034 => 282,  1031 => 281,  1021 => 278,  1018 => 277,  1015 => 276,  1005 => 273,  1002 => 272,  999 => 271,  998 => 270,  995 => 269,  992 => 268,  990 => 267,  987 => 266,  986 => 265,  983 => 264,  980 => 263,  967 => 260,  952 => 258,  950 => 257,  944 => 256,  941 => 255,  940 => 254,  931 => 253,  928 => 252,  922 => 249,  918 => 248,  913 => 247,  911 => 246,  906 => 244,  902 => 243,  897 => 242,  894 => 241,  892 => 240,  886 => 236,  884 => 235,  880 => 233,  873 => 231,  856 => 230,  852 => 229,  847 => 228,  844 => 227,  841 => 226,  840 => 225,  837 => 224,  835 => 223,  829 => 222,  818 => 220,  815 => 219,  810 => 218,  809 => 217,  806 => 216,  798 => 214,  795 => 213,  793 => 212,  790 => 211,  780 => 210,  770 => 209,  753 => 208,  750 => 207,  749 => 206,  746 => 205,  736 => 204,  733 => 203,  732 => 202,  727 => 199,  726 => 198,  723 => 197,  715 => 196,  712 => 195,  711 => 194,  707 => 192,  705 => 191,  702 => 190,  689 => 189,  686 => 188,  685 => 187,  670 => 185,  662 => 184,  634 => 181,  624 => 179,  621 => 178,  619 => 177,  615 => 176,  612 => 175,  611 => 174,  608 => 173,  600 => 168,  596 => 167,  589 => 163,  586 => 162,  578 => 159,  574 => 157,  572 => 156,  569 => 155,  563 => 152,  559 => 150,  557 => 149,  548 => 146,  541 => 144,  538 => 143,  532 => 142,  531 => 141,  508 => 139,  495 => 138,  469 => 137,  457 => 136,  437 => 135,  435 => 134,  431 => 133,  417 => 130,  413 => 129,  403 => 123,  401 => 122,  398 => 121,  397 => 120,  392 => 117,  391 => 116,  388 => 115,  384 => 113,  378 => 111,  375 => 110,  362 => 109,  360 => 108,  349 => 107,  346 => 106,  344 => 105,  341 => 104,  333 => 99,  329 => 98,  325 => 97,  320 => 95,  317 => 94,  315 => 93,  312 => 92,  311 => 91,  308 => 90,  296 => 89,  292 => 87,  291 => 86,  288 => 85,  284 => 83,  276 => 82,  265 => 81,  263 => 80,  260 => 79,  259 => 78,  253 => 74,  247 => 70,  242 => 68,  237 => 67,  229 => 65,  227 => 64,  218 => 61,  216 => 60,  206 => 52,  193 => 49,  190 => 48,  188 => 47,  185 => 46,  184 => 45,  175 => 44,  174 => 43,  166 => 42,  160 => 38,  148 => 37,  142 => 33,  141 => 32,  138 => 31,  126 => 30,  122 => 28,  115 => 26,  108 => 25,  101 => 23,  96 => 22,  88 => 20,  85 => 19,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  67 => 13,  66 => 12,  56 => 7,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
