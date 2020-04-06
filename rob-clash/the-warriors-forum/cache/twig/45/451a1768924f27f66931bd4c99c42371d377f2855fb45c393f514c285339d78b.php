<?php

/* ucp_ajax_chat.html */
class __TwigTemplate_7825df7a8fa842a107ed2547034af271f588a5c8cbc7b63b20655accbe4239fa extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_ajax_chat.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
";
        // line 4
        if ((isset($context["S_AJAXCHAT_VIEW"]) ? $context["S_AJAXCHAT_VIEW"] : null)) {
            // line 5
            echo "<h2>";
            echo $this->env->getExtension('phpbb')->lang("USER_AJAXCHAT_SETTINGS");
            echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t";
            // line 11
            if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
                echo "<p class=\"error\">";
                echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
                echo "</p>";
            }
            // line 12
            echo "
\t<dl>
\t\t<dt><label for=\"ajax_chat_view0\">";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_VIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_view1\"><input type=\"radio\" name=\"ajax_chat_view\" id=\"view_chat1\" value=\"1\"";
            // line 16
            if ((isset($context["S_AJAX_CHAT_VIEW"]) ? $context["S_AJAX_CHAT_VIEW"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_view0\"><input type=\"radio\" name=\"ajax_chat_view\" id=\"view_chat0\" value=\"0\"";
            // line 17
            if ( !(isset($context["S_AJAX_CHAT_VIEW"]) ? $context["S_AJAX_CHAT_VIEW"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t";
            // line 20
            if ( !(isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null)) {
                // line 21
                echo "\t\t<dl>
\t\t\t<dt><label for=\"ajax_chat_position0\">";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_POSITION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"ajax_chat_position1\"><input type=\"radio\" name=\"ajax_chat_position\" id=\"ajax_chat_position1\" value=\"1\"";
                // line 24
                if ((isset($context["S_AJAX_CHAT_POSITION"]) ? $context["S_AJAX_CHAT_POSITION"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("CHAT_TOP");
                echo "</label> 
\t\t\t\t<label for=\"ajax_chat_position0\"><input type=\"radio\" name=\"ajax_chat_position\" id=\"ajax_chat_position0\" value=\"0\"";
                // line 25
                if ( !(isset($context["S_AJAX_CHAT_POSITION"]) ? $context["S_AJAX_CHAT_POSITION"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("CHAT_BOTTOM");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            }
            // line 29
            echo "\t<dl>
\t\t<dt><label for=\"ajax_chat_messages_down0\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("AJAX_CHAT_MESSAGES_DOWN");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_messages_down1\"><input type=\"radio\" name=\"ajax_chat_messages_down\" id=\"ajax_chat_messages_down1\" value=\"1\"";
            // line 32
            if ((isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("CHAT_TOP");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_messages_down0\"><input type=\"radio\" name=\"ajax_chat_messages_down\" id=\"ajax_chat_messages_down0\" value=\"0\"";
            // line 33
            if ( !(isset($context["S_AJAX_CHAT_MESSAGES_DOWN"]) ? $context["S_AJAX_CHAT_MESSAGES_DOWN"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("CHAT_BOTTOM");
            echo "</label>
\t\t</dd>
\t</dl>
\t";
            // line 36
            if ( !(isset($context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"]) ? $context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"] : null)) {
                // line 37
                echo "\t\t<dl>
\t\t\t<dt><label for=\"ajax_chat_viewforum0\">";
                // line 38
                echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_VIEWFORUM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"ajax_chat_viewforum1\"><input type=\"radio\" name=\"ajax_chat_viewforum\" id=\"ajax_chat_viewforum1\" value=\"1\"";
                // line 40
                if ((isset($context["S_AJAX_CHAT_VIEWFORUM"]) ? $context["S_AJAX_CHAT_VIEWFORUM"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label> 
\t\t\t\t<label for=\"ajax_chat_viewforum0\"><input type=\"radio\" name=\"ajax_chat_viewforum\" id=\"ajax_chat_viewforum0\" value=\"0\"";
                // line 41
                if ( !(isset($context["S_AJAX_CHAT_VIEWFORUM"]) ? $context["S_AJAX_CHAT_VIEWFORUM"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            }
            // line 45
            echo "\t";
            if ( !(isset($context["S_AJAX_CHAT_VIEWTOPIC_OVERRIDE"]) ? $context["S_AJAX_CHAT_VIEWTOPIC_OVERRIDE"] : null)) {
                // line 46
                echo "\t\t<dl>
\t\t\t<dt><label for=\"ajax_chat_viewtopic0\">";
                // line 47
                echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_VIEWTOPIC");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"ajax_chat_ajax_chat_viewtopic1\"><input type=\"radio\" name=\"ajax_chat_viewtopic\" id=\"ajax_chat_viewtopic1\" value=\"1\"";
                // line 49
                if ((isset($context["S_AJAX_CHAT_VIEWTOPIC"]) ? $context["S_AJAX_CHAT_VIEWTOPIC"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label> 
\t\t\t\t<label for=\"ajax_chat_ajax_chat_viewtopic0\"><input type=\"radio\" name=\"ajax_chat_viewtopic\" id=\"ajax_chat_viewtopic0\" value=\"0\"";
                // line 50
                if ( !(isset($context["S_AJAX_CHAT_VIEWTOPIC"]) ? $context["S_AJAX_CHAT_VIEWTOPIC"] : null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            }
            // line 54
            echo "\t<dl>
\t\t<dt><label for=\"ajax_chat_avatars0\">";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_AVATARS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_avatars1\"><input type=\"radio\" name=\"ajax_chat_avatars\" id=\"ajax_chat_avatars1\" value=\"1\"";
            // line 57
            if ((isset($context["S_AJAX_CHAT_AVATARS"]) ? $context["S_AJAX_CHAT_AVATARS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_avatars0\"><input type=\"radio\" name=\"ajax_chat_avatars\" id=\"ajax_chat_avatars0\" value=\"0\"";
            // line 58
            if ( !(isset($context["S_AJAX_CHAT_AVATARS"]) ? $context["S_AJAX_CHAT_AVATARS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_avatar_hover0\">";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_AVATAR_HOVER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_avatar_hover1\"><input type=\"radio\" name=\"ajax_chat_avatar_hover\" id=\"ajax_chat_avatar_hover1\" value=\"1\"";
            // line 64
            if ((isset($context["S_AJAX_CHAT_AVATAR_HOVER"]) ? $context["S_AJAX_CHAT_AVATAR_HOVER"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_avatar_hover0\"><input type=\"radio\" name=\"ajax_chat_avatar_hover\" id=\"ajax_chat_avatar_hover0\" value=\"0\"";
            // line 65
            if ( !(isset($context["S_AJAX_CHAT_AVATAR_HOVER"]) ? $context["S_AJAX_CHAT_AVATAR_HOVER"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_sound0\">";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_SOUND");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_sound1\"><input type=\"radio\" name=\"ajax_chat_sound\" id=\"ajax_chat_sound1\" value=\"1\"";
            // line 71
            if ((isset($context["S_AJAX_CHAT_SOUND"]) ? $context["S_AJAX_CHAT_SOUND"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_sound0\"><input type=\"radio\" name=\"ajax_chat_sound\" id=\"ajax_chat_sound0\" value=\"0\"";
            // line 72
            if ( !(isset($context["S_AJAX_CHAT_SOUND"]) ? $context["S_AJAX_CHAT_SOUND"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_onlinelist0\">";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_ONLINELIST");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_onlinelist1\"><input type=\"radio\" name=\"ajax_chat_onlinelist\" id=\"ajax_chat_onlinelist1\" value=\"1\"";
            // line 78
            if ((isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_onlinelist0\"><input type=\"radio\" name=\"ajax_chat_onlinelist\" id=\"ajax_chat_onlinelist0\" value=\"0\"";
            // line 79
            if ( !(isset($context["S_AJAX_CHAT_ONLINELIST"]) ? $context["S_AJAX_CHAT_ONLINELIST"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_autocomplete0\">";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("USER_AJAX_CHAT_AUTOCOMPLETE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_autocomplete1\"><input type=\"radio\" name=\"ajax_chat_autocomplete\" id=\"ajax_chat_autocomplete1\" value=\"1\"";
            // line 85
            if ((isset($context["S_AJAX_CHAT_AUTOCOMPLETE"]) ? $context["S_AJAX_CHAT_AUTOCOMPLETE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_autocomplete0\"><input type=\"radio\" name=\"ajax_chat_autocomplete\" id=\"ajax_chat_autocomplete0\" value=\"0\"";
            // line 86
            if ( !(isset($context["S_AJAX_CHAT_AUTOCOMPLETE"]) ? $context["S_AJAX_CHAT_AUTOCOMPLETE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>

\t</fieldset>

\t</div>
</div>

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 96
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"reset\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 97
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t\t";
            // line 98
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
";
        } else {
            // line 101
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("USER_AJAXCHAT_SETTINGS");
            echo "</h2>

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("NO_VIEW_CHAT");
            echo "
\t\t</div>
\t</div>
";
        }
        // line 109
        echo "</form>

";
        // line 111
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_ajax_chat.html", 111)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_ajax_chat.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 111,  369 => 109,  362 => 105,  354 => 101,  348 => 98,  344 => 97,  338 => 96,  321 => 86,  313 => 85,  307 => 83,  296 => 79,  288 => 78,  282 => 76,  271 => 72,  263 => 71,  257 => 69,  246 => 65,  238 => 64,  232 => 62,  221 => 58,  213 => 57,  207 => 55,  204 => 54,  193 => 50,  185 => 49,  179 => 47,  176 => 46,  173 => 45,  162 => 41,  154 => 40,  148 => 38,  145 => 37,  143 => 36,  133 => 33,  125 => 32,  119 => 30,  116 => 29,  105 => 25,  97 => 24,  91 => 22,  88 => 21,  86 => 20,  76 => 17,  68 => 16,  62 => 14,  58 => 12,  52 => 11,  42 => 5,  40 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* <!-- IF S_AJAXCHAT_VIEW -->*/
/* <h2>{{ lang('USER_AJAXCHAT_SETTINGS') }}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<fieldset>*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* */
/* 	<dl>*/
/* 		<dt><label for="ajax_chat_view0">{{ lang('USER_AJAX_CHAT_VIEW') }}{{ lang('COLON') }}</label></dt>*/
/* 		<dd>*/
/* 			<label for="ajax_chat_view1"><input type="radio" name="ajax_chat_view" id="view_chat1" value="1"<!-- IF S_AJAX_CHAT_VIEW --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 			<label for="ajax_chat_view0"><input type="radio" name="ajax_chat_view" id="view_chat0" value="0"<!-- IF not S_AJAX_CHAT_VIEW --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- IF not S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 		<dl>*/
/* 			<dt><label for="ajax_chat_position0">{{ lang('USER_AJAX_CHAT_POSITION') }}{{ lang('COLON') }}</label></dt>*/
/* 			<dd>*/
/* 				<label for="ajax_chat_position1"><input type="radio" name="ajax_chat_position" id="ajax_chat_position1" value="1"<!-- IF S_AJAX_CHAT_POSITION --> checked="checked"<!-- ENDIF --> /> {{ lang('CHAT_TOP') }}</label> */
/* 				<label for="ajax_chat_position0"><input type="radio" name="ajax_chat_position" id="ajax_chat_position0" value="0"<!-- IF not S_AJAX_CHAT_POSITION --> checked="checked"<!-- ENDIF --> /> {{ lang('CHAT_BOTTOM') }}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="ajax_chat_messages_down0">{{ lang('AJAX_CHAT_MESSAGES_DOWN') }}{{ lang('COLON') }}</label></dt>*/
/* 		<dd>*/
/* 			<label for="ajax_chat_messages_down1"><input type="radio" name="ajax_chat_messages_down" id="ajax_chat_messages_down1" value="1"<!-- IF S_AJAX_CHAT_MESSAGES_DOWN --> checked="checked"<!-- ENDIF --> /> {{ lang('CHAT_TOP') }}</label> */
/* 			<label for="ajax_chat_messages_down0"><input type="radio" name="ajax_chat_messages_down" id="ajax_chat_messages_down0" value="0"<!-- IF not S_AJAX_CHAT_MESSAGES_DOWN --> checked="checked"<!-- ENDIF --> /> {{ lang('CHAT_BOTTOM') }}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- IF not S_AJAX_CHAT_VIEWFORUM_OVERRIDE -->*/
/* 		<dl>*/
/* 			<dt><label for="ajax_chat_viewforum0">{{ lang('USER_AJAX_CHAT_VIEWFORUM') }}{{ lang('COLON') }}</label></dt>*/
/* 			<dd>*/
/* 				<label for="ajax_chat_viewforum1"><input type="radio" name="ajax_chat_viewforum" id="ajax_chat_viewforum1" value="1"<!-- IF S_AJAX_CHAT_VIEWFORUM --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 				<label for="ajax_chat_viewforum0"><input type="radio" name="ajax_chat_viewforum" id="ajax_chat_viewforum0" value="0"<!-- IF not S_AJAX_CHAT_VIEWFORUM --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF not S_AJAX_CHAT_VIEWTOPIC_OVERRIDE -->*/
/* 		<dl>*/
/* 			<dt><label for="ajax_chat_viewtopic0">{{ lang('USER_AJAX_CHAT_VIEWTOPIC') }}{{ lang('COLON') }}</label></dt>*/
/* 			<dd>*/
/* 				<label for="ajax_chat_ajax_chat_viewtopic1"><input type="radio" name="ajax_chat_viewtopic" id="ajax_chat_viewtopic1" value="1"<!-- IF S_AJAX_CHAT_VIEWTOPIC --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 				<label for="ajax_chat_ajax_chat_viewtopic0"><input type="radio" name="ajax_chat_viewtopic" id="ajax_chat_viewtopic0" value="0"<!-- IF not S_AJAX_CHAT_VIEWTOPIC --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="ajax_chat_avatars0">{{ lang('USER_AJAX_CHAT_AVATARS') }}{{ lang('COLON') }}</label></dt>*/
/* 		<dd>*/
/* 			<label for="ajax_chat_avatars1"><input type="radio" name="ajax_chat_avatars" id="ajax_chat_avatars1" value="1"<!-- IF S_AJAX_CHAT_AVATARS --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 			<label for="ajax_chat_avatars0"><input type="radio" name="ajax_chat_avatars" id="ajax_chat_avatars0" value="0"<!-- IF not S_AJAX_CHAT_AVATARS --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ajax_chat_avatar_hover0">{{ lang('USER_AJAX_CHAT_AVATAR_HOVER') }}{{ lang('COLON') }}</label></dt>*/
/* 		<dd>*/
/* 			<label for="ajax_chat_avatar_hover1"><input type="radio" name="ajax_chat_avatar_hover" id="ajax_chat_avatar_hover1" value="1"<!-- IF S_AJAX_CHAT_AVATAR_HOVER --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 			<label for="ajax_chat_avatar_hover0"><input type="radio" name="ajax_chat_avatar_hover" id="ajax_chat_avatar_hover0" value="0"<!-- IF not S_AJAX_CHAT_AVATAR_HOVER --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ajax_chat_sound0">{{ lang('USER_AJAX_CHAT_SOUND') }}{{ lang('COLON') }}</label></dt>*/
/* 		<dd>*/
/* 			<label for="ajax_chat_sound1"><input type="radio" name="ajax_chat_sound" id="ajax_chat_sound1" value="1"<!-- IF S_AJAX_CHAT_SOUND --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 			<label for="ajax_chat_sound0"><input type="radio" name="ajax_chat_sound" id="ajax_chat_sound0" value="0"<!-- IF not S_AJAX_CHAT_SOUND --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ajax_chat_onlinelist0">{{ lang('USER_AJAX_CHAT_ONLINELIST') }}{{ lang('COLON') }}</label></dt>*/
/* 		<dd>*/
/* 			<label for="ajax_chat_onlinelist1"><input type="radio" name="ajax_chat_onlinelist" id="ajax_chat_onlinelist1" value="1"<!-- IF S_AJAX_CHAT_ONLINELIST --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 			<label for="ajax_chat_onlinelist0"><input type="radio" name="ajax_chat_onlinelist" id="ajax_chat_onlinelist0" value="0"<!-- IF not S_AJAX_CHAT_ONLINELIST --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="ajax_chat_autocomplete0">{{ lang('USER_AJAX_CHAT_AUTOCOMPLETE') }}{{ lang('COLON') }}</label></dt>*/
/* 		<dd>*/
/* 			<label for="ajax_chat_autocomplete1"><input type="radio" name="ajax_chat_autocomplete" id="ajax_chat_autocomplete1" value="1"<!-- IF S_AJAX_CHAT_AUTOCOMPLETE --> checked="checked"<!-- ENDIF --> /> {{ lang('YES') }}</label> */
/* 			<label for="ajax_chat_autocomplete0"><input type="radio" name="ajax_chat_autocomplete" id="ajax_chat_autocomplete0" value="0"<!-- IF not S_AJAX_CHAT_AUTOCOMPLETE --> checked="checked"<!-- ENDIF --> /> {{ lang('NO') }}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* */
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		{S_HIDDEN_FIELDS}<input type="reset" value="{{ lang('RESET') }}" name="reset" class="button2" />&nbsp;*/
/* 		<input type="submit" name="submit" value="{{ lang('SUBMIT') }}" class="button1" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* <!-- ELSE -->*/
/* 	<h2>{{ lang('USER_AJAXCHAT_SETTINGS') }}</h2>*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 			{{ lang('NO_VIEW_CHAT') }}*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
