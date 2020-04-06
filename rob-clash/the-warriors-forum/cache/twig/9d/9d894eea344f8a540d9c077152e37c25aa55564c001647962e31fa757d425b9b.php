<?php

/* ucp_avatar_options_local.html */
class __TwigTemplate_8fb836f717d9630f33166fc66745e82fbdb598dd4553f9404be90d177a7f9704 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_cats", array()))) {
            // line 2
            echo "<label for=\"category\">";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_CATEGORY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"avatar_local_cat\" id=\"category\">
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_cats", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_cats"]) {
                // line 4
                echo "<option value=\"";
                echo $this->getAttribute($context["avatar_local_cats"], "NAME", array());
                echo "\"";
                if ($this->getAttribute($context["avatar_local_cats"], "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["avatar_local_cats"], "NAME", array());
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_cats'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</select></label>
<input type=\"submit\" value=\"";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"avatar_local_go\" class=\"button2\" />

<div id=\"gallery\">
";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_local_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_row"]) {
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["avatar_local_row"], "avatar_local_col", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["avatar_local_col"]) {
                    // line 12
                    echo "\t<label for=\"av-";
                    echo $this->getAttribute($context["avatar_local_row"], "S_ROW_COUNT", array());
                    echo "-";
                    echo $this->getAttribute($context["avatar_local_col"], "S_ROW_COUNT", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["avatar_local_col"], "AVATAR_IMAGE", array());
                    echo "\" alt=\"\" /><br />
\t<input type=\"radio\" name=\"avatar_local_file\" id=\"av-";
                    // line 13
                    echo $this->getAttribute($context["avatar_local_row"], "S_ROW_COUNT", array());
                    echo "-";
                    echo $this->getAttribute($context["avatar_local_col"], "S_ROW_COUNT", array());
                    echo "\"
\t\t   value=\"";
                    // line 14
                    echo $this->getAttribute($context["avatar_local_col"], "AVATAR_FILE", array());
                    echo "\"";
                    if ($this->getAttribute($context["avatar_local_col"], "CHECKED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " /></label>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_local_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</div>
";
        } else {
            // line 19
            echo "<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_AVATARS");
            echo "</strong></p>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_local.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  94 => 17,  78 => 14,  72 => 13,  63 => 12,  59 => 11,  55 => 10,  49 => 7,  46 => 6,  31 => 4,  27 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF .avatar_local_cats -->*/
/* <label for="category">{L_AVATAR_CATEGORY}{L_COLON} <select name="avatar_local_cat" id="category">*/
/* <!-- BEGIN avatar_local_cats -->*/
/* <option value="{avatar_local_cats.NAME}"<!-- IF avatar_local_cats.SELECTED --> selected="selected"<!-- ENDIF -->>{avatar_local_cats.NAME}</option>*/
/* <!-- END avatar_local_cats -->*/
/* </select></label>*/
/* <input type="submit" value="{L_GO}" name="avatar_local_go" class="button2" />*/
/* */
/* <div id="gallery">*/
/* <!-- BEGIN avatar_local_row -->*/
/* <!-- BEGIN avatar_local_col -->*/
/* 	<label for="av-{avatar_local_row.S_ROW_COUNT}-{avatar_local_row.avatar_local_col.S_ROW_COUNT}"><img src="{avatar_local_row.avatar_local_col.AVATAR_IMAGE}" alt="" /><br />*/
/* 	<input type="radio" name="avatar_local_file" id="av-{avatar_local_row.S_ROW_COUNT}-{avatar_local_row.avatar_local_col.S_ROW_COUNT}"*/
/* 		   value="{avatar_local_row.avatar_local_col.AVATAR_FILE}"<!-- IF avatar_local_row.avatar_local_col.CHECKED --> checked="checked"<!-- ENDIF --> /></label>*/
/* <!-- END avatar_local_col -->*/
/* <!-- END avatar_local_row -->*/
/* </div>*/
/* <!-- ELSE -->*/
/* <p><strong>{L_NO_AVATARS}</strong></p>*/
/* <!-- ENDIF -->*/
/* */
