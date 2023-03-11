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

/* profilefields/dropdown.html */
class __TwigTemplate_8707cc1405ea158e7469c0aef017fa4a4a8c1cb7bdec97bea78a6c9c442bba5a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "dropdown", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown"]) {
            // line 2
            echo "<select name=\"";
            echo twig_get_attribute($this->env, $this->source, $context["dropdown"], "FIELD_IDENT", [], "any", false, false, false, 2);
            echo "\" id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["dropdown"], "FIELD_IDENT", [], "any", false, false, false, 2);
            echo "\">
\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dropdown"], "options", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                echo "<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["options"], "OPTION_ID", [], "any", false, false, false, 3);
                echo "\"";
                echo twig_get_attribute($this->env, $this->source, $context["options"], "SELECTED", [], "any", false, false, false, 3);
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["options"], "VALUE", [], "any", false, false, false, 3);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4
            echo "</select>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 4,  48 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profilefields/dropdown.html", "");
    }
}
