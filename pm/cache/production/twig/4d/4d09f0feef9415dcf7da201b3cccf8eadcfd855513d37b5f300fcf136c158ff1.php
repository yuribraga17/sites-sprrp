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

/* pagination.html */
class __TwigTemplate_4243197e27151a34ff0e6e2471d7e58bd520e9c4902e6cadc5af7c1bf0196fbd extends \Twig\Template
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
        echo "<ul>
";
        // line 2
        if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
            // line 3
            echo "\t<li class=\"dropdown-container dropdown-button-control dropdown-page-jump page-jump\">
\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_PAGE_CLICK");
            echo "\" role=\"button\">";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t<li>";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_PAGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</li>
\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" max=\"999999\" title=\"";
            // line 10
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_PAGE");
            echo "\" class=\"inputbox tiny\" data-per-page=\"";
            echo ($context["PER_PAGE"] ?? null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html_attr");
            echo "\" data-start-name=\"";
            echo ($context["START_NAME"] ?? null);
            echo "\" />
\t\t\t\t\t<input class=\"button2\" value=\"";
            // line 11
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>";
        }
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 15)) {
                echo "<li class=\"previous\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 15);
                echo "\" rel=\"prev\" role=\"button\"><i class=\"fa fa-chevron-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\"></i></a></li>";
            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 15)) {
                echo "<li class=\"active\"><span>";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 15);
                echo "</span></li>";
            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 15)) {
                echo "<li class=\"ellipsis\" role=\"separator\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                echo "</span></li>";
            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 15)) {
                echo "<li class=\"next\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 15);
                echo "\" rel=\"next\" role=\"button\"><i class=\"fa fa-chevron-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\"></i></a></li>";
            } else {
                echo "<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 15);
                echo "\" role=\"button\">";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 15);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  78 => 15,  70 => 11,  60 => 10,  54 => 8,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pagination.html", "");
    }
}
