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

/* index_body.html */
class __TwigTemplate_ec94c5c1d6bea1913b7b4ec5edbabb6f3ef5006abad2f87aa8ace7ad30c47abf extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-subhead-main\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead-main\">

\t\t\t<ul id=\"breadcrumbs-main\" role=\"menubar\">

\t\t\t\t<li class=\"font-icon responsive-menu dropdown-container";
        // line 9
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
        // line 14
        // line 15
        echo "
\t\t\t\t\t\t\t";
        // line 16
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t";
            // line 18
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 19
                echo "\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-self\"><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-history\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 22
                echo "\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-new\"><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file-text\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                echo " 
\t\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-unread\"><a href=\"";
                // line 25
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-unanswered\"><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-file-o\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"font-icon icon-search-active\"><a href=\"";
            // line 28
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-fire\"></i>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t\t<li class=\"separator site-menu\"></li>

\t\t\t\t\t\t\t";
        // line 32
        $location = "site_menu.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("site_menu.html", "index_body.html", 32)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 33
        echo "
\t\t\t\t\t\t\t";
        // line 34
        // line 35
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t";
        // line 39
        $location = "breadcrumbs.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("breadcrumbs.html", "index_body.html", 39)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 40
        echo "\t\t\t</ul>

\t\t\t";
        // line 42
        // line 43
        echo "\t\t\t";
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 44
            echo "\t\t\t\t<div id=\"subhead-minilist\">
\t\t\t\t\t<a href=\"";
            // line 45
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 48
        echo "\t\t\t";
        // line 49
        echo "
\t\t</div>
\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 57
        // line 58
        echo "
\t\t<div id=\"forumlist\">

\t\t\t<div id=\"forumlist-inner\">

\t\t\t\t";
        // line 63
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 63)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 64
        echo "
\t\t\t\t";
        // line 65
        // line 66
        echo "
\t\t\t\t";
        // line 67
        // line 68
        echo "
\t\t\t\t";
        // line 69
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["NEWEST_USER"] ?? null))) {
            // line 70
            echo "\t\t\t\t\t<div class=\"stat-block online-list\">
\t\t\t\t\t\t";
            // line 71
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 72
            echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 73
            // line 74
            echo "\t\t\t\t\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> <br />";
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 75
            if (($context["LEGEND"] ?? null)) {
                echo "<br /><em>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["LEGEND"] ?? null);
                echo "</em>";
            }
            // line 76
            echo "\t\t\t\t\t\t\t";
            // line 77
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p id=\"online-list-stat\">
\t\t\t\t\t\t\t";
            // line 79
            // line 80
            echo "\t\t\t\t\t\t\t";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 81
            // line 82
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 85
        echo "
\t\t\t\t";
        // line 86
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
            // line 87
            echo "\t\t\t\t\t<div class=\"stat-block online-list\">
\t\t\t\t\t\t";
            // line 88
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 89
            echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 90
            // line 91
            echo "\t\t\t\t\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> <br />";
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 92
            if (($context["LEGEND"] ?? null)) {
                echo "<br /><em>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["LEGEND"] ?? null);
                echo "</em>";
            }
            // line 93
            echo "\t\t\t\t\t\t\t";
            // line 94
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 97
        echo "
\t\t\t\t";
        // line 98
        // line 99
        echo "\t\t\t\t";
        if ((($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 99)))) {
            // line 100
            echo "\t\t\t\t\t<div class=\"stat-block birthday-list\">
\t\t\t\t\t\t<h3>";
            // line 101
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 103
            // line 104
            echo "\t\t\t\t\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 104))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 104));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 104);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 104) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 104);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 104)) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
            }
            // line 105
            echo "\t\t\t\t\t\t\t";
            // line 106
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 109
        echo "
\t\t\t\t";
        // line 110
        if ((($context["NEWEST_USER"] ?? null) &&  !($context["S_DISPLAY_ONLINE_LIST"] ?? null))) {
            // line 111
            echo "\t\t\t\t\t<div class=\"stat-block statistics\">
\t\t\t\t\t\t<h3>";
            // line 112
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 114
            // line 115
            echo "\t\t\t\t\t\t\t";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 116
            // line 117
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 120
        echo "
\t\t\t\t";
        // line 121
        // line 122
        echo "
\t\t\t</div>

\t\t</div>

\t\t";
        // line 127
        // line 128
        echo "
\t</div>
</div>
\t
";
        // line 132
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 132)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 132,  432 => 128,  431 => 127,  424 => 122,  423 => 121,  420 => 120,  415 => 117,  414 => 116,  403 => 115,  402 => 114,  397 => 112,  394 => 111,  392 => 110,  389 => 109,  384 => 106,  382 => 105,  356 => 104,  355 => 103,  350 => 101,  347 => 100,  344 => 99,  343 => 98,  340 => 97,  335 => 94,  333 => 93,  324 => 92,  313 => 91,  312 => 90,  309 => 89,  297 => 88,  294 => 87,  292 => 86,  289 => 85,  284 => 82,  283 => 81,  272 => 80,  271 => 79,  267 => 77,  265 => 76,  256 => 75,  245 => 74,  244 => 73,  241 => 72,  229 => 71,  226 => 70,  224 => 69,  221 => 68,  220 => 67,  217 => 66,  216 => 65,  213 => 64,  201 => 63,  194 => 58,  193 => 57,  183 => 49,  181 => 48,  173 => 45,  170 => 44,  167 => 43,  166 => 42,  162 => 40,  150 => 39,  144 => 35,  143 => 34,  140 => 33,  128 => 32,  124 => 30,  117 => 28,  110 => 27,  103 => 25,  98 => 24,  90 => 22,  87 => 21,  79 => 19,  77 => 18,  74 => 17,  72 => 16,  69 => 15,  68 => 14,  58 => 9,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
