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

/* ucp_profile_profile_info.html */
class __TwigTemplate_dcebc5e9af0dacb1207562f63bc25e27f1665e3643d39bedcace639fe30cd68b extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_profile_profile_info.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<h2>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo " <span class=\"small\">[ <a href=\"";
        echo ($context["U_USER_PROFILE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PROFILE");
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PROFILE");
        echo "</a> ]</span></h2>

<div class=\"panel\">
\t<div class=\"inner\">
\t<p>";
        // line 9
        echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE_INFO_NOTICE");
        echo "</p>

\t<fieldset>
\t";
        // line 12
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 13
        echo "
\t";
        // line 14
        // line 15
        echo "
\t";
        // line 16
        if (($context["S_BIRTHDAYS_ENABLED"] ?? null)) {
            // line 17
            echo "\t\t<dl>
\t\t\t<dt><label for=\"bday_day\">";
            // line 18
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAY_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"bday_day\">";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("DAY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <select name=\"bday_day\" id=\"bday_day\">";
            echo ($context["S_BIRTHDAY_DAY_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t\t<label for=\"bday_month\">";
            // line 21
            echo $this->extensions['phpbb\template\twig\extension']->lang("MONTH");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <select name=\"bday_month\" id=\"bday_month\">";
            echo ($context["S_BIRTHDAY_MONTH_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t\t<label for=\"bday_year\">";
            // line 22
            echo $this->extensions['phpbb\template\twig\extension']->lang("YEAR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <select name=\"bday_year\" id=\"bday_year\">";
            echo ($context["S_BIRTHDAY_YEAR_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 26
        echo "\t";
        if (($context["S_JABBER_ENABLED"] ?? null)) {
            // line 27
            echo "\t\t<dl>
\t\t\t<dt><label for=\"jabber\">";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"email\" name=\"jabber\" id=\"jabber\" maxlength=\"255\" value=\"";
            // line 29
            echo ($context["JABBER"] ?? null);
            echo "\" class=\"inputbox\" /></dd>
\t\t</dl>
\t";
        }
        // line 32
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
            // line 33
            echo "\t\t<dl>
\t\t\t<dt><label";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 34)) {
                echo " for=\"";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 34);
                echo "\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_NAME", [], "any", false, false, false, 34);
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "S_REQUIRED", [], "any", false, false, false, 34)) {
                echo " *";
            }
            echo "</label>
\t\t\t";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 35)) {
                echo "<br /><span>";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 35);
                echo "</span>";
            }
            echo "</dt>
\t\t\t";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 36)) {
                echo "<dd class=\"error\">";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 36);
                echo "</dd>";
            }
            // line 37
            echo "\t\t\t<dd>";
            echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD", [], "any", false, false, false, 37);
            echo "</dd>
\t\t</dl>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t";
        // line 41
        // line 42
        echo "
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 49
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 50
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 51
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 55
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_profile_info.html", 55)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_profile_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 55,  214 => 51,  210 => 50,  204 => 49,  195 => 42,  194 => 41,  191 => 40,  181 => 37,  175 => 36,  167 => 35,  153 => 34,  150 => 33,  145 => 32,  139 => 29,  134 => 28,  131 => 27,  128 => 26,  118 => 22,  111 => 21,  104 => 20,  96 => 18,  93 => 17,  91 => 16,  88 => 15,  87 => 14,  84 => 13,  78 => 12,  72 => 9,  59 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_profile_profile_info.html", "");
    }
}
