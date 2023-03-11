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

/* simple_header.html */
class __TwigTemplate_e64a82dc418f22a13d3ef578240772b927a59e0933c7bc845da0cc10c7f30a61 extends \Twig\Template
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
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        echo ($context["SITENAME"] ?? null);
        echo " &bull; ";
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " &bull; ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " &bull; ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

<link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />

<link href=\"";
        // line 13
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"";
        // line 14
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/colours.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
\t
";
        // line 16
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 17
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
";
        }
        // line 19
        echo "
";
        // line 20
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 21
        echo "
";
        // line 22
        // line 23
        echo "
";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 24);
        echo "

";
        // line 26
        // line 27
        echo "
</head>

<body id=\"phpbb\" class=\"nojs ";
        // line 30
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 32
        // line 33
        echo "
<div id=\"overall-wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"simple-body\">
\t\t<div class=\"chunk\">
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  123 => 32,  116 => 30,  111 => 27,  110 => 26,  105 => 24,  102 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  84 => 17,  82 => 16,  75 => 14,  71 => 13,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simple_header.html", "");
    }
}
