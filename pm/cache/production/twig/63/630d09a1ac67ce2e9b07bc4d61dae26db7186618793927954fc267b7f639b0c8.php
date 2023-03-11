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

/* mcp_header.html */
class __TwigTemplate_dfa74fc9bf58a15862d618c16417963380978ed9d707f897dbbac466b4ef9432 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "mcp_header.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t\t<ul id=\"subhead-tabs\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "l_block1", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 13
            echo "\t\t\t\t<li class=\"tab";
            if (twig_get_attribute($this->env, $this->source, $context["l_block1"], "S_SELECTED", [], "any", false, false, false, 13)) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["l_block1"], "U_TITLE", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["l_block1"], "L_TITLE", [], "any", false, false, false, 13);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t<h2>";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
        echo " - ";
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>
\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t<div id=\"cp-menu\">
\t\t<div id=\"navigation\" role=\"navigation\">
\t\t\t<ul>
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "l_block1", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 33
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["l_block1"], "S_SELECTED", [], "any", false, false, false, 33)) {
                // line 34
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l_block1"], "l_block2", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 35
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "S_SELECTED", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "U_TITLE", [], "any", false, false, false, 36);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "L_TITLE", [], "any", false, false, false, 36);
                        if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 36)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 36);
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "U_TITLE", [], "any", false, false, false, 38);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "L_TITLE", [], "any", false, false, false, 38);
                        if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 38)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 38);
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t";
            }
            // line 42
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div id=\"cp-main\" class=\"mcp-main panel-container\">
\t\t<div id=\"cp-main-inner\">
\t\t";
        // line 49
        if (($context["MESSAGE"] ?? null)) {
            // line 50
            echo "\t\t<div class=\"content\">
\t\t\t<h2 class=\"message-title\">";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 52
            echo ($context["MESSAGE"] ?? null);
            echo "</p>
\t\t\t<p>";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "return_links", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                echo twig_get_attribute($this->env, $this->source, $context["return_links"], "MESSAGE_LINK", [], "any", false, false, false, 53);
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 53,  190 => 52,  186 => 51,  183 => 50,  181 => 49,  173 => 43,  167 => 42,  164 => 41,  158 => 40,  145 => 38,  132 => 36,  129 => 35,  124 => 34,  121 => 33,  117 => 32,  100 => 20,  93 => 15,  78 => 13,  74 => 12,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_header.html", "");
    }
}
