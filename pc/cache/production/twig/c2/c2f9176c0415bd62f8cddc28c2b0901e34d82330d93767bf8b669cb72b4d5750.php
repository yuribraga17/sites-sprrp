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

/* appform_body.html */
class __TwigTemplate_a21e72f8811aef9884f9974ead9c358b83e625d56318729478f707f1a7c5e6ed extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "appform_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<h2 class=\"titlespace\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("APPLICATION_PAGETITLE");
        echo "</h2>

<form method=\"post\" id=\"appform\" ";
        // line 4
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">
\t";
        // line 5
        if (($context["APPFORM_INFO"] ?? null)) {
            // line 6
            echo "\t<div class=\"contactpanel\">
\t\t<div class=\"content\">
\t\t\t";
            // line 8
            echo ($context["APPFORM_INFO"] ?? null);
            echo "
\t\t</div>
\t</div>
\t\t<br class=\"clear\" />
\t";
        }
        // line 13
        echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"fields2\">
\t\t\t\t";
        // line 16
        if (($context["S_ERROR"] ?? null)) {
            // line 17
            echo "\t\t\t\t<p class=\"error\">";
            echo ($context["S_ERROR"] ?? null);
            echo "</p>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"name\">Usuário";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "*</label></dt>
\t\t\t\t\t<dd><input type=\"text\" name=\"name\" size=\"25\" class=\"inputbox autowidth\" value=\"";
        // line 21
        echo ($context["REALNAME"] ?? null);
        echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"email\">";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "*</label></dt>
\t\t\t\t\t<dd><input type=\"text\" name=\"email\" size=\"25\" maxlength=\"100\" class=\"inputbox autowidth\" value=\"";
        // line 25
        echo ($context["APPLICATION_EMAIL"] ?? null);
        echo "\" ";
        if ( !($context["S_EMAIL_NEEDED"] ?? null)) {
            echo "disabled";
        }
        echo " /></dd>
\t\t\t\t</dl>
\t\t\t\t";
        // line 27
        if (($context["APPLICATION_POSITIONS"] ?? null)) {
            // line 28
            echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"postion\">Crime cometido ";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd><select name=\"position\" id=\"position\">";
            // line 30
            echo ($context["APPLICATION_POSITIONS"] ?? null);
            echo "</select></dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"why\">Endereço?";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "*</label></dt>
\t\t\t\t\t<dd><textarea rows=\"5\" cols=\"50\" name=\"why\" class=\"inputbox\">";
        // line 35
        echo ($context["WHY"] ?? null);
        echo "</textarea></dd>
\t\t\t\t</dl>
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "questions", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            // line 38
            echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"(questions.QUESTION}\">";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["questions"], "QUESTION", [], "any", false, false, false, 39);
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "*</label></dt>
\t\t\t\t\t<dd><input type=\"text\" name=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["questions"], "FORM_NAME", [], "any", false, false, false, 40);
            echo "\" class=\"inputbox\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["questions"], "ANSWER", [], "any", false, false, false, 40);
            echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t";
        if (($context["CAPTCHA_TEMPLATE"] ?? null)) {
            // line 44
            echo "\t\t\t\t\t";
            $value = 5;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 45
            echo "\t\t\t\t\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "appform_body.html", 45)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 46
            echo "\t\t\t\t";
        }
        // line 47
        echo "\t\t\t</fieldset>
\t\t</div>
\t</div>
";
        // line 50
        if (($context["S_ATTACH_BOX"] ?? null)) {
            // line 51
            echo "\t<div class=\"panel bg3 panel-container\" id=\"attach-panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 54
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_ATTACHMENT_EXPLAIN");
            echo " ";
            if (($context["S_ATTACH_REQ"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_ATTACHMENT_REQ");
            }
            echo "</p>

\t\t<fieldset class=\"fields2\" id=\"attach-panel-basic\">
\t\t<dl>
\t\t\t<dt><label for=\"fileupload\">";
            // line 58
            echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            if (($context["S_ATTACH_REQ"] ?? null)) {
                echo "*";
            }
            echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<input type=\"file\" name=\"fileupload\" id=\"fileupload\" class=\"inputbox autowidth\" />
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"filecomment\">";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"50\" class=\"inputbox autowidth\">";
            // line 65
            echo ($context["FILE_COMMENT"] ?? null);
            echo "</textarea></dd>
\t\t</dl>
\t\t</fieldset>
\t\t</div>
\t</div>
";
        }
        // line 71
        echo "
\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
        // line 75
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"";
        // line 76
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t\t\t";
        // line 77
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 83
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "appform_body.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "appform_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 83,  250 => 77,  246 => 76,  242 => 75,  236 => 71,  227 => 65,  222 => 64,  209 => 58,  198 => 54,  193 => 51,  191 => 50,  186 => 47,  183 => 46,  170 => 45,  166 => 44,  163 => 43,  152 => 40,  147 => 39,  144 => 38,  140 => 37,  135 => 35,  131 => 34,  128 => 33,  122 => 30,  118 => 29,  115 => 28,  113 => 27,  104 => 25,  99 => 24,  93 => 21,  89 => 20,  86 => 19,  80 => 17,  78 => 16,  73 => 13,  65 => 8,  61 => 6,  59 => 5,  55 => 4,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "appform_body.html", "");
    }
}
