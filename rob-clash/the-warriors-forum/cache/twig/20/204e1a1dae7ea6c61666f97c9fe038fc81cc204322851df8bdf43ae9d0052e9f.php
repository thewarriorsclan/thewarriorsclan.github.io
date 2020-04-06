<?php

/* simple_header.html */
class __TwigTemplate_d51b2e0aec1486297727e565f7ee7f5bd1cc2c2764d39a012af516c6610f8f89 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 8
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " &bull; ";
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " &bull; ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " &bull; ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

";
        // line 10
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 11
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 26
        echo "
<link href=\"";
        // line 27
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/common.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 28
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/links.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 29
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/content.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 30
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/buttons.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 31
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/cp.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 32
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/forms.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 33
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/colours.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 34
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/imageset.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 36
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 37
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/";
        echo (isset($context["T_THEME_LANG_NAME"]) ? $context["T_THEME_LANG_NAME"] : null);
        echo "/stylesheet.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 38
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" media=\"all and (max-width: 700px)\">

";
        // line 40
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 41
            echo "\t<link href=\"";
            echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 43
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 45
        echo (isset($context["ROOT_PATH"]) ? $context["ROOT_PATH"] : null);
        echo "styles/prosilver/theme/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 48
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 49
        echo "
";
        // line 50
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/simple_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 51
        echo "
";
        // line 52
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

";
        // line 54
        // line 55
        echo "
</head>

<body id=\"phpbb\" class=\"simple nojs ";
        // line 58
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

";
        // line 60
        // line 61
        echo "
<div id=\"simple-wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-body\"\" role=\"main\">
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 61,  194 => 60,  187 => 58,  182 => 55,  181 => 54,  176 => 52,  173 => 51,  168 => 50,  165 => 49,  162 => 48,  154 => 45,  150 => 43,  142 => 41,  140 => 40,  133 => 38,  125 => 37,  121 => 36,  114 => 34,  108 => 33,  102 => 32,  96 => 31,  90 => 30,  84 => 29,  78 => 28,  72 => 27,  69 => 26,  52 => 11,  50 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* {META}*/
/* <title>{SITENAME} &bull; <!-- IF S_IN_MCP -->{L_MCP} &bull; <!-- ELSEIF S_IN_UCP -->{L_UCP} &bull; <!-- ENDIF -->{PAGE_TITLE}</title>*/
/* */
/* <!-- IF S_ALLOW_CDN -->*/
/* <script>*/
/* 	WebFontConfig = {*/
/* 		google: {*/
/* 			families: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']*/
/* 		}*/
/* 	};*/
/* */
/* 	(function(d) {*/
/* 		var wf = d.createElement('script'), s = d.scripts[0];*/
/* 		wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';*/
/* 		wf.async = true;*/
/* 		s.parentNode.insertBefore(wf, s);*/
/* 	})(document);*/
/* </script>*/
/* <!-- ENDIF -->*/
/* */
/* <link href="{ROOT_PATH}styles/prosilver/theme/common.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/links.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/content.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/buttons.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/cp.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/forms.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/colours.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/imageset.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* */
/* <link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/{T_THEME_LANG_NAME}/stylesheet.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <link href="{ROOT_PATH}styles/prosilver/theme/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="all and (max-width: 700px)">*/
/* */
/* <!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <!-- ENDIF -->*/
/* */
/* <!--[if lte IE 9]>*/
/* 	<link href="{ROOT_PATH}styles/prosilver/theme/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* <![endif]-->*/
/* */
/* <!-- DEFINE $POPUP = 1 -->*/
/* */
/* <!-- EVENT simple_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <!-- EVENT simple_header_stylesheets_after -->*/
/* */
/* </head>*/
/* */
/* <body id="phpbb" class="simple nojs {S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/* */
/* <!-- EVENT simple_header_body_before -->*/
/* */
/* <div id="simple-wrap">*/
/* 	<a id="top" class="anchor" accesskey="t"></a>*/
/* 	<div id="page-body"" role="main">*/
/* */
