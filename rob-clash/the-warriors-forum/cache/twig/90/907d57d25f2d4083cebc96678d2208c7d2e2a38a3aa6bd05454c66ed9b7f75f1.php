<?php

/* @spaceace_ajaxchat/chat_body_buttons.html */
class __TwigTemplate_ae893da9d5f80855b4d8fb6689758bb2147d5158eadc9490d35972f94db4e265 extends Twig_Template
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
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 2
            echo "\t<div id=\"chat_bbcodes\" style=\"display: none;\">
\t\t";
            // line 3
            $location = "posting_buttons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_buttons.html", "@spaceace_ajaxchat/chat_body_buttons.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t</div>
";
        }
        // line 6
        echo "<div id=\"chat_smilies\" style=\"display: none;\">
\t";
        // line 7
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 8
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 9
                echo "\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" style=\"margin: 4px 2px 0\" /></a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t";
            if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
                // line 12
                echo "\t\t\t<br /><a href=\"";
                echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
                echo "\" onclick=\"popup('";
                echo (isset($context["BOARD_URL"]) ? $context["BOARD_URL"] : null);
                echo "posting.php?mode=smilies', 400, 350, '_phpbbsmilies'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
                echo "</a>
\t\t";
            }
            // line 14
            echo "\t";
        }
        // line 15
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  82 => 14,  72 => 12,  69 => 11,  50 => 9,  45 => 8,  43 => 7,  40 => 6,  36 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_BBCODE_ALLOWED -->*/
/* 	<div id="chat_bbcodes" style="display: none;">*/
/* 		<!-- INCLUDE posting_buttons.html -->*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* <div id="chat_smilies" style="display: none;">*/
/* 	<!-- IF S_SMILIES_ALLOWED -->*/
/* 		<!-- BEGIN smiley -->*/
/* 			<a href="#" onclick="insert_text('{smiley.A_SMILEY_CODE}', true); return false;"><img src="{smiley.SMILEY_IMG}" width="{smiley.SMILEY_WIDTH}" height="{smiley.SMILEY_HEIGHT}" alt="{smiley.SMILEY_CODE}" title="{smiley.SMILEY_DESC}" style="margin: 4px 2px 0" /></a>*/
/* 		<!-- END smiley -->*/
/* 		<!-- IF S_SHOW_SMILEY_LINK and S_SMILIES_ALLOWED -->*/
/* 			<br /><a href="{U_MORE_SMILIES}" onclick="popup('{BOARD_URL}posting.php?mode=smilies', 400, 350, '_phpbbsmilies'); return false;">{{ lang('MORE_SMILIES') }}</a>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
/* */
