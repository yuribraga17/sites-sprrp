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

/* viewforum_body.html */
class __TwigTemplate_c998893679ea291c66cc705a17611b211fcb8ea0493bb6eef17cd161c08bed37 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
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
        $this->loadTemplate("site_menu.html", "viewforum_body.html", 30)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "viewforum_body.html", 37)->display($context);
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
        // line 44
        // line 45
        echo "
\t\t\t<h2 class=\"forum-title\">";
        // line 46
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>

\t\t\t";
        // line 48
        // line 49
        echo "
\t\t\t";
        // line 50
        if (($context["MODERATORS"] ?? null)) {
            // line 51
            echo "\t\t\t<p id=\"subhead-mods\">
\t\t\t\t";
            // line 52
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
        // line 55
        echo "\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 63
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 64
            echo "\t\t\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t";
            // line 67
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 68
                echo "\t\t\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t\t\t";
                // line 71
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 73
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 77
        echo "
\t\t";
        // line 78
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 79
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 80
                echo "\t\t\t<div class=\"action-bar compact\">
\t\t\t\t<a href=\"";
                // line 81
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"mark-read rightside\" data-ajax=\"mark_forums_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t\t\t</div>
\t\t";
            }
            // line 84
            echo "\t\t\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 84)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 85
            echo "\t\t";
        }
        // line 86
        echo "
\t\t";
        // line 87
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 87))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 88
            echo "\t\t\t<div class=\"action-bar top\">

\t\t\t";
            // line 90
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 91
                echo "\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t";
                // line 92
                // line 93
                echo "
\t\t\t\t\t<a href=\"";
                // line 94
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button font-icon\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t\t\t";
                // line 95
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo "<i class=\"fa fa-lock\"></i>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo "<i class=\"fa fa-pencil\"></i>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_NEW_TOPIC");
                }
                // line 96
                echo "\t\t\t\t\t</a>

\t\t\t\t\t";
                // line 98
                // line 99
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 101
            echo "
\t\t\t";
            // line 102
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 103
                echo "\t\t\t\t<div class=\"search-box\" role=\"search\">
\t\t\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 104
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<input class=\"inputbox search\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 106
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t\t\t<button class=\"button\" type=\"submit\" title=\"";
                // line 107
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t";
                // line 108
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t\t\t</fieldset>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
            }
            // line 113
            echo "
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 115
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 115)))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 116
            echo "\t\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t\t";
            // line 117
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 117))) {
                // line 118
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 118)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 119
                echo "\t\t\t\t";
            } else {
                // line 120
                echo "\t\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 122
            echo "\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        // line 126
        echo "
\t\t";
        // line 127
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 128
            echo "
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 131
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            // line 135
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 136
                echo "
\t\t\t\t<form action=\"";
                // line 137
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t\t\t<div class=\"panel\">
\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h3><a href=\"";
                // line 143
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><label for=\"username\">";
                // line 147
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 148
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><label for=\"password\">";
                // line 151
                echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t\t\t";
                // line 153
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 154
                echo "\t\t\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 158
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                // line 160
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t\t\t";
                // line 161
                echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
                echo "
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t</form>

\t\t\t";
            }
            // line 171
            echo "
\t\t";
        }
        // line 173
        echo "
\t\t";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 174));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 175
            echo "
\t\t\t";
            // line 176
            if (( !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 176) &&  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 176))) {
                // line 177
                echo "\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 181
            echo "
\t\t\t";
            // line 182
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 182) ||  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 182))) {
                // line 183
                echo "\t\t\t\t<div class=\"forumbg";
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 183) && (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 183) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 183)))) {
                    echo " announcement";
                }
                echo "\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t\t<dt";
                // line 188
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_TOPICS");
                } elseif ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 188) && (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 188) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 188)))) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t\t\t<dd class=\"posts\">";
                // line 189
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t\t\t<dd class=\"views\">";
                // line 190
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 191
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist topics\">
\t\t\t";
            }
            // line 197
            echo "\t\t\t\t";
            // line 198
            echo "
\t\t\t\t<li class=\"row";
            // line 199
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_ROW_COUNT", [], "any", false, false, false, 199) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 199)) {
                echo " global-announce";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 199)) {
                echo " announce";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_STICKY", [], "any", false, false, false, 199)) {
                echo " sticky";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 199)) {
                echo " reported";
            }
            echo "\">
\t\t\t\t\t";
            // line 200
            // line 201
            echo "\t\t\t\t\t<dl class=\"icon ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 201);
            echo "\">
\t\t\t\t\t\t<dt";
            // line 202
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 202) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url('";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 202);
                echo "'); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 202);
            echo "\">
\t\t\t\t\t\t\t";
            // line 203
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 203) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 203);
                echo "\" class=\"icon-link\"></a>";
            }
            // line 204
            echo "\t\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t\t";
            // line 205
            // line 206
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 206) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 206))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 206);
                echo "\" class=\"posts-approve\" title=\"";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 206)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED");
                }
                echo "\"><i class=\"fa fa-gavel\"></i></a>";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_DELETED", [], "any", false, false, false, 206)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 206);
                echo "\" class=\"posts-approve\"><i class=\"fa fa-recycle\"></i></a>";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 206)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_REPORT", [], "any", false, false, false, 206);
                echo "\" class=\"posts-approve\"><i class=\"fa fa-exclamation-triangle\"></i></a>";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 206)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 206);
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 206);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 206);
            }
            echo "<br />

\t\t\t\t\t\t\t\t";
            // line 208
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_HAS_POLL", [], "any", false, false, false, 208)) {
                echo "<span class=\"topic-ap\"><i class=\"fa fa-tasks\"></i></span>";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 208)) {
                echo "<span class=\"topic-ap\"><i class=\"fa fa-floppy-o\"></i></span>";
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 208);
            echo " &raquo; <time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 208);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 208);
            echo "</time>";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 208) && (($context["FORUM_ID"] ?? null) != twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_ID", [], "any", false, false, false, 208)))) {
                echo " &raquo; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_FORUM", [], "any", false, false, false, 208);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_NAME", [], "any", false, false, false, 208);
                echo "</a>";
            }
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 208))) {
                echo "<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 210));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 210)) {
                    } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 210)) {
                        echo "<li class=\"active\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 210);
                        echo "</span></li>";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 210)) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                        echo "</span></li>";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 210)) {
                    } else {
                        echo "<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 210);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 210);
                        echo "</a></li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 214
            echo "
\t\t\t\t\t\t\t\t";
            // line 215
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 216
                echo "\t\t\t\t\t\t\t\t<div class=\"r-lastpost-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 217);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\" class=\"r-lastpost\"><i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 219
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 219)) {
                    echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 219);
                    echo "</strong></span>";
                }
                // line 220
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 221
            echo "
\t\t\t\t\t\t\t\t";
            // line 222
            // line 223
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</dt>
\t\t\t\t\t\t<dd class=\"posts\">";
            // line 225
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 225);
            echo " <dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t\t\t<dd class=\"views\">";
            // line 226
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "VIEWS", [], "any", false, false, false, 226);
            echo " <dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
            // line 227
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
            echo " </dfn>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 227);
            // line 228
            echo "\t\t\t\t\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 228))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 228);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\" class=\"lastpost-last\"><i class=\"fa fa-arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\"></i></a> ";
            }
            echo "<br /><time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 228);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 228);
            echo "</time></span>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
            // line 231
            // line 232
            echo "\t\t\t\t</li>
\t\t\t\t";
            // line 233
            // line 234
            echo "
\t\t\t";
            // line 235
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_LAST_ROW", [], "any", false, false, false, 235)) {
                // line 236
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 240
            echo "
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 242
            echo "\t\t\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 243
                echo "\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
                // line 245
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPICS");
                echo "</strong>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            } elseif ( !            // line 248
($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 249
                echo "\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<strong>";
                // line 251
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS_IN_CATEGORY");
                echo "</strong>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 255
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "
\t\t";
        // line 257
        if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 258
            echo "\t\t\t<form method=\"post\" action=\"";
            echo ($context["S_FORUM_ACTION"] ?? null);
            echo "\">
\t\t\t\t<fieldset class=\"display-options\">
\t\t\t";
            // line 260
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 261
                echo "\t\t\t\t\t<label>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_TOPICS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label>
\t\t\t\t\t<label>";
                // line 262
                echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label>
\t\t\t\t\t<label>";
                // line 263
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 264
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" class=\"button2\" />
\t\t\t";
            }
            // line 266
            echo "\t\t\t\t</fieldset>
\t\t\t</form>
\t\t";
        }
        // line 269
        echo "
\t\t";
        // line 270
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 270)) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 271
            echo "\t\t\t<div class=\"action-bar bottom\">
\t\t\t\t";
            // line 272
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 273
                echo "\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t";
                // line 274
                // line 275
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 276
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button font-icon\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 277
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo "<i class=\"fa fa-lock\"></i>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo "<i class=\"fa fa-pencil\"></i>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_NEW_TOPIC");
                }
                // line 278
                echo "\t\t\t\t\t\t</a>

\t\t\t\t\t\t";
                // line 280
                // line 281
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 283
            echo "
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
            // line 285
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 285)))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" data-ajax=\"mark_topics_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 286
            echo "\t\t\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t\t\t";
            // line 287
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 287))) {
                // line 288
                echo "\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 288)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 289
                echo "\t\t\t\t\t";
            } else {
                // line 290
                echo "\t\t\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 292
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 295
        echo "
\t\t";
        // line 296
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 296)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 297
        echo "
\t\t";
        // line 298
        // line 299
        echo "
\t\t";
        // line 300
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 301
            echo "\t\t\t<div class=\"stat-block online-list\">
\t\t\t\t<h3><a href=\"";
            // line 302
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t\t\t<p>";
            // line 303
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 306
        echo "
\t\t";
        // line 307
        if ((($context["S_IS_POSTABLE"] ?? null) && twig_length_filter($this->env, ($context["rules"] ?? null)))) {
            // line 308
            echo "\t\t\t<div class=\"stat-block permissions\">
\t\t\t\t<h3>";
            // line 309
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t\t\t<p>";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rules", [], "any", false, false, false, 310));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo twig_get_attribute($this->env, $this->source, $context["rules"], "RULE", [], "any", false, false, false, 310);
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 313
        echo "
\t</div>
</div>

";
        // line 317
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 317)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1057 => 317,  1051 => 313,  1037 => 310,  1033 => 309,  1030 => 308,  1028 => 307,  1025 => 306,  1019 => 303,  1013 => 302,  1010 => 301,  1008 => 300,  1005 => 299,  1004 => 298,  1001 => 297,  989 => 296,  986 => 295,  981 => 292,  975 => 290,  972 => 289,  959 => 288,  957 => 287,  952 => 286,  944 => 285,  940 => 283,  936 => 281,  935 => 280,  931 => 278,  923 => 277,  913 => 276,  910 => 275,  909 => 274,  906 => 273,  904 => 272,  901 => 271,  899 => 270,  896 => 269,  891 => 266,  886 => 264,  882 => 263,  876 => 262,  868 => 261,  866 => 260,  860 => 258,  858 => 257,  855 => 256,  849 => 255,  842 => 251,  838 => 249,  836 => 248,  830 => 245,  826 => 243,  823 => 242,  817 => 240,  811 => 236,  809 => 235,  806 => 234,  805 => 233,  802 => 232,  801 => 231,  782 => 228,  776 => 227,  770 => 226,  764 => 225,  760 => 223,  759 => 222,  756 => 221,  753 => 220,  744 => 219,  737 => 217,  734 => 216,  732 => 215,  729 => 214,  724 => 211,  699 => 210,  671 => 208,  636 => 206,  635 => 205,  632 => 204,  626 => 203,  615 => 202,  610 => 201,  609 => 200,  589 => 199,  586 => 198,  584 => 197,  575 => 191,  571 => 190,  567 => 189,  553 => 188,  542 => 183,  540 => 182,  537 => 181,  531 => 177,  529 => 176,  526 => 175,  521 => 174,  518 => 173,  514 => 171,  501 => 161,  497 => 160,  492 => 158,  484 => 154,  478 => 153,  472 => 151,  466 => 148,  461 => 147,  444 => 143,  435 => 137,  432 => 136,  430 => 135,  423 => 131,  418 => 128,  416 => 127,  413 => 126,  407 => 122,  401 => 120,  398 => 119,  385 => 118,  383 => 117,  378 => 116,  370 => 115,  366 => 113,  358 => 108,  354 => 107,  350 => 106,  345 => 104,  342 => 103,  340 => 102,  337 => 101,  333 => 99,  332 => 98,  328 => 96,  320 => 95,  310 => 94,  307 => 93,  306 => 92,  303 => 91,  301 => 90,  297 => 88,  295 => 87,  292 => 86,  289 => 85,  276 => 84,  268 => 81,  265 => 80,  262 => 79,  260 => 78,  257 => 77,  251 => 73,  246 => 71,  241 => 70,  233 => 68,  231 => 67,  222 => 64,  220 => 63,  210 => 55,  197 => 52,  194 => 51,  192 => 50,  189 => 49,  188 => 48,  179 => 46,  176 => 45,  175 => 44,  166 => 42,  160 => 38,  148 => 37,  142 => 33,  141 => 32,  138 => 31,  126 => 30,  122 => 28,  115 => 26,  108 => 25,  101 => 23,  96 => 22,  88 => 20,  85 => 19,  77 => 17,  75 => 16,  72 => 15,  70 => 14,  67 => 13,  66 => 12,  56 => 7,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewforum_body.html", "");
    }
}
