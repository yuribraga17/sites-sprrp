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

/* notification_dropdown.html */
class __TwigTemplate_fe6a860375156cf10a97b3b031b0d3e3c0956a32f5dfdc09eb130cffc973ea37 extends \Twig\Template
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
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">
\t\t\t";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
        echo "
\t\t\t<span class=\"header_settings\"><a href=\"";
        // line 6
        echo ($context["U_NOTIFICATION_SETTINGS"] ?? null);
        echo "\"><i class=\"fa fa-cog\"></i></a>";
        if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_MARK_ALL_NOTIFICATIONS"] ?? null);
            echo "\" data-ajax=\"notification.mark_all_read\"><i class=\"fa fa-check\"></i></a>";
        }
        echo "</span>
\t\t</div>

\t\t<ul>
\t\t\t";
        // line 10
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notifications", [], "any", false, false, false, 10))) {
            // line 11
            echo "\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notifications", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 16
            echo "\t\t\t\t<li class=\"";
            if ( !twig_get_attribute($this->env, $this->source, $context["notifications"], "UNREAD", [], "any", false, false, false, 16)) {
                echo " bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "STYLING", [], "any", false, false, false, 16)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "STYLING", [], "any", false, false, false, 16);
            }
            if ( !twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 16)) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 17)) {
                // line 18
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["notifications"], "UNREAD", [], "any", false, false, false, 18)) {
                    echo twig_get_attribute($this->env, $this->source, $context["notifications"], "U_MARK_READ", [], "any", false, false, false, 18);
                    echo "\" data-real-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 18);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 18);
                }
                echo "\">
\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "AVATAR", [], "any", false, false, false, 20)) {
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "AVATAR", [], "any", false, false, false, 20);
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            // line 21
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["notifications"], "FORMATTED_TITLE", [], "any", false, false, false, 22);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "REFERENCE", [], "any", false, false, false, 23)) {
                echo "<p class=\"notification-reference\">";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "REFERENCE", [], "any", false, false, false, 23);
                echo "</p>";
            }
            // line 24
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "FORUM", [], "any", false, false, false, 24)) {
                echo "<p class=\"notification-forum\">";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "FORUM", [], "any", false, false, false, 24);
                echo "</p>";
            }
            // line 25
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "REASON", [], "any", false, false, false, 25)) {
                echo "<p class=\"notification-reason\">";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "REASON", [], "any", false, false, false, 25);
                echo "</p>";
            }
            // line 26
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo twig_get_attribute($this->env, $this->source, $context["notifications"], "TIME", [], "any", false, false, false, 26);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "URL", [], "any", false, false, false, 28)) {
                echo "</a>";
            }
            // line 29
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["notifications"], "UNREAD", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["notifications"], "U_MARK_READ", [], "any", false, false, false, 30);
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
                echo "\"><i class=\"fa fa-check\"></i></a>
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 37
        echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
        echo "\"><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 37,  168 => 34,  161 => 32,  153 => 30,  150 => 29,  146 => 28,  140 => 26,  133 => 25,  126 => 24,  120 => 23,  116 => 22,  113 => 21,  104 => 20,  92 => 18,  90 => 17,  76 => 16,  71 => 15,  65 => 12,  62 => 11,  60 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "notification_dropdown.html", "");
    }
}
