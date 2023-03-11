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

/* overall_header.html */
class __TwigTemplate_2abfc21c39bc0dc0513720820d4318ce841c44bac32098aaaea7c00bc4b6a503 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
        }
        // line 19
        echo "
<!--[if IE]><link rel=\"shortcut icon\" href=\"";
        // line 20
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/favicon.ico\"><![endif]-->
<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 21
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/apple-touch-icon-precomposed.gif\">
<link rel=\"icon\" href=\"";
        // line 22
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/favicon.gif\">
<link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 23
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/favicon.ico\">

";
        // line 25
        if (($context["U_CANONICAL"] ?? null)) {
            // line 26
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 28
        echo "
<!--
\tphpBB style name: Ariki
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      Gramziu
-->

<link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />

<link href=\"";
        // line 39
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"";
        // line 40
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/colours.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
\t
";
        // line 42
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 43
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 45
        echo "
";
        // line 46
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 47
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 49
        echo "
";
        // line 50
        // line 51
        echo "
";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 52);
        echo "

";
        // line 54
        // line 55
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 57
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 59
        // line 60
        echo "
<div id=\"overall-wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"wrap-head\">
\t\t<div id=\"site-header\">
\t\t\t<div class=\"chunk\">
\t\t\t\t<div id=\"site-logo\">
\t\t\t\t\t<a class=\"site-logo\" href=\"";
        // line 67
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        }
        echo "\"></a>
\t\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 68
        echo $this->extensions['phpbb\template\twig\extension']->lang("SKIP");
        echo "</a></p>
\t\t\t\t</div>

\t\t\t\t<ul id=\"site-menu\">
\t\t\t\t\t";
        // line 72
        $location = "site_menu.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("site_menu.html", "overall_header.html", 72)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 73
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"site-nav\" role=\"navigation\">
\t\t\t<div class=\"chunk\">

\t\t\t\t";
        // line 80
        // line 81
        echo "
\t\t\t\t<div class=\"site-nav\">

\t\t\t\t\t";
        // line 84
        // line 85
        echo "
\t\t\t\t\t";
        // line 86
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 87
            echo "\t\t\t\t\t<div id=\"site-search\" role=\"search\">
\t\t\t\t\t\t<form action=\"";
            // line 88
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<input name=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 90
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
            echo "\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\" /><button type=\"submit\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\"><i class=\"fa fa-search\"></i></button>";
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 95
        echo "
\t\t\t\t\t<ul role=\"menubar\">
\t\t\t\t\t";
        // line 97
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 98
            echo "\t\t\t\t\t\t";
            // line 99
            echo "\t\t\t\t\t\t<li class=\"";
            if ( !($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo "font-icon ";
            }
            echo "dropdown-container dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t";
            // line 100
            // line 101
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" id=\"header-avatar\" class=\"dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
            } else {
                echo "<i class=\"fa fa-user\"></i>";
            }
            echo "<span>";
            echo ($context["S_USERNAME"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t\t";
            // line 105
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 106
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 107
            // line 108
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-ucp\"><a href=\"";
            // line 109
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\"><i class=\"fa fa-wrench\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-profile\"><a href=\"";
            // line 110
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "\" role=\"menuitem\"><i class=\"fa fa-user\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "</a></li>

\t\t\t\t\t\t\t\t\t";
            // line 112
            // line 113
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-logout\"><a href=\"";
            // line 115
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"fa fa-power-off\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 118
            // line 119
            echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 120
            // line 121
            echo "\t\t\t\t\t\t";
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 122
                echo "\t\t\t\t\t\t\t<li class=\"font-icon rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 123
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">";
                if (($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo "<span class=\"nav-count\">";
                    echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                }
                echo "<i class=\"fa fa-inbox\"></i>";
                if (($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo "</span>";
                }
                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 127
                echo "\t\t\t\t\t\t\t<li class=\"font-icon dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 128
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">";
                if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo "<span class=\"nav-count\">";
                    echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                }
                echo "<i class=\"fa fa-bell\"></i>";
                if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo "</span>";
                }
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 129
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 129)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 130
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t";
        } elseif ( !($context["S_IS_BOT"] ?? null)) {
            // line 133
            echo "\t\t\t\t\t\t<li class=\"font-icon rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"fa fa-power-off\"></i><span class=\"nav-rh-2\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span></a></li>
\t\t\t\t\t\t";
            // line 134
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 135
                echo "\t\t\t\t\t\t<li class=\"font-icon rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-pencil-square-o\"></i><span class=\"nav-rh-2\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</span></a></li>
\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t\t";
            // line 138
            echo "\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            echo "<li class=\"font-icon rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-gavel\"></i></a></li>";
        }
        // line 140
        echo "\t\t\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li class=\"font-icon rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-tachometer\"></i></a></li>";
        }
        // line 141
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 147
        // line 148
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t\t";
        // line 150
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 151
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"chunk\">
\t\t\t\t<strong>";
            // line 153
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 157
        echo "
\t\t";
        // line 158
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 158,  570 => 157,  560 => 153,  556 => 151,  554 => 150,  550 => 148,  549 => 147,  541 => 141,  532 => 140,  523 => 139,  520 => 138,  518 => 137,  510 => 135,  508 => 134,  499 => 133,  496 => 132,  492 => 130,  480 => 129,  467 => 128,  462 => 127,  459 => 126,  444 => 123,  441 => 122,  438 => 121,  437 => 120,  434 => 119,  433 => 118,  423 => 115,  419 => 113,  418 => 112,  409 => 110,  401 => 109,  398 => 108,  397 => 107,  394 => 106,  386 => 105,  370 => 101,  369 => 100,  360 => 99,  358 => 98,  356 => 97,  352 => 95,  336 => 90,  331 => 88,  328 => 87,  326 => 86,  323 => 85,  322 => 84,  317 => 81,  316 => 80,  307 => 73,  295 => 72,  288 => 68,  274 => 67,  265 => 60,  264 => 59,  255 => 57,  251 => 55,  250 => 54,  245 => 52,  242 => 51,  241 => 50,  238 => 49,  230 => 47,  228 => 46,  225 => 45,  217 => 43,  215 => 42,  208 => 40,  204 => 39,  191 => 28,  185 => 26,  183 => 25,  178 => 23,  174 => 22,  170 => 21,  166 => 20,  163 => 19,  149 => 17,  136 => 16,  125 => 15,  114 => 14,  103 => 13,  92 => 12,  81 => 11,  79 => 10,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
