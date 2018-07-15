<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2018/7/15
 * Time: 20:35
 */

namespace CommonBundle\Security\Guard;


use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

class FormLoginAuthenticator extends AbstractFormLoginAuthenticator
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * FormLoginAuthenticator constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @inheritdoc
     */
    protected function getLoginUrl()
    {
        return $this->container->get('router')->generate('app.security.login');
    }

    /**
     * @inheritdoc
     */
    public function getCredentials(Request $request)
    {
        if ($request->getPathInfo() !== $this->container->get('router')->generate('app.security.login_check')) {
            return null;
        }

        $username = $request->request->get('username');
        $password = $request->request->get('password');

        return [
            'username' => $username,
            'password' => $password
        ];
    }

    /**
     * @inheritdoc
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        return $userProvider->loadUserByUsername($credentials['username']);
    }

    /**
     * @inheritdoc
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        $password = $credentials['password'];
        return $this->container->get('security.password_encoder')->isPasswordValid($user, $password);
    }

}