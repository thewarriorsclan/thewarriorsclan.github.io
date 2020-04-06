<?php

/* @spaceace_ajaxchat/chat_body_input.html */
class __TwigTemplate_c31d71b6a8bc71758877633fe9129f602faadd1d8a0af8ce39261970406099f1 extends Twig_Template
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
        if ((isset($context["S_AJAX_CHAT_INPUT_FULL"]) ? $context["S_AJAX_CHAT_INPUT_FULL"] : null)) {
            // line 2
            echo "\t";
            $location = "chat_body_input_full.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("chat_body_input_full.html", "@spaceace_ajaxchat/chat_body_input.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 4
            echo "\t";
            $location = "chat_body_input_original.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("chat_body_input_original.html", "@spaceace_ajaxchat/chat_body_input.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_input.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_CHAT_INPUT_FULL -->*/
/* 	<!-- INCLUDE chat_body_input_full.html -->*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE chat_body_input_original.html -->*/
/* <!-- ENDIF -->*/
