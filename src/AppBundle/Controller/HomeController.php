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
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/app", name="app.home")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return $this->render('@App/App/index.html.twig', [
            'title' => 'symfony demo'
        ]);
    }
}