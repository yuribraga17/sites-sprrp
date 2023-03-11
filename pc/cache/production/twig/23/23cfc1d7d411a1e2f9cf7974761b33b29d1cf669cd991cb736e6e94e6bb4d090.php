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

/* login_body.html */
class __TwigTemplate_f13bf5ab6c53985672de397a8085d2b78d52c76bcc449caf7df9f21742dcf95a extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "login_body.html", 8)->display($context);
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
\t\t\t<h2 class=\"login-title\">";
        // line 14
        if (($context["LOGIN_EXPLAIN"] ?? null)) {
            echo ($context["LOGIN_EXPLAIN"] ?? null);
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        }
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

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<form action=\"";
        // line 29
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"login\" data-focus=\"";
        if (($context["S_ADMIN_AUTH"] ?? null)) {
            echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        } else {
            echo ($context["USERNAME_CREDENTIAL"] ?? null);
        }
        echo "\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<fieldset ";
        // line 34
        if ( !($context["S_CONFIRM_CODE"] ?? null)) {
            echo "class=\"fields1\"";
        } else {
            echo "class=\"fields2\"";
        }
        echo ">
\t\t\t\t";
        // line 35
        if (($context["LOGIN_ERROR"] ?? null)) {
            echo "<div class=\"error\">";
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</div>";
        }
        // line 36
        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"";
        // line 37
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"";
        // line 38
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" id=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"";
        // line 41
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"";
        // line 42
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" name=\"";
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
        // line 43
        if ((($context["S_DISPLAY_FULL_LOGIN"] ?? null) && (($context["U_SEND_PASSWORD"] ?? null) || ($context["U_RESEND_ACTIVATION"] ?? null)))) {
            // line 44
            echo "\t\t\t\t\t\t";
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                echo "<dd><a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a></dd>";
            }
            // line 45
            echo "\t\t\t\t\t\t";
            if (($context["U_RESEND_ACTIVATION"] ?? null)) {
                echo "<dd><a href=\"";
                echo ($context["U_RESEND_ACTIVATION"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESEND_ACTIVATION");
                echo "</a></dd>";
            }
            // line 46
            echo "\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t</dl>
\t\t\t\t";
        // line 48
        if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
            // line 49
            echo "\t\t\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 50
            echo "\t\t\t\t\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "login_body.html", 50)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 51
            echo "\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t";
        if (($context["S_DISPLAY_FULL_LOGIN"] ?? null)) {
            // line 53
            echo "\t\t\t\t<dl>
\t\t\t\t\t";
            // line 54
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo "</label></dd>";
            }
            // line 55
            echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\" /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_ME");
            echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 58
        echo "
\t\t\t\t";
        // line 59
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t";
        // line 60
        echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
        echo "
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd>";
        // line 63
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t";
        // line 68
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["PROVIDER_TEMPLATE_FILE"] ?? null))) {
            // line 69
            echo "\t\t\t\t";
            $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "login_body.html", 69)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 70
            echo "\t\t\t";
        }
        // line 71
        echo "\t\t\t</div>
\t\t</div>


\t\t";
        // line 75
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["S_REGISTER_ENABLED"] ?? null))) {
            // line 76
            echo "\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<div class=\"content\">
\t\t\t\t\t<h3>";
            // line 80
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</h3>
\t\t\t\t\t<p>";
            // line 81
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t\t<p><strong><a href=\"";
            // line 82
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
            echo "</a> | <a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
            echo "</a></strong></p>
\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t\t<p><a href=\"";
            // line 84
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"button2\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</a></p>
\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 90
        echo "
\t\t</form>

\t</div>
</div>

";
        // line 96
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 96)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 96,  333 => 90,  322 => 84,  311 => 82,  307 => 81,  303 => 80,  297 => 76,  295 => 75,  289 => 71,  286 => 70,  273 => 69,  271 => 68,  261 => 63,  255 => 60,  251 => 59,  248 => 58,  241 => 55,  235 => 54,  232 => 53,  229 => 52,  226 => 51,  213 => 50,  209 => 49,  207 => 48,  204 => 47,  201 => 46,  192 => 45,  183 => 44,  181 => 43,  175 => 42,  168 => 41,  158 => 38,  151 => 37,  148 => 36,  142 => 35,  134 => 34,  120 => 29,  110 => 21,  97 => 18,  94 => 17,  92 => 16,  83 => 14,  75 => 13,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login_body.html", "");
    }
}
