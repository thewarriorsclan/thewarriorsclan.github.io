<?php

/* @spaceace_ajaxchat/chat_body_font_colour_hold.html */
class __TwigTemplate_7feaa0ad88ec4c13097d537326d359bf8997e244b5340d078bddec79bae190cd extends Twig_Template
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
        echo "<div id=\"chat_colour_palette\" style=\"display: none;\">
\t<table width=\"50%\">
\t\t<div id=\"fc\">
\t\t</div>
\t\t<div class=\"select_color\">
\t\t\t";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("SELECT_COLOR");
        echo "
\t\t</div>
\t\t<tr>
\t\t\t<td valign=\"top\">
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t// <![CDATA[
\t\t\t\t\tfunction colorPalette(dir, width, height)
\t\t\t\t\t{
\t\t\t\t\t\tvar r = 0, g = 0, b = 0;
\t\t\t\t\t\tvar numberList = new Array(6);
\t\t\t\t\t\tvar color = '';

\t\t\t\t\t\t\tnumberList[0] = '00';
\t\t\t\t\t\t\tnumberList[1] = '40';
\t\t\t\t\t\t\tnumberList[2] = '80';
\t\t\t\t\t\t\tnumberList[3] = 'BF';
\t\t\t\t\t\t\tnumberList[4] = 'FF';

\t\t\t\t\t\tdocument.writeln('<table cellspacing=\"1\" cellpadding=\"0\" border=\"0\">');

\t\t\t\t\t\tfor (r = 0; r < 5; r++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (dir == 'h')
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tdocument.writeln('<tr>');
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tfor (g = 0; g < 5; g++)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tif (dir == 'v')
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tdocument.writeln('<tr>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tfor (b = 0; b < 5; b++)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tcolor = String(numberList[r]) + String(numberList[g]) + String(numberList[b]);
\t\t\t\t\t\t\t\t\tdocument.write('<td bgcolor=\"#' + color + '\" style=\"width: ' + width + 'px; height: ' + height + 'px;\">');
\t\t\t\t\t\t\t\t\tdocument.write('<div onmouseover=\"this.style.cursor=\\'pointer\\'\" onmousedown=\"setCookie(\\'' + cookie_name + '\\', \\'[color2=#' + color + ']\\',\\'1000\\'); blkopen = \\'[color2=#' + color + ']\\'; hilite(\\'#' + color + ' \\'); blkclose = \\'[/color2]\\'; return false;\"><img src=\"";
        // line 43
        echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
        echo "images/spacer.gif\" width=\"' + width + '\" height=\"' + height + '\" alt=\"#' + color + '\" title=\"#' + color + '\" /></div>');
\t\t\t\t\t\t\t\t\tdocument.writeln('</td>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (dir == 'v')
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tdocument.writeln('</tr>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (dir == 'h')
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tdocument.writeln('</tr>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tdocument.writeln('</table>');
\t\t\t\t\t}
\t\t\t\t\tcolorPalette('h', 15, 10);
\t\t\t\t\tfunction hilite(value)
\t\t\t\t\t{
\t\t\t\t\t\tvar cur_color = value;
\t\t\t\t\t\tdocument.getElementById(\"fc\").style.backgroundColor = cur_color;
\t\t\t\t\t}
\t\t\t\t\t// ]]>
\t\t\t\t</script>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<div>";
        // line 69
        echo $this->env->getExtension('phpbb')->lang("DELETE_CHAT_COOKIE_EXPLAIN");
        echo "</div>
\t<button type=\"button\" class=\"button\" name=\"";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("DELETE_CHAT_COOKIE");
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("DELETE_CHAT_COOKIE");
        echo "\" onclick=\"deletecookie();\">";
        echo $this->env->getExtension('phpbb')->lang("DELETE_CHAT_COOKIE");
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_font_colour_hold.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 70,  95 => 69,  66 => 43,  26 => 6,  19 => 1,);
    }
}
/* <div id="chat_colour_palette" style="display: none;">*/
/* 	<table width="50%">*/
/* 		<div id="fc">*/
/* 		</div>*/
/* 		<div class="select_color">*/
/* 			{{ lang('SELECT_COLOR') }}*/
/* 		</div>*/
/* 		<tr>*/
/* 			<td valign="top">*/
/* 				<script type="text/javascript">*/
/* 					// <![CDATA[*/
/* 					function colorPalette(dir, width, height)*/
/* 					{*/
/* 						var r = 0, g = 0, b = 0;*/
/* 						var numberList = new Array(6);*/
/* 						var color = '';*/
/* */
/* 							numberList[0] = '00';*/
/* 							numberList[1] = '40';*/
/* 							numberList[2] = '80';*/
/* 							numberList[3] = 'BF';*/
/* 							numberList[4] = 'FF';*/
/* */
/* 						document.writeln('<table cellspacing="1" cellpadding="0" border="0">');*/
/* */
/* 						for (r = 0; r < 5; r++)*/
/* 						{*/
/* 							if (dir == 'h')*/
/* 							{*/
/* 								document.writeln('<tr>');*/
/* 							}*/
/* */
/* 							for (g = 0; g < 5; g++)*/
/* 							{*/
/* 								if (dir == 'v')*/
/* 								{*/
/* 									document.writeln('<tr>');*/
/* 								}*/
/* 								for (b = 0; b < 5; b++)*/
/* 								{*/
/* 									color = String(numberList[r]) + String(numberList[g]) + String(numberList[b]);*/
/* 									document.write('<td bgcolor="#' + color + '" style="width: ' + width + 'px; height: ' + height + 'px;">');*/
/* 									document.write('<div onmouseover="this.style.cursor=\'pointer\'" onmousedown="setCookie(\'' + cookie_name + '\', \'[color2=#' + color + ']\',\'1000\'); blkopen = \'[color2=#' + color + ']\'; hilite(\'#' + color + ' \'); blkclose = \'[/color2]\'; return false;"><img src="{BOARD_URL}images/spacer.gif" width="' + width + '" height="' + height + '" alt="#' + color + '" title="#' + color + '" /></div>');*/
/* 									document.writeln('</td>');*/
/* 								}*/
/* 								if (dir == 'v')*/
/* 								{*/
/* 									document.writeln('</tr>');*/
/* 								}*/
/* 							}*/
/* 							if (dir == 'h')*/
/* 							{*/
/* 								document.writeln('</tr>');*/
/* 							}*/
/* 						}*/
/* 						document.writeln('</table>');*/
/* 					}*/
/* 					colorPalette('h', 15, 10);*/
/* 					function hilite(value)*/
/* 					{*/
/* 						var cur_color = value;*/
/* 						document.getElementById("fc").style.backgroundColor = cur_color;*/
/* 					}*/
/* 					// ]]>*/
/* 				</script>*/
/* 			</td>*/
/* 		</tr>*/
/* 	</table>*/
/* 	<div>{{ lang('DELETE_CHAT_COOKIE_EXPLAIN') }}</div>*/
/* 	<button type="button" class="button" name="{{ lang('DELETE_CHAT_COOKIE') }}" title="{{ lang('DELETE_CHAT_COOKIE') }}" onclick="deletecookie();">{{ lang('DELETE_CHAT_COOKIE') }}</button>*/
/* </div>*/
