<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2018/7/12
 * Time: 下午2:36
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class AbstractController extends Controller
{
    protected function renderReact()
    {
        $initialState = [];

        return $this->render('@App/App/index.html.twig', [
            'title' => 'symfony demo',
            'initialState' => $initialState,
        ]);
    }
}