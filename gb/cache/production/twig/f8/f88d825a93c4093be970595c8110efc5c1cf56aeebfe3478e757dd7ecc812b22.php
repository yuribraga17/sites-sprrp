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

/* breadcrumbs.html */
class __TwigTemplate_abb0abd54608b10e48b40bfd7aa4321a5924991bc1879889df987c5809e6b7f0 extends \Twig\Template
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
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 2
        $context["navlink_position"] = 1;
        // line 3
        echo "
";
        // line 4
        // line 5
        echo "
<li class=\"breadcrumbs rightside\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t";
        // line 8
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 9
            echo "\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t";
        }
        // line 11
        echo "
\t";
        // line 12
        // line 13
        echo "\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"fa fa-home\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 16
            echo "\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 16)));
            // line 17
            echo "\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 17))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 17)));
            // line 18
            echo "
\t\t";
            // line 19
            // line 20
            echo "\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 20)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 20);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t";
            // line 21
            // line 22
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t";
        // line 24
        // line 25
        echo "</li>

";
        // line 27
    }

    public function getTemplateName()
    {
        return "breadcrumbs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  127 => 25,  126 => 24,  123 => 23,  117 => 22,  116 => 21,  100 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  86 => 15,  69 => 13,  68 => 12,  65 => 11,  52 => 9,  50 => 8,  45 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "breadcrumbs.html", "");
    }
}
