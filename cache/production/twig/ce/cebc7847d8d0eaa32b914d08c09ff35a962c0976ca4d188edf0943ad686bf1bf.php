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

/* search_body.html */
class __TwigTemplate_3e04191a42f33453523e0bd4da34c5372691e8960f63bef4a50252d923326ff1 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">
\t\t
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
        $this->loadTemplate("breadcrumbs.html", "search_body.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"solo\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
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
\t\t<form method=\"get\" action=\"";
        // line 25
        echo ($context["S_SEARCH_ACTION"] ?? null);
        echo "\" data-focus=\"keywords\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<h3>";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_QUERY");
        echo "</h3>

\t\t\t";
        // line 31
        // line 32
        echo "\t\t\t<fieldset>
\t\t\t";
        // line 33
        // line 34
        echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"keywords\">";
        // line 35
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span></dt>
\t\t\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"keywords\" id=\"keywords\" size=\"40\" title=\"";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
        echo "\" /></dd>
\t\t\t\t<dd><label for=\"terms1\"><input type=\"radio\" name=\"terms\" id=\"terms1\" value=\"all\" checked=\"checked\" /> ";
        // line 37
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ALL_TERMS");
        echo "</label></dd>
\t\t\t\t<dd><label for=\"terms2\"><input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\" /> ";
        // line 38
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ANY_TERMS");
        echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"author\">";
        // line 41
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_AUTHOR");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span></dt>
\t\t\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"author\" id=\"author\" size=\"40\" title=\"";
        // line 42
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_AUTHOR");
        echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
        // line 44
        // line 45
        echo "\t\t\t</fieldset>
\t\t\t";
        // line 46
        // line 47
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel bg2\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
        // line 54
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_OPTIONS");
        echo "</h3>

\t\t\t";
        // line 56
        // line 57
        echo "\t\t\t<fieldset>
\t\t\t";
        // line 58
        // line 59
        echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"search_forum\">";
        // line 60
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FORUMS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span></dt>
\t\t\t\t<dd><select name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FORUMS");
        echo "\">";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"search_child1\">";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SUBFORUMS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"search_child1\"><input type=\"radio\" name=\"sc\" id=\"search_child1\" value=\"1\" checked=\"checked\" /> ";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t\t\t<label for=\"search_child2\"><input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\" /> ";
        // line 67
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"sf1\">";
        // line 71
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_WITHIN");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><label for=\"sf1\"><input type=\"radio\" name=\"sf\" id=\"sf1\" value=\"all\" checked=\"checked\" /> ";
        // line 72
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TITLE_MSG");
        echo "</label></dd>
\t\t\t\t<dd><label for=\"sf2\"><input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\" /> ";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_MSG_ONLY");
        echo "</label></dd>
\t\t\t\t<dd><label for=\"sf3\"><input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\" /> ";
        // line 74
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TITLE_ONLY");
        echo "</label></dd>
\t\t\t\t<dd><label for=\"sf4\"><input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\" /> ";
        // line 75
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FIRST_POST");
        echo "</label></dd>
\t\t\t</dl>

\t\t\t";
        // line 78
        // line 79
        echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
        // line 80
        // line 81
        echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"show_results1\">";
        // line 83
        echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_RESULTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"show_results1\"><input type=\"radio\" name=\"sr\" id=\"show_results1\" value=\"posts\" checked=\"checked\" /> ";
        // line 85
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
        echo "</label>
\t\t\t\t\t<label for=\"show_results2\"><input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\" /> ";
        // line 86
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
        echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"sd\">";
        // line 90
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESULT_SORT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd>";
        // line 91
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "&nbsp;
\t\t\t\t\t<label for=\"sa\"><input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\" /> ";
        // line 92
        echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_ASCENDING");
        echo "</label>
\t\t\t\t\t<label for=\"sd\"><input type=\"radio\" name=\"sd\" id=\"sd-a\" value=\"d\" checked=\"checked\" /> ";
        // line 93
        echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_DESCENDING");
        echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label>";
        // line 97
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESULT_DAYS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd>";
        // line 98
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"ch\">";
        // line 102
        echo ($this->extensions['phpbb\template\twig\extension']->lang("RETURN_FIRST") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label>
\t\t\t\t\t<br><span>";
        // line 103
        echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_FIRST_EXPLAIN");
        echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t<input class=\"inputbox\" id=\"ch\" name=\"ch\" type=\"number\" value=\"";
        // line 106
        echo ($context["DEFAULT_RETURN_CHARS"] ?? null);
        echo "\" min=\"0\" max=\"9999\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_FIRST");
        echo "\">
\t\t\t\t\t<br>
\t\t\t\t\t";
        // line 108
        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_CHARACTERS");
        echo "
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
        // line 111
        // line 112
        echo "\t\t\t</fieldset>
\t\t\t";
        // line 113
        // line 114
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel bg3\">
\t\t\t<div class=\"inner\">

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 122
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 123
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
        echo "\" class=\"button1\" />
\t\t\t</fieldset>

\t\t\t</div>
\t\t</div>

\t\t</form>
\t\t";
        // line 130
        // line 131
        echo "
\t\t";
        // line 132
        // line 133
        echo "\t\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "recentsearch", [], "any", false, false, false, 133))) {
            // line 134
            echo "\t\t<div class=\"forumbg forumbg-table\">
\t\t\t<div class=\"inner\">

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th colspan=\"2\" class=\"name\">";
            // line 140
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECENT_SEARCHES");
            echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "recentsearch", [], "any", false, false, false, 144));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 145
                echo "\t\t\t\t<tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["recentsearch"], "S_ROW_COUNT", [], "any", false, false, false, 145) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t\t\t<td><a href=\"";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["recentsearch"], "U_KEYWORDS", [], "any", false, false, false, 146);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recentsearch"], "KEYWORDS", [], "any", false, false, false, 146);
                echo "</a></td>
\t\t\t\t\t<td class=\"active\">";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["recentsearch"], "TIME", [], "any", false, false, false, 147);
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 150
                echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"2\">";
                // line 151
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 160
        echo "
\t\t";
        // line 161
        // line 162
        echo "
\t</div>
</div>

";
        // line 166
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 166)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 166,  414 => 162,  413 => 161,  410 => 160,  402 => 154,  393 => 151,  390 => 150,  382 => 147,  376 => 146,  367 => 145,  362 => 144,  355 => 140,  347 => 134,  344 => 133,  343 => 132,  340 => 131,  339 => 130,  329 => 123,  323 => 122,  313 => 114,  312 => 113,  309 => 112,  308 => 111,  302 => 108,  295 => 106,  289 => 103,  285 => 102,  278 => 98,  273 => 97,  266 => 93,  262 => 92,  258 => 91,  253 => 90,  246 => 86,  242 => 85,  236 => 83,  232 => 81,  231 => 80,  228 => 79,  227 => 78,  221 => 75,  217 => 74,  213 => 73,  209 => 72,  204 => 71,  197 => 67,  193 => 66,  187 => 64,  179 => 61,  172 => 60,  169 => 59,  168 => 58,  165 => 57,  164 => 56,  159 => 54,  150 => 47,  149 => 46,  146 => 45,  145 => 44,  140 => 42,  133 => 41,  127 => 38,  123 => 37,  119 => 36,  112 => 35,  109 => 34,  108 => 33,  105 => 32,  104 => 31,  99 => 29,  92 => 25,  89 => 24,  88 => 23,  76 => 14,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search_body.html", "");
    }
}
