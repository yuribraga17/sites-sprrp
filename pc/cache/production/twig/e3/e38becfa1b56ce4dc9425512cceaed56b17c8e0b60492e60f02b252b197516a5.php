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

/* ucp_main_front.html */
class __TwigTemplate_2c8be8d9c1d79a9a6eb8770f19d6a1ba6705a6c1ed7d9400e628a5e83b224ff5 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_WELCOME");
        echo "</p>

";
        // line 10
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 10))) {
            // line 11
            echo "\t<h3>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("IMPORTANT_NEWS");
            echo "</h3>

\t<ul class=\"topiclist cplist two-long-columns\">
\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 15
                echo "\t\t<li class=\"row";
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_ROW_COUNT", [], "any", false, false, false, 15) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 16);
                echo "\">
\t\t\t\t<dt ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 17)) {
                    echo "style=\"background-image: url(";
                    echo ($context["T_ICONS_PATH"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 17);
                    echo "); background-repeat: no-repeat;\"";
                }
                echo ">
\t\t\t\t\t";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 18)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 18);
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 19
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD", [], "any", false, false, false, 20)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 20);
                    echo "\">";
                    echo ($context["NEWEST_POST_IMG"] ?? null);
                    echo "</a> ";
                }
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 20);
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 20);
                echo "</a><br />
\t\t\t\t\t\t";
                // line 21
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 24));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 25)) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 26)) {
                            echo "<li class=\"active\"><span>";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 26);
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 27
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 27)) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 28
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 28)) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 29);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 29);
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 31
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 36)) {
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 36);
                    echo " ";
                }
                // line 37
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 37);
                echo " &raquo; ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 37);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 40)) {
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 40);
                    echo " ";
                }
                // line 41
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 41);
                echo " &laquo; <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 41);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 41);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 45
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 45);
                echo "
\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 46);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                echo "\">";
                echo ($context["LAST_POST_IMG"] ?? null);
                echo "</a> <br />";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 46);
                echo "</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t</ul>
";
        }
        // line 53
        echo "
\t<h3>";
        // line 54
        echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_DETAILS");
        echo "</h3>

\t";
        // line 56
        // line 57
        echo "
\t<dl class=\"details\">
\t\t<dt>";
        // line 59
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["JOINED"] ?? null);
        echo "</dd>
\t\t<dt>";
        // line 60
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["LAST_VISIT_YOU"] ?? null);
        echo "</dd>
\t\t<dt>";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        if (($context["POSTS_PCT"] ?? null)) {
            echo ($context["POSTS"] ?? null);
            if (($context["S_DISPLAY_SEARCH"] ?? null)) {
                echo " | <strong><a href=\"";
                echo ($context["U_SEARCH_USER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_YOUR_POSTS");
                echo "</a></strong>";
            }
            echo "<br />(";
            echo ($context["POSTS_DAY"] ?? null);
            echo " / ";
            echo ($context["POSTS_PCT"] ?? null);
            echo ")";
        } else {
            echo ($context["POSTS"] ?? null);
        }
        echo "</dd>
\t\t";
        // line 62
        if ((($context["ACTIVE_FORUM"] ?? null) != "")) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><strong><a href=\"";
            echo ($context["U_ACTIVE_FORUM"] ?? null);
            echo "\">";
            echo ($context["ACTIVE_FORUM"] ?? null);
            echo "</a></strong><br />(";
            echo ($context["ACTIVE_FORUM_POSTS"] ?? null);
            echo " / ";
            echo ($context["ACTIVE_FORUM_PCT"] ?? null);
            echo ")</dd>";
        }
        // line 63
        echo "\t\t";
        if ((($context["ACTIVE_TOPIC"] ?? null) != "")) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_TOPIC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><strong><a href=\"";
            echo ($context["U_ACTIVE_TOPIC"] ?? null);
            echo "\">";
            echo ($context["ACTIVE_TOPIC"] ?? null);
            echo "</a></strong><br />(";
            echo ($context["ACTIVE_TOPIC_POSTS"] ?? null);
            echo " / ";
            echo ($context["ACTIVE_TOPIC_PCT"] ?? null);
            echo ")</dd>";
        }
        // line 64
        echo "\t\t";
        if (($context["WARNINGS"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YOUR_WARNINGS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd class=\"error\">";
            echo ($context["WARNING_IMG"] ?? null);
            echo " [";
            echo ($context["WARNINGS"] ?? null);
            echo "]</dd>";
        }
        // line 65
        echo "\t</dl>

\t";
        // line 67
        // line 68
        echo "
\t</div>
</div>

";
        // line 72
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_front.html", 72)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 72,  341 => 68,  340 => 67,  336 => 65,  324 => 64,  308 => 63,  293 => 62,  270 => 61,  263 => 60,  256 => 59,  252 => 57,  251 => 56,  246 => 54,  243 => 53,  239 => 51,  222 => 46,  214 => 45,  196 => 41,  191 => 40,  180 => 37,  175 => 36,  172 => 35,  167 => 32,  161 => 31,  151 => 29,  149 => 28,  143 => 27,  136 => 26,  133 => 25,  129 => 24,  125 => 22,  123 => 21,  109 => 20,  106 => 19,  100 => 18,  91 => 17,  87 => 16,  78 => 15,  74 => 14,  67 => 11,  65 => 10,  60 => 8,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_main_front.html", "");
    }
}
