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

/* ucp_agreement.html */
class __TwigTemplate_3e85d5f0642a8808f14be4f9a5ce8897938782865dca58779015baac8944f0f6 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "ucp_agreement.html", 8)->display($context);
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
\t\t\t";
        // line 14
        if ((($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null))) {
            // line 15
            echo "\t\t\t<h2 class=\"sitename-title\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
            echo "</h2>
\t\t\t";
        } elseif (        // line 16
($context["S_AGREEMENT"] ?? null)) {
            // line 17
            echo "\t\t\t<h2 class=\"sitename-title\">";
            echo ($context["AGREEMENT_TITLE"] ?? null);
            echo "</h2>
\t\t\t";
        }
        // line 19
        echo "
\t\t\t";
        // line 20
        if (($context["MODERATORS"] ?? null)) {
            // line 21
            echo "\t\t\t<p id=\"subhead-mods\">
\t\t\t\t";
            // line 22
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
        // line 25
        echo "\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 33
        if ((($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null))) {
            // line 34
            echo "
\t\t";
            // line 35
            if (($context["S_LANG_OPTIONS"] ?? null)) {
                // line 36
                echo "\t\t<script>
\t\t\t/**
\t\t\t* Change language
\t\t\t*/
\t\t\tfunction change_language(lang_iso)
\t\t\t{
\t\t\t\tdocument.cookie = '";
                // line 42
                echo ($context["COOKIE_NAME"] ?? null);
                echo "_lang=' + lang_iso + '; path=";
                echo ($context["COOKIE_PATH"] ?? null);
                echo "';
\t\t\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\t\t\tdocument.forms['register'].submit();
\t\t\t}
\t\t</script>
\t\t";
            }
            // line 48
            echo "
\t\t";
            // line 49
            if (($context["S_LANG_OPTIONS"] ?? null)) {
                // line 50
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\" id=\"register\">
\t\t\t\t<p>
\t\t\t\t\t<label for=\"lang\">";
                // line 52
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo "\">";
                echo ($context["S_LANG_OPTIONS"] ?? null);
                echo "</select>
\t\t\t\t\t";
                // line 53
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t\t<br>
\t\t\t</form>

\t\t\t<div class=\"clear\"></div>

\t\t";
            }
            // line 61
            echo "
\t\t\t<form method=\"post\" action=\"";
            // line 62
            echo ($context["S_UCP_ACTION"] ?? null);
            echo "\" id=\"agreement\">

\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 67
            // line 68
            echo "\t\t\t\t\t<p>";
            if (($context["S_SHOW_COPPA"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t\t\t";
            // line 69
            // line 70
            echo "\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t";
            // line 77
            if (($context["S_SHOW_COPPA"] ?? null)) {
                // line 78
                echo "\t\t\t\t\t\t<input type=\"submit\" name=\"coppa_no\" id=\"coppa_no\" value=\"";
                echo ($context["L_COPPA_NO"] ?? null);
                echo "\" class=\"button1\" />
\t\t\t\t\t\t<input type=\"submit\" name=\"coppa_yes\" id=\"coppa_yes\" value=\"";
                // line 79
                echo ($context["L_COPPA_YES"] ?? null);
                echo "\" class=\"button2\" />
\t\t\t\t\t";
            } else {
                // line 81
                echo "\t\t\t\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("AGREE");
                echo "\" class=\"button1\" />
\t\t\t\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                // line 82
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_AGREE");
                echo "\" class=\"button2\" />
\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t";
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t\t";
            // line 85
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>

\t\t";
        } elseif (        // line 91
($context["S_AGREEMENT"] ?? null)) {
            // line 92
            echo "
\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p>";
            // line 96
            echo ($context["AGREEMENT_TEXT"] ?? null);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        }
        // line 102
        echo "
\t</div>
</div>

";
        // line 106
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 106)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 106,  270 => 102,  261 => 96,  255 => 92,  253 => 91,  244 => 85,  239 => 84,  234 => 82,  229 => 81,  224 => 79,  219 => 78,  217 => 77,  208 => 70,  207 => 69,  198 => 68,  197 => 67,  189 => 62,  186 => 61,  175 => 53,  166 => 52,  160 => 50,  158 => 49,  155 => 48,  144 => 42,  136 => 36,  134 => 35,  131 => 34,  129 => 33,  119 => 25,  106 => 22,  103 => 21,  101 => 20,  98 => 19,  92 => 17,  90 => 16,  85 => 15,  83 => 14,  75 => 13,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_agreement.html", "");
    }
}
