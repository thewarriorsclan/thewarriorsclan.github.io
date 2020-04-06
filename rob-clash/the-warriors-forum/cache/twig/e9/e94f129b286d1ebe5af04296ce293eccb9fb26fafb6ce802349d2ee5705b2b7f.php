<?php

/* ucp_avatar_options_gravatar.html */
class __TwigTemplate_a89fe683bd69faabdf748cffc8f79adc378cd34ff8c205a48cabc1afa13a333f extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"avatar_gravatar_email\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_EMAIL_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"email\" name=\"avatar_gravatar_email\" id=\"avatar_gravatar_email\" value=\"";
        // line 3
        echo (isset($context["AVATAR_GRAVATAR_EMAIL"]) ? $context["AVATAR_GRAVATAR_EMAIL"] : null);
        echo "\" class=\"inputbox\" data-reset-on-edit=\"#avatar_gravatar_width, #avatar_gravatar_height\" /></dd>
</dl>
<dl>
\t<dt><label for=\"avatar_gravatar_width\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_SIZE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GRAVATAR_AVATAR_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<label for=\"avatar_gravatar_width\"><input type=\"number\" name=\"avatar_gravatar_width\" id=\"avatar_gravatar_width\" min=\"";
        // line 8
        echo (isset($context["AVATAR_MIN_WIDTH"]) ? $context["AVATAR_MIN_WIDTH"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_WIDTH"]) ? $context["AVATAR_MAX_WIDTH"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_GRAVATAR_WIDTH"]) ? $context["AVATAR_GRAVATAR_WIDTH"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo "</label> &times;&nbsp;
\t\t<label for=\"avatar_gravatar_height\"><input type=\"number\" name=\"avatar_gravatar_height\" id=\"avatar_gravatar_height\" min=\"";
        // line 9
        echo (isset($context["AVATAR_MIN_HEIGHT"]) ? $context["AVATAR_MIN_HEIGHT"] : null);
        echo "\" max=\"";
        echo (isset($context["AVATAR_MAX_HEIGHT"]) ? $context["AVATAR_MAX_HEIGHT"] : null);
        echo "\" value=\"";
        echo (isset($context["AVATAR_GRAVATAR_HEIGHT"]) ? $context["AVATAR_GRAVATAR_HEIGHT"] : null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->env->getExtension('phpbb')->lang("PIXEL");
        echo "</label>
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_gravatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 8,  35 => 6,  29 => 3,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="avatar_gravatar_email">{L_GRAVATAR_AVATAR_EMAIL}{L_COLON}</label><br /><span>{L_GRAVATAR_AVATAR_EMAIL_EXPLAIN}</span></dt>*/
/* 	<dd><input type="email" name="avatar_gravatar_email" id="avatar_gravatar_email" value="{AVATAR_GRAVATAR_EMAIL}" class="inputbox" data-reset-on-edit="#avatar_gravatar_width, #avatar_gravatar_height" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="avatar_gravatar_width">{L_GRAVATAR_AVATAR_SIZE}{L_COLON}</label><br /><span>{L_GRAVATAR_AVATAR_SIZE_EXPLAIN}</span></dt>*/
/* 	<dd>*/
/* 		<label for="avatar_gravatar_width"><input type="number" name="avatar_gravatar_width" id="avatar_gravatar_width" min="{AVATAR_MIN_WIDTH}" max="{AVATAR_MAX_WIDTH}" value="{AVATAR_GRAVATAR_WIDTH}" class="inputbox autowidth" /> {L_PIXEL}</label> &times;&nbsp;*/
/* 		<label for="avatar_gravatar_height"><input type="number" name="avatar_gravatar_height" id="avatar_gravatar_height" min="{AVATAR_MIN_HEIGHT}" max="{AVATAR_MAX_HEIGHT}" value="{AVATAR_GRAVATAR_HEIGHT}" class="inputbox autowidth" /> {L_PIXEL}</label>*/
/* 	</dd>*/
/* </dl>*/
/* */
