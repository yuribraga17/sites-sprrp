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

/* posting_pm_header.html */
class __TwigTemplate_0a85fe2a95001cffb01760abc712a449b5825e4f232057995208915919ce67f4 extends \Twig\Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if ( !($context["S_SHOW_DRAFTS"] ?? null)) {
            // line 3
            echo "
\t\t";
            // line 4
            if (($context["S_GROUP_OPTIONS"] ?? null)) {
                // line 5
                echo "\t\t\t<div class=\"column2\">
\t\t\t\t<label for=\"group_list\"><strong>";
                // line 6
                echo $this->extensions['phpbb\template\twig\extension']->lang("TO_ADD_GROUPS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong></label><br />
\t\t\t\t<select name=\"group_list[]\" id=\"group_list\" multiple=\"multiple\" size=\"3\" class=\"inputbox\">";
                // line 7
                echo ($context["S_GROUP_OPTIONS"] ?? null);
                echo "</select><br />
\t\t\t</div>
\t\t";
            }
            // line 10
            echo "\t\t";
            if (($context["S_ALLOW_MASS_PM"] ?? null)) {
                // line 11
                echo "\t\t<div class=\"column1\">
\t\t\t";
                // line 12
                if ( !($context["S_EDIT_POST"] ?? null)) {
                    // line 13
                    echo "\t\t\t<dl class=\"pmlist\">
\t\t\t\t<dt><label><strong>";
                    // line 14
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TO_ADD_MASS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong><textarea id=\"username_list\" name=\"username_list\" class=\"inputbox\" cols=\"50\" rows=\"2\" tabindex=\"1\"></textarea></label></dt>
\t\t\t\t<dd class=\"recipients\">
\t\t\t\t<input type=\"submit\" name=\"add_to\" value=\"";
                    // line 16
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"button2\" tabindex=\"1\" /><input type=\"submit\" name=\"add_bcc\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_BCC");
                    echo "\" class=\"button2\" tabindex=\"1\" />";
                    echo "<span><a href=\"";
                    echo ($context["U_FIND_USERNAME"] ?? null);
                    echo "\" onclick=\"find_username(this.href); return false;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                    echo "</a></span>
\t\t\t\t";
                    // line 17
                    // line 18
                    echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 21
                echo "\t\t</div>
\t\t";
                // line 22
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 22))) {
                    // line 23
                    echo "\t\t<div class=\"column1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                    // line 25
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TO_MASS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 28
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 29
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 30
                        if ( !($context["S_EDIT_POST"] ?? null)) {
                            echo "<button type=\"submit\" name=\"remove_";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "TYPE", [], "any", false, false, false, 30);
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "UG_ID", [], "any", false, false, false, 30);
                            echo "]\" class=\"button-ar\"><i class=\"fa fa-times\"></i></button>";
                        }
                        if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "IS_GROUP", [], "any", false, false, false, 30)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 30);
                            echo "\" style=\"color: ";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 30);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 30);
                            echo "</strong></a>";
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 30);
                        }
                        // line 31
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t</div>
\t\t";
                }
                // line 38
                echo "\t\t\t";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "\t\t\t<div class=\"column2\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                    // line 41
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 44));
                    foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                        // line 45
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 46
                        if ( !($context["S_EDIT_POST"] ?? null)) {
                            echo "<button type=\"submit\" name=\"remove_";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "TYPE", [], "any", false, false, false, 46);
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "UG_ID", [], "any", false, false, false, 46);
                            echo "]\" class=\"button-ar\"><i class=\"fa fa-times\"></i></button>";
                        }
                        if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "IS_GROUP", [], "any", false, false, false, 46)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 46);
                            echo "\" style=\"color: ";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 46);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 46);
                            echo "</strong></a>";
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 46);
                        }
                        // line 47
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</div>
\t\t\t";
                }
                // line 54
                echo "\t\t";
            } else {
                // line 55
                echo "\t\t<div class=\"column1\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"username_list\">";
                // line 57
                echo $this->extensions['phpbb\template\twig\extension']->lang("TO_ADD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label>";
                if ( !($context["S_EDIT_POST"] ?? null)) {
                    echo "<br /><span><a href=\"";
                    echo ($context["U_FIND_USERNAME"] ?? null);
                    echo "\" onclick=\"find_username(this.href); return false\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                    echo "</a></span>";
                }
                echo "</dt>
\t\t\t\t";
                // line 58
                if ( !($context["S_EDIT_POST"] ?? null)) {
                    // line 59
                    echo "\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" name=\"username_list\" id=\"username_list\" size=\"20\" value=\"\" /> <input type=\"submit\" name=\"add_to\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"button2\" /></dd>
\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 61))) {
                    // line 62
                    echo "\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 64));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 65
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 66
                        if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "IS_GROUP", [], "any", false, false, false, 66)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 66);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 66);
                            echo "</strong></a>";
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 66);
                        }
                        echo "&nbsp;
\t\t\t\t\t\t\t";
                        // line 67
                        if ( !($context["S_EDIT_POST"] ?? null)) {
                            echo "<button type=\"submit\" name=\"remove_";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "TYPE", [], "any", false, false, false, 67);
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "UG_ID", [], "any", false, false, false, 67);
                            echo "]\" class=\"button-ar\"><i class=\"fa fa-times\"></i></button>";
                        }
                        // line 68
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 72
                echo "\t\t\t</dl>
\t\t</div>
\t\t";
            }
            // line 75
            echo "
\t";
        }
        // line 77
        echo "\t</fieldset>
";
    }

    public function getTemplateName()
    {
        return "posting_pm_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 77,  283 => 75,  278 => 72,  274 => 70,  267 => 68,  259 => 67,  247 => 66,  244 => 65,  240 => 64,  236 => 62,  233 => 61,  227 => 59,  225 => 58,  212 => 57,  208 => 55,  205 => 54,  198 => 49,  191 => 47,  172 => 46,  169 => 45,  165 => 44,  158 => 41,  154 => 39,  151 => 38,  144 => 33,  137 => 31,  118 => 30,  115 => 29,  111 => 28,  104 => 25,  100 => 23,  98 => 22,  95 => 21,  90 => 18,  89 => 17,  78 => 16,  72 => 14,  69 => 13,  67 => 12,  64 => 11,  61 => 10,  55 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_pm_header.html", "");
    }
}
