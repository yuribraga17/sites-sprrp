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

/* memberlist_email.html */
class __TwigTemplate_8934d7c63cd4fd06abeec12a248f6b51c65244b9092080311385a978d82b235b extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "memberlist_email.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t";
        // line 14
        if (($context["S_CONTACT_ADMIN"] ?? null)) {
            // line 15
            echo "\t\t\t\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_ADMIN");
            echo "</h2>
\t\t\t";
        } elseif (        // line 16
($context["S_SEND_USER"] ?? null)) {
            // line 17
            echo "\t\t\t\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_EMAIL_USER");
            echo "</h2>
\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_TOPIC");
            echo "</h2>
\t\t\t";
        }
        // line 21
        echo "\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<form method=\"post\" action=\"";
        // line 29
        echo ($context["S_POST_ACTION"] ?? null);
        echo "\" id=\"post\">

\t\t\t";
        // line 31
        if (($context["CONTACT_INFO"] ?? null)) {
            // line 32
            echo "\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<div class=\"postbody\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t";
            // line 36
            echo ($context["CONTACT_INFO"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t<br class=\"clear\" />
\t\t\t";
        }
        // line 43
        echo "
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t<div class=\"content\">

\t\t\t\t";
        // line 48
        if (($context["ERROR_MESSAGE"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR_MESSAGE"] ?? null);
            echo "</p>";
        }
        // line 49
        echo "\t\t\t\t<fieldset class=\"fields2\">
\t\t\t\t";
        // line 50
        if (($context["S_SEND_USER"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label>";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECIPIENT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t\t<dd><strong>";
            // line 53
            echo ($context["USERNAME_FULL"] ?? null);
            echo "</strong></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"subject\">";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"1\" value=\"";
            // line 57
            echo ($context["SUBJECT"] ?? null);
            echo "\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t";
        } elseif (        // line 59
($context["S_CONTACT_ADMIN"] ?? null)) {
            // line 60
            echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label>";
            // line 61
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECIPIENT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t\t<dd><strong>";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADMINISTRATOR");
            echo "</strong></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
            // line 64
            if ( !($context["S_IS_REGISTERED"] ?? null)) {
                // line 65
                echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"email\">";
                // line 66
                echo $this->extensions['phpbb\template\twig\extension']->lang("SENDER_EMAIL_ADDRESS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
                // line 67
                echo ($context["EMAIL"] ?? null);
                echo "\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"name\">";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("SENDER_NAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
                // line 71
                echo ($context["NAME"] ?? null);
                echo "\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"subject\">";
            // line 75
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
            // line 76
            echo ($context["SUBJECT"] ?? null);
            echo "\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"email\">";
            // line 80
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"2\" value=\"";
            // line 81
            echo ($context["EMAIL"] ?? null);
            echo "\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"name\">";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("REAL_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"3\" value=\"";
            // line 85
            echo ($context["NAME"] ?? null);
            echo "\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"lang\">";
            // line 88
            echo $this->extensions['phpbb\template\twig\extension']->lang("DEST_LANG");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br />
\t\t\t\t\t\t\t<span>";
            // line 89
            echo $this->extensions['phpbb\template\twig\extension']->lang("DEST_LANG_EXPLAIN");
            echo "</span></dt>
\t\t\t\t\t\t<dd><select name=\"lang\">";
            // line 90
            echo ($context["S_LANG_OPTIONS"] ?? null);
            echo "</select></dd>
\t\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"message\">";
        // line 94
        echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_BODY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br />
\t\t\t\t\t<span>";
        // line 95
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_BODY_EXPLAIN");
        echo "</span></dt>
\t\t\t\t\t<dd><textarea class=\"inputbox\" name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\">";
        // line 96
        echo ($context["MESSAGE"] ?? null);
        echo "</textarea></dd>
\t\t\t\t</dl>
\t\t\t\t";
        // line 98
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 99
            echo "\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><label for=\"cc_sender\"><input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /> ";
            // line 101
            echo $this->extensions['phpbb\template\twig\extension']->lang("CC_SENDER");
            echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"button1\" value=\"";
        // line 113
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_EMAIL");
        echo "\" />
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t";
        // line 116
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</div>

\t\t</form>

\t</div>
</div>

";
        // line 124
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 124)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 124,  314 => 116,  308 => 113,  297 => 104,  291 => 101,  287 => 99,  285 => 98,  280 => 96,  276 => 95,  271 => 94,  268 => 93,  262 => 90,  258 => 89,  253 => 88,  247 => 85,  242 => 84,  236 => 81,  231 => 80,  228 => 79,  222 => 76,  217 => 75,  214 => 74,  208 => 71,  203 => 70,  197 => 67,  192 => 66,  189 => 65,  187 => 64,  182 => 62,  177 => 61,  174 => 60,  172 => 59,  167 => 57,  162 => 56,  156 => 53,  151 => 52,  148 => 51,  146 => 50,  143 => 49,  137 => 48,  130 => 43,  120 => 36,  114 => 32,  112 => 31,  107 => 29,  97 => 21,  91 => 19,  85 => 17,  83 => 16,  78 => 15,  76 => 14,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_email.html", "");
    }
}
