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

/* site_menu.html */
class __TwigTemplate_ce20806905f9c8b9a33877a6df28fa192b7080b1b745270e1c9851ca004c6eec extends \Twig\Template
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
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<li class=\"site-menu\"><a href=\"";
            echo ($context["U_INDEX"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
            echo "</a></li>";
        }
        // line 2
        // line 3
        echo "<li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo " class=\"site-menu\"><a href=\"";
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</a></li>
<li class=\"site-menu\">
\t<a href=\"#\" title=\"Example\">Link's importantes</a>
\t<ul>
\t\t<li><a href=\"https://sp-roleplay.com.br\">User Control Panel</a></li>
\t\t<li><a href=\"https://sp-gov.net\">Prefeitura de São Paulo</a></li>
\t\t<li><a href=\"https://pm.sp-gov.net\">Polícia Militar</a></li>
\t\t<li><a href=\"https://pc.sp-gov.net\">Polícia Civil</a></li>
\t\t<li><a href=\"https://gb.sp-gov.net\">Corpo de Bombeiros</a></li>
\t</ul>
</li>
";
        // line 14
    }

    public function getTemplateName()
    {
        return "site_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  46 => 3,  45 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "site_menu.html", "");
    }
}
