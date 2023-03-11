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

/* posting_editor.html */
class __TwigTemplate_bc0723167e2db4af087337be3512dda8de577d9945451cbef918c714352aca5d extends \Twig\Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        // line 5
        echo "
\t";
        // line 6
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 7
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("ICON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t";
            // line 10
            // line 11
            echo "\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPIC_ICON");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_icon", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 12);
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 12);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 12);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "S_ICON_CHECKED", [], "any", false, false, false, 12);
                echo " tabindex=\"1\" /><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_IMG", [], "any", false, false, false, 12);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_WIDTH", [], "any", false, false, false, 12);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_HEIGHT", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ALT", [], "any", false, false, false, 12);
                echo "\" title=\"\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t";
            // line 14
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 17
        echo "
\t";
        // line 18
        // line 19
        echo "
\t";
        // line 20
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 21
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 22
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 23
            echo ($context["USERNAME"] ?? null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 26
        echo "
\t";
        // line 27
        // line 28
        echo "
\t";
        // line 29
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 30
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 31
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            // line 32
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
            // line 34
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 35
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 36
                echo "\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 36)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 37
                echo "\t";
            }
            // line 38
            echo "\t";
        }
        // line 39
        echo "
\t";
        // line 40
        // line 41
        echo "
\t<div id=\"smiley-box\">

\t\t";
        // line 44
        // line 45
        echo "
\t\t";
        // line 46
        if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 46)))) {
            // line 47
            echo "\t\t\t<strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 49
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "A_SMILEY_CODE", [], "any", false, false, false, 49);
                echo "', true); return false;\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_IMG", [], "any", false, false, false, 49);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_WIDTH", [], "any", false, false, false, 49);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_HEIGHT", [], "any", false, false, false, 49);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_CODE", [], "any", false, false, false, 49);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_DESC", [], "any", false, false, false, 49);
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t";
        }
        // line 52
        echo "\t\t";
        if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
            // line 53
            echo "\t\t\t<br /><a href=\"";
            echo ($context["U_MORE_SMILIES"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 55
        echo "
\t\t";
        // line 56
        // line 57
        echo "
\t\t";
        // line 58
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 59
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 60
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 60))) {
                echo "<hr />";
            }
            // line 61
            echo "\t\t\t";
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t\t";
            // line 62
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 63
                echo "\t\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 64
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 65
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t\t";
            }
            // line 67
            echo "\t\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 70
        echo "
\t\t";
        // line 71
        // line 72
        echo "
\t\t";
        // line 73
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 74
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 75
            echo "\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<strong><a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 76
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<strong><a href=\"#review\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 77
            echo "\t\t";
        }
        // line 78
        echo "\t</div>

\t";
        // line 80
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 80)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 81
        echo "
\t";
        // line 82
        // line 83
        echo "
\t<div id=\"message-box\">
\t\t<textarea ";
        // line 85
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t</div>

\t";
        // line 88
        // line 89
        echo "\t</fieldset>

";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", [], "any", false, false, false, 91) == 1)) {
            // line 92
            echo "
\t";
            // line 93
            if ( !($context["S_SHOW_DRAFTS"] ?? null)) {
                // line 94
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 97
            echo "
\t";
            // line 98
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 98) == 1))) {
                // line 99
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 102
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t";
                // line 103
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "

\t\t\t";
                // line 105
                // line 106
                echo "
\t\t\t";
                // line 107
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />";
                }
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />";
                }
                echo "<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " /><input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 114
            echo "
\t";
            // line 115
            if ((( !($context["S_PRIVMSGS"] ?? null) &&  !($context["S_SHOW_DRAFTS"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 115) == 1))) {
                // line 116
                echo "\t\t<div id=\"tabs\" class=\"sub-panels\" data-show-panel=\"";
                if (($context["SHOW_PANEL"] ?? null)) {
                    echo ($context["SHOW_PANEL"] ?? null);
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 118
                echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 119
                if ((($context["S_SHOW_ATTACH_BOX"] ?? null) && ($context["FILTERS"] ?? null))) {
                    // line 120
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 122
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\"><strong id=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t";
                if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                    // line 127
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 128
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 131
                echo "
\t\t\t\t";
                // line 132
                // line 133
                echo "
\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 137
            echo "
\t";
            // line 138
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 138) == 1))) {
                // line 139
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 143
                // line 144
                echo "\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 145
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo ($context["S_BBCODE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 147
                echo "\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 148
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo ($context["S_SMILIES_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 150
                echo "\t\t\t";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 151
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 153
                echo "\t\t\t";
                if (($context["S_SIG_ALLOWED"] ?? null)) {
                    // line 154
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo ($context["S_SIGNATURE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 156
                echo "\t\t\t";
                if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
                    // line 157
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo ($context["S_NOTIFY_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 159
                echo "\t\t\t";
                if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
                    // line 160
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 162
                echo "\t\t\t";
                if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
                    // line 163
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo ($context["S_LOCK_POST_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST");
                    echo " [";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 165
                echo "
\t\t\t";
                // line 166
                if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 167
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 169
                echo "
\t\t\t";
                // line 170
                if (($context["S_TYPE_TOGGLE"] ?? null)) {
                    // line 171
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 172
                    if (($context["S_EDIT_POST"] ?? null)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC_AS");
                    }
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 173
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_type", [], "any", false, false, false, 173));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 173);
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 173);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 173);
                        echo "\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "S_CHECKED", [], "any", false, false, false, 173);
                        echo " />";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "L_TOPIC_TYPE", [], "any", false, false, false, 173);
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 176
                echo "
\t\t\t";
                // line 177
                if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 178
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 179
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 180
                    echo ($context["TOPIC_TIME_LIMIT"] ?? null);
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 181
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 184
                echo "
\t\t\t";
                // line 185
                if ((($context["S_SOFTDELETE_ALLOWED"] ?? null) || ($context["S_DELETE_ALLOWED"] ?? null))) {
                    // line 186
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 188
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 189
                    echo ($context["S_SOFTDELETE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 190
                    if ((($context["S_DELETE_ALLOWED"] ?? null) && ($context["S_SOFTDELETE_ALLOWED"] ?? null))) {
                        // line 191
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 193
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 195
                echo "
\t\t\t";
                // line 196
                if (($context["S_EDIT_REASON"] ?? null)) {
                    // line 197
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 198
                    echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 199
                    echo ($context["EDIT_REASON"] ?? null);
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 202
                echo "\t\t</fieldset>
\t\t";
            }
            // line 204
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  696 => 204,  692 => 202,  686 => 199,  681 => 198,  678 => 197,  676 => 196,  673 => 195,  669 => 193,  663 => 191,  661 => 190,  655 => 189,  650 => 188,  646 => 186,  644 => 185,  641 => 184,  635 => 181,  629 => 180,  624 => 179,  621 => 178,  619 => 177,  616 => 176,  593 => 173,  584 => 172,  581 => 171,  579 => 170,  576 => 169,  572 => 167,  570 => 166,  567 => 165,  557 => 163,  554 => 162,  546 => 160,  543 => 159,  535 => 157,  532 => 156,  524 => 154,  521 => 153,  513 => 151,  510 => 150,  502 => 148,  499 => 147,  491 => 145,  488 => 144,  487 => 143,  481 => 139,  479 => 138,  476 => 137,  470 => 133,  469 => 132,  466 => 131,  460 => 128,  457 => 127,  454 => 126,  447 => 122,  443 => 120,  441 => 119,  437 => 118,  427 => 116,  425 => 115,  422 => 114,  395 => 107,  392 => 106,  391 => 105,  386 => 103,  382 => 102,  377 => 99,  375 => 98,  372 => 97,  367 => 94,  365 => 93,  362 => 92,  360 => 91,  356 => 89,  355 => 88,  341 => 85,  337 => 83,  336 => 82,  333 => 81,  321 => 80,  317 => 78,  314 => 77,  307 => 76,  298 => 75,  293 => 74,  291 => 73,  288 => 72,  287 => 71,  284 => 70,  277 => 67,  272 => 65,  268 => 64,  263 => 63,  261 => 62,  256 => 61,  252 => 60,  249 => 59,  247 => 58,  244 => 57,  243 => 56,  240 => 55,  232 => 53,  229 => 52,  226 => 51,  207 => 49,  203 => 48,  198 => 47,  196 => 46,  193 => 45,  192 => 44,  187 => 41,  186 => 40,  183 => 39,  180 => 38,  177 => 37,  164 => 36,  160 => 35,  158 => 34,  146 => 32,  141 => 31,  138 => 30,  136 => 29,  133 => 28,  132 => 27,  129 => 26,  123 => 23,  118 => 22,  115 => 21,  113 => 20,  110 => 19,  109 => 18,  106 => 17,  101 => 14,  99 => 13,  74 => 12,  65 => 11,  64 => 10,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  49 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_editor.html", "");
    }
}
