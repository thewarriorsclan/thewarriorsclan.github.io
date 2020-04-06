<?php

/* @spaceace_ajaxchat/event/index_body_markforums_after.html */
class __TwigTemplate_e0e3028d7aa0414f6e6b26d4c9be0c2444c7f52aa11d5df44cb7dfc4253f7d2d extends Twig_Template
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
        if ((isset($context["S_AJAX_CHAT_VIEW"]) ? $context["S_AJAX_CHAT_VIEW"] : null)) {
            // line 2
            echo "\t";
            if (((isset($context["S_AJAX_CHAT_POSITION"]) ? $context["S_AJAX_CHAT_POSITION"] : null) &&  !(isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                // line 3
                echo "\t\t";
                $location = "chat_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/index_body_markforums_after.html", 3)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 4
                echo "\t\t<br />
\t";
            } elseif ((            // line 5
(isset($context["S_AJAX_CHAT_ACP_POSITION"]) ? $context["S_AJAX_CHAT_ACP_POSITION"] : null) && (isset($context["S_AJAX_CHAT_POSITION_OVERRIDE"]) ? $context["S_AJAX_CHAT_POSITION_OVERRIDE"] : null))) {
                // line 6
                echo "\t\t";
                $location = "chat_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/index_body_markforums_after.html", 6)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 7
                echo "\t\t<br />
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/index_body_markforums_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  42 => 6,  40 => 5,  37 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_CHAT_VIEW -->*/
/* 	<!-- IF S_AJAX_CHAT_POSITION and not S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 		<!-- INCLUDE chat_body.html -->*/
/* 		<br />*/
/* 	<!-- ELSEIF S_AJAX_CHAT_ACP_POSITION and S_AJAX_CHAT_POSITION_OVERRIDE -->*/
/* 		<!-- INCLUDE chat_body.html -->*/
/* 		<br />*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
