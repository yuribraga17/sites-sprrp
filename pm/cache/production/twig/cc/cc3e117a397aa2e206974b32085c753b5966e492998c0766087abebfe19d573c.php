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

/* posting_topic_review.html */
class __TwigTemplate_cf27d760ffc1e0ae3384159648cf0cc59b726b0190520ae71a62dd447f8346f5 extends \Twig\Template
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
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REVIEW");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " ";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "
</h3>

<div id=\"topicreview\">
<script>
\tbbcodeEnabled = ";
        // line 9
        echo ($context["S_BBCODE_ALLOWED"] ?? null);
        echo ";
</script>
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_review_row", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 12
            echo "
\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_IGNORE_POST", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "L_IGNORE_POST", [], "any", false, false, false, 16);
                echo "
\t";
            } else {
                // line 18
                echo "\t<div class=\"post ";
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_ROW_COUNT", [], "any", false, false, false, 18) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 18) == ($context["REPORTED_POST_ID"] ?? null))) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 21
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 22);
            echo "\">
\t\t\t<h3><a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MINI_POST", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_SUBJECT", [], "any", false, false, false, 23);
            echo "</a></h3>

\t\t\t";
            // line 25
            if (((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 25) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 25)) || twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 25))) {
                // line 26
                echo "\t\t\t<ul class=\"posts-buttons\">
\t\t\t";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 29);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
                    echo "\">
\t\t\t\t\t\t<span>";
                    // line 30
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
                    echo "</span><i class=\"fa fa-question\"></i>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 34
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 34) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 34))) {
                    // line 35
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 36);
                    echo ", '";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 36);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("WROTE"), "js");
                    echo "');\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR", [], "any", false, false, false, 36);
                    echo "\">
\t\t\t\t\t\t<span>";
                    // line 37
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR", [], "any", false, false, false, 37);
                    echo "</span><i class=\"fa fa-quote-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 41
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 43
            echo "
\t\t\t";
            // line 44
            // line 45
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 46
            if (($context["S_IS_BOT"] ?? null)) {
                // line 47
                echo "\t\t\t\t\t<span><i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 47);
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 49
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MINI_POST", [], "any", false, false, false, 49);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 49);
                echo "\">
\t\t\t\t\t\t<i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 50);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo "<strong>";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR_FULL", [], "any", false, false, false, 53);
            echo "</strong>";
            echo " &raquo; ";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_DATE", [], "any", false, false, false, 53);
            echo "
\t\t\t</p>
\t\t\t";
            // line 55
            // line 56
            echo "
\t\t\t<div class=\"content\">";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MESSAGE", [], "any", false, false, false, 57);
            echo "</div>

\t\t\t";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 59)) {
                // line 60
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 61
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "attachment", [], "any", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 63
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 63);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 67
            echo "
\t\t\t";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 68) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 68))) {
                // line 69
                echo "\t\t\t\t<div id=\"message_";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 69);
                echo "\" style=\"display: none;\">";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 69);
                echo "</div>
\t\t\t";
            }
            // line 71
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 75,  257 => 71,  249 => 69,  247 => 68,  244 => 67,  240 => 65,  231 => 63,  227 => 62,  223 => 61,  220 => 60,  218 => 59,  213 => 57,  210 => 56,  209 => 55,  197 => 53,  191 => 50,  184 => 49,  178 => 47,  176 => 46,  173 => 45,  172 => 44,  169 => 43,  165 => 41,  156 => 37,  144 => 36,  141 => 35,  138 => 34,  131 => 30,  125 => 29,  122 => 28,  120 => 27,  117 => 26,  115 => 25,  108 => 23,  104 => 22,  101 => 21,  87 => 18,  82 => 16,  78 => 14,  76 => 13,  73 => 12,  69 => 11,  64 => 9,  53 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_topic_review.html", "");
    }
}
