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

/* posting_layout.html */
class __TwigTemplate_2a5f0ab2c2b173e8554b79962008e8175edf7125aba9eeabeba5236b43fc8a8a extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "posting_layout.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "posting_layout.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t";
        // line 13
        if (($context["TOPIC_TITLE"] ?? null)) {
            // line 14
            echo "\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"posting-title\">";
            // line 15
            echo "<a href=\"";
            echo ($context["U_VIEW_TOPIC"] ?? null);
            echo "\">";
            echo ($context["TOPIC_TITLE"] ?? null);
            echo "</a>";
            echo "</h2>
\t\t</div>
\t\t";
        } else {
            // line 18
            echo "\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"posting-title\"><a href=\"";
            // line 19
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\">";
            echo ($context["FORUM_NAME"] ?? null);
            echo "</a></h2>
\t\t</div>
\t\t";
        }
        // line 22
        echo "
\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t";
        // line 29
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 30
            echo "\t\t\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t";
            // line 33
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 34
                echo "\t\t\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t\t\t";
                // line 37
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 39
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 43
        echo "
\t\t<form id=\"postform\" method=\"post\" action=\"";
        // line 44
        echo ($context["S_POST_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

\t\t";
        // line 46
        if (($context["S_DRAFT_LOADED"] ?? null)) {
            // line 47
            echo "\t\t\t<div class=\"panel\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<h3>";
            // line 50
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo "</h3>
\t\t\t\t<p>";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("DRAFT_LOADED");
            echo "</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 56
        echo "
\t\t";
        // line 57
        if (($context["S_SHOW_DRAFTS"] ?? null)) {
            $location = "drafts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("drafts.html", "posting_layout.html", 57)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 58
        echo "
\t\t";
        // line 59
        if (($context["S_POST_REVIEW"] ?? null)) {
            $location = "posting_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_review.html", "posting_layout.html", 59)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 60
        echo "
\t\t";
        // line 61
        if (($context["S_DISPLAY_PREVIEW"] ?? null)) {
            $location = "posting_preview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_preview.html", "posting_layout.html", 61)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 62
        echo "
\t\t<div class=\"panel\" id=\"postingbox\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_A");
        echo "</h3>

\t\t\t";
        // line 68
        $value = 1;
        $context['definition']->set('EXTRA_POSTING_OPTIONS', $value);
        // line 69
        echo "\t\t\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "posting_layout.html", 69)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 70
        echo "\t\t\t<input type=\"hidden\" name=\"show_panel\" value=\"options-panel\" />
\t\t\t";
        // line 71
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 75
        if ((($context["S_SHOW_ATTACH_BOX"] ?? null) && ($context["FILTERS"] ?? null))) {
            $location = "posting_attach_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_attach_body.html", "posting_layout.html", 75)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 76
        echo "
\t\t";
        // line 77
        if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
            $location = "posting_poll_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_poll_body.html", "posting_layout.html", 77)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 78
        echo "
\t\t";
        // line 79
        if (($context["S_DISPLAY_REVIEW"] ?? null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "posting_layout.html", 79)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 80
        echo "
\t\t</form>

\t</div>
</div>

";
        // line 86
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "posting_layout.html", 86)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "posting_layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 86,  312 => 80,  298 => 79,  295 => 78,  281 => 77,  278 => 76,  264 => 75,  257 => 71,  254 => 70,  241 => 69,  238 => 68,  233 => 66,  227 => 62,  213 => 61,  210 => 60,  196 => 59,  193 => 58,  179 => 57,  176 => 56,  168 => 51,  164 => 50,  159 => 47,  157 => 46,  150 => 44,  147 => 43,  141 => 39,  136 => 37,  131 => 36,  123 => 34,  121 => 33,  112 => 30,  110 => 29,  101 => 22,  93 => 19,  90 => 18,  80 => 15,  77 => 14,  75 => 13,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_layout.html", "");
    }
}
