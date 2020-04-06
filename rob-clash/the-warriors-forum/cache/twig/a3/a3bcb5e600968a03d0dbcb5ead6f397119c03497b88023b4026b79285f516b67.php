<?php

/* forumlist_body.html */
class __TwigTemplate_a71423ff03b8f0b4e046f34371261bca3fb5a69605dead7983a50b68900ed10c extends Twig_Template
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
        echo "<div id=\"forumlist-collapse\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "        ";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 4
                echo "                </ul>
    
                </div>
            </div>
        ";
            }
            // line 9
            echo "    
        ";
            // line 10
            // line 11
            echo "        ";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 12
                echo "            <div class=\"forabg\">
                <div class=\"inner\">
                <ul class=\"topiclist\">
                    <li class=\"header\">
                        ";
                // line 16
                // line 17
                echo "                        <dl class=\"icon\">
                            <dt><div class=\"list-inner\">";
                // line 18
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</div></dt>
                            <dd class=\"topics\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</dd>
                            <dd class=\"posts\">";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</dd>
                            <dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
                        </dl>
                        ";
                // line 23
                // line 24
                echo "                    </li>
                </ul>
                ";
                // line 26
                if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "COLLAPSIBLE_CATEGORIES", array()) == "yes")) {
                    // line 27
                    echo "                    <div class=\"collapse-trigger open\">
                        <span class=\"fa fa-minus tooltip\" title=\"Collapse\"></span>
                        <span class=\"fa fa-plus tooltip\" title=\"Expand\"></span>
                    </div>
                ";
                }
                // line 31
                echo "            
                <ul class=\"topiclist forums\">
        ";
            }
            // line 34
            echo "        ";
            // line 35
            echo "    
        ";
            // line 36
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 37
                echo "            ";
                // line 38
                echo "            <li class=\"row";
                if (($this->getAttribute($context["forumrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
                ";
                // line 39
                // line 40
                echo "                <dl class=\"icon ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo "\">
                    <dt title=\"";
                // line 41
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
                        ";
                // line 42
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 43
                echo "                        <div class=\"list-inner\">
                            ";
                // line 44
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\"><img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" /></a> -->";
                }
                // line 45
                echo "    
                            ";
                // line 46
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 47
                echo "                            <a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
                            ";
                // line 48
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                }
                // line 49
                echo "                            ";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 50
                    echo "                                <br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "
                            ";
                }
                // line 52
                echo "                            ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 53
                    echo "                                ";
                    // line 54
                    echo "                                <br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
                                ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 56
                        echo "                                    <a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 57
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                                ";
                    // line 59
                    echo "                            ";
                }
                // line 60
                echo "    
                            ";
                // line 61
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    // line 62
                    echo "                            <div class=\"responsive-show\" style=\"display: none;\">
                                ";
                    // line 63
                    if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                        // line 64
                        echo "                                    ";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                        echo "</strong>
                                ";
                    } elseif (( !$this->getAttribute(                    // line 65
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                        // line 66
                        echo "                                    ";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo "</strong>
                                ";
                    }
                    // line 68
                    echo "                            </div>
                            ";
                }
                // line 70
                echo "                        </div>
                    </dt>
                    ";
                // line 72
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 73
                    echo "                        <dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></dd>
                    ";
                } elseif ( !$this->getAttribute(                // line 74
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 75
                    echo "                        <dd class=\"topics\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "</dfn></dd>
                        <dd class=\"posts\">";
                    // line 76
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</dfn></dd>
                        <dd class=\"lastpost\"><span>
                            ";
                    // line 78
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 79
                        echo "                                <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_IMG"]) ? $context["UNAPPROVED_IMG"] : null);
                        echo "</a>
                            ";
                    } elseif ($this->getAttribute(                    // line 80
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 81
                        echo "                                <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\">";
                        echo (isset($context["UNAPPROVED_POST_IMG"]) ? $context["UNAPPROVED_POST_IMG"] : null);
                        echo "</a>
                            ";
                    }
                    // line 83
                    echo "                            ";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
                            ";
                        // line 84
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                            // line 85
                            echo "                                ";
                            // line 86
                            echo "                                <a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
                            ";
                        }
                        // line 87
                        echo " 
                            ";
                        // line 88
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
                            ";
                        // line 89
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\">";
                            echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                            echo "</a> ";
                        }
                        echo "<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
                        </dd>
                    ";
                } else {
                    // line 92
                    echo "                        <dd>&nbsp;</dd>
                    ";
                }
                // line 94
                echo "                </dl>
                ";
                // line 95
                // line 96
                echo "            </li>
            ";
                // line 97
                // line 98
                echo "        ";
            }
            // line 99
            echo "    
        ";
            // line 100
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 101
                echo "                </ul>
    
                </div>
            </div>
        ";
                // line 105
                // line 106
                echo "        ";
            }
            // line 107
            echo "    
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            echo "        <div class=\"panel\">
            <div class=\"inner\">
            <strong>";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 115,  403 => 111,  399 => 109,  393 => 107,  390 => 106,  389 => 105,  383 => 101,  381 => 100,  378 => 99,  375 => 98,  374 => 97,  371 => 96,  370 => 95,  367 => 94,  363 => 92,  345 => 89,  339 => 88,  336 => 87,  326 => 86,  324 => 85,  322 => 84,  315 => 83,  307 => 81,  305 => 80,  298 => 79,  296 => 78,  289 => 76,  282 => 75,  280 => 74,  272 => 73,  270 => 72,  266 => 70,  262 => 68,  253 => 66,  251 => 65,  243 => 64,  241 => 63,  238 => 62,  236 => 61,  233 => 60,  230 => 59,  228 => 58,  222 => 57,  201 => 56,  197 => 55,  191 => 54,  189 => 53,  186 => 52,  177 => 50,  174 => 49,  169 => 48,  162 => 47,  156 => 46,  153 => 45,  135 => 44,  132 => 43,  126 => 42,  122 => 41,  117 => 40,  116 => 39,  107 => 38,  105 => 37,  103 => 36,  100 => 35,  98 => 34,  93 => 31,  86 => 27,  84 => 26,  80 => 24,  79 => 23,  74 => 21,  70 => 20,  66 => 19,  54 => 18,  51 => 17,  50 => 16,  44 => 12,  41 => 11,  40 => 10,  37 => 9,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="forumlist-collapse">*/
/*     <!-- BEGIN forumrow -->*/
/*         <!-- IF (forumrow.S_IS_CAT and not forumrow.S_FIRST_ROW) or forumrow.S_NO_CAT  -->*/
/*                 </ul>*/
/*     */
/*                 </div>*/
/*             </div>*/
/*         <!-- ENDIF -->*/
/*     */
/*         <!-- EVENT forumlist_body_category_header_before -->*/
/*         <!-- IF forumrow.S_IS_CAT or forumrow.S_FIRST_ROW  or forumrow.S_NO_CAT  -->*/
/*             <div class="forabg">*/
/*                 <div class="inner">*/
/*                 <ul class="topiclist">*/
/*                     <li class="header">*/
/*                         <!-- EVENT forumlist_body_category_header_row_prepend -->*/
/*                         <dl class="icon">*/
/*                             <dt><div class="list-inner"><!-- IF forumrow.S_IS_CAT --><a href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a><!-- ELSE -->{L_FORUM}<!-- ENDIF --></div></dt>*/
/*                             <dd class="topics">{L_TOPICS}</dd>*/
/*                             <dd class="posts">{L_POSTS}</dd>*/
/*                             <dd class="lastpost"><span>{L_LAST_POST}</span></dd>*/
/*                         </dl>*/
/*                         <!-- EVENT forumlist_body_category_header_row_append -->*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- IF $COLLAPSIBLE_CATEGORIES == 'yes' -->*/
/*                     <div class="collapse-trigger open">*/
/*                         <span class="fa fa-minus tooltip" title="Collapse"></span>*/
/*                         <span class="fa fa-plus tooltip" title="Expand"></span>*/
/*                     </div>*/
/*                 <!-- ENDIF -->            */
/*                 <ul class="topiclist forums">*/
/*         <!-- ENDIF -->*/
/*         <!-- EVENT forumlist_body_category_header_after -->*/
/*     */
/*         <!-- IF not forumrow.S_IS_CAT -->*/
/*             <!-- EVENT forumlist_body_forum_row_before -->*/
/*             <li class="row<!-- IF forumrow.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/*                 <!-- EVENT forumlist_body_forum_row_prepend -->*/
/*                 <dl class="icon {forumrow.FORUM_IMG_STYLE}">*/
/*                     <dt title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/*                         <!-- IF forumrow.S_UNREAD_FORUM --><a href="{forumrow.U_VIEWFORUM}" class="icon-link"></a><!-- ENDIF -->*/
/*                         <div class="list-inner">*/
/*                             <!-- IF S_ENABLE_FEEDS and forumrow.S_FEED_ENABLED --><!-- <a class="feed-icon-forum" title="{L_FEED} - {forumrow.FORUM_NAME}" href="{U_FEED}?f={forumrow.FORUM_ID}"><img src="{T_THEME_PATH}/images/feed.gif" alt="{L_FEED} - {forumrow.FORUM_NAME}" /></a> --><!-- ENDIF -->*/
/*     */
/*                             <!-- IF forumrow.FORUM_IMAGE --><span class="forum-image">{forumrow.FORUM_IMAGE}</span><!-- ENDIF -->*/
/*                             <a href="{forumrow.U_VIEWFORUM}" class="forumtitle">{forumrow.FORUM_NAME}</a>*/
/*                             <!-- IF forumrow.FORUM_DESC --><br />{forumrow.FORUM_DESC}<!-- ENDIF -->*/
/*                             <!-- IF forumrow.MODERATORS -->*/
/*                                 <br /><strong>{forumrow.L_MODERATOR_STR}{L_COLON}</strong> {forumrow.MODERATORS}*/
/*                             <!-- ENDIF -->*/
/*                             <!-- IF .forumrow.subforum and forumrow.S_LIST_SUBFORUMS -->*/
/*                                 <!-- EVENT forumlist_body_subforums_before -->*/
/*                                 <br /><strong>{forumrow.L_SUBFORUM_STR}{L_COLON}</strong>*/
/*                                 <!-- BEGIN subforum -->*/
/*                                     <a href="{forumrow.subforum.U_SUBFORUM}" class="subforum<!-- IF forumrow.subforum.S_UNREAD --> unread<!-- ELSE --> read<!-- ENDIF -->" title="<!-- IF forumrow.subforum.S_UNREAD -->{L_UNREAD_POSTS}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{forumrow.subforum.SUBFORUM_NAME}</a><!-- IF not forumrow.subforum.S_LAST_ROW -->{L_COMMA_SEPARATOR}<!-- ENDIF -->*/
/*                                 <!-- END subforum -->*/
/*                                 <!-- EVENT forumlist_body_subforums_after -->*/
/*                             <!-- ENDIF -->*/
/*     */
/*                             <!-- IF not S_IS_BOT -->*/
/*                             <div class="responsive-show" style="display: none;">*/
/*                                 <!-- IF forumrow.CLICKS -->*/
/*                                     {L_REDIRECTS}{L_COLON} <strong>{forumrow.CLICKS}</strong>*/
/*                                 <!-- ELSEIF not forumrow.S_IS_LINK and forumrow.TOPICS -->*/
/*                                     {L_TOPICS}{L_COLON} <strong>{forumrow.TOPICS}</strong>*/
/*                                 <!-- ENDIF -->*/
/*                             </div>*/
/*                             <!-- ENDIF -->*/
/*                         </div>*/
/*                     </dt>*/
/*                     <!-- IF forumrow.CLICKS -->*/
/*                         <dd class="redirect"><span>{L_REDIRECTS}{L_COLON} {forumrow.CLICKS}</span></dd>*/
/*                     <!-- ELSEIF not forumrow.S_IS_LINK -->*/
/*                         <dd class="topics">{forumrow.TOPICS} <dfn>{L_TOPICS}</dfn></dd>*/
/*                         <dd class="posts">{forumrow.POSTS} <dfn>{L_POSTS}</dfn></dd>*/
/*                         <dd class="lastpost"><span>*/
/*                             <!-- IF forumrow.U_UNAPPROVED_TOPICS -->*/
/*                                 <a href="{forumrow.U_UNAPPROVED_TOPICS}">{UNAPPROVED_IMG}</a>*/
/*                             <!-- ELSEIF forumrow.U_UNAPPROVED_POSTS -->*/
/*                                 <a href="{forumrow.U_UNAPPROVED_POSTS}">{UNAPPROVED_POST_IMG}</a>*/
/*                             <!-- ENDIF -->*/
/*                             <!-- IF forumrow.LAST_POST_TIME --><dfn>{L_LAST_POST}</dfn>*/
/*                             <!-- IF forumrow.S_DISPLAY_SUBJECT -->*/
/*                                 <!-- EVENT forumlist_body_last_post_title_prepend -->*/
/*                                 <a href="{forumrow.U_LAST_POST}" title="{forumrow.LAST_POST_SUBJECT}" class="lastsubject">{forumrow.LAST_POST_SUBJECT_TRUNCATED}</a> <br />*/
/*                             <!-- ENDIF --> */
/*                             {L_POST_BY_AUTHOR} {forumrow.LAST_POSTER_FULL}*/
/*                             <!-- IF not S_IS_BOT --><a href="{forumrow.U_LAST_POST}">{LAST_POST_IMG}</a> <!-- ENDIF --><br />{forumrow.LAST_POST_TIME}<!-- ELSE -->{L_NO_POSTS}<br />&nbsp;<!-- ENDIF --></span>*/
/*                         </dd>*/
/*                     <!-- ELSE -->*/
/*                         <dd>&nbsp;</dd>*/
/*                     <!-- ENDIF -->*/
/*                 </dl>*/
/*                 <!-- EVENT forumlist_body_forum_row_append -->*/
/*             </li>*/
/*             <!-- EVENT forumlist_body_forum_row_after -->*/
/*         <!-- ENDIF -->*/
/*     */
/*         <!-- IF forumrow.S_LAST_ROW -->*/
/*                 </ul>*/
/*     */
/*                 </div>*/
/*             </div>*/
/*         <!-- EVENT forumlist_body_last_row_after -->*/
/*         <!-- ENDIF -->*/
/*     */
/*     <!-- BEGINELSE -->*/
/*         <div class="panel">*/
/*             <div class="inner">*/
/*             <strong>{L_NO_FORUMS}</strong>*/
/*             </div>*/
/*         </div>*/
/*     <!-- END forumrow -->*/
/* </div>*/
