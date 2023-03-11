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

/* viewonline_body.html */
class __TwigTemplate_75ed0cf4f73329367a8cd7eacb6bed66ee01c813bef0619cfd73e255c963b9a4 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewonline_body.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "viewonline_body.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title-sm\">
\t\t\t<h2 class=\"viewonline-title\">";
        // line 14
        echo ($context["TOTAL_REGISTERED_USERS_ONLINE"] ?? null);
        echo "</h2>

\t\t\t<p id=\"subhead-more\">
\t\t\t\t";
        // line 17
        echo ($context["TOTAL_GUEST_USERS_ONLINE"] ?? null);
        if (($context["S_SWITCH_GUEST_DISPLAY"] ?? null)) {
            echo " &bull; <a href=\"";
            echo ($context["U_SWITCH_GUEST_DISPLAY"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SWITCH_GUEST_DISPLAY");
            echo "</a>";
        }
        // line 18
        echo "\t\t\t</p>
\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
        // line 29
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 29))) {
            echo " 
\t\t\t\t\t";
            // line 30
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewonline_body.html", 30)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 31
            echo "\t\t\t\t";
        } else {
            echo " 
\t\t\t\t\t";
            // line 32
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"forumbg forumbg-table\">
\t\t\t<div class=\"inner\">

\t\t\t<table class=\"table1\">

\t\t\t";
        // line 42
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "user_row", [], "any", false, false, false, 42))) {
            // line 43
            echo "\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\"><a href=\"";
            // line 45
            echo ($context["U_SORT_USERNAME"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "</a></th>
\t\t\t\t\t<th class=\"info\"><a href=\"";
            // line 46
            echo ($context["U_SORT_LOCATION"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCATION");
            echo "</a></th>
\t\t\t\t\t<th class=\"active\"><a href=\"";
            // line 47
            echo ($context["U_SORT_UPDATED"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_UPDATED");
            echo "</a></th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "user_row", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["user_row"]) {
                // line 52
                echo "\t\t\t\t<tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["user_row"], "S_ROW_COUNT", [], "any", false, false, false, 52) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t\t\t<td>";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["user_row"], "USERNAME_FULL", [], "any", false, false, false, 53);
                if (twig_get_attribute($this->env, $this->source, $context["user_row"], "USER_IP", [], "any", false, false, false, 53)) {
                    echo " <span style=\"float: ";
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo ";\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IP");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["user_row"], "U_USER_IP", [], "any", false, false, false, 53);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["user_row"], "USER_IP", [], "any", false, false, false, 53);
                    echo "</a> &#187; <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["user_row"], "U_WHOIS", [], "any", false, false, false, 53);
                    echo "\" onclick=\"popup(this.href, 750, 500); return false;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WHOIS");
                    echo "</a></span>";
                }
                // line 54
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["user_row"], "USER_BROWSER", [], "any", false, false, false, 54)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["user_row"], "USER_BROWSER", [], "any", false, false, false, 54);
                }
                echo "</td>
\t\t\t\t\t<td class=\"info\"><a href=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["user_row"], "U_FORUM_LOCATION", [], "any", false, false, false, 55);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["user_row"], "FORUM_LOCATION", [], "any", false, false, false, 55);
                echo "</a></td>
\t\t\t\t\t<td class=\"active\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["user_row"], "LASTUPDATE", [], "any", false, false, false, 56);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t<tbody>
\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"3\">";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_ONLINE_USERS");
            if (($context["S_SWITCH_GUEST_DISPLAY"] ?? null)) {
                echo " &bull; <a href=\"";
                echo ($context["U_SWITCH_GUEST_DISPLAY"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SWITCH_GUEST_DISPLAY");
                echo "</a>";
            }
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 65
        echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t</div>
\t\t</div>

\t\t";
        // line 71
        if (($context["LEGEND"] ?? null)) {
            echo "<p><em>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["LEGEND"] ?? null);
            echo "</em></p>";
        }
        // line 72
        echo "
\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
        // line 75
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 75))) {
            echo " 
\t\t\t\t\t";
            // line 76
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewonline_body.html", 76)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 77
            echo "\t\t\t\t";
        } else {
            echo " 
\t\t\t\t\t";
            // line 78
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 80
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 83
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewonline_body.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 84
        echo "
\t</div>
</div>

";
        // line 88
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewonline_body.html", 88)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewonline_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 88,  306 => 84,  294 => 83,  289 => 80,  284 => 78,  279 => 77,  267 => 76,  263 => 75,  258 => 72,  249 => 71,  241 => 65,  228 => 62,  224 => 60,  221 => 59,  212 => 56,  206 => 55,  198 => 54,  180 => 53,  171 => 52,  167 => 51,  158 => 47,  152 => 46,  146 => 45,  142 => 43,  140 => 42,  130 => 34,  125 => 32,  120 => 31,  108 => 30,  104 => 29,  91 => 18,  82 => 17,  76 => 14,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewonline_body.html", "");
    }
}
