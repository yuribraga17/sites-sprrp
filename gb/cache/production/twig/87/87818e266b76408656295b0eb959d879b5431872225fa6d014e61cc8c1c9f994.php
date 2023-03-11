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

/* faq_body.html */
class __TwigTemplate_8d58fcf82f8ff64b32ee1203f02fadf4e2e424c012df79104b7b1681f48a8df5 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "faq_body.html", 1)->display($context);
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
        $this->loadTemplate("breadcrumbs.html", "faq_body.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "\t\t\t</ul>

\t\t</div>

\t\t<div id=\"subhead-title\">
\t\t\t<h2 class=\"faq-title\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_TITLE");
        echo "</h2>
\t\t</div>

\t</div>
</div>

<div id=\"wrap-body\">
\t<div class=\"chunk\">

\t\t<div class=\"panel bg2\" id=\"faqlinks\">
\t\t\t<div class=\"inner\">
\t\t\t\t<div class=\"column1\">
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "faq_block", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 27
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["faq_block"], "SWITCH_COLUMN", [], "any", false, false, false, 27) || (($context["SWITCH_COLUMN_MANUALLY"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["faq_block"], "S_ROW_COUNT", [], "any", false, false, false, 27) == 4)))) {
                // line 28
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"column2\">
\t\t\t\t\t";
            }
            // line 32
            echo "
\t\t\t\t\t<dl class=\"faq\">
\t\t\t\t\t\t<dt><strong>";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "BLOCK_TITLE", [], "any", false, false, false, 34);
            echo "</strong></dt>
\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["faq_block"], "faq_row", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<dd><a href=\"#f";
                echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "S_ROW_COUNT", [], "any", false, false, false, 36);
                echo "r";
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "S_ROW_COUNT", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "FAQ_QUESTION", [], "any", false, false, false, 36);
                echo "</a></dd>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t</dl>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "faq_block", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 45
            echo "\t\t\t<div class=\"panel ";
            if ((twig_get_attribute($this->env, $this->source, $context["faq_block"], "S_ROW_COUNT", [], "any", false, false, false, 45) % 2 == 1)) {
                echo "bg2";
            } else {
                echo "bg1";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<div class=\"content\">
\t\t\t\t\t<h2 class=\"faq-title\">";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "BLOCK_TITLE", [], "any", false, false, false, 49);
            echo "</h2>
\t\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["faq_block"], "faq_row", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 51
                echo "\t\t\t\t\t\t<dl class=\"faq\">
\t\t\t\t\t\t\t<dt id=\"f";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "S_ROW_COUNT", [], "any", false, false, false, 52);
                echo "r";
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "S_ROW_COUNT", [], "any", false, false, false, 52);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "FAQ_QUESTION", [], "any", false, false, false, 52);
                echo "</strong></dt>
\t\t\t\t\t\t\t<dd>";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "FAQ_ANSWER", [], "any", false, false, false, 53);
                echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                // line 55
                if ( !twig_get_attribute($this->env, $this->source, $context["faq_row"], "S_LAST_ROW", [], "any", false, false, false, 55)) {
                    echo "<hr class=\"dashed\" />";
                }
                // line 56
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
\t\t";
        // line 63
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "faq_body.html", 63)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 64
        echo "\t\t
\t</div>
</div>

";
        // line 68
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "faq_body.html", 68)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "faq_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 68,  217 => 64,  205 => 63,  202 => 62,  192 => 57,  186 => 56,  182 => 55,  177 => 53,  169 => 52,  166 => 51,  162 => 50,  158 => 49,  146 => 45,  142 => 44,  136 => 40,  129 => 38,  116 => 36,  112 => 35,  108 => 34,  104 => 32,  98 => 28,  95 => 27,  91 => 26,  76 => 14,  69 => 9,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "faq_body.html", "");
    }
}
