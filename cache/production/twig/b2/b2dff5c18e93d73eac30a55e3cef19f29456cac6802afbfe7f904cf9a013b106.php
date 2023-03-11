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

/* overall_footer.html */
class __TwigTemplate_e361869491d295c7c362f1ed9000fe0212c12487f8ead0221c4e71bf69f1c224 extends \Twig\Template
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
        echo "\t\t";
        // line 2
        echo "
\t";
        // line 3
        // line 4
        echo "
\t<div id=\"wrap-footer\">
\t\t<div id=\"site-footer-nav\" role=\"navigation\">
\t\t\t<div class=\"chunk\">
\t\t\t\t<ul class=\"site-footer-nav\" role=\"menubar\">
\t\t\t\t\t<li class=\"breadcrumbs\">
\t\t\t\t\t\t";
        // line 10
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 11
        echo "\t\t\t\t\t\t";
        // line 12
        echo "\t\t\t\t\t\t<span class=\"crumb\"><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</a></span>
\t\t\t\t\t\t";
        // line 13
        // line 14
        echo "\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 15
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li class=\"icon-";
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon-";
            if ( !($context["S_WATCHING_FORUM"] ?? null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</a></li>";
        }
        // line 16
        echo "
\t\t\t\t\t";
        // line 17
        // line 18
        echo "\t\t\t\t\t<li class=\"rightside\">";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t\t\t\t";
        // line 19
        // line 20
        echo "\t\t\t\t\t";
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 21
            echo "\t\t\t\t\t\t<li class=\"rightside\"><a href=\"";
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t\t\t\t";
            // line 22
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li class=\"rightside\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t";
        // line 25
        echo "\t\t\t\t\t";
        if (($context["U_TEAM"] ?? null)) {
            echo "<li class=\"rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_TEAM"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 26
        echo "\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t";
        if (($context["U_CONTACT_US"] ?? null)) {
            echo "<li class=\"rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 28
        echo "\t\t\t\t\t<li class=\"rightside\"><a href=\"";
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</a></li>
\t\t\t\t\t<li class=\"rightside\"><a href=\"";
        // line 29
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 34
        $location = "site_footer_area.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("site_footer_area.html", "overall_footer.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "
\t\t<div id=\"site-footer\">
\t\t\t<div class=\"chunk\">
\t\t\t\t";
        // line 38
        // line 39
        echo "\t\t\t\t";
        echo ($context["CREDIT_LINE"] ?? null);
        echo "
\t\t\t\t<br />Ariki Theme by <a href=\"http://themeforest.net/user/Gramziu\">Gramziu</a>
\t\t\t\t";
        // line 41
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo "<br />";
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        // line 42
        echo "\t\t\t\t";
        // line 43
        echo "\t\t\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo "<br />";
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 44
        echo "\t\t\t</div>
\t\t</div>

\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 47
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
\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t</div>

\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 51
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t\t</div>
\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t\t<div class=\"alert_text\"></div>
\t\t</div>

\t\t<div style=\"display: none;\">
\t\t\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t\t\t";
        // line 62
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 63
        echo "\t\t</div>
</div>

<script src=\"";
        // line 66
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 67
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.5.1.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 68
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 69
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
        $this->env->get_assets_bag()->add_script($asset);        // line 70
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
        $this->env->get_assets_bag()->add_script($asset);        // line 71
        $asset_file = "chosen.jquery.min.js";
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
        $this->env->get_assets_bag()->add_script($asset);        // line 72
        echo "
";
        // line 73
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 74
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\t\twindow.addEventListener(\"load\", function(){
\t\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\t\"palette\": {
\t\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t\t},
\t\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\t\"content\": {
\t\t\t\t\t\t\"message\": \"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\t\"dismiss\": \"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\t\"link\": \"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\"href\": \"";
            // line 92
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t}
\t</script>
";
        }
        // line 99
        echo "
<script>
\t\$(function() {
\t\t\$(\"#st, #sd, #sk\").chosen({
\t\t\tdisable_search: true,
\t\t\twidth: \"auto\"
\t\t});
\t});
</script>

<script>
\t\$(function() {

\t\tvar sidebarRecentPostDiv = \$(\"#sidebar-recent-posts\");

\t\tif (sidebarRecentPostDiv.length) {
\t\t\tsidebarRecentPostDiv = sidebarRecentPostDiv[0];

\t\t\t\$.ajax({url: '";
        // line 117
        echo ($context["U_FEED"] ?? null);
        echo "?mode=topics', success: function (data) {
\t\t\t\t\$(data).find(\"entry\").each(function (i) {
\t\t\t\t\tvar el = \$(this);
\t\t\t\t\tvar entryWrap = document.createElement(\"div\");

\t\t\t\t\tvar entryTitle = document.createElement(\"a\");
\t\t\t\t\tvar entryAuthor = document.createElement(\"span\");
\t\t\t\t\tvar entryContent = document.createElement(\"span\");

\t\t\t\t\tentryTitle.className = (\"sidebar-recent-title\");
\t\t\t\t\tentryAuthor.className = (\"sidebar-recent-author\");
\t\t\t\t\tentryContent.className = (\"sidebar-recent-content\");

\t\t\t\t\tfunction cutText(name) {
\t\t\t\t\t\tvar elementText = el.find(name).text();

\t\t\t\t\t\tif (name == \"title\") {
\t\t\t\t\t\t\telementText = elementText.substring(elementText.indexOf(\"•\") + 2);
\t\t\t\t\t\t\telementText = unescapeHTML(elementText);
\t\t\t\t\t\t} else if (name == \"content\") {
\t\t\t\t\t\t\telementText = el.find(name).html();
\t\t\t\t\t\t\telementText = elementText
\t\t\t\t\t\t\t\t\t\t\t.replace(/<p*>(.*?)<\\/p>/ig, \"\")
\t\t\t\t\t\t\t\t\t\t\t.replace(\"<![CDATA[\", \"\")
\t\t\t\t\t\t\t\t\t\t\t.replace(\"]]>\", \"\");
\t\t\t\t\t\t\telementText = elementText.replace(/(<([^>]+)>)/ig, \"\");
\t\t\t\t\t\t\telementText = unescapeHTML(elementText);
\t\t\t\t\t\t}

\t\t\t\t\t\tif (elementText.length > 50) {
\t\t\t\t\t\t\treturn elementText.substr(0, 50);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\treturn elementText;\t
\t\t\t\t\t\t};
\t\t\t\t\t};

\t\t\t\t\t// Based on: http://stackoverflow.com/questions/1787322/htmlspecialchars-equivalent-in-javascript/4835406#comment36196953_4835406
\t\t\t\t\tfunction unescapeHTML(text) {
\t\t\t\t\t\tvar map = {
\t\t\t\t\t\t\t'&amp;': '&',
\t\t\t\t\t\t\t'&lt;': '<',
\t\t\t\t\t\t\t'&gt;': '>',
\t\t\t\t\t\t\t'&quot;': '\"',
\t\t\t\t\t\t\t'&#039;': \"'\"
\t\t\t\t\t\t};

\t\t\t\t\t\treturn text.replace(/&+[ampltgquo039]+;/g, function(m) { return map[m]; });
\t\t\t\t\t}

\t\t\t\t\tentryTitle.textContent = cutText(\"title\");
\t\t\t\t\tentryAuthor.textContent = \"";
        // line 167
        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
        echo " \" + cutText(\"author\");
\t\t\t\t\tentryContent.textContent = cutText(\"content\");
\t\t\t\t\tentryURL = el.find(\"id\").text();

\t\t\t\t\t\$(entryTitle).attr(\"href\", entryURL);

\t\t\t\t\tentryWrap.appendChild(entryTitle);
\t\t\t\t\tentryWrap.appendChild(entryAuthor);
\t\t\t\t\tentryWrap.appendChild(entryContent);

\t\t\t\t\tsidebarRecentPostDiv.appendChild(entryWrap);

\t\t\t\t\tif (++i >= 5) {
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t}, cache: false
\t\t\t});
\t\t}
\t});
</script>

";
        // line 189
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 190
        echo "
";
        // line 191
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 191)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 192
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 192);
        echo "

";
        // line 194
        // line 195
        echo "
</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 195,  490 => 194,  485 => 192,  471 => 191,  468 => 190,  463 => 189,  438 => 167,  385 => 117,  365 => 99,  355 => 92,  351 => 91,  347 => 90,  343 => 89,  322 => 74,  320 => 73,  317 => 72,  303 => 71,  289 => 70,  275 => 69,  268 => 68,  260 => 67,  256 => 66,  251 => 63,  247 => 62,  231 => 51,  216 => 47,  211 => 44,  205 => 43,  203 => 42,  198 => 41,  192 => 39,  191 => 38,  186 => 35,  174 => 34,  162 => 29,  153 => 28,  144 => 27,  142 => 26,  133 => 25,  131 => 24,  128 => 23,  118 => 22,  111 => 21,  108 => 20,  107 => 19,  102 => 18,  101 => 17,  98 => 16,  72 => 15,  69 => 14,  68 => 13,  61 => 12,  59 => 11,  51 => 10,  43 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
