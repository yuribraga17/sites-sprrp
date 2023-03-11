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

/* posting_buttons.html */
class __TwigTemplate_029cd17b90dd0e16ac9bf15354ed711bb48ffb84fb92325505daf44e9ff27a20 extends \Twig\Template
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
        echo "
<script>
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 4)) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_NAME", [], "any", false, false, false, 10);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}
</script>
";
        // line 28
        $asset_file = (("" . ($context["T_ASSETS_PATH"] ?? null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 29
        echo "
";
        // line 30
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 31
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" class=\"color_palette_placeholder\" data-color-palette=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>

";
            // line 38
            // line 39
            echo "<div id=\"format-buttons\"><input type=\"button\" class=\"bbcode-b\" accesskey=\"b\" name=\"addbbcode0\" value=\"B\" style=\"font-weight:bold;\" onclick=\"bbstyle(0)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_B_HELP");
            echo "\" /><input type=\"button\" class=\"bbcode-i\" accesskey=\"i\" name=\"addbbcode2\" value=\"i\" style=\"font-style:italic;\" onclick=\"bbstyle(2)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_I_HELP");
            echo "\" /><input type=\"button\" class=\"bbcode-u\" accesskey=\"u\" name=\"addbbcode4\" value=\"u\" style=\"text-decoration: underline;\" onclick=\"bbstyle(4)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_U_HELP");
            echo "\" />";
            if (($context["S_BBCODE_QUOTE"] ?? null)) {
                echo "<input type=\"button\" class=\"bbcode-quote\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_Q_HELP");
                echo "\" />";
            }
            echo "<input type=\"button\" class=\"bbcode-code\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_C_HELP");
            echo "\" /><input type=\"button\" class=\"bbcode-list\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" onclick=\"bbstyle(10)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_L_HELP");
            echo "\" /><input type=\"button\" class=\"bbcode-list-\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" onclick=\"bbstyle(12)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_O_HELP");
            echo "\" /><input type=\"button\" class=\"bbcode-asterisk\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" onclick=\"bbstyle(-1)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_LISTITEM_HELP");
            echo "\" />";
            if (($context["S_BBCODE_IMG"] ?? null)) {
                echo "<input type=\"button\" class=\"bbcode-img\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_P_HELP");
                echo "\" />";
            }
            if (($context["S_LINKS_ALLOWED"] ?? null)) {
                echo "<input type=\"button\" class=\"bbcode-url\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline;\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_W_HELP");
                echo "\" />";
            }
            if (($context["S_BBCODE_FLASH"] ?? null)) {
                echo "<input type=\"button\" class=\"bbcode-flash\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_D_HELP");
                echo "\" />";
            }
            echo "<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 40
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 41
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_SMALL");
            echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
            // line 42
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 43
            if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
                // line 44
                echo "\t\t\t<option value=\"150\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 45
                if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                    // line 46
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 48
                echo "\t\t";
            }
            // line 49
            echo "\t</select><input type=\"button\" class=\"bbcode-color\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette();\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_S_HELP");
            echo "\" />";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                echo "<input type=\"button\" class=\"bbcode-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG_CLEAN", [], "any", false, false, false, 49);
                echo "\" name=\"addbbcode";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 49);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG", [], "any", false, false, false, 49);
                echo "\" onclick=\"bbstyle(";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 49);
                echo ")\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_HELPLINE", [], "any", false, false, false, 49);
                echo "\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "</div>
";
            // line 51
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 51,  218 => 50,  194 => 49,  191 => 48,  185 => 46,  183 => 45,  178 => 44,  176 => 43,  172 => 42,  168 => 41,  164 => 40,  123 => 39,  122 => 38,  113 => 33,  109 => 31,  107 => 30,  104 => 29,  90 => 28,  83 => 24,  76 => 20,  55 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_buttons.html", "");
    }
}
