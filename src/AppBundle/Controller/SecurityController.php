<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2018/7/15
 * Time: 22:54
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends AbstractController
{
    /**
     * @Route("/app/login", name="app.security.login")
     * @return Response
     */
    public function loginAction()
    {
        return $this->renderReact();
    }

    /**
     * @Route("/app/logout", name="app.security.logout")
     */
    public function logoutAction(){}

    /**
     * @Route("/app/login_check", name="app.security.login_check")
     */
    public function loginCheckAction(){}
}