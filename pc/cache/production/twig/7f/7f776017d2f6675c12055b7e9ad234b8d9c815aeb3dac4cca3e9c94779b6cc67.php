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

/* @rmcgirr83_applicationform/event/acp_ext_details_end.html */
class __TwigTemplate_a5c0af9f9dc9c9119110adc255a87b7f3f3b9128d0c49c65a7e5d80d9573fdb5 extends \Twig\Template
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
        if (($context["S_BUY_ME_A_BEER_APPFORM"] ?? null)) {
            // line 2
            echo "\t<fieldset>
\t\t<legend>";
            // line 3
            echo $this->extensions['phpbb\template\twig\extension']->lang("BUY_ME_A_BEER");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label>";
            // line 5
            echo $this->extensions['phpbb\template\twig\extension']->lang("BUY_ME_A_BEER_SHORT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BUY_ME_A_BEER_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><a href=\"";
            // line 6
            echo $this->extensions['phpbb\template\twig\extension']->lang("BUY_ME_A_BEER_URL");
            echo "\" target=\"_blank\" rel=\"noreferrer noopener\"><img src=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PAYPAL_IMAGE_URL");
            echo "\" border=\"0\" alt=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PAYPAL_ALT");
            echo "\" style=\"cursor:pointer;margin-top:15px;\"></a></dd>
\t\t</dl>
\t</fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_applicationform/event/acp_ext_details_end.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@rmcgirr83_applicationform/event/acp_ext_details_end.html", "");
    }
}
