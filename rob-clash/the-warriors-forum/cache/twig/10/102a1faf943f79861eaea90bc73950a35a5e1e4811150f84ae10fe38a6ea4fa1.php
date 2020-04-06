<?php

/* @spaceace_ajaxchat/chat_body_input_full.html */
class __TwigTemplate_a77f724eacc0b010286db1c9e64315322a01c3c6f4a435a981d5ff9d81bfc448 extends Twig_Template
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
        echo "<ul class=\"chat topiclist forums\">
\t<li class=\"row\">
\t\t<dl class=\"row-item\">
\t\t\t<dt class=\"chatform\">
\t\t\t\t";
        // line 5
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 6
            echo "\t\t\t\t\t";
            if ((isset($context["S_AJAXCHAT_POST"]) ? $context["S_AJAXCHAT_POST"] : null)) {
                // line 7
                echo "\t\t\t\t\t\t<form name=\"postform\" id=\"chat-text\" method=\"post\" action=\"javascript:void(0);\" onsubmit=\"handle_send('add', this)\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t";
                // line 9
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 10
                $location = "chat_body_font_colour_hold.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body_font_colour_hold.html", "@spaceace_ajaxchat/chat_body_input_full.html", 10)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 11
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"message\" id=\"message\" class=\"inputbox chatinput\"";
                if ( !(isset($context["S_AJAX_CHAT_AUTOCOMPLETE"]) ? $context["S_AJAX_CHAT_AUTOCOMPLETE"] : null)) {
                    echo " autocomplete=\"off\"";
                }
                echo " />
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t";
                // line 13
                // line 14
                echo "\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("CHAT_SUBMIT_MESSAGE");
                echo "\" name=\"submit\" tabindex=\"6\" accesskey=\"s\" />
\t\t\t\t\t\t\t\t";
                // line 15
                if ((isset($context["S_AJAXCHAT_BBCODE"]) ? $context["S_AJAXCHAT_BBCODE"] : null)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 17
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" id=\"bbcodes\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODES");
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                    // line 18
                    // line 19
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" name=\"smilies\" id=\"smilies\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SMILIES");
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                    // line 23
                    // line 24
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t";
                // line 26
                echo "\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" onclick=\"popup('";
                echo (isset($context["FILENAME"]) ? $context["FILENAME"] : null);
                echo "/archive', 1000, 565); return false;\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("CHAT_ARCHIVE");
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("CHAT_ARCHIVE_EXPLAIN");
                echo "\" />
\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" onclick=\"popup('";
                // line 27
                echo (isset($context["FILENAME"]) ? $context["FILENAME"] : null);
                echo "/popup', 1000, 665); return false;\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("CHAT_POPUP");
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("CHAT_POPUP_EXPLAIN");
                echo "\" />
\t\t\t\t\t\t\t\t";
                // line 28
                if ((isset($context["S_AJAXCHAT_BBCODE"]) ? $context["S_AJAXCHAT_BBCODE"] : null)) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" name=\"chat_bbpalette\" id=\"chat_bbpalette\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("CHAT_FONT_COLOR");
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t\t\t\t";
                // line 32
                echo "\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t";
                // line 33
                $location = "chat_body_buttons.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body_buttons.html", "@spaceace_ajaxchat/chat_body_input_full.html", 33)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 34
                echo "\t\t\t\t\t\t</form>
\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("NO_POST_IN_CHAT");
                echo "
\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t<div class=\"input_message\">";
            echo $this->env->getExtension('phpbb')->lang("GUEST_MESSAGE");
            echo "</div>
\t\t\t\t";
        }
        // line 41
        echo "\t\t\t</dt>
\t\t\t<dd>
\t\t\t</dd>
\t\t</dl>
\t</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_input_full.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 41,  150 => 39,  147 => 38,  141 => 36,  137 => 34,  125 => 33,  122 => 32,  120 => 31,  114 => 29,  112 => 28,  104 => 27,  95 => 26,  93 => 25,  90 => 24,  89 => 23,  84 => 22,  82 => 21,  79 => 20,  76 => 19,  75 => 18,  70 => 17,  68 => 16,  66 => 15,  59 => 14,  58 => 13,  50 => 11,  38 => 10,  34 => 9,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <ul class="chat topiclist forums">*/
/* 	<li class="row">*/
/* 		<dl class="row-item">*/
/* 			<dt class="chatform">*/
/* 				<!-- IF not S_IS_BOT -->*/
/* 					<!-- IF S_AJAXCHAT_POST -->*/
/* 						<form name="postform" id="chat-text" method="post" action="javascript:void(0);" onsubmit="handle_send('add', this)">*/
/* 							<fieldset>*/
/* 								{S_FORM_TOKEN}*/
/* 								<!-- INCLUDE chat_body_font_colour_hold.html -->*/
/* 								<input type="text" tabindex="1" name="message" id="message" class="inputbox chatinput"<!-- IF not S_AJAX_CHAT_AUTOCOMPLETE --> autocomplete="off"<!-- ENDIF --> />*/
/* 								<br />*/
/* 								<!-- EVENT spaceace_ajax_chat_buttons_before -->*/
/* 								<input type="submit" class="button" value="{{ lang('SUBMIT') }}" title="{{ lang('CHAT_SUBMIT_MESSAGE') }}" name="submit" tabindex="6" accesskey="s" />*/
/* 								<!-- IF S_AJAXCHAT_BBCODE -->*/
/* 									<!-- EVENT spaceace_ajax_chat_bbcode_before -->*/
/* 									<input type="button" class="button" id="bbcodes" value="{{ lang('BBCODES') }}" />*/
/* 									<!-- EVENT spaceace_ajax_chat_bbcode_after -->*/
/* 								<!-- ENDIF -->*/
/* 								<!-- IF S_SMILIES_ALLOWED -->*/
/* 									<!-- EVENT spaceace_ajax_chat_smilies_before -->*/
/* 									<input type="button" class="button" name="smilies" id="smilies" value="{{ lang('SMILIES') }}" />*/
/* 									<!-- EVENT spaceace_ajax_chat_smilies_after -->*/
/* 								<!-- ENDIF -->*/
/* 								<!-- EVENT spaceace_ajax_chat_buttons_mid -->*/
/* 								<input type="button" class="button" onclick="popup('{FILENAME}/archive', 1000, 565); return false;" value="{{ lang('CHAT_ARCHIVE') }}" title="{{ lang('CHAT_ARCHIVE_EXPLAIN') }}" />*/
/* 								<input type="button" class="button" onclick="popup('{FILENAME}/popup', 1000, 665); return false;" value="{{ lang('CHAT_POPUP') }}" title="{{ lang('CHAT_POPUP_EXPLAIN') }}" />*/
/* 								<!-- IF S_AJAXCHAT_BBCODE -->*/
/* 									<input type="button" class="button" name="chat_bbpalette" id="chat_bbpalette" value="{{ lang('CHAT_FONT_COLOR') }}" />*/
/* 								<!-- ENDIF -->*/
/* 								<!-- EVENT spaceace_ajax_chat_buttons_after -->*/
/* 							</fieldset>*/
/* 						<!-- INCLUDE chat_body_buttons.html -->*/
/* 						</form>*/
/* 					<!-- ELSE -->*/
/* 						{{ lang('NO_POST_IN_CHAT') }}*/
/* 					<!-- ENDIF -->*/
/* 				<!-- ELSE -->*/
/* 					<div class="input_message">{{ lang('GUEST_MESSAGE') }}</div>*/
/* 				<!-- ENDIF -->*/
/* 			</dt>*/
/* 			<dd>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	</li>*/
/* </ul>*/
