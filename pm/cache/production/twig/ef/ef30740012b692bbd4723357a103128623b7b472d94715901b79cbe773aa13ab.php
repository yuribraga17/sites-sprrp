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

/* memberlist_body.html */
class __TwigTemplate_97db2185018860b57c1f833496f4e595774cfe9c21ae0cf524cdbce650b10a0f extends \Twig\Template
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
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo ($context["S_FORM_NAME"] ?? null);
            echo "\" data-field-name=\"";
            echo ($context["S_FIELD_NAME"] ?? null);
            echo "\">

";
        } else {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "\t<div id=\"memberlist_search\"";
            if ( !($context["S_SEARCH_USER"] ?? null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t<div class=\"chunk\" style=\"margin-top: 20px;\">
\t";
            // line 10
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 11
            echo "\t</div>
\t</div>
\t<form method=\"post\" action=\"";
            // line 13
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">

";
        }
        // line 16
        echo "
";
        // line 17
        // line 18
        echo "
\t";
        // line 19
        if (($context["S_SHOW_GROUP"] ?? null)) {
            // line 20
            echo "\t";
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                // line 21
                echo "\t\t";
                // line 22
                echo "\t\t<h2 class=\"group-title\"";
                if (($context["GROUP_COLOR"] ?? null)) {
                    echo " style=\"color:#";
                    echo ($context["GROUP_COLOR"] ?? null);
                    echo ";\"";
                }
                echo ">";
                echo ($context["GROUP_NAME"] ?? null);
                echo "</h2>
\t\t";
                // line 23
                // line 24
                echo "
\t\t<p>";
                // line 25
                echo ($context["GROUP_DESC"] ?? null);
                echo " ";
                echo ($context["GROUP_TYPE"] ?? null);
                echo "</p>
\t\t";
                // line 26
                // line 27
                echo "\t\t<p>
\t\t\t";
                // line 28
                if (($context["AVATAR_IMG"] ?? null)) {
                    echo ($context["AVATAR_IMG"] ?? null);
                }
                // line 29
                echo "\t\t\t";
                // line 30
                echo "\t\t\t";
                if (($context["RANK_IMG"] ?? null)) {
                    echo ($context["RANK_IMG"] ?? null);
                }
                // line 31
                echo "\t\t\t";
                if (($context["GROUP_RANK"] ?? null)) {
                    // line 32
                    echo "\t\t\t\t";
                    if ( !($context["RANK_IMG"] ?? null)) {
                        // line 33
                        echo "\t\t\t\t\t";
                        echo ($this->extensions['phpbb\template\twig\extension']->lang("GROUP_RANK") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                        echo "
\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t";
                    echo ($context["GROUP_RANK"] ?? null);
                    echo "
\t\t\t";
                }
                // line 37
                echo "\t\t\t";
                // line 38
                echo "\t\t</p>
\t";
            } else {
                // line 40
                echo "\t<div id=\"wrap-subhead\">
\t\t<div class=\"chunk\">
\t\t\t<div class=\"wrap-subhead\">

\t\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t\t";
                // line 45
                $location = "breadcrumbs.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("breadcrumbs.html", "memberlist_body.html", 45)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 46
                echo "\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<div id=\"subhead-title-sm\">
\t\t\t\t<h2 class=\"group-title\"";
                // line 51
                if (($context["GROUP_COLOR"] ?? null)) {
                    echo " style=\"color:#";
                    echo ($context["GROUP_COLOR"] ?? null);
                    echo ";\"";
                }
                echo ">";
                echo ($context["GROUP_NAME"] ?? null);
                echo "</h2>

\t\t\t\t<p>";
                // line 53
                echo ($context["GROUP_DESC"] ?? null);
                echo " ";
                echo ($context["GROUP_TYPE"] ?? null);
                echo "</p>
\t\t\t\t";
                // line 54
                if (((($context["AVATAR_IMG"] ?? null) || ($context["RANK_IMG"] ?? null)) || ($context["GROUP_RANK"] ?? null))) {
                    // line 55
                    echo "\t\t\t\t<p>
\t\t\t\t\t";
                    // line 56
                    if (($context["AVATAR_IMG"] ?? null)) {
                        echo ($context["AVATAR_IMG"] ?? null);
                    }
                    // line 57
                    echo "\t\t\t\t\t";
                    if (($context["RANK_IMG"] ?? null)) {
                        echo ($context["RANK_IMG"] ?? null);
                    }
                    // line 58
                    echo "\t\t\t\t\t";
                    if (($context["GROUP_RANK"] ?? null)) {
                        echo ($context["GROUP_RANK"] ?? null);
                    }
                    // line 59
                    echo "\t\t\t\t</p>
\t\t\t\t";
                }
                // line 61
                echo "\t\t\t</div>

\t\t</div>
\t</div>
\t";
            }
            // line 66
            echo "
\t";
            // line 67
            if ( !($context["S_IN_SEARCH_POPUP"] ?? null)) {
                // line 68
                echo "\t<div id=\"wrap-body\">
\t\t<div class=\"chunk\">
\t";
            }
            // line 71
            echo "\t";
        } else {
            // line 72
            echo "\t";
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                // line 73
                echo "\t\t";
                // line 74
                echo "\t\t<h2 class=\"solo\">";
                echo ($context["PAGE_TITLE"] ?? null);
                if (($context["SEARCH_WORDS"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo ($context["U_SEARCH_WORDS"] ?? null);
                    echo "\">";
                    echo ($context["SEARCH_WORDS"] ?? null);
                    echo "</a>";
                }
                echo "</h2>
\t";
            } else {
                // line 76
                echo "\t<div id=\"wrap-subhead\">
\t\t<div class=\"chunk\">
\t\t\t<div class=\"wrap-subhead\">

\t\t\t\t<ul id=\"breadcrumbs\" role=\"menubar\">
\t\t\t\t\t";
                // line 81
                $location = "breadcrumbs.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("breadcrumbs.html", "memberlist_body.html", 81)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 82
                echo "\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<div id=\"subhead-title\">
\t\t\t\t<h2 class=\"solo\">";
                // line 87
                echo ($context["PAGE_TITLE"] ?? null);
                if (($context["SEARCH_WORDS"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo ($context["U_SEARCH_WORDS"] ?? null);
                    echo "\">";
                    echo ($context["SEARCH_WORDS"] ?? null);
                    echo "</a>";
                }
                echo "</h2>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div id=\"wrap-body\">
\t\t<div class=\"chunk\">
\t";
            }
            // line 96
            echo "
\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 99
            if ((($context["U_FIND_MEMBER"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("HIDE_MEMBER_SEARCH"), "js");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif (((($context["S_SEARCH_USER"] ?? null) && ($context["U_HIDE_FIND_MEMBER"] ?? null)) &&  !($context["S_IN_SEARCH_POPUP"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_HIDE_FIND_MEMBER"] ?? null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME"), "js");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 100
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "first_char", [], "any", false, false, false, 101));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 102
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "U_SORT", [], "any", false, false, false, 102);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "DESC", [], "any", false, false, false, 102);
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t</strong>
\t\t\t</div>
\t\t
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 108
            echo ($context["TOTAL_USERS"] ?? null);
            echo "
\t\t\t\t";
            // line 109
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 109))) {
                echo " 
\t\t\t\t\t";
                // line 110
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 110)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 111
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 112
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t\t";
            }
            // line 114
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 117
        echo "
\t\t\t\t";
        // line 118
        if (((($context["S_LEADERS_SET"] ?? null) ||  !($context["S_SHOW_GROUP"] ?? null)) ||  !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 118)))) {
            // line 119
            echo "\t\t\t\t<div class=\"forumbg forumbg-table\">
\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t<table class=\"table1\" id=\"memberlist\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"name\" data-dfn=\"";
            // line 125
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 125)))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            echo ($context["U_SORT_RANK"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo "</a></span><a href=\"";
            echo ($context["U_SORT_USERNAME"] ?? null);
            echo "\">";
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 125)))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
            // line 126
            echo ($context["U_SORT_POSTS"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
            echo "</a></th>
\t\t\t\t\t\t<th class=\"info\">";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_FIRST_ROW", [], "any", false, false, false, 127)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 127);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
            // line 128
            echo ($context["U_SORT_JOINED"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
            echo "</a></th>
\t\t\t\t\t\t";
            // line 129
            if (($context["U_SORT_ACTIVE"] ?? null)) {
                echo "<th class=\"active\"><a href=\"";
                echo ($context["U_SORT_ACTIVE"] ?? null);
                echo "#memberlist\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 130
            echo "\t\t\t\t\t\t";
            // line 131
            echo "\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 135));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 136
            echo "\t\t\t\t\t\t";
            if (($context["S_SHOW_GROUP"] ?? null)) {
                // line 137
                echo "\t\t\t\t\t\t\t";
                if (( !twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_GROUP_LEADER", [], "any", false, false, false, 137) &&  !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_MEMBER_HEADER", [], "any", false, false, false, 137))) {
                    // line 138
                    echo "\t\t\t\t\t\t\t";
                    if ((($context["S_LEADERS_SET"] ?? null) && twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_FIRST_ROW", [], "any", false, false, false, 138))) {
                        // line 139
                        echo "\t\t\t\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t\t\t\t<td colspan=\"";
                        // line 140
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                    }
                    // line 143
                    echo "\t\t\t";
                    if (($context["S_LEADERS_SET"] ?? null)) {
                        // line 144
                        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                    }
                    // line 150
                    echo "\t\t\t<div class=\"forumbg forumbg-table\">
\t\t\t\t<div class=\"inner\">

\t\t\t\t<table class=\"table1\">
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t";
                    // line 156
                    if ( !($context["S_LEADERS_SET"] ?? null)) {
                        // line 157
                        echo "\t\t\t\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        echo ($context["U_SORT_RANK"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo ($context["U_SORT_USERNAME"] ?? null);
                        echo "\">";
                        if (($context["S_SHOW_GROUP"] ?? null)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
                        // line 158
                        echo ($context["U_SORT_POSTS"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo "</a></th>
\t\t\t\t\t\t<th class=\"info\">";
                        // line 159
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 159)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 159);
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
                        // line 160
                        echo ($context["U_SORT_JOINED"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                        echo "</a></th>
\t\t\t\t\t\t";
                        // line 161
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo ($context["U_SORT_ACTIVE"] ?? null);
                            echo "#memberlist\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 162
                        echo "\t\t\t\t\t\t";
                        // line 163
                        echo "\t\t\t\t";
                    } elseif (($context["S_SHOW_GROUP"] ?? null)) {
                        // line 164
                        echo "\t\t\t\t\t<th class=\"name\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
                        // line 165
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo "</th>
\t\t\t\t\t<th class=\"info\">";
                        // line 166
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 166));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_FIRST_ROW", [], "any", false, false, false, 166)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 166);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t<th class=\"joined\">";
                        // line 167
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                        echo "</th>
\t\t\t\t\t";
                        // line 168
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 169
                        echo "\t\t\t\t\t";
                        // line 170
                        echo "\t\t\t\t";
                    }
                    // line 171
                    echo "\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                    // line 174
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 175
                    echo "\t\t\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t\t";
            }
            // line 177
            echo "
\t\t\t\t<tr class=\"";
            // line 178
            if ((twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_ROW_COUNT", [], "any", false, false, false, 178) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_INACTIVE", [], "any", false, false, false, 178)) {
                echo " inactive";
            }
            echo "\">
\t\t\t\t\t<td><span class=\"rank-img\">";
            // line 179
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 179)) {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 179);
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_TITLE", [], "any", false, false, false, 179);
            }
            echo "</span>";
            if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME", [], "any", false, false, false, 179);
                echo "\" /> ";
            }
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME_FULL", [], "any", false, false, false, 179);
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_INACTIVE", [], "any", false, false, false, 179)) {
                echo " (";
                echo $this->extensions['phpbb\template\twig\extension']->lang("INACTIVE");
                echo ")";
            }
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "A_USERNAME", [], "any", false, false, false, 179);
                echo "'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t\t\t\t<td class=\"posts\">";
            // line 180
            if ((twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 180) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "U_SEARCH_USER", [], "any", false, false, false, 180);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 180);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 180);
            }
            echo "</td>
\t\t\t\t\t<td class=\"info\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 182));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 183
                echo "<div>";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "S_PROFILE_CONTACT", [], "any", false, false, false, 183)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 183);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["field"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 183);
                if (twig_get_attribute($this->env, $this->source, $context["field"], "S_PROFILE_CONTACT", [], "any", false, false, false, 183)) {
                    echo "</a>";
                }
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 185
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</td>
\t\t\t\t\t<td>";
            // line 188
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "JOINED", [], "any", false, false, false, 188);
            echo "</td>
\t\t\t\t\t";
            // line 189
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "<td>";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "LAST_ACTIVE", [], "any", false, false, false, 189);
                echo "&nbsp;</td>";
            }
            // line 190
            echo "\t\t\t\t\t";
            // line 191
            echo "\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 193
            echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
            // line 194
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MEMBERS");
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 203
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
            // line 204
            echo "\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 205
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t\t\t\t<br />
\t\t\t\t<div class=\"marking\">
\t\t\t\t\t<a class=\"ma-ma\" href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t";
            // line 210
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"ma-un\" href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">
\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t";
            // line 214
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t";
        }
        // line 219
        echo "
\t\t\t";
        // line 220
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 221
            echo "\t\t\t</form>
\t\t\t<form method=\"post\" id=\"sort-results\" action=\"";
            // line 222
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
\t\t\t";
        }
        // line 224
        echo "
\t\t\t";
        // line 225
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
            // line 226
            echo "\t\t\t<fieldset class=\"display-options\">
\t\t\t\t<label for=\"sk\">";
            // line 227
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_SORT_METHOD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo ($context["S_MODE_SELECT"] ?? null);
            echo "</select></label>
\t\t\t\t<label for=\"sd\">";
            // line 228
            echo $this->extensions['phpbb\template\twig\extension']->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select></label>
\t\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 229
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" class=\"button2\" />
\t\t\t</fieldset>
\t\t\t";
        }
        // line 232
        echo "
\t\t\t</form>

\t\t\t<div class=\"action-bar bottom\">
\t\t\t\t<br />
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
        // line 238
        echo ($context["TOTAL_USERS"] ?? null);
        echo "
\t\t\t\t\t";
        // line 239
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 239))) {
            echo " 
\t\t\t\t\t\t";
            // line 240
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 240)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 241
            echo "\t\t\t\t\t";
        } else {
            echo " 
\t\t\t\t\t\t &bull; ";
            // line 242
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t</div>
\t\t\t</div>

";
        // line 247
        // line 248
        echo "
";
        // line 249
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 250
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 250)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 252
            echo "\t\t\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 252)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 253
            echo "\t\t</div>
\t</div>
\t";
            // line 255
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 255)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  962 => 255,  958 => 253,  945 => 252,  931 => 250,  929 => 249,  926 => 248,  925 => 247,  920 => 244,  915 => 242,  910 => 241,  898 => 240,  894 => 239,  890 => 238,  882 => 232,  876 => 229,  870 => 228,  863 => 227,  860 => 226,  858 => 225,  855 => 224,  850 => 222,  847 => 221,  845 => 220,  842 => 219,  834 => 214,  827 => 210,  819 => 205,  816 => 204,  814 => 203,  806 => 197,  791 => 194,  788 => 193,  782 => 191,  780 => 190,  774 => 189,  770 => 188,  767 => 187,  761 => 185,  746 => 183,  741 => 182,  727 => 180,  700 => 179,  689 => 178,  686 => 177,  683 => 176,  680 => 175,  677 => 174,  672 => 171,  669 => 170,  667 => 169,  661 => 168,  657 => 167,  642 => 166,  638 => 165,  633 => 164,  630 => 163,  628 => 162,  620 => 161,  614 => 160,  578 => 159,  572 => 158,  553 => 157,  551 => 156,  543 => 150,  535 => 144,  532 => 143,  522 => 140,  519 => 139,  516 => 138,  513 => 137,  510 => 136,  504 => 135,  498 => 131,  496 => 130,  488 => 129,  482 => 128,  467 => 127,  461 => 126,  439 => 125,  431 => 119,  429 => 118,  426 => 117,  421 => 114,  416 => 112,  411 => 111,  399 => 110,  395 => 109,  391 => 108,  385 => 104,  374 => 102,  370 => 101,  367 => 100,  349 => 99,  344 => 96,  324 => 87,  317 => 82,  305 => 81,  298 => 76,  284 => 74,  282 => 73,  279 => 72,  276 => 71,  271 => 68,  269 => 67,  266 => 66,  259 => 61,  255 => 59,  250 => 58,  245 => 57,  241 => 56,  238 => 55,  236 => 54,  230 => 53,  219 => 51,  212 => 46,  200 => 45,  193 => 40,  189 => 38,  187 => 37,  181 => 35,  175 => 33,  172 => 32,  169 => 31,  164 => 30,  162 => 29,  158 => 28,  155 => 27,  154 => 26,  148 => 25,  145 => 24,  144 => 23,  133 => 22,  131 => 21,  128 => 20,  126 => 19,  123 => 18,  122 => 17,  119 => 16,  113 => 13,  109 => 11,  97 => 10,  89 => 8,  76 => 7,  65 => 4,  52 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_body.html", "");
    }
}
