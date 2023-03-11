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

/* viewtopic_print.html */
class __TwigTemplate_e1789218e0f3b7e90ff3fbcba1c3cd8081d5a8582fffda0130e8b0dc4fea48bd extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"robots\" content=\"noindex\">
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        echo ($context["SITENAME"] ?? null);
        echo " &bull; ";
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

<link href=\"";
        // line 10
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/print.css\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/bidi.css\" rel=\"stylesheet\">
";
        // line 12
        // line 13
        echo "</head>
<body id=\"phpbb\" class=\"";
        // line 14
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\">
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>

\t<div id=\"page-header\">
\t\t<h1>";
        // line 19
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t\t<p>";
        // line 20
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "<br /><a href=\"";
        echo ($context["U_FORUM"] ?? null);
        echo "\">";
        echo ($context["U_FORUM"] ?? null);
        echo "</a></p>

\t\t<h2>";
        // line 22
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</h2>
\t\t<p><a href=\"";
        // line 23
        echo ($context["U_TOPIC"] ?? null);
        echo "\">";
        echo ($context["U_TOPIC"] ?? null);
        echo "</a></p>
\t</div>

\t<div id=\"page-body\">
\t\t<div class=\"page-number page-number-top\">";
        // line 27
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</div>
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 29
            echo "\t\t\t<hr />
\t\t\t<div class=\"post\">
\t\t\t\t<h3>";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 31);
            echo "</h3>
\t\t\t\t<div class=\"date\">";
            // line 32
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 32);
            echo "</strong></div>
\t\t\t\t<div class=\"author\">";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR", [], "any", false, false, false, 33);
            echo "</strong></div>
\t\t\t\t<div class=\"content\">";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 34);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</div>

\t<div id=\"page-footer\">
\t\t<div class=\"page-number\">";
        // line 40
        echo ($context["S_TIMEZONE"] ?? null);
        echo "<br />";
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</div>
\t\t\t<div class=\"copyright\">
\t\t\t\t<p>
\t\t\t\t\t";
        // line 43
        echo ($context["CREDIT_LINE"] ?? null);
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 45
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 47
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "
\t\t\t\t\t</p>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</div>
\t</div>
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "viewtopic_print.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 50,  168 => 47,  165 => 46,  163 => 45,  158 => 43,  150 => 40,  145 => 37,  136 => 34,  130 => 33,  123 => 32,  119 => 31,  115 => 29,  111 => 28,  107 => 27,  98 => 23,  94 => 22,  85 => 20,  81 => 19,  73 => 14,  70 => 13,  69 => 12,  65 => 11,  61 => 10,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_print.html", "");
    }
}
