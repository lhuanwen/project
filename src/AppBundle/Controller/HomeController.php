<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2018/6/29
 * Time: 下午12:47
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/app", name="app.home")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return new Response('<html><body>App page!</body></html>');
//        return $this->renderReact();
    }
}