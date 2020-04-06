<?php

/* style_options.html */
class __TwigTemplate_e380bfcb9361932fbb8e672bbb28646a232992951d070902d879b8c203d6f497 extends Twig_Template
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
        $value = "text";
        $context['definition']->set('HEADER_STRUCTURE', $value);
        echo " <!-- Options: 'Text' | 'Logo' . Logo image is set in stylesheet.css -->
";
        // line 2
        $value = "yes";
        $context['definition']->set('COLLAPSIBLE_CATEGORIES', $value);
        echo " <!-- Options: 'Yes' | 'No' -->
";
        // line 3
        $value = "960px";
        $context['definition']->set('STYLE_WIDTH', $value);
        echo " <!-- Options: Enter a width in either pixels (eg: 900px) or percentage (eg: 80%) -->";
    }

    public function getTemplateName()
    {
        return "style_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  24 => 2,  19 => 1,);
    }
}
/* <!-- DEFINE $HEADER_STRUCTURE = 'text' --> <!-- Options: 'Text' | 'Logo' . Logo image is set in stylesheet.css -->*/
/* <!-- DEFINE $COLLAPSIBLE_CATEGORIES = 'yes' --> <!-- Options: 'Yes' | 'No' -->*/
/* <!-- DEFINE $STYLE_WIDTH = '960px' --> <!-- Options: Enter a width in either pixels (eg: 900px) or percentage (eg: 80%) -->*/
