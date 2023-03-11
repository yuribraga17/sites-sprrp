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

/* simple_footer.html */
class __TwigTemplate_7f752ea455001158184770ae9c542d9cf3f39615a975b268c39eebe28b9cfcda extends \Twig\Template
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
        echo "\t\t\t<div class=\"copyright\">";
        echo ($context["CREDIT_LINE"] ?? null);
        echo "
\t\t\t\t<br />Ariki Theme by <a href=\"http://themeforest.net/user/Gramziu\">Gramziu</a>
\t\t\t\t";
        // line 3
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo "<br />";
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        // line 4
        echo "\t\t\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo "<br />";
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 5
        echo "\t\t\t</div>

\t\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t\t</div>
\t\t\t<div id=\"loading_indicator\"></div>

\t\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t\t<h3 class=\"alert_title\"></h3><p class=\"alert_text\"></p>
\t\t\t</div>
\t\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t\t<div class=\"alert_text\"></div>
\t\t\t</div>

\t\t</div>
\t</div>
</div>

<script src=\"";
        // line 25
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 26
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.5.1.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 27
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 28
        $asset_file = "forum_fn.js";
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
        $asset_file = "ajax.js";
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
        $this->env->get_assets_bag()->add_script($asset);        // line 30
        echo "
";
        // line 31
        // line 32
        echo "
";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 33);
        echo "

";
        // line 35
        // line 36
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 36,  151 => 35,  146 => 33,  143 => 32,  142 => 31,  139 => 30,  125 => 29,  111 => 28,  104 => 27,  96 => 26,  92 => 25,  74 => 12,  58 => 7,  54 => 5,  48 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simple_footer.html", "");
    }
}
