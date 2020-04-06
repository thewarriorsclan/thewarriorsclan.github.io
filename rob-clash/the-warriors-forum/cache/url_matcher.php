<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/chat')) {
            // spaceace_ajaxchat_popup
            if ($pathinfo === '/chat/popup') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'popup',  '_route' => 'spaceace_ajaxchat_popup',);
            }

            // spaceace_ajaxchat_archive
            if ($pathinfo === '/chat/archive') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'archive',  '_route' => 'spaceace_ajaxchat_archive',);
            }

            // spaceace_ajaxchat_edit
            if (0 === strpos($pathinfo, '/chat/edit') && preg_match('#^/chat/edit/(?P<chat_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'spaceace_ajaxchat_edit')), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:editAction',));
            }

            // spaceace_ajaxchat_read
            if ($pathinfo === '/chat/read') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:readAction',  '_route' => 'spaceace_ajaxchat_read',);
            }

            // spaceace_ajaxchat_add
            if ($pathinfo === '/chat/add') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:addAction',  '_route' => 'spaceace_ajaxchat_add',);
            }

            // spaceace_ajaxchat_delete
            if ($pathinfo === '/chat/delete') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:delAction',  '_route' => 'spaceace_ajaxchat_delete',);
            }

            // spaceace_ajaxchat_quote
            if ($pathinfo === '/chat/quotemessage') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:chat_quote',  '_route' => 'spaceace_ajaxchat_quote',);
            }

            // spaceace_ajaxchat_chat
            if ($pathinfo === '/chat') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'chat',  '_route' => 'spaceace_ajaxchat_chat',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
