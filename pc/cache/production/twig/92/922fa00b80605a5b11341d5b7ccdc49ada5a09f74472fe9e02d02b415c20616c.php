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

/* ucp_pm_viewmessage.html */
class __TwigTemplate_ccab267c27addd062946e7222d90aa8f5326c09dfd7b3977c53b9cec2164a9fd extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
\t</div>
</div>


";
        // line 9
        if ((($context["S_DISPLAY_HISTORY"] ?? null) && (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null) || ($context["U_VIEW_NEXT_HISTORY"] ?? null)))) {
            // line 10
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 11
            if (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_VIEW_PREVIOUS_HISTORY"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PREVIOUS_HISTORY");
                echo "</a>";
            }
            // line 12
            echo "\t\t";
            if (($context["U_VIEW_NEXT_HISTORY"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_VIEW_NEXT_HISTORY"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NEXT_HISTORY");
                echo "</a>";
            }
            // line 13
            echo "\t</fieldset>
";
        }
        // line 15
        echo "

<div id=\"post-";
        // line 17
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\" class=\"post pm has-profile";
        if ((($context["S_POST_UNAPPROVED"] ?? null) || ($context["S_POST_REPORTED"] ?? null))) {
            echo " reported";
        }
        if (($context["S_ONLINE"] ?? null)) {
            echo " online";
        }
        echo "\">
<div class=\"inner\">

\t<dl class=\"postprofile\" id=\"profile";
        // line 20
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\">
\t\t<dt class=\"";
        // line 21
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo " ";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "has-avatar";
        } else {
            echo "no-avatar";
        }
        echo "\">
\t\t\t<div class=\"avatar-container\">
\t\t\t\t";
        // line 23
        // line 24
        echo "\t\t\t\t";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_MESSAGE_AUTHOR"] ?? null);
            echo "\" class=\"avatar\">";
            echo ($context["AUTHOR_AVATAR"] ?? null);
            echo "</a>";
        }
        // line 25
        echo "\t\t\t\t";
        // line 26
        echo "\t\t\t</div>
\t\t\t";
        // line 27
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t</dt>

\t\t";
        // line 30
        // line 31
        echo "
\t\t";
        // line 32
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "<dd class=\"profile-rank\">";
            echo ($context["RANK_TITLE"] ?? null);
            if ((($context["RANK_TITLE"] ?? null) && ($context["RANK_IMG"] ?? null))) {
                echo "<br />";
            }
            echo ($context["RANK_IMG"] ?? null);
            echo "</dd>";
        }
        // line 33
        echo "
\t\t";
        // line 34
        // line 35
        echo "
\t\t<dd class=\"profile-posts\"><strong>";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        if ((($context["U_AUTHOR_POSTS"] ?? null) != "")) {
            echo "<a href=\"";
            echo ($context["U_AUTHOR_POSTS"] ?? null);
            echo "\">";
            echo ($context["AUTHOR_POSTS"] ?? null);
            echo "</a>";
        } else {
            echo ($context["AUTHOR_POSTS"] ?? null);
        }
        echo "</dd>
\t\t";
        // line 37
        if (($context["AUTHOR_JOINED"] ?? null)) {
            echo "<dd class=\"profile-joined\"><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["AUTHOR_JOINED"] ?? null);
            echo "</dd>";
        }
        // line 38
        echo "
\t\t";
        // line 39
        // line 40
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 41
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 41)) {
                // line 42
                echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 42);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 42);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 42);
                echo "</dd>
\t\t\t";
            }
            // line 44
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t";
        // line 46
        echo "
\t\t";
        // line 47
        // line 48
        echo "\t\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "contact", [], "any", false, false, false, 48))) {
            // line 49
            echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
            // line 50
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong>
\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "contact", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 52
                echo "\t\t\t\t<a class=\"contact-icon contact-icon-";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 52);
                echo "\" href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 52)) {
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 52);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_PROFILE_AUTHOR", [], "any", false, false, false, 52);
                }
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 52);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_LAST_CELL", [], "any", false, false, false, 52)) {
                    echo " class=\"last-cell\"";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 52) == "jabber")) {
                    echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 52);
                echo "
\t\t\t\t</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t</dd>
\t\t";
        }
        // line 57
        echo "\t\t";
        // line 58
        echo "\t</dl>

\t<div class=\"postbody\">
\t\t<h3 class=\"first\">";
        // line 61
        echo ($context["SUBJECT"] ?? null);
        echo "</h3>

\t\t";
        // line 63
        $value = (((($context["U_EDIT"] ?? null) || ($context["U_DELETE"] ?? null)) || ($context["U_REPORT"] ?? null)) || ($context["U_QUOTE"] ?? null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 64
        echo "\t\t";
        // line 65
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_PM_POST_BUTTONS", [], "any", false, false, false, 65)) {
            // line 66
            echo "
\t\t<ul class=\"posts-buttons\">
\t\t\t";
            // line 68
            // line 69
            echo "\t\t\t";
            if (($context["U_EDIT"] ?? null)) {
                // line 70
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 71
                echo ($context["U_EDIT"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_EDIT_PM");
                echo "\"><i class=\"fa fa-pencil\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 74
            echo "\t\t\t";
            if (($context["U_DELETE"] ?? null)) {
                // line 75
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 76
                echo ($context["U_DELETE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MESSAGE");
                echo "\"><i class=\"fa fa-trash\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 79
            echo "\t\t\t";
            if (($context["U_REPORT"] ?? null)) {
                // line 80
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 81
                echo ($context["U_REPORT"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_PM");
                echo "\"><i class=\"fa fa-flag\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 84
            echo "\t\t\t";
            if (($context["U_QUOTE"] ?? null)) {
                // line 85
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 86
                echo ($context["U_QUOTE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_QUOTE_PM");
                echo "\"><i class=\"fa fa-quote-left\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 89
            echo "\t\t\t";
            // line 90
            echo "\t\t</ul>
\t\t";
        }
        // line 92
        echo "
\t\t";
        // line 93
        // line 94
        echo "
\t\t<p class=\"author\">
\t\t\t<strong>";
        // line 96
        echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        echo ($context["SENT_DATE"] ?? null);
        echo "
\t\t\t<br /><strong>";
        // line 97
        echo $this->extensions['phpbb\template\twig\extension']->lang("PM_FROM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t\t";
        // line 98
        if (($context["S_TO_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TO");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 98)) {
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 98);
                } else {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 98);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 98)) {
                        echo " style=\"color:";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 98);
                        echo ";\"";
                    }
                    echo "><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 98);
                    echo "</strong></a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 99
        echo "\t\t\t";
        if (($context["S_BCC_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 99)) {
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 99);
                } else {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 99);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 99)) {
                        echo " style=\"color:";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 99);
                        echo ";\"";
                    }
                    echo "><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 99);
                    echo "</strong></a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 100
        echo "\t\t</p>


\t\t<div class=\"content\">";
        // line 103
        echo ($context["MESSAGE"] ?? null);
        echo "</div>

\t\t";
        // line 105
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 106
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 108
            echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
            echo "
\t\t\t\t</dt>
\t\t\t\t";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachment", [], "any", false, false, false, 110));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 111
                echo "\t\t\t\t\t<dd>";
                echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 111);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t</dl>
\t\t";
        }
        // line 115
        echo "
\t\t";
        // line 116
        if (($context["S_DISPLAY_NOTICE"] ?? null)) {
            // line 117
            echo "\t\t\t<div class=\"post-notice error\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 119
        echo "
\t\t";
        // line 120
        if ((($context["EDITED_MESSAGE"] ?? null) || ($context["EDIT_REASON"] ?? null))) {
            // line 121
            echo "\t\t<div class=\"notice\">";
            echo ($context["EDITED_MESSAGE"] ?? null);
            echo "
\t\t\t";
            // line 122
            if (($context["EDIT_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <em>";
                echo ($context["EDIT_REASON"] ?? null);
                echo "</em>";
            }
            // line 123
            echo "\t\t</div>
\t\t";
        }
        // line 125
        echo "
\t\t";
        // line 126
        if (($context["SIGNATURE"] ?? null)) {
            // line 127
            echo "\t\t\t<div id=\"sig";
            echo ($context["MESSAGE_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 129
        echo "\t</div>

\t</div>
</div>

";
        // line 134
        if (($context["S_VIEW_MESSAGE"] ?? null)) {
            // line 135
            echo "<fieldset class=\"display-options\">
\t";
            // line 136
            if (($context["U_PREVIOUS_PM"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_PREVIOUS_PM"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PREVIOUS_PM");
                echo "</a>";
            }
            // line 137
            echo "\t";
            if (($context["U_NEXT_PM"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_NEXT_PM"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NEXT_PM");
                echo "</a>";
            }
            // line 138
            echo "
\t";
            // line 139
            if (($context["S_MARK_OPTIONS"] ?? null)) {
                echo "<label for=\"mark_option\"><select name=\"mark_option\" id=\"mark_option\">";
                echo ($context["S_MARK_OPTIONS"] ?? null);
                echo "</select></label>&nbsp;<input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" />";
            }
            // line 140
            echo "\t";
            if (( !($context["S_UNREAD"] ?? null) &&  !($context["S_SPECIAL_FOLDER"] ?? null))) {
                echo "<label for=\"dest_folder\">";
                if (($context["S_VIEW_MESSAGE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_TO_FOLDER");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo " <select name=\"dest_folder\" id=\"dest_folder\">";
                echo ($context["S_TO_FOLDER_OPTIONS"] ?? null);
                echo "</select></label> <input class=\"button2\" type=\"submit\" name=\"move_pm\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" />";
            }
            // line 141
            echo "\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 142
            echo ($context["CUR_FOLDER_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 143
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
</fieldset>
";
        }
        // line 146
        echo "
";
        // line 147
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 147)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 148
        echo "
";
        // line 149
        if (($context["S_DISPLAY_HISTORY"] ?? null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 149)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 150
        echo "
";
        // line 151
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 151)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 151,  655 => 150,  641 => 149,  638 => 148,  626 => 147,  623 => 146,  617 => 143,  613 => 142,  608 => 141,  591 => 140,  583 => 139,  580 => 138,  569 => 137,  559 => 136,  556 => 135,  554 => 134,  547 => 129,  539 => 127,  537 => 126,  534 => 125,  530 => 123,  521 => 122,  516 => 121,  514 => 120,  511 => 119,  505 => 117,  503 => 116,  500 => 115,  496 => 113,  487 => 111,  483 => 110,  478 => 108,  474 => 106,  472 => 105,  467 => 103,  462 => 100,  431 => 99,  401 => 98,  394 => 97,  387 => 96,  383 => 94,  382 => 93,  379 => 92,  375 => 90,  373 => 89,  363 => 86,  360 => 85,  357 => 84,  347 => 81,  344 => 80,  341 => 79,  331 => 76,  328 => 75,  325 => 74,  315 => 71,  312 => 70,  309 => 69,  308 => 68,  304 => 66,  301 => 65,  299 => 64,  296 => 63,  291 => 61,  286 => 58,  284 => 57,  280 => 55,  253 => 52,  249 => 51,  244 => 50,  241 => 49,  238 => 48,  237 => 47,  234 => 46,  232 => 45,  226 => 44,  215 => 42,  212 => 41,  207 => 40,  206 => 39,  203 => 38,  194 => 37,  179 => 36,  176 => 35,  175 => 34,  172 => 33,  162 => 32,  159 => 31,  158 => 30,  152 => 27,  149 => 26,  147 => 25,  138 => 24,  137 => 23,  122 => 21,  118 => 20,  105 => 17,  101 => 15,  97 => 13,  86 => 12,  76 => 11,  73 => 10,  71 => 9,  64 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_viewmessage.html", "");
    }
}
