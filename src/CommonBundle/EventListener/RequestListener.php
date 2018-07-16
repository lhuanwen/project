<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2018/7/16
 * Time: 下午3:17
 */

namespace CommonBundle\EventListener;


use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * Class RequestListener
 * @package CommonBundle\EventListener
 */
class RequestListener
{
    /**
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
    }
}