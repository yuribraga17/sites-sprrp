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

/* memberlist_team.html */
class __TwigTemplate_0b4d7464ac31d01633f2ff4ff4a6ca6268a9274ef4d980a4bf355446dcd31478 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "memberlist_team.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">

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
        $this->loadTemplate("breadcrumbs.html", "memberlist_team.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"solo\">";
        // line 14
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>
\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<form method=\"post\" action=\"";
        // line 23
        echo ($context["S_MODE_ACTION"] ?? null);
        echo "\">

\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "group", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 26
            echo "\t\t<div class=\"forumbg forumbg-table\">
\t\t\t<div class=\"inner\">

\t\t\t<table class=\"table1\" id=\"team\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\" data-dfn=\"";
            // line 32
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\"><span class=\"rank-img\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo "&nbsp;</span>";
            if (twig_get_attribute($this->env, $this->source, $context["group"], "U_GROUP", [], "any", false, false, false, 32)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "U_GROUP", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "GROUP_NAME", [], "any", false, false, false, 32);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["group"], "GROUP_NAME", [], "any", false, false, false, 32);
            }
            echo "</th>
\t\t\t\t<th class=\"info\">";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIMARY_GROUP");
            echo "</th>
\t\t\t\t";
            // line 34
            if (($context["S_DISPLAY_MODERATOR_FORUMS"] ?? null)) {
                echo "<th class=\"info\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
                echo "</th>";
            }
            // line 35
            echo "\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "user", [], "any", false, false, false, 38));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 39
                echo "\t\t\t<tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "S_ROW_COUNT", [], "any", false, false, false, 39) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (twig_get_attribute($this->env, $this->source, $context["user"], "S_INACTIVE", [], "any", false, false, false, 39)) {
                    echo " inactive";
                }
                echo "\">
\t\t\t\t<td>";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["user"], "RANK_IMG", [], "any", false, false, false, 40)) {
                    echo "<span class=\"rank-img\">";
                    echo twig_get_attribute($this->env, $this->source, $context["user"], "RANK_IMG", [], "any", false, false, false, 40);
                    echo "</span>";
                } else {
                    echo "<span class=\"rank-img\">";
                    echo twig_get_attribute($this->env, $this->source, $context["user"], "RANK_TITLE", [], "any", false, false, false, 40);
                    echo "</span>";
                }
                echo twig_get_attribute($this->env, $this->source, $context["user"], "USERNAME_FULL", [], "any", false, false, false, 40);
                if (twig_get_attribute($this->env, $this->source, $context["user"], "S_INACTIVE", [], "any", false, false, false, 40)) {
                    echo " (";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INACTIVE");
                    echo ")";
                }
                echo "</td>
\t\t\t\t<td class=\"info\">";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["user"], "U_GROUP", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t\t\t\t<a";
                    if (twig_get_attribute($this->env, $this->source, $context["user"], "GROUP_COLOR", [], "any", false, false, false, 42)) {
                        echo " style=\"font-weight: bold; color: #";
                        echo twig_get_attribute($this->env, $this->source, $context["user"], "GROUP_COLOR", [], "any", false, false, false, 42);
                        echo "\"";
                    }
                    echo " href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["user"], "U_GROUP", [], "any", false, false, false, 42);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["user"], "GROUP_NAME", [], "any", false, false, false, 42);
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["user"], "GROUP_NAME", [], "any", false, false, false, 44);
                    echo "
\t\t\t\t\t";
                }
                // line 45
                echo "</td>
\t\t\t\t";
                // line 46
                if (($context["S_DISPLAY_MODERATOR_FORUMS"] ?? null)) {
                    // line 47
                    echo "\t\t\t\t\t<td class=\"info\">";
                    if (twig_get_attribute($this->env, $this->source, $context["user"], "FORUM_OPTIONS", [], "any", false, false, false, 47)) {
                        echo "<select style=\"width: 100%;\">";
                        echo twig_get_attribute($this->env, $this->source, $context["user"], "FORUMS", [], "any", false, false, false, 47);
                        echo "</select>";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["user"], "FORUMS", [], "any", false, false, false, 47)) {
                        echo twig_get_attribute($this->env, $this->source, $context["user"], "FORUMS", [], "any", false, false, false, 47);
                    } else {
                        echo "-";
                    }
                    echo "</td>
\t\t\t\t";
                }
                // line 49
                echo "\t\t\t</tr>
\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 51
                echo "\t\t\t<tr class=\"bg1\">
\t\t\t\t<td colspan=\"3\"><strong>";
                // line 52
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MEMBERS");
                echo "</strong></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
\t\t</form>

\t\t";
        // line 64
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_team.html", 64)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 65
        echo "
\t</div>
</div>

";
        // line 69
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_team.html", 69)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_team.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 69,  260 => 65,  248 => 64,  243 => 61,  232 => 55,  223 => 52,  220 => 51,  214 => 49,  200 => 47,  198 => 46,  195 => 45,  189 => 44,  175 => 42,  173 => 41,  155 => 40,  143 => 39,  138 => 38,  133 => 35,  127 => 34,  123 => 33,  105 => 32,  97 => 26,  93 => 25,  88 => 23,  76 => 14,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_team.html", "");
    }
}
