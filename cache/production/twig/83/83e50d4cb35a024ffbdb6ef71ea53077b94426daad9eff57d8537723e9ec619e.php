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

/* ucp_reset_password.html */
class __TwigTemplate_c49755fdfe1c9f78e6fe28bc80404e507b7662cb6b68f124ba564c73c398ebae extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_reset_password.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<form action=\"";
        // line 6
        echo ($context["U_RESET_PASSWORD_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"reset_password\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h2>";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET_PASSWORD");
        echo "</h2>

\t\t\t\t<fieldset>
\t\t\t\t";
        // line 15
        if (($context["S_IS_PASSWORD_RESET"] ?? null)) {
            // line 16
            echo "\t\t\t\t\t";
            if (($context["PASSWORD_RESET_ERRORS"] ?? null)) {
                echo "<p class=\"error\">";
                echo twig_join_filter(($context["PASSWORD_RESET_ERRORS"] ?? null), "<br>");
                echo "</p>";
            }
            // line 17
            echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"new_password\">";
            // line 18
            echo ($this->extensions['phpbb\template\twig\extension']->lang("NEW_PASSWORD") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox\" type=\"password\" name=\"new_password\" id=\"new_password\" size=\"25\" maxlength=\"255\" title=\"";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"new_password_confirm\">";
            // line 22
            echo ($this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox\" type=\"password\" name=\"new_password_confirm\" id=\"new_password_confirm\" size=\"25\" maxlength=\"255\" title=\"";
            // line 23
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t";
            if (($context["USERNAME_REQUIRED"] ?? null)) {
                // line 27
                echo "\t\t\t\t\t\t<p class=\"error\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_NOT_UNIQUE");
                echo "</p>
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"email\">";
            // line 30
            echo ($this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_REMIND");
            echo "</span></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox narrow\" type=\"email\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
            // line 31
            echo ($context["EMAIL"] ?? null);
            echo "\" autofocus /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
            // line 33
            if (($context["USERNAME_REQUIRED"] ?? null)) {
                // line 34
                echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"username\">";
                // line 35
                echo ($this->extensions['phpbb\template\twig\extension']->lang("USERNAME") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox narrow\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd>";
        // line 42
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"button1\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" tabindex=\"2\" /><input type=\"reset\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
        // line 44
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t</div>
</div>

";
        // line 56
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_reset_password.html", 56)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_reset_password.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 56,  153 => 44,  144 => 42,  140 => 40,  137 => 39,  130 => 35,  127 => 34,  125 => 33,  120 => 31,  114 => 30,  111 => 29,  105 => 27,  102 => 26,  96 => 23,  92 => 22,  86 => 19,  82 => 18,  79 => 17,  72 => 16,  70 => 15,  64 => 12,  55 => 6,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_reset_password.html", "");
    }
}
