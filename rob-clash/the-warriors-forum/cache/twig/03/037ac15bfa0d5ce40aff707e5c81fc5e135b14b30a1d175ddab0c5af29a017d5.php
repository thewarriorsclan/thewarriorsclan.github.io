<?php

/* @spaceace_ajaxchat/event/navbar_header_quick_links_after.html */
class __TwigTemplate_1edcaf867f686f806cc97523b9ee4a0eddef5ab83694d027a2ee3a8e106acb06 extends Twig_Template
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
        if ((((isset($context["S_CHAT_ENABLED"]) ? $context["S_CHAT_ENABLED"] : null) && (isset($context["S_CHAT_QUICK_LINK"]) ? $context["S_CHAT_QUICK_LINK"] : null)) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) != "app/chat"))) {
            // line 2
            echo "\t";
            if ((isset($context["S_AJAXCHAT_VIEW"]) ? $context["S_AJAXCHAT_VIEW"] : null)) {
                // line 3
                echo "\t\t";
                if ((isset($context["IS_PHPBB31"]) ? $context["IS_PHPBB31"] : null)) {
                    // line 4
                    echo "\t\t\t<li class=\"list chat-icon\"><a href=\"";
                    echo (isset($context["U_CHAT"]) ? $context["U_CHAT"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CHAT_EXPLAIN");
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb')->lang("CHAT_EXPLAIN");
                    echo "</a></li>
\t\t";
                } elseif (                // line 5
(isset($context["IS_PHPBB32"]) ? $context["IS_PHPBB32"] : null)) {
                    // line 6
                    echo "\t\t\t<li><a href=\"";
                    echo (isset($context["U_CHAT"]) ? $context["U_CHAT"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CHAT_EXPLAIN");
                    echo "\" role=\"menuitem\"><i class=\"icon fa-comments fa-fw\" aria-hidden=\"true\"></i>";
                    echo $this->env->getExtension('phpbb')->lang("CHAT_EXPLAIN");
                    echo "</a></li>
\t\t";
                }
                // line 8
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/navbar_header_quick_links_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  38 => 6,  36 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_CHAT_ENABLED and S_CHAT_QUICK_LINK and SCRIPT_NAME neq 'app/chat' -->*/
/* 	<!-- IF S_AJAXCHAT_VIEW -->*/
/* 		<!-- IF IS_PHPBB31 -->*/
/* 			<li class="list chat-icon"><a href="{U_CHAT}" title="{{ lang('CHAT_EXPLAIN') }}" role="menuitem">{{ lang('CHAT_EXPLAIN') }}</a></li>*/
/* 		<!-- ELSEIF IS_PHPBB32 -->*/
/* 			<li><a href="{U_CHAT}" title="{{ lang('CHAT_EXPLAIN') }}" role="menuitem"><i class="icon fa-comments fa-fw" aria-hidden="true"></i>{{ lang('CHAT_EXPLAIN') }}</a></li>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
