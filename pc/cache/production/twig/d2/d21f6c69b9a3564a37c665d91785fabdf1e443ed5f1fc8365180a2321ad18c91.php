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

/* login_forum.html */
class __TwigTemplate_df53236eddcbf2fdcbe57db96435d61b2a3f260715e5abc044fd911045c3599f extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "login_forum.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["FORUM_NAME"] ?? null)) {
            // line 4
            echo "<div id=\"wrap-subhead\">
\t<div class=\"chunk\">
\t\t<div class=\"wrap-subhead\">

\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t";
            // line 9
            $location = "breadcrumbs.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("breadcrumbs.html", "login_forum.html", 9)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"forum-title\"><a href=\"";
            // line 15
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\">";
            echo ($context["FORUM_NAME"] ?? null);
            echo "</a></h2>
\t\t</div>

\t</div>
</div>
";
        }
        // line 21
        echo "
<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<form id=\"login_forum\" method=\"post\" action=\"";
        // line 25
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\">
\t\t";
        // line 26
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h2 class=\"login-title\">";
        // line 31
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "</h2>

\t\t\t\t<p>";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_FORUM");
        echo "</p>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t\t";
        // line 36
        if (($context["LOGIN_ERROR"] ?? null)) {
            // line 37
            echo "\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd class=\"error\">";
            // line 39
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t";
        }
        // line 42
        echo "
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"password\">";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t\t\t\t<dd><input type=\"password\" tabindex=\"1\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox narrow\" autocomplete=\"off\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
        // line 47
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t";
        // line 48
        echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
        echo "
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t<dd>";
        // line 51
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"submit\" name=\"login\" id=\"login\" class=\"button1\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "\" tabindex=\"2\" /></dd>
\t\t\t\t\t</dl>
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t\t";
        // line 61
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "login_forum.html", 61)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 62
        echo "
\t</div>
</div>

";
        // line 66
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_forum.html", 66)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 66,  180 => 62,  168 => 61,  153 => 51,  147 => 48,  143 => 47,  136 => 44,  132 => 42,  126 => 39,  122 => 37,  120 => 36,  114 => 33,  109 => 31,  101 => 26,  97 => 25,  91 => 21,  80 => 15,  73 => 10,  61 => 9,  54 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login_forum.html", "");
    }
}
