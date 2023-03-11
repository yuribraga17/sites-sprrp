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

/* ucp_groups_manage.html */
class __TwigTemplate_08cb50b69b74345a3579f9c8651e1080186007692b297dda79883f1123bf9407 extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_groups_manage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2";
        // line 3
        if (($context["GROUP_COLOR"] ?? null)) {
            echo " style=\"color:#";
            echo ($context["GROUP_COLOR"] ?? null);
            echo ";\"";
        }
        echo ">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERGROUPS");
        if (($context["GROUP_NAME"] ?? null)) {
            echo " :: ";
            echo ($context["GROUP_NAME"] ?? null);
        }
        echo "</h2>

<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t";
        // line 10
        if (($context["S_ERROR"] ?? null)) {
            // line 11
            echo "\t<fieldset>
\t\t<p class=\"error\">";
            // line 12
            echo ($context["ERROR_MSG"] ?? null);
            echo "</p>
\t</fieldset>
\t";
        }
        // line 15
        echo "
\t<p>";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUPS_EXPLAIN");
        echo "</p>

\t";
        // line 18
        if (($context["S_EDIT"] ?? null)) {
            // line 19
            echo "\t\t<h3>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_DETAILS");
            echo "</h3>

\t\t<fieldset>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
            // line 23
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>";
            // line 24
            if (($context["S_SPECIAL_GROUP"] ?? null)) {
                echo "<strong";
                if (($context["GROUP_COLOUR"] ?? null)) {
                    echo " style=\"color: #";
                    echo ($context["GROUP_COLOUR"] ?? null);
                    echo ";\"";
                }
                echo ">";
                echo ($context["GROUP_NAME"] ?? null);
                echo "</strong> <input name=\"group_name\" type=\"hidden\" value=\"";
                echo ($context["GROUP_INTERNAL_NAME"] ?? null);
                echo "\" />
\t\t\t\t";
            } else {
                // line 25
                echo "<input name=\"group_name\" type=\"text\" id=\"group_name\" value=\"";
                echo ($context["GROUP_INTERNAL_NAME"] ?? null);
                echo "\" class=\"inputbox\" />";
            }
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"group_desc\">";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_DESC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><textarea id=\"group_desc\" name=\"group_desc\" rows=\"5\" cols=\"45\" class=\"inputbox\">";
            // line 29
            echo ($context["GROUP_DESC"] ?? null);
            echo "</textarea></dd>
\t\t\t<dd><label for=\"desc_parse_bbcode\"><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\" id=\"desc_parse_bbcode\"";
            // line 30
            if (($context["S_DESC_BBCODE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PARSE_BBCODE");
            echo "</label>&nbsp;<label for=\"desc_parse_smilies\"><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\" id=\"desc_parse_smilies\"";
            if (($context["S_DESC_SMILIES_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PARSE_SMILIES");
            echo "</label>&nbsp;<label for=\"desc_parse_urls\"><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\" id=\"desc_parse_urls\"";
            if (($context["S_DESC_URLS_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PARSE_URLS");
            echo "</label></dd>
\t\t</dl>
\t\t";
            // line 32
            if ( !($context["S_SPECIAL_GROUP"] ?? null)) {
                // line 33
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_type1\">";
                // line 34
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_TYPE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"group_type1\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type1\" value=\"";
                // line 36
                echo ($context["GROUP_TYPE_FREE"] ?? null);
                echo "\"";
                echo ($context["GROUP_FREE"] ?? null);
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_OPEN");
                echo "</label> 
\t\t\t\t<label for=\"group_type2\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type2\" value=\"";
                // line 37
                echo ($context["GROUP_TYPE_OPEN"] ?? null);
                echo "\"";
                echo ($context["GROUP_OPEN"] ?? null);
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_REQUEST");
                echo "</label> 
\t\t\t\t<label for=\"group_type3\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type3\" value=\"";
                // line 38
                echo ($context["GROUP_TYPE_CLOSED"] ?? null);
                echo "\"";
                echo ($context["GROUP_CLOSED"] ?? null);
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_CLOSED");
                echo "</label> 
\t\t\t\t<label for=\"group_type4\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type4\" value=\"";
                // line 39
                echo ($context["GROUP_TYPE_HIDDEN"] ?? null);
                echo "\"";
                echo ($context["GROUP_HIDDEN"] ?? null);
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_HIDDEN");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
            } else {
                // line 43
                echo "\t\t\t<input name=\"group_type\" type=\"hidden\" value=\"";
                echo ($context["GROUP_TYPE_SPECIAL"] ?? null);
                echo "\" />
\t\t";
            }
            // line 45
            echo "\t\t</fieldset>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">
\t<h3>";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_SETTINGS_SAVE");
            echo "</h3>

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"group_colour\">";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_COLOR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<input name=\"group_colour\" type=\"text\" id=\"group_colour\" value=\"";
            // line 58
            echo ($context["GROUP_COLOUR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" class=\"inputbox narrow\" />
\t\t\t<span style=\"background-color: #";
            // line 59
            echo ($context["GROUP_COLOUR"] ?? null);
            echo ";\">&nbsp;&nbsp;&nbsp;</span>
\t\t\t[ <a href=\"#\" id=\"color_palette_toggle\">";
            // line 60
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLOUR_SWATCH");
            echo "</a> ]
\t\t\t<div id=\"color_palette_placeholder\" class=\"color_palette_placeholder hidden\" data-color-palette=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#group_colour\"></div>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_rank\">";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_RANK");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"group_rank\" id=\"group_rank\">";
            // line 66
            echo ($context["S_RANK_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

";
            // line 73
            $location = "ucp_avatar_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_avatar_options.html", "ucp_groups_manage.html", 73)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 74
            echo "
<fieldset class=\"submit-buttons\">
\t";
            // line 76
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t<input type=\"reset\" value=\"";
            // line 77
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"update\" value=\"";
            // line 78
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t";
            // line 79
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
</fieldset>

";
        } elseif (        // line 82
($context["S_LIST"] ?? null)) {
            // line 83
            echo "
\t";
            // line 84
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "leader", [], "any", false, false, false, 84))) {
                // line 85
                echo "\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th class=\"name\">";
                // line 88
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEAD");
                echo "</th>
\t\t<th class=\"info\">";
                // line 89
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_DEFAULT");
                echo "</th>
\t\t<th class=\"posts\">";
                // line 90
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</th>
\t\t<th class=\"joined\">";
                // line 91
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                echo "</th>
\t\t<th class=\"mark\">";
                // line 92
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "leader", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                    // line 97
                    echo "\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["leader"], "S_ROW_COUNT", [], "any", false, false, false, 97) % 2 == 0)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t<td class=\"name\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "USERNAME_FULL", [], "any", false, false, false, 98);
                    echo "</td>
\t\t\t<td>";
                    // line 99
                    if (twig_get_attribute($this->env, $this->source, $context["leader"], "S_GROUP_DEFAULT", [], "any", false, false, false, 99)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                    }
                    echo "</td>
\t\t\t<td class=\"posts\">";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "USER_POSTS", [], "any", false, false, false, 100);
                    echo "</td>
\t\t\t<td class=\"joined\">";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "JOINED", [], "any", false, false, false, 101);
                    echo "</td>
\t\t\t<td class=\"mark\">&nbsp;</td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "\t</tbody>
\t</table>
\t";
            }
            // line 108
            echo "
\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "member", [], "any", false, false, false, 109));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 110
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["member"], "S_PENDING", [], "any", false, false, false, 110)) {
                    // line 111
                    echo "\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                    // line 114
                    echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_PENDING");
                    echo "</th>
\t\t\t\t<th class=\"info\">";
                    // line 115
                    echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_DEFAULT");
                    echo "</th>
\t\t\t\t<th class=\"posts\">";
                    // line 116
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo "</th>
\t\t\t\t<th class=\"joined\">";
                    // line 117
                    echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                    echo "</th>
\t\t\t\t<th class=\"mark\">";
                    // line 118
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                    echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 122
$context["member"], "S_APPROVED", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "\t\t\t";
                    if (($context["S_PENDING_SET"] ?? null)) {
                        // line 124
                        echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                    // line 130
                    echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_APPROVED");
                    echo "</th>
\t\t\t\t<th class=\"info\">";
                    // line 131
                    echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_DEFAULT");
                    echo "</th>
\t\t\t\t<th class=\"posts\">";
                    // line 132
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo "</th>
\t\t\t\t<th class=\"joined\">";
                    // line 133
                    echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                    echo "</th>
\t\t\t\t<th class=\"mark\">";
                    // line 134
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                    echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t";
                } else {
                    // line 139
                    echo "\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["member"], "S_ROW_COUNT", [], "any", false, false, false, 139) % 2 == 0)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td class=\"name\">";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "USERNAME_FULL", [], "any", false, false, false, 140);
                    echo "</td>
\t\t\t\t<td>";
                    // line 141
                    if (twig_get_attribute($this->env, $this->source, $context["member"], "S_GROUP_DEFAULT", [], "any", false, false, false, 141)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "USER_POSTS", [], "any", false, false, false, 142);
                    echo "</td>
\t\t\t\t<td class=\"joined\">";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "JOINED", [], "any", false, false, false, 143);
                    echo "</td>
\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["member"], "USER_ID", [], "any", false, false, false, 144);
                    echo "\" /></td>
\t\t\t</tr>
\t\t";
                }
                // line 147
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 148
                echo "\t\t<table class=\"table1\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\">";
                // line 151
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t<tr>
\t\t\t<td class=\"bg1\">";
                // line 156
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUPS_NO_MEMBERS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t</tbody>
\t</table>

\t";
            // line 162
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 162))) {
                // line 163
                echo "\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\"> 
\t\t\t";
                // line 165
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_groups_manage.html", 165)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 166
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 169
            echo "
\t</div>
</div>

<fieldset class=\"display-actions\">\t
\t<select name=\"action\"><option value=\"\">";
            // line 174
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_OPTION");
            echo "</option>";
            echo ($context["S_ACTION_OPTIONS"] ?? null);
            echo "</select>
\t<input class=\"button2\" type=\"submit\" name=\"update\" value=\"";
            // line 175
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t<br />
\t<div class=\"marking\">
\t\t<a class=\"ma-ma\" href=\"#\" onclick=\"marklist('ucp', 'mark', true); return false;\">
\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t";
            // line 180
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "
\t\t</a>
\t\t<a class=\"ma-un\" href=\"#\" onclick=\"marklist('ucp', 'mark', false); return false;\">
\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t";
            // line 184
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "
\t\t</a>
\t</div>
</fieldset>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
            // line 192
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_USERS");
            echo "</h3>

\t<p>";
            // line 194
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_USERS_UCP_EXPLAIN");
            echo "</p>

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"default0\">";
            // line 198
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_GROUP_DEFAULT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_GROUP_DEFAULT_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"default1\"><input type=\"radio\" name=\"default\" id=\"default1\" value=\"1\" /> ";
            // line 200
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> 
\t\t\t<label for=\"default0\"><input type=\"radio\" name=\"default\" id=\"default0\" value=\"0\" checked=\"checked\" /> ";
            // line 201
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"usernames\">";
            // line 205
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAMES_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea name=\"usernames\" id=\"usernames\" rows=\"3\" cols=\"30\" class=\"inputbox\"></textarea></dd>
\t\t<dd><strong><a href=\"";
            // line 207
            echo ($context["U_FIND_USERNAME"] ?? null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
            echo "</a></strong></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" name=\"addusers\" value=\"";
            // line 215
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t";
            // line 216
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
</fieldset>

";
        } else {
            // line 220
            echo "
\t";
            // line 221
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "leader", [], "any", false, false, false, 221))) {
                // line 222
                echo "\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 225
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                // line 226
                echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t";
                // line 232
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "leader", [], "any", false, false, false, 232));
                foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                    // line 233
                    echo "\t\t<li class=\"row";
                    if ((twig_get_attribute($this->env, $this->source, ($context["attachrow"] ?? null), "S_ROW_COUNT", [], "any", false, false, false, 233) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "U_EDIT", [], "any", false, false, false, 237);
                    echo "\" class=\"topictitle\"";
                    if (twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_COLOUR", [], "any", false, false, false, 237)) {
                        echo " style=\"color: #";
                        echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_COLOUR", [], "any", false, false, false, 237);
                        echo ";\"";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_NAME", [], "any", false, false, false, 237);
                    echo "</a>
\t\t\t\t\t\t";
                    // line 238
                    if (twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_DESC", [], "any", false, false, false, 238)) {
                        echo "<br />";
                        echo twig_get_attribute($this->env, $this->source, $context["leader"], "GROUP_DESC", [], "any", false, false, false, 238);
                    }
                    // line 239
                    echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"option\"><span><a href=\"";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "U_EDIT", [], "any", false, false, false, 241);
                    echo "\" >";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT");
                    echo "</a></span></dd>
\t\t\t\t<dd class=\"option\"><span><a href=\"";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["leader"], "U_LIST", [], "any", false, false, false, 242);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LIST");
                    echo "</a></span></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 246
                echo "\t\t</ul>
\t";
            } else {
                // line 248
                echo "\t\t<p><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_LEADERS");
                echo "</strong></p>
\t";
            }
            // line 250
            echo "
\t</div>
</div>

";
        }
        // line 255
        echo "</form>

";
        // line 257
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_manage.html", 257)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_manage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 257,  752 => 255,  745 => 250,  739 => 248,  735 => 246,  723 => 242,  717 => 241,  713 => 239,  708 => 238,  696 => 237,  684 => 233,  680 => 232,  671 => 226,  667 => 225,  662 => 222,  660 => 221,  657 => 220,  650 => 216,  646 => 215,  633 => 207,  625 => 205,  618 => 201,  614 => 200,  606 => 198,  599 => 194,  594 => 192,  583 => 184,  576 => 180,  568 => 175,  562 => 174,  555 => 169,  550 => 166,  538 => 165,  534 => 163,  532 => 162,  527 => 159,  518 => 156,  510 => 151,  505 => 148,  500 => 147,  494 => 144,  490 => 143,  486 => 142,  478 => 141,  474 => 140,  465 => 139,  457 => 134,  453 => 133,  449 => 132,  445 => 131,  441 => 130,  436 => 127,  431 => 124,  428 => 123,  426 => 122,  419 => 118,  415 => 117,  411 => 116,  407 => 115,  403 => 114,  398 => 111,  395 => 110,  390 => 109,  387 => 108,  382 => 105,  372 => 101,  368 => 100,  360 => 99,  356 => 98,  347 => 97,  343 => 96,  336 => 92,  332 => 91,  328 => 90,  324 => 89,  320 => 88,  315 => 85,  313 => 84,  310 => 83,  308 => 82,  302 => 79,  298 => 78,  294 => 77,  290 => 76,  286 => 74,  274 => 73,  264 => 66,  259 => 65,  251 => 60,  247 => 59,  243 => 58,  235 => 56,  228 => 52,  219 => 45,  213 => 43,  202 => 39,  194 => 38,  186 => 37,  178 => 36,  170 => 34,  167 => 33,  165 => 32,  144 => 30,  140 => 29,  135 => 28,  126 => 25,  111 => 24,  106 => 23,  98 => 19,  96 => 18,  91 => 16,  88 => 15,  82 => 12,  79 => 11,  77 => 10,  67 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_groups_manage.html", "");
    }
}
