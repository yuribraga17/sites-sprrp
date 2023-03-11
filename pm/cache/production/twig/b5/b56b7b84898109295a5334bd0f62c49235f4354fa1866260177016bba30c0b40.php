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

/* ucp_pm_history.html */
class __TwigTemplate_56ca7fce7ac36b46422c8b1edfd8d3e7c8f62f6f7d5ffe4f8667c0d1ce278580 extends \Twig\Template
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
        echo "
<h3 id=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_HISTORY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "
</h3>

";
        // line 7
        // line 8
        echo "
<div id=\"topicreview\">
\t<script>
\t\tbbcodeEnabled = ";
        // line 11
        echo ($context["S_BBCODE_ALLOWED"] ?? null);
        echo ";
\t</script>
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "history_row", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["history_row"]) {
            // line 14
            echo "\t<div class=\"post ";
            if ((twig_get_attribute($this->env, $this->source, $context["history_row"], "S_ROW_COUNT", [], "any", false, false, false, 14) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\" id=\"pr";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MSG_ID", [], "any", false, false, false, 17);
            echo "\">
\t\t\t<h3><a href=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "U_VIEW_MESSAGE", [], "any", false, false, false, 18);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["history_row"], "S_CURRENT_MSG", [], "any", false, false, false, 18)) {
                echo "class=\"current\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "SUBJECT", [], "any", false, false, false, 18);
            echo "</a></h3>

\t\t\t";
            // line 20
            $value = (twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 20) || twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_QUOTE", [], "any", false, false, false, 20));
            $context['definition']->set('SHOW_PM_HISTORY_POST_BUTTONS', $value);
            // line 21
            echo "\t\t\t";
            // line 22
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_PM_HISTORY_POST_BUTTONS", [], "any", false, false, false, 22)) {
                // line 23
                echo "
\t\t\t<ul class=\"posts-buttons\">

\t\t\t\t";
                // line 26
                // line 27
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 27) || twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_QUOTE", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "
\t\t\t\t<li>
\t\t\t\t\t<a ";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 30)) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 30);
                        echo "\"";
                    } else {
                        echo "href=\"#postingbox\" onclick=\"addquote(";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MSG_ID", [], "any", false, false, false, 30);
                        echo ", '";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_QUOTE", [], "any", false, false, false, 30);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("WROTE"), "js");
                        echo "', {time:";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_TIME", [], "any", false, false, false, 30);
                        echo ",user_id:";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "USER_ID", [], "any", false, false, false, 30);
                        echo "});\"";
                    }
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR", [], "any", false, false, false, 30);
                    echo "\">
\t\t\t\t\t\t<i class=\"fa fa-quote-left\"></i><span>";
                    // line 31
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR", [], "any", false, false, false, 31);
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t";
                // line 37
                echo "
\t\t\t</ul>
\t\t\t";
            }
            // line 40
            echo "
\t\t\t";
            // line 41
            // line 42
            echo "
\t\t\t<p class=\"author\">";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MINI_POST_IMG", [], "any", false, false, false, 43);
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "SENT_DATE", [], "any", false, false, false, 43);
            echo "</strong><br />
\t\t\t\t";
            // line 44
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_FULL", [], "any", false, false, false, 44);
            echo "</p>
\t\t\t<div class=\"content\">";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE", [], "any", false, false, false, 45)) {
                echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE", [], "any", false, false, false, 45);
            } else {
                echo "<span class=\"error\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                echo "</span>";
            }
            echo "</div>
\t\t\t<div id=\"message_";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MSG_ID", [], "any", false, false, false, 46);
            echo "\" style=\"display: none;\">";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "DECODED_MESSAGE", [], "any", false, false, false, 46);
            echo "</div>
\t\t</div>

\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>

";
        // line 54
    }

    public function getTemplateName()
    {
        return "ucp_pm_history.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 54,  209 => 52,  195 => 46,  185 => 45,  179 => 44,  170 => 43,  167 => 42,  166 => 41,  163 => 40,  158 => 37,  156 => 36,  146 => 31,  122 => 30,  118 => 28,  115 => 27,  114 => 26,  109 => 23,  106 => 22,  104 => 21,  101 => 20,  90 => 18,  86 => 17,  75 => 14,  71 => 13,  66 => 11,  61 => 8,  60 => 7,  53 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_history.html", "");
    }
}
