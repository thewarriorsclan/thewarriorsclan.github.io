<?php

/* index_body.html */
class __TwigTemplate_97d847cbec806c06c3479e99752f35040f44fbb29bb440346af60dfd480d5038 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
            // line 5
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 6
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 9
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/index_body_markforums_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 10
        echo "
";
        // line 11
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 11)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 12
        echo "
";
        // line 13
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/index_body_forumlist_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 14
        echo "
<div class=\"time-info\">
\t";
        // line 16
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
            echo "<br />";
        }
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "
    ";
        // line 19
        // line 20
        echo "</div>

";
        // line 22
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 23
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 24
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 28
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                // line 29
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 31
            echo "\t\t\t";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 32
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 34
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 35
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 39
        echo "
";
        // line 40
        // line 41
        echo "
";
        // line 42
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 43
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 44
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<h3><a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 45
            echo "\t\t<p>
\t\t\t";
            // line 46
            // line 47
            echo "\t\t\t";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> <br />";
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "
\t\t\t";
            // line 48
            if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                echo "<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                echo "</em>";
            }
            // line 49
            echo "\t\t\t";
            // line 50
            echo "\t\t</p>
\t</div>
";
        }
        // line 53
        echo "
";
        // line 54
        if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
            // line 55
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 58
            // line 59
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 60
            echo "\t\t\t";
            // line 61
            echo "\t\t</p>
\t</div>
";
        }
        // line 64
        echo "
";
        // line 65
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 66
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 69
            // line 70
            echo "\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t";
            // line 71
            // line 72
            echo "\t\t</p>
\t</div>
";
        }
        // line 75
        echo "
";
        // line 76
        // line 77
        echo "
";
        // line 78
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 78)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 78,  301 => 77,  300 => 76,  297 => 75,  292 => 72,  291 => 71,  280 => 70,  279 => 69,  274 => 67,  271 => 66,  269 => 65,  266 => 64,  261 => 61,  259 => 60,  233 => 59,  232 => 58,  227 => 56,  224 => 55,  222 => 54,  219 => 53,  214 => 50,  212 => 49,  203 => 48,  192 => 47,  191 => 46,  188 => 45,  176 => 44,  173 => 43,  171 => 42,  168 => 41,  167 => 40,  164 => 39,  157 => 35,  152 => 34,  146 => 32,  143 => 31,  135 => 29,  133 => 28,  126 => 27,  119 => 26,  104 => 24,  99 => 23,  97 => 22,  93 => 20,  92 => 19,  87 => 18,  85 => 17,  80 => 16,  76 => 14,  71 => 13,  68 => 12,  56 => 11,  53 => 10,  48 => 9,  40 => 6,  37 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT index_body_markforums_before -->*/
/* <!-- IF U_MARK_FORUMS -->*/
/* 	<div class="action-bar compact">*/
/* 		<a href="{U_MARK_FORUMS}" class="mark-read rightside" accesskey="m" data-ajax="mark_forums_read">{L_MARK_FORUMS_READ}</a>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT index_body_markforums_after -->*/
/* */
/* <!-- INCLUDE forumlist_body.html -->*/
/* */
/* <!-- EVENT index_body_forumlist_body_after -->*/
/* */
/* <div class="time-info">*/
/* 	<!-- IF S_USER_LOGGED_IN -->{CURRENT_TIME}<br /><!-- ENDIF -->*/
/*     <!-- EVENT overall_footer_timezone_before -->*/
/*     {S_TIMEZONE}*/
/*     <!-- EVENT overall_footer_timezone_after -->*/
/* </div>*/
/* */
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* 	<form method="post" action="{S_LOGIN_ACTION}" class="headerspace">*/
/* 	<h3><a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a><!-- IF S_REGISTER_ENABLED -->&nbsp; &bull; &nbsp;<a href="{U_REGISTER}">{L_REGISTER}</a><!-- ENDIF --></h3>*/
/* 		<fieldset class="quick-login">*/
/* 			<label for="username"><span>{L_USERNAME}{L_COLON}</span> <input type="text" tabindex="1" name="username" id="username" size="10" class="inputbox" title="{L_USERNAME}" /></label>*/
/* 			<label for="password"><span>{L_PASSWORD}{L_COLON}</span> <input type="password" tabindex="2" name="password" id="password" size="10" class="inputbox" title="{L_PASSWORD}" autocomplete="off" /></label>*/
/* 			<!-- IF U_SEND_PASSWORD -->*/
/* 				<a href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 				<span class="responsive-hide">|</span> <label for="autologin">{L_LOG_ME_IN} <input type="checkbox" tabindex="4" name="autologin" id="autologin" /></label>*/
/* 			<!-- ENDIF -->*/
/* 			<input type="submit" tabindex="5" name="login" value="{L_LOGIN}" class="button2" />*/
/* 			{S_LOGIN_REDIRECT}*/
/* 		</fieldset>*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_stat_blocks_before -->*/
/* */
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<div class="stat-block online-list">*/
/* 		<!-- IF U_VIEWONLINE --><h3><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></h3><!-- ELSE --><h3>{L_WHO_IS_ONLINE}</h3><!-- ENDIF -->*/
/* 		<p>*/
/* 			<!-- EVENT index_body_block_online_prepend -->*/
/* 			{TOTAL_USERS_ONLINE} ({L_ONLINE_EXPLAIN})<br />{RECORD_USERS}<br /> <br />{LOGGED_IN_USER_LIST}*/
/* 			<!-- IF LEGEND --><br /><em>{L_LEGEND}{L_COLON} {LEGEND}</em><!-- ENDIF -->*/
/* 			<!-- EVENT index_body_block_online_append -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_BIRTHDAY_LIST -->*/
/* 	<div class="stat-block birthday-list">*/
/* 		<h3>{L_BIRTHDAYS}</h3>*/
/* 		<p>*/
/* 			<!-- EVENT index_body_block_birthday_prepend -->*/
/* 			<!-- IF .birthdays -->{L_CONGRATULATIONS}{L_COLON} <strong><!-- BEGIN birthdays -->{birthdays.USERNAME}<!-- IF birthdays.AGE !== '' --> ({birthdays.AGE})<!-- ENDIF --><!-- IF not birthdays.S_LAST_ROW -->, <!-- ENDIF --><!-- END birthdays --></strong><!-- ELSE -->{L_NO_BIRTHDAYS}<!-- ENDIF -->*/
/* 			<!-- EVENT index_body_block_birthday_append -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF NEWEST_USER -->*/
/* 	<div class="stat-block statistics">*/
/* 		<h3>{L_STATISTICS}</h3>*/
/* 		<p>*/
/* 			<!-- EVENT index_body_block_stats_prepend -->*/
/* 			{TOTAL_POSTS} &bull; {TOTAL_TOPICS} &bull; {TOTAL_USERS} &bull; {NEWEST_USER}*/
/* 			<!-- EVENT index_body_block_stats_append -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_stat_blocks_after -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
