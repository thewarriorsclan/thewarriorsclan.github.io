<?php

/* @spaceace_ajaxchat/chat_body.html */
class __TwigTemplate_dc8e67f1e2e7fc90fa6159933a981a8bf7b2d4cfd4e78b20c4196492a2e09900 extends Twig_Template
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
        if ((isset($context["S_CHAT_ENABLED"]) ? $context["S_CHAT_ENABLED"] : null)) {
            // line 2
            echo "\t";
            if ((isset($context["S_AJAXCHAT_VIEW"]) ? $context["S_AJAXCHAT_VIEW"] : null)) {
                // line 3
                echo "\t\t";
                if ((isset($context["S_GET_CHAT"]) ? $context["S_GET_CHAT"] : null)) {
                    // line 4
                    echo "\t\t\t";
                    $location = "chat_body_readadd.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_readadd.html", "@spaceace_ajaxchat/chat_body.html", 4)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 5
                    echo "\t\t";
                } else {
                    // line 6
                    echo "\t\t\t";
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat")) {
                        // line 7
                        echo "\t\t\t\t";
                        $location = "overall_header.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("overall_header.html", "@spaceace_ajaxchat/chat_body.html", 7)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 8
                        echo "\t\t\t";
                    }
                    // line 9
                    echo "\t\t\t";
                    if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/popup") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive"))) {
                        // line 10
                        echo "\t\t\t\t";
                        $location = "simple_header.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("simple_header.html", "@spaceace_ajaxchat/chat_body.html", 10)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 11
                        echo "\t\t\t\t<div>
\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t";
                    $location = "chat_body_script_vars.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_script_vars.html", "@spaceace_ajaxchat/chat_body.html", 13)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 14
                    echo "\t\t\t";
                    $asset_file = "@spaceace_ajaxchat/js/ajax_chat.js";
                    $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
                    if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                        $asset_path = $asset->get_path();                        $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                        if (!file_exists($local_file)) {
                            $local_file = $this->getEnvironment()->findTemplate($asset_path);
                            $asset->set_path($local_file, true);
                        $asset->add_assets_version('2');
                        $asset_file = $asset->get_url();
                        }
                    }
                    $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
                    // line 15
                    echo "\t\t\t";
                    // line 16
                    echo "\t\t\t<div id=\"ajaxchat\">
\t\t\t\t<div class=\"forabg\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t\t\t\t<dt><div class=\"chat-header-link\">";
                    // line 22
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index")) {
                        echo "<a href=\"";
                        echo (isset($context["U_CHAT"]) ? $context["U_CHAT"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("CHAT_EXPLAIN");
                        echo "</a>";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("CHAT_EXPLAIN");
                    }
                    echo "</div></dt>
\t\t\t\t\t\t\t\t\t<dd></dd>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    // line 27
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive")) {
                        // line 28
                        echo "\t\t\t\t\t\t\t";
                        if ((isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t";
                            $location = "chat_body_input.html";
                            $namespace = false;
                            if (strpos($location, '@') === 0) {
                                $namespace = substr($location, 1, strpos($location, '/') - 1);
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                            }
                            $this->loadTemplate("chat_body_input.html", "@spaceace_ajaxchat/chat_body.html", 29)->display($context);
                            if ($namespace) {
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }
                            // line 30
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 31
                        echo "\t\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
                    // line 34
                    if (((isset($context["CHAT_RULES"]) ? $context["CHAT_RULES"] : null) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive"))) {
                        // line 35
                        echo "\t\t\t\t\t\t<div class=\"navbar chatrules\">
\t\t\t\t\t\t\t<span>";
                        // line 36
                        echo (isset($context["CHAT_RULES"]) ? $context["CHAT_RULES"] : null);
                        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t<div>
\t\t\t\t\t<div class=\"shout-body";
                    // line 40
                    if ((isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null)) {
                        if (((isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive"))) {
                            echo " shouts";
                        }
                    }
                    if ((( !(isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive")) ||  !(isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null))) {
                        echo " chat_online_off";
                    }
                    if ((((isset($context["S_CHAT"]) ? $context["S_CHAT"] : null) || (isset($context["S_POPUP"]) ? $context["S_POPUP"] : null)) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive"))) {
                        echo " main";
                    }
                    echo "\">
\t\t\t\t\t\t<div id=\"chat\" ";
                    // line 41
                    if ( !(isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                        echo "class=\"chat-messages-down\"";
                    }
                    echo " >
\t\t\t\t\t\t\t";
                    // line 42
                    $location = "chat_body_chatrow.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_chatrow.html", "@spaceace_ajaxchat/chat_body.html", 42)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 43
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 45
                    if ((isset($context["S_WHOISONLINE"]) ? $context["S_WHOISONLINE"] : null)) {
                        // line 46
                        echo "\t\t\t\t\t\t<div class=\"whois";
                        if (((isset($context["S_CHAT"]) ? $context["S_CHAT"] : null) || (isset($context["S_POPUP"]) ? $context["S_POPUP"] : null))) {
                            echo " main";
                        }
                        if ((( !(isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null) || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive")) ||  !(isset($context["S_WHOIS_CHATTING"]) ? $context["S_WHOIS_CHATTING"] : null))) {
                            echo " whois_online_off";
                        }
                        echo "\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t";
                        // line 48
                        echo $this->env->getExtension('phpbb')->lang("WHOIS_CHATTING");
                        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div id=\"whois_online\">
\t\t\t\t\t\t\t\t";
                        // line 51
                        $location = "chat_body_whois.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body_whois.html", "@spaceace_ajaxchat/chat_body.html", 51)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 52
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t</div>
\t\t\t\t<div class=\"chatnavbar navbar\">
\t\t\t\t\t";
                    // line 57
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat/archive")) {
                        // line 58
                        echo "\t\t\t\t\t\t";
                        if ( !(isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                            // line 59
                            echo "\t\t\t\t\t\t\t";
                            $location = "chat_body_input.html";
                            $namespace = false;
                            if (strpos($location, '@') === 0) {
                                $namespace = substr($location, 1, strpos($location, '/') - 1);
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                            }
                            $this->loadTemplate("chat_body_input.html", "@spaceace_ajaxchat/chat_body.html", 59)->display($context);
                            if ($namespace) {
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }
                            // line 60
                            echo "\t\t\t\t\t\t";
                        }
                        // line 61
                        echo "\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t<div class=\"chatform\">
\t\t\t\t\t\t<span class=\"list chat-icon details\">";
                    // line 63
                    echo $this->env->getExtension('phpbb')->lang("DETAILS");
                    echo "</span>
\t\t\t\t\t\t<img src=\"";
                    // line 64
                    echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/images/check_indicator.gif\" id=\"check_indicator\" alt=\"check_indicator\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VERSION");
                    echo "\" />
\t\t\t\t\t\t<img src=\"";
                    // line 65
                    echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/images/act_indicator.gif\" id=\"act_indicator\" alt=\"act_indicator\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VERSION");
                    echo "\" />
\t\t\t\t\t\t<strong>&nbsp;";
                    // line 66
                    echo $this->env->getExtension('phpbb')->lang("UPDATES");
                    echo "&nbsp;<span id=\"update_seconds\">";
                    echo (isset($context["REFRESH_TIME"]) ? $context["REFRESH_TIME"] : null);
                    echo "</span>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("UNIT");
                    echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                    // line 70
                    // line 71
                    echo "\t\t\t";
                    if (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat")) {
                        // line 72
                        echo "\t\t\t\t";
                        $location = "overall_footer.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("overall_footer.html", "@spaceace_ajaxchat/chat_body.html", 72)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 73
                        echo "\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t";
                    if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/popup") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "app/chat/archive"))) {
                        // line 75
                        echo "\t\t\t\t</div>
\t\t\t\t";
                        // line 76
                        $location = "simple_footer.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("simple_footer.html", "@spaceace_ajaxchat/chat_body.html", 76)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 77
                        echo "\t\t\t";
                    }
                    // line 78
                    echo "\t\t";
                }
                // line 79
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 79,  350 => 78,  347 => 77,  335 => 76,  332 => 75,  329 => 74,  326 => 73,  313 => 72,  310 => 71,  309 => 70,  298 => 66,  292 => 65,  286 => 64,  282 => 63,  279 => 62,  276 => 61,  273 => 60,  260 => 59,  257 => 58,  255 => 57,  251 => 55,  246 => 52,  234 => 51,  228 => 48,  217 => 46,  215 => 45,  211 => 43,  199 => 42,  193 => 41,  179 => 40,  176 => 39,  170 => 36,  167 => 35,  165 => 34,  161 => 32,  158 => 31,  155 => 30,  142 => 29,  139 => 28,  137 => 27,  121 => 22,  113 => 16,  111 => 15,  95 => 14,  82 => 13,  78 => 11,  65 => 10,  62 => 9,  59 => 8,  46 => 7,  43 => 6,  40 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_CHAT_ENABLED -->*/
/* 	<!-- IF S_AJAXCHAT_VIEW -->*/
/* 		<!-- IF S_GET_CHAT -->*/
/* 			<!-- INCLUDE chat_body_readadd.html -->*/
/* 		<!-- ELSE -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat' -->*/
/* 				<!-- INCLUDE overall_header.html -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat/popup' or SCRIPT_NAME == 'app/chat/archive' -->*/
/* 				<!-- INCLUDE simple_header.html -->*/
/* 				<div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- INCLUDE chat_body_script_vars.html -->*/
/* 			<!-- INCLUDEJS @spaceace_ajaxchat/js/ajax_chat.js -->*/
/* 			<!-- EVENT spaceace_ajax_chat_chat_body_before -->*/
/* 			<div id="ajaxchat">*/
/* 				<div class="forabg">*/
/* 					<div class="inner">*/
/* 						<ul class="topiclist">*/
/* 							<li class="header">*/
/* 								<dl class="row-item">*/
/* 									<dt><div class="chat-header-link"><!-- IF SCRIPT_NAME == 'index' --><a href="{U_CHAT}">{{ lang('CHAT_EXPLAIN') }}</a><!-- ELSE -->{{ lang('CHAT_EXPLAIN') }}<!-- ENDIF --></div></dt>*/
/* 									<dd></dd>*/
/* 								</dl>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<!-- IF SCRIPT_NAME neq 'app/chat/archive' -->*/
/* 							<!-- IF S_AJAX_CHAT_MESSAGES_DOWN -->*/
/* 								<!-- INCLUDE chat_body_input.html -->*/
/* 							<!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</div>*/
/* 					<!-- IF CHAT_RULES and SCRIPT_NAME neq 'app/chat/archive' -->*/
/* 						<div class="navbar chatrules">*/
/* 							<span>{CHAT_RULES}</span>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 				<div>*/
/* 					<div class="shout-body<!-- IF S_WHOIS_CHATTING --><!-- IF S_AJAX_CHAT_ONLINELIST and SCRIPT_NAME neq 'app/chat/archive' --> shouts<!-- ENDIF --><!-- ENDIF --><!-- IF not S_AJAX_CHAT_ONLINELIST or SCRIPT_NAME == 'app/chat/archive' or not S_WHOIS_CHATTING --> chat_online_off<!-- ENDIF --><!-- IF S_CHAT or S_POPUP or SCRIPT_NAME == 'app/chat/archive' --> main<!-- ENDIF -->">*/
/* 						<div id="chat" <!-- IF not S_AJAX_CHAT_MESSAGES_DOWN -->class="chat-messages-down"<!-- ENDIF --> >*/
/* 							<!-- INCLUDE chat_body_chatrow.html -->*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- IF S_WHOISONLINE -->*/
/* 						<div class="whois<!-- IF S_CHAT or S_POPUP --> main<!-- ENDIF --><!-- IF not S_AJAX_CHAT_ONLINELIST or SCRIPT_NAME == 'app/chat/archive' or not S_WHOIS_CHATTING --> whois_online_off<!-- ENDIF -->">*/
/* 							<h3>*/
/* 								{{ lang('WHOIS_CHATTING') }}*/
/* 							</h3>*/
/* 							<div id="whois_online">*/
/* 								<!-- INCLUDE chat_body_whois.html -->*/
/* 							</div>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				<div class="chatnavbar navbar">*/
/* 					<!-- IF SCRIPT_NAME neq 'app/chat/archive' -->*/
/* 						<!-- IF not S_AJAX_CHAT_MESSAGES_DOWN -->*/
/* 							<!-- INCLUDE chat_body_input.html -->*/
/* 						<!-- ENDIF -->*/
/* 					<!-- ENDIF -->*/
/* 					<div class="chatform">*/
/* 						<span class="list chat-icon details">{{ lang('DETAILS') }}</span>*/
/* 						<img src="{BOARD_URL}ext/spaceace/ajaxchat/styles/all/theme/images/check_indicator.gif" id="check_indicator" alt="check_indicator" title="{{ lang('VERSION') }}" />*/
/* 						<img src="{BOARD_URL}ext/spaceace/ajaxchat/styles/all/theme/images/act_indicator.gif" id="act_indicator" alt="act_indicator" title="{{ lang('VERSION') }}" />*/
/* 						<strong>&nbsp;{{ lang('UPDATES') }}&nbsp;<span id="update_seconds">{REFRESH_TIME}</span>&nbsp;{{ lang('UNIT') }}</strong>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- EVENT spaceace_ajax_chat_chat_body_after -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat' -->*/
/* 				<!-- INCLUDE overall_footer.html -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF SCRIPT_NAME == 'app/chat/popup' or SCRIPT_NAME == 'app/chat/archive' -->*/
/* 				</div>*/
/* 				<!-- INCLUDE simple_footer.html -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
