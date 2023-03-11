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

/* mcp_post.html */
class __TwigTemplate_51d7951a574279e0e66b45dd1ff4d75babfe6df92fe4d9ed6c2e902c2f436542 extends \Twig\Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["S_MCP_REPORT"] ?? null)) {
            // line 4
            echo "\t";
            if (($context["S_PM"] ?? null)) {
                // line 5
                echo "\t<h2>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PM_REPORT_DETAILS");
                echo "</h2>
\t";
            } else {
                // line 7
                echo "\t<h2>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_DETAILS");
                echo "</h2>
\t";
            }
            // line 9
            echo "
\t<div id=\"report\" class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\">
\t\t\t<h3>";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["REPORT_REASON_TITLE"] ?? null);
            echo "</h3>
\t\t\t<p class=\"author\">";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED");
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["REPORTER_FULL"] ?? null);
            echo " &laquo; ";
            echo ($context["REPORT_DATE"] ?? null);
            echo "</p>
\t\t";
            // line 16
            if (($context["S_REPORT_CLOSED"] ?? null)) {
                // line 17
                echo "\t\t\t<p class=\"post-notice reported\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_CLOSED");
                echo "</p>
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 20
            if (($context["REPORT_TEXT"] ?? null)) {
                // line 21
                echo "\t\t\t\t";
                echo ($context["REPORT_TEXT"] ?? null);
                echo "
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                echo ($context["REPORT_REASON_DESCRIPTION"] ?? null);
                echo "
\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>

\t\t</div>
\t</div>

\t<form method=\"post\" id=\"mcp_report\" action=\"";
            // line 31
            echo ($context["S_CLOSE_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 34
            // line 35
            echo "\t\t";
            if ( !($context["S_REPORT_CLOSED"] ?? null)) {
                // line 36
                echo "\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" /> &nbsp;
\t\t";
            }
            // line 38
            echo "\t\t<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" />
\t\t";
            // line 39
            // line 40
            echo "\t\t<input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            echo ($context["REPORT_ID"] ?? null);
            echo "\" />
\t\t";
            // line 41
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 46
            echo "\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
            echo "</h2>
";
        }
        // line 48
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"postbody\">
\t\t<h3><a href=\"";
        // line 53
        echo ($context["U_VIEW_POST"] ?? null);
        echo "\">";
        echo ($context["POST_SUBJECT"] ?? null);
        echo "</a></h3>

\t\t<ul class=\"posts-buttons\">
\t\t\t<li id=\"expand\">
\t\t\t\t<a href=\"#post_details\" onclick=\"viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data.trim() == '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "';} return false;\">
\t\t\t\t\t";
        // line 58
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 61
        if (($context["U_EDIT"] ?? null)) {
            // line 62
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 63
            echo ($context["U_EDIT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
            echo "\">
\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i><span>";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 68
        echo "\t\t</ul>

\t\t";
        // line 70
        if (($context["S_PM"] ?? null)) {
            // line 71
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 72
            echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_DATE"] ?? null);
            echo "
\t\t\t<br /><strong>";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM_FROM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo "
\t\t\t";
            // line 74
            if (($context["S_TO_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TO");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 74));
                foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 74)) {
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 74);
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 74);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 74)) {
                            echo " style=\"color:";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 74);
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 74);
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 75
            echo "\t\t\t";
            if (($context["S_BCC_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 75));
                foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 75)) {
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 75);
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 75);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 75)) {
                            echo " style=\"color:";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 75);
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 75);
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 76
            echo "\t\t</p>
\t\t";
        } else {
            // line 78
            echo "\t\t<p class=\"author\">";
            echo ($context["MINI_POST_IMG"] ?? null);
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo " &raquo; ";
            echo ($context["POST_DATE"] ?? null);
            echo "</p>
\t\t";
        }
        // line 80
        echo "
\t\t";
        // line 81
        if (($context["S_POST_UNAPPROVED"] ?? null)) {
            // line 82
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 86
            echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
            echo "\" name=\"action[approve]\" />
\t\t\t\t";
            // line 87
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 88
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 89
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        } elseif (        // line 92
($context["S_POST_DELETED"] ?? null)) {
            // line 93
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t";
            // line 96
            if (($context["S_CAN_DELETE_POST"] ?? null)) {
                echo "<input class=\"button2\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "\" name=\"action[delete]\" /> &nbsp;";
            }
            // line 97
            echo "\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
            echo "\" name=\"action[restore]\" />
\t\t\t\t";
            // line 98
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"deleted_posts\" />";
            }
            // line 99
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 100
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        }
        // line 104
        echo "
\t\t";
        // line 105
        if ((($context["S_POST_REPORTED"] ?? null) &&  !($context["S_MCP_REPORT"] ?? null))) {
            // line 106
            echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t";
            // line 107
            echo ($context["REPORTED_IMG"] ?? null);
            echo " <a href=\"";
            echo ($context["U_MCP_REPORT"] ?? null);
            echo "\"><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 110
        echo "
\t\t";
        // line 111
        // line 112
        echo "\t\t<div class=\"content\" id=\"post_details\">
\t\t\t";
        // line 113
        echo ($context["POST_PREVIEW"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 115
        // line 116
        echo "
\t\t";
        // line 117
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 118
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 119
            echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachment", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 121
                echo "\t\t\t\t\t<dd>";
                echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 121);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t</dl>
\t\t";
        }
        // line 125
        echo "
\t\t";
        // line 126
        if ((($context["DELETED_MESSAGE"] ?? null) || ($context["DELETE_REASON"] ?? null))) {
            // line 127
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 128
            echo ($context["DELETED_MESSAGE"] ?? null);
            echo "
\t\t\t\t";
            // line 129
            if (($context["DELETE_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <em>";
                echo ($context["DELETE_REASON"] ?? null);
                echo "</em>";
            }
            // line 130
            echo "\t\t\t</div>
\t\t";
        }
        // line 132
        echo "
\t\t";
        // line 133
        if (($context["SIGNATURE"] ?? null)) {
            // line 134
            echo "\t\t\t<div id=\"sig";
            echo ($context["POST_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 136
        echo "
\t\t";
        // line 137
        if ((($context["S_MCP_REPORT"] ?? null) && ($context["S_CAN_VIEWIP"] ?? null))) {
            // line 138
            echo "\t\t\t<div>";
            if (($context["S_PM"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_PM_IP");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_POST_IP");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            if (($context["U_WHOIS"] ?? null)) {
                // line 139
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_WHOIS"] ?? null);
                echo "\">";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                } else {
                    echo ($context["POST_IP"] ?? null);
                }
                echo "</a> (";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IP"] ?? null);
                } else {
                    echo "<a href=\"";
                    echo ($context["U_LOOKUP_IP"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                    echo "</a>";
                }
                echo ")
\t\t\t";
            } else {
                // line 141
                echo "\t\t\t\t";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                    echo " (";
                    echo ($context["POST_IP"] ?? null);
                    echo ")";
                } else {
                    echo ($context["POST_IP"] ?? null);
                    if (($context["U_LOOKUP_IP"] ?? null)) {
                        echo " (<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                }
                // line 142
                echo "\t\t\t";
            }
            echo "</div>
\t\t";
        }
        // line 144
        echo "
\t</div>

\t</div>
</div>

";
        // line 150
        if ((((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null)) || ($context["S_CAN_CHGPOSTER"] ?? null)) || ($context["S_MCP_POST_ADDITIONAL_OPTS"] ?? null))) {
            // line 151
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 154
            echo $this->extensions['phpbb\template\twig\extension']->lang("MOD_OPTIONS");
            echo "</h3>
\t\t";
            // line 155
            if (($context["S_CAN_CHGPOSTER"] ?? null)) {
                // line 156
                echo "\t\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 160
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_POSTER");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 161
                if (($context["S_USER_SELECT"] ?? null)) {
                    echo "<dd><select name=\"u\">";
                    echo ($context["S_USER_SELECT"] ?? null);
                    echo "</select> <input type=\"submit\" class=\"button2\" name=\"action[chgposter_ip]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM");
                    echo "\" /></dd>";
                }
                // line 162
                echo "\t\t\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t\t<input class=\"inputbox autowidth\" type=\"text\" name=\"username\" value=\"\" />
\t\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposter]\" value=\"";
                // line 164
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM");
                echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<span>[ <a href=\"";
                // line 166
                echo ($context["U_FIND_USERNAME"] ?? null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "</a> ]</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 169
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
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
            if ((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null))) {
                // line 177
                echo "\t\t\t<form method=\"post\" id=\"mcp\" action=\"";
                echo ($context["U_MCP_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 181
                echo $this->extensions['phpbb\template\twig\extension']->lang("MOD_OPTIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"action\">
\t\t\t\t\t";
                // line 183
                if (($context["S_CAN_LOCK_POST"] ?? null)) {
                    if (($context["S_POST_LOCKED"] ?? null)) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("UNLOCK_POST");
                        echo " [";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("UNLOCK_POST_EXPLAIN");
                        echo "]</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST");
                        echo " [";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST_EXPLAIN");
                        echo "]</option>";
                    }
                }
                // line 184
                echo "\t\t\t\t\t";
                if (($context["S_CAN_DELETE_POST"] ?? null)) {
                    echo "<option value=\"delete_post\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 185
                echo "\t\t\t\t\t</select> <input class=\"button2\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 188
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 192
            echo "
\t\t</div>
\t</div>
";
        }
        // line 196
        echo "

";
        // line 198
        if (((($context["S_MCP_QUEUE"] ?? null) || ($context["S_MCP_REPORT"] ?? null)) || ($context["RETURN_TOPIC"] ?? null))) {
            // line 199
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 202
            if (($context["S_MCP_QUEUE"] ?? null)) {
                echo ($context["RETURN_QUEUE"] ?? null);
                echo " | ";
                echo ($context["RETURN_TOPIC_SIMPLE"] ?? null);
                echo " | ";
                echo ($context["RETURN_POST"] ?? null);
            } elseif (($context["S_MCP_REPORT"] ?? null)) {
                echo ($context["RETURN_REPORTS"] ?? null);
                if ( !($context["S_PM"] ?? null)) {
                    echo " | <a href=\"";
                    echo ($context["U_VIEW_POST"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_POST");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_TOPIC"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPIC");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_FORUM"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                echo ($context["RETURN_TOPIC"] ?? null);
            }
            echo "</p>

\t\t</div>
\t</div>
";
        }
        // line 207
        echo "
";
        // line 208
        if (($context["S_MCP_QUEUE"] ?? null)) {
        } else {
            // line 210
            echo "
\t";
            // line 211
            if (($context["S_SHOW_USER_NOTES"] ?? null)) {
                // line 212
                echo "\t\t<div class=\"panel\" id=\"usernotes\">
\t\t\t<div class=\"inner\">

\t\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 215
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t";
                // line 217
                if (($context["S_USER_NOTES"] ?? null)) {
                    // line 218
                    echo "\t\t\t\t<h3>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEEDBACK");
                    echo "</h3>

\t\t\t\t";
                    // line 220
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "usernotes", [], "any", false, false, false, 220));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 221
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_BY");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_BY", [], "any", false, false, false, 221);
                        echo " &laquo; ";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_AT", [], "any", false, false, false, 221);
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 222
                        if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                            echo "<div class=\"right-box\"><input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ID", [], "any", false, false, false, 222);
                            echo "\" /></div>";
                        }
                        // line 223
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ACTION", [], "any", false, false, false, 223);
                        echo "</div>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo "
\t\t\t\t";
                    // line 226
                    if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                        // line 227
                        echo "\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 228
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_ALL");
                        echo "\" />&nbsp;
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 229
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
                        echo "\" />
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 232
                    echo "\t\t\t";
                }
                // line 233
                echo "
\t\t\t<h3>";
                // line 234
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 235
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"inputbox\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 242
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" value=\"";
                // line 243
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 244
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 251
            echo "
\t";
            // line 252
            if (($context["S_SHOW_REPORTS"] ?? null)) {
                // line 253
                echo "\t\t<div class=\"panel\" id=\"reports\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
                // line 256
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_POST_REPORTS");
                echo "</h3>

\t\t\t";
                // line 258
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "reports", [], "any", false, false, false, 258));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 259
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_BY");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["reports"], "U_REPORTER", [], "any", false, false, false, 259)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "U_REPORTER", [], "any", false, false, false, 259);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORTER", [], "any", false, false, false, 259);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORTER", [], "any", false, false, false, 259);
                    }
                    echo " &laquo; ";
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TIME", [], "any", false, false, false, 259);
                    echo "</strong></span>
\t\t\t\t<p><em>";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REASON_TITLE", [], "any", false, false, false, 260);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REASON_DESC", [], "any", false, false, false, 260);
                    echo "</em>";
                    if (twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TEXT", [], "any", false, false, false, 260)) {
                        echo "<br />";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TEXT", [], "any", false, false, false, 260);
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                echo "
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 266
            echo "
\t";
            // line 267
            if ((($context["S_CAN_VIEWIP"] ?? null) &&  !($context["S_MCP_REPORT"] ?? null))) {
                // line 268
                echo "\t\t<div class=\"panel\" id=\"ip\">
\t\t\t<div class=\"inner\">

\t\t\t<p>";
                // line 271
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_POST_IP");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                if (($context["U_WHOIS"] ?? null)) {
                    // line 272
                    echo "\t\t\t\t<a href=\"";
                    echo ($context["U_WHOIS"] ?? null);
                    echo "\">";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                    } else {
                        echo ($context["POST_IP"] ?? null);
                    }
                    echo "</a> (";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IP"] ?? null);
                    } else {
                        echo "<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo ")
\t\t\t";
                } else {
                    // line 274
                    echo "\t\t\t\t";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                        echo " (";
                        echo ($context["POST_IP"] ?? null);
                        echo ")";
                    } else {
                        echo ($context["POST_IP"] ?? null);
                        if (($context["U_LOOKUP_IP"] ?? null)) {
                            echo " (<a href=\"";
                            echo ($context["U_LOOKUP_IP"] ?? null);
                            echo "\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                            echo "</a>)";
                        }
                    }
                    // line 275
                    echo "\t\t\t";
                }
                echo "</p>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 280
                echo $this->extensions['phpbb\template\twig\extension']->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 281
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 285
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "userrow", [], "any", false, false, false, 285));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 286
                    echo "\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["userrow"], "S_ROW_COUNT", [], "any", false, false, false, 286) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 287
                    if (twig_get_attribute($this->env, $this->source, $context["userrow"], "U_PROFILE", [], "any", false, false, false, 287)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "U_PROFILE", [], "any", false, false, false, 287);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 287);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 287);
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\"><a href=\"";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "U_SEARCHPOSTS", [], "any", false, false, false, 288);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_POSTS_BY");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 288);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "NUM_POSTS", [], "any", false, false, false, 288);
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 291
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 292
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 295
                echo "\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 298
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_post.html", 298)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 299
                echo "\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 308
                echo $this->extensions['phpbb\template\twig\extension']->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 309
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iprow", [], "any", false, false, false, 313));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 314
                    echo "\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["iprow"], "S_ROW_COUNT", [], "any", false, false, false, 314) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 315
                    if (twig_get_attribute($this->env, $this->source, $context["iprow"], "HOSTNAME", [], "any", false, false, false, 315)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_WHOIS", [], "any", false, false, false, 315);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "HOSTNAME", [], "any", false, false, false, 315);
                        echo "</a> (";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "IP", [], "any", false, false, false, 315);
                        echo ")";
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_WHOIS", [], "any", false, false, false, 315);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "IP", [], "any", false, false, false, 315);
                        echo "</a> (<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_LOOKUP_IP", [], "any", false, false, false, 315);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["iprow"], "NUM_POSTS", [], "any", false, false, false, 316);
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 319
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 320
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t";
                // line 326
                if (($context["U_LOOKUP_ALL"] ?? null)) {
                    // line 327
                    echo "\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<p><a href=\"";
                    // line 328
                    echo ($context["U_LOOKUP_ALL"] ?? null);
                    echo "#ip\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_ALL");
                    echo "</a></p>
\t\t\t\t</div>
\t\t\t";
                }
                // line 331
                echo "
\t\t\t<div class=\"pagination\">
\t\t\t\t<ul>
\t\t\t\t";
                // line 334
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination_ips", [], "any", false, false, false, 334));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination_ips"]) {
                    // line 335
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "S_IS_PREV", [], "any", false, false, false, 335)) {
                        // line 336
                        echo "\t\t\t\t\t<li class=\"arrow previous\"><a class=\"button button-icon-only\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 336);
                        echo "\" rel=\"prev\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIOUS");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 337
$context["pagination_ips"], "S_IS_CURRENT", [], "any", false, false, false, 337)) {
                        // line 338
                        echo "\t\t\t\t\t<li class=\"active\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_NUMBER", [], "any", false, false, false, 338);
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 339
$context["pagination_ips"], "S_IS_ELLIPSIS", [], "any", false, false, false, 339)) {
                        // line 340
                        echo "\t\t\t\t\t<li class=\"ellipsis\" role=\"separator\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 341
$context["pagination_ips"], "S_IS_NEXT", [], "any", false, false, false, 341)) {
                        // line 342
                        echo "\t\t\t\t\t<li class=\"arrow next\"><a class=\"button button-icon-only\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 342);
                        echo "\" rel=\"next\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 344
                        echo "\t\t\t\t\t<li><a class=\"button\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 344);
                        echo "\" role=\"button\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_NUMBER", [], "any", false, false, false, 344);
                        echo "</a></li>
\t\t\t\t\t";
                    }
                    // line 346
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination_ips'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 353
            echo "
";
        }
        // line 355
        echo "
";
        // line 356
        if (($context["S_TOPIC_REVIEW"] ?? null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "mcp_post.html", 356)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 357
        echo "
";
        // line 358
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_post.html", 358)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1229 => 358,  1226 => 357,  1212 => 356,  1209 => 355,  1205 => 353,  1197 => 347,  1191 => 346,  1183 => 344,  1173 => 342,  1171 => 341,  1166 => 340,  1164 => 339,  1159 => 338,  1157 => 337,  1148 => 336,  1145 => 335,  1141 => 334,  1136 => 331,  1128 => 328,  1125 => 327,  1123 => 326,  1118 => 323,  1109 => 320,  1106 => 319,  1098 => 316,  1076 => 315,  1067 => 314,  1062 => 313,  1055 => 309,  1051 => 308,  1040 => 299,  1028 => 298,  1023 => 295,  1014 => 292,  1011 => 291,  997 => 288,  985 => 287,  976 => 286,  971 => 285,  964 => 281,  960 => 280,  951 => 275,  934 => 274,  912 => 272,  907 => 271,  902 => 268,  900 => 267,  897 => 266,  891 => 262,  875 => 260,  857 => 259,  853 => 258,  848 => 256,  843 => 253,  841 => 252,  838 => 251,  828 => 244,  824 => 243,  820 => 242,  810 => 235,  806 => 234,  803 => 233,  800 => 232,  794 => 229,  790 => 228,  787 => 227,  785 => 226,  782 => 225,  773 => 223,  767 => 222,  757 => 221,  753 => 220,  747 => 218,  745 => 217,  740 => 215,  735 => 212,  733 => 211,  730 => 210,  727 => 208,  724 => 207,  691 => 202,  686 => 199,  684 => 198,  680 => 196,  674 => 192,  667 => 188,  660 => 185,  653 => 184,  637 => 183,  631 => 181,  623 => 177,  621 => 176,  618 => 175,  617 => 174,  614 => 173,  607 => 169,  599 => 166,  594 => 164,  590 => 162,  582 => 161,  577 => 160,  569 => 156,  567 => 155,  563 => 154,  558 => 151,  556 => 150,  548 => 144,  542 => 142,  525 => 141,  503 => 139,  493 => 138,  491 => 137,  488 => 136,  480 => 134,  478 => 133,  475 => 132,  471 => 130,  462 => 129,  458 => 128,  455 => 127,  453 => 126,  450 => 125,  446 => 123,  437 => 121,  433 => 120,  429 => 119,  426 => 118,  424 => 117,  421 => 116,  420 => 115,  415 => 113,  412 => 112,  411 => 111,  408 => 110,  398 => 107,  395 => 106,  393 => 105,  390 => 104,  383 => 100,  378 => 99,  374 => 98,  369 => 97,  363 => 96,  356 => 93,  354 => 92,  348 => 89,  343 => 88,  339 => 87,  335 => 86,  331 => 85,  324 => 82,  322 => 81,  319 => 80,  305 => 78,  301 => 76,  270 => 75,  240 => 74,  233 => 73,  226 => 72,  223 => 71,  221 => 70,  217 => 68,  210 => 64,  204 => 63,  201 => 62,  199 => 61,  193 => 58,  183 => 57,  174 => 53,  167 => 48,  161 => 46,  153 => 41,  148 => 40,  147 => 39,  142 => 38,  136 => 36,  133 => 35,  132 => 34,  126 => 31,  118 => 25,  112 => 23,  106 => 21,  104 => 20,  101 => 19,  95 => 17,  93 => 16,  83 => 15,  76 => 14,  69 => 9,  63 => 7,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_post.html", "");
    }
}
