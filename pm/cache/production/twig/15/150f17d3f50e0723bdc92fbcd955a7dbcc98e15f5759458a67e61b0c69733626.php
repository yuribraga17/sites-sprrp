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

/* ucp_register.html */
class __TwigTemplate_a40b96a0853ac224e11f65a323a652e71a132b114babf9362f8c91e503d652da extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "ucp_register.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"";
        // line 13
        if (($context["MODERATORS"] ?? null)) {
            echo "subhead-title-sm";
        } else {
            echo "subhead-title";
        }
        echo "\">
\t\t\t<h2>";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
        echo "</h2>

\t\t\t";
        // line 16
        if (($context["MODERATORS"] ?? null)) {
            // line 17
            echo "\t\t\t<p id=\"subhead-mods\">
\t\t\t\t";
            // line 18
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["MODERATORS"] ?? null);
            echo "
\t\t\t</p>
\t\t\t";
        }
        // line 21
        echo "\t\t</div>

\t</div>
</div>

<script>
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 32
        echo ($context["COOKIE_NAME"] ?? null);
        echo "_lang=' + lang_iso + '; path=";
        echo ($context["COOKIE_PATH"] ?? null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
</script>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 41
        if (($context["PROVIDER_TEMPLATE_FILE"] ?? null)) {
            // line 42
            echo "\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t\t<h2>";
            // line 45
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("OAUTH_REGISTRATION");
            echo "</h2>

\t\t\t\t\t";
            // line 47
            $this->loadTemplate(($context["PROVIDER_TEMPLATE_FILE"] ?? null), "ucp_register.html", 47)->display($context);
            // line 48
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 51
        echo "
\t\t<form id=\"register\" method=\"post\" action=\"";
        // line 52
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<fieldset class=\"fields2\">
\t\t\t";
        // line 58
        if (($context["ERROR"] ?? null)) {
            echo "<dl><dd class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</dd></dl>";
        }
        // line 59
        echo "\t\t\t";
        if (($context["L_REG_COND"] ?? null)) {
            // line 60
            echo "\t\t\t\t<dl><dd><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REG_COND");
            echo "</strong></dd></dl>
\t\t\t";
        }
        // line 62
        echo "\t\t\t";
        // line 63
        echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"username\">";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 65
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"new_password\">";
        // line 68
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 69
        echo ($context["PASSWORD"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"password_confirm\">";
        // line 72
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><input type=\"password\"  tabindex=\"3\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 73
        echo ($context["PASSWORD_CONFIRM"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
        // line 76
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><input type=\"email\" tabindex=\"4\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 77
        echo ($context["EMAIL"] ?? null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
        echo "\" autocomplete=\"off\" /></dd>
\t\t\t</dl>

\t\t\t";
        // line 80
        // line 81
        echo "
\t\t\t";
        // line 82
        // line 83
        echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang\">";
        // line 84
        echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t<dd><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 85
        echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
        echo "\">";
        echo ($context["S_LANG_OPTIONS"] ?? null);
        echo "</select></dd>
\t\t\t</dl>

\t\t\t";
        // line 88
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_register.html", 88)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 89
        echo "
\t\t\t";
        // line 90
        // line 91
        echo "\t\t\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 91))) {
            // line 92
            echo "\t\t\t\t<dl><dd><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 95
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 96)) {
                    echo " for=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 96);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_NAME", [], "any", false, false, false, 96);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "S_REQUIRED", [], "any", false, false, false, 96)) {
                    echo " *";
                }
                echo "</label>
\t\t\t\t\t";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 97)) {
                    echo "<br /><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 97);
                    echo "</span>";
                }
                // line 98
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 98)) {
                    echo "<br /><span class=\"error\">";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 98);
                    echo "</span>";
                }
                echo "</dt>
\t\t\t\t\t<dd>";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD", [], "any", false, false, false, 99);
                echo "</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t";
        }
        // line 103
        echo "
\t\t\t";
        // line 104
        // line 105
        echo "\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 108
        if (($context["CAPTCHA_TEMPLATE"] ?? null)) {
            // line 109
            echo "\t\t\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 110
            echo "\t\t\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "ucp_register.html", 110)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 111
            echo "\t\t";
        }
        // line 112
        echo "
\t\t";
        // line 113
        if (($context["S_COPPA"] ?? null)) {
            // line 114
            echo "

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<h4>";
            // line 119
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_COMPLIANCE");
            echo "</h4>

\t\t\t<p>";
            // line 121
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_EXPLAIN");
            echo "</p>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 125
        echo "
\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 130
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t\t<input type=\"reset\" value=\"";
        // line 131
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" /><input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1 default-submit-action\" />
\t\t\t\t";
        // line 132
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t</fieldset>

\t\t\t</div>
\t\t</div>
\t\t</form>

\t</div>
</div>

";
        // line 142
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 142)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 142,  410 => 132,  404 => 131,  400 => 130,  393 => 125,  386 => 121,  381 => 119,  374 => 114,  372 => 113,  369 => 112,  366 => 111,  353 => 110,  349 => 109,  347 => 108,  342 => 105,  341 => 104,  338 => 103,  335 => 102,  326 => 99,  317 => 98,  311 => 97,  297 => 96,  294 => 95,  290 => 94,  284 => 92,  281 => 91,  280 => 90,  277 => 89,  265 => 88,  257 => 85,  252 => 84,  249 => 83,  248 => 82,  245 => 81,  244 => 80,  236 => 77,  231 => 76,  223 => 73,  218 => 72,  210 => 69,  203 => 68,  195 => 65,  188 => 64,  185 => 63,  183 => 62,  177 => 60,  174 => 59,  168 => 58,  157 => 52,  154 => 51,  149 => 48,  147 => 47,  140 => 45,  135 => 42,  133 => 41,  119 => 32,  106 => 21,  93 => 18,  90 => 17,  88 => 16,  83 => 14,  75 => 13,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_register.html", "");
    }
}
