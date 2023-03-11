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

/* acp_applicationform.html */
class __TwigTemplate_29a31f5d428c900b23c6dd0817fd829cf13c17c4637e557b90171769134e1f70 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_applicationform.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<script>
\tvar form_name = 'appform';
\tvar text_name = 'appform_info';
\tvar load_draft = false;
\tvar upload = false;
\tvar imageTag = false;
</script>
<h1>";
        // line 9
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_APPLICATIONFORM_SETTINGS");
        echo "</h1>
<fieldset>
\t<legend>";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("BUY_ME_A_BEER");
        echo "</legend>
\t<dl>
\t\t<dt><label>";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("BUY_ME_A_BEER_SHORT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo ($context["L_BUY_ME_A_BEER_EXPLAIN"] ?? null);
        echo "</span></dt>
\t\t<dd><a href=\"";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("BUY_ME_A_BEER_URL");
        echo "\" target=\"_blank\" rel=\"noreferrer noopener\"><img src=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PAYPAL_IMAGE_URL");
        echo "\" border=\"0\" alt=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PAYPAL_ALT");
        echo "\" style=\"cursor:pointer;margin-top:15px;\"></a></dd>
\t</dl>
</fieldset>
";
        // line 17
        if (($context["ERROR"] ?? null)) {
            // line 18
            echo "\t<div class=\"errorbox\"><h3>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 19
            echo ($context["ERROR"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 22
        echo "
<form id=\"appform\" method=\"post\" action=\"";
        // line 23
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPFORM_INFO");
        echo "</legend>
\t\t<p>";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPFORM_INFO_EXPLAIN");
        echo "</p>
\t\t";
        // line 27
        if (($context["APPFORM_INFO_PREVIEW"] ?? null)) {
            // line 28
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("APPFORM_INFO_PREVIEW");
            echo "</legend>
\t\t\t<p>";
            // line 30
            echo ($context["APPFORM_INFO_PREVIEW"] ?? null);
            echo "</p>
\t\t</fieldset>
\t\t";
        }
        // line 33
        echo "\t\t";
        $location = "acp_posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("acp_posting_buttons.html", "acp_applicationform.html", 33)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 34
        echo "\t\t<dl class=\"responsive-columns\">
\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\">
\t\t\t</dt>

\t\t\t<dd style=\"margin-";
        // line 38
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px;\">
\t\t\t\t<textarea name=\"appform_info\" rows=\"10\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
        // line 39
        echo ($context["APPFORM_INFO"] ?? null);
        echo "</textarea>
\t\t\t</dd>

\t\t\t<dd style=\"margin-";
        // line 42
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px; margin-top: 5px;\">
\t\t\t\t";
        // line 43
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 44
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"";
            if (($context["S_BBCODE_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t";
        if (($context["S_SMILIES_ALLOWED"] ?? null)) {
            // line 47
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"";
            if (($context["S_SMILIES_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t";
        if (($context["S_LINKS_ALLOWED"] ?? null)) {
            // line 50
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"";
            if (($context["S_MAGIC_URL_DISABLE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 53
        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
        echo ": 90px; margin-top: 10px;\"><strong>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " </strong>";
        echo ($context["BBCODE_STATUS"] ?? null);
        echo " :: ";
        echo ($context["IMG_STATUS"] ?? null);
        echo " :: ";
        echo ($context["FLASH_STATUS"] ?? null);
        echo " :: ";
        echo ($context["URL_STATUS"] ?? null);
        echo " :: ";
        echo ($context["SMILIES_STATUS"] ?? null);
        echo "</dd>
\t\t</dl>
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"preview\" value=\"";
        // line 56
        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
        echo "\" />
\t\t</fieldset>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 60
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"appform_forum_id\">";
        // line 62
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_FORUM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 63
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_FORUM_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>";
        // line 64
        echo ($context["APPFORM_FORUM_ID"] ?? null);
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_guest\">";
        // line 67
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPFORM_GUEST");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 68
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPFORM_GUEST_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"appform_guest\" value=\"1\" ";
        // line 69
        if (($context["APPFORM_GUEST"] ?? null)) {
            echo "id=\"appform_guest\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"appform_guest\" value=\"0\" ";
        // line 70
        if ( !($context["APPFORM_GUEST"] ?? null)) {
            echo "id=\"appform_guest\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_nru\">";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_NRU");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 74
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_NRU_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"appform_nru\" value=\"1\" ";
        // line 75
        if (($context["APPFORM_NRU"] ?? null)) {
            echo "id=\"appform_nru\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"appform_nru\" value=\"0\" ";
        // line 76
        if ( !($context["APPFORM_NRU"] ?? null)) {
            echo "id=\"appform_nru\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_attach\">";
        // line 79
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_ALLOW_ATTACHMENT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 80
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_ALLOW_ATTACHMENT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"appform_attach\" value=\"1\" ";
        // line 81
        if (($context["APPFORM_ATTACHMENT"] ?? null)) {
            echo "id=\"appform_attach\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"appform_attach\" value=\"0\" ";
        // line 82
        if ( !($context["APPFORM_ATTACHMENT"] ?? null)) {
            echo "id=\"appform_attach\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_attach_req\">";
        // line 85
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_ATTACHMENT_REQ");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 86
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_ATTACHMENT_REQ_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"appform_attach_req\" value=\"1\" ";
        // line 87
        if (($context["APPFORM_ATTACHMENT_REQ"] ?? null)) {
            echo "id=\"appform_attach_req\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"appform_attach_req\" value=\"0\" ";
        // line 88
        if ( !($context["APPFORM_ATTACHMENT_REQ"] ?? null)) {
            echo "id=\"appform_attach_req\" checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_positions\">";
        // line 91
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_POSITIONS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 92
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_POSITIONS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"appform_positions\" id=\"appform_positions\" rows=\"10\" cols=\"40\">";
        // line 93
        echo ($context["APPFORM_POSITIONS"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_questions\">";
        // line 96
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_QUESTIONS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATIONFORM_QUESTIONS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"appform_questions\" rows=\"10\" cols=\"40\">";
        // line 97
        echo ($context["APPFORM_QUESTIONS"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<legend>";
        // line 101
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_POLL");
        echo "</legend>
\t\t<p><strong><em>";
        // line 102
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_POLL_EXPLAIN");
        echo "</em></strong></p>
\t\t<dl>
\t\t\t<dt><label for=\"appform_poll_title\">";
        // line 104
        echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_QUESTION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input name=\"appform_poll_title\" type=\"text\" class=\"text medium\" maxlength=\"255\" id=\"appform_poll_title\" value=\"";
        // line 105
        echo ($context["APPFORM_POLL_TITLE"] ?? null);
        echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_poll_options\">";
        // line 108
        echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_OPTIONS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_OPTIONS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"appform_poll_options\" id=\"appform_poll_options\" rows=\"5\" cols=\"40\" class=\"inputbox\">";
        // line 109
        echo ($context["APPFORM_POLL_OPTIONS"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"appform_poll_max_options\">";
        // line 112
        echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_MAX_OPTIONS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"number\" min=\"1\" max=\"127\" name=\"appform_poll_max_options\" id=\"appform_poll_max_options\" value=\"";
        // line 113
        echo ($context["APPFORM_POLL_MAX_OPTIONS"] ?? null);
        echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t<dd>";
        // line 114
        echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_MAX_OPTIONS_EXPLAIN");
        echo "</dd>
\t\t</dl>
\t</fieldset>
\t<fieldset>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 119
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 120
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t\t</p>
\t\t";
        // line 122
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>
";
        // line 125
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_applicationform.html", 125)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_applicationform.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 125,  445 => 122,  440 => 120,  436 => 119,  428 => 114,  424 => 113,  419 => 112,  413 => 109,  406 => 108,  400 => 105,  395 => 104,  390 => 102,  386 => 101,  379 => 97,  372 => 96,  366 => 93,  362 => 92,  357 => 91,  347 => 88,  339 => 87,  335 => 86,  330 => 85,  320 => 82,  312 => 81,  308 => 80,  303 => 79,  293 => 76,  285 => 75,  281 => 74,  276 => 73,  266 => 70,  258 => 69,  254 => 68,  249 => 67,  243 => 64,  239 => 63,  234 => 62,  229 => 60,  222 => 56,  203 => 53,  200 => 52,  190 => 50,  187 => 49,  177 => 47,  174 => 46,  164 => 44,  162 => 43,  158 => 42,  152 => 39,  148 => 38,  142 => 34,  129 => 33,  123 => 30,  119 => 29,  116 => 28,  114 => 27,  110 => 26,  106 => 25,  101 => 23,  98 => 22,  92 => 19,  87 => 18,  85 => 17,  75 => 14,  68 => 13,  63 => 11,  58 => 9,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_applicationform.html", "");
    }
}
