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

/* memberlist_view.html */
class __TwigTemplate_2fe69d58464b2d21132fa4dc33c4776ab80172dfdea1a9fef738a1146bb8ceda extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "memberlist_view.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"memberlist-title\">";
        // line 14
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>
\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 23
        // line 24
        echo "
\t\t<form method=\"post\" action=\"";
        // line 25
        echo ($context["S_PROFILE_ACTION"] ?? null);
        echo "\" id=\"viewprofile\">
\t\t<div class=\"panel bg1";
        // line 26
        if (($context["S_ONLINE"] ?? null)) {
            echo " online";
        }
        echo "\">
\t\t\t<div class=\"inner\">

\t\t\t";
        // line 29
        if (($context["AVATAR_IMG"] ?? null)) {
            // line 30
            echo "\t\t\t\t<dl class=\"left-box\">
\t\t\t\t\t<dt class=\"profile-avatar\">";
            // line 31
            echo ($context["AVATAR_IMG"] ?? null);
            echo "</dt>

\t\t\t\t\t";
            // line 33
            // line 34
            echo "
\t\t\t\t\t";
            // line 35
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 36
            echo "\t\t\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 37
            echo "
\t\t\t\t\t";
            // line 38
            // line 39
            echo "
\t\t\t\t</dl>
\t\t\t";
        }
        // line 42
        echo "
\t\t\t<dl class=\"left-box details profile-details\">
\t\t\t\t<dt>";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>
\t\t\t\t\t";
        // line 46
        if (($context["USER_COLOR"] ?? null)) {
            echo "<span style=\"color: ";
            echo ($context["USER_COLOR"] ?? null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo ($context["USERNAME"] ?? null);
        echo "</span>";
        // line 47
        echo "\t\t\t\t\t";
        if (($context["U_EDIT_SELF"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_EDIT_SELF"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 48
        echo "\t\t\t\t\t";
        if (($context["U_USER_ADMIN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_ADMIN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 49
        echo "\t\t\t\t\t";
        if (($context["U_USER_BAN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_BAN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 50
        echo "\t\t\t\t\t";
        if (($context["U_SWITCH_PERMISSIONS"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_SWITCH_PERMISSIONS"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 51
        echo "\t\t\t\t</dd>
\t\t\t\t";
        // line 52
        if ( !($context["AVATAR_IMG"] ?? null)) {
            // line 53
            echo "
\t\t\t\t\t";
            // line 54
            // line 55
            echo "
\t\t\t\t\t";
            // line 56
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dt>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 57
            echo "\t\t\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dt>";
                if (($context["RANK_TITLE"] ?? null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                }
                echo "</dt> <dd>";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 58
            echo "
\t\t\t\t\t";
            // line 59
            // line 60
            echo "
\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t";
        if (($context["S_USER_INACTIVE"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_IS_INACTIVE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_INACTIVE_REASON"] ?? null);
            echo "</dd>";
        }
        // line 63
        echo "\t\t\t\t";
        if ((($context["AGE"] ?? null) !== "")) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["AGE"] ?? null);
            echo "</dd>";
        }
        // line 64
        echo "\t\t\t\t";
        if (($context["S_GROUP_OPTIONS"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERGROUPS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo ($context["S_GROUP_OPTIONS"] ?? null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 65
        echo "\t\t\t\t";
        // line 66
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 67
            echo "\t\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 67)) {
                // line 68
                echo "\t\t\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 68);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 68);
                echo "</dd>
\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t";
        // line 72
        echo "\t\t\t\t";
        // line 73
        echo "\t\t\t\t";
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ($context["S_ZEBRA"] ?? null))) {
            // line 74
            echo "\t\t\t\t\t";
            if (($context["U_REMOVE_FRIEND"] ?? null)) {
                // line 75
                echo "\t\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FRIEND"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t\t\t";
            } elseif (            // line 76
($context["U_REMOVE_FOE"] ?? null)) {
                // line 77
                echo "\t\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FOE"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t\t\t";
            } else {
                // line 79
                echo "\t\t\t\t\t\t";
                if (($context["U_ADD_FRIEND"] ?? null)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FRIEND"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t";
                if (($context["U_ADD_FOE"] ?? null)) {
                    // line 83
                    echo "\t\t\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FOE"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t";
        // line 88
        echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>

\t\t";
        // line 93
        // line 94
        echo "\t\t<div class=\"panel bg2\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"column1\">
\t\t\t\t<h3>";
        // line 98
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_USER");
        echo "</h3>

\t\t\t\t<dl class=\"details\">
\t\t\t\t";
        // line 101
        if (($context["U_EMAIL"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_EMAIL"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 102
        echo "\t\t\t\t";
        if (($context["U_PM"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_PM"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 103
        echo "\t\t\t\t";
        if ((($context["U_JABBER"] ?? null) && ($context["S_JABBER_ENABLED"] ?? null))) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_JABBER"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif (($context["USER_JABBER"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_JABBER"] ?? null);
            echo "</dd>";
        }
        // line 104
        echo "\t\t\t\t";
        // line 105
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 106
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 106)) {
                // line 107
                echo "\t\t\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 107);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt>
\t\t\t\t\t\t";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "\t\t\t\t\t\t\t<dd><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 109);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_DESC", [], "any", false, false, false, 109);
                    echo "</a></dd>
\t\t\t\t\t\t";
                } else {
                    // line 111
                    echo "\t\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 111);
                    echo "</dd>
\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t\t\t";
        // line 116
        echo "\t\t\t\t";
        if (($context["S_PROFILE_FIELD1"] ?? null)) {
            // line 117
            echo "\t\t\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t<dt>";
            // line 118
            echo ($context["PROFILE_FIELD1_NAME"] ?? null);
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["PROFILE_FIELD1_VALUE"] ?? null);
            echo "</dd>
\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t</dl>
\t\t\t</div>

\t\t\t<div class=\"column2\">
\t\t\t\t<h3>";
        // line 124
        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_FORUM");
        echo "</h3>
\t\t\t\t<dl class=\"details\">
\t\t\t\t\t";
        // line 126
        // line 127
        echo "\t\t\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["JOINED"] ?? null);
        echo "</dd>
\t\t\t\t\t<dt>";
        // line 128
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["LAST_ACTIVE"] ?? null);
        echo "</dd>
\t\t\t\t\t";
        // line 129
        if (($context["S_WARNINGS"] ?? null)) {
            // line 130
            echo "\t\t\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " </dt>
\t\t\t\t\t<dd><strong>";
            // line 131
            echo ($context["WARNINGS"] ?? null);
            echo "</strong>";
            if ((($context["U_NOTES"] ?? null) || ($context["U_WARN"] ?? null))) {
                echo " [ ";
                if (($context["U_NOTES"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_NOTES"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if (($context["U_WARN"] ?? null)) {
                    if (($context["U_NOTES"] ?? null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo ($context["U_WARN"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t\t\t\t\t<dd>";
        // line 134
        echo ($context["POSTS"] ?? null);
        echo " ";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "| <strong><a href=\"";
            echo ($context["U_SEARCH_USER"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 135
        echo "\t\t\t\t\t\t\t";
        if (($context["POSTS_PCT"] ?? null)) {
            echo "<br />(";
            echo ($context["POSTS_PCT"] ?? null);
            echo " / ";
            echo ($context["POSTS_DAY"] ?? null);
            echo ")";
        }
        // line 136
        echo "\t\t\t\t\t\t\t";
        if ((($context["POSTS_IN_QUEUE"] ?? null) && ($context["U_MCP_QUEUE"] ?? null))) {
            echo "<br />(<a href=\"";
            echo ($context["U_MCP_QUEUE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif (($context["POSTS_IN_QUEUE"] ?? null)) {
            echo "<br />(";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 137
        echo "\t\t\t\t\t\t</dd>
\t\t\t\t\t";
        // line 138
        if ((($context["S_SHOW_ACTIVITY"] ?? null) && ($context["POSTS"] ?? null))) {
            // line 139
            echo "\t\t\t\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_FORUM"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_FORUM"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_FORUM"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_FORUM_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_FORUM_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t\t\t<dt>";
            // line 140
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_TOPIC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_TOPIC"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_TOPIC"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_TOPIC"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_TOPIC_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_TOPIC_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t\t";
        }
        // line 142
        echo "\t\t\t\t\t";
        // line 143
        echo "\t\t\t\t</dl>
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t";
        // line 148
        // line 149
        echo "
\t\t";
        // line 150
        if (($context["SIGNATURE"] ?? null)) {
            // line 151
            echo "\t\t<div class=\"panel bg1\">
\t\t\t<div class=\"inner\">

\t\t\t\t<h3>";
            // line 154
            echo $this->extensions['phpbb\template\twig\extension']->lang("SIGNATURE");
            echo "</h3>

\t\t\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 156
            echo ($context["SIGNATURE"] ?? null);
            echo "</div></div>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 161
        echo "
\t\t</form>

\t\t";
        // line 164
        // line 165
        echo "
\t\t";
        // line 166
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 166)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 167
        echo "
\t</div>
</div>

";
        // line 171
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 171)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 171,  672 => 167,  660 => 166,  657 => 165,  656 => 164,  651 => 161,  643 => 156,  638 => 154,  633 => 151,  631 => 150,  628 => 149,  627 => 148,  620 => 143,  618 => 142,  598 => 140,  578 => 139,  576 => 138,  573 => 137,  560 => 136,  551 => 135,  541 => 134,  535 => 133,  507 => 131,  501 => 130,  499 => 129,  492 => 128,  484 => 127,  483 => 126,  478 => 124,  472 => 120,  464 => 118,  461 => 117,  458 => 116,  456 => 115,  450 => 114,  447 => 113,  441 => 111,  433 => 109,  431 => 108,  425 => 107,  422 => 106,  417 => 105,  415 => 104,  396 => 103,  384 => 102,  373 => 101,  367 => 98,  361 => 94,  360 => 93,  353 => 88,  351 => 87,  348 => 86,  345 => 85,  337 => 83,  334 => 82,  326 => 80,  323 => 79,  315 => 77,  313 => 76,  306 => 75,  303 => 74,  300 => 73,  298 => 72,  296 => 71,  290 => 70,  281 => 68,  278 => 67,  273 => 66,  271 => 65,  259 => 64,  249 => 63,  239 => 62,  235 => 60,  234 => 59,  231 => 58,  217 => 57,  208 => 56,  205 => 55,  204 => 54,  201 => 53,  199 => 52,  196 => 51,  187 => 50,  178 => 49,  169 => 48,  160 => 47,  150 => 46,  144 => 44,  140 => 42,  135 => 39,  134 => 38,  131 => 37,  124 => 36,  118 => 35,  115 => 34,  114 => 33,  109 => 31,  106 => 30,  104 => 29,  96 => 26,  92 => 25,  89 => 24,  88 => 23,  76 => 14,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_view.html", "");
    }
}
