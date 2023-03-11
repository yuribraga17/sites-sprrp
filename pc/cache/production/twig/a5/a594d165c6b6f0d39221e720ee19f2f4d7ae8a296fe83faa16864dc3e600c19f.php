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

/* ucp_pm_message_header.html */
class __TwigTemplate_e1e2a8d153e1124c7666147529e040a7f531895cb5c47fefef0c788b70cba4b8 extends \Twig\Template
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
        echo "<h2>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        if (($context["CUR_FOLDER_NAME"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["CUR_FOLDER_NAME"] ?? null);
        }
        echo "</h2>

<form id=\"viewfolder\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_PM_ACTION"] ?? null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 7
        if ((($context["FOLDER_STATUS"] ?? null) && (($context["FOLDER_MAX_MESSAGES"] ?? null) != 0))) {
            echo "<p>";
            echo ($context["FOLDER_STATUS"] ?? null);
            echo "</p>";
        }
        // line 8
        echo "
\t<div class=\"action-bar top\">
\t";
        // line 10
        if (((($context["U_POST_REPLY_PM"] ?? null) || ($context["U_POST_NEW_TOPIC"] ?? null)) || ($context["U_FORWARD_PM"] ?? null))) {
            // line 11
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 12
            if (($context["U_POST_REPLY_PM"] ?? null)) {
                // line 13
                echo "\t\t\t\t<a title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY_PM");
                echo "\" href=\"";
                echo ($context["U_POST_REPLY_PM"] ?? null);
                echo "\" class=\"button font-icon\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>";
                // line 14
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_PM_REPLY");
                echo "
\t\t\t\t</a>
\t\t\t";
            } elseif (            // line 16
($context["U_POST_NEW_TOPIC"] ?? null)) {
                // line 17
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" accesskey=\"n\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_PM_COMPOSE");
                echo "\" class=\"button font-icon\">
\t\t\t\t\t<i class=\"fa fa-pencil\"></i>";
                // line 18
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_PM_NEW");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 21
            echo "\t\t\t";
            if (($context["U_FORWARD_PM"] ?? null)) {
                // line 22
                echo "\t\t\t\t<a title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_FORWARD_PM");
                echo "\" href=\"";
                echo ($context["U_FORWARD_PM"] ?? null);
                echo "\" class=\"button font-icon\">
\t\t\t\t\t<i class=\"fa fa-share\"></i>";
                // line 23
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_PM_FORWARD");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 26
            echo "\t\t\t";
            if ((($context["U_POST_REPLY_PM"] ?? null) && (($context["S_PM_RECIPIENTS"] ?? null) > 1))) {
                // line 27
                echo "\t\t\t\t<a title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_TO_ALL");
                echo "\" href=\"";
                echo ($context["U_POST_REPLY_ALL"] ?? null);
                echo "\" class=\"button font-icon\">
\t\t\t\t\t<i class=\"fa fa-reply-all\"></i>";
                // line 28
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_PM_REPLY_ALL");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 31
            echo "\t\t</div>
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if (( !($context["S_IS_BOT"] ?? null) && ($context["U_PRINT_PM"] ?? null))) {
            // line 35
            echo "\t\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t\t<span title=\"";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM_TOOLS");
            echo "\" class=\"dropdown-trigger dropdown-select button icon-button tools-icon\"><i class=\"fa fa-wrench\"></i></span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t";
            // line 40
            if (($context["U_PRINT_PM"] ?? null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo ($context["U_PRINT_PM"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRINT_PM");
                echo "\" accesskey=\"p\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRINT_PM");
                echo "</a></li>";
            }
            // line 41
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 45
        echo "
\t";
        // line 46
        if ((($context["TOTAL_MESSAGES"] ?? null) || ($context["S_VIEW_MESSAGE"] ?? null))) {
            // line 47
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 48
            if (($context["S_VIEW_MESSAGE"] ?? null)) {
                // line 49
                echo "\t\t\t\t<a class=\"arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\" href=\"";
                echo ($context["U_CURRENT_FOLDER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_FOLDER");
                echo "</a>
\t\t\t";
            } elseif ((            // line 50
($context["FOLDER_CUR_MESSAGES"] ?? null) != 0)) {
                // line 51
                echo "\t\t\t\t";
                if (($context["U_MARK_ALL"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_MARK_ALL"] ?? null);
                    echo "\" class=\"mark\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("PM_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 52
                echo "\t\t\t\t";
                echo ($context["TOTAL_MESSAGES"] ?? null);
                echo "
\t\t\t\t";
                // line 53
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 53))) {
                    // line 54
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_message_header.html", 54)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 55
                    echo "\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t";
            }
            // line 59
            echo "\t\t</div>
\t";
        }
        // line 61
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 61,  228 => 59,  225 => 58,  219 => 56,  216 => 55,  203 => 54,  201 => 53,  196 => 52,  187 => 51,  185 => 50,  176 => 49,  174 => 48,  171 => 47,  169 => 46,  166 => 45,  160 => 41,  150 => 40,  143 => 36,  140 => 35,  138 => 34,  135 => 33,  131 => 31,  125 => 28,  118 => 27,  115 => 26,  109 => 23,  102 => 22,  99 => 21,  93 => 18,  86 => 17,  84 => 16,  79 => 14,  72 => 13,  70 => 12,  67 => 11,  65 => 10,  61 => 8,  55 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_message_header.html", "");
    }
}
