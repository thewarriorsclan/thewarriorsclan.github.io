<?php

/* acp_avatar_options_local.html */
class __TwigTemplate_9bb4bf54bff332dfec9c75c5538f6e0f87cfab2360486a6dc8e4999658926ed7 extends Twig_Template
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
\t<dt><label for=\"category\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("AVATAR_CATEGORY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"avatar_local_cat\" id=\"category\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_cats", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_cats"]) {
            // line 5
            echo "\t\t<option value=\"";
            echo $this->getAttribute($context["avatar_local_cats"], "NAME", array());
            echo "\"";
            if ($this->getAttribute($context["avatar_local_cats"], "SELECTED", array())) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["avatar_local_cats"], "NAME", array());
            echo "</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_cats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</select>&nbsp;<input type=\"submit\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" name=\"avatar_local_go\" class=\"button2\" /></dd>
</dl>
\t";
        // line 9
        if ((isset($context["AVATAR_LOCAL_SHOW"]) ? $context["AVATAR_LOCAL_SHOW"] : null)) {
            // line 10
            echo "\t<ul id=\"gallery\">
\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_row"]) {
                // line 12
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["avatar_local_row"], "avatar_local_col", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_col"]) {
                    // line 13
                    echo "\t\t<li>
\t\t\t<label for=\"av-";
                    // line 14
                    echo $this->getAttribute($context["avatar_local_row"], "S_ROW_COUNT", array());
                    echo "-";
                    echo $this->getAttribute($context["avatar_local_col"], "S_ROW_COUNT", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["avatar_local_col"], "AVATAR_IMAGE", array());
                    echo "\" alt=\"\" /><br />
\t\t\t<input type=\"radio\" name=\"avatar_local_file\" id=\"av-";
                    // line 15
                    echo $this->getAttribute($context["avatar_local_row"], "S_ROW_COUNT", array());
                    echo "-";
                    echo $this->getAttribute($context["avatar_local_col"], "S_ROW_COUNT", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["avatar_local_col"], "AVATAR_FILE", array());
                    echo "\"";
                    if ($this->getAttribute($context["avatar_local_col"], "CHECKED", array())) {
                        echo "checked=\"checked\"";
                    }
                    echo " /></label>
\t\t</li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t</ul>
\t";
        }
    }

    public function getTemplateName()
    {
        return "acp_avatar_options_local.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 19,  95 => 18,  78 => 15,  70 => 14,  67 => 13,  62 => 12,  58 => 11,  55 => 10,  53 => 9,  47 => 7,  32 => 5,  28 => 4,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="category">{L_AVATAR_CATEGORY}{L_COLON}</label></dt>*/
/* 	<dd><select name="avatar_local_cat" id="category">*/
/* 		<!-- BEGIN avatar_local_cats -->*/
/* 		<option value="{avatar_local_cats.NAME}"<!-- IF avatar_local_cats.SELECTED --> selected="selected"<!-- ENDIF -->>{avatar_local_cats.NAME}</option>*/
/* 		<!-- END avatar_local_cats -->*/
/* 	</select>&nbsp;<input type="submit" value="{L_GO}" name="avatar_local_go" class="button2" /></dd>*/
/* </dl>*/
/* 	<!-- IF AVATAR_LOCAL_SHOW -->*/
/* 	<ul id="gallery">*/
/* 	<!-- BEGIN avatar_local_row -->*/
/* 	<!-- BEGIN avatar_local_col -->*/
/* 		<li>*/
/* 			<label for="av-{avatar_local_row.S_ROW_COUNT}-{avatar_local_row.avatar_local_col.S_ROW_COUNT}"><img src="{avatar_local_row.avatar_local_col.AVATAR_IMAGE}" alt="" /><br />*/
/* 			<input type="radio" name="avatar_local_file" id="av-{avatar_local_row.S_ROW_COUNT}-{avatar_local_row.avatar_local_col.S_ROW_COUNT}" value="{avatar_local_row.avatar_local_col.AVATAR_FILE}"<!-- IF avatar_local_row.avatar_local_col.CHECKED -->checked="checked"<!-- ENDIF --> /></label>*/
/* 		</li>*/
/* 	<!-- END avatar_local_col -->*/
/* 	<!-- END avatar_local_row -->*/
/* 	</ul>*/
/* 	<!-- ENDIF -->*/
/* */
