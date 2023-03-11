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

/* confirm_delete_body.html */
class __TwigTemplate_92d303e44d8ceea24d7f0034f1c8d8ae22ccfbd5269962c0066d2fbd85b6fcea extends \Twig\Template
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
        if (($context["S_AJAX_REQUEST"] ?? null)) {
            // line 2
            echo "\t<form action=\"";
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">
\t\t<p>";
            // line 3
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t\t";
            // line 5
            if ( !($context["S_SHADOW_TOPICS"] ?? null)) {
                // line 6
                echo "\t\t<fieldset>
\t\t";
                // line 7
                if ((( !($context["S_SOFTDELETED"] ?? null) && ($context["S_ALLOWED_DELETE"] ?? null)) && ($context["S_ALLOWED_SOFTDELETE"] ?? null))) {
                    // line 8
                    echo "\t\t<div>
\t\t\t<label>
\t\t\t\t<strong>";
                    // line 10
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_PERMANENTLY");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>
\t\t\t\t<br>
\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 12
                    echo ($context["S_CHECKED_PERMANENT"] ?? null);
                    echo " />
\t\t\t\t";
                    // line 13
                    if (($context["S_TOPIC_MODE"] ?? null)) {
                        echo ($context["DELETE_TOPIC_PERMANENTLY_EXPLAIN"] ?? null);
                    } else {
                        echo ($context["DELETE_POST_PERMANENTLY_EXPLAIN"] ?? null);
                    }
                    // line 14
                    echo "\t\t\t</label>
\t\t</div>
\t\t";
                }
                // line 17
                echo "
\t\t";
                // line 18
                // line 19
                echo "
\t\t<div>
\t\t<label for=\"delete_reason\">
\t\t\t<strong>";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong><br><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_REASON_EXPLAIN");
                echo "</span><br>
\t\t\t<input type=\"text\" name=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" />
\t\t</label>
\t\t</div>
\t\t</fieldset>
\t\t";
            }
            // line 28
            echo "
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 30
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 31
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 36
            echo "
";
            // line 37
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_delete_body.html", 37)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 38
            echo "
<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<form id=\"confirm\" action=\"";
            // line 42
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">
\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<h2 class=\"message-title\">";
            // line 46
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h2>

\t\t\t<p>";
            // line 48
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t\t\t";
            // line 50
            if ( !($context["S_SHADOW_TOPICS"] ?? null)) {
                // line 51
                echo "\t\t\t<fieldset class=\"fields1\">
\t\t\t\t";
                // line 52
                if ((( !($context["S_SOFTDELETED"] ?? null) && ($context["S_ALLOWED_DELETE"] ?? null)) && ($context["S_ALLOWED_SOFTDELETE"] ?? null))) {
                    // line 53
                    echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"delete_permanent\">";
                    // line 54
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_PERMANENTLY");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t<label for=\"delete_permanent\">
\t\t\t\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 57
                    echo ($context["S_CHECKED_PERMANENT"] ?? null);
                    echo " />
\t\t\t\t\t\t\t\t";
                    // line 58
                    if (($context["S_TOPIC_MODE"] ?? null)) {
                        echo ($context["DELETE_TOPIC_PERMANENTLY_EXPLAIN"] ?? null);
                    } else {
                        echo ($context["DELETE_POST_PERMANENTLY_EXPLAIN"] ?? null);
                    }
                    // line 59
                    echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</dd>
\t\t\t\t\t</dl>
\t\t\t\t";
                }
                // line 63
                echo "
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete_reason\">";
                // line 65
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_REASON_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" /></dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t\t";
            }
            // line 70
            echo "
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
            // line 72
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "\" class=\"button1\" />&nbsp; 
\t\t\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 74
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "\" class=\"button2\" />
\t\t\t</fieldset>

\t\t\t</div>
\t\t</div>
\t\t</form>

\t</div>
</div>

";
            // line 84
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_delete_body.html", 84)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  216 => 74,  212 => 73,  208 => 72,  204 => 70,  193 => 65,  189 => 63,  183 => 59,  177 => 58,  173 => 57,  166 => 54,  163 => 53,  161 => 52,  158 => 51,  156 => 50,  151 => 48,  146 => 46,  139 => 42,  133 => 38,  121 => 37,  118 => 36,  110 => 31,  106 => 30,  102 => 28,  90 => 22,  85 => 19,  84 => 18,  81 => 17,  76 => 14,  70 => 13,  66 => 12,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirm_delete_body.html", "");
    }
}
