<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2018/7/12
 * Time: 下午2:36
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

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

    /**
     * @param array       $data
     * @param string|null $message
     *
     * @return JsonResponse
     */
    static public function createSuccessJSONResponse(array $data = [], string $message = null): JsonResponse
    {
        return new JsonResponse([
            'code' => 0,
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * @param string $message
     * @param int    $code
     * @param array  $data
     *
     * @return JsonResponse
     */
    static public function createFailureJSONResponse(string $message, int $code = -1, array $data = [])
    {
        return new JsonResponse([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]);
    }

}