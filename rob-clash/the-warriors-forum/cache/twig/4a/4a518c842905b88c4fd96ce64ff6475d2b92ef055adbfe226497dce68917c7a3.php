<?php

/* navbar_header.html */
class __TwigTemplate_88c869423cfb70389214a4b78e5f23c963e22c214b67d634076e4ed3118de7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-black\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-main\" class=\"linklist no-bulletin\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 6
        if (( !(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null) &&  !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\">";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 11
        // line 12
        echo "
\t\t\t\t\t";
        // line 13
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 15
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 16
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-map-marker\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 19
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file-text\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                echo " 
\t\t\t\t\t\t\t<li><a href=\"";
                // line 22
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-file-text\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-file-o\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 25
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-file-text-o\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 27
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\"><i class=\"fa fa-search\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t\t";
        // line 30
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 31
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 32
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-users\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-users\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 34
            echo "\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 37
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/navbar_header_quick_links_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 38
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 42
        // line 43
        echo "\t\t<li ";
        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo "><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\"><i class=\"fa fa-question-circle\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 44
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_header_navigation_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 45
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-cogs\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 46
        echo "\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            echo "<li data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\"><i class=\"fa fa-gavel\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 47
        echo "
\t";
        // line 48
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 49
            echo "\t\t";
            // line 50
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 51
            // line 52
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 53
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo " ";
            }
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "</a>
\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 57
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 58
            echo "\t
\t\t\t\t\t\t";
            // line 59
            // line 60
            echo "\t
\t\t\t\t\t\t<li><a href=\"";
            // line 61
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\"><i class=\"fa fa-pencil\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 62
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\"><i class=\"fa fa-user\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t
\t\t\t\t\t\t";
            // line 64
            // line 65
            echo "\t
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 67
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"fa fa-power-off\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 71
            // line 72
            echo "\t\t</li>
\t\t";
            // line 73
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 74
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 75
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-envelope\"></i> <span>";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t</li>
\t\t";
            }
            // line 78
            echo "\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 79
                echo "\t\t\t<li class=\"dropdown-container dropdown-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 80
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><i class=\"fa fa-bell\"></i> <span>";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo "</strong><span>]</span></a>
\t\t\t\t";
                // line 81
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 81)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 82
                echo "\t\t\t</li>
\t\t";
            }
            // line 84
            echo "\t\t";
            // line 85
            echo "\t";
        } else {
            // line 86
            echo "\t\t<li class=\"rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\"><i class=\"fa fa-power-off\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t";
            // line 87
            if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 88
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-plus-square\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t";
            }
            // line 90
            echo "\t\t";
            // line 91
            echo "\t";
        }
        // line 92
        echo "\t</ul>

\t</div>
</div>


<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
    ";
        // line 99
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 100
        echo "    ";
        // line 101
        echo "    <li class=\"breadcrumbs\">
        ";
        // line 102
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 103
        echo "        ";
        // line 104
        echo "        <span class=\"crumb\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span>
        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 106
            echo "            ";
            // line 107
            echo "            <span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
            ";
            // line 108
            // line 109
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        ";
        // line 111
        echo "    </li>
    ";
        // line 112
        // line 113
        echo "
    ";
        // line 114
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 115
            echo "        <li class=\"rightside responsive-search\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
    ";
        }
        // line 117
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 117,  422 => 115,  420 => 114,  417 => 113,  416 => 112,  413 => 111,  411 => 110,  405 => 109,  404 => 108,  391 => 107,  389 => 106,  385 => 105,  376 => 104,  374 => 103,  364 => 102,  361 => 101,  359 => 100,  356 => 99,  347 => 92,  344 => 91,  342 => 90,  334 => 88,  332 => 87,  323 => 86,  320 => 85,  318 => 84,  314 => 82,  302 => 81,  294 => 80,  289 => 79,  286 => 78,  276 => 75,  273 => 74,  271 => 73,  268 => 72,  267 => 71,  256 => 67,  252 => 65,  251 => 64,  242 => 62,  234 => 61,  231 => 60,  230 => 59,  227 => 58,  219 => 57,  206 => 53,  203 => 52,  202 => 51,  195 => 50,  193 => 49,  191 => 48,  188 => 47,  177 => 46,  166 => 45,  161 => 44,  146 => 43,  145 => 42,  139 => 38,  134 => 37,  130 => 35,  127 => 34,  118 => 33,  110 => 32,  107 => 31,  105 => 30,  102 => 29,  95 => 27,  88 => 25,  81 => 24,  74 => 22,  69 => 21,  61 => 19,  58 => 18,  50 => 16,  48 => 15,  45 => 14,  43 => 13,  40 => 12,  39 => 11,  32 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="navbar navbar-black" role="navigation">*/
/* 	<div class="inner">*/
/* */
/* 	<ul id="nav-main" class="linklist no-bulletin" role="menubar">*/
/* */
/* 		<li id="quick-links" class="small-icon responsive-menu dropdown-container<!-- IF not S_DISPLAY_QUICK_LINKS and not S_DISPLAY_SEARCH --> hidden<!-- ENDIF -->" data-skip-responsive="true">*/
/* 			<a href="#" class="responsive-menu-link dropdown-trigger">{L_QUICK_LINKS}</a>*/
/* 			<div class="dropdown hidden">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents" role="menu">*/
/* 					<!-- EVENT navbar_header_quick_links_before -->*/
/* */
/* 					<!-- IF S_DISPLAY_SEARCH -->*/
/* 						<li class="separator"></li>*/
/* 						<!-- IF S_REGISTERED_USER -->*/
/* 							<li><a href="{U_SEARCH_SELF}" role="menuitem"><i class="fa fa-map-marker"></i> {L_SEARCH_SELF}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_USER_LOGGED_IN -->*/
/* 							<li><a href="{U_SEARCH_NEW}" role="menuitem"><i class="fa fa-file-text"></i> {L_SEARCH_NEW}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_LOAD_UNREADS --> */
/* 							<li><a href="{U_SEARCH_UNREAD}" role="menuitem"><i class="fa fa-file-text"></i> {L_SEARCH_UNREAD}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 						<li><a href="{U_SEARCH_UNANSWERED}" role="menuitem"><i class="fa fa-file-o"></i> {L_SEARCH_UNANSWERED}</a></li>*/
/* 						<li><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem"><i class="fa fa-file-text-o"></i> {L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 						<li class="separator"></li>*/
/* 						<li><a href="{U_SEARCH}" role="menuitem"><i class="fa fa-search"></i> {L_SEARCH}</a></li>*/
/* 					<!-- ENDIF -->*/
/* */
/* 					<!-- IF not S_IS_BOT and (S_DISPLAY_MEMBERLIST or U_TEAM) -->*/
/* 						<li class="separator"></li>*/
/* 						<!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" role="menuitem"><i class="fa fa-users"></i> {L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 						<!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem"><i class="fa fa-users"></i> {L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 					<!-- ENDIF -->*/
/* 					<li class="separator"></li>*/
/* */
/* 					<!-- EVENT navbar_header_quick_links_after -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</li>*/
/* */
/* 		<!-- EVENT overall_header_navigation_prepend -->*/
/* 		<li <!-- IF not S_USER_LOGGED_IN -->data-skip-responsive="true"<!-- ELSE -->data-last-responsive="true"<!-- ENDIF -->><a href="{U_FAQ}" rel="help" title="{L_FAQ_EXPLAIN}" role="menuitem"><i class="fa fa-question-circle"></i> {L_FAQ}</a></li>*/
/* 		<!-- EVENT overall_header_navigation_append -->*/
/* 		<!-- IF U_ACP --><li data-last-responsive="true"><a href="{U_ACP}" title="{L_ACP}" role="menuitem"><i class="fa fa-cogs"></i> {L_ACP_SHORT}</a></li><!-- ENDIF -->*/
/* 		<!-- IF U_MCP --><li data-last-responsive="true"><a href="{U_MCP}" title="{L_MCP}" role="menuitem"><i class="fa fa-gavel"></i> {L_MCP_SHORT}</a></li><!-- ENDIF -->*/
/* */
/* 	<!-- IF S_REGISTERED_USER -->*/
/* 		<!-- EVENT navbar_header_user_profile_prepend -->*/
/* 		<li id="username_logged_in" class="rightside <!-- IF CURRENT_USER_AVATAR --> no-bulletin<!-- ENDIF -->" data-skip-responsive="true">*/
/* 			<!-- EVENT navbar_header_username_prepend -->*/
/* 			<div class="header-profile dropdown-container">*/
/* 				<a href="{U_PROFILE}" class="header-avatar dropdown-trigger"><!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR} <!-- ENDIF -->{CURRENT_USERNAME_SIMPLE}</a>*/
/* 				<div class="dropdown hidden">*/
/* 					<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 					<ul class="dropdown-contents" role="menu">*/
/* 						<!-- IF U_RESTORE_PERMISSIONS --><li class="small-icon icon-restore-permissions"><a href="{U_RESTORE_PERMISSIONS}">{L_RESTORE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* 	*/
/* 						<!-- EVENT navbar_header_profile_list_before -->*/
/* 	*/
/* 						<li><a href="{U_PROFILE}" title="{L_PROFILE}" role="menuitem"><i class="fa fa-pencil"></i> {L_PROFILE}</a></li>*/
/* 						<li><a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}" role="menuitem"><i class="fa fa-user"></i> {L_READ_PROFILE}</a></li>*/
/* 	*/
/* 						<!-- EVENT navbar_header_profile_list_after -->*/
/* 	*/
/* 						<li class="separator"></li>*/
/* 						<li><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem"><i class="fa fa-power-off"></i> {L_LOGIN_LOGOUT}</a></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- EVENT navbar_header_username_append -->*/
/* 		</li>*/
/* 		<!-- IF S_DISPLAY_PM -->*/
/* 			<li class="rightside" data-skip-responsive="true">*/
/* 				<a href="{U_PRIVATEMSGS}" role="menuitem"><i class="fa fa-envelope"></i> <span>{L_PRIVATE_MESSAGES} [</span><strong>{PRIVATE_MESSAGE_COUNT}</strong><span>]</span></a>*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/* 			<li class="dropdown-container dropdown-{S_CONTENT_FLOW_END} rightside" data-skip-responsive="true">*/
/* 				<a href="{U_VIEW_ALL_NOTIFICATIONS}" id="notification_list_button" class="dropdown-trigger"><i class="fa fa-bell"></i> <span>{L_NOTIFICATIONS} [</span><strong>{NOTIFICATIONS_COUNT}</strong><span>]</span></a>*/
/* 				<!-- INCLUDE notification_dropdown.html -->*/
/* 			</li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT navbar_header_user_profile_append -->*/
/* 	<!-- ELSE -->*/
/* 		<li class="rightside"  data-skip-responsive="true"><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x" role="menuitem"><i class="fa fa-power-off"></i> {L_LOGIN_LOGOUT}</a></li>*/
/* 		<!-- IF S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->*/
/* 			<li class="rightside" data-skip-responsive="true"><a href="{U_REGISTER}" role="menuitem"><i class="fa fa-plus-square"></i> {L_REGISTER}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT navbar_header_logged_out_content -->*/
/* 	<!-- ENDIF -->*/
/* 	</ul>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <ul id="nav-breadcrumbs" class="linklist navlinks" role="menubar">*/
/*     <!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/*     <!-- EVENT overall_header_breadcrumbs_before -->*/
/*     <li class="breadcrumbs">*/
/*         <!-- IF U_SITE_HOME --><span class="crumb"{$MICRODATA}><a href="{U_SITE_HOME}" data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_SITE_HOME}</span></a></span><!-- ENDIF -->*/
/*         <!-- EVENT overall_header_breadcrumb_prepend -->*/
/*         <span class="crumb"{$MICRODATA}><a href="{U_INDEX}" accesskey="h" data-navbar-reference="index" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></span>*/
/*         <!-- BEGIN navlinks -->*/
/*             <!-- EVENT overall_header_navlink_prepend -->*/
/*             <span class="crumb"{$MICRODATA}<!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><a href="{navlinks.U_VIEW_FORUM}" itemprop="url"><span itemprop="title">{navlinks.FORUM_NAME}</span></a></span>*/
/*             <!-- EVENT overall_header_navlink_append -->*/
/*         <!-- END navlinks -->*/
/*         <!-- EVENT overall_header_breadcrumb_append -->*/
/*     </li>*/
/*     <!-- EVENT overall_header_breadcrumbs_after -->*/
/* */
/*     <!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/*         <li class="rightside responsive-search" style="display: none;"><a href="{U_SEARCH}" title="{L_SEARCH_ADV_EXPLAIN}" role="menuitem">{L_SEARCH}</a></li>*/
/*     <!-- ENDIF -->*/
/* </ul>*/
/* */
