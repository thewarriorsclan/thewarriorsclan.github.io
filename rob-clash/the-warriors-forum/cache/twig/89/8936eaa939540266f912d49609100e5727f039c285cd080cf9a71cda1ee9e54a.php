<?php

/* ajax_chat.html */
class __TwigTemplate_8a7896733bb662f8a993d41df223321cdf2cdc8b86c3c135efc5502d9ed7a02d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ajax_chat.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script>
\tvar form_name = 'ajax_chat';
\tvar text_name = 'ajax_chat_rule_text';
\tvar load_draft = false;
\tvar upload = false;
\tvar imageTag = false;
</script>

<a id=\"maincontent\"></a>

<h1>";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("ACP_AJAX_CHAT");
        echo "</h1>

<p>";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("ACP_AJAX_CHAT_EXPLAIN");
        echo "</p>

";
        // line 17
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 18
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 20
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 23
        echo "
<form id=\"ajax_chat\" method=\"post\" action=\"";
        // line 24
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

\t<input class=\"button1\" type=\"submit\" id=\"submit_real\" name=\"submit\" value=\"";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" style=\"display:none;\" />

\t<fieldset>
\t\t<legend>";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("AJAX_CHAT_RULES");
        echo "</legend>

\t\t<p>";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("RULES_AJAX_CHAT_EXPLAIN");
        echo "</p>

\t\t";
        // line 33
        $location = "acp_posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("acp_posting_buttons.html", "ajax_chat.html", 33)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 34
        echo "
\t\t<dl class=\"responsive-columns\">
\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dt>
\t\t\t<dd style=\"margin-";
        // line 37
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px;\">
\t\t\t\t<textarea name=\"ajax_chat_rule_text\" rows=\"10\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
        // line 38
        echo (isset($context["AJAX_CHAT_RULE_TEXT"]) ? $context["AJAX_CHAT_RULE_TEXT"] : null);
        echo "</textarea>
\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 40
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px; margin-top: 5px;\">
\t\t\t\t";
        // line 41
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 42
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"";
            if ((isset($context["S_BBCODE_DISABLE_CHECKED"]) ? $context["S_BBCODE_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 45
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"";
            if ((isset($context["S_SMILIES_DISABLE_CHECKED"]) ? $context["S_SMILIES_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 48
            echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"";
            if ((isset($context["S_MAGIC_URL_DISABLE_CHECKED"]) ? $context["S_MAGIC_URL_DISABLE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 51
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo ": 90px; margin-top: 10px;\"><strong>";
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " </strong>";
        echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
        echo " :: ";
        echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
        echo " :: ";
        echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
        echo " :: ";
        echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
        echo " :: ";
        echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
        echo "</dd>
\t\t</dl>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 55
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t</p>
\t</fieldset>

\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
            // line 60
            echo "\t\t";
            if ($this->getAttribute($context["options"], "S_LEGEND", array())) {
                // line 61
                echo "\t\t\t";
                if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", array())) {
                    // line 62
                    echo "\t\t\t\t</fieldset>
\t\t\t";
                }
                // line 64
                echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 65
                echo $this->getAttribute($context["options"], "LEGEND", array());
                echo "</legend>
\t\t";
            } else {
                // line 67
                echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                // line 69
                echo $this->getAttribute($context["options"], "KEY", array());
                echo "\">";
                echo $this->getAttribute($context["options"], "TITLE", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if ($this->getAttribute($context["options"], "S_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["options"], "TITLE_EXPLAIN", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t\t<dd>";
                // line 70
                echo $this->getAttribute($context["options"], "CONTENT", array());
                echo "</dd>
\t\t\t</dl>

\t\t";
            }
            // line 74
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
\t\t\t\t<p class=\"submit-buttons\">
\t\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t\t\t</p>
\t\t\t\t";
        // line 80
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
</form>

";
        // line 84
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ajax_chat.html", 84)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ajax_chat.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 84,  259 => 80,  254 => 78,  250 => 77,  246 => 75,  240 => 74,  233 => 70,  220 => 69,  216 => 67,  211 => 65,  208 => 64,  204 => 62,  201 => 61,  198 => 60,  194 => 59,  187 => 55,  183 => 54,  164 => 51,  161 => 50,  151 => 48,  148 => 47,  138 => 45,  135 => 44,  125 => 42,  123 => 41,  119 => 40,  114 => 38,  110 => 37,  105 => 34,  93 => 33,  88 => 31,  83 => 29,  77 => 26,  72 => 24,  69 => 23,  63 => 20,  59 => 19,  56 => 18,  54 => 17,  49 => 15,  44 => 13,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <script>*/
/* 	var form_name = 'ajax_chat';*/
/* 	var text_name = 'ajax_chat_rule_text';*/
/* 	var load_draft = false;*/
/* 	var upload = false;*/
/* 	var imageTag = false;*/
/* </script>*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{{ lang('ACP_AJAX_CHAT') }}</h1>*/
/* */
/* <p>{{ lang('ACP_AJAX_CHAT_EXPLAIN') }}</p>*/
/* */
/* <!-- IF S_ERROR -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{{ lang('WARNING') }}</h3>*/
/* 		<p>{ERROR_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="ajax_chat" method="post" action="{U_ACTION}">*/
/* */
/* 	<input class="button1" type="submit" id="submit_real" name="submit" value="{{ lang('SUBMIT') }}" style="display:none;" />*/
/* */
/* 	<fieldset>*/
/* 		<legend>{{ lang('AJAX_CHAT_RULES') }}</legend>*/
/* */
/* 		<p>{{ lang('RULES_AJAX_CHAT_EXPLAIN') }}</p>*/
/* */
/* 		<!-- INCLUDE acp_posting_buttons.html -->*/
/* */
/* 		<dl class="responsive-columns">*/
/* 			<dt style="width: 90px;" id="color_palette_placeholder" data-orientation="v" data-height="12" data-width="15" data-bbcode="true"></dt>*/
/* 			<dd style="margin-{S_CONTENT_FLOW_BEGIN}: 90px;">*/
/* 				<textarea name="ajax_chat_rule_text" rows="10" cols="60" style="width: 95%;" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();" data-bbcode="true">{AJAX_CHAT_RULE_TEXT}</textarea>*/
/* 			</dd>*/
/* 			<dd style="margin-{S_CONTENT_FLOW_BEGIN}: 90px; margin-top: 5px;">*/
/* 				<!-- IF S_BBCODE_ALLOWED -->*/
/* 					<label><input type="checkbox" class="radio" name="disable_bbcode"<!-- IF S_BBCODE_DISABLE_CHECKED --> checked="checked"<!-- ENDIF --> /> {{ lang('DISABLE_BBCODE') }}</label>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_SMILIES_ALLOWED -->*/
/* 					<label><input type="checkbox" class="radio" name="disable_smilies"<!-- IF S_SMILIES_DISABLE_CHECKED --> checked="checked"<!-- ENDIF --> /> {{ lang('DISABLE_SMILIES') }}</label>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_LINKS_ALLOWED -->*/
/* 					<label><input type="checkbox" class="radio" name="disable_magic_url"<!-- IF S_MAGIC_URL_DISABLE_CHECKED --> checked="checked"<!-- ENDIF --> /> {{ lang('DISABLE_MAGIC_URL') }}</label>*/
/* 				<!-- ENDIF -->*/
/* 			</dd>*/
/* 			<dd style="margin-{S_CONTENT_FLOW_BEGIN}: 90px; margin-top: 10px;"><strong>{{ lang('OPTIONS') }}{{ lang('COLON') }} </strong>{BBCODE_STATUS} :: {IMG_STATUS} :: {FLASH_STATUS} :: {URL_STATUS} :: {SMILIES_STATUS}</dd>*/
/* 		</dl>*/
/* 		<p class="submit-buttons">*/
/* 			<input class="button1" type="submit" id="submit" name="submit" value="{{ lang('SUBMIT') }}" />&nbsp;*/
/* 			<input class="button2" type="reset" id="reset" name="reset" value="{{ lang('RESET') }}" />*/
/* 		</p>*/
/* 	</fieldset>*/
/* */
/* 	<!-- BEGIN options -->*/
/* 		<!-- IF options.S_LEGEND -->*/
/* 			<!-- IF not options.S_FIRST_ROW -->*/
/* 				</fieldset>*/
/* 			<!-- ENDIF -->*/
/* 			<fieldset>*/
/* 				<legend>{options.LEGEND}</legend>*/
/* 		<!-- ELSE -->*/
/* */
/* 			<dl>*/
/* 				<dt><label for="{options.KEY}">{options.TITLE}{{ lang('COLON') }}</label><!-- IF options.S_EXPLAIN --><br /><span>{options.TITLE_EXPLAIN}</span><!-- ENDIF --></dt>*/
/* 				<dd>{options.CONTENT}</dd>*/
/* 			</dl>*/
/* */
/* 		<!-- ENDIF -->*/
/* 	<!-- END options -->*/
/* */
/* 				<p class="submit-buttons">*/
/* 					<input class="button1" type="submit" id="submit" name="submit" value="{{ lang('SUBMIT') }}" />&nbsp;*/
/* 					<input class="button2" type="reset" id="reset" name="reset" value="{{ lang('RESET') }}" />*/
/* 				</p>*/
/* 				{S_FORM_TOKEN}*/
/* 			</fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
