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

/* ucp_pm_viewfolder.html */
class __TwigTemplate_738fc18ccb34995371d02f05d8eef15ddcaf41b93331a12697c5d73e63d088e0 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewfolder.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !($context["PROMPT"] ?? null)) {
            // line 4
            echo "\t";
            $location = "ucp_pm_message_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewfolder.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
";
        // line 7
        if (($context["PROMPT"] ?? null)) {
            // line 8
            echo "\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXPORT_AS_CSV");
            echo "</h2>
\t<form id=\"viewfolder\" method=\"post\" action=\"";
            // line 9
            echo ($context["S_PM_ACTION"] ?? null);
            echo "\">
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</h3>
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"delimiter\">";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELIMITER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"delimiter\" name=\"delimiter\" value=\",\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"enclosure\">";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("ENCLOSURE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"enclosure\" name=\"enclosure\" value=\"&#034;\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t</div>
\t</div>
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"export_option\" value=\"CSV\" />
\t\t<input class=\"button1\" type=\"submit\" name=\"submit_export\" value=\"";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXPORT_FOLDER");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" value=\"";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" name=\"reset\" />&nbsp;
\t\t";
            // line 29
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 34
            echo "
\t";
            // line 35
            if (($context["NUM_REMOVED"] ?? null)) {
                // line 36
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 37
                echo ($context["RULE_REMOVED_MESSAGES"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 40
            echo "
\t";
            // line 41
            if (($context["NUM_NOT_MOVED"] ?? null)) {
                // line 42
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 43
                echo ($context["NOT_MOVED_MESSAGES"] ?? null);
                echo "<br />";
                echo ($context["RELEASE_MESSAGE_INFO"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 46
            echo "
\t";
            // line 47
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "messagerow", [], "any", false, false, false, 47))) {
                // line 48
                echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 51
                echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
                // line 52
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist pmlist responsive-show-all ";
                // line 56
                if (($context["S_SHOW_RECIPIENTS"] ?? null)) {
                    echo "missing-column";
                } else {
                    echo "two-columns";
                }
                echo "\">

\t\t";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "messagerow", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["messagerow"]) {
                    // line 59
                    echo "\t\t\t<li class=\"row";
                    if ((twig_get_attribute($this->env, $this->source, $context["messagerow"], "S_ROW_COUNT", [], "any", false, false, false, 59) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["messagerow"], "PM_CLASS", [], "any", false, false, false, 59)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "PM_CLASS", [], "any", false, false, false, 59);
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "FOLDER_IMG_STYLE", [], "any", false, false, false, 60);
                    echo "\">
\t\t\t\t\t<dt";
                    // line 61
                    if ((twig_get_attribute($this->env, $this->source, $context["messagerow"], "PM_ICON_URL", [], "any", false, false, false, 61) && ($context["S_PM_ICONS"] ?? null))) {
                        echo " style=\"background-image: url(";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "PM_ICON_URL", [], "any", false, false, false, 61);
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 62
                    if ((twig_get_attribute($this->env, $this->source, $context["messagerow"], "S_PM_UNREAD", [], "any", false, false, false, 62) &&  !twig_get_attribute($this->env, $this->source, $context["messagerow"], "S_PM_DELETED", [], "any", false, false, false, 62))) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "U_VIEW_PM", [], "any", false, false, false, 62);
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t";
                    // line 65
                    if (twig_get_attribute($this->env, $this->source, $context["messagerow"], "S_PM_DELETED", [], "any", false, false, false, 65)) {
                        // line 66
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "U_REMOVE_PM", [], "any", false, false, false, 66);
                        echo "\" class=\"topictitle\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MESSAGE");
                        echo "</a><br />
\t\t\t\t\t\t\t<span class=\"error\">";
                        // line 67
                        echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                        echo "</span>
\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "U_VIEW_PM", [], "any", false, false, false, 69);
                        echo "\" class=\"topictitle\">";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "SUBJECT", [], "any", false, false, false, 69);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["messagerow"], "S_AUTHOR_DELETED", [], "any", false, false, false, 71)) {
                        // line 72
                        echo "\t\t\t\t\t\t\t<br /><em class=\"small\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("PM_FROM_REMOVED_AUTHOR");
                        echo "</em>
\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "
\t\t\t\t\t\t";
                    // line 75
                    if (twig_get_attribute($this->env, $this->source, $context["messagerow"], "S_PM_REPORTED", [], "any", false, false, false, 75)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "U_MCP_REPORT", [], "any", false, false, false, 75);
                        echo "\">";
                        echo ($context["REPORTED_IMG"] ?? null);
                        echo "</a>";
                    }
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 75);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 76
                    if (($context["S_SHOW_RECIPIENTS"] ?? null)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_TO");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "RECIPIENTS", [], "any", false, false, false, 76);
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "MESSAGE_AUTHOR_FULL", [], "any", false, false, false, 76);
                        echo " &raquo; ";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "SENT_TIME", [], "any", false, false, false, 76);
                    }
                    // line 77
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t";
                    // line 80
                    if (($context["S_SHOW_RECIPIENTS"] ?? null)) {
                        echo "<dd class=\"info\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "SENT_TIME", [], "any", false, false, false, 80);
                        echo "</span></dd>";
                    }
                    // line 81
                    echo "\t\t\t\t\t";
                    if (($context["S_UNREAD"] ?? null)) {
                        echo "<dd class=\"info\">";
                        if (twig_get_attribute($this->env, $this->source, $context["messagerow"], "FOLDER", [], "any", false, false, false, 81)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "U_FOLDER", [], "any", false, false, false, 81);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "FOLDER", [], "any", false, false, false, 81);
                            echo "</a>";
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("UNKNOWN_FOLDER");
                        }
                        echo "</dd>";
                    }
                    // line 82
                    echo "\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"marked_msg_id[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["messagerow"], "MESSAGE_ID", [], "any", false, false, false, 82);
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagerow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
\t\t</ul>
\t";
            } else {
                // line 89
                echo "\t\t<p><strong>
\t\t\t";
                // line 90
                if ((($context["S_COMPOSE_PM_VIEW"] ?? null) && ($context["S_NO_AUTH_SEND_MESSAGE"] ?? null))) {
                    // line 91
                    echo "\t\t\t\t";
                    if (($context["S_USER_NEW"] ?? null)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_NEW_PERMISSION_DISALLOWED");
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NO_AUTH_SEND_MESSAGE");
                    }
                    // line 92
                    echo "\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MESSAGES");
                    echo "
\t\t\t";
                }
                // line 95
                echo "\t\t</strong></p>
\t";
            }
            // line 97
            echo "
\t";
            // line 98
            if ((($context["FOLDER_CUR_MESSAGES"] ?? null) != 0)) {
                // line 99
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<div class=\"left-box\"><label><select name=\"export_option\" id=\"export_option\"><option value=\"CSV\">";
                // line 100
                echo $this->extensions['phpbb\template\twig\extension']->lang("EXPORT_AS_CSV");
                echo "</option><option value=\"CSV_EXCEL\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EXPORT_AS_CSV_EXCEL");
                echo "</option><option value=\"XML\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EXPORT_AS_XML");
                echo "</option></select></label><input class=\"button2\" type=\"submit\" name=\"submit_export\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" /><br /></div>
\t\t\t<div><label><select name=\"mark_option\">";
                // line 101
                echo ($context["S_MARK_OPTIONS"] ?? null);
                echo ($context["S_MOVE_MARKED_OPTIONS"] ?? null);
                echo "</select></label><input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" /></div>
\t\t\t<div class=\"marking\">
\t\t\t\t<a class=\"ma-ma\" href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', true); return false;\">
\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t";
                // line 105
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "
\t\t\t\t</a>
\t\t\t\t<a class=\"ma-un\" href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', false); return false;\">
\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t";
                // line 109
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t</fieldset>
\t
\t\t<hr />
\t
\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 118
                echo ($context["TOTAL_MESSAGES"] ?? null);
                echo "
\t\t\t\t";
                // line 119
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 119))) {
                    echo " 
\t\t\t\t\t";
                    // line 120
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_viewfolder.html", 120)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 121
                    echo "\t\t\t\t";
                } else {
                    echo " 
\t\t\t\t\t &bull; ";
                    // line 122
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t";
                }
                // line 124
                echo "\t\t\t</div>
\t\t</div>
\t";
            }
            // line 127
            echo "
\t\t</div>
\t</div>

\t";
            // line 131
            if ((($context["FOLDER_CUR_MESSAGES"] ?? null) != 0)) {
                // line 132
                echo "\t<fieldset class=\"display-options\">
\t\t<label>";
                // line 133
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label>
\t\t<label>";
                // line 134
                echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label>
\t\t<label>";
                // line 135
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 136
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" class=\"button2\" />
\t\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
                // line 137
                echo ($context["CUR_FOLDER_ID"] ?? null);
                echo "\" />
\t</fieldset>
\t";
            }
            // line 140
            echo "
\t";
            // line 141
            $location = "ucp_pm_message_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewfolder.html", 141)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 143
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewfolder.html", 143)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewfolder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 143,  476 => 141,  473 => 140,  467 => 137,  463 => 136,  459 => 135,  453 => 134,  446 => 133,  443 => 132,  441 => 131,  435 => 127,  430 => 124,  425 => 122,  420 => 121,  408 => 120,  404 => 119,  400 => 118,  388 => 109,  381 => 105,  371 => 101,  361 => 100,  358 => 99,  356 => 98,  353 => 97,  349 => 95,  343 => 93,  340 => 92,  333 => 91,  331 => 90,  328 => 89,  323 => 86,  312 => 82,  297 => 81,  288 => 80,  283 => 77,  271 => 76,  259 => 75,  256 => 74,  250 => 72,  247 => 71,  239 => 69,  234 => 67,  227 => 66,  225 => 65,  221 => 63,  215 => 62,  207 => 61,  203 => 60,  190 => 59,  186 => 58,  177 => 56,  170 => 52,  166 => 51,  161 => 48,  159 => 47,  156 => 46,  148 => 43,  145 => 42,  143 => 41,  140 => 40,  134 => 37,  131 => 36,  129 => 35,  126 => 34,  118 => 29,  114 => 28,  110 => 27,  98 => 19,  90 => 15,  84 => 12,  78 => 9,  73 => 8,  71 => 7,  68 => 6,  54 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_viewfolder.html", "");
    }
}
