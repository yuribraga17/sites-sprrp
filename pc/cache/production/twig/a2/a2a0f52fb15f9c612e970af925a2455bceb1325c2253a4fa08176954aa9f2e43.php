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

/* forumlist_body.html */
class __TwigTemplate_d7c50537f08606c3b9c799a4ce2c6542100d9ec574a7af2b77f252a91d055742 extends \Twig\Template
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 3) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 3)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 3))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 11) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 11)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 11))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">

\t\t\t\t\t";
                // line 17
                // line 18
                echo "
\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 20)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 20);
                    echo "</a>";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\">";
                // line 23
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</dd>
\t\t\t\t\t</dl>

\t\t\t\t\t";
                // line 26
                // line 27
                echo "
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 32
            echo "\t";
            // line 33
            echo "
\t";
            // line 34
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t";
                // line 36
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 37
                // line 38
                echo "\t\t\t<dl class=\"icon ";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMG_STYLE", [], "any", false, false, false, 38);
                echo "\">
\t\t\t\t<dt title=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 39);
                echo "\">
\t\t\t\t\t";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 40)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 40);
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 41
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 42
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 42))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 42);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 42);
                    echo "\"><img src=\"";
                    echo ($context["T_THEME_PATH"] ?? null);
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 42);
                    echo "\" /></a> -->";
                }
                // line 43
                echo "
\t\t\t\t\t\t";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 44)) {
                    echo "<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 44);
                    echo "</span>";
                }
                // line 45
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 45);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 45);
                echo "</a>
\t\t\t\t\t\t";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 46)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 46);
                }
                // line 47
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_MODERATOR_STR", [], "any", false, false, false, 48);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 48);
                    echo "
\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 50)) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LIST_SUBFORUMS", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "\t\t\t\t\t\t\t";
                    // line 52
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_SUBFORUM_STR", [], "any", false, false, false, 52);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 53));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t";
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 54);
                        echo "\" class=\"subforum";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 54)) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 54)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 54);
                        echo "</a>";
                        if ( !twig_get_attribute($this->env, $this->source, $context["subforum"], "S_LAST_ROW", [], "any", false, false, false, 54)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        }
                        // line 55
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "\t\t\t\t\t\t\t";
                    // line 57
                    echo "\t\t\t\t\t\t";
                }
                // line 58
                echo "
\t\t\t\t\t\t";
                // line 59
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 60
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 61
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 61)) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 62);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !twig_get_attribute($this->env, $this->source,                     // line 63
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 63) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 63))) {
                        // line 64
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 64);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "\t\t\t\t\t<dd class=\"redirect\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 71);
                    echo "</dd>
\t\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 72
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 73);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 74);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 76)) {
                        // line 77
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 77);
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-gavel\"></i></a>
\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 78
$context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 78)) {
                        // line 79
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 79);
                        echo "\" class=\"posts-approve\"><i class=\"fa fa-gavel\"></i></a>
\t\t\t\t\t\t";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 81)) {
                        // line 82
                        echo "\t\t\t\t\t\t\t<dfn>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t";
                        // line 83
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 83)) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t";
                            // line 85
                            echo "\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 85);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 85);
                            echo "\" class=\"lastsubject\">";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 85);
                            echo "</a>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo " 
\t\t\t\t\t\t\t";
                        // line 88
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 88);
                        // line 89
                        echo "\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
                        // line 90
                        if (( !($context["S_IS_BOT"] ?? null) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 90))) {
                            // line 91
                            echo "\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 91);
                            echo "\" class=\"lastpost-last\"><i class=\"fa fa-arrow-";
                            echo ($context["S_CONTENT_FLOW_END"] ?? null);
                            echo "\"></i></a>
\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 93);
                        echo "\"><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 93);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 93);
                        echo "</time></a>
\t\t\t\t\t\t";
                    } else {
                        // line 95
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 95)) {
                            // line 96
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 96));
                            echo "
\t\t\t\t\t\t\t";
                        } else {
                            // line 98
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 100
                        echo "\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 105
                echo "\t\t\t</dl>
\t\t\t";
                // line 106
                // line 107
                echo "\t\t</li>
\t\t";
                // line 108
                // line 109
                echo "\t";
            }
            // line 110
            echo "
\t";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 111)) {
                // line 112
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 116
                // line 117
                echo "\t";
            }
            // line 118
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 122
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 122,  427 => 120,  421 => 118,  418 => 117,  417 => 116,  411 => 112,  409 => 111,  406 => 110,  403 => 109,  402 => 108,  399 => 107,  398 => 106,  395 => 105,  391 => 103,  387 => 101,  384 => 100,  378 => 98,  372 => 96,  369 => 95,  359 => 93,  351 => 91,  349 => 90,  346 => 89,  342 => 88,  339 => 87,  328 => 85,  326 => 84,  324 => 83,  319 => 82,  316 => 81,  310 => 79,  308 => 78,  303 => 77,  301 => 76,  294 => 74,  287 => 73,  285 => 72,  277 => 71,  275 => 70,  271 => 68,  267 => 66,  258 => 64,  256 => 63,  248 => 62,  246 => 61,  243 => 60,  241 => 59,  238 => 58,  235 => 57,  233 => 56,  227 => 55,  205 => 54,  201 => 53,  195 => 52,  193 => 51,  190 => 50,  181 => 48,  178 => 47,  173 => 46,  166 => 45,  160 => 44,  157 => 43,  139 => 42,  136 => 41,  130 => 40,  126 => 39,  121 => 38,  120 => 37,  117 => 36,  115 => 35,  113 => 34,  110 => 33,  108 => 32,  101 => 27,  100 => 26,  94 => 23,  90 => 22,  86 => 21,  74 => 20,  70 => 18,  69 => 17,  62 => 12,  59 => 11,  58 => 10,  55 => 9,  48 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
